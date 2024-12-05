<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");

//require "sifrovani_dat.php";



//echo 'uzivatel_id: '.$uzivatel_id.'<br>';

?>
<script src="./js/jencisla.js"></script> 
<h4>Tréninkový plán:</h4>

<div id="treninkovy_plan_<?echo $uzivatel_id; ?>">
 <form id="treninkovy_plan_<?echo $uzivatel_id; ?>" name="treninkovy_plan_<?echo $uzivatel_id; ?>" method="post">    

    <div class="row">
        <div class="col-sm-12" style="background-color:#DBDBDB;">        
    
                    <div class="col-sm-2">
                        <br>
                        <label for="uzivatel">Datum od:</label>
                        <input type="date" class="form-control form-control-sm" name="datum_treninku_zacatek"  value = "" required>
                    </div>  

                    <div class="col-sm-2">
                        <br>
                        <label for="uzivatel">Datum do:</label>
                        <input type="date" class="form-control form-control-sm" name="datum_treninku_konec"  value = "" required>
                    </div> 
                    
                    <div class="col-sm-3">
                        <br>
                        <label for="uzivatel">Počet plánovaných lekcí:</label>                        
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" id="pocet_lekci" value = "" name="pocet_lekci" maxlength="2" placeholder="Počet plánovaných lekcí">
                    </div>   
                    
                    <div class="col-sm-2">
                        <br>
                        <label for="uzivatel">K čerpání:</label>                        
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" id="k_cerpani" value = "" name="k_cerpani" maxlength="2" placeholder="Počet lekcí k čerpání" readonly>
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
                
                <div class="col-sm-4">
                    <br>
                    <label for="uzivatel">Typ tréninku:</label>
                    <select class="form-control" id="typ_treninku" name="typ_treninku" required> 
                    <option value="0"> Vyberte možnost</option> 
                    <option value="1">individuální</option>
                    <option value="2">skupinový</option>
                    <option value="3">kombinace</option>
                    </select>
                </div> 





                    <div class="col-sm-4">
                        <br/>
                        <label for="uzivatel">Typ tréninku skupinový:</label>
                        <div class="checkbox">
                            <label><input type="checkbox" name="dynamicke_cviceni">Dynamické cvičení</label>
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" name="dynamicka_meditace">Dynamická meditace</label>
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" name="zdrave_jogove_protazeni">Zdravé jógové protažení</label>
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" name="tajczy_cjuan">Tajczy cjuaň</label>
                        </div>                
                    
                    
                    </div> 








                    <div class="col-sm-4">
                        <br>
                        <label for="uzivatel">Způsob tréninku:</label>

                        <div class="checkbox">
                            <label><input type="checkbox" name="zvyseni_kondice">zvýšení kondice</label>
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" name="nabrani_svalove_hmoty">nabrání svalové hmoty</label>
                        </div> 

                        <div class="checkbox">
                            <label><input type="checkbox" name="dychani_posileni_hss">dýchání, posílení HSS</label>
                        </div> 

                        <div class="checkbox">
                            <label><input type="checkbox" name="posileni_panevniho_dna">posílení pánevního dna</label>
                        </div>
                        
                        <div class="checkbox">
                            <label><input type="checkbox" name="stabilizace_kloubu">stabilizace kloubů</label>
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" name="srovnani_patere">srovnání páteře</label>
                        </div> 

                        <div class="checkbox">
                            <label><input type="checkbox" name="energeticka_harmonizace">energetická harmonizace</label>
                        </div>  
                    
                        <div class="checkbox">
                            <label><input type="checkbox" name="dysbalance">dysbalance</label>
                        </div> 

                        
                        <div class="checkbox">
                            <label><input type="checkbox" name="koordinace">koordinace</label>
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" name="psychika">psychika</label>
                        </div>
                       
                     
                       




                    </div>
    
            </div>


        </div>

                <div class="row">
                    <div class="col-sm-12" style="background-color:#DBDBDB;">
                        <br/>
                        <label for="uzivatel">Detail zaměření:</label>
                        <textarea class="form-control" id="detail_zamereni" name="detail_zamereni" rows="2" maxlength="200" style="background-color:#FFFFFF;"></textarea>
                        <br/>                     
                    </div>
                </div>    





                </form>
  <br>
  <button type="submit" class="btn btn-success btn-sm"  onclick="loadTreninkovy_plan_<?echo $uzivatel_id; ?>()">&nbsp;&nbsp;Uložit tréninkový plán&nbsp;&nbsp;</button>  

