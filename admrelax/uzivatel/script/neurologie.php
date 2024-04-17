<?
//require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT *,
CASE
WHEN neurologie_komoce = 0 THEN 'Ne'
WHEN neurologie_komoce = 1 THEN 'Komoce'
END AS neurologie_komoce,
CASE
WHEN neurologie_vertigo = 0 THEN 'Ne'
WHEN neurologie_vertigo = 1 THEN 'Vertigo'
END AS neurologie_vertigo,
CASE
WHEN neurologie_cephalea = 0 THEN 'Ne'
WHEN neurologie_cephalea = 1 THEN 'Cephalea'
END AS neurologie_cephalea,
CASE
WHEN neurologie_migreny = 0 THEN 'Ne'
WHEN neurologie_migreny = 1 THEN 'Migrény'
END AS neurologie_migreny,
CASE
WHEN neurologie_VAS_pater_syndromy = 0 THEN 'Ne'
WHEN neurologie_VAS_pater_syndromy = 1 THEN 'VAS (páteř - syndromy)'
END AS neurologie_VAS_pater_syndromy,
CASE
WHEN neurologie_epilepsie = 0 THEN 'Ne'
WHEN neurologie_epilepsie = 1 THEN 'Epilepsie'
END AS neurologie_epilepsie,
CASE
WHEN neurologie_alzheimer = 0 THEN 'Ne'
WHEN neurologie_alzheimer = 1 THEN 'Alzheimer'
END AS neurologie_alzheimer,
CASE
WHEN neurologie_parkinson = 0 THEN 'Ne'
WHEN neurologie_parkinson = 1 THEN 'Parkinson'
END AS neurologie_parkinson,
CASE
WHEN neurologie_tres_rukou = 0 THEN 'Ne'
WHEN neurologie_tres_rukou = 1 THEN 'třes rukou'
END AS neurologie_tres_rukou,
CASE
WHEN neurologie_neuropatie_pri_diabetes = 0 THEN 'Ne'
WHEN neurologie_neuropatie_pri_diabetes = 1 THEN 'Neuropatie při diabetes'
END AS neurologie_neuropatie_pri_diabetes,
CASE
WHEN neurologie_hepatopatie = 0 THEN 'Ne'
WHEN neurologie_hepatopatie = 1 THEN 'Hepatopatie'
END AS neurologie_hepatopatie,
CASE
WHEN neurologie_brneni = 0 THEN 'Ne'
WHEN neurologie_brneni = 1 THEN 'brnění'
END AS neurologie_brneni,
CASE
WHEN neurologie_necitlivost_koncetin = 0 THEN 'Ne'
WHEN neurologie_necitlivost_koncetin = 1 THEN 'necitlivost končetin'
END AS neurologie_necitlivost_koncetin,
CASE
WHEN neurologie_karpal = 0 THEN 'Ne'
WHEN neurologie_karpal = 1 THEN 'Karpál'
END AS neurologie_karpal,
CASE
WHEN neurologie_opakovane_blize_nespecifikovane_bolesti_hlavy = 0 THEN 'Ne'
WHEN neurologie_opakovane_blize_nespecifikovane_bolesti_hlavy = 1 THEN 'opakované blíže nespecifikované bolesti hlavy'
END AS neurologie_opakovane_blize_nespecifikovane_bolesti_hlavy
                                 	
FROM zdravi_neurologie
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>


      <label for="uzivatel">Problémy:</label>
