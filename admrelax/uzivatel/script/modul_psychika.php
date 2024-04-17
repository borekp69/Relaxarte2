<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache"); 
require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php';


//---------------------- ověření existence záznamu v DB začátek ----------------------
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_modul_psychika = "SELECT * FROM modul_psychika WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result_modul_psychika = $conn->query($sql_modul_psychika);
$conn->close();
$pocet_zaznamu_modul_psychika = mysqli_num_rows($result_modul_psychika);
//---------------------- ověření existence záznamu v DB konec ---------------------


if($pocet_zaznamu_modul_psychika == 0){

  require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
  $sql = "INSERT INTO modul_psychika (
   uzivatel_id,
   datum
      )
  VALUES (
  '$uzivatel_id',  
  NOW() 
         )";       

if ($conn->query($sql) === TRUE) {    
      } else {
    echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
      }

?>



<br>
<div id="psychika<?echo $uzivatel_id; ?>">
    <h4>Psychika</h4> 
    <form id="modul_psychika" name="modul_psychika" method="post">

    <h4>Charakterové vlastnosti klienta:</h4>
    <div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
    <br>
    <label for="uzivatel">Postoj k práci:</label>
    <textarea class="form-control" id="postoj_k_praci" name="postoj_k_praci" rows="4" maxlength="600" placeholder="Popište postoj k práci"><?echo $postoj_k_praci;?></textarea>
    <br>
    </div>
    </div>

    <div class="row">
    <div class="col-sm-12" style="background-color:#d7cece;">
    <br>
    <label for="uzivatel">Řešení konfliktních situací:</label>
    <textarea class="form-control" id="konfliktni_situace" name="konfliktni_situace" rows="4" maxlength="600" placeholder="Popište řešení konfliktních situací"><?echo $konfliktni_situace;?></textarea>
    <br>
    </div>
    </div>   


  <div class="row">
    <div class="col-sm-12" style="background-color:#ccd9e1;">
    
    <div class="col-sm-2">
    <br>
    <label for="uzivatel">Preferuje spíše:</label>
    <select class="form-control" id="samota" name="samota">
    <option value="0"> Vyberte možnost</option> 
    <option value="1">samotu</option>
    <option value="2">společnost</option> 
    </select>
    </div>



  <div class="col-sm-2" style="background-color:#C7FCF9;">
  
    <br>
    <label for="uzivatel">Popis charakteru:</label>
    <div class="checkbox">
        <label><input type="checkbox" name="charakter_pasivni" value="1">pasivní</label> 
    </div>
 
    <div class="checkbox">
        <label><input type="checkbox" name="charakter_vahavy" value="1">váhavý</label> 
        </div>

    <div class="checkbox">
        <label><input type="checkbox" name="charakter_mekky" value="1">měkký</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_poddajny" value="1">poddajný</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_tichy" value="1">tichý</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_zdrzenlivy" value="1">zdrženlivý</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_premyslivy" value="1">přemýšlivý</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_dukladny" value="1">důkladný</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_citlivy" value="1">citlivý</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_melancholicky" value="1">melancholický</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_nestabilni" value="1">nestabilní</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_aktivni" value="1">aktivní</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_podnikavy" value="1">podnikavý</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_odvazny" value="1">odvážný</label> 
        </div>        

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_neduverivy" value="1">nedůvěřivý</label> 
        </div>  

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_nestaly" value="1">nestálý</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_naladovy" value="1">náladový</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_plny_predstav" value="1">plný představ</label> 
        </div>   
        
        <div class="checkbox">
        <label><input type="checkbox" name="charakter_neporadny" value="1">nepořádný</label> 
        </div>         

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_prehanejici" value="1">přehánějící</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_nenavistny" value="1">nenávistný</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_neodpustny" value="1">neodpustný</label> 
        </div> 

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_zoufaly" value="1">zoufalý</label> 
        </div> 

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_agresivni" value="1">agresivní</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_vasnivy" value="1">vášnivý</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_peclivy" value="1">pečlivý</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_samostatny" value="1">samostatný</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_cinorody" value="1">činorodý</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_nezavisly" value="1">nezávislý</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_pratelsky" value="1">přátelský</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_plny_energie" value="1">plný energie</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_pracovity" value="1">pracovitý</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_puntickarsky" value="1">puntičkářský</label> 
        </div>

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_zodpovedny" value="1">zodpovědný</label> 
        </div>        

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_precizni" value="1">precizní</label> 
        </div> 

        <div class="checkbox">
        <label><input type="checkbox" name="charakter_pragmaticky" value="1">pragmatický</label> 
        </div>

