<?php
include '../GG/Connect.php';

$query= "SELECT * FROM pokedex WHERE 1";

$result= mysqli_query($conn,$query);
$json= array();
while($row =mysqli_fetch_assoc($result))
{
	$json[]=$row;
}
 
header('Content-Type: application/json');
echo json_encode($json);
 