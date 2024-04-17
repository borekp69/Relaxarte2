<?
//require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_zdravi_onkologie = "SELECT * FROM zdravi_onkologie WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result_zdravi_onkologie = $conn->query($sql_zdravi_onkologie);
$conn->close();
$pocet_zaznamu_zdravi_onkologie = mysqli_num_rows($result_zdravi_onkologie);


if ($pocet_zaznamu_zdravi_onkologie == 0){
?>
<h5>Uživatel zatím nevyplnil požadované informace.</h5>
<a href="krok_04_ulozeni.php?uzivatel_id=<? echo encrypt_decrypt('encrypt', $uzivatel_id);?>" type="button" class="btn btn-warning btn-sm">Doplnit data nyní</a>

<? } else {
$no_data = 'Nebyl nalezen žádný záznam!';
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT * FROM zdravi_onkologie WHERE uzivatel_id = $uzivatel_id  ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);

while($radek = $result->fetch_assoc()) {
?>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Onkologie</h4>
<?
if ($radek["onkologie"] == '0'){

?>
<div class="row">
<div class="col-sm-12">
<label for="uzivatel">Onkologická léčení:</label>
<textarea class="form-control" id="onkologie" name="onkologie" rows="1" maxlength="300" style="background-color:#FFFFFF;" readonly><?echo $no_data;?></textarea>
</div>
</div>

<?

}else{
?>
<div class="row">
<div class="col-sm-12">
<label for="uzivatel">Onkologická léčení:</label>
<textarea class="form-control" id="onkologie" name="onkologie" rows="3" maxlength="300" style="background-color:#FFFFFF;" readonly><?echo $radek["onkologie"];?></textarea>
</div>
</div>
<br>
<?
}
    }
        }
?>
<br>
</div></div>
<br>