<?
//require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT *,
CASE
WHEN orl_ztrata_sluchu_na_jednom_uchu = 0 THEN 'Ne'
WHEN orl_ztrata_sluchu_na_jednom_uchu = 1 THEN 'ztráta sluchu na jednom uchu'
END AS orl_ztrata_sluchu_na_jednom_uchu,
CASE
WHEN orl_ztrata_sluchu_obe_usi = 0 THEN 'Ne'
WHEN orl_ztrata_sluchu_obe_usi = 1 THEN 'ztráta sluchu obě uši'
END AS orl_ztrata_sluchu_obe_usi,
CASE
WHEN orl_opakovane_zanety_stredousi = 0 THEN 'Ne'
WHEN orl_opakovane_zanety_stredousi = 1 THEN 'opakované záněty středouší'
END AS orl_opakovane_zanety_stredousi,
CASE
WHEN orl_pocit_zalehlosti_usi = 0 THEN 'Ne'
WHEN orl_pocit_zalehlosti_usi = 1 THEN 'pocit zalehlosti uší'
END AS orl_pocit_zalehlosti_usi,
CASE
WHEN orl_huceni_v_usich = 0 THEN 'Ne'
WHEN orl_huceni_v_usich = 1 THEN 'hučení v uších'
END AS orl_huceni_v_usich,
CASE
WHEN orl_piskani_v_usich = 0 THEN 'Ne'
WHEN orl_piskani_v_usich = 1 THEN 'pískání v uších'
END AS orl_piskani_v_usich,
CASE
WHEN orl_opakovane_zanety_dutin = 0 THEN 'Ne'
WHEN orl_opakovane_zanety_dutin = 1 THEN 'opakované záněty dutin'
END AS orl_opakovane_zanety_dutin,
CASE
WHEN orl_polypy_v_dutinach = 0 THEN 'Ne'
WHEN orl_polypy_v_dutinach = 1 THEN 'polypy v dutinách'
END AS orl_polypy_v_dutinach,
CASE
WHEN orl_suchost_dutin = 0 THEN 'Ne'
WHEN orl_suchost_dutin = 1 THEN 'suchost dutin (nemožnost smrkat)'
END AS orl_suchost_dutin,
CASE
WHEN orl_smrkani_krve = 0 THEN 'Ne'
WHEN orl_smrkani_krve = 1 THEN 'smrkání krve'
END AS orl_smrkani_krve,
CASE
WHEN orl_hnisave_rymy = 0 THEN 'Ne'
WHEN orl_hnisave_rymy = 1 THEN 'hnisavé rýmy'
END AS orl_hnisave_rymy
FROM zdravi_orl
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>

      <label for="uzivatel">Problémy:</label>
<?       
     if ($row["orl_ztrata_sluchu_na_jednom_uchu"] == 'Ne' 
     && $row["orl_ztrata_sluchu_obe_usi"] == 'Ne' 
     && $row["orl_opakovane_zanety_stredousi"] == 'Ne' 
     && $row["orl_pocit_zalehlosti_usi"] == 'Ne' 
     && $row["orl_huceni_v_usich"] == 'Ne'
     && $row["orl_piskani_v_usich"] == 'Ne'     
     && $row["orl_opakovane_zanety_dutin"] == 'Ne' 
     && $row["orl_polypy_v_dutinach"] == 'Ne'
     && $row["orl_suchost_dutin"] == 'Ne'
     && $row["orl_smrkani_krve"] == 'Ne'
     && $row["orl_hnisave_rymy"] == 'Ne'          
     ){
     echo 'Žádný záznam o výskytu onemocnění';

      }else{

            if($row["orl_ztrata_sluchu_na_jednom_uchu"]=='Ne'){
          echo $row["orl_ztrata_sluchu_na_jednom_uchu"] = '';
            }else{
          echo $row["orl_ztrata_sluchu_na_jednom_uchu"].', ';
            }
            
            if($row["orl_ztrata_sluchu_obe_usi"]=='Ne'){
          echo $row["orl_ztrata_sluchu_obe_usi"] = '';
            }else{
          echo $row["orl_ztrata_sluchu_obe_usi"].', ';
            }

            if($row["orl_opakovane_zanety_stredousi"]=='Ne'){
          echo $row["orl_opakovane_zanety_stredousi"] = '';
            }else{
          echo $row["orl_opakovane_zanety_stredousi"].', ';
            }

            if($row["orl_pocit_zalehlosti_usi"]=='Ne'){
          echo $row["orl_pocit_zalehlosti_usi"] = '';
            }else{
          echo $row["orl_pocit_zalehlosti_usi"].', ';
            }

            if($row["orl_huceni_v_usich"]=='Ne'){
          echo $row["orl_huceni_v_usich"] = '';
            }else{
          echo $row["orl_huceni_v_usich"].', ';
            }

            if($row["orl_piskani_v_usich"]=='Ne'){
          echo $row["orl_piskani_v_usich"] = '';
            }else{
          echo $row["orl_piskani_v_usich"].', ';
            }

            if($row["orl_opakovane_zanety_dutin"]=='Ne'){
          echo $row["orl_opakovane_zanety_dutin"] = '';
            }else{
          echo $row["orl_opakovane_zanety_dutin"].', ';
            } 
 
            if($row["orl_polypy_v_dutinach"]=='Ne'){
          echo $row["orl_polypy_v_dutinach"] = '';
            }else{
          echo $row["orl_polypy_v_dutinach"].', ';
            }
            
            if($row["orl_suchost_dutin"]=='Ne'){
          echo $row["orl_suchost_dutin"] = '';
            }else{
          echo $row["orl_suchost_dutin"].', ';
            }

            if($row["orl_smrkani_krve"]=='Ne'){
          echo $row["orl_smrkani_krve"] = '';
            }else{
          echo $row["orl_smrkani_krve"].', ';
            }            

            if($row["orl_hnisave_rymy"]=='Ne'){
          echo $row["orl_hnisave_rymy"] = '';
            }else{
          echo $row["orl_hnisave_rymy"].', ';
            } 
       }
?>
<br><br>
</div>
</div>
<?  }
//$conn->close(); ?>