</div>
<br>
<script>
 function loadTreninkovy_plan_<?echo $uzivatel_id; ?>() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("treninkovy_plan_<?echo $uzivatel_id; ?>").innerHTML = this.responseText;
    }
  };
  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0'); 
  var yyyy = today.getFullYear();
  dnesek = yyyy + '-' + mm + '-' + dd; 

  let dataTreninkovy_plan = "uzivatel_id=<?echo $uzivatel_id; ?>";

  var datum_treninku_zacatek = document.treninkovy_plan_<?echo $uzivatel_id; ?>.datum_treninku_zacatek.value;
  var datum_treninku_konec = document.treninkovy_plan_<?echo $uzivatel_id; ?>.datum_treninku_konec.value;
  var pocet_lekci =  document.treninkovy_plan_<?echo $uzivatel_id; ?>.pocet_lekci.value;
  var detail_zamereni = document.treninkovy_plan_<?echo $uzivatel_id; ?>.detail_zamereni.value;  
  var lektor_procedury = parseInt(document.treninkovy_plan_<?echo $uzivatel_id; ?>.lektor_procedury.value);  // dodělat lektory do konfirm okna
  var typ_treninku = parseInt(document.treninkovy_plan_<?echo $uzivatel_id; ?>.typ_treninku.value); // dodělat typ tréninku do konfirm okna

    var dynamicke_cviceni = document.treninkovy_plan_<?echo $uzivatel_id; ?>.dynamicke_cviceni;
    
     if(dynamicke_cviceni.checked) {
                dynamicke_cviceni = 1;
    }else{
                dynamicke_cviceni= 0;
    }

    
    var dynamicka_meditace = document.treninkovy_plan_<?echo $uzivatel_id; ?>.dynamicka_meditace;
        if(dynamicka_meditace.checked) {
                dynamicka_meditace = 1;
    }else{
                dynamicka_meditace= 0;
    }

    
    var zdrave_jogove_protazeni = document.treninkovy_plan_<?echo $uzivatel_id; ?>.zdrave_jogove_protazeni;
        if(zdrave_jogove_protazeni.checked) {
                zdrave_jogove_protazeni = 1;
    }else{
                zdrave_jogove_protazeni= 0;
    } 

    
    var tajczy_cjuan = document.treninkovy_plan_<?echo $uzivatel_id; ?>.tajczy_cjuan;
        if(tajczy_cjuan.checked) {
                tajczy_cjuan = 1;
    }else{
                tajczy_cjuan= 0;
    }


    var zvyseni_kondice = document.treninkovy_plan_<?echo $uzivatel_id; ?>.zvyseni_kondice;
        if(zvyseni_kondice.checked) {
            zvyseni_kondice = 1;
    }else{
        zvyseni_kondice= 0;
    }

    var nabrani_svalove_hmoty = document.treninkovy_plan_<?echo $uzivatel_id; ?>.nabrani_svalove_hmoty;
        if(nabrani_svalove_hmoty.checked) {
            nabrani_svalove_hmoty = 1;
    }else{
        nabrani_svalove_hmoty= 0;
    }


    var dychani_posileni_hss = document.treninkovy_plan_<?echo $uzivatel_id; ?>.dychani_posileni_hss;
        if(dychani_posileni_hss.checked) {
            dychani_posileni_hss = 1;
    }else{
        dychani_posileni_hss= 0;
    }


    var posileni_panevniho_dna = document.treninkovy_plan_<?echo $uzivatel_id; ?>.posileni_panevniho_dna;
        if(posileni_panevniho_dna.checked) {
            posileni_panevniho_dna = 1;
    }else{
        posileni_panevniho_dna= 0;
    }


    var stabilizace_kloubu = document.treninkovy_plan_<?echo $uzivatel_id; ?>.stabilizace_kloubu;
        if(stabilizace_kloubu.checked) {
            stabilizace_kloubu = 1;
    }else{
        stabilizace_kloubu= 0;
    }


    var srovnani_patere = document.treninkovy_plan_<?echo $uzivatel_id; ?>.srovnani_patere;
        if(srovnani_patere.checked) {
            srovnani_patere = 1;
    }else{
        srovnani_patere= 0;
    }

    var energeticka_harmonizace = document.treninkovy_plan_<?echo $uzivatel_id; ?>.energeticka_harmonizace;
        if(energeticka_harmonizace.checked) {
            energeticka_harmonizace = 1;
    }else{
        energeticka_harmonizace= 0;
    }


    var dysbalance = document.treninkovy_plan_<?echo $uzivatel_id; ?>.dysbalance;
        if(dysbalance.checked) {
            dysbalance = 1;
    }else{
        dysbalance= 0;
    }

    var koordinace = document.treninkovy_plan_<?echo $uzivatel_id; ?>.koordinace;
        if(koordinace.checked) {
            koordinace = 1;
    }else{
        koordinace= 0;
    }

    var psychika = document.treninkovy_plan_<?echo $uzivatel_id; ?>.psychika;
        if(psychika.checked) {
            psychika = 1;
    }else{
        psychika= 0;
    }




