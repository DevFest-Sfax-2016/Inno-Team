<?php $link = mysqli_connect("localhost", "root", "semah1992", "bdachref");
 header("Access-Control-Allow-Origin: *");
$requestdata = file_get_contents("php://input");
$request = json_decode($requestdata);
  $_POST = json_decode(file_get_contents('php://input'), true);

  
$nom= $_POST['nom'];
$prenom= $_POST['prenom'];
$ville= $_POST['ville'];
$pays= $_POST['pays'];
$tel= $_POST['tel'];
$type_sang= $_POST['type_sang'];
$datenaiss= $_POST['datenaiss'];
$alcool= $_POST['alcool'];
$fumeur= $_POST['fumeur'];
$mail= $_POST['mail'];
$pwd  = $_POST['pwd'];

    $sql = 'INSERT INTO patience (id,nom,prenom,ville,pays,tel,type_sang,datenaiss,alcool,fumeur,mail,pwd) values 	("","' . $nom . '","' . $prenom . '","' .$ville . '","'.$pays.'","'.$tel.'","'.$type_sang.'","'.$datenaiss.'","'.$alcool.'","'.$fumeur.'","'.$mail.'","'.$pwd.'")';
   
 if(mysqli_query($link, $sql)){
	
}
else  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);


?>


