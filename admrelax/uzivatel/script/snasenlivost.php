<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php'; ?>

<?
//---------------------- ověření existence záznamu v DB začátek ----------------------
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_tcm_snasenlivost = "SELECT * FROM tcm_snasenlivost WHERE uzivatel_id = $uzivatel_id ORDER BY datum LIMIT 1";
$result_tcm_snasenlivost = $conn->query($sql_tcm_snasenlivost);
$conn->close();
$pocet_tcm_snasenlivost = mysqli_num_rows($result_tcm_snasenlivost);
//echo "ID: ".$uzivatel_id;
//echo "<br>";
//echo "pocet:".$pocet_tcm_snasenlivost;
//---------------------- ověření existence záznamu v DB konec ----------------------

if($pocet_tcm_snasenlivost == 0){

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "INSERT INTO tcm_snasenlivost (
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
// ------------------ formulář začátek  --------------  
?>




<?
// ------------------ formulář konec  -------------- 
?>
<br>
<div id="tcmSnasenlivost">
<h4>Snášenlivost tepla a chladu</h4>    
<form id="tcm_snasenlivost" name="tcm_snasenlivost" method="post">

<div class="row" style="background-color:#cce4f6;">
    <div class="col-sm-12">
    <br>
    <label for="uzivatel">Snášenlivost chladu:</label>
    </div>
</div>

<div class="row" style="background-color:#cce4f6;">

    <div class="col-sm-2">
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_potreba" value="1">potřeba</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_odpor" value="1">odpor</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_spatne" value="1">špatně</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_dobre" value="1">dobře</label> 
        </div>
    </div>
    <div class="col-sm-2">
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_pocit_sucha" value="1">pocit sucha</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_pocit_vlhka" value="1">pocit vlhka</label> 
        </div>
    </div>
</div>

<div class="row" style="background-color:#cce4f6;">

    <div class="col-sm-3">
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_pocit_vetru" value="1">pocit větru</label> 
        </div>
    </div>

    <div class="col-sm-3" >
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_chladne_obklady" value="1">používá chladné obklady</label> 
        </div>
    </div>

     <div class="col-sm-3">
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_zhorseni_stavu" value="1">zhorší se zdravotní problémy</label> 
        </div>
    </div>

    <div class="col-sm-3">
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_zlepseni_stavu" value="1">zlepší se zdravotní problémy</label> 
        </div>
    </div>

</div>

<div class="row" style="background-color:#f5cdb7;">
    <div class="col-sm-12">
    <br>
    <label for="uzivatel">Snášenlivost tepla:</label>
    </div>
</div>

<div class="row" style="background-color:#f5cdb7;">

    <div class="col-sm-2">
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_potreba" value="1">potřeba</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_odpor" value="1">odpor</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_spatne" value="1">špatně</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_dobre" value="1">dobře</label> 
        </div>
    </div>
    <div class="col-sm-2">
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_potreba_slunce" value="1">potřeba slunce</label> 
        </div>
    </div>

    <div class="col-sm-2" >
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_oteklost" value="1">oteklost</label> 
        </div>
    </div>
</div>

<div class="row" style="background-color:#f5cdb7;">

    <div class="col-sm-3">
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_koupele" value="1">teplé koupele</label> 
        </div>
    </div>    

     <div class="col-sm-3">
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_obklady" value="1">používá teplé obklady</label> 
        </div>
    </div>

    <div class="col-sm-3">
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_zhorseni_stavu" value="1">zhorší se zdravotní problémy</label> 
        </div>
    </div>

    <div class="col-sm-3">
        <div class="checkbox">
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_zlepseni_stavu" value="1">zlepší se zdravotní problémy</label> 
        </div>
    </div>

</div>

<div class="row" style="background-color:#efe9cf;">
    <div class="col-sm-12">
    <br>
    <label for="uzivatel">Spíše:</label>
    </div>

</div>

<div class="row" style="background-color:#efe9cf;">
<div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_snasenlivost_zimomrivost_horko" value = "1">zimomřivý</label>
        </div>
        </div>  
        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_snasenlivost_zimomrivost_horko" value = "2">nebo často horko</label>
        </div>
        </div> 
</div>




</form>
    <br>
    <button type="submit" class="btn btn-success btn-sm"  onclick="loadSnasenlivost()">&nbsp;&nbsp;Uložit snášenlivost chladu a tepla&nbsp;&nbsp;</button>
    <br>

</div>

<script>
function loadSnasenlivost() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tcmSnasenlivost").innerHTML = this.responseText;
    }
  };
 // --------- zimomřivost a horko začátek ---------------
 tcm_snasenlivost_zimomrivost_horko = document.tcm_snasenlivost.tcm_snasenlivost_zimomrivost_horko.value
