<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");



$uzivatel_id_form = addslashes(htmlspecialchars(trim("$_POST[uzivatel_id]"))); 

$uzivatel_id = $uzivatel_id_form;

$prihlaseny_uzivatel_form = addslashes(htmlspecialchars(trim("$_POST[prihlaseny_uzivatel]")));


$celkova_hodnota_form = addslashes(htmlspecialchars(trim("$_POST[celkova_hodnota]")));
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
$poznamka_text_form = addslashes(htmlspecialchars(trim("$_POST[poznamka_text]")));
$vraceji_se_nektere_sny_form = addslashes(htmlspecialchars(trim("$_POST[vraceji_se_nektere_sny]")));
$popis_snu_form = addslashes(htmlspecialchars(trim("$_POST[popis_snu]")));
$strachy_v_zivote_form = addslashes(htmlspecialchars(trim("$_POST[strachy_v_zivote]")));


$popis_strachu_form = addslashes(htmlspecialchars(trim("$_POST[popis_strachu]")));

$bourka_form = addslashes(htmlspecialchars(trim("$_POST[bourka]")));
if (!$bourka_form){$bourka_form = 0;}

$vyska_form = addslashes(htmlspecialchars(trim("$_POST[vyska]")));
if (!$vyska_form){$vyska_form = 0;}

$zkouska_form = addslashes(htmlspecialchars(trim("$_POST[zkouska]")));
if (!$zkouska_form){$zkouska_form = 0;}

$voda_form = addslashes(htmlspecialchars(trim("$_POST[voda]")));
if (!$voda_form){$voda_form = 0;}

$nemoc_form = addslashes(htmlspecialchars(trim("$_POST[nemoc]")));
if (!$nemoc_form){$nemoc_form = 0;}

$zvire_form = addslashes(htmlspecialchars(trim("$_POST[zvire]")));
if (!$zvire_form){$zvire_form = 0;}

$cestovani_form = addslashes(htmlspecialchars(trim("$_POST[cestovani]")));
if (!$cestovani_form){$cestovani_form = 0;}

$dopravni_prostredek_form = addslashes(htmlspecialchars(trim("$_POST[dopravni_prostredek]")));
if (!$dopravni_prostredek_form){$dopravni_prostredek_form = 0;}

$zlodej_form = addslashes(htmlspecialchars(trim("$_POST[zlodej]")));
if (!$zlodej_form){$zlodej_form = 0;}

$smrt_form = addslashes(htmlspecialchars(trim("$_POST[smrt]")));
if (!$smrt_form){$smrt_form = 0;}

$jine_form = addslashes(htmlspecialchars(trim("$_POST[jine]")));
if (!$jine_form){
    $jine_form = 0;
    $popis_strachu_form = '';    
}

$lymmfa_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[lymmfa_p_aktualni]")));
$lymmfa_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[lymmfa_p_ocekavana]")));
$lymmfa_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[lymmfa_l_aktualni]")));
$lymmfa_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[lymmfa_l_ocekavana]")));

$plice_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[plice_p_aktualni]")));
$plice_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[plice_p_ocekavana]")));
$plice_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[plice_l_aktualni]")));
$plice_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[plice_l_ocekavana]")));

$tluste_strevo_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[tluste_strevo_p_aktualni]")));
$tluste_strevo_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[tluste_strevo_p_ocekavana]")));
$tluste_strevo_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[tluste_strevo_l_aktualni]")));
$tluste_strevo_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[tluste_strevo_l_ocekavana]")));

$nervova_degenerace_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[nervova_degenerace_p_aktualni]")));
$nervova_degenerace_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[nervova_degenerace_p_ocekavana]")));
$nervova_degenerace_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[nervova_degenerace_l_aktualni]")));
$nervova_degenerace_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[nervova_degenerace_l_ocekavana]")));

$obal_srdce_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[obal_srdce_p_aktualni]")));
$obal_srdce_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[obal_srdce_p_ocekavana]")));
$obal_srdce_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[obal_srdce_l_aktualni]")));
$obal_srdce_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[obal_srdce_l_ocekavana]")));

$alergie_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[alergie_p_aktualni]")));
$alergie_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[alergie_p_ocekavana]")));
$alergie_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[alergie_l_aktualni]")));
$alergie_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[alergie_l_ocekavana]")));

$organova_degenerace_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[organova_degenerace_p_aktualni]")));
$organova_degenerace_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[organova_degenerace_p_ocekavana]")));
$organova_degenerace_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[organova_degenerace_l_aktualni]")));
$organova_degenerace_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[organova_degenerace_l_ocekavana]")));

$tri_ohrivace_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[tri_ohrivace_p_aktualni]")));
$tri_ohrivace_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[tri_ohrivace_p_ocekavana]")));
$tri_ohrivace_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[tri_ohrivace_l_aktualni]")));
$tri_ohrivace_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[tri_ohrivace_l_ocekavana]")));

$srdce_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[srdce_p_aktualni]")));
$srdce_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[srdce_p_ocekavana]")));
$srdce_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[srdce_l_aktualni]")));
$srdce_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[srdce_l_ocekavana]")));

$tenke_strevo_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[tenke_strevo_p_aktualni]")));
$tenke_strevo_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[tenke_strevo_p_ocekavana]")));
$tenke_strevo_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[tenke_strevo_l_aktualni]")));
$tenke_strevo_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[tenke_strevo_l_ocekavana]")));

$slinivka_slezina_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[slinivka_slezina_p_aktualni]")));
$slinivka_slezina_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[slinivka_slezina_p_ocekavana]")));
$slinivka_slezina_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[slinivka_slezina_l_aktualni]")));
$slinivka_slezina_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[slinivka_slezina_l_ocekavana]")));

$jatra_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[jatra_p_aktualni]")));
$jatra_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[jatra_p_ocekavana]")));
$jatra_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[jatra_l_aktualni]")));
$jatra_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[jatra_l_ocekavana]")));

$kloubni_degenerace_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[kloubni_degenerace_p_aktualni]")));
$kloubni_degenerace_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[kloubni_degenerace_p_ocekavana]")));
$kloubni_degenerace_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[kloubni_degenerace_l_aktualni]")));
$kloubni_degenerace_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[kloubni_degenerace_l_ocekavana]")));

$zaludek_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[zaludek_p_aktualni]")));
$zaludek_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[zaludek_p_ocekavana]")));
$zaludek_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[zaludek_l_aktualni]")));
$zaludek_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[zaludek_l_ocekavana]")));

$vazivova_degenerace_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[vazivova_degenerace_p_aktualni]")));
$vazivova_degenerace_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[vazivova_degenerace_p_ocekavana]")));
$vazivova_degenerace_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[vazivova_degenerace_l_aktualni]")));
$vazivova_degenerace_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[vazivova_degenerace_l_ocekavana]")));

$kuze_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[kuze_p_aktualni]")));
$kuze_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[kuze_p_ocekavana]")));
$kuze_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[kuze_l_aktualni]")));
$kuze_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[kuze_l_ocekavana]")));

$tukova_degenerace_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[tukova_degenerace_p_aktualni]")));
$tukova_degenerace_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[tukova_degenerace_p_ocekavana]")));
$tukova_degenerace_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[tukova_degenerace_l_aktualni]")));
$tukova_degenerace_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[tukova_degenerace_l_ocekavana]")));

$zlucnik_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[zlucnik_p_aktualni]")));
$zlucnik_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[zlucnik_p_ocekavana]")));
$zlucnik_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[zlucnik_l_aktualni]")));
$zlucnik_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[zlucnik_l_ocekavana]")));

$ledviny_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[ledviny_p_aktualni]")));
$ledviny_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[ledviny_p_ocekavana]")));
$ledviny_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[ledviny_l_aktualni]")));
$ledviny_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[ledviny_l_ocekavana]")));

$mocovy_mechyr_p_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[mocovy_mechyr_p_aktualni]")));
$mocovy_mechyr_p_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[mocovy_mechyr_p_ocekavana]")));
$mocovy_mechyr_l_aktualni_form = addslashes(htmlspecialchars(trim("$_POST[mocovy_mechyr_l_aktualni]")));
$mocovy_mechyr_l_ocekavana_form = addslashes(htmlspecialchars(trim("$_POST[mocovy_mechyr_l_ocekavana]")));


    // echo 'uzivatel_id_form: '.$uzivatel_id_form.'<br>';
    // echo 'prihlaseny_uzivatel: '.$prihlaseny_uzivatel_form.'<br>';

    // echo 'celkova_hodnota_form: '.$celkova_hodnota_form.'<br>';
    // echo 'v_jakych_rodinnych_pomerech_zijete_form: '.$v_jakych_rodinnych_pomerech_zijete_form.'<br>';
    // echo 'reakce_na_pocasi_form: '.$reakce_na_pocasi_form.'<br>';
    // echo 'reakce_na_mesicni_cyklus_form: '.$reakce_na_mesicni_cyklus_form.'<br>';
    // echo 'reakce_na_mesicni_cyklus_text_form: '.$reakce_na_mesicni_cyklus_text_form.'<br>';
    // echo 'casta_zizen_form: '.$casta_zizen_form.'<br>';
    // echo 'preference_napoju_form: '.$preference_napoju_form.'<br>';
    // echo 'druh_napoju_form: '.$druh_napoju_form.'<br>';
    // echo 'chut_k_jidlu_form: '.$chut_k_jidlu_form.'<br>';
    // echo 'hlad_v_koli_hodin_form: '.$hlad_v_koli_hodin_form.'<br>';
    // echo 'oblibene_jidlo_form: '.$oblibene_jidlo_form.'<br>';
    // echo 'neoblibene_jidlo_form: '.$neoblibene_jidlo_form.'<br>';
    // echo 'sladke_form: '.$sladke_form.'<br>';
    // echo 'soleni_form: '.$soleni_form.'<br>';
    // echo 'koreneni_form: '.$koreneni_form.'<br>';
    // echo 'problemy_po_oblibenem_jidle_form: '.$problemy_po_oblibenem_jidle_form.'<br>';
    // echo 'problemy_po_oblibenem_jidle_text_form: '.$problemy_po_oblibenem_jidle_text_form.'<br>';
    // echo 'problemy_po_jidle_obecne_form: '.$problemy_po_jidle_obecne_form.'<br>';
    // echo 'problemy_po_jidle_obecne_text_form: '.$problemy_po_jidle_obecne_text_form.'<br>';
    // echo 'spanek_form: '.$spanek_form.'<br>';
    // echo 'poloha_ve_spanku_form: '.$poloha_ve_spanku_form.'<br>';
    // echo 'v_jakou_hodinu_nemuzete_spat_form: '.$v_jakou_hodinu_nemuzete_spat_form.'<br>';
    // echo 'poznamka_text_form: '.$poznamka_text_form.'<br>';
    // echo 'vraceji_se_nektere_sny_form: '.$vraceji_se_nektere_sny_form.'<br>';
    // echo 'popis_snu_form: '.$popis_snu_form.'<br>';
    // echo 'strachy_v_zivote_form: '.$strachy_v_zivote_form.'<br>';

// echo 'bourka_form: '.$bourka_form.'<br>';
// echo 'vyska_form: '.$vyska_form.'<br>';
// echo 'zkouska_form: '.$zkouska_form.'<br>';
// echo 'voda_form: '.$voda_form.'<br>';
// echo 'nemoc_form: '.$nemoc_form.'<br>';
// echo 'zvire_form: '.$zvire_form.'<br>';
// echo 'cestovani_form: '.$cestovani_form.'<br>';
// echo 'dopravni_prostredek_form: '.$dopravni_prostredek_form.'<br>';
// echo 'zlodej_form: '.$zlodej_form.'<br>';
// echo 'smrt_form: '.$smrt_form.'<br>';
// echo 'jine_form: '.$jine_form.'<br>';
// echo 'jine_popis_strachu: '.$popis_strachu_form.'<br>';


// echo 'lymmfa_p_aktualni: '.$lymmfa_p_aktualni_form.'<br>';
// echo 'lymmfa_p_ocekavana: '.$lymmfa_p_ocekavana_form.'<br>';
// echo 'lymmfa_l_aktualni: '.$lymmfa_l_aktualni_form.'<br>';
// echo 'lymmfa_l_ocekavana: '.$lymmfa_l_ocekavana_form.'<br>';

// echo 'plice_p_aktualni: '.$plice_p_aktualni_form.'<br>';
// echo 'plice_p_ocekavana: '.$plice_p_ocekavana_form.'<br>';
// echo 'plice_l_aktualni: '.$plice_l_aktualni_form.'<br>';
// echo 'plice_l_ocekavana: '.$plice_l_ocekavana_form.'<br>';

// echo 'tluste_strevo_p_aktualni: '.$tluste_strevo_p_aktualni_form.'<br>';
// echo 'tluste_strevo_p_ocekavana: '.$tluste_strevo_p_ocekavana_form.'<br>';
// echo 'tluste_strevo_l_aktualni: '.$tluste_strevo_l_aktualni_form.'<br>';
// echo 'tluste_strevo_l_ocekavana: '.$tluste_strevo_l_ocekavana_form.'<br>';

// echo 'nervova_degenerace_p_aktualni: '.$nervova_degenerace_p_aktualni_form.'<br>';
// echo 'nervova_degenerace_p_ocekavana: '.$nervova_degenerace_p_ocekavana_form.'<br>';
// echo 'nervova_degenerace_l_aktualni: '.$nervova_degenerace_l_aktualni_form.'<br>';
// echo 'nervova_degenerace_l_ocekavana: '.$nervova_degenerace_l_ocekavana_form.'<br>';

// echo 'obal_srdce_p_aktualni: '.$obal_srdce_p_aktualni_form.'<br>';
// echo 'obal_srdce_p_ocekavana: '.$obal_srdce_p_ocekavana_form.'<br>';
// echo 'obal_srdce_l_aktualni: '.$obal_srdce_l_aktualni_form.'<br>';
// echo 'obal_srdce_l_ocekavana: '.$obal_srdce_l_ocekavana_form.'<br>';

// echo 'alergie_p_aktualni: '.$alergie_p_aktualni_form.'<br>';
// echo 'alergie_p_ocekavana: '.$alergie_p_ocekavana_form.'<br>';
// echo 'alergie_l_aktualni: '.$alergie_l_aktualni_form.'<br>';
// echo 'alergie_l_ocekavana: '.$alergie_l_ocekavana_form.'<br>';

// echo 'organova_degenerace_p_aktualni: '.$organova_degenerace_p_aktualni_form.'<br>';
// echo 'organova_degenerace_p_ocekavana: '.$organova_degenerace_p_ocekavana_form.'<br>';
// echo 'organova_degenerace_l_aktualni: '.$organova_degenerace_l_aktualni_form.'<br>';
// echo 'organova_degenerace_l_ocekavana: '.$organova_degenerace_l_ocekavana_form.'<br>';

// echo 'tri_ohrivace_p_aktualni: '.$tri_ohrivace_p_aktualni_form.'<br>';
// echo 'tri_ohrivace_p_ocekavana: '.$tri_ohrivace_p_ocekavana_form.'<br>';
// echo 'tri_ohrivace_l_aktualni: '.$tri_ohrivace_l_aktualni_form.'<br>';
// echo 'tri_ohrivace_l_ocekavana: '.$tri_ohrivace_l_ocekavana_form.'<br>';

// echo 'srdce_p_aktualni: '.$srdce_p_aktualni_form.'<br>';
// echo 'srdce_p_ocekavana: '.$srdce_p_ocekavana_form.'<br>';
// echo 'srdce_l_aktualni: '.$srdce_l_aktualni_form.'<br>';
// echo 'srdce_l_ocekavana: '.$srdce_l_ocekavana_form.'<br>';

// echo 'tenke_strevo_p_aktualni: '.$tenke_strevo_p_aktualni_form.'<br>';
// echo 'tenke_strevo_p_ocekavana: '.$tenke_strevo_p_ocekavana_form.'<br>';
// echo 'tenke_strevo_l_aktualni: '.$tenke_strevo_l_aktualni_form.'<br>';
// echo 'tenke_strevo_l_ocekavana: '.$tenke_strevo_l_ocekavana_form.'<br>';

// echo '<br>';
// echo 'slinivka_slezina_p_aktualni: '.$slinivka_slezina_p_aktualni_form.'<br>';
// echo 'slinivka_slezina_p_ocekavana: '.$slinivka_slezina_p_ocekavana_form.'<br>';
// echo 'slinivka_slezina_l_aktualni: '.$slinivka_slezina_l_aktualni_form.'<br>';
// echo 'slinivka_slezina_l_ocekavana: '.$slinivka_slezina_l_ocekavana_form.'<br>';

// echo 'jatra_p_aktualni: '.$jatra_p_aktualni_form.'<br>';
// echo 'jatra_p_ocekavana: '.$jatra_p_ocekavana_form.'<br>';
// echo 'jatra_l_aktualni: '.$jatra_l_aktualni_form.'<br>';
// echo 'jatra_l_ocekavana: '.$jatra_l_ocekavana_form.'<br>';

// echo 'kloubni_degenerace_p_aktualni: '.$kloubni_degenerace_p_aktualni_form.'<br>';
// echo 'kloubni_degenerace_p_ocekavana: '.$kloubni_degenerace_p_ocekavana_form.'<br>';
// echo 'kloubni_degenerace_l_aktualni: '.$kloubni_degenerace_l_aktualni_form.'<br>';
// echo 'kloubni_degenerace_l_ocekavana: '.$kloubni_degenerace_l_ocekavana_form.'<br>';

// echo 'zaludek_p_aktualni: '.$zaludek_p_aktualni_form.'<br>';
// echo 'zaludek_p_ocekavana: '.$zaludek_p_ocekavana_form.'<br>';
// echo 'zaludek_l_aktualni: '.$zaludek_l_aktualni_form.'<br>';
// echo 'zaludek_l_ocekavana: '.$zaludek_l_ocekavana_form.'<br>';

// echo 'vazivova_degenerace_p_aktualni: '.$vazivova_degenerace_p_aktualni_form.'<br>';
// echo 'vazivova_degenerace_p_ocekavana: '.$vazivova_degenerace_p_ocekavana_form.'<br>';
// echo 'vazivova_degenerace_l_aktualni: '.$vazivova_degenerace_l_aktualni_form.'<br>';
// echo 'vazivova_degenerace_l_ocekavana: '.$vazivova_degenerace_l_ocekavana_form.'<br>';

