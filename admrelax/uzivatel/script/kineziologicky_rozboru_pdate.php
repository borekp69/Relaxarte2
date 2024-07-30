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
$krcni_predsun_dopredu_form = addslashes(htmlspecialchars(trim("$_POST[krcni_predsun_dopredu]")));
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
            kolena_posun_doleva = '$kolena_posun_doleva_form',
            kolena_posun_doprava = '$kolena_posun_doprava_form',
            kolena_stoceni_dovnitr = '$kolena_stoceni_dovnitr_form',
            kolena_vytoceni_ven = '$kolena_vytoceni_ven_form',
            panev_preklopena_podsazena = '$panev_preklopena_podsazena_form',
            panev_preklopena_dopredu = '$panev_preklopena_dopredu_form',
            panev_posunuta_dopredu_bez_preklopeni = '$panev_posunuta_dopredu_bez_preklopeni_form',
            panev_posunuta_dozadu_bez_preklopeni = '$panev_posunuta_dozadu_bez_preklopeni_form',
            panev_posun_doleva = '$panev_posun_doleva_form',
            panev_posun_doprava = '$panev_posun_doprava_form',
            panev_rotace_doleva = '$panev_rotace_doleva_form',
            panev_rotace_doprava = '$panev_rotace_doprava_form',
            panev_blokada = '$panev_blokada_form',
            ruce_posun_doleva = '$ruce_posun_doleva_form',
            ruce_posun_doprava = '$ruce_posun_doprava_form',
            ramena_posun_doleva = '$ramena_posun_doleva_form',
            ramena_posun_doprava = '$ramena_posun_doprava_form',
            ramena_zvednuta_tense_k_usim = '$ramena_zvednuta_tense_k_usim_form',
            ramena_dychani_do_ramen = '$ramena_dychani_do_ramen_form',
            lokty_tenisovy_loket = '$lokty_tenisovy_loket_form',
            zapesti_karpaly = '$zapesti_karpaly_form',
            zapesti_neohebnost = '$zapesti_neohebnost_form',
            zapesti_zatuhlost = '$zapesti_zatuhlost_form',
            pater_kulata_zada = '$pater_kulata_zada_form',
            pater_prohnuta_zada = '$pater_prohnuta_zada_form',
            pater_plocha_zada = '$pater_plocha_zada_form',
            pater_skolioticke_drzeni = '$pater_skolioticke_drzeni_form',
            pater_dysbalace_leve_ruky = '$pater_dysbalace_leve_ruky_form',
            pater_dysbalace_prave_ruky = '$pater_dysbalace_prave_ruky_form',
            krcni_ztuhlost_sije = '$krcni_ztuhlost_sije_form',
            krcni_stuhlost_trapezu = '$krcni_stuhlost_trapezu_form',
            krcni_vyoseni_doleva = '$krcni_vyoseni_doleva_form',
            krcni_vyoseni_doprava = '$krcni_vyoseni_doprava_form',
            krcni_posun_brady_doleva = '$krcni_posun_brady_doleva_form',
            krcni_posun_brady_doprava = '$krcni_posun_brady_doprava_form',
            krcni_mala_lordoza = '$krcni_mala_lordoza_form',
            krcni_velka_lordoza = '$krcni_velka_lordoza_form',
            krcni_vyhrez = '$krcni_vyhrez_form',
            krcni_zaklon_dozadu = '$krcni_zaklon_dozadu_form',
            krcni_predsun_dopredu = '$krcni_predsun_dopredu_form',
            krcni_hlava_v_ramenou = '$krcni_hlava_v_ramenou_form',
            krcni_posun_jazylky = '$krcni_posun_jazylky_form',
            krcni_oteklost_sije_z_leve_strany = '$krcni_oteklost_sije_z_leve_strany_form',
            krcni_oteklost_sije_z_prave_strany = '$krcni_oteklost_sije_z_prave_strany_form',
            hrudni_vyhrbeni = '$hrudni_vyhrbeni_form',
            hrudni_prohnuti = '$hrudni_prohnuti_form',
            hrudni_hrb_na_zadech = '$hrudni_hrb_na_zadech_form',
            hrudni_vyoseni_doleva = '$hrudni_vyoseni_doleva_form',
            hrudni_vyoseni_doprava = '$hrudni_vyoseni_doprava_form',
            hrudni_vyhrez = '$hrudni_vyhrez_form',
            hrudni_blokada_zeber = '$hrudni_blokada_zeber_form',
            hrudni_posun_zeber_doleva = '$hrudni_posun_zeber_doleva_form',
            hrudni_posun_zeber_doprava = '$hrudni_posun_zeber_doprava_form',
            hrudni_melke_dychani = '$hrudni_melke_dychani_form',
            hrudni_nepruznost_zeber = '$hrudni_nepruznost_zeber_form',
            lopatky_posun_doleva = '$lopatky_posun_doleva_form',
            lopatky_posun_doprava = '$lopatky_posun_doprava_form',
            lopatky_vylezaji_ven = '$lopatky_vylezaji_ven_form',
            bederni_prohnuti = '$bederni_prohnuti_form',
            bederni_vyoseni_doleva = '$bederni_vyoseni_doleva_form',
            bederni_vyoseni_doprava = '$bederni_vyoseni_doprava_form',
            bederni_vyhrez = '$bederni_vyhrez_form',
            hypermobilita_krcni_pater = '$hypermobilita_krcni_pater_form',
            hypermobilita_hrudni_pater = '$hypermobilita_hrudni_pater_form',
            hypermobilita_bederni_pater = '$hypermobilita_bederni_pater_form',
            hypermobilita_krizova_kost = '$hypermobilita_krizova_kost_form',
            hypermobilita_kostrc = '$hypermobilita_kostrc_form',
            hypermobilita_ramena = '$hypermobilita_ramena_form',
            hypermobilita_lokty = '$hypermobilita_lokty_form',
            hypermobilita_zapesti = '$hypermobilita_zapesti_form',
            hypermobilita_prsty_na_rukou = '$hypermobilita_prsty_na_rukou_form',
            hypermobilita_kycle = '$hypermobilita_kycle_form',
            hypermobilita_kolena = '$hypermobilita_kolena_form',
            hypermobilita_kotniky = '$hypermobilita_kotniky_form',
            hypermobilita_prsty_na_nohou = '$hypermobilita_prsty_na_nohou_form',
            svaly_ztuhle = '$svaly_ztuhle_form',
            svaly_povolene = '$svaly_povolene_form',
            svaly_poznamka = '$svaly_poznamka_form',
            datum =  NOW()
            WHERE uzivatel_id = '$uzivatel_id' ";
            if ($conn->query($sql) === TRUE) {    
            } else {
            echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
            }
            $conn->close();    

