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
<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/navigace/navigace.php'; ?>
<div class="container">

<?
require "sifrovani_dat.php";

$stav = addslashes(htmlspecialchars(trim("$_POST[stav]")));
$uzivatel_id = htmlspecialchars(trim("$_GET[uzivatel_id]"));
$uzivatel_id = addslashes(encrypt_decrypt('decrypt', $uzivatel_id));
$cosejinamneveslo = addslashes(htmlspecialchars(trim("$_POST[cosejinamneveslo]"))); 
$cosejinamneveslo = trim($cosejinamneveslo);


//$uzivatel_oblast = addslashes(htmlspecialchars(trim("$_POST[oblast]")));


$uzivatel_budoucnost = addslashes(htmlspecialchars(trim("$_POST[budoucnost]")));
$uzivatel_urazy = addslashes(htmlspecialchars(trim("$_POST[urazy]")));
$uzivatel_unava = addslashes(htmlspecialchars(trim("$_POST[unava]")));
$uzivatel_odpocinek = addslashes(htmlspecialchars(trim("$_POST[odpocinek]")));
$uzivatel_hmotnost = addslashes(htmlspecialchars(trim("$_POST[hmotnost]")));
$uzivatel_kg = addslashes(htmlspecialchars(trim("$_POST[kg]")));







if (!$uzivatel_kg){ $uzivatel_kg = 0;}

// --------- Osobní - oprava -------------
$osobni_finance = addslashes(htmlspecialchars(trim("$_POST[osobni_finance]")));
if (!$osobni_finance) { $osobni_finance = 0; }

$osobni_rodinne_vztahy = addslashes(htmlspecialchars(trim("$_POST[osobni_rodinne_vztahy]")));
if (!$osobni_rodinne_vztahy) { $osobni_rodinne_vztahy = 0; }

$osobni_psychika = addslashes(htmlspecialchars(trim("$_POST[osobni_psychika]")));
if (!$osobni_psychika) { $osobni_psychika = 0; }

$osobni_sebeduvera = addslashes(htmlspecialchars(trim("$_POST[osobni_sebeduvera]")));
if (!$osobni_sebeduvera) { $osobni_sebeduvera = 0; }

$osobni_prace = addslashes(htmlspecialchars(trim("$_POST[osobni_prace]")));
if (!$osobni_prace) { $osobni_prace = 0; }

$osobni_zdravotni_stav = addslashes(htmlspecialchars(trim("$_POST[osobni_zdravotni_stav]")));
if (!$osobni_zdravotni_stav) { $osobni_zdravotni_stav = 0; }

$osobni_partnerstvi = addslashes(htmlspecialchars(trim("$_POST[osobni_partnerstvi]")));
if (!$osobni_partnerstvi) { $osobni_partnerstvi = 0; }




// -----  Proč jste se rozhodl navštívit R.A.S.?
$neuspokujici_zdravotni_stav = addslashes(htmlspecialchars(trim("$_POST[neuspokujici_zdravotni_stav]"))); 
if (!$neuspokujici_zdravotni_stav) { $neuspokujici_zdravotni_stav = 0; }

$nezvladani_stresu = addslashes(htmlspecialchars(trim("$_POST[nezvladani_stresu]"))); 
if (!$nezvladani_stresu) { $nezvladani_stresu = 0; }

$psychicke_problemy = addslashes(htmlspecialchars(trim("$_POST[psychicke_problemy]"))); 
if (!$psychicke_problemy) { $psychicke_problemy = 0; }

$problem_s_hmotnosti = addslashes(htmlspecialchars(trim("$_POST[problem_s_hmotnosti]"))); 
if (!$problem_s_hmotnosti) { $problem_s_hmotnosti = 0; }

$samota = addslashes(htmlspecialchars(trim("$_POST[samota]"))); 
if (!$samota) { $samota = 0; }

$unavovy_syndrom = addslashes(htmlspecialchars(trim("$_POST[unavovy_syndrom]"))); 
if (!$unavovy_syndrom) { $unavovy_syndrom = 0; }

$zvedavost = addslashes(htmlspecialchars(trim("$_POST[zvedavost]"))); 
if (!$zvedavost) { $zvedavost = 0; }

//$jine = addslashes(htmlspecialchars(trim("$_POST[jine]"))); 
//if (!$jine) { $jine = 0; }


// ----  Jaký je Váš cíl v rámci programu R.A.S.?

$nabrat_svaly = addslashes(htmlspecialchars(trim("$_POST[nabrat_svaly]"))); 
if (!$nabrat_svaly) { $nabrat_svaly = 0; }

