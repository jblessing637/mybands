<?php 
session_start();
//read file into array
$lines = file('../data/bands.csv', FILE_IGNORE_NEW_LINES);
//replace line with new values
$lines[$_POST['linenum']]="{$_POST['band_name']}, {$_POST['band_genre']}, {$_POST['band_numalbums']}";
//CREATE string to write to the file
$data_string = implode("\n", $lines);
//write the string to the file, overwriting current contents
$f = fopen('../data/bands.csv','w');
fwrite($f, $data_string);
fclose($f);
//redirect to list of bands
$SESSION['message']="Your band has been altered forevermore.";
header('Location:../?p=list_bands');
?>