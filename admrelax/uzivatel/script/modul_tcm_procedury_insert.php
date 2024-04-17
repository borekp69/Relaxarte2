<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");
$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));
$nahodne_cislo_form = addslashes(htmlspecialchars(trim("$_POST[nahodne_cislo]")));

$datum_procedury_form = addslashes(htmlspecialchars(trim("$_POST[datum_procedury]")));
$zacatek_procedury_form = addslashes(htmlspecialchars(trim("$_POST[zacatek_procedury]")));
$delka_procedury_form = addslashes(htmlspecialchars(trim("$_POST[delka_procedury]")));
$lektor_procedury_form = addslashes(htmlspecialchars(trim("$_POST[lektor_procedury]")));
$typ_procedury_form = addslashes(htmlspecialchars(trim("$_POST[typ_procedury]")));
$prihlaseny_uzivatel_form = addslashes(htmlspecialchars(trim("$_POST[prihlaseny_uzivatel]")));
$zacatek_procedury_form = $zacatek_procedury_form.':00';
$zacatek_procedury_form = date($zacatek_procedury_form);
$konec_procedury_form = date("H:i:s", strtotime($zacatek_procedury_form)+($delka_procedury_form*60));
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

//echo 'ID: '.$uzivatel_id.'<br>';
//echo 'datum_procedury_form:'.$datum_procedury_form.'<br>';
//echo 'zacatek_procedury_form:'.$zacatek_procedury_form.'<br>';
//echo 'konec_procedury_form:'.$konec_procedury_form.'<br>';
//echo 'delka_procedury_form:'.$delka_procedury_form.'<br>';
//echo 'lektor_procedury_form:'.$lektor_procedury_form.'<br>';
//echo 'prihlaseny_uzivatel_form:'.$prihlaseny_uzivatel_form.'<br>';
//echo 'diagnoza_procedury_form:'.$diagnoza_procedury_form.'<br>';
//echo 'akupunktura_procedury_form:'.$akupunktura_procedury_form.'<br>';
//echo 'subjektivni_pocit_klienta_procedury_form:'.$subjektivni_pocit_klienta_procedury_form.'<br>';
//echo 'jazyk_procedury_form:'.$jazyk_procedury_form.'<br>';
//echo 'puls_procedury_form:'.$puls_procedury_form.'<br>';
//echo 'leva_ruka_povrchovy_tenke_strevo_form:'.$leva_ruka_povrchovy_tenke_strevo_form.'<br>';
//echo 'leva_ruka_povrchovy_zlucnik_form:'.$leva_ruka_povrchovy_zlucnik_form.'<br>';
//echo 'leva_ruka_povrchovy_mocovy_mechyr_form:'.$leva_ruka_povrchovy_mocovy_mechyr_form.'<br>';
//echo 'leva_ruka_hluboky_srdce_form:'.$leva_ruka_hluboky_srdce_form.'<br>';
//echo 'leva_ruka_hluboky_jatra_form:'.$leva_ruka_hluboky_jatra_form.'<br>';
//echo 'leva_ruka_hluboky_ledviny_form:'.$leva_ruka_hluboky_ledviny_form.'<br>';
//echo 'prava_ruka_povrchovy_tluste_strevo_form:'.$prava_ruka_povrchovy_tluste_strevo_form.'<br>';
//echo 'prava_ruka_povrchovy_zaludek_form:'.$prava_ruka_povrchovy_zaludek_form.'<br>';
//echo 'prava_ruka_povrchovy_ohrivace_form:'.$prava_ruka_povrchovy_ohrivace_form.'<br>';
//echo 'prava_ruka_hluboky_plice_form:'.$prava_ruka_hluboky_plice_form.'<br>';
//echo 'prava_ruka_hluboky_slezina_slinivka_form:'.$prava_ruka_hluboky_slezina_slinivka_form.'<br>';
//echo 'prava_ruka_hluboky_sex_form:'.$prava_ruka_hluboky_sex_form.'<br>';

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "INSERT INTO tcm_procedury(
uzivatel_id,
datum_procedury,
zacatek_procedury,
konec_procedury,
delka_procedury,
typ_procedury,
lektor_procedury,
prihlaseny_uzivatel,
diagnoza_procedury,
akupunktura_procedury,
subjektivni_pocit_klienta_procedury,
jazyk_procedury,
puls_procedury,
leva_ruka_povrchovy_tenke_strevo,
leva_ruka_povrchovy_zlucnik,
leva_ruka_povrchovy_mocovy_mechyr,
leva_ruka_hluboky_srdce,
leva_ruka_hluboky_jatra,
leva_ruka_hluboky_ledviny,
prava_ruka_povrchovy_tluste_strevo,
prava_ruka_povrchovy_zaludek,
prava_ruka_povrchovy_ohrivace,
prava_ruka_hluboky_plice,
prava_ruka_hluboky_slezina_slinivka,
prava_ruka_hluboky_sex,
datum
   )
