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




echo '<br>uzivatel ID:'.$uzivatel_id.'<br>';
echo 'posilovani: '.$posilovani_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_posilovani_form.'<br>';
echo 'florbal: '.$florbal_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_florbal_form.'<br>';
echo 'bojove sporty: '.$bojove_sporty_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_bojove_sporty_form.'<br>';
echo 'hokej: '.$hokej_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_hokej_form.'<br>';
echo 'fotbal: '.$fotbal_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_fotbal_form.'<br>';
echo 'volejbal: '.$volejbal_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_volejbal_form.'<br>';
echo 'aerobic: '.$aerobic_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_aerobic_form.'<br>';
echo 'tanec: '.$tanec_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_tanec_form.'<br>';
echo 'plavani: '.$plavani_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_plavani_form.'<br>';
echo 'brusle_inline: '.$brusle_inline_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_brusle_inline_form.'<br>';
echo 'kolo_spinning: '.$kolo_spinning_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_kolo_spinning_form.'<br>';
echo 'beh: '.$beh_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_beh_form.'<br>';
echo 'pesi_turistika: '.$pesi_turistika_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_pesi_turistika_form.'<br>';
echo 'cchi_kung: '.$cchi_kung_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_cchi_kung_form.'<br>';
echo 'joga: '.$joga_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_joga_form.'<br>';
echo 'kondicni_treninky: '.$kondicni_treninky_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_kondicni_treninky_form.'<br>';
echo 'tenis_squash_badminton: '.$tenis_squash_badminton_form.'&nbsp;&nbsp;&nbsp;Pravidelnost: '.$pravidelnost_tenis_squash_badminton_form.'<br>';












?>