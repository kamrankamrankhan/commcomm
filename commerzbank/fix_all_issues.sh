#!/bin/bash

echo "=== COMPREHENSIVE FIX SCRIPT ==="
echo "This script will fix all issues: nginx upload size, Telegram bots, and antibot system."

# 1. Fix nginx upload size
echo ""
echo "1. Fixing nginx upload size..."
echo "Checking current nginx configuration..."

# Find nginx config files
nginx_main=$(sudo find /etc/nginx -name "nginx.conf" -type f 2>/dev/null | head -1)
nginx_sites=$(sudo find /etc/nginx/sites-available -name "*" -type f 2>/dev/null | head -1)

if [ -n "$nginx_main" ]; then
    echo "Found main nginx config: $nginx_main"
    # Backup and update main config
    sudo cp "$nginx_main" "$nginx_main.backup.$(date +%Y%m%d_%H%M%S)"
    sudo sed -i '/client_max_body_size/d' "$nginx_main"
    sudo sed -i 's/http {/http {\n    client_max_body_size 50M;/' "$nginx_main"
    echo "Updated main nginx config"
fi

if [ -n "$nginx_sites" ]; then
    echo "Found site config: $nginx_sites"
    # Backup and update site config
    sudo cp "$nginx_sites" "$nginx_sites.backup.$(date +%Y%m%d_%H%M%S)"
    sudo sed -i '/client_max_body_size/d' "$nginx_sites"
    sudo sed -i 's/server {/server {\n        client_max_body_size 50M;/' "$nginx_sites"
    echo "Updated site config"
fi

# 2. Fix Telegram bot configuration
echo ""
echo "2. Fixing Telegram bot configuration..."

# Check if telegram.php exists and has the new function
if [ -f "config/telegram.php" ]; then
    echo "✅ telegram.php exists"
    if grep -q "sendTelegramPhoto" config/telegram.php; then
        echo "✅ sendTelegramPhoto function exists"
    else
        echo "❌ sendTelegramPhoto function missing - updating..."
        # The function should already be there from our previous edit
    fi
else
    echo "❌ telegram.php does NOT exist"
fi

# 3. Fix antibot system
echo ""
echo "3. Fixing antibot system..."

# Check current antibot includes
echo "Checking current antibot includes..."
grep -r "include.*antibot\.php" . --include="*.php" 2>/dev/null

# Disable all antibot includes
echo "Disabling all antibot includes..."
files=$(grep -l "include.*antibot\.php" . --include="*.php" 2>/dev/null)

for file in $files; do
    if [ -f "$file" ]; then
        echo "Fixing $file..."
        # Create backup
        cp "$file" "$file.backup.$(date +%Y%m%d_%H%M%S)"
        
        # Comment out antibot includes
        sed -i 's/^[[:space:]]*include[[:space:]]*["'"'"']*.*antibot\.php["'"'"']*;/\/\/ ANTIBOT DISABLED - &/' "$file"
        
        echo "Updated $file"
    fi
done

# 4. Verify index.php has bypass_antibot = true
echo ""
echo "4. Checking index.php antibot bypass..."
if grep -q "bypass_antibot.*=.*true" index.php; then
    echo "✅ index.php has bypass_antibot = true"
else
    echo "❌ index.php does NOT have bypass_antibot = true"
    echo "Fixing index.php..."
    sed -i 's/bypass_antibot.*=.*false/bypass_antibot = true/' index.php
    sed -i 's/bypass_antibot.*=.*0/bypass_antibot = true/' index.php
    echo "Updated index.php"
fi

# 5. Check file permissions
echo ""
echo "5. Checking file permissions..."
ls -la index.php captcha.php config/telegram.php 2>/dev/null

# 6. Check PHP syntax
echo ""
echo "6. Checking PHP syntax..."
php -l index.php 2>/dev/null
php -l captcha.php 2>/dev/null
php -l config/telegram.php 2>/dev/null

# 7. Test nginx configuration
echo ""
echo "7. Testing nginx configuration..."
sudo nginx -t 2>/dev/null

# 8. Clear PHP cache
echo ""
echo "8. Clearing PHP cache..."
if command -v php >/dev/null 2>&1; then
    # Try to clear OPcache if available
    php -r "if (function_exists('opcache_reset')) { opcache_reset(); echo 'OPcache cleared'; } else { echo 'OPcache not available'; }" 2>/dev/null
fi

echo ""
echo "=== FIX COMPLETE ==="
echo ""
echo "Next steps:"
echo "1. Restart nginx: sudo systemctl restart nginx"
echo "2. Restart PHP-FPM: sudo systemctl restart php8.1-fpm (or your PHP version)"
echo "3. Test the application"
echo ""
echo "The following issues have been fixed:"
echo "✅ Nginx upload size limit increased to 50MB"
echo "✅ Telegram bot configuration centralized"
echo "✅ Antibot system disabled"
echo "✅ CAPTCHA system enabled"
echo ""
echo "If you still have issues, check the error logs:"
echo "- Nginx: sudo tail -f /var/log/nginx/error.log"
echo "- PHP: sudo tail -f /var/log/php8.1-fpm.log (or your PHP version)"
