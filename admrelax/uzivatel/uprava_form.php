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





require "sifrovani_dat.php";
$stav = htmlspecialchars(trim("$_POST[stav]"));
$uzivatel_id = htmlspecialchars(trim("$_GET[uzivatel_id]"));
$uzivatel_id = encrypt_decrypt('decrypt', $uzivatel_id);

require $_SERVER['DOCUMENT_ROOT']."/db/pripojeni_databaze.php";

$sql = "SELECT * FROM uzivatel 
INNER JOIN role ON (uzivatel.uzivatel_role = role.role_id)
INNER JOIN pojistovny ON (uzivatel.uzivatel_pojistovna = pojistovny.pojistovna_id)
INNER JOIN prefix ON (uzivatel.uzivatel_prefix = prefix.prefix_id) WHERE uzivatel_role = '3' AND uzivatel_id = '$uzivatel_id' ORDER BY uzivatel_id ASC
";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
$uzivatel_jmeno =encrypt_decrypt('decrypt', $row["uzivatel_jmeno"]);
$uzivatel_prijmeni = encrypt_decrypt('decrypt', $row["uzivatel_prijmeni"]); 
$uzivatel_narozeni = encrypt_decrypt('decrypt', $row["uzivatel_narozeni"]); 
$uzivatel_rc = encrypt_decrypt('decrypt', $row["uzivatel_rc"]);
$uzivatel_ulice = encrypt_decrypt('decrypt', $row["uzivatel_ulice"]);
$uzivatel_cp = $row["uzivatel_cp"];
$uzivatel_co = $row["uzivatel_co"];
$uzivatel_mesto = encrypt_decrypt('decrypt', $row["uzivatel_mesto"]);
$uzivatel_psc = $row["uzivatel_psc"];
$uzivatel_email = encrypt_decrypt('decrypt', $row["uzivatel_email"]);
$uzivatel_mobil = encrypt_decrypt('decrypt', $row["uzivatel_mobil"]);
$uzivatel_prefix = $row["uzivatel_prefix"]; 
$uzivatel_login = $row["uzivatel_login"];
$uzivatel_pojistovna = $row["uzivatel_pojistovna"];
$uzivatel_pohlavi = $row["uzivatel_pohlavi"];
$uzivatel_zamestnani = $row["uzivatel_zamestnani"]; 
$uzivatel_open_space = $row["uzivatel_open_space"];
$uzivatel_hodiny_pc = $row["uzivatel_hodiny_pc"];
$uzivatel_manazer = $row["uzivatel_manazer"];
$uzivatel_lekar = $row["uzivatel_lekar"];
$uzivatel_spolecnost = $row["uzivatel_spolecnost"];
    }
          $conn->close();


?>    

<? require $_SERVER['DOCUMENT_ROOT']."/db/pripojeni_databaze.php"; ?>
<? $sql = "SELECT * FROM role WHERE role_id = '3'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    $role = $row["role_nazev"];
  }
$conn->close();
?>

 <h2>Editace účtu - role: <? echo $role; ?></h2> 
 <h4>Kontaktní a osobní údaje</h4>

<?    if ($stav !== 'odeslano'){
//    echo "NEODESLANO";
  require "uprava_form_2.php"; 

        }else{
 //   echo "ODESLANO";
    
$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));
$uzivatel_id = encrypt_decrypt('decrypt', $uzivatel_id); 
$uzivatel_login = addslashes(htmlspecialchars(trim("$_POST[uzivatel_login]")));
$uzivatel_jmeno = addslashes(htmlspecialchars(trim("$_POST[jmeno]")));
$uzivatel_prijmeni = addslashes(htmlspecialchars(trim("$_POST[prijmeni]")));    
$uzivatel_narozeni = addslashes(htmlspecialchars(trim("$_POST[datum_narozeni]")));
$uzivatel_rc = addslashes(htmlspecialchars(trim("$_POST[rodne_cislo]")));
$uzivatel_ulice = addslashes(htmlspecialchars(trim("$_POST[ulice]")));
$uzivatel_cp = addslashes(htmlspecialchars(trim("$_POST[cislo_popisne]")));
$uzivatel_co = addslashes(htmlspecialchars(trim("$_POST[cislo_orientacni]")));
$uzivatel_mesto = addslashes(htmlspecialchars(trim("$_POST[mesto]")));
$uzivatel_psc = addslashes(htmlspecialchars(trim("$_POST[psc]")));
$uzivatel_email = addslashes(htmlspecialchars(trim("$_POST[email]")));
$uzivatel_prefix = addslashes(htmlspecialchars(trim("$_POST[prefix]")));
$uzivatel_mobil = addslashes(htmlspecialchars(trim("$_POST[mobil]")));
$uzivatel_pojistovna = addslashes(htmlspecialchars(trim("$_POST[pojistovna]")));
$uzivatel_pohlavi = addslashes(htmlspecialchars(trim("$_POST[pohlavi]")));
$uzivatel_role = '3';
$uzivatel_zamestnani = addslashes(htmlspecialchars(trim("$_POST[zamestnani]")));
$uzivatel_open_space = addslashes(htmlspecialchars(trim("$_POST[open_space]")));
$uzivatel_hodiny_pc = htmlspecialchars(trim("$_POST[hodiny_pc]"));
$uzivatel_manazer = htmlspecialchars(trim("$_POST[manazer]"));
$uzivatel_lekar = htmlspecialchars(trim("$_POST[lekar]"));
$uzivatel_spolecnost = htmlspecialchars(trim("$_POST[spolecnost]"));

