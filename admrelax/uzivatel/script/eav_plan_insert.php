<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");

$prihlaseny_uzivatel_form = addslashes(htmlspecialchars(trim("$_POST[prihlaseny_uzivatel]")));

$v_jakych_rodinnych_pomerech_zijete_form = addslashes(htmlspecialchars(trim("$_POST[v_jakych_rodinnych_pomerech_zijete]")));
$reakce_na_pocasi_form = addslashes(htmlspecialchars(trim("$_POST[reakce_na_pocasi]")));



echo 'v_jakych_rodinnych_pomerech_zijete_form: '.$v_jakych_rodinnych_pomerech_zijete_form.'<br>';
echo 'reakce_na_pocasi_form: '.$reakce_na_pocasi_form.'<br>';