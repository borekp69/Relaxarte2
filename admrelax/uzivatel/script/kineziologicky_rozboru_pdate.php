<?

header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache"); 
require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php';

$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));

$nohy_x_form = addslashes(htmlspecialchars(trim("$_POST[nohy_x]")));
$nohy_O_form = addslashes(htmlspecialchars(trim("$_POST[nohy_O]")));
$nohy_posun_doleva_form = addslashes(htmlspecialchars(trim("$_POST[nohy_posun_doleva]")));
$nohy_posun_doprava_form = addslashes(htmlspecialchars(trim("$_POST[nohy_posun_doprava]")));
$nohy_prava_delsi_nez_leva_form = addslashes(htmlspecialchars(trim("$_POST[nohy_prava_delsi_nez_leva]")));
$nohy_leva_delsi_nez_prava_form = addslashes(htmlspecialchars(trim("$_POST[nohy_leva_delsi_nez_prava]")));

$vybocene_palce_form = addslashes(htmlspecialchars(trim("$_POST[vybocene_palce]")));
$ploche_nohy_form = addslashes(htmlspecialchars(trim("$_POST[ploche_nohy]")));
$skrcene_prsty_form = addslashes(htmlspecialchars(trim("$_POST[skrcene_prsty]")));
$prsty_blizko_u_sebe_form = addslashes(htmlspecialchars(trim("$_POST[prsty_blizko_u_sebe]")));
$ostruhy_form = addslashes(htmlspecialchars(trim("$_POST[ostruhy]")));
$ztuhle_narty_form = addslashes(htmlspecialchars(trim("$_POST[ztuhle_narty]")));

$kotniky_zatuhle_form = addslashes(htmlspecialchars(trim("$_POST[kotniky_zatuhle]")));
$kotniky_praskajici_form = addslashes(htmlspecialchars(trim("$_POST[kotniky_praskajici]")));
$kotniky_otekle_form = addslashes(htmlspecialchars(trim("$_POST[kotniky_otekle]")));
$kotniky_zkracene_achylovy_slachy_form = addslashes(htmlspecialchars(trim("$_POST[kotniky_zkracene_achylovy_slachy]")));

$kolena_posun_doleva_form = addslashes(htmlspecialchars(trim("$_POST[kolena_posun_doleva]")));
$kolena_posun_doprava_form = addslashes(htmlspecialchars(trim("$_POST[kolena_posun_doprava]")));
$kolena_stoceni_dovnitr_form = addslashes(htmlspecialchars(trim("$_POST[kolena_stoceni_dovnitr]")));
$kolena_vytoceni_ven_form = addslashes(htmlspecialchars(trim("$_POST[kolena_vytoceni_ven]")));

$panev_preklopena_podsazena_form = addslashes(htmlspecialchars(trim("$_POST[panev_preklopena_podsazena]")));
$panev_preklopena_dopredu_form = addslashes(htmlspecialchars(trim("$_POST[panev_preklopena_dopredu]")));
$panev_posunuta_dopredu_bez_preklopeni_form = addslashes(htmlspecialchars(trim("$_POST[panev_posunuta_dopredu_bez_preklopeni]")));
$panev_posunuta_dozadu_bez_preklopeni_form = addslashes(htmlspecialchars(trim("$_POST[panev_posunuta_dozadu_bez_preklopeni]")));
$panev_posun_doleva_form = addslashes(htmlspecialchars(trim("$_POST[panev_posun_doleva]")));
$panev_posun_doprava_form = addslashes(htmlspecialchars(trim("$_POST[panev_posun_doprava]")));
$panev_rotace_doleva_form = addslashes(htmlspecialchars(trim("$_POST[panev_rotace_doleva]")));
$panev_rotace_doprava_form = addslashes(htmlspecialchars(trim("$_POST[panev_rotace_doprava]")));
$panev_blokada_form = addslashes(htmlspecialchars(trim("$_POST[panev_blokada]")));

