<?php include 'paths.php';

//get tex from counter file
$amount = file_get_contents(paths::$counterPdfPath);
$amount++;//add 1

//write to and close counter file
$open = fopen(paths::$counterPdfPath, 'w');
fwrite($open, $amount);
fclose($open);

//?
$temp = paths::$pdfPath;
header("Location: $temp");