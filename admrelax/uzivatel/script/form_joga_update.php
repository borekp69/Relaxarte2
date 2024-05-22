<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");

require "sifrovani_dat.php";
$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));
$lektor_form = addslashes(htmlspecialchars(trim("$_POST[lektor]")));
$joga_kurz_form = addslashes(htmlspecialchars(trim("$_POST[joga_kurz]")));
if (!$joga_kurz_form) { $joga_kurz_form = 0; }
$lektor_form = encrypt_decrypt('encrypt', $lektor_form);





?>