$ruce_posun_doleva_form = addslashes(htmlspecialchars(trim("$_POST[ruce_posun_doleva]")));
$ruce_posun_doprava_form = addslashes(htmlspecialchars(trim("$_POST[ruce_posun_doprava]")));

$ramena_posun_doleva_form = addslashes(htmlspecialchars(trim("$_POST[ramena_posun_doleva]")));
$ramena_posun_doprava_form = addslashes(htmlspecialchars(trim("$_POST[ramena_posun_doprava]")));
$ramena_zvednuta_tense_k_usim_form = addslashes(htmlspecialchars(trim("$_POST[ramena_zvednuta_tense_k_usim]")));
$ramena_dychani_do_ramen_form = addslashes(htmlspecialchars(trim("$_POST[ramena_dychani_do_ramen]")));

$lokty_tenisovy_loket_form = addslashes(htmlspecialchars(trim("$_POST[lokty_tenisovy_loket]")));

$zapesti_karpaly_form = addslashes(htmlspecialchars(trim("$_POST[zapesti_karpaly]")));
$zapesti_neohebnost_form = addslashes(htmlspecialchars(trim("$_POST[zapesti_neohebnost]")));
$zapesti_zatuhlost_form = addslashes(htmlspecialchars(trim("$_POST[zapesti_zatuhlost]")));

$pater_kulata_zada_form = addslashes(htmlspecialchars(trim("$_POST[pater_kulata_zada]")));
$pater_prohnuta_zada_form = addslashes(htmlspecialchars(trim("$_POST[pater_prohnuta_zada]")));
$pater_plocha_zada_form = addslashes(htmlspecialchars(trim("$_POST[pater_plocha_zada]")));
$pater_skolioticke_drzeni_form = addslashes(htmlspecialchars(trim("$_POST[pater_skolioticke_drzeni]")));
$pater_dysbalace_prave_ruky_form = addslashes(htmlspecialchars(trim("$_POST[pater_dysbalace_prave_ruky]")));
$pater_dysbalace_leve_ruky_form = addslashes(htmlspecialchars(trim("$_POST[pater_dysbalace_leve_ruky]")));

$krcni_ztuhlost_sije_form = addslashes(htmlspecialchars(trim("$_POST[krcni_ztuhlost_sije]")));
$krcni_stuhlost_trapezu_form = addslashes(htmlspecialchars(trim("$_POST[krcni_stuhlost_trapezu]")));
$krcni_vyoseni_doleva_form = addslashes(htmlspecialchars(trim("$_POST[krcni_vyoseni_doleva]")));
$krcni_vyoseni_doprava_form = addslashes(htmlspecialchars(trim("$_POST[krcni_vyoseni_doprava]")));
$krcni_posun_brady_doleva_form = addslashes(htmlspecialchars(trim("$_POST[krcni_posun_brady_doleva]")));
$krcni_posun_brady_doprava_form = addslashes(htmlspecialchars(trim("$_POST[krcni_posun_brady_doprava]")));
$krcni_mala_lordoza_form = addslashes(htmlspecialchars(trim("$_POST[krcni_mala_lordoza]")));
$krcni_velka_lordoza_form = addslashes(htmlspecialchars(trim("$_POST[krcni_velka_lordoza]")));
$krcni_vyhrez_form = addslashes(htmlspecialchars(trim("$_POST[krcni_vyhrez]")));
$krcni_zaklon_dozadu_form = addslashes(htmlspecialchars(trim("$_POST[krcni_zaklon_dozadu]")));
$krcni_presun_dopredu_form = addslashes(htmlspecialchars(trim("$_POST[krcni_presun_dopredu]")));
$krcni_hlava_v_ramenou_form = addslashes(htmlspecialchars(trim("$_POST[krcni_hlava_v_ramenou]")));
$krcni_posun_jazylky_form = addslashes(htmlspecialchars(trim("$_POST[krcni_posun_jazylky]")));
$krcni_oteklost_sije_z_leve_strany_form = addslashes(htmlspecialchars(trim("$_POST[krcni_oteklost_sije_z_leve_strany]")));
$krcni_oteklost_sije_z_prave_strany_form = addslashes(htmlspecialchars(trim("$_POST[krcni_oteklost_sije_z_prave_strany]")));

