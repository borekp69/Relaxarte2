<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache"); 
require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php';


// - začátek přepsání stavů propadlých procedur 
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_termin = "SELECT tcm_procedury_id  FROM tcm_procedury WHERE datum_procedury < DATE_ADD(NOW(), INTERVAL -1 DAY) AND  stav_procedury = 1";
$result_termin = $conn->query($sql_termin);
while($radek_termin = $result_termin->fetch_assoc()) {
$sql1 = "UPDATE tcm_procedury SET stav_procedury = 5, prihlaseny_uzivatel = 'Systém', datum = NOW() WHERE tcm_procedury_id = $radek_termin[tcm_procedury_id]";    
if ($conn->query($sql1) === TRUE) {    
} else {
echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
} 
    }
// - konec přepsání stavů propadlých procedur 

?>
<h4>Plánování procedur</h4>

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

<script>
function loadPlanovanaProceduraTCM() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tcm_procedury").innerHTML = this.responseText;
    }
  };
    var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0'); 
  var yyyy = today.getFullYear();
  dnesek = yyyy + '-' + mm + '-' + dd; 

 
  let dataPlanovanaProcedura = "uzivatel_id=<?echo $uzivatel_id; ?>";
  var datum_procedury = document.modul_tcm_procedury.datum_procedury.value;
  var delka_procedury = parseInt(document.modul_tcm_procedury.delka_procedury.value);
  var typ_procedury = parseInt(document.modul_tcm_procedury.typ_procedury.value); 
  var lektor_procedury = parseInt(document.modul_tcm_procedury.lektor_procedury.value);
  var zacatek_procedury = document.modul_tcm_procedury.zacatek_procedury.value;
  var prihlaseny_uzivatel = "<? echo $_SESSION['uzivatel_jmeno_session'].' '.$_SESSION['uzivatel_prijmeni_session']; ?>"; 
  var diagnoza_procedury = document.modul_tcm_procedury.tcm_diagnoza.value;
  var akupunktura_procedury =  document.modul_tcm_procedury.tcm_akupunktura.value;
  var subjektivni_pocit_klienta_procedury =  document.modul_tcm_procedury.tcm_subjektivni_pocit_klienta.value;
  var jazyk_procedury =  document.modul_tcm_procedury.tcm_jazyk.value;
  var puls_procedury =  document.modul_tcm_procedury.tcm_puls.value;
  var leva_ruka_povrchovy_tenke_strevo = document.modul_tcm_procedury.tcm_leva_ruka_povrchovy_tenke_strevo.value;
  var leva_ruka_povrchovy_zlucnik = document.modul_tcm_procedury.tcm_leva_ruka_povrchovy_zlucnik.value;
  var leva_ruka_povrchovy_mocovy_mechyr = document.modul_tcm_procedury.tcm_leva_ruka_povrchovy_mocovy_mechyr.value;
  var leva_ruka_hluboky_srdce = document.modul_tcm_procedury.tcm_leva_ruka_hluboky_srdce.value;
  var leva_ruka_hluboky_jatra = document.modul_tcm_procedury.tcm_leva_ruka_hluboky_jatra.value;
  var leva_ruka_hluboky_ledviny = document.modul_tcm_procedury.tcm_leva_ruka_hluboky_ledviny.value;
  var prava_ruka_povrchovy_tluste_strevo = document.modul_tcm_procedury.tcm_prava_ruka_povrchovy_tluste_strevo.value;
  var prava_ruka_povrchovy_zaludek = document.modul_tcm_procedury.tcm_prava_ruka_povrchovy_zaludek.value;
  var prava_ruka_povrchovy_ohrivace = document.modul_tcm_procedury.tcm_prava_ruka_povrchovy_ohrivace.value;
  var prava_ruka_hluboky_plice = document.modul_tcm_procedury.tcm_prava_ruka_hluboky_plice.value;
  var prava_ruka_hluboky_slezina_slinivka = document.modul_tcm_procedury.tcm_prava_ruka_hluboky_slezina_slinivka.value;
  var prava_ruka_hluboky_sex = document.modul_tcm_procedury.tcm_prava_ruka_hluboky_sex.value;



    if (typ_procedury == 1){
        typ_slovne = "Vstupní diagnostika TČM + Akupunktura";

        }else if(typ_procedury == 2){
        typ_slovne = "Navazující konzultace TČM + Akupunktura";

      }else if(typ_procedury == 3){
        typ_slovne = "Akutní konzultace + Akupunktura";

    
        }else{
        typ_slovne = "Konzultace";
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
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&diagnoza_procedury="+diagnoza_procedury;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&diagnoza_procedury="+diagnoza_procedury;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&akupunktura_procedury="+akupunktura_procedury;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&subjektivni_pocit_klienta_procedury="+subjektivni_pocit_klienta_procedury;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&typ_procedury="+typ_procedury;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&jazyk_procedury="+jazyk_procedury;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&puls_procedury="+puls_procedury;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&leva_ruka_povrchovy_tenke_strevo="+leva_ruka_povrchovy_tenke_strevo;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&leva_ruka_povrchovy_mocovy_mechyr="+leva_ruka_povrchovy_mocovy_mechyr;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&leva_ruka_povrchovy_zlucnik="+leva_ruka_povrchovy_zlucnik;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&leva_ruka_hluboky_srdce="+leva_ruka_hluboky_srdce;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&leva_ruka_hluboky_jatra="+leva_ruka_hluboky_jatra;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&leva_ruka_hluboky_ledviny="+leva_ruka_hluboky_ledviny;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&prava_ruka_povrchovy_tluste_strevo="+prava_ruka_povrchovy_tluste_strevo;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&prava_ruka_povrchovy_zaludek="+prava_ruka_povrchovy_zaludek;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&prava_ruka_povrchovy_ohrivace="+prava_ruka_povrchovy_ohrivace;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&prava_ruka_hluboky_plice="+prava_ruka_hluboky_plice;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&prava_ruka_hluboky_slezina_slinivka="+prava_ruka_hluboky_slezina_slinivka;
    dataPlanovanaProcedura = dataPlanovanaProcedura + "&prava_ruka_hluboky_sex="+prava_ruka_hluboky_sex;
    xhttp.open("POST", "./script/modul_tcm_procedury_insert.php", true);
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
    $sql_tmp = "SELECT * FROM tcm_procedury WHERE uzivatel_id = $uzivatel_id AND tmp_procedury = 0";
    $result_tmp = $conn->query($sql_tmp);
    while($radek = $result_tmp->fetch_assoc()) {

    $sql1 = "UPDATE tcm_procedury SET tmp_procedury = 1 WHERE uzivatel_id = $uzivatel_id";
   
    if ($conn->query($sql1) === TRUE) {    
    } else {
    echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    } 
        }



        $sql = "SELECT * FROM tcm_procedury WHERE uzivatel_id = $uzivatel_id AND tmp_procedury <> 0 ORDER BY stav_procedury ASC, datum_procedury ASC";
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
            <button type="button" class="btn btn-success btn-sm" onclick="loadPlanovanaProceduraTCMAktualizace'.$radek["tcm_procedury_id"].'()">Uložit aktualizaci plánované procedury</button>&nbsp;&nbsp;
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
        
              $radek["stav_procedury"] = 'Chyba, neočekávaný parametr!';
            }
