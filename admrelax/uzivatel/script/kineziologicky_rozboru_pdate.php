<?

header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache"); 
require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php';

$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));

$nohy_x = addslashes(htmlspecialchars(trim("$_POST[nohy_x]")));
$nohy_O = addslashes(htmlspecialchars(trim("$_POST[nohy_O]")));
$nohy_posun_doleva = addslashes(htmlspecialchars(trim("$_POST[nohy_posun_doleva]")));
$nohy_posun_doprava = addslashes(htmlspecialchars(trim("$_POST[nohy_posun_doprava]")));
$nohy_prava_delsi_nez_leva = addslashes(htmlspecialchars(trim("$_POST[nohy_prava_delsi_nez_leva]")));
$nohy_leva_delsi_nez_prava = addslashes(htmlspecialchars(trim("$_POST[nohy_leva_delsi_nez_prava]")));

$vybocene_palce = addslashes(htmlspecialchars(trim("$_POST[vybocene_palce]")));
$ploche_nohy = addslashes(htmlspecialchars(trim("$_POST[ploche_nohy]")));
$skrcene_prsty = addslashes(htmlspecialchars(trim("$_POST[skrcene_prsty]")));
$prsty_blizko_u_sebe = addslashes(htmlspecialchars(trim("$_POST[prsty_blizko_u_sebe]")));
$ostruhy = addslashes(htmlspecialchars(trim("$_POST[ostruhy]")));
$ztuhle_narty = addslashes(htmlspecialchars(trim("$_POST[ztuhle_narty]")));

$kotniky_zatuhle = addslashes(htmlspecialchars(trim("$_POST[kotniky_zatuhle]")));
$kotniky_praskajici = addslashes(htmlspecialchars(trim("$_POST[kotniky_praskajici]")));
$kotniky_otekle = addslashes(htmlspecialchars(trim("$_POST[kotniky_otekle]")));
$kotniky_zkracene_achylovy_slachy = addslashes(htmlspecialchars(trim("$_POST[kotniky_zkracene_achylovy_slachy]")));

$kolena_posun_doleva = addslashes(htmlspecialchars(trim("$_POST[kolena_posun_doleva]")));
$kolena_posun_doprava = addslashes(htmlspecialchars(trim("$_POST[kolena_posun_doprava]")));
$kolena_stoceni_dovnitr = addslashes(htmlspecialchars(trim("$_POST[kolena_stoceni_dovnitr]")));
$kolena_vytoceni_ven = addslashes(htmlspecialchars(trim("$_POST[kolena_vytoceni_ven]")));

$panev_preklopena_podsazena = addslashes(htmlspecialchars(trim("$_POST[panev_preklopena_podsazena]")));
$panev_preklopena_dopredu = addslashes(htmlspecialchars(trim("$_POST[panev_preklopena_dopredu]")));
$panev_posunuta_dopredu_bez_preklopeni = addslashes(htmlspecialchars(trim("$_POST[panev_posunuta_dopredu_bez_preklopeni]")));
$panev_posunuta_dozadu_bez_preklopeni = addslashes(htmlspecialchars(trim("$_POST[panev_posunuta_dozadu_bez_preklopeni]")));
$panev_posun_doleva = addslashes(htmlspecialchars(trim("$_POST[panev_posun_doleva]")));
$panev_posun_doprava = addslashes(htmlspecialchars(trim("$_POST[panev_posun_doprava]")));
$panev_rotace_doleva = addslashes(htmlspecialchars(trim("$_POST[panev_rotace_doleva]")));
$panev_rotace_doprava = addslashes(htmlspecialchars(trim("$_POST[panev_rotace_doprava]")));
$panev_blokada = addslashes(htmlspecialchars(trim("$_POST[panev_blokada]")));

$ruce_posun_doleva = addslashes(htmlspecialchars(trim("$_POST[ruce_posun_doleva]")));
$ruce_posun_doprava = addslashes(htmlspecialchars(trim("$_POST[ruce_posun_doprava]")));

$ramena_posun_doleva = addslashes(htmlspecialchars(trim("$_POST[ramena_posun_doleva]")));
$ramena_posun_doprava = addslashes(htmlspecialchars(trim("$_POST[ramena_posun_doprava]")));
$ramena_zvednuta_tense_k_usim = addslashes(htmlspecialchars(trim("$_POST[ramena_zvednuta_tense_k_usim]")));
$ramena_dychani_do_ramen = addslashes(htmlspecialchars(trim("$_POST[ramena_dychani_do_ramen]")));

$lokty_tenisovy_loket = addslashes(htmlspecialchars(trim("$_POST[lokty_tenisovy_loket]")));

