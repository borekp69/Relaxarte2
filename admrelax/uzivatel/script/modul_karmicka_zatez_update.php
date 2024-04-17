<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");
$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));


$karmicka_zatez_prostredi_form = addslashes(htmlspecialchars(trim("$_POST[karmicka_zatez_prostredi]")));
$prostredi_zatizeni_pri_narozeni_form = addslashes(htmlspecialchars(trim("$_POST[prostredi_zatizeni_pri_narozeni]")));
$prostredi_zatizeni_ziskana_behem_zivota_form = addslashes(htmlspecialchars(trim("$_POST[prostredi_zatizeni_ziskana_behem_zivota]")));
$progres_zatizeni_ziskana_behem_zivota_form = addslashes(htmlspecialchars(trim("$_POST[progres_zatizeni_ziskana_behem_zivota]")));

$karmicka_zatez_rodina_form = addslashes(htmlspecialchars(trim("$_POST[karmicka_zatez_rodina]")));
$rodina_zatizeni_pri_narozeni_form = addslashes(htmlspecialchars(trim("$_POST[rodina_zatizeni_pri_narozeni]")));
$rodina_zatizeni_ziskana_behem_zivota_form = addslashes(htmlspecialchars(trim("$_POST[rodina_zatizeni_ziskana_behem_zivota]")));
$progres_rodina_zatizeni_ziskana_behem_zivota_form = addslashes(htmlspecialchars(trim("$_POST[progres_rodina_zatizeni_ziskana_behem_zivota]")));

$karmicka_zatez_osobni_form = addslashes(htmlspecialchars(trim("$_POST[karmicka_zatez_osobni]")));
$osobni_zatizeni_pri_narozeni_form = addslashes(htmlspecialchars(trim("$_POST[osobni_zatizeni_pri_narozeni]")));
$osobni_zatizeni_ziskana_behem_zivota_form = addslashes(htmlspecialchars(trim("$_POST[osobni_zatizeni_ziskana_behem_zivota]")));
$progres_osobni_zatizeni_ziskana_behem_zivota_form = addslashes(htmlspecialchars(trim("$_POST[progres_osobni_zatizeni_ziskana_behem_zivota]")));

$karmicka_zatez_pracovni_form = addslashes(htmlspecialchars(trim("$_POST[karmicka_zatez_pracovni]")));
$pracovni_zatizeni_pri_narozeni_form = addslashes(htmlspecialchars(trim("$_POST[pracovni_zatizeni_pri_narozeni]")));
$pracovni_zatizeni_ziskana_behem_zivota_form = addslashes(htmlspecialchars(trim("$_POST[pracovni_zatizeni_ziskana_behem_zivota]")));
$progres_pracovni_zatizeni_ziskana_behem_zivota_form = addslashes(htmlspecialchars(trim("$_POST[progres_pracovni_zatizeni_ziskana_behem_zivota]")));

$karmicka_zatez_partnerska_form = addslashes(htmlspecialchars(trim("$_POST[karmicka_zatez_partnerska]")));
$partnerska_zatizeni_pri_narozeni_form = addslashes(htmlspecialchars(trim("$_POST[partnerska_zatizeni_pri_narozeni]")));
$partnerska_zatizeni_ziskana_behem_zivota_form = addslashes(htmlspecialchars(trim("$_POST[partnerska_zatizeni_ziskana_behem_zivota]")));
$progres_partnerska_zatizeni_ziskana_behem_zivota_form = addslashes(htmlspecialchars(trim("$_POST[progres_partnerska_zatizeni_ziskana_behem_zivota]")));
$celkova_karmicka_zatez_form = addslashes(htmlspecialchars(trim("$_POST[celkova_karmicka_zatez]")));
$nejslabsi_oblasti_v_zivote_form = addslashes(htmlspecialchars(trim("$_POST[nejslabsi_oblasti_v_zivote]")));

$karmicky_ukol_form = addslashes(htmlspecialchars(trim("$_POST[karmicky_ukol]")));
$psychika_diagnoza_form = addslashes(htmlspecialchars(trim("$_POST[psychika_diagnoza]")));



