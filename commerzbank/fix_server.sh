#!/bin/bash

echo "=== COMPREHENSIVE SERVER FIX SCRIPT ==="
echo "This script will fix all antibot system issues on your server."

# 1. Check current antibot includes
echo ""
echo "1. Checking current antibot includes..."
grep -r "include.*antibot\.php" . --include="*.php" 2>/dev/null

# 2. Disable all antibot includes
echo ""
echo "2. Disabling all antibot includes..."

# Find all PHP files that include antibot
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

# 3. Check for any remaining antibot references
echo ""
echo "3. Checking for any remaining antibot references..."
grep -r "antibot" . --include="*.php" 2>/dev/null

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

# 5. Check if captcha.php exists
echo ""
echo "5. Checking captcha.php..."
if [ -f "captcha.php" ]; then
    echo "✅ captcha.php exists"
else
    echo "❌ captcha.php does NOT exist"
fi

# 6. Check file permissions
echo ""
echo "6. Checking file permissions..."
ls -la index.php captcha.php 2>/dev/null

# 7. Check PHP syntax
echo ""
echo "7. Checking PHP syntax..."
php -l index.php 2>/dev/null
php -l captcha.php 2>/dev/null

echo ""
echo "=== FIX COMPLETE ==="
echo "Please restart your web server (nginx/apache) after these changes."
echo "You can restart nginx with: sudo systemctl restart nginx"