var prihlaseny_uzivatel = "<? echo $_SESSION['uzivatel_jmeno_session'].' '.$_SESSION['uzivatel_prijmeni_session']; ?>"; 
var lekt = document.treninkovy_plan_<?echo $uzivatel_id; ?>.lektor_procedury;
var lektorConfirm = lekt.options[lekt.selectedIndex].text;
var TypTren= document.treninkovy_plan_<?echo $uzivatel_id; ?>.typ_treninku;
var TypTrenConfirm = TypTren.options[TypTren.selectedIndex].text;



  if(datum_treninku_zacatek < dnesek){
        alert("!!! Chyba formuláře Tréninkový plán !!!  \n  Není možné naplánovat trénink do minulosti !");
    
    }else{

    if (datum_treninku_zacatek.length == 0 || datum_treninku_konec.length == 0 || lektor_procedury == 0 || typ_treninku == 0 || pocet_lekci == 0){
        alert("!!! Chyba formuláře Tréninkový plán !!!  \n\n  Musíte vypnit všechna pole formuláře !");

        }else{

  if (confirm("Uložení tréninkového plánu:\n"+
    "\nDatum od: " + datum_treninku_zacatek + 
    "\nDatum do: "+ datum_treninku_konec +" "+
    "\nPočet lekcí: "+ pocet_lekci +" "+   
    "\nTyp tréninku: "+ TypTrenConfirm +" "+ 
    "\nLektor: "+ lektorConfirm +" \n"+ 
    "\nDetail zaměření: "+detail_zamereni) == true){ 



<?
        function generujDotaz($trenink)
            {
                echo 'dataTreninkovy_plan = dataTreninkovy_plan + "&'.$trenink.'="+'.$trenink.";\n";
            }

        generujDotaz("detail_zamereni"); 
        generujDotaz("datum_treninku_zacatek"); 
        generujDotaz("datum_treninku_konec"); 
        generujDotaz("pocet_lekci");
        generujDotaz("lektor_procedury");
        generujDotaz("typ_treninku");
        generujDotaz("dynamicke_cviceni");
        generujDotaz("dynamicka_meditace");
        generujDotaz("zdrave_jogove_protazeni");
        generujDotaz("tajczy_cjuan");
        generujDotaz("zvyseni_kondice");
        generujDotaz("nabrani_svalove_hmoty");
        generujDotaz("dychani_posileni_hss");
        generujDotaz("posileni_panevniho_dna");
        generujDotaz("stabilizace_kloubu");
        generujDotaz("srovnani_patere");
        generujDotaz("energeticka_harmonizace");
        generujDotaz("dysbalance");
        generujDotaz("koordinace");
        generujDotaz("psychika");
        generujDotaz("prihlaseny_uzivatel");
?>

    xhttp.open("POST", "./script/modul_trenink_insert.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(dataTreninkovy_plan);
    alert("Uložení:\nZáznam byl uložen.");

            }else{

            // bylo stisknuto STORNO  
              }
            }
        }
  


}
</script>   


    <?
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql_trenink_plan = "SELECT * FROM treninkovy_plan WHERE uzivatel_id = $uzivatel_id ";
    $result_trenink_plan = $conn->query($sql_trenink_plan);
            while($radek_trenink_plan = $result_trenink_plan->fetch_assoc()) {
                $datum_treninku_zacatek = $radek_trenink_plan["datum_treninku_zacatek"];
                $datum_treninku_konec = $radek_trenink_plan["datum_treninku_konec"];
                $pocet_lekci = $radek_trenink_plan["pocet_lekci"];
                $k_cerpani = $radek_trenink_plan["k_cerpani"];
                $lektor_procedury =  $radek_trenink_plan["lektor_procedury"];
                $typ_treninku = $radek_trenink_plan["typ_treninku"];
                $detail_zamereni = $radek_trenink_plan["detail_zamereni"]; 
                $skupinovy_dynamicke_cviceni = $radek_trenink_plan["skupinovy_dynamicke_cviceni"]; 
                $skupinovy_dynamicka_meditace = $radek_trenink_plan["skupinovy_dynamicka_meditace"]; 
                $skupinovy_zdrave_jogove_protazeni = $radek_trenink_plan["skupinovy_zdrave_jogove_protazeni"]; 
                $skupinovy_tajczy_cjuan = $radek_trenink_plan["skupinovy_tajczy_cjuan"]; 
                $zpusob_zvyseni_kondice = $radek_trenink_plan["zpusob_zvyseni_kondice"];
                $zpusob_nabrani_svalove_hmoty = $radek_trenink_plan["zpusob_nabrani_svalove_hmoty"];
                $zpusob_dychani_posileni_hss = $radek_trenink_plan["zpusob_dychani_posileni_hss"];
                $zpusob_posileni_panevniho_dna = $radek_trenink_plan["zpusob_posileni_panevniho_dna"];
                $zpusob_stabilizace_kloubu = $radek_trenink_plan["zpusob_stabilizace_kloubu"];
                $zpusob_srovnani_patere = $radek_trenink_plan["zpusob_srovnani_patere"];
                $zpusob_energeticka_harmonizace = $radek_trenink_plan["zpusob_energeticka_harmonizace"];
                $zpusob_dysbalance = $radek_trenink_plan["zpusob_dysbalance"];
                $zpusob_koordinace  = $radek_trenink_plan["zpusob_koordinace"];
                $zpusob_psychika = $radek_trenink_plan["zpusob_psychika"];
                $prihlaseny_uzivatel = $radek_trenink_plan["prihlaseny_uzivatel"];
                $datum = $radek_trenink_plan["datum"];
                $stav_treninku = $radek_trenink_plan["stav_treninku"];  
                $treninkovy_plan_id = $radek_trenink_plan["treninkovy_plan_id"];  


    if ($stav_treninku == 1){ //naplanovano
        $barva_box = '#a1facd';
        $stav_treninku_str = 'Naplánováno';
       



    }elseif($stav_treninku == 2){ //vycerpano
        $barva_box = '#bfb8fa';
        $stav_treninku_str = 'Vyčerpáno'; 

    }elseif($stav_treninku == 3){ //stornováno klientem
        $barva_box = '#eee4a9';
        $stav_treninku_str = 'Stornováno klientem'; 

    }elseif($stav_treninku == 4){ //stornováno Relaxartem
        $barva_box = '#eee4a9';
        $stav_treninku_str = 'Stornováno Relexartem'; 

    }else{
        $barva_box = '#828283'; // chybovy stav
        $stav_treninku_str = 'Chybný stav'; 
 }
    ?>



<?              if ($typ_treninku == 1){  
                    $typ_treninku_tmp = 'individuální';

                    }else if ($typ_treninku == 2){ 
                    $typ_treninku_tmp = 'skupinový';
                
                    }else if ($typ_treninku == 3){ 
                        $typ_treninku_tmp = 'kombinace';  
                
                    }else{ 
                        $typ_treninku_tmp = 'Chybný stav tréninku';
                    }

                                require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                                $sql = "SELECT * FROM lektor WHERE lektor_id = $lektor_procedury";
                                $result = $conn->query($sql);
                                while($radek = $result->fetch_assoc()) {
                                $lektor = $radek["lektor_titul"].' '. $radek["lektor_prijmeni"].' '.$radek["lektor_jmeno"];                               
                                } 
                                $conn->close();
                                ?>
<div class="row">
<div class="col-sm-12">  
        

      <div class="col-sm-3"> 
      <b>Typ tréninku: <? echo $typ_treninku_tmp;?></b> 
      </div>

      <div class="col-sm-3" style="background-color:<? echo $barva_box; ?>;"> 
      Stav: <? echo $stav_treninku_str?> 
      </div>

      <div class="col-sm-2"> 
      <b>K čerpání: <? echo  $k_cerpani; ?></b> 
      </div>

      <div class="col-sm-3"> 
      <b><? echo $lektor;?></b>
      </div>


     


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

      
<div class="col-sm-1"> 
          <a href="javascript:ReverseDisplay('uniquename_T<? echo $treninkovy_plan_id;?>')">
          <button type="button" class="btn btn-default btn-sm" >
          <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Podrobnosti</button>
          </a> 
        </div>
      </div>
    </div>
 <br>














 <div id="uniquename_T<? echo $treninkovy_plan_id; ?>" style="display:none;">

    <div id="treninkovy_plan<?echo $treninkovy_plan_id; ?>">
    <form id="treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>" name="treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>" method="post">   
            <div class="row">
        <div class="col-sm-12" style="background-color:<? echo $barva_box; ?>;">        
    
                    <div class="col-sm-2">
                        <br>
                        <label for="uzivatel">Datum od:</label>
                        <input type="date" class="form-control form-control-sm" name="datum_treninku_zacatek"  value = "<?echo $datum_treninku_zacatek;?>" readonly>
                    </div>  

                    <div class="col-sm-2">
                        <br>
                        <label for="uzivatel">Datum do:</label>
                        <input type="date" class="form-control form-control-sm" name="datum_treninku_konec"  value = "<?echo $datum_treninku_konec;?>" readonly>
                    </div> 
                    
                    <div class="col-sm-3">
                        <br>
                        <label for="uzivatel">Počet plánovaných lekcí:</label>                        
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" id="pocet_lekci" value = "<? echo $pocet_lekci;?> " name="pocet_lekci" maxlength="2" placeholder="Počet plánovaných lekcí"  readonly>
                    </div>   
                    
                    <div class="col-sm-2">
                        <br>
                        <label for="uzivatel">K čerpání:</label>                        
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" id="k_cerpani" value = "<? echo $k_cerpani;?>" name="k_cerpani" maxlength="2" placeholder="Počet lekcí k čerpání" readonly>
                    </div>  
                    
                    
                        <div class="col-sm-3">
                                <br>
                                <label for="uzivatel">Lektor:</label>
                              
                              <input type="text" id="lektor" name="lektor" class="form-control form-control-sm" value = "<? echo $lektor;?>" readonly>                             
                        </div>
        </div> 
     </div>




        <div class="row">
            <div class="col-sm-12" style="background-color:<? echo $barva_box; ?>;"> 
            <div class="col-sm-3">
            <br>
            <label for="uzivatel">Stav tréninku:</label>
            <input type="text" id="stav_treninku_str" name="stav_treninku_str" class="form-control form-control-sm" value = "<? echo $stav_treninku_str;?>" readonly> 
            </div>

            <div class="col-sm-3">
            <br>
            <label for="uzivatel">Uložil:</label>
            <input type="text" id="prihlaseny_uzivatel" name="prihlaseny_uzivatel" class="form-control form-control-sm" value = "<? echo $prihlaseny_uzivatel;?>" readonly> 
            </div>

            <div class="col-sm-3">
            <br>
            <label for="uzivatel">Datum:</label>
            <input type="text" id="datum" name="datum" class="form-control form-control-sm" value = "<? echo $datum;?>" readonly> 
            </div>


    
             </div>   

        </div>      


            <div class="row">  
            <div class="col-sm-12" style="background-color:<? echo $barva_box; ?>;">                
                <div class="col-sm-4">
                    <br>
                    <label for="uzivatel">Typ tréninku:</label>
                    <select class="form-control" id="typ_treninku" name="typ_treninku" disabled>
                    <option value="0"> Vyberte možnost</option>                    
                  <? if ($typ_treninku == 1){  ?>
                    <option value="0"> Vyberte možnost</option>                      
                    <option value="1" selected>individuální</option>
                    <option value="2">skupinový</option>
                    <option value="3">kombinace</option>                    
                    <?
                    }else if ($typ_treninku == 2){ ?>
                    <option value="0"> Vyberte možnost</option> 
                    <option value="1">individuální</option>
                    <option value="2" selected>skupinový</option>
                    <option value="3">kombinace</option> 
                    <?
                    }else if ($typ_treninku == 3){ ?>
                    <option value="0"> Vyberte možnost</option> 
                    <option value="1">individuální</option>
                    <option value="2">skupinový</option>
                    <option value="3" selected>kombinace</option> 
                   <? }else{ ?>
                    <option value="0" selected> Vyberte možnost</option> 
                    <option value="1">individuální</option>
                    <option value="2">skupinový</option>
                    <option value="3">kombinace</option> 
                  <?
                   }
                  ?>
                    </select>
                </div> 



                    <div class="col-sm-4">
                        <br/>

                        <?   if ($typ_treninku == 2 || $typ_treninku == 3){?>
                        <label for="uzivatel">Typ tréninku skupinový:</label>
                        <div class="checkbox">
                            <? if ($skupinovy_dynamicke_cviceni == 1){?>
                              <label><input type="checkbox" name="dynamicke_cviceni" checked disabled>Dynamické cvičení</label>
                            <? }else{ ?>
                              <label><input type="checkbox" name="dynamicke_cviceni" disabled>Dynamické cvičení</label>
                              <? 
                              }
                              ?>                        
                          </div>

                        <div class="checkbox">
                            <? if ($skupinovy_dynamicka_meditace == 1){?>
                              <label><input type="checkbox" name="dynamicka_meditace" checked disabled>Dynamická meditace</label>
                            <? }else{ ?>
                              <label><input type="checkbox" name="dynamicka_meditace" disabled>Dynamická meditace</label>
                              <? 
                              }
                              ?>                         
                          </div>

                        <div class="checkbox">
                            <? if ($skupinovy_zdrave_jogove_protazeni == 1){?>
                            <label><input type="checkbox" name="zdrave_jogove_protazeni" checked disabled>Zdravé jógové protažení</label>
                            <? }else{ ?>
                              <label><input type="checkbox" name="zdrave_jogove_protazeni" disabled>Zdravé jógové protažení</label>
                              <? 
                              }
                              ?>  
                        </div>

                        <div class="checkbox">
                            <? if ($skupinovy_tajczy_cjuan == 1){?>
                            <label><input type="checkbox" name="tajczy_cjuan" checked disabled>Tajczy cjuaň</label>
                            <? }else{ ?>
                              <label><input type="checkbox" name="tajczy_cjuan" disabled>Tajczy cjuaň</label>  
                              <? 
                              }
                              ?>
                        </div>  

                        <? }else{ ?>
                          
                          <?  } ?> 

                      </div> 


                    <div class="col-sm-4">
                          <br>
                          <label for="uzivatel">Způsob tréninku:</label>
                          <div class="checkbox">
                              <? if ($zpusob_zvyseni_kondice == 1){?>
                              <label><input type="checkbox" name="zvyseni_kondice" checked disabled>zvýšení kondice</label>
                              <? }else{ ?>
                              <label><input type="checkbox" name="zvyseni_kondice" disabled>zvýšení kondice</label>
                              <?  } ?>                     
                          </div>

                          <div class="checkbox">
                            <? if ($zpusob_nabrani_svalove_hmoty == 1){?>
                            <label><input type="checkbox" name="nabrani_svalove_hmoty" checked disabled>nabrání svalové hmoty</label>
                            <? }else{ ?>
                              <label><input type="checkbox" name="nabrani_svalove_hmoty" disabled>nabrání svalové hmoty</label>
                              <?  } ?> 
                          </div> 

                          <div class="checkbox">
                            <? if ($zpusob_dychani_posileni_hss == 1){?>
                              <label><input type="checkbox" name="dychani_posileni_hss" checked disabled>dýchání, posílení HSS</label>
                              <? }else{ ?>
                                <label><input type="checkbox" name="dychani_posileni_hss" disabled>dýchání, posílení HSS</label>
                                <?  } ?>  
                          </div> 

                          <div class="checkbox">
                            <? if ($zpusob_posileni_panevniho_dna == 1){?>
                            <label><input type="checkbox" name="posileni_panevniho_dna" checked disabled>posílení pánevního dna</label>
                            <? }else{ ?>
                            <label><input type="checkbox" name="posileni_panevniho_dna" disabled>posílení pánevního dna</label>
                            <?  } ?>  
                          </div>
                        
                          <div class="checkbox">
                            <? if ($zpusob_stabilizace_kloubu == 1){?>
                            <label><input type="checkbox" name="stabilizace_kloubu" checked disabled>stabilizace kloubů</label>
                            <? }else{ ?>
                            <label><input type="checkbox" name="stabilizace_kloubu" disabled>stabilizace kloubů</label> 
                            <?  } ?> 
                          </div>

                          <div class="checkbox">
                             <? if ($zpusob_srovnani_patere == 1){?>
                            <label><input type="checkbox" name="srovnani_patere" checked disabled>srovnání páteře</label>
                            <? }else{ ?>
                            <label><input type="checkbox" name="srovnani_patere" disabled>srovnání páteře</label>
                            <?  } ?>
                          </div> 

                          <div class="checkbox">
                            <? if ($zpusob_energeticka_harmonizace == 1){?>
                            <label><input type="checkbox" name="energeticka_harmonizace" checked disabled>energetická harmonizace</label>
                            <? }else{ ?>
                            <label><input type="checkbox" name="energeticka_harmonizace" disabled>energetická harmonizace</label>
                            <?  } ?>
                          </div>  
                    
                          <div class="checkbox">
                            <? if ($zpusob_dysbalance == 1){?>
                            <label><input type="checkbox" name="dysbalance" checked disabled>dysbalance</label>
                            <? }else{ ?>
                            <label><input type="checkbox" name="dysbalance" disabled>dysbalance</label>                            
                            <?  } ?>
                          </div> 
                        
                          <div class="checkbox">
                            <? if ($zpusob_koordinace == 1){?>
                            <label><input type="checkbox" name="koordinace" checked disabled>koordinace</label>
                            <? }else{ ?>
                            <label><input type="checkbox" name="koordinace" disabled>koordinace</label>
                            <?  } ?>
                          </div>

                          <div class="checkbox">
                            <? if ($zpusob_psychika == 1){?>
                            <label><input type="checkbox" name="psychika" checked disabled>psychika</label>
                            <? }else{ ?>
                            <label><input type="checkbox" name="psychika" disabled>psychika</label>
                            <?  } ?>
                          </div>        
                   </div>
            </div>
        </div>





  
             <div class="row">
                    <div class="col-sm-12" style="background-color:<? echo $barva_box; ?>;">
                        <br/>
                        <label for="uzivatel">Detail zaměření:</label>
                        <textarea class="form-control" id="detail_zamereni" name="detail_zamereni" rows="2" maxlength="200" style="background-color:#FFFFFF;" readonly><? echo $detail_zamereni;?></textarea>
                        <br/>                     
                    </div>
             </div> 


  

            <div class="row">
                    <div class="col-sm-12" style="background-color:<? echo $barva_box; ?>;">
                        <br/>                        
                        

                <?
                    if ($stav_treninku == 1){ //naplanovano
                     ?>
                        <button type="button" class="btn btn-primary btn-sm" onclick="loadTreninkCerpat<? echo $treninkovy_plan_id;?>()">Čerpat trénink</button>&nbsp;&nbsp;
                        <button type="button" class="btn btn-warning btn-sm" onclick="loadTreninkStornoKlientem<? echo $treninkovy_plan_id;?>()">Storno tréninku - klientem</button>&nbsp;&nbsp;
                        <button type="button" class="btn btn-info btn-sm" onclick="loadTreninkStornoRelaxartem<? echo $treninkovy_plan_id;?>()">Storno tréninku - RELAXARTEM</button>&nbsp;&nbsp;
                        <button type="button" class="btn btn-danger btn-sm" onclick="loadTreninkDelete<? echo $treninkovy_plan_id;?>()">Smazat plánovaný trénink</button>&nbsp;&nbsp;   
                    <?
                
                
                    }elseif($stav_treninku == 2){ //vycerpano
                        ?>
                       <button type="button" class="btn btn-danger btn-sm" onclick="loadTreninkDelete<? echo $treninkovy_plan_id;?>()">Smazat plánovaný trénink</button>&nbsp;&nbsp;   
                        <? 

                    }elseif($stav_treninku == 3){ //stornováno klientem
                        ?>
                       <button type="button" class="btn btn-danger btn-sm" onclick="loadTreninkDelete<? echo $treninkovy_plan_id;?>()">Smazat plánovaný trénink</button>&nbsp;&nbsp;   
                        <?                        
                
                    }elseif($stav_treninku == 4){ //stornováno Relaxartem
                        ?>
                        <button type="button" class="btn btn-danger btn-sm" onclick="loadTreninkDelete<? echo $treninkovy_plan_id;?>()">Smazat plánovaný trénink</button>&nbsp;&nbsp;   
                         <?   
                        
                
                    }else{
                    
                    echo 'Chybná hodnota !!!';
                    
                 }
                ?>


                        <br/><br/>                     
                    </div>


          
        </form>
        </div> 
        <br>
 </div>



<script>
  function loadTreninkDelete<? echo $treninkovy_plan_id;?>() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("treninkovy_plan<? echo $treninkovy_plan_id; ?>").innerHTML = this.responseText;      
      }
    };
 

    var  trenink_id_temp = <? echo $treninkovy_plan_id; ?>;
         treninkovy_plan_delete_id = "&treninkovy_plan_delete_id="+trenink_id_temp ; 
        datum_treninku_zacatek =  document.treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>.datum_treninku_zacatek.value;
        datum_treninku_konec =  document.treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>.datum_treninku_konec.value;
        k_cerpani =  document.treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>.k_cerpani.value;
        lektor = document.treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>.lektor.value; 
        stav_treninku =  document.treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>.stav_treninku_str.value;
        typ_treninku =  document.treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>.typ_treninku.value;

        if (confirm("Opravdu chcete smazat naplánovaný trénink?\n"+
        "\nDatum od: "+datum_treninku_zacatek+
        "\nDatum do: "+datum_treninku_konec+
        "\nPočet zbývajících lekcí: "+k_cerpani+
        "\nLektor: "+lektor+
        "\nStav tréninku: "+stav_treninku) == true){

       xhttp.open("POST", "./script/modul_trenink_delete.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send(treninkovy_plan_delete_id);
    
    }else{
          // bylo stisknuto STORNO  
      }    

     }