require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "UPDATE modul_psychika SET
karmicka_zatez_prostredi = '$karmicka_zatez_prostredi_form',
prostredi_zatizeni_pri_narozeni = '$prostredi_zatizeni_pri_narozeni_form',
prostredi_zatizeni_ziskana_behem_zivota = '$prostredi_zatizeni_ziskana_behem_zivota_form',
progres_zatizeni_ziskana_behem_zivota = '$progres_zatizeni_ziskana_behem_zivota_form',
karmicka_zatez_rodina = '$karmicka_zatez_rodina_form',
rodina_zatizeni_pri_narozeni = '$rodina_zatizeni_pri_narozeni_form',
rodina_zatizeni_ziskana_behem_zivota = '$rodina_zatizeni_ziskana_behem_zivota_form',
progres_rodina_zatizeni_ziskana_behem_zivota = '$progres_rodina_zatizeni_ziskana_behem_zivota_form',
karmicka_zatez_osobni = '$karmicka_zatez_osobni_form',
osobni_zatizeni_pri_narozeni = '$osobni_zatizeni_pri_narozeni_form',
osobni_zatizeni_ziskana_behem_zivota = '$osobni_zatizeni_ziskana_behem_zivota_form',
progres_osobni_zatizeni_ziskana_behem_zivota = '$progres_osobni_zatizeni_ziskana_behem_zivota_form',
karmicka_zatez_pracovni = '$karmicka_zatez_pracovni_form',
pracovni_zatizeni_pri_narozeni = '$pracovni_zatizeni_pri_narozeni_form',
pracovni_zatizeni_ziskana_behem_zivota = '$pracovni_zatizeni_ziskana_behem_zivota_form',
progres_pracovni_zatizeni_ziskana_behem_zivota = '$progres_pracovni_zatizeni_ziskana_behem_zivota_form',
karmicka_zatez_partnerska = '$karmicka_zatez_partnerska_form',
partnerska_zatizeni_pri_narozeni = '$partnerska_zatizeni_pri_narozeni_form',
partnerska_zatizeni_ziskana_behem_zivota = '$partnerska_zatizeni_ziskana_behem_zivota_form',
progres_partnerska_zatizeni_ziskana_behem_zivota = '$progres_partnerska_zatizeni_ziskana_behem_zivota_form',
celkova_karmicka_zatez = '$celkova_karmicka_zatez_form',
nejslabsi_oblasti_v_zivote = '$nejslabsi_oblasti_v_zivote_form',
karmicky_ukol = '$karmicky_ukol_form',
psychika_diagnoza = '$psychika_diagnoza_form',

datum =  NOW()
WHERE uzivatel_id = '$uzivatel_id'
    ";
if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close(); 



    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "SELECT * FROM modul_psychika WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
    $result = $conn->query($sql);
    while($radek = $result->fetch_assoc()) {
        $karmicka_zatez_prostredi = $radek["karmicka_zatez_prostredi"];
        $prostredi_zatizeni_pri_narozeni = $radek["prostredi_zatizeni_pri_narozeni"];
        $prostredi_zatizeni_ziskana_behem_zivota = $radek["prostredi_zatizeni_ziskana_behem_zivota"];
        $progres_zatizeni_ziskana_behem_zivota = $radek["progres_zatizeni_ziskana_behem_zivota"];
        $karmicka_zatez_rodina = $radek["karmicka_zatez_rodina"];
        $rodina_zatizeni_pri_narozeni = $radek["rodina_zatizeni_pri_narozeni"];
        $rodina_zatizeni_ziskana_behem_zivota = $radek["rodina_zatizeni_ziskana_behem_zivota"];
        $progres_rodina_zatizeni_ziskana_behem_zivota = $radek["progres_rodina_zatizeni_ziskana_behem_zivota"];
        $karmicka_zatez_osobni = $radek["karmicka_zatez_osobni"];
        $osobni_zatizeni_pri_narozeni = $radek["osobni_zatizeni_pri_narozeni"];
        $osobni_zatizeni_ziskana_behem_zivota = $radek["osobni_zatizeni_ziskana_behem_zivota"];
        $progres_osobni_zatizeni_ziskana_behem_zivota = $radek["progres_osobni_zatizeni_ziskana_behem_zivota"];
        $karmicka_zatez_pracovni = $radek["karmicka_zatez_pracovni"];
        $pracovni_zatizeni_pri_narozeni = $radek["pracovni_zatizeni_pri_narozeni"];
        $pracovni_zatizeni_ziskana_behem_zivota = $radek["pracovni_zatizeni_ziskana_behem_zivota"];
        $progres_pracovni_zatizeni_ziskana_behem_zivota = $radek["progres_pracovni_zatizeni_ziskana_behem_zivota"];
        $karmicka_zatez_partnerska = $radek["karmicka_zatez_partnerska"];
        $partnerska_zatizeni_pri_narozeni = $radek["partnerska_zatizeni_pri_narozeni"];
        $partnerska_zatizeni_ziskana_behem_zivota = $radek["partnerska_zatizeni_ziskana_behem_zivota"];
        $progres_partnerska_zatizeni_ziskana_behem_zivota = $radek["progres_partnerska_zatizeni_ziskana_behem_zivota"];
        $celkova_karmicka_zatez = $radek["celkova_karmicka_zatez"];
        $nejslabsi_oblasti_v_zivote = $radek["nejslabsi_oblasti_v_zivote"];
        $karmicky_ukol = $radek["karmicky_ukol"]; 
        $psychika_diagnoza = $radek["psychika_diagnoza"];
        $karmicky_ukol = $radek["karmicky_ukol"]; 
        $psychika_diagnoza = $radek["psychika_diagnoza"];
        $datum = $radek["datum"];
       } 
    $conn->close(); 

