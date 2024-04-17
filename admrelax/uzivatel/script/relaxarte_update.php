<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");
$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));
$cosejinamneveslo_form = addslashes(htmlspecialchars(trim("$_POST[cosejinamneveslo]")));

$neuspokujici_zdravotni_stav_form = addslashes(htmlspecialchars(trim("$_POST[neuspokujici_zdravotni_stav]"))); 
if (!$neuspokujici_zdravotni_stav_form) { $neuspokujici_zdravotni_stav_form = 0; }
$nezvladani_stresu_form = addslashes(htmlspecialchars(trim("$_POST[nezvladani_stresu]"))); 
if (!$nezvladani_stresu_form) { $nezvladani_stresu_form = 0; }
$psychicke_problemy_form = addslashes(htmlspecialchars(trim("$_POST[psychicke_problemy]"))); 
if (!$psychicke_problemy_form) { $psychicke_problemy_form = 0; }
$problem_s_hmotnosti_form = addslashes(htmlspecialchars(trim("$_POST[problem_s_hmotnosti]"))); 
if (!$problem_s_hmotnosti_form) { $problem_s_hmotnosti_form = 0; }
$samota_form = addslashes(htmlspecialchars(trim("$_POST[samota]"))); 
if (!$samota_form) { $samota_form = 0; }
$unavovy_syndrom_form = addslashes(htmlspecialchars(trim("$_POST[unavovy_syndrom]"))); 
if (!$unavovy_syndrom_form) { $unavovy_syndrom_form = 0; }
$zvedavost_form = addslashes(htmlspecialchars(trim("$_POST[zvedavost]"))); 
if (!$zvedavost_form) { $zvedavost_form = 0; }


$nabrat_svaly_form = addslashes(htmlspecialchars(trim("$_POST[nabrat_svaly]"))); 
if (!$nabrat_svaly_form) { $nabrat_svaly_form = 0; }
$naucit_se_pracovat_s_emocemi_form = addslashes(htmlspecialchars(trim("$_POST[naucit_se_pracovat_s_emocemi]"))); 
if (!$naucit_se_pracovat_s_emocemi_form) { $naucit_se_pracovat_s_emocemi_form = 0; }
$naucit_se_spravne_dychat_form = addslashes(htmlspecialchars(trim("$_POST[naucit_se_spravne_dychat]"))); 
if (!$naucit_se_spravne_dychat_form) { $naucit_se_spravne_dychat_form = 0; }
$naucit_se_zvladat_stres_form = addslashes(htmlspecialchars(trim("$_POST[naucit_se_zvladat_stres]"))); 
if (!$naucit_se_zvladat_stres_form) { $naucit_se_zvladat_stres_form = 0; }
$odstranit_psychicke_problemy_form = addslashes(htmlspecialchars(trim("$_POST[odstranit_psychicke_problemy]"))); 
if (!$odstranit_psychicke_problemy_form) { $odstranit_psychicke_problemy_form = 0; }
$poznat_nove_metody_pece_o_zdravi_form = addslashes(htmlspecialchars(trim("$_POST[poznat_nove_metody_pece_o_zdravi]"))); 
if (!$poznat_nove_metody_pece_o_zdravi_form) { $poznat_nove_metody_pece_o_zdravi_form = 0; }
$pribrat_na_hmotnosti_form = addslashes(htmlspecialchars(trim("$_POST[pribrat_na_hmotnosti]"))); 
if (!$pribrat_na_hmotnosti_form) { $pribrat_na_hmotnosti_form = 0; }
$zbavit_se_unavoveho_syndromu_form = addslashes(htmlspecialchars(trim("$_POST[zbavit_se_unavoveho_syndromu]"))); 
if (!$zbavit_se_unavoveho_syndromu_form) { $zbavit_se_unavoveho_syndromu_form = 0; }
$zhubnout_form = addslashes(htmlspecialchars(trim("$_POST[zhubnout]"))); 
if (!$zhubnout_form) { $zhubnout_form = 0; }
$zlepsit_celkovy_zdravotni_stav_form = addslashes(htmlspecialchars(trim("$_POST[zlepsit_celkovy_zdravotni_stav]"))); 
if (!$zlepsit_celkovy_zdravotni_stav_form) { $zlepsit_celkovy_zdravotni_stav_form = 0; }
$zlepsit_fyzickou_kondici_form = addslashes(htmlspecialchars(trim("$_POST[zlepsit_fyzickou_kondici]"))); 
if (!$zlepsit_fyzickou_kondici_form) { $zlepsit_fyzickou_kondici_form = 0; }
$zpevnit_telo_form = addslashes(htmlspecialchars(trim("$_POST[zpevnit_telo]"))); 
if (!$zpevnit_telo_form) { $zpevnit_telo_form = 0; }
$zrelaxovat_form = addslashes(htmlspecialchars(trim("$_POST[zrelaxovat]"))); 
if (!$zrelaxovat_form) { $zrelaxovat_form = 0; }

