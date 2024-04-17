<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");
$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));


$datum_procedury_form = addslashes(htmlspecialchars(trim("$_POST[datum_procedury]")));
$zacatek_procedury_form = addslashes(htmlspecialchars(trim("$_POST[zacatek_procedury]")));
$delka_procedury_form = addslashes(htmlspecialchars(trim("$_POST[delka_procedury]")));
$lektor_procedury_form = addslashes(htmlspecialchars(trim("$_POST[lektor_procedury]")));
$typ_procedury_form = addslashes(htmlspecialchars(trim("$_POST[typ_procedury]")));
$detail_procedury_form = addslashes(htmlspecialchars(trim("$_POST[detail_procedury]")));
$prihlaseny_uzivatel_form = addslashes(htmlspecialchars(trim("$_POST[prihlaseny_uzivatel]")));
$zacatek_procedury_form = $zacatek_procedury_form.':00';
$zacatek_procedury_form = date($zacatek_procedury_form);
$konec_procedury_form = date("H:i:s", strtotime($zacatek_procedury_form)+($delka_procedury_form*60));


$nahodne_cislo_form = addslashes(htmlspecialchars(trim("$_POST[nahodne_cislo]")));

//echo 'ID: '.$uzivatel_id.'<br>';
//echo 'datum_procedury_form:'.$datum_procedury_form.'<br>';
//echo 'zacatek_procedury_form:'.$zacatek_procedury_form.'<br>';
//echo 'konec_procedury_form:'.$konec_procedury_form.'<br>';
//echo 'delka_procedury_form:'.$delka_procedury_form.'<br>';
//echo 'lektor_procedury_form:'.$lektor_procedury_form.'<br>';
//echo 'detail_procedury_form:'.$detail_procedury_form.'<br>';
//echo 'prihlaseny_uzivatel_form:'.$prihlaseny_uzivatel_form.'<br>';
//echo 'nahodne_cislo_form:'.$nahodne_cislo_form.'<br>';


require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "INSERT INTO psychika_procedury(
uzivatel_id,
datum_procedury,
zacatek_procedury,
konec_procedury,
delka_procedury,
typ_procedury,
lektor_procedury,
detail_procedury,
prihlaseny_uzivatel,
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
'$detail_procedury_form',
'$prihlaseny_uzivatel_form',
NOW() 
       )";       

if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }




//echo '<br>NAHODA: '.$nahodne_cislo_form.'<br>';
//echo 'ID: '.$uzivatel_id.'<br>';
//echo 'datum_procedury_form:'.$datum_procedury_form.'<br>';
//echo 'zacatek_procedury_form:'.$zacatek_procedury_form.'<br>';
//echo 'konec_procedury_form:'.$konec_procedury_form.'<br>';
//echo 'delka_procedury_form:'.$delka_procedury_form.'<br>';
//echo 'lektor_procedury_form:'.$lektor_procedury_form.'<br>';
//echo '<br>detail_procedury_form:'.$detail_procedury_form.'<br>';
//echo '<br>prihlaseny_uzivatel_form:'.$prihlaseny_uzivatel_form.'<br>';
//echo '<br>nahodne_cislo_form:'.$nahodne_cislo_form.'<br>';

?>
<div id="psychika_procedury">
<form id="modul_psychika_procedury" name="modul_psychika_procedury" method="post"> 
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
      <label for="uzivatel">Vyberte délu:</label>
      <select class="form-control" id="delka_procedury" name="delka_procedury" required> 
      <option value="0"> Vyberte možnost</option> 
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
      <option value="1">osobní koučink</option>
      <option value="2">psychoterapie</option>
      <option value="3">kraniosakrální biodynamika</option>
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
    <label for="uzivatel">Detail zaměření:</label>
    <textarea class="form-control" id="detail_procedury" name="detail_procedury" rows="3" maxlength="600" placeholder="Popište detail zaměření"></textarea>
    <br>
    </div>
</div>

</form> 
    <br>
    <button type="submit" class="btn btn-success btn-sm"  onclick="loadPlanovanaProcedura()">&nbsp;&nbsp;Uložit plánovanou proceduru&nbsp;&nbsp;</button>
    <br>
</div>
<br>


<?

  require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
 // $sql = "SELECT * FROM psychika_procedury WHERE psychika_procedury_id = $maxID AND uzivatel_id = $uzivatel_id";

 $sql = "SELECT * FROM psychika_procedury WHERE tmp_procedury = 0 AND uzivatel_id = $uzivatel_id";
  
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
  
        $radek["stav_procedury"] = 'XXXXXX';
      }
   
?>
<div id="psychika_procedury">
<form id="modul_psychika_procedury_update" name="modul_psychika_procedury_update" method="post"> 
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
    <select class="form-control" id="typ_procedury" name="typ_procedury" disabled> 
    
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
    <label for="uzivatel">Detail zaměření:</label>
    <textarea class="form-control" id="detail_procedury" name="detail_procedury" rows="2" maxlength="600" placeholder="Popište detail zaměření" readonly><? echo $radek["detail_procedury"];?></textarea>
    <br>
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