</div>
    

    <div class="col-sm-4">
    <br>
    <label for="uzivatel">Může osvobozujícím způsobem plakat:</label>
    <select class="form-control" id="plac" name="plac">
    <option value="0"> Vyberte možnost</option> 
    <option value="1">ano</option>
    <option value="2">ne</option> 
    </select>
    </div>

   <div class="col-sm-4">
    <br>
    <label for="uzivatel">Utěšování, když pláče:</label>
    <select class="form-control" id="utesovani" name="utesovani">
    <option value="0"> Vyberte možnost</option> 
    <option value="1">nepříjemné</option>
    <option value="2">má rád/a utěšování</option> 
    </select>
    </div>   
    </div>
    </div>
    
    <div class="row">
    <div class="col-sm-12" style="background-color:#d4d7ce;">
    <br>
    <label for="uzivatel">Jak snáší uzavřený límec, utažený opasek, těsné šaty:</label>
    <textarea class="form-control" id="limec_saty_opasek" name="limec_saty_opasek" rows="4" maxlength="600" placeholder="Popište snášenlivost"><?echo $limec_saty_opasek;?></textarea>
    <br>
    </div>
    </div>    
   
   </form>
    <br>
    <button type="submit" class="btn btn-success btn-sm"  onclick="loadPsychika<?echo $uzivatel_id; ?>()">&nbsp;&nbsp;Uložit charakterové vlasnosti&nbsp;&nbsp;</button>
    <br>
   </div>  



<script>

function loadPsychika<?echo $uzivatel_id; ?>() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("psychika<?echo $uzivatel_id; ?>").innerHTML = this.responseText;
    }
  };
 
  let dataPsychika = "uzivatel_id=<?echo $uzivatel_id; ?>";
  
  postoj_k_praci = document.modul_psychika.postoj_k_praci.value; 
  konfliktni_situace = document.modul_psychika.konfliktni_situace.value; 
  samota = parseInt(document.modul_psychika.samota.value);
  plac = parseInt(document.modul_psychika.plac.value);
  utesovani = parseInt(document.modul_psychika.utesovani.value);
  limec_saty_opasek =  document.modul_psychika.limec_saty_opasek.value; 
// --------- charakter začátek ---------------

charakter_pasivni = document.modul_psychika.charakter_pasivni;
           if(charakter_pasivni.checked) {
            charakter_pasivni = 1;
            }else{
            charakter_pasivni= 0;
            }

charakter_vahavy = document.modul_psychika.charakter_vahavy;
           if(charakter_vahavy.checked) {
            charakter_vahavy = 1;
            }else{
            charakter_vahavy= 0;
            }           

charakter_mekky = document.modul_psychika.charakter_mekky;
           if(charakter_mekky.checked) {
            charakter_mekky = 1;
            }else{
            charakter_mekky= 0;
            } 
            
charakter_poddajny = document.modul_psychika.charakter_poddajny;
           if(charakter_poddajny.checked) {
            charakter_poddajny = 1;
            }else{
            charakter_poddajny= 0;
            } 
            
charakter_tichy = document.modul_psychika.charakter_tichy;
           if(charakter_tichy.checked) {
            charakter_tichy = 1;
            }else{
            charakter_tichy= 0;
            }

charakter_zdrzenlivy = document.modul_psychika.charakter_zdrzenlivy;
           if(charakter_zdrzenlivy.checked) {
            charakter_zdrzenlivy = 1;
            }else{
            charakter_zdrzenlivy= 0;
            }

charakter_premyslivy = document.modul_psychika.charakter_premyslivy;
           if(charakter_premyslivy.checked) {
            charakter_premyslivy = 1;
            }else{
            charakter_premyslivy= 0;
            }

charakter_dukladny = document.modul_psychika.charakter_dukladny;
           if(charakter_dukladny.checked) {
            charakter_dukladny = 1;
            }else{
            charakter_dukladny= 0;
            }

charakter_citlivy = document.modul_psychika.charakter_citlivy;
           if(charakter_citlivy.checked) {
            charakter_citlivy = 1;
            }else{
            charakter_citlivy= 0;
            }

charakter_melancholicky = document.modul_psychika.charakter_melancholicky;
           if(charakter_melancholicky.checked) {
            charakter_melancholicky = 1;
            }else{
            charakter_melancholicky= 0;
            }

charakter_nestabilni = document.modul_psychika.charakter_nestabilni;
           if(charakter_nestabilni.checked) {
            charakter_nestabilni = 1;
            }else{
            charakter_nestabilni= 0;
            }

charakter_aktivni = document.modul_psychika.charakter_aktivni;
           if(charakter_aktivni.checked) {
            charakter_aktivni = 1;
            }else{
            charakter_aktivni= 0;
            }

charakter_podnikavy = document.modul_psychika.charakter_podnikavy;
           if(charakter_podnikavy.checked) {
            charakter_podnikavy = 1;
            }else{
            charakter_podnikavy= 0;
            }

charakter_odvazny = document.modul_psychika.charakter_odvazny;
           if(charakter_odvazny.checked) {
            charakter_odvazny = 1;
            }else{
            charakter_odvazny= 0;
            }

charakter_neduverivy = document.modul_psychika.charakter_neduverivy;
           if(charakter_neduverivy.checked) {
            charakter_neduverivy = 1;
            }else{
            charakter_neduverivy= 0;
            }            

