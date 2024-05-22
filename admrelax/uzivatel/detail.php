<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php'; ?>
<!DOCTYPE html>
<html lang="cs">
<head>
<title>RELAX ARTE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">



<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>


</head>
<body>
<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/navigace/navigace.php'; ?>

<div class="container">

<script>
// Javascript to enable link to tab
$(document).ready(function(){

if(window.location.hash != "") {
    $('a[href="' + window.location.hash + '"]').click()
}

});

</script>


<?


require "sifrovani_dat.php";
//require "pripojeni_databaze.php";
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$uzivatel_kod = htmlspecialchars(trim("$_POST[kod]"));
$uzivatel_kod = substr($uzivatel_kod,0,8);

$uzivatel_id = htmlspecialchars(trim("$_GET[uzivatel_id]"));
$uzivatel_id = encrypt_decrypt('decrypt', $uzivatel_id);

if (!$uzivatel_id && !$uzivatel_kod){
echo '<div class="alert alert-danger">';
echo '<strong>Chyba nevybrali jste žádný nebo chybný vyhledávací parametr!</strong><br>';
echo 'Proměnné uzivatel_id i uzivatel_kod jsou prázdné!';
echo'</div>';
exit();
}


if (strlen($uzivatel_kod) > 7) {
//    require "pripojeni_databaze.php";
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_3 = "SELECT uzivatel_id FROM uzivatel WHERE uzivatel_kod = '$uzivatel_kod' ";
$result_3 = $conn->query($sql_3);
while($radek_3 = $result_3->fetch_assoc()) {
$uzivatel_id_2 = $radek_3["uzivatel_id"];
}
$uzivatel_id = $uzivatel_id_2;
$conn->close();
}


function ageCalculator($dob){
if(!empty($dob)){
$birthdate = new DateTime($dob);
$today   = new DateTime('today');
$age = $birthdate->diff($today)->y;
return $age;
}else{
return 0;
}
}


//require "pripojeni_databaze.php";
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT * FROM uzivatel AS usr
INNER JOIN lekar AS lk ON (usr.uzivatel_lekar = lk.lekar_id)
INNER JOIN seznam AS sb ON (usr.uzivatel_hodiny_pc = sb.seznam_id)
INNER JOIN seznam_zamestnani AS sa ON (usr.uzivatel_zamestnani = sa.seznam_zamestnani_id)
INNER JOIN spolecnost AS spol ON (usr.uzivatel_spolecnost = spol.spolecnost_id)
INNER JOIN pojistovny AS poj ON (usr.uzivatel_pojistovna = poj.pojistovna_id)
INNER JOIN prefix ON (usr.uzivatel_prefix = prefix.prefix_id) WHERE uzivatel_id = $uzivatel_id LIMIT 1
";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
$jmeno = encrypt_decrypt('decrypt', $row["uzivatel_jmeno"]).'&nbsp;'. encrypt_decrypt('decrypt', $row["uzivatel_prijmeni"]);
$pohlavi = $row["uzivatel_pohlavi"];
$ulice = encrypt_decrypt('decrypt', $row["uzivatel_ulice"]);
$cp = $row["uzivatel_cp"];
$co = $row["uzivatel_co"];
$mesto = encrypt_decrypt('decrypt', $row["uzivatel_mesto"]);
$psc= $row["uzivatel_psc"];
$predvolba = '+'.$row["prefix_predvolba"];
$telefon = encrypt_decrypt('decrypt', $row["uzivatel_mobil"]);
$email = encrypt_decrypt('decrypt', $row["uzivatel_email"]);
$rc =  encrypt_decrypt('decrypt', $row["uzivatel_rc"]);
$narozeni =  encrypt_decrypt('decrypt', $row["uzivatel_narozeni"]);
$spolecnost = $row["spolecnost_nazev"];
$pojistovna = $row["pojistovna_zkratka"];
$pojistovna_cislo = $row["pojistovna_cislo"];
$pojistovna_nazev = $row["pojistovna_nazev"];
$zamestnani = $row['seznam_zamestnani_hodnota'];
$open_space = $row["uzivatel_open_space"];
$manazer = $row["uzivatel_manazer"];
$cas_pc = $row['seznam_hodnota'];
$lekar =  $row['lekar_titul_1']." ".$row['lekar_jmeno']. " " .$row['lekar_prijmeni']." ";
$kod = $row["uzivatel_kod"];
$uzivatel_budoucnost = $row["uzivatel_budoucnost"];
$uzivatel_urazy = $row["uzivatel_urazy"];
$uzivatel_unava =  $row["uzivatel_unava"];
$uzivatel_hmotnost =  $row["uzivatel_hmotnost"];
$uzivatel_kg =  $row["uzivatel_kg"];
$uzivatel_stav = $row["uzivatel_stav"];
}
$conn->close();


//require "pripojeni_databaze.php";
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT uzivatel_id, uzivatel_oblast, seznam_hodnota FROM uzivatel AS us
INNER JOIN seznam AS sb ON (us.uzivatel_oblast = sb.seznam_id) WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
$uzivatel_oblast = $row["seznam_hodnota"];
}
$conn->close();


//require "pripojeni_databaze.php";
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT uzivatel_id, uzivatel_odpocinek, seznam_hodnota FROM uzivatel AS us
INNER JOIN seznam AS sb ON (us.uzivatel_odpocinek = sb.seznam_id) WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
$uzivatel_odpocinek = $row["seznam_hodnota"];
}
$conn->close();

if(!$co){
$cp = $cp;
}else{
$cp = "$cp/$co";
}

$psc1 = substr($psc,0,3);
$psc2 = substr($psc,3,2);
$psc_f = $psc1.'&nbsp;'.$psc2;
$telefon1 = substr($telefon,0,3);
$telefon2 = substr($telefon,3,3);
$telefon3 = substr($telefon,6,3);
$telefon_f = $telefon1 .'&nbsp;'.$telefon2.'&nbsp;'.$telefon3;
$datum = Date("Y-m-d ", Time());
$vek =  $datum - Date($narozeni);

if ($uzivatel_stav == 'N'){
$uzamceny_ucet ='&nbsp;-&nbsp;<font color = "red">ÚČET JE UZAMČEN</font>';
$uzamceny_ucet_vystraha = '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>POZOR !!!</strong>&nbsp;Tento účet uživatele je uzamčen.</div>';
}
?>
<? echo $uzamceny_ucet_vystraha;?>
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#kontakt">Osobní údaje</a></li>
<li><a data-toggle="tab" href="#relaxarte">Obecné</a></li>
<li><a data-toggle="tab" href="#sport">Pohyb</a></li>
<li><a data-toggle="tab" href="#zdravi">Zdraví</a></li>

<li><a data-toggle="tab" href="#tcm">TČM</a></li>
<li><a data-toggle="tab" href="#eav">EAV</a></li>
<li><a data-toggle="tab" href="#psychika">Psychika</a></li>
<li><a data-toggle="tab" href="#alternativni3">MasážFyzio</a></li>
<li><a data-toggle="tab" href="#alternativni4">Výživa</a></li>
<li><a data-toggle="tab" href="#alternativni5">Medikace</a></li>
<li><a data-toggle="tab" href="#alternativni6">Lékař</a></li>
<li><a data-toggle="tab" href="#alternativni7">Balíčky</a></li>

</ul>


<div class="tab-content">

<div id="tcm" class="tab-pane fade">
<? require "./script/diagnostika_tcm.php"; ?>
<? require "./script/definice_tcm.php"; ?>
<? require "./script/snasenlivost.php"; ?>
<? require "./script/obdobi.php"; ?>
<? require "./script/spanek_tcm.php"; ?>
<? require "./script/modul_tcm_procedury.php"; ?>


</div>


<div id="psychika" class="tab-pane fade">
<? require "./script/modul_psychika.php"; ?>
<? require "./script/modul_psychika_procedury.php"; ?>
TESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTEST

</div>   













<div id="kontakt" class="tab-pane fade in active">
<h4>Kontaktní a osobní údaje (<? echo $kod;?>)<? echo $uzamceny_ucet;?>[<?echo $uzivatel_id; ?>]</h4>
<div class="row">
<div class="col-sm-5">
<b><? echo $jmeno;?> &nbsp; (<? echo $spolecnost;?>)</b>
</div>
</div>

<div class="row">
<div class="col-sm-10">
<b>Narozen:&nbsp;</b><? echo $narozeni;?>&nbsp;(<? echo ageCalculator($narozeni);?>&nbsp; let)
</div>
</div>

<div class="row">
<div class="col-sm-10">
<b>RČ:&nbsp;</b><? echo $rc; ?>
</div>
</div>

<div class="row">
<div class="col-sm-10">
<b>ZP:&nbsp;</b><? echo $pojistovna_cislo.'&nbsp;-&nbsp;'.$pojistovna.'&nbsp;('.$pojistovna_nazev.')';?>
</div>
</div>

<h4>Adresa</h4>
<div class="row">
<div class="col-sm-10">
<b>Ulice:&nbsp;</b><? echo $ulice;?> &nbsp; <? echo $cp;?>
</div>
</div>

<div class="row">
<div class="col-sm-10">
<b>Obec:&nbsp;</b><? echo $mesto;?>
</div>
</div>

<div class="row">
<div class="col-sm-10">
<b>PSČ:&nbsp;</b><? echo $psc_f;?>
</div>
</div>

<div class="row">
<div class="col-sm-10">
<b>Telefon:&nbsp;</b><? echo $predvolba;?>&nbsp;<? echo $telefon_f;?>
</div>
</div>

<div class="row">
<div class="col-sm-10">
<b>E-mail:&nbsp;</b><? echo $email;?>
</div>
</div>

<h4>Zaměstnání</h4>
<div class="row">
<div class="col-sm-10">
<b>Typ zaměstnání:&nbsp;</b><? echo $zamestnani;?>
</div>
</div>

<div class="row">
<div class="col-sm-10">
<b>Práce v open space:&nbsp;</b><? echo $open_space;?>
</div>
</div>

<div class="row">
<div class="col-sm-10">
<b>Manažerská pozice:&nbsp;</b><? echo $manazer;?>
</div>
</div>

<div class="row">
<div class="col-sm-10">
<b>Čas u PC:&nbsp;</b><? echo $cas_pc;?>&nbsp;hodin
</div>
</div>

<h5>Registrace u RELAXARTE lékaře</h5>
<div class="row">
<div class="col-sm-10">
<? echo $lekar;?>
</div>
</div>
<div align="right"><a href="./uprava_form.php?uzivatel_id=<? echo encrypt_decrypt('encrypt', $uzivatel_id);?>" type="button" class="btn btn-warning btn-sm">Upravit záznam klienta</a></div>

</div>





<div id="sport" class="tab-pane fade">
<h4>Sport a pohyb<? echo $uzamceny_ucet;?></h4>
<?
//    require "pripojeni_databaze.php";
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_sport_pravidelne = "SELECT * FROM sport_pravidelne WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result_sport_pravidelne = $conn->query($sql_sport_pravidelne);
$conn->close();
$pocet_zaznamu_sport_pravidelne = mysqli_num_rows($result_sport_pravidelne);

require "pripojeni_databaze.php";
$sql_sport_nepravidelne = "SELECT * FROM sport_nepravidelne WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result_sport_nepravidelne = $conn->query($sql_sport_nepravidelne);
$conn->close();
$pocet_zaznamu_sport_nepravidelne = mysqli_num_rows($result_sport_nepravidelne);

require "pripojeni_databaze.php";
$sql_joga = "SELECT * FROM joga WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result_joga = $conn->query($sql_joga);
$conn->close();
$pocet_zaznamu_joga = mysqli_num_rows($result_joga);