$zapesti_karpaly = addslashes(htmlspecialchars(trim("$_POST[zapesti_karpaly]")));
$zapesti_neohebnost = addslashes(htmlspecialchars(trim("$_POST[zapesti_neohebnost]")));
$zapesti_zatuhlost = addslashes(htmlspecialchars(trim("$_POST[zapesti_zatuhlost]")));

$pater_kulata_zada = addslashes(htmlspecialchars(trim("$_POST[pater_kulata_zada]")));
$pater_prohnuta_zada = addslashes(htmlspecialchars(trim("$_POST[pater_prohnuta_zada]")));
$pater_plocha_zada = addslashes(htmlspecialchars(trim("$_POST[pater_plocha_zada]")));
$pater_skolioticke_drzeni = addslashes(htmlspecialchars(trim("$_POST[pater_skolioticke_drzeni]")));
$pater_dysbalace_prave_ruky = addslashes(htmlspecialchars(trim("$_POST[pater_dysbalace_prave_ruky]")));
$pater_dysbalace_leve_ruky = addslashes(htmlspecialchars(trim("$_POST[pater_dysbalace_leve_ruky]")));

$krcni_ztuhlost_sije = addslashes(htmlspecialchars(trim("$_POST[krcni_ztuhlost_sije]")));
$krcni_stuhlost_trapezu = addslashes(htmlspecialchars(trim("$_POST[krcni_stuhlost_trapezu]")));
$krcni_vyoseni_doleva = addslashes(htmlspecialchars(trim("$_POST[krcni_vyoseni_doleva]")));
$krcni_vyoseni_doprava = addslashes(htmlspecialchars(trim("$_POST[krcni_vyoseni_doprava]")));
$krcni_posun_brady_doleva = addslashes(htmlspecialchars(trim("$_POST[krcni_posun_brady_doleva]")));
$krcni_posun_brady_doprava = addslashes(htmlspecialchars(trim("$_POST[krcni_posun_brady_doprava]")));
$krcni_mala_lordoza = addslashes(htmlspecialchars(trim("$_POST[krcni_mala_lordoza]")));
$krcni_velka_lordoza = addslashes(htmlspecialchars(trim("$_POST[krcni_velka_lordoza]")));
$krcni_vyhrez = addslashes(htmlspecialchars(trim("$_POST[krcni_vyhrez]")));
$krcni_zaklon_dozadu = addslashes(htmlspecialchars(trim("$_POST[krcni_zaklon_dozadu]")));
$krcni_predsun_dopredu = addslashes(htmlspecialchars(trim("$_POST[krcni_predsun_dopredu]")));
$krcni_hlava_v_ramenou = addslashes(htmlspecialchars(trim("$_POST[krcni_hlava_v_ramenou]")));
$krcni_posun_jazylky = addslashes(htmlspecialchars(trim("$_POST[krcni_posun_jazylky]")));
$krcni_oteklost_sije_z_leve_strany = addslashes(htmlspecialchars(trim("$_POST[krcni_oteklost_sije_z_leve_strany]")));
$krcni_oteklost_sije_z_prave_strany = addslashes(htmlspecialchars(trim("$_POST[krcni_oteklost_sije_z_prave_strany]")));

$hrudni_vyhrbeni = addslashes(htmlspecialchars(trim("$_POST[hrudni_vyhrbeni]")));
$hrudni_prohnuti = addslashes(htmlspecialchars(trim("$_POST[hrudni_prohnuti]")));
$hrudni_hrb_na_zadech = addslashes(htmlspecialchars(trim("$_POST[hrudni_hrb_na_zadech]")));
$hrudni_vyoseni_doleva = addslashes(htmlspecialchars(trim("$_POST[hrudni_vyoseni_doleva]")));
$hrudni_vyoseni_doprava = addslashes(htmlspecialchars(trim("$_POST[hrudni_vyoseni_doprava]")));
$hrudni_vyhrez = addslashes(htmlspecialchars(trim("$_POST[hrudni_vyhrez]")));
$hrudni_blokada_zeber = addslashes(htmlspecialchars(trim("$_POST[hrudni_blokada_zeber]")));
$hrudni_posun_zeber_doleva = addslashes(htmlspecialchars(trim("$_POST[hrudni_posun_zeber_doleva]")));
$hrudni_posun_zeber_doprava = addslashes(htmlspecialchars(trim("$_POST[hrudni_posun_zeber_doprava]")));
$hrudni_melke_dychani = addslashes(htmlspecialchars(trim("$_POST[hrudni_melke_dychani]")));
$hrudni_nepruznost_zeber = addslashes(htmlspecialchars(trim("$_POST[hrudni_nepruznost_zeber]")));