charakter_nestaly = document.modul_psychika.charakter_nestaly;
           if(charakter_nestaly.checked) {
            charakter_nestaly = 1;
            }else{
            charakter_nestaly= 0;
            }  

charakter_naladovy = document.modul_psychika.charakter_naladovy;
           if(charakter_naladovy.checked) {
            charakter_naladovy = 1;
            }else{
            charakter_naladovy = 0;
            } 

charakter_plny_predstav = document.modul_psychika.charakter_plny_predstav;
           if(charakter_plny_predstav.checked) {
            charakter_plny_predstav = 1;
            }else{
            charakter_plny_predstav = 0;
            } 

charakter_neporadny = document.modul_psychika.charakter_neporadny;
           if(charakter_neporadny.checked) {
            charakter_neporadny = 1;
            }else{
            charakter_neporadny = 0;
            } 

charakter_prehanejici = document.modul_psychika.charakter_prehanejici;
           if(charakter_prehanejici.checked) {
            charakter_prehanejici = 1;
            }else{
            charakter_prehanejici = 0;
            } 

charakter_nenavistny = document.modul_psychika.charakter_nenavistny;
           if(charakter_nenavistny.checked) {
            charakter_nenavistny = 1;
            }else{
            charakter_nenavistny = 0;
            } 

charakter_neodpustny = document.modul_psychika.charakter_neodpustny;
           if(charakter_neodpustny.checked) {
            charakter_neodpustny = 1;
            }else{
            charakter_neodpustny = 0;
            } 

charakter_zoufaly = document.modul_psychika.charakter_zoufaly;
           if(charakter_zoufaly.checked) {
            charakter_zoufaly = 1;
            }else{
            charakter_zoufaly = 0;
            } 

charakter_agresivni = document.modul_psychika.charakter_agresivni;
           if(charakter_agresivni.checked) {
            charakter_agresivni = 1;
            }else{
            charakter_agresivni = 0;
            } 

charakter_vasnivy = document.modul_psychika.charakter_vasnivy;
           if(charakter_vasnivy.checked) {
            charakter_vasnivy = 1;
            }else{
            charakter_vasnivy = 0;
            } 

charakter_peclivy = document.modul_psychika.charakter_peclivy;
           if(charakter_peclivy.checked) {
            charakter_peclivy = 1;
            }else{
            charakter_peclivy = 0;
            } 

charakter_samostatny = document.modul_psychika.charakter_samostatny;
           if(charakter_samostatny.checked) {
            charakter_samostatny = 1;
            }else{
            charakter_samostatny = 0;
            } 

charakter_cinorody = document.modul_psychika.charakter_cinorody;
           if(charakter_cinorody.checked) {
            charakter_cinorody = 1;
            }else{
            charakter_cinorody = 0;
            } 

charakter_nezavisly = document.modul_psychika.charakter_nezavisly;
           if(charakter_nezavisly.checked) {
            charakter_nezavisly = 1;
            }else{
            charakter_nezavisly = 0;
            } 

charakter_pratelsky = document.modul_psychika.charakter_pratelsky;
           if(charakter_pratelsky.checked) {
            charakter_pratelsky = 1;
            }else{
            charakter_pratelsky = 0;
            } 

charakter_plny_energie = document.modul_psychika.charakter_plny_energie;
           if(charakter_plny_energie.checked) {
            charakter_plny_energie = 1;
            }else{
            charakter_plny_energie = 0;
            } 

charakter_pracovity = document.modul_psychika.charakter_pracovity;
           if(charakter_pracovity.checked) {
            charakter_pracovity = 1;
            }else{
            charakter_pracovity = 0;
            }

charakter_puntickarsky = document.modul_psychika.charakter_puntickarsky;
           if(charakter_puntickarsky.checked) {
            charakter_puntickarsky = 1;
            }else{
            charakter_puntickarsky = 0;
            }            

charakter_zodpovedny = document.modul_psychika.charakter_zodpovedny;
           if(charakter_zodpovedny.checked) {
            charakter_zodpovedny = 1;
            }else{
            charakter_zodpovedny = 0;
            } 

charakter_precizni = document.modul_psychika.charakter_precizni;
           if(charakter_precizni.checked) {
            charakter_precizni = 1;
            }else{
            charakter_precizni = 0;
            } 

charakter_pragmaticky = document.modul_psychika.charakter_pragmaticky;
           if(charakter_pragmaticky.checked) {
            charakter_pragmaticky = 1;
            }else{
            charakter_pragmaticky = 0;
            } 




// --------- charakter konec ---------------
    
dataPsychika = dataPsychika + "&postoj_k_praci="+postoj_k_praci;
dataPsychika = dataPsychika + "&konfliktni_situace="+konfliktni_situace;
dataPsychika = dataPsychika + "&samota="+samota;  
dataPsychika = dataPsychika + "&plac="+plac; 
dataPsychika = dataPsychika + "&utesovani="+utesovani; 
dataPsychika = dataPsychika + "&limec_saty_opasek="+limec_saty_opasek; 