if ($pocet_zaznamu_sport_pravidelne == 0  && $pocet_zaznamu_sport_nepravidelne == 0 && $pocet_zaznamu_joga == 0){
?>
<h5>Uživatel zatím nevyplnil požadované informace.</h5>
<a href="krok_02_ulozeni.php?uzivatel_id=<? echo encrypt_decrypt('encrypt', $uzivatel_id);?>" type="button" class="btn btn-warning btn-sm">Doplnit data nyní</a>

<? } else {



//require "pripojeni_databaze.php";
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_sport_pravidelne = "SELECT * FROM sport_nepravidelne WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result_sport_pravidelne = $conn->query($sql_sport_pravidelne);
while($radek = $result_sport_pravidelne->fetch_assoc()) {
$bezky = $radek["bezky"];
$brusle_zimni = $radek["brusle_zimni"];
$prace_na_zahrade = $radek["prace_na_zahrade"];
$sjezd_lyze = $radek["sjezd_lyze"];
$skialpinismus = $radek["skialpinismus"];
}
$conn->close();
?>
<div id="SportovniAktivity">
<form id="SportovniAktivity" name="SportovniAktivity" method="post">
    <div class="row">
    <div class="col-sm-12" style="background-color:#f6e9cd;">
    <label for="uzivatel">Sportovní a pohybové aktivity:</label>
    <div class="checkbox">
    <? if ($bezky == 0) { ?>
    <label><input type="checkbox" name="bezky">Běžky</label>
    <? }else { ?>
    <label><input type="checkbox" name="bezky" checked>Běžky</label>
    <?  } ?>
    </div>
    <div class="checkbox">
    <? if ($brusle_zimni == 0) { ?>
    <label><input type="checkbox" name="brusle_zimni">Brusle zimní</label>
    <? }else { ?>
    <label><input type="checkbox" name="brusle_zimni" checked>Brusle zimní</label>
    <?  } ?>
    </div>
    <div class="checkbox">
    <? if ($prace_na_zahrade == 0) { ?>
    <label><input type="checkbox" name="prace_na_zahrade">Práce na zahradě</label>
    <? }else { ?>
    <label><input type="checkbox" name="prace_na_zahrade" checked>Práce na zahradě</label>
    <?  } ?>
    </div>
    <div class="checkbox">
    <? if ($sjezd_lyze == 0) { ?>
    <label><input type="checkbox" name="sjezd_lyze">Sjezd lyže</label>
    <? }else { ?>
    <label><input type="checkbox" name="sjezd_lyze" checked>Sjezd lyže</label>
    <?  } ?>
    </div>
    <div class="checkbox">
    <? if ($skialpinismus == 0) { ?>
    <label><input type="checkbox" name="skialpinismus" >Skialpinismus</label>
    <? }else { ?>
    <label><input type="checkbox" name="skialpinismus" checked>Skialpinismus</label>
    <?  } ?>
    </div>
    </div>
    </div>
    </form>
    <br>
    <button type="submit" class="btn btn-success btn-sm"  onclick="loadSportoviAktivityUpdate()">&nbsp;&nbsp;Uložit Sportovní a pohybové aktivity&nbsp;&nbsp;</button>
    <br>
</div>


<script>
function loadSportoviAktivityUpdate() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("SportovniAktivity").innerHTML = this.responseText;
    }
  };
  

bezky = document.SportovniAktivity.bezky;
           if(bezky.checked) {
    bezky = 1;
            }else{
    bezky = 0;
            } 

brusle_zimni = document.SportovniAktivity.brusle_zimni;
           if(brusle_zimni.checked) {
    brusle_zimni = 1;
            }else{
    brusle_zimni = 0;
            }  

prace_na_zahrade = document.SportovniAktivity.prace_na_zahrade;
           if(prace_na_zahrade.checked) {
    prace_na_zahrade = 1;
            }else{
    prace_na_zahrade = 0;
            } 

sjezd_lyze = document.SportovniAktivity.sjezd_lyze;
           if(sjezd_lyze.checked) {
    sjezd_lyze = 1;
            }else{
    sjezd_lyze = 0;
            } 

skialpinismus = document.SportovniAktivity.skialpinismus;
           if(skialpinismus.checked) {
    skialpinismus = 1;
            }else{
    skialpinismus = 0;
            }


  let dataSportovniAktivity = "uzivatel_id=10";
  dataSportovniAktivity = dataSportovniAktivity + "&bezky="+bezky;
  dataSportovniAktivity = dataSportovniAktivity + "&brusle_zimni="+brusle_zimni;
  dataSportovniAktivity = dataSportovniAktivity + "&prace_na_zahrade="+prace_na_zahrade;
  dataSportovniAktivity = dataSportovniAktivity + "&sjezd_lyze="+sjezd_lyze;
  dataSportovniAktivity = dataSportovniAktivity + "&skialpinismus="+skialpinismus;

  xhttp.open("POST", "./script/form_sportovni_aktivity_update.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(dataSportovniAktivity);
  alert("Uložení:\nZáznam Sportovní a pohybové aktivity byl uložen.");
     }
</script>














<br>
<div class="row">
<div class="col-sm-6">

<label for="uzivatel">Pravidelné sportovní a pohybové aktivity:</label>
<table class="table table-striped">
<thead>
<tr class="info">
<th>Aktivita</th>
<th>&nbsp;</th>
<th>Pravidelnost</th>
</tr>
</thead>
<tbody>


<?
//require "pripojeni_databaze.php";
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_sport = "SELECT * FROM sport_pravidelne WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result_sport = $conn->query($sql_sport);
while($radek = $result_sport->fetch_assoc()) {
$posilovani = $radek["posilovani"];
$pravidelnost_posilovani = $radek["pravidelnost_posilovani"];
$florbal = $radek["florbal"];
$pravidelnost_florbal = $radek["pravidelnost_florbal"];
$bojove_sporty = $radek["bojove_sporty"];
$pravidelnost_bojove_sporty = $radek["pravidelnost_bojove_sporty"];
$hokej = $radek["hokej"];
$pravidelnost_hokej = $radek["pravidelnost_hokej"];
$fotbal = $radek["fotbal"];
$pravidelnost_fotbal = $radek["pravidelnost_fotbal"];
$volejbal = $radek["volejbal"];
$pravidelnost_volejbal = $radek["pravidelnost_volejbal"];
$aerobic = $radek["aerobic"];
$pravidelnost_aerobic= $radek["pravidelnost_aerobic"];
$tanec = $radek["tanec"];
$pravidelnost_tanec = $radek["pravidelnost_tanec"];
$plavani = $radek["plavani"];
$pravidelnost_plavani = $radek["pravidelnost_plavani"];
$brusle_inline = $radek["brusle_inline"];
$pravidelnost_brusle_inline = $radek["pravidelnost_brusle_inline"];
$kolo_spinning = $radek["kolo_spinning"];
$pravidelnost_kolo_spinning = $radek["pravidelnost_kolo_spinning"];
$beh = $radek["beh"];
$pravidelnost_beh = $radek["pravidelnost_beh"];
$pesi_turistika = $radek["pesi_turistika"];
$pravidelnost_pesi_turistika = $radek["pravidelnost_pesi_turistika"];
$taj_ci = $radek["taj_ci"];
$pravidelnost_taj_ci = $radek["pravidelnost_taj_ci"];
$cchi_kung = $radek["cchi_kung"];
$pravidelnost_cchi_kung = $radek["pravidelnost_cchi_kung"];
$joga = $radek["joga"];
$pravidelnost_joga = $radek["pravidelnost_joga"];
$kondicni_treninky = $radek["kondicni_treninky"];
$pravidelnost_kondicni_treninky = $radek["pravidelnost_kondicni_treninky"];
$tenis_squash_badminton = $radek["tenis_squash_badminton"];
$pravidelnost_tenis_squash_badminton = $radek["pravidelnost_tenis_squash_badminton"];
}
$conn->close();

function sport($sport)
{
if ($sport == 1) { $sport = 'Ano';  }else{ $sport = 'Ne'; }
return $sport;
}


function pravidelnost($seznam)
{
if($seznam == 0){
return  $vysledek = '- -';
}else{
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT seznam_hodnota FROM seznam WHERE seznam_id = $seznam LIMIT 1";
$result = $conn->query($sql);
while($radek = $result->fetch_assoc()) {
$vysledek = $radek["seznam_hodnota"];
}
$conn->close();
return $vysledek;
}
}


?>
<tr>
<td>Fitness - silový trénink</td>
<td><? echo sport($posilovani);?></td>
<td><? echo pravidelnost($pravidelnost_posilovani);?></td>
</tr>
<tr>
<td>Florbal</td>
<td><? echo sport($florbal);?></td>
<td><? echo pravidelnost($pravidelnost_florbal);?></td>
</tr>
<tr>
<td>Bojové sporty</td>
<td><? echo sport($bojove_sporty);?></td>
<td><? echo pravidelnost($pravidelnost_bojove_sporty);?></td>
</tr>
<tr>
<td>Hokej</td>
<td><? echo sport($hokej);?></td>
<td><? echo pravidelnost($pravidelnost_hokej);?></td>
</tr>
<tr>
<td>Fotbal</td>
<td><? echo sport($fotbal);?></td>
<td><? echo pravidelnost($pravidelnost_fotbal);?></td>
</tr>
<tr>
<td>Volejbal/Basketbal</td>
<td><? echo sport($volejbal);?></td>
<td><? echo pravidelnost($pravidelnost_volejbal);?></td>
</tr>
<tr>
<td>Aerobik</td>
<td><? echo sport($aerobic);?></td>
<td><? echo pravidelnost($pravidelnost_aerobic);?></td>
</tr>
<tr>
<td>Tanec</td>
<td><? echo sport($tanec);?></td>
<td><? echo pravidelnost($pravidelnost_tanec);?></td>
</tr>
<tr>
<td>Plavání</td>
<td><? echo sport($plavani);?></td>
<td><? echo pravidelnost($pravidelnost_plavani);?></td>
</tr>
<tr>
<td>Brusle in-line</td>
<td><? echo sport($brusle_inline);?></td>
<td><? echo pravidelnost($pravidelnost_brusle_inline);?></td>
</tr>
<tr>
<td>Kolo/Spinning</td>
<td><? echo sport($kolo_spinning);?></td>
<td><? echo pravidelnost($pravidelnost_kolo_spinning);?></td>
</tr>
<tr>
<td>Běh</td>
<td><? echo sport($beh);?></td>
<td><? echo pravidelnost($pravidelnost_beh);?></td>
</tr>
<tr>
<td>Pěší turistika/chůze</td>
<td><? echo sport($pesi_turistika);?></td>
<td><? echo pravidelnost($pravidelnost_pesi_turistika);?></td>
</tr>
<tr>
<td>Taj-či</td>
<td><? echo sport($taj_ci);?></td>
<td><? echo pravidelnost($pravidelnost_taj_ci);?></td>
</tr>
<tr>
<td>Čchi-kung</td>
<td><? echo sport($cchi_kung);?></td>
<td><? echo pravidelnost($pravidelnost_cchi_kung);?></td>
</tr>
<tr>
<td> Jóga/Rehabilitační cvičení /Fyzio</td>
<td><? echo sport($joga);?></td>
<td><? echo pravidelnost($pravidelnost_joga);?></td>
</tr>
<tr>
<td>Fitness - kondiční trénink</td>
<td><? echo sport($kondicni_treninky);?></td>
<td><? echo pravidelnost($pravidelnost_kondicni_treninky);?></td>
</tr>
<tr>
<td>Tenis/Squash/Badminton</td>
<td><? echo sport($tenis_squash_badminton);?></td>
<td><? echo pravidelnost($pravidelnost_tenis_squash_badminton);?></td>
</tr>



</tbody>
</table>
</div>
</div>


<?
//require "pripojeni_databaze.php";
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_sport_pravidelne = "SELECT * FROM joga WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result_sport_pravidelne = $conn->query($sql_sport_pravidelne);
while($radek = $result_sport_pravidelne->fetch_assoc()) {
$joga = $radek["joga"];
$lektor = encrypt_decrypt('decrypt', $radek["lektor"]);
}
$conn->close();
?>

