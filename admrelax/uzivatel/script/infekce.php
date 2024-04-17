<?
//require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT *,
CASE
WHEN infekce_encefalitida = 0 THEN 'Ne'
WHEN infekce_encefalitida = 1 THEN 'Encefalitida'
END AS infekce_encefalitida,
CASE
WHEN infekce_meningitida = 0 THEN 'Ne'
WHEN infekce_meningitida = 1 THEN 'Meningitida'
END AS infekce_meningitida,
CASE
WHEN infekce_borelioza = 0 THEN 'Ne'
WHEN infekce_borelioza = 1 THEN 'Borelióza'
END AS infekce_borelioza,
CASE
WHEN infekce_infekcni_hepatitida = 0 THEN 'Ne'
WHEN infekce_infekcni_hepatitida = 1 THEN 'Infekční hepatitida'
END AS infekce_infekcni_hepatitida,
CASE
WHEN infekce_mononukleoza = 0 THEN 'Ne'
WHEN infekce_mononukleoza = 1 THEN 'Mononukleoza'
END AS infekce_mononukleoza,
CASE
WHEN infekce_chlamydie = 0 THEN 'Ne'
WHEN infekce_chlamydie = 1 THEN 'Chlamýdie'
END AS infekce_chlamydie,
CASE
WHEN infekce_cmv = 0 THEN 'Ne'
WHEN infekce_cmv = 1 THEN 'CMV'
END AS infekce_cmv,
CASE
WHEN infekce_hpv = 0 THEN 'Ne'
WHEN infekce_hpv = 1 THEN 'HPV'
END AS infekce_hpv,
CASE
WHEN infekce_streptokok = 0 THEN 'Ne'
WHEN infekce_streptokok = 1 THEN 'Streptokok'
END AS infekce_streptokok,
CASE
WHEN infekce_stafylokok = 0 THEN 'Ne'
WHEN infekce_stafylokok = 1 THEN 'Stafylokok'
END AS infekce_stafylokok

FROM  zdravi_infekce
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>


      <label for="uzivatel">Problémy:</label>
<?       
     if ($row["infekce_encefalitida"] == 'Ne' && $row["infekce_meningitida"] == 'Ne' && $row["infekce_borelioza"] == 'Ne' 
        && $row["infekce_infekcni_hepatitida"] == 'Ne' && $row["infekce_mononukleoza"] == 'Ne' 
        && $row["infekce_chlamydie"] == 'Ne' && $row["infekce_cmv"] == 'Ne'
        && $row["infekce_hpv"] == 'Ne' && $row["infekce_streptokok"] == 'Ne'
        && $row["infekce_stafylokok"] == 'Ne'
     ){
     echo 'Žádný záznam o výskytu onemocnění';

      }else{

            if($row["infekce_encefalitida"]=='Ne'){
          echo $row["infekce_encefalitida"] = '';
            }else{
          echo $row["infekce_encefalitida"].', ';
            }

            if($row["infekce_meningitida"]=='Ne'){
          echo $row["infekce_meningitida"] = '';
            }else{
          echo $row["infekce_meningitida"].', ';
            }

            if($row["infekce_borelioza"]=='Ne'){
          echo $row["infekce_borelioza"] = '';
            }else{
          echo $row["infekce_borelioza"].', ';
            }

            if($row["infekce_infekcni_hepatitida"]=='Ne'){
          echo $row["infekce_infekcni_hepatitida"] = '';
            }else{
          echo $row["infekce_infekcni_hepatitida"].', ';
            }            

            if($row["infekce_mononukleoza"]=='Ne'){
          echo $row["infekce_mononukleoza"] = '';
            }else{
          echo $row["infekce_mononukleoza"].', ';
            }

            if($row["infekce_chlamydie"]=='Ne'){
          echo $row["infekce_chlamydie"] = '';
            }else{
          echo $row["infekce_chlamydie"].', ';
            }

            if($row["infekce_cmv"]=='Ne'){
          echo $row["infekce_cmv"] = '';
            }else{
          echo $row["infekce_cmv"].', ';
            }

            if($row["infekce_hpv"]=='Ne'){
          echo $row["infekce_hpv"] = '';
            }else{
          echo $row["infekce_hpv"].', ';
            }

            if($row["infekce_streptokok"]=='Ne'){
          echo $row["infekce_streptokok"] = '';
            }else{
          echo $row["infekce_streptokok"].', ';
            }

            if($row["infekce_stafylokok"]=='Ne'){
          echo $row["infekce_stafylokok"] = '';
            }else{
          echo $row["infekce_stafylokok"].', ';
            }


      }

?>
<br><br>
</div>
</div>
<?  }
//$conn->close(); ?>
<br>
