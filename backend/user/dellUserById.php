<?php $link = mysqli_connect("localhost", "root", "", "stage");
 header("Access-Control-Allow-Origin: *");
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id = $request->id_user;




$sql = "delete from user where id_user='$id'";
if(mysqli_query($link, $sql)){
	
}
else  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);


?>


