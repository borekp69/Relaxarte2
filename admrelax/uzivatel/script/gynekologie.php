<?
//require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT *,
CASE
WHEN gynekologie_tehotenstvi = 'ne' THEN 'ne'
WHEN gynekologie_tehotenstvi = 'normal' THEN 'ano - normální těhotenství'
WHEN gynekologie_tehotenstvi = 'riziko' THEN 'ano - rizikové těhotenství'
END AS gynekologie_tehotenstvi,
CASE
WHEN gynekologie_porody = 0 THEN 'Ne'
WHEN gynekologie_porody = 1 THEN 'porody'
END AS gynekologie_porody,
CASE
WHEN gynekologie_potraty = 0 THEN 'Ne'
WHEN gynekologie_potraty = 1 THEN 'potraty'
END AS gynekologie_potraty,
CASE
WHEN gynekologie_sterilita = 0 THEN 'Ne'
WHEN gynekologie_sterilita = 1 THEN 'sterilita'
END AS gynekologie_sterilita,
CASE
WHEN gynekologie_vytoky = 0 THEN 'Ne'
WHEN gynekologie_vytoky = 1 THEN 'výtoky'
END AS gynekologie_vytoky,
CASE
WHEN gynekologie_cysty = 0 THEN 'Ne'
WHEN gynekologie_cysty = 1 THEN 'cysty'
END AS gynekologie_cysty,
CASE
WHEN gynekologie_myomy = 0 THEN 'Ne'
WHEN gynekologie_myomy = 1 THEN 'myomy'
END AS gynekologie_myomy,
CASE
WHEN gynekologie_zanety = 0 THEN 'Ne'
WHEN gynekologie_zanety = 1 THEN 'záněty'
END AS gynekologie_zanety,
CASE
WHEN gynekologie_infekce = 0 THEN 'Ne'
WHEN gynekologie_infekce = 1 THEN 'infekce'
END AS gynekologie_infekce,
CASE
WHEN gynekologie_menstruace = 1 THEN 'žádná'
WHEN gynekologie_menstruace = 2 THEN 'nepravidelná'
WHEN gynekologie_menstruace = 3 THEN 'pravidelná'
END AS gynekologie_menstruace,
CASE
WHEN gynekologie_mnozstvi_krve = 0 THEN 'nic'
WHEN gynekologie_mnozstvi_krve = 1 THEN 'mnoho'
WHEN gynekologie_mnozstvi_krve = 2 THEN 'středně'
WHEN gynekologie_mnozstvi_krve = 3 THEN 'málo'
END AS gynekologie_mnozstvi_krve
FROM  zdravi_gynekologie
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";

$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>   
    
    
    <label for="uzivatel">Těhotenství v současné době:</label>
    <? echo $row["gynekologie_tehotenstvi"]; ?>
    <br>

    <label for="uzivatel">Gynekologické problémy:</label>
    <?
        
     if ($row["gynekologie_porody"] == 'Ne' && $row["gynekologie_potraty"] == 'Ne' 
     && $row["gynekologie_sterilita"] == 'Ne' && $row["gynekologie_vytoky"] == 'Ne' 
     && $row["gynekologie_cysty"] == 'Ne' && $row["gynekologie_myomy"] == 'Ne' 
     && $row["gynekologie_zanety"] == 'Ne' && $row["gynekologie_infekce"] == 'Ne'){
     echo 'Žádný záznam o výskytu onemocnění';

      }else{
            
            if($row["gynekologie_porody"]=='Ne'){
          echo $row["gynekologie_porody"] = '';
            }else{
          echo $row["gynekologie_porody"].', ';
            } 
    
            if($row["gynekologie_potraty"]=='Ne'){
          echo $row["gynekologie_potraty"] = '';
            }else{
          echo $row["gynekologie_potraty"].', ';
            }      
     
            if($row["gynekologie_sterilita"]=='Ne'){
          echo $row["gynekologie_sterilita"] = '';
            }else{
          echo $row["gynekologie_sterilita"].', ';
            } 
     
            if($row["gynekologie_vytoky"]=='Ne'){
          echo $row["gynekologie_vytoky"] = '';
            }else{
          echo $row["gynekologie_vytoky"].', ';
            }

            if($row["gynekologie_cysty"]=='Ne'){
          echo $row["gynekologie_cysty"] = '';
            }else{
          echo $row["gynekologie_cysty"].', ';
            }

            if($row["gynekologie_myomy"]=='Ne'){
          echo $row["gynekologie_myomy"] = '';
            }else{
          echo $row["gynekologie_myomy"].', ';
            } 

            if($row["gynekologie_zanety"]=='Ne'){
          echo $row["gynekologie_zanety"] = '';
            }else{
          echo $row["gynekologie_zanety"].', ';
            }             
            
            if($row["gynekologie_infekce"]=='Ne'){
          echo $row["gynekologie_infekce"] = '';
            }else{
          echo $row["gynekologie_infekce"].', ';
            }
     }           
     ?>
    
    
    <br>
    <label for="uzivatel">Menstruace:</label>    
    
<?
    if ($row["gynekologie_menstruace"] == 'žádná' && $row["gynekologie_mnozstvi_krve"] == 'nic'){
    echo 'Žádný záznam';
    
    }else{
    echo  $row["gynekologie_menstruace"]; ?>
    &nbsp;<label for="uzivatel">Množství krve:</label>&nbsp;<?echo $row["gynekologie_mnozstvi_krve"];?>
    &nbsp;<label for="uzivatel">Délka menstruace:&nbsp;</label><?echo $row["gynekologie_delka_menstruace"];?>&nbsp;(den/dní)
    <br>
    <label for="uzivatel">Bolesti během menstruace:&nbsp;</label><?echo $row["gynekologie_bolesti_behem_menstruace"];?>
 
<?  }

?>
<br> <br>
</div></div>
<?  }
//$conn->close(); ?>
<br>