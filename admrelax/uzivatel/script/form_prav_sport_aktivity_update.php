<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");

require "sifrovani_dat.php";
$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));
$posilovani_form = addslashes(htmlspecialchars(trim("$_POST[posilovani]")));
$pravidelnost_posilovani_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_posilovani]")));
$florbal_form = addslashes(htmlspecialchars(trim("$_POST[florbal]")));
$pravidelnost_florbal_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_florbal]")));
$bojove_sporty_form = addslashes(htmlspecialchars(trim("$_POST[bojove_sporty]")));
$pravidelnost_bojove_sporty_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_bojove_sporty]")));
$hokej_form = addslashes(htmlspecialchars(trim("$_POST[hokej]")));
$pravidelnost_hokej_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_hokej]")));
$fotbal_form = addslashes(htmlspecialchars(trim("$_POST[fotbal]")));
$pravidelnost_fotbal_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_fotbal]")));
$volejbal_form = addslashes(htmlspecialchars(trim("$_POST[volejbal]")));
$pravidelnost_volejbal_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_volejbal]")));
$aerobic_form = addslashes(htmlspecialchars(trim("$_POST[aerobic]")));
$pravidelnost_aerobic_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_aerobic]")));
$tanec_form = addslashes(htmlspecialchars(trim("$_POST[tanec]")));
$pravidelnost_tanec_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_tanec]")));
$plavani_form = addslashes(htmlspecialchars(trim("$_POST[plavani]")));
$pravidelnost_plavani_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_plavani]")));
$brusle_inline_form = addslashes(htmlspecialchars(trim("$_POST[brusle_inline]")));
$pravidelnost_brusle_inline_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_brusle_inline]")));
$kolo_spinning_form = addslashes(htmlspecialchars(trim("$_POST[kolo_spinning]")));
$pravidelnost_kolo_spinning_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_kolo_spinning]")));
$beh_form = addslashes(htmlspecialchars(trim("$_POST[beh]")));
$pravidelnost_beh_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_beh]")));
$pesi_turistika_form = addslashes(htmlspecialchars(trim("$_POST[pesi_turistika]")));
$pravidelnost_pesi_turistika_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_pesi_turistika]")));
$cchi_kung_form = addslashes(htmlspecialchars(trim("$_POST[cchi_kung]")));
$pravidelnost_cchi_kung_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_cchi_kung]")));
$joga_form = addslashes(htmlspecialchars(trim("$_POST[joga]")));
$pravidelnost_joga_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_joga]")));
$kondicni_treninky_form = addslashes(htmlspecialchars(trim("$_POST[kondicni_treninky]")));
$pravidelnost_kondicni_treninky_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_kondicni_treninky]")));
$tenis_squash_badminton_form = addslashes(htmlspecialchars(trim("$_POST[tenis_squash_badminton]")));
$pravidelnost_tenis_squash_badminton_form = addslashes(htmlspecialchars(trim("$_POST[pravidelnost_tenis_squash_badminton]")));

if ($posilovani_form == 0){
    $pravidelnost_posilovani_form = 0;
}

if ($florbal_form == 0){
    $pravidelnost_florbal_form = 0;
}

if ($bojove_sporty_form == 0){
    $pravidelnost_bojove_sporty_form = 0;
}

if ($hokej_form == 0){
    $pravidelnost_hokej_form = 0;
}

if ($fotbal_form == 0){
    $pravidelnost_fotbal_form = 0;
}

if ($volejbal_form == 0){
    $pravidelnost_volejbal_form = 0;
}

if ($aerobic_form == 0){
    $pravidelnost_aerobic_form = 0;
}

if ($tanec_form == 0){
    $pravidelnost_tanec_form = 0;
}


if ($plavani_form == 0){
    $pravidelnost_plavani_form = 0;
}

if ($brusle_inline_form == 0){
    $pravidelnost_brusle_inline_form = 0;
}

if ($kolo_spinning_form == 0){
    $pravidelnost_kolo_spinning_form = 0;
}

if ($beh_form == 0){
    $pravidelnost_beh_form = 0;
}

if ($pesi_turistika_form == 0){
    $pravidelnost_pesi_turistika_form = 0;
}

if ($cchi_kung_form == 0){
    $pravidelnost_cchi_kung_form = 0;
}


if ($joga_form == 0){
    $pravidelnost_joga_form = 0;
}

if ($kondicni_treninky_form == 0){
    $pravidelnost_kondicni_treninky_form = 0;
}

