<html>

<head>

    <meta charset="UTF-8">
    <title>Výpis</title>

</head>

<body>

    <?


echo '<br>------------------------------------------------Homeopatika začátek -----------------------------------------------------------------<br>';
require $_SERVER['DOCUMENT_ROOT']."/db/pripojeni_databaze.php";
require $_SERVER['DOCUMENT_ROOT']."/db/cz_en_name_epam.php";
$sql = "SELECT homeopatika_id, homeopatika_nazev_pripravku FROM homeopatika ORDER BY homeopatika_id ASC";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
$malaPismena = $row["homeopatika_nazev_pripravku"];
$malaPismena = strtolower($malaPismena);
$homeopatika_name = (str_replace(" ", "_", $malaPismena));
$homeopatika_name = (str_replace(" ", "_", $malaPismena));


$homeo_nazev = trim($row["homeopatika_nazev_pripravku"]);
$malaPismena = $row["homeopatika_nazev_pripravku"];
$malaPismena = trim($malaPismena);
$malaPismena = strtr($malaPismena, $prevodni_tabulka);
$malaPismena = strtolower($malaPismena);
$homeo_name = trim($homeo_name);
$homeo_name =(str_replace(" ","_",$malaPismena));

//$homeo_name = $row["homeopatika_id"].'_'.$homeo_name;
//echo 'HOMEO název: '.$homeo_nazev.'<br>';
//echo '$'.$homeo_name.' = htmlspecialchars(trim("$_POST['.$homeo_name.']"));';

$homeo_name = $homeo_name.'_'.$row["homeopatika_id"]; 
//echo 'homeo_name: '.$homeo_name;
//echo 'CASE <br>';
//echo $homeo_name;
//echo 'WHEN '.$homeo_name." = 0 THEN 'Ne' <br>";
//echo 'WHEN '.$homeo_name." = 1 THEN '".$row["homeopatika_nazev_pripravku"]."'";
//echo '<br>';
//echo 'END AS '.$homeo_name.',';
//echo '<br>';

// echo "&& &".$homeo_name." == 'Ne'";
// echo "<br>";
  //&& $homeo_name == 'Ne'


  echo 'if($row["'.$homeo_name."&#34;] == 'Ne'){<br>";
    echo 'echo $row["'.$homeo_name."&#34;]=&#39;&#39;;<br>";
    echo " }else{<br>";
    echo 'echo $row["'.$homeo_name."&#34;].&#39;,&#60;br&#62; &#39;;";
    echo "<br>";
    echo " }";
    echo"<br>";



}
$conn->close();







echo '<br>------------------------------------------------Homeopatika konec -----------------------------------------------------------------<br>';


echo '<br>------------------------------------------------TCM SELECT konec -----------------------------------------------------------------<br>';
echo "---------- začátek podmíny--------------<br>";
require $_SERVER['DOCUMENT_ROOT'] . "/db/cz_en_name_epam.php";
require $_SERVER['DOCUMENT_ROOT'] . "/db/pripojeni_databaze.php";
$sql = "SELECT * FROM tcm ORDER BY tcm_id ASC";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    $tcm = 'tcm_id_'.$row["tcm_id"];
  //  echo '<br>';
  //  echo 'CASE <br>';
    //echo $tcm.'<br>';
   // echo 'WHEN '.$tcm." = 0 THEN 'Ne' <br>";
   // echo 'WHEN '.$tcm." = 1 THEN '".$row["tcm_nazev"]." - ".$row["tcm_kod"]."'";
   // echo '<br>';
   // echo 'END AS '.$tcm.',';

  //  echo "&& &".$tcm." == 'Ne'";
   // echo "<br>";
  //  && $row["mumiovy_3"] == 'Ne'