// echo 'kuze_p_aktualni: '.$kuze_p_aktualni_form.'<br>';
// echo 'kuze_p_ocekavana: '.$kuze_p_ocekavana_form.'<br>';
// echo 'kuze_l_aktualni: '.$kuze_l_aktualni_form.'<br>';
// echo 'kuze_l_ocekavana: '.$kuze_l_ocekavana_form.'<br>';

// echo 'tukova_degenerace_p_aktualni: '.$tukova_degenerace_p_aktualni_form.'<br>';
// echo 'tukova_degenerace_p_ocekavana: '.$tukova_degenerace_p_ocekavana_form.'<br>';
// echo 'tukova_degenerace_l_aktualni: '.$tukova_degenerace_l_aktualni_form.'<br>';
// echo 'tukova_degenerace_l_ocekavana: '.$tukova_degenerace_l_ocekavana_form.'<br>';

// echo 'zlucnik_p_aktualni: '.$zlucnik_p_aktualni_form.'<br>';
// echo 'zlucnik_p_ocekavana: '.$zlucnik_p_ocekavana_form.'<br>';
// echo 'zlucnik_l_aktualni: '.$zlucnik_l_aktualni_form.'<br>';
// echo 'zlucnik_l_ocekavana: '.$zlucnik_l_ocekavana_form.'<br>';

// echo 'ledviny_p_aktualni: '.$ledviny_p_aktualni_form.'<br>';
// echo 'ledviny_p_ocekavana: '.$ledviny_p_ocekavana_form.'<br>';
// echo 'ledviny_l_aktualni: '.$ledviny_l_aktualni_form.'<br>';
// echo 'ledviny_l_ocekavana: '.$ledviny_l_ocekavana_form.'<br>';


// echo 'mocovy_mechyr_p_aktualni: '.$mocovy_mechyr_p_aktualni_form.'<br>';
// echo 'mocovy_mechyr_p_ocekavana: '.$mocovy_mechyr_p_ocekavana_form.'<br>';
// echo 'mocovy_mechyr_l_aktualni: '.$mocovy_mechyr_l_aktualni_form.'<br>';
// echo 'mocovy_mechyr_l_ocekavana: '.$mocovy_mechyr_l_ocekavana_form.'<br><br><br>';



require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "INSERT INTO eav_plan(
uzivatel_id,
celkova_hodnota,
v_jakych_rodinnych_pomerech_zijete,
reakce_na_pocasi,
reakce_na_mesicni_cyklus,
reakce_na_mesicni_cyklus_text,
casta_zizen,
preference_napoju,
druh_napoju,
chut_k_jidlu,
hlad_v_koli_hodin,
oblibene_jidlo,
neoblibene_jidlo,
sladke,
soleni,
koreneni,
problemy_po_oblibenem_jidle,
problemy_po_oblibenem_jidle_text,
problemy_po_jidle_obecne,
problemy_po_jidle_obecne_text,
spanek,
poloha_ve_spanku,
v_jakou_hodinu_nemuzete_spat,
vraceji_se_nektere_sny,
popis_snu,
strachy_v_zivote,
bourka,
vyska,
zkouska,
voda,
nemoc,
zvire,
cestovani,
dopravni_prostredek,
zlodej,
smrt,
jine,
popis_strachu,
poznamka_text,
lymmfa_p_aktualni,
lymmfa_p_ocekavana,
lymmfa_l_aktualni,
lymmfa_l_ocekavana,
plice_p_aktualni,
plice_p_ocekavana,
plice_l_aktualni,
plice_l_ocekavana,
tluste_strevo_p_aktualni,
tluste_strevo_p_ocekavana,
tluste_strevo_l_aktualni,
tluste_strevo_l_ocekavana,
nervova_degenerace_p_aktualni,
nervova_degenerace_p_ocekavana,
nervova_degenerace_l_aktualni,
nervova_degenerace_l_ocekavana,
obal_srdce_p_aktualni,
obal_srdce_p_ocekavana,
obal_srdce_l_aktualni,
obal_srdce_l_ocekavana,
alergie_p_aktualni,
alergie_p_ocekavana,
alergie_l_aktualni,
alergie_l_ocekavana,
organova_degenerace_p_aktualni,
organova_degenerace_p_ocekavana,
organova_degenerace_l_aktualni,
organova_degenerace_l_ocekavana,
tri_ohrivace_p_aktualni,
tri_ohrivace_p_ocekavana,
tri_ohrivace_l_aktualni,
tri_ohrivace_l_ocekavana,
srdce_p_aktualni,
srdce_p_ocekavana,
srdce_l_aktualni,
srdce_l_ocekavana,
tenke_strevo_p_aktualni,
tenke_strevo_p_ocekavana,
tenke_strevo_l_aktualni,
tenke_strevo_l_ocekavana,
slinivka_slezina_p_aktualni,
slinivka_slezina_p_ocekavana,
slinivka_slezina_l_aktualni,
slinivka_slezina_l_ocekavana,
jatra_p_aktualni,
jatra_p_ocekavana,
jatra_l_aktualni,
jatra_l_ocekavana,
kloubni_degenerace_p_aktualni,
kloubni_degenerace_p_ocekavana,
kloubni_degenerace_l_aktualni,
kloubni_degenerace_l_ocekavana,
zaludek_p_aktualni,
zaludek_p_ocekavana,
zaludek_l_aktualni,
zaludek_l_ocekavana,
vazivova_degenerace_p_aktualni,
vazivova_degenerace_p_ocekavana,
vazivova_degenerace_l_aktualni,
vazivova_degenerace_l_ocekavana,
kuze_p_aktualni,
kuze_p_ocekavana,
kuze_l_aktualni,
kuze_l_ocekavana,
tukova_degenerace_p_aktualni,
tukova_degenerace_p_ocekavana,
tukova_degenerace_l_aktualni,
tukova_degenerace_l_ocekavana,
zlucnik_p_aktualni,
zlucnik_p_ocekavana,
zlucnik_l_aktualni,
zlucnik_l_ocekavana,
ledviny_p_aktualni,
ledviny_p_ocekavana,
ledviny_l_aktualni,
ledviny_l_ocekavana,
mocovy_mechyr_p_aktualni,
mocovy_mechyr_p_ocekavana,
mocovy_mechyr_l_aktualni,
mocovy_mechyr_l_ocekavana,
prihlaseny_uzivatel
)
VALUES (
'$uzivatel_id_form',
'$celkova_hodnota_form',
'$v_jakych_rodinnych_pomerech_zijete_form',
'$reakce_na_pocasi_form',
'$reakce_na_mesicni_cyklus_form',
'$reakce_na_mesicni_cyklus_text_form',
'$casta_zizen_form',
'$preference_napoju_form',
'$druh_napoju_form',
'$chut_k_jidlu_form',
'$hlad_v_koli_hodin_form',
'$oblibene_jidlo_form',
'$neoblibene_jidlo_form',
'$sladke_form',
'$soleni_form',
'$koreneni_form',
'$problemy_po_oblibenem_jidle_form',
'$problemy_po_oblibenem_jidle_text_form',
'$problemy_po_jidle_obecne_form',
'$problemy_po_jidle_obecne_text_form',
'$spanek_form',
'$poloha_ve_spanku_form',
'$v_jakou_hodinu_nemuzete_spat_form',
'$vraceji_se_nektere_sny_form',
'$popis_snu_form',
'$strachy_v_zivote_form',
'$bourka_form',
'$vyska_form',
'$zkouska_form',
'$voda_form',
'$nemoc_form',
'$zvire_form',
'$cestovani_form',
'$dopravni_prostredek_form',
'$zlodej_form',
'$smrt_form',
'$jine_form',
'$popis_strachu_form',
'$poznamka_text_form',
'$lymmfa_p_aktualni_form',
'$lymmfa_p_ocekavana_form',
'$lymmfa_l_aktualni_form',
'$lymmfa_l_ocekavana_form',
'$plice_p_aktualni_form',
'$plice_p_ocekavana_form',
'$plice_l_aktualni_form',
'$plice_l_ocekavana_form',
'$tluste_strevo_p_aktualni_form',
'$tluste_strevo_p_ocekavana_form',
'$tluste_strevo_l_aktualni_form',
'$tluste_strevo_l_ocekavana_form',
'$nervova_degenerace_p_aktualni_form',
'$nervova_degenerace_p_ocekavana_form',
'$nervova_degenerace_l_aktualni_form',
'$nervova_degenerace_l_ocekavana_form',
'$obal_srdce_p_aktualni_form',
'$obal_srdce_p_ocekavana_form',
'$obal_srdce_l_aktualni_form',
'$obal_srdce_l_ocekavana_form',
'$alergie_p_aktualni_form',
'$alergie_p_ocekavana_form',
'$alergie_l_aktualni_form',
'$alergie_l_ocekavana_form',
'$organova_degenerace_p_aktualni_form',
'$organova_degenerace_p_ocekavana_form',
'$organova_degenerace_l_aktualni_form',
'$organova_degenerace_l_ocekavana_form',
'$tri_ohrivace_p_aktualni_form',
'$tri_ohrivace_p_ocekavana_form',
'$tri_ohrivace_l_aktualni_form',
'$tri_ohrivace_l_ocekavana_form',
'$srdce_p_aktualni_form',
'$srdce_p_ocekavana_form',
'$srdce_l_aktualni_form',
'$srdce_l_ocekavana_form',
'$tenke_strevo_p_aktualni_form',
'$tenke_strevo_p_ocekavana_form',
'$tenke_strevo_l_aktualni_form',
'$tenke_strevo_l_ocekavana_form',
'$slinivka_slezina_p_aktualni_form',
'$slinivka_slezina_p_ocekavana_form',
'$slinivka_slezina_l_aktualni_form',
'$slinivka_slezina_l_ocekavana_form',
'$jatra_p_aktualni_form',
'$jatra_p_ocekavana_form',
'$jatra_l_aktualni_form',
'$jatra_l_ocekavana_form',
'$kloubni_degenerace_p_aktualni_form',
'$kloubni_degenerace_p_ocekavana_form',
'$kloubni_degenerace_l_aktualni_form',
'$kloubni_degenerace_l_ocekavana_form',
'$zaludek_p_aktualni_form',
'$zaludek_p_ocekavana_form',
'$zaludek_l_aktualni_form',
'$zaludek_l_ocekavana_form',
'$vazivova_degenerace_p_aktualni_form',
'$vazivova_degenerace_p_ocekavana_form',
'$vazivova_degenerace_l_aktualni_form',
'$vazivova_degenerace_l_ocekavana_form',
'$kuze_p_aktualni_form',
'$kuze_p_ocekavana_form',
'$kuze_l_aktualni_form',
'$kuze_l_ocekavana_form',
'$tukova_degenerace_p_aktualni_form',
'$tukova_degenerace_p_ocekavana_form',
'$tukova_degenerace_l_aktualni_form',
'$tukova_degenerace_l_ocekavana_form',
'$zlucnik_p_aktualni_form',
'$zlucnik_p_ocekavana_form',
'$zlucnik_l_aktualni_form',
'$zlucnik_l_ocekavana_form',
'$ledviny_p_aktualni_form',
'$ledviny_p_ocekavana_form',
'$ledviny_l_aktualni_form',
'$ledviny_l_ocekavana_form',
'$mocovy_mechyr_p_aktualni_form',
'$mocovy_mechyr_p_ocekavana_form',
'$mocovy_mechyr_l_aktualni_form',
'$mocovy_mechyr_l_ocekavana_form',
'$prihlaseny_uzivatel_form'
)";       

if ($conn->query($sql) === TRUE) {    
    } else {
   echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }

?>


                                <script>
                                function myFunction() {
                                var x = document.getElementById("myFORM");
                                var style = window.getComputedStyle(x);
                                if (style.display === "none") {
                                x.style.display = "block";
                                } else {
                                x.style.display = "none";
                                }
                                }
                                </script>
                                <style>
                                #myFORM {
                                display: none; /* Skrytí divu na začátku */
                                }
                                </style>
 <div class="row">
                        <div class="col-sm-6"> 
                                <button type="submit" class="btn btn-success btn-sm"  onclick="myFunction()()">&nbsp;&nbsp;Zobrazit/skrýt nový formulář EAV&nbsp;&nbsp;</button>
                        </div>
