<?php
$path = '/dir/testfile.php';
$file = 'sample-text.txt';

// Return Filename
echo basename($path); // testfile.php

// Return Filename without extension
echo basename($path, '.php'); // testfile

// Checking exist file
echo file_exists($file); // 1

// Check file size
echo filesize($file); // 6

// Reading data in file
echo file_get_contents($file); // Joshua

// Writing data to file
echo file_put_contents($file, '12345');

// Rename File
rename('sample-text2.txt', 'text2.txt');

// Delete File
unlink('text2.txt');

// Open File to Read
$handle = fopen($file, 'r'); // read
$data = fread($handle, filesize($file));
echo $data; // 12345

// Open FIle to Writing
$handle = fopen($file, 'w'); // write
$txt = 'Juan';
fwrite($handle, $txt);
fclose($handle);

// Copy data from file to another file
echo copy('sample-text.txt', 'sample-text2.txt');

// Creating Folder
mkdir('test-folder');

// Deleting Folder
rmdir('test-folder');