?>
<div id="karmicka_zatez<?echo $uzivatel_id; ?>">
<h4>Karmická zátěž</h4>
<form id="modul_karmicka_zatez" name="modul_karmicka_zatez" method="post"> 

<div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
   <div class="col-sm-3">
      <br>
      <label for="uzivatel">Prostředí:</label>
      <select class="form-control" id="karmicka_zatez_prostredi" name="karmicka_zatez_prostredi">
    
   <? if($karmicka_zatez_prostredi == 0){ ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2">středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4">těžká</option> 
      
   <? }else if ($karmicka_zatez_prostredi == 1){  ?> 
      <option value="0"> Vyberte možnost</option> 
      <option value="1" selected>lehká</option>
      <option value="2">středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4">těžká</option> 
      
   <? }else if ($karmicka_zatez_prostredi == 2){   ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2" selected>středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4">těžká</option> 

   <? }else if ($karmicka_zatez_prostredi == 3){  ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2">středně lehká</option> 
      <option value="3" selected>středně těžká</option> 
      <option value="4">těžká</option> 


   <? }else{  ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2" >středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4" selected>těžká</option> 
    <? } ?>

    </select>
      </div>
      <br>

      <div class="col-sm-3">
        <label>Zatížení při narození:</label>
        <select class="form-control" id="prostredi_zatizeni_pri_narozeni" name="prostredi_zatizeni_pri_narozeni">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $prostredi_zatizeni_pri_narozeni){
          echo'<option value="'.$procenta. '"selected>'.$procenta."%</option>\n";
          $procenta+=5;
          }else{
          echo'<option value="'.$procenta. '">'.$procenta."%</option>\n";
          $procenta+=5;
          }


        }
        ?>   
        </select>
        <br>
       </div>

       <div class="col-sm-3">
        <label>Zatížení získaná během žívota:</label>
        <select class="form-control" id="prostredi_zatizeni_ziskana_behem_zivota" name="prostredi_zatizeni_ziskana_behem_zivota">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $prostredi_zatizeni_ziskana_behem_zivota){
          echo'<option value="'.$procenta. '"selected>'.$procenta."%</option>\n";
          $procenta+=5;
          }else{
          echo'<option value="'.$procenta. '">'.$procenta."%</option>\n";
          $procenta+=5;
          }


        }
        ?>   
        </select>
        <br>
       </div>

       <div class="col-sm-3" style="background-color:#b6d8a2;">
        <label>Aktuálně zpracováno:</label>
        <select class="form-control" id="progres_zatizeni_ziskana_behem_zivota" name="progres_zatizeni_ziskana_behem_zivota">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $progres_zatizeni_ziskana_behem_zivota){
          echo'<option value="'.$procenta. '"selected>'.$procenta."%</option>\n";
          $procenta+=5;
          }else{
          echo'<option value="'.$procenta. '">'.$procenta."%</option>\n";
          $procenta+=5;
          }


        }
        ?>   
        </select>
        <br>
       </div>
  </div>
</div>


