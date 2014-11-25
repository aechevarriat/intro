
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
$user = $_POST['user'];
echo "user: $user<br/>";
$password = $_POST['password'];
echo "password: $password<br/>";
?>

<?php
$dbc = mysqli_connect('172.16.2.40', 'alicia', 'alicia', 'user_db')
or die('Error connecting to MySQL server.');
$query="SELECT user,password FROM user where user='$user'";
echo "$query<br>";

$result = mysql_query($dbc, $query);
$row = mysql_fetch_array($result);
echo "row el password que ve de la base de dades és:".$row['password']."<br/>";
echo "el password que ens ve del formulari és:$password<br>";
if ($password==$row['password']){
		echo "LOGIN CORRECTE<BR>";
	}else{
		echo "LOGIN INCORRECTE<BR>";
	}
?>	
	
</body>

</html>
