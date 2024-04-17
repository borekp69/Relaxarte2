<?
//require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT *,
CASE
WHEN alergie_pyl_jarni = 0 THEN 'Ne'
WHEN alergie_pyl_jarni = 1 THEN 'jarní pyl'
END AS alergie_pyl_jarni,
CASE
WHEN alergie_pyl_letni = 0 THEN 'Ne'
WHEN alergie_pyl_letni = 1 THEN 'letní pyl'
END AS alergie_pyl_letni,
CASE
WHEN alergie_pyl_podzimni = 0 THEN 'Ne'
WHEN alergie_pyl_podzimni = 1 THEN 'podzimní pyl'
END AS alergie_pyl_podzimni,
CASE
WHEN alergie_plisne = 0 THEN 'Ne'
WHEN alergie_plisne = 1 THEN 'plísně'
END AS alergie_plisne,
CASE
WHEN alergie_prach = 0 THEN 'Ne'
WHEN alergie_prach = 1 THEN 'prach'
END AS alergie_prach,
CASE
WHEN alergie_peri = 0 THEN 'Ne'
WHEN alergie_peri = 1 THEN 'peří'
END AS alergie_peri,
CASE
WHEN alergie_srst = 0 THEN 'Ne'
WHEN alergie_srst = 1 THEN 'srst'
END AS alergie_srst,
CASE
WHEN alergie_roztoce = 0 THEN 'Ne'
WHEN alergie_roztoce = 1 THEN 'roztoče'
END AS alergie_roztoce,
CASE
WHEN alergie_potraviny = 0 THEN 'Ne'
WHEN alergie_potraviny = 1 THEN 'potraviny'
END AS alergie_potraviny,
CASE
WHEN alergie_zvirata = 0 THEN 'Ne'
WHEN alergie_zvirata = 1 THEN 'zvirata'
END AS alergie_zvirata,
CASE
WHEN alergie_leky = 0 THEN 'Ne'
WHEN alergie_leky = 1 THEN 'léky'
END AS alergie_leky,
CASE
WHEN alergie_projevy_tekouci_ryma = 0 THEN 'Ne'
WHEN alergie_projevy_tekouci_ryma = 1 THEN 'tekoucí rýma'
END AS alergie_projevy_tekouci_ryma,
CASE
WHEN alergie_projevy_intenzivni_kychani = 0 THEN 'Ne'
WHEN alergie_projevy_intenzivni_kychani = 1 THEN 'intenzivní kýchání'
END AS alergie_projevy_intenzivni_kychani,
CASE
WHEN alergie_projevy_krev_pri_smrkani = 0 THEN 'Ne'
WHEN alergie_projevy_krev_pri_smrkani = 1 THEN 'krev při smrkání'
END AS alergie_projevy_krev_pri_smrkani,
CASE
WHEN alergie_projevy_hnisave_rymy = 0 THEN 'Ne'
WHEN alergie_projevy_hnisave_rymy = 1 THEN 'hnisavé rýmy'
END AS alergie_projevy_hnisave_rymy,
CASE
WHEN alergie_projevy_kozni_projevy = 0 THEN 'Ne'
WHEN alergie_projevy_kozni_projevy = 1 THEN 'kožní projevy (ekzém, kopřivka)'
END AS alergie_projevy_kozni_projevy,
CASE
WHEN alergie_projevy_svedeni_kuze = 0 THEN 'Ne'
WHEN alergie_projevy_svedeni_kuze = 1 THEN 'svědění kůže'
END AS alergie_projevy_svedeni_kuze,
CASE
WHEN alergie_projevy_astma = 0 THEN 'Ne'
WHEN alergie_projevy_astma = 1 THEN 'astma'
END AS alergie_projevy_astma,
CASE
WHEN alergie_projevy_bolesti_svalu = 0 THEN 'Ne'
WHEN alergie_projevy_bolesti_svalu = 1 THEN 'bolesti svaslů'
END AS alergie_projevy_bolesti_svalu,
CASE
WHEN alergie_projevy_bolesti_hlavy = 0 THEN 'Ne'
WHEN alergie_projevy_bolesti_hlavy = 1 THEN 'bolesti hlavy'
END AS alergie_projevy_bolesti_hlavy,
CASE
WHEN alergie_projevy_nespavost = 0 THEN 'Ne'
WHEN alergie_projevy_nespavost = 1 THEN 'nespavost'
END AS alergie_projevy_nespavost,
CASE
WHEN alergie_projevy_otekla_ocni_vicka = 0 THEN 'Ne'
WHEN alergie_projevy_otekla_ocni_vicka = 1 THEN 'oteklá oční víčka'
END AS alergie_projevy_otekla_ocni_vicka,
CASE
WHEN alergie_projevy_svedeni_oci = 0 THEN 'Ne'
WHEN alergie_projevy_svedeni_oci = 1 THEN 'svědění očí'
END AS alergie_projevy_svedeni_oci,
CASE
WHEN alergie_projevy_slzeni_oci = 0 THEN 'Ne'
WHEN alergie_projevy_slzeni_oci = 1 THEN 'slzení očí'
END AS alergie_projevy_slzeni_oci,
CASE
WHEN alergie_projevy_kasel = 0 THEN 'Ne'
WHEN alergie_projevy_kasel = 1 THEN 'kašel'
END AS alergie_projevy_kasel,
CASE
WHEN alergie_projevy_kompletni_unava = 0 THEN 'Ne'
WHEN alergie_projevy_kompletni_unava = 1 THEN 'kompletní únava'
END AS alergie_projevy_kompletni_unava
FROM  zdravi_alergie
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";

