

<?
$sql= "SELECT * 
FROM zdravi_dve_onemocneni WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
$dve_onemocneni = $row["dve_onemocneni"];  
}

if (strlen($dve_onemocneni) == 0){
  $dve_onemocneni = 'Žádný záznam';
}

?>

<br>
<div class="row">
    <div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Dvě nejvíce obtežující onemocnění</h4>
    <div class="row">
    <div class="col-sm-12">
    <textarea class="form-control" id="dve_onemocneni" name="dve_onemocneni" placeholder="" rows="2" maxlength="250"  style="background-color:#FFFFFF;" readonly><? echo $dve_onemocneni;?></textarea>
    </div>
    </div>
    <br>
    </div>
</div>
<br>
<?  } ?>

<br><br>
</div>
