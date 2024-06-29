<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");

require "sifrovani_dat.php";
$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));
$posilovani_form = addslashes(htmlspecialchars(trim("$_POST[posilovani]")));
$pravidelnost_posilovani_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_posilovani]")));

echo 'posilovani: '.$posilovani_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_posilovani_form;

?>