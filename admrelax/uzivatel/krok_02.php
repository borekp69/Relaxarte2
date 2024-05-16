<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php'; ?>
<h4>Sport a pohyb</h4>                                                                                                                          
<form action="krok_02_ulozeni.php" method="post">

<? if ($stav !== 'odeslano'){ ?>

<div class="row">
    <div class="col-sm-12" style="background-color:#f6e9cd;">
    <label for="uzivatel">Sportovní a pohybové aktivity:</label> 
    <? require "pripojeni_databaze.php";
    $sql = "SELECT * FROM seznam WHERE seznam_cislo = '4' ORDER BY seznam_poradi ASC"; 
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {  ?>  
        <div class="checkbox">
        <label><input type="checkbox" name="<?echo $row["seznam_name"];?>" value="1"><?echo $row["seznam_hodnota"];?></label>
        </div>
     <?  }
     $conn->close(); ?>    
     </div> 
</div> 

     <br><br>
     <label for="uzivatel">Pravidelné sportovní a pohybové aktivity:</label> 
    <? require "pripojeni_databaze.php";
    $sql = "SELECT * FROM seznam WHERE seznam_cislo = '44' ORDER BY seznam_poradi ASC"; 
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {  ?>  
<div class="row" style="background-color:#e3fad6;">
        <div class="col-sm-3">
        <div class="checkbox">
        <label><input type="checkbox" name="<?echo $row["seznam_name"];?>" value="1" id="My_<?echo $row["seznam_name"];?>" onclick="myFunction_<?echo $row["seznam_name"];?>()"><?echo $row["seznam_hodnota"];?></label>
        </div>
        </div> 
  
    <div class="col-sm-4" id="text_<?echo $row["seznam_name"];?>" style="display:none">  
    <select class="form-control" id="pravidelnost_<?echo $row["seznam_name"];?>" name="pravidelnost_<?echo $row["seznam_name"];?>">
    <option value="0"> -- Vyberte pravidelnost --</option>
    <? 
    require "pripojeni_databaze.php";
    $sql01 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
    $result01 = $conn->query($sql01);
    while($row01 = $result01->fetch_assoc()) {
    echo '<option value = "' .$row01["seznam_id"]. '">' . $row01["seznam_hodnota"]. "</option>\n"; 
       }
    ?>
    </select>
    </div> 
</div> 

<script>
function myFunction_<?echo $row["seznam_name"];?>() {
  var checkBox = document.getElementById("My_<?echo $row["seznam_name"];?>");
  var text = document.getElementById("text_<?echo $row["seznam_name"];?>");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>


    <?  }
    $conn->close(); ?>    
<br>
<div class="row" style="background-color:#ddf0f3;">
    <div class="col-sm-4" <?echo $chyba_joga_kurz;?>>
    <label for="uzivatel">Absolvoval jste někdy kurz ŠIVA jógy:</label>
    <select class="form-control" id="zobrazjoga" name="joga_kurz">
    <option value="0">Ne</option> 
    <option value="1">Ano</option>
    </select>
    <br>
    </div>     
    <div class="col-sm-5" <?echo $chyba_lektor;?>>
    <div class="form-group" id="jogaFieldGroupDiv">
    <label for="uzivatel">Pokud ano, uveďte prosím jméno lektora:</label>
    <input type="text" class="form-control form-control-sm" name="lektor" maxlength="50" value = "<?echo $uzivatel_lektor;?>" placeholder="Pokud nechcete uvést jméno lektora napište důvěrné">
    </div> 
    </div>
    <script src="./js/joga.js"></script>
</div> 

                <?
 // --------------------  Ověření formuláře -------------
               }else{ 
               ?>

<div class="row" style="display:none">
    <div class="col-sm-12" style="background-color:#f6e9cd;">
    <label for="uzivatel">Sportovní a pohybové aktivity:</label> 
        <div class="checkbox">
        <? if ($bezky == 1) {?>
        <label><input type="checkbox" name="bezky" value="1" checked>Bežky</label> 
        <?} else {?>
        <label><input type="checkbox" name="bezky" value="1">Bežky</label> 
        <? } ?>
        </div>
        <div class="checkbox">
        <? if ($brusle_zimni == 1) {?>
        <label><input type="checkbox" name="brusle_zimni" value="1" checked>Brusle zimní</label> 
        <?} else {?>
        <label><input type="checkbox" name="brusle_zimni" value="1">Brusle zimní</label> 
        <? } ?>
        </div>
        <div class="checkbox">
        <? if ($prace_na_zahrade == 1) {?>
        <label><input type="checkbox" name="prace_na_zahrade" value="1" checked>Práce na zahradě</label> 
        <?} else {?>
        <label><input type="checkbox" name="prace_na_zahrade" value="1">Práce na zahradě</label> 
        <? } ?>
        </div>
        <div class="checkbox">        
        <? if ($sjezd_lyze == 1) {?>
        <label><input type="checkbox" name="sjezd_lyze" value="1" checked>Sjezd lyže</label> 
        <?} else {?>
        <label><input type="checkbox" name="sjezd_lyze" value="1">Sjezd lyže</label> 
        <? } ?>
        </div>
        <div class="checkbox">        
        <? if ($skialpinismus == 1) {?>
        <label><input type="checkbox" name="skialpinismus" value="1" checked>Skialpinismus</label> 
        <?} else {?>
        <label><input type="checkbox" name="skialpinismus" value="1">Skialpinismus</label> 
        <? } ?>
        </div>         
    </div> 
</div> 



<br>
     <label for="uzivatel">Pravidelné sportovní a pohybové aktivity:</label>
<?
    function poslatSkryte($chyba, $aktivita, $pravidelnost, $form_name, $nazev)
    {
        if (strlen($chyba) == 0 && $aktivita == 1 && $pravidelnost > 0){
        echo '<div class="row" style="display:none">';
        echo '<input type="text" class="form-control form-control-sm" name="'.$form_name.'" value="1" readonly size="4"><br>';
        echo '<input type="text" class="form-control form-control-sm" name="pravidelnost_'.$form_name.'" value = "'.$pravidelnost.'" readonly><br>';
        echo  $nazev.':'.$aktivita.'<br>';
        echo  'pravidelnost_'.$form_name.':'.$pravidelnost.'<br>';
        echo '</div>';
        }
    }

    function zobrazChybu($chyba_aktivita, $pravidelnost_aktivita, $form_name_aktivita, $nazev_aktivita)
    {
        if (strlen($chyba_aktivita) > 0  && $pravidelnost_aktivita == 0 ){
        echo '<div class="row" '.$chyba_aktivita.'>';
        echo '<div class="col-sm-3">';
        echo '<div class="checkbox">';
        echo '<label><input type="checkbox" name="'.$form_name_aktivita.'" value="1" checked >'.$nazev_aktivita.'</label>';
        echo '</div>';
        echo '</div>';
        echo '<div class="col-sm-4">';  
        echo '<select class="form-control" name="pravidelnost_'.$form_name_aktivita.'">';
        echo '<option value="0"> -- Vyberte pravidelnost --</option>';
        require "pripojeni_databaze.php";
        $sql01 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
        $result01 = $conn->query($sql01);
        while($row01 = $result01->fetch_assoc()) {
        echo '<option value = "' .$row01["seznam_id"]. '">' . $row01["seznam_hodnota"]. "</option>\n"; 
       }
        echo '</select>';
        echo '</div>';
        echo '</div>';        
               }
    }
?>

<? echo poslatSkryte($chyba_posilovani, $posilovani, $pravidelnost_posilovani, "posilovani", "Fitness - silový trénink");?>
<? echo zobrazChybu($chyba_posilovani, $pravidelnost_posilovani, "posilovani","Fitness - silový trénink");?>

<? echo poslatSkryte($chyba_florbal, $florbal, $pravidelnost_florbal, "florbal", "Florbal");?>
<? echo zobrazChybu($chyba_florbal, $pravidelnost_florbal, "florbal","Florbal");?>

<? echo poslatSkryte($chyba_bojove_sporty, $bojove_sporty, $pravidelnost_bojove_sporty, "bojove_sporty", "Bojové sporty");?>
<? echo zobrazChybu($chyba_bojove_sporty, $pravidelnost_bojove_sporty, "bojove_sporty","Bojové sporty");?>

<? echo poslatSkryte($chyba_hokej, $hokej, $pravidelnost_hokej, "hokej", "Hokej");?>
<? echo zobrazChybu($chyba_hokej, $pravidelnost_hokej, "hokej","Hokej");?>

<? echo poslatSkryte($chyba_fotbal, $fotbal, $pravidelnost_fotbal, "fotbal", "Fotbal");?>
<? echo zobrazChybu($chyba_fotbal, $pravidelnost_fotbal, "fotbal","Fotbal");?>

<? echo poslatSkryte($chyba_volejbal, $volejbal, $pravidelnost_volejbal, "volejbal", "Volejbal/Basketbal");?>
<? echo zobrazChybu($chyba_volejbal, $pravidelnost_volejbal, "volejbal","Volejbal/Basketbal");?>

<? echo poslatSkryte($chyba_aerobic, $aerobic, $pravidelnost_aerobic, "aerobic", "Aerobik");?>
<? echo zobrazChybu($chyba_aerobic, $pravidelnost_aerobic, "aerobic","Aerobik");?>

<? echo poslatSkryte($chyba_tanec, $tanec, $pravidelnost_tanec, "tanec", "Tanec");?>
<? echo zobrazChybu($chyba_tanec, $pravidelnost_tanec, "tanec","Tanec");?>

<? echo poslatSkryte($chyba_plavani, $plavani, $pravidelnost_plavani, "plavani", "Plávaní");?>
<? echo zobrazChybu($chyba_plavani, $pravidelnost_plavani, "plavani","Plávaní");?>

<? echo poslatSkryte($chyba_brusle_inline, $brusle_inline, $pravidelnost_brusle_inline, "brusle_inline", "Brusle in-line");?>
<? echo zobrazChybu($chyba_brusle_inline, $pravidelnost_brusle_inline, "brusle_inline","Brusle in-line");?>

<? echo poslatSkryte($chyba_kolo_spinning, $kolo_spinning, $pravidelnost_kolo_spinning, "kolo_spinning", "Kolo/Spinning");?>
<? echo zobrazChybu($chyba_kolo_spinning, $pravidelnost_kolo_spinning, "kolo_spinning","Kolo/Spinning");?>

<? echo poslatSkryte($chyba_beh, $beh, $pravidelnost_beh, "beh", "Běh");?>
<? echo zobrazChybu($chyba_beh, $pravidelnost_beh, "beh","Běh");?>

<? echo poslatSkryte($chyba_pesi_turistika, $pesi_turistika, $pravidelnost_pesi_turistika, "pesi_turistika", "Pěší turistika/chůze");?>
<? echo zobrazChybu($chyba_pesi_turistika, $pravidelnost_pesi_turistika, "pesi_turistika","Pěší turistika/chůze");?>

<? echo poslatSkryte($chyba_taj_ci, $taj_ci, $pravidelnost_taj_ci, "taj_ci", "Taj-či");?>
<? echo zobrazChybu($chyba_taj_ci, $pravidelnost_taj_ci, "taj_ci","Taj-či");?>

<? echo poslatSkryte($chyba_cchi_kung, $cchi_kung, $pravidelnost_cchi_kung, "cchi_kung", "Čchi-kung");?>
<? echo zobrazChybu($chyba_cchi_kung, $pravidelnost_cchi_kung, "cchi_kung","Čchi-kung");?>

<? echo poslatSkryte($chyba_joga, $joga, $pravidelnost_joga, "joga", "Jóga/Rehabilitační cvičení /Fyzio");?>
<? echo zobrazChybu($chyba_joga, $pravidelnost_joga, "joga","Jóga/Rehabilitační cvičení /Fyzio");?>

<? echo poslatSkryte($chyba_kondicni_treninky, $kondicni_treninky, $pravidelnost_kondicni_treninky, "kondicni_treninky", "Fitness - kondiční trénink");?>
<? echo zobrazChybu($chyba_kondicni_treninky, $pravidelnost_kondicni_treninky, "kondicni_treninky","Fitness - kondiční trénink");?>

<? echo poslatSkryte($chyba_tenis_squash_badminton, $tenis_squash_badminton, $pravidelnost_tenis_squash_badminton, "tenis_squash_badminton", "Tenis/Squash/Badminton");?>
<? echo zobrazChybu($chyba_tenis_squash_badminton, $pravidelnost_tenis_squash_badminton, "tenis_squash_badminton","Tenis/Squash/Badminton");?>

<br>
        <?  if (strlen($chyba_joga_kurz) > 0) { ?>
<? if ($lektor == 0) { $lektor = ""; } ?>

<div class="row" <?echo $chyba_joga_kurz;?>>
    <div class="col-sm-4">
    <label for="uzivatel">Absolvoval jste někdy kurz ŠIVA jógy:</label>
    <select class="form-control" id="zobrazjoga" name="joga_kurz">
    <? if  ($joga_kurz == 1) {?>
    <option value="0">Ne</option> 
    <option value="1" selected>Ano</option>
    <? } else {?>
    <option value="0">Ne</option> 
    <option value="1">Ano</option>
     <? } ?>
    </select>
    <br>
    </div>     
    <div class="col-sm-5">
    <div class="form-group" id="jogaFieldGroupDiv">
    <label for="uzivatel">Pokud ano, uveďte prosím jméno lektora:</label>
    <input type="text" class="form-control form-control-sm" name="lektor" maxlength="50" value = "<?echo $lektor;?>" placeholder="Pokud nechcete uvést jméno lektora napište důvěrné">
    </div> 
    </div>
    <script src="./js/joga.js"></script>
</div>   
        <? } else {?>
<div class="hidden">
<div class="row" <?echo $chyba_joga_kurz;?>>
    <div class="col-sm-4">
    <label for="uzivatel">Absolvoval jste někdy kurz ŠIVA jógy:</label>
    <select class="form-control" id="zobrazjoga" name="joga_kurz">
    <? if  ($joga_kurz == 1) {?>
    <option value="0">Ne</option> 
    <option value="1" selected>Ano</option>
    <? } else {?>
    <option value="0">Ne</option> 
    <option value="1">Ano</option>
     <? } ?>
    </select>
    <br>
    </div>     
    <div class="col-sm-5">
    <div class="form-group" id="jogaFieldGroupDiv">
    <label for="uzivatel">Pokud ano, uveďte prosím jméno lektora:</label>
    <input type="text" class="form-control form-control-sm" name="lektor" maxlength="50" value = "<?echo $lektor;?>" placeholder="Pokud nechcete uvést jméno lektora napište důvěrné">
    </div> 
    </div>
    <script src="./js/joga.js"></script>
</div>
</div>
        <? } ?>

        <? } ?> 
 
  <input type="hidden" id="stav" name="stav" value="odeslano">
  <? $uzivatel_id = encrypt_decrypt('encrypt', $uzivatel_id); ?>
  <input type="hidden" id="uzivatel_id"  name="uzivatel_id" value="<? echo $uzivatel_id; ?>"> 
  <br>
  <center><button type="submit" class="btn btn-success">&nbsp;<span class="glyphicon glyphicon-save"></span>&nbsp;&nbsp;Uložit&nbsp;&nbsp;</button></center>
  </form> 
  <br><br>   
  


