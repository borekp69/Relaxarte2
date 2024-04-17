<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");
$tcm_procedury_id= htmlspecialchars(trim("$_POST[tcm_procedury_id]"));
$prihlaseny_uzivatel_form = addslashes(htmlspecialchars(trim("$_POST[prihlaseny_uzivatel]")));

//echo '<br>ID procedura:'.$tcm_procedury_id.'<br>';

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "DELETE FROM tcm_procedury WHERE tcm_procedury_id = $tcm_procedury_id LIMIT 1";
 
if ($conn->query($sql) === TRUE) {    
} else {
echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
}  

?>