// --------- zimomřivost a horko konec --------------- 

// --------- Snášenlivost chladu začátek ---------------
       tcm_snasenlivost_chlad_potreba = document.tcm_snasenlivost.tcm_snasenlivost_chlad_potreba;
           if(tcm_snasenlivost_chlad_potreba.checked) {
        tcm_snasenlivost_chlad_potreba = 1;
            }else{
        tcm_snasenlivost_chlad_potreba = 0;
            }

        tcm_snasenlivost_chlad_odpor = document.tcm_snasenlivost.tcm_snasenlivost_chlad_odpor;
            if(tcm_snasenlivost_chlad_odpor.checked) {
        tcm_snasenlivost_chlad_odpor = 1;
            }else{
        tcm_snasenlivost_chlad_odpor = 0;
            }    

        tcm_snasenlivost_chlad_spatne = document.tcm_snasenlivost.tcm_snasenlivost_chlad_spatne;
            if(tcm_snasenlivost_chlad_spatne.checked) {
        tcm_snasenlivost_chlad_spatne = 1;
            }else{
        tcm_snasenlivost_chlad_spatne = 0;
            }
       
        tcm_snasenlivost_chlad_dobre = document.tcm_snasenlivost.tcm_snasenlivost_chlad_dobre;
            if(tcm_snasenlivost_chlad_dobre.checked) {
        tcm_snasenlivost_chlad_dobre = 1;
            }else{
        tcm_snasenlivost_chlad_dobre = 0;
            }

        tcm_snasenlivost_chlad_pocit_sucha = document.tcm_snasenlivost.tcm_snasenlivost_chlad_pocit_sucha;
            if(tcm_snasenlivost_chlad_pocit_sucha.checked) {
        tcm_snasenlivost_chlad_pocit_sucha = 1;
            }else{
        tcm_snasenlivost_chlad_pocit_sucha = 0;
        }

        tcm_snasenlivost_chlad_pocit_vlhka = document.tcm_snasenlivost.tcm_snasenlivost_chlad_pocit_vlhka;
            if(tcm_snasenlivost_chlad_pocit_vlhka.checked) {
        tcm_snasenlivost_chlad_pocit_vlhka = 1;
            }else{
        tcm_snasenlivost_chlad_pocit_vlhka = 0;
        }

        tcm_snasenlivost_chlad_pocit_vetru = document.tcm_snasenlivost.tcm_snasenlivost_chlad_pocit_vetru;
            if(tcm_snasenlivost_chlad_pocit_vetru.checked) {
        tcm_snasenlivost_chlad_pocit_vetru = 1;
            }else{
        tcm_snasenlivost_chlad_pocit_vetru = 0;
        }        

        tcm_snasenlivost_chlad_chladne_obklady = document.tcm_snasenlivost.tcm_snasenlivost_chlad_chladne_obklady;
            if(tcm_snasenlivost_chlad_chladne_obklady.checked) {
        tcm_snasenlivost_chlad_chladne_obklady = 1;
            }else{
        tcm_snasenlivost_chlad_chladne_obklady = 0;
        }        

        tcm_snasenlivost_chlad_zhorseni_stavu = document.tcm_snasenlivost.tcm_snasenlivost_chlad_zhorseni_stavu;
            if(tcm_snasenlivost_chlad_zhorseni_stavu.checked) {
        tcm_snasenlivost_chlad_zhorseni_stavu = 1;
            }else{
        tcm_snasenlivost_chlad_zhorseni_stavu = 0;
        } 

        tcm_snasenlivost_chlad_zlepseni_stavu = document.tcm_snasenlivost.tcm_snasenlivost_chlad_zlepseni_stavu;
            if(tcm_snasenlivost_chlad_zlepseni_stavu.checked) {
        tcm_snasenlivost_chlad_zlepseni_stavu = 1;
            }else{
        tcm_snasenlivost_chlad_zlepseni_stavu = 0;
        } 
// --------- Snášenlivost chladu konec ---------------    
   
