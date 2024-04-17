<html>
<head>

<meta charset="UTF-8"> 
<title>Výpis</title>

</head>
<body>

<?
require_once "sifrovani_dat.php";
require_once "pripojeni_databaze.php";

//$sql = "SELECT * FROM uzivatel INNER JOIN role ON uzivatel.uzivatel_role = role.role_id";
//$sql = "SELECT * FROM (uzivatel, seznam, spolecnost, role, pojistovny, prefix)
//INNER JOIN seznam ON (uzivatel.uzivatel_zamestnani = seznam.seznam_id AND uzivatel.uzivatel_hodiny_pc = seznam.seznam_id)
//INNER JOIN seznam ON (uzivatel.uzivatel_zamestnani = seznam.seznam_id)
//INNER JOIN seznam ON (uzivatel.uzivatel_hodiny_pc = seznam.seznam_id)
//INNER JOIN seznam ON (usr.uzivatel_hodiny_pc = seznam.seznam_id)


$sql = "SELECT * FROM uzivatel AS usr
INNER JOIN lekar AS lk ON (usr.uzivatel_lekar = lk.lekar_id)
INNER JOIN seznam AS sb ON (usr.uzivatel_hodiny_pc = sb.seznam_id)
INNER JOIN seznam_zamestnani AS sa ON (usr.uzivatel_zamestnani = sa.seznam_zamestnani_id) 
INNER JOIN spolecnost AS spol ON (usr.uzivatel_spolecnost = spol.spolecnost_id)  
INNER JOIN role ON (usr.uzivatel_role = role.role_id)
INNER JOIN pojistovny AS poj ON (usr.uzivatel_pojistovna = poj.pojistovna_id)
INNER JOIN prefix ON (usr.uzivatel_prefix = prefix.prefix_id) ORDER BY uzivatel_id ASC
";

    $result = $conn->query($sql);
    echo "<b>Celkový počet záznamů: </b>" . mysqli_num_rows($result) . "<br><br>";
    while($row = $result->fetch_assoc()) {
    
   
    echo "<b>id:</b> " . $row["uzivatel_id"]. 
    "<br> <b>Login: </b>" . $row["uzivatel_login"]. 
    "&nbsp;&nbsp;<b>KOD: </b>".$row["uzivatel_kod"].
    "&nbsp;&nbsp;<b>Heslo:</b> " . $row["uzivatel_heslo"]. 
    "<br><b>Jméno: </b>".encrypt_decrypt('decrypt', $row["uzivatel_jmeno"]).
    "&nbsp;&nbsp;<b>Přijmeni: </b>".encrypt_decrypt('decrypt', $row["uzivatel_prijmeni"]).
    "&nbsp;&nbsp;<b>Pohlaví: </b>".$row["uzivatel_pohlavi"].   
    "<br><b>RČ:</b> ".encrypt_decrypt('decrypt', $row["uzivatel_rc"]).
    "&nbsp;&nbsp;<b>Datum narození:</b> ".encrypt_decrypt('decrypt', $row["uzivatel_narozeni"]).     

    "<br><b>Prefix:</b> +".$row["prefix_predvolba"]. 
    "&nbsp;&nbsp;<b>Telefon:</b> ".encrypt_decrypt('decrypt', $row["uzivatel_mobil"])."&nbsp;&nbsp;<b>E-mail:</b> ".encrypt_decrypt('decrypt', $row["uzivatel_email"]).
    "<br><b>Název role:</b> ".$row["role_nazev"].
    "<br><b>Ulice: </b>".encrypt_decrypt('decrypt', $row["uzivatel_ulice"]).
    "&nbsp;&nbsp;<b>Číslo popisné:</b> ".$row["uzivatel_cp"]. 
    "&nbsp;&nbsp;<b>Číslo orientační:</b> ".$row["uzivatel_co"]. 
    "<br><b>Město:</b> ".encrypt_decrypt('decrypt', $row["uzivatel_mesto"]).
    "&nbsp;&nbsp;<b>PSČ:</b> ".$row["uzivatel_psc"].  

    "<br><b>Společnost: </b>".$row["spolecnost_nazev"].
  
    
    "<br><b>Zdravotní pojišťovna:</b> ".$row["pojistovna_zkratka"].
    "&nbsp;&nbsp;<b>Zdravotní pojišťovna číslo:</b> ".$row["pojistovna_cislo"].    
    "&nbsp;&nbsp;<b>Zdravotní pojišťovna název: </b>".$row["pojistovna_nazev"];
    echo "<br><b>Práce v Open space:</b> ".$row["uzivatel_open_space"];    
 
 
   echo "<br><b>Kolik hodin denně trávíte u počítače:</b> ".$row['seznam_hodnota'];
   echo "<br><b>Typ zaměstnání:</b> ".$row['seznam_zamestnani_hodnota']; 
   echo "<br><b>Manažerská pozice:</b> ".$row["uzivatel_manazer"];   
   
   echo "<br><b>Lékař:</b> ". $row['lekar_titul_1']." ".$row['lekar_jmeno']. " " .$row['lekar_prijmeni']." "; 

    echo "<br>"; 
    echo '<img src="./barcode/barcode.php?text='.$row["uzivatel_login"].'">';

?>
  <img src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row['uzivatel_qrcode']); ?>" /> 
<?      
    echo '<br>------------------------------------------------------------------ KONEC PRVNÍHO KROKU ------------------------------------------------------------------';


    
    echo"<br>IČO: ".encrypt_decrypt('decrypt', $row["uzivatel_ico"])."<br>DIČ: ".encrypt_decrypt('decrypt', $row["uzivatel_dic"]);    
    echo "<br>Lektor: ".encrypt_decrypt('decrypt', $row["uzivatel_lektor"]);
  
 //   echo '<img src="./qrcode/index.php?qr_data='.$row["uzivatel_login"].'">';     
    echo "<br><br>***********************************************************************************************************************************************************"; 
    echo "<br><br>";
      }
$conn->close();





?>

</body>
</html>