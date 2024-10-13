<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache"); 
require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php';



$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));

$datum_treninku_zacatek_form = addslashes(htmlspecialchars(trim("$_POST[datum_treninku_zacatek]")));
$datum_treninku_konec_form = addslashes(htmlspecialchars(trim("$_POST[datum_treninku_konec]")));
$pocet_lekci_form = addslashes(htmlspecialchars(trim("$_POST[pocet_lekci]")));
$lektor_procedury_form = addslashes(htmlspecialchars(trim("$_POST[lektor_procedury]")));
$typ_treninku_form = addslashes(htmlspecialchars(trim("$_POST[typ_treninku]")));


$detail_zamereni_form = addslashes(htmlspecialchars(trim("$_POST[detail_zamereni]")));


echo "<b>uzivatel_id:</b> ".$uzivatel_id."<br>";
echo "<b>datum_treninku_zacatek_form:</b> ".$datum_treninku_zacatek_form."<br>";
echo "<b>datum_treninku_konec_form:</b> ".$datum_treninku_konec_form."<br>";
echo "<b>pocet_lekci_form:</b> ".$pocet_lekci_form."<br>";
echo "<b>lektor_procedury_form:</b> ".$lektor_procedury_form."<br>";
echo "<b>typ_treninku_form: </b>".$typ_treninku_form."<br>";

echo "<b>detail_zamereni_form:</b> ".$detail_zamereni_form."<br>";

?>