// --------- Snášenlivost tepla začátek ---------------       
        tcm_snasenlivost_teplo_potreba = document.tcm_snasenlivost.tcm_snasenlivost_teplo_potreba;
           if(tcm_snasenlivost_teplo_potreba.checked) {
        tcm_snasenlivost_teplo_potreba = 1;
            }else{
        tcm_snasenlivost_teplo_potreba = 0;
            }     

        tcm_snasenlivost_teplo_odpor = document.tcm_snasenlivost.tcm_snasenlivost_teplo_odpor;
           if(tcm_snasenlivost_teplo_odpor.checked) {
        tcm_snasenlivost_teplo_odpor = 1;
            }else{
        tcm_snasenlivost_teplo_odpor = 0;
            }  

        tcm_snasenlivost_teplo_spatne = document.tcm_snasenlivost.tcm_snasenlivost_teplo_spatne;
            if(tcm_snasenlivost_teplo_spatne.checked) {
        tcm_snasenlivost_teplo_spatne = 1;
            }else{
        tcm_snasenlivost_teplo_spatne = 0;
            }
       
        tcm_snasenlivost_teplo_dobre = document.tcm_snasenlivost.tcm_snasenlivost_teplo_dobre;
            if(tcm_snasenlivost_teplo_dobre.checked) {
        tcm_snasenlivost_teplo_dobre = 1;
            }else{
        tcm_snasenlivost_teplo_dobre = 0;
            }

        tcm_snasenlivost_teplo_potreba_slunce = document.tcm_snasenlivost.tcm_snasenlivost_teplo_potreba_slunce;
            if(tcm_snasenlivost_teplo_potreba_slunce.checked) {
        tcm_snasenlivost_teplo_potreba_slunce = 1;
            }else{
        tcm_snasenlivost_teplo_potreba_slunce = 0;
            }

         tcm_snasenlivost_teplo_oteklost = document.tcm_snasenlivost.tcm_snasenlivost_teplo_oteklost;
            if(tcm_snasenlivost_teplo_oteklost.checked) {
        tcm_snasenlivost_teplo_oteklost= 1;
            }else{
        tcm_snasenlivost_teplo_oteklost = 0;
            }

        tcm_snasenlivost_teplo_koupele = document.tcm_snasenlivost.tcm_snasenlivost_teplo_koupele;
            if(tcm_snasenlivost_teplo_koupele.checked) {
        tcm_snasenlivost_teplo_koupele = 1;
            }else{
        tcm_snasenlivost_teplo_koupele = 0;
            }

         tcm_snasenlivost_teplo_obklady = document.tcm_snasenlivost.tcm_snasenlivost_teplo_obklady;
            if(tcm_snasenlivost_teplo_obklady.checked) {
        tcm_snasenlivost_teplo_obklady= 1;
            }else{
        tcm_snasenlivost_teplo_obklady = 0;
            }

        tcm_snasenlivost_teplo_zhorseni_stavu = document.tcm_snasenlivost.tcm_snasenlivost_teplo_zhorseni_stavu;
            if(tcm_snasenlivost_teplo_zhorseni_stavu.checked) {
        tcm_snasenlivost_teplo_zhorseni_stavu = 1;
            }else{
        tcm_snasenlivost_teplo_zhorseni_stavu = 0;
        } 

        tcm_snasenlivost_teplo_zlepseni_stavu = document.tcm_snasenlivost.tcm_snasenlivost_teplo_zlepseni_stavu;
            if(tcm_snasenlivost_teplo_zlepseni_stavu.checked) {
        tcm_snasenlivost_teplo_zlepseni_stavu = 1;
            }else{
        tcm_snasenlivost_teplo_zlepseni_stavu = 0;
        }            
