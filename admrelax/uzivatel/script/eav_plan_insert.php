<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");



$uzivatel_id_form = addslashes(htmlspecialchars(trim("$_POST[uzivatel_id]"))); 
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