<div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
    <div class="col-sm-3">
      <br>
      <label for="uzivatel">Rodina:</label>
      <select class="form-control" id="karmicka_zatez_rodina" name="karmicka_zatez_rodina">
    
   <? if($karmicka_zatez_rodina == 0){ ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2">středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4">těžká</option> 
      
   <? }else if ($karmicka_zatez_rodina == 1){  ?> 
      <option value="0"> Vyberte možnost</option> 
      <option value="1" selected>lehká</option>
      <option value="2">středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4">těžká</option> 
      
   <? }else if ($karmicka_zatez_rodina == 2){   ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2" selected>středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4">těžká</option> 

   <? }else if ($karmicka_zatez_rodina == 3){  ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2">středně lehká</option> 
      <option value="3" selected>středně těžká</option> 
      <option value="4">těžká</option> 


   <? }else{  ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2" >středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4" selected>těžká</option> 
    <? } ?>

    </select>
      </div>
      <br>

       <div class="col-sm-3">
        <label>Zatížení při narození:</label>
        <select class="form-control" id="rodina_zatizeni_pri_narozeni" name="rodina_zatizeni_pri_narozeni">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $rodina_zatizeni_pri_narozeni){
          echo'<option value="'.$procenta. '"selected>'.$procenta."%</option>\n";
          $procenta+=5;
          }else{
          echo'<option value="'.$procenta. '">'.$procenta."%</option>\n";
          $procenta+=5;
          }


        }
        ?>   
        </select>
        <br>
       </div>

       <div class="col-sm-3">
        <label>Zatížení získaná během žívota:</label>
        <select class="form-control" id="rodina_zatizeni_ziskana_behem_zivota" name="rodina_zatizeni_ziskana_behem_zivota">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $rodina_zatizeni_ziskana_behem_zivota){
          echo'<option value="'.$procenta. '"selected>'.$procenta."%</option>\n";
          $procenta+=5;
          }else{
          echo'<option value="'.$procenta. '">'.$procenta."%</option>\n";
          $procenta+=5;
          }


        }
        ?>   
        </select>
        <br>
       </div>

       <div class="col-sm-3" style="background-color:#b6d8a2;">
        <label>Aktuálně zpracováno:</label>
        <select class="form-control" id="progres_rodina_zatizeni_ziskana_behem_zivota" name="progres_rodina_zatizeni_ziskana_behem_zivota">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $progres_rodina_zatizeni_ziskana_behem_zivota){
          echo'<option value="'.$procenta. '"selected>'.$procenta."%</option>\n";
          $procenta+=5;
          }else{
          echo'<option value="'.$procenta. '">'.$procenta."%</option>\n";
          $procenta+=5;
          }


        }
        ?>   
        </select>
        <br>
       </div>
  </div>
</div>


<div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
  <div class="col-sm-3">
      <br>
      <label for="uzivatel">Osobní:</label>
      <select class="form-control" id="karmicka_zatez_osobni" name="karmicka_zatez_osobni">
    
   <? if($karmicka_zatez_osobni == 0){ ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2">středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4">těžká</option> 
      
   <? }else if ($karmicka_zatez_osobni == 1){  ?> 
      <option value="0"> Vyberte možnost</option> 
      <option value="1" selected>lehká</option>
      <option value="2">středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4">těžká</option> 
      
   <? }else if ($karmicka_zatez_osobni == 2){   ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2" selected>středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4">těžká</option> 

   <? }else if ($karmicka_zatez_osobni == 3){  ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2">středně lehká</option> 
      <option value="3" selected>středně těžká</option> 
      <option value="4">těžká</option> 


   <? }else{  ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2" >středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4" selected>těžká</option> 
    <? } ?>

    </select>
      </div>
      <br>

      <div class="col-sm-3">
        <label>Zatížení při narození:</label>
        <select class="form-control" id="osobni_zatizeni_pri_narozeni" name="osobni_zatizeni_pri_narozeni">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $osobni_zatizeni_pri_narozeni){
          echo'<option value="'.$procenta. '"selected>'.$procenta."%</option>\n";
          $procenta+=5;
          }else{
          echo'<option value="'.$procenta. '">'.$procenta."%</option>\n";
          $procenta+=5;
          }


        }
        ?>   
        </select>
        <br>
       </div>

       <div class="col-sm-3">
        <label>Zatížení získaná během žívota:</label>
        <select class="form-control" id="osobni_zatizeni_ziskana_behem_zivota" name="osobni_zatizeni_ziskana_behem_zivota">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $osobni_zatizeni_ziskana_behem_zivota){
          echo'<option value="'.$procenta. '"selected>'.$procenta."%</option>\n";
          $procenta+=5;
          }else{
          echo'<option value="'.$procenta. '">'.$procenta."%</option>\n";
          $procenta+=5;
          }


        }
        ?>   
        </select>
        <br>
       </div>

       <div class="col-sm-3" style="background-color:#b6d8a2;">
        <label>Aktuálně zpracováno:</label>
        <select class="form-control" id="progres_osobni_zatizeni_ziskana_behem_zivota" name="progres_osobni_zatizeni_ziskana_behem_zivota">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $progres_osobni_zatizeni_ziskana_behem_zivota){
          echo'<option value="'.$procenta. '"selected>'.$procenta."%</option>\n";
          $procenta+=5;
          }else{
          echo'<option value="'.$procenta. '">'.$procenta."%</option>\n";
          $procenta+=5;
          }


        }
        ?>   
        </select>
        <br>
       </div>
  </div>