// --------- Snášenlivost tepla konec ---------------  
      let dataSnasenlivost = "uzivatel_id=<?echo $uzivatel_id; ?>";
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_potreba="+tcm_snasenlivost_chlad_potreba;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_odpor="+tcm_snasenlivost_chlad_odpor;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_spatne="+tcm_snasenlivost_chlad_spatne;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_dobre="+tcm_snasenlivost_chlad_dobre;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_pocit_sucha="+tcm_snasenlivost_chlad_pocit_sucha;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_pocit_vlhka="+tcm_snasenlivost_chlad_pocit_vlhka;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_pocit_vetru="+tcm_snasenlivost_chlad_pocit_vetru;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_chladne_obklady="+tcm_snasenlivost_chlad_chladne_obklady;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_zhorseni_stavu="+tcm_snasenlivost_chlad_zhorseni_stavu;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_zlepseni_stavu="+tcm_snasenlivost_chlad_zlepseni_stavu;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_potreba="+tcm_snasenlivost_teplo_potreba;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_odpor="+tcm_snasenlivost_teplo_odpor;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_spatne="+tcm_snasenlivost_teplo_spatne;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_dobre="+tcm_snasenlivost_teplo_dobre;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_potreba_slunce="+tcm_snasenlivost_teplo_potreba_slunce;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_oteklost="+tcm_snasenlivost_teplo_oteklost;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_koupele="+tcm_snasenlivost_teplo_koupele;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_obklady="+tcm_snasenlivost_teplo_obklady;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_zhorseni_stavu="+tcm_snasenlivost_teplo_zhorseni_stavu;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_zlepseni_stavu="+tcm_snasenlivost_teplo_zlepseni_stavu;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_zimomrivost_horko="+tcm_snasenlivost_zimomrivost_horko;

  xhttp.open("POST", "./script/form_snasenlivost_update.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(dataSnasenlivost);
  alert("Uložení:\nZáznam snášenlivost chladu a tepla byl uložen.");
     }
</script>



<?
}else{

    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "SELECT * FROM tcm_snasenlivost WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
    $result = $conn->query($sql);
    while($radek = $result->fetch_assoc()) {
        $tcm_snasenlivost_chlad_potreba = $radek["tcm_snasenlivost_chlad_potreba"];
        $tcm_snasenlivost_chlad_odpor = $radek["tcm_snasenlivost_chlad_odpor"];
        $tcm_snasenlivost_chlad_spatne = $radek["tcm_snasenlivost_chlad_spatne"];
        $tcm_snasenlivost_chlad_dobre = $radek["tcm_snasenlivost_chlad_dobre"];
        $tcm_snasenlivost_chlad_pocit_sucha= $radek["tcm_snasenlivost_chlad_pocit_sucha"];
        $tcm_snasenlivost_chlad_pocit_vlhka = $radek["tcm_snasenlivost_chlad_pocit_vlhka"];
        $tcm_snasenlivost_chlad_pocit_vetru = $radek["tcm_snasenlivost_chlad_pocit_vetru"];
        $tcm_snasenlivost_chlad_chladne_obklady = $radek["tcm_snasenlivost_chlad_chladne_obklady"];
        $tcm_snasenlivost_chlad_zhorseni_stavu = $radek["tcm_snasenlivost_chlad_zhorseni_stavu"];
        $tcm_snasenlivost_chlad_zlepseni_stavu = $radek["tcm_snasenlivost_chlad_zlepseni_stavu"];
        $tcm_snasenlivost_teplo_potreba = $radek["tcm_snasenlivost_teplo_potreba"];
        $tcm_snasenlivost_teplo_odpor = $radek["tcm_snasenlivost_teplo_odpor"];
        $tcm_snasenlivost_teplo_spatne = $radek["tcm_snasenlivost_teplo_spatne"];
        $tcm_snasenlivost_teplo_dobre = $radek["tcm_snasenlivost_chlad_dobre"];        
        $tcm_snasenlivost_teplo_potreba_slunce = $radek["tcm_snasenlivost_teplo_potreba_slunce"];
        $tcm_snasenlivost_teplo_oteklost = $radek["tcm_snasenlivost_teplo_oteklost"];
        $tcm_snasenlivost_teplo_koupele = $radek["tcm_snasenlivost_teplo_koupele"];
        $tcm_snasenlivost_teplo_obklady = $radek["tcm_snasenlivost_teplo_obklady"];
        $tcm_snasenlivost_teplo_zhorseni_stavu = $radek["tcm_snasenlivost_teplo_zhorseni_stavu"];
        $tcm_snasenlivost_teplo_zlepseni_stavu = $radek["tcm_snasenlivost_teplo_zlepseni_stavu"];
        $tcm_snasenlivost_zimomrivost_horko = $radek["tcm_snasenlivost_zimomrivost_horko"];
        $datum = $radek["datum"];
       } 
    $conn->close(); 
    ?>
    <br>    
<div id="tcmSnasenlivost">
<h4>Snášenlivost tepla a chladu</h4> 
<form id="tcm_snasenlivost" name="tcm_snasenlivost" method="post">

<div class="row" style="background-color:#cce4f6;">
    <div class="col-sm-12">
    <br>
    <label for="uzivatel">Snášenlivost chladu:</label>
    </div>
</div>

<div class="row" style="background-color:#cce4f6;">

    <div class="col-sm-2">
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_chlad_potreba == 0) {?>
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_potreba" value="1">potřeba</label> 
        <?
        }else{?>
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_potreba" value="1" checked>potřeba</label> 
        <? } ?>
        </div>
    </div>

    <div class="col-sm-2">
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_chlad_odpor == 0) {?>
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_odpor" value="1">odpor</label> 
        <?
        }else{?>
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_odpor" value="1" checked>odpor</label> 
        <? } ?>        
        </div>
    </div>

    <div class="col-sm-2">
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_chlad_spatne == 0) {?>           
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_spatne" value="1">špatně</label> 
        <?
        }else{?>
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_spatne" value="1" checked>špatně</label> 
        <? } ?>    
        </div>
    </div>

    <div class="col-sm-2">
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_chlad_dobre == 0) {?>            
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_dobre" value="1">dobře</label> 
        <?
        }else{?>
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_dobre" value="1" checked>dobře</label> 
         <? } ?>        
        </div>
    </div>

    <div class="col-sm-2">
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_chlad_pocit_sucha == 0) {?>              
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_pocit_sucha" value="1">pocit sucha</label> 
        <?
        }else{?>
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_pocit_sucha" value="1" checked>pocit sucha</label> 
        <? } ?> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_chlad_pocit_vlhka == 0) {?>               
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_pocit_vlhka" value="1">pocit vlhka</label> 
        <?
        }else{?>
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_pocit_vlhka" value="1" checked>pocit vlhka</label> 
        <? } ?> 

        </div>
    </div>
