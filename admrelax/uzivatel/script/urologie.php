<?
//require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT *,
CASE
WHEN urologie_infekce_mocovych_cest = 0 THEN 'Ne'
WHEN urologie_infekce_mocovych_cest = 1 THEN 'infekce močových cest'
END AS urologie_infekce_mocovych_cest,
CASE
WHEN urologie_infekce_ledvin = 0 THEN 'Ne'
WHEN urologie_infekce_ledvin = 1 THEN 'infekce ledvin'
END AS urologie_infekce_ledvin,
CASE
WHEN urologie_kameny = 0 THEN 'Ne'
WHEN urologie_kameny = 1 THEN 'kameny'
END AS urologie_kameny,
CASE
WHEN urologie_vady = 0 THEN 'Ne'
WHEN urologie_vady = 1 THEN 'vady'
END AS urologie_vady,
CASE
WHEN urologie_zvetseni_prostaty = 0 THEN 'Ne'
WHEN urologie_zvetseni_prostaty = 1 THEN 'zvětšení prostaty'
END AS urologie_zvetseni_prostaty

FROM zdravi_urologie
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>

      <label for="uzivatel">Problémy:</label>
<?       
     if ($row["urologie_infekce_mocovych_cest"] == 'Ne' 
     && $row["urologie_infekce_ledvin"] == 'Ne' 
     && $row["urologie_kameny"] == 'Ne'
     && $row["urologie_vady"] == 'Ne' 
     && $row["urologie_zvetseni_prostaty"] == 'Ne'           
     ){
     echo 'Žádný záznam o výskytu onemocnění';

      }else{

            if($row["urologie_infekce_mocovych_cest"]=='Ne'){
          echo $row["urologie_infekce_mocovych_cest"] = '';
            }else{
          echo $row["urologie_infekce_mocovych_cest"].', ';
            }
            
            if($row["urologie_infekce_ledvin"]=='Ne'){
          echo $row["urologie_infekce_ledvin"] = '';
            }else{
          echo $row["urologie_infekce_ledvin"].', ';
            }

            if($row["urologie_kameny"]=='Ne'){
          echo $row["urologie_kameny"] = '';
            }else{
          echo $row["urologie_kameny"].', ';
            }

            if($row["urologie_vady"]=='Ne'){
          echo $row["urologie_vady"] = '';
            }else{
          echo $row["urologie_vady"].', ';
            }

            if($row["urologie_zvetseni_prostaty"]=='Ne'){
          echo $row["urologie_zvetseni_prostaty"] = '';
            }else{
          echo $row["urologie_zvetseni_prostaty"].', ';
            }
       }
?>
<br><br>
</div>
</div>
<?  }
//$conn->close(); ?>
<br>
