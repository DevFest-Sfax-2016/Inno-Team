 <?php 
 
 
 header("Access-Control-Allow-Origin: *");
 require_once '../config.php';
 $return_arr = array();
$mail=$_GET['mail'];
$pass=$_GET['pass'];
$fetch =mysql_query("SELECT * from patience where mail='$mail' and pwd='$pass'  ");

while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC)) {
    $row_array['id'] = $row['id'];
    $row_array['nom'] = $row['nom'];
    $row_array['prenom'] = $row['prenom'];
	 $row_array['ville'] = $row['ville'];
	  $row_array['pays'] = $row['pays'];
	   $row_array['tel'] = $row['tel'];
	    $row_array['type_sang'] = $row['type_sang'];
		 $row_array['datenaiss'] = $row['datenaiss'];
		  $row_array['alcool'] = $row['alcool'];
		  $row_array['fumeur'] = $row['fumeur'];
		  $row_array['mail'] = $row['mail'];
		  $row_array['pwd'] = $row['pwd'];

    array_push($return_arr,$row_array);
}

echo json_encode($return_arr);
?>