</script>


            
<script>
  function loadTreninkStornoRelaxartem<? echo $treninkovy_plan_id;?>() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("treninkovy_plan<? echo $treninkovy_plan_id; ?>").innerHTML = this.responseText;      
      }
    }; 

        var  trenink_id_temp = <? echo $treninkovy_plan_id; ?>;
        var prihlaseny_uzivatel = "<? echo $_SESSION['uzivatel_jmeno_session'].' '.$_SESSION['uzivatel_prijmeni_session']; ?>"; 
         treninkovy_plan_storno_relax_id = "&treninkovy_plan_storno_relax_id="+trenink_id_temp ; 
        datum_treninku_zacatek =  document.treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>.datum_treninku_zacatek.value;
        datum_treninku_konec =  document.treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>.datum_treninku_konec.value;
        k_cerpani =  document.treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>.k_cerpani.value;
        lektor = document.treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>.lektor.value; 
        stav_treninku =  document.treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>.stav_treninku_str.value;
        typ_treninku =  document.treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>.typ_treninku.value;
        var prihlaseny_uzivatel = "<? echo $_SESSION['uzivatel_jmeno_session'].' '.$_SESSION['uzivatel_prijmeni_session']; ?>";
        treninkovy_plan_storno_relax_id = treninkovy_plan_storno_relax_id + "&prihlaseny_uzivatel="+prihlaseny_uzivatel;
        if (confirm("Opravdu chcete stornovat naplánovaný trénink? \nStornování tréninku ze strany RELAXARTE.\n"+
        "\nDatum od: "+datum_treninku_zacatek+
        "\nDatum do: "+datum_treninku_konec+
        "\nPočet zbývajících lekcí: "+k_cerpani+
        "\nLektor: "+lektor+
        "\nStav tréninku: "+stav_treninku) == true){

       xhttp.open("POST", "./script/modul_trenink_storno_relax.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send(treninkovy_plan_storno_relax_id);
    
    }else{
          // bylo stisknuto STORNO  
      }    

     }

