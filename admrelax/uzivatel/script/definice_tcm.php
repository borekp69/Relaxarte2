<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php'; 
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");

//---------------------- ověření existence záznamu v DB začátek ----------------------
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_tcm_definice = "SELECT * FROM tcm_definice WHERE uzivatel_id = $uzivatel_id ORDER BY datum LIMIT 1";
$result_tcm_definice = $conn->query($sql_tcm_definice);
$conn->close();
$pocet_tcm_definice = mysqli_num_rows($result_tcm_definice);
//---------------------- ověření existence záznamu v DB konec ----------------------
//echo "ID: ".$uzivatel_id."<br>";
//echo "Pocet: ".$pocet_tcm_definice."<br>";

if($pocet_tcm_definice == 0){
  $tcm_definice_form = "";
  require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
   $sql = "INSERT INTO tcm_definice(
    uzivatel_id,
    tcm_definice, 
    datum
    )
    VALUES (    
    '$uzivatel_id', 
    '$tcm_definice_form', 
     NOW() 
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close(); 

    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "SELECT * FROM  tcm_definice WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
    $result = $conn->query($sql);
    while($radek = $result->fetch_assoc()) {
        $tcm_definice = $radek["tcm_definice"];
        $datum = $radek["datum"];
       } 

       $conn->close();




?>


<div id="tcmDefUp">
<form id="form2" name="form2" method="post">
    <br>
    <h4>TČM typ psychosomatické konstituce</h4>
    <div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
    <br>
    <label for="uzivatel">Definice:</label>
    <textarea class="form-control" id="tcm_definice_pole" name="tcm_definice_pole" rows="7" maxlength="600" placeholder="TČM typ psychosomatické konstituce"><?echo  $tcm_definice;?></textarea>
    <br>
    </div>
    </div>

    </form>
<br>
 <button type="submit" class="btn btn-success btn-sm"  onclick="loadDefiniceUpdate()">&nbsp;&nbsp;Uložit TČM typ psychosomatické konstituce&nbsp;&nbsp;</button>

    <br>
</div>

<script>
function loadDefiniceUpdate() {
var tcm_definice2 = document.form2.tcm_definice_pole.value; 
alert("Uložení:\nZáznam TČM typ psychosomatické konstituce byl uložen.");

 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tcmDefUp").innerHTML = this.responseText;
    }
  };
 
       let dataDefinice = "uzivatel_id=<?echo $uzivatel_id; ?>";
       dataDefinice  = dataDefinice + "&tcm_definice_pole=" + tcm_definice2;
  xhttp.open("POST", "./script/form_definice_tcm_update.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(dataDefinice);
 }
</script>


<? 
}else{

    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "SELECT * FROM  tcm_definice WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
    $result = $conn->query($sql);
    while($radek = $result->fetch_assoc()) {
        $tcm_definice = $radek["tcm_definice"];
        $datum = $radek["datum"];
       } 
       $conn->close();
       
?>

<div id="tcmDefUp">
<form id="form2" name="form2" method="post">
    <br>
    <h4>TČM typ psychosomatické konstituce</h4>
    <div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
    <br>
    <label for="uzivatel">Definice:</label>
    <textarea class="form-control" id="tcm_definice_pole" name="tcm_definice_pole" rows="7" maxlength="600" placeholder="TČM typ psychosomatické konstituce"><?echo  $tcm_definice;?></textarea>
    <br>
    </div>
    </div>

    </form>
<br>
 <button type="submit" class="btn btn-success btn-sm"  onclick="loadDefiniceUpdate()">&nbsp;&nbsp;Uložit TČM typ psychosomatické konstituce&nbsp;&nbsp;</button>

    <br>
</div>

<script>
function loadDefiniceUpdate() {

var tcm_definice2 = document.form2.tcm_definice_pole.value; 
alert("Uložení:\nZáznam TČM typ psychosomatické konstituce byl uložen.");

 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tcmDefUp").innerHTML = this.responseText;
    }
  };
 
       let dataDefinice = "uzivatel_id=<?echo $uzivatel_id; ?>";
       dataDefinice  = dataDefinice + "&tcm_definice_pole=" + tcm_definice2;
  xhttp.open("POST", "./script/form_definice_tcm_update.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(dataDefinice);
 }
</script>

    <?
} // konec podmínky

?>












