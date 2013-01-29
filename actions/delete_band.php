<?php
session_start();
//read file into array
$lines = file('../data/bands.csv', FILE_IGNORE_NEW_LINES);
unset($lines[$_POST['linenum']]);
$data_string = implode("\n", $lines);
$f = fopen('../data/bands.csv','w');
fwrite($f, $data_string);
fclose($f);
//redirect to list of bands
$SESSION['message']="That band no longer exists.";
header('Location:../?p=list_bands');
?>