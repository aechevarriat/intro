<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>REPORT</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
	
	
<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$user = $_POST['user'];
$password = $_POST['password'];
?>

<h1>Thanks for submitting the form.</h1>
<p>First name: <?php echo $firstname;?></p>
<p>Last name: <?php echo $lastname;?></p>
<p>User: <?php echo $user;?></p>
<p>Password: <?php echo $password;?></p>

<input type="submit" value="Report Abduction" name="submit" />

<?php
$dbc = mysqli_connect('172.30.10.193', 'guillem', 'guillem', 'aliendatabase')
or die('Error connecting to MySQL server.');
$query = "INSERT INTO user (first_name, last_name, user, password) " .
"VALUES (' $firstname', ' $lastname', '3 days ago', '1 day', 'four', 'green with six tentacles', " .
"'We just talked and played with a dog', 'yes', 'I may have seen your dog. Contact me.', " .
"'sally@gregs-list.net')";
$result = mysqli_query($dbc, $query)
or die('Error querying database.');
mysqli_close($dbc);
?>

</body>

</html>