</div>



<div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
     <div class="col-sm-3">
      <br>
      <label for="uzivatel">Pracovní:</label>
      <select class="form-control" id="karmicka_zatez_pracovni" name="karmicka_zatez_pracovni">
    
   <? if($karmicka_zatez_pracovni == 0){ ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2">středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4">těžká</option> 
      
   <? }else if ($karmicka_zatez_pracovni == 1){  ?> 
      <option value="0"> Vyberte možnost</option> 
      <option value="1" selected>lehká</option>
      <option value="2">středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4">těžká</option> 
      
   <? }else if ($karmicka_zatez_pracovni == 2){   ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2" selected>středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4">těžká</option> 

   <? }else if ($karmicka_zatez_pracovni == 3){  ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2">středně lehká</option> 
      <option value="3" selected>středně těžká</option> 
      <option value="4">těžká</option> 


   <? }else{  ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2" >středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4" selected>těžká</option> 
    <? } ?>

    </select>
      </div>
      <br>

       <div class="col-sm-3">
        <label>Zatížení při narození:</label>
        <select class="form-control" id="pracovni_zatizeni_pri_narozeni" name="pracovni_zatizeni_pri_narozeni">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $pracovni_zatizeni_pri_narozeni){
          echo'<option value="'.$procenta. '"selected>'.$procenta."%</option>\n";
          $procenta+=5;
          }else{
          echo'<option value="'.$procenta. '">'.$procenta."%</option>\n";
          $procenta+=5;
          }


        }
        ?>   
        </select>
        <br>
       </div>

       <div class="col-sm-3">
        <label>Zatížení získaná během žívota:</label>
        <select class="form-control" id="pracovni_zatizeni_ziskana_behem_zivota" name="pracovni_zatizeni_ziskana_behem_zivota">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $pracovni_zatizeni_ziskana_behem_zivota){
          echo'<option value="'.$procenta. '"selected>'.$procenta."%</option>\n";
          $procenta+=5;
          }else{
          echo'<option value="'.$procenta. '">'.$procenta."%</option>\n";
          $procenta+=5;
          }


        }
        ?>   
        </select>
        <br>
       </div>

       <div class="col-sm-3" style="background-color:#b6d8a2;">
        <label>Aktuálně zpracováno:</label>
        <select class="form-control" id="progres_pracovni_zatizeni_ziskana_behem_zivota" name="progres_pracovni_zatizeni_ziskana_behem_zivota">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $progres_pracovni_zatizeni_ziskana_behem_zivota){
          echo'<option value="'.$procenta. '"selected>'.$procenta."%</option>\n";
          $procenta+=5;
          }else{
          echo'<option value="'.$procenta. '">'.$procenta."%</option>\n";
          $procenta+=5;
          }


        }
        ?>   
        </select>
        <br>
       </div>
  </div>
</div>


<div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
     <div class="col-sm-3">
      <br>
      <label for="uzivatel">Partnerská:</label>
      <select class="form-control" id="karmicka_zatez_partnerska" name="karmicka_zatez_partnerska">
    
   <? if($karmicka_zatez_partnerska == 0){ ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2">středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4">těžká</option> 
      
   <? }else if ($karmicka_zatez_partnerska == 1){  ?> 
      <option value="0"> Vyberte možnost</option> 
      <option value="1" selected>lehká</option>
      <option value="2">středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4">těžká</option> 
      
   <? }else if ($karmicka_zatez_partnerska == 2){   ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2" selected>středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4">těžká</option> 

   <? }else if ($karmicka_zatez_partnerska == 3){  ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2">středně lehká</option> 
      <option value="3" selected>středně těžká</option> 
      <option value="4">těžká</option> 


   <? }else{  ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2" >středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4" selected>těžká</option> 
    <? } ?>

    </select>
      </div>
      <br>

       <div class="col-sm-3">
        <label>Zatížení při narození:</label>
        <select class="form-control" id="partnerska_zatizeni_pri_narozeni" name="partnerska_zatizeni_pri_narozeni">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $partnerska_zatizeni_pri_narozeni){
          echo'<option value="'.$procenta. '"selected>'.$procenta."%</option>\n";
          $procenta+=5;
          }else{
          echo'<option value="'.$procenta. '">'.$procenta."%</option>\n";
          $procenta+=5;
          }


        }
        ?>   
        </select>
        <br>
       </div>

       <div class="col-sm-3">
        <label>Zatížení získaná během žívota:</label>
        <select class="form-control" id="partnerska_zatizeni_ziskana_behem_zivota" name="partnerska_zatizeni_ziskana_behem_zivota">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $partnerska_zatizeni_ziskana_behem_zivota){
          echo'<option value="'.$procenta. '"selected>'.$procenta."%</option>\n";
          $procenta+=5;
          }else{
          echo'<option value="'.$procenta. '">'.$procenta."%</option>\n";
          $procenta+=5;
          }


        }
        ?>   
        </select>
        <br>
       </div>

       <div class="col-sm-3" style="background-color:#b6d8a2;">
        <label>Aktuálně zpracováno:</label>
        <select class="form-control" id="progres_partnerska_zatizeni_ziskana_behem_zivota" name="progres_partnerska_zatizeni_ziskana_behem_zivota">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $progres_partnerska_zatizeni_ziskana_behem_zivota){
          echo'<option value="'.$procenta. '"selected>'.$procenta."%</option>\n";
          $procenta+=5;
          }else{
          echo'<option value="'.$procenta. '">'.$procenta."%</option>\n";
          $procenta+=5;
          }


        }
        ?>   
        </select>
        <br>
       </div>
  </div>