if ($tenis_squash_badminton_form == 0){
    $pravidelnost_tenis_squash_badminton_form = 0;
}


require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "UPDATE sport_pravidelne SET
posilovani = '$posilovani_form',
pravidelnost_posilovani = '$pravidelnost_posilovani_form',
florbal = '$florbal_form',
pravidelnost_florbal = '$pravidelnost_florbal_form',
bojove_sporty = '$bojove_sporty_form',
pravidelnost_bojove_sporty = '$pravidelnost_bojove_sporty_form',
hokej = '$hokej_form',
pravidelnost_hokej = '$pravidelnost_hokej_form',
fotbal = '$fotbal_form',
pravidelnost_fotbal = '$pravidelnost_fotbal_form',
volejbal = '$volejbal_form',
pravidelnost_volejbal = '$pravidelnost_volejbal_form',
aerobic = '$aerobic_form',
pravidelnost_aerobic = '$pravidelnost_aerobic_form',
tanec = '$tanec_form',
pravidelnost_tanec = '$pravidelnost_tanec_form',
plavani = '$plavani_form',
pravidelnost_plavani = '$pravidelnost_plavani_form',
brusle_inline = '$brusle_inline_form',
pravidelnost_brusle_inline = '$pravidelnost_brusle_inline_form',
kolo_spinning = '$kolo_spinning_form',
pravidelnost_kolo_spinning = '$pravidelnost_kolo_spinning_form',
beh = '$beh_form',
pravidelnost_beh = '$pravidelnost_beh_form',
pesi_turistika = '$pesi_turistika_form',
pravidelnost_pesi_turistika = '$pravidelnost_pesi_turistika_form',
cchi_kung = '$cchi_kung_form',
pravidelnost_cchi_kung = '$pravidelnost_cchi_kung_form',
joga = '$joga_form',
pravidelnost_joga = '$pravidelnost_joga_form',
kondicni_treninky = '$kondicni_treninky_form',
pravidelnost_kondicni_treninky = '$pravidelnost_kondicni_treninky_form',
tenis_squash_badminton = '$tenis_squash_badminton_form',
pravidelnost_tenis_squash_badminton = '$pravidelnost_tenis_squash_badminton_form',
datum =  NOW()
    WHERE uzivatel_id = '$uzivatel_id'
    ";
if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close(); 


