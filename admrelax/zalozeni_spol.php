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
  <link href="./css/prettify-1.0.css" rel="stylesheet">
  <link href="./css/base.css" rel="stylesheet">
  <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
  
 
 
  <link href="ares/modul/ares/ares.css?v=1.0" rel="stylesheet" type="text/css" />
  <script src="ares/funkce/jquery-1.10.2.min.js" type="text/javascript"></script>
  <script src="ares/modul/ares/ares.js?v=1.0" type="text/javascript"></script>
 
 <style>
input[type=text], select {
  width: 100%;
  padding: 7px 10px;
  margin: 4px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
} 

 </style>
  
</head>
<body>
<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/navigace/navigace.php'; ?>
<div class="container">

<?
$stav = htmlspecialchars(trim("$_POST[stav]"));

    if ($stav !== 'odeslano'){
//    echo "NEODESLANO";
    require "form_spol.php";

        }else{
//    echo "ODESLANO";

// Data z Aresu
$spolecnost_ico = htmlspecialchars(trim("$_POST[fakturacni_ico]"));
$spolecnost_dic = htmlspecialchars(trim("$_POST[fakturacni_dic]"));
$spolecnost_nazev = htmlspecialchars(trim("$_POST[fakturacni_firma]"));
$spolecnost_ulice = htmlspecialchars(trim("$_POST[fakturacni_adresa]"));
$spolecnost_cp = htmlspecialchars(trim("$_POST[fakturacni_cp]"));
$spolecnost_co = htmlspecialchars(trim("$_POST[fakturacni_co]"));
$spolecnost_co = str_replace($spolecnost_co);
$spolecnost_mesto = htmlspecialchars(trim("$_POST[fakturacni_mesto]"));
$spolecnost_psc = htmlspecialchars(trim("$_POST[fakturacni_psc]"));

// Data z kontaktu
$spolecnost_nazev_kontakt = htmlspecialchars(trim("$_POST[fakturacni_firma2]"));
$spolecnost_osoba_kontakt = htmlspecialchars(trim("$_POST[kontakt_osoba]"));
$spolecnost_ulice_kontakt = htmlspecialchars(trim("$_POST[fakturacni_adresa2]"));
$spolecnost_cp_kontakt = htmlspecialchars(trim("$_POST[fakturacni_cp2]"));
$spolecnost_co_kontakt = htmlspecialchars(trim("$_POST[fakturacni_co2]"));
$spolecnost_co_kontakt = str_replace($spolecnost_co_kontakt);
$spolecnost_mesto_kontakt = htmlspecialchars(trim("$_POST[fakturacni_mesto2]"));
$spolecnost_psc_kontakt = htmlspecialchars(trim("$_POST[fakturacni_psc2]"));
$spolecnost_email_kontakt = htmlspecialchars(trim("$_POST[email]"));
$spolecnost_prefix_kontakt = htmlspecialchars(trim("$_POST[prefix]"));
$spolecnost_telefon_kontakt = htmlspecialchars(trim("$_POST[telefon]"));

// kontrola první části formuláře - data z Aresu 
if (!$spolecnost_ico) {
$chyba_vypis .= '<li><b>Sídlo společnosti:</b> Musíte vypnit pole IČO solečnosti!</li>';
$chyba_spolecnost_ico = 'style="background-color:#fec8bd;"';
}

if (!$spolecnost_nazev) {
$chyba_vypis .= '<li><b>Sídlo společnosti:</b> Musíte zadat název společnosti!</li>';
$chyba_spolecnost_nazev = 'style="background-color:#fec8bd;"';
}

if (!$spolecnost_ulice) {
$chyba_vypis .= '<li><b>Sídlo společnosti:</b> Musíte vypnit pole Ulice!</li>';
$chyba_spolecnost_ulice = 'style="background-color:#fec8bd;"';
}

if (!$spolecnost_cp) {
$chyba_vypis .= '<li><b>Sídlo společnosti:</b> Musíte vypnit pole Číslo popisné!</li>';
$chyba_spolecnost_cp = 'style="background-color:#fec8bd;"';
}

if (!$spolecnost_mesto) {
$chyba_vypis .= '<li><b>Sídlo společnosti:</b> Musíte vypnit pole Obec!</li>';
$chyba_spolecnost_mesto = 'style="background-color:#fec8bd;"';
}

if (!$spolecnost_psc) {
$chyba_vypis .= '<li><b>Sídlo společnosti:</b> Musíte vypnit pole PSČ!</li>';
$chyba_spolecnost_psc = 'style="background-color:#fec8bd;"';
}


// kontrola spodní části formuláře - Kontakt
if (!$spolecnost_nazev_kontakt) {
$chyba_vypis .= '<li><b>Kontakt společnosti:</b> Musíte zadat název společnosti!</li>';
$chyba_spolecnost_nazev_kontakt = 'style="background-color:#fec8bd;"';
}
if (!$spolecnost_ulice_kontakt) {
$chyba_vypis .= '<li><b>Kontakt společnosti:</b> Musíte vypnit pole Ulice!</li>';
$chyba_spolecnost_ulice_kontakt = 'style="background-color:#fec8bd;"';
}
if (!$spolecnost_cp_kontakt) {
$chyba_vypis .= '<li><b>Kontakt společnosti:</b> Musíte vypnit pole Číslo popisné!</li>';
$chyba_spolecnost_cp_kontakt = 'style="background-color:#fec8bd;"';
}
if (!$spolecnost_mesto_kontakt) {
$chyba_vypis .= '<li><b>Kontakt společnosti:</b> Musíte vypnit pole Obec!</li>';
$chyba_spolecnost_mesto_kontakt = 'style="background-color:#fec8bd;"';
}
if (!$spolecnost_psc_kontakt) {
$chyba_vypis .= '<li><b>Kontakt společnosti:</b> Musíte vypnit pole PSČ!</li>';
$chyba_spolecnost_psc_kontakt = 'style="background-color:#fec8bd;"';
}






if (strlen($chyba_vypis) > 0){
    require "form_spol.php";
    echo '<br>';
    echo '<div class="alert alert-danger"><h4>Došlo k následujícím chybám:</h4><hr><ul>'. $chyba_vypis .'</ul></div>';


    } else {

require "pripojeni_databaze.php";

$sql = "INSERT INTO spolecnost (
 spolecnost_ico,
 spolecnost_dic, 
 spolecnost_nazev, 
 spolecnost_ulice, 
 spolecnost_cp,
 spolecnost_co, 
 spolecnost_mesto,
 spolecnost_psc,
 spolecnost_nazev_kontakt,
 spolecnost_osoba_kontakt,
 spolecnost_ulice_kontakt,
 spolecnost_cp_kontakt,
 spolecnost_co_kontakt,
 spolecnost_mesto_kontakt,
 spolecnost_psc_kontakt,   
 spolecnost_email_kontakt,
 spolecnost_prefix_kontakt,
 spolecnost_telefon_kontakt
 )

 VALUES (
'$spolecnost_ico',
'$spolecnost_dic', 
'$spolecnost_nazev', 
'$spolecnost_ulice',
'$spolecnost_cp',
'$spolecnost_co',
'$spolecnost_mesto',
'$spolecnost_psc',
'$spolecnost_nazev_kontakt',
'$spolecnost_osoba_kontakt',
'$spolecnost_ulice_kontakt',
'$spolecnost_cp_kontakt',
'$spolecnost_co_kontakt',
'$spolecnost_mesto_kontakt',
'$spolecnost_psc_kontakt', 
'$spolecnost_email_kontakt',
'$spolecnost_prefix_kontakt',
'$spolecnost_telefon_kontakt'
)";

 if ($conn->query($sql) === TRUE) {
//  echo "Záznam byl uložen";


} else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
}
$conn->close();



echo '<br><div class="alert alert-success" role="alert">Společnost <b>' .$spolecnost_nazev. '</b> byl založen, automaticky budete za <b>5 vteřin přesměrování</b> zpět na přehled společností, případně klikněte na tlačítko níže.</div>';

?>
<script>
setTimeout(function(){
window.location.href = 'spolecnosti.php';
}, 5000);
</script>
    <a href="spolecnosti.php" type="button" class="btn btn-info btn-sm">Zpět na přehled společností</a>  
    
    
<?




    }
        }
?>

    </div>
        </body>
            </html>