</div>
<div id="myFORM">
 <br>
                <form id="diagnostika_eav_<?echo $uzivatel_id; ?>"  name="diagnostika_eav_<?echo $uzivatel_id; ?>" method="post"> 

                                                        <div class="row">
                                                                                <div class="col-sm-12" style="background-color:#DBDBDB;"> 
                                                                                        <div class="col-sm-6">
                                                                                                <br>
                                                                                                <label for="uzivatel">* Celková hodnota:</label>
                                                                                                <input type="text" class="form-control form-control-sm" id="celkova_hodnota" value = "" name="celkova_hodnota" maxlength="5" placeholder="Celková hodnota" required>
                                                                                        </div>                                                                      

                                                                                </div>

                                                        </div>


                                        <div class="row">

                                        
                                                        <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                                        <div class="col-sm-6">
                                                                        <br>
                                                                        <label for="uzivatel">* V jakých rodinných poměrech žijete:</label>
                                                                        <input type="text" class="form-control form-control-sm" id="v_jakych_rodinnych_pomerech_zijete" value = "" name="v_jakych_rodinnych_pomerech_zijete" maxlength="100" placeholder="V jakých rodinných poměrech žijete?" required>
                                                                        </div>  

                                                                        <div class="col-sm-6">
                                                                        <br>
                                                                        <label for="uzivatel">* Reakce na počasí:</label>
                                                                        <input type="text" class="form-control form-control-sm" id="reakce_na_pocasi" value = "" name="reakce_na_pocasi" maxlength="100" placeholder="chladné, vlhké, horké, suché, mlha, bouřka, změny, sníh, vítr" required>
                                                                        </div>
                                                        </div>
                                                </div>

                                                <div class="row">

                                                        <div class="col-sm-12" style="background-color:#DBDBDB;">             
                                                                <div class="col-sm-3">
                                                                <br>
                                                                <label for="uzivatel">* Reakce na měsíční cyklus:</label>
                                                                <select class="form-control" id="reakce_na mesicni_cyklus" name="reakce_na_mesicni_cyklus" required >
                                                                <option value="0"> Vyberte možnost</option>
                                                                <option value="1">Ano</option>
                                                                <option value="2">Ne</option>
                                                                </select>
                                                                </div>   
                                                        
                                                                <div class="col-sm-4">
                                                                <br>
                                                                <label for="uzivatel">Doplňte fázi měsíce:</label>
                                                                <input type="text" class="form-control form-control-sm" id="reakce_na_mesicni_cyklus_text" value = "" name="reakce_na_mesicni_cyklus_text" maxlength="100" placeholder="nov, přibývání, ubývání">        
                                                                </div>    

                                                                <div class="col-sm-3">
                                                                <br>
                                                                <label for="uzivatel">* Částá žízeň:</label>
                                                                <select class="form-control" id="casta_zizen" name="casta_zizen" required>
                                                                <option value="0"> Vyberte možnost</option>
                                                                <option value="1">Ano</option>
                                                                <option value="2">Ne</option>
                                                                </select>   
                                                                </div> 
                                                        </div>   
                                        </div>

                                                <div class="row">

                                                                        <div class="col-sm-12" style="background-color:#DBDBDB;">    
                                                                        
                                                                                <div class="col-sm-3">
                                                                                        <br>
                                                                                        <label for="uzivatel">* Preference nápojů:</label>
                                                                                        <select class="form-control" id="preference_napoju" name="preference_napoju" required>
                                                                                        <option value="0"> Vyberte možnost</option>
                                                                                        <option value="1">teplé</option>
                                                                                        <option value="2">studené</option>
                                                                                        </select>
                                                                                </div>

                                                                                <div class="col-sm-4">
                                                                                <br>
                                                                                <label for="uzivatel">Druh nápojů:</label>
                                                                                <input type="text" class="form-control form-control-sm" id="druh_napoju" value = "" name="druh_napoju" maxlength="100" placeholder="Druh nápojů">        
                                                                                </div> 
                                                                                
                                                                                <div class="col-sm-3">
                                                                                        <br>
                                                                                        <label for="uzivatel">* Chuť k jídlu:</label>
                                                                                        <select class="form-control" id="chut_k_jidlu" name="chut_k_jidlu" required>
                                                                                        <option value="0"> Vyberte možnost</option>
                                                                                        <option value="1">Normální</option>
                                                                                        <option value="2">Dobrá</option>
                                                                                        <option value="3">špatná</option>
                                                                                        <option value="4">Odpor</option>
                                                                                        <option value="5">Vlčí hlad</option>
                                                                                        <option value="6">V noci</option>
                                                                                        </select>
                                                                                </div>
                                                                                <div class="form-group" id="chutkjidluFieldGroupDiv">
                                                                                        <div class="col-sm-2">
                                                                                        <br>
                                                                                        <label for="uzivatel">V kolik hodin:</label>
                                                                                        <input type="text" class="form-control form-control-sm" id="hladhodiny" value = "" name="hlad_v_koli_hodin" maxlength="10" placeholder="Čas">   
                                                                                        </div>
                                                                                </div>
                                                                        
                                                                                <script src="./js/chutkjidlu.js"></script>



                                                                        </div>   
                                                </div>

                                                <div class="row">

                                                                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                                        <div class="col-sm-3">
                                                                                <br>
                                                                                <label for="uzivatel">Oblíbené jídlo:</label>
                                                                                <input type="text" class="form-control form-control-sm" id="oblibene_jidlo" value = "" name="oblibene_jidlo" maxlength="200" placeholder="Oblíbené jídlo">        
                                                                        </div>
                                                                        
                                                                        <div class="col-sm-3">
                                                                                <br>
                                                                                <label for="uzivatel">Neoblíbené jídlo:</label>
                                                                                <input type="text" class="form-control form-control-sm" id="neoblibene_jidlo" value = "" name="neoblibene_jidlo" maxlength="200" placeholder="Neoblíbené jídlo" >        
                                                                        </div> 

                                                                        <div class="col-sm-2">
                                                                                <br>
                                                                                <label for="uzivatel">Sladké</label>
                                                                                <select class="form-control" id="sladke" name="sladke">
                                                                                <option value="0"> Vyberte možnost</option>
                                                                                <option value="1">Ano</option>
                                                                                <option value="2">Ne</option>
                                                                                <option value="3">Trochu</option>
                                                                                </select>
                                                                        </div>

                                                                        <div class="col-sm-2">
                                                                                <br>
                                                                                <label for="uzivatel">Solení</label>
                                                                                <select class="form-control" id="soleni" name="soleni">
                                                                                <option value="0"> Vyberte možnost</option>
                                                                                <option value="1">Hodně</option>
                                                                                <option value="2">Málo</option>
                                                                                <option value="3">Vůbec ne</option>
                                                                                </select>
                                                                        </div>

                                                                        <div class="col-sm-2">
                                                                                <br>
                                                                                <label for="uzivatel">Kořenění</label>
                                                                                <select class="form-control" id="koreneni" name="koreneni">
                                                                                <option value="0"> Vyberte možnost</option>
                                                                                <option value="1">Hodně</option>
                                                                                <option value="2">Málo</option>
                                                                                <option value="3">Vůbec ne</option>
                                                                                </select>
                                                                        </div>
                                                                
                                                
                                                                </div>


                                                </div>
                                                
                                                <div class="row">

                                                                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                                
                                                                        <div class="col-sm-3">
                                                                                <br>
                                                                                <label for="uzivatel">Problémy po oblíbeném jídle:</label>
                                                                                <select class="form-control" id="problemy_po_oblibenem_jidle" name="problemy_po_oblibenem_jidle">
                                                                                <option value="0"> Vyberte možnost</option>
                                                                                <option value="1">Ano</option>
                                                                                <option value="2">Ne</option>
                                                                                </select>
                                                                        </div>  

                                                                        <div class="form-group" id="oblibenejidlo">
                                                                                        <div class="col-sm-9">
                                                                                                <br>
                                                                                                <label for="uzivatel">Popis problémů:</label>
                                                                                                <input type="text" class="form-control form-control-sm" id="problemy_po_oblibenem_jidle_text" value = "" name="problemy_po_oblibenem_jidle_text" maxlength="200" placeholder="Popis problémů po oblíbeném jídle" >        
                                                                                        </div>                                              
                                                                        </div> 
                                                                        <script src="./js/oblibenejidlo.js"></script>








                                                                </div> 
                                                </div>    





                                                <div class="row">
                                                                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                                        <div class="col-sm-3">
                                                                                <br>
                                                                                <label for="uzivatel">Problémy po jídle obecně:</label>
                                                                                <select class="form-control" id="problemy_po_jidle_obecne" name="problemy_po_jidle_obecne">
                                                                                <option value="0"> Vyberte možnost</option>
                                                                                <option value="1">Ano</option>
                                                                                <option value="2">Ne</option>
                                                                                </select>
                                                                        </div>
                                                                        <div class="form-group" id="obecnejidlo">
                                                                                        <div class="col-sm-9">
                                                                                                <br>
                                                                                                <label for="uzivatel">Popis problémů:</label>
                                                                                                <input type="text" class="form-control form-control-sm" id="problemy_po_jidle_obecne_text" value = "" name="problemy_po_jidle_obecne_text" maxlength="200" placeholder="Popis problémů po jídle obecně" >        
                                                                                        </div>     
                                                                        </div>
                                                                        <script src="./js/obecnejidlo.js"></script>

                                                                </div>
                                                </div>


                                                <div class="row">
                                                                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                                                <div class="col-sm-3">
                                                                                                <br>
                                                                                                <label for="uzivatel">* Spánek</label>
                                                                                                <select class="form-control" id="spanek" name="spanek" required>
                                                                                                <option value="0"> Vyberte možnost</option>
                                                                                                <option value="1">Dobrý</option>
                                                                                                <option value="2">Špatný</option>
                                                                                                <option value="3">Nemožnost usnout</option>
                                                                                                <option value="4">Mluvení ze spaní</option>
                                                                                                <option value="5">Klidný</option>
                                                                                                <option value="6">Neklidný</option>
                                                                                                <option value="7">Časté buzení</option> 
                                                                                                
                                                                                                </select>
                                                                                </div>
                                                                
                                                                                <div class="col-sm-3">
                                                                                        <br>
                                                                                        <label for="uzivatel">Poloha ve spánku:</label>
                                                                                        <input type="text" class="form-control form-control-sm" id="poloha_ve_spanku" value = "" name="poloha_ve_spanku" maxlength="100" placeholder="Poloha ve spánku" >        
                                                                                </div> 

                                                                                <div class="col-sm-3">
                                                                                        <br>
                                                                                        <label for="uzivatel">* V jakou hodinu nemůžete spát?</label>
                                                                                        <input type="text" class="form-control form-control-sm" id="v_jakou_hodinu_nemuzete_spat" value = "" name="v_jakou_hodinu_nemuzete_spat" maxlength="200" placeholder="V jakou hodinu nemůžete spát?" required>        
                                                                                </div> 
                                                                
                                                        </div>           
                                                </div>


                                                <div class="row">
                                                                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                                        <div class="col-sm-3">
                                                                                                <br>
                                                                                                <label for="uzivatel">Vracejí se některé sny:</label>
                                                                                                <select class="form-control" id="vraceji_se_nektere_sny" name="vraceji_se_nektere_sny">
                                                                                                <option value="0"> Vyberte možnost</option>
                                                                                                <option value="1">Ano</option>
                                                                                                <option value="2">Ne</option>  
                                                                                                </select>
                                                                        </div>

                                                                        <div class="form-group" id="castesny">
                                                                                <div class="col-sm-9">
                                                                                                <br>
                                                                                                <label for="uzivatel">Popis:</label>
                                                                                                <input type="text" class="form-control form-control-sm" id="popis_snu" value = "" name="popis_snu" maxlength="200" placeholder="Které sny se Vám často vracejí?" >        
                                                                                </div> 
                                                                        </div>
                                                                        <script src="./js/castesny.js"></script>




                                                                </div>




                                                </div>       





                                                <div class="row">
                                                                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                                                <div class="col-sm-3">
                                                                                                        <br>
                                                                                                        <label for="uzivatel">* Strachy v životě:</label>
                                                                                                        <select class="form-control" id="strachy_v_zivote" name="strachy_v_zivote" required>
                                                                                                        <option value="0"> Vyberte možnost</option>
                                                                                                        <option value="1">Ano</option>
                                                                                                        <option value="2">Ne</option>  
                                                                                                        </select>
                                                                                                        <br>
                                                                                </div>  
                                                                        
                                                                        <div class="form-group" id="ZivotniStrachy">

                                                                                                                <div class="col-sm-2">
                                                                                                                        <br><br>
                                                                                                                        <div class="checkbox">
                                                                                                                        <label><input type="checkbox" name="bourka" value="1">bouřka</label>
                                                                                                                        </div>

                                                                                                                        <div class="checkbox">
                                                                                                                        <label><input type="checkbox" name="vyska" value="1">výška</label>
                                                                                                                        </div>
                                                                                                                
                                                                                                                        <div class="checkbox">
                                                                                                                        <label><input type="checkbox" name="zkouska" value="1">zkouška</label>
                                                                                                                        </div>

                                                                                                                        <div class="checkbox">
                                                                                                                        <label><input type="checkbox" name="voda" value="1">voda</label>
                                                                                                                        </div>  
                                                                                                                        
                                                                                                                        <div class="checkbox">
                                                                                                                        <label><input type="checkbox" name="nemoc" value="1">nemoc</label>
                                                                                                                        </div> 
                                                                                                                        
                                                                                                                        <div class="checkbox">
                                                                                                                        <label><input type="checkbox" name="zvire" value="1">zvíře</label>
                                                                                                                        </div> 
                                                                                                                        
                                                                                                                        <div class="checkbox">
                                                                                                                        <label><input type="checkbox" name="cestovani" value="1">cestování</label>
                                                                                                                        </div>   

                                                                                                                        <div class="checkbox">
                                                                                                                        <label><input type="checkbox" name="dopravni_prostredek" value="1">dopravní prostředek</label>
                                                                                                                        </div>  

                                                                                                                        <div class="checkbox">
                                                                                                                        <label><input type="checkbox" name="zlodej" value="1">zloděj</label>
                                                                                                                        </div> 

                                                                                                                        <div class="checkbox">
                                                                                                                        <label><input type="checkbox" name="smrt" value="1">smrt</label>
                                                                                                                        </div> 
                                                                                                                        
                                                                                                                        <div class="checkbox">
                                                                                                                        <label><input type="checkbox" name="jine" value="1" id="Moje_strachy" onclick="myFunction_strachy()">jiné</label>
                                                                                                                        </div>      

                                                                                                                </div>        


                                                                                                                        <div class="col-sm-7" id="text_strach" style="display:none">
                                                                                                                                                <br>
                                                                                                                                                <label for="uzivatel">Popis:</label>
                                                                                                                                                <input type="text" class="form-control form-control-sm" id="popis_strachu" value = "" name="popis_strachu" maxlength="200" placeholder="Popis strachu" >        
                                                                                                                        </div> 
                                                
                                                                                                                        
                                                                        </div>
                                                                
                
                                                                </div>
                                                        
                                                </div>  



                                                                        <div class="row">
                                                                                                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                                                                                <br>
                                                                                                                <label for="uzivatel">Poznámka:</label>
                                                                                                                <textarea class="form-control" id="poznamka_text" name="poznamka_text" rows="4" maxlength="500" placeholder="Textová poznámka o délce max 500 znaků"></textarea>
                                                                                                                <br>
                                                                                                </div>
                                                                        </div>





                                <script src="./js/strachy.js"></script>

                                <script>
                                function myFunction_strachy() {
                                var checkBox = document.getElementById("Moje_strachy");
                                var text = document.getElementById("text_strach");
                                if (checkBox.checked == true){
                                text.style.display = "block";
                                } else {
                                text.style.display = "none";
                                }
                                }
                                </script>


                                <h4 align="center">Ruce</h4>
                                        <div class="row">
                                        
                                                                <div class="col-sm-12" style="background-color:#e1f6f2;"> 
                                                                        <br>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Lymfa P - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="lymmfa_p_aktualni" value = "50/50" name="lymmfa_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Lymfa P - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="lymmfa_p_ocekavana" value = "50/50" name="lymmfa_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Lymfa L - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="lymmfa_l_aktualni" value = "50/50" name="lymmfa_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Lymfa L - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="lymmfa_l_ocekavana" value = "50/50" name="lymmfa_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        </div>                             
                                                                </div>
                                        </div>                        
                                <div class="row">
                                                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                                                        <br>  
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Plíce P - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="plice_p_aktualni" value = "50/50" name="plice_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Plíce P - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="plice_p_ocekavana" value = "50/50" name="plice_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Plíce L - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="plice_l_aktualni" value = "50/50" name="plice_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Plíce L - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="plice_l_ocekavana" value = "50/50" name="plice_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        </div>                             
                                                                </div>
                                        </div>                        
                                <div class="row">
                                                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                                                        <br>  
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Tlusté střevo P - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="tluste_strevo_p_aktualni" value = "50/50" name="tluste_strevo_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Tlusté střevo P - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="tluste_strevo_p_ocekavana" value = "50/50" name="tluste_strevo_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Tlusté střevo L - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="tluste_strevo_l_aktualni" value = "50/50" name="tluste_strevo_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Tlusté střevo L - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="tluste_strevo_l_ocekavana" value = "50/50" name="tluste_strevo_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        </div>                             
                                                                </div>

                                        </div>                        
                                <div class="row">                                
                                                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                                                        <br>  
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Nervová degenerace P - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="nervova_degenerace_p_aktualni" value = "50/50" name="nervova_degenerace_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Nervová degenerace P - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="nervova_degenerace_p_ocekavana" value = "50/50" name="nervova_degenerace_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Nervová degenerace L - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="nervova_degenerace_l_aktualni" value = "50/50" name="nervova_degenerace_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Nervová degenerace L - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="nervova_degenerace_l_ocekavana" value = "50/50" name="nervova_degenerace_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        </div>                             
                                                                </div> 

                                        </div>                        
                                <div class="row">                                
                                                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                                                        <br>  
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Obal srdce P - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="obal_srdce_p_aktualni" value = "50/50" name="obal_srdce_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Obal srdce P - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="obal_srdce_p_ocekavana" value = "50/50" name="obal_srdce_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Obal srdce L - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="obal_srdce_l_aktualni" value = "50/50" name="obal_srdce_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Obal srdce L - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="obal_srdce_l_ocekavana" value = "50/50" name="obal_srdce_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        </div>                             
                                                                </div> 

                                        </div>                        
                                <div class="row">                                
                                                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                                                        <br>  
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Alergie P - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="alergie_p_aktualni" value = "50/50" name="alergie_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Alergie P - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="alergie_p_ocekavana" value = "50/50" name="alergie_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Alergie L - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="alergie_l_aktualni" value = "50/50" name="alergie_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Alergie L - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="alergie_l_ocekavana" value = "50/50" name="alergie_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        </div>                             
                                                                </div> 

                                        </div>                        
                                <div class="row">                                
                                                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                                                        <br>  
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Orgánová degenerace P - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="organova_degenerace_p_aktualni" value = "50/50" name="organova_degenerace_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Orgánová degenerace P - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="organova_degenerace_p_ocekavana" value = "50/50" name="organova_degenerace_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Orgánová degenerace L - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="organova_degenerace_l_aktualni" value = "50/50" name="organova_degenerace_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Orgánová degenerace L - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="organova_degenerace_l_ocekavana" value = "50/50" name="organova_degenerace_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        </div>                             
                                                                </div> 

                                        </div>                        
                                <div class="row">                                
                                                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                                                        <br>  
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Tři ohřívače P - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="tri_ohrivace_p_aktualni" value = "50/50" name="tri_ohrivace_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Tři ohřívače P - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="tri_ohrivace_p_ocekavana" value = "50/50" name="tri_ohrivace_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Tři ohřívače L - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="tri_ohrivace_l_aktualni" value = "50/50" name="tri_ohrivace_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Tři ohřívače L - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="tri_ohrivace_l_ocekavana" value = "50/50" name="tri_ohrivace_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        </div>                             
                                                                </div> 

                                        </div>                        
                                <div class="row">                                
                                                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                                                        <br>  
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Srdce P - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="srdce_p_aktualni" value = "50/50" name="srdce_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Srdce P - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="srdce_p_ocekavana" value = "50/50" name="srdce_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Srdce L - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="srdce_l_aktualni" value = "50/50" name="srdce_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Srdce L - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="srdce_l_ocekavana" value = "50/50" name="srdce_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        </div>                             
                                                                </div>

                                        </div>                        
                                <div class="row">                                
                                                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                                                        <br>  
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Tenké střevo P - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="tenke_strevo_p_aktualni" value = "50/50" name="tenke_strevo_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Tenké střevo P - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="tenke_strevo_p_ocekavana" value = "50/50" name="tenke_strevo_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Tenké střevo L - aktuální</label>
                                                                        <input type="text" class="form-control form-control-sm" id="tenke_strevo_l_aktualni" value = "50/50" name="tenke_strevo_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                        <label for="uzivatel">Tenké střevo L - očekávaná</label>
                                                                        <input type="text" class="form-control form-control-sm" id="tenke_strevo_l_ocekavana" value = "50/50" name="tenke_strevo_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                        <br>
                                                                        </div> 
                                                                                                
                                                                </div>
                                        </div>


                                                
                                

                                <h4 align="center">Nohy</h4>
                                        <div class="row">
                                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                                <br>  
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Slinivka/slezina P - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="slinivka_slezina_p_aktualni" value = "50/50" name="slinivka_slezina_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Slinivka/slezina P - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="slinivka_slezina_p_ocekavana" value = "50/50" name="slinivka_slezina_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Slinivka/slezina L - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="slinivka_slezina_l_aktualni" value = "50/50" name="slinivka_slezina_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Slinivka/slezina L - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="slinivka_slezina_l_ocekavana" value = "50/50" name="slinivka_slezina_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                </div> 
                                                                                                        
                                                                        </div>
                                        </div>

                                        <div class="row">
                                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                                <br>  
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Játra P - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="jatra_p_aktualni" value = "50/50" name="jatra_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Játra P - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="jatra_p_ocekavana" value = "50/50" name="jatra_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Játra L - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="jatra_l_aktualni" value = "50/50" name="jatra_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Játra L - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="jatra_l_ocekavana" value = "50/50" name="jatra_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                </div>                                                                         
                                                                        </div>
                                        </div>


                                        <div class="row">
                                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                                <br>  
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Kloubní degenerace P - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="kloubni_degenerace_p_aktualni" value = "50/50" name="kloubni_degenerace_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Kloubní degenerace P - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="kloubni_degenerace_p_ocekavana" value = "50/50" name="kloubni_degenerace_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Kloubní degenerace L - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="kloubni_degenerace_l_aktualni" value = "50/50" name="kloubni_degenerace_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Kloubní degenerace L - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="kloubni_degenerace_l_ocekavana" value = "50/50" name="kloubni_degenerace_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                </div>                                                                         
                                                                        </div>
                                        </div>


                                        <div class="row">
                                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                                <br>  
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Žaludek P - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="zaludek_p_aktualni" value = "50/50" name="zaludek_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Žaludek P - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="zaludek_p_ocekavana" value = "50/50" name="zaludek_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Žaludek L - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="zaludek_l_aktualni" value = "50/50" name="zaludek_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Žaludek L - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="zaludek_l_ocekavana" value = "50/50" name="zaludek_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                </div>                                                                         
                                                                        </div>
                                        </div>

                                        <div class="row">
                                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                                <br>  
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Vazivová degenerace P - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="vazivova_degenerace_p_aktualni" value = "50/50" name="vazivova_degenerace_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Vazivová degenerace P - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="vazivova_degenerace_p_ocekavana" value = "50/50" name="vazivova_degenerace_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Vazivová degenerace L - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="vazivova_degenerace_l_aktualni" value = "50/50" name="vazivova_degenerace_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Vazivová degenerace L - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="vazivova_degenerace_l_ocekavana" value = "50/50" name="vazivova_degenerace_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                </div>                                                                         
                                                                        </div>
                                        </div>


                                        <div class="row">
                                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                                <br>  
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Kůže P - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="kuze_p_aktualni" value = "50/50" name="kuze_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Kůže P - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="kuze_p_ocekavana" value = "50/50" name="kuze_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Kůže L - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="kuze_l_aktualni" value = "50/50" name="kuze_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Kůže L - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="kuze_l_ocekavana" value = "50/50" name="kuze_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                </div>                                                                         
                                                                        </div>
                                        </div>


                                        <div class="row">
                                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                                <br>  
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Tuková degenerace P - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="tukova_degenerace_p_aktualni" value = "50/50" name="tukova_degenerace_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Tuková degenerace P - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="tukova_degenerace_p_ocekavana" value = "50/50" name="tukova_degenerace_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Tuková degenerace L - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="tukova_degenerace_l_aktualni" value = "50/50" name="tukova_degenerace_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Tuková degenerace L - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="tukova_degenerace_l_ocekavana" value = "50/50" name="tukova_degenerace_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                </div>                                                                         
                                                                        </div>
                                        </div>


                                        <div class="row">
                                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                                <br>  
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Žlučník P - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="zlucnik_p_aktualni" value = "50/50" name="zlucnik_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Žlučník P - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="zlucnik_p_ocekavana" value = "50/50" name="zlucnik_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Žlučník L - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="zlucnik_l_aktualni" value = "50/50" name="zlucnik_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Žlučník L - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="zlucnik_l_ocekavana" value = "50/50" name="zlucnik_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                </div>                                                                         
                                                                        </div>
                                        </div>


                                        <div class="row">
                                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                                <br>  
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Ledviny P - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="ledviny_p_aktualni" value = "50/50" name="ledviny_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Ledviny P - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="ledviny_p_ocekavana" value = "50/50" name="ledviny_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Ledviny L - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="ledviny_l_aktualni" value = "50/50" name="ledviny_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Ledviny L - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="ledviny_l_ocekavana" value = "50/50" name="ledviny_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                </div>                                                                         
                                                                        </div>
                                        </div>

                                        <div class="row">
                                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                                <br>  
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Močový měchýř P - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="mocovy_mechyr_p_aktualni" value = "50/50" name="mocovy_mechyr_p_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Močový měchýř P - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="mocovy_mechyr_p_ocekavana" value = "50/50" name="mocovy_mechyr_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Močový měchýř L - aktuální</label>
                                                                                <input type="text" class="form-control form-control-sm" id="mocovy_mechyr_l_aktualni" value = "50/50" name="mocovy_mechyr_l_aktualni" maxlength="7" placeholder="50/50" >
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                <label for="uzivatel">Močový měchýř L - očekávaná</label>
                                                                                <input type="text" class="form-control form-control-sm" id="mocovy_mechyr_l_ocekavana" value = "50/50" name="mocovy_mechyr_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                                                <br>        
                                                                                </div>                                                                         
                                                                        </div>
                                        </div>
                                        </form>
                                                <br>
                                                <button type="submit" class="btn btn-success btn-sm"  onclick="loadEav_plan_<?echo $uzivatel_id; ?>()">&nbsp;&nbsp;Uložit diagnostiku EAV&nbsp;&nbsp;</button>

                        </div>
       





                                <script>
                        function loadEav_plan_<?echo $uzivatel_id; ?>() {
                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("diagnostika_eav_<?echo $uzivatel_id; ?>").innerHTML = this.responseText;
                        }
                        };       
                        
                                        var prihlaseny_uzivatel = "<? echo $_SESSION['uzivatel_jmeno_session'].' '.$_SESSION['uzivatel_prijmeni_session']; ?>";
                                        var celkova_hodnota = document.diagnostika_eav_<?echo $uzivatel_id; ?>.celkova_hodnota.value;
                                        var v_jakych_rodinnych_pomerech_zijete = document.diagnostika_eav_<?echo $uzivatel_id; ?>.v_jakych_rodinnych_pomerech_zijete.value;
                                        var reakce_na_pocasi = document.diagnostika_eav_<?echo $uzivatel_id; ?>.reakce_na_pocasi.value;
                                        var reakce_na_mesicni_cyklus = document.diagnostika_eav_<?echo $uzivatel_id; ?>.reakce_na_mesicni_cyklus.value;
                                        var reakce_na_mesicni_cyklus_text = document.diagnostika_eav_<?echo $uzivatel_id; ?>.reakce_na_mesicni_cyklus_text.value;
                                        var casta_zizen = document.diagnostika_eav_<?echo $uzivatel_id; ?>.casta_zizen.value;
                                        var preference_napoju = document.diagnostika_eav_<?echo $uzivatel_id; ?>.preference_napoju.value;
                                        var druh_napoju = document.diagnostika_eav_<?echo $uzivatel_id; ?>.druh_napoju.value;
                                        var chut_k_jidlu = document.diagnostika_eav_<?echo $uzivatel_id; ?>.chut_k_jidlu.value;
                                        var hlad_v_koli_hodin = document.diagnostika_eav_<?echo $uzivatel_id; ?>.hlad_v_koli_hodin.value;
                                        var oblibene_jidlo = document.diagnostika_eav_<?echo $uzivatel_id; ?>.oblibene_jidlo.value;
                                        var neoblibene_jidlo = document.diagnostika_eav_<?echo $uzivatel_id; ?>.neoblibene_jidlo.value;
                                        var sladke = document.diagnostika_eav_<?echo $uzivatel_id; ?>.sladke.value;
                                        var soleni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.soleni.value;
                                        var koreneni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.koreneni.value;
                                        var problemy_po_oblibenem_jidle = document.diagnostika_eav_<?echo $uzivatel_id; ?>.problemy_po_oblibenem_jidle.value;
                                        var problemy_po_oblibenem_jidle_text = document.diagnostika_eav_<?echo $uzivatel_id; ?>.problemy_po_oblibenem_jidle_text.value;
                                        var problemy_po_jidle_obecne = document.diagnostika_eav_<?echo $uzivatel_id; ?>.problemy_po_jidle_obecne.value;
                                        var problemy_po_jidle_obecne_text = document.diagnostika_eav_<?echo $uzivatel_id; ?>.problemy_po_jidle_obecne_text.value;
                                        var spanek = document.diagnostika_eav_<?echo $uzivatel_id; ?>.spanek.value;
                                        var poloha_ve_spanku = document.diagnostika_eav_<?echo $uzivatel_id; ?>.poloha_ve_spanku.value;
                                        var v_jakou_hodinu_nemuzete_spat = document.diagnostika_eav_<?echo $uzivatel_id; ?>.v_jakou_hodinu_nemuzete_spat.value;
                                        var vraceji_se_nektere_sny = document.diagnostika_eav_<?echo $uzivatel_id; ?>.vraceji_se_nektere_sny.value;
                                        var popis_snu = document.diagnostika_eav_<?echo $uzivatel_id; ?>.popis_snu.value;
                                        var strachy_v_zivote = document.diagnostika_eav_<?echo $uzivatel_id; ?>.strachy_v_zivote.value;


                                        var bourka = document.diagnostika_eav_<?echo $uzivatel_id; ?>.bourka;

                                        if(bourka.checked) {
                                                bourka = 1;
                                        }else{
                                                bourka = 0;
                                        }



                                        var vyska = document.diagnostika_eav_<?echo $uzivatel_id; ?>.vyska;

                                        if(vyska.checked) {
                                                vyska = 1;
                                        }else{
                                                vyska = 0;
                                        }

                                        var zkouska = document.diagnostika_eav_<?echo $uzivatel_id; ?>.zkouska;

                                        if(zkouska.checked) {
                                                zkouska = 1;
                                        }else{
                                                zkouska = 0;
                                        }

                                        var voda = document.diagnostika_eav_<?echo $uzivatel_id; ?>.voda;

                                        if(voda.checked) {
                                                voda = 1;
                                        }else{
                                                voda = 0;
                                        }

                                        var nemoc = document.diagnostika_eav_<?echo $uzivatel_id; ?>.nemoc;

                                        if(nemoc.checked) {
                                                nemoc = 1;
                                        }else{
                                                nemoc = 0;
                                        }

                                        var zvire = document.diagnostika_eav_<?echo $uzivatel_id; ?>.zvire;

                                        if(zvire.checked) {
                                                zvire = 1;
                                        }else{
                                                zvire = 0;
                                        }


                                        var cestovani = document.diagnostika_eav_<?echo $uzivatel_id; ?>.cestovani;

                                        if(cestovani.checked) {
                                                cestovani = 1;
                                        }else{
                                                cestovani = 0;
                                        } 


                                        var dopravni_prostredek = document.diagnostika_eav_<?echo $uzivatel_id; ?>.dopravni_prostredek;

                                        if(dopravni_prostredek.checked) {
                                                dopravni_prostredek = 1;
                                        }else{
                                                dopravni_prostredek = 0;
                                        } 


                                        var zlodej = document.diagnostika_eav_<?echo $uzivatel_id; ?>.zlodej;

                                        if(zlodej.checked) {
                                                zlodej = 1;
                                        }else{
                                                zlodej = 0;
                                        } 


                                        var smrt = document.diagnostika_eav_<?echo $uzivatel_id; ?>.smrt;

                                        if(smrt.checked) {
                                                smrt = 1;
                                        }else{
                                                smrt = 0;
                                        } 

                                

                                        var popis_strachu = document.diagnostika_eav_<?echo $uzivatel_id; ?>.popis_strachu.value;
                                        
                                        var jine = document.diagnostika_eav_<?echo $uzivatel_id; ?>.jine;

                                        if(jine.checked) {
                                                jine = 1;
                                                popis_strachu = popis_strachu;
                                        }else{
                                                jine = 0;
                                                popis_strachu = "";
                                        }


                                        var poznamka_text = document.diagnostika_eav_<?echo $uzivatel_id; ?>.poznamka_text.value;

                                        var lymmfa_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.lymmfa_p_aktualni.value;
                                        var lymmfa_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.lymmfa_p_ocekavana.value;
                                        var lymmfa_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.lymmfa_l_aktualni.value;
                                        var lymmfa_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.lymmfa_l_ocekavana.value;
                                        var plice_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.plice_p_aktualni.value;
                                        var plice_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.plice_p_ocekavana.value;
                                        var plice_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.plice_l_aktualni.value;
                                        var plice_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.plice_l_ocekavana.value;                
                                        var tluste_strevo_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.tluste_strevo_p_aktualni.value;
                                        var tluste_strevo_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.tluste_strevo_p_ocekavana.value;               
                                        var tluste_strevo_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.tluste_strevo_l_aktualni.value;
                                        var tluste_strevo_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.tluste_strevo_l_ocekavana.value; 
                                        var nervova_degenerace_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.nervova_degenerace_p_aktualni.value;
                                        var nervova_degenerace_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.nervova_degenerace_p_ocekavana.value;
                                        var nervova_degenerace_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.nervova_degenerace_l_aktualni.value;
                                        var nervova_degenerace_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.nervova_degenerace_l_ocekavana.value;
                                        var obal_srdce_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.obal_srdce_p_aktualni.value;
                                        var obal_srdce_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.obal_srdce_p_ocekavana.value;
                                        var obal_srdce_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.obal_srdce_l_aktualni.value;
                                        var obal_srdce_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.obal_srdce_l_ocekavana.value;
                                        var alergie_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.alergie_p_aktualni.value;
                                        var alergie_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.alergie_p_ocekavana.value;
                                        var alergie_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.alergie_l_aktualni.value;
                                        var alergie_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.alergie_l_ocekavana.value;
                                        var organova_degenerace_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.organova_degenerace_p_aktualni.value;
                                        var organova_degenerace_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.organova_degenerace_p_ocekavana.value;
                                        var organova_degenerace_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.organova_degenerace_l_aktualni.value;
                                        var organova_degenerace_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.organova_degenerace_l_ocekavana.value;
                                        var tri_ohrivace_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.tri_ohrivace_p_aktualni.value;
                                        var tri_ohrivace_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.tri_ohrivace_p_ocekavana.value;
                                        var tri_ohrivace_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.tri_ohrivace_l_aktualni.value;
                                        var tri_ohrivace_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.tri_ohrivace_l_ocekavana.value;
                                        var srdce_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.srdce_p_aktualni.value;
                                        var srdce_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.srdce_p_ocekavana.value;
                                        var srdce_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.srdce_l_aktualni.value;
                                        var srdce_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.srdce_l_ocekavana.value;
                                        var tenke_strevo_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.tenke_strevo_p_aktualni.value;
                                        var tenke_strevo_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.tenke_strevo_p_ocekavana.value;
                                        var tenke_strevo_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.tenke_strevo_l_aktualni.value;
                                        var tenke_strevo_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.tenke_strevo_l_ocekavana.value;
                                        var slinivka_slezina_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.slinivka_slezina_p_aktualni.value;
                                        var slinivka_slezina_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.slinivka_slezina_p_ocekavana.value;
                                        var slinivka_slezina_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.slinivka_slezina_l_aktualni.value;
                                        var slinivka_slezina_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.slinivka_slezina_l_ocekavana.value;
                                        var jatra_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.jatra_p_aktualni.value;
                                        var jatra_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.jatra_p_ocekavana.value;
                                        var jatra_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.jatra_l_aktualni.value;
                                        var jatra_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.jatra_l_ocekavana.value;
                                        var kloubni_degenerace_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.kloubni_degenerace_p_aktualni.value;
                                        var kloubni_degenerace_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.kloubni_degenerace_p_ocekavana.value;
                                        var kloubni_degenerace_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.kloubni_degenerace_l_aktualni.value;
                                        var kloubni_degenerace_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.kloubni_degenerace_l_ocekavana.value;
                                        var zaludek_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.zaludek_p_aktualni.value;
                                        var zaludek_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.zaludek_p_ocekavana.value;
                                        var zaludek_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.zaludek_l_aktualni.value;
                                        var zaludek_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.zaludek_l_ocekavana.value;
                                        var vazivova_degenerace_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.vazivova_degenerace_p_aktualni.value;
                                        var vazivova_degenerace_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.vazivova_degenerace_p_ocekavana.value;                
                                        var vazivova_degenerace_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.vazivova_degenerace_l_aktualni.value;
                                        var vazivova_degenerace_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.vazivova_degenerace_l_ocekavana.value;
                                        var kuze_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.kuze_p_aktualni.value;
                                        var kuze_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.kuze_p_ocekavana.value;
                                        var kuze_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.kuze_l_aktualni.value;
                                        var kuze_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.kuze_l_ocekavana.value;
                                        var tukova_degenerace_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.tukova_degenerace_p_aktualni.value;
                                        var tukova_degenerace_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.tukova_degenerace_p_ocekavana.value;
                                        var tukova_degenerace_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.tukova_degenerace_l_aktualni.value;
                                        var tukova_degenerace_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.tukova_degenerace_l_ocekavana.value;
                                        var zlucnik_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.zlucnik_p_aktualni.value;
                                        var zlucnik_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.zlucnik_p_ocekavana.value;
                                        var zlucnik_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.zlucnik_l_aktualni.value;
                                        var zlucnik_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.zlucnik_l_ocekavana.value;
                                        var ledviny_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.ledviny_p_aktualni.value;
                                        var ledviny_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.ledviny_p_ocekavana.value;
                                        var ledviny_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.ledviny_l_aktualni.value;
                                        var ledviny_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.ledviny_l_ocekavana.value;
                                        var mocovy_mechyr_p_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.mocovy_mechyr_p_aktualni.value;
                                        var mocovy_mechyr_p_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.mocovy_mechyr_p_ocekavana.value;
                                        var mocovy_mechyr_l_aktualni = document.diagnostika_eav_<?echo $uzivatel_id; ?>.mocovy_mechyr_l_aktualni.value;
                                        var mocovy_mechyr_l_ocekavana = document.diagnostika_eav_<?echo $uzivatel_id; ?>.mocovy_mechyr_l_ocekavana.value;

                                if(!celkova_hodnota || !v_jakych_rodinnych_pomerech_zijete || !reakce_na_pocasi || reakce_na_mesicni_cyklus == 0 || casta_zizen == 0 || preference_napoju == 0 || chut_k_jidlu == 0 || spanek == 0 || !v_jakou_hodinu_nemuzete_spat || strachy_v_zivote == 0) {  
                                                        alert("Musíte vyplmit všechna povinná pole označená *"); 

                                                        }else{




                                        let dataEav_plan = "uzivatel_id=<?echo $uzivatel_id; ?>";
                                        dataEav_plan = dataEav_plan + "&prihlaseny_uzivatel="+prihlaseny_uzivatel;
                                        dataEav_plan = dataEav_plan + "&celkova_hodnota="+celkova_hodnota;
                                        dataEav_plan = dataEav_plan + "&v_jakych_rodinnych_pomerech_zijete="+v_jakych_rodinnych_pomerech_zijete;
                                        dataEav_plan = dataEav_plan + "&reakce_na_pocasi="+reakce_na_pocasi;
                                        dataEav_plan = dataEav_plan + "&reakce_na_mesicni_cyklus="+reakce_na_mesicni_cyklus;
                                        dataEav_plan = dataEav_plan + "&reakce_na_mesicni_cyklus_text="+reakce_na_mesicni_cyklus_text;
                                        dataEav_plan = dataEav_plan + "&casta_zizen="+casta_zizen;
                                        dataEav_plan = dataEav_plan + "&preference_napoju="+preference_napoju;
                                        dataEav_plan = dataEav_plan + "&druh_napoju="+druh_napoju;
                                        dataEav_plan = dataEav_plan + "&chut_k_jidlu="+chut_k_jidlu;
                                        dataEav_plan = dataEav_plan + "&hlad_v_koli_hodin="+hlad_v_koli_hodin;
                                        dataEav_plan = dataEav_plan + "&oblibene_jidlo="+oblibene_jidlo;
                                        dataEav_plan = dataEav_plan + "&neoblibene_jidlo="+neoblibene_jidlo;
                                        dataEav_plan = dataEav_plan + "&sladke="+sladke;
                                        dataEav_plan = dataEav_plan + "&soleni="+soleni;
                                        dataEav_plan = dataEav_plan + "&koreneni="+koreneni;
                                        dataEav_plan = dataEav_plan + "&problemy_po_oblibenem_jidle="+problemy_po_oblibenem_jidle;
                                        dataEav_plan = dataEav_plan + "&problemy_po_oblibenem_jidle_text="+problemy_po_oblibenem_jidle_text;
                                        dataEav_plan = dataEav_plan + "&problemy_po_jidle_obecne="+problemy_po_jidle_obecne;
                                        dataEav_plan = dataEav_plan + "&problemy_po_jidle_obecne_text="+problemy_po_jidle_obecne_text;
                                        dataEav_plan = dataEav_plan + "&spanek="+spanek;
                                        dataEav_plan = dataEav_plan + "&poloha_ve_spanku="+poloha_ve_spanku;
                                        dataEav_plan = dataEav_plan + "&v_jakou_hodinu_nemuzete_spat="+v_jakou_hodinu_nemuzete_spat;
                                        dataEav_plan = dataEav_plan + "&vraceji_se_nektere_sny="+vraceji_se_nektere_sny;
                                        dataEav_plan = dataEav_plan + "&popis_snu="+popis_snu;
                                        dataEav_plan = dataEav_plan + "&strachy_v_zivote="+strachy_v_zivote;
                                        dataEav_plan = dataEav_plan + "&bourka="+bourka;
                                        dataEav_plan = dataEav_plan + "&vyska="+vyska;
                                        dataEav_plan = dataEav_plan + "&zkouska="+zkouska;
                                        dataEav_plan = dataEav_plan + "&voda="+voda;
                                        dataEav_plan = dataEav_plan + "&nemoc="+nemoc;
                                        dataEav_plan = dataEav_plan + "&zvire="+zvire;
                                        dataEav_plan = dataEav_plan + "&cestovani="+cestovani;
                                        dataEav_plan = dataEav_plan + "&dopravni_prostredek="+dopravni_prostredek;
                                        dataEav_plan = dataEav_plan + "&zlodej="+zlodej;
                                        dataEav_plan = dataEav_plan + "&smrt="+smrt;
                                        dataEav_plan = dataEav_plan + "&jine="+jine;
                                        dataEav_plan = dataEav_plan + "&popis_strachu="+popis_strachu;
                                        dataEav_plan = dataEav_plan + "&poznamka_text="+poznamka_text;
                                        dataEav_plan = dataEav_plan + "&lymmfa_p_aktualni="+lymmfa_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&lymmfa_p_ocekavana="+lymmfa_p_ocekavana;
                                        dataEav_plan = dataEav_plan + "&lymmfa_l_aktualni="+lymmfa_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&lymmfa_l_ocekavana="+lymmfa_l_ocekavana;
                                        dataEav_plan = dataEav_plan + "&plice_p_aktualni="+plice_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&plice_p_ocekavana="+plice_p_ocekavana;
                                        dataEav_plan = dataEav_plan + "&plice_l_aktualni="+plice_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&plice_l_ocekavana="+plice_l_ocekavana;
                                        dataEav_plan = dataEav_plan + "&tluste_strevo_p_aktualni="+tluste_strevo_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&tluste_strevo_p_ocekavana="+tluste_strevo_p_ocekavana;
                                        dataEav_plan = dataEav_plan + "&tluste_strevo_l_aktualni="+tluste_strevo_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&tluste_strevo_l_ocekavana="+tluste_strevo_l_ocekavana;
                                        dataEav_plan = dataEav_plan + "&nervova_degenerace_p_aktualni="+nervova_degenerace_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&nervova_degenerace_p_ocekavana="+nervova_degenerace_p_ocekavana;
                                        dataEav_plan = dataEav_plan + "&nervova_degenerace_l_aktualni="+nervova_degenerace_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&nervova_degenerace_l_ocekavana="+nervova_degenerace_l_ocekavana;
                                        dataEav_plan = dataEav_plan + "&obal_srdce_p_aktualni="+obal_srdce_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&obal_srdce_p_ocekavana="+obal_srdce_p_ocekavana;
                                        dataEav_plan = dataEav_plan + "&obal_srdce_l_aktualni="+obal_srdce_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&obal_srdce_l_ocekavana="+obal_srdce_l_ocekavana;
                                        dataEav_plan = dataEav_plan + "&alergie_p_aktualni="+alergie_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&alergie_p_ocekavana="+alergie_p_ocekavana;
                                        dataEav_plan = dataEav_plan + "&alergie_l_aktualni="+alergie_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&alergie_l_ocekavana="+alergie_l_ocekavana;
                                        dataEav_plan = dataEav_plan + "&organova_degenerace_p_aktualni="+organova_degenerace_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&organova_degenerace_p_ocekavana="+organova_degenerace_p_ocekavana;                   
                                        dataEav_plan = dataEav_plan + "&organova_degenerace_l_aktualni="+organova_degenerace_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&organova_degenerace_l_ocekavana="+organova_degenerace_l_ocekavana;
                                        dataEav_plan = dataEav_plan + "&tri_ohrivace_p_aktualni="+tri_ohrivace_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&tri_ohrivace_p_ocekavana="+tri_ohrivace_p_ocekavana;
                                        dataEav_plan = dataEav_plan + "&tri_ohrivace_l_aktualni="+tri_ohrivace_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&tri_ohrivace_l_ocekavana="+tri_ohrivace_l_ocekavana;
                                        dataEav_plan = dataEav_plan + "&srdce_p_aktualni="+srdce_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&srdce_p_ocekavana="+srdce_p_ocekavana;
                                        dataEav_plan = dataEav_plan + "&srdce_l_aktualni="+srdce_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&srdce_l_ocekavana="+srdce_l_ocekavana;
                                        dataEav_plan = dataEav_plan + "&tenke_strevo_p_aktualni="+tenke_strevo_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&tenke_strevo_p_ocekavana="+tenke_strevo_p_ocekavana;
                                        dataEav_plan = dataEav_plan + "&tenke_strevo_l_aktualni="+tenke_strevo_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&tenke_strevo_l_ocekavana="+tenke_strevo_l_ocekavana;
                                        dataEav_plan = dataEav_plan + "&slinivka_slezina_p_ocekavana="+slinivka_slezina_p_ocekavana;
                                        dataEav_plan = dataEav_plan + "&slinivka_slezina_p_aktualni="+slinivka_slezina_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&slinivka_slezina_l_ocekavana="+slinivka_slezina_l_ocekavana;
                                        dataEav_plan = dataEav_plan + "&slinivka_slezina_l_aktualni="+slinivka_slezina_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&jatra_p_aktualni="+jatra_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&jatra_p_ocekavana="+jatra_p_ocekavana;
                                        dataEav_plan = dataEav_plan + "&jatra_l_aktualni="+jatra_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&jatra_l_ocekavana="+jatra_l_ocekavana;
                                        dataEav_plan = dataEav_plan + "&kloubni_degenerace_p_aktualni="+kloubni_degenerace_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&kloubni_degenerace_p_ocekavana="+kloubni_degenerace_p_ocekavana;
                                        dataEav_plan = dataEav_plan + "&kloubni_degenerace_l_aktualni="+kloubni_degenerace_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&kloubni_degenerace_l_ocekavana="+kloubni_degenerace_l_ocekavana;
                                        dataEav_plan = dataEav_plan + "&zaludek_p_aktualni="+zaludek_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&zaludek_p_ocekavana="+zaludek_p_ocekavana;
                                        dataEav_plan = dataEav_plan + "&zaludek_l_aktualni="+zaludek_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&zaludek_l_ocekavana="+zaludek_l_ocekavana;
                                        dataEav_plan = dataEav_plan + "&vazivova_degenerace_p_aktualni="+vazivova_degenerace_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&vazivova_degenerace_p_ocekavana="+vazivova_degenerace_p_ocekavana;
                                        dataEav_plan = dataEav_plan + "&vazivova_degenerace_l_aktualni="+vazivova_degenerace_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&vazivova_degenerace_l_ocekavana="+vazivova_degenerace_l_ocekavana;
                                        dataEav_plan = dataEav_plan + "&kuze_p_aktualni="+kuze_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&kuze_p_ocekavana="+kuze_p_ocekavana;                   
                                        dataEav_plan = dataEav_plan + "&kuze_l_aktualni="+kuze_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&kuze_l_ocekavana="+kuze_l_ocekavana;                    
                                        dataEav_plan = dataEav_plan + "&tukova_degenerace_p_aktualni="+tukova_degenerace_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&tukova_degenerace_p_ocekavana="+tukova_degenerace_p_ocekavana;                     
                                        dataEav_plan = dataEav_plan + "&tukova_degenerace_l_aktualni="+tukova_degenerace_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&tukova_degenerace_l_ocekavana="+tukova_degenerace_l_ocekavana;
                                        dataEav_plan = dataEav_plan + "&zlucnik_p_aktualni="+zlucnik_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&zlucnik_p_ocekavana="+zlucnik_p_ocekavana;  
                                        dataEav_plan = dataEav_plan + "&zlucnik_l_aktualni="+zlucnik_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&zlucnik_l_ocekavana="+zlucnik_l_ocekavana;
                                        dataEav_plan = dataEav_plan + "&ledviny_p_aktualni="+ledviny_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&ledviny_p_ocekavana="+ledviny_p_ocekavana;  
                                        dataEav_plan = dataEav_plan + "&ledviny_l_aktualni="+ledviny_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&ledviny_l_ocekavana="+ledviny_l_ocekavana;
                                        dataEav_plan = dataEav_plan + "&mocovy_mechyr_p_aktualni="+mocovy_mechyr_p_aktualni;
                                        dataEav_plan = dataEav_plan + "&mocovy_mechyr_p_ocekavana="+mocovy_mechyr_p_ocekavana;                    
                                        dataEav_plan = dataEav_plan + "&mocovy_mechyr_l_aktualni="+mocovy_mechyr_l_aktualni;
                                        dataEav_plan = dataEav_plan + "&mocovy_mechyr_l_ocekavana="+mocovy_mechyr_l_ocekavana;   

                                        xhttp.open("POST", "./script/eav_plan_insert.php", true);
                                        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                        xhttp.send(dataEav_plan);
                                        alert("Uložení:\nAktualizovaný záznam plánované procedury byl uložen.");

                                                }        
                                
                        }
                                </script> 











