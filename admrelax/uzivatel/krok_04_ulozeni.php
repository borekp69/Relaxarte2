<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php'; ?>
<!DOCTYPE html>
<html lang="cs">
<head>
  <title>RELAX ARTE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href="./css/prettify-1.0.css" rel="stylesheet">
  <link href="./css/base.css" rel="stylesheet">
  <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
 

</head>








<body>
<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/navigace/navigace.php'; ?>
<div class="container">

<?
require "sifrovani_dat.php";
$stav = addslashes(htmlspecialchars(trim("$_POST[stav]")));
$uzivatel_id = htmlspecialchars(trim("$_GET[uzivatel_id]"));
$uzivatel_id = addslashes(encrypt_decrypt('decrypt', $uzivatel_id));

// ------------------  Zdraví operace -----------------------------------------
$operace_vnitrnich_organu = addslashes(htmlspecialchars(trim("$_POST[operace_vnitrnich_organu]")));
if (!$operace_vnitrnich_organu) {   
$operace_vnitrnich_organu ='0';
}

$operace_pater_kosti_klouby = addslashes(htmlspecialchars(trim("$_POST[operace_pater_kosti_klouby]")));
if (!$operace_pater_kosti_klouby) {   
$operace_pater_kosti_klouby ='0';
}

$urazy_zlomeniny = addslashes(htmlspecialchars(trim("$_POST[urazy_zlomeniny]")));
if (!$urazy_zlomeniny) {   
$urazy_zlomeniny ='0';
}


// ------------------  Zdraví pohybový aparát -----------------------------------------
$pourazovy_stav = addslashes(htmlspecialchars(trim("$_POST[pourazovy_stav]")));
$pooperacni_stav = addslashes(htmlspecialchars(trim("$_POST[pooperacni_stav]")));
$shermanova_nemoc = addslashes(htmlspecialchars(trim("$_POST[shermanova_nemoc]")));
$skolioza = addslashes(htmlspecialchars(trim("$_POST[skolioza]")));   
$osteoporoza = addslashes(htmlspecialchars(trim("$_POST[osteoporoza]")));
$ploche_nohy = addslashes(htmlspecialchars(trim("$_POST[ploche_nohy]")));
$hypermobilita = addslashes(htmlspecialchars(trim("$_POST[hypermobilita]")));    
$bechterev = addslashes(htmlspecialchars(trim("$_POST[bechterev]")));
$artroza_krcni_pater = addslashes(htmlspecialchars(trim("$_POST[artroza_krcni_pater]")));
$artroza_hrudni_pater = addslashes(htmlspecialchars(trim("$_POST[artroza_hrudni_pater]")));
$artroza_bederni_pater = addslashes(htmlspecialchars(trim("$_POST[artroza_bederni_pater]")));
$artroza_krizova_kost = addslashes(htmlspecialchars(trim("$_POST[artroza_krizova_kost]")));
$artroza_kostrc = addslashes(htmlspecialchars(trim("$_POST[artroza_kostrc]")));
$artroza_ramena = addslashes(htmlspecialchars(trim("$_POST[artroza_ramena]")));
$artroza_lokty = addslashes(htmlspecialchars(trim("$_POST[artroza_lokty]")));
$artroza_zapesti = addslashes(htmlspecialchars(trim("$_POST[artroza_zapesti]")));
$artroza_prsty_na_rukou = addslashes(htmlspecialchars(trim("$_POST[artroza_prsty_na_rukou]")));
$artroza_prsty_na_nohou = addslashes(htmlspecialchars(trim("$_POST[artroza_prsty_na_nohou]")));
$artroza_kycle = addslashes(htmlspecialchars(trim("$_POST[artroza_kycle]")));
$artroza_kolena = addslashes(htmlspecialchars(trim("$_POST[artroza_kolena]")));
$artroza_kotniky = addslashes(htmlspecialchars(trim("$_POST[artroza_kotniky]")));
$artritida_revmatoidni_krcni_pater = addslashes(htmlspecialchars(trim("$_POST[artritida_revmatoidni_krcni_pater]")));
$artritida_revmatoidni_hrudni_pater = addslashes(htmlspecialchars(trim("$_POST[artritida_revmatoidni_hrudni_pater]")));
$artritida_revmatoidni_bederni_pater = addslashes(htmlspecialchars(trim("$_POST[artritida_revmatoidni_bederni_pater]")));
$artritida_revmatoidni_krizova_kost = addslashes(htmlspecialchars(trim("$_POST[artritida_revmatoidni_krizova_kost]")));
$artritida_revmatoidni_kostrc = addslashes(htmlspecialchars(trim("$_POST[artritida_revmatoidni_kostrc]")));
$artritida_revmatoidni_ramena = addslashes(htmlspecialchars(trim("$_POST[artritida_revmatoidni_ramena]")));
$artritida_revmatoidni_lokty = addslashes(htmlspecialchars(trim("$_POST[artritida_revmatoidni_lokty]")));
$artritida_revmatoidni_zapesti = addslashes(htmlspecialchars(trim("$_POST[artritida_revmatoidni_zapesti]")));
$artritida_revmatoidni_prsty_na_rukou = addslashes(htmlspecialchars(trim("$_POST[artritida_revmatoidni_prsty_na_rukou]")));
$artritida_revmatoidni_prsty_nanohou = addslashes(htmlspecialchars(trim("$_POST[artritida_revmatoidni_prsty_nanohou]")));
$artritida_revmatoidni_kycle = addslashes(htmlspecialchars(trim("$_POST[artritida_revmatoidni_kycle]")));
$artritida_revmatoidni_kolena = addslashes(htmlspecialchars(trim("$_POST[artritida_revmatoidni_kolena]")));
$artritida_revmatoidni_kotniky = addslashes(htmlspecialchars(trim("$_POST[artritida_revmatoidni_kotniky]")));
$artritida_osteoartritida_krcni_pater = addslashes(htmlspecialchars(trim("$_POST[artritida_osteoartritida_krcni_pater]")));
$artritida_osteoartritida_hrudni_pater = addslashes(htmlspecialchars(trim("$_POST[artritida_osteoartritida_hrudni_pater]")));
$artritida_osteoartritida_bederni_pater = addslashes(htmlspecialchars(trim("$_POST[artritida_osteoartritida_bederni_pater]")));
$artritida_osteoartritida_krizova_kost = addslashes(htmlspecialchars(trim("$_POST[artritida_osteoartritida_krizova_kost]")));
$artritida_osteoartritida_kostrc = addslashes(htmlspecialchars(trim("$_POST[artritida_osteoartritida_kostrc]")));
$artritida_osteoartritida_ramena = addslashes(htmlspecialchars(trim("$_POST[artritida_osteoartritida_ramena]")));
$artritida_osteoartritida_lokty = addslashes(htmlspecialchars(trim("$_POST[artritida_osteoartritida_lokty]")));
$artritida_osteoartritida_zapesti = addslashes(htmlspecialchars(trim("$_POST[artritida_osteoartritida_zapesti]")));
$artritida_osteoartritida_prsty_na_rukou = addslashes(htmlspecialchars(trim("$_POST[artritida_osteoartritida_prsty_na_rukou]")));
$artritida_osteoartritida_prsty_nanohou = addslashes(htmlspecialchars(trim("$_POST[artritida_osteoartritida_prsty_nanohou]")));
$artritida_osteoartritida_kycle = addslashes(htmlspecialchars(trim("$_POST[artritida_osteoartritida_kycle]")));
$artritida_osteoartritida_kolena = addslashes(htmlspecialchars(trim("$_POST[artritida_osteoartritida_kolena]")));
$artritida_osteoartritida_kotniky = addslashes(htmlspecialchars(trim("$_POST[artritida_osteoartritida_kotniky]")));
$protruze_krcni_pater = addslashes(htmlspecialchars(trim("$_POST[protruze_krcni_pater]")));
$protruze_hrudni_pater = addslashes(htmlspecialchars(trim("$_POST[protruze_hrudni_pater]")));
$protruze_bederni_pater = addslashes(htmlspecialchars(trim("$_POST[protruze_bederni_pater]")));
$protruze_krizova_kost = addslashes(htmlspecialchars(trim("$_POST[protruze_krizova_kost]")));
$protruze_kostrc = addslashes(htmlspecialchars(trim("$_POST[protruze_kostrc]")));
$bolesti_krcni_pater = addslashes(htmlspecialchars(trim("$_POST[bolesti_krcni_pater]")));
$bolesti_hrudni_pater = addslashes(htmlspecialchars(trim("$_POST[bolesti_hrudni_pater]")));
$bolesti_bederni_pater = addslashes(htmlspecialchars(trim("$_POST[bolesti_bederni_pater]")));
$bolesti_krizova_kost = addslashes(htmlspecialchars(trim("$_POST[bolesti_krizova_kost]")));
$bolesti_kostrc = addslashes(htmlspecialchars(trim("$_POST[bolesti_kostrc]")));
$bolesti_ramena = addslashes(htmlspecialchars(trim("$_POST[bolesti_ramena]")));
$bolesti_lokty = addslashes(htmlspecialchars(trim("$_POST[bolesti_lokty]")));
$bolesti_zapesti = addslashes(htmlspecialchars(trim("$_POST[bolesti_zapesti]")));
$bolesti_prsty_na_rukou = addslashes(htmlspecialchars(trim("$_POST[bolesti_prsty_na_rukou]")));
$bolesti_prsty_nanohou = addslashes(htmlspecialchars(trim("$_POST[bolesti_prsty_nanohou]")));
$bolesti_kycle = addslashes(htmlspecialchars(trim("$_POST[bolesti_kycle]")));
$bolesti_kolena = addslashes(htmlspecialchars(trim("$_POST[bolesti_kolena]")));
$bolesti_kotniky = addslashes(htmlspecialchars(trim("$_POST[bolesti_kotniky]")));

$poloha_vyvolavajici_bolest = addslashes(htmlspecialchars(trim("$_POST[poloha_vyvolavajici_bolest]")));
if (!$poloha_vyvolavajici_bolest) {   
$poloha_vyvolavajici_bolest ='0';
}

$poloha_ulevova = addslashes(htmlspecialchars(trim("$_POST[poloha_ulevova]")));
if (!$poloha_ulevova) {   
$poloha_ulevova ='0';
}

$omezeni_pri_cinnostech = addslashes(htmlspecialchars(trim("$_POST[omezeni_pri_cinnostech]")));
if (!$omezeni_pri_cinnostech) {   
$omezeni_pri_cinnostech ='0';
}


// ------------------  Zdraví alergie -----------------------------------------
$alergie_pyl_jarni = addslashes(htmlspecialchars(trim("$_POST[alergie_pyl_jarni]")));
$alergie_pyl_letni = addslashes(htmlspecialchars(trim("$_POST[alergie_pyl_letni]")));
$alergie_pyl_podzimni = addslashes(htmlspecialchars(trim("$_POST[alergie_pyl_podzimni]")));
$alergie_plisne = addslashes(htmlspecialchars(trim("$_POST[alergie_plisne]")));
$alergie_prach = addslashes(htmlspecialchars(trim("$_POST[alergie_prach]")));
$alergie_peri = addslashes(htmlspecialchars(trim("$_POST[alergie_peri]")));
$alergie_srst = addslashes(htmlspecialchars(trim("$_POST[alergie_srst]")));
$alergie_roztoce = addslashes(htmlspecialchars(trim("$_POST[alergie_roztoce]")));
$alergie_potraviny = addslashes(htmlspecialchars(trim("$_POST[alergie_potraviny]")));
$alergie_zvirata = addslashes(htmlspecialchars(trim("$_POST[alergie_zvirata]")));
$alergie_leky = addslashes(htmlspecialchars(trim("$_POST[alergie_leky]")));
$alergie_projevy_tekouci_ryma = addslashes(htmlspecialchars(trim("$_POST[alergie_projevy_tekouci_ryma]")));
$alergie_projevy_intenzivni_kychani = addslashes(htmlspecialchars(trim("$_POST[alergie_projevy_intenzivni_kychani]")));
$alergie_projevy_krev_pri_smrkani = addslashes(htmlspecialchars(trim("$_POST[alergie_projevy_krev_pri_smrkani]")));
$alergie_projevy_hnisave_rymy = addslashes(htmlspecialchars(trim("$_POST[alergie_projevy_hnisave_rymy]")));
$alergie_projevy_kozni_projevy = addslashes(htmlspecialchars(trim("$_POST[alergie_projevy_kozni_projevy]")));
$alergie_projevy_svedeni_kuze = addslashes(htmlspecialchars(trim("$_POST[alergie_projevy_svedeni_kuze]")));
$alergie_projevy_astma = addslashes(htmlspecialchars(trim("$_POST[alergie_projevy_astma]")));
$alergie_projevy_bolesti_svalu = addslashes(htmlspecialchars(trim("$_POST[alergie_projevy_bolesti_svalu]")));
$alergie_projevy_bolesti_hlavy = addslashes(htmlspecialchars(trim("$_POST[alergie_projevy_bolesti_hlavy]")));
$alergie_projevy_nespavost = addslashes(htmlspecialchars(trim("$_POST[alergie_projevy_nespavost]")));
$alergie_projevy_otekla_ocni_vicka = addslashes(htmlspecialchars(trim("$_POST[alergie_projevy_otekla_ocni_vicka]")));
$alergie_projevy_svedeni_oci = addslashes(htmlspecialchars(trim("$_POST[alergie_projevy_svedeni_oci]")));
$alergie_projevy_slzeni_oci = addslashes(htmlspecialchars(trim("$_POST[alergie_projevy_slzeni_oci]")));
$alergie_projevy_kasel = addslashes(htmlspecialchars(trim("$_POST[alergie_projevy_kasel]")));
$alergie_projevy_kompletni_unava = addslashes(htmlspecialchars(trim("$_POST[alergie_projevy_kompletni_unava]")));

// ------------------  Zdraví imunita -----------------------------------------
$imunita_autoimunita = addslashes(htmlspecialchars(trim("$_POST[imunita_autoimunita]")));
$imunita_opakovane_virozy_chripky = addslashes(htmlspecialchars(trim("$_POST[imunita_opakovane_virozy_chripky]")));
$imunita_snizena_imunita = addslashes(htmlspecialchars(trim("$_POST[imunita_snizena_imunita]")));

// ------------------  Zdraví imunita -----------------------------------------
$infekce_encefalitida = addslashes(htmlspecialchars(trim("$_POST[infekce_encefalitida]")));
$infekce_meningitida = addslashes(htmlspecialchars(trim("$_POST[infekce_meningitida]")));
$infekce_borelioza = addslashes(htmlspecialchars(trim("$_POST[infekce_borelioza]")));
$infekce_infekcni_hepatitida = addslashes(htmlspecialchars(trim("$_POST[infekce_infekcni_hepatitida]")));
$infekce_mononukleoza = addslashes(htmlspecialchars(trim("$_POST[infekce_mononukleoza]")));
$infekce_chlamydie = addslashes(htmlspecialchars(trim("$_POST[infekce_chlamydie]")));
$infekce_cmv = addslashes(htmlspecialchars(trim("$_POST[infekce_cmv]")));
$infekce_hpv = addslashes(htmlspecialchars(trim("$_POST[infekce_hpv]")));
$infekce_streptokok = addslashes(htmlspecialchars(trim("$_POST[infekce_streptokok]")));
$infekce_stafylokok = addslashes(htmlspecialchars(trim("$_POST[infekce_stafylokok]")));

