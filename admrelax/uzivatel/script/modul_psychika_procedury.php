<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache"); 
require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php';


// - začátek přepsání stavů propadlých procedur 
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_termin = "SELECT psychika_procedury_id  FROM psychika_procedury WHERE datum_procedury < DATE_ADD(NOW(), INTERVAL -1 DAY) AND  stav_procedury = 1";
$result_termin = $conn->query($sql_termin);
while($radek_termin = $result_termin->fetch_assoc()) {
$sql1 = "UPDATE psychika_procedury SET stav_procedury = 5, prihlaseny_uzivatel = 'Systém', datum = NOW() WHERE psychika_procedury_id = $radek_termin[psychika_procedury_id]";    
if ($conn->query($sql1) === TRUE) {    
} else {
echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
} 
    }
// - konec přepsání stavů propadlých procedur 

?>


<h4>Plánování procedur</h4>
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
    <textarea class="form-control" id="detail_procedury" name="detail_procedury" rows="3" maxlength="600" placeholder="Popište detail zaměření" require></textarea>
    <br>
    </div>
</div>
</form> 
    <br>
    <button type="submit" class="btn btn-success btn-sm"  onclick="loadPlanovanaProcedura()">&nbsp;&nbsp;Uložit plánovanou proceduru&nbsp;&nbsp;</button>
    <br>
 
</div>
<br>


<script>
function loadPlanovanaProcedura() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("psychika_procedury").innerHTML = this.responseText;
    }
  };
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); 
var yyyy = today.getFullYear();
dnesek = yyyy + '-' + mm + '-' + dd; 
let dataPlanovanaProcedura = "uzivatel_id=<?echo $uzivatel_id; ?>";
var datum_procedury = document.modul_psychika_procedury.datum_procedury.value;
var delka_procedury = parseInt(document.modul_psychika_procedury.delka_procedury.value);
var typ_procedury = parseInt(document.modul_psychika_procedury.typ_procedury.value); 
var lektor_procedury = parseInt(document.modul_psychika_procedury.lektor_procedury.value);
var zacatek_procedury = document.modul_psychika_procedury.zacatek_procedury.value;
var prihlaseny_uzivatel = "<? echo $_SESSION['uzivatel_jmeno_session'].' '.$_SESSION['uzivatel_prijmeni_session']; ?>"; 
var detail_procedury = document.modul_psychika_procedury.detail_procedury.value;



  if (typ_procedury == 1){
    typ_slovne = "osobní koučink";

    }else if(typ_procedury == 2){
    typ_slovne = "psychoterapie";

    }else{
    typ_slovne = "kraniosakrální biodynamika";
    }

if(datum_procedury < dnesek){
    alert("!!! Chyba formuláře Plánování procedur !!!  \n\n  Není možné naplánovat procedutu do minulosti !");
    
    }else{

    if (datum_procedury.length == 0 || delka_procedury == 0 || typ_procedury == 0 || lektor_procedury == 0 || zacatek_procedury == 0 || detail_procedury == 0){
    alert("!!! Chyba formuláře Plánování procedur !!!  \n\n  Musíte vypnit všechna pole formuláře !");

        }else{
  if (confirm("Uložení plánované procedury:\n"+
    "\nDatum: " +datum_procedury+ 
    "\nZačátek procedury: "+zacatek_procedury+" "+
    "\nDélka procedury: "+delka_procedury+" minut"+
      "\nTyp procedury: "+typ_slovne) == true){ 

    dataPlanovanaProcedura = dataPlanovanaProcedura + "&datum_procedury="+datum_procedury;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&zacatek_procedury="+zacatek_procedury;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&delka_procedury="+delka_procedury;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&lektor_procedury="+lektor_procedury;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&prihlaseny_uzivatel="+prihlaseny_uzivatel;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&detail_procedury="+detail_procedury;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&typ_procedury="+typ_procedury;
    xhttp.open("POST", "./script/modul_psychika_procedury_insert.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(dataPlanovanaProcedura);

            }else{

            // bylo stisknuto STORNO  
            }
        }
    }

}

</script>