</script>




<script>
  function loadTreninkStornoKlientem<? echo $treninkovy_plan_id;?>() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("treninkovy_plan<? echo $treninkovy_plan_id; ?>").innerHTML = this.responseText;      
      }
    }; 

        var  trenink_id_temp = <? echo $treninkovy_plan_id; ?>;
        var prihlaseny_uzivatel = "<? echo $_SESSION['uzivatel_jmeno_session'].' '.$_SESSION['uzivatel_prijmeni_session']; ?>"; 
         treninkovy_plan_storno_relax_id = "&treninkovy_plan_storno_relax_id="+trenink_id_temp ; 
        datum_treninku_zacatek =  document.treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>.datum_treninku_zacatek.value;
        datum_treninku_konec =  document.treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>.datum_treninku_konec.value;
        k_cerpani =  document.treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>.k_cerpani.value;
        lektor = document.treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>.lektor.value; 
        stav_treninku =  document.treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>.stav_treninku_str.value;
        typ_treninku =  document.treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>.typ_treninku.value;
        var prihlaseny_uzivatel = "<? echo $_SESSION['uzivatel_jmeno_session'].' '.$_SESSION['uzivatel_prijmeni_session']; ?>";
        treninkovy_plan_storno_relax_id = treninkovy_plan_storno_relax_id + "&prihlaseny_uzivatel="+prihlaseny_uzivatel;
        if (confirm("Opravdu chcete stornovat naplánovaný trénink? \nStornování tréninku ze strany klienta.\n"+
        "\nDatum od: "+datum_treninku_zacatek+
        "\nDatum do: "+datum_treninku_konec+
        "\nPočet zbývajících lekcí: "+k_cerpani+
        "\nLektor: "+lektor+
        "\nStav tréninku: "+stav_treninku) == true){

       xhttp.open("POST", "./script/modul_trenink_storno_klient.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhttp.send(treninkovy_plan_storno_relax_id);
    
    }else{
          // bylo stisknuto STORNO  
      }    

     }

</script>








</div>





<br>

  
  
  
    <?
        }

    ?>


<br/>-----------------------------------------------<br/>