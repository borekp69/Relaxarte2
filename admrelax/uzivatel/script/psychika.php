<?
$sql = "SELECT *,
CASE
WHEN psychiatrie_deprese = 0 THEN 'Ne'
WHEN psychiatrie_deprese = 1 THEN 'deprese'
END AS psychiatrie_deprese,
CASE
WHEN psychiatrie_nervozita = 0 THEN 'Ne'
WHEN psychiatrie_nervozita = 1 THEN 'nervozita'
END AS psychiatrie_nervozita,
CASE
WHEN psychiatrie_nespavost = 0 THEN 'Ne'
WHEN psychiatrie_nespavost = 1 THEN 'nespavost'
END AS psychiatrie_nespavost,
CASE
WHEN psychiatrie_nadmerne_poceni = 0 THEN 'Ne'
WHEN psychiatrie_nadmerne_poceni = 1 THEN 'nadměrné pocení'
END AS psychiatrie_nadmerne_poceni,
CASE
WHEN psychiatrie_unavovy_syndrom = 0 THEN 'Ne'
WHEN psychiatrie_unavovy_syndrom = 1 THEN 'únavový syndrom'
END AS psychiatrie_unavovy_syndrom,
CASE
WHEN psychiatrie_leceni = 0 THEN 'Ne'
WHEN psychiatrie_leceni = 1 THEN 'Ano'
END AS psychiatrie_leceni,
CASE
WHEN psychiatrie_zmena_pocasi = 0 THEN 'Ne'
WHEN psychiatrie_zmena_pocasi = 1 THEN 'Ano'
END AS psychiatrie_zmena_pocasi
FROM zdravi_psychiatrie
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";

$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {

?>
      <div class="row">
        <div class="col-sm-3">
        <label for="uzivatel">Léčbana na psychiatrii:</label>
        <?  echo $row["psychiatrie_leceni"]; ?>
        </div>
    
        <div class="col-sm-4">
        <label for="uzivatel">Zhoršující se  stav v závislosti na změně počasí:</label>
        <?  echo $row["psychiatrie_zmena_pocasi"]; ?>
        </div>
        <div class="col-sm-5" style="background-color:#E0E0E0;">
        <label for="uzivatel">Psychické problémy:</label>




<?

if ($row["psychiatrie_deprese"] == 'Ne' 
&& $row["psychiatrie_nespavost"] == 'Ne' 
&& $row["psychiatrie_nervozita"] == 'Ne'  
&& $row["psychiatrie_nadmerne_poceni"] == 'Ne' 
&& $row["psychiatrie_unavovy_syndrom"] == 'Ne' 
){
echo 'Žádný záznam o projevu';

 }else{

  if($row["psychiatrie_deprese"]=='Ne'){
    echo $row["psychiatrie_deprese"] = '';
      }else{
    echo $row["psychiatrie_deprese"].', ';
      }

    if($row["psychiatrie_nespavost"]=='Ne'){
      echo $row["psychiatrie_nespavost"] = '';
         }else{
      echo $row["psychiatrie_nespavost"].', ';
          }

    if($row["psychiatrie_nervozita"]=='Ne'){
            echo $row["psychiatrie_nervozita"] = '';
               }else{
            echo $row["psychiatrie_nervozita"].', ';
                }
     if($row["psychiatrie_nadmerne_poceni"]=='Ne'){
                  echo $row["psychiatrie_nadmerne_poceni"] = '';
                     }else{
                  echo $row["psychiatrie_nadmerne_poceni"].', ';
                      }
      if($row["psychiatrie_unavovy_syndrom"]=='Ne'){
                        echo $row["psychiatrie_unavovy_syndrom"] = '';
                           }else{
                        echo $row["psychiatrie_unavovy_syndrom"].', ';
                            }                          

 }
?>

        </div>
      </div>

<? }?>
      </div>
      </div>





<br>
