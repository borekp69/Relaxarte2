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
$dynamicke_cviceni_form = addslashes(htmlspecialchars(trim("$_POST[dynamicke_cviceni]")));
$dynamicka_meditace_form = addslashes(htmlspecialchars(trim("$_POST[dynamicka_meditace]")));
$zdrave_jogove_protazeni_form = addslashes(htmlspecialchars(trim("$_POST[zdrave_jogove_protazeni]")));
$tajczy_cjuan_form = addslashes(htmlspecialchars(trim("$_POST[tajczy_cjuan]")));
$zvyseni_kondice_form = addslashes(htmlspecialchars(trim("$_POST[zvyseni_kondice]")));
$nabrani_svalove_hmoty_form = addslashes(htmlspecialchars(trim("$_POST[nabrani_svalove_hmoty]")));
$dychani_posileni_hss_form = addslashes(htmlspecialchars(trim("$_POST[dychani_posileni_hss]")));
$posileni_panevniho_dna_form = addslashes(htmlspecialchars(trim("$_POST[posileni_panevniho_dna]")));
$stabilizace_kloubu_form = addslashes(htmlspecialchars(trim("$_POST[stabilizace_kloubu]")));
$srovnani_patere_form = addslashes(htmlspecialchars(trim("$_POST[srovnani_patere]")));
$energeticka_harmonizace_form = addslashes(htmlspecialchars(trim("$_POST[energeticka_harmonizace]")));
$dysbalance_form = addslashes(htmlspecialchars(trim("$_POST[dysbalance]")));
$koordinace_form = addslashes(htmlspecialchars(trim("$_POST[koordinace]")));
$psychika_form = addslashes(htmlspecialchars(trim("$_POST[psychika]")));



//echo "<b>uzivatel_id:</b> ".$uzivatel_id."<br>";
//echo "<b>datum_treninku_zacatek_form:</b> ".$datum_treninku_zacatek_form."<br>";
//echo "<b>datum_treninku_konec_form:</b> ".$datum_treninku_konec_form."<br>";
//echo "<b>pocet_lekci_form:</b> ".$pocet_lekci_form."<br>";
//echo "<b>lektor_procedury_form:</b> ".$lektor_procedury_form."<br>";
//echo "<b>typ_treninku_form: </b>".$typ_treninku_form."<br>";
//echo "<b>detail_zamereni_form:</b> ".$detail_zamereni_form."<br>";
//echo "<b>dynamicke_cviceni_form:</b> ".$dynamicke_cviceni_form."<br>";
//echo "<b>dynamicka_meditace_form:</b> ".$dynamicka_meditace_form."<br>";
//echo "<b>zdrave_jogove_protazeni_form:</b> ".$zdrave_jogove_protazeni_form."<br>";
//echo "<b>tajczy_cjuan_form:</b> ".$tajczy_cjuan_form."<br>";
//echo "<b>zvyseni_kondice_form:</b> ".$zvyseni_kondice_form."<br>";
//echo "<b>nabrani_svalove_hmoty_form:</b> ".$nabrani_svalove_hmoty_form."<br>";
//echo "<b>dychani_posileni_hss_form:</b> ".$dychani_posileni_hss_form."<br>";
//echo "<b>posileni_panevniho_dna_form:</b> ".$posileni_panevniho_dna_form."<br>";
//echo "<b>stabilizace_kloubu_form:</b> ".$stabilizace_kloubu_form."<br>";
//echo "<b>srovnani_patere_form:</b> ".$srovnani_patere_form."<br>";
//echo "<b>energeticka_harmonizace_form:</b> ".$energeticka_harmonizace_form."<br>";
//echo "<b>dysbalance_form:</b> ".$dysbalance_form."<br>";
//echo "<b>koordinace_form:</b> ".$koordinace_form."<br>";
//echo "<b>psychika_form:</b> ".$psychika_form."<br>";






?>