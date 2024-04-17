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
  
</head>
<body>
<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/navigace/navigace.php'; ?>
<div class="container">

<?   
require "sifrovani_dat.php";
$stav = htmlspecialchars(trim("$_POST[stav]"));
$uzivatel_id = htmlspecialchars(trim("$_GET[uzivatel_id]"));
$uzivatel_id = encrypt_decrypt('decrypt', $uzivatel_id);

require "pripojeni_databaze.php";

$sql = "SELECT * FROM uzivatel 
INNER JOIN role ON (uzivatel.uzivatel_role = role.role_id)
INNER JOIN pojistovny ON (uzivatel.uzivatel_pojistovna = pojistovny.pojistovna_id)
INNER JOIN prefix ON (uzivatel.uzivatel_prefix = prefix.prefix_id) WHERE uzivatel_role = '2' AND uzivatel_id = '$uzivatel_id' ORDER BY uzivatel_id ASC
";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
$uzivatel_jmeno =encrypt_decrypt('decrypt', $row["uzivatel_jmeno"]);
$uzivatel_prijmeni = encrypt_decrypt('decrypt', $row["uzivatel_prijmeni"]);
$uzivatel_email = encrypt_decrypt('decrypt', $row["uzivatel_email"]);
$uzivatel_mobil = encrypt_decrypt('decrypt', $row["uzivatel_mobil"]);
$uzivatel_prefix = $row["uzivatel_prefix"]; 
$uzivatel_login = $row["uzivatel_login"];   
}
          $conn->close();


     if ($stav !== 'odeslano'){
    //  require "form_admin_2.php";
      require "./form_admin_2.php";

        }else{

$uzivatel_jmeno = htmlspecialchars(trim("$_POST[jmeno]"));
$uzivatel_prijmeni = htmlspecialchars(trim("$_POST[prijmeni]"));
$uzivatel_login = htmlspecialchars(trim("$_POST[login]"));
$uzivatel_email = htmlspecialchars(trim("$_POST[email]"));
$uzivatel_prefix = htmlspecialchars(trim("$_POST[prefix]"));
$uzivatel_mobil = htmlspecialchars(trim("$_POST[mobil]"));
$uzivatel_role = '2'; 

if ( is_numeric(htmlspecialchars(trim("$_POST[mobil]"))) ) {

$uzivatel_mobil = htmlspecialchars(trim("$_POST[mobil]"));
    } else {
$chyba_vypis .= '<li>Pole telefon musí být číslo!</li>';
$chyba_mobil = 'style="background-color:#fec8bd;"';    
    }
    
if (strlen($uzivatel_mobil) <= 8) {
$chyba_vypis .= '<li>Pole telefon musí obsahovat minimálně 9 znaků!</li>';
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
$chyba_vypis .= '<li>Musíte vypnit pole Email!</li>';
$chyba_email = 'style="background-color:#fec8bd;"';
}

if (strlen($chyba_vypis) > 0){

require "form_admin_2.php";
echo '<br>';
echo '<div class="alert alert-danger"><h4>Došlo k následujícím chybám:</h4><hr><ul>'. $chyba_vypis .'</ul></div>';

    } else {
    

$uzivatel_jmeno = encrypt_decrypt('encrypt', $uzivatel_jmeno);
$uzivatel_prijmeni = encrypt_decrypt('encrypt', $uzivatel_prijmeni);
$uzivatel_mobil = encrypt_decrypt('encrypt', $uzivatel_mobil);
$uzivatel_email = encrypt_decrypt('encrypt', $uzivatel_email);

require "pripojeni_databaze.php";

$sql = "UPDATE uzivatel SET 
uzivatel_jmeno = '$uzivatel_jmeno',
uzivatel_prijmeni = '$uzivatel_prijmeni',
uzivatel_mobil = '$uzivatel_mobil',
uzivatel_email = '$uzivatel_email'
WHERE uzivatel_id = '$uzivatel_id' 
LIMIT 1";

    if ($conn->query($sql) === TRUE) {

     echo '<br><div class="alert alert-success" role="alert">Záznam administrátora <b>' .$uzivatel_login. '</b> byl aktualizován:</div>';

    } else {

    echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }

    $conn->close();

    echo '<a href="./admini.php" type="button" class="btn btn-success"">Zpět na seznam administrátorů</a>';
    
    }

        }
?>

    </div>
        </body>
            </html>