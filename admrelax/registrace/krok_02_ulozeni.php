<?
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
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
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
<? // require  $_SERVER['DOCUMENT_ROOT'].'/navigace/navigace.php'; ?>
<div class="container">
<?
require "sifrovani_dat.php";
$stav = addslashes(htmlspecialchars(trim("$_POST[stav]")));
$uzivatel_id = htmlspecialchars(trim("$_GET[uzivatel_id]"));
$uzivatel_id = addslashes(encrypt_decrypt('decrypt', $uzivatel_id));


    if ($stav !== 'odeslano'){
//    echo "NEODESLANO";
    require "krok_02.php";


        }else{
//    echo "ODESLANO";

$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));
$uzivatel_id = encrypt_decrypt('decrypt', $uzivatel_id); 


// -----------------kontrola formuláře ----------------------------------------




// ------------------  Uložení záznamu -----------------------------------------

$posilovani = addslashes(htmlspecialchars(trim("$_POST[posilovani]"))); 
$pravidelnost_posilovani = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_posilovani]"))); 
$florbal = addslashes(htmlspecialchars(trim("$_POST[florbal]"))); 
$pravidelnost_florbal = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_florbal]"))); 
$bojove_sporty = addslashes(htmlspecialchars(trim("$_POST[bojove_sporty]"))); 
$pravidelnost_bojove_sporty = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_bojove_sporty]")));
$hokej = addslashes(htmlspecialchars(trim("$_POST[hokej]")));
$pravidelnost_hokej = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_hokej]")));
$fotbal = addslashes(htmlspecialchars(trim("$_POST[fotbal]")));
$pravidelnost_fotbal = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_fotbal]")));
$volejbal = addslashes(htmlspecialchars(trim("$_POST[volejbal]")));
$pravidelnost_volejbal = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_volejbal]")));
$aerobic = addslashes(htmlspecialchars(trim("$_POST[aerobic]")));
$pravidelnost_aerobic = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_aerobic]")));
$tanec = addslashes(htmlspecialchars(trim("$_POST[tanec]")));
$pravidelnost_tanec = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_tanec]")));
$plavani = addslashes(htmlspecialchars(trim("$_POST[plavani]")));
$pravidelnost_plavani = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_plavani]")));
$brusle_inline = addslashes(htmlspecialchars(trim("$_POST[brusle_inline]")));
$pravidelnost_brusle_inline = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_brusle_inline]")));
$kolo_spinning = addslashes(htmlspecialchars(trim("$_POST[kolo_spinning]")));
$pravidelnost_kolo_spinning = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_kolo_spinning]")));
$beh = addslashes(htmlspecialchars(trim("$_POST[beh]")));
$pravidelnost_beh = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_beh]")));
$pesi_turistika = addslashes(htmlspecialchars(trim("$_POST[pesi_turistika]")));
$pravidelnost_pesi_turistika = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_pesi_turistika]")));
$taj_ci = addslashes(htmlspecialchars(trim("$_POST[taj_ci]")));
$pravidelnost_taj_ci = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_taj_ci]")));
$cchi_kung = addslashes(htmlspecialchars(trim("$_POST[cchi_kung]")));
$pravidelnost_cchi_kung = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_cchi_kung]")));
$joga = addslashes(htmlspecialchars(trim("$_POST[joga]")));
$pravidelnost_joga = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_joga]")));
$kondicni_treninky = addslashes(htmlspecialchars(trim("$_POST[kondicni_treninky]")));
$pravidelnost_kondicni_treninky = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_kondicni_treninky]")));
$tenis_squash_badminton = addslashes(htmlspecialchars(trim("$_POST[tenis_squash_badminton]")));
$pravidelnost_tenis_squash_badminton = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_tenis_squash_badminton]")));


$bezky = addslashes(htmlspecialchars(trim("$_POST[bezky]")));
$brusle_zimni = addslashes(htmlspecialchars(trim("$_POST[brusle_zimni]")));
$prace_na_zahrade = addslashes(htmlspecialchars(trim("$_POST[prace_na_zahrade]")));
$sjezd_lyze = addslashes(htmlspecialchars(trim("$_POST[sjezd_lyze]")));
$skialpinismus = addslashes(htmlspecialchars(trim("$_POST[skialpinismus]")));


