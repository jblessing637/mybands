<?php session_start();?>
<?php
//validate that each piece of info was provided
if($_POST['band_name'] != '' && $_POST['band_genre'] != '' && $_POST['band_numalbums']!=''){
	//add this band to the csv file
	//1 open file for writing
	$f = fopen('../data/bands.csv','a');
	//2 write the new bands info to the file
	fwrite($f, "\n{$_POST['band_name']}, {$_POST['band_genre']}, {$_POST['band_numalbums']}");
	//3 close file
	fclose($f);
	//redirect to list of bands
	header('Location:../?p=list_bands');
}else {
	//store submitted data into session data
	$_SESSION['POST']=$_POST;
	//store error message in session data
	$SESSION['message']=array(
			'text'=>'Where\'s the stuff, man?',
			'type'=> 'success'
	);
	//redirect to form
	header('Location:../?p=form_add_band');
}
?>