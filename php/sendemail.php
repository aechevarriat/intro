
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>SEND EMAILS</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	
	
<?php

$subject=$_POST ["subject"];
$promo=$_POST ["promo"];

if (!empty($subject) && !empty($promo)){

	
echo "SUBJECT: $subject promo: $promo<br/>";
$dbc = mysqli_connect('172.16.2.40', 'alicia', 'alicia', 'elvis_store')
or die('Error connecting to MySQL server.');
$query="SELECT first_name,last_name,email from email_list";
$result = mysqli_query($dbc, $query);
?>



<table border="1" cellpadding="0" cellspacing="0">
	<tr>
		<th>&nbsp;</th>
		<th>First name</th>
		<th>Last name</th>
		<th>Email</th>
		<th>Subject</th>
		<th>Promoció</th>
	</tr>	

<?php
	$i=0;
	while($row = mysqli_fetch_array($result)){
	$i++;	
?>	
	<tr>
		<td><?= $i ?></td>
		<td><?= $row['first_name']?></td>
		<td><?= $row['last_name']?></td>
		<td><?= $row['email']?></td>
		<td><?= $subject?></td>
		<td><?= $promo?></td>
	</tr>
<?php
}
?>
</table>
<?php
mysqli_close($dbc);	

}else{
	echo "<h1>No has escrit cap subject o cap missatge!!</h1>";
}
?>

 <a href="sendemail.html">Tornar a enviar missatges</a> 

</body>

</html>