$joga_kurz = addslashes(htmlspecialchars(trim("$_POST[joga_kurz]")));
$lektor = addslashes(htmlspecialchars(trim("$_POST[lektor]")));
if (!$joga_kurz) { $joga_kurz = 0; }
if (!$lektor) { $lektor = 0; }
if (!$posilovani) { $posilovani = 0; }
if (!$pravidelnost_posilovani) { $pravidelnost_posilovani = 0; }
if (!$florbal) { $florbal = 0; }
if (!$pravidelnost_florbal) { $pravidelnost_florbal = 0; }
if (!$bojove_sporty) { $bojove_sporty = 0; }
if (!$pravidelnost_bojove_sporty) { $pravidelnost_bojove_sporty= 0; }
if (!$hokej) { $hokej = 0; }
if (!$pravidelnost_hokej) { $pravidelnost_hokej = 0; }
if (!$fotbal) { $fotbal = 0; }
if (!$pravidelnost_fotbal) { $pravidelnost_fotbal = 0; }
if (!$volejbal) { $volejbal = 0; }
if (!$pravidelnost_volejbal) { $pravidelnost_volejbal = 0; }
if (!$aerobic) { $aerobic = 0; }
if (!$pravidelnost_aerobic) { $pravidelnost_aerobic = 0; }
if (!$tanec) { $tanec = 0; }
if (!$pravidelnost_tanec) { $pravidelnost_tanec = 0; }
if (!$plavani) { $plavani = 0; }
if (!$pravidelnost_plavani) { $pravidelnost_plavani = 0; }
if (!$brusle_inline) { $brusle_inline = 0; }
if (!$pravidelnost_brusle_inline) { $pravidelnost_brusle_inline = 0; }
if (!$kolo_spinning) { $kolo_spinning = 0; }
if (!$pravidelnost_kolo_spinning) { $pravidelnost_kolo_spinning = 0; }
if (!$beh) { $beh = 0; }
if (!$pravidelnost_beh) { $pravidelnost_beh = 0; }
if (!$pesi_turistika) { $pesi_turistika = 0; }
if (!$pravidelnost_pesi_turistika) { $pravidelnost_pesi_turistika = 0; }
if (!$taj_ci) { $taj_ci = 0; }
if (!$pravidelnost_taj_ci) { $pravidelnost_taj_ci = 0; }
if (!$cchi_kung) { $cchi_kung = 0; }
if (!$pravidelnost_cchi_kung) { $pravidelnost_cchi_kung = 0; }
if (!$joga) { $joga = 0; }
if (!$pravidelnost_joga) { $pravidelnost_joga = 0; }
if (!$kondicni_treninky) { $kondicni_treninky = 0; }
if (!$pravidelnost_kondicni_treninky) { $pravidelnost_kondicni_treninky = 0; }
if (!$tenis_squash_badminton) { $tenis_squash_badminton = 0; }
if (!$pravidelnost_tenis_squash_badminton) { $pravidelnost_tenis_squash_badminton = 0; }

// -----------------kontrola formuláře ----------------------------------------


