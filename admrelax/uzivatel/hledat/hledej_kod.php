<?php
require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php'; 

define('DB_SERVER', 'a025um.forpsi.com');
define('DB_USER', 'f136355');
define('DB_PASSWORD', 'RuS6t2DS');
define('DB_NAME', 'f136355');

require "../../sifrovani_dat.php";



if (isset($_GET['term'])){
$hledat = $_GET['term'];
$hledat = trim($hledat);

	$return_arr = array();

	try {
	    $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $stmt = $conn->prepare("SELECT uzivatel_id,uzivatel_login ,uzivatel_prijmeni, uzivatel_jmeno, uzivatel_mesto, uzivatel_ulice, uzivatel_cp   
        FROM uzivatel WHERE uzivatel_role = '3' AND  uzivatel_login LIKE '%".$hledat."%'");
	    $stmt->execute(array('term' => '%'.$_GET['term'].'%'));
	    while($row = $stmt->fetch()) {
	    $return_arr[] =  $row['uzivatel_login'].' - '.encrypt_decrypt('decrypt', $row["uzivatel_prijmeni"]).' '.encrypt_decrypt('decrypt', $row["uzivatel_jmeno"]).' ('.encrypt_decrypt('decrypt', $row["uzivatel_mesto"]).' - '.encrypt_decrypt('decrypt', $row["uzivatel_ulice"]).' '.$row["uzivatel_cp"].')';
   	    }

	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}


    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);
}




?>