<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");
$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));


$prihlaseny_uzivatel_form = addslashes(htmlspecialchars(trim("$_POST[prihlaseny_uzivatel]")));
$tcm_procedury_id = addslashes(htmlspecialchars(trim("$_POST[tcm_procedury_id]")));

$diagnoza_procedury_form = addslashes(htmlspecialchars(trim("$_POST[diagnoza_procedury]")));
$akupunktura_procedury_form = addslashes(htmlspecialchars(trim("$_POST[akupunktura_procedury]")));
$subjektivni_pocit_klienta_procedury_form = addslashes(htmlspecialchars(trim("$_POST[subjektivni_pocit_klienta_procedury]")));
$jazyk_procedury_form = addslashes(htmlspecialchars(trim("$_POST[jazyk_procedury]")));
$puls_procedury_form = addslashes(htmlspecialchars(trim("$_POST[puls_procedury]")));
$leva_ruka_povrchovy_tenke_strevo_form = addslashes(htmlspecialchars(trim("$_POST[leva_ruka_povrchovy_tenke_strevo]")));
$leva_ruka_povrchovy_zlucnik_form = addslashes(htmlspecialchars(trim("$_POST[leva_ruka_povrchovy_zlucnik]")));
$leva_ruka_povrchovy_mocovy_mechyr_form = addslashes(htmlspecialchars(trim("$_POST[leva_ruka_povrchovy_mocovy_mechyr]")));
$leva_ruka_hluboky_srdce_form = addslashes(htmlspecialchars(trim("$_POST[leva_ruka_hluboky_srdce]")));
$leva_ruka_hluboky_jatra_form = addslashes(htmlspecialchars(trim("$_POST[leva_ruka_hluboky_jatra]")));
$leva_ruka_hluboky_ledviny_form = addslashes(htmlspecialchars(trim("$_POST[leva_ruka_hluboky_ledviny]")));
$prava_ruka_povrchovy_tluste_strevo_form = addslashes(htmlspecialchars(trim("$_POST[prava_ruka_povrchovy_tluste_strevo]")));
$prava_ruka_povrchovy_zaludek_form = addslashes(htmlspecialchars(trim("$_POST[prava_ruka_povrchovy_zaludek]")));
$prava_ruka_povrchovy_ohrivace_form = addslashes(htmlspecialchars(trim("$_POST[prava_ruka_povrchovy_ohrivace]")));
$prava_ruka_hluboky_plice_form = addslashes(htmlspecialchars(trim("$_POST[prava_ruka_hluboky_plice]")));
$prava_ruka_hluboky_slezina_slinivka_form = addslashes(htmlspecialchars(trim("$_POST[prava_ruka_hluboky_slezina_slinivka]")));
$prava_ruka_hluboky_sex_form = addslashes(htmlspecialchars(trim("$_POST[prava_ruka_hluboky_sex]")));