<div class="row" style="background-color:#ddf0f3;">
    <div class="col-sm-4" <?echo $chyba_joga_kurz;?>>
    <label for="uzivatel">Absolvoval jste někdy kurz ŠIVA jógy:</label>
    <select class="form-control" id="zobrazjoga" name="joga_kurz">
    <? 
    if ($joga == 0) { 
        $lektor = "";
    ?>
    <option value="0" selected>Ne</option> 
    <option value="1">Ano</option>
    </select>
    <? 
    }else { 
      $lektor = $lektor;  
    ?>
    <option value="0">Ne</option> 
    <option value="1" selected>Ano</option>
    </select>
    <?  } ?>
  
    <br>
    </div>
  
    
    <div class="col-sm-5" <?echo $chyba_lektor;?>>
    <div class="form-group" id="jogaFieldGroupDiv">
    <label for="uzivatel">Pokud ano, uveďte prosím jméno lektora:</label>
    <input type="text" class="form-control form-control-sm" name="lektor" maxlength="50" value = "<?echo $lektor;?>" placeholder="Pokud nechcete uvést jméno lektora napište důvěrné">
   

    </div> 
    </div>
    <script src="./js/joga.js"></script>
</div> 
<br><br><br>






<?   }  ?>
<br><br><br>







</div>






<div id="zdravi" class="tab-pane fade">
<h4>Zdraví<? echo $uzamceny_ucet;?></h4>

<?
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_zdravi_operace_urazy = "SELECT * FROM zdravi_operace_urazy WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result_zdravi_operace_urazy = $conn->query($sql_zdravi_operace_urazy);
$conn->close();
$pocet_zaznamu_zdravi_operace_urazy = mysqli_num_rows($result_zdravi_operace_urazy);


