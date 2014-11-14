<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>untitled</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
	
<?php
$first_name = $_POST ["firstname"];
$last_name = $_POST ["lastname"];
$when_it_happened = $_POST['whenithappened'];
$how_long = $_POST['howlong'];
$how_many = $_POST['howmany'];
$alien_description = $_POST['aliendescription'];
$what_they_did = $_POST['whattheydid'];
$fang_spotted = $_POST['fangspotted'];
$email = $_POST['email'];
?>

<h1>Thanks for submitting the form.</h1>
<p>First name: <?php echo $first_name;?></p>
<p>Last name: <?php echo $last_name;?></p>
<p>You where abducted <?php  echo $when_it_happened;?> and where gone for <?php echo $how_long;?></p>
<p>How many did you see?<?php echo $how_many;?></p>
<p>Describe them: <?php echo $alien_description;?></p>
<p>What did they do to you? <?php echo $what_they_did;?></p>
<p>Was Fang there? <?php echo $fang_spotted;?></p>
<p>Your email address is <?php echo $email;?></p>

</body>

</html>
