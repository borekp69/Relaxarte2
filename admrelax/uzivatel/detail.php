<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php'; ?>
<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");
?>
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
<li><a data-toggle="tab" href="#eav_procedury">EAV - Procedury</a></li>
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


<div id="eav" class="tab-pane fade">
<? require "./script/eav_plan.php"; ?>
</div>

<div id="eav_procedury" class="tab-pane fade">
<? require "./script/eav_procedury.php"; ?>    
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
    <button type="submit" class="btn btn-success btn-sm"  onclick="loadSportoviAktivityUpdate()">&nbsp;&nbsp;Uložit sportovní a pohybové aktivity&nbsp;&nbsp;</button>
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


 let dataSportovniAktivity = "uzivatel_id=<? echo $uzivatel_id;?>";
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

<?
//require "pripojeni_databaze.php";
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_sport_01 = "SELECT * FROM sport_pravidelne WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result_sport_01 = $conn->query($sql_sport_01);
while($radek = $result_sport_01->fetch_assoc()) {
$posilovani_01 = $radek["posilovani"];
$pravidelnost_posilovani_01 = $radek["pravidelnost_posilovani"];
$florbal_01 = $radek["florbal"];
$pravidelnost_florbal_01 = $radek["pravidelnost_florbal"];
$bojove_sporty_01 = $radek["bojove_sporty"];
$pravidelnost_bojove_sporty_01 = $radek["pravidelnost_bojove_sporty"];
$hokej_01 = $radek["hokej"];
$pravidelnost_hokej_01 = $radek["pravidelnost_hokej"];
$fotbal_01 = $radek["fotbal"];
$pravidelnost_fotbal_01 = $radek["pravidelnost_fotbal"];
$volejbal_01 = $radek["volejbal"];
$pravidelnost_volejbal_01 = $radek["pravidelnost_volejbal"];
$aerobic_01 = $radek["aerobic"];
$pravidelnost_aerobic_01 = $radek["pravidelnost_aerobic"];
$tanec_01 = $radek["tanec"];
$pravidelnost_tanec_01 = $radek["pravidelnost_tanec"];
$plavani_01 = $radek["plavani"];
$pravidelnost_plavani_01 = $radek["pravidelnost_plavani"];
$brusle_inline_01 = $radek["brusle_inline"];
$pravidelnost_brusle_inline_01 = $radek["pravidelnost_brusle_inline"];
$kolo_spinning_01 = $radek["kolo_spinning"];
$pravidelnost_kolo_spinning_01 = $radek["pravidelnost_kolo_spinning"];
$beh_01 = $radek["beh"];
$pravidelnost_beh_01 = $radek["pravidelnost_beh"];
$pesi_turistika_01 = $radek["pesi_turistika"];
$pravidelnost_pesi_turistika_01 = $radek["pravidelnost_pesi_turistika"];
$taj_ci_01 = $radek["taj_ci"];
$pravidelnost_taj_ci_01 = $radek["pravidelnost_taj_ci"];
$cchi_kung_01 = $radek["cchi_kung"];
$pravidelnost_cchi_kung_01 = $radek["pravidelnost_cchi_kung"];
$joga_01 = $radek["joga"];
$pravidelnost_joga_01 = $radek["pravidelnost_joga"];
$kondicni_treninky_01 = $radek["kondicni_treninky"];
$pravidelnost_kondicni_treninky_01 = $radek["pravidelnost_kondicni_treninky"];
$tenis_squash_badminton_01 = $radek["tenis_squash_badminton"];
$pravidelnost_tenis_squash_badminton_01 = $radek["pravidelnost_tenis_squash_badminton"];
}
$conn->close();
?>


