<?
$sql = "SELECT *,
CASE
WHEN jidlo_mnozstvi= 1 THEN '1x denně'
WHEN jidlo_mnozstvi = 2 THEN '2x denně'
WHEN jidlo_mnozstvi = 3 THEN '3x denně'
WHEN jidlo_mnozstvi = 4 THEN '4x denně'
WHEN jidlo_mnozstvi = 5 THEN '5x denně'
WHEN jidlo_mnozstvi = 6 THEN '6x denně'
WHEN jidlo_mnozstvi = 7 THEN 'více než 6x denně'
WHEN jidlo_mnozstvi = 8 THEN 'Nepravidelná strava'
END AS jidlo_mnozstvi
FROM zdravi_jidlo
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {

?>

<div class="col-sm-6">
    <label>Stravovací režim: <? echo $row["jidlo_mnozstvi"] ; ?></label>&nbsp; 
  </div>
<?
}

?>