$naucit_se_pracovat_s_emocemi = addslashes(htmlspecialchars(trim("$_POST[naucit_se_pracovat_s_emocemi]"))); 
if (!$naucit_se_pracovat_s_emocemi) { $naucit_se_pracovat_s_emocemi = 0; }

$naucit_se_spravne_dychat = addslashes(htmlspecialchars(trim("$_POST[naucit_se_spravne_dychat]"))); 
if (!$naucit_se_spravne_dychat) { $naucit_se_spravne_dychat = 0; }

$naucit_se_zvladat_stres = addslashes(htmlspecialchars(trim("$_POST[naucit_se_zvladat_stres]"))); 
if (!$naucit_se_zvladat_stres) { $naucit_se_zvladat_stres = 0; }

$odstranit_psychicke_problemy = addslashes(htmlspecialchars(trim("$_POST[odstranit_psychicke_problemy]"))); 
if (!$odstranit_psychicke_problemy) { $odstranit_psychicke_problemy = 0; }

$poznat_nove_metody_pece_o_zdravi = addslashes(htmlspecialchars(trim("$_POST[poznat_nove_metody_pece_o_zdravi]"))); 
if (!$poznat_nove_metody_pece_o_zdravi) { $poznat_nove_metody_pece_o_zdravi = 0; }

$pribrat_na_hmotnosti = addslashes(htmlspecialchars(trim("$_POST[pribrat_na_hmotnosti]"))); 
if (!$pribrat_na_hmotnosti) { $pribrat_na_hmotnosti = 0; }

$zbavit_se_unavoveho_syndromu = addslashes(htmlspecialchars(trim("$_POST[zbavit_se_unavoveho_syndromu]"))); 
if (!$zbavit_se_unavoveho_syndromu) { $zbavit_se_unavoveho_syndromu = 0; }

$zhubnout = addslashes(htmlspecialchars(trim("$_POST[zhubnout]"))); 
if (!$zhubnout) { $zhubnout = 0; }

$zlepsit_celkovy_zdravotni_stav = addslashes(htmlspecialchars(trim("$_POST[zlepsit_celkovy_zdravotni_stav]"))); 
if (!$zlepsit_celkovy_zdravotni_stav) { $zlepsit_celkovy_zdravotni_stav = 0; }

$zlepsit_fyzickou_kondici = addslashes(htmlspecialchars(trim("$_POST[zlepsit_fyzickou_kondici]"))); 
if (!$zlepsit_fyzickou_kondici) { $zlepsit_fyzickou_kondici = 0; }

$zpevnit_telo = addslashes(htmlspecialchars(trim("$_POST[zpevnit_telo]"))); 
if (!$zpevnit_telo) { $zpevnit_telo = 0; }

$zrelaxovat = addslashes(htmlspecialchars(trim("$_POST[zrelaxovat]"))); 
if (!$zrelaxovat) { $zrelaxovat = 0; }


// oprava Odpočinek

$odpocinek_cestovani = addslashes(htmlspecialchars(trim("$_POST[odpocinek_cestovani]"))); 
if (!$odpocinek_cestovani) { $odpocinek_cestovani = 0; }

$odpocinek_domaci_prace = addslashes(htmlspecialchars(trim("$_POST[odpocinek_domaci_prace]"))); 
if (!$odpocinek_domaci_prace) { $odpocinek_domaci_prace = 0; }

$odpocinek_fyzicky_klidova = addslashes(htmlspecialchars(trim("$_POST[odpocinek_fyzicky_klidova]"))); 
if (!$odpocinek_fyzicky_klidova) { $odpocinek_fyzicky_klidova = 0; }

$odpocinek_posezeni_s_prateli = addslashes(htmlspecialchars(trim("$_POST[odpocinek_posezeni_s_prateli]"))); 
if (!$odpocinek_posezeni_s_prateli) { $odpocinek_posezeni_s_prateli = 0; }

$odpocinek_spanek = addslashes(htmlspecialchars(trim("$_POST[odpocinek_spanek]"))); 
if (!$odpocinek_spanek) { $odpocinek_spanek = 0; }

$odpocinek_sport = addslashes(htmlspecialchars(trim("$_POST[odpocinek_sport]"))); 
if (!$odpocinek_sport) { $odpocinek_sport = 0; }

$odpocinek_vubec = addslashes(htmlspecialchars(trim("$_POST[odpocinek_vubec]"))); 
if (!$odpocinek_vubec) { $odpocinek_vubec = 0; }

