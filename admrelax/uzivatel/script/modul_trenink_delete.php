<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");
$treninkovy_plan_delete_id = htmlspecialchars(trim("$_POST[treninkovy_plan_delete_id]"));

//echo 'ID trenink:'.$treninkovy_plan_delete_id.'<br>';

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "DELETE FROM treninkovy_plan WHERE treninkovy_plan_id = $treninkovy_plan_delete_id. LIMIT 1";
 
if ($conn->query($sql) === TRUE) {    
} else {
echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
}  


//  ---- Dodelat mazání položek !!!!!!!!!!!!!!!!!!!




?>