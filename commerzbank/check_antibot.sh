#!/bin/bash

echo "Checking for any remaining antibot includes..."

# Search for antibot includes in all PHP files
echo "=== Searching for antibot includes ==="
grep -r "include.*antibot\.php" . --include="*.php" 2>/dev/null

echo ""
echo "=== Searching for antibot includes (case insensitive) ==="
grep -ri "include.*antibot" . --include="*.php" 2>/dev/null

echo ""
echo "=== Checking if antibot.php is being loaded ==="
grep -r "antibot\.php" . --include="*.php" 2>/dev/null

echo ""
echo "=== Checking session_start calls ==="
grep -r "session_start" . --include="*.php" 2>/dev/null
