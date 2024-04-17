<?
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");
session_start();
header("Cache-control: private");
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";

$uzivatel_id_session = $_SESSION['uzivatel_id_session'];
$uzivatel_login_session = $_SESSION['uzivatel_login_session'];
//-------- role Administrator ma ID 2 v tabulce ROLE

    $sql = "SELECT uzivatel_login, uzivatel_id FROM uzivatel 
    WHERE uzivatel_login = '$uzivatel_login_session' AND uzivatel_id = '$uzivatel_id_session' AND uzivatel_role = '2' LIMIT 1";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) == 0 || !$_SESSION['uzivatel_id_session'] || !$_SESSION['uzivatel_prijmeni_session'] || !$_SESSION['uzivatel_jmeno_session']){
    $cesta = 'http://app.relaxartecentrum.eu/index.php';
    session_destroy();
    header("Location:".$cesta);    
    }
?>