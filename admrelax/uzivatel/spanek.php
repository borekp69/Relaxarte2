<?
$sql = "SELECT *,
CASE
WHEN spanek_sny = 1 THEN 'Ano'
WHEN spanek_sny = 2 THEN 'Ne'
WHEN spanek_sny = 3 THEN 'Má noční můry'
END AS spanek_sny,

CASE
WHEN spanek_kvalita = 1 THEN 'Budí se odpočatý'
WHEN spanek_kvalita = 2 THEN 'Budí se unavený'
WHEN spanek_kvalita = 3 THEN 'Budí se v průběhu noci'
END AS spanek_kvalita

FROM zdravi_spanek
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {

?>

<div class="col-sm-3">
    <label>Zdají se mi sny:</label><br>
    <? echo $row["spanek_sny"];?>
  </div>

  <div class="col-sm-2">
    <label>Délka spánku:</label><br>
    <? echo $row["spanek_delka"];?> hodin/y 
  </div>

  <div class="col-sm-4">
    <label>V kolik se běžně budíte:</label><br>
    <? echo $row["spanek_buzeni"];?> hodin 
  </div>

  <div class="col-sm-3">
    <label>Kvalita spánku: </label><br>
    <? echo $row["spanek_kvalita"];?> 
  </div>

<?
}
?>