//echo '<br>uzivatel ID:'.$uzivatel_id.'<br>';
//echo 'posilovani: '.$posilovani_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_posilovani_form.'<br>';
//echo 'florbal: '.$florbal_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_florbal_form.'<br>';
//echo 'bojove sporty: '.$bojove_sporty_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_bojove_sporty_form.'<br>';
//echo 'hokej: '.$hokej_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_hokej_form.'<br>';
//echo 'fotbal: '.$fotbal_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_fotbal_form.'<br>';
//echo 'volejbal: '.$volejbal_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_volejbal_form.'<br>';
//echo 'aerobic: '.$aerobic_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_aerobic_form.'<br>';
//echo 'tanec: '.$tanec_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_tanec_form.'<br>';
//echo 'plavani: '.$plavani_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_plavani_form.'<br>';
//echo 'brusle_inline: '.$brusle_inline_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_brusle_inline_form.'<br>';
//echo 'kolo_spinning: '.$kolo_spinning_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_kolo_spinning_form.'<br>';
//echo 'beh: '.$beh_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_beh_form.'<br>';
//echo 'pesi_turistika: '.$pesi_turistika_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_pesi_turistika_form.'<br>';
//echo 'cchi_kung: '.$cchi_kung_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_cchi_kung_form.'<br>';
//echo 'joga: '.$joga_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_joga_form.'<br>';
//echo 'kondicni_treninky: '.$kondicni_treninky_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_kondicni_treninky_form.'<br>';
//echo 'tenis_squash_badminton: '.$tenis_squash_badminton_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_tenis_squash_badminton_form.'<br>';

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_sport_01 = "SELECT * FROM sport_pravidelne WHERE uzivatel_id = $uzivatel_id LIMIT 1";
$result_sport_01 = $conn->query($sql_sport_01);
while($radek = $result_sport_01->fetch_assoc()) {
$posilovani_01 = $radek["posilovani"];
$pravidelnost_posilovani_01 = $radek["pravidelnost_posilovani"];
$florbal_01 = $radek["florbal"];
$pravidelnost_florbal_01 = $radek["pravidelnost_florbal"];
$bojove_sporty_01 = $radek["bojove_sporty"];
$pravidelnost_bojove_sporty_01 = $radek["pravidelnost_bojove_sporty"];
$hokej_01 = $radek["hokej"];
$pravidelnost_hokej_01 = $radek["pravidelnost_hokej"];
$fotbal_01 = $radek["fotbal"];
$pravidelnost_fotbal_01 = $radek["pravidelnost_fotbal"];
$volejbal_01 = $radek["volejbal"];
$pravidelnost_volejbal_01 = $radek["pravidelnost_volejbal"];
$aerobic_01 = $radek["aerobic"];
$pravidelnost_aerobic_01 = $radek["pravidelnost_aerobic"];
$tanec_01 = $radek["tanec"];
$pravidelnost_tanec_01 = $radek["pravidelnost_tanec"];
$plavani_01 = $radek["plavani"];
$pravidelnost_plavani_01 = $radek["pravidelnost_plavani"];
$brusle_inline_01 = $radek["brusle_inline"];
$pravidelnost_brusle_inline_01 = $radek["pravidelnost_brusle_inline"];
$kolo_spinning_01 = $radek["kolo_spinning"];
$pravidelnost_kolo_spinning_01 = $radek["pravidelnost_kolo_spinning"];
$beh_01 = $radek["beh"];
$pravidelnost_beh_01 = $radek["pravidelnost_beh"];
$pesi_turistika_01 = $radek["pesi_turistika"];
$pravidelnost_pesi_turistika_01 = $radek["pravidelnost_pesi_turistika"];
$taj_ci_01 = $radek["taj_ci"];
$pravidelnost_taj_ci_01 = $radek["pravidelnost_taj_ci"];
$cchi_kung_01 = $radek["cchi_kung"];
$pravidelnost_cchi_kung_01 = $radek["pravidelnost_cchi_kung"];
$joga_01 = $radek["joga"];
$pravidelnost_joga_01 = $radek["pravidelnost_joga"];
$kondicni_treninky_01 = $radek["kondicni_treninky"];
$pravidelnost_kondicni_treninky_01 = $radek["pravidelnost_kondicni_treninky"];
$tenis_squash_badminton_01 = $radek["tenis_squash_badminton"];
$pravidelnost_tenis_squash_badminton_01 = $radek["pravidelnost_tenis_squash_badminton"];
}
$conn->close();

//require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
//require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
?>

