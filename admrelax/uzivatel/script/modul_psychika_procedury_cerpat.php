<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");
$psychika_procedury_id= htmlspecialchars(trim("$_POST[psychika_procedury_id]"));
$prihlaseny_uzivatel_form = addslashes(htmlspecialchars(trim("$_POST[prihlaseny_uzivatel]")));


require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";


$sql = "UPDATE psychika_procedury SET 
stav_procedury = 2,
prihlaseny_uzivatel = '$prihlaseny_uzivatel_form',
datum = NOW()
WHERE psychika_procedury_id = $psychika_procedury_id LIMIT 1";




if ($conn->query($sql) === TRUE) {    
} else {
echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
}  


require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT * FROM psychika_procedury WHERE psychika_procedury_id = $psychika_procedury_id LIMIT 1";
$result = $conn->query($sql);
while($radek = $result->fetch_assoc()) {

    if($radek["stav_procedury"] == 2 || $radek["stav_procedury"] == 3 || $radek["stav_procedury"] == 4){
        $stav_pole = 'readonly';
        $stav_seznam = 'disabled';
        }else{
        $stav_pole = '';
        $stav_seznam = '';       
        }   

  if($radek["stav_procedury"] == 1){
    $radek["stav_procedury"] = 'Naplánováno';
    $procedura_stav_barva = 'a1facd';
    $tlacitka = '</form>
    <button type="button" class="btn btn-primary btn-sm">Čerpat proceduru</button>&nbsp;&nbsp;
    <button type="button" class="btn btn-success btn-sm">Přeplánovat proceduru</button>&nbsp;&nbsp;
    <button type="button" class="btn btn-warning btn-sm" onclick="loadPlanovanaProceduraStornoKlient'.$radek["psychika_procedury_id"].'()">Storno procedury - kientem</button>&nbsp;&nbsp;
    <button type="button" class="btn btn-info btn-sm" onclick="loadPlanovanaProceduraStornoRelax'.$radek["psychika_procedury_id"].'()">Storno procedury - RELAXARTEM</button>&nbsp;&nbsp;
    <input type="hidden"  name="psychika_procedury_id" value="'.$radek["psychika_procedury_id"].'"><button type="button" class="btn btn-danger btn-sm" onclick="loadPlanovanaProceduraDelete'.$radek["psychika_procedury_id"].'()">Smazat naplánovanou proceduru</button>&nbsp;&nbsp;
    ';
    
    }else if ($radek["stav_procedury"] == 2){
    $radek["stav_procedury"] = 'Čerpáno';
    $procedura_stav_barva = 'bfb8fa'; 
    $tlacitka = '<input type="hidden" name="psychika_procedury_id" value="'.$radek["psychika_procedury_id"].'"></form>';
    $tlacitka .='<button type="button" class="btn btn-danger btn-sm" onclick="loadPlanovanaProceduraDelete'.$radek["psychika_procedury_id"].'()">Smazat naplánovanou proceduru</button>&nbsp;&nbsp;';
    
    }else if ($radek["stav_procedury"] == 3){
    $radek["stav_procedury"] = 'Stornováno klientem';
    $procedura_stav_barva = 'eee4a9';
    $tlacitka = '<input type="hidden"  name="psychika_procedury_id" value="'.$radek["psychika_procedury_id"].'"></form>
    <button type="button" class="btn btn-danger btn-sm" onclick="loadPlanovanaProceduraDelete'.$radek["psychika_procedury_id"].'()">Smazat naplánovanou proceduru</button>&nbsp;&nbsp;';    
    
  }else if ($radek["stav_procedury"] == 4){
    $radek["stav_procedury"] = 'Stornováno Relaxartem';
    $procedura_stav_barva = 'eee4a9';       
    $tlacitka = '<input type="hidden" name="psychika_procedury_id" value="'.$radek["psychika_procedury_id"].'"></form>
    <button type="button" class="btn btn-danger btn-sm" onclick="loadPlanovanaProceduraDelete'.$radek["psychika_procedury_id"].'()">Smazat naplánovanou proceduru</button>&nbsp;&nbsp;';

    }else{

      $radek["stav_procedury"] = 'XXXXXX';
    }
 
?>
<div id="psychika_procedury<? echo $radek["psychika_procedury_id"];?>">
<form id="modul_psychika_procedury_update<? echo $radek["psychika_procedury_id"];?>" name="modul_psychika_procedury_update<? echo $radek["psychika_procedury_id"];?>" method="post"> 
<div class="row">
<div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">

<div class="col-sm-3">
  <br>
  <label for="uzivatel">Datum procedury:</label>
  <input type="date" class="form-control form-control-sm" name="datum_procedury"  value = "<?echo $radek["datum_procedury"]; ?>" <? echo $stav_pole;?> required>
</div>  


<div class="col-sm-3">
  <br>
  <label for="uzivatel">Začátek procedury:</label>
  <? $radek["zacatek_procedury"] = substr($radek["zacatek_procedury"], 0, 5); ?>
  <input type="time" class="form-control form-control-sm"  name="zacatek_procedury" value = "<?echo $radek["zacatek_procedury"]; ?>" <? echo $stav_pole;?> required>
</div> 

<div class="col-sm-3">
  <br>
  <label for="uzivatel">Konec procedury:</label>
  <? $radek["konec_procedury"] = substr($radek["konec_procedury"], 0, 5); ?>
  <input type="time" class="form-control form-control-sm"  name="konec_procedury" value = "<?echo $radek["konec_procedury"]; ?>" readonly>
</div>

  
<div class="col-sm-3">
  <br>
  <label for="uzivatel">Délka procedury:</label>
  <select class="form-control" id="delka_procedury" name="delka_procedury" <? echo $stav_seznam;?> > 
  <option value="0"> Vyberte možnost</option> 

  <? 
  if ($radek["delka_procedury"] == 60){
  ?>
  <option value="60" selected>60 minut</option>
  <option value="75">75 minut</option>
  <option value="90">90 minut</option>
  <option value="105">105 minut</option>
  <option value="120">120 minut</option>
  <?
   }else if ($radek["delka_procedury"] == 75){
  ?>
  <option value="60">60 minut</option>
  <option value="75" selected>75 minut</option>
  <option value="90">90 minut</option>
  <option value="105">105 minut</option>
  <option value="120">120 minut</option>
  <?
   }else if ($radek["delka_procedury"] == 90){
  ?>
  <option value="60">60 minut</option>
  <option value="75">75 minut</option>
  <option value="90" selected>90 minut</option>
  <option value="105">105 minut</option>
  <option value="120">120 minut</option>
  <?
   }else if ($radek["delka_procedury"] == 105){
  ?>
  <option value="60">60 minut</option>
  <option value="75">75 minut</option>
  <option value="90">90 minut</option>
  <option value="105" selected>105 minut</option>
  <option value="120">120 minut</option>      
  <?
  }else{
 ?>
  <option value="60">60 minut</option>
  <option value="75">75 minut</option>
  <option value="90">90 minut</option>
  <option value="105">105 minut</option>
  <option value="120" selected>120 minut</option>
  <?  } ?>
 </select>
</div> 
</div>

</div>

<div class="row">
<div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
  <div class="col-sm-3">
  <br>
  <label for="uzivatel">Typ procedury:</label>
  <select class="form-control" id="typ_procedury" name="typ_procedury" <? echo $stav_seznam;?> required> 
  
  <? 
  if ($radek["typ_procedury"] == 0){
  ?>  
  <option value="0" selected>Vyberte možnost</option>
  <option value="1">osobní koučink</option>
  <option value="2">psychoterapie</option>
  <option value="3">kraniosakrální biodynamika</option>
  <?
   }else if ($radek["typ_procedury"] == 1){
  ?>  
  <option value="0">Vyberte možnost</option>
  <option value="1" selected>osobní koučink</option>
  <option value="2">psychoterapie</option>
  <option value="3">kraniosakrální biodynamika</option>    
  <?
   }else if ($radek["typ_procedury"] == 2){
  ?>    
  <option value="0">Vyberte možnost</option>
  <option value="1">osobní koučink</option>
  <option value="2" selected>psychoterapie</option>
  <option value="3">kraniosakrální biodynamika</option>     
  <?
  }else{
 ?>    
  <option value="0">Vyberte možnost</option>
  <option value="1">osobní koučink</option>
  <option value="2">psychoterapie</option>
  <option value="3" selected>kraniosakrální biodynamika</option>      
<?  } ?>
</select>
  </div> 
  
  <div class="col-sm-3">
  <br>  
  <label for="uzivatel">Lektor:</label>
  <select class="form-control" id="lektor_procedury" name="lektor_procedury" <? echo $stav_seznam;?> required> 
  <option value="0"> Vyberte možnost</option> 
  <?
      require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
      $sql1 = "SELECT * FROM lektor ORDER BY lektor_prijmeni";
      $result1 = $conn->query($sql1);

  while($radek1 = $result1->fetch_assoc()) {
  if ($radek1["lektor_id"] == $radek["lektor_procedury"]){
    echo '<option value="'.$radek1["lektor_id"].'" selected>'.$radek1["lektor_titul"]."&nbsp;".$radek1["lektor_prijmeni"]."&nbsp;".$radek1["lektor_jmeno"]."</option>\n";
  }else{
    echo '<option value="'.$radek1["lektor_id"].'">'.$radek1["lektor_titul"]."&nbsp;".$radek1["lektor_prijmeni"]."&nbsp;".$radek1["lektor_jmeno"]."</option>\n";
  }
}
 ?>
  </select>
  </div>

  <div class="col-sm-3">
  <br>
  <label for="uzivatel">Stav procedury:</label>
  <input type="text" class="form-control form-control-sm" name="stav_procedury" maxlength="10" value="<? echo $radek["stav_procedury"]; ?>" placeholder="Stav procedury"  readonly >
  </div>

  <div class="col-sm-3">
  <br>
  <label for="uzivatel">Záznam uložil: <? echo $radek["prihlaseny_uzivatel"]; ?></label>
  <input type="text" class="form-control form-control-sm" name="ulozeni_zaznamu" maxlength="10" value="<? echo $radek["datum"]; ?>" placeholder="" readonly >
  </div>


</div>

</div>



<div class="row">
<div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
<br>
<label for="uzivatel">Detail zaměření:</label>
<textarea class="form-control" id="detail_procedury" name="detail_procedury" rows="2" maxlength="600" placeholder="Popište detail zaměření" <? echo $stav_pole;?> required><? echo $radek["detail_procedury"];?></textarea>
<br>
</div>
</div>

<div class="row">
<div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
<? echo $tlacitka;?>
<br><br>

</div>
</div>
<br>    
</div>


<script>
function loadPlanovanaProceduraDelete<? echo $radek["psychika_procedury_id"];?>() {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
  document.getElementById("psychika_procedury<? echo $radek["psychika_procedury_id"];?>").innerHTML = this.responseText;
}
};

