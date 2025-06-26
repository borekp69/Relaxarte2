<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");

$prihlaseny_uzivatel_form = addslashes(htmlspecialchars(trim("$_POST[prihlaseny_uzivatel]")));

$v_jakych_rodinnych_pomerech_zijete_form = addslashes(htmlspecialchars(trim("$_POST[v_jakych_rodinnych_pomerech_zijete]")));
$reakce_na_pocasi_form = addslashes(htmlspecialchars(trim("$_POST[reakce_na_pocasi]")));
$reakce_na_mesicni_cyklus_form = addslashes(htmlspecialchars(trim("$_POST[reakce_na_mesicni_cyklus]")));
$reakce_na_mesicni_cyklus_text_form = addslashes(htmlspecialchars(trim("$_POST[reakce_na_mesicni_cyklus_text]")));
$casta_zizen_form = addslashes(htmlspecialchars(trim("$_POST[casta_zizen]")));
$preference_napoju_form = addslashes(htmlspecialchars(trim("$_POST[preference_napoju]")));
$druh_napoju_form = addslashes(htmlspecialchars(trim("$_POST[druh_napoju]")));


echo 'v_jakych_rodinnych_pomerech_zijete_form: '.$v_jakych_rodinnych_pomerech_zijete_form.'<br>';
echo 'reakce_na_pocasi_form: '.$reakce_na_pocasi_form.'<br>';
echo 'reakce_na_mesicni_cyklus_form: '.$reakce_na_mesicni_cyklus_form.'<br>';
echo 'reakce_na_mesicni_cyklus_text_form: '.$reakce_na_mesicni_cyklus_text_form.'<br>';
echo 'casta_zizen_form: '.$casta_zizen_form.'<br>';
echo 'preference_napoju_form: '.$preference_napoju_form.'<br>';
echo 'druh_napoju_form: '.$druh_napoju_form.'<br>';