$hrudni_vyhrbeni_form = addslashes(htmlspecialchars(trim("$_POST[hrudni_vyhrbeni]")));
$hrudni_prohnuti_form = addslashes(htmlspecialchars(trim("$_POST[hrudni_prohnuti]")));
$hrudni_hrb_na_zadech_form = addslashes(htmlspecialchars(trim("$_POST[hrudni_hrb_na_zadech]")));
$hrudni_vyoseni_doleva_form = addslashes(htmlspecialchars(trim("$_POST[hrudni_vyoseni_doleva]")));
$hrudni_vyoseni_doprava_form = addslashes(htmlspecialchars(trim("$_POST[hrudni_vyoseni_doprava]")));
$hrudni_vyhrez_form = addslashes(htmlspecialchars(trim("$_POST[hrudni_vyhrez]")));
$hrudni_blokada_zeber_form = addslashes(htmlspecialchars(trim("$_POST[hrudni_blokada_zeber]")));
$hrudni_posun_zeber_doleva_form = addslashes(htmlspecialchars(trim("$_POST[hrudni_posun_zeber_doleva]")));
$hrudni_posun_zeber_doprava_form = addslashes(htmlspecialchars(trim("$_POST[hrudni_posun_zeber_doprava]")));
$hrudni_melke_dychani_form = addslashes(htmlspecialchars(trim("$_POST[hrudni_melke_dychani]")));
$hrudni_nepruznost_zeber_form = addslashes(htmlspecialchars(trim("$_POST[hrudni_nepruznost_zeber]")));

$lopatky_posun_doleva_form = addslashes(htmlspecialchars(trim("$_POST[lopatky_posun_doleva]")));
$lopatky_posun_doprava_form = addslashes(htmlspecialchars(trim("$_POST[lopatky_posun_doprava]")));
$lopatky_vylezaji_ven_form = addslashes(htmlspecialchars(trim("$_POST[lopatky_vylezaji_ven]")));

$bederni_prohnuti_form = addslashes(htmlspecialchars(trim("$_POST[bederni_prohnuti]")));
$bederni_vyoseni_doleva_form = addslashes(htmlspecialchars(trim("$_POST[bederni_vyoseni_doleva]")));
$bederni_vyoseni_doprava_form = addslashes(htmlspecialchars(trim("$_POST[bederni_vyoseni_doprava]")));
$bederni_vyhrez_form = addslashes(htmlspecialchars(trim("$_POST[bederni_vyhrez]")));

$hypermobilita_krcni_pater_form = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_krcni_pater]")));
$hypermobilita_hrudni_pater_form = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_hrudni_pater]")));
$hypermobilita_bederni_pater_form = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_bederni_pater]")));
$hypermobilita_krizova_kost_form = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_krizova_kost]")));
$hypermobilita_kostrc_form = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_kostrc]")));
$hypermobilita_ramena_form = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_ramena]")));
$hypermobilita_lokty_form = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_lokty]")));
$hypermobilita_zapesti_form = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_zapesti]")));
$hypermobilita_prsty_na_rukou_form = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_prsty_na_rukou]")));
$hypermobilita_kycle_form = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_kycle]")));
$hypermobilita_kolena_form = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_kolena]")));
$hypermobilita_kotniky_form = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_kotniky]")));
$hypermobilita_prsty_na_nohou_form = addslashes(htmlspecialchars(trim("$_POST[hypermobilita_prsty_na_nohou]")));

$svaly_ztuhle_form = addslashes(htmlspecialchars(trim("$_POST[svaly_ztuhle]")));
$svaly_povolene_form = addslashes(htmlspecialchars(trim("$_POST[svaly_povolene]")));
$svaly_poznamka_form = addslashes(htmlspecialchars(trim("$_POST[svaly_poznamka]")));