VALUES (
'$uzivatel_id', 
'$datum_procedury_form',
'$zacatek_procedury_form',
'$konec_procedury_form',
'$delka_procedury_form',
'$typ_procedury_form',
'$lektor_procedury_form',
'$prihlaseny_uzivatel_form',
'$diagnoza_procedury_form',
'$akupunktura_procedury_form',
'$subjektivni_pocit_klienta_procedury_form',
'$jazyk_procedury_form',
'$puls_procedury_form',
'$leva_ruka_povrchovy_tenke_strevo_form',
'$leva_ruka_povrchovy_zlucnik_form',
'$leva_ruka_povrchovy_mocovy_mechyr_form',
'$leva_ruka_hluboky_srdce_form',
'$leva_ruka_hluboky_jatra_form',
'$leva_ruka_hluboky_ledviny_form',
'$prava_ruka_povrchovy_tluste_strevo_form',
'$prava_ruka_povrchovy_zaludek_form.',
'$prava_ruka_povrchovy_ohrivace_form',
'$prava_ruka_hluboky_plice_form',
'$prava_ruka_hluboky_slezina_slinivka_form',
'$prava_ruka_hluboky_sex_form',
NOW() 
       )";       

if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }



?>





<div id="tcm_procedury">
<form id="modul_tcm_procedury" name="modul_tcm_procedury" method="post"> 
  <div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
    
    <div class="col-sm-2">
      <br>
      <label for="uzivatel">Vyberte datum:</label>
      <input type="date" class="form-control form-control-sm" name="datum_procedury"  value = "" required>
    </div>  


    <div class="col-sm-2">
      <br>
      <label for="uzivatel">Vyberte začátek:</label>
      <input type="time" class="form-control form-control-sm"  name="zacatek_procedury" required>
    </div> 
   
    




    <div class="col-sm-2">
      <br>
      <label for="uzivatel">Vyberte délku:</label>
      <select class="form-control" id="delka_procedury" name="delka_procedury" required> 
      <option value="0"> Vyberte možnost</option> 
      <option value="30">30 minut</option>
      <option value="40">40 minut</option>
      <option value="60">60 minut</option>
      <option value="75">75 minut</option>
      <option value="90">90 minut</option>
      <option value="105">105 minut</option>
      <option value="120">120 minut</option>
      </select>
    </div> 

    <div class="col-sm-3">
      <br>
      <label for="uzivatel">Typ procedury:</label>
      <select class="form-control" id="typ_procedury" name="typ_procedury" required> 
      <option value="0"> Vyberte možnost</option> 
      <option value="1">Vstupní diagnostika TČM + Akupunktura</option>
      <option value="2">Navazující konzultace TČM + Akupunktura</option>
      <option value="3">Akutní konzultace + Akupunktura</option>
      <option value="4">Konzultace</option>
      </select>
    </div> 

    <div class="col-sm-3">
      <br>
      <label for="uzivatel">Vyberte lektora:</label>
      <select class="form-control" id="lektor_procedury" name="lektor_procedury" required> 
      <option value="0"> Vyberte možnost</option> 
      <?
      require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
      $sql = "SELECT * FROM lektor ORDER BY lektor_prijmeni";
      $result = $conn->query($sql);
      while($radek = $result->fetch_assoc()) {
     echo '<option value="'.$radek["lektor_id"].'">'.$radek["lektor_titul"]."&nbsp;".$radek["lektor_prijmeni"]."&nbsp;".$radek["lektor_jmeno"]."</option>\n";
      } 
      $conn->close();
     ?>
    </select>
    </div>
 </div>
  </div>




  <div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
    <br>
    <label for="uzivatel">Diagnoza:</label>
    <textarea class="form-control" id="tcm_diagnoza" name="tcm_diagnoza" rows="1" maxlength="600" placeholder="Diagnoza"></textarea>
    </div>
