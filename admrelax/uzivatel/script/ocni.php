<?
//require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT *,
CASE
WHEN ocni_kratkozrakost = 0 THEN 'Ne'
WHEN ocni_kratkozrakost = 1 THEN 'krátkozrakost'
END AS ocni_kratkozrakost,
CASE
WHEN ocni_dalekozrakost = 0 THEN 'Ne'
WHEN ocni_dalekozrakost = 1 THEN 'dalekozrakost'
END AS ocni_dalekozrakost,
CASE
WHEN ocni_ocni_zakal = 0 THEN 'Ne'
WHEN ocni_ocni_zakal = 1 THEN 'oční zákal'
END AS ocni_ocni_zakal,
CASE
WHEN ocni_cerne_tecky_pred_ocima = 0 THEN 'Ne'
WHEN ocni_cerne_tecky_pred_ocima = 1 THEN 'černé tečky před očima'
END AS ocni_cerne_tecky_pred_ocima,
CASE
WHEN ocni_bolesti_za_ocima = 0 THEN 'Ne'
WHEN ocni_bolesti_za_ocima = 1 THEN 'bolesti za očima'
END AS ocni_bolesti_za_ocima,
CASE
WHEN ocni_ekzemy_kolem_oci = 0 THEN 'Ne'
WHEN ocni_ekzemy_kolem_oci = 1 THEN 'ekzémy kolem očí'
END AS ocni_ekzemy_kolem_oci,
CASE
WHEN ocni_zanety_vicek = 0 THEN 'Ne'
WHEN ocni_zanety_vicek = 1 THEN 'záněty víček'
END AS ocni_zanety_vicek,
CASE
WHEN ocni_opakovana_jecna_vlci_zrna = 0 THEN 'Ne'
WHEN ocni_opakovana_jecna_vlci_zrna = 1 THEN 'pakovaná ječná/vlčí zrna'
END AS ocni_opakovana_jecna_vlci_zrna
FROM zdravi_ocni
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>



      <label for="uzivatel">Problémy:</label>
<?       
     if ($row["ocni_kratkozrakost"] == 'Ne' 
     && $row["ocni_dalekozrakost"] == 'Ne' 
     && $row["ocni_ocni_zakal"] == 'Ne' 
     && $row["ocni_cerne_tecky_pred_ocima"] == 'Ne' 
     && $row["ocni_bolesti_za_ocima"] == 'Ne'
     && $row["ocni_ekzemy_kolem_oci"] == 'Ne'     
     && $row["ocni_zanety_vicek"] == 'Ne' 
     && $row["ocni_opakovana_jecna_vlci_zrna"] == 'Ne'
     ){
     echo 'Žádný záznam o výskytu onemocnění';

      }else{

            if($row["ocni_kratkozrakost"]=='Ne'){
          echo $row["ocni_kratkozrakost"] = '';
            }else{
          echo $row["ocni_kratkozrakost"].', ';
            }
            
            if($row["ocni_dalekozrakost"]=='Ne'){
          echo $row["ocni_dalekozrakost"] = '';
            }else{
          echo $row["ocni_dalekozrakost"].', ';
            }

            if($row["ocni_ocni_zakal"]=='Ne'){
          echo $row["ocni_ocni_zakal"] = '';
            }else{
          echo $row["ocni_ocni_zakal"].', ';
            }

            if($row["ocni_cerne_tecky_pred_ocima"]=='Ne'){
          echo $row["ocni_cerne_tecky_pred_ocima"] = '';
            }else{
          echo $row["ocni_cerne_tecky_pred_ocima"].', ';
            }

            if($row["ocni_bolesti_za_ocima"]=='Ne'){
          echo $row["ocni_bolesti_za_ocima"] = '';
            }else{
          echo $row["ocni_bolesti_za_ocima"].', ';
            }

            if($row["ocni_ekzemy_kolem_oci"]=='Ne'){
          echo $row["ocni_ekzemy_kolem_oci"] = '';
            }else{
          echo $row["ocni_ekzemy_kolem_oci"].', ';
            }

            if($row["ocni_zanety_vicek"]=='Ne'){
          echo $row["ocni_zanety_vicek"] = '';
            }else{
          echo $row["ocni_zanety_vicek"].', ';
            } 
 
            if($row["ocni_opakovana_jecna_vlci_zrna"]=='Ne'){
          echo $row["ocni_opakovana_jecna_vlci_zrna"] = '';
            }else{
          echo $row["ocni_opakovana_jecna_vlci_zrna"].', ';
            }
 
      }

?>
<br><br>
</div>
</div>
<?  }
//$conn->close(); ?>

<br>