<?       
     if ($row["neurologie_komoce"] == 'Ne' 
     && $row["neurologie_vertigo"] == 'Ne' 
     && $row["neurologie_cephalea"] == 'Ne' 
     && $row["neurologie_migreny"] == 'Ne' 
     && $row["neurologie_VAS_pater_syndromy"] == 'Ne'
     && $row["neurologie_epilepsie"] == 'Ne'     
     && $row["neurologie_alzheimer"] == 'Ne' 
     && $row["neurologie_parkinson"] == 'Ne'
     && $row["neurologie_tres_rukou"] == 'Ne' 
     && $row["neurologie_neuropatie_pri_diabetes"] == 'Ne'
     && $row["neurologie_hepatopatie"] == 'Ne'     
     && $row["neurologie_brneni"] == 'Ne' 
     && $row["neurologie_necitlivost_koncetin"] == 'Ne'
     && $row["neurologie_karpal"] == 'Ne'
     && $row["neurologie_opakovane_blize_nespecifikovane_bolesti_hlavy"] == 'Ne'                              
     ){
     echo 'Žádný záznam o výskytu onemocnění';

      }else{

            if($row["neurologie_komoce"]=='Ne'){
          echo $row["neurologie_komoce"] = '';
            }else{
          echo $row["neurologie_komoce"].', ';
            }

            if($row["neurologie_vertigo"]=='Ne'){
          echo $row["neurologie_vertigo"] = '';
            }else{
          echo $row["neurologie_vertigo"].', ';
            }

            if($row["neurologie_cephalea"]=='Ne'){
          echo $row["neurologie_cephalea"] = '';
            }else{
          echo $row["neurologie_cephalea"].', ';
            }

            if($row["neurologie_migreny"]=='Ne'){
          echo $row["neurologie_migreny"] = '';
            }else{
          echo $row["neurologie_migreny"].', ';
            }            

            if($row["neurologie_VAS_pater_syndromy"]=='Ne'){
          echo $row["neurologie_VAS_pater_syndromy"] = '';
            }else{
          echo $row["neurologie_VAS_pater_syndromy"].', ';
            }

            if($row["neurologie_epilepsie"]=='Ne'){
          echo $row["neurologie_epilepsie"] = '';
            }else{
          echo $row["neurologie_epilepsie"].', ';
            }

            if($row["neurologie_alzheimer"]=='Ne'){
          echo $row["neurologie_alzheimer"] = '';
            }else{
          echo $row["neurologie_alzheimer"].', ';
            }

            if($row["neurologie_parkinson"]=='Ne'){
          echo $row["neurologie_parkinson"] = '';
            }else{
          echo $row["neurologie_parkinson"].', ';
            }

            if($row["neurologie_tres_rukou"]=='Ne'){
          echo $row["neurologie_tres_rukou"] = '';
            }else{
          echo $row["neurologie_tres_rukou"].', ';
            }

            if($row["neurologie_neuropatie_pri_diabetes"]=='Ne'){
          echo $row["neurologie_neuropatie_pri_diabetes"] = '';
            }else{
          echo $row["neurologie_neuropatie_pri_diabetes"].', ';
            }

            if($row["neurologie_hepatopatie"]=='Ne'){
          echo $row["neurologie_hepatopatie"] = '';
            }else{
          echo $row["neurologie_hepatopatie"].', ';
            }

            if($row["neurologie_brneni"]=='Ne'){
          echo $row["neurologie_brneni"] = '';
            }else{
          echo $row["neurologie_brneni"].', ';
            }

            if($row["neurologie_necitlivost_koncetin"]=='Ne'){
          echo $row["neurologie_necitlivost_koncetin"] = '';
            }else{
          echo $row["neurologie_necitlivost_koncetin"].', ';
            }
            
            if($row["neurologie_karpal"]=='Ne'){
          echo $row["neurologie_karpal"] = '';
            }else{
          echo $row["neurologie_karpal"].', ';
            }            
            
            if($row["neurologie_opakovane_blize_nespecifikovane_bolesti_hlavy"]=='Ne'){
          echo $row["neurologie_opakovane_blize_nespecifikovane_bolesti_hlavy"] = '';
            }else{
          echo $row["neurologie_opakovane_blize_nespecifikovane_bolesti_hlavy"].', ';
            } 
      }

?>
<br><br>
</div>
</div>
<?  }
//$conn->close(); ?>