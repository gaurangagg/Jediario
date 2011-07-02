<html>
<head>
<title>Rapid Notezz WebAPP </title>
<style>
body{
	background-color:white;
color:grey;
}
h1
{
color:black;
font-family:arial;

}

p{
font-family:arial;
}


</style>

</head>
<body>
<center>
<h1> Rapid Notezz </h1></center>

<hr>
<form action="./lol1.php" method="POST">
Title <input type="text" name="title" ><br>
Tags  <input type="text" name="tags" ><br>
Body  <textarea rows="10" cols="50" name="body" ></textarea><br>
Domain  <input type="text" name="area_of_field" ><br>
<input type="submit" ><br>

</form>
</body>
</html>

<?php


$con = mysql_connect("localhost","gnaruag","blah");

if(!$con)
{
	echo" you are fucked up ";
}


mysql_select_db("gnaruag",$con);

$lol= "INSERT INTO blogs(title,body,area_of_field,tags) VALUES('$_POST[title]','$_POST[body]','$_POST[area_of_field]','$_POST[tags]')";

if(!mysql_query($lol,$con))
{
echo"Dude error in query# insertion section";

    die('Invalid query: ' . mysql_error());
}
echo"done";

mysql_close();

?>