$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>

<?
    if ($row["alergie_pyl_jarni"] == 'Ne' && $row["alergie_pyl_letni"] == 'Ne' 
    && $row["alergie_pyl_podzimni"] == 'Ne' && $row["alergie_plisne"] == 'Ne' 
    && $row["alergie_prach"] == 'Ne' && $row["alergie_peri"] == 'Ne' && $row["alergie_srst"] == 'Ne' 
    && $row["alergie_roztoce"] == 'Ne' && $row["alergie_potraviny"] == 'Ne' && $row["alergie_zvirata"] == 'Ne' 
    && $row["alergie_leky"] == 'Ne'){
    echo 'Žádný záznam o výskytu onemocnění <br><br>';
   ?> 
   </div></div>
   
   <?  }else{  ?>
    <label>Typy alergií:</label>
    <?
            if($row["alergie_pyl_jarni"]=='Ne'){
        echo $row["alergie_pyl_jarni"] = '';
            }else{
        echo $row["alergie_pyl_jarni"].', ';
            }
            
            if($row["alergie_pyl_letni"]=='Ne'){
        echo $row["alergie_pyl_letni"] = '';
            }else{
        echo $row["alergie_pyl_letni"].', ';
            }
            
            if($row["alergie_pyl_podzimni"]=='Ne'){
        echo $row["alergie_pyl_podzimni"] = '';
            }else{
        echo $row["alergie_pyl_podzimni"].', ';
            }

            if($row["alergie_plisne"]=='Ne'){
        echo $row["alergie_plisne"] = '';
            }else{
        echo $row["alergie_plisne"].', ';
            }            

            if($row["alergie_prach"]=='Ne'){
        echo $row["alergie_prach"] = '';
            }else{
        echo $row["alergie_prach"].', ';
            }

            if($row["alergie_peri"]=='Ne'){
        echo $row["alergie_peri"] = '';
            }else{
        echo $row["alergie_peri"].', ';
            }

            if($row["alergie_srst"]=='Ne'){
        echo $row["alergie_srst"] = '';
            }else{
        echo $row["alergie_srst"].', ';
            }

            if($row["alergie_roztoce"]=='Ne'){
        echo $row["alergie_roztoce"] = '';
            }else{
        echo $row["alergie_roztoce"].', ';
            }

            if($row["alergie_potraviny"]=='Ne'){
        echo $row["alergie_potraviny"] = '';
            }else{
        echo $row["alergie_potraviny"].', ';
            }

            if($row["alergie_zvirata"]=='Ne'){
        echo $row["alergie_zvirata"] = '';
            }else{
        echo $row["alergie_zvirata"].', ';
            }

            if($row["alergie_leky"]=='Ne'){
        echo $row["alergie_leky"] = '';
            }else{
        echo $row["alergie_leky"].', ';
            }
 ?>
    <br>
    <label>Projevy alergií:</label>
   
    <?
            if($row["alergie_projevy_tekouci_ryma"]=='Ne'){
        echo $row["alergie_projevy_tekouci_ryma"] = '';
            }else{
        echo $row["alergie_projevy_tekouci_ryma"].', ';
            }
    
            if($row["alergie_projevy_intenzivni_kychani"]=='Ne'){
        echo $row["alergie_projevy_intenzivni_kychani"] = '';
            }else{
        echo $row["alergie_projevy_intenzivni_kychani"].', ';
            }

            if($row["alergie_projevy_krev_pri_smrkani"]=='Ne'){
        echo $row["alergie_projevy_krev_pri_smrkani"] = '';
            }else{
        echo $row["alergie_projevy_krev_pri_smrkani"].', ';
            }

            if($row["alergie_projevy_hnisave_rymy"]=='Ne'){
        echo $row["alergie_projevy_hnisave_rymy"] = '';
            }else{
        echo $row["alergie_projevy_hnisave_rymy"].', ';
            }

            if($row["alergie_projevy_kozni_projevy"]=='Ne'){
        echo $row["alergie_projevy_kozni_projevy"] = '';
            }else{
        echo $row["alergie_projevy_kozni_projevy"].', ';
            }

            if($row["alergie_projevy_svedeni_kuze"]=='Ne'){
        echo $row["alergie_projevy_svedeni_kuze"] = '';
            }else{
        echo $row["alergie_projevy_svedeni_kuze"].', ';
            }

            if($row["alergie_projevy_astma"]=='Ne'){
        echo $row["alergie_projevy_astma"] = '';
            }else{
        echo $row["alergie_projevy_astma"].', ';
            }

            if($row["alergie_projevy_bolesti_svalu"]=='Ne'){
        echo $row["alergie_projevy_bolesti_svalu"] = '';
            }else{
        echo $row["alergie_projevy_bolesti_svalu"].', ';
            }

            if($row["alergie_projevy_bolesti_hlavy"]=='Ne'){
        echo $row["alergie_projevy_bolesti_hlavy"] = '';
            }else{
        echo $row["alergie_projevy_bolesti_hlavy"].', ';
            }

            if($row["alergie_projevy_nespavost"]=='Ne'){
        echo $row["alergie_projevy_nespavost"] = '';
            }else{
        echo $row["alergie_projevy_nespavost"].', ';
            }

            if($row["alergie_projevy_otekla_ocni_vicka"]=='Ne'){
        echo $row["alergie_projevy_otekla_ocni_vicka"] = '';
            }else{
        echo $row["alergie_projevy_otekla_ocni_vicka"].', ';
            }

            if($row["alergie_projevy_svedeni_oci"]=='Ne'){
        echo $row["alergie_projevy_svedeni_oci"] = '';
            }else{
        echo $row["alergie_projevy_svedeni_oci"].', ';
            }

            if($row["alergie_projevy_slzeni_oci"]=='Ne'){
        echo $row["alergie_projevy_slzeni_oci"] = '';
            }else{
        echo $row["alergie_projevy_slzeni_oci"].', ';
            }

            if($row["alergie_projevy_kasel"]=='Ne'){
        echo $row["alergie_projevy_kasel"] = '';
            }else{
        echo $row["alergie_projevy_kasel"].', ';
            }

            if($row["alergie_projevy_kompletni_unava"]=='Ne'){
        echo $row["alergie_projevy_kompletni_unava"] = '';
            }else{
        echo $row["alergie_projevy_kompletni_unava"].', ';
            }  
        ?>   
   
    <br> <br>
   </div></div>
   <?
    }
}
//$conn->close(); ?>
<br>