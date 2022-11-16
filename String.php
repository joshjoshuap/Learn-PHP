<?php

// String Methods
$name = "Joshua";
echo strlen($name); // 6
echo strtoupper($name); // JOSHUA
echo strtolower($name); // joshua
echo substr($name, 1, 3); // osh
echo strpos($name, 'J'); // 0
echo trim('Hello     World'); // Hello World
echo str_replace('Joshua', 'Jose', $name); // Jose
echo is_string($name); // 1

// Compress - Uncompressed
$sampleText = 'Hello There';
$compressedText = gzcompress($sampleText); // Compress random
echo $compressedText;
echo gzuncompress($compressedText); // Hello There

// Template Literals
$firstname = 'Joshua';
$lastname = 'P';
$fullname = "$firstname $lastname";
echo $fullname; // Joshua P
