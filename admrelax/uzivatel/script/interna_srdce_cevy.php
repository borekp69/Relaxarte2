<?
//require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT *,
CASE
WHEN interna_srdce_cevy_arytmie = 0 THEN 'Ne'
WHEN interna_srdce_cevy_arytmie = 1 THEN 'Arytmie'
END AS interna_srdce_cevy_arytmie,
CASE
WHEN interna_srdce_cevy_hypertenze = 0 THEN 'Ne'
WHEN interna_srdce_cevy_hypertenze = 1 THEN 'Hypertenze'
END AS interna_srdce_cevy_hypertenze,
CASE
WHEN interna_srdce_cevy_varixy = 0 THEN 'Ne'
WHEN interna_srdce_cevy_varixy = 1 THEN 'Varixy'
END AS interna_srdce_cevy_varixy,
CASE
WHEN interna_srdce_cevy_ichs_ev_angina_pectoris = 0 THEN 'Ne'
WHEN interna_srdce_cevy_ichs_ev_angina_pectoris = 1 THEN 'ICHS ev. angina pectoris'
END AS interna_srdce_cevy_ichs_ev_angina_pectoris,
CASE
WHEN interna_srdce_cevy_infarkty = 0 THEN 'Ne'
WHEN interna_srdce_cevy_infarkty = 1 THEN 'Infarkty'
END AS interna_srdce_cevy_infarkty,
CASE
WHEN interna_srdce_cevy_blize_nespecifkovane_buseni_srdce = 0 THEN 'Ne'
WHEN interna_srdce_cevy_blize_nespecifkovane_buseni_srdce = 1 THEN 'blíže nespecifkované bušení srdce'
END AS interna_srdce_cevy_blize_nespecifkovane_buseni_srdce
                                   	
FROM  zdravi_interna_srdce_a_cevy
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>


      <label for="uzivatel">Problémy:</label>
<?       
     if ($row["interna_srdce_cevy_arytmie"] == 'Ne' && $row["interna_srdce_cevy_hypertenze"] == 'Ne' && $row["interna_srdce_cevy_varixy"] == 'Ne' 
        && $row["interna_srdce_cevy_ichs_ev_angina_pectoris"] == 'Ne' && $row["interna_srdce_cevy_infarkty"] == 'Ne' 
        && $row["interna_srdce_cevy_blize_nespecifkovane_buseni_srdce"] == 'Ne'
     ){
     echo 'Žádný záznam o výskytu onemocnění';

      }else{

            if($row["interna_srdce_cevy_arytmie"]=='Ne'){
          echo $row["interna_srdce_cevy_arytmie"] = '';
            }else{
          echo $row["interna_srdce_cevy_arytmie"].', ';
            }

            if($row["interna_srdce_cevy_hypertenze"]=='Ne'){
          echo $row["interna_srdce_cevy_hypertenze"] = '';
            }else{
          echo $row["interna_srdce_cevy_hypertenze"].', ';
            }

            if($row["interna_srdce_cevy_varixy"]=='Ne'){
          echo $row["interna_srdce_cevy_varixy"] = '';
            }else{
          echo $row["interna_srdce_cevy_varixy"].', ';
            }

            if($row["interna_srdce_cevy_ichs_ev_angina_pectoris"]=='Ne'){
          echo $row["interna_srdce_cevy_ichs_ev_angina_pectoris"] = '';
            }else{
          echo $row["interna_srdce_cevy_ichs_ev_angina_pectoris"].', ';
            }            

            if($row["interna_srdce_cevy_infarkty"]=='Ne'){
          echo $row["interna_srdce_cevy_infarkty"] = '';
            }else{
          echo $row["interna_srdce_cevy_infarkty"].', ';
            }

            if($row["interna_srdce_cevy_blize_nespecifkovane_buseni_srdce"]=='Ne'){
          echo $row["interna_srdce_cevy_blize_nespecifkovane_buseni_srdce"] = '';
            }else{
          echo $row["interna_srdce_cevy_blize_nespecifkovane_buseni_srdce"].', ';
            }

      }

?>
<br><br>
</div>
</div>
<?  }
//$conn->close(); ?>


<br>