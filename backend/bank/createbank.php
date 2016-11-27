<?php $link = mysqli_connect("localhost", "root", "semah1992", "bdachref");
 header("Access-Control-Allow-Origin: *");
$requestdata = file_get_contents("php://input");
$request = json_decode($requestdata);
 $_POST = json_decode(file_get_contents('php://input'), true);
 

$name=$_POST['name'];
$long=$_POST['long'];
$lat=$_POST['lat'];
$adresse=$_POST['adresse'];
$img=$_POST['img'];




    $sql = 'INSERT INTO bank (id_bank,name,long,lat,adresse,img) values 	("''","'.$name.'","' .$long. '","'.$lat.'","'.$adresse.'","'.$img.'","' .$Bm. '")';
   
 if(mysqli_query($link, $sql)){
	
}
else  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);


?>


