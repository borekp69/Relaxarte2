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
$stav = htmlspecialchars(trim("$_POST[stav]"));

    if ($stav !== 'odeslano'){
//    echo "NEODESLANO";
    require "krok_01.php";

        }else{
//    echo "ODESLANO";
$uzivatel_spolecnost = htmlspecialchars(trim("$_POST[spolecnost]"));
$uzivatel_jmeno = htmlspecialchars(trim("$_POST[jmeno]"));
$uzivatel_prijmeni = htmlspecialchars(trim("$_POST[prijmeni]"));    
$uzivatel_narozeni = htmlspecialchars(trim("$_POST[datum_narozeni]"));
$uzivatel_rc = htmlspecialchars(trim("$_POST[rodne_cislo]"));
$uzivatel_ulice = htmlspecialchars(trim("$_POST[ulice]"));
$uzivatel_cp = htmlspecialchars(trim("$_POST[cislo_popisne]"));
$uzivatel_co = htmlspecialchars(trim("$_POST[cislo_orientacni]"));
$uzivatel_mesto = htmlspecialchars(trim("$_POST[mesto]"));
$uzivatel_psc = htmlspecialchars(trim("$_POST[psc]"));
$uzivatel_email = htmlspecialchars(trim("$_POST[email]"));
$uzivatel_prefix = htmlspecialchars(trim("$_POST[prefix]"));
$uzivatel_mobil = htmlspecialchars(trim("$_POST[mobil]"));
$uzivatel_pojistovna = htmlspecialchars(trim("$_POST[pojistovna]"));
$uzivatel_pohlavi = htmlspecialchars(trim("$_POST[pohlavi]"));
$uzivatel_open_space = htmlspecialchars(trim("$_POST[open_space]"));
$uzivatel_manazer = htmlspecialchars(trim("$_POST[manazer]"));
$uzivatel_zamestnani = htmlspecialchars(trim("$_POST[zamestnani]"));
$uzivatel_hodiny_pc = htmlspecialchars(trim("$_POST[hodiny_pc]"));
$uzivatel_lekar = htmlspecialchars(trim("$_POST[lekar]"));


$uzivatel_role = '3';

if ($uzivatel_spolecnost == 0){
$uzivatel_spolecnost = 1;
}
if (!$uzivatel_jmeno) {
$chyba_vypis .= '<li>Musíte vypnit pole Jméno!</li>';
$chyba_jmeno ='style="background-color:#fec8bd;"';
}
if (!$uzivatel_prijmeni) {
$chyba_vypis .= '<li>Musíte vypnit pole Přijmení!</li>';
$chyba_prijmeni = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_narozeni) {
$chyba_vypis .= '<li>Musíte vypnit pole Datum narození!</li>';
$chyba_narozeni = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_rc) {
$chyba_vypis .= '<li>Musíte vypnit pole Rodné číslo!</li>';
$chyba_rc = 'style="background-color:#fec8bd;"';
}

if (!$uzivatel_ulice) {
$chyba_vypis .= '<li>Musíte vypnit pole Ulice!</li>';
$chyba_ulice = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_cp) {
$chyba_vypis .= '<li>Musíte vypnit pole Číslo popisné!</li>';
$chyba_cp = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_mesto) {
$chyba_vypis .= '<li>Musíte vypnit pole Obec!</li>';
$chyba_mesto = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_psc) {
$chyba_vypis .= '<li>Musíte vypnit pole PSČ!</li>';
$chyba_psc = 'style="background-color:#fec8bd;"'; 
}
if (!$uzivatel_email) {
$chyba_vypis .= '<li>Musíte vypnit pole Email!</li>';
$chyba_email = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_mobil) {
$chyba_vypis .= '<li>Musíte vypnit pole Telefon!</li>';
$chyba_mobil = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_pojistovna || $uzivatel_pojistovna == 0) {
$chyba_vypis .= '<li>Musíte vypnit pole Zdravotní pojišťovna!</li>';
$chyba_pojistovna = 'style="background-color:#fec8bd;"';
}                           
if (!$uzivatel_pohlavi) {     
$chyba_vypis .= '<li>Musíte vypnit pole Pohlaví!</li>';
$chyba_pohlavi = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_open_space || $uzivatel_open_space == '0') {
$chyba_vypis .= '<li>Musíte vybrat jednu z možností: Práce v Open space!</li>';
$chyba_open_space = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_manazer || $uzivatel_manazer == '0') {
$chyba_vypis .= '<li>Musíte vybrat jednu z možností: Manažerská pozice!</li>';
$chyba_manazer = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_zamestnani || $uzivatel_zamestnani == '0') {
$chyba_vypis .= '<li>Musíte vybrat jednu z možností: Typ zaměstnání!</li>';
$chyba_zamestnani = 'style="background-color:#fec8bd;"';
}

if (!$uzivatel_hodiny_pc || $uzivatel_hodiny_pc =='0') {   
$chyba_vypis .= '<li>Musíte vybrat jednu z možností: Kolik hodin denně trávíte u počítače!</li>';
$chyba_hodiny_pc = 'style="background-color:#fec8bd;"';
}

if (!$uzivatel_lekar || $uzivatel_lekar =='0') {   
$chyba_vypis .= '<li>Musíte vybrat jednu z možností: Jste regisrtován/a u některého našeho lékeře!</li>';
$chyba_lekar = 'style="background-color:#fec8bd;"';
}







if (strlen($chyba_vypis) > 0){

require "krok_01.php";
echo '<br>';
echo '<div class="alert alert-danger"><h4>Došlo k následujícím chybám:</h4><hr><ul>'. $chyba_vypis .'</ul></div>';

    } else {
// Vygenerování kódu, loginu  a hesla včetně zobrazení    
// tady  bude připojení do DB a uložení dat

require "generator_kodu.php";
//require "sifrovani_dat.php";
//require "pripojeni_databaze.php";
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/sifrovani_dat.php";

$heslo = $uzivatel_heslo;
$uzivatel_heslo = md5($uzivatel_heslo);
$uzivatel_jmeno = encrypt_decrypt('encrypt', $uzivatel_jmeno);
$uzivatel_prijmeni = encrypt_decrypt('encrypt', $uzivatel_prijmeni);
$uzivatel_rc = encrypt_decrypt('encrypt', $uzivatel_rc); 
$uzivatel_narozeni = encrypt_decrypt('encrypt', $uzivatel_narozeni);
$uzivatel_mobil = encrypt_decrypt('encrypt', $uzivatel_mobil);
$uzivatel_email = encrypt_decrypt('encrypt', $uzivatel_email);
$uzivatel_ulice = encrypt_decrypt('encrypt', $uzivatel_ulice);
$uzivatel_mesto = encrypt_decrypt('encrypt', $uzivatel_mesto);


//  ------------------------  začátek generování QR kódu
$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'qrcode/temp'.DIRECTORY_SEPARATOR;
//html PNG location prefix
$PNG_WEB_DIR = 'qrcode/temp/';
//    $qr_data = "Test v sest";
$qr_data = $uzivatel_kod;    
include "./qrcode/qrlib.php";    
    //ofcourse we need rights to create temp dir
if (!file_exists($PNG_TEMP_DIR))
mkdir($PNG_TEMP_DIR);
$filename = $PNG_TEMP_DIR.'relax.png';
//processing form input
//remember to sanitize user input in real-life solution !!!
$errorCorrectionLevel = 'H';
$matrixPointSize = 2;
                 // user data
$filename = $PNG_TEMP_DIR.'relaxarte'.md5($qr_data.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
QRcode::png($qr_data, $filename, $errorCorrectionLevel, $matrixPointSize, 2); 


$fp_qr = $filename; 
$uzivatel_qrcode = addslashes(file_get_contents($fp_qr)); 
// ------------- konec generovani QR kódu



$sql = "INSERT INTO uzivatel (
 uzivatel_spolecnost,
 uzivatel_login,
 uzivatel_heslo, 
 uzivatel_jmeno, 
 uzivatel_prijmeni, 
 uzivatel_rc,
 uzivatel_narozeni, 
 uzivatel_prefix,
 uzivatel_mobil,
 uzivatel_email,
 uzivatel_role,
 uzivatel_ulice,
 uzivatel_cp,
 uzivatel_co,
 uzivatel_mesto,
 uzivatel_psc,   
 uzivatel_kod,
 uzivatel_pojistovna,
 uzivatel_pohlavi,
 uzivatel_zamestnani,
 uzivatel_open_space,
 uzivatel_manazer,
 uzivatel_hodiny_pc,
 uzivatel_qrcode,
 uzivatel_lekar  
 )
 
 VALUES (
'$uzivatel_spolecnost', 
'$uzivatel_kod',
'$uzivatel_heslo', 
'$uzivatel_jmeno', 
'$uzivatel_prijmeni',
'$uzivatel_rc',
'$uzivatel_narozeni',
'$uzivatel_prefix',
'$uzivatel_mobil',
'$uzivatel_email',
'$uzivatel_role',
'$uzivatel_ulice',
'$uzivatel_cp',
'$uzivatel_co',
'$uzivatel_mesto',
'$uzivatel_psc', 
'$uzivatel_kod',
'$uzivatel_pojistovna',
'$uzivatel_pohlavi',
'$uzivatel_zamestnani',
'$uzivatel_open_space',
'$uzivatel_manazer',
'$uzivatel_hodiny_pc',
'$uzivatel_qrcode',
'$uzivatel_lekar'
)";

if ($conn->query($sql) === TRUE) {
// ------------------  Uložení záznamu  a vypsání údajů ------------------------

?>
<h2>Přihlašovací údaje</h2>
<div class="panel panel-default">
<div class="panel-heading">
<div class="row">
  <div class="col-sm-3">
       <div class="form-group">
      <label for="uzivatel">Login:</label>
      <input type="text" class="form-control form-control-sm" name="login"  value = "<? echo $uzivatel_kod; ?>" readonly>
  </div> 
        </div>
            </div>  

<div class="row">       
<div class="col-sm-3">
<div class="form-group">
<label for="uzivatel">Heslo:</label>
<input type="text" class="form-control form-control-sm" name="heslo" value = "<? echo $heslo; ?>" readonly>
</div> 
</div>
</div>

&nbsp;
<img src="<? echo $PNG_WEB_DIR.basename($filename); ?>">
&nbsp;
<img src="./barcode/barcode.php?text=<? echo $uzivatel_kod?>">          

            
                </div>  
                    </div>
<br>
<div class="alert alert-success"><span class="glyphicon glyphicon-user"></span>&nbsp;
  <strong>Klientský účet byl založen.</strong> Přihlašovací údaje si prosím pečlivě uschovejte pro přihlášení do webové aplikace.<br>

</div>



<? // -------------- pokudnastane nějaká chyba ---------------------------------
} else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
}
$conn->close();


    }
            }
?>

    </div>
        </body>
            </html>