$osobni_finance_form = addslashes(htmlspecialchars(trim("$_POST[osobni_finance]"))); 
if (!$osobni_finance_form) { $osobni_finance_form = 0; }
$osobni_rodinne_vztahy_form = addslashes(htmlspecialchars(trim("$_POST[osobni_rodinne_vztahy]"))); 
if (!$osobni_rodinne_vztahy_form) { $osobni_rodinne_vztahy_form = 0; }
$osobni_psychika_form = addslashes(htmlspecialchars(trim("$_POST[osobni_psychika]"))); 
if (!$osobni_psychika_form) { $osobni_psychika_form = 0; }
$osobni_sebeduvera_form = addslashes(htmlspecialchars(trim("$_POST[osobni_sebeduvera]"))); 
if (!$osobni_sebeduvera_form) { $osobni_sebeduvera_form = 0; }
$osobni_prace_form = addslashes(htmlspecialchars(trim("$_POST[osobni_prace]"))); 
if (!$osobni_prace_form) { $osobni_prace_form = 0; }
$osobni_zdravotni_stav_form = addslashes(htmlspecialchars(trim("$_POST[osobni_zdravotni_stav]"))); 
if (!$osobni_zdravotni_stav_form) { $osobni_zdravotni_stav_form = 0; }
$osobni_partnerstvi_form = addslashes(htmlspecialchars(trim("$_POST[osobni_partnerstvi]"))); 
if (!$osobni_partnerstvi_form) { $osobni_partnerstvi_form = 0; }

$odpocinek_cestovani_form = addslashes(htmlspecialchars(trim("$_POST[odpocinek_cestovani]"))); 
if (!$odpocinek_cestovani_form) { $odpocinek_cestovani_form = 0; }
$odpocinek_domaci_prace_form = addslashes(htmlspecialchars(trim("$_POST[odpocinek_domaci_prace]"))); 
if (!$odpocinek_domaci_prace_form) { $odpocinek_domaci_prace_form = 0; }
$odpocinek_fyzicky_klidova_form = addslashes(htmlspecialchars(trim("$_POST[odpocinek_fyzicky_klidova]"))); 
if (!$odpocinek_fyzicky_klidova_form) { $odpocinek_fyzicky_klidova_form = 0; }
$odpocinek_posezeni_s_prateli_form = addslashes(htmlspecialchars(trim("$_POST[odpocinek_posezeni_s_prateli]"))); 
if (!$odpocinek_posezeni_s_prateli_form) { $odpocinek_posezeni_s_prateli_form = 0; }
$odpocinek_spanek_form = addslashes(htmlspecialchars(trim("$_POST[odpocinek_spanek]"))); 
if (!$odpocinek_spanek_form) { $odpocinek_spanek_form = 0; }
$odpocinek_sport_form = addslashes(htmlspecialchars(trim("$_POST[odpocinek_sport]"))); 
if (!$odpocinek_sport_form) { $odpocinek_sport_form = 0; }
$odpocinek_vubec_form = addslashes(htmlspecialchars(trim("$_POST[odpocinek_vubec]"))); 
if (!$odpocinek_vubec_form) { $odpocinek_vubec_form = 0; }
$odpocinek_zahrada_form = addslashes(htmlspecialchars(trim("$_POST[odpocinek_zahrada]"))); 
if (!$odpocinek_zahrada_form) { $odpocinek_zahrada_form = 0; }

$budoucnost_form = addslashes(htmlspecialchars(trim("$_POST[budoucnost]")));
$urazy_form = addslashes(htmlspecialchars(trim("$_POST[urazy]")));
$unava_form = addslashes(htmlspecialchars(trim("$_POST[unava]")));
$hmotnost_form = addslashes(htmlspecialchars(trim("$_POST[hmotnost]")));
$kg_form = addslashes(htmlspecialchars(trim("$_POST[kg]")));


