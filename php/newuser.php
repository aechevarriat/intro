<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>REPORT</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
	
		
			<form method="post" action="login.html">
	
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
$dbc = mysqli_connect('172.16.2.40', 'alicia', 'alicia', 'user_db')
or die('Error connecting to MySQL server.');
$query = "INSERT INTO user (first_name, last_name, user, password) " .
"VALUES (' $firstname', ' $lastname', '$user', '$password')";
$result = mysqli_query($dbc, $query)
or die('Error querying database.');
mysqli_close($dbc);

?>

</body>

</html>