</div>   

<div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
    <br>
    <label for="uzivatel">Akupunktura:</label>
    <textarea class="form-control" id="tcm_akupunktura" name="tcm_akupunktura" rows="1" maxlength="600" placeholder="Akupunktura"></textarea>
    </div>
</div>
 
 <div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
    <br>
    <label for="uzivatel">TČM subjektivní pocit klienta:</label>
    <textarea class="form-control" id="tcm_subjektivni_pocit_klienta" name="tcm_subjektivni_pocit_klienta" rows="1" maxlength="600" placeholder="TČM subjektivní pocit klienta"></textarea>
    </div>
</div>

<div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
    <br>
    <label for="uzivatel">Jazyk:</label>
    <textarea class="form-control" id="tcm_jazyk" name="tcm_jazyk" rows="1" maxlength="600" placeholder="Jazyk"></textarea>
    </div>
</div>



<div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
    <br>
    <label for="uzivatel">Puls:</label>
    <textarea class="form-control" id="tcm_puls" name="tcm_puls" rows="1" maxlength="600" placeholder="Puls"></textarea>
    <br>
    </div>
  </div>


  <div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
    <label for="uzivatel">Levá ruka</label>
  
    </div>
 </div>

      <div class="row">
        <div class="col-sm-12" style="background-color:#DBDBDB;">
        <div class="col-sm-4">
        <label for="uzivatel">Povrchový - Tenké střevo</label>
        <textarea class="form-control" id="tcm_leva_ruka_povrchovy_tenke_strevo" name="tcm_leva_ruka_povrchovy_tenke_strevo" rows="1" maxlength="100" placeholder="Povrchový - Tenké střevo"></textarea>
        </div>
    
        <div class="col-sm-4">
        <label for="uzivatel">Povrchový - Žlučník</label>
        <textarea class="form-control" id="tcm_leva_ruka_povrchovy_zlucnik" name="tcm_leva_ruka_povrchovy_zlucnik" rows="1" maxlength="100" placeholder="Povrchový - Žlučník"></textarea>
        </div>


        <div class="col-sm-4">
        <label for="uzivatel">Povrchový - Močový měchýř</label>
        <textarea class="form-control" id="tcm_leva_ruka_povrchovy_mocovy_mechyr" name="tcm_leva_ruka_povrchovy_mocovy_mechyr" rows="1" maxlength="100" placeholder="Povrchový - Močový měchýř"></textarea>
        </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12" style="background-color:#DBDBDB;">
        <br>
        <div class="col-sm-4">
        <label for="uzivatel">Hluboký - Srdce</label>
        <textarea class="form-control" id="tcm_leva_ruka_hluboky_srdce" name="tcm_leva_ruka_hluboky_srdce" rows="1" maxlength="100" placeholder="Hluboký - Srdce"></textarea>
        </div>
    
        <div class="col-sm-4">
        <label for="uzivatel">Hluboký - Játra</label>
        <textarea class="form-control" id="tcm_leva_ruka_hluboky_jatra" name="tcm_leva_ruka_hluboky_jatra" rows="1" maxlength="100" placeholder="Hluboký - Játra"></textarea>
        </div>

        <div class="col-sm-4">
        <label for="uzivatel">Hluboký - Ledviny</label>
        <textarea class="form-control" id="tcm_leva_ruka_hluboky_ledviny" name="tcm_leva_ruka_hluboky_ledviny" rows="1" maxlength="100" placeholder="Hluboký - Ledviny"></textarea>
        <br>
      </div>
      </div>
      </div>

    <div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
    <label for="uzivatel">Pravá ruka</label>
    </div>
    </div>

      <div class="row">
        <div class="col-sm-12" style="background-color:#DBDBDB;">
        <div class="col-sm-4">
        <label for="uzivatel">Povrchový - Tlusté střevo</label>
        <textarea class="form-control" id="tcm_prava_ruka_povrchovy_tluste_strevo" name="tcm_prava_ruka_povrchovy_tluste_strevo" rows="1" maxlength="100" placeholder="Povrchový - Tlusté střevo"></textarea>
        </div>
    
        <div class="col-sm-4">
        <label for="uzivatel">Povrchový - Žaludek</label>
        <textarea class="form-control" id="tcm_prava_ruka_povrchovy_zaludek" name="tcm_prava_ruka_povrchovy_zaludek" rows="1" maxlength="100" placeholder="Povrchový - Žaludek"></textarea>
        </div>

        <div class="col-sm-4">
        <label for="uzivatel">Povrchový - ohřívače</label>
        <textarea class="form-control" id="tcm_prava_ruka_povrchovy_ohrivace" name="tcm_prava_ruka_povrchovy_ohrivace" rows="1" maxlength="100" placeholder="Povrchový - ohřívače"></textarea>
        </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12" style="background-color:#DBDBDB;">
        <br>
        <div class="col-sm-4">
        <label for="uzivatel">Hluboký - Plíce</label>
        <textarea class="form-control" id="tcm_prava_ruka_hluboky_plice" name="tcm_prava_ruka_hluboky_plice" rows="1" maxlength="100" placeholder="Hluboký - Plíce"></textarea>
        </div>
    
        <div class="col-sm-4">
        <label for="uzivatel">Hluboký - Slezina, slinivka</label>
        <textarea class="form-control" id="tcm_prava_ruka_hluboky_slezina_slinivka" name="tcm_prava_ruka_hluboky_slezina_slinivka" rows="1" maxlength="100" placeholder="Hluboký - Slezina, slinivka"></textarea>
        </div>


        <div class="col-sm-4">
        <label for="uzivatel">Hluboký - Oběh - sex</label>
        <textarea class="form-control" id="tcm_prava_ruka_hluboky_sex" name="tcm_prava_ruka_hluboky_sex" rows="1" maxlength="100" placeholder="Hluboký - Oběh - sex"></textarea>
     <br>
      </div>
     </div>
      </div>