var  Psychika_procedury_delete_id =  document.modul_psychika_procedury_update<? echo $radek["psychika_procedury_id"];?>.psychika_procedury_id.value;
    datum_procedury =  document.modul_psychika_procedury_update<? echo $radek["psychika_procedury_id"];?>.datum_procedury.value;
    zacatek_procedury =  document.modul_psychika_procedury_update<? echo $radek["psychika_procedury_id"];?>.zacatek_procedury.value;
    konec_procedury =  document.modul_psychika_procedury_update<? echo $radek["psychika_procedury_id"];?>.konec_procedury.value;
    delka_procedury =  document.modul_psychika_procedury_update<? echo $radek["psychika_procedury_id"];?>.delka_procedury.value;
    typ_procedury =  document.modul_psychika_procedury_update<? echo $radek["psychika_procedury_id"];?>.typ_procedury.value;
    lektor_procedury =  document.modul_psychika_procedury_update<? echo $radek["psychika_procedury_id"];?>.lektor_procedury.value;
    Psychika_procedury_delete_id = Psychika_procedury_delete_id +"&psychika_procedury_id="+Psychika_procedury_delete_id ; 

   if (typ_procedury == 1){
    typ_slovne = "osobní koučink";

    }else if(typ_procedury == 2){
    typ_slovne = "psychoterapie";

    }else{
    typ_slovne = "kraniosakrální biodynamika";
     }

    if (confirm("Opravdu chcete smazat naplánovanouu proceduru?\n"+
    "\nDatum: "+datum_procedury+
    "\nZačátek procedury: "+zacatek_procedury+" "+
    "\nKonec procedury: "+konec_procedury+" "+
    "\nDélka procedury: "+delka_procedury+" minut"+
    "\nTyp procedury: "+typ_slovne) == true){

    xhttp.open("POST", "./script/modul_psychika_procedury_delete.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(Psychika_procedury_delete_id);

    }else{
      // bylo stisknuto STORNO  
  }

 }

</script>


<?
} 
$conn->close(); 
?>








