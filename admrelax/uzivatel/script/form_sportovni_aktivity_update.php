<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");
$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));
$bezky_form = addslashes(htmlspecialchars(trim("$_POST[bezky]")));
$brusle_zimni_form = addslashes(htmlspecialchars(trim("$_POST[brusle_zimni]")));
$prace_na_zahrade_form = addslashes(htmlspecialchars(trim("$_POST[prace_na_zahrade]")));
$sjezd_lyze_form = addslashes(htmlspecialchars(trim("$_POST[sjezd_lyze]")));
$skialpinismus_form = addslashes(htmlspecialchars(trim("$_POST[skialpinismus]")));

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "UPDATE sport_nepravidelne SET
bezky = '$bezky_form',
brusle_zimni = '$brusle_zimni_form',
prace_na_zahrade = '$prace_na_zahrade_form',
sjezd_lyze = '$sjezd_lyze_form',
skialpinismus = '$skialpinismus_form',
datum =  NOW()
    WHERE uzivatel_id = '$uzivatel_id'
    ";
if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close(); 

    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql_sport_pravidelne = "SELECT * FROM sport_nepravidelne WHERE uzivatel_id = $uzivatel_id LIMIT 1";
    $result_sport_pravidelne = $conn->query($sql_sport_pravidelne);
    while($radek = $result_sport_pravidelne->fetch_assoc()) {
    $bezky = $radek["bezky"];
    $brusle_zimni = $radek["brusle_zimni"];
    $prace_na_zahrade = $radek["prace_na_zahrade"];
    $sjezd_lyze = $radek["sjezd_lyze"];
    $skialpinismus = $radek["skialpinismus"];
    }
    $conn->close();


?>
<div id="SportovniAktivity">
<form id="SportovniAktivity" name="SportovniAktivity" method="post">
    <div class="row">
    <div class="col-sm-12" style="background-color:#f6e9cd;">
    <label for="uzivatel">Sportovní a pohybové aktivity:</label>
    <div class="checkbox">
    <? if ($bezky == 0) { ?>
    <label><input type="checkbox" name="bezky">Běžky</label>
    <? }else { ?>
    <label><input type="checkbox" name="bezky" checked>Běžky</label>
    <?  } ?>
    </div>
    <div class="checkbox">
    <? if ($brusle_zimni == 0) { ?>
    <label><input type="checkbox" name="brusle_zimni">Brusle zimní</label>
    <? }else { ?>
    <label><input type="checkbox" name="brusle_zimni" checked>Brusle zimní</label>
    <?  } ?>
    </div>
    <div class="checkbox">
    <? if ($prace_na_zahrade == 0) { ?>
    <label><input type="checkbox" name="prace_na_zahrade">Práce na zahradě</label>
    <? }else { ?>
    <label><input type="checkbox" name="prace_na_zahrade" checked>Práce na zahradě</label>
    <?  } ?>
    </div>
    <div class="checkbox">
    <? if ($sjezd_lyze == 0) { ?>
    <label><input type="checkbox" name="sjezd_lyze">Sjezd lyže</label>
    <? }else { ?>
    <label><input type="checkbox" name="sjezd_lyze" checked>Sjezd lyže</label>
    <?  } ?>
    </div>
    <div class="checkbox">
    <? if ($skialpinismus == 0) { ?>
    <label><input type="checkbox" name="skialpinismus" >Skialpinismus</label>
    <? }else { ?>
    <label><input type="checkbox" name="skialpinismus" checked>Skialpinismus</label>
    <?  } ?>
    </div>
    </div>
    </div>
    </form>
    <br>
    <button type="submit" class="btn btn-success btn-sm"  onclick="loadSportoviAktivityUpdate()">&nbsp;&nbsp;Uložit Sportovní a pohybové aktivity&nbsp;&nbsp;</button>
    <br>
</div>

