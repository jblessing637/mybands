<?php
//read all lines of csv file into an array
$lines=file('data/bands.csv', FILE_IGNORE_NEW_LINES);
//get the line assaociated with the band parameter in the qs
$band=explode(',', $lines[$_GET['band']]);
?>
<h2>Edit a Band</h2>
<form class="form-horizonatal" action="actions/edit_band.php" method="post">
<input type="hidden" name="linenum" value="<?php echo $_GET['band'];?>"/>
	<div class="control-group">
		<label class="control-label" for="band_name">Band Name</label>
		<div class="controls">
			<?php echo input('band_name', 'required', $band[0])?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="band_genre">Genre</label>
		<div class="controls">
			<?php echo input('band_genre', 'required', $band[1])?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="band_numalbums"># Albums</label>
		<div class="controls">
			<?php echo input('band_numalbums', 'required', $band[2])?>
		</div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-warning">
			<i class="icon-edit icon-white"></i> Edit Band
		</button>
		<button type="button" class="btn">Cancel</button>
	</div>
</form>