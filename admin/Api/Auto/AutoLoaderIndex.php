<?php

spl_autoload_register('AppAutoLoader');

function AppAutoLoader($admins)
{
    // Define base directories
    $baseDirs = [
       "./../Auto/",
        "./../Config/",
        "./../Controller/",
        "./../Hook/",
        "./../Model/",
        "./../View/",
    ];

    // Define file extension
    $extension = ".php";

    // Sanitize class name to prevent directory traversal
    $admins = str_replace(['..', '/', '\\'], '', $admins);

    // Attempt to load the class file from each base directory
    foreach ($baseDirs as $baseDir) {
        $file = $baseDir . $admins . $extension;
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
}
