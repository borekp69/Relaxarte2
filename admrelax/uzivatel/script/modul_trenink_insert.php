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
$prihlaseny_uzivatel_form = addslashes(htmlspecialchars(trim("$_POST[prihlaseny_uzivatel]")));



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



if($typ_treninku_form == 1){
  $dynamicke_cviceni_form = 0;
  $dynamicka_meditace_form = 0;
  $zdrave_jogove_protazeni_form = 0;
  $tajczy_cjuan_form = 0;
}


require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "INSERT INTO treninkovy_plan(
uzivatel_id,
datum_treninku_zacatek,
datum_treninku_konec,
pocet_lekci,
k_cerpani,
lektor_procedury,
typ_treninku,
skupinovy_dynamicke_cviceni,
skupinovy_dynamicka_meditace,
skupinovy_zdrave_jogove_protazeni,
skupinovy_tajczy_cjuan,
zpusob_zvyseni_kondice,
zpusob_nabrani_svalove_hmoty,
zpusob_dychani_posileni_hss,
zpusob_posileni_panevniho_dna,
zpusob_stabilizace_kloubu,
zpusob_srovnani_patere,
zpusob_energeticka_harmonizace,
zpusob_dysbalance,
zpusob_koordinace,
zpusob_psychika,
detail_zamereni,
prihlaseny_uzivatel
)
VALUES (
'$uzivatel_id',
'$datum_treninku_zacatek_form',
'$datum_treninku_konec_form',
'$pocet_lekci_form',
'$pocet_lekci_form',
'$lektor_procedury_form',
'$typ_treninku_form',
'$dynamicke_cviceni_form',
'$dynamicka_meditace_form',
'$zdrave_jogove_protazeni_form',
'$tajczy_cjuan_form',
'$zvyseni_kondice_form',
'$nabrani_svalove_hmoty_form',
'$dychani_posileni_hss_form',
'$posileni_panevniho_dna_form',
'$stabilizace_kloubu_form',
'$srovnani_patere_form',
'$energeticka_harmonizace_form',
'$dysbalance_form',
'$koordinace_form',
'$psychika_form',
'$detail_zamereni_form',
'$prihlaseny_uzivatel_form'
)";       

if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT MAX(treninkovy_plan_id) AS max_id FROM treninkovy_plan";
$result = $conn->query($sql);
while($radek = $result->fetch_assoc()) {
$max_id = $radek["max_id"];  
}
$conn->close(); 

echo "<br>max_id: ".$max_id."<br>";
//echo "<br>uzivatel_id: ".$uzivatel_id."<br>";

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT * FROM treninkovy_plan WHERE treninkovy_plan_id = $max_id";
$result = $conn->query($sql);
while($radek = $result->fetch_assoc()) {
$datum_treninku_zacatek = $radek["datum_treninku_zacatek"]; 
$datum_treninku_konec = $radek["datum_treninku_konec"]; 
$pocet_lekci = $radek["pocet_lekci"];
$k_cerpani = $radek["k_cerpani"];
$lektor_procedury = $radek["lektor_procedury"];
$typ_treninku = $radek["typ_treninku"];
$skupinovy_dynamicke_cviceni = $radek["skupinovy_dynamicke_cviceni"];
$skupinovy_dynamicka_meditace = $radek["skupinovy_dynamicka_meditace"];
$skupinovy_zdrave_jogove_protazeni = $radek["skupinovy_zdrave_jogove_protazeni"];
$skupinovy_tajczy_cjuan = $radek["skupinovy_tajczy_cjuan"];

  
  }
$conn->close();


  echo "datum_treninku_zacatek: ".$datum_treninku_zacatek."<br>";
  echo "datum_treninku_konec: ".$datum_treninku_konec."<br>";
  echo "pocet_lekci: ".$pocet_lekci."<br>";
  echo "k_cerpani: ".$k_cerpani."<br>";
  echo "lektor_procedury: ".$lektor_procedury."<br>";
  echo "typ_treninku: ".$typ_treninku."<br>";
  echo "skupinovy_dynamicke_cviceni: ".$skupinovy_dynamicke_cviceni."<br>";
  echo "skupinovy_dynamicka_meditace: ".$skupinovy_dynamicka_meditace."<br>";
  echo "skupinovy_zdrave_jogove_protazeni: ".$skupinovy_zdrave_jogove_protazeni."<br>";
  echo "skupinovy_tajczy_cjuan: ".$skupinovy_tajczy_cjuan."<br>";

 


?>