</div>

<br>
<div class="row">
    <div class="col-sm-12" style="background-color:#f6d5c4;">
     <div class="col-sm-4">
      <br>
      <label for="uzivatel">Celková karmická zátěž:</label>
      <select class="form-control" id="celkova_karmicka_zatez" name="celkova_karmicka_zatez">
    
   <? if($celkova_karmicka_zatez == 0){ ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2">středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4">těžká</option> 
      
   <? }else if ($celkova_karmicka_zatez == 1){  ?> 
      <option value="0"> Vyberte možnost</option> 
      <option value="1" selected>lehká</option>
      <option value="2">středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4">těžká</option> 
      
   <? }else if ($celkova_karmicka_zatez == 2){   ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2" selected>středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4">těžká</option> 

   <? }else if ($celkova_karmicka_zatez == 3){  ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2">středně lehká</option> 
      <option value="3" selected>středně těžká</option> 
      <option value="4">těžká</option> 


   <? }else{  ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">lehká</option>
      <option value="2" >středně lehká</option> 
      <option value="3">středně těžká</option> 
      <option value="4" selected>těžká</option> 
    <? } ?>

    </select>
    <br>
      </div>
      <div class="col-sm-4">
      <br>
      <label for="uzivatel">Nejslabší oblasti v životě:</label>
      <select class="form-control" id="nejslabsi_oblasti_v_zivote" name="nejslabsi_oblasti_v_zivote">
    
   <? if($nejslabsi_oblasti_v_zivote == 0){ ?>
      <option value="0">Vyberte možnost</option> 
      <option value="1">práce</option>
      <option value="2">partnersví</option> 
      <option value="3">rodinně vztahy</option> 
      <option value="4">zdravotní stav</option> 
	  <option value="5">finance</option>  
      
   <? }else if ($nejslabsi_oblasti_v_zivote == 1){  ?> 
      <option value="0">Vyberte možnost</option> 
      <option value="1" selected>práce</option>
      <option value="2">partnersví</option> 
      <option value="3">rodinně vztahy</option> 
      <option value="4">zdravotní stav</option>
	  <option value="5">finance</option> 
      
   <? }else if ($nejslabsi_oblasti_v_zivote == 2){   ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">práce</option>
      <option value="2" selected>partnersví</option> 
      <option value="3">rodinně vztahy</option> 
      <option value="4">zdravotní stav</option> 
	  <option value="5">finance</option> 
	  
   <? }else if ($nejslabsi_oblasti_v_zivote == 3){  ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">práce</option>
      <option value="2">partnersví</option> 
      <option value="3" selected>rodinně vztahy</option> 
      <option value="4">zdravotní stav</option> 
      <option value="5">finance</option> 
	  
   <? }else if ($nejslabsi_oblasti_v_zivote == 4){  ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">práce</option>
      <option value="2">partnersví</option> 
      <option value="3">rodinně vztahy</option> 
      <option value="4" selected>zdravotní stav</option> 
      <option value="5">finance</option> 	  
	  
   <? }else{  ?>
      <option value="0"> Vyberte možnost</option> 
      <option value="1">práce</option>
      <option value="2" >partnersví</option> 
      <option value="3">rodinně vztahy</option> 
      <option value="4">zdravotní stav</option>
	  <option value="5" selected>finance</option> 
    <? } ?>

    </select>
    <br>
      </div>