</div>

<div class="row" style="background-color:#cce4f6;">

    <div class="col-sm-3">
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_chlad_pocit_vetru == 0) {?>               
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_pocit_vetru" value="1">pocit větru</label> 
        <?
        }else{?>
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_pocit_vetru" value="1" checked>pocit větru</label> 
        <? } ?> 
        </div>
    </div>

    <div class="col-sm-3" >
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_chlad_chladne_obklady == 0) {?>             
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_chladne_obklady" value="1">používá chladné obklady</label> 
        <?
        }else{?>
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_chladne_obklady" value="1" checked>používá chladné obklady</label>         
        <? } ?>        
        </div>
    </div>

     <div class="col-sm-3">
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_chlad_zhorseni_stavu == 0) {?>  
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_zhorseni_stavu" value="1">zhorší se zdravotní problémy</label> 
        <?
        }else{?>
         <label><input type="checkbox" name="tcm_snasenlivost_chlad_zhorseni_stavu" value="1" checked>zhorší se zdravotní problémy</label>        
        <? } ?>    
        </div>
    </div>

    <div class="col-sm-3">
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_chlad_zlepseni_stavu == 0) {?>  
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_zlepseni_stavu" value="1">zlepší se zdravotní problémy</label> 
        <?
        }else{?>
        <label><input type="checkbox" name="tcm_snasenlivost_chlad_zlepseni_stavu" value="1" checked>zlepší se zdravotní problémy</label> 
        <? } ?>   
        </div>
    </div>

</div>

<div class="row" style="background-color:#f5cdb7;">
    <div class="col-sm-12">
    <br>
    <label for="uzivatel">Snášenlivost tepla:</label>
    </div>
</div>

<div class="row" style="background-color:#f5cdb7;">

    <div class="col-sm-2">
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_teplo_potreba == 0) {?>   
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_potreba" value="1">potřeba</label> 
        <?
        }else{?>
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_potreba" value="1" checked>potřeba</label> 
        <? } ?> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_teplo_odpor == 0) {?>  
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_odpor" value="1">odpor</label> 
        <?
        }else{?>
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_odpor" value="1" checked>odpor</label> 
        <? } ?>         
        </div>
    </div>

    <div class="col-sm-2">
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_teplo_spatne == 0) {?>   
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_spatne" value="1">špatně</label> 
        <?
        }else{?>
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_spatne" value="1" checked>špatně</label> 
        <? } ?>           
        </div>
    </div>

    <div class="col-sm-2">
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_teplo_dobre == 0) {?>   
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_dobre" value="1">dobře</label> 
        <?
        }else{?>
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_dobre" value="1" checked>dobře</label> 
        <? } ?>  
        </div>
    </div>
    
    <div class="col-sm-2">
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_teplo_potreba_slunce == 0) {?>  
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_potreba_slunce" value="1">potřeba slunce</label> 
        <?
        }else{?>
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_potreba_slunce" value="1" checked>potřeba slunce</label>        
        <? } ?>     
        </div>
    </div>

    <div class="col-sm-2" >
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_teplo_oteklost == 0) {?>  
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_oteklost" value="1">oteklost</label>
        <?
        }else{?>
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_oteklost" value="1" checked>oteklost</label> 
        <? } ?>  
        </div>
    </div>