//echo 'uzivatel_id: '.$uzivatel_id.'<br>';
//echo 'cosejinamneveslo_form: '.$cosejinamneveslo_form.'<br>';
//echo 'neuspokujici_zdravotni_stav_form: '.$neuspokujici_zdravotni_stav_form.'<br>';
//echo 'nezvladani_stresu_form: '.$nezvladani_stresu_form.'<br>';
//echo 'psychicke_problemy_form: '.$psychicke_problemy_form.'<br>';
//echo 'problem_s_hmotnosti_form: '.$problem_s_hmotnosti_form.'<br>';
//echo 'samota_form: '.$samota_form.'<br>';
//echo 'unavovy_syndrom_form: '.$unavovy_syndrom_form.'<br>';
//echo 'zvedavost_form: '.$zvedavost_form.'<br>';
//echo '----------------------------------------------------------<br>';
//echo 'nabrat_svaly_form: '.$nabrat_svaly_form.'<br>';
//echo 'naucit_se_pracovat_s_emocemi_form: '.$naucit_se_pracovat_s_emocemi_form.'<br>';
//echo 'naucit_se_spravne_dychat_form: '.$naucit_se_spravne_dychat_form.'<br>';
//echo 'naucit_se_zvladat_stres_form: '.$naucit_se_zvladat_stres_form.'<br>';
//echo 'odstranit_psychicke_problemy_form: '.$odstranit_psychicke_problemy_form.'<br>';
//echo 'poznat_nove_metody_pece_o_zdravi_form: '.$poznat_nove_metody_pece_o_zdravi_form.'<br>';
//echo 'pribrat_na_hmotnosti: '.$pribrat_na_hmotnosti_form.'<br>';
//echo 'zbavit_se_unavoveho_syndromu: '.$zbavit_se_unavoveho_syndromu_form.'<br>';
//echo 'zhubnout_form: '.$zhubnout_form.'<br>';
//echo 'zlepsit_celkovy_zdravotni_stav_form: '.$zlepsit_celkovy_zdravotni_stav_form.'<br>';
//echo 'zlepsit_fyzickou_kondici_form: '.$zlepsit_fyzickou_kondici_form.'<br>';
//echo 'zpevnit_telo_form: '.$zpevnit_telo_form.'<br>';
//echo 'zrelaxovat_form: '.$zrelaxovat_form.'<br>';
//echo '----------------------------------------------------------<br>';
//echo 'osobni_finance_form: '.$osobni_finance_form.'<br>';funava
//echo 'osobni_rodinne_vztahy_form: '.$osobni_rodinne_vztahy_form.'<br>';
//echo 'osobni_psychika_form: '.$osobni_psychika_form.'<br>';
//echo 'osobni_sebeduvera_form: '.$osobni_sebeduvera_form.'<br>';
//echo 'osobni_prace_form: '.$osobni_prace_form.'<br>';
//echo 'osobni_zdravotni_stav_form: '.$osobni_zdravotni_stav_form.'<br>';
//echo 'osobni_partnerstvi_form: '.$osobni_partnerstvi_form.'<br>';
//echo '----------------------------------------------------------<br>';
//echo 'odpocinek_cestovani_form: '.$odpocinek_cestovani_form.'<br>';
//echo 'odpocinek_domaci_prace_form: '.$odpocinek_domaci_prace_form.'<br>';
//echo 'odpocinek_fyzicky_klidova_form: '.$odpocinek_fyzicky_klidova_form.'<br>';
//echo 'odpocinek_posezeni_s_prateli_form: '.$odpocinek_posezeni_s_prateli_form.'<br>';
//echo 'odpocinek_spanek_form: '.$odpocinek_spanek_form.'<br>';
//echo 'odpocinek_sport_form: '.$odpocinek_sport_form.'<br>';
//echo 'odpocinek_vubec_form: '.$odpocinek_vubec_form.'<br>';
//echo 'odpocinek_zahrada_form: '.$odpocinek_zahrada_form.'<br>';
//echo '----------------------------------------------------------<br>';
//echo 'budoucnost_form: '.$budoucnost_form.'<br>';
//echo 'urazy_form: '.$urazy_form.'<br>';
//echo 'unava_form: '.$unava_form.'<br>';
//echo 'hmotnost_form: '.$hmotnost_form.'<br>';
//echo 'kg_form: '.$kg_form.'<br>';


