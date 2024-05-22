<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");

require "sifrovani_dat.php";
$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));
$lektor_form = addslashes(htmlspecialchars(trim("$_POST[lektor]")));
$joga_kurz_form = addslashes(htmlspecialchars(trim("$_POST[joga_kurz]")));
if (!$joga_kurz_form) { $joga_kurz_form = 0; }
if (!$lektor_form) { $lektor_form = 0; }


if ($joga_kurz_form == 0){
    $lektor_form = 0;
}else{
    $lektor_form = $lektor_form ;
}


$lektor_form = encrypt_decrypt('encrypt', $lektor_form);

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "UPDATE joga SET
joga = '$joga_kurz_form',
lektor = '$lektor_form',
datum =  NOW()
    WHERE uzivatel_id = '$uzivatel_id'
    ";
if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close(); 


    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql_sport_pravidelne = "SELECT * FROM joga WHERE uzivatel_id = $uzivatel_id LIMIT 1";
    $result_sport_pravidelne = $conn->query($sql_sport_pravidelne);
    while($radek = $result_sport_pravidelne->fetch_assoc()) {
    $joga = $radek["joga"];
    $lektor = encrypt_decrypt('decrypt', $radek["lektor"]);
    }
    $conn->close();
?>
<div id="JogaUpdate">
<form id="JogaForm" name="JogaForm" method="post">
    <div class="row" style="background-color:#ddf0f3;">
        <div class="col-sm-4" <?echo $chyba_joga_kurz;?>>
        <label for="uzivatel">Absolvoval jste někdy kurz ŠIVA jógy:</label>
        <select class="form-control" id="zobrazjoga" name="joga_kurz">
        <? 
        if ($joga == 0) { 
        $lektor = "";
        ?>
        <option value="0" selected>Ne</option> 
        <option value="1">Ano</option>
        </select>
        <? 
        }else { 
        $lektor = $lektor;  
        ?>
        <option value="0">Ne</option> 
        <option value="1" selected>Ano</option>
        </select>
        <?  } ?>
        <br>
        </div>
  
    
        <div class="col-sm-5" <?echo $chyba_lektor;?>>
            <div class="form-group" id="jogaFieldGroupDiv">
            <label for="uzivatel">Pokud ano, uveďte prosím jméno lektora:</label>
            <input type="text" class="form-control form-control-sm" name="lektor" maxlength="50" value = "<?echo $lektor;?>" placeholder="Pokud nechcete uvést jméno lektora napište důvěrné">
        </div> 
    </div>
    <script src="./js/joga.js"></script>
    </div>
    </form>
  <br>
  <button type="submit" class="btn btn-success btn-sm"  onclick="loadJogaUpdate()">&nbsp;&nbsp;Uložit záznam o józe&nbsp;&nbsp;</button>  
</div> 