<?
function PopisCharakter($charakter)
{
echo 'dataPsychika = dataPsychika + "&charakter_'.$charakter.'="+charakter_'.$charakter.";\n";
}

PopisCharakter("pasivni");
PopisCharakter("vahavy");
PopisCharakter("mekky");
PopisCharakter("poddajny");
PopisCharakter("tichy");
PopisCharakter("zdrzenlivy");
PopisCharakter("premyslivy");
PopisCharakter("dukladny");
PopisCharakter("citlivy");
PopisCharakter("melancholicky");
PopisCharakter("nestabilni");
PopisCharakter("aktivni");
PopisCharakter("podnikavy");
PopisCharakter("odvazny");
PopisCharakter("neduverivy");
PopisCharakter("nestaly");
PopisCharakter("naladovy");
PopisCharakter("plny_predstav");
PopisCharakter("neporadny");
PopisCharakter("prehanejici");
PopisCharakter("nenavistny");
PopisCharakter("neodpustny");
PopisCharakter("zoufaly");
PopisCharakter("agresivni");
PopisCharakter("vasnivy");
PopisCharakter("peclivy");
PopisCharakter("samostatny");
PopisCharakter("cinorody");
PopisCharakter("nezavisly");
PopisCharakter("pratelsky");
PopisCharakter("plny_energie");
PopisCharakter("pracovity");
PopisCharakter("puntickarsky");
PopisCharakter("zodpovedny");
PopisCharakter("precizni");
PopisCharakter("pragmaticky");

?>
  xhttp.open("POST", "./script/modul_psychika_update.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(dataPsychika);
  alert("Uložení:\nZáznam Charakterové vlastnosti klienta byl aktualizován.");
     }

</script>

<br>
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
<br>


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
  var nejslabsi_oblasti_v_zivote = parseInt(document.modul_karmicka_zatez.nejslabsi_oblasti_v_zivote.value); 
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
  dataKarmickaZatez = dataKarmickaZatez + "&nejslabsi_oblasti_v_zivote="+nejslabsi_oblasti_v_zivote;
  dataKarmickaZatez = dataKarmickaZatez + "&karmicky_ukol="+karmicky_ukol;
  dataKarmickaZatez = dataKarmickaZatez + "&psychika_diagnoza="+psychika_diagnoza;
  xhttp.open("POST", "./script/modul_karmicka_zatez_update.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(dataKarmickaZatez);
  alert("Uložení:\nZáznam Karmická zátěž klienta byl aktualizován.");
     }

</script>





