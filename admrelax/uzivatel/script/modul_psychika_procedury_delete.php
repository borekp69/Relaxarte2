<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");
$psychika_procedury_id= htmlspecialchars(trim("$_POST[psychika_procedury_id]"));

//echo 'ID procedura:'.$psychika_procedury_id.'<br>';

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "DELETE FROM psychika_procedury WHERE psychika_procedury_id = $psychika_procedury_id LIMIT 1";
 
if ($conn->query($sql) === TRUE) {    
} else {
echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
}  

?>