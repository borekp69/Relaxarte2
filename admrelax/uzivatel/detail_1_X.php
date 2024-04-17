<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php'; ?><? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php'; ?>
<!DOCTYPE html>
<html lang="cs">
<head>
  <title>RELAX ARTE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
 
 
 
 
 
 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
 
 
  <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
  
</head>
<body>
<? require "navigace_1.php"; ?>
<div class="container">
<?
require "sifrovani_dat.php";
require "pripojeni_databaze.php";

$uzivatel_kod = htmlspecialchars(trim("$_POST[kod]")); 
$uzivatel_kod = substr($uzivatel_kod,0,8);

$uzivatel_id = htmlspecialchars(trim("$_GET[uzivatel_id]"));
$uzivatel_id = encrypt_decrypt('decrypt', $uzivatel_id);

if (!$uzivatel_id && !$uzivatel_kod){
    echo '<div class="alert alert-danger">';
    echo '<strong>Chyba nevybrali jste žádný vyhledávací parametr!</strong><br>';
    echo 'Proměnné uzivatel_id i uzivatel_kod jsou prázdné!';
    echo'</div>';
    exit();  
    }


if (strlen($uzivatel_kod) > 7) {
    require "pripojeni_databaze.php";
    $sql_3 = "SELECT uzivatel_id FROM uzivatel WHERE uzivatel_kod = '$uzivatel_kod' ";
    $result_3 = $conn->query($sql_3);
    while($radek_3 = $result_3->fetch_assoc()) {
    $uzivatel_id_2 = $radek_3["uzivatel_id"];
      }
    $uzivatel_id = $uzivatel_id_2;
    $conn->close();
     }

    
//    echo '<br>KOD:'.$uzivatel_kod.'<br>';
//    echo '<br>login usera 1:'. $uzivatel_id_2.'<br>';
//    echo 'login usera 2:'. $uzivatel_id.'<br>';

?>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#kontakt">Kontaktní a osobní údaje</a></li>
    <li><a data-toggle="tab" href="#sport">Sport a pohyb</a></li>
    <li><a data-toggle="tab" href="#zdravi">Zdravi</a></li>    
    <li><a data-toggle="tab" href="#relaxarte">RELAXARTE</a></li>
  </ul>

<div class="tab-content">

<?
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


require "pripojeni_databaze.php";
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
        }
    $conn->close();


require "pripojeni_databaze.php";
$sql = "SELECT uzivatel_id, uzivatel_oblast, seznam_hodnota FROM uzivatel AS us 
INNER JOIN seznam AS sb ON (us.uzivatel_oblast = sb.seznam_id) WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
$uzivatel_oblast = $row["seznam_hodnota"]; 
        }
$conn->close();


require "pripojeni_databaze.php";
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




?>
<div id="kontakt" class="tab-pane fade in active">
<h4>Kontaktní a osobní údaje (<? echo $kod;?>)</h4> 
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
    <b>Práce v Open space:&nbsp;</b><? echo $open_space;?> 
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
<div align="right"><a href="./uprava_form.php?uzivatel_id=<? echo encrypt_decrypt('encrypt', $uzivatel_id);?>" type="button" class="btn btn-warning btn-sm">Upravit uživatele</a></div>  
</div>



  

<div id="sport" class="tab-pane fade">
    <h4>Sport a pohyb</h4>