if ($posilovani == 1 && $pravidelnost_posilovani =='0') {   
$chyba_vypis .= '<li>K aktivitě <b>Fitness - silový trénink</b> musíte vybrat i její pravidelnost!</li>';
$chyba_posilovani = 'style="background-color:#fec8bd;"';
}
if ($florbal == 1 && $pravidelnost_florbal =='0') {   
$chyba_vypis .= '<li>K aktivitě <b>Florbal</b> musíte vybrat i její pravidelnost!</li>';
$chyba_florbal = 'style="background-color:#fec8bd;"';
}
if ($bojove_sporty == 1 && $pravidelnost_bojove_sporty =='0') {   
$chyba_vypis .= '<li>K aktivitě <b>Bojové sporty</b> musíte vybrat i její pravidelnost!</li>';
$chyba_bojove_sporty = 'style="background-color:#fec8bd;"';
}
if ($hokej == 1 && $pravidelnost_hokej =='0') {   
$chyba_vypis .= '<li>K aktivitě <b>Hokej</b> musíte vybrat i její pravidelnost!</li>';
$chyba_hokej = 'style="background-color:#fec8bd;"';
}
if ($fotbal == 1 && $pravidelnost_fotbal =='0') {   
$chyba_vypis .= '<li>K aktivitě <b>Fotbal</b> musíte vybrat i její pravidelnost!</li>';
$chyba_fotbal = 'style="background-color:#fec8bd;"';
}
if ($volejbal == 1 && $pravidelnost_volejbal =='0') {   
$chyba_vypis .= '<li>K aktivitě <b>Volejbal/Basketbal</b> musíte vybrat i její pravidelnost!</li>';
$chyba_volejbal = 'style="background-color:#fec8bd;"';
}
if ($aerobic == 1 && $pravidelnost_aerobic =='0') {   
$chyba_vypis .= '<li>K aktivitě <b>Aerobik</b> musíte vybrat i její pravidelnost!</li>';
$chyba_aerobic = 'style="background-color:#fec8bd;"';
}
if ($tanec == 1 && $pravidelnost_tanec =='0') {   
$chyba_vypis .= '<li>K aktivitě <b>Tanec</b> musíte vybrat i její pravidelnost!</li>';
$chyba_tanec = 'style="background-color:#fec8bd;"';
}
if ($plavani == 1 && $pravidelnost_plavani =='0') {   
$chyba_vypis .= '<li>K aktivitě <b>Plavání</b> musíte vybrat i její pravidelnost!</li>';
$chyba_plavani = 'style="background-color:#fec8bd;"';
}
if ($brusle_inline == 1 && $pravidelnost_brusle_inline =='0') {   
$chyba_vypis .= '<li>K aktivitě <b>Brusle in-line</b> musíte vybrat i její pravidelnost!</li>';
$chyba_brusle_inline = 'style="background-color:#fec8bd;"';
}
if ($kolo_spinning == 1 && $pravidelnost_kolo_spinning =='0') {   
$chyba_vypis .= '<li>K aktivitě <b>Kolo/Spinning</b> musíte vybrat i její pravidelnost!</li>';
$chyba_kolo_spinning = 'style="background-color:#fec8bd;"';
}
if ($beh == 1 && $pravidelnost_beh =='0') {   
$chyba_vypis .= '<li>K aktivitě <b>Běh</b> musíte vybrat i její pravidelnost!</li>';
$chyba_beh = 'style="background-color:#fec8bd;"';
}
if ($pesi_turistika == 1 && $pravidelnost_pesi_turistika =='0') {   
$chyba_vypis .= '<li>K aktivitě <b>Pěší turistika/chůze</b> musíte vybrat i její pravidelnost!</li>';
$chyba_pesi_turistika = 'style="background-color:#fec8bd;"';
}
if ($taj_ci == 1 && $pravidelnost_taj_ci =='0') {   
$chyba_vypis .= '<li>K aktivitě <b>Taj-či</b> musíte vybrat i její pravidelnost!</li>';
$chyba_taj_ci = 'style="background-color:#fec8bd;"';
}
if ($cchi_kung == 1 && $pravidelnost_cchi_kung =='0') {   
$chyba_vypis .= '<li>K aktivitě <b>Čchi-kung</b> musíte vybrat i její pravidelnost!</li>';
$chyba_cchi_kung = 'style="background-color:#fec8bd;"';
}
if ($joga == 1 && $pravidelnost_joga =='0') {   
$chyba_vypis .= '<li>K aktivitě <b>Jóga/Rehabilitační cvičení /Fyzio</b> musíte vybrat i její pravidelnost!</li>';
$chyba_joga = 'style="background-color:#fec8bd;"';
}
if ($kondicni_treninky == 1 && $pravidelnost_kondicni_treninky =='0') {   
$chyba_vypis .= '<li>K aktivitě <b>Fitness - kondiční trénink</b> musíte vybrat i její pravidelnost!</li>';
$chyba_kondicni_treninky = 'style="background-color:#fec8bd;"';
}
if ($tenis_squash_badminton == 1 && $pravidelnost_tenis_squash_badminton =='0') {   
$chyba_vypis .= '<li>K aktivitě <b>Tenis/Squash/Badminton</b> musíte vybrat i její pravidelnost!</li>';
$chyba_tenis_squash_badminton = 'style="background-color:#fec8bd;"';
}



