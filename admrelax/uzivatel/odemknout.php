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
<div class="container">
<?


$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));
$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));
require "sifrovani_dat.php";
$uzivatel_id = encrypt_decrypt('decrypt', $uzivatel_id);


require "pripojeni_databaze.php";   
$sql = "UPDATE uzivatel SET uzivatel_stav = 'A' WHERE uzivatel_id = '$uzivatel_id' LIMIT 1";
    if ($conn->query($sql) === TRUE) {

     echo '<br><div class="alert alert-success" role="alert">Záznam uživatele <b>' .$uzivatel_login. '</b> byl aktualizován:</div>';

    } else {

    echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }

    $conn->close();
    header('Location: https://app.relaxartecentrum.eu/admrelax/');    
?>

    </div>
        </body>
            </html>