$hmotnost_form = addslashes(htmlspecialchars(trim("$_POST[hmotnost]")));
$kg_form = addslashes(htmlspecialchars(trim("$_POST[kg]")));



   // echo 'ID_uzivatel: '.$uzivatel_id.'<br>';
    //echo 'nohy_x: '.$nohy_x.'<br/>';
    //echo 'nohy_O: '.$nohy_O.'<br/>';
    //echo 'nohy_posun_doleva: '.$nohy_posun_doleva.'<br/>';
    //echo 'nohy_posun_doprava: '.$nohy_posun_doprava.'<br/>';
    //echo 'nohy_prava_delsi_nez_leva: '.$nohy_prava_delsi_nez_leva.'<br/>';
    //echo 'nohy_leva_delsi_nez_prava: '.$nohy_leva_delsi_nez_prava.'<br/>';

    //echo 'vybocene_palce: '.$vybocene_palce.'<br/>';
    //echo 'ploche_nohy: '.$ploche_nohy.'<br/>';
    //echo 'skrcene_prsty: '.$skrcene_prsty.'<br/>';
    //echo 'prsty_blizko_u_sebe: '.$prsty_blizko_u_sebe.'<br/>';
    //echo 'ostruhy: '.$ostruhy.'<br/>';
    //echo 'ztuhle_narty: '.$ztuhle_narty.'<br/>';

    //echo 'kotniky_zatuhle: '.$kotniky_zatuhle.'<br/>';
    //echo 'kotniky_praskajici: '.$kotniky_praskajici.'<br/>';
    //echo 'kotniky_otekle: '.$kotniky_otekle.'<br/>';
    //echo 'kotniky_zkracene_achylovy_slachy: '.$kotniky_zkracene_achylovy_slachy.'<br/>';

    //echo 'kolena_posun_doleva: '.$kolena_posun_doleva.'<br/>';
    //echo 'kolena_posun_doprava: '.$kolena_posun_doprava.'<br/>';
    //echo 'kolena_stoceni_dovnitr: '.$kolena_stoceni_dovnitr.'<br/>';
    //echo 'kolena_vytoceni_ven: '.$kolena_vytoceni_ven.'<br/>';

    //echo 'panev_preklopena_podsazena: '.$panev_preklopena_podsazena.'<br/>';
    //echo 'panev_preklopena_dopredu: '.$panev_preklopena_dopredu.'<br/>';
    //echo 'panev_posunuta_dopredu_bez_preklopeni: '.$panev_posunuta_dopredu_bez_preklopeni.'<br/>';
    //echo 'panev_posunuta_dozadu_bez_preklopeni: '.$panev_posunuta_dozadu_bez_preklopeni.'<br/>';
    //echo 'panev_posun_doleva: '.$panev_posun_doleva.'<br/>';
    //echo 'panev_posun_doprava: '.$panev_posun_doprava.'<br/>';
    //echo 'panev_rotace_doleva: '.$panev_rotace_doleva.'<br/>';
    //echo 'panev_rotace_doprava: '.$panev_rotace_doprava.'<br/>';
    //echo 'panev_blokada: '.$panev_blokada.'<br/>';

    //echo 'ruce_posun_doleva: '.$ruce_posun_doleva.'<br/>';
    //echo 'ruce_posun_doprava: '.$ruce_posun_doprava.'<br/>';

    //echo 'ramena_posun_doleva: '.$ramena_posun_doleva.'<br/>';
    //echo 'ramena_posun_doprava: '.$ramena_posun_doprava.'<br/>';
    //echo 'ramena_zvednuta_tense_k_usim: '.$ramena_zvednuta_tense_k_usim.'<br/>';
    //echo 'ramena_dychani_do_ramen: '.$ramena_dychani_do_ramen.'<br/>';  

    //echo 'lokty_tenisovy_loket: '.$lokty_tenisovy_loket.'<br/>';

    //echo 'zapesti_karpaly: '.$zapesti_karpaly.'<br/>';
    //echo 'zapesti_neohebnost: '.$zapesti_neohebnost.'<br/>';
    //echo 'zapesti_zatuhlost: '.$zapesti_zatuhlost.'<br/>';  

    //echo 'pater_kulata_zada: '.$pater_kulata_zada.'<br/>';
    //echo 'pater_prohnuta_zada: '.$pater_prohnuta_zada.'<br/>';
    //echo 'pater_plocha_zada: '.$pater_plocha_zada.'<br/>';  
    //echo 'pater_skolioticke_drzeni: '.$pater_skolioticke_drzeni.'<br/>';
    //echo 'pater_dysbalace_leve_ruky: '.$pater_dysbalace_leve_ruky.'<br/>';
    //echo 'pater_dysbalace_prave_ruky: '.$pater_dysbalace_prave_ruky.'<br/>';  

    //echo 'krcni_ztuhlost_sije: '.$krcni_ztuhlost_sije.'<br/>';
    //echo 'krcni_stuhlost_trapezu: '.$krcni_stuhlost_trapezu.'<br/>';
    //echo 'krcni_vyoseni_doleva: '.$krcni_vyoseni_doleva.'<br/>';  
    //echo 'krcni_vyoseni_doprava: '.$krcni_vyoseni_doprava.'<br/>';
    //echo 'krcni_posun_brady_doleva: '.$krcni_posun_brady_doleva.'<br/>';
    //echo 'krcni_posun_brady_doprava: '.$krcni_posun_brady_doprava.'<br/>';  
    //echo 'krcni_mala_lordoza: '.$krcni_mala_lordoza.'<br/>';
    //echo 'krcni_velka_lordoza: '.$krcni_velka_lordoza.'<br/>';
    //echo 'krcni_vyhrez: '.$krcni_vyhrez.'<br/>';  
    //echo 'krcni_zaklon_dozadu: '.$krcni_zaklon_dozadu.'<br/>';
    //echo 'krcni_presun_dopredu: '.$krcni_presun_dopredu.'<br/>';
    //echo 'krcni_hlava_v_ramenou: '.$krcni_hlava_v_ramenou.'<br/>';  
    //echo 'krcni_posun_jazylky: '.$krcni_posun_jazylky.'<br/>';
    //echo 'krcni_oteklost_sije_z_leve_strany: '.$krcni_oteklost_sije_z_leve_strany.'<br/>';
    //echo 'krcni_oteklost_sije_z_prave_strany: '.$krcni_oteklost_sije_z_prave_strany.'<br/>';  


    //echo 'hrudni_vyhrbeni: '.$hrudni_vyhrbeni.'<br/>';
    //echo 'hrudni_prohnuti: '.$hrudni_prohnuti.'<br/>';  
    //echo 'hrudni_hrb_na_zadech: '.$hrudni_hrb_na_zadech.'<br/>';
    //echo 'hrudni_vyoseni_doleva: '.$hrudni_vyoseni_doleva.'<br/>';
    //echo 'hrudni_vyoseni_doprava: '.$hrudni_vyoseni_doprava.'<br/>';  
    //echo 'hrudni_vyhrez: '.$hrudni_vyhrez.'<br/>';
    //echo 'hrudni_blokada_zeber: '.$hrudni_blokada_zeber.'<br/>';
    //echo 'hrudni_posun_zeber_doleva: '.$hrudni_posun_zeber_doleva.'<br/>';  
    //echo 'hrudni_posun_zeber_doprava: '.$hrudni_posun_zeber_doprava.'<br/>';
    //echo 'hrudni_melke_dychani: '.$hrudni_melke_dychani.'<br/>';
    //echo 'hrudni_nepruznost_zeber: '.$hrudni_nepruznost_zeber.'<br/>';  

    //echo 'lopatky_posun_doleva: '.$lopatky_posun_doleva.'<br/>';
    //echo 'lopatky_posun_doprava: '.$lopatky_posun_doprava.'<br/>';
    //echo 'lopatky_vylezaji_ven: '.$lopatky_vylezaji_ven.'<br/>'; 
    
    //echo 'bederni_prohnuti: '.$bederni_prohnuti.'<br/>';
    //echo 'bederni_vyoseni_doleva: '.$bederni_vyoseni_doleva.'<br/>';
    //echo 'bederni_vyoseni_doprava: '.$bederni_vyoseni_doprava.'<br/>';    
    //echo 'bederni_vyhrez: '.$bederni_vyhrez.'<br/>';   

    //echo 'hypermobilita_krcni_pater: '.$hypermobilita_krcni_pater.'<br/>';
    //echo 'hypermobilita_hrudni_pater: '.$hypermobilita_hrudni_pater.'<br/>';
    //echo 'hypermobilita_bederni_pater: '.$hypermobilita_bederni_pater.'<br/>';    
    //echo 'hypermobilita_krizova_kost: '.$hypermobilita_krizova_kost.'<br/>';  
    //echo 'hypermobilita_kostrc: '.$hypermobilita_kostrc.'<br/>';
    //echo 'hypermobilita_ramena: '.$hypermobilita_ramena.'<br/>';
    //echo 'hypermobilita_lokty: '.$hypermobilita_lokty.'<br/>';    
    //echo 'hypermobilita_zapesti: '.$hypermobilita_zapesti.'<br/>';  
    //echo 'hypermobilita_prsty_na_rukou: '.$hypermobilita_prsty_na_rukou.'<br/>';
    //echo 'hypermobilita_kycle: '.$hypermobilita_kycle.'<br/>';
    //echo 'hypermobilita_kolena: '.$hypermobilita_kolena.'<br/>';    
    //echo 'hypermobilita_kotniky: '.$hypermobilita_kotniky.'<br/>';  
    //echo 'hypermobilita_prsty_na_nohou: '.$hypermobilita_prsty_na_nohou.'<br/>';

   //echo 'svaly_ztuhle: '.$svaly_ztuhle.'<br/>';    
   // echo 'svaly_povolene: '.$svaly_povolene.'<br/>';  
   // echo 'svaly_poznamka: '.$svaly_poznamka.'<br/>'; 

  // echo 'hmotnost: '.$hmotnost.'<br/>'; 
  // echo 'kg: '.$kg.'<br/>'; 


        require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
        $sql = "UPDATE uzivatel SET
            uzivatel_hmotnost = '$hmotnost_form',
            uzivatel_kg = '$kg_form'
            WHERE uzivatel_id = '$uzivatel_id'
            ";
            if ($conn->query($sql) === TRUE) {    
            } else {
        echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
            }
            $conn->close(); 




            require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
            $sql = "UPDATE kineziologicky_rozbor SET
            nohy_x = '$nohy_x_form',
            nohy_O = '$nohy_O_form',
            nohy_posun_doleva = '$nohy_posun_doleva_form',
            nohy_posun_doprava = '$nohy_posun_doprava_form',
            nohy_prava_delsi_nez_leva = '$nohy_prava_delsi_nez_leva_form',
            nohy_leva_delsi_nez_prava = '$nohy_leva_delsi_nez_prava_form',
            vybocene_palce = '$vybocene_palce_form',
            ploche_nohy = '$ploche_nohy_form',
            skrcene_prsty = '$skrcene_prsty_form',
            prsty_blizko_u_sebe = '$prsty_blizko_u_sebe_form',
            ostruhy = '$ostruhy_form',
            ztuhle_narty = '$ztuhle_narty_form',

            kotniky_zatuhle = '$kotniky_zatuhle_form',
            kotniky_praskajici = '$kotniky_praskajici_form',
            kotniky_otekle = '$kotniky_otekle_form',
            kotniky_zkracene_achylovy_slachy = '$kotniky_zkracene_achylovy_slachy_form',




            datum =  NOW()
            WHERE uzivatel_id = '$uzivatel_id' ";
            if ($conn->query($sql) === TRUE) {    
            } else {
            echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
            }
            $conn->close(); 























    

?>