if ($pocet_zaznamu_zdravi_operace_urazy == 0){
?>
<h5>Klient zatím nevyplnil požadované informace.</h5>
<a href="krok_04_ulozeni.php?uzivatel_id=<? echo encrypt_decrypt('encrypt', $uzivatel_id);?>" type="button" class="btn btn-warning btn-sm">Doplnit data nyní</a>

<? } else {
$no_data = 'Nebyl nalezen žádný záznam!';
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT * FROM zdravi_operace_urazy WHERE uzivatel_id = $uzivatel_id  ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($radek = $result->fetch_assoc()) {
?>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Operace</h4>
<?
if ($radek["operace_vnitrnich_organu"] == '0'){

?>
<div class="row">
<div class="col-sm-12">
<label for="uzivatel">Operace na vnitřních orgánech (orgán + rok):</label>
<textarea class="form-control" id="operace_vnitrnich_organu" name="operace_vnitrnich_organu" rows="1" maxlength="300" style="background-color:#FFFFFF;" readonly><?echo $no_data;?></textarea>
</div>
</div>

<?

}else{
?>
<div class="row">
<div class="col-sm-12">
<label for="uzivatel">Operace na vnitřních orgánech (orgán + rok):</label>
<textarea class="form-control" id="operace_vnitrnich_organu" name="operace_vnitrnich_organu" rows="4" maxlength="300" style="background-color:#FFFFFF;" readonly><?echo $radek["operace_vnitrnich_organu"];?></textarea>
</div>
</div>
<br>

<?
}

if ($radek["operace_pater_kosti_klouby"] == '0'){
?>
<br>
<div class="row">
<div class="col-sm-12">
<label for="uzivatel">Operace - páteř, kosti, klouby:</label>
<textarea class="form-control" id="operace_pater_kosti_klouby" name="operace_pater_kosti_klouby" rows="1" maxlength="300" style="background-color:#FFFFFF;" readonly><?echo $no_data;?></textarea>
</div>
</div>

<?
}else{
?>
<br>
<div class="row">
<div class="col-sm-12">
<label for="uzivatel">Operace - páteř, kosti, klouby:</label>
<textarea class="form-control" id="operace_pater_kosti_klouby" name="operace_pater_kosti_klouby" rows="4" maxlength="300" style="background-color:#FFFFFF;" readonly><?echo $radek["operace_pater_kosti_klouby"];?></textarea>
</div>
</div>
<?
}

?>
<br>
</div></div>
<br>
<?

if ($radek["urazy_zlomeniny"] == '0'){
?>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Úrazy</h4>
<div class="row">
<div class="col-sm-12">
<label for="uzivatel">Úrazy (zlomeniny, pohmožděniny, pády na hlavu, kostrč) - rok úrazu a co se stalo:</label>
<textarea class="form-control" id="urazy_zlomeniny" name="urazy_zlomeniny" rows="1" style="background-color:#FFFFFF;" readonly><?echo $no_data;?></textarea>
</div>
</div>
<br>
</div>
</div>
<br>

<?
}else{
?>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Úrazy</h4>
<div class="row">
<div class="col-sm-12">
<label for="uzivatel">Úrazy (zlomeniny, pohmožděniny, pády na hlavu, kostrč) - rok úrazu a co se stalo:</label>
<textarea class="form-control" id="urazy_zlomeniny" name="urazy_zlomeniny" rows="4" style="background-color:#FFFFFF;" readonly><?echo $radek["urazy_zlomeniny"];?></textarea>
</div>
</div>
<br>
</div>
</div>
<br>
<?
}
}
$conn->close();
?>





<?
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT *,
CASE
WHEN pooperacni_stav = 0 THEN 'Ne'
WHEN pooperacni_stav = 1 THEN 'Ano'
END AS pooperacni_stav,
CASE
WHEN pourazovy_stav = 0 THEN 'Ne'
WHEN pourazovy_stav = 1 THEN 'Ano'
END AS pourazovy_stav,
CASE
WHEN shermanova_nemoc = 0 THEN 'Ne'
WHEN shermanova_nemoc = 1 THEN 'Ano'
END AS shermanova_nemoc,
CASE
WHEN skolioza = 0 THEN 'Ne'
WHEN skolioza = 1 THEN 'Ano'
END AS skolioza,
CASE
WHEN osteoporoza = 0 THEN 'Ne'
WHEN osteoporoza = 1 THEN 'Ano'
END AS osteoporoza,
CASE
WHEN ploche_nohy = 0 THEN 'Ne'
WHEN ploche_nohy = 1 THEN 'Ano'
END AS ploche_nohy,
CASE
WHEN hypermobilita = 0 THEN 'Ne'
WHEN hypermobilita = 1 THEN 'Ano'
END AS hypermobilita,
CASE
WHEN bechterev = 0 THEN 'Ne'
WHEN bechterev = 1 THEN 'Ano'
END AS bechterev,

# --- Artroza ---
CASE
WHEN artroza_krcni_pater = 0 THEN 'Ne'
WHEN artroza_krcni_pater = 1 THEN 'krční páteř'
END AS artroza_krcni_pater,
CASE
WHEN artroza_hrudni_pater = 0 THEN 'Ne'
WHEN artroza_hrudni_pater = 1 THEN 'hrudní páteř'
END AS artroza_hrudni_pater,
CASE
WHEN artroza_bederni_pater = 0 THEN 'Ne'
WHEN artroza_bederni_pater = 1 THEN 'bederní páteř'
END AS artroza_bederni_pater,
CASE
WHEN artroza_krizova_kost = 0 THEN 'Ne'
WHEN artroza_krizova_kost = 1 THEN 'křížová kost'
END AS artroza_krizova_kost,
CASE
WHEN artroza_kostrc = 0 THEN 'Ne'
WHEN artroza_kostrc = 1 THEN 'kostrč'
END AS artroza_kostrc,
CASE
WHEN artroza_ramena = 0 THEN 'Ne'
WHEN artroza_ramena = 1 THEN 'ramena'
END AS artroza_ramena,
CASE
WHEN artroza_lokty = 0 THEN 'Ne'
WHEN artroza_lokty = 1 THEN 'lokty'
END AS artroza_lokty,
CASE
WHEN artroza_zapesti = 0 THEN 'Ne'
WHEN artroza_zapesti = 1 THEN 'zápěstí'
END AS artroza_zapesti,
CASE
WHEN artroza_prsty_na_rukou = 0 THEN 'Ne'
WHEN artroza_prsty_na_rukou = 1 THEN 'prsty na rukou'
END AS artroza_prsty_na_rukou,
CASE
WHEN artroza_prsty_na_nohou = 0 THEN 'Ne'
WHEN artroza_prsty_na_nohou = 1 THEN 'prsty na nohou'
END AS artroza_prsty_na_nohou,
CASE
WHEN artroza_kycle = 0 THEN 'Ne'
WHEN artroza_kycle = 1 THEN 'kyčle'
END AS artroza_kycle,
CASE
WHEN artroza_kolena = 0 THEN 'Ne'
WHEN artroza_kolena = 1 THEN 'kolena'
END AS artroza_kolena,
CASE
WHEN artroza_kotniky = 0 THEN 'Ne'
WHEN artroza_kotniky = 1 THEN 'kotniky'
END AS artroza_kotniky,

# --- Artritida revmatoidní ---
CASE
WHEN artritida_revmatoidni_krcni_pater = 0 THEN 'Ne'
WHEN artritida_revmatoidni_krcni_pater = 1 THEN 'krční páteř'
END AS artritida_revmatoidni_krcni_pater,
CASE
WHEN artritida_revmatoidni_hrudni_pater = 0 THEN 'Ne'
WHEN artritida_revmatoidni_hrudni_pater = 1 THEN 'hrudní páteř'
END AS artritida_revmatoidni_hrudni_pater,
CASE
WHEN artritida_revmatoidni_bederni_pater = 0 THEN 'Ne'
WHEN artritida_revmatoidni_bederni_pater = 1 THEN 'bederní páteř'
END AS artritida_revmatoidni_bederni_pater,
CASE
WHEN artritida_revmatoidni_krizova_kost = 0 THEN 'Ne'
WHEN artritida_revmatoidni_krizova_kost = 1 THEN 'křížová kost'
END AS artritida_revmatoidni_krizova_kost,
CASE
WHEN artritida_revmatoidni_kostrc = 0 THEN 'Ne'
WHEN artritida_revmatoidni_kostrc = 1 THEN 'kostrč'
END AS artritida_revmatoidni_kostrc,
CASE
WHEN artritida_revmatoidni_ramena = 0 THEN 'Ne'
WHEN artritida_revmatoidni_ramena = 1 THEN 'ramena'
END AS artritida_revmatoidni_ramena,
CASE
WHEN artritida_revmatoidni_lokty = 0 THEN 'Ne'
WHEN artritida_revmatoidni_lokty = 1 THEN 'lokty'
END AS artritida_revmatoidni_lokty,
CASE
WHEN artritida_revmatoidni_zapesti = 0 THEN 'Ne'
WHEN artritida_revmatoidni_zapesti = 1 THEN 'zápěstí'
END AS artritida_revmatoidni_zapesti,
CASE
WHEN artritida_revmatoidni_prsty_na_rukou = 0 THEN 'Ne'
WHEN artritida_revmatoidni_prsty_na_rukou = 1 THEN 'prsty na rukou'
END AS artritida_revmatoidni_prsty_na_rukou,
CASE
WHEN artritida_revmatoidni_prsty_na_nohou = 0 THEN 'Ne'
WHEN artritida_revmatoidni_prsty_na_nohou = 1 THEN 'prsty na nohou'
END AS artritida_revmatoidni_prsty_na_nohou,
CASE
WHEN artritida_revmatoidni_kycle = 0 THEN 'Ne'
WHEN artritida_revmatoidni_kycle = 1 THEN 'kyčle'
END AS artritida_revmatoidni_kycle,
CASE
WHEN artritida_revmatoidni_kolena = 0 THEN 'Ne'
WHEN artritida_revmatoidni_kolena = 1 THEN 'kolena'
END AS artritida_revmatoidni_kolena,
CASE
WHEN artritida_revmatoidni_kotniky = 0 THEN 'Ne'
WHEN artritida_revmatoidni_kotniky = 1 THEN 'kotniky'
END AS artritida_revmatoidni_kotniky,

# --- Artritida osteoartritida ---
CASE
WHEN artritida_osteoartritida_krcni_pater = 0 THEN 'Ne'
WHEN artritida_osteoartritida_krcni_pater = 1 THEN 'krční páteř'
END AS artritida_osteoartritida_krcni_pater,
CASE
WHEN artritida_osteoartritida_hrudni_pater = 0 THEN 'Ne'
WHEN artritida_osteoartritida_hrudni_pater = 1 THEN 'hrudní páteř'
END AS artritida_osteoartritida_hrudni_pater,
CASE
WHEN artritida_osteoartritida_bederni_pater = 0 THEN 'Ne'
WHEN artritida_osteoartritida_bederni_pater = 1 THEN 'bederní páteř'
END AS artritida_osteoartritida_bederni_pater,
CASE
WHEN artritida_osteoartritida_krizova_kost = 0 THEN 'Ne'
WHEN artritida_osteoartritida_krizova_kost = 1 THEN 'křížová kost'
END AS artritida_osteoartritida_krizova_kost,
CASE
WHEN artritida_osteoartritida_kostrc = 0 THEN 'Ne'
WHEN artritida_osteoartritida_kostrc = 1 THEN 'kostrč'
END AS artritida_osteoartritida_kostrc,
CASE
WHEN artritida_osteoartritida_ramena = 0 THEN 'Ne'
WHEN artritida_osteoartritida_ramena = 1 THEN 'ramena'
END AS artritida_osteoartritida_ramena,
CASE
WHEN artritida_osteoartritida_lokty = 0 THEN 'Ne'
WHEN artritida_osteoartritida_lokty = 1 THEN 'lokty'
END AS artritida_osteoartritida_lokty,
CASE
WHEN artritida_osteoartritida_zapesti = 0 THEN 'Ne'
WHEN artritida_osteoartritida_zapesti = 1 THEN 'zápěstí'
END AS artritida_osteoartritida_zapesti,
CASE
WHEN artritida_osteoartritida_prsty_na_rukou = 0 THEN 'Ne'
WHEN artritida_osteoartritida_prsty_na_rukou = 1 THEN 'prsty na rukou'
END AS artritida_osteoartritida_prsty_na_rukou,
CASE
WHEN artritida_osteoartritida_prsty_na_nohou = 0 THEN 'Ne'
WHEN artritida_osteoartritida_prsty_na_nohou = 1 THEN 'prsty na nohou'
END AS artritida_osteoartritida_prsty_na_nohou,
CASE
WHEN artritida_osteoartritida_kycle = 0 THEN 'Ne'
WHEN artritida_osteoartritida_kycle = 1 THEN 'kyčle'
END AS artritida_osteoartritida_kycle,
CASE
WHEN artritida_osteoartritida_kolena = 0 THEN 'Ne'
WHEN artritida_osteoartritida_kolena = 1 THEN 'kolena'
END AS artritida_osteoartritida_kolena,
CASE
WHEN artritida_osteoartritida_kotniky = 0 THEN 'Ne'
WHEN artritida_osteoartritida_kotniky = 1 THEN 'kotniky'
END AS artritida_osteoartritida_kotniky,

# --- Protruze ---
CASE
WHEN protruze_krcni_pater = 0 THEN 'Ne'
WHEN protruze_krcni_pater = 1 THEN 'krční páteř'
END AS protruze_krcni_pater,
CASE
WHEN protruze_hrudni_pater = 0 THEN 'Ne'
WHEN protruze_hrudni_pater = 1 THEN 'hrudní páteř'
END AS protruze_hrudni_pater,
CASE
WHEN protruze_bederni_pater = 0 THEN 'Ne'
WHEN protruze_bederni_pater = 1 THEN 'bederní páteř'
END AS protruze_bederni_pater,
CASE
WHEN protruze_krizova_kost = 0 THEN 'Ne'
WHEN protruze_krizova_kost = 1 THEN 'křížová kost'
END AS protruze_krizova_kost,
CASE
WHEN protruze_kostrc = 0 THEN 'Ne'
WHEN protruze_kostrc = 1 THEN 'kostrč'
END AS protruze_kostrc,

# --- Bolesti ---
CASE
WHEN bolesti_krcni_pater = 0 THEN 'Ne'
WHEN bolesti_krcni_pater = 1 THEN 'krční páteř'
END AS bolesti_krcni_pater,
CASE
WHEN bolesti_hrudni_pater = 0 THEN 'Ne'
WHEN bolesti_hrudni_pater = 1 THEN 'hrudní páteř'
END AS bolesti_hrudni_pater,
CASE
WHEN bolesti_bederni_pater = 0 THEN 'Ne'
WHEN bolesti_bederni_pater = 1 THEN 'bederní páteř'
END AS bolesti_bederni_pater,
CASE
WHEN bolesti_krizova_kost = 0 THEN 'Ne'
WHEN bolesti_krizova_kost = 1 THEN 'křížová kost'
END AS bolesti_krizova_kost,
CASE
WHEN bolesti_kostrc = 0 THEN 'Ne'
WHEN bolesti_kostrc = 1 THEN 'kostrč'
END AS bolesti_kostrc,
CASE
WHEN bolesti_ramena = 0 THEN 'Ne'
WHEN bolesti_ramena = 1 THEN 'ramena'
END AS bolesti_ramena,
CASE
WHEN bolesti_lokty = 0 THEN 'Ne'
WHEN bolesti_lokty = 1 THEN 'lokty'
END AS bolesti_lokty,
CASE
WHEN bolesti_zapesti = 0 THEN 'Ne'
WHEN bolesti_zapesti = 1 THEN 'zápěstí'
END AS bolesti_zapesti,
CASE
WHEN bolesti_prsty_na_rukou = 0 THEN 'Ne'
WHEN bolesti_prsty_na_rukou = 1 THEN 'prsty na rukou'
END AS bolesti_prsty_na_rukou,
CASE
WHEN bolesti_prsty_na_nohou = 0 THEN 'Ne'
WHEN bolesti_prsty_na_nohou = 1 THEN 'prsty na nohou'
END AS bolesti_prsty_na_nohou,
CASE
WHEN bolesti_kycle = 0 THEN 'Ne'
WHEN bolesti_kycle = 1 THEN 'kyčle'
END AS bolesti_kycle,
CASE
WHEN bolesti_kolena = 0 THEN 'Ne'
WHEN bolesti_kolena = 1 THEN 'kolena'
END AS bolesti_kolena,
CASE
WHEN bolesti_kotniky = 0 THEN 'Ne'
WHEN bolesti_kotniky = 1 THEN 'kotniky'
END AS bolesti_kotniky
FROM  zdravi_pohybovy_aparat
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";



$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
?>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Pohybový aparát</h4>
<div class="row">

<div class="col-sm-3" style="background-color:#fbebeb;">
<br>
<label>Poúrazový stav:</label>&nbsp; <?echo $row["pourazovy_stav"];?>
<br>
</div>

<div class="col-sm-3" style="background-color:#F9F69F;">
<br>
<label>Pooperační stav:</label>&nbsp;<?echo $row["pooperacni_stav"];?>
<br>
</div>

<div class="col-sm-3" style="background-color:#d6d6f9;">
<br>
<label>Shermanova nemoc:</label>&nbsp;<?echo $row["shermanova_nemoc"];?>
<br>
</div>

<div class="col-sm-3" style="background-color:#d9f9d6;">
<br>
<label>Skolióza:</label>&nbsp;<?echo $row["skolioza"];?>
<br>
</div>

</div>
</div>
</div>

<div class="row">
<div class="col-sm-3" style="background-color:#99ddfc;">
<br>
<label>Osteoporóza:</label>&nbsp;<?echo $row["osteoporoza"];?>
<br>
</div>

<div class="col-sm-3" style="background-color:#f9d7d6;">
<br>
<label>Ploché nohy:</label>&nbsp;<?echo $row["ploche_nohy"];?>
<br>
</div>

<div class="col-sm-3" style="background-color:#e7e2d6;">
<br>
<label>Hypermobilita:</label>&nbsp;<?echo $row["hypermobilita"];?>
<br>
</div>

<div class="col-sm-3" style="background-color:#f9d6e8;">
<br>
<label>Bechtěrev:</label>&nbsp;<?echo $row["bechterev"];?>
<br>
</div>
</div>



<div class="row">
    <div class="col-sm-12" style="background-color:#e8ecec;">
    <br>
    <label>Artróza:</label>&nbsp; 
    <? require "./script/artroza.php"; ?>

<div class="row">
    <div class="col-sm-12" style="background-color:#d6e7f9;">
    <br>
    <label>Artritida revmatoidní:</label>&nbsp; 
    <? require "./script/artritida_revmatoidni.php"; ?>
    
<div class="row">
    <div class="col-sm-12" style="background-color:#99e6e6;">
    <br>
    <label>Artritida osteoartritida:</label>&nbsp; 
    <? require "./script/artritida_osteoartritida.php"; ?>

<div class="row">
    <div class="col-sm-12" style="background-color:#f4e9dd;">
    <br>
    <label>Výhřez plotének/Protruze:</label>&nbsp; 
    <? require "./script/protruze.php"; ?>
    
<div class="row">
    <div class="col-sm-12" style="background-color:#faf27f;">
    <br>
    <label>Bolest v jakých částech:</label>&nbsp; 
    
    <?
    if ($row["bolesti_krcni_pater"] == 'Ne' && $row["bolesti_hrudni_pater"] == 'Ne' && $row["bolesti_bederni_pater"] == 'Ne' 
    && $row["bolesti_krizova_kost"] == 'Ne' && $row["bolesti_kostrc"] == 'Ne' && $row["bolesti_ramena"] == 'Ne' 
    && $row["bolesti_lokty"] == 'Ne' && $row["bolesti_zapesti"] == 'Ne' && $row["bolesti_prsty_na_rukou"] == 'Ne' 
    && $row["bolesti_prsty_na_nohou"] == 'Ne' && $row["bolesti_kycle"] == 'Ne' && $row["bolesti_kolena"] == 'Ne' && $row["bolesti_kotniky"] == 'Ne'){
    echo 'Žádný záznam o výskytu onemocnění';
    
    }else{

            if($row["bolesti_krcni_pater"]=='Ne'){
                echo $row["bolesti_krcni_pater"] = '';
            }else{
                echo $row["bolesti_krcni_pater"].', ';
            }   

            if($row["bolesti_hrudni_pater"]=='Ne'){
                echo $row["bolesti_hrudni_pater"] = '';
            }else{
                echo $row["bolesti_hrudni_pater"].', ';
            }

            if($row["bolesti_bederni_pater"]=='Ne'){
                echo $row["bolesti_bederni_pater"] = '';
            }else{
                echo $row["bolesti_bederni_pater"].', ';
            }
            
            if($row["bolesti_krizova_kost"]=='Ne'){
                echo $row["bolesti_krizova_kost"] = '';
            }else{
                echo $row["bolesti_krizova_kost"].', ';
            }
 
            if($row["bolesti_kostrc"]=='Ne'){
                echo $row["bolesti_kostrc"] = '';
            }else{
                echo $row["bolesti_kostrc"].', ';
            }

            if($row["bolesti_ramena"]=='Ne'){
                echo $row["bolesti_ramena"] = '';
            }else{
                echo $row["bolesti_ramena"].', ';
            }

            if($row["bolesti_lokty"]=='Ne'){
                echo $row["bolesti_lokty"] = '';
            }else{
                echo $row["bolesti_lokty"].', ';
            }
     
            if($row["bolesti_zapesti"]=='Ne'){
                echo $row["bolesti_zapesti"] = '';
            }else{
                echo $row["bolesti_zapesti"].', ';
            }

            if($row["bolesti_prsty_na_rukou"]=='Ne'){
                echo $row["bolesti_prsty_na_rukou"] = '';
            }else{
                echo $row["bolesti_prsty_na_rukou"].', ';
            }

            if($row["bolesti_prsty_na_nohou"]=='Ne'){
                echo $row["bolesti_prsty_na_nohou"] = '';
            }else{
                echo $row["bolesti_prsty_na_nohou"].', ';
            }

            if($row["bolesti_kycle"]=='Ne'){
                echo $row["bolesti_kycle"] = '';
            }else{
                echo $row["bolesti_kycle"].', ';
            }

            if($row["bolesti_kolena"]=='Ne'){
                echo $row["bolesti_kolena"] = '';
            }else{
                echo $row["bolesti_kolena"].', ';
            }
   
            if($row["bolesti_kotniky"]=='Ne'){
                echo $row["bolesti_kotniky"] = '';
            }else{
                echo $row["bolesti_kotniky"].', ';
            }   
         }
    ?>
        </div>
</div>


<div class="row" style="background-color:#E0E0E0;">
<br>
    
<?
if ($row["poloha_vyvolavajici_bolest"] == '0'){    
    ?>    
    <div class="col-sm-6">
    <label for="uzivatel">Činnost/poloha vyvolávající bolest:</label>
    <textarea class="form-control" id="poloha_vyvolavajici_bolest" name="poloha_vyvolavajici_bolest" style="background-color:#FFFFFF;" rows="1" maxlength="250" readonly> <?echo $no_data;?></textarea>
    </div>
    <?
    }else{

    ?>
    <div class="col-sm-6">
    <label for="uzivatel">Činnost/poloha vyvolávající bolest:</label>
    <textarea class="form-control" id="poloha_vyvolavajici_bolest" name="poloha_vyvolavajici_bolest" style="background-color:#FFFFFF;" rows="4" maxlength="250" readonly><?echo $row["poloha_vyvolavajici_bolest"];?></textarea>
    </div>
    <?
}
    ?>



<?
if ($row["poloha_ulevova"] == '0'){    
    ?>    
    <div class="col-sm-6">
    <label for="uzivatel">Úlevová činnost/poloha:</label>
    <textarea class="form-control" id="poloha_ulevova" name="poloha_ulevova" style="background-color:#FFFFFF;" rows="1" maxlength="250" readonly> <?echo $no_data;?></textarea>
    </div>
    <?
    }else{

    ?>
    <div class="col-sm-6">
    <label for="uzivatel">Úlevová činnost/poloha:</label>
    <textarea class="form-control" id="poloha_ulevova" name="poloha_ulevova" style="background-color:#FFFFFF;" rows="4" maxlength="250" readonly><?echo $row["poloha_ulevova"];?></textarea>
    </div>
    <?
}
    ?>

</div>

<div class="row" style="background-color:#E0E0E0;">
<br>
<?
if ($row["omezeni_pri_cinnostech"] == '0'){    
    ?>    
    <div class="col-sm-12">
    <label for="uzivatel">Omezení při činnostech:</label>
    <textarea class="form-control" id="omezeni_pri_cinnostech" name="omezeni_pri_cinnostech" style="background-color:#FFFFFF;" rows="1" maxlength="250" readonly> <?echo $no_data;?></textarea>
    <br>
    </div>
    <?
    }else{

    ?>
    <div class="col-sm-12">
    <label for="uzivatel">Omezení při činnostech:</label>
    <textarea class="form-control" id="omezeni_pri_cinnostech" name="omezeni_pri_cinnostech" style="background-color:#FFFFFF;" rows="4" maxlength="250" readonly><?echo $row["omezeni_pri_cinnostech"];?></textarea>
    <br>
    </div>
    <?
}
    ?>
</div>

<?
}
//$conn->close(); ?>
<br>

