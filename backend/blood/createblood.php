<?php $link = mysqli_connect("localhost", "root", "semah1992", "bdachref");
 header("Access-Control-Allow-Origin: *");
$requestdata = file_get_contents("php://input");
$request = json_decode($requestdata);
 $_POST = json_decode(file_get_contents('php://input'), true);
 
$id_bank=$_POST['id_bank'];
$Op=$_POST['Op'];
$Om=$_POST['Om'];
$Ap=$_POST['Ap'];
$Am=$_POST['Am'];
$Bp=$_POST['Bp'];
$Bm=$_POST['Bm'];
$ABm=$_POST['ABm'];
$ABp=$_POST['ABp'];



    $sql = 'INSERT INTO blood (id_bank,Op,Om,Ap,Am,Bp,Bm,ABp,ABm) values 	("'.$id_bank.'","'.$Op.'","' .$Om. '","'.$Ap.'","'.$Am.'","'.$Bp.'","' .$Bm. '","'.$ABp.'","'.$ABm.'")';
   
 if(mysqli_query($link, $sql)){
	
}
else  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);


?>