</form> 
    <br>
    <button type="submit" class="btn btn-success btn-sm"  onclick="loadPlanovanaProceduraTCM()">&nbsp;&nbsp;Uložit plánovanou proceduru&nbsp;&nbsp;</button>
    <br>

</div>
<br>

<?
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT * FROM tcm_procedury WHERE tmp_procedury = 0 AND uzivatel_id = $uzivatel_id";
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

    
    }else if ($radek["stav_procedury"] == 2){
    $radek["stav_procedury"] = 'Čerpáno';

    
    }else if ($radek["stav_procedury"] == 3){
    $radek["stav_procedury"] = 'Stornováno klientem';
    $procedura_stav_barva = 'eee4a9';

    
  }else if ($radek["stav_procedury"] == 4){
    $radek["stav_procedury"] = 'Stornováno Relaxartem';
    $procedura_stav_barva = 'eee4a9';       


    }else{

      $radek["stav_procedury"] = 'Chyba, neočekávaný parametr';
    }



?>


<div id="tcm_procedury">
<div class="row">
    <div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
      <div class="col-sm-3">
      <br>
    <label for="uzivatel">Datum procedury:</label>
    <input type="date" class="form-control form-control-sm" name="datum_procedury"  value = "<?echo $radek["datum_procedury"]; ?>" <? echo $stav_pole;?> readonly>
  </div>  


  <div class="col-sm-3">
    <br>
    <label for="uzivatel">Začátek procedury:</label>
    <? $radek["zacatek_procedury"] = substr($radek["zacatek_procedury"], 0, 5); ?>
    <input type="time" class="form-control form-control-sm"  name="zacatek_procedury" value = "<?echo $radek["zacatek_procedury"]; ?>" <? echo $stav_pole;?> readonly> 
  </div> 

  <div class="col-sm-3">
    <br>
    <label for="uzivatel">Konec procedury:</label>
    <? $radek["konec_procedury"] = substr($radek["konec_procedury"], 0, 5); ?>
    <input type="time" class="form-control form-control-sm"  name="konec_procedury" value = "<?echo $radek["konec_procedury"]; ?>" <? echo $stav_pole;?> readonly>
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
</div>





<div class="row">
    <div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
    <? echo $tlacitka;?>
    <br><br>
    
  </div>
    </div>














  <?
   } 
   $conn->close(); 
?>





