<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Alergie</h4>
<? require "./script/alergie.php"; ?>

<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Gynekologie</h4>
<? require "./script/gynekologie.php"; ?>

<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Imunita</h4>
<? require "./script/imunita.php"; ?>

<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Infekce</h4>
<? require "./script/infekce.php"; ?>

<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Interna - gastro</h4>
<? require "./script/interna_gastro.php"; ?>

<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Interna - srdce a cévy</h4>
<? require "./script/interna_srdce_cevy.php"; ?>

<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Kožní</h4>
<? require "./script/kozni.php"; ?>

<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Neurologie</h4>
<? require "./script/neurologie.php"; ?>

<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Oční</h4>
<? require "./script/ocni.php"; ?>

<? require "./script/onkologie.php"; ?>

<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>ORL</h4>
<? require "./script/orl.php"; ?>
<br>

<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Psychika</h4>
<? require "./script/psychika.php"; ?>

<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Respirační systém</h4>
<? require "./script/respiracni_system.php"; ?>

<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Stomatologie</h4>
<? require "./script/stomatologie.php"; ?>

<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Urologie</h4>
<? require "./script/urologie.php"; ?>

<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Žlázy s vnitřní sekrecí + metabolické choroby</h4>
<? require "./script/urologie.php"; ?>



<?
//require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_zdravi_leky_klasicke_mediciny = "SELECT * FROM zdravi_leky_klasicke_mediciny WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result_zdravi_leky_klasicke_mediciny = $conn->query($sql_zdravi_leky_klasicke_mediciny);
//$conn->close();
$pocet_zaznamu_zdravi_leky_klasicke_mediciny = mysqli_num_rows($result_zdravi_leky_klasicke_mediciny);


if ($pocet_zaznamu_zdravi_leky_klasicke_mediciny == 0){
?>
<h5>Uživatel zatím nevyplnil požadované informace.</h5>
<a href="krok_04_ulozeni.php?uzivatel_id=<? echo encrypt_decrypt('encrypt', $uzivatel_id);?>" type="button" class="btn btn-warning btn-sm">Doplnit data nyní</a>

<? } else {
$no_data = 'Nebyl nalezen žádný záznam!';
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT * FROM zdravi_leky_klasicke_mediciny WHERE uzivatel_id = $uzivatel_id  ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);

while($radek = $result->fetch_assoc()) {
?>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Medikace</h4>
<?
if ($radek["leky_klasicke_mediciny"] == '0'){

?>
<div class="row">
<div class="col-sm-12">
<label for="uzivatel">Užívané léky klasické medicíny:</label>
<textarea class="form-control" id="leky_klasicke_mediciny" name="leky_klasicke_mediciny" rows="1" maxlength="300" style="background-color:#FFFFFF;" readonly><?echo $no_data;?></textarea>
</div>
</div>

<?

}else{
?>
<div class="row">
<div class="col-sm-12">
<label for="uzivatel">Užívané léky klasické medicíny:</label>
<textarea class="form-control" id="leky_klasicke_mediciny" name="leky_klasicke_mediciny" rows="3" maxlength="300" style="background-color:#FFFFFF;" readonly><?echo $radek["leky_klasicke_mediciny"];?></textarea>
</div>
</div>
<br>
<?
}
    }
        }
?>
<br>
</div></div>









<br>
<div class="row">
    <div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Užívané léky alternativní medicíny (akupunktura, homeopatika, EPAM, TČM, ostatní)</h4><br>
<?
$sql = "SELECT *,
CASE
WHEN akupunktura = 0 THEN 'Ne'
WHEN akupunktura = 1 THEN 'Ano'
END AS akupunktura
FROM zdravi_akupunktura
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>
        <div class="row">  
        <div class="col-sm-4" style="background-color:#ffeecc;"><br>
        <label>Chodíte na akupunkturu:</label>
        <? echo $row["akupunktura"];  ?>
        </div>
<?
}
?>

<?
$sql = "SELECT *,
CASE
WHEN plazma = 0 THEN 'Ne'
WHEN plazma = 1 THEN 'Ano'
END AS plazma
FROM zdravi_plazma
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>
        <div class="col-sm-4" style="background-color:#e6f2ff;"><br>
        <label>Chodíte na plazmu:</label>
        <? echo $row["plazma"];  ?>
        </div>
<?
}
?>

<?
$sql = "SELECT *,
CASE
WHEN eav = 0 THEN 'Ne'
WHEN eav= 1 THEN 'Ano'
END AS eav
FROM zdravi_eav
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>
        <div class="col-sm-4" style="background-color:#e6fff2;"><br>
        <label>Absolvoval/a jste vyšetření EAV:</label>
        <? echo $row["eav"];  ?>
          </div>
          </div>
        
<?
}
?>

<div class="row">
    <div class="col-sm-12" style="background-color:#f7f6e4;">
    <br>
    <label>EPAM produkty:</label>&nbsp; 
<br>
   <? require "./script/epam.php"; ?>
  </div>
</div>


<div class="row">
    <div class="col-sm-12" style="background-color:#F9DB9F;">
    <br>
    <label>Produkty tradiční čínské medicíny (TČM):</label>&nbsp; 
<br>
<? require "tcm.php"; ?>
    </div>
</div>


<div class="row">
    <div class="col-sm-12" style="background-color:#cceeff;">
    <br>
    <label>Užíváné homeopatické přípravky:</label>&nbsp; 
<br>
<? require "homeopatika.php"; ?>
    </div>
</div>


<div class="row">
    <div class="col-sm-12" style="background-color:#b3ffcc;">
    <br>
    <label>Užívané houbové přípravky:</label>&nbsp; 
<br>
<? require "houby.php"; ?>
    </div>
</div>

<div class="row">
    <div class="col-sm-12" style="background-color:#e6e6ff;">
    <br>
    <label>Jiné přípravky:</label>&nbsp; 
<br>
<? require "inpharm.php"; ?>
    </div>
</div>

</div>
</div>

<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Strava a pitný režim</h4>
<? require "pitny_rezim.php"; ?>
<? require "stravovaci_rezim.php"; ?>
</div>
</div>


<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Spánek</h4>
<? require "spanek.php"; ?>
</div>
</div>


<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>COVID-19</h4>
<? require "covid.php"; ?>
</div>
</div>


<?
$sql= "SELECT * 
FROM zdravi_dve_onemocneni WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
$dve_onemocneni = $row["dve_onemocneni"];  
}

if (strlen($dve_onemocneni) == 0){
  $dve_onemocneni = 'Žádný záznam';
}

?>

<br>
<div class="row">
    <div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Dvě nejvíce obtežující onemocnění</h4>
    <div class="row">
    <div class="col-sm-12">
    <textarea class="form-control" id="dve_onemocneni" name="dve_onemocneni" placeholder="" rows="2" maxlength="250"  style="background-color:#FFFFFF;" readonly><? echo $dve_onemocneni;?></textarea>
    </div>
    </div>
    <br>
    </div>
</div>
<br>
<?  } ?>

<br><br>
</div>




<div id="relaxarte" class="tab-pane fade">
<h4>RELAXARTE<? echo $uzamceny_ucet;?></h4>
<?
//require "pripojeni_databaze.php";
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_duvod = "SELECT * FROM ras_duvod WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result_duvod = $conn->query($sql_duvod);
//$conn->close();
$pocet_zaznamu_duvod = mysqli_num_rows($result_duvod);

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_cil = "SELECT * FROM ras_cil WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result_cil = $conn->query($sql_cil);
//$conn->close();
$pocet_zaznamu_cil = mysqli_num_rows($result_cil);
?>