<br>

                                                        <?
                                                require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                                                $sql_eav_plan = "SELECT * FROM eav_plan WHERE uzivatel_id = $uzivatel_id_form ORDER BY eav_plan_id DESC";
                                                $result_eav_plan = $conn->query($sql_eav_plan);

                                                while($radek_eav_plan = $result_eav_plan->fetch_assoc()) {                                           
                                                       $eav_plan_id  = $radek_eav_plan["eav_plan_id"];
                                                        $celkova_hodnota = $radek_eav_plan["celkova_hodnota"];
                                                        $v_jakych_rodinnych_pomerech_zijete = $radek_eav_plan["v_jakych_rodinnych_pomerech_zijete"];
                                                        $reakce_na_pocasi = $radek_eav_plan["reakce_na_pocasi"];
                                                        $reakce_na_mesicni_cyklus_text = $radek_eav_plan["reakce_na_mesicni_cyklus_text"];
                                                        $reakce_na_mesicni_cyklus = $radek_eav_plan["reakce_na_mesicni_cyklus"];
                                                        $casta_zizen = $radek_eav_plan["casta_zizen"];
                                                        $preference_napoju = $radek_eav_plan["preference_napoju"];
                                                        $druh_napoju = $radek_eav_plan["druh_napoju"];
                                                        $chut_k_jidlu = $radek_eav_plan["chut_k_jidlu"]; 
                                                        $hlad_v_koli_hodin = $radek_eav_plan["hlad_v_koli_hodin"];
                                                        $oblibene_jidlo = $radek_eav_plan["oblibene_jidlo"];
                                                        $neoblibene_jidlo = $radek_eav_plan["neoblibene_jidlo"];
                                                        $sladke = $radek_eav_plan["sladke"];
                                                        $soleni = $radek_eav_plan["soleni"];
                                                        $koreneni = $radek_eav_plan["koreneni"]; 
                                                        $problemy_po_oblibenem_jidle = $radek_eav_plan["problemy_po_oblibenem_jidle"]; 
                                                        $problemy_po_oblibenem_jidle_text = $radek_eav_plan["problemy_po_oblibenem_jidle_text"]; 
                                                        $problemy_po_jidle_obecne = $radek_eav_plan["problemy_po_jidle_obecne"];
                                                        $problemy_po_jidle_obecne_text = $radek_eav_plan["problemy_po_jidle_obecne_text"];
                                                        $spanek =  $radek_eav_plan["spanek"];   
                                                        $poloha_ve_spanku = $radek_eav_plan["poloha_ve_spanku"];  
                                                        $v_jakou_hodinu_nemuzete_spat = $radek_eav_plan["v_jakou_hodinu_nemuzete_spat"]; 
                                                        $vraceji_se_nektere_sny = $radek_eav_plan["vraceji_se_nektere_sny"]; 
                                                        $popis_snu = $radek_eav_plan["popis_snu"];
                                                        $strachy_v_zivote = $radek_eav_plan["strachy_v_zivote"]; 
                                                        $bourka = $radek_eav_plan["bourka"]; 
                                                        $vyska = $radek_eav_plan["vyska"];
                                                        $zkouska = $radek_eav_plan["zkouska"];
                                                        $voda = $radek_eav_plan["voda"];
                                                        $nemoc = $radek_eav_plan["nemoc"];
                                                        $zvire = $radek_eav_plan["zvire"];
                                                        $cestovani = $radek_eav_plan["cestovani"];
                                                        $dopravni_prostredek = $radek_eav_plan["dopravni_prostredek"];
                                                        $zlodej = $radek_eav_plan["zlodej"];
                                                        $smrt = $radek_eav_plan["smrt"];
                                                        $jine = $radek_eav_plan["jine"];
                                                        $popis_strachu = $radek_eav_plan["popis_strachu"];
                                                        $poznamka_text =  $radek_eav_plan["poznamka_text"];
                                                        $lymmfa_p_aktualni = $radek_eav_plan["lymmfa_p_aktualni"];
                                                        $lymmfa_p_ocekavana = $radek_eav_plan["lymmfa_p_ocekavana"];
                                                        $lymmfa_l_aktualni = $radek_eav_plan["lymmfa_l_aktualni"];
                                                        $lymmfa_l_ocekavana = $radek_eav_plan["lymmfa_l_ocekavana"];
                                                        $plice_p_aktualni = $radek_eav_plan["plice_p_aktualni"];
                                                        $plice_p_ocekavana = $radek_eav_plan["plice_p_ocekavana"];
                                                        $plice_l_aktualni = $radek_eav_plan["plice_l_aktualni"];
                                                        $plice_l_ocekavana = $radek_eav_plan["plice_l_ocekavana"];
                                                        $tluste_strevo_p_aktualni = $radek_eav_plan["tluste_strevo_p_aktualni"];
                                                        $tluste_strevo_p_ocekavana = $radek_eav_plan["tluste_strevo_p_ocekavana"];
                                                        $tluste_strevo_l_aktualni = $radek_eav_plan["tluste_strevo_l_aktualni"];
                                                        $tluste_strevo_l_ocekavana = $radek_eav_plan["tluste_strevo_l_ocekavana"];
                                                        $nervova_degenerace_p_aktualni = $radek_eav_plan["nervova_degenerace_p_aktualni"];
                                                        $nervova_degenerace_p_ocekavana = $radek_eav_plan["nervova_degenerace_p_ocekavana"];
                                                        $nervova_degenerace_l_aktualni = $radek_eav_plan["nervova_degenerace_l_aktualni"];
                                                        $nervova_degenerace_l_ocekavana = $radek_eav_plan["nervova_degenerace_l_ocekavana"];
                                                        $obal_srdce_p_aktualni = $radek_eav_plan["obal_srdce_p_aktualni"];
                                                        $obal_srdce_p_ocekavana = $radek_eav_plan["obal_srdce_p_ocekavana"]; 
                                                        $obal_srdce_l_aktualni = $radek_eav_plan["obal_srdce_l_aktualni"];
                                                        $obal_srdce_l_ocekavana = $radek_eav_plan["obal_srdce_l_ocekavana"]; 
                                                        $alergie_p_aktualni = $radek_eav_plan["alergie_p_aktualni"]; 
                                                        $alergie_p_ocekavana = $radek_eav_plan["alergie_p_ocekavana"]; 
                                                        $alergie_l_aktualni = $radek_eav_plan["alergie_l_aktualni"]; 
                                                        $alergie_l_ocekavana = $radek_eav_plan["alergie_l_ocekavana"];
                                                        $organova_degenerace_p_aktualni = $radek_eav_plan["organova_degenerace_p_aktualni"];
                                                        $organova_degenerace_p_ocekavana = $radek_eav_plan["organova_degenerace_p_ocekavana"];
                                                        $organova_degenerace_l_aktualni = $radek_eav_plan["organova_degenerace_l_aktualni"];
                                                        $organova_degenerace_l_ocekavana = $radek_eav_plan["organova_degenerace_l_ocekavana"];
                                                        $tri_ohrivace_p_aktualni = $radek_eav_plan["tri_ohrivace_p_aktualni"];
                                                        $tri_ohrivace_p_ocekavana = $radek_eav_plan["tri_ohrivace_p_ocekavana"];
                                                        $tri_ohrivace_l_aktualni = $radek_eav_plan["tri_ohrivace_l_aktualni"];
                                                        $tri_ohrivace_l_ocekavana = $radek_eav_plan["tri_ohrivace_l_ocekavana"];
                                                        $srdce_p_aktualni = $radek_eav_plan["srdce_p_aktualni"];
                                                        $srdce_p_ocekavana = $radek_eav_plan["srdce_p_ocekavana"];
                                                        $srdce_l_aktualni = $radek_eav_plan["srdce_l_aktualni"];
                                                        $srdce_l_ocekavana = $radek_eav_plan["srdce_l_ocekavana"];
                                                        $tenke_strevo_p_aktualni = $radek_eav_plan["tenke_strevo_p_aktualni"];
                                                        $tenke_strevo_p_ocekavana = $radek_eav_plan["tenke_strevo_p_ocekavana"];
                                                        $tenke_strevo_l_aktualni = $radek_eav_plan["tenke_strevo_l_aktualni"];
                                                        $tenke_strevo_l_ocekavana = $radek_eav_plan["tenke_strevo_l_ocekavana"];
                                                        $slinivka_slezina_p_aktualni = $radek_eav_plan["slinivka_slezina_p_aktualni"];
                                                        $slinivka_slezina_p_ocekavana = $radek_eav_plan["slinivka_slezina_p_ocekavana"];
                                                        $slinivka_slezina_l_aktualni = $radek_eav_plan["slinivka_slezina_l_aktualni"];
                                                        $slinivka_slezina_l_ocekavana = $radek_eav_plan["slinivka_slezina_l_ocekavana"];
                                                        $jatra_p_aktualni = $radek_eav_plan["jatra_p_aktualni"];
                                                        $jatra_p_ocekavana = $radek_eav_plan["jatra_p_ocekavana"];
                                                        $jatra_l_aktualni = $radek_eav_plan["jatra_l_aktualni"];
                                                        $jatra_l_ocekavana = $radek_eav_plan["jatra_l_ocekavana"];
                                                        $kloubni_degenerace_p_aktualni = $radek_eav_plan["kloubni_degenerace_p_aktualni"];
                                                        $kloubni_degenerace_p_ocekavana = $radek_eav_plan["kloubni_degenerace_p_ocekavana"];
                                                        $kloubni_degenerace_l_aktualni = $radek_eav_plan["kloubni_degenerace_l_aktualni"];
                                                        $kloubni_degenerace_l_ocekavana = $radek_eav_plan["kloubni_degenerace_l_ocekavana"];
                                                        $zaludek_p_aktualni = $radek_eav_plan["zaludek_p_aktualni"];
                                                        $zaludek_p_ocekavana = $radek_eav_plan["zaludek_p_ocekavana"];
                                                        $zaludek_l_aktualni = $radek_eav_plan["zaludek_l_aktualni"];
                                                        $zaludek_l_ocekavana = $radek_eav_plan["zaludek_l_ocekavana"];
                                                        $vazivova_degenerace_p_aktualni = $radek_eav_plan["vazivova_degenerace_p_aktualni"];
                                                        $vazivova_degenerace_p_ocekavana = $radek_eav_plan["vazivova_degenerace_p_ocekavana"];
                                                        $vazivova_degenerace_l_aktualni = $radek_eav_plan["vazivova_degenerace_l_aktualni"];
                                                        $vazivova_degenerace_l_ocekavana = $radek_eav_plan["vazivova_degenerace_l_ocekavana"];
                                                        $kuze_p_aktualni = $radek_eav_plan["kuze_p_aktualni"];
                                                        $kuze_p_ocekavana = $radek_eav_plan["kuze_p_ocekavana"];
                                                        $kuze_l_aktualni = $radek_eav_plan["kuze_l_aktualni"];
                                                        $kuze_l_ocekavana = $radek_eav_plan["kuze_l_ocekavana"];
                                                        $tukova_degenerace_p_aktualni = $radek_eav_plan["tukova_degenerace_p_aktualni"];
                                                        $tukova_degenerace_p_ocekavana = $radek_eav_plan["tukova_degenerace_p_ocekavana"];
                                                        $tukova_degenerace_l_aktualni = $radek_eav_plan["tukova_degenerace_l_aktualni"];
                                                        $tukova_degenerace_l_ocekavana = $radek_eav_plan["tukova_degenerace_l_ocekavana"];
                                                        $zlucnik_p_aktualni = $radek_eav_plan["zlucnik_p_aktualni"];
                                                        $zlucnik_p_ocekavana = $radek_eav_plan["zlucnik_p_ocekavana"];
                                                        $zlucnik_l_aktualni = $radek_eav_plan["zlucnik_l_aktualni"];
                                                        $zlucnik_l_ocekavana = $radek_eav_plan["zlucnik_l_ocekavana"];
                                                        $ledviny_p_aktualni = $radek_eav_plan["ledviny_p_aktualni"];
                                                        $ledviny_p_ocekavana = $radek_eav_plan["ledviny_p_ocekavana"];
                                                        $ledviny_l_aktualni = $radek_eav_plan["ledviny_l_aktualni"];
                                                        $ledviny_l_ocekavana = $radek_eav_plan["ledviny_l_ocekavana"];
                                                        $mocovy_mechyr_p_aktualni = $radek_eav_plan["mocovy_mechyr_p_aktualni"];
                                                        $mocovy_mechyr_p_ocekavana = $radek_eav_plan["mocovy_mechyr_p_ocekavana"];
                                                        $mocovy_mechyr_l_aktualni = $radek_eav_plan["mocovy_mechyr_l_aktualni"];
                                                        $mocovy_mechyr_l_ocekavana = $radek_eav_plan["mocovy_mechyr_l_ocekavana"];
                                                        $prihlaseny_uzivatel = $radek_eav_plan["prihlaseny_uzivatel"];
                                                        $datum = $radek_eav_plan["datum"];


                                                ?>





                <div class="row" style="border-style: double;">
                                        <div class="row">
                                                                                <div class="col-sm-12">  
                                                                                                                        <br>   


                                                                                                                        <div class="col-sm-3"> 
                                                                                                                        <b>Datum: <?echo $datum;?></b> 
                                                                                                                        </div>                    
                                                                                                                        <div class="col-sm-3"> 
                                                                                                                        <b>Celková hodnota: <?echo $celkova_hodnota;?></b> 
                                                                                                                        </div>                                                                                 
                                                                                                                        <div class="col-sm-3"> 
                                                                                                                        <b>Uživatel: <?echo $prihlaseny_uzivatel;?></b> 
                                                                                                                        </div>

                                                                                                <script type="text/javascript" language="JavaScript">
                                                                                                function HideContent(d) {
                                                                                                document.getElementById(d).style.display = "none";
                                                                                                }
                                                                                                function ShowContent(d) {
                                                                                                document.getElementById(d).style.display = "block";
                                                                                                }
                                                                                                function ReverseDisplay(d) {
                                                                                                if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }
                                                                                                else { document.getElementById(d).style.display = "none"; }
                                                                                                }
                                                                                                </script>

                                                                                
                                                                                                        <div class="col-sm-3"> 
                                                                                                                        <a href="javascript:ReverseDisplay('uniquename_EAV<? echo $eav_plan_id ;?>')">
                                                                                                                        <button type="button" class="btn btn-default btn-sm" >
                                                                                                                        <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Podrobnosti</button>
                                                                                                                        </a><br><br>
                                                                                                        </div>
                                                                                        </div>
                                        </div>

        </div>




