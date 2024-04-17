<html>
<head>

<meta charset="UTF-8"> 
<title>Výpis</title>

</head>
<body>

<?
echo '<h3>HOMEOPATIKA</h3>';
require $_SERVER['DOCUMENT_ROOT']."/db/pripojeni_databaze.php";
require $_SERVER['DOCUMENT_ROOT']."/db/cz_en_name_epam.php";
$sql = "SELECT homeopatika_id, homeopatika_nazev_pripravku FROM homeopatika ORDER BY homeopatika_id ASC";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
//    $homeo_nazev = trim($row["homeopatika_nazev_pripravku"]); 


    $homeo_nazev = trim($row["homeopatika_nazev_pripravku"]);
    $malaPismena = $row["homeopatika_nazev_pripravku"];
    $malaPismena = trim($malaPismena);
    $malaPismena = strtr($malaPismena, $prevodni_tabulka);
    $malaPismena = strtolower($malaPismena);
    $homeo_name = trim($homeo_name);
    $homeo_name =(str_replace(" ","_",$malaPismena));
    $homeo_name =(str_replace("-","_",$homeo_name));
//    $homeo_name = $row["homeopatika_id"].'_'.$homeo_name;
    $homeo_name = $homeo_name.'_'.$row["homeopatika_id"];
    //echo 'HOMEO název: '.$homeo_nazev.'<br>';
    //echo 'homeo_name: '.$homeo_name.'<br>'; 
    echo '$'.$homeo_name.' = addslashes(htmlspecialchars(trim("$_POST['.$homeo_name.']")));';
    echo '<br>';
           }
$conn->close();


echo '<br>-----------------------------------------------------------------------------------------------------------------------------<br>';
echo '<h3>Homeopatika - ADD COLUMN</h3>';
echo '<h3>HOMEOPATIKA</h3>';
require $_SERVER['DOCUMENT_ROOT']."/db/pripojeni_databaze.php";
require $_SERVER['DOCUMENT_ROOT']."/db/cz_en_name_epam.php";
$sql = "SELECT homeopatika_id, homeopatika_nazev_pripravku FROM homeopatika ORDER BY homeopatika_id ASC";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
//    $homeo_nazev = trim($row["homeopatika_nazev_pripravku"]); 


    $homeo_nazev = trim($row["homeopatika_nazev_pripravku"]);
    $malaPismena = $row["homeopatika_nazev_pripravku"];
    $malaPismena = trim($malaPismena);
    $malaPismena = strtr($malaPismena, $prevodni_tabulka);
    $malaPismena = strtolower($malaPismena);
    $homeo_name = trim($homeo_name);
    $homeo_name =(str_replace(" ","_",$malaPismena));
    $homeo_name =(str_replace("-","_",$homeo_name));
//    $homeo_name = $row["homeopatika_id"].'_'.$homeo_name;
    $homeo_name = $homeo_name.'_'.$row["homeopatika_id"];
    //echo 'HOMEO název: '.$homeo_nazev.'<br>';
    //echo 'homeo_name: '.$homeo_name.'<br>'; 
//    echo "ADD COLUMN ".$homeo_name." INT(1) NOT NULL DEFAULT '0',";
    echo "'$".$homeo_name."',";
    echo '<br>';
           }
$conn->close();






echo '<br>-----------------------------------------------------------------------------------------------------------------------------<br>';
echo '<h3>TČM</h3>';
require $_SERVER['DOCUMENT_ROOT']."/db/cz_en_name_epam.php";
require $_SERVER['DOCUMENT_ROOT']."/db/pripojeni_databaze.php";
$sql = "SELECT * FROM tcm ORDER BY tcm_id ASC";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    $tcm_nazev = trim($row["tcm_nazev"]);
    $malaPismena = $row["tcm_nazev"];
    $malaPismena = trim($malaPismena);
    $malaPismena = strtr($malaPismena, $prevodni_tabulka);
    $malaPismena = strtolower($malaPismena);
    $tcm_name = trim($tcm_name);
    $tcm_name =(str_replace(" ","_",$malaPismena));
    $tcm_name =(str_replace("-","#",$tcm_name));
    $tcm_name =(str_replace("_#_","_",$tcm_name));
 //   $tcm_name = $tcm_name.'_'.$row["tcm_id"];
//    $tcm_name = $row["tcm_id"].'_'.$tcm_name;
   // echo 'TCM název: '.$tcm_nazev.'<br>';
   // echo 'tcm_name: '.$tcm_name.'<br>'; 
   // echo '<b>Název: </b>'.$row["tcm_nazev"].'&nbsp;-- <b>Malá písmena: </b>'.$malaPismena.'<br>';
    $tcm_name = 'tcm_id_'.$row["tcm_id"];    
    echo '$'.$tcm_name.' = addslashes(htmlspecialchars(trim("$_POST['.$tcm_name.']")));';
    echo '<br>';
           }
$conn->close();







echo '<br>-----------------------------------------------------------------------------------------------------------------------------<br>';
echo '<h3>EPAMY</h3>';