<? if ($pocet_zaznamu_duvod == 0  && $pocet_zaznamu_cil == 0){ ?>
<h5>Uživatel zatím nevyplnil požadované informace.</h5>
<a href="krok_03_ulozeni.php?uzivatel_id=<? echo encrypt_decrypt('encrypt', $uzivatel_id);?>" type="button" class="btn btn-warning btn-sm">Doplnit data nyní</a>

<? }else if ($pocet_zaznamu_duvod == 0 && $pocet_zaznamu_cil == 1 || $pocet_zaznamu_duvod == 1 && $pocet_zaznamu_cil == 0)  {?>
<h3>Pozor došlo k chybě!</h3>
<br><div class="alert alert-danger" role="alert">Nekonzistence dat, předejte prosím informaci na administrátora aplikace.&nbsp; - &nbsp;<b><? echo $kod;?></b></div>
Duvod:<? echo $pocet_zaznamu_duvod; ?><br>
Cil:<? echo $pocet_zaznamu_cil; ?><br>


<? }else{ 
  

 //require "pripojeni_databaze.php";
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_duvod = "SELECT * FROM ras_duvod WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result_duvod = $conn->query($sql_duvod);
while($radek = $result_duvod->fetch_assoc()) {
$neuspokujici_zdravotni_stav = $radek["neuspokujici_zdravotni_stav"];
$nezvladani_stresu = $radek["nezvladani_stresu"];
$psychicke_problemy = $radek["psychicke_problemy"];
$problem_s_hmotnosti = $radek["problem_s_hmotnosti"];
$samota = $radek["samota"];
$unavovy_syndrom = $radek["unavovy_syndrom"];
$zvedavost = $radek["zvedavost"];
}
//$conn->close();
$pocet_zaznamu_duvod = mysqli_num_rows($result_duvod);

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_cil = "SELECT * FROM ras_cil WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result_cil = $conn->query($sql_cil);
$conn->close();
$pocet_zaznamu_cil = mysqli_num_rows($result_cil);

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_cil = "SELECT * FROM ras_cil WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result_cil = $conn->query($sql_cil);
while($radek = $result_cil->fetch_assoc()) {
$nabrat_svaly = $radek["nabrat_svaly"];
$naucit_se_pracovat_s_emocemi = $radek["naucit_se_pracovat_s_emocemi"];
$naucit_se_spravne_dychat = $radek["naucit_se_spravne_dychat"];
$naucit_se_zvladat_stres = $radek["naucit_se_zvladat_stres"];
$odstranit_psychicke_problemy = $radek["odstranit_psychicke_problemy"];
$poznat_nove_metody_pece_o_zdravi = $radek["poznat_nove_metody_pece_o_zdravi"];
$pribrat_na_hmotnosti = $radek["pribrat_na_hmotnosti"];
$zbavit_se_unavoveho_syndromu = $radek["zbavit_se_unavoveho_syndromu"];
$zhubnout = $radek["zhubnout"];
$zlepsit_celkovy_zdravotni_stav = $radek["zlepsit_celkovy_zdravotni_stav"];
$zlepsit_fyzickou_kondici = $radek["zlepsit_fyzickou_kondici"];
$zpevnit_telo = $radek["zpevnit_telo"];
$zrelaxovat = $radek["zrelaxovat"];
}
$conn->close();

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_cosejinamneveslo = "SELECT * FROM uzivatel WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result_cosejinamneveslo = $conn->query($sql_cosejinamneveslo);
while($radek = $result_cosejinamneveslo->fetch_assoc()) {
$cosejinamneveslo = $radek["cosejinamneveslo"];
$osobni_finance = $radek["osobni_finance"];
$osobni_rodinne_vztahy = $radek["osobni_rodinne_vztahy"];
$osobni_psychika = $radek["osobni_psychika"];
$osobni_sebeduvera = $radek["osobni_sebeduvera"];
$osobni_prace = $radek["osobni_prace"];
$osobni_zdravotni_stav = $radek["osobni_zdravotni_stav"];
$osobni_partnerstvi = $radek["osobni_partnerstvi"];
$odpocinek_cestovani = $radek["odpocinek_cestovani"];
$odpocinek_domaci_prace = $radek["odpocinek_domaci_prace"];
$odpocinek_fyzicky_klidova = $radek["odpocinek_fyzicky_klidova"];
$odpocinek_posezeni_s_prateli = $radek["odpocinek_posezeni_s_prateli"];
$odpocinek_spanek = $radek["odpocinek_spanek"];
$odpocinek_sport = $radek["odpocinek_sport"];
$odpocinek_vubec = $radek["odpocinek_vubec"];
$odpocinek_zahrada = $radek["odpocinek_zahrada"];
}
$conn->close();
?>



<div id="RelaxarteUpdate<? echo $uzivatel_id;?>">
<form id="RelaxArteUpdateForm" name="RelaxArteUpdateForm" method="post">
<div class="row">
<div class="col-sm-12" style="background-color:#e2efc8;">

<label for="uzivatel">Proč jste se rozhodl navštívit R.A.S.?</label>
<div class="checkbox">
<? if ($neuspokujici_zdravotni_stav == 0) { ?>
<label><input type="checkbox" name="neuspokujici_zdravotni_stav">neuspokojující zdravotní stav</label>
<? }else { ?>
<label><input type="checkbox" name="neuspokujici_zdravotni_stav" checked>neuspokojující zdravotní stav</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($nezvladani_stresu == 0) { ?>
<label><input type="checkbox" name="nezvladani_stresu">problémy se zvládáním stresu</label>
<? }else { ?>
<label><input type="checkbox" name="nezvladani_stresu" checked>problémy se zvládáním stresu</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($psychicke_problemy == 0) { ?>
<label><input type="checkbox" name="psychicke_problemy">psychické problémy/deprese</label>
<? }else { ?>
<label><input type="checkbox" name="psychicke_problemy" checked>psychické problémy/deprese</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($problem_s_hmotnosti == 0) { ?>
<label><input type="checkbox" name="problem_s_hmotnosti">problém s hmotností</label>
<? }else { ?>
<label><input type="checkbox" name="problem_s_hmotnosti" checked>problém s hmotností</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($samota == 0) { ?>
<label><input type="checkbox" name="samota">samota</label>
<? }else { ?>
<label><input type="checkbox" name="samota" checked>samota</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($unavovy_syndrom == 0) { ?>
<label><input type="checkbox" name="unavovy_syndrom">únavový syndrom</label>
<? }else { ?>
<label><input type="checkbox" name="unavovy_syndrom" checked>únavový syndrom</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($zvedavost == 0) { ?>
<label><input type="checkbox" name="zvedavost">zvědavost</label>
<? }else { ?>
<label><input type="checkbox" name="zvedavost" checked>zvědavost</label>
<?  } ?>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-12" style="background-color:#c8efe6;">
<label for="uzivatel">Jaký je Váš cíl v rámci programu R.A.S.?</label>

<div class="checkbox">
<? if ($nabrat_svaly == 0) { ?>
<label><input type="checkbox" name="nabrat_svaly">nabrat svaly</label>
<? }else { ?>
<label><input type="checkbox" name="nabrat_svaly" checked>nabrat svaly</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($naucit_se_pracovat_s_emocemi == 0) { ?>
<label><input type="checkbox" name="naucit_se_pracovat_s_emocemi">naučit se pracovat s emocemi</label>
<? }else { ?>
<label><input type="checkbox" name="naucit_se_pracovat_s_emocemi" checked>naučit se pracovat s emocemi</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($naucit_se_spravne_dychat == 0) { ?>
<label><input type="checkbox" name="naucit_se_spravne_dychat">naučit se správne dýchat</label>
<? }else { ?>
<label><input type="checkbox" name="naucit_se_spravne_dychat" checked>naučit se správne dýchat</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($naucit_se_zvladat_stres == 0) { ?>
<label><input type="checkbox" name="naucit_se_zvladat_stres">naučit se zvládat stres</label>
<? }else { ?>
<label><input type="checkbox" name="naucit_se_zvladat_stres" checked>naučit se zvládat stres</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($odstranit_psychicke_problemy == 0) { ?>
<label><input type="checkbox" name="odstranit_psychicke_problemy">odstranit psychické problémy/zbavit se depresí</label>
<? }else { ?>
<label><input type="checkbox" name="odstranit_psychicke_problemy" checked>odstranit psychické problémy/zbavit se depresí</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($poznat_nove_metody_pece_o_zdravi == 0) { ?>
<label><input type="checkbox" name="poznat_nove_metody_pece_o_zdravi">poznat nové metody péče o zdraví (cvičení, masáže, fyzio/muziko/arte terapie, ....)</label>
<? }else { ?>
<label><input type="checkbox" name="poznat_nove_metody_pece_o_zdravi" checked>poznat nové metody péče o zdraví (cvičení, masáže, fyzio/muziko/arte terapie, ....)</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($pribrat_na_hmotnosti == 0) { ?>
<label><input type="checkbox" name="pribrat_na_hmotnosti">přibrat na hmotnosti</label>
<? }else { ?>
<label><input type="checkbox" name="pribrat_na_hmotnosti" checked>přibrat na hmotnosti</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($zbavit_se_unavoveho_syndromu == 0) { ?>
<label><input type="checkbox" name="zbavit_se_unavoveho_syndromu">zbavit se únavového syndromu</label>
<? }else { ?>
<label><input type="checkbox" name="zbavit_se_unavoveho_syndromu" checked>zbavit se únavového syndromu</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($zhubnout == 0) { ?>
<label><input type="checkbox" name="zhubnout">zhubnout</label>
<? }else { ?>
<label><input type="checkbox" name="zhubnout" checked>zhubnout</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($zlepsit_celkovy_zdravotni_stav == 0) { ?>
<label><input type="checkbox" name="zlepsit_celkovy_zdravotni_stav" >zlepšit celkový zdravotní stav</label>
<? }else { ?>
<label><input type="checkbox" name="zlepsit_celkovy_zdravotni_stav" checked>zlepšit celkový zdravotní stav</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($zlepsit_fyzickou_kondici == 0) { ?>
<label><input type="checkbox" name="zlepsit_fyzickou_kondici">zlepšit fyzickou kondici</label>
<? }else { ?>
<label><input type="checkbox" name="zlepsit_fyzickou_kondici" checked>zlepšit fyzickou kondici</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($zpevnit_telo == 0) { ?>
<label><input type="checkbox" name="zpevnit_telo" >zpevnit tělo</label>
<? }else { ?>
<label><input type="checkbox" name="zpevnit_telo" checked>zpevnit tělo</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($zrelaxovat == 0) { ?>
<label><input type="checkbox" name="zrelaxovat">zrelaxovat</label>
<? }else { ?>
<label><input type="checkbox" name="zrelaxovat" checked>zrelaxovat</label>
<?  } ?>
</div>
</div>
</div> 


<h4>Osobní</h4>

<div class="row">
  <div class="col-sm-4" style="background-color:#f9e2db;">
    <label for="uzivatel">Máte ve svém životě oblast, kterou potřebujete vyřešit a nemůžete se hnout z místa:</label>
 
    <div class="checkbox">
    <? if ($osobni_finance == 0) {?> 
    <label><input type="checkbox" name="osobni_finance" value="1">Finance</label>
    <? }else{ ?>
    <label><input type="checkbox" name="osobni_finance" value="1" checked>Finance</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($osobni_rodinne_vztahy == 0) {?> 
    <label><input type="checkbox" name="osobni_rodinne_vztahy" value="1">Rodinné vztahy</label>
    <? }else{ ?>
    <label><input type="checkbox" name="osobni_rodinne_vztahy" value="1" checked>Rodinné vztahy</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($osobni_psychika == 0) {?> 
    <label><input type="checkbox" name="osobni_psychika" value="1">Psychika</label>
    <? }else{ ?>
    <label><input type="checkbox" name="osobni_psychika" value="1" checked>Psychika</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($osobni_sebeduvera == 0) {?> 
    <label><input type="checkbox" name="osobni_sebeduvera" value="1">Sebedůvěra</label>
    <? }else{ ?>
    <label><input type="checkbox" name="osobni_sebeduvera" value="1" checked>Sebedůvěra</label>    
    <? } ?>  
    </div>


    <div class="checkbox">
    <? if ($osobni_prace == 0) {?> 
    <label><input type="checkbox" name="osobni_prace" value="1">Práce</label>
    <? }else{ ?>
    <label><input type="checkbox" name="osobni_prace" value="1" checked>Práce</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($osobni_zdravotni_stav == 0) {?> 
    <label><input type="checkbox" name="osobni_zdravotni_stav" value="1">Zdravotní stav</label>
    <? }else{ ?>
    <label><input type="checkbox" name="osobni_zdravotni_stav" value="1" checked>Zdravotní stav</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($osobni_partnerstvi == 0) {?> 
    <label><input type="checkbox" name="osobni_partnerstvi" value="1">Partmerství</label>
    <? }else{ ?>
    <label><input type="checkbox" name="osobni_partnerstvi" value="1" checked>Partnerství</label>    
    <? } ?>  
    </div>
    </div>

    <div class="col-sm-5" <? echo $chyba_budoucnost; ?>>
    <label for="uzivatel">Máte pocit, že se bojíte života jako takového, resp. že žijete hodně ve strachu např. z budoucnosti:</label>    
    <select class="form-control" id="budoucnost" name="budoucnost">
    <? if ($uzivatel_budoucnost=="Ne"){ ?>    
    <option value = "0"> --- Budoucnost ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne" selected>Ne</option>      
    <? }elseif ($uzivatel_budoucnost=="Ano"){ ?>
    <option value = "0"> --- Budoucnost ---</option>
    <option value="Ano" selected>Ano</option>
    <option value="Ne">Ne</option>  
    <? }else{ ?>
    <option value = "0"> --- Budoucnost ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne">Ne</option>  
    <? } ?>  
    </select>
    </div>   
</div>



<div class="row">
    <div class="col-sm-4" <? echo $chyba_urazy; ?>>
    <label for="uzivatel">Dějí se Vám v životě často úrazy? Mohou to být i zvláštní úrazy - např. pád na rovině, atd.:</label>
    <select class="form-control" id="urazy" name="urazy">
    <? if ($uzivatel_urazy=="Ne"){ ?>    
    <option value = "0"> --- Úrazy ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne" selected>Ne</option>     
    <? }elseif ($uzivatel_urazy=="Ano"){ ?>
    <option value = "0"> --- Úrazy ---</option>
    <option value="Ano" selected>Ano</option>
    <option value="Ne">Ne</option> 
    <? }else{ ?>
    <option value = "0"> --- Úrazy ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne">Ne</option> 
    <? } ?>  
    </select>
    </div>

    <div class="col-sm-5" <? echo $chyba_unava; ?>>
    <label for="uzivatel">Když máte vyvinout sportovní aktivitu a nechce se Vám do ní, je to z důvodu spíše únavy nebo lenosti:</label>
    <select class="form-control" id="unava" name="unava">
    <? if ($uzivatel_unava=="Lenost"){ ?>    
    <option value = "0"> --- Aktivita ---</option>
    <option value="Únava">Únava</option>
    <option value="Lenost" selected>Lenost</option>      
    <? }elseif ($uzivatel_unava=="Únava"){ ?>
    <option value = "0"> --- Aktivita ---</option>
    <option value="Únava" selected>Únava</option>
    <option value="Lenost">Lenost</option> 
    <? }else{ ?>
    <option value = "0"> --- Aktivita ---</option>
    <option value="Únava">Únava</option>
    <option value="Lenost">Lenost</option> 
    <? } ?>  
    </select>
    </div>
</div>





<br>
<div class="row"> 
  <div class="col-sm-4" style="background-color:#e9e8cd;">
    <label for="uzivatel">Jakým způsobem odpočíváte:</label>
    <div class="checkbox">
    <? if ($odpocinek_cestovani == 0) {?> 
    <label><input type="checkbox" name="odpocinek_cestovani" value="1">Cestování</label>
    <? }else{ ?>
    <label><input type="checkbox" name="odpocinek_cestovani" value="1" checked>Cestování</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($odpocinek_domaci_prace == 0) {?> 
    <label><input type="checkbox" name="odpocinek_domaci_prace" value="1">Domácí práce</label>
    <? }else{ ?>
    <label><input type="checkbox" name="odpocinek_domaci_prace" value="1" checked>Domácí práce</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($odpocinek_fyzicky_klidova == 0) {?> 
    <label><input type="checkbox" name="odpocinek_fyzicky_klidova" value="1">Fyzicky klidová aktivita (např. četba, TV, PC, ...)</label>
    <? }else{ ?>
    <label><input type="checkbox" name="odpocinek_fyzicky_klidova" value="1" checked>Fyzicky klidová aktivita (např. četba, TV, PC, ...)</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($odpocinek_posezeni_s_prateli == 0) {?> 
    <label><input type="checkbox" name="odpocinek_posezeni_s_prateli" value="1">Posezení s přáteli</label>
    <? }else{ ?>
    <label><input type="checkbox" name="odpocinek_posezeni_s_prateli" value="1" checked>Posezení s přáteli</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($odpocinek_spanek == 0) {?> 
    <label><input type="checkbox" name="odpocinek_spanek" value="1">Spánek</label>
    <? }else{ ?>
    <label><input type="checkbox" name="odpocinek_spanek" value="1" checked>Spánek</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($odpocinek_sport == 0) {?> 
    <label><input type="checkbox" name="odpocinek_sport" value="1">Sport</label>
    <? }else{ ?>
    <label><input type="checkbox" name="odpocinek_sport" value="1" checked>Sport</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($odpocinek_vubec == 0) {?> 
    <label><input type="checkbox" name="odpocinek_vubec" value="1">Vůbec</label>
    <? }else{ ?>
    <label><input type="checkbox" name="odpocinek_vubec" value="1" checked>Vůbec</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($odpocinek_zahrada == 0) {?> 
    <label><input type="checkbox" name="odpocinek_zahrada" value="1">Zahrada</label>
    <? }else{ ?>
    <label><input type="checkbox" name="odpocinek_zahrada" value="1" checked>Zahrada</label>    
    <? } ?> 
    </div> 
    </div>


    <div class="col-sm-3">
    <label for="uzivatel">Aktuální hmotnost, vyberte jednu z možností:</label> 
    <select class="form-control" id="zobrazpole" name="hmotnost">
    <option value="0"> -- Vyberte stav hmotnosti --</option>
 
    <?
    if ($uzivatel_hmotnost == 'Vyhovuje'){ ?>
    <option value="Vyhovuje" selected>Hmotnost je vyhovující</option>
    <option value="Nadváha">Nadváha</option>
    <option value="Podváha">Nízká hmotnost</option>

    <? }elseif ($uzivatel_hmotnost == 'Nadváha'){ ?>  
    <option value="Vyhovuje">Hmotnost je vyhovující</option>
    <option value="Nadváha" selected>Nadváha</option>
    <option value="Podváha">Nízká hmotnost</option>
   
    <?  }else{ ?>
    <option value="Vyhovuje">Hmotnost je vyhovující</option>
    <option value="Nadváha">Nadváha</option>
    <option value="Podváha" selected>Nízká hmotnost</option>
    <? }?>
    </select>
    </div>

    <div class="form-group" id="otherFieldGroupDiv">
    <div class="col-sm-3">
    <label for="uzivatel">Napište požadovanou korekci hmotnosti v kg:</label>
    <input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" id="vahakg" value = "<?echo $uzivatel_kg;?>" name="kg" maxlength="2" placeholder="Napište číslo v kg">
    </div>
    </div>
    <script src="./js/vaha.js"></script>

</div>
 

<h4>Co se jinam nevešlo</h4>
<div class="row">
<div class="col-sm-10">
<textarea class="form-control" rows="10" style="background-color: white;" id="cosejinamneveslo" name="cosejinamneveslo"><? echo $cosejinamneveslo; ?></textarea>
</div>
</div>

    


</form>
    <br>
    <button type="submit" class="btn btn-success btn-sm"  onclick="loadRelaxarte()">&nbsp;&nbsp;Uložit aktualizovaná data&nbsp;&nbsp;</button>
    <br> <br>

</div>

<script>
function loadRelaxarte() {
cosejinamneveslo = document.RelaxArteUpdateForm.cosejinamneveslo.value;
//neuspokujici_zdravotni_stav = document.RelaxArteUpdateForm.neuspokujici_zdravotni_stav.value;


neuspokujici_zdravotni_stav = document.RelaxArteUpdateForm.neuspokujici_zdravotni_stav;
           if(neuspokujici_zdravotni_stav.checked) {
            neuspokujici_zdravotni_stav = 1;
            }else{
            neuspokujici_zdravotni_stav = 0;
            }
nezvladani_stresu = document.RelaxArteUpdateForm.nezvladani_stresu;
           if(nezvladani_stresu.checked) {
            nezvladani_stresu = 1;
            }else{
            nezvladani_stresu = 0;
            }
psychicke_problemy = document.RelaxArteUpdateForm.psychicke_problemy;
           if(psychicke_problemy.checked) {
            psychicke_problemy = 1;
            }else{
            psychicke_problemy = 0;
            }
problem_s_hmotnosti = document.RelaxArteUpdateForm.problem_s_hmotnosti;
           if(problem_s_hmotnosti.checked) {
            problem_s_hmotnosti = 1;
            }else{
            problem_s_hmotnosti = 0;
            }
samota = document.RelaxArteUpdateForm.samota;
           if(samota.checked) {
            samota = 1;
            }else{
            samota = 0;
            }
unavovy_syndrom = document.RelaxArteUpdateForm.unavovy_syndrom;
           if(unavovy_syndrom.checked) {
            unavovy_syndrom = 1;
            }else{
            unavovy_syndrom = 0;
            }
zvedavost = document.RelaxArteUpdateForm.zvedavost;
           if(zvedavost.checked) {
            zvedavost = 1;
            }else{
            zvedavost = 0;
            }

nabrat_svaly = document.RelaxArteUpdateForm.nabrat_svaly;
           if(nabrat_svaly.checked) {
            nabrat_svaly = 1;
            }else{
            nabrat_svaly = 0;
            }
naucit_se_pracovat_s_emocemi = document.RelaxArteUpdateForm.naucit_se_pracovat_s_emocemi;
           if(naucit_se_pracovat_s_emocemi.checked) {
            naucit_se_pracovat_s_emocemi = 1;
            }else{
            naucit_se_pracovat_s_emocemi = 0;
            }
naucit_se_spravne_dychat = document.RelaxArteUpdateForm.naucit_se_spravne_dychat;
           if(naucit_se_spravne_dychat.checked) {
            naucit_se_spravne_dychat = 1;
            }else{
                naucit_se_spravne_dychat = 0;
            }
naucit_se_zvladat_stres = document.RelaxArteUpdateForm.naucit_se_zvladat_stres;
           if(naucit_se_zvladat_stres.checked) {
            naucit_se_zvladat_stres = 1;
            }else{
            naucit_se_zvladat_stres = 0;
            }

odstranit_psychicke_problemy = document.RelaxArteUpdateForm.odstranit_psychicke_problemy;
           if(odstranit_psychicke_problemy.checked) {
            odstranit_psychicke_problemy = 1;
            }else{
            odstranit_psychicke_problemy = 0;
            }
poznat_nove_metody_pece_o_zdravi = document.RelaxArteUpdateForm.poznat_nove_metody_pece_o_zdravi;
           if(poznat_nove_metody_pece_o_zdravi.checked) {
            poznat_nove_metody_pece_o_zdravi = 1;
            }else{
           poznat_nove_metody_pece_o_zdravi = 0;
            }
pribrat_na_hmotnosti = document.RelaxArteUpdateForm.pribrat_na_hmotnosti;
           if(pribrat_na_hmotnosti.checked) {
            pribrat_na_hmotnosti = 1;
            }else{
            pribrat_na_hmotnosti = 0;
            }
zbavit_se_unavoveho_syndromu = document.RelaxArteUpdateForm.zbavit_se_unavoveho_syndromu;
           if(zbavit_se_unavoveho_syndromu.checked) {
            zbavit_se_unavoveho_syndromu = 1;
            }else{
            zbavit_se_unavoveho_syndromu = 0;
            }
zhubnout = document.RelaxArteUpdateForm.zhubnout;
           if(zhubnout.checked) {
            zhubnout = 1;
            }else{
            zhubnout = 0;
            }
zlepsit_celkovy_zdravotni_stav = document.RelaxArteUpdateForm.zlepsit_celkovy_zdravotni_stav;
           if(zlepsit_celkovy_zdravotni_stav.checked) {
            zlepsit_celkovy_zdravotni_stav = 1;
            }else{
            zlepsit_celkovy_zdravotni_stav = 0;
            }
zlepsit_fyzickou_kondici = document.RelaxArteUpdateForm.zlepsit_fyzickou_kondici;
           if(zlepsit_fyzickou_kondici.checked) {
            zlepsit_fyzickou_kondici = 1;
            }else{
            zlepsit_fyzickou_kondici = 0;
            }
zpevnit_telo = document.RelaxArteUpdateForm.zpevnit_telo;
           if(zpevnit_telo.checked) {
            zpevnit_telo = 1;
            }else{
            zpevnit_telo = 0;
            }
zrelaxovat = document.RelaxArteUpdateForm.zrelaxovat;
           if(zrelaxovat.checked) {
            zrelaxovat = 1;
            }else{
            zrelaxovat = 0;
            }

osobni_finance = document.RelaxArteUpdateForm.osobni_finance;
           if(osobni_finance.checked) {
            osobni_finance = 1;
            }else{
            osobni_finance = 0;
            }
osobni_rodinne_vztahy = document.RelaxArteUpdateForm.osobni_rodinne_vztahy;
           if(osobni_rodinne_vztahy.checked) {
            osobni_rodinne_vztahy = 1;
            }else{
            osobni_rodinne_vztahy = 0;
            }
osobni_psychika = document.RelaxArteUpdateForm.osobni_psychika;
           if(osobni_psychika.checked) {
            osobni_psychika = 1;
            }else{
            osobni_psychika = 0;
            }
osobni_sebeduvera = document.RelaxArteUpdateForm.osobni_sebeduvera;
           if(osobni_sebeduvera.checked) {
            osobni_sebeduvera = 1;
            }else{
            osobni_sebeduvera = 0;
            }

osobni_prace = document.RelaxArteUpdateForm.osobni_prace;
           if(osobni_prace.checked) {
            osobni_prace = 1;
            }else{
            osobni_prace = 0;
            }            
osobni_zdravotni_stav = document.RelaxArteUpdateForm.osobni_zdravotni_stav;
           if(osobni_zdravotni_stav.checked) {
            osobni_zdravotni_stav = 1;
            }else{
            osobni_zdravotni_stav = 0;
            }

osobni_partnerstvi = document.RelaxArteUpdateForm.osobni_partnerstvi;
           if(osobni_partnerstvi.checked) {
            osobni_partnerstvi = 1;
            }else{
            osobni_partnerstvi = 0;
            }

odpocinek_cestovani = document.RelaxArteUpdateForm.odpocinek_cestovani;
           if(odpocinek_cestovani.checked) {
            odpocinek_cestovani = 1;
            }else{
            odpocinek_cestovani = 0;
            }            
odpocinek_domaci_prace = document.RelaxArteUpdateForm.odpocinek_domaci_prace;
           if(odpocinek_domaci_prace.checked) {
            odpocinek_domaci_prace = 1;
            }else{
            odpocinek_domaci_prace = 0;
            }     
odpocinek_fyzicky_klidova = document.RelaxArteUpdateForm.odpocinek_fyzicky_klidova;
           if(odpocinek_fyzicky_klidova.checked) {
            odpocinek_fyzicky_klidova = 1;
            }else{
            odpocinek_fyzicky_klidova = 0;
            }  
odpocinek_posezeni_s_prateli = document.RelaxArteUpdateForm.odpocinek_posezeni_s_prateli;
           if(odpocinek_posezeni_s_prateli.checked) {
            odpocinek_posezeni_s_prateli = 1;
            }else{
            odpocinek_posezeni_s_prateli = 0;
            }  
odpocinek_spanek = document.RelaxArteUpdateForm.odpocinek_spanek;
           if(odpocinek_spanek.checked) {
            odpocinek_spanek = 1;
            }else{
            odpocinek_spanek = 0;
            } 
odpocinek_sport = document.RelaxArteUpdateForm.odpocinek_sport;
           if(odpocinek_sport.checked) {
            odpocinek_sport = 1;
            }else{
            odpocinek_sport = 0;
            }
odpocinek_vubec = document.RelaxArteUpdateForm.odpocinek_vubec;
           if(odpocinek_vubec.checked) {
            odpocinek_vubec = 1;
            }else{
            odpocinek_vubec = 0;
            }
odpocinek_zahrada = document.RelaxArteUpdateForm.odpocinek_zahrada;
           if(odpocinek_zahrada.checked) {
            odpocinek_zahrada = 1;
            }else{
            odpocinek_zahrada = 0;
            }




budoucnost = document.RelaxArteUpdateForm.budoucnost.value;
urazy = document.RelaxArteUpdateForm.urazy.value;
unava = document.RelaxArteUpdateForm.unava.value;
hmotnost = document.RelaxArteUpdateForm.hmotnost.value;
kg = document.RelaxArteUpdateForm.kg.value;
   //alert("Uložení:\nZáznam snášenlivost chladu a tepla byl uložen!!!!!!."+neuspokujici_zdravotni_stav);




var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
  document.getElementById("RelaxarteUpdate<? echo $uzivatel_id;?>").innerHTML = this.responseText;
    }
};


if(neuspokujici_zdravotni_stav == 0 && nezvladani_stresu == 0 && psychicke_problemy == 0 && problem_s_hmotnosti == 0 && samota == 0 && unavovy_syndrom == 0 && zvedavost == 0){
        alert("!!! Chyba formuláře  !!!  \n\n  Musíte vybrat alespoň jednu možnost v části:\n  Proč jste se rozhodl navštívit R.A.S!");
       
    
    } else if (nabrat_svaly== 0 && naucit_se_pracovat_s_emocemi== 0 && naucit_se_spravne_dychat == 0 && naucit_se_zvladat_stres == 0 && odstranit_psychicke_problemy == 0 && poznat_nove_metody_pece_o_zdravi == 0 && pribrat_na_hmotnosti == 0 && zbavit_se_unavoveho_syndromu == 0 && zhubnout ==0 && zlepsit_celkovy_zdravotni_stav ==0 && zlepsit_fyzickou_kondici == 0 && zpevnit_telo == 0 && zrelaxovat == 0){
        alert("!!! Chyba formuláře  !!!  \n\n  Musíte vybrat alespoň jednu možnost v části:\n  Jaký je Váš cíl v rámci programu R.A.S!");

    } else if (osobni_finance== 0 && osobni_rodinne_vztahy == 0 && osobni_psychika == 0 && osobni_sebeduvera == 0 && osobni_prace == 0 && osobni_zdravotni_stav == 0 && osobni_partnerstvi == 0){
        alert("!!! Chyba formuláře  !!!  \n\n  Musíte vybrat alespoň jednu možnost v části:\n  Máte ve svém životě oblast, kterou potřebujete vyřešit a nemůžete\n  se hnout z místa!");

    } else if (urazy == 0){
        alert("!!! Chyba formuláře  !!!  \n\n  Musíte vybrat jednu možnost v části:\n  Dějí se Vám v životě často úrazy? Mohou to být i zvláštní úrazy!");

    } else if (budoucnost == 0){
        alert("!!! Chyba formuláře  !!!  \n\n  Musíte vybrat jednu možnost v části:\n  Máte pocit, že se bojíte života jako takového, resp. že žijete hodně\n  ve strachu např. z budoucnosti!");

    } else if (unava == 0){
        alert("!!! Chyba formuláře  !!!  \n\n  Musíte vybrat jednu možnost v části:\n  Když máte vyvinout sportovní aktivitu a nechce se Vám do ní,\n  je to z důvodu spíše únavy nebo lenosti!");       

    } else if (odpocinek_cestovani == 0 && odpocinek_domaci_prace == 0 && odpocinek_fyzicky_klidova == 0 && odpocinek_posezeni_s_prateli == 0 && odpocinek_spanek == 0 && odpocinek_sport == 0 && odpocinek_vubec == 0 && odpocinek_zahrada == 0){
        alert("!!! Chyba formuláře  !!!  \n\n  Musíte vybrat minimálně jednu možnost v části:\n  Jakým způsobem odpočíváte!");    

    } else if (hmotnost == 0){
        alert("!!! Chyba formuláře  !!!  \n\n  Musíte vybrat jednu možnost v části:\n  Aktuální hmotnost, vyberte jednu z možnost!");     

    }else{


let dataRelaxarte = "uzivatel_id=<?echo $uzivatel_id; ?>";
    dataRelaxarte  = dataRelaxarte + "&cosejinamneveslo=" + cosejinamneveslo;
    dataRelaxarte  = dataRelaxarte + "&neuspokujici_zdravotni_stav=" + neuspokujici_zdravotni_stav;
    dataRelaxarte  = dataRelaxarte + "&nezvladani_stresu=" + nezvladani_stresu;
    dataRelaxarte  = dataRelaxarte + "&psychicke_problemy=" + psychicke_problemy;
    dataRelaxarte  = dataRelaxarte + "&problem_s_hmotnosti=" + problem_s_hmotnosti;
    dataRelaxarte  = dataRelaxarte + "&samota=" + samota;
    dataRelaxarte  = dataRelaxarte + "&unavovy_syndrom=" + unavovy_syndrom;
    dataRelaxarte  = dataRelaxarte + "&zvedavost=" + zvedavost;

    dataRelaxarte  = dataRelaxarte + "&nabrat_svaly=" + nabrat_svaly;
    dataRelaxarte  = dataRelaxarte + "&naucit_se_pracovat_s_emocemi=" + naucit_se_pracovat_s_emocemi;
    dataRelaxarte  = dataRelaxarte + "&naucit_se_spravne_dychat=" + naucit_se_spravne_dychat;
    dataRelaxarte  = dataRelaxarte + "&naucit_se_zvladat_stres=" + naucit_se_zvladat_stres;
    dataRelaxarte  = dataRelaxarte + "&odstranit_psychicke_problemy=" + odstranit_psychicke_problemy;
    dataRelaxarte  = dataRelaxarte + "&poznat_nove_metody_pece_o_zdravi=" + poznat_nove_metody_pece_o_zdravi;
    dataRelaxarte  = dataRelaxarte + "&pribrat_na_hmotnosti=" + pribrat_na_hmotnosti;
    dataRelaxarte  = dataRelaxarte + "&zbavit_se_unavoveho_syndromu=" + zbavit_se_unavoveho_syndromu;
    dataRelaxarte  = dataRelaxarte + "&zhubnout=" + zhubnout;
    dataRelaxarte  = dataRelaxarte + "&zlepsit_celkovy_zdravotni_stav=" + zlepsit_celkovy_zdravotni_stav;
    dataRelaxarte  = dataRelaxarte + "&zlepsit_fyzickou_kondici=" + zlepsit_fyzickou_kondici;
    dataRelaxarte  = dataRelaxarte + "&zpevnit_telo=" + zpevnit_telo;
    dataRelaxarte  = dataRelaxarte + "&zrelaxovat=" + zrelaxovat;

    dataRelaxarte  = dataRelaxarte + "&osobni_finance=" + osobni_finance;
    dataRelaxarte  = dataRelaxarte + "&osobni_rodinne_vztahy=" + osobni_rodinne_vztahy;
    dataRelaxarte  = dataRelaxarte + "&osobni_psychika=" + osobni_psychika;
    dataRelaxarte  = dataRelaxarte + "&osobni_sebeduvera=" + osobni_sebeduvera;
    dataRelaxarte  = dataRelaxarte + "&osobni_prace=" + osobni_prace;
    dataRelaxarte  = dataRelaxarte + "&osobni_zdravotni_stav=" + osobni_zdravotni_stav;
    dataRelaxarte  = dataRelaxarte + "&osobni_partnerstvi=" + osobni_partnerstvi;

    dataRelaxarte  = dataRelaxarte + "&odpocinek_cestovani=" + odpocinek_cestovani;
    dataRelaxarte  = dataRelaxarte + "&odpocinek_domaci_prace=" + odpocinek_domaci_prace;
    dataRelaxarte  = dataRelaxarte + "&odpocinek_fyzicky_klidova=" + odpocinek_fyzicky_klidova;
    dataRelaxarte  = dataRelaxarte + "&odpocinek_posezeni_s_prateli=" + odpocinek_posezeni_s_prateli;
    dataRelaxarte  = dataRelaxarte + "&odpocinek_spanek=" + odpocinek_spanek;
    dataRelaxarte  = dataRelaxarte + "&odpocinek_sport=" + odpocinek_sport;
    dataRelaxarte  = dataRelaxarte + "&odpocinek_vubec=" + odpocinek_vubec;
    dataRelaxarte  = dataRelaxarte + "&odpocinek_zahrada=" + odpocinek_zahrada;

    dataRelaxarte  = dataRelaxarte + "&budoucnost=" + budoucnost;  
    dataRelaxarte  = dataRelaxarte + "&urazy=" + urazy;  
    dataRelaxarte  = dataRelaxarte + "&unava=" + unava;  
    dataRelaxarte  = dataRelaxarte + "&hmotnost=" + hmotnost; 
    dataRelaxarte  = dataRelaxarte + "&kg=" + kg; 

  xhttp.open("POST", "./script/relaxarte_update.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(dataRelaxarte);
  alert("Uložení:\nZáznam formuláře RELAXARTE uložen.");
     }
        }

</script>











<?} ?>
</div>




</div>
</div>
</body>
</html>