<form id="SportPravidelnetUpdate" name="SportPravidelnetUpdate" method="post">
    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

        <div class="checkbox">
        <? if ($posilovani_01 == 1){ ?>
        <label><input type="checkbox" name="posilovani" value="1" checked  id="My_posilovani" onclick="myFunction_posilovani()">Fitness - silový trénink</label>
        <? }else{ ?>
        <label><input type="checkbox" name="posilovani" value="1"  id="My_posilovani" onclick="myFunction_posilovani()">Fitness - silový trénink</label>
        <?    }  ?>
        </div>
        </div> 
            <? if ($pravidelnost_posilovani_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
            <div class="col-sm-4" id="text_posilovani" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_posilovani" name="pravidelnost_posilovani"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_posilovani_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
    </div> 
    </div>
    <? $conn->close();?>


    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($florbal_01 == 1){ ?>
        <label><input type="checkbox" name="florbal" value="1" checked  id="My_florbal" onclick="myFunction_florbal()">Florbal</label>
        <? }else{ ?>
        <label><input type="checkbox" name="florbal" value="1"  id="My_florbal" onclick="myFunction_florbal()">Florbal</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_florbal_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_florbal" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_florbal" name="pravidelnost_florbal"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_florbal_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>


    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

        <div class="checkbox">
        <? if ($bojove_sporty_01 == 1){ ?>
        <label><input type="checkbox" name="bojove_sporty" value="1" checked  id="My_bojove_sporty" onclick="myFunction_bojove_sporty()">Bojové sporty</label>
        <? }else{ ?>
        <label><input type="checkbox" name="bojove_sporty" value="1"  id="My_bojove_sporty" onclick="myFunction_bojove_sporty()">Bojové sporty</label>
        <?    }  ?>
        </div>
        </div> 
            <? if ($pravidelnost_bojove_sporty_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_bojove_sporty" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_bojove_sporty" name="pravidelnost_bojove_sporty"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_bojove_sporty_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($hokej_01 == 1){ ?>
        <label><input type="checkbox" name="hokej" value="1" checked  id="My_hokej" onclick="myFunction_hokej()">Hokej</label>
        <? }else{ ?>
        <label><input type="checkbox" name="hokej" value="1"  id="My_hokej" onclick="myFunction_hokej()">Hokej</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_hokej_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_hokej" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_hokej" name="pravidelnost_hokej"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_hokej_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($fotbal_01 == 1){ ?>
        <label><input type="checkbox" name="fotbal" value="1" checked  id="My_fotbal" onclick="myFunction_hokej()">Fotbal</label>
        <? }else{ ?>
        <label><input type="checkbox" name="fotbal" value="1"  id="My_fotbal" onclick="myFunction_fotbal()">Fotbal</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_fotbal_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_fotbal" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_fotbal" name="pravidelnost_fotbal"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_fotbal_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($volejbal_01 == 1){ ?>
        <label><input type="checkbox" name="volejbal" value="1" checked  id="My_volejbal" onclick="myFunction_volejbal()">Volejbal</label>
        <? }else{ ?>
        <label><input type="checkbox" name="volejbal" value="1"  id="My_volejbal" onclick="myFunction_volejbal()">Volejbal</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_volejbal_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_volejbal" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_volejbal" name="pravidelnost_volejbal"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_volejbal_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>


    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($aerobic_01 == 1){ ?>
        <label><input type="checkbox" name="aerobic" value="1" checked  id="My_aerobic" onclick="myFunction_aerobic()">Aerobik</label>
        <? }else{ ?>
        <label><input type="checkbox" name="aerobic" value="1"  id="My_aerobic" onclick="myFunction_aerobic()">Aerobik</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_aerobic_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_aerobic" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_aerobic" name="pravidelnost_aerobic"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_aerobic_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($tanec_01 == 1){ ?>
        <label><input type="checkbox" name="tanec" value="1" checked  id="My_tanec" onclick="myFunction_tanec()">Tanec</label>
        <? }else{ ?>
        <label><input type="checkbox" name="tanec" value="1"  id="My_tanec" onclick="myFunction_tanec()">Tanec</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_tanec_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_tanec" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_tanec" name="pravidelnost_tanec"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_tanec_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($plavani_01 == 1){ ?>
        <label><input type="checkbox" name="plavani" value="1" checked  id="My_plavani" onclick="myFunction_plavani()">Plavání</label>
        <? }else{ ?>
        <label><input type="checkbox" name="plavani" value="1"  id="My_plavani" onclick="myFunction_plavani()">Plavání</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_plavani_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_plavani" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_plavani" name="pravidelnost_plavani"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_plavani_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($brusle_inline_01 == 1){ ?>
        <label><input type="checkbox" name="brusle_inline" value="1" checked  id="My_brusle_inline" onclick="myFunction_brusle_inline()">Brusle in-line</label>
        <? }else{ ?>
        <label><input type="checkbox" name="brusle_inline" value="1"  id="My_brusle_inline" onclick="myFunction_brusle_inline()">Brusle in-line</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_brusle_inline_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_brusle_inline" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_brusle_inline" name="pravidelnost_brusle_inline"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_brusle_inline_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($kolo_spinning_01 == 1){ ?>
        <label><input type="checkbox" name="kolo_spinning" value="1" checked  id="My_kolo_spinning" onclick="myFunction_kolo_spinning()">Kolo/Spinning</label>
        <? }else{ ?>
        <label><input type="checkbox" name="kolo_spinning" value="1"  id="My_kolo_spinning" onclick="myFunction_kolo_spinning()">Kolo/Spinning</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_kolo_spinning_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_kolo_spinning" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_kolo_spinning" name="pravidelnost_kolo_spinning"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_kolo_spinning_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($beh_01 == 1){ ?>
        <label><input type="checkbox" name="beh" value="1" checked  id="My_beh" onclick="myFunction_beh()">Běh</label>
        <? }else{ ?>
        <label><input type="checkbox" name="beh" value="1"  id="My_beh" onclick="myFunction_beh()">Běh</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_beh_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_beh" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_beh" name="pravidelnost_beh"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_beh_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($pesi_turistika_01 == 1){ ?>
        <label><input type="checkbox" name="pesi_turistika" value="1" checked  id="My_pesi_turistika" onclick="myFunction_pesi_turistika()">Pěší turistika/chůze</label>
        <? }else{ ?>
        <label><input type="checkbox" name="pesi_turistika" value="1"  id="My_pesi_turistika" onclick="myFunction_pesi_turistika()">Pěší turistika/chůze</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_pesi_turistika_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_pesi_turistika" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_pesi_turistika" name="pravidelnost_pesi_turistika"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_pesi_turistika_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($cchi_kung_01 == 1){ ?>
        <label><input type="checkbox" name="cchi_kung" value="1" checked  id="My_cchi_kung" onclick="myFunction_cchi_kung()">Čchi-kung</label>
        <? }else{ ?>
        <label><input type="checkbox" name="cchi_kung" value="1"  id="My_cchi_kung" onclick="myFunction_cchi_kung()">Čchi-kung</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_cchi_kung_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_cchi_kung" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_cchi_kung" name="pravidelnost_cchi_kung"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_cchi_kung_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($joga_01 == 1){ ?>
        <label><input type="checkbox" name="joga" value="1" checked  id="My_joga" onclick="myFunction_joga()">Jóga/Rehabilitační cvičení /Fyzio</label>
        <? }else{ ?>
        <label><input type="checkbox" name="joga" value="1"  id="My_joga" onclick="myFunction_joga()">Jóga/Rehabilitační cvičení /Fyzio</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_joga_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_joga" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_joga" name="pravidelnost_joga"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_joga_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>

    <div class="row" style="background-color:#e3fad6;">
    <div class="col-sm-3">

     <div class="checkbox">
        <? if ($kondicni_treninky_01 == 1){ ?>
        <label><input type="checkbox" name="kondicni_treninky" value="1" checked  id="My_kondicni_treninky" onclick="myFunction_kondicni_treninky()">Fitness - kondiční trénink</label>
        <? }else{ ?>
        <label><input type="checkbox" name="kondicni_treninky" value="1"  id="My_kondicni_treninky" onclick="myFunction_kondicni_treninky()">Fitness - kondiční trénink</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_kondicni_treninky_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_kondicni_treninky" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_kondicni_treninky" name="pravidelnost_kondicni_treninky"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_kondicni_treninky_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>


    <div class="row" style="background-color:#e3fad6;">
        <div class="col-sm-3">

     <div class="checkbox">
        <? if ($tenis_squash_badminton_01 == 1){ ?>
        <label><input type="checkbox" name="tenis_squash_badminton" value="1" checked  id="My_tenis_squash_badminton" onclick="myFunction_tenis_squash_badminton()">Tenis/Squash/Badminton</label>
        <? }else{ ?>
        <label><input type="checkbox" name="tenis_squash_badminton" value="1"  id="My_tenis_squash_badminton" onclick="myFunction_tenis_squash_badminton()">Tenis/Squash/Badminton</label>
        <?    }  ?>
        </div>
     </div> 
            <? if ($pravidelnost_tenis_squash_badminton_01 == 0){
            $blok = 'none';
            }else{
            $blok = 'block';
            } ?>
        <div class="col-sm-4" id="text_tenis_squash_badminton" style="display:<? echo $blok;?>">
            <select class="form-control" id="pravidelnost_tenis_squash_badminton" name="pravidelnost_tenis_squash_badminton"> 
                <option value="0"> -- Vyberte pravidelnost --</option>
                <? require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                $sql03 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
                $result03 = $conn->query($sql03);
                while($row03 = $result03->fetch_assoc()) {
                if ($pravidelnost_tenis_squash_badminton_01 == $row03["seznam_id"]) { 
                echo '<option value = "' .$row03["seznam_id"]. ' " selected>' . $row03["seznam_hodnota"]."</option>\n";
                }else{
                echo '<option value = "' .$row03["seznam_id"]. '">' . $row03["seznam_hodnota"]. "</option>\n";   
                } 
              }
              ?>
           </select>
        </div> 
    </div>
    <? $conn->close();?>
    </form>
  <br>
  <button type="submit" class="btn btn-success btn-sm"  onclick="loadSportPravidelneUpdate()">&nbsp;&nbsp;Uložit pravidelné sportovní a pohybové aktivity&nbsp;&nbsp;</button>  















    <? 
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "SELECT * FROM seznam WHERE seznam_cislo = '44' ORDER BY seznam_poradi ASC"; 
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {  
    
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql01 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
    $result01 = $conn->query($sql01);
    while($row01 = $result01->fetch_assoc()) {
       }
    ?>


<script>
function myFunction_<?echo $row["seznam_name"];?>() {
  var checkBox = document.getElementById("My_<?echo $row["seznam_name"];?>");
  var text = document.getElementById("text_<?echo $row["seznam_name"];?>");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>


    <? }
    $conn->close(); ?>   
    
</div>    

