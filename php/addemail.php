<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>LOGIN</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
		
<?php
$first_name = $_POST ["firstname"];
$last_name = $_POST ["lastname"];
$email = $_POST['email'];
?>

<h1>Thanks for submitting the form.</h1>
<p>First name: <?php echo $first_name;?></p>
<p>Last name: <?php echo $last_name;?></p>
<p>Your email address is <?php echo $email;?></p>

<?php
$dbc = mysqli_connect('172.16.2.40', 'alicia', 'alicia', 'elvis_store')
or die('Error connecting to MySQL server.');
$query = "INSERT INTO email_list(first_name, last_name, email) " .
"VALUES ('$first_name', '$last_name', " .
"'$email')";
echo "$query <br>";
$result = mysqli_query($dbc, $query)
or die('Error querying database.');
mysqli_close($dbc);

?>

</body>

</html>




