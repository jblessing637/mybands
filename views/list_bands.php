<h2>All Bands</h2>
<table class="table table-striped">
<thead>
<tr>
<th>Name</th>
<th>Genre</th>
<th>Number of Albums</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php 
//read all lines of csv file into an array
$lines=file('data/bands.csv', FILE_IGNORE_NEW_LINES);
//counter variable for line number
$i=0;
//iterate over the array of lines
foreach($lines as $line) {
	$parts=explode(',',$line);
	$name = $parts[0];
	$genre=$parts[1];
	$num_albums=$parts[2];
	echo '<tr>';
	echo "<td>$name</td>";
	echo "<td>$genre</td>";
	echo "<td>$num_albums</td>";
	echo "<td><a href=\"./?p=form_edit_band&band=$i\" class=\"btn btn-warning\"><i class=\"icon-wrench icon-white\"></a></td><td><a href=\"actions/delete_band.php?linenum=$i\" class=\"btn btn-danger\"><i class=\"icon-trash icon-white\"></a></td>";
	echo'</tr>';
	$i++; //increment line number
}
?>
</tbody>
</table>