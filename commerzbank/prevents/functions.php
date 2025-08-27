<?php
// Helper functions for the application

function update_ini($data, $file) {
    // Simple function to update INI file
    $content = '';
    foreach ($data as $key => $value) {
        $content .= "$key = $value\n";
    }
    return file_put_contents($file, $content);
}
?>
