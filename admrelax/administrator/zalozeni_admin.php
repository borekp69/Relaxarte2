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

<?
$stav = htmlspecialchars(trim("$_POST[stav]"));

    if ($stav !== 'odeslano'){
//    echo "NEODESLANO";
    require "form_admin.php";

        }else{
//    echo "ODESLANO";

$uzivatel_jmeno = htmlspecialchars(trim("$_POST[jmeno]"));
$uzivatel_prijmeni = htmlspecialchars(trim("$_POST[prijmeni]"));
$uzivatel_login = htmlspecialchars(trim("$_POST[login]"));
$uzivatel_email = htmlspecialchars(trim("$_POST[email]"));
$uzivatel_prefix = htmlspecialchars(trim("$_POST[prefix]"));
$uzivatel_mobil = htmlspecialchars(trim("$_POST[mobil]"));
$uzivatel_heslo_form = htmlspecialchars(trim("$_POST[heslo]"));
$uzivatel_heslo_2 = htmlspecialchars(trim("$_POST[heslo_2]"));
$uzivatel_role = '2';


require "../db/pripojeni_databaze.php";
$sql = "SELECT * FROM uzivatel  WHERE uzivatel_login = '$uzivatel_login'";
$result = $conn->query($sql);
$pocet_zaznamu = mysqli_num_rows($result);

if ($pocet_zaznamu > 0){
$chyba_vypis .= '<li>Přihlašovací jméno již používá jiný uživatel!</li>';
$chyba_login = 'style="background-color:#fec8bd;"';
}
if ( is_numeric(htmlspecialchars(trim("$_POST[mobil]"))) ) {
$uzivatel_mobil = htmlspecialchars(trim("$_POST[mobil]"));
    } else {
$chyba_vypis .= '<li>Pole telefon musí být číslo!</li>';
$chyba_mobil = 'style="background-color:#fec8bd;"';    
    }
if (!$uzivatel_jmeno) {
$chyba_vypis .= '<li>Musíte vypnit pole Jméno!</li>';
$chyba_jmeno = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_prijmeni) {
$chyba_vypis .= '<li>Musíte vypnit pole Přijmení!</li>';
$chyba_prijmeni = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_email) {
$chyba_vypis .= '<li>Musíte vypnit pole E-mail!</li>';
$chyba_email = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_mobil) {
$chyba_vypis .= '<li>Musíte vypnit pole telefon!</li>';
$chyba_mobil = 'style="background-color:#fec8bd;"';
}
if (strlen($uzivatel_mobil) <= 8) {
$chyba_vypis .= '<li>Pole telefon musí obsahovat minimálně 9 znaků!</li>';
$chyba_mobil = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_login) {
$chyba_vypis .= '<li>Musíte vypnit pole přihlašovací jméno - Login!</li>';
$chyba_login = 'style="background-color:#fec8bd;"';
}
if (strlen($uzivatel_login) <= 7) {
$chyba_vypis .= '<li>Login musí obsahova minimálně 8 znaků!</li>';
$chyba_login = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_heslo_form) {
$chyba_vypis .= '<li>Musíte vypnit pole heslo!</li>';
$chyba_heslo = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_heslo_2) {
$chyba_vypis .= '<li>Musíte vypnit pole kontrolní heslo!</li>';
$chyba_heslo_2 = 'style="background-color:#fec8bd;"';
}

if (strlen($uzivatel_heslo_form) <= 7) {
$chyba_vypis .= '<li>Heslo musí obsahova minimálně 8 znaků!</li>';
$chyba_heslo = 'style="background-color:#fec8bd;"';
}
if ($uzivatel_heslo_form != $uzivatel_heslo_2) {
$chyba_vypis .= '<li>Hesla musejí být stejná!</li>';
$chyba_heslo = 'style="background-color:#fec8bd;"';
$chyba_heslo_2 = 'style="background-color:#fec8bd;"';
}


if (strlen($chyba_vypis) > 0){

require "form_admin.php";
echo '<br>';
echo '<div class="alert alert-danger"><h4>Došlo k následujícím chybám:</h4><hr><ul>'. $chyba_vypis .'</ul></div>';

    } else {
// Vygenerování kódu, loginu  a hesla včetně zobrazení    
// tady  bude připojení do DB a uložení dat

require "./generator_kodu.php";
require "../db/sifrovani_dat.php";
require "../db/pripojeni_databaze.php";

$heslo = $uzivatel_heslo_form;
$uzivatel_heslo_form = md5($uzivatel_heslo_form);
$uzivatel_jmeno = encrypt_decrypt('encrypt', $uzivatel_jmeno);
$uzivatel_prijmeni = encrypt_decrypt('encrypt', $uzivatel_prijmeni);
$uzivatel_mobil = encrypt_decrypt('encrypt', $uzivatel_mobil);
$uzivatel_email = encrypt_decrypt('encrypt', $uzivatel_email);


$sql = "INSERT INTO uzivatel (
 uzivatel_login,
 uzivatel_heslo, 
 uzivatel_jmeno, 
 uzivatel_prijmeni,
 uzivatel_prefix,
 uzivatel_mobil,
 uzivatel_role,   
 uzivatel_kod,
 uzivatel_email,
 uzivatel_pojistovna
 )
 
 VALUES (
'$uzivatel_login',
'$uzivatel_heslo_form', 
'$uzivatel_jmeno', 
'$uzivatel_prijmeni',
'$uzivatel_prefix',
'$uzivatel_mobil',
'$uzivatel_role',
'$uzivatel_kod',
'$uzivatel_email',
'8'
)";

if ($conn->query($sql) === TRUE) {
//  echo "Záznam byl uložen";

    $sql = "SELECT * FROM role WHERE role_id = '2'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    $role = $row["role_nazev"];
    }
    $conn->close();


?>
<h2>Přihlašovací údaje  - role: <? echo $role; ?></h2>
<div class="panel panel-default">
<div class="panel-heading">
<div class="row">
  <div class="col-sm-3">
       <div class="form-group">
      <label for="uzivatel">Login:</label>
      <input type="text" class="form-control form-control-sm" name="login"  value = "<? echo $uzivatel_login; ?>" readonly>
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
                </div>  
                    </div>
<br>
<div class="alert alert-success"><span class="glyphicon glyphicon-user"></span>&nbsp;
  <strong>Uživatelský účet byl založen.</strong> Přihlašovací údaje si prosím pečlivě uschovejte pro přihlášení do webové aplikace.<br>
</div>
   
<?

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