<?
}else{

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT * FROM modul_psychika WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($radek = $result->fetch_assoc()) {
    $modul_psychika_id = $radek["modul_psychika_id"];
    $postoj_k_praci = $radek["postoj_k_praci"];
    $konfliktni_situace = $radek["konfliktni_situace"];
    $limec_saty_opasek = $radek["limec_saty_opasek"];
    $samota = $radek["samota"];
    $plac= $radek["plac"];
    $utesovani = $radek["utesovani"];
    $charakter_pasivni = $radek["charakter_pasivni"];
    $charakter_vahavy = $radek["charakter_vahavy"];
    $charakter_mekky = $radek["charakter_mekky"];
    $charakter_poddajny = $radek["charakter_poddajny"];
    $charakter_tichy = $radek["charakter_tichy"];
    $charakter_zdrzenlivy = $radek["charakter_zdrzenlivy"];
    $charakter_premyslivy = $radek["charakter_premyslivy"];
    $charakter_dukladny = $radek["charakter_dukladny"];        
    $charakter_citlivy = $radek["charakter_citlivy"];
    $charakter_melancholicky = $radek["charakter_melancholicky"];
    $charakter_nestabilni = $radek["charakter_nestabilni"];
    $charakter_aktivni = $radek["charakter_aktivni"];
    $charakter_podnikavy = $radek["charakter_podnikavy"];
    $charakter_odvazny = $radek["charakter_odvazny"];
    $charakter_neduverivy = $radek["charakter_neduverivy"];
    $charakter_nestaly = $radek["charakter_nestaly"];
    $charakter_naladovy = $radek["charakter_naladovy"];
    $charakter_plny_predstav = $radek["charakter_plny_predstav"];
    $charakter_neporadny = $radek["charakter_neporadny"];
    $charakter_prehanejici = $radek["charakter_prehanejici"];
    $charakter_nenavistny = $radek["charakter_nenavistny"];
    $charakter_neodpustny = $radek["charakter_neodpustny"];
    $charakter_zoufaly = $radek["charakter_zoufaly"];
    $charakter_agresivni = $radek["charakter_agresivni"];
    $charakter_vasnivy = $radek["charakter_vasnivy"];
    $charakter_peclivy = $radek["charakter_peclivy"];
    $charakter_samostatny = $radek["charakter_samostatny"];
    $charakter_cinorody = $radek["charakter_cinorody"];
    $charakter_nezavisly = $radek["charakter_nezavisly"];
    $charakter_pratelsky = $radek["charakter_pratelsky"];
    $charakter_plny_energie = $radek["charakter_plny_energie"];   
    $charakter_pracovity = $radek["charakter_pracovity"];
    $charakter_puntickarsky = $radek["charakter_puntickarsky"];
    $charakter_zodpovedny = $radek["charakter_zodpovedny"];
    $charakter_precizni = $radek["charakter_precizni"];
    $charakter_pragmaticky = $radek["charakter_pragmaticky"];
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
    $datum = $radek["datum"];
   } 
$conn->close(); 
?>
<br>
<div id="psychika<?echo $uzivatel_id; ?>">
    <h4>Psychika</h4> 
    <form id="modul_psychika" name="modul_psychika" method="post">

    <h4>Charakterové vlastnosti klienta:</h4>
    <div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
    <br>
    <label for="uzivatel">Postoj k práci:</label>
    <textarea class="form-control" id="postoj_k_praci" name="postoj_k_praci" rows="4" maxlength="600" placeholder="Popište postoj k práci"><?echo $postoj_k_praci;?></textarea>
    <br>
    </div>
    </div>

    <div class="row">
    <div class="col-sm-12" style="background-color:#d7cece;">
    <br>
    <label for="uzivatel">Řešení konfliktních situací:</label>
    <textarea class="form-control" id="konfliktni_situace" name="konfliktni_situace" rows="4" maxlength="600" placeholder="Popište řešení konfliktních situací"><?echo $konfliktni_situace;?></textarea>
    <br>
    </div>
    </div> 

<div class="row">
  <div class="col-sm-12" style="background-color:#ccd9e1;">
    
    <div class="col-sm-2">
    <br>
    <label for="uzivatel">Preferuje spíše:</label>
    <select class="form-control" id="samota" name="samota">
    <? if ($samota == 0){ ?>
    <option value="0" selected> Vyberte možnost</option> 
    <option value="1">samotu</option>
    <option value="2">společnost</option> 

    <? }else if($samota == 1) { ?>
    <option value="0"> Vyberte možnost</option> 
    <option value="1" selected>samotu</option>
    <option value="2">společnost</option> 

    <? }else{ ?>
    <option value="0"> Vyberte možnost</option> 
    <option value="1">samotu</option>
    <option value="2" selected>společnost</option>    
    <? } ?>
    </select>
    </div>


    <div class="col-sm-2" style="background-color:#C7FCF9;">
    <br>
    <label for="uzivatel">Popis charakteru:</label>
    
    <?
        function generujBox($nazevBox, $hodnotaBox, $popisBox)
        {
         if ($hodnotaBox == 0){ 
          echo "<div class=\"checkbox\">\n";
          echo '<label><input type="checkbox" name="'.$nazevBox.'" value="1">'.$popisBox."</label>\n";
          echo "</div>\n";  
          }else{ 
          echo "<div class=\"checkbox\">\n";
          echo '<label><input type="checkbox" name="'.$nazevBox.'" value="1" checked>'.$popisBox."</label>\n";
          echo "</div>\n";  
          } 

        }
    generujBox("charakter_pasivni",$charakter_pasivni, "pasivní");
    generujBox("charakter_vahavy",$charakter_vahavy, "váhavý");
    generujBox("charakter_mekky",$charakter_mekky, "měkky");
    generujBox("charakter_poddajny",$charakter_poddajny, "poddajný");
    generujBox("charakter_tichy",$charakter_tichy, "tichý");
    generujBox("charakter_zdrzenlivy",$charakter_zdrzenlivy, "zdrženlivý");
    generujBox("charakter_premyslivy",$charakter_premyslivy, "přemýšlivý");
    generujBox("charakter_dukladny",$charakter_dukladny, "důkladný");
    generujBox("charakter_citlivy",$charakter_citlivy, "citlivý");
    generujBox("charakter_melancholicky",$charakter_melancholicky, "melancholický");
    generujBox("charakter_nestabilni",$charakter_nestabilni, "nestabilní");
    generujBox("charakter_aktivni",$charakter_aktivni, "aktivní");
    generujBox("charakter_podnikavy",$charakter_podnikavy, "podnikavý");
    generujBox("charakter_odvazny",$charakter_odvazny, "odvážný");
    generujBox("charakter_neduverivy",$charakter_neduverivy, "nedůvěřivý");
    generujBox("charakter_nestaly",$charakter_nestaly, "nestálý");
    generujBox("charakter_naladovy",$charakter_naladovy, "náladový");
    generujBox("charakter_plny_predstav",$charakter_plny_predstav, "plný představ");
    generujBox("charakter_neporadny",$charakter_neporadny, "nepořádný");
    generujBox("charakter_prehanejici",$charakter_prehanejici, "přehánějící");
    generujBox("charakter_nenavistny",$charakter_nenavistny, "nenávistný");
    generujBox("charakter_neodpustny",$charakter_neodpustny, "neodpustný");
    generujBox("charakter_zoufaly",$charakter_zoufaly, "zoufalý");
    generujBox("charakter_agresivni",$charakter_agresivni, "agresivní");
    generujBox("charakter_vasnivy",$charakter_vasnivy, "vášnivý");
    generujBox("charakter_peclivy",$charakter_peclivy, "pečlivý");
    generujBox("charakter_samostatny",$charakter_samostatny, "samostatný");
    generujBox("charakter_cinorody",$charakter_cinorody, "činorodý");
    generujBox("charakter_nezavisly",$charakter_nezavisly, "nezávislý");
    generujBox("charakter_pratelsky",$charakter_pratelsky, "přátelský");
    generujBox("charakter_plny_energie",$charakter_plny_energie, "plný energie");
    generujBox("charakter_pracovity",$charakter_pracovity, "pracovitý");
    generujBox("charakter_puntickarsky",$charakter_puntickarsky, "puntičkářský");
    generujBox("charakter_zodpovedny",$charakter_zodpovedny, "zodpovedný");
    generujBox("charakter_precizni",$charakter_precizni, "precizni");
    generujBox("charakter_pragmaticky",$charakter_pragmaticky, "pragmatický");
?>
  </div>

   <div class="col-sm-4">
    <br>
    <label for="uzivatel">Může osvobozujícím způsobem plakat:</label>
    <select class="form-control" id="plac" name="plac">
    <?  if($plac == 0){ ?>
    <option value="0" selected> Vyberte možnost</option> 
    <option value="1">ano</option>
    <option value="2">ne</option> 
    <? }else if ($plac == 1) {?>
    <option value="0"> Vyberte možnost</option> 
    <option value="1" selected>ano</option>
    <option value="2">ne</option>   
    <? }else{ ?>
    <option value="0"> Vyberte možnost</option> 
    <option value="1">ano</option>
    <option value="2" selected>ne</option>  
    <? } ?>  
    </select>
    </div>
  
    <div class="col-sm-4">
    <br>
    <label for="uzivatel">Utěšování, když pláče:</label>
    <select class="form-control" id="utesovani" name="utesovani">
    <? if ($utesovani == 0) { ?>
    <option value="0" selected> Vyberte možnost</option> 
    <option value="1">nepříjemné</option>
    <option value="2">má rád/a utěšování</option> 
    <? } else if ($utesovani == 1){ ?>
    <option value="0"> Vyberte možnost</option> 
    <option value="1" selected>nepříjemné</option>
    <option value="2">má rád/a utěšování</option>   
    <? }else { ?>
    <option value="0"> Vyberte možnost</option> 
    <option value="1">nepříjemné</option>
    <option value="2" selected>má rád/a utěšování</option>  
    <? } ?>
  </select>
    </div>   
  </div>
</div>

    <div class="row">
    <div class="col-sm-12" style="background-color:#d4d7ce;">
    <br>
    <label for="uzivatel">Jak snáší uzavřený límec, utažený opasek, těsné šaty:</label>
    <textarea class="form-control" id="limec_saty_opasek" name="limec_saty_opasek" rows="4" maxlength="600" placeholder="Popište snášenlivost"><?echo $limec_saty_opasek;?></textarea>
    <br>
    </div>
    </div> 
    </form>
    <br>
    <button type="submit" class="btn btn-success btn-sm"  onclick="loadPsychika<?echo $uzivatel_id; ?>()">&nbsp;&nbsp;Uložit charakterové vlasnosti&nbsp;&nbsp;</button>
    <br>
  </div>


<script>

function loadPsychika<?echo $uzivatel_id; ?>() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("psychika<?echo $uzivatel_id; ?>").innerHTML = this.responseText;
    }
  };
 
  let dataPsychika = "uzivatel_id=<?echo $uzivatel_id; ?>";
  
  postoj_k_praci = document.modul_psychika.postoj_k_praci.value; 
  konfliktni_situace = document.modul_psychika.konfliktni_situace.value; 
  samota = parseInt(document.modul_psychika.samota.value);
  plac = parseInt(document.modul_psychika.plac.value);
  utesovani = parseInt(document.modul_psychika.utesovani.value);
  limec_saty_opasek =  document.modul_psychika.limec_saty_opasek.value; 