// ------------------  Zdraví interna gastro -----------------------------------------
$interna_gastro_problemy_se_zlucnikem = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_problemy_se_zlucnikem]")));
$interna_gastro_bolesti_zlucniku = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_bolesti_zlucniku]")));
$interna_gastro_zlucove_kameny = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_zlucove_kameny]")));
$interna_gastro_problemy_se_slinivkou = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_problemy_se_slinivkou]")));
$interna_gastro_postizeni_jater = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_postizeni_jater]")));
$interna_gastro_zácpy = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_zácpy]")));
$interna_gastro_prujmy = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_prujmy]")));
$interna_gastro_strevni_koliky = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_strevni_koliky]")));
$interna_gastro_daveni = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_daveni]")));
$interna_gastro_zvraceni = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_zvraceni]")));
$interna_gastro_nadymani = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_nadymani]")));
$interna_gastro_strevni_polypy = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_strevni_polypy]")));
$interna_gastro_zanety_strev = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_zanety_strev]")));
$interna_gastro_zaludecni_vredy = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_zaludecni_vredy]")));
$interna_gastro_bolesti_zaludku = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_bolesti_zaludku]")));
$interna_gastro_divertikly = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_divertikly]")));
$interna_gastro_crohnova_nemoc = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_crohnova_nemoc]")));
$interna_gastro_branicní_kyla = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_branicní_kyla]")));
$interna_gastro_triselna_kyla = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_triselna_kyla]")));
$interna_gastro_pupecni_kyla = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_pupecni_kyla]")));
$interna_gastro_brisni_kyla = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_brisni_kyla]")));
$interna_gastro_paleni_zahy = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_paleni_zahy]")));
$interna_gastro_reflux = addslashes(htmlspecialchars(trim("$_POST[interna_gastro_reflux]")));

// ------------------  Zdraví Interna - srdce a cévy -----------------------------------------
$interna_srdce_cevy_arytmie = addslashes(htmlspecialchars(trim("$_POST[interna_srdce_cevy_arytmie]")));
$interna_srdce_cevy_hypertenze = addslashes(htmlspecialchars(trim("$_POST[interna_srdce_cevy_hypertenze]")));
$interna_srdce_cevy_varixy = addslashes(htmlspecialchars(trim("$_POST[interna_srdce_cevy_varixy]")));
$interna_srdce_cevy_ichs_ev_angina_pectoris = addslashes(htmlspecialchars(trim("$_POST[interna_srdce_cevy_ichs_ev_angina_pectoris]")));
$interna_srdce_cevy_infarkty = addslashes(htmlspecialchars(trim("$_POST[interna_srdce_cevy_infarkty]")));
$interna_srdce_cevy_blize_nespecifkovane_buseni_srdce = addslashes(htmlspecialchars(trim("$_POST[interna_srdce_cevy_blize_nespecifkovane_buseni_srdce]")));

// ------------------  Zdraví Kožní -----------------------------------------
$kozni_atopicky_ekzem = addslashes(htmlspecialchars(trim("$_POST[kozni_atopicky_ekzem]")));
$kozni_seboroicka_dermatitida = addslashes(htmlspecialchars(trim("$_POST[kozni_seboroicka_dermatitida]")));
$kozni_lupenka = addslashes(htmlspecialchars(trim("$_POST[kozni_lupenka]")));
$kozni_lupy = addslashes(htmlspecialchars(trim("$_POST[kozni_lupy]")));
$kozni_koprivka = addslashes(htmlspecialchars(trim("$_POST[kozni_koprivka]")));

// ------------------  Zdraví Neurologie -----------------------------------------
$neurologie_komoce = addslashes(htmlspecialchars(trim("$_POST[neurologie_komoce]")));
$neurologie_vertigo = addslashes(htmlspecialchars(trim("$_POST[neurologie_vertigo]")));
$neurologie_cephalea = addslashes(htmlspecialchars(trim("$_POST[neurologie_cephalea]")));
$neurologie_migreny = addslashes(htmlspecialchars(trim("$_POST[neurologie_migreny]")));
$neurologie_VAS_pater_syndromy = addslashes(htmlspecialchars(trim("$_POST[neurologie_VAS_pater_syndromy]")));
$neurologie_epilepsie = addslashes(htmlspecialchars(trim("$_POST[neurologie_epilepsie]")));
$neurologie_alzheimer = addslashes(htmlspecialchars(trim("$_POST[neurologie_alzheimer]")));
$neurologie_parkinson  = addslashes(htmlspecialchars(trim("$_POST[neurologie_parkinson]")));
$neurologie_tres_rukou = addslashes(htmlspecialchars(trim("$_POST[neurologie_tres_rukou]")));
$neurologie_neuropatie_pri_diabetes = addslashes(htmlspecialchars(trim("$_POST[neurologie_neuropatie_pri_diabetes]")));
$neurologie_hepatopatie = addslashes(htmlspecialchars(trim("$_POST[neurologie_hepatopatie]")));
$neurologie_brneni = addslashes(htmlspecialchars(trim("$_POST[neurologie_brneni]")));
$neurologie_necitlivost_koncetin = addslashes(htmlspecialchars(trim("$_POST[neurologie_necitlivost_koncetin]")));
$neurologie_karpal = addslashes(htmlspecialchars(trim("$_POST[neurologie_karpal]")));
$neurologie_opakovane_blize_nespecifikovane_bolesti_hlavy = addslashes(htmlspecialchars(trim("$_POST[neurologie_opakovane_blize_nespecifikovane_bolesti_hlavy]")));

// ------------------  Zdraví Oční -----------------------------------------
$ocni_kratkozrakost = addslashes(htmlspecialchars(trim("$_POST[ocni_kratkozrakost]")));
$ocni_dalekozrakost = addslashes(htmlspecialchars(trim("$_POST[ocni_dalekozrakost]")));
$ocni_ocni_zakal = addslashes(htmlspecialchars(trim("$_POST[ocni_ocni_zakal]")));
$ocni_cerne_tecky_pred_ocima = addslashes(htmlspecialchars(trim("$_POST[ocni_cerne_tecky_pred_ocima]"))); 
$ocni_bolesti_za_ocima = addslashes(htmlspecialchars(trim("$_POST[ocni_bolesti_za_ocima]")));
$ocni_ekzemy_kolem_oci = addslashes(htmlspecialchars(trim("$_POST[ocni_ekzemy_kolem_oci]")));
$ocni_zanety_vicek = addslashes(htmlspecialchars(trim("$_POST[ocni_zanety_vicek]")));
$ocni_opakovana_jecna_vlci_zrna = addslashes(htmlspecialchars(trim("$_POST[ocni_opakovana_jecna_vlci_zrna]")));


// ------------------  Zdraví Onkologie -----------------------------------------
$onkologie = addslashes(htmlspecialchars(trim("$_POST[onkologie]")));
if (!$onkologie) {   
$onkologie ='0';
}
// ------------------  Zdraví ORL -----------------------------------------
$orl_ztrata_sluchu_na_jednom_uchu = addslashes(htmlspecialchars(trim("$_POST[orl_ztrata_sluchu_na_jednom_uchu]")));
$orl_ztrata_sluchu_obe_usi = addslashes(htmlspecialchars(trim("$_POST[orl_ztrata_sluchu_obe_usi]"))); 
$orl_opakovane_zanety_stredousi = addslashes(htmlspecialchars(trim("$_POST[orl_opakovane_zanety_stredousi]")));
$orl_pocit_zalehlosti_usi = addslashes(htmlspecialchars(trim("$_POST[orl_pocit_zalehlosti_usi]")));
$orl_huceni_v_usich = addslashes(htmlspecialchars(trim("$_POST[orl_huceni_v_usich]")));
$orl_piskani_v_usich = addslashes(htmlspecialchars(trim("$_POST[orl_piskani_v_usich]")));
$orl_opakovane_zanety_dutin = addslashes(htmlspecialchars(trim("$_POST[orl_opakovane_zanety_dutin]")));
$orl_polypy_v_dutinach = addslashes(htmlspecialchars(trim("$_POST[orl_polypy_v_dutinach]")));
$orl_suchost_dutin = addslashes(htmlspecialchars(trim("$_POST[orl_suchost_dutin]")));
$orl_smrkani_krve = addslashes(htmlspecialchars(trim("$_POST[orl_smrkani_krve]")));
$orl_hnisave_rymy = addslashes(htmlspecialchars(trim("$_POST[orl_hnisave_rymy]")));

// ------------------  Respirační systém -----------------------------------------
$respiracni_system_astma = addslashes(htmlspecialchars(trim("$_POST[respiracni_system_astma]")));
$respiracni_system_opakovane_pneumonie = addslashes(htmlspecialchars(trim("$_POST[respiracni_system_opakovane_pneumonie]")));
$respiracni_system_zanety_prudusek = addslashes(htmlspecialchars(trim("$_POST[respiracni_system_zanety_prudusek]")));
$respiracni_system_laryngytida = addslashes(htmlspecialchars(trim("$_POST[respiracni_system_laryngytida]")));

// ------------------ Zdraví Stomatologie -----------------------------------------
$stomatologie_vysoka_kazivost_zubu = addslashes(htmlspecialchars(trim("$_POST[stomatologie_vysoka_kazivost_zubu]")));
$stomatologie_krvaceni_dasni = addslashes(htmlspecialchars(trim("$_POST[stomatologie_krvaceni_dasni]")));
$stomatologie_paradentoza = addslashes(htmlspecialchars(trim("$_POST[stomatologie_paradentoza]")));

// ------------------ Zdraví Urologie -----------------------------------------
$urologie_infekce_mocovych_cest = addslashes(htmlspecialchars(trim("$_POST[urologie_infekce_mocovych_cest]")));
$urologie_infekce_ledvin = addslashes(htmlspecialchars(trim("$_POST[urologie_infekce_ledvin]")));
$urologie_kameny = addslashes(htmlspecialchars(trim("$_POST[urologie_kameny]")));
$urologie_vady = addslashes(htmlspecialchars(trim("$_POST[urologie_vady]")));
$urologie_zvetseni_prostaty = addslashes(htmlspecialchars(trim("$_POST[urologie_zvetseni_prostaty]")));

// ------------------ Zdraví žlázy s vnitřní sekrecí + metabolické choroby -----------------------------------------
$zlazy_s_vnitrni_sekreci_hypertyreoza = addslashes(htmlspecialchars(trim("$_POST[zlazy_s_vnitrni_sekreci_hypertyreoza]")));
$zlazy_s_vnitrni_sekreci_cukrovka_1_stupen = addslashes(htmlspecialchars(trim("$_POST[zlazy_s_vnitrni_sekreci_cukrovka_1_stupen]")));
$zlazy_s_vnitrni_sekreci_cukrovka_2_stupen = addslashes(htmlspecialchars(trim("$_POST[zlazy_s_vnitrni_sekreci_cukrovka_2_stupen]")));
$zlazy_s_vnitrni_sekreci_neuropatie = addslashes(htmlspecialchars(trim("$_POST[zlazy_s_vnitrni_sekreci_neuropatie]")));
$zlazy_s_vnitrni_sekreci_dna = addslashes(htmlspecialchars(trim("$_POST[zlazy_s_vnitrni_sekreci_dna]")));

// ------------------ Zdraví léky klasické medicíny -----------------------------------------
$leky_klasicke_mediciny = addslashes(htmlspecialchars(trim("$_POST[leky_klasicke_mediciny]")));
if (!$leky_klasicke_mediciny) {   
$leky_klasicke_mediciny ='0';
}

// ------------------ Zdraví Gynekologie -----------------------------------------
$gynekologie_tehotenstvi = addslashes(htmlspecialchars(trim("$_POST[gynekologie_tehotenstvi]")));
$gynekologie_porody = addslashes(htmlspecialchars(trim("$_POST[gynekologie_porody]")));
$gynekologie_potraty = addslashes(htmlspecialchars(trim("$_POST[gynekologie_potraty]"))); 
$gynekologie_sterilita = addslashes(htmlspecialchars(trim("$_POST[gynekologie_sterilita]")));
$gynekologie_vytoky = addslashes(htmlspecialchars(trim("$_POST[gynekologie_vytoky]")));
$gynekologie_cysty = addslashes(htmlspecialchars(trim("$_POST[gynekologie_cysty]")));
$gynekologie_myomy = addslashes(htmlspecialchars(trim("$_POST[gynekologie_myomy]")));
$gynekologie_zanety = addslashes(htmlspecialchars(trim("$_POST[gynekologie_zanety]")));
$gynekologie_infekce = addslashes(htmlspecialchars(trim("$_POST[gynekologie_infekce]")));
$gynekologie_menstruace = addslashes(htmlspecialchars(trim("$_POST[gynekologie_menstruace]")));
$gynekologie_mnozstvi_krve = addslashes(htmlspecialchars(trim("$_POST[gynekologie_mnozstvi_krve]")));
$gynekologie_delka_menstruace = addslashes(htmlspecialchars(trim("$_POST[gynekologie_delka_menstruace]")));
$gynekologie_bolesti_behem_menstruace = addslashes(htmlspecialchars(trim("$_POST[gynekologie_bolesti_behem_menstruace]")));

// ------------------ Zdraví Akupunktura -----------------------------------------
$akupunktura = addslashes(htmlspecialchars(trim("$_POST[akupunktura]")));

// ------------------ Zdraví Plazma -----------------------------------------
$plazma = addslashes(htmlspecialchars(trim("$_POST[plazma]")));

// ------------------ Zdraví EAV -----------------------------------------
$eav = addslashes(htmlspecialchars(trim("$_POST[eav]")));

// ------------------ Zdraví Psychika Psychiatrie -----------------------------------------
$psychiatrie_deprese = addslashes(htmlspecialchars(trim("$_POST[psychiatrie_deprese]")));
$psychiatrie_nervozita = addslashes(htmlspecialchars(trim("$_POST[psychiatrie_nervozita]")));
$psychiatrie_nespavost = addslashes(htmlspecialchars(trim("$_POST[psychiatrie_nespavost]")));
$psychiatrie_nadmerne_poceni = addslashes(htmlspecialchars(trim("$_POST[psychiatrie_nadmerne_poceni]")));
$psychiatrie_unavovy_syndrom = addslashes(htmlspecialchars(trim("$_POST[psychiatrie_unavovy_syndrom]")));
$psychiatrie_leceni = addslashes(htmlspecialchars(trim("$_POST[psychiatrie_leceni]")));
$psychiatrie_zmena_pocasi = addslashes(htmlspecialchars(trim("$_POST[psychiatrie_zmena_pocasi]")));



