<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");

require "sifrovani_dat.php";
$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));
$posilovani_form = addslashes(htmlspecialchars(trim("$_POST[posilovani]")));
$pravidelnost_posilovani_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_posilovani]")));
$florbal_form = addslashes(htmlspecialchars(trim("$_POST[florbal]")));
$pravidelnost_florbal_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_florbal]")));
$bojove_sporty_form = addslashes(htmlspecialchars(trim("$_POST[bojove_sporty]")));
$pravidelnost_bojove_sporty_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_bojove_sporty]")));
$hokej_form = addslashes(htmlspecialchars(trim("$_POST[hokej]")));
$pravidelnost_hokej_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_hokej]")));
$fotbal_form = addslashes(htmlspecialchars(trim("$_POST[fotbal]")));
$pravidelnost_fotbal_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_fotbal]")));

$volejbal_form = addslashes(htmlspecialchars(trim("$_POST[volejbal]")));
$pravidelnost_volejbal_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_volejbal]")));




echo 'posilovani: '.$posilovani_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_posilovani_form.'<br>';
echo 'florbal: '.$florbal_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_florbal_form.'<br>';
echo 'bojove sporty: '.$bojove_sporty_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_bojove_sporty_form.'<br>';
echo 'hokej: '.$hokej_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_hokej_form.'<br>';
echo 'fotbal: '.$fotbal_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_fotbal_form.'<br>';
echo 'volejbal: '.$volejbal_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_volejbal_form.'<br>';



?>