?>


    <form id="kinez_rozbor" name="kinez_rozbor" method="post">

            <?
            require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
            $sql = "SELECT uzivatel_hmotnost, uzivatel_kg FROM uzivatel WHERE uzivatel_id = $uzivatel_id LIMIT 1";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) {
            $uzivatel_hmotnost =  $row["uzivatel_hmotnost"];
            $uzivatel_kg =  $row["uzivatel_kg"];
            }
            $conn->close();
            ?>

            <br/>
            <label for="uzivatel">Kineziologický rozbor:</label> 


        <?
            if (!$uzivatel_hmotnost && $uzivatel_kg == 0 ){
               // echo 'Uživatel musí vyplnit údaje<br>';
        ?>
        <br/><br/>
        <label for="uzivatel">Uživatel zatím nevyplnil požadované informace o aktuální hmotnosti.</label><br/><br/>
            <a href="krok_03_ulozeni.php?uzivatel_id=<? echo encrypt_decrypt('encrypt', $uzivatel_id);?>" type="button" class="btn btn-warning btn-sm">Doplnit data nyní</a>
            <br/><br/>
        <?          
            }else{

              //  echo 'tady bude fotmulář<br>';
          
            
            ?>


            <div class="row">
                <div class="col-sm-4">
                    <br/>
                    <label for="uzivatel">Aktuální hmotnost, vyberte jednu z možností:</label> 
                    <select class="form-control" id="zobrazpole" name="hmotnost">
                    <option value="0"> -- Vyberte stav hmotnosti --</option>
        
                    <?
                    if ($uzivatel_hmotnost == 'Vyhovuje'){ ?>
                    <option value="Vyhovuje" selected>Hmotnost je vyhovující</option>
                    <option value="Nadváha">Nadváha</option>
                    <option value="Podváha">Nízká hmotnost</option>

                    <? }elseif ($uzivatel_hmotnost == 'Nadváha'){ ?>  
                    <option value="Vyhovuje">Hmotnost je vyhovující</option>
                    <option value="Nadváha" selected>Nadváha</option>
                    <option value="Podváha">Nízká hmotnost</option>
        
                    <?  }else{ ?>
                    <option value="Vyhovuje">Hmotnost je vyhovující</option>
                    <option value="Nadváha">Nadváha</option>
                    <option value="Podváha" selected>Nízká hmotnost</option>
                    <? }?>
                    </select>
                    <br>    
                </div>


                <div class="form-group" id="otherFieldGroupDiv">
                    <div class="col-sm-4">
                        <br/>
                        <label for="uzivatel">Napište požadovanou korekci hmotnosti v kg:</label>
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" id="vahakg" value = "<?echo $uzivatel_kg;?>" name="kg" maxlength="2" placeholder="Napište číslo v kg">
                        <br>
                    </div>
                </div>
                <script src="./js/vaha.js"></script>    
            </div>


            <?
              }
  

            function GenerujDiv($jmeno, $hodnota, $popis)
            {
                if ($hodnota == 1){
                    echo '<label><input type="checkbox" name="'.$jmeno.'" value="1" checked>'.$popis.'</label> ';

                }else{

                    echo '<label><input type="checkbox" name="'.$jmeno.'" value="1">'.$popis.'</label> ';

                }
            
            }

        require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
        $sql_kineziologicky_rozbor = "SELECT * FROM kineziologicky_rozbor WHERE uzivatel_id = $uzivatel_id LIMIT 1";
        $result_kineziologicky_rozbor = $conn->query($sql_kineziologicky_rozbor);
        while($radek = $result_kineziologicky_rozbor->fetch_assoc()) {
        $nohy_x = $radek["nohy_x"];
        $nohy_O = $radek["nohy_O"];
        $nohy_posun_doleva = $radek["nohy_posun_doleva"];
        $nohy_posun_doprava = $radek["nohy_posun_doprava"];
        $nohy_prava_delsi_nez_leva = $radek["nohy_prava_delsi_nez_leva"]; 
        $nohy_leva_delsi_nez_prava = $radek["nohy_leva_delsi_nez_prava"]; 
        $vybocene_palce = $radek["vybocene_palce"];
        $ploche_nohy = $radek["ploche_nohy"];
        $skrcene_prsty = $radek["skrcene_prsty"];
        $prsty_blizko_u_sebe = $radek["prsty_blizko_u_sebe"];
        $ostruhy = $radek["ostruhy"];
        $ztuhle_narty = $radek["ztuhle_narty"];
        $kotniky_zatuhle = $radek["kotniky_zatuhle"];
        $kotniky_praskajici = $radek["kotniky_praskajici"];
        $kotniky_otekle = $radek["kotniky_otekle"];
        $kotniky_zkracene_achylovy_slachy = $radek["kotniky_zkracene_achylovy_slachy"];
        $kolena_posun_doleva = $radek["kolena_posun_doleva"];
        $kolena_posun_doprava = $radek["kolena_posun_doprava"];
        $kolena_stoceni_dovnitr = $radek["kolena_stoceni_dovnitr"];
        $kolena_vytoceni_ven = $radek["kolena_vytoceni_ven"];
        $panev_preklopena_podsazena = $radek["panev_preklopena_podsazena"];
        $panev_preklopena_dopredu = $radek["panev_preklopena_dopredu"];
        $panev_posunuta_dopredu_bez_preklopeni = $radek["panev_posunuta_dopredu_bez_preklopeni"];
        $panev_posunuta_dozadu_bez_preklopeni = $radek["panev_posunuta_dozadu_bez_preklopeni"];
        $panev_posun_doleva = $radek["panev_posun_doleva"];
        $panev_posun_doprava = $radek["panev_posun_doprava"];
        $panev_rotace_doleva = $radek["panev_rotace_doleva"];
        $panev_rotace_doprava = $radek["panev_rotace_doprava"];
        $panev_blokada = $radek["panev_blokada"];
        $ruce_posun_doleva = $radek["ruce_posun_doleva"];
        $ruce_posun_doprava = $radek["ruce_posun_doprava"];
        $ramena_posun_doleva = $radek["ramena_posun_doleva"];
        $ramena_posun_doprava = $radek["ramena_posun_doprava"];
        $ramena_zvednuta_tense_k_usim = $radek["ramena_zvednuta_tense_k_usim"];
        $ramena_dychani_do_ramen = $radek["ramena_dychani_do_ramen"];
        $lokty_tenisovy_loket = $radek["lokty_tenisovy_loket"];
        $zapesti_karpaly = $radek["zapesti_karpaly"];
        $zapesti_neohebnost = $radek["zapesti_neohebnost"];
        $zapesti_zatuhlost = $radek["zapesti_zatuhlost"];
        $pater_kulata_zada = $radek["pater_kulata_zada"];
        $pater_prohnuta_zada = $radek["pater_prohnuta_zada"];
        $pater_plocha_zada = $radek["pater_plocha_zada"];
        $pater_skolioticke_drzeni = $radek["pater_skolioticke_drzeni"];
        $pater_dysbalace_prave_ruky = $radek["pater_dysbalace_prave_ruky"];
        $pater_dysbalace_leve_ruky = $radek["pater_dysbalace_leve_ruky"];
        $krcni_ztuhlost_sije = $radek["krcni_ztuhlost_sije"];
        $krcni_stuhlost_trapezu = $radek["krcni_stuhlost_trapezu"];
        $krcni_vyoseni_doleva = $radek["krcni_vyoseni_doleva"];
        $krcni_vyoseni_doprava = $radek["krcni_vyoseni_doprava"];
        $krcni_posun_brady_doleva = $radek["krcni_posun_brady_doleva"];
        $krcni_posun_brady_doprava = $radek["krcni_posun_brady_doprava"];
        $krcni_mala_lordoza = $radek["krcni_mala_lordoza"];
        $krcni_velka_lordoza = $radek["krcni_velka_lordoza"];
        $krcni_vyhrez = $radek["krcni_vyhrez"];
        $krcni_zaklon_dozadu = $radek["krcni_zaklon_dozadu"];
        $krcni_predsun_dopredu = $radek["krcni_predsun_dopredu"];
        $krcni_hlava_v_ramenou = $radek["krcni_hlava_v_ramenou"];
        $krcni_posun_jazylky = $radek["krcni_posun_jazylky"];
        $krcni_oteklost_sije_z_leve_strany = $radek["krcni_oteklost_sije_z_leve_strany"];
        $krcni_oteklost_sije_z_prave_strany = $radek["krcni_oteklost_sije_z_prave_strany"];
        $hrudni_vyhrbeni = $radek["hrudni_vyhrbeni"];
        $hrudni_prohnuti = $radek["hrudni_prohnuti"];
        $hrudni_hrb_na_zadech = $radek["hrudni_hrb_na_zadech"];
        $hrudni_vyoseni_doleva = $radek["hrudni_vyoseni_doleva"];
        $hrudni_vyoseni_doprava = $radek["hrudni_vyoseni_doprava"];
        $hrudni_vyhrez = $radek["hrudni_vyhrez"];
        $hrudni_blokada_zeber = $radek["hrudni_blokada_zeber"];
        $hrudni_posun_zeber_doleva = $radek["hrudni_posun_zeber_doleva"];
        $hrudni_posun_zeber_doprava = $radek["hrudni_posun_zeber_doprava"];
        $hrudni_melke_dychani = $radek["hrudni_melke_dychani"];
        $hrudni_nepruznost_zeber = $radek["hrudni_nepruznost_zeber"];
        $lopatky_posun_doleva = $radek["lopatky_posun_doleva"];
        $lopatky_posun_doprava = $radek["lopatky_posun_doprava"];
        $lopatky_vylezaji_ven = $radek["lopatky_vylezaji_ven"];
        $bederni_prohnuti = $radek["bederni_prohnuti"];
        $bederni_vyoseni_doleva = $radek["bederni_vyoseni_doleva"];
        $bederni_vyoseni_doprava = $radek["bederni_vyoseni_doprava"];
        $bederni_vyhrez = $radek["bederni_vyhrez"]; 
        $hypermobilita_krcni_pater = $radek["hypermobilita_krcni_pater"]; 
        $hypermobilita_hrudni_pater = $radek["hypermobilita_hrudni_pater"]; 
        $hypermobilita_bederni_pater = $radek["hypermobilita_bederni_pater"]; 
        $hypermobilita_krizova_kost = $radek["hypermobilita_krizova_kost"]; 
        $hypermobilita_kostrc = $radek["hypermobilita_kostrc"]; 
        $hypermobilita_ramena = $radek["hypermobilita_ramena"]; 
        $hypermobilita_lokty = $radek["hypermobilita_lokty"]; 
        $hypermobilita_zapesti = $radek["hypermobilita_zapesti"]; 
        $hypermobilita_prsty_na_rukou = $radek["hypermobilita_prsty_na_rukou"]; 
        $hypermobilita_kycle = $radek["hypermobilita_kycle"]; 
        $hypermobilita_kolena = $radek["hypermobilita_kolena"]; 
        $hypermobilita_kotniky = $radek["hypermobilita_kotniky"]; 
        $hypermobilita_prsty_na_nohou = $radek["hypermobilita_prsty_na_nohou"];  
        $svaly_ztuhle = $radek["svaly_ztuhle"];  
        $svaly_povolene = $radek["svaly_povolene"];  
        $svaly_poznamka = $radek["svaly_poznamka"];  


        } 

        $conn->close(); 
        ?>
            <div class="row" style="background-color:#f2f3f5;">
            <div class="col-sm-12">

                <div class="row">   
                    <div class="col-sm-2" style="background-color:#faf7bd;">
                            <br>
                            <label for="uzivatel">Postavení nohou:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('nohy_x', $nohy_x, 'X') ?>                  
                            
                    </div>
                            <div class="checkbox">
                            <?  GenerujDiv('nohy_O', $nohy_O, 'O') ?>   
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('nohy_posun_doleva', $nohy_posun_doleva, 'posun doleva') ?>      
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('nohy_posun_doprava', $nohy_posun_doprava, 'posun doprava') ?>    
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('nohy_prava_delsi_nez_leva', $nohy_prava_delsi_nez_leva, 'pravá delší než levá') ?>    
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('nohy_leva_delsi_nez_prava', $nohy_leva_delsi_nez_prava, 'levá delší než pravá ') ?>    
                            </div>                    




                    </div>

                    <div class="col-sm-2" style="background-color:#c0f9f8;">
                            <br>
                            <label for="uzivatel">Plosky nohou:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('vybocene_palce', $vybocene_palce, 'vybočené palce') ?>      
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('ploche_nohy', $ploche_nohy, 'ploché nohy') ?>       
                            

                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('skrcene_prsty', $skrcene_prsty, 'skrčené prsty') ?>       
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('prsty_blizko_u_sebe', $prsty_blizko_u_sebe, 'prsty blízko u sebe') ?>   
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('ostruhy', $ostruhy, 'ostruhy') ?>     
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('ztuhle_narty', $ztuhle_narty, 'ztuhlé nárty') ?>  
                            
                            </div>
                    </div>


                    <div class="col-sm-3" style="background-color:#d5ec95;">
                            <br>
                            <label for="uzivatel">Kotníky:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('kotniky_zatuhle', $kotniky_zatuhle, 'zatuhlé') ?>  

                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('kotniky_praskajici', $kotniky_praskajici, 'praskající') ?> 

                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('kotniky_otekle', $kotniky_otekle, 'oteklé') ?> 
        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('kotniky_zkracene_achylovy_slachy', $kotniky_zkracene_achylovy_slachy, 'zkrácené achylovy šlachy') ?>    

                            </div>
                    </div>

                    <div class="col-sm-2" style="background-color:#fae6aa;">
                            <br>
                            <label for="uzivatel">Kolena:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('kolena_posun_doleva', $kolena_posun_doleva, 'posun doleva') ?>      

                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('kolena_posun_doprava', $kolena_posun_doprava, 'posun doprava') ?>  

                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('kolena_stoceni_dovnitr', $kolena_stoceni_dovnitr, 'stočení dovnitř') ?>    
        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('kolena_vytoceni_ven', $kolena_vytoceni_ven, 'vytočení ven') ?> 
                        
                            </div>
                    </div>

                    <div class="col-sm-3" style="background-color:#f7d7b8;">
                            <br>
                            <label for="uzivatel">Pánev:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('panev_preklopena_podsazena', $panev_preklopena_podsazena, 'překlopená - podsazená') ?> 
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('panev_preklopena_dopredu', $panev_preklopena_dopredu, 'překlopená - dopředu') ?>    
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('panev_posunuta_dopredu_bez_preklopeni', $panev_posunuta_dopredu_bez_preklopeni, 'posunutá dopředu bez překlopení') ?>     
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('panev_posunuta_dozadu_bez_preklopeni', $panev_posunuta_dozadu_bez_preklopeni, 'posunutá dozadu bez překlopení') ?>      
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('panev_posun_doleva', $panev_posun_doleva, 'posun doleva') ?>  
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('panev_posun_doprava', $panev_posun_doprava, 'posun doprava') ?>     
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('panev_rotace_doleva', $panev_rotace_doleva, 'rotace doleva') ?>    
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('panev_rotace_doprava', $panev_rotace_doprava, 'rotace doprava') ?> 
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('panev_blokada', $panev_blokada, 'blokáda') ?> 
                            
                            </div>
                    </div>
            
                </div>


                <div class="row">  

                    <div class="col-sm-2" style="background-color:#ece0f4;">
                            <br>
                            <label for="uzivatel">Postavení rukou:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('ruce_posun_doleva', $ruce_posun_doleva, 'posun doleva') ?> 
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('ruce_posun_doprava', $ruce_posun_doprava, 'posun doprava') ?> 
                            
                            </div>
                    </div>

                    <div class="col-sm-3" style="background-color:#eacbd7;">
                            <br>
                            <label for="uzivatel">Ramena:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('ramena_posun_doleva', $ramena_posun_doleva, 'posun doleva') ?>    
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('ramena_posun_doprava', $ramena_posun_doprava, 'posun doprava') ?>        
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('ramena_zvednuta_tense_k_usim', $ramena_zvednuta_tense_k_usim, 'zvednutá tense k uším') ?>      
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('ramena_dychani_do_ramen', $ramena_dychani_do_ramen, 'dýchání do ramen') ?>      
                            
                            </div>

                    </div>

                    <div class="col-sm-2" style="background-color:#d1d6f7;">
                            <br>
                            <label for="uzivatel">Lokty:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('lokty_tenisovy_loket', $lokty_tenisovy_loket, 'tenisový loket') ?>  
                            
                            </div> 
                    </div>  

                    <div class="col-sm-2" style="background-color:#d1f7e7;">
                            <br>
                            <label for="uzivatel">Zápěstí:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('zapesti_karpaly', $zapesti_karpaly, 'karpály') ?>  
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('zapesti_neohebnost', $zapesti_neohebnost, 'neohebnost') ?>  
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('zapesti_zatuhlost', $zapesti_zatuhlost, 'zatuhlost') ?> 
                            
                            </div>

                    </div>  

                    <div class="col-sm-3" style="background-color:#f7f5d1;">
                            <br>
                            <label for="uzivatel">Postavení páteře:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('pater_kulata_zada', $pater_kulata_zada, 'Kulatá záda') ?>    
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('pater_prohnuta_zada', $pater_prohnuta_zada, 'Prohnutá záda') ?> 
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('pater_plocha_zada', $pater_plocha_zada, 'Plochá záda') ?>    
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('pater_skolioticke_drzeni', $pater_skolioticke_drzeni, 'Skoliotické držení') ?>
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('pater_dysbalace_leve_ruky', $pater_dysbalace_leve_ruky, 'Dysbalance levé ruky') ?>   
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('pater_dysbalace_prave_ruky', $pater_dysbalace_prave_ruky, 'Dysbalance pravé ruky') ?>  
                            
                            </div>
                
                    </div>
                </div>

                <div class="row">  

                    <div class="col-sm-4" style="background-color:#f9e9aa;">
                            <br>
                            <label for="uzivatel">Krční:</label>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_ztuhlost_sije', $krcni_ztuhlost_sije, 'ztuhlost šíje') ?>     
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_stuhlost_trapezu', $krcni_stuhlost_trapezu, 'ztuhlost trapézů') ?> 
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_vyoseni_doleva', $krcni_vyoseni_doleva, 'vyosení doleva') ?>
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_vyoseni_doprava', $krcni_vyoseni_doprava, 'vyosení doprava') ?>
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_posun_brady_doleva', $krcni_posun_brady_doleva, 'posun brady doleva') ?>   
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_posun_brady_doprava', $krcni_posun_brady_doprava, 'posun brady doprava') ?>  
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_mala_lordoza', $krcni_mala_lordoza, 'malá lordóza') ?>  
                        
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_velka_lordoza', $krcni_velka_lordoza, 'velká lordóza') ?>  
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_vyhrez', $krcni_vyhrez, 'výhřez') ?>  
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_zaklon_dozadu', $krcni_zaklon_dozadu, 'záklon dozadu (brada zvednutá nahoru)') ?> 
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_predsun_dopredu', $krcni_predsun_dopredu, 'předsun dopředu') ?> 
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_hlava_v_ramenou', $krcni_hlava_v_ramenou, 'hlava v ramenou') ?> 
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_posun_jazylky', $krcni_posun_jazylky, 'posun jazylky') ?> 
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_oteklost_sije_z_leve_strany', $krcni_oteklost_sije_z_leve_strany, 'oteklost šíje z levé strany') ?> 
                            
                            </div>
                            <div class="checkbox">
                            <?  GenerujDiv('krcni_oteklost_sije_z_prave_strany', $krcni_oteklost_sije_z_prave_strany, 'oteklost šíje z pravé strany') ?> 
                            
                            </div>            
                    </div>

                    <div class="col-sm-2" style="background-color:#aaebf9;">
                        <br>
                        <label for="uzivatel">Hrudní:</label>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_vyhrbeni', $hrudni_vyhrbeni, 'vyhrbení') ?>     
                        
                        </div> 
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_prohnuti', $hrudni_prohnuti, 'prohnutí') ?> 
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_hrb_na_zadech', $hrudni_hrb_na_zadech, 'hrb na zádech') ?> 
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_vyoseni_doleva', $hrudni_vyoseni_doleva, 'vyosení doleva') ?> 
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_vyoseni_doprava', $hrudni_vyoseni_doprava, 'vyosení doprava') ?> 
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_vyhrez', $hrudni_vyhrez, 'výhřez') ?> 
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_blokada_zeber', $hrudni_blokada_zeber, 'blokáda žeber') ?> 
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_posun_zeber_doleva', $hrudni_posun_zeber_doleva, 'posun žeber doleva') ?> 
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_posun_zeber_doprava', $hrudni_posun_zeber_doprava, 'posun žeber doprava') ?> 
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_melke_dychani', $hrudni_melke_dychani, 'mělké dýchání') ?> 
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hrudni_nepruznost_zeber', $hrudni_nepruznost_zeber, 'nepružnost žeber') ?> 
                    
                        </div>        
                    </div>


                    <div class="col-sm-2" style="background-color:#baf9aa;">
                        <br>
                        <label for="uzivatel">Lopatky:</label>
                        <div class="checkbox">
                        <?  GenerujDiv('lopatky_posun_doleva', $lopatky_posun_doleva, 'posun doleva') ?> 
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('lopatky_posun_doprava', $lopatky_posun_doprava, 'posun doprava') ?> 
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('lopatky_vylezaji_ven', $lopatky_vylezaji_ven, 'vylézají ven') ?> 
                    
                        </div>
                    </div>

                    <div class="col-sm-2" style="background-color:#f9c8aa;">
                        <br>
                        <label for="uzivatel">Bederní:</label>
                        <div class="checkbox">
                        <?  GenerujDiv('bederni_prohnuti', $bederni_prohnuti, 'prohnutí') ?> 
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('bederni_vyoseni_doleva', $bederni_vyoseni_doleva, 'vyosení doleva') ?>
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('bederni_vyoseni_doprava', $bederni_vyoseni_doprava, 'vyosení doprava') ?>
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('bederni_vyhrez', $bederni_vyhrez, 'výhřez') ?>
                        
                        </div>
                    </div>

                    <div class="col-sm-2" style="background-color:#f9f3aa;">
                        <br>
                        <label for="uzivatel">Hypermobilita:</label>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_krcni_pater', $hypermobilita_krcni_pater, 'krční páteř') ?>
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_hrudni_pater', $hypermobilita_hrudni_pater, 'hrudní páteř') ?>
                
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_bederni_pater', $hypermobilita_bederni_pater, 'bederní páteř') ?>
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_krizova_kost', $hypermobilita_krizova_kost, 'křížová kost') ?>
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_kostrc', $hypermobilita_kostrc, 'kostrč') ?>
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_ramena', $hypermobilita_ramena, 'ramena') ?>
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_lokty', $hypermobilita_lokty, 'lokty') ?>
                        
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_zapesti', $hypermobilita_zapesti, 'zápěstí') ?>
                
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_prsty_na_rukou', $hypermobilita_prsty_na_rukou, 'prsty na rukou') ?>
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_kycle', $hypermobilita_kycle, 'kyčle') ?>
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_kolena', $hypermobilita_kolena, 'kolena') ?>
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_kotniky', $hypermobilita_kotniky, 'kotníky') ?>
                    
                        </div>
                        <div class="checkbox">
                        <?  GenerujDiv('hypermobilita_prsty_na_nohou', $hypermobilita_prsty_na_nohou, 'prsty na nohou') ?>
                    
                        </div>

                    </div>

                </div>

                <H4 align="center">Svaly</H4>
                <div class="row"> 
                    <div class="col-sm-12">
                        
                        <label for="uzivatel">Ztuhlé:</label>
                        <textarea class="form-control" id="svaly_ztuhle" name="svaly_ztuhle" rows="2" maxlength="200" style="background-color:#FFFFFF;"><? echo $svaly_ztuhle; ?></textarea>
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-sm-12">
                        <br/>
                        <label for="uzivatel">Povolené:</label>
                        <textarea class="form-control" id="svaly_povolene" name="svaly_povolene" rows="2" maxlength="200" style="background-color:#FFFFFF;"><? echo $svaly_povolene; ?></textarea>
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-sm-12">
                        <br/>
                        <label for="uzivatel">Poznámka:</label>
                        <textarea class="form-control" id="svaly_poznamka" name="svaly_poznamka" rows="3" maxlength="200" style="background-color:#FFFFFF;"><? echo $svaly_poznamka; ?></textarea>
                        <br/>    
                    </div>
                </div>


            </div>
            </div>
            </form>
    <br>
    <button type="submit" class="btn btn-success btn-sm"  onclick="loadKineziologicky_rozbor()">&nbsp;&nbsp;Uložit kineziologický rozbor&nbsp;&nbsp;</button>