// ------------------ Zdraví EPAM -----------------------------------------
$univerzalni_bez_propolisu_2 = addslashes(htmlspecialchars(trim("$_POST[univerzalni_bez_propolisu_2]")));
$mumiovy_3 = addslashes(htmlspecialchars(trim("$_POST[mumiovy_3]")));
$obranyschopnost_4 = addslashes(htmlspecialchars(trim("$_POST[obranyschopnost_4]")));
$zensky_5 = addslashes(htmlspecialchars(trim("$_POST[zensky_5]")));
$univerzalni_6 = addslashes(htmlspecialchars(trim("$_POST[univerzalni_6]")));
$posilujici_7 = addslashes(htmlspecialchars(trim("$_POST[posilujici_7]")));
$posilujici_8 = addslashes(htmlspecialchars(trim("$_POST[posilujici_8]")));
$pruduskovy_9 = addslashes(htmlspecialchars(trim("$_POST[pruduskovy_9]")));
$zaludecni_10 = addslashes(htmlspecialchars(trim("$_POST[zaludecni_10]")));
$fyzicka_namaha_11 = addslashes(htmlspecialchars(trim("$_POST[fyzicka_namaha_11]")));
$ledvinovy_12 = addslashes(htmlspecialchars(trim("$_POST[ledvinovy_12]")));
$klouby_a_svaly_13 = addslashes(htmlspecialchars(trim("$_POST[klouby_a_svaly_13]")));
$jaterni_14 = addslashes(htmlspecialchars(trim("$_POST[jaterni_14]")));
$kozni_15 = addslashes(htmlspecialchars(trim("$_POST[kozni_15]")));
$srdecni_16 = addslashes(htmlspecialchars(trim("$_POST[srdecni_16]")));
$krevni_tlak_17 = addslashes(htmlspecialchars(trim("$_POST[krevni_tlak_17]")));
$psychicky_18 = addslashes(htmlspecialchars(trim("$_POST[psychicky_18]")));
$imunita_19 = addslashes(htmlspecialchars(trim("$_POST[imunita_19]")));
$muzsky_20 = addslashes(htmlspecialchars(trim("$_POST[muzsky_20]")));
$nervovy_21 = addslashes(htmlspecialchars(trim("$_POST[nervovy_21]")));
$poskozena_plet_22 = addslashes(htmlspecialchars(trim("$_POST[poskozena_plet_22]")));
$ozivujici_s_mumiem_23 = addslashes(htmlspecialchars(trim("$_POST[ozivujici_s_mumiem_23]")));
$pro_citlivou_plet_24 = addslashes(htmlspecialchars(trim("$_POST[pro_citlivou_plet_24]")));
$eukalypt_25 = addslashes(htmlspecialchars(trim("$_POST[eukalypt_25]")));
$kozni_26 = addslashes(htmlspecialchars(trim("$_POST[kozni_26]")));
$muskat_27 = addslashes(htmlspecialchars(trim("$_POST[muskat_27]")));
$jedle_28 = addslashes(htmlspecialchars(trim("$_POST[jedle_28]")));
$propolis_29 = addslashes(htmlspecialchars(trim("$_POST[propolis_29]")));
$mumio_30 = addslashes(htmlspecialchars(trim("$_POST[mumio_30]")));
$po_namaze_31 = addslashes(htmlspecialchars(trim("$_POST[po_namaze_31]")));
$cevy_a_cholesterol_32 = addslashes(htmlspecialchars(trim("$_POST[cevy_a_cholesterol_32]")));
$hubnuti_33 = addslashes(htmlspecialchars(trim("$_POST[hubnuti_33]")));
$jatra_a_zlucnik_34 = addslashes(htmlspecialchars(trim("$_POST[jatra_a_zlucnik_34]")));
$klouby_a_pater_35 = addslashes(htmlspecialchars(trim("$_POST[klouby_a_pater_35]")));
$ledviny_36 = addslashes(htmlspecialchars(trim("$_POST[ledviny_36]")));
$pohoda_37 = addslashes(htmlspecialchars(trim("$_POST[pohoda_37]")));
$dychaci_cesty_38 = addslashes(htmlspecialchars(trim("$_POST[dychaci_cesty_38]")));
$prijemny_spanek_39 = addslashes(htmlspecialchars(trim("$_POST[prijemny_spanek_39]")));
$kittluv_cistici_40 = addslashes(htmlspecialchars(trim("$_POST[kittluv_cistici_40]")));
$cevy_a_cholesterol_41 = addslashes(htmlspecialchars(trim("$_POST[cevy_a_cholesterol_41]")));
$hubnuti_42 = addslashes(htmlspecialchars(trim("$_POST[hubnuti_42]")));
$jatra_a_zlucnik_43 = addslashes(htmlspecialchars(trim("$_POST[jatra_a_zlucnik_43]")));
$klouby_a_pater_44 = addslashes(htmlspecialchars(trim("$_POST[klouby_a_pater_44]")));
$ledviny_45 = addslashes(htmlspecialchars(trim("$_POST[ledviny_45]")));
$pohoda_46 = addslashes(htmlspecialchars(trim("$_POST[pohoda_46]")));
$dychaci_cesty_47 = addslashes(htmlspecialchars(trim("$_POST[dychaci_cesty_47]")));
$prijemny_spanek_48 = addslashes(htmlspecialchars(trim("$_POST[prijemny_spanek_48]")));
$zaludek_49 = addslashes(htmlspecialchars(trim("$_POST[zaludek_49]")));
$pro_zeny_50 = addslashes(htmlspecialchars(trim("$_POST[pro_zeny_50]")));
$normalni_hladina_cukru_51 = addslashes(htmlspecialchars(trim("$_POST[normalni_hladina_cukru_51]")));
$mumio_52 = addslashes(htmlspecialchars(trim("$_POST[mumio_52]")));
$multivitamin_53 = addslashes(htmlspecialchars(trim("$_POST[multivitamin_53]")));
$caga_54 = addslashes(htmlspecialchars(trim("$_POST[caga_54]")));
$jaterni_cistici_55 = addslashes(htmlspecialchars(trim("$_POST[jaterni_cistici_55]")));
$ledvinovy_56 = addslashes(htmlspecialchars(trim("$_POST[ledvinovy_56]")));
$klouby_57 = addslashes(htmlspecialchars(trim("$_POST[klouby_57]")));
$akatovy_s_materi_kasickou_58 = addslashes(htmlspecialchars(trim("$_POST[akatovy_s_materi_kasickou_58]")));
$caga_59 = addslashes(htmlspecialchars(trim("$_POST[caga_59]")));
$ginko_biloba_60 = addslashes(htmlspecialchars(trim("$_POST[ginko_biloba_60]")));
$anyz_61 = addslashes(htmlspecialchars(trim("$_POST[anyz_61]")));
$badan_62 = addslashes(htmlspecialchars(trim("$_POST[badan_62]")));
$briza_belokora_63 = addslashes(htmlspecialchars(trim("$_POST[briza_belokora_63]")));
$kozlik_lekarsky_64 = addslashes(htmlspecialchars(trim("$_POST[kozlik_lekarsky_64]")));
$lekorice_lysa_65 = addslashes(htmlspecialchars(trim("$_POST[lekorice_lysa_65]")));
$echinacea_66 = addslashes(htmlspecialchars(trim("$_POST[echinacea_66]")));
$hrebickovec_vonny_67 = addslashes(htmlspecialchars(trim("$_POST[hrebickovec_vonny_67]")));
$jedle_belokora_68 = addslashes(htmlspecialchars(trim("$_POST[jedle_belokora_68]")));
$levandule_lekarska_69 = addslashes(htmlspecialchars(trim("$_POST[levandule_lekarska_69]")));
$muskat_70 = addslashes(htmlspecialchars(trim("$_POST[muskat_70]")));
$pelynek_pravy_71 = addslashes(htmlspecialchars(trim("$_POST[pelynek_pravy_71]")));
$propolis_72 = addslashes(htmlspecialchars(trim("$_POST[propolis_72]")));
$salvej_lekarska_73 = addslashes(htmlspecialchars(trim("$_POST[salvej_lekarska_73]")));
$zazvor_lekarsky_74 = addslashes(htmlspecialchars(trim("$_POST[zazvor_lekarsky_74]")));
$rozmaryn_lekarsky_75 = addslashes(htmlspecialchars(trim("$_POST[rozmaryn_lekarsky_75]")));
$skorice_76 = addslashes(htmlspecialchars(trim("$_POST[skorice_76]")));
$vlastovicnik_77 = addslashes(htmlspecialchars(trim("$_POST[vlastovicnik_77]")));
$pater_a_klouby_78 = addslashes(htmlspecialchars(trim("$_POST[pater_a_klouby_78]")));
$jaterni_79 = addslashes(htmlspecialchars(trim("$_POST[jaterni_79]")));
$zaludecni_80 = addslashes(htmlspecialchars(trim("$_POST[zaludecni_80]")));

// ------------------ Zdraví TČM -----------------------------------------
$tcm_id_2 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_2]")));
$tcm_id_3 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_3]")));
$tcm_id_4 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_4]")));
$tcm_id_5 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_5]")));
$tcm_id_6 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_6]")));
$tcm_id_7 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_7]")));
$tcm_id_8 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_8]")));
$tcm_id_9 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_9]")));
$tcm_id_10 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_10]")));
$tcm_id_11 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_11]")));
$tcm_id_12 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_12]")));
$tcm_id_13 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_13]")));
$tcm_id_14 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_14]")));
$tcm_id_15 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_15]")));
$tcm_id_16 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_16]")));
$tcm_id_17 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_17]")));
$tcm_id_18 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_18]")));
$tcm_id_19 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_19]")));
$tcm_id_20 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_20]")));
$tcm_id_21 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_21]")));
$tcm_id_22 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_22]")));
$tcm_id_23 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_23]")));
$tcm_id_24 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_24]")));
$tcm_id_25 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_25]")));
$tcm_id_26 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_26]")));
$tcm_id_27 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_27]")));
$tcm_id_28 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_28]")));
$tcm_id_29 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_29]")));
$tcm_id_30 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_30]")));
$tcm_id_31 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_31]")));
$tcm_id_32 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_32]")));
$tcm_id_33 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_33]")));
$tcm_id_34 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_34]")));
$tcm_id_35 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_35]")));
$tcm_id_36 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_36]")));
$tcm_id_37 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_37]")));
$tcm_id_38 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_38]")));
$tcm_id_39 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_39]")));
$tcm_id_40 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_40]")));
$tcm_id_41 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_41]")));
$tcm_id_42 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_42]")));
$tcm_id_43 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_43]")));
$tcm_id_44 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_44]")));
$tcm_id_45 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_45]")));
$tcm_id_46 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_46]")));
$tcm_id_47 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_47]")));
$tcm_id_48 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_48]")));
$tcm_id_49 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_49]")));
$tcm_id_50 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_50]")));
$tcm_id_51 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_51]")));
$tcm_id_52 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_52]")));
$tcm_id_53 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_53]")));
$tcm_id_54 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_54]")));
$tcm_id_55 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_55]")));
$tcm_id_56 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_56]")));
$tcm_id_57 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_57]")));
$tcm_id_58 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_58]")));
$tcm_id_59 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_59]")));
$tcm_id_60 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_60]")));
$tcm_id_61 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_61]")));
$tcm_id_62 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_62]")));
$tcm_id_63 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_63]")));
$tcm_id_64 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_64]")));
$tcm_id_65 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_65]")));
$tcm_id_66 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_66]")));
$tcm_id_67 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_67]")));
$tcm_id_68 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_68]")));
$tcm_id_69 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_69]")));
$tcm_id_70 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_70]")));
$tcm_id_71 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_71]")));
$tcm_id_72 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_72]")));
$tcm_id_73 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_73]")));
$tcm_id_74 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_74]")));
$tcm_id_75 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_75]")));
$tcm_id_76 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_76]")));
$tcm_id_77 = addslashes(htmlspecialchars(trim("$_POST[tcm_id_77]")));

