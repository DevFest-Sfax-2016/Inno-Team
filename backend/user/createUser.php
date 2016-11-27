<?php $link = mysqli_connect("localhost", "root", "semah1992", "bdachref");
 header("Access-Control-Allow-Origin: *");

$request = json_decode($requestdata);
 
$nom= $request['nom'];
$prenom= $request['prenom'];
$ville= $request['ville'];
$pays= $request['pays'];
$tel= $request['tel'];
$type_sang= $request['type_sang'];
$datenaiss= $request['datenaiss'];
$alcool= $request['alcool'];
$fumeur= $request['fumeur'];
$mail= $request['mail'];
$pwd  = $request['pwd'];

    $sql = 'INSERT INTO patience (id,nom,prenom,ville,pays,tel,type_sang,datenaiss,alcool,fumeur,mail,pwd) values 	("","' . $nom . '","' . $prenom . '","' .$ville . '","'.$pays.'","'.$tel.'","'.$type_sang.'","'.$datenaiss.'","'.$alcool.'","'.$fumeur.'","'.$mail.'","'.$pwd.'")';
   
 if(mysqli_query($link, $sql)){
	
}
else  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);


?>


