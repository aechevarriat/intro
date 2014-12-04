<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Esborrar el teu usuari</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	
<?php
$email = $_POST['email'];
?>
<h1>Gracias por haber formado parte de nuestra página,tu usuario ya está borrado</h1>	
<p>TU email es:<?php echo $email;?></p>
	
<?php
$dbc = mysqli_connect('172.16.2.40', 'alicia', 'alicia', 'elvis_store')
or die('Error connecting to MySQL server.');
$query = "DELETE FROM email_list WHERE email='$email' ";
echo "$query <br>";
$result = mysqli_query($dbc, $query)
or die('Error querying database.');
mysqli_close($dbc);

?>	
	
	
</body>

</html>
