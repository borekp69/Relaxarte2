<?
//require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT *,
CASE
WHEN respiracni_system_astma = 0 THEN 'Ne'
WHEN respiracni_system_astma = 1 THEN 'Astma'
END AS respiracni_system_astma,
CASE
WHEN respiracni_system_opakovane_pneumonie = 0 THEN 'Ne'
WHEN respiracni_system_opakovane_pneumonie = 1 THEN 'opakované pneumonie'
END AS respiracni_system_opakovane_pneumonie,
CASE
WHEN respiracni_system_zanety_prudusek = 0 THEN 'Ne'
WHEN respiracni_system_zanety_prudusek = 1 THEN 'záněty průdušek'
END AS respiracni_system_zanety_prudusek,
CASE
WHEN respiracni_system_laryngytida = 0 THEN 'Ne'
WHEN respiracni_system_laryngytida = 1 THEN 'Laryngytida'
END AS respiracni_system_laryngytida

FROM zdravi_respiracni_system
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>

      <label for="uzivatel">Problémy:</label>
<?       
     if ($row["respiracni_system_astma"] == 'Ne' 
     && $row["respiracni_system_opakovane_pneumonie"] == 'Ne' 
     && $row["respiracni_system_zanety_prudusek"] == 'Ne' 
     && $row["respiracni_system_laryngytida"] == 'Ne' 
     ){
     echo 'Žádný záznam o výskytu onemocnění';

      }else{

            if($row["respiracni_system_astma"]=='Ne'){
          echo $row["respiracni_system_astma"] = '';
            }else{
          echo $row["respiracni_system_astma"].', ';
            }
            
            if($row["respiracni_system_opakovane_pneumonie"]=='Ne'){
          echo $row["respiracni_system_opakovane_pneumonie"] = '';
            }else{
          echo $row["respiracni_system_opakovane_pneumonie"].', ';
            }

            if($row["respiracni_system_zanety_prudusek"]=='Ne'){
          echo $row["respiracni_system_zanety_prudusek"] = '';
            }else{
          echo $row["respiracni_system_zanety_prudusek"].', ';
            }

            if($row["respiracni_system_laryngytida"]=='Ne'){
          echo $row["respiracni_system_laryngytida"] = '';
            }else{
          echo $row["respiracni_system_laryngytida"].', ';
            }
       }
?>
<br><br>
</div>
</div>
<?  }
//$conn->close(); ?>
<br>