// --------- charakter začátek ---------------

charakter_pasivni = document.modul_psychika.charakter_pasivni;
           if(charakter_pasivni.checked) {
            charakter_pasivni = 1;
            }else{
            charakter_pasivni= 0;
            }

charakter_vahavy = document.modul_psychika.charakter_vahavy;
           if(charakter_vahavy.checked) {
            charakter_vahavy = 1;
            }else{
            charakter_vahavy= 0;
            }           

charakter_mekky = document.modul_psychika.charakter_mekky;
           if(charakter_mekky.checked) {
            charakter_mekky = 1;
            }else{
            charakter_mekky= 0;
            } 
            
charakter_poddajny = document.modul_psychika.charakter_poddajny;
           if(charakter_poddajny.checked) {
            charakter_poddajny = 1;
            }else{
            charakter_poddajny= 0;
            } 
            
charakter_tichy = document.modul_psychika.charakter_tichy;
           if(charakter_tichy.checked) {
            charakter_tichy = 1;
            }else{
            charakter_tichy= 0;
            }

charakter_zdrzenlivy = document.modul_psychika.charakter_zdrzenlivy;
           if(charakter_zdrzenlivy.checked) {
            charakter_zdrzenlivy = 1;
            }else{
            charakter_zdrzenlivy= 0;
            }

