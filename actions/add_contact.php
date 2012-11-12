<?php 
extract($_POST);

// Open data file for appending
$file= fopen('../data/contacts.txt','a+');

// Create a timestamp
$timestamp = time();

// Append entered information to the file
fwrite($file,"$first_name,$last_name,$email,$phone,$timestamp\n");

// Close the data file
fclose($file);

// Redirect to the list of contacts
header('Location:../');
?>
