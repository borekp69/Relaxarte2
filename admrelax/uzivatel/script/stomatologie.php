<?
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT *,
CASE
WHEN stomatologie_vysoka_kazivost_zubu = 0 THEN 'Ne'
WHEN stomatologie_vysoka_kazivost_zubu = 1 THEN 'vysoká kazivost zubů'
END AS stomatologie_vysoka_kazivost_zubu,
CASE
WHEN stomatologie_krvaceni_dasni = 0 THEN 'Ne'
WHEN stomatologie_krvaceni_dasni = 1 THEN 'Krvácení dásní'
END AS stomatologie_krvaceni_dasni,
CASE
WHEN stomatologie_paradentoza = 0 THEN 'Ne'
WHEN stomatologie_paradentoza = 1 THEN 'Paradentóza'
END AS stomatologie_paradentoza

FROM zdravi_stomatologie
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>

      <label for="uzivatel">Problémy:</label>
<?       
     if ($row["stomatologie_vysoka_kazivost_zubu"] == 'Ne' 
     && $row["stomatologie_krvaceni_dasni"] == 'Ne' 
     && $row["stomatologie_paradentoza"] == 'Ne' 
     ){
     echo 'Žádný záznam o výskytu onemocnění';

      }else{

            if($row["stomatologie_vysoka_kazivost_zubu"]=='Ne'){
          echo $row["stomatologie_vysoka_kazivost_zubu"] = '';
            }else{
          echo $row["stomatologie_vysoka_kazivost_zubu"].', ';
            }
            
            if($row["stomatologie_krvaceni_dasni"]=='Ne'){
          echo $row["stomatologie_krvaceni_dasni"] = '';
            }else{
          echo $row["stomatologie_krvaceni_dasni"].', ';
            }

            if($row["stomatologie_paradentoza"]=='Ne'){
          echo $row["stomatologie_paradentoza"] = '';
            }else{
          echo $row["stomatologie_paradentoza"].', ';
            }

       }
?>
<br><br>
</div>
</div>
<?  }
//$conn->close(); ?>
<br>