$lopatky_posun_doleva = addslashes(htmlspecialchars(trim("$_POST[lopatky_posun_doleva]")));
$lopatky_posun_doprava = addslashes(htmlspecialchars(trim("$_POST[lopatky_posun_doprava]")));
$lopatky_vylezaji_ven = addslashes(htmlspecialchars(trim("$_POST[lopatky_vylezaji_ven]")));

$bederni_prohnuti = addslashes(htmlspecialchars(trim("$_POST[bederni_prohnuti]")));
$bederni_vyoseni_doleva = addslashes(htmlspecialchars(trim("$_POST[bederni_vyoseni_doleva]")));
$bederni_vyoseni_doprava = addslashes(htmlspecialchars(trim("$_POST[bederni_vyoseni_doprava]")));
$bederni_vyhrez = addslashes(htmlspecialchars(trim("$_POST[bederni_vyhrez]")));

$hypermobilita_krcni_pater = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_krcni_pater]")));
$hypermobilita_hrudni_pater = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_hrudni_pater]")));
$hypermobilita_bederni_pater = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_bederni_pater]")));
$hypermobilita_krizova_kost = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_krizova_kost]")));
$hypermobilita_kostrc = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_kostrc]")));
$hypermobilita_ramena = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_ramena]")));
$hypermobilita_lokty = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_lokty]")));
$hypermobilita_zapesti = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_zapesti]")));
$hypermobilita_prsty_na_rukou = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_prsty_na_rukou]")));
$hypermobilita_kycle = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_kycle]")));
$hypermobilita_kolena = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_kolena]")));
$hypermobilita_kotniky = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_kotniky]")));
$hypermobilita_prsty_na_nohou = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_prsty_na_nohou]")));

$svaly_ztuhle = addslashes(htmlspecialchars(trim("$_POST[svaly_ztuhle]")));
$svaly_povolene = addslashes(htmlspecialchars(trim("$_POST[svaly_povolene]")));
$svaly_poznamka = addslashes(htmlspecialchars(trim("$_POST[svaly_poznamka]")));


    echo 'ID_uzivatel: '.$uzivatel_id.'<br>';
    echo 'nohy_x: '.$nohy_x.'<br/>';
    echo 'nohy_O: '.$nohy_O.'<br/>';
    echo 'nohy_posun_doleva: '.$nohy_posun_doleva.'<br/>';
    echo 'nohy_posun_doprava: '.$nohy_posun_doprava.'<br/>';
    echo 'nohy_prava_delsi_nez_leva: '.$nohy_prava_delsi_nez_leva.'<br/>';
    echo 'nohy_leva_delsi_nez_prava: '.$nohy_leva_delsi_nez_prava.'<br/>';

    echo 'vybocene_palce: '.$vybocene_palce.'<br/>';
    echo 'ploche_nohy: '.$ploche_nohy.'<br/>';
    echo 'skrcene_prsty: '.$skrcene_prsty.'<br/>';
    echo 'prsty_blizko_u_sebe: '.$prsty_blizko_u_sebe.'<br/>';
    echo 'ostruhy: '.$ostruhy.'<br/>';
    echo 'ztuhle_narty: '.$ztuhle_narty.'<br/>';

    echo 'kotniky_zatuhle: '.$kotniky_zatuhle.'<br/>';
    echo 'kotniky_praskajici: '.$kotniky_praskajici.'<br/>';
    echo 'kotniky_otekle: '.$kotniky_otekle.'<br/>';
    echo 'kotniky_zkracene_achylovy_slachy: '.$kotniky_zkracene_achylovy_slachy.'<br/>';

    echo 'kolena_posun_doleva: '.$kolena_posun_doleva.'<br/>';
    echo 'kolena_posun_doprava: '.$kolena_posun_doprava.'<br/>';
    echo 'kolena_stoceni_dovnitr: '.$kolena_stoceni_dovnitr.'<br/>';
    echo 'kolena_vytoceni_ven: '.$kolena_vytoceni_ven.'<br/>';

    echo 'panev_preklopena_podsazena: '.$panev_preklopena_podsazena.'<br/>';
    echo 'panev_preklopena_dopredu: '.$panev_preklopena_dopredu.'<br/>';
    echo 'panev_posunuta_dopredu_bez_preklopeni: '.$panev_posunuta_dopredu_bez_preklopeni.'<br/>';
    echo 'panev_posunuta_dozadu_bez_preklopeni: '.$panev_posunuta_dozadu_bez_preklopeni.'<br/>';
    echo 'panev_posun_doleva: '.$panev_posun_doleva.'<br/>';
    echo 'panev_posun_doprava: '.$panev_posun_doprava.'<br/>';
    echo 'panev_rotace_doleva: '.$panev_rotace_doleva.'<br/>';
    echo 'panev_rotace_doprava: '.$panev_rotace_doprava.'<br/>';
    echo 'panev_blokada: '.$panev_blokada.'<br/>';




?>