// ------------------ Zdraví Homeopatika-----------------------------------------
$abrotanum_2 = addslashes(htmlspecialchars(trim("$_POST[abrotanum_2]")));
$aconitum_napellus_3 = addslashes(htmlspecialchars(trim("$_POST[aconitum_napellus_3]")));
$actaea_racemosa_4 = addslashes(htmlspecialchars(trim("$_POST[actaea_racemosa_4]")));
$actaea_spicata_5 = addslashes(htmlspecialchars(trim("$_POST[actaea_spicata_5]")));
$aesculus_hippocastanum_6 = addslashes(htmlspecialchars(trim("$_POST[aesculus_hippocastanum_6]")));
$aethusa_cynapium_7 = addslashes(htmlspecialchars(trim("$_POST[aethusa_cynapium_7]")));
$agaricus_muscarius_8 = addslashes(htmlspecialchars(trim("$_POST[agaricus_muscarius_8]")));
$agnus_castus_9 = addslashes(htmlspecialchars(trim("$_POST[agnus_castus_9]")));
$agraphis_nutans_10 = addslashes(htmlspecialchars(trim("$_POST[agraphis_nutans_10]")));
$ailanthus_glandulosa_11 = addslashes(htmlspecialchars(trim("$_POST[ailanthus_glandulosa_11]")));
$allium_cepa_12 = addslashes(htmlspecialchars(trim("$_POST[allium_cepa_12]")));
$allium_sativum_13 = addslashes(htmlspecialchars(trim("$_POST[allium_sativum_13]")));
$aloe_socotrina_14 = addslashes(htmlspecialchars(trim("$_POST[aloe_socotrina_14]")));
$alumina_15 = addslashes(htmlspecialchars(trim("$_POST[alumina_15]")));
$ambra_grisea_16 = addslashes(htmlspecialchars(trim("$_POST[ambra_grisea_16]")));
$ammonium_carbonicum_17 = addslashes(htmlspecialchars(trim("$_POST[ammonium_carbonicum_17]")));
$ammonium_muriaticum_18 = addslashes(htmlspecialchars(trim("$_POST[ammonium_muriaticum_18]")));
$amylium_nitrosum_19 = addslashes(htmlspecialchars(trim("$_POST[amylium_nitrosum_19]")));
$anacardium_orientale_20 = addslashes(htmlspecialchars(trim("$_POST[anacardium_orientale_20]")));
$anagallis_arvensis_21 = addslashes(htmlspecialchars(trim("$_POST[anagallis_arvensis_21]")));
$antimonium_crudum_22 = addslashes(htmlspecialchars(trim("$_POST[antimonium_crudum_22]")));
$antimonium_tartaricum_23 = addslashes(htmlspecialchars(trim("$_POST[antimonium_tartaricum_23]")));
$apis_mellifica_24 = addslashes(htmlspecialchars(trim("$_POST[apis_mellifica_24]")));
$aralia_racemosa_25 = addslashes(htmlspecialchars(trim("$_POST[aralia_racemosa_25]")));
$aranea_diadema_26 = addslashes(htmlspecialchars(trim("$_POST[aranea_diadema_26]")));
$argentum_nitricum_27 = addslashes(htmlspecialchars(trim("$_POST[argentum_nitricum_27]")));
$arnica_montana_28 = addslashes(htmlspecialchars(trim("$_POST[arnica_montana_28]")));
$arsenicum_album_29 = addslashes(htmlspecialchars(trim("$_POST[arsenicum_album_29]")));
$arsenicum_iodatum_30 = addslashes(htmlspecialchars(trim("$_POST[arsenicum_iodatum_30]")));
$arum_triphyllum_31 = addslashes(htmlspecialchars(trim("$_POST[arum_triphyllum_31]")));
$asa_foetida_32 = addslashes(htmlspecialchars(trim("$_POST[asa_foetida_32]")));
$aurum_metallicum_33 = addslashes(htmlspecialchars(trim("$_POST[aurum_metallicum_33]")));
$aurum_muriaticum_natronatum_34 = addslashes(htmlspecialchars(trim("$_POST[aurum_muriaticum_natronatum_34]")));
$avena_sativa_35 = addslashes(htmlspecialchars(trim("$_POST[avena_sativa_35]")));
$baryta_carbonica_36 = addslashes(htmlspecialchars(trim("$_POST[baryta_carbonica_36]")));
$baryta_iodata_37 = addslashes(htmlspecialchars(trim("$_POST[baryta_iodata_37]")));
$baryta_muriatica_38 = addslashes(htmlspecialchars(trim("$_POST[baryta_muriatica_38]")));
$belladonna_39 = addslashes(htmlspecialchars(trim("$_POST[belladonna_39]")));
$bellis_perennis_40 = addslashes(htmlspecialchars(trim("$_POST[bellis_perennis_40]")));
$benzoicum_acidum_41 = addslashes(htmlspecialchars(trim("$_POST[benzoicum_acidum_41]")));
$berberis_vulgaris_42 = addslashes(htmlspecialchars(trim("$_POST[berberis_vulgaris_42]")));
$bismuthum_43 = addslashes(htmlspecialchars(trim("$_POST[bismuthum_43]")));
$blatta_orientalis_44 = addslashes(htmlspecialchars(trim("$_POST[blatta_orientalis_44]")));
$borax_45 = addslashes(htmlspecialchars(trim("$_POST[borax_45]")));
$bromum_46 = addslashes(htmlspecialchars(trim("$_POST[bromum_46]")));
$bryonia_47 = addslashes(htmlspecialchars(trim("$_POST[bryonia_47]")));
$bufo_rana_48 = addslashes(htmlspecialchars(trim("$_POST[bufo_rana_48]")));
$cactus_grandiflorus_49 = addslashes(htmlspecialchars(trim("$_POST[cactus_grandiflorus_49]")));
$cadmium_sulfuricum_50 = addslashes(htmlspecialchars(trim("$_POST[cadmium_sulfuricum_50]")));
$caladium_seguinum_51 = addslashes(htmlspecialchars(trim("$_POST[caladium_seguinum_51]")));
$calcarea_carbonica_52 = addslashes(htmlspecialchars(trim("$_POST[calcarea_carbonica_52]")));
$calcarea_fluorica_53 = addslashes(htmlspecialchars(trim("$_POST[calcarea_fluorica_53]")));
$calcarea_phosphorica_54 = addslashes(htmlspecialchars(trim("$_POST[calcarea_phosphorica_54]")));
$calcarea_sulfurica_55 = addslashes(htmlspecialchars(trim("$_POST[calcarea_sulfurica_55]")));
$calendula_officinalis_56 = addslashes(htmlspecialchars(trim("$_POST[calendula_officinalis_56]")));
$cantharis_57 = addslashes(htmlspecialchars(trim("$_POST[cantharis_57]")));
$capsicum_annuum_58 = addslashes(htmlspecialchars(trim("$_POST[capsicum_annuum_58]")));
$carbo_animalis_59 = addslashes(htmlspecialchars(trim("$_POST[carbo_animalis_59]")));
$carbo_vegetabilis_60 = addslashes(htmlspecialchars(trim("$_POST[carbo_vegetabilis_60]")));
$carduus_marianus_61 = addslashes(htmlspecialchars(trim("$_POST[carduus_marianus_61]")));
$caulophyllum_thalictroides_62 = addslashes(htmlspecialchars(trim("$_POST[caulophyllum_thalictroides_62]")));
$causticum_63 = addslashes(htmlspecialchars(trim("$_POST[causticum_63]")));
$cicuta_virosa_64 = addslashes(htmlspecialchars(trim("$_POST[cicuta_virosa_64]")));
$cina_65 = addslashes(htmlspecialchars(trim("$_POST[cina_65]")));
$cinnabaris_66 = addslashes(htmlspecialchars(trim("$_POST[cinnabaris_66]")));
$clematis_erecta_67 = addslashes(htmlspecialchars(trim("$_POST[clematis_erecta_67]")));
$cocculus_indicus_68 = addslashes(htmlspecialchars(trim("$_POST[cocculus_indicus_68]")));
$coccus_cacti_69 = addslashes(htmlspecialchars(trim("$_POST[coccus_cacti_69]")));
$coffea_cruda_70 = addslashes(htmlspecialchars(trim("$_POST[coffea_cruda_70]")));
$colchicum_autumnale_71 = addslashes(htmlspecialchars(trim("$_POST[colchicum_autumnale_71]")));
$colocynthis_72 = addslashes(htmlspecialchars(trim("$_POST[colocynthis_72]")));
$condurango_73 = addslashes(htmlspecialchars(trim("$_POST[condurango_73]")));
$conium_maculatum_74 = addslashes(htmlspecialchars(trim("$_POST[conium_maculatum_74]")));
$corallium_rubrum_75 = addslashes(htmlspecialchars(trim("$_POST[corallium_rubrum_75]")));
$crataegus_oxyacantha_76 = addslashes(htmlspecialchars(trim("$_POST[crataegus_oxyacantha_76]")));
$crocus_sativus_77 = addslashes(htmlspecialchars(trim("$_POST[crocus_sativus_77]")));
$croton_tiglium_78 = addslashes(htmlspecialchars(trim("$_POST[croton_tiglium_78]")));
$cuprum_arsenicosum_79 = addslashes(htmlspecialchars(trim("$_POST[cuprum_arsenicosum_79]")));
$cuprum_metallicum_80 = addslashes(htmlspecialchars(trim("$_POST[cuprum_metallicum_80]")));
$cyclamen_europaeum_81 = addslashes(htmlspecialchars(trim("$_POST[cyclamen_europaeum_81]")));
$cypripedium_pubescens_82 = addslashes(htmlspecialchars(trim("$_POST[cypripedium_pubescens_82]")));
$digitalis_purpurea_83 = addslashes(htmlspecialchars(trim("$_POST[digitalis_purpurea_83]")));
$dolichos_pruriens_84 = addslashes(htmlspecialchars(trim("$_POST[dolichos_pruriens_84]")));
$drosera_85 = addslashes(htmlspecialchars(trim("$_POST[drosera_85]")));
$dulcamara_86 = addslashes(htmlspecialchars(trim("$_POST[dulcamara_86]")));
$echinacea_angustifolia_87 = addslashes(htmlspecialchars(trim("$_POST[echinacea_angustifolia_87]")));
$equisetum_hiemale_88 = addslashes(htmlspecialchars(trim("$_POST[equisetum_hiemale_88]")));
$eugenia_jambosa_89 = addslashes(htmlspecialchars(trim("$_POST[eugenia_jambosa_89]")));
$eupatorium_perfoliatum_90 = addslashes(htmlspecialchars(trim("$_POST[eupatorium_perfoliatum_90]")));
$euphrasia_officinalis_91 = addslashes(htmlspecialchars(trim("$_POST[euphrasia_officinalis_91]")));
$ferrum_metallicum_92 = addslashes(htmlspecialchars(trim("$_POST[ferrum_metallicum_92]")));
$ferrum_phosphoricum_93 = addslashes(htmlspecialchars(trim("$_POST[ferrum_phosphoricum_93]")));
$fluoricum_acidum_94 = addslashes(htmlspecialchars(trim("$_POST[fluoricum_acidum_94]")));
$folliculinum_95 = addslashes(htmlspecialchars(trim("$_POST[folliculinum_95]")));
$formica_rufa_96 = addslashes(htmlspecialchars(trim("$_POST[formica_rufa_96]")));
$fucus_vesiculosus_97 = addslashes(htmlspecialchars(trim("$_POST[fucus_vesiculosus_97]")));
$gelsemium_sempervirens_98 = addslashes(htmlspecialchars(trim("$_POST[gelsemium_sempervirens_98]")));
$ginkgo_biloba_99 = addslashes(htmlspecialchars(trim("$_POST[ginkgo_biloba_99]")));
$glonoinum_100 = addslashes(htmlspecialchars(trim("$_POST[glonoinum_100]")));
$graphites_101 = addslashes(htmlspecialchars(trim("$_POST[graphites_101]")));
$guaiacum_102 = addslashes(htmlspecialchars(trim("$_POST[guaiacum_102]")));
$hamamelis_virginiana_103 = addslashes(htmlspecialchars(trim("$_POST[hamamelis_virginiana_103]")));
$harpagophytum_procumbens_104 = addslashes(htmlspecialchars(trim("$_POST[harpagophytum_procumbens_104]")));
$hekla_lava_105 = addslashes(htmlspecialchars(trim("$_POST[hekla_lava_105]")));
$helonias_dioica_106 = addslashes(htmlspecialchars(trim("$_POST[helonias_dioica_106]")));
$hepar_sulfuris_calcareum_107 = addslashes(htmlspecialchars(trim("$_POST[hepar_sulfuris_calcareum_107]")));
$histaminum_108 = addslashes(htmlspecialchars(trim("$_POST[histaminum_108]")));
$hydrastis_canadensis_109 = addslashes(htmlspecialchars(trim("$_POST[hydrastis_canadensis_109]")));
$hydrocotyle_asiatica_110 = addslashes(htmlspecialchars(trim("$_POST[hydrocotyle_asiatica_110]")));
$hyoscyamus_niger_111 = addslashes(htmlspecialchars(trim("$_POST[hyoscyamus_niger_111]")));
$hypericum_perforatum_112 = addslashes(htmlspecialchars(trim("$_POST[hypericum_perforatum_112]")));
$chamomilla_vulgaris_113 = addslashes(htmlspecialchars(trim("$_POST[chamomilla_vulgaris_113]")));
$chelidonium_majus_114 = addslashes(htmlspecialchars(trim("$_POST[chelidonium_majus_114]")));
$china_115 = addslashes(htmlspecialchars(trim("$_POST[china_115]")));
$chininum_sulfuricum_116 = addslashes(htmlspecialchars(trim("$_POST[chininum_sulfuricum_116]")));
$ignatia_amara_117 = addslashes(htmlspecialchars(trim("$_POST[ignatia_amara_117]")));
$influenzinum_118 = addslashes(htmlspecialchars(trim("$_POST[influenzinum_118]")));
$iodum_119 = addslashes(htmlspecialchars(trim("$_POST[iodum_119]")));
$ipecacuanha_120 = addslashes(htmlspecialchars(trim("$_POST[ipecacuanha_120]")));
$iris_versicolor_121 = addslashes(htmlspecialchars(trim("$_POST[iris_versicolor_121]")));
$jalapa_122 = addslashes(htmlspecialchars(trim("$_POST[jalapa_122]")));
$kalium_arsenicosum_123 = addslashes(htmlspecialchars(trim("$_POST[kalium_arsenicosum_123]")));
$kalium_bichromicum_124 = addslashes(htmlspecialchars(trim("$_POST[kalium_bichromicum_124]")));
$kalium_bromatum_125 = addslashes(htmlspecialchars(trim("$_POST[kalium_bromatum_125]")));
$kalium_carbonicum_126 = addslashes(htmlspecialchars(trim("$_POST[kalium_carbonicum_126]")));
$kalium_iodatum_127 = addslashes(htmlspecialchars(trim("$_POST[kalium_iodatum_127]")));
$kalium_muriaticum_128 = addslashes(htmlspecialchars(trim("$_POST[kalium_muriaticum_128]")));
$kalium_phosphoricum_129 = addslashes(htmlspecialchars(trim("$_POST[kalium_phosphoricum_129]")));
$kalium_sulfuricum_130 = addslashes(htmlspecialchars(trim("$_POST[kalium_sulfuricum_130]")));
$kalmia_latifolia_131 = addslashes(htmlspecialchars(trim("$_POST[kalmia_latifolia_131]")));
$kreosotum_132 = addslashes(htmlspecialchars(trim("$_POST[kreosotum_132]")));
$lac_caninum_133 = addslashes(htmlspecialchars(trim("$_POST[lac_caninum_133]")));
$lachesis_mutus_134 = addslashes(htmlspecialchars(trim("$_POST[lachesis_mutus_134]")));
$lachnanthes_tinctoria_135 = addslashes(htmlspecialchars(trim("$_POST[lachnanthes_tinctoria_135]")));
$ledum_palustre_136 = addslashes(htmlspecialchars(trim("$_POST[ledum_palustre_136]")));
$lilium_tigrinum_137 = addslashes(htmlspecialchars(trim("$_POST[lilium_tigrinum_137]")));
$lithium_carbonicum_138 = addslashes(htmlspecialchars(trim("$_POST[lithium_carbonicum_138]")));
$lobelia_inflata_139 = addslashes(htmlspecialchars(trim("$_POST[lobelia_inflata_139]")));
$luteinum_140 = addslashes(htmlspecialchars(trim("$_POST[luteinum_140]")));
$lycopodium_clavatum_141 = addslashes(htmlspecialchars(trim("$_POST[lycopodium_clavatum_141]")));
$magnesia_carbonica_142 = addslashes(htmlspecialchars(trim("$_POST[magnesia_carbonica_142]")));
$magnesia_muriatica_143 = addslashes(htmlspecialchars(trim("$_POST[magnesia_muriatica_143]")));
$magnesia_phosphorica_144 = addslashes(htmlspecialchars(trim("$_POST[magnesia_phosphorica_144]")));
$manganum_aceticum_145 = addslashes(htmlspecialchars(trim("$_POST[manganum_aceticum_145]")));
$manganum_metallicum_146 = addslashes(htmlspecialchars(trim("$_POST[manganum_metallicum_146]")));
$mercurius_corrosivus_147 = addslashes(htmlspecialchars(trim("$_POST[mercurius_corrosivus_147]")));
$mercurius_cyanatus_148 = addslashes(htmlspecialchars(trim("$_POST[mercurius_cyanatus_148]")));
$mercurius_dulcis_149 = addslashes(htmlspecialchars(trim("$_POST[mercurius_dulcis_149]")));
$mercurius_solubilis_150 = addslashes(htmlspecialchars(trim("$_POST[mercurius_solubilis_150]")));
$mezereum_151 = addslashes(htmlspecialchars(trim("$_POST[mezereum_151]")));
$millefolium_152 = addslashes(htmlspecialchars(trim("$_POST[millefolium_152]")));
$moschus_153 = addslashes(htmlspecialchars(trim("$_POST[moschus_153]")));
$muriaticum_acidum_154 = addslashes(htmlspecialchars(trim("$_POST[muriaticum_acidum_154]")));
$naja_tripudians_155 = addslashes(htmlspecialchars(trim("$_POST[naja_tripudians_155]")));
$natrum_carbonicum_156 = addslashes(htmlspecialchars(trim("$_POST[natrum_carbonicum_156]")));
$natrum_muriaticum_157 = addslashes(htmlspecialchars(trim("$_POST[natrum_muriaticum_157]")));
$natrum_phosphoricum_158 = addslashes(htmlspecialchars(trim("$_POST[natrum_phosphoricum_158]")));
$natrum_sulfuricum_159 = addslashes(htmlspecialchars(trim("$_POST[natrum_sulfuricum_159]")));
$nitricum_acidum_160 = addslashes(htmlspecialchars(trim("$_POST[nitricum_acidum_160]")));
$nux_moschata_161 = addslashes(htmlspecialchars(trim("$_POST[nux_moschata_161]")));
$nux_vomica_162 = addslashes(htmlspecialchars(trim("$_POST[nux_vomica_162]")));
$oleander_163 = addslashes(htmlspecialchars(trim("$_POST[oleander_163]")));
$opium_164 = addslashes(htmlspecialchars(trim("$_POST[opium_164]")));
$oxalicum_acidum_165 = addslashes(htmlspecialchars(trim("$_POST[oxalicum_acidum_165]")));
$petroleum_166 = addslashes(htmlspecialchars(trim("$_POST[petroleum_166]")));
$phosphoricum_acidum_167 = addslashes(htmlspecialchars(trim("$_POST[phosphoricum_acidum_167]")));
$phosphorus_168 = addslashes(htmlspecialchars(trim("$_POST[phosphorus_168]")));
$phytolacca_decandra_169 = addslashes(htmlspecialchars(trim("$_POST[phytolacca_decandra_169]")));
$pix_liquida_170 = addslashes(htmlspecialchars(trim("$_POST[pix_liquida_170]")));
$plantago_major_171 = addslashes(htmlspecialchars(trim("$_POST[plantago_major_171]")));
$platina_172 = addslashes(htmlspecialchars(trim("$_POST[platina_172]")));
$plumbum_metallicum_173 = addslashes(htmlspecialchars(trim("$_POST[plumbum_metallicum_173]")));
$podophyllum_peltatum_174 = addslashes(htmlspecialchars(trim("$_POST[podophyllum_peltatum_174]")));
$pollen_de_graminees_175 = addslashes(htmlspecialchars(trim("$_POST[pollen_de_graminees_175]")));
$pollens_176 = addslashes(htmlspecialchars(trim("$_POST[pollens_176]")));
$poumon_histamine_177 = addslashes(htmlspecialchars(trim("$_POST[poumon_histamine_177]")));
$pulsatilla_178 = addslashes(htmlspecialchars(trim("$_POST[pulsatilla_178]")));
$pyrogenium_179 = addslashes(htmlspecialchars(trim("$_POST[pyrogenium_179]")));
$rhododendron_chrysanthum_180 = addslashes(htmlspecialchars(trim("$_POST[rhododendron_chrysanthum_180]")));
$rhus_toxicodendron_181 = addslashes(htmlspecialchars(trim("$_POST[rhus_toxicodendron_181]")));
$ricinus_communis_182 = addslashes(htmlspecialchars(trim("$_POST[ricinus_communis_182]")));
$robinia_pseudo_acacia_183 = addslashes(htmlspecialchars(trim("$_POST[robinia_pseudo_acacia_183]")));
$rumex_crispus_184 = addslashes(htmlspecialchars(trim("$_POST[rumex_crispus_184]")));
$ruta_graveolens_185 = addslashes(htmlspecialchars(trim("$_POST[ruta_graveolens_185]")));
$sabadilla_186 = addslashes(htmlspecialchars(trim("$_POST[sabadilla_186]")));
$sabal_serrulata_187 = addslashes(htmlspecialchars(trim("$_POST[sabal_serrulata_187]")));
$sabina_188 = addslashes(htmlspecialchars(trim("$_POST[sabina_188]")));
$sambucus_nigra_189 = addslashes(htmlspecialchars(trim("$_POST[sambucus_nigra_189]")));
$sanguinaria_canadensis_190 = addslashes(htmlspecialchars(trim("$_POST[sanguinaria_canadensis_190]")));
$sarsaparilla_191 = addslashes(htmlspecialchars(trim("$_POST[sarsaparilla_191]")));
$secale_cornutum_192 = addslashes(htmlspecialchars(trim("$_POST[secale_cornutum_192]")));
$selenium_metallicum_193 = addslashes(htmlspecialchars(trim("$_POST[selenium_metallicum_193]")));
$senna_194 = addslashes(htmlspecialchars(trim("$_POST[senna_194]")));
$sepia_officinalis_195 = addslashes(htmlspecialchars(trim("$_POST[sepia_officinalis_195]")));
$silicea_196 = addslashes(htmlspecialchars(trim("$_POST[silicea_196]")));
$solidago_virga_aurea_197 = addslashes(htmlspecialchars(trim("$_POST[solidago_virga_aurea_197]")));
$spigelia_anthelmia_198 = addslashes(htmlspecialchars(trim("$_POST[spigelia_anthelmia_198]")));
$spongia_tosta_199 = addslashes(htmlspecialchars(trim("$_POST[spongia_tosta_199]")));
$staphysagria_200 = addslashes(htmlspecialchars(trim("$_POST[staphysagria_200]")));
$sticta_pulmonaria_201 = addslashes(htmlspecialchars(trim("$_POST[sticta_pulmonaria_201]")));
$stramonium_202 = addslashes(htmlspecialchars(trim("$_POST[stramonium_202]")));
$sulfur_203 = addslashes(htmlspecialchars(trim("$_POST[sulfur_203]")));
$sulfur_iodatum_204 = addslashes(htmlspecialchars(trim("$_POST[sulfur_iodatum_204]")));
$sulfuricum_acidum_205 = addslashes(htmlspecialchars(trim("$_POST[sulfuricum_acidum_205]")));
$symphytum_officinale_206 = addslashes(htmlspecialchars(trim("$_POST[symphytum_officinale_206]")));
$tabacum_207 = addslashes(htmlspecialchars(trim("$_POST[tabacum_207]")));
$taraxacum_dens_leonis_208 = addslashes(htmlspecialchars(trim("$_POST[taraxacum_dens_leonis_208]")));
$tarentula_hispana_209 = addslashes(htmlspecialchars(trim("$_POST[tarentula_hispana_209]")));
$teucrium_marum_210 = addslashes(htmlspecialchars(trim("$_POST[teucrium_marum_210]")));
$thallium_aceticum_211 = addslashes(htmlspecialchars(trim("$_POST[thallium_aceticum_211]")));
$thuya_occidentalis_212 = addslashes(htmlspecialchars(trim("$_POST[thuya_occidentalis_212]")));
$urtica_urens_213 = addslashes(htmlspecialchars(trim("$_POST[urtica_urens_213]")));
$valeriana_officinalis_214 = addslashes(htmlspecialchars(trim("$_POST[valeriana_officinalis_214]")));
$veratrum_album_215 = addslashes(htmlspecialchars(trim("$_POST[veratrum_album_215]")));
$viola_tricolor_216 = addslashes(htmlspecialchars(trim("$_POST[viola_tricolor_216]")));
$vipera_redi_217 = addslashes(htmlspecialchars(trim("$_POST[vipera_redi_217]")));
$viscum_album_218 = addslashes(htmlspecialchars(trim("$_POST[viscum_album_218]")));
$zincum_metallicum_219 = addslashes(htmlspecialchars(trim("$_POST[zincum_metallicum_219]")));
$camilia_220 = addslashes(htmlspecialchars(trim("$_POST[camilia_220]")));
$cocculine_221 = addslashes(htmlspecialchars(trim("$_POST[cocculine_221]")));
$coryzalia_222 = addslashes(htmlspecialchars(trim("$_POST[coryzalia_222]")));
$drosetux_223 = addslashes(htmlspecialchars(trim("$_POST[drosetux_223]")));
$neo_224 = addslashes(htmlspecialchars(trim("$_POST[neo_224]")));
$gastrocynesine_225 = addslashes(htmlspecialchars(trim("$_POST[gastrocynesine_225]")));
$homeogene_9_226 = addslashes(htmlspecialchars(trim("$_POST[homeogene_9_226]")));
$homeovox_227 = addslashes(htmlspecialchars(trim("$_POST[homeovox_227]")));
$oscillococcinum_228 = addslashes(htmlspecialchars(trim("$_POST[oscillococcinum_228]")));
$paragrippe_229 = addslashes(htmlspecialchars(trim("$_POST[paragrippe_229]")));
$rhinallergy_230 = addslashes(htmlspecialchars(trim("$_POST[rhinallergy_230]")));
$sedalia_231 = addslashes(htmlspecialchars(trim("$_POST[sedalia_231]")));
$sedatif_pc_232 = addslashes(htmlspecialchars(trim("$_POST[sedatif_pc_232]")));


