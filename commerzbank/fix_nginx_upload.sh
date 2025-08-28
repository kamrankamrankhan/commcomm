#!/bin/bash

echo "=== NGINX UPLOAD SIZE FIX SCRIPT ==="
echo "This script will fix the '413 Request Entity Too Large' error."

# Check current nginx configuration
echo ""
echo "1. Checking current nginx configuration..."
sudo nginx -t

# Find nginx config files
echo ""
echo "2. Finding nginx configuration files..."
echo "Main config:"
sudo find /etc/nginx -name "nginx.conf" -type f 2>/dev/null

echo ""
echo "Site configs:"
sudo find /etc/nginx/sites-available -name "*" -type f 2>/dev/null
sudo find /etc/nginx/conf.d -name "*.conf" -type f 2>/dev/null

# Check current client_max_body_size
echo ""
echo "3. Checking current client_max_body_size settings..."
sudo grep -r "client_max_body_size" /etc/nginx/ 2>/dev/null

# Create backup of main nginx.conf
echo ""
echo "4. Creating backup of nginx.conf..."
sudo cp /etc/nginx/nginx.conf /etc/nginx/nginx.conf.backup.$(date +%Y%m%d_%H%M%S)

# Add client_max_body_size to http block if not present
echo ""
echo "5. Adding client_max_body_size to nginx.conf..."
if ! sudo grep -q "client_max_body_size" /etc/nginx/nginx.conf; then
    echo "Adding client_max_body_size 50M to http block..."
    sudo sed -i '/http {/a\    client_max_body_size 50M;' /etc/nginx/nginx.conf
    echo "✅ Added client_max_body_size 50M to nginx.conf"
else
    echo "⚠️ client_max_body_size already exists in nginx.conf"
fi

# Check site-specific configs
echo ""
echo "6. Checking site-specific configurations..."
site_configs=$(sudo find /etc/nginx/sites-available -name "*" -type f 2>/dev/null)

for config in $site_configs; do
    echo "Checking $config..."
    if ! sudo grep -q "client_max_body_size" "$config"; then
        echo "Adding client_max_body_size 50M to $config..."
        sudo sed -i '/server {/a\    client_max_body_size 50M;' "$config"
        echo "✅ Added client_max_body_size 50M to $config"
    else
        echo "⚠️ client_max_body_size already exists in $config"
    fi
done

# Test configuration
echo ""
echo "7. Testing nginx configuration..."
if sudo nginx -t; then
    echo "✅ nginx configuration test passed"
    
    echo ""
    echo "8. Reloading nginx..."
    sudo systemctl reload nginx
    echo "✅ nginx reloaded successfully"
else
    echo "❌ nginx configuration test failed"
    echo "Please check the configuration manually"
    exit 1
fi

echo ""
echo "=== FIX COMPLETE ==="
echo "Upload size limit increased to 50MB"
echo "You can now upload larger images"
echo ""
echo "To verify the change, check:"
echo "sudo grep -r 'client_max_body_size' /etc/nginx/"
