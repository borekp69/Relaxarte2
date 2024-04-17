<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache"); 
require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php';

//---------------------- ověření existence záznamu v DB začátek ----------------------
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_zdravi_spanek = "SELECT * FROM zdravi_spanek WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result_zdravi_spanek = $conn->query($sql_zdravi_spanek);
$conn->close();
$pocet_zaznamu_zdravi_spanek = mysqli_num_rows($result_zdravi_spanek);
//---------------------- ověření existence záznamu v DB konec ---------------------


if ($pocet_zaznamu_zdravi_spanek == 0){

?>
    <br>
    <div class="row">
    <div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Spánek</h4>
    <div class="alert alert-info">
    Nejdříve musíte vyplnit záložku Zdraví.
    </div>   
    </div>
    </div>
    <br>
    <a href="krok_04_ulozeni.php?uzivatel_id=<? echo encrypt_decrypt('encrypt', $uzivatel_id);?>" type="button" class="btn btn-warning btn-sm">Doplnit data do karty zdraví</a>


<?
}else{

    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql= "SELECT * FROM zdravi_spanek WHERE uzivatel_id = $uzivatel_id LIMIT 1";
    $result = $conn->query($sql);
    while($radek = $result->fetch_assoc()) {
    $tcm_spanek_sny = $radek["spanek_sny"];
    $tcm_spanek_delka = $radek["spanek_delka"];
    $tcm_spanek_buzeni = $radek["spanek_buzeni"]; 
    $tcm_spanek_kvalita = $radek["spanek_kvalita"];  
    $tcm_spanek_v_kolik_hodin = $radek["spanek_v_kolik_hodin"];    
    $datum = $radek["datum"];
    } 
$conn->close(); 
?>
<script src="./js/jencisla.js"></script> 
    <br>
<div id="tcmSpanek">   
    <div class="row">
    <div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Spánek</h4>
    <form id="tcm_spanek" name="tcm_spanek" method="post">
    <div class="row">

    <div class="col-sm-2">
    <label for="uzivatel">Zdají se mi sny:</label>
    <select class="form-control" id="spanek_sny" name="spanek_sny">
    <?
    if ($tcm_spanek_sny == 1){ ?>
    <option value="1" selected>Ano</option> 
    <option value="2">Ne</option>
    <option value="3">mám noční můry</option> 

    <? }elseif ($tcm_spanek_sny == 2){ ?>
    <option value="1">Ano</option> 
    <option value="2"selected>Ne</option>
    <option value="3">mám noční můry</option> 
    <? }else{ ?>
    <option value="1">Ano</option> 
    <option value="2">Ne</option>
    <option value="3" selected>mám noční můry</option> 

   <? } ?>

    

    </select>
    </div>

    <div class="col-sm-2">
    <label for="uzivatel">Délka spánku:</label>
    <input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" name="spanek_delka" maxlength="2" value = "<? echo $tcm_spanek_delka; ?>" placeholder="Průměrně hodin" required>
    </div>

    <div class="col-sm-3">
    <label for="uzivatel">V kolik hodin se běžně budíte:</label>
    <input type="text" class="form-control form-control-sm" name="spanek_buzeni" maxlength="10" value = "<? echo $tcm_spanek_buzeni; ?>" placeholder="Uveďte čas" required>
    </div>


    <div class="col-sm-3">
    <label for="uzivatel">Kvalita spánku:</label>
    <select class="form-control" name="spanek_kvalita" id="zobrazspanek">
 
 
    <? if ($tcm_spanek_kvalita == 1){?>
    <option value="1" selected>Budím se odpočatý</option> 
    <option value="2">Budím se unavený</option>
    <option value="3">Budím se v průběhu noci</option>  
    
    <? }elseif ($tcm_spanek_kvalita == 2) {?>
    <option value="1">Budím se odpočatý</option> 
    <option value="2" selected>Budím se unavený</option>
    <option value="3">Budím se v průběhu noci</option> 
    
    <? }else{?>
    <option value="1">Budím se odpočatý</option> 
    <option value="2">Budím se unavený</option>
    <option value="3" selected>Budím se v průběhu noci</option> 
    <? }?>

    </select>
    </div>

    <div class="col-sm-2">
    <div class="form-group" id="spanekFieldGroupDiv">
    <label for="uzivatel">V kolik hodin?</label>
    <input type="text"  class="form-control form-control-sm" name="spanek_v_kolik_hodin" maxlength="10" placeholder="Uveďte čas" value = "<? echo $tcm_spanek_v_kolik_hodin; ?>">
    </div> 
    </div>
    <script src="./js/spanek.js"></script>

    </div>
    <br>
    </div>
    </div>
   
    </form>
    <br>
    <button type="submit" class="btn btn-success btn-sm"  onclick="loadSpanek()">&nbsp;&nbsp;Uložit spánek&nbsp;&nbsp;</button>
    <br><br>

</div>

<script>

function loadSpanek() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tcmSpanek").innerHTML = this.responseText;
    }
  };
 
  let dataSpanek = "uzivatel_id=<?echo $uzivatel_id; ?>";
    spanek_sny = parseInt(document.tcm_spanek.spanek_sny.value);
    spanek_delka = parseInt(document.tcm_spanek.spanek_delka.value);
    spanek_kvalita = parseInt(document.tcm_spanek.spanek_kvalita.value);   
    spanek_buzeni = document.tcm_spanek.spanek_buzeni.value; 
    spanek_v_kolik_hodin = document.tcm_spanek.spanek_v_kolik_hodin.value; 

    dataSpanek = dataSpanek + "&spanek_sny="+spanek_sny;
    dataSpanek = dataSpanek + "&spanek_delka="+spanek_delka;
    dataSpanek = dataSpanek + "&spanek_kvalita="+spanek_kvalita;
    dataSpanek = dataSpanek + "&spanek_buzeni="+spanek_buzeni;
    dataSpanek = dataSpanek + "&spanek_v_kolik_hodin="+spanek_v_kolik_hodin;

  xhttp.open("POST", "./script/spanek_tcm_update.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(dataSpanek);
  alert("Uložení:\nZáznam o kvalitě spánku byl aktualizován.");
     }

</script>
<?
}   

?>