require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "UPDATE ras_duvod SET
    neuspokujici_zdravotni_stav = '$neuspokujici_zdravotni_stav_form',
    nezvladani_stresu = '$nezvladani_stresu_form',  
    psychicke_problemy = '$psychicke_problemy_form',  
    problem_s_hmotnosti = '$problem_s_hmotnosti_form',  
    samota = '$samota_form',  
    unavovy_syndrom = '$unavovy_syndrom_form',
    zvedavost = '$zvedavost_form', 
    datum =  NOW()
    WHERE uzivatel_id = '$uzivatel_id' LIMIT 1";
    
    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close(); 


    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "UPDATE uzivatel SET 
    cosejinamneveslo = '$cosejinamneveslo_form'
    WHERE uzivatel_id = '$uzivatel_id' LIMIT 1";
   
   if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close(); 


    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "UPDATE ras_cil SET 
    nabrat_svaly = '$nabrat_svaly_form',
    naucit_se_pracovat_s_emocemi = '$naucit_se_pracovat_s_emocemi_form',
    naucit_se_spravne_dychat = '$naucit_se_spravne_dychat_form',
    naucit_se_zvladat_stres = '$naucit_se_zvladat_stres_form', 
    odstranit_psychicke_problemy = '$odstranit_psychicke_problemy_form', 
    poznat_nove_metody_pece_o_zdravi = '$poznat_nove_metody_pece_o_zdravi_form', 
    pribrat_na_hmotnosti = '$pribrat_na_hmotnosti_form', 
    zbavit_se_unavoveho_syndromu = '$zbavit_se_unavoveho_syndromu_form', 
    zhubnout = '$zhubnout_form', 
    zlepsit_celkovy_zdravotni_stav = '$zlepsit_celkovy_zdravotni_stav_form', 
    zlepsit_fyzickou_kondici = '$zlepsit_fyzickou_kondici_form',  
    zpevnit_telo = '$zpevnit_telo_form', 
    zrelaxovat = '$zrelaxovat_form', 
    datum =  NOW()
    WHERE uzivatel_id = '$uzivatel_id' LIMIT 1";
   
   if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close(); 




    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "UPDATE uzivatel SET 
    osobni_finance = '$osobni_finance_form',
    osobni_rodinne_vztahy = '$osobni_rodinne_vztahy_form',
    osobni_psychika = '$osobni_psychika_form',
    osobni_sebeduvera = '$osobni_sebeduvera_form', 
    osobni_prace = '$osobni_prace_form',
    osobni_zdravotni_stav = '$osobni_zdravotni_stav_form',
    osobni_partnerstvi = '$osobni_partnerstvi_form',
    odpocinek_cestovani = '$odpocinek_cestovani_form',
    odpocinek_domaci_prace = '$odpocinek_domaci_prace_form',
    odpocinek_fyzicky_klidova = '$odpocinek_fyzicky_klidova_form',
    odpocinek_posezeni_s_prateli = '$odpocinek_posezeni_s_prateli_form',
    odpocinek_spanek = '$odpocinek_spanek_form',
    odpocinek_sport = '$odpocinek_sport_form',
    odpocinek_vubec = '$odpocinek_vubec_form',
    odpocinek_zahrada = '$odpocinek_zahrada_form',
    uzivatel_budoucnost = '$budoucnost_form',
    uzivatel_urazy = '$urazy_form',
    uzivatel_unava = '$unava_form',
    uzivatel_hmotnost = '$hmotnost_form',
    uzivatel_kg = '$kg_form'
    WHERE uzivatel_id = '$uzivatel_id' LIMIT 1";
   
   if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close(); 










    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql_duvod = "SELECT * FROM ras_duvod WHERE uzivatel_id = $uzivatel_id LIMIT 1";
    $result_duvod = $conn->query($sql_duvod);
    while($radek = $result_duvod->fetch_assoc()) {
    $neuspokujici_zdravotni_stav = $radek["neuspokujici_zdravotni_stav"];
    $nezvladani_stresu = $radek["nezvladani_stresu"];
    $psychicke_problemy = $radek["psychicke_problemy"];
    $problem_s_hmotnosti = $radek["problem_s_hmotnosti"];
    $samota = $radek["samota"];
    $unavovy_syndrom = $radek["unavovy_syndrom"];
    $zvedavost = $radek["zvedavost"];
    }
    //$conn->close();
    $pocet_zaznamu_duvod = mysqli_num_rows($result_duvod);
    
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql_cil = "SELECT * FROM ras_cil WHERE uzivatel_id = $uzivatel_id LIMIT 1";
    $result_cil = $conn->query($sql_cil);
    $conn->close();
    $pocet_zaznamu_cil = mysqli_num_rows($result_cil);
    
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql_cil = "SELECT * FROM ras_cil WHERE uzivatel_id = $uzivatel_id LIMIT 1";
    $result_cil = $conn->query($sql_cil);
    while($radek = $result_cil->fetch_assoc()) {
    $nabrat_svaly = $radek["nabrat_svaly"];
    $naucit_se_pracovat_s_emocemi = $radek["naucit_se_pracovat_s_emocemi"];
    $naucit_se_spravne_dychat = $radek["naucit_se_spravne_dychat"];
    $naucit_se_zvladat_stres = $radek["naucit_se_zvladat_stres"];
    $odstranit_psychicke_problemy = $radek["odstranit_psychicke_problemy"];
    $poznat_nove_metody_pece_o_zdravi = $radek["poznat_nove_metody_pece_o_zdravi"];
    $pribrat_na_hmotnosti = $radek["pribrat_na_hmotnosti"];
    $zbavit_se_unavoveho_syndromu = $radek["zbavit_se_unavoveho_syndromu"];
    $zhubnout = $radek["zhubnout"];
    $zlepsit_celkovy_zdravotni_stav = $radek["zlepsit_celkovy_zdravotni_stav"];
    $zlepsit_fyzickou_kondici = $radek["zlepsit_fyzickou_kondici"];
    $zpevnit_telo = $radek["zpevnit_telo"];
    $zrelaxovat = $radek["zrelaxovat"];
    }
    $conn->close();
    
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql_cosejinamneveslo = "SELECT * FROM uzivatel WHERE uzivatel_id = $uzivatel_id LIMIT 1";
    $result_cosejinamneveslo = $conn->query($sql_cosejinamneveslo);
    while($radek = $result_cosejinamneveslo->fetch_assoc()) {
    $cosejinamneveslo = $radek["cosejinamneveslo"];
    $osobni_finance = $radek["osobni_finance"];
    $osobni_rodinne_vztahy = $radek["osobni_rodinne_vztahy"];
    $osobni_psychika = $radek["osobni_psychika"];
    $osobni_sebeduvera = $radek["osobni_sebeduvera"];
    $osobni_prace = $radek["osobni_prace"];
    $osobni_zdravotni_stav = $radek["osobni_zdravotni_stav"];
    $osobni_partnerstvi = $radek["osobni_partnerstvi"];
    $odpocinek_cestovani = $radek["odpocinek_cestovani"];
    $odpocinek_domaci_prace = $radek["odpocinek_domaci_prace"];
    $odpocinek_fyzicky_klidova = $radek["odpocinek_fyzicky_klidova"];
    $odpocinek_posezeni_s_prateli = $radek["odpocinek_posezeni_s_prateli"];
    $odpocinek_spanek = $radek["odpocinek_spanek"];
    $odpocinek_sport = $radek["odpocinek_sport"];
    $odpocinek_vubec = $radek["odpocinek_vubec"];
    $odpocinek_zahrada = $radek["odpocinek_zahrada"];
    $uzivatel_budoucnost = $radek["uzivatel_budoucnost"]; 
    $uzivatel_urazy = $radek["uzivatel_urazy"];
    $uzivatel_unava = $radek["uzivatel_unava"]; 
    $uzivatel_hmotnost =  $radek["uzivatel_hmotnost"];
    $uzivatel_kg =  $radek["uzivatel_kg"];
 }
    $conn->close();