charakter_premyslivy = document.modul_psychika.charakter_premyslivy;
           if(charakter_premyslivy.checked) {
            charakter_premyslivy = 1;
            }else{
            charakter_premyslivy= 0;
            }

charakter_dukladny = document.modul_psychika.charakter_dukladny;
           if(charakter_dukladny.checked) {
            charakter_dukladny = 1;
            }else{
            charakter_dukladny= 0;
            }

charakter_citlivy = document.modul_psychika.charakter_citlivy;
           if(charakter_citlivy.checked) {
            charakter_citlivy = 1;
            }else{
            charakter_citlivy= 0;
            }

charakter_melancholicky = document.modul_psychika.charakter_melancholicky;
           if(charakter_melancholicky.checked) {
            charakter_melancholicky = 1;
            }else{
            charakter_melancholicky= 0;
            }

charakter_nestabilni = document.modul_psychika.charakter_nestabilni;
           if(charakter_nestabilni.checked) {
            charakter_nestabilni = 1;
            }else{
            charakter_nestabilni= 0;
            }

charakter_aktivni = document.modul_psychika.charakter_aktivni;
           if(charakter_aktivni.checked) {
            charakter_aktivni = 1;
            }else{
            charakter_aktivni= 0;
            }

charakter_podnikavy = document.modul_psychika.charakter_podnikavy;
           if(charakter_podnikavy.checked) {
            charakter_podnikavy = 1;
            }else{
            charakter_podnikavy= 0;
            }

charakter_odvazny = document.modul_psychika.charakter_odvazny;
           if(charakter_odvazny.checked) {
            charakter_odvazny = 1;
            }else{
            charakter_odvazny= 0;
            }

charakter_neduverivy = document.modul_psychika.charakter_neduverivy;
           if(charakter_neduverivy.checked) {
            charakter_neduverivy = 1;
            }else{
            charakter_neduverivy= 0;
            }            

charakter_nestaly = document.modul_psychika.charakter_nestaly;
           if(charakter_nestaly.checked) {
            charakter_nestaly = 1;
            }else{
            charakter_nestaly= 0;
            }  

charakter_naladovy = document.modul_psychika.charakter_naladovy;
           if(charakter_naladovy.checked) {
            charakter_naladovy = 1;
            }else{
            charakter_naladovy = 0;
            } 

charakter_plny_predstav = document.modul_psychika.charakter_plny_predstav;
           if(charakter_plny_predstav.checked) {
            charakter_plny_predstav = 1;
            }else{
            charakter_plny_predstav = 0;
            } 

charakter_neporadny = document.modul_psychika.charakter_neporadny;
           if(charakter_neporadny.checked) {
            charakter_neporadny = 1;
            }else{
            charakter_neporadny = 0;
            } 

charakter_prehanejici = document.modul_psychika.charakter_prehanejici;
           if(charakter_prehanejici.checked) {
            charakter_prehanejici = 1;
            }else{
            charakter_prehanejici = 0;
            } 

charakter_nenavistny = document.modul_psychika.charakter_nenavistny;
           if(charakter_nenavistny.checked) {
            charakter_nenavistny = 1;
            }else{
            charakter_nenavistny = 0;
            } 

charakter_neodpustny = document.modul_psychika.charakter_neodpustny;
           if(charakter_neodpustny.checked) {
            charakter_neodpustny = 1;
            }else{
            charakter_neodpustny = 0;
            } 

charakter_zoufaly = document.modul_psychika.charakter_zoufaly;
           if(charakter_zoufaly.checked) {
            charakter_zoufaly = 1;
            }else{
            charakter_zoufaly = 0;
            } 

charakter_agresivni = document.modul_psychika.charakter_agresivni;
           if(charakter_agresivni.checked) {
            charakter_agresivni = 1;
            }else{
            charakter_agresivni = 0;
            } 

charakter_vasnivy = document.modul_psychika.charakter_vasnivy;
           if(charakter_vasnivy.checked) {
            charakter_vasnivy = 1;
            }else{
            charakter_vasnivy = 0;
            } 

charakter_peclivy = document.modul_psychika.charakter_peclivy;
           if(charakter_peclivy.checked) {
            charakter_peclivy = 1;
            }else{
            charakter_peclivy = 0;
            } 

charakter_samostatny = document.modul_psychika.charakter_samostatny;
           if(charakter_samostatny.checked) {
            charakter_samostatny = 1;
            }else{
            charakter_samostatny = 0;
            } 

