 <?php 
  header("Access-Control-Allow-Origin: *");
 require_once '../config.php';
 $return_arr = array();

$fetch =mysql_query("SELECT * from user  where etat_user='Valide' and nom_user <>''");

while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC)) {
    $row_array['id_user'] = $row['id_user'];
    $row_array['nom_user'] = $row['nom_user'];
    $row_array['prenom_user'] = $row['prenom_user'];
	 $row_array['date_naiss_user'] = $row['date_naiss_user'];
	  $row_array['cin_user'] = $row['cin_user'];
	   $row_array['numtel_user'] = $row['numtel_user'];
	    $row_array['ville'] = $row['ville'];
		 $row_array['photo_user'] = $row['photo_user'];
		  $row_array['type_user'] = $row['type_user'];
		  $row_array['mail_user'] = $row['mail_user'];
		  $row_array['mot_passe_user'] = $row['mot_passe_user'];

    array_push($return_arr,$row_array);
}

echo json_encode($return_arr);
?>