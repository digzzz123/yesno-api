<?php
include "../GG/connect.php";

$query= "SELECT * FROM pokedex WHERE 1 ";

$result= mysqli_query($conn,$query);
$arr= array();
while ($data = mysqli_fetch_array($result)) 
{
	echo "ID: ". $data['ID'] ."Name: ". $data['Name'] . "Type: ". $data ['Type'];
	echo "<br>";
}
?>