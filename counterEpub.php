<?php include 'paths.php';

//get tex from counter file
$amount = file_get_contents(paths::$counterEpubPath);
$amount++;

//write to and close counter file
$open = fopen(paths::$counterEpubPath, 'w');
fwrite($open, $amount);
fclose($open);

//?
$temp = paths::$epubPath;
header("Location: $temp");