<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");
$tcm_procedury_id= htmlspecialchars(trim("$_POST[tcm_procedury_id]"));
$prihlaseny_uzivatel_form = addslashes(htmlspecialchars(trim("$_POST[prihlaseny_uzivatel]")));

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";


$sql = "UPDATE tcm_procedury SET stav_procedury = 4,
prihlaseny_uzivatel = '$prihlaseny_uzivatel_form',
datum = NOW()
WHERE tcm_procedury_id = $tcm_procedury_id LIMIT 1";




if ($conn->query($sql) === TRUE) {    
} else {
echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
}  




require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT * FROM tcm_procedury WHERE tcm_procedury_id = $tcm_procedury_id LIMIT 1";
$result = $conn->query($sql);
while($radek = $result->fetch_assoc()) {

    if($radek["stav_procedury"] == 2 || $radek["stav_procedury"] == 3 || $radek["stav_procedury"] == 4){
    $stav_pole = 'readonly';
    }else{
    $stav_pole = '';
    }
  
    if($radek["stav_procedury"] == 1){
      $radek["stav_procedury"] = 'Naplánováno';
      $procedura_stav_barva = 'a1facd';
      $tlacitka = '</form>
      <button type="button" class="btn btn-primary btn-sm" onclick="loadPlanovanaProceduraTCMCerpat'.$radek["tcm_procedury_id"].'()">Čerpat proceduru</button>&nbsp;&nbsp;
      <button type="button" class="btn btn-warning btn-sm" onclick="loadPlanovanaProceduraTCMStornoKlient'.$radek["tcm_procedury_id"].'()">Storno procedury - kientem</button>&nbsp;&nbsp;
      <button type="button" class="btn btn-info btn-sm" onclick="loadPlanovanaProceduraTCMStornoRelax'.$radek["tcm_procedury_id"].'()">Storno procedury - RELAXARTEM</button>&nbsp;&nbsp;
      <input type="hidden"  name="tcm_procedury_id" value="'.$radek["tcm_procedury_id"].'"><button type="button" class="btn btn-danger btn-sm" onclick="loadPlanovanaProceduraTCMDelete'.$radek["tcm_procedury_id"].'()">Smazat naplánovanou proceduru</button>&nbsp;&nbsp;
      ';
      
      }else if ($radek["stav_procedury"] == 2){
      $radek["stav_procedury"] = 'Čerpáno';
      $procedura_stav_barva = 'bfb8fa'; 
      $tlacitka = '<input type="hidden" name="tcm_procedury_id" value="'.$radek["tcm_procedury_id"].'"></form>';
      $tlacitka .='<button type="button" class="btn btn-danger btn-sm" onclick="loadPlanovanaProceduraTCMDelete'.$radek["tcm_procedury_id"].'()">Smazat naplánovanou proceduru</button>&nbsp;&nbsp;';
      
      }else if ($radek["stav_procedury"] == 3){
      $radek["stav_procedury"] = 'Stornováno klientem';
      $procedura_stav_barva = 'eee4a9';
      $tlacitka = '<input type="hidden"  name="tcm_procedury_id" value="'.$radek["tcm_procedury_id"].'"></form>
      <button type="button" class="btn btn-danger btn-sm" onclick="loadPlanovanaProceduraTCMDelete'.$radek["tcm_procedury_id"].'()">Smazat naplánovanou proceduru</button>&nbsp;&nbsp;';    
      
    }else if ($radek["stav_procedury"] == 4){
      $radek["stav_procedury"] = 'Stornováno Relaxartem';
      $procedura_stav_barva = 'eee4a9';       
      $tlacitka = '<input type="hidden" name="tcm_procedury_id" value="'.$radek["tcm_procedury_id"].'"></form>
      <button type="button" class="btn btn-danger btn-sm" onclick="loadPlanovanaProceduraTCMDelete'.$radek["tcm_procedury_id"].'()">Smazat naplánovanou proceduru</button>&nbsp;&nbsp;';

    }else if ($radek["stav_procedury"] == 5){
      $radek["stav_procedury"] = 'Expirovaný termín';
      $procedura_stav_barva = 'f48868';       
      $tlacitka = '<input type="hidden" name="tcm_procedury_id" value="'.$radek["tcm_procedury_id"].'"></form>
      <button type="button" class="btn btn-danger btn-sm" onclick="loadPlanovanaProceduraTCMDelete'.$radek["tcm_procedury_id"].'()">Smazat naplánovanou proceduru</button>&nbsp;&nbsp;';


      }else{
  
        $radek["stav_procedury"] = 'XXXXXX';
      }
?>
<div id="tcm_procedury<? echo $radek["tcm_procedury_id"];?>">
<form id="modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>" name="modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>" method="post"> 
<div class="row">
<div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">

<div class="col-sm-3">
<br>
<label for="uzivatel">Datum procedury:</label>
<input type="date" class="form-control form-control-sm" name="datum_procedury"  value = "<?echo $radek["datum_procedury"]; ?>" readonly >
</div>  


<div class="col-sm-3">
<br>
<label for="uzivatel">Začátek procedury:</label>
<? $radek["zacatek_procedury"] = substr($radek["zacatek_procedury"], 0, 5); ?>
<input type="time" class="form-control form-control-sm"  name="zacatek_procedury" value = "<?echo $radek["zacatek_procedury"]; ?>" readonly> 
</div> 

<div class="col-sm-3">
<br>
<label for="uzivatel">Konec procedury:</label>
<? $radek["konec_procedury"] = substr($radek["konec_procedury"], 0, 5); ?>
<input type="time" class="form-control form-control-sm"  name="konec_procedury" value = "<?echo $radek["konec_procedury"]; ?>"readonly>
</div>


<div class="col-sm-3">
<br>
<label for="uzivatel">Délka procedury:</label>
<select class="form-control" id="delka_procedury" name="delka_procedury" disabled> 
<option value="0"> Vyberte možnost</option> 

<? 
if ($radek["delka_procedury"] == 30){
?>
<option value="30" selected>30 minut</option>
<option value="40">40 minut</option>
<option value="60">60 minut</option>
<option value="75">75 minut</option>
<option value="90">90 minut</option>
<option value="105">105 minut</option>
<option value="120">120 minut</option>       
<?
 }else if ($radek["delka_procedury"] == 40){
?>
<option value="30">30 minut</option>
<option value="40" selected>40 minut</option>
<option value="60">60 minut</option>
<option value="75">75 minut</option>
<option value="90">90 minut</option>
<option value="105">105 minut</option>
<option value="120">120 minut</option>  
<?
 }else if ($radek["delka_procedury"] == 60){
?>
<option value="30">30 minut</option>
<option value="40">40 minut</option>
<option value="60" selected>60 minut</option>
<option value="75">75 minut</option>
<option value="90">90 minut</option>
<option value="105">105 minut</option>
<option value="120">120 minut</option>
<?
 }else if ($radek["delka_procedury"] == 75){
?>
 <option value="30">30 minut</option>
<option value="40">40 minut</option>
<option value="60">60 minut</option>
<option value="75" selected>75 minut</option>
<option value="90">90 minut</option>
<option value="105">105 minut</option>
<option value="120">120 minut</option>
<?
 }else if ($radek["delka_procedury"] == 90){
?>
<option value="30">30 minut</option>
<option value="40">40 minut</option>
<option value="60">60 minut</option>
<option value="75">75 minut</option>
<option value="90" selected>90 minut</option>
<option value="105">105 minut</option>
<option value="120">120 minut</option>
<?
 }else if ($radek["delka_procedury"] == 105){
?>
<option value="30">30 minut</option>
<option value="40">40 minut</option>
<option value="60">60 minut</option>
<option value="75">75 minut</option>
<option value="90">90 minut</option>
<option value="105" selected>105 minut</option>
<option value="120">120 minut</option>      
<?
}else{
?>
<option value="30">30 minut</option>
<option value="40">40 minut</option>
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
<select class="form-control" id="typ_procedury" name="typ_procedury" disabled> 

<? 
if ($radek["typ_procedury"] == 0){
?>  
<option value="0" selected>Vyberte možnost</option>
<option value="1">Vstupní diagnostika TČM + Akupunktura</option>
<option value="2">Navazující konzultace TČM + Akupunktura</option>
<option value="3">Akutní konzultace + Akupunktura</option>
<option value="4">Konzultace</option>
<?
 }else if ($radek["typ_procedury"] == 1){
?>  
<option value="0">Vyberte možnost</option>
<option value="1" selected>Vstupní diagnostika TČM + Akupunktura</option>
<option value="2">Navazující konzultace TČM + Akupunktura</option>
<option value="3">Akutní konzultace + Akupunktura</option>
<option value="4">Konzultace</option> 


<?
 }else if ($radek["typ_procedury"] == 2){
?>    
<option value="0">Vyberte možnost</option>
<option value="1">Vstupní diagnostika TČM + Akupunktura</option>
<option value="2" selected>Navazující konzultace TČM + Akupunktura</option>
<option value="3">Akutní konzultace + Akupunktura</option>
<option value="4">Konzultace</option>     

<?
 }else if ($radek["typ_procedury"] == 3){
?>    
<option value="0">Vyberte možnost</option>
<option value="1">Vstupní diagnostika TČM + Akupunktura</option>
<option value="2">Navazující konzultace TČM + Akupunktura</option>
<option value="3" selected>Akutní konzultace + Akupunktura</option>
<option value="4">Konzultace</option>        
<?
}else{
?>    
<option value="0">Vyberte možnost</option>
<option value="1">Vstupní diagnostika TČM + Akupunktura</option>
<option value="2">Navazující konzultace TČM + Akupunktura</option>
<option value="3">Akutní konzultace + Akupunktura</option>
<option value="4" selected>Konzultace</option>       
<?  } ?>
</select>
</div> 

<div class="col-sm-3">
<br>  
<label for="uzivatel">Lektor:</label>
<select class="form-control" id="lektor_procedury" name="lektor_procedury" disabled> 
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
<input type="text" class="form-control form-control-sm" name="stav_procedury" maxlength="10" value="<? echo $radek["stav_procedury"]; ?>" placeholder="Stav procedury" readonly >
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
<label for="uzivatel">Diagnoza:</label>
<textarea class="form-control" id="tcm_diagnoza" name="tcm_diagnoza" rows="1" maxlength="600" placeholder="Diagnoza" readonly><? echo $radek["diagnoza_procedury"]; ?></textarea>
</div>
</div>    

<div class="row">
<div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
<br>
<label for="uzivatel">Akupunktura:</label>
<textarea class="form-control" id="tcm_diagnoza" name="tcm_akupunktura" rows="1" maxlength="600" placeholder="Akupunktura"readonly><? echo $radek["akupunktura_procedury"]; ?></textarea>
</div>
</div>

<div class="row">
<div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
<br>
<label for="uzivatel">TČM subjektivní pocit klienta:</label>
<textarea class="form-control" id="tcm_subjektivni_pocit_klienta" name="tcm_subjektivni_pocit_klienta" rows="1" maxlength="600" placeholder="TČM subjektivní pocit klienta" readonly><? echo $radek["subjektivni_pocit_klienta_procedury"]; ?></textarea>
</div>
</div>


<div class="row">
<div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
<br>
<label for="uzivatel">Jazyk:</label>
<textarea class="form-control" id="tcm_jazyk" name="tcm_jazyk" rows="1" maxlength="600" placeholder="Jazyk" readonly><? echo $radek["jazyk_procedury"]; ?></textarea>
</div>
</div>

<div class="row">
<div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
<br>
<label for="uzivatel">Puls:</label>
<textarea class="form-control" id="tcm_puls" name="tcm_puls" rows="1" maxlength="600" placeholder="Puls" readonly><? echo $radek["puls_procedury"]; ?></textarea>
</div>
</div>




<div class="row">
<div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
<label for="uzivatel">Levá ruka</label>

</div>
</div>



<div class="row">
  <div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
  <div class="col-sm-4">
  <label for="uzivatel">Povrchový - Tenké střevo</label>
  <textarea class="form-control" id="tcm_leva_ruka_povrchovy_tenke_strevo" name="tcm_leva_ruka_povrchovy_tenke_strevo" rows="1" maxlength="100" placeholder="Povrchový - Tenké střevo" readonly><? echo $radek["leva_ruka_povrchovy_tenke_strevo"]; ?></textarea>
  </div>

  <div class="col-sm-4">
  <label for="uzivatel">Povrchový - Žlučník</label>
  <textarea class="form-control" id="tcm_leva_ruka_povrchovy_zlucnik" name="tcm_leva_ruka_povrchovy_zlucnik" rows="1" maxlength="100" placeholder="Povrchový - Žlučník" readonly><? echo $radek["leva_ruka_povrchovy_zlucnik"]; ?></textarea>
  </div>


  <div class="col-sm-4">
  <label for="uzivatel">Povrchový - Močový měchýř</label>
  <textarea class="form-control" id="tcm_leva_ruka_povrchovy_mocovy_mechyr" name="tcm_leva_ruka_povrchovy_mocovy_mechyr" rows="1" maxlength="100" placeholder="Povrchový - Močový měchýř" readonly><? echo $radek["leva_ruka_povrchovy_mocovy_mechyr"]; ?></textarea>
  </div>
  </div>
</div>



<div class="row">
  <div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
  <br>
  <div class="col-sm-4">
  <label for="uzivatel">Hluboký - Srdce</label>
  <textarea class="form-control" id="tcm_leva_ruka_hluboky_srdce" name="tcm_leva_ruka_hluboky_srdce" rows="1" maxlength="100" placeholder="Hluboký - Srdce" readonly><? echo $radek["leva_ruka_hluboky_srdce"]; ?></textarea>
  </div>

  <div class="col-sm-4">
  <label for="uzivatel">Hluboký - Játra</label>
  <textarea class="form-control" id="tcm_leva_ruka_hluboky_jatra" name="tcm_leva_ruka_hluboky_jatra" rows="1" maxlength="100" placeholder="Hluboký - Játra" readonly><? echo $radek["leva_ruka_hluboky_jatra"]; ?></textarea>
  </div>


  <div class="col-sm-4">
  <label for="uzivatel">Hluboký - Ledviny</label>
  <textarea class="form-control" id="tcm_leva_ruka_hluboky_ledviny" name="tcm_leva_ruka_hluboky_ledviny" rows="1" maxlength="100" placeholder="Hluboký - Ledviny" readonly><? echo $radek["leva_ruka_hluboky_ledviny"]; ?></textarea>
  <br>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
<label for="uzivatel">Pravá ruka</label>
</div>
</div>

<div class="row">
  <div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
  <div class="col-sm-4">
  <label for="uzivatel">Povrchový - Tlusté střevo</label>
  <textarea class="form-control" id="tcm_prava_ruka_povrchovy_tluste_strevo" name="tcm_prava_ruka_povrchovy_tluste_strevo" rows="1" maxlength="100" placeholder="Povrchový - Tlusté střevo" readonly><? echo $radek["prava_ruka_povrchovy_tluste_strevo"]; ?></textarea>
  </div>

  <div class="col-sm-4">
  <label for="uzivatel">Povrchový - Žaludek</label>
  <textarea class="form-control" id="tcm_prava_ruka_povrchovy_zaludek" name="tcm_prava_ruka_povrchovy_zaludek" rows="1" maxlength="100" placeholder="Povrchový - Žaludek" readonly><? echo $radek["prava_ruka_povrchovy_zaludek"]; ?></textarea>
  </div>


  <div class="col-sm-4">
  <label for="uzivatel">Povrchový - ohřívače</label>
  <textarea class="form-control" id="tcm_prava_ruka_povrchovy_ohrivace" name="tcm_prava_ruka_povrchovy_ohrivace" rows="1" maxlength="100" placeholder="Povrchový - ohřívače" readonly><? echo $radek["prava_ruka_povrchovy_ohrivace"]; ?></textarea>
  </div>
  </div>
</div>



<div class="row">
  <div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
  <br>
  <div class="col-sm-4">
  <label for="uzivatel">Hluboký - Plíce</label>
  <textarea class="form-control" id="tcm_prava_ruka_hluboky_plice" name="tcm_prava_ruka_hluboky_plice" rows="1" maxlength="100" placeholder="Hluboký - Plíce" readonly><? echo $radek["prava_ruka_hluboky_plice"]; ?></textarea>
  </div>

  <div class="col-sm-4">
  <label for="uzivatel">Hluboký - Slezina, slinivka</label>
  <textarea class="form-control" id="tcm_prava_ruka_hluboky_slezina_slinivka" name="tcm_prava_ruka_hluboky_slezina_slinivka" rows="1" maxlength="100" placeholder="Hluboký - Slezina, slinivka" readonly><? echo $radek["prava_ruka_hluboky_slezina_slinivka"]; ?></textarea>
  </div>


  <div class="col-sm-4">
  <label for="uzivatel">Hluboký - Oběh - sex</label>
  <textarea class="form-control" id="tcm_prava_ruka_hluboky_sex" name="tcm_prava_ruka_hluboky_sex" rows="1" maxlength="100" placeholder="Hluboký - Oběh - sex" readonly><? echo $radek["prava_ruka_hluboky_sex"]; ?></textarea>
<br>
</div>
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

function loadPlanovanaProceduraTCMDelete<? echo $radek["tcm_procedury_id"];?>() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tcm_procedury<? echo $radek["tcm_procedury_id"];?>").innerHTML = this.responseText;
    }
  };
  
  var  TCM_procedury_delete_id =  document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.tcm_procedury_id.value;
       datum_procedury =  document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.datum_procedury.value;
       zacatek_procedury =  document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.zacatek_procedury.value;
       konec_procedury =  document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.konec_procedury.value;
       delka_procedury =  document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.delka_procedury.value;
       typ_procedury =  document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.typ_procedury.value;
       lektor_procedury =  document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.lektor_procedury.value;
       TCM_procedury_delete_id = TCM_procedury_delete_id +"&tcm_procedury_id="+TCM_procedury_delete_id ; 
       prihlaseny_uzivatel = "<? echo $_SESSION['uzivatel_jmeno_session'].' '.$_SESSION['uzivatel_prijmeni_session']; ?>"; 
       TCM_procedury_delete_id = TCM_procedury_delete_id + "&prihlaseny_uzivatel="+prihlaseny_uzivatel;

  
       if (typ_procedury == 1){
        typ_slovne = "Vstupní diagnostika TČM + Akupunktura";

        }else if(typ_procedury == 2){
        typ_slovne = "Navazující konzultace TČM + Akupunktura";

        }else if(typ_procedury == 3){
        typ_slovne = "Akutní konzultace + Akupunktura";
       
        }else{
        typ_slovne = "Konzultace";
         }

        if (confirm("Opravdu chcete smazat naplánovanouu proceduru?\n"+
        "\nDatum: "+datum_procedury+
        "\nZačátek procedury: "+zacatek_procedury+" "+
        "\nKonec procedury: "+konec_procedury+" "+
        "\nDélka procedury: "+delka_procedury+" minut"+
        "\nTyp procedury: "+typ_slovne) == true){

        xhttp.open("POST", "./script/modul_tcm_procedury_delete.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(TCM_procedury_delete_id);

        }else{
          // bylo stisknuto STORNO  
      }

     }

</script>


<?
} 
$conn->close(); 
?>