$odpocinek_zahrada = addslashes(htmlspecialchars(trim("$_POST[odpocinek_zahrada]"))); 
if (!$odpocinek_zahrada) { $odpocinek_zahrada = 0; }

    if ($stav !== 'odeslano'){
//   echo "NEODESLANO";
   require "krok_03.php";


        }else{
//   echo "ODESLANO";


$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));
$uzivatel_id = encrypt_decrypt('decrypt', $uzivatel_id); 
$uzivatel_login = addslashes(htmlspecialchars(trim("$_POST[uzivatel_login]")));

if ($neuspokujici_zdravotni_stav == 0 && $nezvladani_stresu == 0 && $psychicke_problemy == 0 && $problem_s_hmotnosti == 0 && $samota == 0 && $unavovy_syndrom == 0 && $zvedavost == 0) {
$chyba_vypis .= '<li>Musíte vybrat alespoň jednu položku v části: Proč jste se rozhodl navštívit R.A.S.?!</li>';
$chyba_duvod = 'style="background-color:#fec8bd;"';
}

if ($nabrat_svaly == 0 && $naucit_se_pracovat_s_emocemi == 0 && $naucit_se_spravne_dychat == 0 && $naucit_se_zvladat_stres == 0 && $odstranit_psychicke_problemy == 0 && $poznat_nove_metody_pece_o_zdravi == 0 && $pribrat_na_hmotnosti == 0 && $zbavit_se_unavoveho_syndromu == 0 && $zhubnout == 0 && $zlepsit_celkovy_zdravotni_stav == 0 && $zlepsit_fyzickou_kondici == 0 && $zpevnit_telo == 0 && $zrelaxovat == 0) {
$chyba_vypis .= '<li>Musíte vybrat alespoň jednu položku v části: Jaký je Váš cíl v rámci programu R.A.S.?!</li>';
$chyba_cil = 'style="background-color:#fec8bd;"';
}    


if ($osobni_finance == 0 && $osobni_rodinne_vztahy == 0 && $osobni_psychika == 0 && $osobni_sebeduvera == 0 && $osobni_prace == 0 && $osobni_zdravotni_stav == 0 && $osobni_partnerstvi == 0) {
$chyba_vypis .= '<li>Musíte vybrat alespoň jednu položku v části: Máte ve svém životě oblast, kterou potřebujete vyřešit a nemůžete se hnout z místa!</li>';
$chyba_osobni = 'style="background-color:#fec8bd;"';
    } 

if ($odpocinek_cestovani == 0 && $odpocinek_domaci_prace == 0 && $odpocinek_fyzicky_klidova == 0 && $odpocinek_posezeni_s_prateli == 0 && $odpocinek_spanek == 0 && $odpocinek_sport == 0 && $odpocinek_vubec == 0 && $odpocinek_zahrada == 0) {
$chyba_vypis .= '<li>Musíte vybrat alespoň jednu položku v části: Jakým způsobem odpočíváte</li>';
$chyba_odpocinek = 'style="background-color:#fec8bd;"';
  }



//if (!$uzivatel_oblast || $uzivatel_oblast =='0') {
//$chyba_vypis .= '<li>Musíte vybrat jednu z možností: Máte ve svém životě oblast, kterou potřebujete vyřešit a nemůžete se hnout z místa!</li>';
//$chyba_oblast = 'style="background-color:#fec8bd;"';
//}


if (!$uzivatel_budoucnost) {
$chyba_vypis .= '<li>Musíte vybrat jednu z možností: Máte pocit, že se bojíte života jako takového, resp. že žijete hodně ve strachu např. z budoucnosti!</li>';
$chyba_budoucnost = 'style="background-color:#fec8bd;"';
}

if (!$uzivatel_urazy || $uzivatel_urazy =='0') {   
$chyba_vypis .= '<li>Musíte vybrat jednu z možností: Dějí se Vám v životě často úrazy? Mohou to být i zvláštní úrazy - např. pád na rovině, atd.!</li>';
$chyba_urazy = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_unava || $uzivatel_unava =='0') {   
$chyba_vypis .= '<li>Musíte vybrat jednu z možností: Když máte vyvinout sportovní aktivitu a nechce se Vám do ní, je to z důvodu spíše únavy nebo lenosti!</li>';
$chyba_unava = 'style="background-color:#fec8bd;"';
}

//if (!$uzivatel_odpocinek || $uzivatel_odpocinek =='0') {   
//$chyba_vypis .= '<li>Musíte vybrat jednu z možností: Jakým způsobem odpočíváte, vyberte jednu z  možností!</li>';
//$chyba_odpocinek = 'style="background-color:#fec8bd;"';
//}