<div id="uniquename_EAV<? echo $eav_plan_id ; ?>" style="display:none;">

                                        <div class="row">
                                                                <div class="col-sm-12" style="background-color:#DBDBDB;"> 
                                                                        <div class="col-sm-6">
                                                                                <br>
                                                                                <label for="uzivatel">* Celková hodnota:</label>
                                                                                <input type="text" class="form-control form-control-sm" id="celkova_hodnota" value = "<? echo $celkova_hodnota;?>" name="celkova_hodnota" maxlength="5" placeholder="Celková hodnota" readonly>
                                                                        </div>                                                                      

                                                                </div>

                                        </div>
                                        
                                        <div class="row">
                        
                                                        <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                                        <div class="col-sm-6">
                                                                        <br>
                                                                        <label for="uzivatel">* V jakých rodinných poměrech žijete:</label>
                                                                        <input type="text" class="form-control form-control-sm" id="v_jakych_rodinnych_pomerech_zijete" value = "<? echo $v_jakych_rodinnych_pomerech_zijete; ?>" name="v_jakych_rodinnych_pomerech_zijete" maxlength="100" placeholder="V jakých rodinných poměrech žijete?" readonly>
                                                                        </div>  

                                                                        <div class="col-sm-6">
                                                                        <br>
                                                                        <label for="uzivatel">* Reakce na počasí:</label>
                                                                        <input type="text" class="form-control form-control-sm" id="reakce_na_pocasi" value = "<? echo $reakce_na_pocasi; ?>" name="reakce_na_pocasi" maxlength="100" placeholder="chladné, vlhké, horké, suché, mlha, bouřka, změny, sníh, vítr" readonly>
                                                                        </div>
                                                        </div>
                                        </div>



                                        <div class="row">

                                                <div class="col-sm-12" style="background-color:#DBDBDB;">             
                                                        <div class="col-sm-3">
                                                        <br>
                                                        <label for="uzivatel">* Reakce na měsíční cyklus:</label> 
                                                        <select class="form-control" id="reakce_na mesicni_cyklus" name="reakce_na_mesicni_cyklus" disabled>
                                                        
                                                        <? if ($reakce_na_mesicni_cyklus == 1){  ?>                                                      
                                                        <option value="0"> Vyberte možnost</option>
                                                        <option value="1" selected>Ano</option>
                                                        <option value="2">Ne</option>
                                                        
                                                        <?  }else if ($reakce_na_mesicni_cyklus == 2){ ?>
                                                        <option value="0"> Vyberte možnost</option>
                                                        <option value="1">Ano</option>
                                                        <option value="2" selected>Ne</option>

                                                            <? }else{ ?>
                                                
                                                        <option value="0" selected> Vyberte možnost</option>
                                                        <option value="1">Ano</option>
                                                        <option value="2">Ne</option>
                                                                <?
                                                                }
                                                                ?>
                                                        </select>
                                                        </div>   
                                                




                                                        <div class="col-sm-4">
                                                        <br>
                                                        <label for="uzivatel">Doplňte fázi měsíce:</label>
                                                        <input type="text" class="form-control form-control-sm" id="reakce_na_mesicni_cyklus_text" value = "<? echo $reakce_na_mesicni_cyklus_text ?>" name="reakce_na_mesicni_cyklus_text" maxlength="100" placeholder="nov, přibývání, ubývání" readonly>        
                                                        </div>    

                                                        <div class="col-sm-3">
                                                        <br>
                                                        <label for="uzivatel">* Částá žízeň:</label>
                                                        <select class="form-control" id="casta_zizen" name="casta_zizen" disabled>
                                                
                                                  <? if ($casta_zizen == 1){  ?> 
                                                        <option value="0"> Vyberte možnost</option>
                                                        <option value="1" selected>Ano</option>
                                                        <option value="2">Ne</option>
                                                        
                                                 <?  }else if ($casta_zizen == 2){ ?>
                                                        <option value="0"> Vyberte možnost</option>
                                                        <option value="1">Ano</option>
                                                        <option value="2" selected>Ne</option>    
                                                        
                                                 <? }else{ ?>        
                                                        <option value="0" selected> Vyberte možnost</option>
                                                        <option value="1">Ano</option>
                                                        <option value="2">Ne</option>                                                 
                                                                <?
                                                                }
                                                                ?>                                                        
                                                
                                                        </select>   
                                                        </div> 
                                                </div>   
                                        </div>



                                <div class="row">

                                                        <div class="col-sm-12" style="background-color:#DBDBDB;">    
                                                        
                                                                <div class="col-sm-3">
                                                                        <br>
                                                                        <label for="uzivatel">* Preference nápojů:</label>
                                                                        <select class="form-control" id="preference_napoju" name="preference_napoju" disabled>
                                                                        
                                                                        <? if ($preference_napoju == 1){  ?> 
                                                                        <option value="0"> Vyberte možnost</option>
                                                                        <option value="1" selected>teplé</option>
                                                                        <option value="2">studené</option>
                                                 
                                                                        <?  }else if ($preference_napoju == 2){ ?>
                                                                        <option value="0"> Vyberte možnost</option>
                                                                        <option value="1">teplé</option>
                                                                        <option value="2" selected>studené</option>
                                                
                                                                        <? }else{ ?>     
                                                                        <option value="0" selected> Vyberte možnost</option>
                                                                        <option value="1">teplé</option>
                                                                        <option value="2">studené</option>

                                                                                <?
                                                                                }
                                                                                ?> 


                                                                        </select>
                                                                </div>

                                                                <div class="col-sm-4">
                                                                <br>
                                                                <label for="uzivatel">Druh nápojů:</label>
                                                                <input type="text" class="form-control form-control-sm" id="druh_napoju" value = "<? echo $druh_napoju; ?>" name="druh_napoju" maxlength="100" placeholder="Druh nápojů" readonly>        
                                                                </div> 
                                                                
                                                                <div class="col-sm-3">
                                                                        <br>
                                                                        <label for="uzivatel">* Chuť k jídlu:</label>
                                                                        <select class="form-control" id="chut_k_jidlu" name="chut_k_jidlu" disabled>

                                                                        <? if ($chut_k_jidlu == 1){  ?> 
                                                                        <option value="0"> Vyberte možnost</option>
                                                                        <option value="1" selected>Normální</option>
                                                                        <option value="2">Dobrá</option>
                                                                        <option value="3">špatná</option>
                                                                        <option value="4">Odpor</option>
                                                                        <option value="5">Vlčí hlad</option>

                                                                        <?  }else if ($chut_k_jidlu == 2){ ?>                                                                     
                                                                        <option value="0"> Vyberte možnost</option>
                                                                        <option value="1">Normální</option>
                                                                        <option value="2" selected>Dobrá</option>
                                                                        <option value="3">špatná</option>
                                                                        <option value="4">Odpor</option>
                                                                        <option value="5">Vlčí hlad</option>
                                                                        <option value="6">V noci</option>                                                                
                                                                
                                                                         <?  }else if ($chut_k_jidlu == 3){ ?>                                                                     
                                                                        <option value="0"> Vyberte možnost</option>
                                                                        <option value="1">Normální</option>
                                                                        <option value="2">Dobrá</option>
                                                                        <option value="3" selected>špatná</option>
                                                                        <option value="4">Odpor</option>
                                                                        <option value="5">Vlčí hlad</option>
                                                                        <option value="6">V noci</option>                                                                  
                                                                
                                                                         <?  }else if ($chut_k_jidlu == 4){ ?>                                                                     
                                                                        <option value="0"> Vyberte možnost</option>
                                                                        <option value="1">Normální</option>
                                                                        <option value="2">Dobrá</option>
                                                                        <option value="3">špatná</option>
                                                                        <option value="4" selected>Odpor</option>
                                                                        <option value="5">Vlčí hlad</option>
                                                                        <option value="6">V noci</option>      
                                                                        
                                                                         <?  }else if ($chut_k_jidlu == 5){ ?>                                                                     
                                                                        <option value="0"> Vyberte možnost</option>
                                                                        <option value="1">Normální</option>
                                                                        <option value="2">Dobrá</option>
                                                                        <option value="3">špatná</option>
                                                                        <option value="4">Odpor</option>
                                                                        <option value="5" selected>Vlčí hlad</option>
                                                                        <option value="6">V noci</option>

                                                                         <?  }else if ($chut_k_jidlu == 6){ ?>                                                                     
                                                                        <option value="0"> Vyberte možnost</option>
                                                                        <option value="1">Normální</option>
                                                                        <option value="2">Dobrá</option>
                                                                        <option value="3">špatná</option>
                                                                        <option value="4">Odpor</option>
                                                                        <option value="5">Vlčí hlad</option>
                                                                        <option value="6" selected>V noci</option>
                                                                        
                                                                        <? }else{ ?> 
                                                                        <option value="0" selected> Vyberte možnost</option>
                                                                        <option value="1">Normální</option>
                                                                        <option value="2">Dobrá</option>
                                                                        <option value="3">špatná</option>
                                                                        <option value="4">Odpor</option>
                                                                        <option value="5">Vlčí hlad</option>
                                                                        <option value="6">V noci</option>
                                                                                <?
                                                                                }
                                                                                ?>                                                            
                                                                        </select>
                                                                </div>
                                                                <div class="form-group" id="chutkjidluFieldGroupDiv">
                                                                        <div class="col-sm-2">
                                                                        <br>
                                                                        <label for="uzivatel">V kolik hodin:</label>
                                                                        <input type="text" class="form-control form-control-sm" id="hladhodiny" value = "<? echo $hlad_v_koli_hodin?>" name="hlad_v_koli_hodin" maxlength="10" placeholder="Čas" readonly>   
                                                                        </div>
                                                                </div>
                                                        
                                                                <script src="./js/chutkjidlu.js"></script>



                                                        </div>   
                                </div>




                                <div class="row">

                                                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                        <div class="col-sm-3">
                                                                <br>
                                                                <label for="uzivatel">Oblíbené jídlo:</label>
                                                                <input type="text" class="form-control form-control-sm" id="oblibene_jidlo" value = "<? echo $oblibene_jidlo;?>" name="oblibene_jidlo" maxlength="200" placeholder="Oblíbené jídlo" readonly>        
                                                        </div>
                                                        
                                                        <div class="col-sm-3">
                                                                <br>
                                                                <label for="uzivatel">Neoblíbené jídlo:</label>
                                                                <input type="text" class="form-control form-control-sm" id="neoblibene_jidlo" value = "<? echo $neoblibene_jidlo;?>" name="neoblibene_jidlo" maxlength="200" placeholder="Neoblíbené jídlo" readonly>        
                                                        </div> 

                                                        <div class="col-sm-2">
                                                                <br>
                                                                <label for="uzivatel">Sladké</label>
                                                                <select class="form-control" id="sladke" name="sladke" disabled>
                                                                
                                                                <? if ($sladke == 1){  ?> 
                                                                <option value="0"> Vyberte možnost</option>
                                                                <option value="1" selected>Ano</option>
                                                                <option value="2">Ne</option>
                                                                <option value="3">Trochu</option>

                                                                <?  }else if ($sladke == 2){ ?>    
                                                                <option value="0"> Vyberte možnost</option>
                                                                <option value="1">Ano</option>
                                                                <option value="2" selected>Ne</option>
                                                                <option value="3">Trochu</option>

                                                                <?  }else if ($sladke == 3){ ?>    
                                                                <option value="0"> Vyberte možnost</option>
                                                                <option value="1">Ano</option>
                                                                <option value="2">Ne</option>
                                                                <option value="3" selected>Trochu</option>
                                                                        
                                                                <? }else{ ?> 
                                                                <option value="0" selected> Vyberte možnost</option>
                                                                <option value="1">Ano</option>
                                                                <option value="2">Ne</option>
                                                                <option value="3">Trochu</option>                                                                        
                                                                        
                                                                <?
                                                                 }
                                                                ?>    

                                                                </select>
                                                        </div>

                                                        <div class="col-sm-2">
                                                                <br>
                                                                <label for="uzivatel">Solení</label>
                                                                <select class="form-control" id="soleni" name="soleni" disabled>

                                                                <? if ($soleni == 1){  ?>
                                                                <option value="0"> Vyberte možnost</option>
                                                                <option value="1" selected>Hodně</option>
                                                                <option value="2">Málo</option>
                                                                <option value="3">Vůbec ne</option>

                                                                <?  }else if ($soleni == 2){ ?>                                                                    
                                                                <option value="0"> Vyberte možnost</option>
                                                                <option value="1">Hodně</option>
                                                                <option value="2" selected>Málo</option>
                                                                <option value="3">Vůbec ne</option> 

                                                                <?  }else if ($soleni == 3){ ?>                                                                    
                                                                <option value="0"> Vyberte možnost</option>
                                                                <option value="1">Hodně</option>
                                                                <option value="2">Málo</option>
                                                                <option value="3" selected>Vůbec ne</option>     

                                                                <? }else{ ?>                                                         
                                                                <option value="0" selected> Vyberte možnost</option>
                                                                <option value="1">Hodně</option>
                                                                <option value="2">Málo</option>
                                                                <option value="3">Vůbec ne</option>                                                         
                                                                <?
                                                                 }
                                                                ?>                                                       
                                                                                                                
                                                                </select>
                                                        </div>

                                                        <div class="col-sm-2">
                                                                <br>
                                                                <label for="uzivatel">Kořenění</label>
                                                                <select class="form-control" id="koreneni" name="koreneni" disabled>

                                                                <? if ($koreneni == 1){  ?>
                                                                <option value="0"> Vyberte možnost</option>
                                                                <option value="1" selected>Hodně</option>
                                                                <option value="2">Málo</option>
                                                                <option value="3">Vůbec ne</option>

                                                                <?  }else if ($koreneni == 2){ ?>                                                                    
                                                                <option value="0"> Vyberte možnost</option>
                                                                <option value="1">Hodně</option>
                                                                <option value="2" selected>Málo</option>
                                                                <option value="3">Vůbec ne</option> 

                                                                <?  }else if ($koreneni == 3){ ?>                                                                    
                                                                <option value="0"> Vyberte možnost</option>
                                                                <option value="1">Hodně</option>
                                                                <option value="2">Málo</option>
                                                                <option value="3" selected>Vůbec ne</option>     

                                                                <? }else{ ?>                                                         
                                                                <option value="0" selected> Vyberte možnost</option>
                                                                <option value="1">Hodně</option>
                                                                <option value="2">Málo</option>
                                                                <option value="3">Vůbec ne</option>                                                         
                                                                <?
                                                                 }
                                                                ?>  

                                                                </select>
                                                        </div>
                                                
                                
                                                </div>


                                </div>





                                <div class="row">

                                                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                
                                                        <div class="col-sm-3">
                                                                <br>
                                                                <label for="uzivatel">Problémy po oblíbeném jídle:</label>
                                                                <select class="form-control" id="problemy_po_oblibenem_jidle" name="problemy_po_oblibenem_jidle" disabled>

                                                                <? if ($problemy_po_oblibenem_jidle == 1){  ?>
                                                                <option value="0"> Vyberte možnost</option>
                                                                <option value="1" selected>Ano</option>
                                                                <option value="2">Ne</option>
                                                                
                                                                <?  }else if ($problemy_po_oblibenem_jidle == 2){ ?>  
                                                                <option value="0"> Vyberte možnost</option>
                                                                <option value="1">Ano</option>
                                                                <option value="2" selected>Ne</option>

                                                                 <? }else{ ?>    
                                                                <option value="0" selected> Vyberte možnost</option>
                                                                <option value="1">Ano</option>
                                                                <option value="2">Ne</option>                                                                        
                                                                 <?
                                                                 }
                                                                ?>                                                         
                                                        
                                                                </select>
                                                        </div>  

                                                        <div class="form-group" id="oblibenejidlo">
                                                                        <div class="col-sm-9">
                                                                                <br>
                                                                                <? if ($problemy_po_oblibenem_jidle == 1){  ?>
                                                                                <label for="uzivatel">Popis problémů:</label>
                                                                                <input type="text" class="form-control form-control-sm" id="problemy_po_oblibenem_jidle_text" value = "<? echo $problemy_po_oblibenem_jidle_text;?>" name="problemy_po_oblibenem_jidle_text" maxlength="200" placeholder="Popis problémů po oblíbeném jídle" readonly >  
                                                                                
                                                                                 <? }else{ ?>        
                                                                               <?
                                                                                 }
                                                                                ?> 
                                                                        </div>                                              
                                                        </div> 
                                                        <script src="./js/oblibenejidlo.js"></script>




                                                </div> 
                                </div>  


                                <div class="row">
                                                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                        <div class="col-sm-3">
                                                                <br>
                                                                <label for="uzivatel">Problémy po jídle obecně:</label>
                                                                <select class="form-control" id="problemy_po_jidle_obecne" name="problemy_po_jidle_obecne" disabled>


                                                                <? if ($problemy_po_jidle_obecne == 1){  ?>
                                                                <option value="0"> Vyberte možnost</option>
                                                                <option value="1" selected>Ano</option>
                                                                <option value="2">Ne</option>
                                                                
                                                                <?  }else if ($problemy_po_jidle_obecne == 2){ ?>  
                                                                <option value="0"> Vyberte možnost</option>
                                                                <option value="1">Ano</option>
                                                                <option value="2" selected>Ne</option>

                                                                 <? }else{ ?>    
                                                                <option value="0" selected> Vyberte možnost</option>
                                                                <option value="1">Ano</option>
                                                                <option value="2">Ne</option>                                                                        
                                                                 <?
                                                                 }
                                                                ?> 


                                                                </select>
                                                        </div>
                                                        <div class="form-group" id="obecnejidlo">
                                                                        <div class="col-sm-9">
                                                                                <br>
                                                                                <? if ($problemy_po_jidle_obecne == 1){  ?>
                                                                                <label for="uzivatel">Popis problémů:</label>
                                                                                <input type="text" class="form-control form-control-sm" id="problemy_po_jidle_obecne_text" value = "" name="problemy_po_jidle_obecne_text" maxlength="200" placeholder="Popis problémů po jídle obecně" readonly> 
                                                                                 <? }else{ ?> 
                                                                                  <?
                                                                                         }
                                                                                        ?>
                                                                                
                                                                        </div>     
                                                        </div>
                                                        <script src="./js/obecnejidlo.js"></script>

                                                </div>
                                </div>



                                <div class="row">
                                                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                                <div class="col-sm-3">
                                                                                <br>
                                                                                <label for="uzivatel">* Spánek</label>
                                                                                <select class="form-control" id="spanek" name="spanek" disabled>

                                                                                <? if ($spanek == 1){  ?>
                                                                                <option value="0"> Vyberte možnost</option>
                                                                                <option value="1" selected>Dobrý</option>
                                                                                <option value="2">Špatný</option>
                                                                                <option value="3">Nemožnost usnout</option>
                                                                                <option value="4">Mluvení ze spaní</option>
                                                                                <option value="5">Klidný</option>
                                                                                <option value="6">Neklidný</option>
                                                                                <option value="7">Časté buzení</option> 
                        
                                                                                <?  }else if ($spanek == 2){ ?>  
                                                                                <option value="0"> Vyberte možnost</option>
                                                                                <option value="1">Dobrý</option>
                                                                                <option value="2" selected>Špatný</option>
                                                                                <option value="3">Nemožnost usnout</option>
                                                                                <option value="4">Mluvení ze spaní</option>
                                                                                <option value="5">Klidný</option>
                                                                                <option value="6">Neklidný</option>
                                                                                <option value="7">Časté buzení</option> 
                                                                                
                                                                                <?  }else if ($spanek == 3){ ?>  
                                                                                <option value="0"> Vyberte možnost</option>
                                                                                <option value="1">Dobrý</option>
                                                                                <option value="2">Špatný</option>
                                                                                <option value="3" selected>Nemožnost usnout</option>
                                                                                <option value="4">Mluvení ze spaní</option>
                                                                                <option value="5">Klidný</option>
                                                                                <option value="6">Neklidný</option>
                                                                                <option value="7">Časté buzení</option> 

                                                                                <?  }else if ($spanek == 4){ ?>  
                                                                                <option value="0"> Vyberte možnost</option>
                                                                                <option value="1">Dobrý</option>
                                                                                <option value="2">Špatný</option>
                                                                                <option value="3">Nemožnost usnout</option>
                                                                                <option value="4" selected>Mluvení ze spaní</option>
                                                                                <option value="5">Klidný</option>
                                                                                <option value="6">Neklidný</option>
                                                                                <option value="7">Časté buzení</option>   
                                                                                
                                                                                <?  }else if ($spanek == 5){ ?>  
                                                                                <option value="0"> Vyberte možnost</option>
                                                                                <option value="1">Dobrý</option>
                                                                                <option value="2">Špatný</option>
                                                                                <option value="3">Nemožnost usnout</option>
                                                                                <option value="4">Mluvení ze spaní</option>
                                                                                <option value="5" selected>Klidný</option>
                                                                                <option value="6">Neklidný</option>
                                                                                <option value="7">Časté buzení</option>                                                                                   

                                                                                <?  }else if ($spanek == 6){ ?>  
                                                                                <option value="0"> Vyberte možnost</option>
                                                                                <option value="1">Dobrý</option>
                                                                                <option value="2">Špatný</option>
                                                                                <option value="3">Nemožnost usnout</option>
                                                                                <option value="4">Mluvení ze spaní</option>
                                                                                <option value="5">Klidný</option>
                                                                                <option value="6" selected>Neklidný</option>
                                                                                <option value="7">Časté buzení</option>  

                                                                                <?  }else if ($spanek == 7){ ?>  
                                                                                <option value="0"> Vyberte možnost</option>
                                                                                <option value="1">Dobrý</option>
                                                                                <option value="2">Špatný</option>
                                                                                <option value="3">Nemožnost usnout</option>
                                                                                <option value="4">Mluvení ze spaní</option>
                                                                                <option value="5">Klidný</option>
                                                                                <option value="6">Neklidný</option>
                                                                                <option value="7" selected>Časté buzení</option> 
                                                                                
                                                                                <? }else{ ?> 
                                                                                <option value="0" selected> Vyberte možnost</option>
                                                                                <option value="1">Dobrý</option>
                                                                                <option value="2">Špatný</option>
                                                                                <option value="3">Nemožnost usnout</option>
                                                                                <option value="4">Mluvení ze spaní</option>
                                                                                <option value="5">Klidný</option>
                                                                                <option value="6">Neklidný</option>
                                                                                <option value="7">Časté buzení</option> 
                                                                                        <?
                                                                                        }
                                                                                        ?> 

                                                                                </select>
                                                                </div>
                                                
                                                                <div class="col-sm-3">
                                                                        <br>
                                                                        <label for="uzivatel">Poloha ve spánku:</label>
                                                                        <input type="text" class="form-control form-control-sm" id="poloha_ve_spanku" value = "<? echo $poloha_ve_spanku; ?>" name="poloha_ve_spanku" maxlength="100" placeholder="Poloha ve spánku" readonly>        
                                                                </div> 

                                                                <div class="col-sm-3">
                                                                        <br>
                                                                        <label for="uzivatel">* V jakou hodinu nemůžete spát?</label>
                                                                        <input type="text" class="form-control form-control-sm" id="v_jakou_hodinu_nemuzete_spat" value = "<? echo $v_jakou_hodinu_nemuzete_spat;?>" name="v_jakou_hodinu_nemuzete_spat" maxlength="200" placeholder="V jakou hodinu nemůžete spát?" readonly>        
                                                                </div> 
                                                
                                        </div>           
                                </div>



                                <div class="row">
                                                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                        <div class="col-sm-3">
                                                                                <br>
                                                                                <label for="uzivatel">Vracejí se některé sny:</label>
                                                                                <select class="form-control" id="vraceji_se_nektere_sny" name="vraceji_se_nektere_sny" disabled>

                                                                                <? if ($vraceji_se_nektere_sny == 1){  ?>
                                                                                <option value="0"> Vyberte možnost</option>
                                                                                <option value="1" selected>Ano</option>
                                                                                <option value="2">Ne</option>

                                                                                <?  }else if ($vraceji_se_nektere_sny == 2){ ?>                                                                                 
                                                                                <option value="0"> Vyberte možnost</option>
                                                                                <option value="1">Ano</option>
                                                                                <option value="2" selected>Ne</option>
                                                                    
                                                                                <? }else{ ?> 
                                                                                <option value="0" selected> Vyberte možnost</option>
                                                                                <option value="1">Ano</option>
                                                                                <option value="2">Ne</option>                                                                                                                                                                         
                                                                                <?
                                                                                }
                                                                                ?>                                                                                

                                                                                </select>
                                                        </div>

                                                        <div class="form-group" id="castesny">
                                                                <div class="col-sm-9">
                                                                                <br>
                                                                <? if ($vraceji_se_nektere_sny == 1){  ?>


                                                                                <label for="uzivatel">Popis:</label>
                                                                                <input type="text" class="form-control form-control-sm" id="popis_snu" value = "<? echo $popis_snu;?>" name="popis_snu" maxlength="200" placeholder="Které sny se Vám často vracejí?" readonly>        
                                                                <? }else{ ?> 
                                                                   <?
                                                                       }
                                                                    ?>    
                                                                        </div> 
                                                        </div>
                                                        <script src="./js/castesny.js"></script>




                                                </div>




                                </div>





                                <div class="row">
                                                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                                <div class="col-sm-3">
                                                                                        <br>
                                                                                        <label for="uzivatel">* Strachy v životě:</label>
                                                                                        <select class="form-control" id="strachy_v_zivote" name="strachy_v_zivote" disabled>

                                                                                        <? if ($strachy_v_zivote == 1){  ?>
                                                                                        <option value="0"> Vyberte možnost</option>
                                                                                        <option value="1" selected>Ano</option>
                                                                                        <option value="2">Ne</option> 
                                                                                        
                                                                                        <?  }else if ($strachy_v_zivote == 2){ ?>                                                                                        
                                                                                        <option value="0"> Vyberte možnost</option>
                                                                                        <option value="1">Ano</option>
                                                                                        <option value="2" selected>Ne</option>
                                                                                        
                                                                                        <? }else{ ?> 
                                                                                        <option value="0" selected> Vyberte možnost</option>
                                                                                        <option value="1">Ano</option>
                                                                                        <option value="2">Ne</option>
                                                                                        <?
                                                                                        }
                                                                                        ?>  

                                                                                        </select>
                                                                                        <br>
                                                                </div>  
                                                        
                                                        <div class="form-group" id="ZivotniStrachy">

                                                                                                <div class="col-sm-2">
                                                                                                        <br><br>
                                                                                                <? if ($strachy_v_zivote == 1){  ?>

                                                                                                                                        <div class="checkbox">
                                                                                                                                        <? if ($bourka == 1){?>
                                                                                                                                        <label><input type="checkbox" name="bourka" checked disabled>bouřka</label>
                                                                                                                                        <? }else{ ?>
                                                                                                                                        <label><input type="checkbox" name="bourka"  disabled>bouřka</label>
                                                                                                                                        <?  } ?>                                                                                                  
                                                                                                                                        </div>

                                                                                                                                        <div class="checkbox">
                                                                                                                                        <? if ($vyska == 1){?>
                                                                                                                                        <label><input type="checkbox" name="vyska" checked disabled>výška</label>
                                                                                                                                        <? }else{ ?>
                                                                                                                                        <label><input type="checkbox" name="vyska" disabled>výška</label>                                                                                                                
                                                                                                                                        <?  } ?>  
                                                                                                                                        </div>
                                                                                                                                
                                                                                                                                        <div class="checkbox">
                                                                                                                                        <? if ($zkouska == 1){?>                                                                                                               
                                                                                                                                        <label><input type="checkbox" name="zkouska" checked disabled>zkouška</label>
                                                                                                                                        <? }else{ ?>
                                                                                                                                        <label><input type="checkbox" name="zkouska" disabled>zkouška</label>
                                                                                                                                        <?  } ?>                                                                                                          
                                                                                                                                        </div>

                                                                                                                                        <div class="checkbox">
                                                                                                                                        <? if ($voda == 1){?> 
                                                                                                                                        <label><input type="checkbox" name="voda" checked disabled>voda</label>
                                                                                                                                        <? }else{ ?>
                                                                                                                                        <label><input type="checkbox" name="voda" disabled>voda</label>                                                                                                                
                                                                                                                                        <?  } ?>    
                                                                                                                                        </div>  
                                                                                                                                        
                                                                                                                                        <div class="checkbox">
                                                                                                                                        <? if ($nemoc == 1){?>
                                                                                                                                        <label><input type="checkbox" name="nemoc" checked disabled>nemoc</label>
                                                                                                                                        <? }else{ ?>
                                                                                                                                        <label><input type="checkbox" name="nemoc" disabled>nemoc</label>
                                                                                                                                        <?  } ?> 
                                                                                                                                        </div> 
                                                                                                                                        
                                                                                                                                        <div class="checkbox">
                                                                                                                                        <? if ($zvire == 1){?>
                                                                                                                                        <label><input type="checkbox" name="zvire" checked disabled>zvíře</label>
                                                                                                                                        <? }else{ ?>
                                                                                                                                        <label><input type="checkbox" name="zvire" disabled>zvíře</label>                                                                                                                
                                                                                                                                        <?  } ?> 
                                                                                                                                        </div> 
                                                                                                                                        
                                                                                                                                        <div class="checkbox">
                                                                                                                                        <? if ($cestovani == 1){?>                                                                                                                
                                                                                                                                        <label><input type="checkbox" name="cestovani" checked disabled>cestování</label>
                                                                                                                                        <? }else{ ?>
                                                                                                                                        <label><input type="checkbox" name="cestovani" disabled>cestování</label>
                                                                                                                                        <?  } ?>                                                                                                                                                                                                                                                                                                                                 
                                                                                                                                        </div>   

                                                                                                                                        <div class="checkbox">
                                                                                                                                        <? if ($dopravni_prostredek == 1){?> 
                                                                                                                                        <label><input type="checkbox" name="dopravni_prostredek" checked disabled>dopravní prostředek</label>
                                                                                                                                        <? }else{ ?>
                                                                                                                                        <label><input type="checkbox" name="dopravni_prostredek" disabled>dopravní prostředek</label> 
                                                                                                                                        <?  } ?>                                                                                                                                                                                                                         
                                                                                                                                        </div>  

                                                                                                                                        <div class="checkbox">
                                                                                                                                        <? if ($zlodej == 1){?>                                                                                                                 
                                                                                                                                        <label><input type="checkbox" name="zlodej" checked disabled>zloděj</label>
                                                                                                                                        <? }else{ ?>
                                                                                                                                        <label><input type="checkbox" name="zlodej" disabled>zloděj</label>
                                                                                                                                        <?  } ?>   
                                                                                                                                        </div> 

                                                                                                                                        <div class="checkbox">
                                                                                                                                        <? if ($smrt == 1){?>                                                                                                                  
                                                                                                                                        <label><input type="checkbox" name="smrt" checked disabled>smrt</label>
                                                                                                                                        <? }else{ ?>                                                                                                        
                                                                                                                                        <label><input type="checkbox" name="smrt" disabled>smrt</label>
                                                                                                                                        <?  } ?>   
                                                                                                                                        </div> 
                                                                                                                                        
                                                                                                                                        <div class="checkbox">
                                                                                                                                        <? if ($jine == 1){?>                                                                                                                                  
                                                                                                                                        <label><input type="checkbox" name="jine"  id="Moje_strachy" checked disabled>jiné</label>
                                                                                                                                        <? }else{ ?>    
                                                                                                                                        <label><input type="checkbox" name="jine"  id="Moje_strachy" disabled>jiné</label>
                                                                                                                                        <?  } ?>  
                                                                                                                                        </div>  
                                                                                                        
                                                                                                        
                                                                                                           <? }else{ ?>       
                                                                                                                <?
                                                                                                                   }
                                                                                                                ?>  

                                                                                                </div>        


                                                                                                        <div class="col-sm-7" id="text_strach">
                                                                                                                                <br>
                                                                                                                                <? if ($jine == 1){?>  
                                                                                                                                <label for="uzivatel">Popis:</label>
                                                                                                                                <input type="text" class="form-control form-control-sm" id="popis_strachu" value = "<? echo $popis_strachu; ?>" name="popis_strachu" maxlength="200" placeholder="Popis strachu" readonly> 
                                                                                                                                <? }else{ ?> 
                                                                                                                                 &nbsp;                                                                                                                                        
                                                                                                                                 <?  } ?>          
                                                                                                        </div> 
                                
                                                                                                        
                                                        </div>
                                                       
 
                                                </div>
                                           
                                </div>  


                                                        <div class="row">
                                                                                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                                                                <br>
                                                                                                <label for="uzivatel">Poznámka:</label>
                                                                                                <textarea class="form-control" id="poznamka_text" name="poznamka_text" rows="4" maxlength="500" placeholder="Textová poznámka o délce max 500 znaků" readonly><? echo $poznamka_text;?></textarea>
                                                                                                <br>
                                                                                </div>
                                                        </div>




                <h4 align="center">Ruce</h4>
                        <div class="row">
                        
                                                <div class="col-sm-12" style="background-color:#e1f6f2;"> 
                                                        <br>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Lymfa P - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="lymmfa_p_aktualni" value = "<? echo $lymmfa_p_aktualni;?>" name="lymmfa_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Lymfa P - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="lymmfa_p_ocekavana" value = "<? echo $lymmfa_p_ocekavana;?>" name="lymmfa_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Lymfa L - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="lymmfa_l_aktualni" value = "<? echo $lymmfa_l_aktualni;?>" name="lymmfa_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Lymfa L - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="lymmfa_l_ocekavana" value = "<? echo $lymmfa_l_ocekavana;?>" name="lymmfa_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        </div>                             
                                                </div>
                        </div>                        
                <div class="row">
                                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                                        <br>  
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Plíce P - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="plice_p_aktualni" value = "<? echo $plice_p_aktualni;?>" name="plice_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Plíce P - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="plice_p_ocekavana" value = "<? echo $plice_p_ocekavana;?>" name="plice_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Plíce L - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="plice_l_aktualni" value = "<? echo $plice_l_aktualni;?>" name="plice_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Plíce L - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="plice_l_ocekavana" value = "<? echo $plice_l_ocekavana;?>" name="plice_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        </div>                             
                                                </div>
                        </div>


                <div class="row">
                                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                                        <br>  
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Tlusté střevo P - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="tluste_strevo_p_aktualni" value = "<? echo $tluste_strevo_p_aktualni;?>" name="tluste_strevo_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Tlusté střevo P - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="tluste_strevo_p_ocekavana" value = "<? echo $tluste_strevo_p_ocekavana;?>" name="tluste_strevo_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Tlusté střevo L - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="tluste_strevo_l_aktualni" value = "<? echo $tluste_strevo_l_aktualni;?>" name="tluste_strevo_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Tlusté střevo L - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="tluste_strevo_l_ocekavana" value = "<? echo $tluste_strevo_l_ocekavana;?>" name="tluste_strevo_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        </div>                             
                                                </div>

                        </div>                        
                <div class="row">                                
                                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                                        <br>  
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Nervová degenerace P - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="nervova_degenerace_p_aktualni" value = "<? echo $nervova_degenerace_p_aktualni;?>" name="nervova_degenerace_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Nervová degenerace P - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="nervova_degenerace_p_ocekavana" value = "<? echo $nervova_degenerace_p_ocekavana;?>" name="nervova_degenerace_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Nervová degenerace L - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="nervova_degenerace_l_aktualni" value = "<? echo $nervova_degenerace_l_aktualni;?>" name="nervova_degenerace_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Nervová degenerace L - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="nervova_degenerace_l_ocekavana" value = "<? echo $nervova_degenerace_l_ocekavana;?>" name="nervova_degenerace_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        </div>                             
                                                </div> 

                        </div> 


                <div class="row">                                
                                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                                        <br>  
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Obal srdce P - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="obal_srdce_p_aktualni" value = "<? echo $obal_srdce_p_aktualni;?>" name="obal_srdce_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Obal srdce P - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="obal_srdce_p_ocekavana" value = "<? echo $obal_srdce_p_ocekavana;?>" name="obal_srdce_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Obal srdce L - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="obal_srdce_l_aktualni" value = "<? echo $obal_srdce_l_aktualni;?>" name="obal_srdce_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Obal srdce L - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="obal_srdce_l_ocekavana" value = "<? echo $obal_srdce_l_ocekavana;?>" name="obal_srdce_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        </div>                             
                                                </div> 

                        </div>                        
                <div class="row">                                
                                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                                        <br>  
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Alergie P - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="alergie_p_aktualni" value = "<? echo $alergie_p_aktualni;?>" name="alergie_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Alergie P - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="alergie_p_ocekavana" value = "<? echo $alergie_p_ocekavana;?>" name="alergie_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Alergie L - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="alergie_l_aktualni" value = "<? echo $alergie_l_aktualni;?>" name="alergie_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Alergie L - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="alergie_l_ocekavana" value = "<? echo $alergie_l_ocekavana;?>" name="alergie_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        </div>                             
                                                </div> 
                </div>


                <div class="row">                                
                                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                                        <br>  
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Orgánová degenerace P - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="organova_degenerace_p_aktualni" value = "<? echo $organova_degenerace_p_aktualni;?>" name="organova_degenerace_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Orgánová degenerace P - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="organova_degenerace_p_ocekavana" value = "<? echo $organova_degenerace_p_ocekavana;?>" name="organova_degenerace_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Orgánová degenerace L - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="organova_degenerace_l_aktualni" value = "<? echo $organova_degenerace_l_aktualni;?>" name="organova_degenerace_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Orgánová degenerace L - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="organova_degenerace_l_ocekavana" value = "<? echo $organova_degenerace_l_ocekavana;?>" name="organova_degenerace_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        </div>                             
                                                </div> 

                        </div>                        
                <div class="row">                                
                                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                                        <br>  
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Tři ohřívače P - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="tri_ohrivace_p_aktualni" value = "<? echo $tri_ohrivace_p_aktualni;?>" name="tri_ohrivace_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Tři ohřívače P - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="tri_ohrivace_p_ocekavana" value = "<? echo $tri_ohrivace_p_ocekavana;?>" name="tri_ohrivace_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Tři ohřívače L - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="tri_ohrivace_l_aktualni" value = "<? echo $tri_ohrivace_l_aktualni;?>" name="tri_ohrivace_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Tři ohřívače L - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="tri_ohrivace_l_ocekavana" value = "<? echo $tri_ohrivace_l_ocekavana;?>" name="tri_ohrivace_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        </div>                             
                                                </div> 

                        </div>  



                <div class="row">                                
                                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                                        <br>  
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Srdce P - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="srdce_p_aktualni" value = "<? echo $srdce_p_aktualni;?>" name="srdce_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Srdce P - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="srdce_p_ocekavana" value = "<? echo $srdce_p_ocekavana;?>" name="srdce_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Srdce L - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="srdce_l_aktualni" value = "<? echo $srdce_l_aktualni;?>" name="srdce_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Srdce L - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="srdce_l_ocekavana" value = "<? echo $srdce_l_ocekavana;?>" name="srdce_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        </div>                             
                                                </div>

                        </div>                        
                <div class="row">                                
                                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                                        <br>  
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Tenké střevo P - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="tenke_strevo_p_aktualni" value = "<? echo $tenke_strevo_p_aktualni;?>" name="tenke_strevo_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Tenké střevo P - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="tenke_strevo_p_ocekavana" value = "<? echo $tenke_strevo_p_ocekavana;?>" name="tenke_strevo_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Tenké střevo L - aktuální</label>
                                                        <input type="text" class="form-control form-control-sm" id="tenke_strevo_l_aktualni" value = "<? echo $tenke_strevo_l_aktualni;?>" name="tenke_strevo_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                        </div>
                                                        <div class="col-sm-3">
                                                        <label for="uzivatel">Tenké střevo L - očekávaná</label>
                                                        <input type="text" class="form-control form-control-sm" id="tenke_strevo_l_ocekavana" value = "<? echo $tenke_strevo_l_ocekavana;?>" name="tenke_strevo_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                        <br>
                                                        </div> 
                                                                                
                                                </div>
                        </div>


                <h4 align="center">Nohy</h4>
                        <div class="row">
                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                <br>  
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Slinivka/slezina P - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="slinivka_slezina_p_aktualni" value = "<? echo $slinivka_slezina_p_aktualni;?>" name="slinivka_slezina_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Slinivka/slezina P - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="slinivka_slezina_p_ocekavana" value = "<? echo $slinivka_slezina_p_ocekavana;?>" name="slinivka_slezina_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Slinivka/slezina L - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="slinivka_slezina_l_aktualni" value = "<? echo $slinivka_slezina_l_aktualni;?>" name="slinivka_slezina_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Slinivka/slezina L - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="slinivka_slezina_l_ocekavana" value = "<? echo $slinivka_slezina_l_ocekavana;?>" name="slinivka_slezina_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                </div> 
                                                                                        
                                                        </div>
                        </div>

                        <div class="row">
                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                <br>  
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Játra P - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="jatra_p_aktualni" value = "<? echo $jatra_p_aktualni;?>" name="jatra_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Játra P - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="jatra_p_ocekavana" value = "<? echo $jatra_p_ocekavana;?>" name="jatra_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Játra L - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="jatra_l_aktualni" value = "<? echo $jatra_l_aktualni;?>" name="jatra_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Játra L - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="jatra_l_ocekavana" value = "<? echo $jatra_l_ocekavana;?>" name="jatra_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                </div>                                                                         
                                                        </div>
                        </div>



                        <div class="row">
                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                <br>  
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Kloubní degenerace P - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="kloubni_degenerace_p_aktualni" value = "<? echo $kloubni_degenerace_p_aktualni;?>" name="kloubni_degenerace_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Kloubní degenerace P - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="kloubni_degenerace_p_ocekavana" value = "<? echo $kloubni_degenerace_p_ocekavana;?>" name="kloubni_degenerace_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Kloubní degenerace L - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="kloubni_degenerace_l_aktualni" value = "<? echo $kloubni_degenerace_l_aktualni;?>" name="kloubni_degenerace_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Kloubní degenerace L - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="kloubni_degenerace_l_ocekavana" value = "<? echo $kloubni_degenerace_l_ocekavana;?>" name="kloubni_degenerace_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                </div>                                                                         
                                                        </div>
                        </div>


                        <div class="row">
                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                <br>  
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Žaludek P - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="zaludek_p_aktualni" value = "<? echo $zaludek_p_aktualni;?>" name="zaludek_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Žaludek P - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="zaludek_p_ocekavana" value = "<? echo $zaludek_p_ocekavana;?>" name="zaludek_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Žaludek L - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="zaludek_l_aktualni" value = "<? echo $zaludek_l_aktualni;?>" name="zaludek_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Žaludek L - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="zaludek_l_ocekavana" value = "<? echo $zaludek_l_ocekavana;?>" name="zaludek_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                </div>                                                                         
                                                        </div>
                        </div>



                        <div class="row">
                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                <br>  
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Vazivová degenerace P - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="vazivova_degenerace_p_aktualni" value = "<? echo $vazivova_degenerace_p_aktualni;?>" name="vazivova_degenerace_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Vazivová degenerace P - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="vazivova_degenerace_p_ocekavana" value = "<? echo $vazivova_degenerace_p_ocekavana;?>" name="vazivova_degenerace_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Vazivová degenerace L - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="vazivova_degenerace_l_aktualni" value = "<? echo $vazivova_degenerace_l_aktualni;?>" name="vazivova_degenerace_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Vazivová degenerace L - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="vazivova_degenerace_l_ocekavana" value = "<? echo $vazivova_degenerace_l_ocekavana;?>" name="vazivova_degenerace_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                </div>                                                                         
                                                        </div>
                        </div>


                        <div class="row">
                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                <br>  
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Kůže P - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="kuze_p_aktualni" value = "<? echo $kuze_p_aktualni;?>" name="kuze_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Kůže P - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="kuze_p_ocekavana" value = "<? echo $kuze_p_ocekavana;?>" name="kuze_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Kůže L - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="kuze_l_aktualni" value = "<? echo $kuze_l_aktualni;?>" name="kuze_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Kůže L - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="kuze_l_ocekavana" value = "<? echo $kuze_l_ocekavana;?>" name="kuze_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                </div>                                                                         
                                                        </div>
                        </div>



                        <div class="row">
                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                <br>  
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Tuková degenerace P - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="tukova_degenerace_p_aktualni" value = "<? echo $tukova_degenerace_p_aktualni;?>" name="tukova_degenerace_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Tuková degenerace P - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="tukova_degenerace_p_ocekavana" value = "<? echo $tukova_degenerace_p_ocekavana;?>" name="tukova_degenerace_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Tuková degenerace L - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="tukova_degenerace_l_aktualni" value = "<? echo $tukova_degenerace_l_aktualni;?>" name="tukova_degenerace_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Tuková degenerace L - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="tukova_degenerace_l_ocekavana" value = "<? echo $tukova_degenerace_l_ocekavana;?>" name="tukova_degenerace_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                </div>                                                                         
                                                        </div>
                        </div>


                        <div class="row">
                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                <br>  
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Žlučník P - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="zlucnik_p_aktualni" value = "<? echo $zlucnik_p_aktualni;?>" name="zlucnik_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Žlučník P - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="zlucnik_p_ocekavana" value = "<? echo $zlucnik_p_ocekavana;?>" name="zlucnik_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Žlučník L - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="zlucnik_l_aktualni" value = "<? echo $zlucnik_l_aktualni;?>" name="zlucnik_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Žlučník L - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="zlucnik_l_ocekavana" value = "<? echo $zlucnik_l_ocekavana;?>" name="zlucnik_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                </div>                                                                         
                                                        </div>
                        </div>

                        <div class="row">
                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                <br>  
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Ledviny P - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="ledviny_p_aktualni" value = "<? echo $ledviny_p_aktualni;?>" name="ledviny_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Ledviny P - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="ledviny_p_ocekavana" value = "<? echo $ledviny_p_ocekavana;?>" name="ledviny_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Ledviny L - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="ledviny_l_aktualni" value = "<? echo $ledviny_l_aktualni;?>" name="ledviny_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Ledviny L - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="ledviny_l_ocekavana" value = "<? echo $ledviny_l_ocekavana;?>" name="ledviny_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                </div>                                                                         
                                                        </div>
                        </div>

                        <div class="row">
                                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                                <br>  
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Močový měchýř P - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="mocovy_mechyr_p_aktualni" value = "<? echo $mocovy_mechyr_p_aktualni;?>" name="mocovy_mechyr_p_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Močový měchýř P - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="mocovy_mechyr_p_ocekavana" value = "<? echo $mocovy_mechyr_p_ocekavana;?>" name="mocovy_mechyr_p_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Močový měchýř L - aktuální</label>
                                                                <input type="text" class="form-control form-control-sm" id="mocovy_mechyr_l_aktualni" value = "<? echo $mocovy_mechyr_l_aktualni;?>" name="mocovy_mechyr_l_aktualni" maxlength="7" placeholder="50/50" readonly>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <label for="uzivatel">Močový měchýř L - očekávaná</label>
                                                                <input type="text" class="form-control form-control-sm" id="mocovy_mechyr_l_ocekavana" value = "<? echo $mocovy_mechyr_l_ocekavana;?>" name="mocovy_mechyr_l_ocekavana" maxlength="7" placeholder="50/50" readonly>
                                                                <br>        
                                                                </div>                                                                         
                                                        </div>
                        </div>

</div>







        <br>


                <?


                     }



                        ?>

    

