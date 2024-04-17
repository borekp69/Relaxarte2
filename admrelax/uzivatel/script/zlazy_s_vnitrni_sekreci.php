<?
//require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT *,
CASE
WHEN zlazy_s_vnitrni_sekreci_hypertyreoza = 0 THEN 'Ne'
WHEN zlazy_s_vnitrni_sekreci_hypertyreoza = 1 THEN 'Hypertyreoza'
END AS zlazy_s_vnitrni_sekreci_hypertyreoza,
CASE
WHEN zlazy_s_vnitrni_sekreci_cukrovka_1_stupen = 0 THEN 'Ne'
WHEN zlazy_s_vnitrni_sekreci_cukrovka_1_stupen = 1 THEN 'Cukrovka 1. stupeň'
END AS zlazy_s_vnitrni_sekreci_cukrovka_1_stupen,
CASE
WHEN zlazy_s_vnitrni_sekreci_cukrovka_2_stupen = 0 THEN 'Ne'
WHEN zlazy_s_vnitrni_sekreci_cukrovka_2_stupen = 1 THEN 'Cukrovka 2. stupeň'
END AS zlazy_s_vnitrni_sekreci_cukrovka_2_stupen,
CASE
WHEN zlazy_s_vnitrni_sekreci_neuropatie = 0 THEN 'Ne'
WHEN zlazy_s_vnitrni_sekreci_neuropatie = 1 THEN 'Neuropatie'
END AS zlazy_s_vnitrni_sekreci_neuropatie,
CASE
WHEN zlazy_s_vnitrni_sekreci_dna = 0 THEN 'Ne'
WHEN zlazy_s_vnitrni_sekreci_dna = 1 THEN 'Dna'
END AS zlazy_s_vnitrni_sekreci_dna

FROM zdravi_zlazy_s_vnitrni_sekreci
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>

      <label for="uzivatel">Problémy:</label>
<?       
     if ($row["zlazy_s_vnitrni_sekreci_hypertyreoza"] == 'Ne' 
     && $row["zlazy_s_vnitrni_sekreci_cukrovka_1_stupen"] == 'Ne' 
     && $row["zlazy_s_vnitrni_sekreci_cukrovka_2_stupen"] == 'Ne'
     && $row["zlazy_s_vnitrni_sekreci_neuropatie"] == 'Ne' 
     && $row["zlazy_s_vnitrni_sekreci_dna"] == 'Ne'           
     ){
     echo 'Žádný záznam o výskytu onemocnění';

      }else{

            if($row["zlazy_s_vnitrni_sekreci_hypertyreoza"]=='Ne'){
          echo $row["zlazy_s_vnitrni_sekreci_hypertyreoza"] = '';
            }else{
          echo $row["zlazy_s_vnitrni_sekreci_hypertyreoza"].', ';
            }
            
            if($row["zlazy_s_vnitrni_sekreci_cukrovka_1_stupen"]=='Ne'){
          echo $row["zlazy_s_vnitrni_sekreci_cukrovka_1_stupen"] = '';
            }else{
          echo $row["zlazy_s_vnitrni_sekreci_cukrovka_1_stupen"].', ';
            }

            if($row["zlazy_s_vnitrni_sekreci_cukrovka_2_stupen"]=='Ne'){
          echo $row["zlazy_s_vnitrni_sekreci_cukrovka_2_stupen"] = '';
            }else{
          echo $row["zlazy_s_vnitrni_sekreci_cukrovka_2_stupen"].', ';
            }

            if($row["zlazy_s_vnitrni_sekreci_neuropatie"]=='Ne'){
          echo $row["zlazy_s_vnitrni_sekreci_neuropatie"] = '';
            }else{
          echo $row["zlazy_s_vnitrni_sekreci_neuropatie"].', ';
            }

            if($row["zlazy_s_vnitrni_sekreci_dna"]=='Ne'){
          echo $row["zlazy_s_vnitrni_sekreci_dna"] = '';
            }else{
          echo $row["zlazy_s_vnitrni_sekreci_dna"].', ';
            }


       }
?>
<br><br>
</div>
</div>
<?  }
//$conn->close(); ?>

<br>