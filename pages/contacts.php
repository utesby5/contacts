<?php 
// Read all the lines from the data file
$lines = file('data/contact.txt',FILE_IGNORE_NEW_LINES);

// Loop over the lines.
foreach ($lines as $line){
	// At this point, $line contains an entire line, with the information separated by commas (CSV data), split the line's data into pieces, which are currently separated by commas
	$contact_info = explode(',',$line);
	$first_name = $contact_info[0];
	$last_name = $contact_info[1];
	$name = "$first_name $last_name";
	
	$email = $contact_info[2];
	$phone = $contact_info[3];
	?>
	<div class="contact">
		<img src="http://placehold.it/100x100" alt="avatar" />
		<h3><?php echo $name; ?></h3>
		<p class="email"><?php echo$email; ?></p>
		<p class="phone"><?php echo$phone; ?></p>
	</div>	
<?php }?>	