require $_SERVER['DOCUMENT_ROOT']."/db/cz_en_name_epam.php";
require $_SERVER['DOCUMENT_ROOT']."/db/pripojeni_databaze.php";


$sql = "SELECT * FROM epam ORDER BY epam_id ASC";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    $epam_nazev = $row["epam_nazev"]; 
    $malaPismena = $row["epam_nazev"];    
    $malaPismena = strtr($malaPismena, $prevodni_tabulka);
    $malaPismena = strtolower($malaPismena);
    $epam_name =(str_replace(" ","_",$malaPismena));
//    $epam_name = $row["epam_id"].'_'.$epam_name;
    $epam_name = $epam_name.'_'.$row["epam_id"];
    //echo 'EPAM název: '.$epam_nazev.'<br>';
    //echo 'epam_name: '.$epam_name.'<br>'; 
   // echo '<b>Název: </b>'.$row["epam_nazev"].'&nbsp;-- <b>Malá písmena: </b>'.$malaPismena.'<br>';
    
    echo '$'.$epam_name.' = addslashes(htmlspecialchars(trim("$_POST['.$epam_name.']")));';
    echo '<br>';
           }
$conn->close();    

echo '<br>-----------------------------------------------------------------------------------------------------------------------------<br>';






echo '<br>-----------------------------------------------------------------------------------------------------------------------------<br>';
echo '<h3>Houby</h3>';

require $_SERVER['DOCUMENT_ROOT']."/db/cz_en_name_epam.php";
require $_SERVER['DOCUMENT_ROOT']."/db/pripojeni_databaze.php";


$sql = "SELECT * FROM houby ORDER BY houby_nazev ASC";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    $houby_nazev = $row["houby_nazev"]; 
    $malaPismena = $row["houby_nazev"];    
    $malaPismena = strtr($malaPismena, $prevodni_tabulka);
    $malaPismena = strtolower($malaPismena);
    $houby_name =(str_replace(" ","_",$malaPismena));
    $houby_name = $row["houby_id"].'_'.$houby_name;
    //echo 'houby název: '.$houby_nazev.'<br>';
    //echo 'houby_name: '.$houby_name.'<br>'; 
   // echo '<b>Název: </b>'.$row["houby_nazev"].'&nbsp;-- <b>Malá písmena: </b>'.$malaPismena.'<br>';
    
    echo '$'.$houby_name.' = htmlspecialchars(trim("$_POST['.$houby_name.']"));';
    echo '<br>';
           }
$conn->close();    





echo '<br>-----------------------------------------------------------------------------------------------------------------------------<br>';
echo '<h3>inPHARM</h3>';

require $_SERVER['DOCUMENT_ROOT']."/db/cz_en_name_epam.php";
require $_SERVER['DOCUMENT_ROOT']."/db/pripojeni_databaze.php";


$sql = "SELECT * FROM inpharm ORDER BY inpharm_nazev ASC";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    $inpharm_nazev = $row["inpharm_nazev"]; 
    $malaPismena = $row["inpharm_nazev"];    
    $malaPismena = strtr($malaPismena, $prevodni_tabulka);
    $malaPismena = strtolower($malaPismena);
    $inpharm_name =(str_replace(" ","_",$malaPismena));
    $inpharm_name = $row["inpharm_id"].'_'.$inpharm_name;
    //echo 'inpharm název: '.$inpharm_nazev.'<br>';
    //echo 'inpharm_name: '.$inpharm_name.'<br>'; 
   // echo '<b>Název: </b>'.$row["houby_nazev"].'&nbsp;-- <b>Malá písmena: </b>'.$malaPismena.'<br>';
    
    echo '$'.$inpharm_name.' = htmlspecialchars(trim("$_POST['.$inpharm_name.']"));';
    echo '<br>';
           }
$conn->close();    








echo '<br>-----------------------------------------------------------------------------------------------------------------------------<br>';

require "sifrovani_dat.php";
require $_SERVER['DOCUMENT_ROOT']."/db/pripojeni_databaze.php";

echo '<h3>Uživatelé a role</h3>';
$sql = "
SELECT uzivatel_id, uzivatel_login, uzivatel_role,
CASE
WHEN uzivatel_role = 1
THEN 'SuperAdmin'
WHEN uzivatel_role = 2
THEN 'Administrátor'
ELSE 'Uživatel'
END AS role
FROM uzivatel  ORDER BY uzivatel_id ASC
";

    $result = $conn->query($sql);
    echo "<b>Celkový počet záznamů: </b>" . mysqli_num_rows($result) . "<br><br>";
    while($row = $result->fetch_assoc()) {
    
    echo 'Login: '.$row["uzivatel_login"].'&nbsp;&nbsp;&nbsp;';
    echo 'Role: '.$row["role"].'&nbsp;&nbsp;&nbspID: '.$row["uzivatel_id"].'<br>';    
    
    
          }
$conn->close();

?>

</body>
</html>