?>



<script type="text/javascript" language="JavaScript">
function HideContent(d) {
document.getElementById(d).style.display = "none";
}
function ShowContent(d) {
document.getElementById(d).style.display = "block";
}
function ReverseDisplay(d) {
if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }
else { document.getElementById(d).style.display = "none"; }
}

</script>

<?
      
      if ($radek["typ_procedury"] == 0){

       }else if ($radek["typ_procedury"] == 1){

        $procedura = 'Vstupní diagnostika TČM + Akupunktura';

       }else if ($radek["typ_procedury"] == 2){
        $procedura = 'Navazující konzultace TČM + Akupunktura';

       }else if ($radek["typ_procedury"] == 3){
        $procedura = 'Akutní konzultace + Akupunktura';
       }else{
        $procedura = 'Konzultace';
      } 



      $lektor_procedury =  $radek["lektor_procedury"];
      require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
      $sql1 = "SELECT * FROM lektor WHERE lektor_id = $lektor_procedury LIMIT 1";
      $result1 = $conn->query($sql1);
      while($radek1 = $result1->fetch_assoc()) 
        {
          $lektor_p = $radek1["lektor_titul"]."&nbsp;".$radek1["lektor_jmeno"]."&nbsp;".$radek1["lektor_prijmeni"];
        }
        $conn->close(); 
