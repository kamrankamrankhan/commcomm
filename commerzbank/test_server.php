<?php
echo "Server is working!";
echo "<br>Current directory: " . getcwd();
echo "<br>Files in directory: ";
print_r(scandir('.'));
?>