<?
    require "pripojeni_databaze.php";
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
<h5>Nebyl nalezen žádný záznam</h5>
<a href="krok_02_ulozeni.php?uzivatel_id=<? echo encrypt_decrypt('encrypt', $uzivatel_id);?>" type="button" class="btn btn-warning btn-sm">Doplnit data nyní</a>

            <? } else { ?>


    <? 
    require "pripojeni_databaze.php";
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
<div class="row">
    <div class="col-sm-12">
    <label for="uzivatel">Sportovní a pohybové aktivity:</label>     
        <div class="checkbox">
        <? if ($bezky == 0) { ?>
        <label><input type="checkbox" name="bezky" disabled>Běžky</label>    
         <? }else { ?>
        <label><input type="checkbox" name="bezky" disabled checked>Běžky</label>    
        <?  } ?>   
        </div>
        <div class="checkbox">
        <? if ($brusle_zimni == 0) { ?>
        <label><input type="checkbox" name="brusle_zimni" disabled>Brusle zimní</label>    
         <? }else { ?>
        <label><input type="checkbox" name="brusle_zimni" disabled checked>Brusle zimní</label>    
        <?  } ?>   
        </div>
        <div class="checkbox">
        <? if ($prace_na_zahrade == 0) { ?>
        <label><input type="checkbox" name="prace_na_zahrade" disabled>Práce na zahradě</label>    
         <? }else { ?>
        <label><input type="checkbox" name="prace_na_zahrade" disabled checked>Práce na zahradě</label>    
        <?  } ?>   
        </div>
        <div class="checkbox">
        <? if ($sjezd_lyze == 0) { ?>
        <label><input type="checkbox" name="sjezd_lyze" disabled>Sjezd lyže</label>    
         <? }else { ?>
        <label><input type="checkbox" name="sjezd_lyze" disabled checked>Sjezd lyže</label>    
        <?  } ?>   
        </div>
        <div class="checkbox">
        <? if ($skialpinismus == 0) { ?>
        <label><input type="checkbox" name="skialpinismus" disabled>Skialpinismus</label>    
         <? }else { ?>
        <label><input type="checkbox" name="skialpinismus" disabled checked>Skialpinismus</label>    
        <?  } ?>   
        </div>
    </div> 
</div>


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
    require "pripojeni_databaze.php";
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
    require "pripojeni_databaze.php";
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
        <td>Posilování</td>
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
        <td>Jóga</td>
        <td><? echo sport($joga);?></td>
        <td><? echo pravidelnost($pravidelnost_joga);?></td>
    </tr>
    <tr>
        <td>Kondiční tréninky</td>
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
    require "pripojeni_databaze.php";
    $sql_sport_pravidelne = "SELECT * FROM joga WHERE uzivatel_id = $uzivatel_id LIMIT 1";
    $result_sport_pravidelne = $conn->query($sql_sport_pravidelne);
    while($radek = $result_sport_pravidelne->fetch_assoc()) {
    $joga = $radek["joga"]; 
    $lektor = encrypt_decrypt('decrypt', $radek["lektor"]); 
               }
    $conn->close();    
    ?>
    <? if ($joga == 0) { ?>
    <div class="row">
    <div class="col-sm-4">
    <b>Absolvoval jste někdy kurz ŠIVA jógy:</b>&nbsp;Ne
    </div>
    </div>
             <? }else { ?>
    <div class="row">
    <div class="col-sm-4">
    <b>Absolvoval jste někdy kurz ŠIVA jógy:</b>&nbsp;Ano
    </div>
    </div>
    <div class="row">       
    <div class="col-sm-6">
    <b>Lektor:</b>&nbsp;<?echo $lektor;?>
    </div>
    </div>
     <?  } ?> 
        <?   }  ?>
<br><br><br>        
</div>
    









    <div id="zdravi" class="tab-pane fade">
    <h4>Zdravi</h4>
    </div>








<div id="relaxarte" class="tab-pane fade">
    <h4>RELAXARTE</h4>
<?
    require "pripojeni_databaze.php";
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
    $jine = $radek["jine"];     
      }
    $conn->close();    
    $pocet_zaznamu_duvod = mysqli_num_rows($result_duvod); 
    
     require "pripojeni_databaze.php";
    $sql_cil = "SELECT * FROM ras_cil WHERE uzivatel_id = $uzivatel_id LIMIT 1";
    $result_cil = $conn->query($sql_cil);
    $conn->close();    
    $pocet_zaznamu_cil = mysqli_num_rows($result_cil);    

    require "pripojeni_databaze.php";
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

    require "pripojeni_databaze.php";
    $sql_cosejinamneveslo = "SELECT cosejinamneveslo FROM uzivatel WHERE uzivatel_id = $uzivatel_id LIMIT 1";
    $result_cosejinamneveslo = $conn->query($sql_cosejinamneveslo);
    while($radek = $result_cosejinamneveslo->fetch_assoc()) {
    $cosejinamneveslo = $radek["cosejinamneveslo"];
      }
    $conn->close();