?>


    <div class="row">
      <div class="col-sm-12"> 
        

      <div class="col-sm-3"> 
      <?echo $radek["datum_procedury"]; ?>&nbsp;Délka: <? echo $radek["delka_procedury"]?> minut
      </div>

      <div class="col-sm-2" style="background-color:#<? echo  $procedura_stav_barva ;?>;"> 
      <?echo  $radek["stav_procedury"];?>
      </div>

      <div class="col-sm-2"> 
      <? echo $lektor_p;?>
      </div>


      <div class="col-sm-4"> 
        <label>  
        <i><? echo $procedura;?></i> 
        </label>
      </div>     

      <div class="col-sm-1"> 
          <a href="javascript:ReverseDisplay('uniquename_<? echo $radek["tcm_procedury_id"];?>')">
          <button type="button" class="btn btn-default btn-sm" >
          <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Podrobnosti</button>
          </a> 
        </div>
      </div>
    </div>
 <br>

<div id="uniquename_<? echo $radek["tcm_procedury_id"];?>" style="display:none;">
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
      <label for="uzivatel">Uložil: <? echo $radek["prihlaseny_uzivatel"]; ?></label>
      <input type="text" class="form-control form-control-sm" name="ulozeni_zaznamu" maxlength="10" value="<? echo $radek["datum"]; ?>" placeholder="" readonly >
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
    <br>
    <label for="uzivatel">Diagnoza:</label>
    <textarea class="form-control" id="tcm_diagnoza" name="tcm_diagnoza" rows="1" maxlength="600" placeholder="Diagnoza" <? echo $stav_pole; ?>><? echo $radek["diagnoza_procedury"]; ?></textarea>
    </div>
  </div>    

  <div class="row">
    <div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
    <br>
    <label for="uzivatel">Akupunktura:</label>
    <textarea class="form-control" id="tcm_akupinktura" name="tcm_akupunktura" rows="1" maxlength="600" placeholder="Akupunktura" <? echo $stav_pole; ?>><? echo $radek["akupunktura_procedury"]; ?></textarea>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
    <br>
    <label for="uzivatel">TČM subjektivní pocit klienta:</label>
    <textarea class="form-control" id="tcm_subjektivni_pocit_klienta" name="tcm_subjektivni_pocit_klienta" rows="1" maxlength="600" placeholder="TČM subjektivní pocit klienta" <? echo $stav_pole; ?>><? echo $radek["subjektivni_pocit_klienta_procedury"]; ?></textarea>
    </div>
  </div>


    <div class="row">
    <div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
    <br>
    <label for="uzivatel">Jazyk:</label>
    <textarea class="form-control" id="tcm_jazyk" name="tcm_jazyk" rows="1" maxlength="600" placeholder="Jazyk" <? echo $stav_pole; ?>><? echo $radek["jazyk_procedury"]; ?></textarea>
    </div>
    </div>

  <div class="row">
    <div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
    <br>
    <label for="uzivatel">Puls:</label>
    <textarea class="form-control" id="tcm_puls" name="tcm_puls" rows="1" maxlength="600" placeholder="Puls" <? echo $stav_pole; ?>><? echo $radek["puls_procedury"]; ?></textarea>
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
        <textarea class="form-control" id="tcm_leva_ruka_povrchovy_tenke_strevo" name="tcm_leva_ruka_povrchovy_tenke_strevo" rows="1" maxlength="100" placeholder="Povrchový - Tenké střevo" <? echo $stav_pole; ?>><? echo $radek["leva_ruka_povrchovy_tenke_strevo"]; ?></textarea>
        </div>
    
        <div class="col-sm-4">
        <label for="uzivatel">Povrchový - Žlučník</label>
        <textarea class="form-control" id="tcm_leva_ruka_povrchovy_zlucnik" name="tcm_leva_ruka_povrchovy_zlucnik" rows="1" maxlength="100" placeholder="Povrchový - Žlučník" <? echo $stav_pole; ?>><? echo $radek["leva_ruka_povrchovy_zlucnik"]; ?></textarea>
        </div>


        <div class="col-sm-4">
        <label for="uzivatel">Povrchový - Močový měchýř</label>
        <textarea class="form-control" id="tcm_leva_ruka_povrchovy_mocovy_mechyr" name="tcm_leva_ruka_povrchovy_mocovy_mechyr" rows="1" maxlength="100" placeholder="Povrchový - Močový měchýř" <? echo $stav_pole; ?>><? echo $radek["leva_ruka_povrchovy_mocovy_mechyr"]; ?></textarea>
        </div>
        </div>
      </div>

      

      <div class="row">
        <div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
        <br>
        <div class="col-sm-4">
        <label for="uzivatel">Hluboký - Srdce</label>
        <textarea class="form-control" id="tcm_leva_ruka_hluboky_srdce" name="tcm_leva_ruka_hluboky_srdce" rows="1" maxlength="100" placeholder="Hluboký - Srdce" <? echo $stav_pole; ?>><? echo $radek["leva_ruka_hluboky_srdce"]; ?></textarea>
        </div>
    
        <div class="col-sm-4">
        <label for="uzivatel">Hluboký - Játra</label>
        <textarea class="form-control" id="tcm_leva_ruka_hluboky_jatra" name="tcm_leva_ruka_hluboky_jatra" rows="1" maxlength="100" placeholder="Hluboký - Játra" <? echo $stav_pole; ?>><? echo $radek["leva_ruka_hluboky_jatra"]; ?></textarea>
        </div>


        <div class="col-sm-4">
        <label for="uzivatel">Hluboký - Ledviny</label>
        <textarea class="form-control" id="tcm_leva_ruka_hluboky_ledviny" name="tcm_leva_ruka_hluboky_ledviny" rows="1" maxlength="100" placeholder="Hluboký - Ledviny" <? echo $stav_pole; ?>><? echo $radek["leva_ruka_hluboky_ledviny"]; ?></textarea>
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
        <textarea class="form-control" id="tcm_prava_ruka_povrchovy_tluste_strevo" name="tcm_prava_ruka_povrchovy_tluste_strevo" rows="1" maxlength="100" placeholder="Povrchový - Tlusté střevo" <? echo $stav_pole; ?>><? echo $radek["prava_ruka_povrchovy_tluste_strevo"]; ?></textarea>
        </div>
    
        <div class="col-sm-4">
        <label for="uzivatel">Povrchový - Žaludek</label>
        <textarea class="form-control" id="tcm_prava_ruka_povrchovy_zaludek" name="tcm_prava_ruka_povrchovy_zaludek" rows="1" maxlength="100" placeholder="Povrchový - Žaludek" <? echo $stav_pole; ?>><? echo $radek["prava_ruka_povrchovy_zaludek"]; ?></textarea>
        </div>


        <div class="col-sm-4">
        <label for="uzivatel">Povrchový - ohřívače</label>
        <textarea class="form-control" id="tcm_prava_ruka_povrchovy_ohrivace" name="tcm_prava_ruka_povrchovy_ohrivace" rows="1" maxlength="100" placeholder="Povrchový - ohřívače" <? echo $stav_pole; ?>><? echo $radek["prava_ruka_povrchovy_ohrivace"]; ?></textarea>
        </div>
        </div>
      </div>

      

      <div class="row">
        <div class="col-sm-12" style="background-color:#<? echo  $procedura_stav_barva ;?>;">
        <br>
        <div class="col-sm-4">
        <label for="uzivatel">Hluboký - Plíce</label>
        <textarea class="form-control" id="tcm_prava_ruka_hluboky_plice" name="tcm_prava_ruka_hluboky_plice" rows="1" maxlength="100" placeholder="Hluboký - Plíce" <? echo $stav_pole; ?>><? echo $radek["prava_ruka_hluboky_plice"]; ?></textarea>
        </div>
    
        <div class="col-sm-4">
        <label for="uzivatel">Hluboký - Slezina, slinivka</label>
        <textarea class="form-control" id="tcm_prava_ruka_hluboky_slezina_slinivka" name="tcm_prava_ruka_hluboky_slezina_slinivka" rows="1" maxlength="100" placeholder="Hluboký - Slezina, slinivka" <? echo $stav_pole; ?>><? echo $radek["prava_ruka_hluboky_slezina_slinivka"]; ?></textarea>
        </div>


        <div class="col-sm-4">
        <label for="uzivatel">Hluboký - Oběh - sex</label>
        <textarea class="form-control" id="tcm_prava_ruka_hluboky_sex" name="tcm_prava_ruka_hluboky_sex" rows="1" maxlength="100" placeholder="Hluboký - Oběh - sex" <? echo $stav_pole; ?>><? echo $radek["prava_ruka_hluboky_sex"]; ?></textarea>
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
</div>