charakter_cinorody = document.modul_psychika.charakter_cinorody;
           if(charakter_cinorody.checked) {
            charakter_cinorody = 1;
            }else{
            charakter_cinorody = 0;
            } 

charakter_nezavisly = document.modul_psychika.charakter_nezavisly;
           if(charakter_nezavisly.checked) {
            charakter_nezavisly = 1;
            }else{
            charakter_nezavisly = 0;
            } 

charakter_pratelsky = document.modul_psychika.charakter_pratelsky;
           if(charakter_pratelsky.checked) {
            charakter_pratelsky = 1;
            }else{
            charakter_pratelsky = 0;
            } 

charakter_plny_energie = document.modul_psychika.charakter_plny_energie;
           if(charakter_plny_energie.checked) {
            charakter_plny_energie = 1;
            }else{
            charakter_plny_energie = 0;
            } 

charakter_pracovity = document.modul_psychika.charakter_pracovity;
           if(charakter_pracovity.checked) {
            charakter_pracovity = 1;
            }else{
            charakter_pracovity = 0;
            }

charakter_puntickarsky = document.modul_psychika.charakter_puntickarsky;
           if(charakter_puntickarsky.checked) {
            charakter_puntickarsky = 1;
            }else{
            charakter_puntickarsky = 0;
            }            

charakter_zodpovedny = document.modul_psychika.charakter_zodpovedny;
           if(charakter_zodpovedny.checked) {
            charakter_zodpovedny = 1;
            }else{
            charakter_zodpovedny = 0;
            } 

charakter_precizni = document.modul_psychika.charakter_precizni;
           if(charakter_precizni.checked) {
            charakter_precizni = 1;
            }else{
            charakter_precizni = 0;
            } 

charakter_pragmaticky = document.modul_psychika.charakter_pragmaticky;
           if(charakter_pragmaticky.checked) {
            charakter_pragmaticky = 1;
            }else{
            charakter_pragmaticky = 0;
            } 




// --------- charakter konec ---------------
    
dataPsychika = dataPsychika + "&postoj_k_praci="+postoj_k_praci;
dataPsychika = dataPsychika + "&konfliktni_situace="+konfliktni_situace;
dataPsychika = dataPsychika + "&samota="+samota;  
dataPsychika = dataPsychika + "&plac="+plac; 
dataPsychika = dataPsychika + "&utesovani="+utesovani; 
dataPsychika = dataPsychika + "&limec_saty_opasek="+limec_saty_opasek; 


<?
function PopisCharakter($charakter)
{
echo 'dataPsychika = dataPsychika + "&charakter_'.$charakter.'="+charakter_'.$charakter.";\n";
}

PopisCharakter("pasivni");
PopisCharakter("vahavy");
PopisCharakter("mekky");
PopisCharakter("poddajny");
PopisCharakter("tichy");
PopisCharakter("zdrzenlivy");
PopisCharakter("premyslivy");
PopisCharakter("dukladny");
PopisCharakter("citlivy");
PopisCharakter("melancholicky");
PopisCharakter("nestabilni");
PopisCharakter("aktivni");
PopisCharakter("podnikavy");
PopisCharakter("odvazny");
PopisCharakter("neduverivy");
PopisCharakter("nestaly");
PopisCharakter("naladovy");
PopisCharakter("plny_predstav");
PopisCharakter("neporadny");
PopisCharakter("prehanejici");
PopisCharakter("nenavistny");
PopisCharakter("neodpustny");
PopisCharakter("zoufaly");
PopisCharakter("agresivni");
PopisCharakter("vasnivy");
PopisCharakter("peclivy");
PopisCharakter("samostatny");
PopisCharakter("cinorody");
PopisCharakter("nezavisly");
PopisCharakter("pratelsky");
PopisCharakter("plny_energie");
PopisCharakter("pracovity");
PopisCharakter("puntickarsky");
PopisCharakter("zodpovedny");
PopisCharakter("precizni");
PopisCharakter("pragmaticky");

?>
  xhttp.open("POST", "./script/modul_psychika_update.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(dataPsychika);
  alert("Uložení:\nZáznam Charakterové vlastnosti klienta byl aktualizován.");
     }

</script>



<br>
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
<br>


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
  var nejslabsi_oblasti_v_zivote = parseInt(document.modul_karmicka_zatez.nejslabsi_oblasti_v_zivote.value); 
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
  dataKarmickaZatez = dataKarmickaZatez + "&nejslabsi_oblasti_v_zivote="+nejslabsi_oblasti_v_zivote;
  dataKarmickaZatez = dataKarmickaZatez + "&karmicky_ukol="+karmicky_ukol;
  dataKarmickaZatez = dataKarmickaZatez + "&psychika_diagnoza="+psychika_diagnoza;

  xhttp.open("POST", "./script/modul_karmicka_zatez_update.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(dataKarmickaZatez);
  alert("Uložení:\nZáznam Karmická zátěž klienta byl aktualizován.");
     }

</script>





<?
}

?>