<br>
<label for="uzivatel">Pravidelné sportovní a pohybové aktivity:</label> 
<div id="SportPravidelnetUpdate">
<form id="SportPravidelnetUpdate" name="SportPravidelnetUpdate" method="post">
    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

        <div class="checkbox">
        <? if ($posilovani_01 == 1){ ?>
        <label><input type="checkbox" name="posilovani" value="1" checked  id="My_posilovani" onclick="myFunction_posilovani()">Fitness - silový trénink</label>
        <? }else{ ?>
        <label><input type="checkbox" name="posilovani" value="1"  id="My_posilovani" onclick="myFunction_posilovani()">Fitness - silový trénink</label>
        <?    }  ?>
        </div>
        </div> 
            <? if ($pravidelnost_posilovani_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
            <div class="col-sm-4" id="text_posilovani" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_posilovani" name="pravidelnost_posilovani"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require "pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_posilovani_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
    </div> 
    </div>
    <? $conn->close();?>


    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($florbal_01 == 1){ ?>
        <label><input type="checkbox" name="florbal" value="1" checked  id="My_florbal" onclick="myFunction_florbal()">Florbal</label>
        <? }else{ ?>
        <label><input type="checkbox" name="florbal" value="1"  id="My_florbal" onclick="myFunction_florbal()">Florbal</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_florbal_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_florbal" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_florbal" name="pravidelnost_florbal"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require "pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_florbal_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>


    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

        <div class="checkbox">
        <? if ($bojove_sporty_01 == 1){ ?>
        <label><input type="checkbox" name="bojove_sporty" value="1" checked  id="My_bojove_sporty" onclick="myFunction_bojove_sporty()">Bojové sporty</label>
        <? }else{ ?>
        <label><input type="checkbox" name="bojove_sporty" value="1"  id="My_bojove_sporty" onclick="myFunction_bojove_sporty()">Bojové sporty</label>
        <?    }  ?>
        </div>
        </div> 
            <? if ($pravidelnost_bojove_sporty_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_bojove_sporty" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_bojove_sporty" name="pravidelnost_bojove_sporty"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require "pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_bojove_sporty_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($hokej_01 == 1){ ?>
        <label><input type="checkbox" name="hokej" value="1" checked  id="My_hokej" onclick="myFunction_hokej()">Hokej</label>
        <? }else{ ?>
        <label><input type="checkbox" name="hokej" value="1"  id="My_hokej" onclick="myFunction_hokej()">Hokej</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_hokej_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_hokej" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_hokej" name="pravidelnost_hokej"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require "pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_hokej_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($fotbal_01 == 1){ ?>
        <label><input type="checkbox" name="fotbal" value="1" checked  id="My_fotbal" onclick="myFunction_hokej()">Fotbal</label>
        <? }else{ ?>
        <label><input type="checkbox" name="fotbal" value="1"  id="My_fotbal" onclick="myFunction_fotbal()">Fotbal</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_fotbal_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_fotbal" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_fotbal" name="pravidelnost_fotbal"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require "pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_fotbal_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($volejbal_01 == 1){ ?>
        <label><input type="checkbox" name="volejbal" value="1" checked  id="My_volejbal" onclick="myFunction_volejbal()">Volejbal</label>
        <? }else{ ?>
        <label><input type="checkbox" name="volejbal" value="1"  id="My_volejbal" onclick="myFunction_volejbal()">Volejbal</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_volejbal_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_volejbal" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_volejbal" name="pravidelnost_volejbal"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require "pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_volejbal_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>


    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($aerobic_01 == 1){ ?>
        <label><input type="checkbox" name="aerobic" value="1" checked  id="My_aerobic" onclick="myFunction_aerobic()">Aerobik</label>
        <? }else{ ?>
        <label><input type="checkbox" name="aerobic" value="1"  id="My_aerobic" onclick="myFunction_aerobic()">Aerobik</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_aerobic_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_aerobic" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_aerobic" name="pravidelnost_aerobic"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require "pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_aerobic_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($tanec_01 == 1){ ?>
        <label><input type="checkbox" name="tanec" value="1" checked  id="My_tanec" onclick="myFunction_tanec()">Tanec</label>
        <? }else{ ?>
        <label><input type="checkbox" name="tanec" value="1"  id="My_tanec" onclick="myFunction_tanec()">Tanec</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_tanec_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_tanec" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_tanec" name="pravidelnost_tanec"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require "pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_tanec_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($plavani_01 == 1){ ?>
        <label><input type="checkbox" name="plavani" value="1" checked  id="My_plavani" onclick="myFunction_plavani()">Plavání</label>
        <? }else{ ?>
        <label><input type="checkbox" name="plavani" value="1"  id="My_plavani" onclick="myFunction_plavani()">Plavání</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_plavani_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_plavani" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_plavani" name="pravidelnost_plavani"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require "pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_plavani_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($brusle_inline_01 == 1){ ?>
        <label><input type="checkbox" name="brusle_inline" value="1" checked  id="My_brusle_inline" onclick="myFunction_brusle_inline()">Brusle in-line</label>
        <? }else{ ?>
        <label><input type="checkbox" name="brusle_inline" value="1"  id="My_brusle_inline" onclick="myFunction_brusle_inline()">Brusle in-line</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_brusle_inline_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_brusle_inline" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_brusle_inline" name="pravidelnost_brusle_inline"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require "pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_brusle_inline_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($kolo_spinning_01 == 1){ ?>
        <label><input type="checkbox" name="kolo_spinning" value="1" checked  id="My_kolo_spinning" onclick="myFunction_kolo_spinning()">Kolo/Spinning</label>
        <? }else{ ?>
        <label><input type="checkbox" name="kolo_spinning" value="1"  id="My_kolo_spinning" onclick="myFunction_kolo_spinning()">Kolo/Spinning</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_kolo_spinning_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_kolo_spinning" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_kolo_spinning" name="pravidelnost_kolo_spinning"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require "pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_kolo_spinning_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($beh_01 == 1){ ?>
        <label><input type="checkbox" name="beh" value="1" checked  id="My_beh" onclick="myFunction_beh()">Běh</label>
        <? }else{ ?>
        <label><input type="checkbox" name="beh" value="1"  id="My_beh" onclick="myFunction_beh()">Běh</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_beh_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_beh" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_beh" name="pravidelnost_beh"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require "pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_beh_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($pesi_turistika_01 == 1){ ?>
        <label><input type="checkbox" name="pesi_turistika" value="1" checked  id="My_pesi_turistika" onclick="myFunction_pesi_turistika()">Pěší turistika/chůze</label>
        <? }else{ ?>
        <label><input type="checkbox" name="pesi_turistika" value="1"  id="My_pesi_turistika" onclick="myFunction_pesi_turistika()">Pěší turistika/chůze</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_pesi_turistika_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_pesi_turistika" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_pesi_turistika" name="pravidelnost_pesi_turistika"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require "pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_pesi_turistika_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($cchi_kung_01 == 1){ ?>
        <label><input type="checkbox" name="cchi_kung" value="1" checked  id="My_cchi_kung" onclick="myFunction_cchi_kung()">Čchi-kung</label>
        <? }else{ ?>
        <label><input type="checkbox" name="cchi_kung" value="1"  id="My_cchi_kung" onclick="myFunction_cchi_kung()">Čchi-kung</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_cchi_kung_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_cchi_kung" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_cchi_kung" name="pravidelnost_cchi_kung"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require "pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_cchi_kung_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($joga_01 == 1){ ?>
        <label><input type="checkbox" name="joga" value="1" checked  id="My_joga" onclick="myFunction_joga()">Jóga/Rehabilitační cvičení /Fyzio</label>
        <? }else{ ?>
        <label><input type="checkbox" name="joga" value="1"  id="My_joga" onclick="myFunction_joga()">Jóga/Rehabilitační cvičení /Fyzio</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_joga_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_joga" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_joga" name="pravidelnost_joga"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require "pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_joga_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($kondicni_treninky_01 == 1){ ?>
        <label><input type="checkbox" name="kondicni_treninky" value="1" checked  id="My_kondicni_treninky" onclick="myFunction_kondicni_treninky()">Fitness - kondiční trénink</label>
        <? }else{ ?>
        <label><input type="checkbox" name="kondicni_treninky" value="1"  id="My_kondicni_treninky" onclick="myFunction_kondicni_treninky()">Fitness - kondiční trénink</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_kondicni_treninky_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_kondicni_treninky" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_kondicni_treninky" name="pravidelnost_kondicni_treninky"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require "pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_kondicni_treninky_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>


    <div class="row" style="background-color:#e3fad6;">
        <div class="col-sm-3">

     <div class="checkbox">
        <? if ($tenis_squash_badminton_01 == 1){ ?>
        <label><input type="checkbox" name="tenis_squash_badminton" value="1" checked  id="My_tenis_squash_badminton" onclick="myFunction_tenis_squash_badminton()">Tenis/Squash/Badminton</label>
        <? }else{ ?>
        <label><input type="checkbox" name="tenis_squash_badminton" value="1"  id="My_tenis_squash_badminton" onclick="myFunction_tenis_squash_badminton()">Tenis/Squash/Badminton</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_tenis_squash_badminton_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_tenis_squash_badminton" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_tenis_squash_badminton" name="pravidelnost_tenis_squash_badminton"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require "pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_tenis_squash_badminton_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>
    </form>
  <br>
  <button type="submit" class="btn btn-success btn-sm"  onclick="loadSportPravidelneUpdate()">&nbsp;&nbsp;Uložit pravidelné sportovní a pohybové aktivity&nbsp;&nbsp;</button>  


  <br>

    <? require "pripojeni_databaze.php";
    $sql = "SELECT * FROM seznam WHERE seznam_cislo = '44' ORDER BY seznam_poradi ASC"; 
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {  
    
    require "pripojeni_databaze.php";
    $sql01 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
    $result01 = $conn->query($sql01);
    while($row01 = $result01->fetch_assoc()) {
       }
    ?>


<script>
function myFunction_<?echo $row["seznam_name"];?>() {
  var checkBox = document.getElementById("My_<?echo $row["seznam_name"];?>");
  var text = document.getElementById("text_<?echo $row["seznam_name"];?>");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>


    <? }
    $conn->close(); ?>   
    
</div>    
<br>
    







<script>
 function loadSportPravidelneUpdate() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("SportPravidelnetUpdate").innerHTML = this.responseText;
    }
  };

  let dataSportPravidelne = "uzivatel_id=<? echo $uzivatel_id;?>";

    tenis_squash_badminton = document.SportPravidelnetUpdate.tenis_squash_badminton;
           if(tenis_squash_badminton.checked) {
    tenis_squash_badminton = 1;
            }else{
    tenis_squash_badminton = 0;
            } 

    kondicni_treninky = document.SportPravidelnetUpdate.kondicni_treninky;
           if(kondicni_treninky.checked) {
    kondicni_treninky = 1;
            }else{
    kondicni_treninky= 0;
            } 

    joga = document.SportPravidelnetUpdate.joga;
           if(joga.checked) {
    joga = 1;
            }else{
    joga= 0;
            } 

    cchi_kung = document.SportPravidelnetUpdate.cchi_kung;
           if(cchi_kung.checked) {
    cchi_kung = 1;
            }else{
    cchi_kung= 0;
            } 

    pesi_turistika = document.SportPravidelnetUpdate.pesi_turistika;
           if(pesi_turistika.checked) {
    pesi_turistika = 1;
            }else{
    pesi_turistika= 0;
            } 

    beh = document.SportPravidelnetUpdate.beh;
           if(beh.checked) {
    beh = 1;
            }else{
    beh= 0;
            } 

kolo_spinning = document.SportPravidelnetUpdate.kolo_spinning;
           if(kolo_spinning.checked) {
kolo_spinning = 1;
            }else{
kolo_spinning= 0;
            } 
brusle_inline = document.SportPravidelnetUpdate.brusle_inline;
           if(brusle_inline.checked) {
brusle_inline = 1;
            }else{
brusle_inline= 0;
            }

plavani = document.SportPravidelnetUpdate.plavani;
           if(plavani.checked) {
plavani = 1;
            }else{
plavani= 0;
            }

tanec = document.SportPravidelnetUpdate.tanec;
           if(tanec.checked) {
tanec = 1;
            }else{
tanec= 0;
            }

aerobic = document.SportPravidelnetUpdate.aerobic;
           if(aerobic.checked) {
aerobic = 1;
            }else{
aerobic= 0;
            }

volejbal = document.SportPravidelnetUpdate.volejbal;
           if(volejbal.checked) {
volejbal = 1;
            }else{
volejbal= 0;
            }

fotbal = document.SportPravidelnetUpdate.fotbal;
           if(fotbal.checked) {
fotbal = 1;
            }else{
fotbal= 0;
            }


hokej = document.SportPravidelnetUpdate.hokej;
           if(hokej.checked) {
hokej = 1;
            }else{
hokej= 0;
            }

bojove_sporty = document.SportPravidelnetUpdate.bojove_sporty;
           if(bojove_sporty.checked) {
bojove_sporty = 1;
            }else{
bojove_sporty= 0;
            }

florbal = document.SportPravidelnetUpdate.florbal;
           if(florbal.checked) {
florbal = 1;
            }else{
florbal= 0;
        }

posilovani = document.SportPravidelnetUpdate.posilovani;
           if(posilovani.checked) {
posilovani = 1;
            }else{
posilovani= 0;
        }
        
pravidelnost_tenis_squash_badminton = document.SportPravidelnetUpdate.pravidelnost_tenis_squash_badminton.value
pravidelnost_kondicni_treninky = document.SportPravidelnetUpdate.pravidelnost_kondicni_treninky.value
pravidelnost_joga = document.SportPravidelnetUpdate.pravidelnost_joga.value
pravidelnost_cchi_kung = document.SportPravidelnetUpdate.pravidelnost_cchi_kung.value
pravidelnost_pesi_turistika = document.SportPravidelnetUpdate.pravidelnost_pesi_turistika.value
pravidelnost_beh = document.SportPravidelnetUpdate.pravidelnost_beh.value
pravidelnost_kolo_spinning = document.SportPravidelnetUpdate.pravidelnost_kolo_spinning.value
pravidelnost_brusle_inline = document.SportPravidelnetUpdate.pravidelnost_brusle_inline.value
pravidelnost_plavani = document.SportPravidelnetUpdate.pravidelnost_plavani.value
pravidelnost_tanec = document.SportPravidelnetUpdate.pravidelnost_tanec.value
pravidelnost_aerobic = document.SportPravidelnetUpdate.pravidelnost_aerobic.value
pravidelnost_volejbal = document.SportPravidelnetUpdate.pravidelnost_volejbal.value
pravidelnost_fotbal = document.SportPravidelnetUpdate.pravidelnost_fotbal.value
pravidelnost_hokej = document.SportPravidelnetUpdate.pravidelnost_hokej.value
pravidelnost_bojove_sporty = document.SportPravidelnetUpdate.pravidelnost_bojove_sporty.value
pravidelnost_florbal = document.SportPravidelnetUpdate.pravidelnost_florbal.value
pravidelnost_posilovani = document.SportPravidelnetUpdate.pravidelnost_posilovani.value


if (posilovani == 1 && pravidelnost_posilovani == 0 || florbal == 1 && pravidelnost_florbal == 0 || bojove_sporty == 1 && pravidelnost_bojove_sporty == 0 || hokej == 1 && pravidelnost_hokej == 0 || fotbal == 1 && pravidelnost_fotbal == 0 || volejbal == 1 && pravidelnost_volejbal == 0 || aerobic == 1 && pravidelnost_aerobic == 0 || 
tanec == 1 && pravidelnost_tanec == 0 || plavani == 1 && pravidelnost_plavani == 0 || brusle_inline == 1 && pravidelnost_brusle_inline == 0 || kolo_spinning == 1 && pravidelnost_kolo_spinning == 0 || beh == 1 && pravidelnost_beh == 0 || pesi_turistika == 1 && pravidelnost_pesi_turistika == 0 || cchi_kung == 1 && pravidelnost_cchi_kung == 0 || joga == 1 && pravidelnost_joga == 0 || kondicni_treninky == 1 && pravidelnost_kondicni_treninky == 0 || tenis_squash_badminton == 1 && pravidelnost_tenis_squash_badminton == 0){
    alert("Chyba validace formuláře! \nPokud vyberete některou aktivitu, musíte vybrat i časovou dotaci!!");

                                }else{

    dataSportPravidelne = dataSportPravidelne + "&posilovani=" + posilovani;
    dataSportPravidelne = dataSportPravidelne + "&pravidelnost_posilovani=" + pravidelnost_posilovani; 
    dataSportPravidelne = dataSportPravidelne + "&florbal=" + florbal;
    dataSportPravidelne = dataSportPravidelne + "&pravidelnost_florbal=" + pravidelnost_florbal; 
    dataSportPravidelne = dataSportPravidelne + "&bojove_sporty=" + bojove_sporty;
    dataSportPravidelne = dataSportPravidelne + "&pravidelnost_bojove_sporty=" + pravidelnost_bojove_sporty;  
    dataSportPravidelne = dataSportPravidelne + "&hokej=" + hokej;
    dataSportPravidelne = dataSportPravidelne + "&pravidelnost_hokej=" + pravidelnost_hokej;  
    dataSportPravidelne = dataSportPravidelne + "&fotbal=" + fotbal;
    dataSportPravidelne = dataSportPravidelne + "&pravidelnost_fotbal=" + pravidelnost_fotbal;  
    dataSportPravidelne = dataSportPravidelne + "&volejbal=" + volejbal;
    dataSportPravidelne = dataSportPravidelne + "&pravidelnost_volejbal=" + pravidelnost_volejbal;  
    dataSportPravidelne = dataSportPravidelne + "&aerobic=" + aerobic;
    dataSportPravidelne = dataSportPravidelne + "&pravidelnost_aerobic=" + pravidelnost_aerobic; 
    dataSportPravidelne = dataSportPravidelne + "&tanec=" + tanec;
    dataSportPravidelne = dataSportPravidelne + "&pravidelnost_tanec=" + pravidelnost_tanec; 
    dataSportPravidelne = dataSportPravidelne + "&plavani=" + plavani;
    dataSportPravidelne = dataSportPravidelne + "&pravidelnost_plavani=" + pravidelnost_plavani; 
    dataSportPravidelne = dataSportPravidelne + "&brusle_inline=" + brusle_inline;
    dataSportPravidelne = dataSportPravidelne + "&pravidelnost_brusle_inline=" + pravidelnost_brusle_inline; 
    dataSportPravidelne = dataSportPravidelne + "&kolo_spinning=" + kolo_spinning;
    dataSportPravidelne = dataSportPravidelne + "&pravidelnost_kolo_spinning=" + pravidelnost_kolo_spinning; 
    dataSportPravidelne = dataSportPravidelne + "&beh=" + beh;
    dataSportPravidelne = dataSportPravidelne + "&pravidelnost_beh=" + pravidelnost_beh; 
    dataSportPravidelne = dataSportPravidelne + "&pesi_turistika=" + pesi_turistika;
    dataSportPravidelne = dataSportPravidelne + "&pravidelnost_pesi_turistika=" + pravidelnost_pesi_turistika; 
    dataSportPravidelne = dataSportPravidelne + "&cchi_kung=" + cchi_kung;
    dataSportPravidelne = dataSportPravidelne + "&pravidelnost_cchi_kung=" + pravidelnost_cchi_kung; 
    dataSportPravidelne = dataSportPravidelne + "&joga=" + joga;
    dataSportPravidelne = dataSportPravidelne + "&pravidelnost_joga=" + pravidelnost_joga; 
    dataSportPravidelne = dataSportPravidelne + "&kondicni_treninky=" + kondicni_treninky;
    dataSportPravidelne = dataSportPravidelne + "&pravidelnost_kondicni_treninky=" + pravidelnost_kondicni_treninky; 
    dataSportPravidelne = dataSportPravidelne + "&tenis_squash_badminton=" + tenis_squash_badminton;
    dataSportPravidelne = dataSportPravidelne + "&pravidelnost_tenis_squash_badminton=" + pravidelnost_tenis_squash_badminton; 

    xhttp.open("POST", "./script/form_prav_sport_aktivity_update.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(dataSportPravidelne);
    alert("Uložení:\nZáznam o pravidelný sportovních aktivitách byl uložen uložen.");
                                }
    }
</script>






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
<div id="JogaUpdate">
<form id="JogaForm" name="JogaForm" method="post">
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
    </form>
  <br>
  <button type="submit" class="btn btn-success btn-sm"  onclick="loadJogaUpdate()">&nbsp;&nbsp;Uložit záznam o józe&nbsp;&nbsp;</button>  
</div> 


<script>
function loadJogaUpdate() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("JogaUpdate").innerHTML = this.responseText;
    }
  };


    lektor = document.JogaForm.lektor.value;
    joga_kurz = document.JogaForm.joga_kurz.value;

if (joga_kurz == 1 && !lektor){
    alert("Chyba! \nMusíte vyplnit lektora, nebo jinou informaci.");
}else{

    let dataJoga = "uzivatel_id=<? echo $uzivatel_id;?>";
    dataJoga = dataJoga + "&lektor="+lektor;
    dataJoga = dataJoga + "&joga_kurz="+joga_kurz;


    xhttp.open("POST", "./script/form_joga_update.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(dataJoga);
    alert("Uložení:\nZáznam o józe byl uložen.");
     }
    }
</script>


<div id="kineziologicky_rozbor<? echo $uzivatel_id;?>">
    <form id="kinez_rozbor" name="kinez_rozbor" method="post">

            <?
            require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
            $sql = "SELECT uzivatel_hmotnost, uzivatel_kg FROM uzivatel WHERE uzivatel_id = $uzivatel_id LIMIT 1";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) {
            $uzivatel_hmotnost =  $row["uzivatel_hmotnost"];
            $uzivatel_kg =  $row["uzivatel_kg"];
            }
            $conn->close();
            ?>

            <br/>
            <label for="uzivatel">Kineziologický rozbor:</label> 


        <?
            if (!$uzivatel_hmotnost && $uzivatel_kg == 0 ){
               // echo 'Uživatel musí vyplnit údaje<br>';
        ?>
        <br/><br/>
        <label for="uzivatel">Uživatel zatím nevyplnil požadované informace o aktuální hmotnosti.</label><br/><br/>
            <a href="krok_03_ulozeni.php?uzivatel_id=<? echo encrypt_decrypt('encrypt', $uzivatel_id);?>" type="button" class="btn btn-warning btn-sm">Doplnit data nyní</a>
            <br/><br/>

        <?          
            }else{

              //  echo 'tady bude fotmulář<br>';
          
            
            ?>


            <div class="row">
                <div class="col-sm-4">
                    <br/>
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
                    <br>    
                </div>


                <div class="form-group" id="otherFieldGroupDiv">
                    <div class="col-sm-4">
                        <br/>
                        <label for="uzivatel">Napište požadovanou korekci hmotnosti v kg:</label>
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" id="vahakg" value = "<?echo $uzivatel_kg;?>" name="kg" maxlength="2" placeholder="Napište číslo v kg">
                        <br>
                    </div>
                </div>
                <script src="./js/vaha.js"></script>    
            </div>


            <?
              }


            function GenerujDiv($jmeno, $hodnota, $popis)
            {
                if ($hodnota == 1){
                    echo '<label><input type="checkbox" name="'.$jmeno.'" value="1" checked>'.$popis.'</label> ';

                }else{

                    echo '<label><input type="checkbox" name="'.$jmeno.'" value="1">'.$popis.'</label> ';

                }
            
            }

        require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
        $sql_kineziologicky_rozbor = "SELECT * FROM kineziologicky_rozbor WHERE uzivatel_id = $uzivatel_id LIMIT 1";
        $result_kineziologicky_rozbor = $conn->query($sql_kineziologicky_rozbor);
        while($radek = $result_kineziologicky_rozbor->fetch_assoc()) {
        $nohy_x = $radek["nohy_x"];
        $nohy_O = $radek["nohy_O"];
        $nohy_posun_doleva = $radek["nohy_posun_doleva"];
        $nohy_posun_doprava = $radek["nohy_posun_doprava"];
        $nohy_prava_delsi_nez_leva = $radek["nohy_prava_delsi_nez_leva"]; 
        $nohy_leva_delsi_nez_prava = $radek["nohy_leva_delsi_nez_prava"]; 
        $vybocene_palce = $radek["vybocene_palce"];
        $ploche_nohy = $radek["ploche_nohy"];
        $skrcene_prsty = $radek["skrcene_prsty"];
        $prsty_blizko_u_sebe = $radek["prsty_blizko_u_sebe"];
        $ostruhy = $radek["ostruhy"];
        $ztuhle_narty = $radek["ztuhle_narty"];
        $kotniky_zatuhle = $radek["kotniky_zatuhle"];
        $kotniky_praskajici = $radek["kotniky_praskajici"];
        $kotniky_otekle = $radek["kotniky_otekle"];
        $kotniky_zkracene_achylovy_slachy = $radek["kotniky_zkracene_achylovy_slachy"];
        $kolena_posun_doleva = $radek["kolena_posun_doleva"];
        $kolena_posun_doprava = $radek["kolena_posun_doprava"];
        $kolena_stoceni_dovnitr = $radek["kolena_stoceni_dovnitr"];
        $kolena_vytoceni_ven = $radek["kolena_vytoceni_ven"];
        $panev_preklopena_podsazena = $radek["panev_preklopena_podsazena"];
        $panev_preklopena_dopredu = $radek["panev_preklopena_dopredu"];
        $panev_posunuta_dopredu_bez_preklopeni = $radek["panev_posunuta_dopredu_bez_preklopeni"];
        $panev_posunuta_dozadu_bez_preklopeni = $radek["panev_posunuta_dozadu_bez_preklopeni"];
        $panev_posun_doleva = $radek["panev_posun_doleva"];
        $panev_posun_doprava = $radek["panev_posun_doprava"];
        $panev_rotace_doleva = $radek["panev_rotace_doleva"];
        $panev_rotace_doprava = $radek["panev_rotace_doprava"];
        $panev_blokada = $radek["panev_blokada"];
        $ruce_posun_doleva = $radek["ruce_posun_doleva"];
        $ruce_posun_doprava = $radek["ruce_posun_doprava"];
        $ramena_posun_doleva = $radek["ramena_posun_doleva"];
        $ramena_posun_doprava = $radek["ramena_posun_doprava"];
        $ramena_zvednuta_tense_k_usim = $radek["ramena_zvednuta_tense_k_usim"];
        $ramena_dychani_do_ramen = $radek["ramena_dychani_do_ramen"];
        $lokty_tenisovy_loket = $radek["lokty_tenisovy_loket"];
        $zapesti_karpaly = $radek["zapesti_karpaly"];
        $zapesti_neohebnost = $radek["zapesti_neohebnost"];
        $zapesti_zatuhlost = $radek["zapesti_zatuhlost"];
        $pater_kulata_zada = $radek["pater_kulata_zada"];
        $pater_prohnuta_zada = $radek["pater_prohnuta_zada"];
        $pater_plocha_zada = $radek["pater_plocha_zada"];
        $pater_skolioticke_drzeni = $radek["pater_skolioticke_drzeni"];
        $pater_dysbalace_prave_ruky = $radek["pater_dysbalace_prave_ruky"];
        $pater_dysbalace_leve_ruky = $radek["pater_dysbalace_leve_ruky"];
        $krcni_ztuhlost_sije = $radek["krcni_ztuhlost_sije"];
        $krcni_stuhlost_trapezu = $radek["krcni_stuhlost_trapezu"];
        $krcni_vyoseni_doleva = $radek["krcni_vyoseni_doleva"];
        $krcni_vyoseni_doprava = $radek["krcni_vyoseni_doprava"];
        $krcni_posun_brady_doleva = $radek["krcni_posun_brady_doleva"];
        $krcni_posun_brady_doprava = $radek["krcni_posun_brady_doprava"];
        $krcni_mala_lordoza = $radek["krcni_mala_lordoza"];
        $krcni_velka_lordoza = $radek["krcni_velka_lordoza"];
        $krcni_vyhrez = $radek["krcni_vyhrez"];
        $krcni_zaklon_dozadu = $radek["krcni_zaklon_dozadu"];
        $krcni_predsun_dopredu = $radek["krcni_predsun_dopredu"];
        $krcni_hlava_v_ramenou = $radek["krcni_hlava_v_ramenou"];
        $krcni_posun_jazylky = $radek["krcni_posun_jazylky"];
        $krcni_oteklost_sije_z_leve_strany = $radek["krcni_oteklost_sije_z_leve_strany"];
        $krcni_oteklost_sije_z_prave_strany = $radek["krcni_oteklost_sije_z_prave_strany"];
        $hrudni_vyhrbeni = $radek["hrudni_vyhrbeni"];
        $hrudni_prohnuti = $radek["hrudni_prohnuti"];
        $hrudni_hrb_na_zadech = $radek["hrudni_hrb_na_zadech"];
        $hrudni_vyoseni_doleva = $radek["hrudni_vyoseni_doleva"];
        $hrudni_vyoseni_doprava = $radek["hrudni_vyoseni_doprava"];
        $hrudni_vyhrez = $radek["hrudni_vyhrez"];
        $hrudni_blokada_zeber = $radek["hrudni_blokada_zeber"];
        $hrudni_posun_zeber_doleva = $radek["hrudni_posun_zeber_doleva"];
        $hrudni_posun_zeber_doprava = $radek["hrudni_posun_zeber_doprava"];
        $hrudni_melke_dychani = $radek["hrudni_melke_dychani"];
        $hrudni_nepruznost_zeber = $radek["hrudni_nepruznost_zeber"];
        $lopatky_posun_doleva = $radek["lopatky_posun_doleva"];
        $lopatky_posun_doprava = $radek["lopatky_posun_doprava"];
        $lopatky_vylezaji_ven = $radek["lopatky_vylezaji_ven"];
        $bederni_prohnuti = $radek["bederni_prohnuti"];
        $bederni_vyoseni_doleva = $radek["bederni_vyoseni_doleva"];
        $bederni_vyoseni_doprava = $radek["bederni_vyoseni_doprava"];
        $bederni_vyhrez = $radek["bederni_vyhrez"]; 
        $hypermobilita_krcni_pater = $radek["hypermobilita_krcni_pater"]; 
        $hypermobilita_hrudni_pater = $radek["hypermobilita_hrudni_pater"]; 
        $hypermobilita_bederni_pater = $radek["hypermobilita_bederni_pater"]; 
        $hypermobilita_krizova_kost = $radek["hypermobilita_krizova_kost"]; 
        $hypermobilita_kostrc = $radek["hypermobilita_kostrc"]; 
        $hypermobilita_ramena = $radek["hypermobilita_ramena"]; 
        $hypermobilita_lokty = $radek["hypermobilita_lokty"]; 
        $hypermobilita_zapesti = $radek["hypermobilita_zapesti"]; 
        $hypermobilita_prsty_na_rukou = $radek["hypermobilita_prsty_na_rukou"]; 
        $hypermobilita_kycle = $radek["hypermobilita_kycle"]; 
        $hypermobilita_kolena = $radek["hypermobilita_kolena"]; 
        $hypermobilita_kotniky = $radek["hypermobilita_kotniky"]; 
        $hypermobilita_prsty_na_nohou = $radek["hypermobilita_prsty_na_nohou"];  
        $svaly_ztuhle = $radek["svaly_ztuhle"];  
        $svaly_povolene = $radek["svaly_povolene"];  
        $svaly_poznamka = $radek["svaly_poznamka"];  


        } 

        $conn->close(); 
        ?>
            <div class="row" style="background-color:#f2f3f5;">
            <div class="col-sm-12">

                <div class="row">   
                    <div class="col-sm-2" style="background-color:#faf7bd;">
                            <br>
                            <label for="uzivatel">Postavení nohou:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('nohy_x', $nohy_x, 'X') ?>                  
                            
                    </div>
                            <div class="checkbox">
                            <?  GenerujDiv('nohy_O', $nohy_O, 'O') ?>   
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('nohy_posun_doleva', $nohy_posun_doleva, 'posun doleva') ?>      
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('nohy_posun_doprava', $nohy_posun_doprava, 'posun doprava') ?>    
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('nohy_prava_delsi_nez_leva', $nohy_prava_delsi_nez_leva, 'pravá delší než levá') ?>    
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('nohy_leva_delsi_nez_prava', $nohy_leva_delsi_nez_prava, 'levá delší než pravá ') ?>    
                            </div>                    




                    </div>

                    <div class="col-sm-2" style="background-color:#c0f9f8;">
                            <br>
                            <label for="uzivatel">Plosky nohou:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('vybocene_palce', $vybocene_palce, 'vybočené palce') ?>      
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('ploche_nohy', $ploche_nohy, 'ploché nohy') ?>       
                            

                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('skrcene_prsty', $skrcene_prsty, 'skrčené prsty') ?>       
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('prsty_blizko_u_sebe', $prsty_blizko_u_sebe, 'prsty blízko u sebe') ?>   
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('ostruhy', $ostruhy, 'ostruhy') ?>     
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('ztuhle_narty', $ztuhle_narty, 'ztuhlé nárty') ?>  
                            
                            </div>
                    </div>


                    <div class="col-sm-3" style="background-color:#d5ec95;">
                            <br>
                            <label for="uzivatel">Kotníky:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('kotniky_zatuhle', $kotniky_zatuhle, 'zatuhlé') ?>  

                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('kotniky_praskajici', $kotniky_praskajici, 'praskající') ?> 

                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('kotniky_otekle', $kotniky_otekle, 'oteklé') ?> 
        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('kotniky_zkracene_achylovy_slachy', $kotniky_zkracene_achylovy_slachy, 'zkrácené achylovy šlachy') ?>    

                            </div>
                    </div>

                    <div class="col-sm-2" style="background-color:#fae6aa;">
                            <br>
                            <label for="uzivatel">Kolena:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('kolena_posun_doleva', $kolena_posun_doleva, 'posun doleva') ?>      

                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('kolena_posun_doprava', $kolena_posun_doprava, 'posun doprava') ?>  

                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('kolena_stoceni_dovnitr', $kolena_stoceni_dovnitr, 'stočení dovnitř') ?>    
        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('kolena_vytoceni_ven', $kolena_vytoceni_ven, 'vytočení ven') ?> 
                        
                            </div>
                    </div>

                    <div class="col-sm-3" style="background-color:#f7d7b8;">
                            <br>
                            <label for="uzivatel">Pánev:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('panev_preklopena_podsazena', $panev_preklopena_podsazena, 'překlopená - podsazená') ?> 
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('panev_preklopena_dopredu', $panev_preklopena_dopredu, 'překlopená - dopředu') ?>    
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('panev_posunuta_dopredu_bez_preklopeni', $panev_posunuta_dopredu_bez_preklopeni, 'posunutá dopředu bez překlopení') ?>     
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('panev_posunuta_dozadu_bez_preklopeni', $panev_posunuta_dozadu_bez_preklopeni, 'posunutá dozadu bez překlopení') ?>      
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('panev_posun_doleva', $panev_posun_doleva, 'posun doleva') ?>  
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('panev_posun_doprava', $panev_posun_doprava, 'posun doprava') ?>     
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('panev_rotace_doleva', $panev_rotace_doleva, 'rotace doleva') ?>    
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('panev_rotace_doprava', $panev_rotace_doprava, 'rotace doprava') ?> 
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('panev_blokada', $panev_blokada, 'blokáda') ?> 
                            
                            </div>
                    </div>
            
                </div>


                <div class="row">  

                    <div class="col-sm-2" style="background-color:#ece0f4;">
                            <br>
                            <label for="uzivatel">Postavení rukou:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('ruce_posun_doleva', $ruce_posun_doleva, 'posun doleva') ?> 
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('ruce_posun_doprava', $ruce_posun_doprava, 'posun doprava') ?> 
                            
                            </div>
                    </div>

                    <div class="col-sm-3" style="background-color:#eacbd7;">
                            <br>
                            <label for="uzivatel">Ramena:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('ramena_posun_doleva', $ramena_posun_doleva, 'posun doleva') ?>    
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('ramena_posun_doprava', $ramena_posun_doprava, 'posun doprava') ?>        
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('ramena_zvednuta_tense_k_usim', $ramena_zvednuta_tense_k_usim, 'zvednutá tense k uším') ?>      
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('ramena_dychani_do_ramen', $ramena_dychani_do_ramen, 'dýchání do ramen') ?>      
                            
                            </div>

                    </div>

                    <div class="col-sm-2" style="background-color:#d1d6f7;">
                            <br>
                            <label for="uzivatel">Lokty:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('lokty_tenisovy_loket', $lokty_tenisovy_loket, 'tenisový loket') ?>  
                            
                            </div> 
                    </div>  

                    <div class="col-sm-2" style="background-color:#d1f7e7;">
                            <br>
                            <label for="uzivatel">Zápěstí:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('zapesti_karpaly', $zapesti_karpaly, 'karpály') ?>  
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('zapesti_neohebnost', $zapesti_neohebnost, 'neohebnost') ?>  
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('zapesti_zatuhlost', $zapesti_zatuhlost, 'zatuhlost') ?> 
                            
                            </div>

                    </div>  

                    <div class="col-sm-3" style="background-color:#f7f5d1;">
                            <br>
                            <label for="uzivatel">Postavení páteře:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('pater_kulata_zada', $pater_kulata_zada, 'Kulatá záda') ?>    
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('pater_prohnuta_zada', $pater_prohnuta_zada, 'Prohnutá záda') ?> 
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('pater_plocha_zada', $pater_plocha_zada, 'Plochá záda') ?>    
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('pater_skolioticke_drzeni', $pater_skolioticke_drzeni, 'Skoliotické držení') ?>
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('pater_dysbalace_leve_ruky', $pater_dysbalace_leve_ruky, 'Dysbalance levé ruky') ?>   
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('pater_dysbalace_prave_ruky', $pater_dysbalace_prave_ruky, 'Dysbalance pravé ruky') ?>  
                            
                            </div>
                
                    </div>
                </div>

                <div class="row">  

                    <div class="col-sm-4" style="background-color:#f9e9aa;">
                            <br>
                            <label for="uzivatel">Krční:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_ztuhlost_sije', $krcni_ztuhlost_sije, 'ztuhlost šíje') ?>     
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_stuhlost_trapezu', $krcni_stuhlost_trapezu, 'ztuhlost trapézů') ?> 
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_vyoseni_doleva', $krcni_vyoseni_doleva, 'vyosení doleva') ?>
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_vyoseni_doprava', $krcni_vyoseni_doprava, 'vyosení doprava') ?>
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_posun_brady_doleva', $krcni_posun_brady_doleva, 'posun brady doleva') ?>   
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_posun_brady_doprava', $krcni_posun_brady_doprava, 'posun brady doprava') ?>  
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_mala_lordoza', $krcni_mala_lordoza, 'malá lordóza') ?>  
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_velka_lordoza', $krcni_velka_lordoza, 'velká lordóza') ?>  
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_vyhrez', $krcni_vyhrez, 'výhřez') ?>  
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_zaklon_dozadu', $krcni_zaklon_dozadu, 'záklon dozadu (brada zvednutá nahoru)') ?> 
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_predsun_dopredu', $krcni_predsun_dopredu, 'předsun dopředu') ?> 
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_hlava_v_ramenou', $krcni_hlava_v_ramenou, 'hlava v ramenou') ?> 
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_posun_jazylky', $krcni_posun_jazylky, 'posun jazylky') ?> 
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_oteklost_sije_z_leve_strany', $krcni_oteklost_sije_z_leve_strany, 'oteklost šíje z levé strany') ?> 
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_oteklost_sije_z_prave_strany', $krcni_oteklost_sije_z_prave_strany, 'oteklost šíje z pravé strany') ?> 
                            
                            </div>            
                    </div>

                    <div class="col-sm-2" style="background-color:#aaebf9;">
                        <br>
                        <label for="uzivatel">Hrudní:</label>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_vyhrbeni', $hrudni_vyhrbeni, 'vyhrbení') ?>     
                        
                        </div> 
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_prohnuti', $hrudni_prohnuti, 'prohnutí') ?> 
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_hrb_na_zadech', $hrudni_hrb_na_zadech, 'hrb na zádech') ?> 
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_vyoseni_doleva', $hrudni_vyoseni_doleva, 'vyosení doleva') ?> 
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_vyoseni_doprava', $hrudni_vyoseni_doprava, 'vyosení doprava') ?> 
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_vyhrez', $hrudni_vyhrez, 'výhřez') ?> 
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_blokada_zeber', $hrudni_blokada_zeber, 'blokáda žeber') ?> 
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_posun_zeber_doleva', $hrudni_posun_zeber_doleva, 'posun žeber doleva') ?> 
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_posun_zeber_doprava', $hrudni_posun_zeber_doprava, 'posun žeber doprava') ?> 
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_melke_dychani', $hrudni_melke_dychani, 'mělké dýchání') ?> 
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_nepruznost_zeber', $hrudni_nepruznost_zeber, 'nepružnost žeber') ?> 
                    
                        </div>        
                    </div>


                    <div class="col-sm-2" style="background-color:#baf9aa;">
                        <br>
                        <label for="uzivatel">Lopatky:</label>
                        <div class="checkbox">
                        <?  GenerujDiv('lopatky_posun_doleva', $lopatky_posun_doleva, 'posun doleva') ?> 
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('lopatky_posun_doprava', $lopatky_posun_doprava, 'posun doprava') ?> 
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('lopatky_vylezaji_ven', $lopatky_vylezaji_ven, 'vylézají ven') ?> 
                    
                        </div>
                    </div>

                    <div class="col-sm-2" style="background-color:#f9c8aa;">
                        <br>
                        <label for="uzivatel">Bederní:</label>
                        <div class="checkbox">
                        <?  GenerujDiv('bederni_prohnuti', $bederni_prohnuti, 'prohnutí') ?> 
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('bederni_vyoseni_doleva', $bederni_vyoseni_doleva, 'vyosení doleva') ?>
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('bederni_vyoseni_doprava', $bederni_vyoseni_doprava, 'vyosení doprava') ?>
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('bederni_vyhrez', $bederni_vyhrez, 'výhřez') ?>
                        
                        </div>
                    </div>

                    <div class="col-sm-2" style="background-color:#f9f3aa;">
                        <br>
                        <label for="uzivatel">Hypermobilita:</label>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_krcni_pater', $hypermobilita_krcni_pater, 'krční páteř') ?>
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_hrudni_pater', $hypermobilita_hrudni_pater, 'hrudní páteř') ?>
                
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_bederni_pater', $hypermobilita_bederni_pater, 'bederní páteř') ?>
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_krizova_kost', $hypermobilita_krizova_kost, 'křížová kost') ?>
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_kostrc', $hypermobilita_kostrc, 'kostrč') ?>
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_ramena', $hypermobilita_ramena, 'ramena') ?>
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_lokty', $hypermobilita_lokty, 'lokty') ?>
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_zapesti', $hypermobilita_zapesti, 'zápěstí') ?>
                
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_prsty_na_rukou', $hypermobilita_prsty_na_rukou, 'prsty na rukou') ?>
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_kycle', $hypermobilita_kycle, 'kyčle') ?>
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_kolena', $hypermobilita_kolena, 'kolena') ?>
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_kotniky', $hypermobilita_kotniky, 'kotníky') ?>
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_prsty_na_nohou', $hypermobilita_prsty_na_nohou, 'prsty na nohou') ?>
                    
                        </div>

                    </div>

                </div>

                <H4 align="center">Svaly</H4>
                <div class="row"> 
                    <div class="col-sm-12">
                        
                        <label for="uzivatel">Ztuhlé:</label>
                        <textarea class="form-control" id="svaly_ztuhle" name="svaly_ztuhle" rows="2" maxlength="200" style="background-color:#FFFFFF;"><? echo $svaly_ztuhle; ?></textarea>
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-sm-12">
                        <br/>
                        <label for="uzivatel">Povolené:</label>
                        <textarea class="form-control" id="svaly_povolene" name="svaly_povolene" rows="2" maxlength="200" style="background-color:#FFFFFF;"><? echo $svaly_povolene; ?></textarea>
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-sm-12">
                        <br/>
                        <label for="uzivatel">Poznámka:</label>
                        <textarea class="form-control" id="svaly_poznamka" name="svaly_poznamka" rows="3" maxlength="200" style="background-color:#FFFFFF;"><? echo $svaly_poznamka; ?></textarea>
                        <br/>    
                    </div>
                </div>


            </div>
            </div>
            </form>
    <br>
    <button type="submit" class="btn btn-success btn-sm"  onclick="loadKineziologicky_rozbor()">&nbsp;&nbsp;Uložit kineziologický rozbor&nbsp;&nbsp;</button>

</div>
<br/>

<script>

function loadKineziologicky_rozbor() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("kineziologicky_rozbor<? echo $uzivatel_id;?>").innerHTML = this.responseText;
    }
  };
 
  let dataKineziologicky_rozbor = "uzivatel_id=<?echo $uzivatel_id; ?>";

        nohy_x = document.kinez_rozbor.nohy_x;      
                if(nohy_x.checked) {
                    nohy_x = 1;
                }else{
                nohy_x = 0;
                    }

        nohy_O = document.kinez_rozbor.nohy_O;      
                if(nohy_O.checked) {
                    nohy_O = 1;
                }else{
                    nohy_O = 0;
                    }


        nohy_posun_doleva = document.kinez_rozbor.nohy_posun_doleva;      
                if(nohy_posun_doleva.checked) {
                    nohy_posun_doleva = 1;
                }else{
                    nohy_posun_doleva = 0;
                    }                

        nohy_posun_doprava = document.kinez_rozbor.nohy_posun_doprava; 
                if(nohy_posun_doprava.checked) {
                        nohy_posun_doprava = 1;
                }else{
                        nohy_posun_doprava = 0;
                        } 

        nohy_prava_delsi_nez_leva = document.kinez_rozbor.nohy_prava_delsi_nez_leva; 
                if(nohy_prava_delsi_nez_leva.checked) {
                    nohy_prava_delsi_nez_leva = 1;
                }else{
                    nohy_prava_delsi_nez_leva = 0;
                        } 
        
        nohy_leva_delsi_nez_prava = document.kinez_rozbor.nohy_leva_delsi_nez_prava; 
                if(nohy_leva_delsi_nez_prava.checked) {
                    nohy_leva_delsi_nez_prava = 1;
                }else{
                    nohy_leva_delsi_nez_prava = 0;
                        } 


        vybocene_palce = document.kinez_rozbor.vybocene_palce; 
                if(vybocene_palce.checked) {
                    vybocene_palce = 1;
                }else{
                    vybocene_palce = 0;
                        } 

        ploche_nohy = document.kinez_rozbor.ploche_nohy; 
                if(ploche_nohy.checked) {
                    ploche_nohy = 1;
                }else{
                    ploche_nohy = 0;
                        } 

        skrcene_prsty = document.kinez_rozbor.skrcene_prsty; 
                if(skrcene_prsty.checked) {
                    skrcene_prsty = 1;
                }else{
                    skrcene_prsty = 0;
                        } 

        prsty_blizko_u_sebe = document.kinez_rozbor.prsty_blizko_u_sebe; 
                if(prsty_blizko_u_sebe.checked) {
                    prsty_blizko_u_sebe = 1;
                }else{
                    prsty_blizko_u_sebe = 0;
                        } 

        ostruhy = document.kinez_rozbor.ostruhy; 
                if(ostruhy.checked) {
                    ostruhy = 1;
                }else{
                    ostruhy = 0;
                        } 

        ztuhle_narty = document.kinez_rozbor.ztuhle_narty; 
                if(ztuhle_narty.checked) {
                    ztuhle_narty = 1;
                }else{
                    ztuhle_narty = 0;
                        } 

        kotniky_zatuhle = document.kinez_rozbor.kotniky_zatuhle; 
                if(kotniky_zatuhle.checked) {
                    kotniky_zatuhle = 1;
                }else{
                    kotniky_zatuhle = 0;
                        } 

        kotniky_praskajici = document.kinez_rozbor.kotniky_praskajici; 
                if(kotniky_praskajici.checked) {
                    kotniky_praskajici = 1;
                }else{
                    kotniky_praskajici = 0;
                        } 

        kotniky_otekle = document.kinez_rozbor.kotniky_otekle; 
                if(kotniky_otekle.checked) {
                    kotniky_otekle = 1;
                }else{
                    kotniky_otekle = 0;
                        } 

        kotniky_zkracene_achylovy_slachy = document.kinez_rozbor.kotniky_zkracene_achylovy_slachy; 
                if(kotniky_zkracene_achylovy_slachy.checked) {
                    kotniky_zkracene_achylovy_slachy = 1;
                }else{
                    kotniky_zkracene_achylovy_slachy = 0;
                        } 

        kolena_posun_doleva = document.kinez_rozbor.kolena_posun_doleva; 
                if(kolena_posun_doleva.checked) {
                    kolena_posun_doleva = 1;
                }else{
                    kolena_posun_doleva = 0;
                        } 

        kolena_posun_doprava = document.kinez_rozbor.kolena_posun_doprava; 
                if(kolena_posun_doprava.checked) {
                    kolena_posun_doprava = 1;
                }else{
                    kolena_posun_doprava = 0;
                        } 

        kolena_stoceni_dovnitr = document.kinez_rozbor.kolena_stoceni_dovnitr; 
                if(kolena_stoceni_dovnitr.checked) {
                    kolena_stoceni_dovnitr = 1;
                }else{
                    kolena_stoceni_dovnitr = 0;
                        } 


        kolena_vytoceni_ven = document.kinez_rozbor.kolena_vytoceni_ven; 
                if(kolena_vytoceni_ven.checked) {
                    kolena_vytoceni_ven = 1;
                }else{
                    kolena_vytoceni_ven = 0;
                        } 

        panev_preklopena_podsazena = document.kinez_rozbor.panev_preklopena_podsazena; 
                if(panev_preklopena_podsazena.checked) {
                    panev_preklopena_podsazena = 1;
                }else{
                    panev_preklopena_podsazena = 0;
                        }     

        panev_preklopena_dopredu = document.kinez_rozbor.panev_preklopena_dopredu; 
                if(panev_preklopena_dopredu.checked) {
                    panev_preklopena_dopredu = 1;
                }else{
                    panev_preklopena_dopredu = 0;
                        }  

        panev_posunuta_dopredu_bez_preklopeni = document.kinez_rozbor.panev_posunuta_dopredu_bez_preklopeni; 
                if(panev_posunuta_dopredu_bez_preklopeni.checked) {
                    panev_posunuta_dopredu_bez_preklopeni = 1;
                }else{
                    panev_posunuta_dopredu_bez_preklopeni = 0;
                        } 

        panev_posunuta_dozadu_bez_preklopeni = document.kinez_rozbor.panev_posunuta_dozadu_bez_preklopeni; 
                if(panev_posunuta_dozadu_bez_preklopeni.checked) {
                    panev_posunuta_dozadu_bez_preklopeni = 1;
                }else{
                    panev_posunuta_dozadu_bez_preklopeni = 0;
                        } 

        
        panev_posun_doleva = document.kinez_rozbor.panev_posun_doleva; 
                if(panev_posun_doleva.checked) {
                    panev_posun_doleva = 1;
                }else{
                    panev_posun_doleva = 0;
                        } 

        panev_posun_doprava = document.kinez_rozbor.panev_posun_doprava; 
                if(panev_posun_doprava.checked) {
                    panev_posun_doprava = 1;
                }else{
                    panev_posun_doprava = 0;
                        } 


        panev_rotace_doleva = document.kinez_rozbor.panev_rotace_doleva; 
                if(panev_rotace_doleva.checked) {
                    panev_rotace_doleva = 1;
                }else{
                    panev_rotace_doleva = 0;
                        } 

        panev_rotace_doprava = document.kinez_rozbor.panev_rotace_doprava; 
                if(panev_rotace_doprava.checked) {
                    panev_rotace_doprava = 1;
                }else{
                    panev_rotace_doprava = 0;
                        } 

        panev_blokada = document.kinez_rozbor.panev_blokada; 
                if(panev_blokada.checked) {
                    panev_blokada = 1;
                }else{
                    panev_blokada = 0;
                        } 

        ruce_posun_doleva = document.kinez_rozbor.ruce_posun_doleva; 
                if(ruce_posun_doleva.checked) {
                    ruce_posun_doleva = 1;
                }else{
                    ruce_posun_doleva = 0;
                        } 

        ruce_posun_doprava = document.kinez_rozbor.ruce_posun_doprava; 
                if(ruce_posun_doprava.checked) {
                    ruce_posun_doprava = 1;
                }else{
                    ruce_posun_doprava = 0;
                        } 


        ramena_posun_doleva = document.kinez_rozbor.ramena_posun_doleva; 
                if(ramena_posun_doleva.checked) {
                    ramena_posun_doleva = 1;
                }else{
                    ramena_posun_doleva = 0;
                        } 

        ramena_posun_doprava = document.kinez_rozbor.ramena_posun_doprava; 
                if(ramena_posun_doprava.checked) {
                    ramena_posun_doprava = 1;
                }else{
                    ramena_posun_doprava = 0;
                        } 
  
        ramena_zvednuta_tense_k_usim = document.kinez_rozbor.ramena_zvednuta_tense_k_usim; 
                if(ramena_zvednuta_tense_k_usim.checked) {
                    ramena_zvednuta_tense_k_usim = 1;
                }else{
                    ramena_zvednuta_tense_k_usim = 0;
                        }  
  
        ramena_dychani_do_ramen = document.kinez_rozbor.ramena_dychani_do_ramen; 
                if(ramena_dychani_do_ramen.checked) {
                    ramena_dychani_do_ramen = 1;
                }else{
                    ramena_dychani_do_ramen = 0;
                        }   
  
        lokty_tenisovy_loket = document.kinez_rozbor.lokty_tenisovy_loket; 
                if(lokty_tenisovy_loket.checked) {
                    lokty_tenisovy_loket = 1;
                }else{
                    lokty_tenisovy_loket = 0;
                        }   
  
        zapesti_karpaly = document.kinez_rozbor.zapesti_karpaly; 
                if(zapesti_karpaly.checked) {
                    zapesti_karpaly = 1;
                }else{
                    zapesti_karpaly = 0;
                        } 
                        

        zapesti_neohebnost = document.kinez_rozbor.zapesti_neohebnost; 
                if(zapesti_neohebnost.checked) {
                    zapesti_neohebnost = 1;
                }else{
                    zapesti_neohebnost = 0;
                        } 

        zapesti_zatuhlost = document.kinez_rozbor.zapesti_zatuhlost; 
                if(zapesti_zatuhlost.checked) {
                    zapesti_zatuhlost = 1;
                }else{
                    zapesti_zatuhlost = 0;
                        } 

        pater_kulata_zada = document.kinez_rozbor.pater_kulata_zada; 
                if(pater_kulata_zada.checked) {
                    pater_kulata_zada = 1;
                }else{
                    pater_kulata_zada = 0;
                        } 

        pater_prohnuta_zada = document.kinez_rozbor.pater_prohnuta_zada; 
                if(pater_prohnuta_zada.checked) {
                    pater_prohnuta_zada = 1;
                }else{
                    pater_prohnuta_zada = 0;
                        } 


        pater_plocha_zada = document.kinez_rozbor.pater_plocha_zada; 
                if(pater_plocha_zada.checked) {
                    pater_plocha_zada = 1;
                }else{
                    pater_plocha_zada = 0;
                        } 

        pater_skolioticke_drzeni = document.kinez_rozbor.pater_skolioticke_drzeni; 
                if(pater_skolioticke_drzeni.checked) {
                    pater_skolioticke_drzeni = 1;
                }else{
                    pater_skolioticke_drzeni = 0;
                        } 

        pater_dysbalace_leve_ruky = document.kinez_rozbor.pater_dysbalace_leve_ruky; 
                if(pater_dysbalace_leve_ruky.checked) {
                    pater_dysbalace_leve_ruky = 1;
                }else{
                    pater_dysbalace_leve_ruky = 0;
                        } 

        pater_dysbalace_prave_ruky = document.kinez_rozbor.pater_dysbalace_prave_ruky; 
                if(pater_dysbalace_prave_ruky.checked) {
                    pater_dysbalace_prave_ruky = 1;
                }else{
                    pater_dysbalace_prave_ruky = 0;
                        }  
  
        krcni_ztuhlost_sije = document.kinez_rozbor.krcni_ztuhlost_sije; 
                if(krcni_ztuhlost_sije.checked) {
                    krcni_ztuhlost_sije = 1;
                }else{
                    krcni_ztuhlost_sije = 0;
                        }   

        krcni_stuhlost_trapezu = document.kinez_rozbor.krcni_stuhlost_trapezu; 
                if(krcni_stuhlost_trapezu.checked) {
                    krcni_stuhlost_trapezu = 1;
                }else{
                    krcni_stuhlost_trapezu = 0;
                        } 

        krcni_vyoseni_doleva = document.kinez_rozbor.krcni_vyoseni_doleva; 
                if(krcni_vyoseni_doleva.checked) {
                    krcni_vyoseni_doleva = 1;
                }else{
                    krcni_vyoseni_doleva = 0;
                        } 

        krcni_vyoseni_doprava = document.kinez_rozbor.krcni_vyoseni_doprava; 
                if(krcni_vyoseni_doprava.checked) {
                    krcni_vyoseni_doprava = 1;
                }else{
                    krcni_vyoseni_doprava = 0;
                        } 

        krcni_posun_brady_doleva = document.kinez_rozbor.krcni_posun_brady_doleva; 
                if(krcni_posun_brady_doleva.checked) {
                    krcni_posun_brady_doleva = 1;
                }else{
                    krcni_posun_brady_doleva = 0;
                        } 

        krcni_posun_brady_doprava = document.kinez_rozbor.krcni_posun_brady_doprava; 
                if(krcni_posun_brady_doprava.checked) {
                    krcni_posun_brady_doprava = 1;
                }else{
                    krcni_posun_brady_doprava = 0;
                        } 
  
        krcni_mala_lordoza = document.kinez_rozbor.krcni_mala_lordoza; 
                if(krcni_mala_lordoza.checked) {
                    krcni_mala_lordoza = 1;
                }else{
                    krcni_mala_lordoza = 0;
                        }   
  
        krcni_velka_lordoza = document.kinez_rozbor.krcni_velka_lordoza; 
                if(krcni_velka_lordoza.checked) {
                    krcni_velka_lordoza = 1;
                }else{
                    krcni_velka_lordoza = 0;
                        }    

        krcni_vyhrez = document.kinez_rozbor.krcni_vyhrez; 
                if(krcni_vyhrez.checked) {
                    krcni_vyhrez = 1;
                }else{
                    krcni_vyhrez = 0;
                        } 

        krcni_zaklon_dozadu = document.kinez_rozbor.krcni_zaklon_dozadu; 
                if(krcni_zaklon_dozadu.checked) {
                    krcni_zaklon_dozadu = 1;
                }else{
                    krcni_zaklon_dozadu = 0;
                        } 

        krcni_predsun_dopredu = document.kinez_rozbor.krcni_predsun_dopredu; 
                if(krcni_predsun_dopredu.checked) {
                    krcni_predsun_dopredu = 1;
                }else{
                    krcni_predsun_dopredu = 0;
                        } 

        krcni_hlava_v_ramenou = document.kinez_rozbor.krcni_hlava_v_ramenou; 
                if(krcni_hlava_v_ramenou.checked) {
                    krcni_hlava_v_ramenou = 1;
                }else{
                    krcni_hlava_v_ramenou = 0;
                        } 

        krcni_posun_jazylky = document.kinez_rozbor.krcni_posun_jazylky; 
                if(krcni_posun_jazylky.checked) {
                    krcni_posun_jazylky = 1;
                }else{
                    krcni_posun_jazylky = 0;
                        } 

        krcni_oteklost_sije_z_leve_strany = document.kinez_rozbor.krcni_oteklost_sije_z_leve_strany; 
                if(krcni_oteklost_sije_z_leve_strany.checked) {
                    krcni_oteklost_sije_z_leve_strany = 1;
                }else{
                    krcni_oteklost_sije_z_leve_strany = 0;
                        } 

        krcni_oteklost_sije_z_prave_strany = document.kinez_rozbor.krcni_oteklost_sije_z_prave_strany; 
                if(krcni_oteklost_sije_z_prave_strany.checked) {
                    krcni_oteklost_sije_z_prave_strany = 1;
                }else{
                    krcni_oteklost_sije_z_prave_strany = 0;
                        } 

        hrudni_vyhrbeni = document.kinez_rozbor.hrudni_vyhrbeni; 
                if(hrudni_vyhrbeni.checked) {
                    hrudni_vyhrbeni = 1;
                }else{
                    hrudni_vyhrbeni = 0;
                        } 

        hrudni_prohnuti = document.kinez_rozbor.hrudni_prohnuti; 
                if(hrudni_prohnuti.checked) {
                    hrudni_prohnuti = 1;
                }else{
                    hrudni_prohnuti = 0;
                        } 

        hrudni_hrb_na_zadech = document.kinez_rozbor.hrudni_hrb_na_zadech; 
                if(hrudni_hrb_na_zadech.checked) {
                    hrudni_hrb_na_zadech = 1;
                }else{
                    hrudni_hrb_na_zadech = 0;
                        } 

        hrudni_vyoseni_doleva = document.kinez_rozbor.hrudni_vyoseni_doleva; 
                if(hrudni_vyoseni_doleva.checked) {
                    hrudni_vyoseni_doleva = 1;
                }else{
                    hrudni_vyoseni_doleva = 0;
                        } 

        hrudni_vyoseni_doprava = document.kinez_rozbor.hrudni_vyoseni_doprava; 
                if(hrudni_vyoseni_doprava.checked) {
                    hrudni_vyoseni_doprava = 1;
                }else{
                    hrudni_vyoseni_doprava = 0;
                        } 

        hrudni_vyhrez = document.kinez_rozbor.hrudni_vyhrez; 
                if(hrudni_vyhrez.checked) {
                    hrudni_vyhrez = 1;
                }else{
                    hrudni_vyhrez = 0;
                        } 

        hrudni_blokada_zeber = document.kinez_rozbor.hrudni_blokada_zeber; 
                if(hrudni_blokada_zeber.checked) {
                    hrudni_blokada_zeber = 1;
                }else{
                    hrudni_blokada_zeber = 0;
                        } 

        hrudni_posun_zeber_doleva = document.kinez_rozbor.hrudni_posun_zeber_doleva; 
                if(hrudni_posun_zeber_doleva.checked) {
                    hrudni_posun_zeber_doleva = 1;
                }else{
                    hrudni_posun_zeber_doleva = 0;
                        } 

        hrudni_posun_zeber_doprava = document.kinez_rozbor.hrudni_posun_zeber_doprava; 
                if(hrudni_posun_zeber_doprava.checked) {
                    hrudni_posun_zeber_doprava = 1;
                }else{
                    hrudni_posun_zeber_doprava = 0;
                        } 


        hrudni_melke_dychani = document.kinez_rozbor.hrudni_melke_dychani; 
                if(hrudni_melke_dychani.checked) {
                    hrudni_melke_dychani = 1;
                }else{
                    hrudni_melke_dychani = 0;
                        } 

        hrudni_nepruznost_zeber = document.kinez_rozbor.hrudni_nepruznost_zeber; 
                if(hrudni_nepruznost_zeber.checked) {
                    hrudni_nepruznost_zeber = 1;
                }else{
                    hrudni_nepruznost_zeber = 0;
                        } 

        lopatky_posun_doleva = document.kinez_rozbor.lopatky_posun_doleva; 
                if(lopatky_posun_doleva.checked) {
                    lopatky_posun_doleva = 1;
                }else{
                    lopatky_posun_doleva = 0;
                        } 

        lopatky_posun_doprava = document.kinez_rozbor.lopatky_posun_doprava; 
                if(lopatky_posun_doprava.checked) {
                    lopatky_posun_doprava = 1;
                }else{
                    lopatky_posun_doprava = 0;
                        } 

        lopatky_vylezaji_ven = document.kinez_rozbor.lopatky_vylezaji_ven; 
                if(lopatky_vylezaji_ven.checked) {
                    lopatky_vylezaji_ven = 1;
                }else{
                    lopatky_vylezaji_ven = 0;
                        } 

        bederni_prohnuti = document.kinez_rozbor.bederni_prohnuti; 
                if(bederni_prohnuti.checked) {
                    bederni_prohnuti = 1;
                }else{
                    bederni_prohnuti = 0;
                        }

        bederni_vyoseni_doleva = document.kinez_rozbor.bederni_vyoseni_doleva; 
                if(bederni_vyoseni_doleva.checked) {
                    bederni_vyoseni_doleva = 1;
                }else{
                    bederni_vyoseni_doleva = 0;
                        }

        bederni_vyoseni_doprava = document.kinez_rozbor.bederni_vyoseni_doprava; 
                if(bederni_vyoseni_doprava.checked) {
                    bederni_vyoseni_doprava = 1;
                }else{
                    bederni_vyoseni_doprava = 0;
                        }

        bederni_vyhrez = document.kinez_rozbor.bederni_vyhrez; 
                if(bederni_vyhrez.checked) {
                    bederni_vyhrez = 1;
                }else{
                    bederni_vyhrez = 0;
                        }

        hypermobilita_krcni_pater = document.kinez_rozbor.hypermobilita_krcni_pater; 
                if(hypermobilita_krcni_pater.checked) {
                    hypermobilita_krcni_pater = 1;
                }else{
                    hypermobilita_krcni_pater = 0;
                        }

        hypermobilita_hrudni_pater = document.kinez_rozbor.hypermobilita_hrudni_pater; 
                if(hypermobilita_hrudni_pater.checked) {
                    hypermobilita_hrudni_pater = 1;
                }else{
                    hypermobilita_hrudni_pater = 0;
                        }

        hypermobilita_bederni_pater = document.kinez_rozbor.hypermobilita_bederni_pater; 
                if(hypermobilita_bederni_pater.checked) {
                    hypermobilita_bederni_pater = 1;
                }else{
                    hypermobilita_bederni_pater = 0;
                        }

        hypermobilita_krizova_kost = document.kinez_rozbor.hypermobilita_krizova_kost; 
                if(hypermobilita_krizova_kost.checked) {
                    hypermobilita_krizova_kost = 1;
                }else{
                    hypermobilita_krizova_kost = 0;
                        }

        hypermobilita_kostrc = document.kinez_rozbor.hypermobilita_kostrc; 
                if(hypermobilita_kostrc.checked) {
                    hypermobilita_kostrc = 1;
                }else{
                    hypermobilita_kostrc = 0;
                        }

        hypermobilita_ramena = document.kinez_rozbor.hypermobilita_ramena; 
                if(hypermobilita_ramena.checked) {
                    hypermobilita_ramena = 1;
                }else{
                    hypermobilita_ramena = 0;
                        }

        hypermobilita_lokty = document.kinez_rozbor.hypermobilita_lokty; 
                if(hypermobilita_lokty.checked) {
                    hypermobilita_lokty = 1;
                }else{
                    hypermobilita_lokty = 0;
                        }

        hypermobilita_zapesti = document.kinez_rozbor.hypermobilita_zapesti; 
                if(hypermobilita_zapesti.checked) {
                    hypermobilita_zapesti = 1;
                }else{
                    hypermobilita_zapesti = 0;
                        }

        hypermobilita_prsty_na_rukou = document.kinez_rozbor.hypermobilita_prsty_na_rukou; 
                if(hypermobilita_prsty_na_rukou.checked) {
                    hypermobilita_prsty_na_rukou = 1;
                }else{
                    hypermobilita_prsty_na_rukou = 0;
                        }

        hypermobilita_kycle = document.kinez_rozbor.hypermobilita_kycle; 
                if(hypermobilita_kycle.checked) {
                    hypermobilita_kycle = 1;
                }else{
                    hypermobilita_kycle = 0;
                        }

        hypermobilita_kolena = document.kinez_rozbor.hypermobilita_kolena; 
                if(hypermobilita_kolena.checked) {
                    hypermobilita_kolena = 1;
                }else{
                    hypermobilita_kolena = 0;
                        }

        hypermobilita_kotniky = document.kinez_rozbor.hypermobilita_kotniky; 
                if(hypermobilita_kotniky.checked) {
                    hypermobilita_kotniky = 1;
                }else{
                    hypermobilita_kotniky = 0;
                        }

        hypermobilita_prsty_na_nohou = document.kinez_rozbor.hypermobilita_prsty_na_nohou; 
                if(hypermobilita_prsty_na_nohou.checked) {
                    hypermobilita_prsty_na_nohou = 1;
                }else{
                    hypermobilita_prsty_na_nohou = 0;
                        }

        svaly_ztuhle = document.kinez_rozbor.svaly_ztuhle.value;
        svaly_povolene = document.kinez_rozbor.svaly_povolene.value;
        svaly_poznamka = document.kinez_rozbor.svaly_poznamka.value;

        hmotnost = document.kinez_rozbor.hmotnost.value;
        kg = document.kinez_rozbor.kg.value;




        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&nohy_x="+nohy_x;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&nohy_O="+nohy_O;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&nohy_posun_doleva="+nohy_posun_doleva;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&nohy_posun_doprava="+nohy_posun_doprava;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&nohy_prava_delsi_nez_leva="+nohy_prava_delsi_nez_leva;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&nohy_leva_delsi_nez_prava="+nohy_leva_delsi_nez_prava;

        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&vybocene_palce="+vybocene_palce;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&ploche_nohy="+ploche_nohy;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&skrcene_prsty="+skrcene_prsty;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&prsty_blizko_u_sebe="+prsty_blizko_u_sebe;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&ostruhy="+ostruhy;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&ztuhle_narty="+ztuhle_narty;

        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&kotniky_zatuhle="+kotniky_zatuhle;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&kotniky_praskajici="+kotniky_praskajici;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&kotniky_otekle="+kotniky_otekle;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&kotniky_zkracene_achylovy_slachy="+kotniky_zkracene_achylovy_slachy;
       
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&kolena_posun_doleva="+kolena_posun_doleva;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&kolena_posun_doprava="+kolena_posun_doprava;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&kolena_stoceni_dovnitr="+kolena_stoceni_dovnitr;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&kolena_vytoceni_ven="+kolena_vytoceni_ven;

        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&panev_preklopena_podsazena="+panev_preklopena_podsazena;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&panev_preklopena_dopredu="+panev_preklopena_dopredu;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&panev_posunuta_dopredu_bez_preklopeni="+panev_posunuta_dopredu_bez_preklopeni;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&panev_posunuta_dozadu_bez_preklopeni="+panev_posunuta_dozadu_bez_preklopeni;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&panev_posun_doleva="+panev_posun_doleva;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&panev_posun_doprava="+panev_posun_doprava;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&panev_rotace_doleva="+panev_rotace_doleva;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&panev_rotace_doprava="+panev_rotace_doprava;       
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&panev_blokada="+panev_blokada; 

        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&ruce_posun_doleva="+ruce_posun_doleva;       
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&ruce_posun_doprava="+ruce_posun_doprava;

        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&ramena_posun_doleva="+ramena_posun_doleva;       
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&ramena_posun_doprava="+ramena_posun_doprava;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&ramena_zvednuta_tense_k_usim="+ramena_zvednuta_tense_k_usim;       
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&ramena_dychani_do_ramen="+ramena_dychani_do_ramen;

        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&lokty_tenisovy_loket="+lokty_tenisovy_loket;

        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&zapesti_karpaly="+zapesti_karpaly;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&zapesti_neohebnost="+zapesti_neohebnost;       
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&zapesti_zatuhlost="+zapesti_zatuhlost;

        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&pater_kulata_zada="+pater_kulata_zada;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&pater_prohnuta_zada="+pater_prohnuta_zada;       
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&pater_plocha_zada="+pater_plocha_zada;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&pater_skolioticke_drzeni="+pater_skolioticke_drzeni;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&pater_dysbalace_leve_ruky="+pater_dysbalace_leve_ruky;       
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&pater_dysbalace_prave_ruky="+pater_dysbalace_prave_ruky;       
     
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&krcni_ztuhlost_sije="+krcni_ztuhlost_sije;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&krcni_stuhlost_trapezu="+krcni_stuhlost_trapezu;       
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&krcni_vyoseni_doleva="+krcni_vyoseni_doleva;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&krcni_vyoseni_doprava="+krcni_vyoseni_doprava;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&krcni_posun_brady_doleva="+krcni_posun_brady_doleva;       
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&krcni_posun_brady_doprava="+krcni_posun_brady_doprava;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&krcni_mala_lordoza="+krcni_mala_lordoza;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&krcni_velka_lordoza="+krcni_velka_lordoza;       
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&krcni_vyhrez="+krcni_vyhrez;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&krcni_zaklon_dozadu="+krcni_zaklon_dozadu;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&krcni_predsun_dopredu="+krcni_predsun_dopredu;       
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&krcni_hlava_v_ramenou="+krcni_hlava_v_ramenou;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&krcni_posun_jazylky="+krcni_posun_jazylky;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&krcni_oteklost_sije_z_leve_strany="+krcni_oteklost_sije_z_leve_strany;       
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&krcni_oteklost_sije_z_prave_strany="+krcni_oteklost_sije_z_prave_strany;

        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hrudni_vyhrbeni="+hrudni_vyhrbeni;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hrudni_prohnuti="+hrudni_prohnuti;       
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hrudni_hrb_na_zadech="+hrudni_hrb_na_zadech;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hrudni_vyoseni_doleva="+hrudni_vyoseni_doleva;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hrudni_vyoseni_doprava="+hrudni_vyoseni_doprava;       
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hrudni_vyhrez="+hrudni_vyhrez; 
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hrudni_blokada_zeber="+hrudni_blokada_zeber;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hrudni_posun_zeber_doleva="+hrudni_posun_zeber_doleva;       
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hrudni_posun_zeber_doprava="+hrudni_posun_zeber_doprava;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hrudni_melke_dychani="+hrudni_melke_dychani;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hrudni_nepruznost_zeber="+hrudni_nepruznost_zeber;       

        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&lopatky_posun_doleva="+lopatky_posun_doleva;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&lopatky_posun_doprava="+lopatky_posun_doprava;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&lopatky_vylezaji_ven="+lopatky_vylezaji_ven;   

        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&bederni_prohnuti="+bederni_prohnuti;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&bederni_vyoseni_doleva="+bederni_vyoseni_doleva;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&bederni_vyoseni_doprava="+bederni_vyoseni_doprava;          
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&bederni_vyhrez="+bederni_vyhrez; 

        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hypermobilita_krcni_pater="+hypermobilita_krcni_pater;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hypermobilita_hrudni_pater="+hypermobilita_hrudni_pater;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hypermobilita_bederni_pater="+hypermobilita_bederni_pater;          
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hypermobilita_krizova_kost="+hypermobilita_krizova_kost; 
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hypermobilita_kostrc="+hypermobilita_kostrc;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hypermobilita_ramena="+hypermobilita_ramena;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hypermobilita_lokty="+hypermobilita_lokty;          
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hypermobilita_zapesti="+hypermobilita_zapesti; 
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hypermobilita_prsty_na_rukou="+hypermobilita_prsty_na_rukou;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hypermobilita_kycle="+hypermobilita_kycle;
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hypermobilita_kolena="+hypermobilita_kolena;          
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hypermobilita_kotniky="+hypermobilita_kotniky; 
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hypermobilita_prsty_na_nohou="+hypermobilita_prsty_na_nohou; 

        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&svaly_ztuhle="+svaly_ztuhle; 
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&svaly_povolene="+svaly_povolene; 
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&svaly_poznamka="+svaly_poznamka; 

        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&hmotnost="+hmotnost; 
        dataKineziologicky_rozbor = dataKineziologicky_rozbor + "&kg="+kg; 

        if (hmotnost == "Vyhovuje"){
        kg = 0;   
        }

  xhttp.open("POST", "./script/kineziologicky_rozboru_pdate.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(dataKineziologicky_rozbor);
  alert("Uložení:\nZáznam kineziologický rozbor byl aktualizován.");

     }

</script>




<? require "./script/treninkovy_plan.php"; ?>




<?   }  // konec podmínky z řádku 360 ?>


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