//------------------------------ Zdraví houby ---------------------------------
$cordyceps_1 = addslashes(htmlspecialchars(trim("$_POST[cordyceps_1]")));
$coriolus_2 = addslashes(htmlspecialchars(trim("$_POST[coriolus_2]")));
$reishi_4 = addslashes(htmlspecialchars(trim("$_POST[reishi_4]")));
$triton_3 = addslashes(htmlspecialchars(trim("$_POST[triton_3]")));

//------------------------------ Zdraví inpharm ---------------------------------

$colenter_ld_1 = addslashes(htmlspecialchars(trim("$_POST[colenter_ld_1]")));
$enterina_2 = addslashes(htmlspecialchars(trim("$_POST[enterina_2]")));
$lipo_c_askor_forte_120_4 = addslashes(htmlspecialchars(trim("$_POST[lipo_c_askor_forte_120_4]")));
$lipo_c_askor_forte_60_5 = addslashes(htmlspecialchars(trim("$_POST[lipo_c_askor_forte_60_5]")));
$lipo_c_askor_junior_6 = addslashes(htmlspecialchars(trim("$_POST[lipo_c_askor_junior_6]")));
$lipo_c_askor_tekuta_forma_3 = addslashes(htmlspecialchars(trim("$_POST[lipo_c_askor_tekuta_forma_3]"))); 
$probacin_7 = addslashes(htmlspecialchars(trim("$_POST[probacin_7]")));
$uro_c_kontrol_8 = addslashes(htmlspecialchars(trim("$_POST[uro_c_kontrol_8]"))); 

//------------------------------ Zdraví Pitný režim ---------------------------------
$pitny_rezim_mnozstvi = addslashes(htmlspecialchars(trim("$_POST[pitny_rezim_mnozstvi]")));

//------------------------------ Zdraví jidlo ---------------------------------
$jidlo_mnozstvi = addslashes(htmlspecialchars(trim("$_POST[jidlo_mnozstvi]")));

//------------------------------ Zdraví spánek ---------------------------------
$spanek_sny = addslashes(htmlspecialchars(trim("$_POST[spanek_sny]")));
$spanek_delka = addslashes(htmlspecialchars(trim("$_POST[spanek_delka]")));
$spanek_buzeni = addslashes(htmlspecialchars(trim("$_POST[spanek_buzeni]")));
$spanek_kvalita = addslashes(htmlspecialchars(trim("$_POST[spanek_kvalita]")));
$spanek_v_kolik_hodin = addslashes(htmlspecialchars(trim("$_POST[spanek_v_kolik_hodin]")));

//------------------------------ Zdraví Covid ---------------------------------
$covid_ockovani = addslashes(htmlspecialchars(trim("$_POST[covid_ockovani]")));
$covid_nemoc = addslashes(htmlspecialchars(trim("$_POST[covid_nemoc]")));
$covid_prubeh = addslashes(htmlspecialchars(trim("$_POST[covid_prubeh]")));


//------------------------------ Zdraví Které onemocnění Vás nejvíce obtěžuje ---------------------------------
$dve_onemocneni = addslashes(htmlspecialchars(trim("$_POST[dve_onemocneni]")));




    if ($stav !== 'odeslano'){
//    echo "NEODESLANO";
    require "krok_04.php";


        }else{
//    echo "ODESLANO";

$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));
$uzivatel_id = encrypt_decrypt('decrypt', $uzivatel_id);  


// -----------------kontrola formuláře ----------------------------------------

// ------------------  Uložení záznamu -----------------------------------------


