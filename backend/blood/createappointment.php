<?php $link = mysqli_connect("localhost", "root", "semah1992", "bdachref");
 header("Access-Control-Allow-Origin: *");
$requestdata = file_get_contents("php://input");
$request = json_decode($requestdata);
 $_POST = json_decode(file_get_contents('php://input'), true);
 
$appDate=$_POST['appDate'];
$appTime=$_POST['appTime'];
$id_bank=$_POST['id_bank'];
$userId=$_POST['userId'];


    $sql = 'INSERT INTO appointment (mail,id_bank,appdate,apptime) values 	("'.$userId.'","'.$id_bank.'","' .$appDate. '","'.$appTime.'")';
   
 if(mysqli_query($link, $sql)){
	
}
else  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);


?>