</div>

<div class="row" style="background-color:#f5cdb7;">

    <div class="col-sm-3">
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_teplo_koupele == 0) {?> 
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_koupele" value="1">teplé koupele</label> 
        <?
        }else{?>
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_koupele" value="1" checked>teplé koupele</label>
        <? } ?> 
        </div>
    </div>    

     <div class="col-sm-3">
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_teplo_obklady == 0) {?>
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_obklady" value="1">používá teplé obklady</label> 
        <?
        }else{?>
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_obklady" value="1" checked>používá teplé obklady</label>
        <? } ?>  
        </div>
    </div>

    <div class="col-sm-3">
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_teplo_zhorseni_stavu == 0) {?>
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_zhorseni_stavu" value="1">zhorší se zdravotní problémy</label>
        <?
        }else{?>
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_zhorseni_stavu" value="1" checked>zhorší se zdravotní problémy</label>
        <? } ?> 
        </div>
    </div>

    <div class="col-sm-3">
        <div class="checkbox">
        <?  if ($tcm_snasenlivost_teplo_zlepseni_stavu == 0) {?>
        <label><input type="checkbox" name="tcm_snasenlivost_teplo_zlepseni_stavu" value="1">zlepší se zdravotní problémy</label>
        <?
        }else{?>
         <label><input type="checkbox" name="tcm_snasenlivost_teplo_zlepseni_stavu" value="1" checked>zlepší se zdravotní problémy</label>
        <? } ?>
        </div>
    </div>
</div>

<div class="row" style="background-color:#efe9cf;">
    <div class="col-sm-12">
    <br>
    <label for="uzivatel">Spíše:</label>
    </div>

</div>
    <div class="row" style="background-color:#efe9cf;">
    <? if ($tcm_snasenlivost_zimomrivost_horko == 0){ ?>    
        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_snasenlivost_zimomrivost_horko" value = "1">zimomřivý</label>
        </div>
        </div>  
        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_snasenlivost_zimomrivost_horko" value = "2">nebo často horko</label>
        </div>
        </div> 
        
        <? }elseif ($tcm_snasenlivost_zimomrivost_horko == 1){?>
        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_snasenlivost_zimomrivost_horko" value = "1" checked>zimomřivý</label>
        </div>
        </div>  
        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_snasenlivost_zimomrivost_horko" value = "2">nebo často horko</label>
        </div>
        </div> 

       <? }else{ ?>
        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_snasenlivost_zimomrivost_horko" value = "1">zimomřivý</label>
        </div>
        </div>  
        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_snasenlivost_zimomrivost_horko" value = "2" checked>nebo často horko</label>
        </div>
        </div>
        <? } ?>

  </div>

</form>
    <br>
    <button type="submit" class="btn btn-success btn-sm"  onclick="loadSnasenlivost()">&nbsp;&nbsp;Uložit snášenlivost chladu a tepla&nbsp;&nbsp;</button>
    <br>

</div>

<script>
function loadSnasenlivost() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tcmSnasenlivost").innerHTML = this.responseText;
    }
  };

 // --------- zimomřivost a horko začátek ---------------
 tcm_snasenlivost_zimomrivost_horko = document.tcm_snasenlivost.tcm_snasenlivost_zimomrivost_horko.value
// --------- zimomřivost a horko konec --------------- 


