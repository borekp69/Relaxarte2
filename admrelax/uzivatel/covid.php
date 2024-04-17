<?
$sql = "SELECT *,
CASE
WHEN covid_ockovani = 0 THEN 'Ne'
WHEN covid_ockovani = 1 THEN 'Ano'
END AS covid_ockovani,

CASE
WHEN covid_nemoc = 0 THEN 'Ne'
WHEN covid_nemoc = 1 THEN 'Ano'
END AS covid_nemoc,

CASE
WHEN covid_prubeh = 0 THEN ''
WHEN covid_prubeh = 1 THEN 'Bezpříznakový'
WHEN covid_prubeh = 2 THEN 'Lehký'
WHEN covid_prubeh = 3 THEN 'Střední'
WHEN covid_prubeh = 4 THEN 'Těžký'
END AS covid_prubeh

FROM zdravi_covid
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {

?>

<div class="col-sm-4">
    <label>Očkování: <? echo $row["covid_ockovani"];?></label>&nbsp; 
  </div>

  <div class="col-sm-4">
    <label>Prodělaná nemoc: <? echo $row["covid_nemoc"];?></label>&nbsp; 
  </div>

  <div class="col-sm-4">
    <label>Průběh nemoci: <? echo $row["covid_prubeh"];?></label>&nbsp; 
  </div>

<?
}
?>