// ------------------  Zdraví operace -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_operace_urazy (
    uzivatel_id,
    operace_vnitrnich_organu, 
    operace_pater_kosti_klouby,
    urazy_zlomeniny,
    datum
    )
 
    VALUES (    
    '$uzivatel_id', 
    '$operace_vnitrnich_organu', 
    '$operace_pater_kosti_klouby',
    '$urazy_zlomeniny',
     NOW() 
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close(); 

// ------------------  Zdraví pohybový aparát -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_pohybovy_aparat (
    uzivatel_id,
    pourazovy_stav, 
    pooperacni_stav,
    shermanova_nemoc,
    skolioza,
    osteoporoza,
    ploche_nohy,
    hypermobilita,
    bechterev,
    artroza_krcni_pater,
    artroza_hrudni_pater,
    artroza_bederni_pater,
    artroza_krizova_kost,
    artroza_kostrc,
    artroza_ramena,
    artroza_lokty,
    artroza_zapesti,
    artroza_prsty_na_rukou,
    artroza_prsty_na_nohou,
    artroza_kycle,
    artroza_kolena,
    artroza_kotniky,
    artritida_revmatoidni_krcni_pater,
    artritida_revmatoidni_hrudni_pater,
    artritida_revmatoidni_bederni_pater,
    artritida_revmatoidni_krizova_kost,
    artritida_revmatoidni_kostrc,
    artritida_revmatoidni_ramena,
    artritida_revmatoidni_lokty,
    artritida_revmatoidni_zapesti,
    artritida_revmatoidni_prsty_na_rukou,
    artritida_revmatoidni_prsty_na_nohou,
    artritida_revmatoidni_kycle,
    artritida_revmatoidni_kolena,
    artritida_revmatoidni_kotniky,
    artritida_osteoartritida_krcni_pater,
    artritida_osteoartritida_hrudni_pater,
    artritida_osteoartritida_bederni_pater,
    artritida_osteoartritida_krizova_kost,
    artritida_osteoartritida_kostrc,
    artritida_osteoartritida_ramena,
    artritida_osteoartritida_lokty,
    artritida_osteoartritida_zapesti,
    artritida_osteoartritida_prsty_na_rukou,
    artritida_osteoartritida_prsty_na_nohou,
    artritida_osteoartritida_kycle,
    artritida_osteoartritida_kolena,
    artritida_osteoartritida_kotniky,
    protruze_krcni_pater,
    protruze_hrudni_pater,
    protruze_bederni_pater,
    protruze_krizova_kost,
    protruze_kostrc,
    bolesti_krcni_pater,
    bolesti_hrudni_pater,
    bolesti_bederni_pater,
    bolesti_krizova_kost,
    bolesti_kostrc,
    bolesti_ramena,
    bolesti_lokty,
    bolesti_zapesti,
    bolesti_prsty_na_rukou,
    bolesti_prsty_na_nohou,
    bolesti_kycle,
    bolesti_kolena,
    bolesti_kotniky,
    poloha_vyvolavajici_bolest,
    poloha_ulevova,
    omezeni_pri_cinnostech,
    datum
    )
 
    VALUES (    
    '$uzivatel_id', 
    '$pourazovy_stav', 
    '$pooperacni_stav',
    '$shermanova_nemoc',
    '$skolioza',    
    '$osteoporoza',
    '$ploche_nohy',
    '$hypermobilita',    
    '$bechterev',
    '$artroza_krcni_pater',
    '$artroza_hrudni_pater',
    '$artroza_bederni_pater',
    '$artroza_krizova_kost',
    '$artroza_kostrc',
    '$artroza_ramena',
    '$artroza_lokty',
    '$artroza_zapesti',
    '$artroza_prsty_na_rukou',
    '$artroza_prsty_na_nohou',
    '$artroza_kycle',
    '$artroza_kolena',
    '$artroza_kotniky',
    '$artritida_revmatoidni_krcni_pater',
    '$artritida_revmatoidni_hrudni_pater',
    '$artritida_revmatoidni_bederni_pater',
    '$artritida_revmatoidni_krizova_kost',
    '$artritida_revmatoidni_kostrc',
    '$artritida_revmatoidni_ramena',
    '$artritida_revmatoidni_lokty',
    '$artritida_revmatoidni_zapesti',
    '$artritida_revmatoidni_prsty_na_rukou',
    '$artritida_revmatoidni_prsty_na_nohou',
    '$artritida_revmatoidni_kycle',
    '$artritida_revmatoidni_kolena',
    '$artritida_revmatoidni_kotniky',
    '$artritida_osteoartritida_krcni_pater',
    '$artritida_osteoartritida_hrudni_pater',
    '$artritida_osteoartritida_bederni_pater',
    '$artritida_osteoartritida_krizova_kost',
    '$artritida_osteoartritida_kostrc',
    '$artritida_osteoartritida_ramena',
    '$artritida_osteoartritida_lokty',
    '$artritida_osteoartritida_zapesti',
    '$artritida_osteoartritida_prsty_na_rukou',
    '$artritida_osteoartritida_prsty_na_nohou',
    '$artritida_osteoartritida_kycle',
    '$artritida_osteoartritida_kolena',
    '$artritida_osteoartritida_kotniky',
    '$protruze_krcni_pater',
    '$protruze_hrudni_pater',
    '$protruze_bederni_pater',
    '$protruze_krizova_kost',
    '$protruze_kostrc',
    '$bolesti_krcni_pater',
    '$bolesti_hrudni_pater',
    '$bolesti_bederni_pater',
    '$bolesti_krizova_kost',
    '$bolesti_kostrc',
    '$bolesti_ramena',
    '$bolesti_lokty',
    '$bolesti_zapesti',
    '$bolesti_prsty_na_rukou',
    '$bolesti_prsty_na_nohou',
    '$bolesti_kycle',
    '$bolesti_kolena',
    '$bolesti_kotniky',
    '$poloha_vyvolavajici_bolest',
    '$poloha_ulevova',
    '$omezeni_pri_cinnostech',
     NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close(); 


// ------------------  Zdraví alergie -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_alergie (
    uzivatel_id,
    alergie_pyl_jarni,
    alergie_pyl_letni,
    alergie_pyl_podzimni,
    alergie_plisne,
    alergie_prach,
    alergie_peri,
    alergie_srst,
    alergie_roztoce,
    alergie_potraviny,
    alergie_zvirata,
    alergie_leky,
    alergie_projevy_tekouci_ryma,
    alergie_projevy_intenzivni_kychani,
    alergie_projevy_krev_pri_smrkani,
    alergie_projevy_hnisave_rymy,
    alergie_projevy_kozni_projevy,
    alergie_projevy_svedeni_kuze,
    alergie_projevy_astma,
    alergie_projevy_bolesti_svalu,
    alergie_projevy_bolesti_hlavy,
    alergie_projevy_nespavost,
    alergie_projevy_otekla_ocni_vicka,
    alergie_projevy_svedeni_oci,
    alergie_projevy_slzeni_oci,
    alergie_projevy_kasel,
    alergie_projevy_kompletni_unava,
    datum
    )

    VALUES ( 
    '$uzivatel_id',  
    '$alergie_pyl_jarni',
    '$alergie_pyl_letni',
    '$alergie_pyl_podzimni',
    '$alergie_plisne',
    '$alergie_prach',
    '$alergie_peri',
    '$alergie_srst',
    '$alergie_roztoce',
    '$alergie_potraviny',
    '$alergie_zvirata',
    '$alergie_leky',
    '$alergie_projevy_tekouci_ryma',
    '$alergie_projevy_intenzivni_kychani',
    '$alergie_projevy_krev_pri_smrkani',
    '$alergie_projevy_hnisave_rymy',
    '$alergie_projevy_kozni_projevy',
    '$alergie_projevy_svedeni_kuze',
    '$alergie_projevy_astma',
    '$alergie_projevy_bolesti_svalu',
    '$alergie_projevy_bolesti_hlavy',
    '$alergie_projevy_nespavost',
    '$alergie_projevy_otekla_ocni_vicka',
    '$alergie_projevy_svedeni_oci',
    '$alergie_projevy_slzeni_oci',
    '$alergie_projevy_kasel',
    '$alergie_projevy_kompletni_unava',
     NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close(); 


// ------------------  Zdraví imunita -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_imunita (
    uzivatel_id,
    imunita_autoimunita,
    imunita_opakovane_virozy_chripky,
    imunita_snizena_imunita,
    datum
    )

    VALUES ( 
    '$uzivatel_id',  
    '$imunita_autoimunita',
    '$imunita_opakovane_virozy_chripky',
    '$imunita_snizena_imunita', 
     NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close(); 


// ------------------  Zdraví infekce -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_infekce (
    uzivatel_id,
    infekce_encefalitida,
    infekce_meningitida,
    infekce_borelioza,
    infekce_infekcni_hepatitida,
    infekce_mononukleoza,
    infekce_chlamydie,
    infekce_cmv,
    infekce_hpv,
    infekce_streptokok,
    infekce_stafylokok,
    datum
    )

    VALUES ( 
    '$uzivatel_id',  
    '$infekce_encefalitida',
    '$infekce_meningitida',
    '$infekce_borelioza',
    '$infekce_infekcni_hepatitida',
    '$infekce_mononukleoza',
    '$infekce_chlamydie',
    '$infekce_cmv',
    '$infekce_hpv',
    '$infekce_streptokok',
    '$infekce_stafylokok',
    NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close(); 


// ------------------  Zdraví interna gastro -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_interna_gastro (
    uzivatel_id,
    interna_gastro_problemy_se_zlucnikem,
    interna_gastro_bolesti_zlucniku,
    interna_gastro_zlucove_kameny,
    interna_gastro_problemy_se_slinivkou,
    interna_gastro_postizeni_jater,
    interna_gastro_zácpy,
    interna_gastro_prujmy,
    interna_gastro_strevni_koliky,
    interna_gastro_daveni,
    interna_gastro_zvraceni,
    interna_gastro_nadymani,
    interna_gastro_strevni_polypy,
    interna_gastro_zanety_strev,
    interna_gastro_zaludecni_vredy,
    interna_gastro_bolesti_zaludku,
    interna_gastro_divertikly,
    interna_gastro_crohnova_nemoc,
    interna_gastro_branicní_kyla,
    interna_gastro_triselna_kyla,
    interna_gastro_pupecni_kyla,
    interna_gastro_brisni_kyla,
    interna_gastro_paleni_zahy,
    interna_gastro_reflux,
    datum
    )

    VALUES ( 
    '$uzivatel_id',  
    '$interna_gastro_problemy_se_zlucnikem',
    '$interna_gastro_bolesti_zlucniku',
    '$interna_gastro_zlucove_kameny',
    '$interna_gastro_problemy_se_slinivkou',
    '$interna_gastro_postizeni_jater',
    '$interna_gastro_zácpy',
    '$interna_gastro_prujmy',
    '$interna_gastro_strevni_koliky',
    '$interna_gastro_daveni',
    '$interna_gastro_zvraceni',
    '$interna_gastro_nadymani',
    '$interna_gastro_strevni_polypy',
    '$interna_gastro_zanety_strev',
    '$interna_gastro_zaludecni_vredy',
    '$interna_gastro_bolesti_zaludku',
    '$interna_gastro_divertikly',
    '$interna_gastro_crohnova_nemoc',
    '$interna_gastro_branicní_kyla',
    '$interna_gastro_triselna_kyla',
    '$interna_gastro_pupecni_kyla',
    '$interna_gastro_brisni_kyla',
    '$interna_gastro_paleni_zahy',
    '$interna_gastro_reflux',
     NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close(); 


// ------------------  Zdraví Interna - srdce a cévy -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_interna_srdce_a_cevy (
    uzivatel_id,
    interna_srdce_cevy_arytmie,
    interna_srdce_cevy_hypertenze,
    interna_srdce_cevy_varixy,
    interna_srdce_cevy_ichs_ev_angina_pectoris,
    interna_srdce_cevy_infarkty,
    interna_srdce_cevy_blize_nespecifkovane_buseni_srdce,
    datum
    )

    VALUES ( 
    '$uzivatel_id',  
    '$interna_srdce_cevy_arytmie',
    '$interna_srdce_cevy_hypertenze',
    '$interna_srdce_cevy_varixy',
    '$interna_srdce_cevy_ichs_ev_angina_pectoris',
    '$interna_srdce_cevy_infarkty',
    '$interna_srdce_cevy_blize_nespecifkovane_buseni_srdce',
     NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();



// ------------------  Zdraví Kožní -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_kozni (
    uzivatel_id,
    kozni_atopicky_ekzem,
    kozni_seboroicka_dermatitida,
    kozni_lupenka,
    kozni_lupy,
    kozni_koprivka,
    datum
    )

    VALUES ( 
    '$uzivatel_id',  
    '$kozni_atopicky_ekzem',
    '$kozni_seboroicka_dermatitida',
    '$kozni_lupenka',
    '$kozni_lupy',
    '$kozni_koprivka',
     NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();

// ------------------  Zdraví Neurologie -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_neurologie (
    uzivatel_id,
    neurologie_komoce,
    neurologie_vertigo,
    neurologie_cephalea,
    neurologie_migreny,
    neurologie_VAS_pater_syndromy,
    neurologie_epilepsie,
    neurologie_alzheimer,
    neurologie_parkinson,
    neurologie_tres_rukou,
    neurologie_neuropatie_pri_diabetes,
    neurologie_hepatopatie,
    neurologie_brneni,
    neurologie_necitlivost_koncetin,
    neurologie_karpal,
    neurologie_opakovane_blize_nespecifikovane_bolesti_hlavy,
    datum
    )

    VALUES ( 
    '$uzivatel_id',  
    '$neurologie_komoce',
    '$neurologie_vertigo',
    '$neurologie_cephalea',
    '$neurologie_migreny',
    '$neurologie_VAS_pater_syndromy',
    '$neurologie_epilepsie',
    '$neurologie_alzheimer',
    '$neurologie_parkinson',
    '$neurologie_tres_rukou',
    '$neurologie_neuropatie_pri_diabetes',
    '$neurologie_hepatopatie',
    '$neurologie_brneni',
    '$neurologie_necitlivost_koncetin',
    '$neurologie_karpal',
    '$neurologie_opakovane_blize_nespecifikovane_bolesti_hlavy',
     NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();

// ------------------  Zdraví Oční -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_ocni (
    uzivatel_id,
    ocni_kratkozrakost,
    ocni_dalekozrakost,
    ocni_ocni_zakal,
    ocni_cerne_tecky_pred_ocima, 
    ocni_bolesti_za_ocima,
    ocni_ekzemy_kolem_oci,
    ocni_zanety_vicek,
    ocni_opakovana_jecna_vlci_zrna,
    datum
    )

    VALUES ( 
    '$uzivatel_id',  
    '$ocni_kratkozrakost',
    '$ocni_dalekozrakost',
    '$ocni_ocni_zakal',
    '$ocni_cerne_tecky_pred_ocima', 
    '$ocni_bolesti_za_ocima',
    '$ocni_ekzemy_kolem_oci',
    '$ocni_zanety_vicek',
    '$ocni_opakovana_jecna_vlci_zrna',
     NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();

// ------------------  Zdraví Onkologie -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_onkologie (
    uzivatel_id,
    onkologie,
    datum
    )

    VALUES ( 
    '$uzivatel_id',  
    '$onkologie',
     NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();

// ------------------  Zdraví ORL -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_orl (
    uzivatel_id,
    orl_ztrata_sluchu_na_jednom_uchu,
    orl_ztrata_sluchu_obe_usi, 
    orl_opakovane_zanety_stredousi,
    orl_pocit_zalehlosti_usi,
    orl_huceni_v_usich,
    orl_piskani_v_usich,
    orl_opakovane_zanety_dutin,
    orl_polypy_v_dutinach,
    orl_suchost_dutin,
    orl_smrkani_krve,
    orl_hnisave_rymy,
    datum
    )

    VALUES ( 
    '$uzivatel_id',  
    '$orl_ztrata_sluchu_na_jednom_uchu',
    '$orl_ztrata_sluchu_obe_usi', 
    '$orl_opakovane_zanety_stredousi',
    '$orl_pocit_zalehlosti_usi',
    '$orl_huceni_v_usich',
    '$orl_piskani_v_usich',
    '$orl_opakovane_zanety_dutin',
    '$orl_polypy_v_dutinach',
    '$orl_suchost_dutin',
    '$orl_smrkani_krve',
    '$orl_hnisave_rymy',
     NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();

// ------------------ Zdraví Respirační systém -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_respiracni_system (
    uzivatel_id,
    respiracni_system_astma,
    respiracni_system_opakovane_pneumonie,
    respiracni_system_zanety_prudusek,
    respiracni_system_laryngytida,
    datum
    )

    VALUES ( 
    '$uzivatel_id',  
    '$respiracni_system_astma',
    '$respiracni_system_opakovane_pneumonie',
    '$respiracni_system_zanety_prudusek',
    '$respiracni_system_laryngytida',
     NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();


// ------------------ Zdraví Stomatologie -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_stomatologie (
    uzivatel_id,
    stomatologie_vysoka_kazivost_zubu,
    stomatologie_krvaceni_dasni,
    stomatologie_paradentoza,
    datum
    )

    VALUES ( 
    '$uzivatel_id',  
    '$stomatologie_vysoka_kazivost_zubu',
    '$stomatologie_krvaceni_dasni',
    '$stomatologie_paradentoza',
     NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();

// ------------------ Zdraví Urologie -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_urologie (
    uzivatel_id,
    urologie_infekce_mocovych_cest,
    urologie_infekce_ledvin,
    urologie_kameny,
    urologie_vady,
    urologie_zvetseni_prostaty,
    datum
    )

    VALUES ( 
    '$uzivatel_id',  
    '$urologie_infekce_mocovych_cest',
    '$urologie_infekce_ledvin',
    '$urologie_kameny',
    '$urologie_vady',
    '$urologie_zvetseni_prostaty',
     NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();


// ------------------ Zdraví žlázy s vnitřní sekrecí + metabolické choroby -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_zlazy_s_vnitrni_sekreci (
    uzivatel_id,
    zlazy_s_vnitrni_sekreci_hypertyreoza,
    zlazy_s_vnitrni_sekreci_cukrovka_1_stupen,
    zlazy_s_vnitrni_sekreci_cukrovka_2_stupen,
    zlazy_s_vnitrni_sekreci_neuropatie,
    zlazy_s_vnitrni_sekreci_dna,
    datum
    )

    VALUES ( 
    '$uzivatel_id',  
    '$zlazy_s_vnitrni_sekreci_hypertyreoza',
    '$zlazy_s_vnitrni_sekreci_cukrovka_1_stupen',
    '$zlazy_s_vnitrni_sekreci_cukrovka_2_stupen',
    '$zlazy_s_vnitrni_sekreci_neuropatie',
    '$zlazy_s_vnitrni_sekreci_dna',
     NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();

// ------------------ Zdraví léky klasické medicíny -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_leky_klasicke_mediciny (
    uzivatel_id,
    leky_klasicke_mediciny,
    datum
    )

    VALUES ( 
    '$uzivatel_id',  
    '$leky_klasicke_mediciny',
     NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();


// ------------------ Zdraví Gynekologie -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_gynekologie (
    uzivatel_id,
    gynekologie_tehotenstvi,
    gynekologie_porody,
    gynekologie_potraty, 
    gynekologie_sterilita,
    gynekologie_vytoky,
    gynekologie_cysty, 
    gynekologie_myomy,
    gynekologie_zanety,
    gynekologie_infekce,
    gynekologie_menstruace,
    gynekologie_mnozstvi_krve,
    gynekologie_delka_menstruace,
    gynekologie_bolesti_behem_menstruace,
    datum
    )

    VALUES ( 
    '$uzivatel_id',  
    '$gynekologie_tehotenstvi',
    '$gynekologie_porody',
    '$gynekologie_potraty', 
    '$gynekologie_sterilita',
    '$gynekologie_vytoky',
    '$gynekologie_cysty',
    '$gynekologie_myomy',
    '$gynekologie_zanety',
    '$gynekologie_infekce',
    '$gynekologie_menstruace',
    '$gynekologie_mnozstvi_krve',
    '$gynekologie_delka_menstruace',
    '$gynekologie_bolesti_behem_menstruace',
     NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();

// ------------------ Zdraví Akupunktura -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_akupunktura (
    uzivatel_id,
    akupunktura,
    datum
    )

    VALUES ( 
    '$uzivatel_id',  
    '$akupunktura',
     NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();


// ------------------ Zdraví plazma -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_plazma (
    uzivatel_id,
    plazma,
    datum
    )

    VALUES ( 
    '$uzivatel_id',  
    '$plazma',
     NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();

// ------------------ Zdraví eav -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_eav (uzivatel_id, eav, datum) VALUES ('$uzivatel_id', '$eav',NOW())";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();



// ------------------ Zdraví Psychika Psychiatrie -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_psychiatrie (
    uzivatel_id, 
    psychiatrie_deprese,
    psychiatrie_nervozita,
    psychiatrie_nespavost,
    psychiatrie_nadmerne_poceni,
    psychiatrie_unavovy_syndrom,
    psychiatrie_leceni,
    psychiatrie_zmena_pocasi, 
    datum
    ) 
    VALUES 
    (
    '$uzivatel_id', 
    '$psychiatrie_deprese',
    '$psychiatrie_nervozita',
    '$psychiatrie_nespavost',
    '$psychiatrie_nadmerne_poceni',
    '$psychiatrie_unavovy_syndrom',
    '$psychiatrie_leceni',
    '$psychiatrie_zmena_pocasi',
    NOW()
    )";



    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();



