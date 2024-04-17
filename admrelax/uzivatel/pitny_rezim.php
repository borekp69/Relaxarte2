<?
$sql = "SELECT *,
CASE
WHEN pitny_rezim_mnozstvi= 1 THEN 'Do 0,5 litru'
WHEN pitny_rezim_mnozstvi = 2 THEN 'Do 1 litru'
WHEN pitny_rezim_mnozstvi = 3 THEN 'Do 1,5 litru'
WHEN pitny_rezim_mnozstvi = 4 THEN 'Do 2 litrů'
WHEN pitny_rezim_mnozstvi = 5 THEN 'Více jak 2 litry'
END AS pitny_rezim_mnozstvi
FROM zdravi_pitny_rezim
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {

?>

<div class="col-sm-6">
    <label>Pitný režim: <? echo $row["pitny_rezim_mnozstvi"];?></label>&nbsp; 
  </div>
<?
}

?>