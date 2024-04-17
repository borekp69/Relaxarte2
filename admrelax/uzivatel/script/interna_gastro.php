<?
//require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT *,
CASE
WHEN interna_gastro_problemy_se_zlucnikem = 0 THEN 'Ne'
WHEN interna_gastro_problemy_se_zlucnikem = 1 THEN 'problémy se žlučníkem/žlučovými cestami'
END AS interna_gastro_problemy_se_zlucnikem,                                 	
CASE
WHEN interna_gastro_bolesti_zlucniku = 0 THEN 'Ne'
WHEN interna_gastro_bolesti_zlucniku = 1 THEN 'bolesti žlučníku'
END AS interna_gastro_bolesti_zlucniku,
CASE
WHEN interna_gastro_zlucove_kameny = 0 THEN 'Ne'
WHEN interna_gastro_zlucove_kameny = 1 THEN 'žlučové kameny'
END AS interna_gastro_zlucove_kameny,
CASE
WHEN interna_gastro_problemy_se_slinivkou = 0 THEN 'Ne'
WHEN interna_gastro_problemy_se_slinivkou = 1 THEN 'problémy se slinivkou'
END AS interna_gastro_problemy_se_slinivkou,
CASE
WHEN interna_gastro_postizeni_jater = 0 THEN 'Ne'
WHEN interna_gastro_postizeni_jater = 1 THEN 'postižení jater'
END AS interna_gastro_postizeni_jater,

CASE
WHEN interna_gastro_zácpy = 0 THEN 'Ne'
WHEN interna_gastro_zácpy = 1 THEN 'zácpy'
END AS interna_gastro_zácpy,
CASE
WHEN interna_gastro_prujmy = 0 THEN 'Ne'
WHEN interna_gastro_prujmy = 1 THEN 'průjmy'
END AS interna_gastro_prujmy,
CASE
WHEN interna_gastro_strevni_koliky = 0 THEN 'Ne'
WHEN interna_gastro_strevni_koliky = 1 THEN 'střevní koliky'
END AS interna_gastro_strevni_koliky,
CASE
WHEN interna_gastro_daveni = 0 THEN 'Ne'
WHEN interna_gastro_daveni = 1 THEN 'dávení'
END AS interna_gastro_daveni,
CASE
WHEN interna_gastro_zvraceni = 0 THEN 'Ne'
WHEN interna_gastro_zvraceni = 1 THEN 'zvracení'
END AS interna_gastro_zvraceni,

CASE
WHEN interna_gastro_nadymani = 0 THEN 'Ne'
WHEN interna_gastro_nadymani = 1 THEN 'nadýmání'
END AS interna_gastro_nadymani,
CASE
WHEN interna_gastro_strevni_polypy = 0 THEN 'Ne'
WHEN interna_gastro_strevni_polypy = 1 THEN 'střevní polypy'
END AS interna_gastro_strevni_polypy,
CASE
WHEN interna_gastro_zanety_strev = 0 THEN 'Ne'
WHEN interna_gastro_zanety_strev = 1 THEN 'záněty střev'
END AS interna_gastro_zanety_strev,
CASE
WHEN interna_gastro_zaludecni_vredy = 0 THEN 'Ne'
WHEN interna_gastro_zaludecni_vredy = 1 THEN 'žaludeční vředy'
END AS interna_gastro_zaludecni_vredy,
CASE
WHEN interna_gastro_bolesti_zaludku = 0 THEN 'Ne'
WHEN interna_gastro_bolesti_zaludku = 1 THEN 'bolesti žaludku'
END AS interna_gastro_bolesti_zaludku,
CASE
WHEN interna_gastro_divertikly = 0 THEN 'Ne'
WHEN interna_gastro_divertikly = 1 THEN 'divertikly'
END AS interna_gastro_divertikly,
CASE
WHEN interna_gastro_crohnova_nemoc = 0 THEN 'Ne'
WHEN interna_gastro_crohnova_nemoc = 1 THEN 'Crohnova nemoc'
END AS interna_gastro_crohnova_nemoc,
CASE
WHEN interna_gastro_branicní_kyla = 0 THEN 'Ne'
WHEN interna_gastro_branicní_kyla = 1 THEN 'brániční kýla'
END AS interna_gastro_branicní_kyla,
CASE
WHEN interna_gastro_triselna_kyla = 0 THEN 'Ne'
WHEN interna_gastro_triselna_kyla = 1 THEN 'tříselná kýla'
END AS interna_gastro_triselna_kyla,                        	
CASE
WHEN interna_gastro_pupecni_kyla = 0 THEN 'Ne'
WHEN interna_gastro_pupecni_kyla = 1 THEN 'pupeční kýla'
END AS interna_gastro_pupecni_kyla, 
CASE
WHEN interna_gastro_brisni_kyla = 0 THEN 'Ne'
WHEN interna_gastro_brisni_kyla = 1 THEN 'břišní kýla'
END AS interna_gastro_brisni_kyla, 
CASE
WHEN interna_gastro_paleni_zahy = 0 THEN 'Ne'
WHEN interna_gastro_paleni_zahy = 1 THEN 'pálení žáhy'
END AS interna_gastro_paleni_zahy,
CASE
WHEN interna_gastro_reflux = 0 THEN 'Ne'
WHEN interna_gastro_reflux = 1 THEN 'Reflux'
END AS interna_gastro_reflux
FROM  zdravi_interna_gastro
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>


      <label for="uzivatel">Problémy:</label>