<?
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql_tmp = "SELECT * FROM psychika_procedury WHERE uzivatel_id = $uzivatel_id AND tmp_procedury = 0";
    $result_tmp = $conn->query($sql_tmp);
    while($radek = $result_tmp->fetch_assoc()) {

    $sql1 = "UPDATE psychika_procedury SET tmp_procedury = 1 WHERE uzivatel_id = $uzivatel_id";
   
    if ($conn->query($sql1) === TRUE) {    
    } else {
    echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    } 
        }

    //  $sql = "SELECT * FROM psychika_procedury WHERE uzivatel_id = $uzivatel_id ORDER BY stav_procedury ASC, datum_procedury ASC";
    $sql = "SELECT * FROM psychika_procedury WHERE uzivatel_id = $uzivatel_id AND tmp_procedury <> 0 ORDER BY stav_procedury ASC, datum_procedury ASC";

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
        <button type="button" class="btn btn-primary btn-sm" onclick="loadPlanovanaProceduraCerpat'.$radek["psychika_procedury_id"].'()">Čerpat proceduru</button>&nbsp;&nbsp;
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

      }else if ($radek["stav_procedury"] == 5){
        $radek["stav_procedury"] = 'Expirovaný termín';
        $procedura_stav_barva = 'f48868';       
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
    <? echo $tlacitka;?>
    <br><br>
    
  </div>
    </div>
<br>    
</div>





<script>

function loadPlanovanaProceduraStornoKlient<? echo $radek["psychika_procedury_id"];?>() {
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
        prihlaseny_uzivatel = "<? echo $_SESSION['uzivatel_jmeno_session'].' '.$_SESSION['uzivatel_prijmeni_session']; ?>"; 
        Psychika_procedury_delete_id = Psychika_procedury_delete_id + "&prihlaseny_uzivatel="+prihlaseny_uzivatel;

       if (typ_procedury == 1){
        typ_slovne = "osobní koučink";

        }else if(typ_procedury == 2){
        typ_slovne = "psychoterapie";
    
        }else{
        typ_slovne = "kraniosakrální biodynamika";
         }

        if (confirm("Storno plánované procedury.\n\nStornování procedury ze strany klienta\n"+
        "\nDatum: "+datum_procedury+
        "\nZačátek procedury: "+zacatek_procedury+" "+
        "\nKonec procedury: "+konec_procedury+" "+
        "\nDélka procedury: "+delka_procedury+" minut"+
        "\nTyp procedury: "+typ_slovne) == true){

        xhttp.open("POST", "./script/modul_psychika_procedury_storno_klient.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(Psychika_procedury_delete_id);

        }else{
          // bylo stisknuto STORNO  
      }

     }

</script>


<script>
function loadPlanovanaProceduraCerpat<? echo $radek["psychika_procedury_id"];?>() {
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
        prihlaseny_uzivatel = "<? echo $_SESSION['uzivatel_jmeno_session'].' '.$_SESSION['uzivatel_prijmeni_session']; ?>"; 
        Psychika_procedury_delete_id = Psychika_procedury_delete_id + "&prihlaseny_uzivatel="+prihlaseny_uzivatel;


       if (typ_procedury == 1){
        typ_slovne = "osobní koučink";

        }else if(typ_procedury == 2){
        typ_slovne = "psychoterapie";
    
        }else{
        typ_slovne = "kraniosakrální biodynamika";
         }

        if (confirm("Čerpání procedury\n\nOpravdu chcete uložit čerpání procedury?\n"+
        "\nDatum: "+datum_procedury+
        "\nZačátek procedury: "+zacatek_procedury+" "+
        "\nKonec procedury: "+konec_procedury+" "+
        "\nDélka procedury: "+delka_procedury+" minut"+
        "\nTyp procedury: "+typ_slovne) == true){

        xhttp.open("POST", "./script/modul_psychika_procedury_cerpat.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(Psychika_procedury_delete_id);

        }else{
          // bylo stisknuto STORNO  
      }

     }

</script>



<script>
function loadPlanovanaProceduraStornoRelax<? echo $radek["psychika_procedury_id"];?>() {
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
        prihlaseny_uzivatel = "<? echo $_SESSION['uzivatel_jmeno_session'].' '.$_SESSION['uzivatel_prijmeni_session']; ?>"; 
        Psychika_procedury_delete_id = Psychika_procedury_delete_id + "&prihlaseny_uzivatel="+prihlaseny_uzivatel;

       if (typ_procedury == 1){
        typ_slovne = "osobní koučink";

        }else if(typ_procedury == 2){
        typ_slovne = "psychoterapie";
    
        }else{
        typ_slovne = "kraniosakrální biodynamika";
         }

        if (confirm("Storno plánované procedury\n\nStornování procedury ze strany RELAXARTE\n"+
        "\nDatum: "+datum_procedury+
        "\nZačátek procedury: "+zacatek_procedury+" "+
        "\nKonec procedury: "+konec_procedury+" "+
        "\nDélka procedury: "+delka_procedury+" minut"+
        "\nTyp procedury: "+typ_slovne) == true){

        xhttp.open("POST", "./script/modul_psychika_procedury_storno_relax.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(Psychika_procedury_delete_id);

        }else{
          // bylo stisknuto STORNO  
      }

     }

</script>





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
        prihlaseny_uzivatel = "<? echo $_SESSION['uzivatel_jmeno_session'].' '.$_SESSION['uzivatel_prijmeni_session']; ?>"; 
        Psychika_procedury_delete_id = Psychika_procedury_delete_id + "&prihlaseny_uzivatel="+prihlaseny_uzivatel;

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