//echo 'prihlaseny_uzivatel_form: '.$prihlaseny_uzivatel_form.'<br>';
//echo 'tcm_procedury_id: '.$tcm_procedury_id_form.'<br>';
//echo 'diagnoza_procedury_form: '.$diagnoza_procedury_form.'<br>';
//echo 'akupunktura_procedury_form: '.$akupunktura_procedury_form.'<br>';
//echo 'subjektivni_pocit_klienta_procedury_form: '.$subjektivni_pocit_klienta_procedury_form.'<br>';
//echo 'jazyk_procedury_form: '.$jazyk_procedury_form.'<br>';
//echo 'puls_procedury_form: '.$puls_procedury_form.'<br>';
//echo 'leva_ruka_povrchovy_tenke_strevo_form: '.$leva_ruka_povrchovy_tenke_strevo_form.'<br>';
//echo 'leva_ruka_povrchovy_zlucnik_form: '.$leva_ruka_povrchovy_zlucnik_form.'<br>';
//echo 'leva_ruka_povrchovy_mocovy_mechyr_form: '.$leva_ruka_povrchovy_mocovy_mechyr_form.'<br>';
//echo 'leva_ruka_hluboky_srdce_form: '.$leva_ruka_hluboky_srdce_form.'<br>';
//echo 'leva_ruka_hluboky_jatra_form: '.$leva_ruka_hluboky_jatra_form.'<br>';
//echo 'leva_ruka_hluboky_ledviny_form: '.$leva_ruka_hluboky_ledviny_form.'<br>';
//echo 'prava_ruka_povrchovy_tluste_strevo_form: '.$prava_ruka_povrchovy_tluste_strevo_form.'<br>';
//echo 'prava_ruka_povrchovy_zaludek_form: '.$prava_ruka_povrchovy_zaludek_form.'<br>';
//echo 'prava_ruka_povrchovy_ohrivace_form: '.$prava_ruka_povrchovy_ohrivace_form.'<br>';
//echo 'prava_ruka_hluboky_plice_form: '.$prava_ruka_hluboky_plice_form.'<br>';
//echo 'prava_ruka_hluboky_slezina_slinivka_form: '.$prava_ruka_hluboky_slezina_slinivka_form.'<br>';
//echo 'prava_ruka_hluboky_sex_form: '.$prava_ruka_hluboky_sex_form.'<br>';

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "UPDATE tcm_procedury SET 
diagnoza_procedury = '$diagnoza_procedury_form',
akupunktura_procedury = '$akupunktura_procedury_form',
subjektivni_pocit_klienta_procedury = '$subjektivni_pocit_klienta_procedury_form.',
jazyk_procedury = '$jazyk_procedury_form',
puls_procedury = '$puls_procedury_form',
leva_ruka_povrchovy_tenke_strevo = '$leva_ruka_povrchovy_tenke_strevo_form',
leva_ruka_povrchovy_zlucnik = '$leva_ruka_povrchovy_zlucnik_form',
leva_ruka_povrchovy_mocovy_mechyr = '$leva_ruka_povrchovy_mocovy_mechyr_form',
leva_ruka_hluboky_srdce = '$leva_ruka_hluboky_srdce_form',
leva_ruka_hluboky_jatra = '$leva_ruka_hluboky_jatra_form',
leva_ruka_hluboky_ledviny = '$leva_ruka_hluboky_ledviny_form',
prava_ruka_povrchovy_tluste_strevo = '$prava_ruka_povrchovy_tluste_strevo_form',
prava_ruka_povrchovy_zaludek = '$prava_ruka_povrchovy_zaludek_form',
prava_ruka_povrchovy_ohrivace = '$prava_ruka_povrchovy_ohrivace_form',
prava_ruka_hluboky_plice = '$prava_ruka_hluboky_plice_form',
prava_ruka_hluboky_slezina_slinivka = '$prava_ruka_hluboky_slezina_slinivka_form',
prava_ruka_hluboky_sex = '$prava_ruka_hluboky_sex_form',
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
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT * FROM tcm_procedury WHERE tcm_procedury_id = $tcm_procedury_id LIMIT 1";
$result = $conn->query($sql);
while($radek = $result->fetch_assoc()) {
    
    if($radek["stav_procedury"] == 1){
        $radek["stav_procedury"] = 'Naplánováno';
        $procedura_stav_barva = 'a1facd';

    }else if ($radek["stav_procedury"] == 2){
        $radek["stav_procedury"] = 'Čerpáno';
        $procedura_stav_barva = 'bfb8fa'; 

     }else if ($radek["stav_procedury"] == 3){
        $radek["stav_procedury"] = 'Stornováno klientem';
        $procedura_stav_barva = 'eee4a9';

     }else if ($radek["stav_procedury"] == 4){
        $radek["stav_procedury"] = 'Stornováno Relaxartem';
        $procedura_stav_barva = 'eee4a9';       

    }else if ($radek["stav_procedury"] == 5){
        $radek["stav_procedury"] = 'Expirovaný termín';
        $procedura_stav_barva = 'f48868';       

    }else{
    
          $radek["stav_procedury"] = 'XXXXXX';
          $procedura_stav_barva = 'a1facd';
        }
?>

<div id="tcm_proceduryAktualizace<? echo $radek["tcm_procedury_id"]; ?>">


<form id="modul_tcm_procedury_updateAktualizace<? echo $radek["tcm_procedury_id"]; ?>" name="modul_tcm_procedury_updateAktualizace<? echo $radek["tcm_procedury_id"]; ?>" method="post"> 

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
<textarea class="form-control" id="tcm_diagnoza" name="tcm_diagnoza" rows="1" maxlength="600" placeholder="Diagnoza"><? echo $radek["diagnoza_procedury"]; ?></textarea>
</div>
</div>    

<div class="row">
<div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
<br>
<label for="uzivatel">Akupunktura:</label>
<textarea class="form-control" id="tcm_diagnoza" name="tcm_akupunktura" rows="1" maxlength="600" placeholder="Akupunktura"><? echo $radek["akupunktura_procedury"]; ?></textarea>
</div>
</div>

<div class="row">
<div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
<br>
<label for="uzivatel">TČM subjektivní pocit klienta:</label>
<textarea class="form-control" id="tcm_subjektivni_pocit_klienta" name="tcm_subjektivni_pocit_klienta" rows="1" maxlength="600" placeholder="TČM subjektivní pocit klienta"><? echo $radek["subjektivni_pocit_klienta_procedury"]; ?></textarea>
</div>
</div>


<div class="row">
<div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
<br>
<label for="uzivatel">Jazyk:</label>
<textarea class="form-control" id="tcm_jazyk" name="tcm_jazyk" rows="1" maxlength="600" placeholder="Jazyk"><? echo $radek["jazyk_procedury"]; ?></textarea>
</div>
</div>

<div class="row">
<div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
<br>
<label for="uzivatel">Puls:</label>
<textarea class="form-control" id="tcm_puls" name="tcm_puls" rows="1" maxlength="600" placeholder="Puls"><? echo $radek["puls_procedury"]; ?></textarea>
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
  <textarea class="form-control" id="tcm_leva_ruka_povrchovy_tenke_strevo" name="tcm_leva_ruka_povrchovy_tenke_strevo" rows="1" maxlength="100" placeholder="Povrchový - Tenké střevo"><? echo $radek["leva_ruka_povrchovy_tenke_strevo"]; ?></textarea>
  </div>

  <div class="col-sm-4">
  <label for="uzivatel">Povrchový - Žlučník</label>
  <textarea class="form-control" id="tcm_leva_ruka_povrchovy_zlucnik" name="tcm_leva_ruka_povrchovy_zlucnik" rows="1" maxlength="100" placeholder="Povrchový - Žlučník"><? echo $radek["leva_ruka_povrchovy_zlucnik"]; ?></textarea>
  </div>


  <div class="col-sm-4">
  <label for="uzivatel">Povrchový - Močový měchýř</label>
  <textarea class="form-control" id="tcm_leva_ruka_povrchovy_mocovy_mechyr" name="tcm_leva_ruka_povrchovy_mocovy_mechyr" rows="1" maxlength="100" placeholder="Povrchový - Močový měchýř"><? echo $radek["leva_ruka_povrchovy_mocovy_mechyr"]; ?></textarea>
  </div>
  </div>
</div>



<div class="row">
  <div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
  <br>
  <div class="col-sm-4">
  <label for="uzivatel">Hluboký - Srdce</label>
  <textarea class="form-control" id="tcm_leva_ruka_hluboky_srdce" name="tcm_leva_ruka_hluboky_srdce" rows="1" maxlength="100" placeholder="Hluboký - Srdce"><? echo $radek["leva_ruka_hluboky_srdce"]; ?></textarea>
  </div>

  <div class="col-sm-4">
  <label for="uzivatel">Hluboký - Játra</label>
  <textarea class="form-control" id="tcm_leva_ruka_hluboky_jatra" name="tcm_leva_ruka_hluboky_jatra" rows="1" maxlength="100" placeholder="Hluboký - Játra"><? echo $radek["leva_ruka_hluboky_jatra"]; ?></textarea>
  </div>


  <div class="col-sm-4">
  <label for="uzivatel">Hluboký - Ledviny</label>
  <textarea class="form-control" id="tcm_leva_ruka_hluboky_ledviny" name="tcm_leva_ruka_hluboky_ledviny" rows="1" maxlength="100" placeholder="Hluboký - Ledviny"><? echo $radek["leva_ruka_hluboky_ledviny"]; ?></textarea>
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
  <textarea class="form-control" id="tcm_prava_ruka_povrchovy_tluste_strevo" name="tcm_prava_ruka_povrchovy_tluste_strevo" rows="1" maxlength="100" placeholder="Povrchový - Tlusté střevo"><? echo $radek["prava_ruka_povrchovy_tluste_strevo"]; ?></textarea>
  </div>

  <div class="col-sm-4">
  <label for="uzivatel">Povrchový - Žaludek</label>
  <textarea class="form-control" id="tcm_prava_ruka_povrchovy_zaludek" name="tcm_prava_ruka_povrchovy_zaludek" rows="1" maxlength="100" placeholder="Povrchový - Žaludek"><? echo $radek["prava_ruka_povrchovy_zaludek"]; ?></textarea>
  </div>


  <div class="col-sm-4">
  <label for="uzivatel">Povrchový - ohřívače</label>
  <textarea class="form-control" id="tcm_prava_ruka_povrchovy_ohrivace" name="tcm_prava_ruka_povrchovy_ohrivace" rows="1" maxlength="100" placeholder="Povrchový - ohřívače"><? echo $radek["prava_ruka_povrchovy_ohrivace"]; ?></textarea>
  </div>
  </div>
</div>



<div class="row">
  <div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
  <br>
  <div class="col-sm-4">
  <label for="uzivatel">Hluboký - Plíce</label>
  <textarea class="form-control" id="tcm_prava_ruka_hluboky_plice" name="tcm_prava_ruka_hluboky_plice" rows="1" maxlength="100" placeholder="Hluboký - Plíce"><? echo $radek["prava_ruka_hluboky_plice"]; ?></textarea>
  </div>

  <div class="col-sm-4">
  <label for="uzivatel">Hluboký - Slezina, slinivka</label>
  <textarea class="form-control" id="tcm_prava_ruka_hluboky_slezina_slinivka" name="tcm_prava_ruka_hluboky_slezina_slinivka" rows="1" maxlength="100" placeholder="Hluboký - Slezina, slinivka"><? echo $radek["prava_ruka_hluboky_slezina_slinivka"]; ?></textarea>
  </div>


  <div class="col-sm-4">
  <label for="uzivatel">Hluboký - Oběh - sex</label>
  <textarea class="form-control" id="tcm_prava_ruka_hluboky_sex" name="tcm_prava_ruka_hluboky_sex" rows="1" maxlength="100" placeholder="Hluboký - Oběh - sex"><? echo $radek["prava_ruka_hluboky_sex"]; ?></textarea>
<br>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">

<br><br>

</div>
</div>
<br>


</div>






<?
} 
$conn->close(); 
?>