?>


    <? if ($pocet_zaznamu_duvod == 0  && $pocet_zaznamu_cil == 0){ ?>
    <h5>Nebyl nalezen žádný záznam</h5>
    <a href="krok_03_ulozeni.php?uzivatel_id=<? echo encrypt_decrypt('encrypt', $uzivatel_id);?>" type="button" class="btn btn-warning btn-sm">Doplnit data nyní</a>

    <? }else if ($pocet_zaznamu_duvod == 0 && $pocet_zaznamu_cil == 1 || $pocet_zaznamu_duvod == 1 && $pocet_zaznamu_cil == 0)  {?>                                                               
    <h3>Pozor došlo k chybě!</h3>
    <br><div class="alert alert-danger" role="alert">Nekonzistence dat, předejte prosím informaci na administrátora aplikace.&nbsp; - &nbsp;<b><? echo $kod;?></b></div>

    <? }else{ ?>
    <label for="uzivatel">Proč jste se rozhodl navštívit R.A.S.?</label>
    <div class="checkbox">
    <? if ($neuspokujici_zdravotni_stav == 0) { ?>
    <label><input type="checkbox" name="neuspokujici_zdravotni_stav" disabled>neuspokující zdravotní stav</label>
    <? }else { ?>
    <label><input type="checkbox" name="neuspokujici_zdravotni_stav" disabled checked>neuspokující zdravotní stav</label>
    <?  } ?>
    </div>

    <div class="checkbox">
    <? if ($nezvladani_stresu == 0) { ?>
    <label><input type="checkbox" name="nezvladani_stresu" disabled>nezvládání stresu</label>
    <? }else { ?>
    <label><input type="checkbox" name="nezvladani_stresu" disabled checked>nezvládání stresu</label>
    <?  } ?>
    </div>

    <div class="checkbox">
    <? if ($psychicke_problemy == 0) { ?>
    <label><input type="checkbox" name="psychicke_problemy" disabled>psychické problémy</label>
    <? }else { ?>
    <label><input type="checkbox" name="psychicke_problemy" disabled checked>psychické problémy</label>
    <?  } ?>
    </div>

    <div class="checkbox">
    <? if ($problem_s_hmotnosti == 0) { ?>
    <label><input type="checkbox" name="problem_s_hmotnosti" disabled>problém s hmotností</label>
    <? }else { ?>
    <label><input type="checkbox" name="problem_s_hmotnosti" disabled checked>problém s hmotností</label>
    <?  } ?>
    </div>

    <div class="checkbox">
    <? if ($samota == 0) { ?>
    <label><input type="checkbox" name="samota" disabled>samota</label>
    <? }else { ?>
    <label><input type="checkbox" name="samota" disabled checked>samota</label>
    <?  } ?>
    </div>

    <div class="checkbox">
    <? if ($unavovy_syndrom == 0) { ?>
    <label><input type="checkbox" name="unavovy_syndrom" disabled>únavový syndrom</label>
    <? }else { ?>
    <label><input type="checkbox" name="unavovy_syndrom" disabled checked>únavový syndrom</label>
    <?  } ?>
    </div>

    <div class="checkbox">
    <? if ($zvedavost == 0) { ?>
    <label><input type="checkbox" name="zvedavost" disabled>zvědavost</label>
    <? }else { ?>
    <label><input type="checkbox" name="zvedavost" disabled checked>zvědavost</label>
    <?  } ?>
    </div>

    <div class="checkbox">
    <? if ($jine == 0) { ?>
    <label><input type="checkbox" name="jine" disabled>jiné...</label>
    <? }else { ?>
    <label><input type="checkbox" name="jine" disabled checked>jiné...</label>
    <?  } ?>
    </div>


    <label for="uzivatel">Jaký je Váš cíl v rámci programu R.A.S.?</label>

    <div class="checkbox">
    <? if ($nabrat_svaly == 0) { ?>
    <label><input type="checkbox" name="nabrat_svaly" disabled>nabrat svaly</label>
    <? }else { ?>
    <label><input type="checkbox" name="nabrat_svaly" disabled checked>nabrat svaly</label>
    <?  } ?>
    </div>

    <div class="checkbox">
    <? if ($naucit_se_pracovat_s_emocemi == 0) { ?>
    <label><input type="checkbox" name="naucit_se_pracovat_s_emocemi" disabled>naučit se pracovat s emocemi</label>
    <? }else { ?>
    <label><input type="checkbox" name="naucit_se_pracovat_s_emocemi" disabled checked>naučit se pracovat s emocemi</label>
    <?  } ?>
    </div>

    <div class="checkbox">
    <? if ($naucit_se_spravne_dychat == 0) { ?>
    <label><input type="checkbox" name="naucit_se_spravne_dychat" disabled>naučit se správne dýchat</label>
    <? }else { ?>
    <label><input type="checkbox" name="naucit_se_spravne_dychat" disabled checked>naučit se správne dýchat</label>
    <?  } ?>
    </div>

    <div class="checkbox">
    <? if ($naucit_se_zvladat_stres == 0) { ?>
    <label><input type="checkbox" name="naucit_se_zvladat_stres" disabled>naučit se zvládat stres</label>
    <? }else { ?>
    <label><input type="checkbox" name="naucit_se_zvladat_stres" disabled checked>naučit se zvládat stres</label>
    <?  } ?>
    </div>

    <div class="checkbox">
    <? if ($odstranit_psychicke_problemy == 0) { ?>
    <label><input type="checkbox" name="odstranit_psychicke_problemy" disabled>odstranit psychické problémy</label>
    <? }else { ?>
    <label><input type="checkbox" name="odstranit_psychicke_problemy" disabled checked>odstranit psychické problémy</label>
    <?  } ?>
    </div>

    <div class="checkbox">
    <? if ($poznat_nove_metody_pece_o_zdravi == 0) { ?>
    <label><input type="checkbox" name="poznat_nove_metody_pece_o_zdravi" disabled>poznat nové metody péče o zdraví (cvičení, masáže, fyzio/muziko/arte terapie, ....)</label>
    <? }else { ?>
    <label><input type="checkbox" name="poznat_nove_metody_pece_o_zdravi" disabled checked>poznat nové metody péče o zdraví (cvičení, masáže, fyzio/muziko/arte terapie, ....)</label>
    <?  } ?>
    </div>

    <div class="checkbox">
    <? if ($pribrat_na_hmotnosti == 0) { ?>
    <label><input type="checkbox" name="pribrat_na_hmotnosti" disabled>přibrat na hmotnosti</label>
    <? }else { ?>
    <label><input type="checkbox" name="pribrat_na_hmotnosti" disabled checked>přibrat na hmotnosti</label>
    <?  } ?>
    </div>

    <div class="checkbox">
    <? if ($zbavit_se_unavoveho_syndromu == 0) { ?>
    <label><input type="checkbox" name="zbavit_se_unavoveho_syndromu" disabled>zbavit se únavového syndromu</label>
    <? }else { ?>
    <label><input type="checkbox" name="zbavit_se_unavoveho_syndromu" disabled checked>zbavit se únavového syndromu</label>
    <?  } ?>
    </div>

    <div class="checkbox">
    <? if ($zhubnout == 0) { ?>
    <label><input type="checkbox" name="zhubnout" disabled>zhubnout</label>
    <? }else { ?>
    <label><input type="checkbox" name="zhubnout" disabled checked>zhubnout</label>
    <?  } ?>
    </div>

    <div class="checkbox">
    <? if ($zlepsit_celkovy_zdravotni_stav == 0) { ?>
    <label><input type="checkbox" name="zlepsit_celkovy_zdravotni_stav" disabled>zlepšit celkový zdravotní stav</label>
    <? }else { ?>
    <label><input type="checkbox" name="zlepsit_celkovy_zdravotni_stav" disabled checked>zlepšit celkový zdravotní stav</label>
    <?  } ?>
    </div>

    <div class="checkbox">
    <? if ($zlepsit_fyzickou_kondici == 0) { ?>
    <label><input type="checkbox" name="zlepsit_fyzickou_kondici" disabled>zlepšit fyzickou kondici</label>
    <? }else { ?>
    <label><input type="checkbox" name="zlepsit_fyzickou_kondici" disabled checked>zlepšit fyzickou kondici</label>
    <?  } ?>
    </div>

    <div class="checkbox">
    <? if ($zpevnit_telo == 0) { ?>
    <label><input type="checkbox" name="zpevnit_telo" disabled>zpevnit tělo</label>
    <? }else { ?>
    <label><input type="checkbox" name="zpevnit_telo" disabled checked>zpevnit tělo</label>
    <?  } ?>
    </div>

    <div class="checkbox">
    <? if ($zrelaxovat == 0) { ?>
    <label><input type="checkbox" name="zrelaxovat" disabled>zrelaxovat</label>
    <? }else { ?>
    <label><input type="checkbox" name="zrelaxovat" disabled checked>zrelaxovat</label>
    <?  } ?>
    </div>

    <h4>Osobní</h4>
    Máte ve svém životě oblast, kterou potřebujete vyřešit a nemůžete se hnout z místa:&nbsp;<b><? echo $uzivatel_oblast; ?></b><br>
    Máte pocit, že se bojíte života jako takového, resp. že žijete hodně ve strachu např. z budoucnosti:&nbsp;<b><? echo $uzivatel_budoucnost; ?></b> <br>
    Dějí se Vám v životě často úrazy? Mohou to být i zvláštní úrazy - např. pád na rovině, atd.:&nbsp;<b><? echo $uzivatel_urazy; ?></b><br>
    Když máte vyvinout sportovní aktivitu a nechce se Vám do ní, je to z důvodu spíše únavy nebo lenosti:&nbsp;<b><? echo $uzivatel_unava; ?></b> <br>
    Jakým způsobem odpočíváte:&nbsp;<b><? echo $uzivatel_odpocinek; ?> </b><br>

    Aktuální hmotnost:&nbsp; <b><? echo $uzivatel_hmotnost;?>&nbsp;
    <?
    if ($uzivatel_hmotnost == 'Podváha' || $uzivatel_hmotnost == 'Nadváha'){
    echo $uzivatel_kg.' kg';
    }
    ?></b>

    
    <br><br>
    <div class="row">
    <div class="col-sm-10">
    <label for="uzivatel">Co se jinam nevešlo:</label>
    <textarea class="form-control" rows="10" style="background-color: white;" readonly><? echo $cosejinamneveslo; ?></textarea>
    </div>
    </div> 
    <br><br><br>
    <?} ?>
</div>











 </div>
</div>
        </body>
            </html>