<script>
    function loadPlanovanaProceduraTCMAktualizace<? echo $radek["tcm_procedury_id"];?>() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tcm_procedury<? echo $radek["tcm_procedury_id"];?>").innerHTML = this.responseText;
      }
    };
  
    prihlaseny_uzivatel = "<? echo $_SESSION['uzivatel_jmeno_session'].' '.$_SESSION['uzivatel_prijmeni_session']; ?>"; 
    diagnoza_procedury = document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.tcm_diagnoza.value; 
    akupunktura_procedury = document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.tcm_akupunktura.value; 
    subjektivni_pocit_klienta = document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.tcm_subjektivni_pocit_klienta.value; 
    jazyk = document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.tcm_jazyk.value; 
    puls = document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.tcm_puls.value; 
    leva_ruka_povrchovy_tenke_strevo  = document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.tcm_leva_ruka_povrchovy_tenke_strevo.value; 
    leva_ruka_povrchovy_zlucnik  = document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.tcm_leva_ruka_povrchovy_zlucnik.value; 
    leva_ruka_povrchovy_mocovy_mechyr = document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.tcm_leva_ruka_povrchovy_mocovy_mechyr.value;
    leva_ruka_hluboky_srdce = document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.tcm_leva_ruka_hluboky_srdce.value; 
    leva_ruka_hluboky_jatra = document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.tcm_leva_ruka_hluboky_jatra.value; 
    leva_ruka_hluboky_ledviny = document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.tcm_leva_ruka_hluboky_ledviny.value; 
    prava_ruka_povrchovy_tluste_strevo = document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.tcm_prava_ruka_povrchovy_tluste_strevo.value; 
    prava_ruka_povrchovy_zaludek = document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.tcm_prava_ruka_povrchovy_zaludek.value; 
    prava_ruka_povrchovy_ohrivace = document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.tcm_prava_ruka_povrchovy_ohrivace.value; 
    prava_ruka_hluboky_plice = document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.tcm_prava_ruka_hluboky_plice.value; 
    prava_ruka_hluboky_slezina_slinivka = document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.tcm_prava_ruka_hluboky_slezina_slinivka.value; 
    prava_ruka_hluboky_sex = document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.tcm_prava_ruka_hluboky_sex.value; 
    
    var TCM_procedury_aktualizace_id = document.modul_tcm_procedury_update<? echo $radek["tcm_procedury_id"];?>.tcm_procedury_id.value; 
        TCM_procedury_aktualizace_id = TCM_procedury_aktualizace_id +"&tcm_procedury_id="+TCM_procedury_aktualizace_id; 
        TCM_procedury_aktualizace_id = TCM_procedury_aktualizace_id + "&prihlaseny_uzivatel="+prihlaseny_uzivatel;
        TCM_procedury_aktualizace_id = TCM_procedury_aktualizace_id + "&diagnoza_procedury="+diagnoza_procedury;
        TCM_procedury_aktualizace_id = TCM_procedury_aktualizace_id + "&akupunktura_procedury="+akupunktura_procedury;
        TCM_procedury_aktualizace_id = TCM_procedury_aktualizace_id + "&subjektivni_pocit_klienta_procedury="+subjektivni_pocit_klienta;
        TCM_procedury_aktualizace_id = TCM_procedury_aktualizace_id + "&jazyk_procedury="+jazyk;
        TCM_procedury_aktualizace_id = TCM_procedury_aktualizace_id + "&puls_procedury="+puls;
        TCM_procedury_aktualizace_id = TCM_procedury_aktualizace_id + "&leva_ruka_povrchovy_tenke_strevo="+leva_ruka_povrchovy_tenke_strevo;
        TCM_procedury_aktualizace_id = TCM_procedury_aktualizace_id + "&leva_ruka_povrchovy_zlucnik="+leva_ruka_povrchovy_zlucnik;
        TCM_procedury_aktualizace_id = TCM_procedury_aktualizace_id + "&leva_ruka_povrchovy_mocovy_mechyr="+leva_ruka_povrchovy_mocovy_mechyr;
        TCM_procedury_aktualizace_id = TCM_procedury_aktualizace_id + "&leva_ruka_hluboky_srdce="+leva_ruka_hluboky_srdce;
        TCM_procedury_aktualizace_id = TCM_procedury_aktualizace_id + "&leva_ruka_hluboky_jatra="+leva_ruka_hluboky_jatra;
        TCM_procedury_aktualizace_id = TCM_procedury_aktualizace_id + "&leva_ruka_hluboky_ledviny="+leva_ruka_hluboky_ledviny;
        TCM_procedury_aktualizace_id = TCM_procedury_aktualizace_id + "&prava_ruka_povrchovy_tluste_strevo="+prava_ruka_povrchovy_tluste_strevo;
        TCM_procedury_aktualizace_id = TCM_procedury_aktualizace_id + "&prava_ruka_povrchovy_zaludek="+prava_ruka_povrchovy_zaludek;
        TCM_procedury_aktualizace_id = TCM_procedury_aktualizace_id + "&prava_ruka_povrchovy_ohrivace="+prava_ruka_povrchovy_ohrivace;
        TCM_procedury_aktualizace_id = TCM_procedury_aktualizace_id + "&prava_ruka_hluboky_plice="+prava_ruka_hluboky_plice;
        TCM_procedury_aktualizace_id = TCM_procedury_aktualizace_id + "&prava_ruka_hluboky_slezina_slinivka="+prava_ruka_hluboky_slezina_slinivka;
        TCM_procedury_aktualizace_id = TCM_procedury_aktualizace_id + "&prava_ruka_hluboky_sex="+prava_ruka_hluboky_sex;

        xhttp.open("POST", "./script/modul_tcm_procedury_aktualizace.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(TCM_procedury_aktualizace_id);
        alert("Uložení:\nAktualizovaný záznam plánované procedury byl uložen.");

     }