// ------------------ Zdraví EPAM -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_epam(
    uzivatel_id,
    univerzalni_bez_propolisu_2,
    mumiovy_3,
    obranyschopnost_4,
    zensky_5,
    univerzalni_6,
    posilujici_7,
    posilujici_8,
    pruduskovy_9,
    zaludecni_10,
    fyzicka_namaha_11,
    ledvinovy_12,
    klouby_a_svaly_13,
    jaterni_14,
    kozni_15,
    srdecni_16,
    krevni_tlak_17,
    psychicky_18,
    imunita_19,
    muzsky_20,
    nervovy_21,
    poskozena_plet_22,
    ozivujici_s_mumiem_23,
    pro_citlivou_plet_24,
    eukalypt_25,
    kozni_26,
    muskat_27,
    jedle_28,
    propolis_29,
    mumio_30,
    po_namaze_31,
    cevy_a_cholesterol_32,
    hubnuti_33,
    jatra_a_zlucnik_34,
    klouby_a_pater_35,
    ledviny_36,
    pohoda_37,
    dychaci_cesty_38,
    prijemny_spanek_39,
    kittluv_cistici_40,
    cevy_a_cholesterol_41,
    hubnuti_42,
    jatra_a_zlucnik_43,
    klouby_a_pater_44,
    ledviny_45,
    pohoda_46,
    dychaci_cesty_47,
    prijemny_spanek_48,
    zaludek_49,
    pro_zeny_50,
    normalni_hladina_cukru_51,
    mumio_52,
    multivitamin_53,
    caga_54,
    jaterni_cistici_55,
    ledvinovy_56,
    klouby_57,
    akatovy_s_materi_kasickou_58,
    caga_59,
    ginko_biloba_60,
    anyz_61,
    badan_62,
    briza_belokora_63,
    kozlik_lekarsky_64,
    lekorice_lysa_65,
    echinacea_66,
    hrebickovec_vonny_67,
    jedle_belokora_68,
    levandule_lekarska_69,
    muskat_70,
    pelynek_pravy_71,
    propolis_72,
    salvej_lekarska_73,
    zazvor_lekarsky_74,
    rozmaryn_lekarsky_75,
    skorice_76,
    vlastovicnik_77,
    pater_a_klouby_78,
    jaterni_79,
    zaludecni_80,
    datum
    ) 

  VALUES 
    (
    '$uzivatel_id', 
    '$univerzalni_bez_propolisu_2',
    '$mumiovy_3',
    '$obranyschopnost_4',
    '$zensky_5',
    '$univerzalni_6',
    '$posilujici_7',
    '$posilujici_8',
    '$pruduskovy_9',
    '$zaludecni_10',
    '$fyzicka_namaha_11',
    '$ledvinovy_12',
    '$klouby_a_svaly_13',
    '$jaterni_14',
    '$kozni_15',
    '$srdecni_16',
    '$krevni_tlak_17',
    '$psychicky_18',
    '$imunita_19',
    '$muzsky_20',
    '$nervovy_21',
    '$poskozena_plet_22',
    '$ozivujici_s_mumiem_23',
    '$pro_citlivou_plet_24',
    '$eukalypt_25',
    '$kozni_26',
    '$muskat_27',
    '$jedle_28',
    '$propolis_29',
    '$mumio_30',
    '$po_namaze_31',
    '$cevy_a_cholesterol_32',
    '$hubnuti_33',
    '$jatra_a_zlucnik_34',
    '$klouby_a_pater_35',
    '$ledviny_36',
    '$pohoda_37',
    '$dychaci_cesty_38',
    '$prijemny_spanek_39',
    '$kittluv_cistici_40',
    '$cevy_a_cholesterol_41',
    '$hubnuti_42',
    '$jatra_a_zlucnik_43',
    '$klouby_a_pater_44',
    '$ledviny_45',
    '$pohoda_46',
    '$dychaci_cesty_47',
    '$prijemny_spanek_48',
    '$zaludek_49',
    '$pro_zeny_50',
    '$normalni_hladina_cukru_51',
    '$mumio_52',
    '$multivitamin_53',
    '$caga_54',
    '$jaterni_cistici_55',
    '$ledvinovy_56',
    '$klouby_57',
    '$akatovy_s_materi_kasickou_58',
    '$caga_59',
    '$ginko_biloba_60',
    '$anyz_61',
    '$badan_62',
    '$briza_belokora_63',
    '$kozlik_lekarsky_64',
    '$lekorice_lysa_65',
    '$echinacea_66',
    '$hrebickovec_vonny_67',
    '$jedle_belokora_68',
    '$levandule_lekarska_69',
    '$muskat_70',
    '$pelynek_pravy_71',
    '$propolis_72',
    '$salvej_lekarska_73',
    '$zazvor_lekarsky_74',
    '$rozmaryn_lekarsky_75',
    '$skorice_76',
    '$vlastovicnik_77',
    '$pater_a_klouby_78',
    '$jaterni_79',
    '$zaludecni_80',
   NOW()
    )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();

// ------------------ Zdraví TČM -----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_tcm (
    uzivatel_id, 
  tcm_id_2,
  tcm_id_3,
  tcm_id_4,
  tcm_id_5,
  tcm_id_6,
  tcm_id_7,
  tcm_id_8,
  tcm_id_9,
  tcm_id_10,
  tcm_id_11,
  tcm_id_12,
  tcm_id_13,
  tcm_id_14,
  tcm_id_15,
  tcm_id_16,
  tcm_id_17,
  tcm_id_18,
  tcm_id_19,
  tcm_id_20,
  tcm_id_21,
  tcm_id_22,
  tcm_id_23,
  tcm_id_24,
  tcm_id_25,
  tcm_id_26,
  tcm_id_27,
  tcm_id_28,
  tcm_id_29,
  tcm_id_30,
  tcm_id_31,
  tcm_id_32,
  tcm_id_33,
  tcm_id_34,
  tcm_id_35,
  tcm_id_36,
  tcm_id_37,
  tcm_id_38,
  tcm_id_39,
  tcm_id_40,
  tcm_id_41,
  tcm_id_42,
  tcm_id_43,
  tcm_id_44,
  tcm_id_45,
  tcm_id_46,
  tcm_id_47,
  tcm_id_48,
  tcm_id_49,
  tcm_id_50,
  tcm_id_51,
  tcm_id_52,
  tcm_id_53,
  tcm_id_54,
  tcm_id_55,
  tcm_id_56,
  tcm_id_57,
  tcm_id_58,
  tcm_id_59,
  tcm_id_60,
  tcm_id_61,
  tcm_id_62,
  tcm_id_63,
  tcm_id_64,
  tcm_id_65,
  tcm_id_66,
  tcm_id_67,
  tcm_id_68,
  tcm_id_69,
  tcm_id_70,
  tcm_id_71,
  tcm_id_72,
  tcm_id_73,
  tcm_id_74,
  tcm_id_75,
  tcm_id_76,
  tcm_id_77,
  datum
    ) 
    VALUES 
    (
'$uzivatel_id', 
'$tcm_id_2',
'$tcm_id_3',
'$tcm_id_4',
'$tcm_id_5',
'$tcm_id_6',
'$tcm_id_7',
'$tcm_id_8',
'$tcm_id_9',
'$tcm_id_10',
'$tcm_id_11',
'$tcm_id_12',
'$tcm_id_13',
'$tcm_id_14',
'$tcm_id_15',
'$tcm_id_16',
'$tcm_id_17',
'$tcm_id_18',
'$tcm_id_19',
'$tcm_id_20',
'$tcm_id_21',
'$tcm_id_22',
'$tcm_id_23',
'$tcm_id_24',
'$tcm_id_25',
'$tcm_id_26',
'$tcm_id_27',
'$tcm_id_28',
'$tcm_id_29',
'$tcm_id_30',
'$tcm_id_31',
'$tcm_id_32',
'$tcm_id_33',
'$tcm_id_34',
'$tcm_id_35',
'$tcm_id_36',
'$tcm_id_37',
'$tcm_id_38',
'$tcm_id_39',
'$tcm_id_40',
'$tcm_id_41',
'$tcm_id_42',
'$tcm_id_43',
'$tcm_id_44',
'$tcm_id_45',
'$tcm_id_46',
'$tcm_id_47',
'$tcm_id_48',
'$tcm_id_49',
'$tcm_id_50',
'$tcm_id_51',
'$tcm_id_52',
'$tcm_id_53',
'$tcm_id_54',
'$tcm_id_55',
'$tcm_id_56',
'$tcm_id_57',
'$tcm_id_58',
'$tcm_id_59',
'$tcm_id_60',
'$tcm_id_61',
'$tcm_id_62',
'$tcm_id_63',
'$tcm_id_64',
'$tcm_id_65',
'$tcm_id_66',
'$tcm_id_67',
'$tcm_id_68',
'$tcm_id_69',
'$tcm_id_70',
'$tcm_id_71',
'$tcm_id_72',
'$tcm_id_73',
'$tcm_id_74',
'$tcm_id_75',
'$tcm_id_76',
'$tcm_id_77',
NOW()
    )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();






