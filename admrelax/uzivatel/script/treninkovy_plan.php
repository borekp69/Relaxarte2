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


// ---------------  Typ tréninku skupinový
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



// ---------------  Způsob tréninku



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


        dataTreninkovy_plan = dataTreninkovy_plan + "&datum_treninku_zacatek="+datum_treninku_zacatek;        
        dataTreninkovy_plan = dataTreninkovy_plan + "&datum_treninku_konec="+datum_treninku_konec;
        dataTreninkovy_plan = dataTreninkovy_plan + "&pocet_lekci="+pocet_lekci;
        dataTreninkovy_plan = dataTreninkovy_plan + "&lektor_procedury="+lektor_procedury;
        dataTreninkovy_plan = dataTreninkovy_plan + "&typ_treninku="+typ_treninku;
        dataTreninkovy_plan = dataTreninkovy_plan + "&detail_zamereni="+detail_zamereni;


    xhttp.open("POST", "./script/modul_trenink_insert.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(dataTreninkovy_plan);
    alert("Uložení:\nXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX.");

            }else{

            // bylo stisknuto STORNO  
              }
            }
        }
  


}
</script>   

<br/>-----------------------------------------------<br/>