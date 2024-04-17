<?
session_start();
ob_start(); 
//header("Location: https://www.seznam.cz/");
//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
//header("Cache-Control: post-check=0, pre-check=0", false);
//header("Pragma: no-cache");
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
<style type="text/css">
* {
margin: 0px;
padding: 0px;
}
.login {
background: linear-gradient(to bottom, #423d3d 0%, #fff 90%);
height: 100vh;
width: 100%;
justify-content: center;
align-items: center;
display: flex;
}
.account-login {
width: 500px;
}
.form-control:focus {
box-shadow: none;
}
p a {
padding-left: 2px;
}
.account-login h1 {
font-size: 25px;
text-align: left;
color: #fff;
text-transform: uppercase;
font-weight: bold;
border-radius: 5px;
}
.login-form input {
width: 100%;
position: relative;
border-bottom: 2px solid #a39e9e;
padding: 0;
border-top: 0px;
border-left: 0px;
border-right: 0px;
box-shadow: none;
height: 53px;
border-radius: 0px;
}
.login-form {
background: #fff;
float: left;
width: 100%;
padding: 40px;
border-radius: 10px;
}
button.btn {
width: 100%;
background: #009cff;
font-size: 20px;
padding: 11px;
color: #fff;
border: 0px;
margin: 10px 0px 20px;
}
.btn:hover{
    color: #fff;
    opacity: 0.8;
}
p {
float: left;
width: 100%;
text-align: center;
font-size: 14px;
}
.remember {
float: left;
width: 100%;
margin: 10px 0 0;
}
/* Customize the label (the container) */
.custom-checkbox {
display: block;
position: relative;
padding-left: 27px;
margin-bottom: 12px;
cursor: pointer;
font-size: 13px;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
font-weight: normal;
padding-top: 2px;
float: left;
}
/* Hide the browser's default checkbox */
.custom-checkbox input {
position: absolute;
opacity: 0;
cursor: pointer;
height: 0;
width: 0;
}
/* Create a custom checkbox */
.custom-checkbox .checkmark {
position: absolute;
top: 0;
left: 0;
height: 20px;
width: 20px;
background-color: #bfbcbc;
}
/* On mouse-over, add a grey background color */
.custom-checkbox:hover input ~ .checkmark {
background-color: #eaecc4;
}
/* When the checkbox is checked, add a blue background */
.custom-checkbox input:checked ~ .checkmark {
background-color: #59e942;
}
/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
content: "";
position: absolute;
display: none;
}
/* Show the checkmark when checked */
.custom-checkbox input:checked ~ .checkmark:after {
display: block;
}
/* Style the checkmark/indicator */
.custom-checkbox .checkmark:after {
left: 9px;
top: 5px;
width: 5px;
height: 10px;
border: solid white;
border-width: 0 3px 3px 0;
-webkit-transform: rotate(45deg);
-ms-transform: rotate(45deg);
transform: rotate(45deg);
}
@media (max-width: 767px){
.account-login {
    width: 90%;
  }
}
</style>



<?
$uzivatel_login = htmlspecialchars(trim("$_POST[uzivatel_login]"));
$uzivatel_heslo = htmlspecialchars(trim("$_POST[uzivatel_heslo]"));
$uzivatel_heslo = md5($uzivatel_heslo);
?>

<body>


<div class="login">
    <div class="account-login">
    <h1>Přihlášení</h1>
        <form action="index.php" method="post" class="login-form">
        <div class="form-group">
        <input type="text" placeholder="Uživatelské jméno" name="uzivatel_login" class="form-control"  value ="<? echo $uzivatel_login; ?>">
        </div>
        <div class="form-group">
        <input type="password" placeholder="Heslo" name="uzivatel_heslo" class="form-control">
        </div>
        <div class="remember">

        </div>
        <button class="btn" name ="prihlasit" value = "odeslano" >Přihlásit</button>
                 
 
 
                  <? 

                  
 if (isset($_POST['prihlasit'])) { 
                
    if (strlen($uzivatel_login)<=5) {
    $chyba_login = '<b><font color ="red">Musíte zadat správné přihlašovací jméno!</font></b><br>';
    }

    if (strlen($uzivatel_heslo)<=6) {
    $chyba_heslo = '<b><font color ="red">Musíte zadat správné přihlašovací heslo!</font></b><br>';
    }

//----------------- blok pro overeni pristupu


    echo $chyba_login;
    echo $chyba_heslo;

    require $_SERVER['DOCUMENT_ROOT']."/db/pripojeni_databaze.php";
    require $_SERVER['DOCUMENT_ROOT']."/db/sifrovani_dat.php";        
    $sql = "SELECT uzivatel_login, uzivatel_heslo, uzivatel_role, uzivatel_id, uzivatel_jmeno, uzivatel_prijmeni, role_nazev FROM uzivatel AS usr
    INNER JOIN role AS rol ON (usr.uzivatel_role = rol.role_id)
    WHERE uzivatel_login = '$uzivatel_login'  AND uzivatel_heslo = '$uzivatel_heslo' LIMIT 1";
    
    $result = $conn->query($sql);
    while($radek = $result->fetch_assoc()) {
    $uzivatel_id = $radek["uzivatel_id"];
    $uzivatel_login = $radek["uzivatel_login"];
    $uzivatel_role = $radek["role_nazev"];        
    $uzivatel_jmeno = encrypt_decrypt('decrypt', $radek["uzivatel_jmeno"]); 
    $uzivatel_prijmeni = encrypt_decrypt('decrypt', $radek["uzivatel_prijmeni"]);     

      }


    $conn->close();    
//    echo "<b>Celkový počet záznamů: </b>" . mysqli_num_rows($result) . "<br><br>";

    
if (mysqli_num_rows($result) == 0){
echo '<b><font color ="red">Musíte zadat správné přihlašovací údaje!</font></b><br>';

    }else{
    session_start();
    session_regenerate_id();
    header("Cache-control: private");
    header("Location: ./admrelax/index.php"); 
    
//    header("Location: https://app.relaxartecentrum.eu/admrelax/index.php");    
    
     

    $_SESSION['uzivatel_id_session'] = $uzivatel_id;
    $_SESSION['uzivatel_role_session'] = $uzivatel_role;
    $_SESSION['uzivatel_login_session'] = $uzivatel_login;
    $_SESSION['uzivatel_jmeno_session'] = $uzivatel_jmeno;
    $_SESSION['uzivatel_prijmeni_session'] = $uzivatel_prijmeni;    
    $_SESSION['uzivatel_session'] = session_id();
    
   
// Pokud je uzivatel naleze a ověrěn pokračuje do adminwebu


     }


        } 
                  

?>                  
               
               
               
             </form> 
    </div>
</div>







   </body>
</html>