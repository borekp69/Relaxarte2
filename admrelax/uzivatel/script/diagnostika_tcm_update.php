<?
header("Cache-control: private");

$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));

echo "ID: ". $uzivatel_id;
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";

$sql = "DELETE FROM tcm_psychika WHERE uzivatel_id =' $uzivatel_id'";
if ($conn->query($sql) === TRUE) {    
} else {
echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
}

$sql = "DELETE FROM tcm_telo WHERE uzivatel_id =' $uzivatel_id'";
if ($conn->query($sql) === TRUE) {    
} else {
echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
}
$conn->close();


?>