echo 'if($row["'.$tcm."&#34;] == 'Ne'){<br>";
echo 'echo $row["'.$tcm."&#34;]=&#39;&#39;;<br>";
echo " }else{<br>";
echo 'echo $row["'.$tcm."&#34;].&#39;,&#60;br&#62; &#39;;";
echo "<br>";
echo " }";
echo"<br>";

    }


    $conn->close();
    echo "---------- konec podmíny--------------<br>";








    echo '<br>------------------------------------------------EPAM SELECT zacatek -----------------------------------------------------------------<br>';
    require $_SERVER['DOCUMENT_ROOT'] . "/db/cz_en_name_epam.php";
    require $_SERVER['DOCUMENT_ROOT'] . "/db/pripojeni_databaze.php";
   
    $sql = "SELECT * FROM epam ORDER BY epam_id ASC";
    

    //SELECT * FROM zdravi_epam WHERE uzivatel_id=10
    //SELECT * FROM epam 
    //INNER JOIN zdravi_epam ON (epam.epam_klic=zdravi_epam.univerzalni_bez_propolisu_2)
    //WHERE uzivatel_id='10'
   
    $result = $conn->query($sql);
 

    while ($row = $result->fetch_assoc()) {
        $epam_nazev = $row["epam_nazev"];
        $epam_typ = $row["epam_typ"];
        $epam_podtyp = $row["epam_podtyp"];
        $epam_klic = $row["epam_klic"];
        //$malaPismena = $row["epam_nazev"];
        //$malaPismena = strtr($malaPismena, $prevodni_tabulka);
        //$malaPismena = strtolower($malaPismena);
        //$epam_name = (str_replace(" ", "_", $malaPismena));
        //$epam_name = $epam_name. '_' .$row["epam_id"]  ;


        // echo "ADD COLUMN " . $epam_name . " INT(1) NOT NULL DEFAULT '0',";
        //echo '<br>';
        //echo "UPDATE epam  SET epam_klic='". $epam_name ."' WHERE epam_id='".$row["epam_id"]."';<br>";


////echo $epam_nazev.' - '.$epam_typ.' - '.$epam_podtyp.'<br>';
$epam_tmp = $epam_nazev.' - '.$epam_typ.' - '.$epam_podtyp;
//echo"CASE<br>";
//echo "WHEN ".$epam_klic." = 0 THEN 'Ne'<br>";
//echo "WHEN ".$epam_klic." = 1 THEN '$epam_tmp'<br>";
//echo "END AS ".$epam_klic.",<br>";
//echo "if (".$row["urologie_infekce_mocovych_cest"]." == 'Ne'"; 
//echo '&& $row["'.$epam_klic.'"] == \'Ne\'<br>'; 



    //echo 'if($row["'.$epam_klic.'"] == \'Ne\'){<br>'; 
    //echo 'echo $row["'.$epam_klic.'"]=\'\';<br>'; 
    //echo '}else{ <br>';
    //echo 'echo $row["'.$epam_klic.'"];';
    //echo 'echo $row["'.$epam_klic.'"] .\', \' ;';

    //echo 'echo $row["'.$epam_klic.'"] .\', \' ;';
    //echo '<br> }';
    //echo "<br><br>";
          
   }
    $conn->close();
// echo "){";


    echo '<br>------------------------------------------------EPAM SELECT konec -----------------------------------------------------------------<br>';




    echo '<br>-----------------------------------------------------------------------------------------------------------------------------<br>';
    echo '<h3>Houby</h3>';

    require $_SERVER['DOCUMENT_ROOT'] . "/db/cz_en_name_epam.php";
    require $_SERVER['DOCUMENT_ROOT'] . "/db/pripojeni_databaze.php";


    $sql = "SELECT * FROM houby ORDER BY houby_nazev ASC";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $houby_nazev = $row["houby_nazev"];
        $malaPismena = $row["houby_nazev"];
        $malaPismena = strtr($malaPismena, $prevodni_tabulka);
        $malaPismena = strtolower($malaPismena);
        $houby_name = (str_replace(" ", "_", $malaPismena));
        $houby_name = $row["houby_id"] . '_' . $houby_name;
        //echo 'houby název: '.$houby_nazev.'<br>';
        //echo 'houby_name: '.$houby_name.'<br>'; 
        // echo '<b>Název: </b>'.$row["houby_nazev"].'&nbsp;-- <b>Malá písmena: </b>'.$malaPismena.'<br>';

        echo '$' . $houby_name . ' = htmlspecialchars(trim("$_POST[' . $houby_name . ']"));';
        echo '<br>';
    }
    $conn->close();





    echo '<br>-----------------------------------------------------------------------------------------------------------------------------<br>';
    echo '<h3>inPHARM</h3>';

    require $_SERVER['DOCUMENT_ROOT'] . "/db/cz_en_name_epam.php";
    require $_SERVER['DOCUMENT_ROOT'] . "/db/pripojeni_databaze.php";


    $sql = "SELECT * FROM inpharm ORDER BY inpharm_nazev ASC";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $inpharm_nazev = $row["inpharm_nazev"];
        $malaPismena = $row["inpharm_nazev"];
        $malaPismena = strtr($malaPismena, $prevodni_tabulka);
        $malaPismena = strtolower($malaPismena);
        $inpharm_name = (str_replace(" ", "_", $malaPismena));
        $inpharm_name = $row["inpharm_id"] . '_' . $inpharm_name;
        //echo 'inpharm název: '.$inpharm_nazev.'<br>';
        //echo 'inpharm_name: '.$inpharm_name.'<br>'; 
        // echo '<b>Název: </b>'.$row["houby_nazev"].'&nbsp;-- <b>Malá písmena: </b>'.$malaPismena.'<br>';

        echo '$' . $inpharm_name . ' = htmlspecialchars(trim("$_POST[' . $inpharm_name . ']"));';
        echo '<br>';
    }
    $conn->close();








    echo '<br>-----------------------------------------------------------------------------------------------------------------------------<br>';

    require "sifrovani_dat.php";
    require $_SERVER['DOCUMENT_ROOT'] . "/db/pripojeni_databaze.php";

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
    while ($row = $result->fetch_assoc()) {

        echo 'Login: ' . $row["uzivatel_login"] . '&nbsp;&nbsp;&nbsp;';
        echo 'Role: ' . $row["role"] . '&nbsp;&nbsp;&nbspID: ' . $row["uzivatel_id"] . '<br>';
    }
    $conn->close();

    ?>

</body>

</html>