if (!$uzivatel_jmeno) {
$chyba_vypis .= '<li>Musíte vypnit pole Jméno!</li>';
$chyba_jmeno = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_prijmeni) {
$chyba_vypis .= '<li>Musíte vypnit pole Přijmení!</li>';
$chyba_prijmeni = 'style="background-color:#fec8bd;"';
}

if (!$uzivatel_narozeni) {
$chyba_vypis .= '<li>Musíte vypnit pole Datum narození!</li>';
$chyba_narozeni = 'style="background-color:#fec8bd;"';
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
$chyba_vypis .= '<li>Musíte vypnit pole E-mail!</li>';
$chyba_email = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_mobil) {
$chyba_vypis .= '<li>Musíte vypnit pole Telefon!</li>';
$chyba_mobil = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_pohlavi) {     
$chyba_vypis .= '<li>Musíte vypnit pole Pohlaví!</li>';
$chyba_pohlavi = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_zamestnani || $uzivatel_zamestnani == '0') {
$chyba_vypis .= '<li>Musíte vybrat jednu z možností: Typ zaměstnání!</li>';
$chyba_zamestnani = 'style="background-color:#fec8bd;"'; 
}
if (!$uzivatel_open_space || $uzivatel_open_space == '0') {
$chyba_vypis .= '<li>Musíte vybrat jednu z možností: Práce v Open space!</li>';
$chyba_open_space = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_hodiny_pc || $uzivatel_hodiny_pc =='0') {   
$chyba_vypis .= '<li>Musíte vybrat jednu z možností: Kolik hodin denně trávíte u počítače!</li>';
$chyba_hodiny_pc = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_manazer || $uzivatel_manazer == '0') {
$chyba_vypis .= '<li>Musíte vybrat jednu z možností: Manažerská pozice!</li>';
$chyba_manazer = 'style="background-color:#fec8bd;"';
}

if (!$uzivatel_rc || $uzivatel_rc == '0') {
$chyba_vypis .= '<li>Musíte vyplnit položku rodné číslo!</li>';
$chyba_rc = 'style="background-color:#fec8bd;"';
}

if (!$uzivatel_lekar || $uzivatel_lekar == '0') {
$chyba_vypis .= '<li>Musíte vybrat jednu z možností: Jste regisrtován/a u některého našeho lékeře!</li>';
$chyba_lekar = 'style="background-color:#fec8bd;"';
}
if (!$uzivatel_pojistovna) {
$chyba_vypis .= '<li>Musíte vypnit pole Zdravotní pojišťovna!</li>';
$chyba_pojistovna = 'style="background-color:#fec8bd;"';
}



if (strlen($chyba_vypis) > 0){

require "uprava_form_2.php";
echo '<br>';
echo '<div class="alert alert-danger"><h4>Došlo k následujícím chybám:</h4><hr><ul>'. $chyba_vypis .'</ul></div>';

    } else {
$uzivatel_jmeno = encrypt_decrypt('encrypt', $uzivatel_jmeno);
$uzivatel_prijmeni = encrypt_decrypt('encrypt', $uzivatel_prijmeni);
$uzivatel_rc = encrypt_decrypt('encrypt', $uzivatel_rc); 
$uzivatel_narozeni = encrypt_decrypt('encrypt', $uzivatel_narozeni);
$uzivatel_mobil = encrypt_decrypt('encrypt', $uzivatel_mobil);
$uzivatel_email = encrypt_decrypt('encrypt', $uzivatel_email);
$uzivatel_ulice = encrypt_decrypt('encrypt', $uzivatel_ulice);
$uzivatel_mesto = encrypt_decrypt('encrypt', $uzivatel_mesto);

require "pripojeni_databaze.php";
$sql = "UPDATE uzivatel SET 
uzivatel_jmeno = '$uzivatel_jmeno',
uzivatel_prijmeni = '$uzivatel_prijmeni',
uzivatel_narozeni ='$uzivatel_narozeni',
uzivatel_rc = '$uzivatel_rc',
uzivatel_mobil = '$uzivatel_mobil',
uzivatel_email = '$uzivatel_email',
uzivatel_ulice = '$uzivatel_ulice',
uzivatel_cp ='$uzivatel_cp',
uzivatel_co = '$uzivatel_co',
uzivatel_mesto = '$uzivatel_mesto',
uzivatel_psc = '$uzivatel_psc',
uzivatel_email = '$uzivatel_email',
uzivatel_prefix = '$uzivatel_prefix',
uzivatel_mobil = '$uzivatel_mobil',
uzivatel_pojistovna = '$uzivatel_pojistovna',
uzivatel_pohlavi = '$uzivatel_pohlavi',
uzivatel_zamestnani = '$uzivatel_zamestnani',
uzivatel_open_space ='$uzivatel_open_space',
uzivatel_hodiny_pc = '$uzivatel_hodiny_pc',
uzivatel_manazer = '$uzivatel_manazer',
uzivatel_lekar = '$uzivatel_lekar',
uzivatel_spolecnost = '$uzivatel_spolecnost'
WHERE uzivatel_id = '$uzivatel_id' 
LIMIT 1";
    
    if ($conn->query($sql) === TRUE) {

    echo '<br><div class="alert alert-success" role="alert">Záznam klienta <b>' .$uzivatel_login. '</b> byl aktualizován, automaticky budete za <b>5 vteřin přesměrování</b> zpět na stránku uživatele, případně klikněte na tlačítko níže.</div>';


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
    }

}

?>


    </div>
        </body>
            </html>