</script>



<script>
  function loadPlanovanaProceduraTCMStornoKlient<? echo $radek["tcm_procedury_id"];?>() {
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

        if (confirm("Storno plánované procedury.\n\nStornování procedury ze strany klienta\n"+
        "\nDatum: "+datum_procedury+
        "\nZačátek procedury: "+zacatek_procedury+" "+
        "\nKonec procedury: "+konec_procedury+" "+
        "\nDélka procedury: "+delka_procedury+" minut"+
        "\nTyp procedury: "+typ_slovne) == true){

        xhttp.open("POST", "./script/modul_tcm_procedury_storno_klient.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(TCM_procedury_delete_id);

        }else{
          // bylo stisknuto STORNO  
      }
     }
</script>



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


<script>
  function loadPlanovanaProceduraTCMStornoRelax<? echo $radek["tcm_procedury_id"];?>() {
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


        if (confirm("Storno plánované procedury\n\nStornování procedury ze strany RELAXARTE\n"+
        "\nDatum: "+datum_procedury+
        "\nZačátek procedury: "+zacatek_procedury+" "+
        "\nKonec procedury: "+konec_procedury+" "+
        "\nDélka procedury: "+delka_procedury+" minut"+
        "\nTyp procedury: "+typ_slovne) == true){

        xhttp.open("POST", "./script/modul_tcm_procedury_storno_relax.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(TCM_procedury_delete_id);

        }else{
          // bylo stisknuto STORNO  
      }

     }

</script>



<script>
  function loadPlanovanaProceduraTCMCerpat<? echo $radek["tcm_procedury_id"];?>() {
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

        if (confirm("Čerpání procedury\n\nOpravdu chcete uložit čerpání procedury?\n"+
        "\nDatum: "+datum_procedury+
        "\nZačátek procedury: "+zacatek_procedury+" "+
        "\nKonec procedury: "+konec_procedury+" "+
        "\nDélka procedury: "+delka_procedury+" minut"+
        "\nTyp procedury: "+typ_slovne) == true){

        xhttp.open("POST", "./script/modul_tcm_procedury_cerpat.php", true);
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
