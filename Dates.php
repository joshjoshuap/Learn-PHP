<?php
// Time
echo date('h'); // Hour
echo date('i'); // Minutes
echo date('s'); // Seconds
date_default_timezone_set("UTC");
echo date_default_timezone_get();

// Dates
echo date('d'); // Day Number
echo date('m'); // Month Number
echo date('y'); // Year

echo date('D'); // Days
echo date('M'); // Month Name
echo date('Y'); // Full Year

// Formats
echo date('d/m/y'); // 1/01/22
echo date('D/M/Y'); // Monday/January/2022

// Timestamp
echo date('m/d/Y h:i:s'); // 11/16/2022 08:29:03
