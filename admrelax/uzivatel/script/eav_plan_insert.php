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
$chut_k_jidlu_form = addslashes(htmlspecialchars(trim("$_POST[chut_k_jidlu]")));
$hlad_v_koli_hodin_form = addslashes(htmlspecialchars(trim("$_POST[hlad_v_koli_hodin]")));
$oblibene_jidlo_form = addslashes(htmlspecialchars(trim("$_POST[oblibene_jidlo]")));
$neoblibene_jidlo_form = addslashes(htmlspecialchars(trim("$_POST[neoblibene_jidlo]")));
$sladke_form = addslashes(htmlspecialchars(trim("$_POST[sladke]")));
$soleni_form = addslashes(htmlspecialchars(trim("$_POST[soleni]")));
$koreneni_form = addslashes(htmlspecialchars(trim("$_POST[koreneni]")));
$problemy_po_oblibenem_jidle_form = addslashes(htmlspecialchars(trim("$_POST[problemy_po_oblibenem_jidle]")));
$problemy_po_oblibenem_jidle_text_form = addslashes(htmlspecialchars(trim("$_POST[problemy_po_oblibenem_jidle_text]")));
$problemy_po_jidle_obecne_form = addslashes(htmlspecialchars(trim("$_POST[problemy_po_jidle_obecne]")));


$problemy_po_jidle_obecne_text_form = addslashes(htmlspecialchars(trim("$_POST[problemy_po_jidle_obecne_text]")));
$spanek_form = addslashes(htmlspecialchars(trim("$_POST[spanek]")));
$poloha_ve_spanku_form = addslashes(htmlspecialchars(trim("$_POST[poloha_ve_spanku]")));
$v_jakou_hodinu_nemuzete_spat_form = addslashes(htmlspecialchars(trim("$_POST[v_jakou_hodinu_nemuzete_spat]")));



echo 'v_jakych_rodinnych_pomerech_zijete_form: '.$v_jakych_rodinnych_pomerech_zijete_form.'<br>';
echo 'reakce_na_pocasi_form: '.$reakce_na_pocasi_form.'<br>';
echo 'reakce_na_mesicni_cyklus_form: '.$reakce_na_mesicni_cyklus_form.'<br>';
echo 'reakce_na_mesicni_cyklus_text_form: '.$reakce_na_mesicni_cyklus_text_form.'<br>';
echo 'casta_zizen_form: '.$casta_zizen_form.'<br>';
echo 'preference_napoju_form: '.$preference_napoju_form.'<br>';
echo 'druh_napoju_form: '.$druh_napoju_form.'<br>';
echo 'chut_k_jidlu_form: '.$chut_k_jidlu_form.'<br>';
echo 'hlad_v_koli_hodin_form: '.$hlad_v_koli_hodin_form.'<br>';
echo 'oblibene_jidlo_form: '.$oblibene_jidlo_form.'<br>';
echo 'neoblibene_jidlo_form: '.$neoblibene_jidlo_form.'<br>';
echo 'sladke_form: '.$sladke_form.'<br>';
echo 'soleni_form: '.$soleni_form.'<br>';
echo 'koreneni_form: '.$koreneni_form.'<br>';
echo 'problemy_po_oblibenem_jidle_form: '.$problemy_po_oblibenem_jidle_form.'<br>';
echo 'problemy_po_oblibenem_jidle_text_form: '.$problemy_po_oblibenem_jidle_text_form.'<br>';
echo 'problemy_po_jidle_obecne_form: '.$problemy_po_jidle_obecne_form.'<br>';
echo 'problemy_po_jidle_obecne_text_form: '.$problemy_po_jidle_obecne_text_form.'<br>';
echo 'spanek_form: '.$spanek_form.'<br>';
echo 'poloha_ve_spanku_form: '.$poloha_ve_spanku_form.'<br>';
echo 'v_jakou_hodinu_nemuzete_spat_form: '.$v_jakou_hodinu_nemuzete_spat_form.'<br>';