?>




<form id="RelaxArteUpdateForm" name="RelaxArteUpdateForm" method="post">
<div class="row">
<div class="col-sm-12" style="background-color:#e2efc8;">

<label for="uzivatel">Proč jste se rozhodl navštívit R.A.S.?</label>
<div class="checkbox">
<? if ($neuspokujici_zdravotni_stav == 0) { ?>
<label><input type="checkbox" name="neuspokujici_zdravotni_stav">neuspokojující zdravotní stav</label>
<? }else { ?>
<label><input type="checkbox" name="neuspokujici_zdravotni_stav" checked>neuspokojující zdravotní stav</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($nezvladani_stresu == 0) { ?>
<label><input type="checkbox" name="nezvladani_stresu">problémy se zvládáním stresu</label>
<? }else { ?>
<label><input type="checkbox" name="nezvladani_stresu" checked>problémy se zvládáním stresu</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($psychicke_problemy == 0) { ?>
<label><input type="checkbox" name="psychicke_problemy">psychické problémy/deprese</label>
<? }else { ?>
<label><input type="checkbox" name="psychicke_problemy" checked>psychické problémy/deprese</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($problem_s_hmotnosti == 0) { ?>
<label><input type="checkbox" name="problem_s_hmotnosti">problém s hmotností</label>
<? }else { ?>
<label><input type="checkbox" name="problem_s_hmotnosti" checked>problém s hmotností</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($samota == 0) { ?>
<label><input type="checkbox" name="samota">samota</label>
<? }else { ?>
<label><input type="checkbox" name="samota" checked>samota</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($unavovy_syndrom == 0) { ?>
<label><input type="checkbox" name="unavovy_syndrom">únavový syndrom</label>
<? }else { ?>
<label><input type="checkbox" name="unavovy_syndrom" checked>únavový syndrom</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($zvedavost == 0) { ?>
<label><input type="checkbox" name="zvedavost">zvědavost</label>
<? }else { ?>
<label><input type="checkbox" name="zvedavost" checked>zvědavost</label>
<?  } ?>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-12" style="background-color:#c8efe6;">
<label for="uzivatel">Jaký je Váš cíl v rámci programu R.A.S.?</label>

<div class="checkbox">
<? if ($nabrat_svaly == 0) { ?>
<label><input type="checkbox" name="nabrat_svaly">nabrat svaly</label>
<? }else { ?>
<label><input type="checkbox" name="nabrat_svaly" checked>nabrat svaly</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($naucit_se_pracovat_s_emocemi == 0) { ?>
<label><input type="checkbox" name="naucit_se_pracovat_s_emocemi">naučit se pracovat s emocemi</label>
<? }else { ?>
<label><input type="checkbox" name="naucit_se_pracovat_s_emocemi" checked>naučit se pracovat s emocemi</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($naucit_se_spravne_dychat == 0) { ?>
<label><input type="checkbox" name="naucit_se_spravne_dychat">naučit se správne dýchat</label>
<? }else { ?>
<label><input type="checkbox" name="naucit_se_spravne_dychat" checked>naučit se správne dýchat</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($naucit_se_zvladat_stres == 0) { ?>
<label><input type="checkbox" name="naucit_se_zvladat_stres">naučit se zvládat stres</label>
<? }else { ?>
<label><input type="checkbox" name="naucit_se_zvladat_stres" checked>naučit se zvládat stres</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($odstranit_psychicke_problemy == 0) { ?>
<label><input type="checkbox" name="odstranit_psychicke_problemy">odstranit psychické problémy/zbavit se depresí</label>
<? }else { ?>
<label><input type="checkbox" name="odstranit_psychicke_problemy" checked>odstranit psychické problémy/zbavit se depresí</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($poznat_nove_metody_pece_o_zdravi == 0) { ?>
<label><input type="checkbox" name="poznat_nove_metody_pece_o_zdravi">poznat nové metody péče o zdraví (cvičení, masáže, fyzio/muziko/arte terapie, ....)</label>
<? }else { ?>
<label><input type="checkbox" name="poznat_nove_metody_pece_o_zdravi" checked>poznat nové metody péče o zdraví (cvičení, masáže, fyzio/muziko/arte terapie, ....)</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($pribrat_na_hmotnosti == 0) { ?>
<label><input type="checkbox" name="pribrat_na_hmotnosti">přibrat na hmotnosti</label>
<? }else { ?>
<label><input type="checkbox" name="pribrat_na_hmotnosti" checked>přibrat na hmotnosti</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($zbavit_se_unavoveho_syndromu == 0) { ?>
<label><input type="checkbox" name="zbavit_se_unavoveho_syndromu">zbavit se únavového syndromu</label>
<? }else { ?>
<label><input type="checkbox" name="zbavit_se_unavoveho_syndromu" checked>zbavit se únavového syndromu</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($zhubnout == 0) { ?>
<label><input type="checkbox" name="zhubnout">zhubnout</label>
<? }else { ?>
<label><input type="checkbox" name="zhubnout" checked>zhubnout</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($zlepsit_celkovy_zdravotni_stav == 0) { ?>
<label><input type="checkbox" name="zlepsit_celkovy_zdravotni_stav" >zlepšit celkový zdravotní stav</label>
<? }else { ?>
<label><input type="checkbox" name="zlepsit_celkovy_zdravotni_stav" checked>zlepšit celkový zdravotní stav</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($zlepsit_fyzickou_kondici == 0) { ?>
<label><input type="checkbox" name="zlepsit_fyzickou_kondici">zlepšit fyzickou kondici</label>
<? }else { ?>
<label><input type="checkbox" name="zlepsit_fyzickou_kondici" checked>zlepšit fyzickou kondici</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($zpevnit_telo == 0) { ?>
<label><input type="checkbox" name="zpevnit_telo" >zpevnit tělo</label>
<? }else { ?>
<label><input type="checkbox" name="zpevnit_telo" checked>zpevnit tělo</label>
<?  } ?>
</div>

<div class="checkbox">
<? if ($zrelaxovat == 0) { ?>
<label><input type="checkbox" name="zrelaxovat">zrelaxovat</label>
<? }else { ?>
<label><input type="checkbox" name="zrelaxovat" checked>zrelaxovat</label>
<?  } ?>
</div>
</div>
</div> 


<h4>Osobní</h4>

<div class="row">
  <div class="col-sm-4" style="background-color:#f9e2db;">
    <label for="uzivatel">Máte ve svém životě oblast, kterou potřebujete vyřešit a nemůžete se hnout z místa:</label>
 
    <div class="checkbox">
    <? if ($osobni_finance == 0) {?> 
    <label><input type="checkbox" name="osobni_finance" value="1">Finance</label>
    <? }else{ ?>
    <label><input type="checkbox" name="osobni_finance" value="1" checked>Finance</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($osobni_rodinne_vztahy == 0) {?> 
    <label><input type="checkbox" name="osobni_rodinne_vztahy" value="1">Rodinné vztahy</label>
    <? }else{ ?>
    <label><input type="checkbox" name="osobni_rodinne_vztahy" value="1" checked>Rodinné vztahy</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($osobni_psychika == 0) {?> 
    <label><input type="checkbox" name="osobni_psychika" value="1">Psychika</label>
    <? }else{ ?>
    <label><input type="checkbox" name="osobni_psychika" value="1" checked>Psychika</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($osobni_sebeduvera == 0) {?> 
    <label><input type="checkbox" name="osobni_sebeduvera" value="1">Sebedůvěra</label>
    <? }else{ ?>
    <label><input type="checkbox" name="osobni_sebeduvera" value="1" checked>Sebedůvěra</label>    
    <? } ?>  
    </div>


    <div class="checkbox">
    <? if ($osobni_prace == 0) {?> 
    <label><input type="checkbox" name="osobni_prace" value="1">Práce</label>
    <? }else{ ?>
    <label><input type="checkbox" name="osobni_prace" value="1" checked>Práce</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($osobni_zdravotni_stav == 0) {?> 
    <label><input type="checkbox" name="osobni_zdravotni_stav" value="1">Zdravotní stav</label>
    <? }else{ ?>
    <label><input type="checkbox" name="osobni_zdravotni_stav" value="1" checked>Zdravotní stav</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($osobni_partnerstvi == 0) {?> 
    <label><input type="checkbox" name="osobni_partnerstvi" value="1">Partnerství</label>
    <? }else{ ?>
    <label><input type="checkbox" name="osobni_partnerstvi" value="1" checked>Partnerství</label>    
    <? } ?>  
    </div>
    </div>

    <div class="col-sm-5" <? echo $chyba_budoucnost; ?>>
    <label for="uzivatel">Máte pocit, že se bojíte života jako takového, resp. že žijete hodně ve strachu např. z budoucnosti:</label>    
    <select class="form-control" id="budoucnost" name="budoucnost">
    <? if ($uzivatel_budoucnost=="Ne"){ ?>    
    <option value = "0"> --- Budoucnost ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne" selected>Ne</option>      
    <? }elseif ($uzivatel_budoucnost=="Ano"){ ?>
    <option value = "0"> --- Budoucnost ---</option>
    <option value="Ano" selected>Ano</option>
    <option value="Ne">Ne</option>  
    <? }else{ ?>
    <option value = "0"> --- Budoucnost ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne">Ne</option>  
    <? } ?>  
    </select>
    </div>   
</div>



<div class="row">
    <div class="col-sm-4" <? echo $chyba_urazy; ?>>
    <label for="uzivatel">Dějí se Vám v životě často úrazy? Mohou to být i zvláštní úrazy - např. pád na rovině, atd.:</label>
    <select class="form-control" id="urazy" name="urazy">
    <? if ($uzivatel_urazy=="Ne"){ ?>    
    <option value = "0"> --- Úrazy ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne" selected>Ne</option>     
    <? }elseif ($uzivatel_urazy=="Ano"){ ?>
    <option value = "0"> --- Úrazy ---</option>
    <option value="Ano" selected>Ano</option>
    <option value="Ne">Ne</option> 
    <? }else{ ?>
    <option value = "0"> --- Úrazy ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne">Ne</option> 
    <? } ?>  
    </select>
    </div>

    <div class="col-sm-5" <? echo $chyba_unava; ?>>
    <label for="uzivatel">Když máte vyvinout sportovní aktivitu a nechce se Vám do ní, je to z důvodu spíše únavy nebo lenosti:</label>
    <select class="form-control" id="unava" name="unava">
    <? if ($uzivatel_unava=="Lenost"){ ?>    
    <option value = "0"> --- Aktivita ---</option>
    <option value="Únava">Únava</option>
    <option value="Lenost" selected>Lenost</option>      
    <? }elseif ($uzivatel_unava=="Únava"){ ?>
    <option value = "0"> --- Aktivita ---</option>
    <option value="Únava" selected>Únava</option>
    <option value="Lenost">Lenost</option> 
    <? }else{ ?>
    <option value = "0"> --- Aktivita ---</option>
    <option value="Únava">Únava</option>
    <option value="Lenost">Lenost</option> 
    <? } ?>  
    </select>
    </div>
</div>





<br>
<div class="row"> 
  <div class="col-sm-4" style="background-color:#e9e8cd;">
    <label for="uzivatel">Jakým způsobem odpočíváte:</label>
    <div class="checkbox">
    <? if ($odpocinek_cestovani == 0) {?> 
    <label><input type="checkbox" name="odpocinek_cestovani" value="1">Cestování</label>
    <? }else{ ?>
    <label><input type="checkbox" name="odpocinek_cestovani" value="1" checked>Cestování</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($odpocinek_domaci_prace == 0) {?> 
    <label><input type="checkbox" name="odpocinek_domaci_prace" value="1">Domácí práce</label>
    <? }else{ ?>
    <label><input type="checkbox" name="odpocinek_domaci_prace" value="1" checked>Domácí práce</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($odpocinek_fyzicky_klidova == 0) {?> 
    <label><input type="checkbox" name="odpocinek_fyzicky_klidova" value="1">Fyzicky klidová aktivita (např. četba, TV, PC, ...)</label>
    <? }else{ ?>
    <label><input type="checkbox" name="odpocinek_fyzicky_klidova" value="1" checked>Fyzicky klidová aktivita (např. četba, TV, PC, ...)</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($odpocinek_posezeni_s_prateli == 0) {?> 
    <label><input type="checkbox" name="odpocinek_posezeni_s_prateli" value="1">Posezení s přáteli</label>
    <? }else{ ?>
    <label><input type="checkbox" name="odpocinek_posezeni_s_prateli" value="1" checked>Posezení s přáteli</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($odpocinek_spanek == 0) {?> 
    <label><input type="checkbox" name="odpocinek_spanek" value="1">Spánek</label>
    <? }else{ ?>
    <label><input type="checkbox" name="odpocinek_spanek" value="1" checked>Spánek</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($odpocinek_sport == 0) {?> 
    <label><input type="checkbox" name="odpocinek_sport" value="1">Sport</label>
    <? }else{ ?>
    <label><input type="checkbox" name="odpocinek_sport" value="1" checked>Sport</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($odpocinek_vubec == 0) {?> 
    <label><input type="checkbox" name="odpocinek_vubec" value="1">Vůbec</label>
    <? }else{ ?>
    <label><input type="checkbox" name="odpocinek_vubec" value="1" checked>Vůbec</label>    
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($odpocinek_zahrada == 0) {?> 
    <label><input type="checkbox" name="odpocinek_zahrada" value="1">Zahrada</label>
    <? }else{ ?>
    <label><input type="checkbox" name="odpocinek_zahrada" value="1" checked>Zahrada</label>    
    <? } ?> 
    </div> 
    </div>


    <div class="col-sm-3">
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
    </div>

    <div class="form-group" id="otherFieldGroupDiv">
    <div class="col-sm-3">
    <label for="uzivatel">Napište požadovanou korekci hmotnosti v kg:</label>
    <input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" id="vahakg" value = "<?echo $uzivatel_kg;?>" name="kg" maxlength="2" placeholder="Napište číslo v kg">
    </div>
    </div>
    <script src="./js/vaha.js"></script>

</div>
 

<h4>Co se jinam nevešlo</h4>
<div class="row">
<div class="col-sm-10">
<textarea class="form-control" rows="10" style="background-color: white;" id="cosejinamneveslo" name="cosejinamneveslo"><? echo $cosejinamneveslo; ?></textarea>
</div>
</div>

    


</form>
    <br>
    <button type="submit" class="btn btn-success btn-sm"  onclick="loadRelaxarte()">&nbsp;&nbsp;Uložit aktualizovaná data&nbsp;&nbsp;</button>
    <br> <br>