// --------- Snášenlivost chladu začátek ---------------
       tcm_snasenlivost_chlad_potreba = document.tcm_snasenlivost.tcm_snasenlivost_chlad_potreba;
           if(tcm_snasenlivost_chlad_potreba.checked) {
        tcm_snasenlivost_chlad_potreba = 1;
            }else{
        tcm_snasenlivost_chlad_potreba = 0;
            }

        tcm_snasenlivost_chlad_odpor = document.tcm_snasenlivost.tcm_snasenlivost_chlad_odpor;
            if(tcm_snasenlivost_chlad_odpor.checked) {
        tcm_snasenlivost_chlad_odpor = 1;
            }else{
        tcm_snasenlivost_chlad_odpor = 0;
            }    

        tcm_snasenlivost_chlad_spatne = document.tcm_snasenlivost.tcm_snasenlivost_chlad_spatne;
            if(tcm_snasenlivost_chlad_spatne.checked) {
        tcm_snasenlivost_chlad_spatne = 1;
            }else{
        tcm_snasenlivost_chlad_spatne = 0;
            }
       
        tcm_snasenlivost_chlad_dobre = document.tcm_snasenlivost.tcm_snasenlivost_chlad_dobre;
            if(tcm_snasenlivost_chlad_dobre.checked) {
        tcm_snasenlivost_chlad_dobre = 1;
            }else{
        tcm_snasenlivost_chlad_dobre = 0;
            }

        tcm_snasenlivost_chlad_pocit_sucha = document.tcm_snasenlivost.tcm_snasenlivost_chlad_pocit_sucha;
            if(tcm_snasenlivost_chlad_pocit_sucha.checked) {
        tcm_snasenlivost_chlad_pocit_sucha = 1;
            }else{
        tcm_snasenlivost_chlad_pocit_sucha = 0;
        }

        tcm_snasenlivost_chlad_pocit_vlhka = document.tcm_snasenlivost.tcm_snasenlivost_chlad_pocit_vlhka;
            if(tcm_snasenlivost_chlad_pocit_vlhka.checked) {
        tcm_snasenlivost_chlad_pocit_vlhka = 1;
            }else{
        tcm_snasenlivost_chlad_pocit_vlhka = 0;
        }

        tcm_snasenlivost_chlad_pocit_vetru = document.tcm_snasenlivost.tcm_snasenlivost_chlad_pocit_vetru;
            if(tcm_snasenlivost_chlad_pocit_vetru.checked) {
        tcm_snasenlivost_chlad_pocit_vetru = 1;
            }else{
        tcm_snasenlivost_chlad_pocit_vetru = 0;
        }        

        tcm_snasenlivost_chlad_chladne_obklady = document.tcm_snasenlivost.tcm_snasenlivost_chlad_chladne_obklady;
            if(tcm_snasenlivost_chlad_chladne_obklady.checked) {
        tcm_snasenlivost_chlad_chladne_obklady = 1;
            }else{
        tcm_snasenlivost_chlad_chladne_obklady = 0;
        }        

        tcm_snasenlivost_chlad_zhorseni_stavu = document.tcm_snasenlivost.tcm_snasenlivost_chlad_zhorseni_stavu;
            if(tcm_snasenlivost_chlad_zhorseni_stavu.checked) {
        tcm_snasenlivost_chlad_zhorseni_stavu = 1;
            }else{
        tcm_snasenlivost_chlad_zhorseni_stavu = 0;
        } 

        tcm_snasenlivost_chlad_zlepseni_stavu = document.tcm_snasenlivost.tcm_snasenlivost_chlad_zlepseni_stavu;
            if(tcm_snasenlivost_chlad_zlepseni_stavu.checked) {
        tcm_snasenlivost_chlad_zlepseni_stavu = 1;
            }else{
        tcm_snasenlivost_chlad_zlepseni_stavu = 0;
        } 
// --------- Snášenlivost chladu konec ---------------    
   
