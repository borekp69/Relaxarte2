<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php'; ?>



<?
//---------------------- ověření existence záznamu v DB začátek ----------------------
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_tcm_telo = "SELECT * FROM tcm_telo WHERE uzivatel_id = $uzivatel_id ORDER BY datum LIMIT 1";
$result_tcm_telo = $conn->query($sql_tcm_telo);
$conn->close();
$pocet_tcm_telo = mysqli_num_rows($result_tcm_telo);

//echo "ID: ".$uzivatel_id;
//echo "<br>";
//echo "pocet:".$pocet_tcm_telo;
//---------------------- ověření existence záznamu v DB konec ----------------------

if($pocet_tcm_telo == 0){

  require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";

  $sql = "INSERT INTO tcm_telo (
      uzivatel_id,
      tcm_telo_voda, 
      tcm_telo_drevo,
      tcm_telo_kov,
      tcm_telo_zeme,   
      tcm_telo_ohen,   
      datum
      )
      VALUES (    
      '$uzivatel_id', 
      '0', 
      '0',
      '0',
      '0', 
      '0',      
       NOW() 
       )";
  
      if ($conn->query($sql) === TRUE) {    
      } else {
    echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
      }
  
      
      require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
      $sql = "INSERT INTO tcm_psychika (
          uzivatel_id,
          tcm_psychika_voda, 
          tcm_psychika_drevo,
          tcm_psychika_kov,
          tcm_psychika_zeme,   
          tcm_psychika_ohen,   
          datum
          )
          VALUES (    
         '$uzivatel_id', 
         '0', 
         '0',
         '0',
         '0', 
         '0',      
        NOW() 
        )";
      
          if ($conn->query($sql) === TRUE) {    
          } else {
        echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
          }
          $conn->close(); 


          require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
          $sql = "SELECT * FROM  tcm_telo WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
          $result = $conn->query($sql);
          while($radek = $result->fetch_assoc()) {
              $tcm_telo_voda = $radek["tcm_telo_voda"];
              $tcm_telo_drevo = $radek["tcm_telo_drevo"];
              $tcm_telo_kov = $radek["tcm_telo_kov"];
              $tcm_telo_zeme = $radek["tcm_telo_zeme"];
              $tcm_telo_ohen = $radek["tcm_telo_ohen"];
              $datum = $radek["datum"];
             } 
          
          require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
          $sql = "SELECT * FROM  tcm_psychika WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
          $result = $conn->query($sql);
          while($radek = $result->fetch_assoc()) {
          
              $tcm_psychika_voda = $radek["tcm_psychika_voda"];
              $tcm_psychika_drevo = $radek["tcm_psychika_drevo"];
              $tcm_psychika_kov = $radek["tcm_psychika_kov"];
              $tcm_psychika_zeme = $radek["tcm_psychika_zeme"];
              $tcm_psychika_ohen = $radek["tcm_psychika_ohen"];
              $datum = $radek["datum"];
          } 
          
          
          
          
          
          
          // ------------------ formulář začátek  --------------  !=  ?>
          
          <div id="tcm_telo">
          <h4>Diagnostika TČM</h4>
          
          <form name="form_tcm" id="form_tcm" method="post" > 
          
          <div class="row">
              <div class="col-sm-12" style="background-color:#f4e9dd;">
              <h5>TČM % kombinace elementů - Fyzické tělo</h5>
          
          <div class="row">
                  <div class="col-sm-2">
                  <label>Voda</label>
                  <select class="form-control" id="fyzicke_telo_voda" name="fyzicke_telo_voda">
                  <?
                  $procenta = 0;
                  while($procenta <= 100) {
                    if ($procenta == $tcm_telo_voda){
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
          
                  <div class="col-sm-2">
                  <label>Dřevo</label>
                  <select class="form-control" id="fyzicke_telo_drevo" name="fyzicke_telo_drevo">
                  <?
                  $procenta = 0;
                  while($procenta <= 100) {
                    if ($procenta == $tcm_telo_drevo){
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
          
                  <div class="col-sm-2">
                  <label>Kov</label>
                  <select class="form-control" id="fyzicke_telo_kov" name="fyzicke_telo_kov">
                  <?
                  $procenta = 0;
                  while($procenta <= 100) {
                    if ($procenta == $tcm_telo_kov){
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
          
                 <div class="col-sm-2">
                  <label>Země</label>
                  <select class="form-control" id="fyzicke_telo_zeme" name="fyzicke_telo_zeme">
                  <?
                  $procenta = 0;
                  while($procenta <= 100) {
                    if ($procenta == $tcm_telo_zeme){
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
          
                   <div class="col-sm-2">
                  <label>Oheň</label>
                  <select class="form-control" id="fyzicke_telo_ohen" name="fyzicke_telo_ohen">
                  <?
                  $procenta = 0;
                  while($procenta <= 100) {
                    if ($procenta == $tcm_telo_ohen){
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
          </div>
          
          <div class="row">
              <div class="col-sm-12" style="background-color:#d6e7f9;">
              <h5>TČM % kombinace elementů - Psychika</h5>
          
          <div class="row">
                  <div class="col-sm-2">
                  <label>Voda</label>
                  <select class="form-control" id="psychika_voda" name="psychika_voda">
                  <?
                  $procenta = 0;
                  while($procenta <= 100) {
                    if ($procenta == $tcm_psychika_voda){
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
          
                  <div class="col-sm-2">
                  <label>Dřevo</label>
                  <select class="form-control" id="psychika_drevo" name="psychika_drevo">
                  <?
                  $procenta = 0;
                  while($procenta <= 100) {
                    if ($procenta == $tcm_psychika_drevo){
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
          
                  <div class="col-sm-2">
                  <label>Kov</label>
                  <select class="form-control" id="psychika_kov" name="psychika_kov">
                  <?
                  $procenta = 0;
                  while($procenta <= 100) {
                    if ($procenta == $tcm_psychika_kov){
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
          
                 <div class="col-sm-2">
                  <label>Země</label>
                  <select class="form-control" id="psychika_zeme" name="psychika_zeme">
                  <?
                  $procenta = 0;
                  while($procenta <= 100) {
                    if ($procenta == $tcm_psychika_zeme){
                      echo'<option value="'.$procenta. '"selected>'.$procenta."%</option>\n";
                      $procenta+=5;
                      }else{
                      echo'<option value="'.$procenta. '">'.$procenta."%</option>\n";
                      $procenta+=5;
                      };
                  }
                  ?>   
                  </select>  
                  <br>
                 </div>
          
                   <div class="col-sm-2">
                  <label>Oheň</label>
                  <select class="form-control" id="psychika_ohen" name="psychika_ohen">
                  <?
                  $procenta = 0;
                  while($procenta <= 100) {
                    if ($procenta == $tcm_psychika_ohen){
                      echo'<option value="'.$procenta. '"selected>'.$procenta."%</option>\n";
                      $procenta+=5;
                      }else{
                      echo'<option value="'.$procenta. '">'.$procenta."%</option>\n";
                      $procenta+=5;
                      };
                  }
                  ?>   
                  </select>        
                  
                  <br>
                 </div> 
          
              </form>
            </div>
          </div>
          </div>
          <br>
            <button type="submit" class="btn btn-success btn-sm"  onclick="loadDoc()">&nbsp;&nbsp;Uložit diagnostiku TČM&nbsp;&nbsp;</button>
              </div>
          
           
          <!-- Začátek XMLHttpRequest--> 
          <script>
          function loadDoc() {
           var fyzicke_telo_voda=parseInt(document.form_tcm.fyzicke_telo_voda.value);  
           var fyzicke_telo_drevo=parseInt(document.form_tcm.fyzicke_telo_drevo.value); 
           var fyzicke_telo_kov=parseInt(document.form_tcm.fyzicke_telo_kov.value); 
           var fyzicke_telo_zeme=parseInt(document.form_tcm.fyzicke_telo_zeme.value); 
           var fyzicke_telo_ohen=parseInt(document.form_tcm.fyzicke_telo_ohen.value); 
          
           var psychika_voda=parseInt(document.form_tcm.psychika_voda.value); 
           var psychika_drevo=parseInt(document.form_tcm.psychika_drevo.value); 
           var psychika_kov=parseInt(document.form_tcm.psychika_kov.value); 
           var psychika_zeme=parseInt(document.form_tcm.psychika_zeme.value); 
           var psychika_ohen=parseInt(document.form_tcm.psychika_ohen.value); 
          
           var soucet_fyzicke_telo = fyzicke_telo_voda + fyzicke_telo_drevo + fyzicke_telo_kov + fyzicke_telo_zeme + fyzicke_telo_ohen;
           var soucet_psychika = psychika_voda + psychika_drevo + psychika_kov + psychika_zeme + psychika_ohen;
          
          if (soucet_fyzicke_telo > 100 || soucet_psychika >100 ) {
             alert(" Chyba  - součet položek je vyšší než 100% !!\n \n TČM kombinace elementů - Fyzické tělo: "+ soucet_fyzicke_telo+" %\n \n TČM kombinace elementů - Psychika: " + soucet_psychika+ "%");
          
          } else { 
             alert("Uložení nového záznamu:\nDiagnostika TČM.");
          
          
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tcm_telo").innerHTML =
                this.responseText;
              }
            };
            xhttp.open("POST", "./script/form_tcm.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          
          let data = "uzivatel_id=<?echo $uzivatel_id; ?>";
              data = data + "&fyzicke_telo_voda="+fyzicke_telo_voda;
              data = data + "&fyzicke_telo_drevo="+fyzicke_telo_drevo;
              data = data + "&fyzicke_telo_kov="+fyzicke_telo_kov;
              data = data + "&fyzicke_telo_zeme="+fyzicke_telo_zeme;
              data = data + "&fyzicke_telo_ohen="+fyzicke_telo_ohen;
          
              data = data + "&psychika_voda="+psychika_voda;
              data = data + "&psychika_drevo="+psychika_drevo;
              data = data + "&psychika_kov="+psychika_kov;
              data = data + "&psychika_zeme="+psychika_zeme;
              data = data + "&psychika_ohen="+psychika_ohen;
              // xhttp.send("uzivatel_id=123654");
              xhttp.send(data);
          }
          
          
          } // konec podmíny okna
          
          
          </script>
          <!-- Konec XMLHttpRequest--> 
          
          <?// ------------------ formulář konec  --------------   
          
          
          // ------------------ výpis začátek --------------   




}else{

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT * FROM  tcm_telo WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($radek = $result->fetch_assoc()) {
    $tcm_telo_voda = $radek["tcm_telo_voda"];
    $tcm_telo_drevo = $radek["tcm_telo_drevo"];
    $tcm_telo_kov = $radek["tcm_telo_kov"];
    $tcm_telo_zeme = $radek["tcm_telo_zeme"];
    $tcm_telo_ohen = $radek["tcm_telo_ohen"];
    $datum = $radek["datum"];
   } 

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT * FROM  tcm_psychika WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($radek = $result->fetch_assoc()) {

    $tcm_psychika_voda = $radek["tcm_psychika_voda"];
    $tcm_psychika_drevo = $radek["tcm_psychika_drevo"];
    $tcm_psychika_kov = $radek["tcm_psychika_kov"];
    $tcm_psychika_zeme = $radek["tcm_psychika_zeme"];
    $tcm_psychika_ohen = $radek["tcm_psychika_ohen"];
    $datum = $radek["datum"];
} 






// ------------------ formulář začátek  --------------  !=  ?>

<div id="tcm_telo">
<h4>Diagnostika TČM</h4> 

<form name="form_tcm" id="form_tcm" method="post" > 

<div class="row">
    <div class="col-sm-12" style="background-color:#f4e9dd;">
    <h5>TČM % kombinace elementů - Fyzické tělo</h5>

<div class="row">
        <div class="col-sm-2">
        <label>Voda</label>
        <select class="form-control" id="fyzicke_telo_voda" name="fyzicke_telo_voda">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $tcm_telo_voda){
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

        <div class="col-sm-2">
        <label>Dřevo</label>
        <select class="form-control" id="fyzicke_telo_drevo" name="fyzicke_telo_drevo">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $tcm_telo_drevo){
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

        <div class="col-sm-2">
        <label>Kov</label>
        <select class="form-control" id="fyzicke_telo_kov" name="fyzicke_telo_kov">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $tcm_telo_kov){
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

       <div class="col-sm-2">
        <label>Země</label>
        <select class="form-control" id="fyzicke_telo_zeme" name="fyzicke_telo_zeme">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $tcm_telo_zeme){
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

         <div class="col-sm-2">
        <label>Oheň</label>
        <select class="form-control" id="fyzicke_telo_ohen" name="fyzicke_telo_ohen">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $tcm_telo_ohen){
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
</div>

<div class="row">
    <div class="col-sm-12" style="background-color:#d6e7f9;">
    <h5>TČM % kombinace elementů - Psychika</h5>

<div class="row">
        <div class="col-sm-2">
        <label>Voda</label>
        <select class="form-control" id="psychika_voda" name="psychika_voda">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $tcm_psychika_voda){
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

        <div class="col-sm-2">
        <label>Dřevo</label>
        <select class="form-control" id="psychika_drevo" name="psychika_drevo">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $tcm_psychika_drevo){
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

        <div class="col-sm-2">
        <label>Kov</label>
        <select class="form-control" id="psychika_kov" name="psychika_kov">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $tcm_psychika_kov){
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

       <div class="col-sm-2">
        <label>Země</label>
        <select class="form-control" id="psychika_zeme" name="psychika_zeme">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $tcm_psychika_zeme){
            echo'<option value="'.$procenta. '"selected>'.$procenta."%</option>\n";
            $procenta+=5;
            }else{
            echo'<option value="'.$procenta. '">'.$procenta."%</option>\n";
            $procenta+=5;
            };
        }
        ?>   
        </select>  
        <br>
       </div>

         <div class="col-sm-2">
        <label>Oheň</label>
        <select class="form-control" id="psychika_ohen" name="psychika_ohen">
        <?
        $procenta = 0;
        while($procenta <= 100) {
          if ($procenta == $tcm_psychika_ohen){
            echo'<option value="'.$procenta. '"selected>'.$procenta."%</option>\n";
            $procenta+=5;
            }else{
            echo'<option value="'.$procenta. '">'.$procenta."%</option>\n";
            $procenta+=5;
            };
        }
        ?>   
        </select>        
        
        <br>
       </div> 

    </form>
  </div>
</div>
</div>
<br>
  <button type="submit" class="btn btn-success btn-sm"  onclick="loadDoc()">&nbsp;&nbsp;Uložit diagnostiku TČM&nbsp;&nbsp;</button>
    </div>

   
      <script>
function myFunction() {
  var x = document.getElementById("myDIV<? echo $uzivatel_id; ?>");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>




<!-- Začátek XMLHttpRequest--> 
<script>
function loadDoc() {
 var fyzicke_telo_voda=parseInt(document.form_tcm.fyzicke_telo_voda.value);  
 var fyzicke_telo_drevo=parseInt(document.form_tcm.fyzicke_telo_drevo.value); 
 var fyzicke_telo_kov=parseInt(document.form_tcm.fyzicke_telo_kov.value); 
 var fyzicke_telo_zeme=parseInt(document.form_tcm.fyzicke_telo_zeme.value); 
 var fyzicke_telo_ohen=parseInt(document.form_tcm.fyzicke_telo_ohen.value); 

 var psychika_voda=parseInt(document.form_tcm.psychika_voda.value); 
 var psychika_drevo=parseInt(document.form_tcm.psychika_drevo.value); 
 var psychika_kov=parseInt(document.form_tcm.psychika_kov.value); 
 var psychika_zeme=parseInt(document.form_tcm.psychika_zeme.value); 
 var psychika_ohen=parseInt(document.form_tcm.psychika_ohen.value); 

 var soucet_fyzicke_telo = fyzicke_telo_voda + fyzicke_telo_drevo + fyzicke_telo_kov + fyzicke_telo_zeme + fyzicke_telo_ohen;
 var soucet_psychika = psychika_voda + psychika_drevo + psychika_kov + psychika_zeme + psychika_ohen;

if (soucet_fyzicke_telo > 100 || soucet_psychika >100 ) {
   alert(" Chyba  - součet položek je vyšší než 100% !!\n \n TČM kombinace elementů - Fyzické tělo: "+ soucet_fyzicke_telo+" %\n \n TČM kombinace elementů - Psychika: " + soucet_psychika+ "%");

} else { 
   alert("Uložení nového záznamu:\nDiagnostika TČM.");


  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tcm_telo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("POST", "./script/form_tcm.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

let data = "uzivatel_id=<?echo $uzivatel_id; ?>";
    data = data + "&fyzicke_telo_voda="+fyzicke_telo_voda;
    data = data + "&fyzicke_telo_drevo="+fyzicke_telo_drevo;
    data = data + "&fyzicke_telo_kov="+fyzicke_telo_kov;
    data = data + "&fyzicke_telo_zeme="+fyzicke_telo_zeme;
    data = data + "&fyzicke_telo_ohen="+fyzicke_telo_ohen;

    data = data + "&psychika_voda="+psychika_voda;
    data = data + "&psychika_drevo="+psychika_drevo;
    data = data + "&psychika_kov="+psychika_kov;
    data = data + "&psychika_zeme="+psychika_zeme;
    data = data + "&psychika_ohen="+psychika_ohen;
    // xhttp.send("uzivatel_id=123654");
    xhttp.send(data);
}


} // konec podmíny okna


</script>
<!-- Konec XMLHttpRequest--> 

<?// ------------------ formulář konec  --------------   


// ------------------ výpis začátek --------------   

}

?>

  
   



