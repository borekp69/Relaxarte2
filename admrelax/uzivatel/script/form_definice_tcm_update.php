<? 
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");
$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));
$tcm_definice_form = addslashes(htmlspecialchars(trim("$_POST[tcm_definice_pole]")));

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "UPDATE tcm_definice SET
    
    tcm_definice = '$tcm_definice_form',  
    datum =  NOW()
    WHERE uzivatel_id = '$uzivatel_id'
    ";
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