// --------- Snášenlivost tepla začátek ---------------       
        tcm_snasenlivost_teplo_potreba = document.tcm_snasenlivost.tcm_snasenlivost_teplo_potreba;
           if(tcm_snasenlivost_teplo_potreba.checked) {
        tcm_snasenlivost_teplo_potreba = 1;
            }else{
        tcm_snasenlivost_teplo_potreba = 0;
            }     

        tcm_snasenlivost_teplo_odpor = document.tcm_snasenlivost.tcm_snasenlivost_teplo_odpor;
           if(tcm_snasenlivost_teplo_odpor.checked) {
        tcm_snasenlivost_teplo_odpor = 1;
            }else{
        tcm_snasenlivost_teplo_odpor = 0;
            }  

        tcm_snasenlivost_teplo_spatne = document.tcm_snasenlivost.tcm_snasenlivost_teplo_spatne;
            if(tcm_snasenlivost_teplo_spatne.checked) {
        tcm_snasenlivost_teplo_spatne = 1;
            }else{
        tcm_snasenlivost_teplo_spatne = 0;
            }
       
        tcm_snasenlivost_teplo_dobre = document.tcm_snasenlivost.tcm_snasenlivost_teplo_dobre;
            if(tcm_snasenlivost_teplo_dobre.checked) {
        tcm_snasenlivost_teplo_dobre = 1;
            }else{
        tcm_snasenlivost_teplo_dobre = 0;
            }

        tcm_snasenlivost_teplo_potreba_slunce = document.tcm_snasenlivost.tcm_snasenlivost_teplo_potreba_slunce;
            if(tcm_snasenlivost_teplo_potreba_slunce.checked) {
        tcm_snasenlivost_teplo_potreba_slunce = 1;
            }else{
        tcm_snasenlivost_teplo_potreba_slunce = 0;
            }

         tcm_snasenlivost_teplo_oteklost = document.tcm_snasenlivost.tcm_snasenlivost_teplo_oteklost;
            if(tcm_snasenlivost_teplo_oteklost.checked) {
        tcm_snasenlivost_teplo_oteklost= 1;
            }else{
        tcm_snasenlivost_teplo_oteklost = 0;
            }

        tcm_snasenlivost_teplo_koupele = document.tcm_snasenlivost.tcm_snasenlivost_teplo_koupele;
            if(tcm_snasenlivost_teplo_koupele.checked) {
        tcm_snasenlivost_teplo_koupele = 1;
            }else{
        tcm_snasenlivost_teplo_koupele = 0;
            }

         tcm_snasenlivost_teplo_obklady = document.tcm_snasenlivost.tcm_snasenlivost_teplo_obklady;
            if(tcm_snasenlivost_teplo_obklady.checked) {
        tcm_snasenlivost_teplo_obklady= 1;
            }else{
        tcm_snasenlivost_teplo_obklady = 0;
            }

        tcm_snasenlivost_teplo_zhorseni_stavu = document.tcm_snasenlivost.tcm_snasenlivost_teplo_zhorseni_stavu;
            if(tcm_snasenlivost_teplo_zhorseni_stavu.checked) {
        tcm_snasenlivost_teplo_zhorseni_stavu = 1;
            }else{
        tcm_snasenlivost_teplo_zhorseni_stavu = 0;
        } 

        tcm_snasenlivost_teplo_zlepseni_stavu = document.tcm_snasenlivost.tcm_snasenlivost_teplo_zlepseni_stavu;
            if(tcm_snasenlivost_teplo_zlepseni_stavu.checked) {
        tcm_snasenlivost_teplo_zlepseni_stavu = 1;
            }else{
        tcm_snasenlivost_teplo_zlepseni_stavu = 0;
        }            
// --------- Snášenlivost tepla konec --------------- 



      let dataSnasenlivost = "uzivatel_id=<?echo $uzivatel_id; ?>";
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_potreba="+tcm_snasenlivost_chlad_potreba;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_odpor="+tcm_snasenlivost_chlad_odpor;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_spatne="+tcm_snasenlivost_chlad_spatne;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_dobre="+tcm_snasenlivost_chlad_dobre;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_pocit_sucha="+tcm_snasenlivost_chlad_pocit_sucha;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_pocit_vlhka="+tcm_snasenlivost_chlad_pocit_vlhka;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_pocit_vetru="+tcm_snasenlivost_chlad_pocit_vetru;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_chladne_obklady="+tcm_snasenlivost_chlad_chladne_obklady;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_zhorseni_stavu="+tcm_snasenlivost_chlad_zhorseni_stavu;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_chlad_zlepseni_stavu="+tcm_snasenlivost_chlad_zlepseni_stavu;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_potreba="+tcm_snasenlivost_teplo_potreba;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_odpor="+tcm_snasenlivost_teplo_odpor;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_spatne="+tcm_snasenlivost_teplo_spatne;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_dobre="+tcm_snasenlivost_teplo_dobre;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_potreba_slunce="+tcm_snasenlivost_teplo_potreba_slunce;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_oteklost="+tcm_snasenlivost_teplo_oteklost;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_koupele="+tcm_snasenlivost_teplo_koupele;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_obklady="+tcm_snasenlivost_teplo_obklady;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_zhorseni_stavu="+tcm_snasenlivost_teplo_zhorseni_stavu;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_teplo_zlepseni_stavu="+tcm_snasenlivost_teplo_zlepseni_stavu;
       dataSnasenlivost = dataSnasenlivost + "&tcm_snasenlivost_zimomrivost_horko="+tcm_snasenlivost_zimomrivost_horko;

  xhttp.open("POST", "./script/form_snasenlivost_update.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(dataSnasenlivost);
  alert("Uložení:\nZáznam snášenlivost chladu a tepla byl uložen.");
     }
</script>


    
<?    
    }
?>