if ($joga_kurz == 1 && $lektor =='0') {   
$chyba_vypis .= '<li>Pokud jste absolvoval/a kurz ŠIVA jógy, vyplňte posím lektora, nebo napište důvěrné!</li>';
$chyba_joga_kurz = 'style="background-color:#fec8bd;"';
}




        if (strlen($chyba_vypis) > 0){

require "krok_02.php";
echo '<br>';
echo '<div class="alert alert-danger"><h4>Došlo k následujícím chybám:</h4><hr><ul>'. $chyba_vypis .'</ul></div>';




        } else {

$lektor = encrypt_decrypt('encrypt', $lektor);

require "pripojeni_databaze.php";
$sql = "INSERT INTO sport_nepravidelne (
uzivatel_id,
bezky,
brusle_zimni,
prace_na_zahrade,
sjezd_lyze,
skialpinismus,
datum
)
VALUES (    
'$uzivatel_id',    
'$bezky',
'$brusle_zimni',
'$prace_na_zahrade',
'$sjezd_lyze',
'$skialpinismus',
 NOW()     
)";    
    
if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();    

require "pripojeni_databaze.php";
$sql = "INSERT INTO sport_pravidelne (
uzivatel_id,
posilovani,
pravidelnost_posilovani,
florbal,
pravidelnost_florbal,
bojove_sporty,
pravidelnost_bojove_sporty,
hokej,
pravidelnost_hokej,
fotbal,
pravidelnost_fotbal,
volejbal,
pravidelnost_volejbal,
aerobic,
pravidelnost_aerobic,
tanec,
pravidelnost_tanec,
plavani,
pravidelnost_plavani,
brusle_inline,
pravidelnost_brusle_inline,
kolo_spinning,
pravidelnost_kolo_spinning,
beh,
pravidelnost_beh,
pesi_turistika,
pravidelnost_pesi_turistika,
taj_ci,
pravidelnost_taj_ci,
cchi_kung,
pravidelnost_cchi_kung,
joga,
pravidelnost_joga,
kondicni_treninky,
pravidelnost_kondicni_treninky,
tenis_squash_badminton,
pravidelnost_tenis_squash_badminton,
datum
)
VALUES (    
'$uzivatel_id',    
'$posilovani',
'$pravidelnost_posilovani',
'$florbal',
'$pravidelnost_florbal',
'$bojove_sporty',
'$pravidelnost_bojove_sporty',
'$hokej',
'$pravidelnost_hokej',
'$fotbal',
'$pravidelnost_fotbal',
'$volejbal',
'$pravidelnost_volejbal',
'$aerobic',
'$pravidelnost_aerobic',
'$tanec',
'$pravidelnost_tanec',
'$plavani',
'$pravidelnost_plavani',
'$brusle_inline',
'$pravidelnost_brusle_inline',
'$kolo_spinning',
'$pravidelnost_kolo_spinning',
'$beh',
'$pravidelnost_beh',
'$pesi_turistika',
'$pravidelnost_pesi_turistika',
'$taj_ci',
'$pravidelnost_taj_ci',
'$cchi_kung',
'$pravidelnost_cchi_kung',
'$joga',
'$pravidelnost_joga',
'$kondicni_treninky',
'$pravidelnost_kondicni_treninky',
'$tenis_squash_badminton',
'$pravidelnost_tenis_squash_badminton',
 NOW()     
)"; 


if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();   


require "pripojeni_databaze.php";
$sql = "INSERT INTO joga (
uzivatel_id,
joga,
lektor,
datum
)
VALUES (    
'$uzivatel_id',    
'$joga_kurz',
'$lektor',
 NOW()     
)";    
    
if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();    

?>

<script>
setTimeout(function(){
window.location.href = 'detail.php?uzivatel_id=<? echo encrypt_decrypt('encrypt', $uzivatel_id);?>';
}, 5000);
</script>
<br>
    <div class="alert alert-success" role="alert">Záznam uživatele byl aktualizován, automaticky budete za <b>5 vteřin přesměrování</b> zpět na stránku uživatele, případně klikněte na tlačítko níže.</div>
    <a href="detail.php?uzivatel_id=<? echo encrypt_decrypt('encrypt', $uzivatel_id);?>" type="button" class="btn btn-info btn-sm">Zpět na stránku uživatel</a>


<?
  }
   }
?>
</div>
</body>
</html>