if (!$uzivatel_hmotnost|| $uzivatel_hmotnost =='0') {   
$chyba_vypis .= '<li>Musíte vybrat jednu z možností: Aktuální hmotnost, vyberte jednu z možností!</li>';
$chyba_hmotnost = 'style="background-color:#fec8bd;"';
}


    
if (strlen($chyba_vypis) > 0){

require "krok_03.php";
echo '<br>';
echo '<div class="alert alert-danger"><h4>Došlo k následujícím chybám:</h4><hr><ul>'. $chyba_vypis .'</ul></div>';



    } else {
// ------------------  Uložení záznamu  a vypsání údajů ------------------------    

//    require "pripojeni_databaze.php";
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "UPDATE uzivatel SET 
    cosejinamneveslo = '$cosejinamneveslo',
    uzivatel_budoucnost = '$uzivatel_budoucnost',
    uzivatel_urazy = '$uzivatel_urazy',
    uzivatel_unava = '$uzivatel_unava',
    uzivatel_odpocinek ='$uzivatel_odpocinek',
    uzivatel_hmotnost = '$uzivatel_hmotnost',
    uzivatel_kg = '$uzivatel_kg',
    osobni_finance = '$osobni_finance', 
    osobni_rodinne_vztahy = '$osobni_rodinne_vztahy',
    osobni_psychika = '$osobni_psychika',
    osobni_sebeduvera = '$osobni_sebeduvera',
    osobni_prace = '$osobni_prace',
    osobni_zdravotni_stav = '$osobni_zdravotni_stav',
    osobni_partnerstvi = '$osobni_partnerstvi',
    odpocinek_cestovani = '$odpocinek_cestovani',
    odpocinek_domaci_prace = '$odpocinek_domaci_prace',
    odpocinek_fyzicky_klidova = '$odpocinek_fyzicky_klidova',
    odpocinek_posezeni_s_prateli = '$odpocinek_posezeni_s_prateli',
    odpocinek_spanek = '$odpocinek_spanek',
    odpocinek_sport = '$odpocinek_sport',
    odpocinek_vubec = '$odpocinek_vubec',
    odpocinek_zahrada = '$odpocinek_zahrada'
    WHERE uzivatel_id = '$uzivatel_id' LIMIT 1";
    if ($conn->query($sql) === TRUE) {
    echo '<br><div class="alert alert-success" role="alert">Záznam uživatele byl aktualizován, automaticky budete za <b>5 vteřin přesměrování</b> zpět na stránku uživatele, případně klikněte na tlačítko níže.</div>';

//require "pripojeni_databaze.php";
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "INSERT INTO ras_duvod (
uzivatel_id,
neuspokujici_zdravotni_stav,
nezvladani_stresu,
psychicke_problemy,
problem_s_hmotnosti,
samota,
unavovy_syndrom,
zvedavost,
datum
)
 
VALUES (    
'$uzivatel_id',    
'$neuspokujici_zdravotni_stav',
'$nezvladani_stresu',
'$psychicke_problemy',
'$problem_s_hmotnosti',
'$samota',
'$unavovy_syndrom',
'$zvedavost',
 NOW()     
)";    
    
if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();    


//require "pripojeni_databaze.php";
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "INSERT INTO ras_cil (
uzivatel_id,
nabrat_svaly, 
naucit_se_pracovat_s_emocemi,
naucit_se_spravne_dychat, 
naucit_se_zvladat_stres, 
odstranit_psychicke_problemy, 
poznat_nove_metody_pece_o_zdravi,
pribrat_na_hmotnosti, 
zbavit_se_unavoveho_syndromu, 
zhubnout, 
zlepsit_celkovy_zdravotni_stav, 
zlepsit_fyzickou_kondici, 
zpevnit_telo, 
zrelaxovat,
datum 
)
 
VALUES (    
'$uzivatel_id', 
'$nabrat_svaly', 
'$naucit_se_pracovat_s_emocemi',
'$naucit_se_spravne_dychat', 
'$naucit_se_zvladat_stres', 
'$odstranit_psychicke_problemy', 
'$poznat_nove_metody_pece_o_zdravi',
'$pribrat_na_hmotnosti', 
'$zbavit_se_unavoveho_syndromu', 
'$zhubnout', 
'$zlepsit_celkovy_zdravotni_stav', 
'$zlepsit_fyzickou_kondici', 
'$zpevnit_telo', 
'$zrelaxovat',
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
    <a href="detail.php?uzivatel_id=<? echo encrypt_decrypt('encrypt', $uzivatel_id);?>" type="button" class="btn btn-info btn-sm">Zpět na stránku uživatel</a>
    <?

    } else {
    echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }

    $conn->close();



// ---- konec ukládaní záznamu
    }    
    
}
?>
</div>
</body>
</html>