// ------------------ Zdraví Homeopatika-----------------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_homeopatika (
uzivatel_id, 
abrotanum_2,
aconitum_napellus_3,
actaea_racemosa_4,
actaea_spicata_5,
aesculus_hippocastanum_6,
aethusa_cynapium_7,
agaricus_muscarius_8,
agnus_castus_9,
agraphis_nutans_10,
ailanthus_glandulosa_11,
allium_cepa_12,
allium_sativum_13,
aloe_socotrina_14,
alumina_15,
ambra_grisea_16,
ammonium_carbonicum_17,
ammonium_muriaticum_18,
amylium_nitrosum_19,
anacardium_orientale_20,
anagallis_arvensis_21,
antimonium_crudum_22,
antimonium_tartaricum_23,
apis_mellifica_24,
aralia_racemosa_25,
aranea_diadema_26,
argentum_nitricum_27,
arnica_montana_28,
arsenicum_album_29,
arsenicum_iodatum_30,
arum_triphyllum_31,
asa_foetida_32,
aurum_metallicum_33,
aurum_muriaticum_natronatum_34,
avena_sativa_35,
baryta_carbonica_36,
baryta_iodata_37,
baryta_muriatica_38,
belladonna_39,
bellis_perennis_40,
benzoicum_acidum_41,
berberis_vulgaris_42,
bismuthum_43,
blatta_orientalis_44,
borax_45,
bromum_46,
bryonia_47,
bufo_rana_48,
cactus_grandiflorus_49,
cadmium_sulfuricum_50,
caladium_seguinum_51,
calcarea_carbonica_52,
calcarea_fluorica_53,
calcarea_phosphorica_54,
calcarea_sulfurica_55,
calendula_officinalis_56,
cantharis_57,
capsicum_annuum_58,
carbo_animalis_59,
carbo_vegetabilis_60,
carduus_marianus_61,
caulophyllum_thalictroides_62,
causticum_63,
cicuta_virosa_64,
cina_65,
cinnabaris_66,
clematis_erecta_67,
cocculus_indicus_68,
coccus_cacti_69,
coffea_cruda_70,
colchicum_autumnale_71,
colocynthis_72,
condurango_73,
conium_maculatum_74,
corallium_rubrum_75,
crataegus_oxyacantha_76,
crocus_sativus_77,
croton_tiglium_78,
cuprum_arsenicosum_79,
cuprum_metallicum_80,
cyclamen_europaeum_81,
cypripedium_pubescens_82,
digitalis_purpurea_83,
dolichos_pruriens_84,
drosera_85,
dulcamara_86,
echinacea_angustifolia_87,
equisetum_hiemale_88,
eugenia_jambosa_89,
eupatorium_perfoliatum_90,
euphrasia_officinalis_91,
ferrum_metallicum_92,
ferrum_phosphoricum_93,
fluoricum_acidum_94,
folliculinum_95,
formica_rufa_96,
fucus_vesiculosus_97,
gelsemium_sempervirens_98,
ginkgo_biloba_99,
glonoinum_100,
graphites_101,
guaiacum_102,
hamamelis_virginiana_103,
harpagophytum_procumbens_104,
hekla_lava_105,
helonias_dioica_106,
hepar_sulfuris_calcareum_107,
histaminum_108,
hydrastis_canadensis_109,
hydrocotyle_asiatica_110,
hyoscyamus_niger_111,
hypericum_perforatum_112,
chamomilla_vulgaris_113,
chelidonium_majus_114,
china_115,
chininum_sulfuricum_116,
ignatia_amara_117,
influenzinum_118,
iodum_119,
ipecacuanha_120,
iris_versicolor_121,
jalapa_122,
kalium_arsenicosum_123,
kalium_bichromicum_124,
kalium_bromatum_125,
kalium_carbonicum_126,
kalium_iodatum_127,
kalium_muriaticum_128,
kalium_phosphoricum_129,
kalium_sulfuricum_130,
kalmia_latifolia_131,
kreosotum_132,
lac_caninum_133,
lachesis_mutus_134,
lachnanthes_tinctoria_135,
ledum_palustre_136,
lilium_tigrinum_137,
lithium_carbonicum_138,
lobelia_inflata_139,
luteinum_140,
lycopodium_clavatum_141,
magnesia_carbonica_142,
magnesia_muriatica_143,
magnesia_phosphorica_144,
manganum_aceticum_145,
manganum_metallicum_146,
mercurius_corrosivus_147,
mercurius_cyanatus_148,
mercurius_dulcis_149,
mercurius_solubilis_150,
mezereum_151,
millefolium_152,
moschus_153,
muriaticum_acidum_154,
naja_tripudians_155,
natrum_carbonicum_156,
natrum_muriaticum_157,
natrum_phosphoricum_158,
natrum_sulfuricum_159,
nitricum_acidum_160,
nux_moschata_161,
nux_vomica_162,
oleander_163,
opium_164,
oxalicum_acidum_165,
petroleum_166,
phosphoricum_acidum_167,
phosphorus_168,
phytolacca_decandra_169,
pix_liquida_170,
plantago_major_171,
platina_172,
plumbum_metallicum_173,
podophyllum_peltatum_174,
pollen_de_graminees_175,
pollens_176,
poumon_histamine_177,
pulsatilla_178,
pyrogenium_179,
rhododendron_chrysanthum_180,
rhus_toxicodendron_181,
ricinus_communis_182,
robinia_pseudo_acacia_183,
rumex_crispus_184,
ruta_graveolens_185,
sabadilla_186,
sabal_serrulata_187,
sabina_188,
sambucus_nigra_189,
sanguinaria_canadensis_190,
sarsaparilla_191,
secale_cornutum_192,
selenium_metallicum_193,
senna_194,
sepia_officinalis_195,
silicea_196,
solidago_virga_aurea_197,
spigelia_anthelmia_198,
spongia_tosta_199,
staphysagria_200,
sticta_pulmonaria_201,
stramonium_202,
sulfur_203,
sulfur_iodatum_204,
sulfuricum_acidum_205,
symphytum_officinale_206,
tabacum_207,
taraxacum_dens_leonis_208,
tarentula_hispana_209,
teucrium_marum_210,
thallium_aceticum_211,
thuya_occidentalis_212,
urtica_urens_213,
valeriana_officinalis_214,
veratrum_album_215,
viola_tricolor_216,
vipera_redi_217,
viscum_album_218,
zincum_metallicum_219,
camilia_220,
cocculine_221,
coryzalia_222,
drosetux_223,
neo_224,
gastrocynesine_225,
homeogene_9_226,
homeovox_227,
oscillococcinum_228,
paragrippe_229,
rhinallergy_230,
sedalia_231,
sedatif_pc_232,
datum
    ) 
    VALUES 
    (
'$uzivatel_id', 
'$abrotanum_2',
'$aconitum_napellus_3',
'$actaea_racemosa_4',
'$actaea_spicata_5',
'$aesculus_hippocastanum_6',
'$aethusa_cynapium_7',
'$agaricus_muscarius_8',
'$agnus_castus_9',
'$agraphis_nutans_10',
'$ailanthus_glandulosa_11',
'$allium_cepa_12',
'$allium_sativum_13',
'$aloe_socotrina_14',
'$alumina_15',
'$ambra_grisea_16',
'$ammonium_carbonicum_17',
'$ammonium_muriaticum_18',
'$amylium_nitrosum_19',
'$anacardium_orientale_20',
'$anagallis_arvensis_21',
'$antimonium_crudum_22',
'$antimonium_tartaricum_23',
'$apis_mellifica_24',
'$aralia_racemosa_25',
'$aranea_diadema_26',
'$argentum_nitricum_27',
'$arnica_montana_28',
'$arsenicum_album_29',
'$arsenicum_iodatum_30',
'$arum_triphyllum_31',
'$asa_foetida_32',
'$aurum_metallicum_33',
'$aurum_muriaticum_natronatum_34',
'$avena_sativa_35',
'$baryta_carbonica_36',
'$baryta_iodata_37',
'$baryta_muriatica_38',
'$belladonna_39',
'$bellis_perennis_40',
'$benzoicum_acidum_41',
'$berberis_vulgaris_42',
'$bismuthum_43',
'$blatta_orientalis_44',
'$borax_45',
'$bromum_46',
'$bryonia_47',
'$bufo_rana_48',
'$cactus_grandiflorus_49',
'$cadmium_sulfuricum_50',
'$caladium_seguinum_51',
'$calcarea_carbonica_52',
'$calcarea_fluorica_53',
'$calcarea_phosphorica_54',
'$calcarea_sulfurica_55',
'$calendula_officinalis_56',
'$cantharis_57',
'$capsicum_annuum_58',
'$carbo_animalis_59',
'$carbo_vegetabilis_60',
'$carduus_marianus_61',
'$caulophyllum_thalictroides_62',
'$causticum_63',
'$cicuta_virosa_64',
'$cina_65',
'$cinnabaris_66',
'$clematis_erecta_67',
'$cocculus_indicus_68',
'$coccus_cacti_69',
'$coffea_cruda_70',
'$colchicum_autumnale_71',
'$colocynthis_72',
'$condurango_73',
'$conium_maculatum_74',
'$corallium_rubrum_75',
'$crataegus_oxyacantha_76',
'$crocus_sativus_77',
'$croton_tiglium_78',
'$cuprum_arsenicosum_79',
'$cuprum_metallicum_80',
'$cyclamen_europaeum_81',
'$cypripedium_pubescens_82',
'$digitalis_purpurea_83',
'$dolichos_pruriens_84',
'$drosera_85',
'$dulcamara_86',
'$echinacea_angustifolia_87',
'$equisetum_hiemale_88',
'$eugenia_jambosa_89',
'$eupatorium_perfoliatum_90',
'$euphrasia_officinalis_91',
'$ferrum_metallicum_92',
'$ferrum_phosphoricum_93',
'$fluoricum_acidum_94',
'$folliculinum_95',
'$formica_rufa_96',
'$fucus_vesiculosus_97',
'$gelsemium_sempervirens_98',
'$ginkgo_biloba_99',
'$glonoinum_100',
'$graphites_101',
'$guaiacum_102',
'$hamamelis_virginiana_103',
'$harpagophytum_procumbens_104',
'$hekla_lava_105',
'$helonias_dioica_106',
'$hepar_sulfuris_calcareum_107',
'$histaminum_108',
'$hydrastis_canadensis_109',
'$hydrocotyle_asiatica_110',
'$hyoscyamus_niger_111',
'$hypericum_perforatum_112',
'$chamomilla_vulgaris_113',
'$chelidonium_majus_114',
'$china_115',
'$chininum_sulfuricum_116',
'$ignatia_amara_117',
'$influenzinum_118',
'$iodum_119',
'$ipecacuanha_120',
'$iris_versicolor_121',
'$jalapa_122',
'$kalium_arsenicosum_123',
'$kalium_bichromicum_124',
'$kalium_bromatum_125',
'$kalium_carbonicum_126',
'$kalium_iodatum_127',
'$kalium_muriaticum_128',
'$kalium_phosphoricum_129',
'$kalium_sulfuricum_130',
'$kalmia_latifolia_131',
'$kreosotum_132',
'$lac_caninum_133',
'$lachesis_mutus_134',
'$lachnanthes_tinctoria_135',
'$ledum_palustre_136',
'$lilium_tigrinum_137',
'$lithium_carbonicum_138',
'$lobelia_inflata_139',
'$luteinum_140',
'$lycopodium_clavatum_141',
'$magnesia_carbonica_142',
'$magnesia_muriatica_143',
'$magnesia_phosphorica_144',
'$manganum_aceticum_145',
'$manganum_metallicum_146',
'$mercurius_corrosivus_147',
'$mercurius_cyanatus_148',
'$mercurius_dulcis_149',
'$mercurius_solubilis_150',
'$mezereum_151',
'$millefolium_152',
'$moschus_153',
'$muriaticum_acidum_154',
'$naja_tripudians_155',
'$natrum_carbonicum_156',
'$natrum_muriaticum_157',
'$natrum_phosphoricum_158',
'$natrum_sulfuricum_159',
'$nitricum_acidum_160',
'$nux_moschata_161',
'$nux_vomica_162',
'$oleander_163',
'$opium_164',
'$oxalicum_acidum_165',
'$petroleum_166',
'$phosphoricum_acidum_167',
'$phosphorus_168',
'$phytolacca_decandra_169',
'$pix_liquida_170',
'$plantago_major_171',
'$platina_172',
'$plumbum_metallicum_173',
'$podophyllum_peltatum_174',
'$pollen_de_graminees_175',
'$pollens_176',
'$poumon_histamine_177',
'$pulsatilla_178',
'$pyrogenium_179',
'$rhododendron_chrysanthum_180',
'$rhus_toxicodendron_181',
'$ricinus_communis_182',
'$robinia_pseudo_acacia_183',
'$rumex_crispus_184',
'$ruta_graveolens_185',
'$sabadilla_186',
'$sabal_serrulata_187',
'$sabina_188',
'$sambucus_nigra_189',
'$sanguinaria_canadensis_190',
'$sarsaparilla_191',
'$secale_cornutum_192',
'$selenium_metallicum_193',
'$senna_194',
'$sepia_officinalis_195',
'$silicea_196',
'$solidago_virga_aurea_197',
'$spigelia_anthelmia_198',
'$spongia_tosta_199',
'$staphysagria_200',
'$sticta_pulmonaria_201',
'$stramonium_202',
'$sulfur_203',
'$sulfur_iodatum_204',
'$sulfuricum_acidum_205',
'$symphytum_officinale_206',
'$tabacum_207',
'$taraxacum_dens_leonis_208',
'$tarentula_hispana_209',
'$teucrium_marum_210',
'$thallium_aceticum_211',
'$thuya_occidentalis_212',
'$urtica_urens_213',
'$valeriana_officinalis_214',
'$veratrum_album_215',
'$viola_tricolor_216',
'$vipera_redi_217',
'$viscum_album_218',
'$zincum_metallicum_219',
'$camilia_220',
'$cocculine_221',
'$coryzalia_222',
'$drosetux_223',
'$neo_224',
'$gastrocynesine_225',
'$homeogene_9_226',
'$homeovox_227',
'$oscillococcinum_228',
'$paragrippe_229',
'$rhinallergy_230',
'$sedalia_231',
'$sedatif_pc_232',
NOW()
    )";



    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();


//------------------------------ Zdraví houby ---------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_houby (
    uzivatel_id, 
    cordyceps_1,
    coriolus_2,
    reishi_4,
    triton_3,
    datum
    ) 
    VALUES 
    (
    '$uzivatel_id', 
    '$cordyceps_1',
    '$coriolus_2',
    '$reishi_4',
    '$triton_3',
     NOW()
    )";



    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();

//------------------------------ Zdraví inpharm ---------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_inpharm (
    uzivatel_id, 
    colenter_ld_1,
    enterina_2,
    lipo_c_askor_forte_120_4,
    lipo_c_askor_forte_60_5,
    lipo_c_askor_junior_6,
    lipo_c_askor_tekuta_forma_3, 
    probacin_7,
    uro_c_kontrol_8,      
    datum
    ) 
    VALUES 
    (
    '$uzivatel_id', 
    '$colenter_ld_1',
    '$enterina_2',
    '$lipo_c_askor_forte_120_4',
    '$lipo_c_askor_forte_60_5',
    '$lipo_c_askor_junior_6',
    '$lipo_c_askor_tekuta_forma_3', 
    '$probacin_7',
    '$uro_c_kontrol_8', 
     NOW()
    )";


    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();


//------------------------------ Zdraví Pitný režim---------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_pitny_rezim (
    uzivatel_id, 
    pitny_rezim_mnozstvi,
    datum
    ) 
    VALUES 
    (
    '$uzivatel_id', 
    '$pitny_rezim_mnozstvi',
    NOW()
    )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();


//------------------------------ Zdraví jidlo ---------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_jidlo(
    uzivatel_id, 
    jidlo_mnozstvi,
    datum
    ) 
    VALUES 
    (
    '$uzivatel_id', 
    '$jidlo_mnozstvi',
    NOW()
    )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();



//------------------------------ Zdraví spánek ---------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_spanek(
    uzivatel_id, 
    spanek_sny,
    spanek_delka,
    spanek_buzeni,
    spanek_kvalita,
    spanek_v_kolik_hodin,
    datum
    ) 
    VALUES 
    (
    '$uzivatel_id', 
    '$spanek_sny',
    '$spanek_delka',
    '$spanek_buzeni',
    '$spanek_kvalita',
    '$spanek_v_kolik_hodin',
     NOW()
    )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();

//------------------------------ Zdraví Covid---------------------------------
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_covid(
    uzivatel_id, 
    covid_ockovani,
    covid_nemoc,
    covid_prubeh,
    datum
    ) 
    VALUES 
    (
    '$uzivatel_id', 
    '$covid_ockovani',
    '$covid_nemoc',
    '$covid_prubeh',
     NOW()
    )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();




//------------------------------ Zdraví Které onemocnění Vás nejvíce obtěžuje ---------------------------------


     require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql = "INSERT INTO zdravi_dve_onemocneni (
    uzivatel_id,
    dve_onemocneni,
    datum
    )

    VALUES ( 
    '$uzivatel_id',  
    '$dve_onemocneni',
     NOW()     
     )";

    if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close();


    ?>

    <script>
    setTimeout(function(){
    window.location.href = 'detail.php?uzivatel_id=<? echo encrypt_decrypt('encrypt', $uzivatel_id);?>';
    }, 5000);
    </script>
    <br>
        <div class="alert alert-success" role="alert">Záznam klienta byl aktualizován, automaticky budete za <b>5 vteřin přesměrování</b> zpět na stránku uživatele, případně klikněte na tlačítko níže.</div>
        <a href="detail.php?uzivatel_id=<? echo encrypt_decrypt('encrypt', $uzivatel_id);?>" type="button" class="btn btn-info btn-sm">Zpět na stránku uživatel</a>
    
    
    <?



   }
?>
</div>
</body>
</html>