<?       
     if ($row["interna_gastro_problemy_se_zlucnikem"] == 'Ne' 
        && $row["interna_gastro_bolesti_zlucniku"] == 'Ne' 
        && $row["interna_gastro_zlucove_kameny"] == 'Ne' 
        && $row["interna_gastro_problemy_se_slinivkou"] == 'Ne' && $row["interna_gastro_postizeni_jater"] == 'Ne' 
        && $row["interna_gastro_zácpy"] == 'Ne' && $row["interna_gastro_prujmy"] == 'Ne'
        && $row["interna_gastro_strevni_koliky"] == 'Ne' && $row["interna_gastro_daveni"] == 'Ne'
        && $row["interna_gastro_zvraceni"] == 'Ne' && $row["interna_gastro_nadymani"] == 'Ne'
        && $row["interna_gastro_strevni_polypy"] == 'Ne' && $row["interna_gastro_zanety_strev"] == 'Ne'
        && $row["interna_gastro_zaludecni_vredy"] == 'Ne' && $row["interna_gastro_bolesti_zaludku"] == 'Ne'
        && $row["interna_gastro_divertikly"] == 'Ne' && $row["interna_gastro_crohnova_nemoc"] == 'Ne'
        && $row["interna_gastro_branicní_kyla"] == 'Ne' && $row["interna_gastro_triselna_kyla"] == 'Ne'
        && $row["interna_gastro_pupecni_kyla"] == 'Ne' && $row["interna_gastro_brisni_kyla"] == 'Ne'
        && $row["interna_gastro_paleni_zahy"] == 'Ne' && $row["interna_gastro_reflux"] == 'Ne'                
     ){
     echo 'Žádný záznam o výskytu onemocnění';

      }else{

            if($row["interna_gastro_problemy_se_zlucnikem"]=='Ne'){
          echo $row["interna_gastro_problemy_se_zlucnikem"] = '';
            }else{
          echo $row["interna_gastro_problemy_se_zlucnikem"].', ';
            }

            if($row["interna_gastro_bolesti_zlucniku"]=='Ne'){
          echo $row["interna_gastro_bolesti_zlucniku"] = '';
            }else{
          echo $row["interna_gastro_bolesti_zlucniku"].', ';
            }

            if($row["interna_gastro_zlucove_kameny"]=='Ne'){
          echo $row["interna_gastro_zlucove_kameny"] = '';
            }else{
          echo $row["interna_gastro_zlucove_kameny"].', ';
            }

            if($row["interna_gastro_problemy_se_slinivkou"]=='Ne'){
          echo $row["interna_gastro_problemy_se_slinivkou"] = '';
            }else{
          echo $row["interna_gastro_problemy_se_slinivkou"].', ';
            }            

            if($row["interna_gastro_postizeni_jater"]=='Ne'){
          echo $row["interna_gastro_postizeni_jater"] = '';
            }else{
          echo $row["interna_gastro_postizeni_jater"].', ';
            }

            if($row["interna_gastro_zácpy"]=='Ne'){
          echo $row["interna_gastro_zácpy"] = '';
            }else{
          echo $row["interna_gastro_zácpy"].', ';
            }

            if($row["interna_gastro_prujmy"]=='Ne'){
          echo $row["interna_gastro_prujmy"] = '';
            }else{
          echo $row["interna_gastro_prujmy"].', ';
            }

            if($row["interna_gastro_strevni_koliky"]=='Ne'){
          echo $row["interna_gastro_strevni_koliky"] = '';
            }else{
          echo $row["interna_gastro_strevni_koliky"].', ';
            }

            if($row["interna_gastro_daveni"]=='Ne'){
          echo $row["interna_gastro_daveni"] = '';
            }else{
          echo $row["interna_gastro_daveni"].', ';
            }

            if($row["interna_gastro_zvraceni"]=='Ne'){
          echo $row["interna_gastro_zvraceni"] = '';
            }else{
          echo $row["interna_gastro_zvraceni"].', ';
            }

            if($row["interna_gastro_nadymani"]=='Ne'){
          echo $row["interna_gastro_nadymani"] = '';
            }else{
          echo $row["interna_gastro_nadymani"].', ';
            }

            if($row["interna_gastro_strevni_polypy"]=='Ne'){
          echo $row["interna_gastro_strevni_polypy"] = '';
            }else{
          echo $row["interna_gastro_strevni_polypy"].', ';
            }

            if($row["interna_gastro_zanety_strev"]=='Ne'){
          echo $row["interna_gastro_zanety_strev"] = '';
            }else{
          echo $row["interna_gastro_zanety_strev"].', ';
            }

            if($row["interna_gastro_zaludecni_vredy"]=='Ne'){
          echo $row["interna_gastro_zaludecni_vredy"] = '';
            }else{
          echo $row["interna_gastro_zaludecni_vredy"].', ';
            }

            if($row["interna_gastro_bolesti_zaludku"]=='Ne'){
          echo $row["interna_gastro_bolesti_zaludku"] = '';
            }else{
          echo $row["interna_gastro_bolesti_zaludku"].', ';
            }

            if($row["interna_gastro_divertikly"]=='Ne'){
          echo $row["interna_gastro_divertikly"] = '';
            }else{
          echo $row["interna_gastro_divertikly"].', ';
            }

            if($row["interna_gastro_crohnova_nemoc"]=='Ne'){
          echo $row["interna_gastro_crohnova_nemoc"] = '';
            }else{
          echo $row["interna_gastro_crohnova_nemoc"].', ';
            }

            if($row["interna_gastro_branicní_kyla"]=='Ne'){
          echo $row["interna_gastro_branicní_kyla"] = '';
            }else{
          echo $row["interna_gastro_branicní_kyla"].', ';
            }

            if($row["interna_gastro_triselna_kyla"]=='Ne'){
          echo $row["interna_gastro_triselna_kyla"] = '';
            }else{
          echo $row["interna_gastro_triselna_kyla"].', ';
            }

            if($row["interna_gastro_pupecni_kyla"]=='Ne'){
          echo $row["interna_gastro_pupecni_kyla"] = '';
            }else{
          echo $row["interna_gastro_pupecni_kyla"].', ';
            }

            if($row["interna_gastro_brisni_kyla"]=='Ne'){
          echo $row["interna_gastro_brisni_kyla"] = '';
            }else{
          echo $row["interna_gastro_brisni_kyla"].', ';
            }

            if($row["interna_gastro_paleni_zahy"]=='Ne'){
          echo $row["interna_gastro_paleni_zahy"] = '';
            }else{
          echo $row["interna_gastro_paleni_zahy"].', ';
            }

            if($row["interna_gastro_reflux"]=='Ne'){
          echo $row["interna_gastro_reflux"] = '';
            }else{
          echo $row["interna_gastro_reflux"].', ';
            }


      }

?>
<br><br>
</div>
</div>
<?  }
//$conn->close(); ?>


<br>