</div>

</div>
   <div class="row">
    <div class="col-sm-12" style="background-color:#d7cece;">
    <br>
    <label for="uzivatel">Karmický úkol:</label>
    <textarea class="form-control" id="karmicky_ukol" name="karmicky_ukol" rows="3" maxlength="600" placeholder="Popište karmický úkol"><?echo $karmicky_ukol;?></textarea>
    <br>
    </div>
    </div> 

    <div class="row">
    <div class="col-sm-12" style="background-color:#d1d2c6;">
    <br>
    <label for="uzivatel">Diagnoza:</label>
    <textarea class="form-control" id="psychika_diagnoza" name="psychika_diagnoza" rows="3" maxlength="600" placeholder="Diagnoza"><?echo $psychika_diagnoza;?></textarea>
    <br>
    </div>
    </div> 
   </form>
    <br>
    <button type="submit" class="btn btn-success btn-sm"  onclick="loadKarmicka_zatez<?echo $uzivatel_id; ?>()">&nbsp;&nbsp;Uložit karmickou zátěž&nbsp;&nbsp;</button>
    <br>
  </div>



<script>

function loadKarmicka_zatez<?echo $uzivatel_id; ?>() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("karmicka_zatez<?echo $uzivatel_id; ?>").innerHTML = this.responseText;
    }
  };
  
  let dataKarmickaZatez = "uzivatel_id=<?echo $uzivatel_id; ?>";
 
  var karmicka_zatez_prostredi = parseInt(document.modul_karmicka_zatez.karmicka_zatez_prostredi.value);  
  var prostredi_zatizeni_pri_narozeni = parseInt(document.modul_karmicka_zatez.prostredi_zatizeni_pri_narozeni.value); 
  var prostredi_zatizeni_ziskana_behem_zivota = parseInt(document.modul_karmicka_zatez.prostredi_zatizeni_ziskana_behem_zivota.value); 
  var progres_zatizeni_ziskana_behem_zivota = parseInt(document.modul_karmicka_zatez.progres_zatizeni_ziskana_behem_zivota.value); 
  var karmicka_zatez_rodina = parseInt(document.modul_karmicka_zatez.karmicka_zatez_rodina.value);  
  var rodina_zatizeni_pri_narozeni = parseInt(document.modul_karmicka_zatez.rodina_zatizeni_pri_narozeni.value); 
  var rodina_zatizeni_ziskana_behem_zivota = parseInt(document.modul_karmicka_zatez.rodina_zatizeni_ziskana_behem_zivota.value); 
  var progres_rodina_zatizeni_ziskana_behem_zivota = parseInt(document.modul_karmicka_zatez.progres_rodina_zatizeni_ziskana_behem_zivota.value); 
  var karmicka_zatez_osobni = parseInt(document.modul_karmicka_zatez.karmicka_zatez_osobni.value);  
  var osobni_zatizeni_pri_narozeni = parseInt(document.modul_karmicka_zatez.osobni_zatizeni_pri_narozeni.value); 
  var osobni_zatizeni_ziskana_behem_zivota = parseInt(document.modul_karmicka_zatez.osobni_zatizeni_ziskana_behem_zivota.value); 
  var progres_osobni_zatizeni_ziskana_behem_zivota = parseInt(document.modul_karmicka_zatez.progres_osobni_zatizeni_ziskana_behem_zivota.value); 
  var karmicka_zatez_pracovni = parseInt(document.modul_karmicka_zatez.karmicka_zatez_pracovni.value);  
  var pracovni_zatizeni_pri_narozeni = parseInt(document.modul_karmicka_zatez.pracovni_zatizeni_pri_narozeni.value); 
  var pracovni_zatizeni_ziskana_behem_zivota = parseInt(document.modul_karmicka_zatez.pracovni_zatizeni_ziskana_behem_zivota.value); 
  var progres_pracovni_zatizeni_ziskana_behem_zivota = parseInt(document.modul_karmicka_zatez.progres_pracovni_zatizeni_ziskana_behem_zivota.value); 
  var karmicka_zatez_partnerska = parseInt(document.modul_karmicka_zatez.karmicka_zatez_partnerska.value);  
  var partnerska_zatizeni_pri_narozeni = parseInt(document.modul_karmicka_zatez.partnerska_zatizeni_pri_narozeni.value); 
  var partnerska_zatizeni_ziskana_behem_zivota = parseInt(document.modul_karmicka_zatez.partnerska_zatizeni_ziskana_behem_zivota.value); 
  var progres_partnerska_zatizeni_ziskana_behem_zivota = parseInt(document.modul_karmicka_zatez.progres_partnerska_zatizeni_ziskana_behem_zivota.value); 
  var celkova_karmicka_zatez = parseInt(document.modul_karmicka_zatez.celkova_karmicka_zatez.value); 
  var karmicky_ukol = document.modul_karmicka_zatez.karmicky_ukol.value; 
  var psychika_diagnoza = document.modul_karmicka_zatez.psychika_diagnoza.value;

  dataKarmickaZatez = dataKarmickaZatez + "&karmicka_zatez_prostredi="+karmicka_zatez_prostredi;
  dataKarmickaZatez = dataKarmickaZatez + "&prostredi_zatizeni_pri_narozeni="+prostredi_zatizeni_pri_narozeni;
  dataKarmickaZatez = dataKarmickaZatez + "&prostredi_zatizeni_ziskana_behem_zivota="+prostredi_zatizeni_ziskana_behem_zivota;
  dataKarmickaZatez = dataKarmickaZatez + "&progres_zatizeni_ziskana_behem_zivota="+progres_zatizeni_ziskana_behem_zivota;
  dataKarmickaZatez = dataKarmickaZatez + "&karmicka_zatez_rodina="+karmicka_zatez_rodina;
  dataKarmickaZatez = dataKarmickaZatez + "&rodina_zatizeni_pri_narozeni="+rodina_zatizeni_pri_narozeni;
  dataKarmickaZatez = dataKarmickaZatez + "&rodina_zatizeni_ziskana_behem_zivota="+rodina_zatizeni_ziskana_behem_zivota;
  dataKarmickaZatez = dataKarmickaZatez + "&progres_rodina_zatizeni_ziskana_behem_zivota="+progres_rodina_zatizeni_ziskana_behem_zivota;
  dataKarmickaZatez = dataKarmickaZatez + "&karmicka_zatez_osobni="+karmicka_zatez_osobni;
  dataKarmickaZatez = dataKarmickaZatez + "&osobni_zatizeni_pri_narozeni="+osobni_zatizeni_pri_narozeni;
  dataKarmickaZatez = dataKarmickaZatez + "&osobni_zatizeni_ziskana_behem_zivota="+osobni_zatizeni_ziskana_behem_zivota;
  dataKarmickaZatez = dataKarmickaZatez + "&progres_osobni_zatizeni_ziskana_behem_zivota="+progres_osobni_zatizeni_ziskana_behem_zivota;
  dataKarmickaZatez = dataKarmickaZatez + "&karmicka_zatez_pracovni="+karmicka_zatez_pracovni;
  dataKarmickaZatez = dataKarmickaZatez + "&pracovni_zatizeni_pri_narozeni="+pracovni_zatizeni_pri_narozeni;
  dataKarmickaZatez = dataKarmickaZatez + "&pracovni_zatizeni_ziskana_behem_zivota="+pracovni_zatizeni_ziskana_behem_zivota;
  dataKarmickaZatez = dataKarmickaZatez + "&progres_pracovni_zatizeni_ziskana_behem_zivota="+progres_pracovni_zatizeni_ziskana_behem_zivota;
  dataKarmickaZatez = dataKarmickaZatez + "&karmicka_zatez_partnerska="+karmicka_zatez_partnerska;
  dataKarmickaZatez = dataKarmickaZatez + "&partnerska_zatizeni_pri_narozeni="+partnerska_zatizeni_pri_narozeni;
  dataKarmickaZatez = dataKarmickaZatez + "&partnerska_zatizeni_ziskana_behem_zivota="+partnerska_zatizeni_ziskana_behem_zivota;
  dataKarmickaZatez = dataKarmickaZatez + "&progres_partnerska_zatizeni_ziskana_behem_zivota="+progres_partnerska_zatizeni_ziskana_behem_zivota;
  dataKarmickaZatez = dataKarmickaZatez + "&celkova_karmicka_zatez="+celkova_karmicka_zatez;
  dataKarmickaZatez = dataKarmickaZatez + "&karmicky_ukol="+karmicky_ukol;
  dataKarmickaZatez = dataKarmickaZatez + "&psychika_diagnoza="+psychika_diagnoza;
  xhttp.open("POST", "./script/modul_karmicka_zatez_update.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(dataKarmickaZatez);
  alert("Uložení:\nZáznam Karmická zátěž klienta byl aktualizován.");
     }

</script>
