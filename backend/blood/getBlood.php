 <?php 
 
 
 header("Access-Control-Allow-Origin: *");
 require_once '../config.php';
 $return_arr = array();
$type=$_GET['type'];

$fetch =mysql_query("SELECT * from blood bl,bank bn where $type>0 and bl.id_bank=bn.id_bank  ");

while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC)) {
    $row_array['id_bank'] = $row['id_bank'];
    $row_array['name'] = $row['name'];
	  $row_array['adresse'] = $row['adresse'];
	   $row_array['img'] = $row['img'];

    array_push($return_arr,$row_array);
}

echo json_encode($return_arr);
?>