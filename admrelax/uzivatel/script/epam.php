<?


$sql = "SELECT *,
CASE
WHEN univerzalni_bez_propolisu_2 = 0 THEN 'Ne'
WHEN univerzalni_bez_propolisu_2 = 1 THEN 'Univerzální bez propolisu - EPAM 50 ml - 7'
END AS univerzalni_bez_propolisu_2,
CASE
WHEN mumiovy_3 = 0 THEN 'Ne'
WHEN mumiovy_3 = 1 THEN 'Mumiový - EPAM 50 ml - 8'
END AS mumiovy_3,
CASE
WHEN obranyschopnost_4 = 0 THEN 'Ne'
WHEN obranyschopnost_4 = 1 THEN 'Obranyschopnost - EPAM 50 ml - 11'
END AS obranyschopnost_4,
CASE
WHEN zensky_5 = 0 THEN 'Ne'
WHEN zensky_5 = 1 THEN 'Ženský - EPAM 50 ml - 12'
END AS zensky_5,
CASE
WHEN univerzalni_6 = 0 THEN 'Ne'
WHEN univerzalni_6 = 1 THEN 'Univerzální - EPAM 50 ml - 20'
END AS univerzalni_6,
CASE
WHEN posilujici_7 = 0 THEN 'Ne'
WHEN posilujici_7 = 1 THEN 'Posilující - EPAM 50 ml - 20C'
END AS posilujici_7,
CASE
WHEN posilujici_8 = 0 THEN 'Ne'
WHEN posilujici_8 = 1 THEN 'Posilující - EPAM 50 ml - 20D'
END AS posilujici_8,
CASE
WHEN pruduskovy_9 = 0 THEN 'Ne'
WHEN pruduskovy_9 = 1 THEN 'Průduškový - EPAM 50 ml - 21'
END AS pruduskovy_9,
CASE
WHEN zaludecni_10 = 0 THEN 'Ne'
WHEN zaludecni_10 = 1 THEN 'Žaludeční - EPAM 50 ml - 22'
END AS zaludecni_10,
CASE
WHEN fyzicka_namaha_11 = 0 THEN 'Ne'
WHEN fyzicka_namaha_11 = 1 THEN 'Fyzická námaha - EPAM 50 ml - 23'
END AS fyzicka_namaha_11,
CASE
WHEN ledvinovy_12 = 0 THEN 'Ne'
WHEN ledvinovy_12 = 1 THEN 'Ledvinový - EPAM 50 ml - 24'
END AS ledvinovy_12,
CASE
WHEN klouby_a_svaly_13 = 0 THEN 'Ne'
WHEN klouby_a_svaly_13 = 1 THEN 'Klouby a svaly - EPAM 50 ml - 31'
END AS klouby_a_svaly_13,
CASE
WHEN jaterni_14 = 0 THEN 'Ne'
WHEN jaterni_14 = 1 THEN 'Jaterní - EPAM 50 ml - 35'
END AS jaterni_14,
CASE
WHEN kozni_15 = 0 THEN 'Ne'
WHEN kozni_15 = 1 THEN 'Kožní - EPAM 50 ml - 37'
END AS kozni_15,
CASE
WHEN srdecni_16 = 0 THEN 'Ne'
WHEN srdecni_16 = 1 THEN 'Srdeční - EPAM 50 ml - 36'
END AS srdecni_16,
CASE
WHEN krevni_tlak_17 = 0 THEN 'Ne'
WHEN krevni_tlak_17 = 1 THEN 'Krevní tlak - EPAM 50 ml - 39'
END AS krevni_tlak_17,
CASE
WHEN psychicky_18 = 0 THEN 'Ne'
WHEN psychicky_18 = 1 THEN 'Psychický - EPAM 50 ml - 96'
END AS psychicky_18,
CASE
WHEN imunita_19 = 0 THEN 'Ne'
WHEN imunita_19 = 1 THEN 'Imunita - EPAM 50 ml - 900'
END AS imunita_19,
CASE
WHEN muzsky_20 = 0 THEN 'Ne'
WHEN muzsky_20 = 1 THEN 'Mužský - EPAM 50 ml - 900T '
END AS muzsky_20,
CASE
WHEN nervovy_21 = 0 THEN 'Ne'
WHEN nervovy_21 = 1 THEN 'Nervový - EPAM 50 ml - 1000'
END AS nervovy_21,
CASE
WHEN poskozena_plet_22 = 0 THEN 'Ne'
WHEN poskozena_plet_22 = 1 THEN 'Poškozená pleť - EPAM Pleťové masky 100g - 100'
END AS poskozena_plet_22,
CASE
WHEN ozivujici_s_mumiem_23 = 0 THEN 'Ne'
WHEN ozivujici_s_mumiem_23 = 1 THEN 'Oživující s mumiem - EPAM Pleťové masky 100g - 110'
END AS ozivujici_s_mumiem_23,
CASE
WHEN pro_citlivou_plet_24 = 0 THEN 'Ne'
WHEN pro_citlivou_plet_24 = 1 THEN 'Pro citlivou pleť - EPAM Pleťové masky 100g - 120'
END AS pro_citlivou_plet_24,
CASE
WHEN eukalypt_25 = 0 THEN 'Ne'
WHEN eukalypt_25 = 1 THEN 'Eukalypt - EPAM Soli - 200'
END AS eukalypt_25,
CASE
WHEN kozni_26 = 0 THEN 'Ne'
WHEN kozni_26 = 1 THEN 'Kožní - EPAM Soli - 201'
END AS kozni_26,
CASE
WHEN muskat_27 = 0 THEN 'Ne'
WHEN muskat_27 = 1 THEN 'Muškát - EPAM Soli - 202'
END AS muskat_27,
CASE
WHEN jedle_28 = 0 THEN 'Ne'
WHEN jedle_28 = 1 THEN 'Jedle - EPAM Soli - 203'
END AS jedle_28,
CASE
WHEN propolis_29 = 0 THEN 'Ne'
WHEN propolis_29 = 1 THEN 'Propolis - EPAM Soli - 204'
END AS propolis_29,
CASE
WHEN mumio_30 = 0 THEN 'Ne'
WHEN mumio_30 = 1 THEN 'Mumio - EPAM Soli - 205'
END AS mumio_30,
CASE
WHEN po_namaze_31 = 0 THEN 'Ne'
WHEN po_namaze_31 = 1 THEN 'Po námaze - EPAM Soli - 206'
END AS po_namaze_31,
CASE
WHEN cevy_a_cholesterol_32 = 0 THEN 'Ne'
WHEN cevy_a_cholesterol_32 = 1 THEN 'Cévy a cholesterol - EPAM Čaje Sypané - 300'
END AS cevy_a_cholesterol_32,
CASE
WHEN hubnuti_33 = 0 THEN 'Ne'
WHEN hubnuti_33 = 1 THEN 'Hubnutí - EPAM Čaje Sypané - 301'
END AS hubnuti_33,
CASE
WHEN jatra_a_zlucnik_34 = 0 THEN 'Ne'
WHEN jatra_a_zlucnik_34 = 1 THEN 'Játra a žlučník - EPAM Čaje Sypané - 302'
END AS jatra_a_zlucnik_34,
CASE
WHEN klouby_a_pater_35 = 0 THEN 'Ne'
WHEN klouby_a_pater_35 = 1 THEN 'Klouby a páteř - EPAM Čaje Sypané - 303'
END AS klouby_a_pater_35,
CASE
WHEN ledviny_36 = 0 THEN 'Ne'
WHEN ledviny_36 = 1 THEN 'Ledviny - EPAM Čaje Sypané - 304'
END AS ledviny_36,
CASE
WHEN pohoda_37 = 0 THEN 'Ne'
WHEN pohoda_37 = 1 THEN 'Pohoda - EPAM Čaje Sypané - 305'
END AS pohoda_37,
CASE
WHEN dychaci_cesty_38 = 0 THEN 'Ne'
WHEN dychaci_cesty_38 = 1 THEN 'Dýchací cesty - EPAM Čaje Sypané - 306'
END AS dychaci_cesty_38,
CASE
WHEN prijemny_spanek_39 = 0 THEN 'Ne'
WHEN prijemny_spanek_39 = 1 THEN 'Příjemný spánek - EPAM Čaje Sypané - 307'
END AS prijemny_spanek_39,
CASE
WHEN kittluv_cistici_40 = 0 THEN 'Ne'
WHEN kittluv_cistici_40 = 1 THEN 'Kittlův čistící - EPAM Čaje Sypané - 308'
END AS kittluv_cistici_40,
CASE
WHEN cevy_a_cholesterol_41 = 0 THEN 'Ne'
WHEN cevy_a_cholesterol_41 = 1 THEN 'Cévy a cholesterol - EPAM Čaje Porcované - 350'
END AS cevy_a_cholesterol_41,
CASE
WHEN hubnuti_42 = 0 THEN 'Ne'
WHEN hubnuti_42 = 1 THEN 'Hubnutí - EPAM Čaje Porcované - 351'
END AS hubnuti_42,
CASE
WHEN jatra_a_zlucnik_43 = 0 THEN 'Ne'
WHEN jatra_a_zlucnik_43 = 1 THEN 'Játra a žlučník - EPAM Čaje Porcované - 352'
END AS jatra_a_zlucnik_43,
CASE
WHEN klouby_a_pater_44 = 0 THEN 'Ne'
WHEN klouby_a_pater_44 = 1 THEN 'Klouby a páteř - EPAM Čaje Porcované - 353'
END AS klouby_a_pater_44,
CASE
WHEN ledviny_45 = 0 THEN 'Ne'
WHEN ledviny_45 = 1 THEN 'Ledviny - EPAM Čaje Porcované - 354'
END AS ledviny_45,
CASE
WHEN pohoda_46 = 0 THEN 'Ne'
WHEN pohoda_46 = 1 THEN 'Pohoda - EPAM Čaje Porcované - 355'
END AS pohoda_46,
CASE
WHEN dychaci_cesty_47 = 0 THEN 'Ne'
WHEN dychaci_cesty_47 = 1 THEN 'Dýchací cesty - EPAM Čaje Porcované - 356'
END AS dychaci_cesty_47,
CASE
WHEN prijemny_spanek_48 = 0 THEN 'Ne'
WHEN prijemny_spanek_48 = 1 THEN 'Příjemný spánek - EPAM Čaje Porcované - 357'
END AS prijemny_spanek_48,
CASE
WHEN zaludek_49 = 0 THEN 'Ne'
WHEN zaludek_49 = 1 THEN 'Žaludek - EPAM Čaje Porcované - 358'
END AS zaludek_49,
CASE
WHEN pro_zeny_50 = 0 THEN 'Ne'
WHEN pro_zeny_50 = 1 THEN 'Pro ženy - EPAM Čaje Porcované - 359'
END AS pro_zeny_50,
CASE
WHEN normalni_hladina_cukru_51 = 0 THEN 'Ne'
WHEN normalni_hladina_cukru_51 = 1 THEN 'Normální hladina cukru - EPAM Čaje Porcované - 360'
END AS normalni_hladina_cukru_51,
CASE
WHEN mumio_52 = 0 THEN 'Ne'
WHEN mumio_52 = 1 THEN 'Mumio - EPAM Medový elixír - 400'
END AS mumio_52,
CASE
WHEN multivitamin_53 = 0 THEN 'Ne'
WHEN multivitamin_53 = 1 THEN 'Multivitamín - EPAM Medový elixír - 401'
END AS multivitamin_53,
CASE
WHEN caga_54 = 0 THEN 'Ne'
WHEN caga_54 = 1 THEN 'Čága - EPAM Medový elixír - 402'
END AS caga_54,
CASE
WHEN jaterni_cistici_55 = 0 THEN 'Ne'
WHEN jaterni_cistici_55 = 1 THEN 'Jaterní čistící - EPAM Medový elixír - 403'
END AS jaterni_cistici_55,
CASE
WHEN ledvinovy_56 = 0 THEN 'Ne'
WHEN ledvinovy_56 = 1 THEN 'Ledvinový - EPAM Medový elixír - 404'
END AS ledvinovy_56,
CASE
WHEN klouby_57 = 0 THEN 'Ne'
WHEN klouby_57 = 1 THEN 'Klouby - EPAM Medový elixír - 405'
END AS klouby_57,
CASE
WHEN akatovy_s_materi_kasickou_58 = 0 THEN 'Ne'
WHEN akatovy_s_materi_kasickou_58 = 1 THEN 'Akátový s mateří kašičkou - EPAM Medový elixír - 406'
END AS akatovy_s_materi_kasickou_58,
CASE
WHEN caga_59 = 0 THEN 'Ne'
WHEN caga_59 = 1 THEN 'Čága - EPAM Tinktury - 500'
END AS caga_59,
CASE
WHEN ginko_biloba_60 = 0 THEN 'Ne'
WHEN ginko_biloba_60 = 1 THEN 'Ginko biloba - EPAM Tinktury - 501'
END AS ginko_biloba_60,
CASE
WHEN anyz_61 = 0 THEN 'Ne'
WHEN anyz_61 = 1 THEN 'Anýz - EPAM Tinktury - 502'
END AS anyz_61,
CASE
WHEN badan_62 = 0 THEN 'Ne'
WHEN badan_62 = 1 THEN 'Badán - EPAM Tinktury - 503'
END AS badan_62,
CASE
WHEN briza_belokora_63 = 0 THEN 'Ne'
WHEN briza_belokora_63 = 1 THEN 'Bříza bělokorá - EPAM Tinktury - 504'
END AS briza_belokora_63,
CASE
WHEN kozlik_lekarsky_64 = 0 THEN 'Ne'
WHEN kozlik_lekarsky_64 = 1 THEN 'Kozlík lékařský - EPAM Tinktury - 505'
END AS kozlik_lekarsky_64,
CASE
WHEN lekorice_lysa_65 = 0 THEN 'Ne'
WHEN lekorice_lysa_65 = 1 THEN 'Lékořice lysá - EPAM Tinktury - 506'
END AS lekorice_lysa_65,
CASE
WHEN echinacea_66 = 0 THEN 'Ne'
WHEN echinacea_66 = 1 THEN 'Echinacea - EPAM Tinktury - 507'
END AS echinacea_66,
CASE
WHEN hrebickovec_vonny_67 = 0 THEN 'Ne'
WHEN hrebickovec_vonny_67 = 1 THEN 'Hřebíčkovec vonný - EPAM Tinktury - 508'
END AS hrebickovec_vonny_67,
CASE
WHEN jedle_belokora_68 = 0 THEN 'Ne'
WHEN jedle_belokora_68 = 1 THEN 'Jedle bělokorá - EPAM Tinktury - 509'
END AS jedle_belokora_68,
CASE
WHEN levandule_lekarska_69 = 0 THEN 'Ne'
WHEN levandule_lekarska_69 = 1 THEN 'Levandule lékařská - EPAM Tinktury - 510'
END AS levandule_lekarska_69,
CASE
WHEN muskat_70 = 0 THEN 'Ne'
WHEN muskat_70 = 1 THEN 'Muškát - EPAM Tinktury - 511'
END AS muskat_70,
CASE
WHEN pelynek_pravy_71 = 0 THEN 'Ne'
WHEN pelynek_pravy_71 = 1 THEN 'Pelyněk pravý - EPAM Tinktury - 512'
END AS pelynek_pravy_71,
CASE
WHEN propolis_72 = 0 THEN 'Ne'
WHEN propolis_72 = 1 THEN 'Propolis - EPAM Tinktury - 513'
END AS propolis_72,
CASE
WHEN salvej_lekarska_73 = 0 THEN 'Ne'
WHEN salvej_lekarska_73 = 1 THEN 'Šalvěj lékařská - EPAM Tinktury - 514'
END AS salvej_lekarska_73,
CASE
WHEN zazvor_lekarsky_74 = 0 THEN 'Ne'
WHEN zazvor_lekarsky_74 = 1 THEN 'Zázvor lékařský - EPAM Tinktury - 515'
END AS zazvor_lekarsky_74,
CASE
WHEN rozmaryn_lekarsky_75 = 0 THEN 'Ne'
WHEN rozmaryn_lekarsky_75 = 1 THEN 'Rozmarýn lékařský - EPAM Tinktury - 516'
END AS rozmaryn_lekarsky_75,
CASE
WHEN skorice_76 = 0 THEN 'Ne'
WHEN skorice_76 = 1 THEN 'Skořice - EPAM Tinktury - 517'
END AS skorice_76,
CASE
WHEN vlastovicnik_77 = 0 THEN 'Ne'
WHEN vlastovicnik_77 = 1 THEN 'Vlaštovičník - EPAM Tinktury - 518'
END AS vlastovicnik_77,
CASE
WHEN pater_a_klouby_78 = 0 THEN 'Ne'
WHEN pater_a_klouby_78 = 1 THEN 'Páteř a klouby - EPAM Jíl - 600'
END AS pater_a_klouby_78,
CASE
WHEN jaterni_79 = 0 THEN 'Ne'
WHEN jaterni_79 = 1 THEN 'Jaterní - EPAM Jíl - 601'
END AS jaterni_79,
CASE
WHEN zaludecni_80 = 0 THEN 'Ne'
WHEN zaludecni_80 = 1 THEN 'Žaludeční - EPAM Jíl - 602'
END AS zaludecni_80

FROM zdravi_epam
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {




    if($row["univerzalni_bez_propolisu_2"] == 'Ne'
    && $row["mumiovy_3"] == 'Ne'
    && $row["obranyschopnost_4"] == 'Ne'
    && $row["zensky_5"] == 'Ne'
    && $row["univerzalni_6"] == 'Ne'
    && $row["posilujici_7"] == 'Ne'
    && $row["posilujici_8"] == 'Ne'
    && $row["pruduskovy_9"] == 'Ne'
    && $row["zaludecni_10"] == 'Ne'
    && $row["fyzicka_namaha_11"] == 'Ne'
    && $row["ledvinovy_12"] == 'Ne'
    && $row["klouby_a_svaly_13"] == 'Ne'
    && $row["jaterni_14"] == 'Ne'
    && $row["kozni_15"] == 'Ne'
    && $row["srdecni_16"] == 'Ne'
    && $row["krevni_tlak_17"] == 'Ne'
    && $row["psychicky_18"] == 'Ne'
    && $row["imunita_19"] == 'Ne'
    && $row["muzsky_20"] == 'Ne'
    && $row["nervovy_21"] == 'Ne'
    && $row["poskozena_plet_22"] == 'Ne'
    && $row["ozivujici_s_mumiem_23"] == 'Ne'
    && $row["pro_citlivou_plet_24"] == 'Ne'
    && $row["eukalypt_25"] == 'Ne'
    && $row["kozni_26"] == 'Ne'
    && $row["muskat_27"] == 'Ne'
    && $row["jedle_28"] == 'Ne'
    && $row["propolis_29"] == 'Ne'
    && $row["mumio_30"] == 'Ne'
    && $row["po_namaze_31"] == 'Ne'
    && $row["cevy_a_cholesterol_32"] == 'Ne'
    && $row["hubnuti_33"] == 'Ne'
    && $row["jatra_a_zlucnik_34"] == 'Ne'
    && $row["klouby_a_pater_35"] == 'Ne'
    && $row["ledviny_36"] == 'Ne'
    && $row["pohoda_37"] == 'Ne'
    && $row["dychaci_cesty_38"] == 'Ne'
    && $row["prijemny_spanek_39"] == 'Ne'
    && $row["kittluv_cistici_40"] == 'Ne'
    && $row["cevy_a_cholesterol_41"] == 'Ne'
    && $row["hubnuti_42"] == 'Ne'
    && $row["jatra_a_zlucnik_43"] == 'Ne'
    && $row["klouby_a_pater_44"] == 'Ne'
    && $row["ledviny_45"] == 'Ne'
    && $row["pohoda_46"] == 'Ne'
    && $row["dychaci_cesty_47"] == 'Ne'
    && $row["prijemny_spanek_48"] == 'Ne'
    && $row["zaludek_49"] == 'Ne'
    && $row["pro_zeny_50"] == 'Ne'
    && $row["normalni_hladina_cukru_51"] == 'Ne'
    && $row["mumio_52"] == 'Ne'
    && $row["multivitamin_53"] == 'Ne'
    && $row["caga_54"] == 'Ne'
    && $row["jaterni_cistici_55"] == 'Ne'
    && $row["ledvinovy_56"] == 'Ne'
    && $row["klouby_57"] == 'Ne'
    && $row["akatovy_s_materi_kasickou_58"] == 'Ne'
    && $row["caga_59"] == 'Ne'
    && $row["ginko_biloba_60"] == 'Ne'
    && $row["anyz_61"] == 'Ne'
    && $row["badan_62"] == 'Ne'
    && $row["briza_belokora_63"] == 'Ne'
    && $row["kozlik_lekarsky_64"] == 'Ne'
    && $row["lekorice_lysa_65"] == 'Ne'
    && $row["echinacea_66"] == 'Ne'
    && $row["hrebickovec_vonny_67"] == 'Ne'
    && $row["jedle_belokora_68"] == 'Ne'
    && $row["levandule_lekarska_69"] == 'Ne'
    && $row["muskat_70"] == 'Ne'
    && $row["pelynek_pravy_71"] == 'Ne'
    && $row["propolis_72"] == 'Ne'
    && $row["salvej_lekarska_73"] == 'Ne'
    && $row["zazvor_lekarsky_74"] == 'Ne'
    && $row["rozmaryn_lekarsky_75"] == 'Ne'
    && $row["skorice_76"] == 'Ne'
    && $row["vlastovicnik_77"] == 'Ne'
    && $row["pater_a_klouby_78"] == 'Ne'
    && $row["jaterni_79"] == 'Ne'
    && $row["zaludecni_80"] == 'Ne'
    ){


        echo 'Žádný záznam';

    }else{
 
       // if($row["univerzalni_bez_propolisu_2"]=='Ne'){
       //     echo $row["univerzalni_bez_propolisu_2"]= '';
       //     }else{
       //     echo $row["univerzalni_bez_propolisu_2"].'<br>';
       //     }
    
   
       if($row["univerzalni_bez_propolisu_2"] == 'Ne'){
        echo $row["univerzalni_bez_propolisu_2"]='';
        }else{
        echo $row["univerzalni_bez_propolisu_2"] .',<br>';
        }
        
        if($row["mumiovy_3"] == 'Ne'){
        echo $row["mumiovy_3"]='';
        }else{
        echo $row["mumiovy_3"] .',<br>';
        }
        
        if($row["obranyschopnost_4"] == 'Ne'){
        echo $row["obranyschopnost_4"]='';
        }else{
        echo $row["obranyschopnost_4"] .',<br>';
        }
        
        if($row["zensky_5"] == 'Ne'){
        echo $row["zensky_5"]='';
        }else{
        echo $row["zensky_5"] .',<br>';
        }
        
        if($row["univerzalni_6"] == 'Ne'){
        echo $row["univerzalni_6"]='';
        }else{
        echo $row["univerzalni_6"] .',<br>';
        }
        
        if($row["posilujici_7"] == 'Ne'){
        echo $row["posilujici_7"]='';
        }else{
        echo $row["posilujici_7"] .',<br>';
        }
        
        if($row["posilujici_8"] == 'Ne'){
        echo $row["posilujici_8"]='';
        }else{
        echo $row["posilujici_8"] .',<br>';
        }
        
        if($row["pruduskovy_9"] == 'Ne'){
        echo $row["pruduskovy_9"]='';
        }else{
        echo $row["pruduskovy_9"] .',<br>';
        }
        
        if($row["zaludecni_10"] == 'Ne'){
        echo $row["zaludecni_10"]='';
        }else{
        echo $row["zaludecni_10"] .',<br>';
        }
        
        if($row["fyzicka_namaha_11"] == 'Ne'){
        echo $row["fyzicka_namaha_11"]='';
        }else{
        echo $row["fyzicka_namaha_11"] .',<br>';
        }
        
        if($row["ledvinovy_12"] == 'Ne'){
        echo $row["ledvinovy_12"]='';
        }else{
        echo $row["ledvinovy_12"] .',<br>';
        }
        
        if($row["klouby_a_svaly_13"] == 'Ne'){
        echo $row["klouby_a_svaly_13"]='';
        }else{
        echo $row["klouby_a_svaly_13"] .',<br>';
        }
        
        if($row["jaterni_14"] == 'Ne'){
        echo $row["jaterni_14"]='';
        }else{
        echo $row["jaterni_14"] .',<br>';
        }
        
        if($row["kozni_15"] == 'Ne'){
        echo $row["kozni_15"]='';
        }else{
        echo $row["kozni_15"] .',<br>';
        }
        
        if($row["srdecni_16"] == 'Ne'){
        echo $row["srdecni_16"]='';
        }else{
        echo $row["srdecni_16"] .',<br>';
        }
        
        if($row["krevni_tlak_17"] == 'Ne'){
        echo $row["krevni_tlak_17"]='';
        }else{
        echo $row["krevni_tlak_17"] .',<br>';
        }
        
        if($row["psychicky_18"] == 'Ne'){
        echo $row["psychicky_18"]='';
        }else{
        echo $row["psychicky_18"] .',<br>';
        }
        
        if($row["imunita_19"] == 'Ne'){
        echo $row["imunita_19"]='';
        }else{
        echo $row["imunita_19"] .',<br>';
        }
        
        if($row["muzsky_20"] == 'Ne'){
        echo $row["muzsky_20"]='';
        }else{
        echo $row["muzsky_20"] .',<br>';
        }
        
        if($row["nervovy_21"] == 'Ne'){
        echo $row["nervovy_21"]='';
        }else{
        echo $row["nervovy_21"] .',<br>';
        }
        
        if($row["poskozena_plet_22"] == 'Ne'){
        echo $row["poskozena_plet_22"]='';
        }else{
        echo $row["poskozena_plet_22"] .',<br>';
        }
        
        if($row["ozivujici_s_mumiem_23"] == 'Ne'){
        echo $row["ozivujici_s_mumiem_23"]='';
        }else{
        echo $row["ozivujici_s_mumiem_23"] .',<br>';
        }
        
        if($row["pro_citlivou_plet_24"] == 'Ne'){
        echo $row["pro_citlivou_plet_24"]='';
        }else{
        echo $row["pro_citlivou_plet_24"] .',<br>';
        }
        
        if($row["eukalypt_25"] == 'Ne'){
        echo $row["eukalypt_25"]='';
        }else{
        echo $row["eukalypt_25"] .',<br>';
        }
        
        if($row["kozni_26"] == 'Ne'){
        echo $row["kozni_26"]='';
        }else{
        echo $row["kozni_26"] .',<br>';
        }
        
        if($row["muskat_27"] == 'Ne'){
        echo $row["muskat_27"]='';
        }else{
        echo $row["muskat_27"] .',<br>';
        }
        
        if($row["jedle_28"] == 'Ne'){
        echo $row["jedle_28"]='';
        }else{
        echo $row["jedle_28"] .',<br>';
        }
        
        if($row["propolis_29"] == 'Ne'){
        echo $row["propolis_29"]='';
        }else{
        echo $row["propolis_29"] .',<br>';
        }
        
        if($row["mumio_30"] == 'Ne'){
        echo $row["mumio_30"]='';
        }else{
        echo $row["mumio_30"] .',<br>';
        }
        
        if($row["po_namaze_31"] == 'Ne'){
        echo $row["po_namaze_31"]='';
        }else{
        echo $row["po_namaze_31"] .',<br>';
        }
        
        if($row["cevy_a_cholesterol_32"] == 'Ne'){
        echo $row["cevy_a_cholesterol_32"]='';
        }else{
        echo $row["cevy_a_cholesterol_32"] .',<br>';
        }
        
        if($row["hubnuti_33"] == 'Ne'){
        echo $row["hubnuti_33"]='';
        }else{
        echo $row["hubnuti_33"] .',<br>';
        }
        
        if($row["jatra_a_zlucnik_34"] == 'Ne'){
        echo $row["jatra_a_zlucnik_34"]='';
        }else{
        echo $row["jatra_a_zlucnik_34"] .',<br>';
        }
        
        if($row["klouby_a_pater_35"] == 'Ne'){
        echo $row["klouby_a_pater_35"]='';
        }else{
        echo $row["klouby_a_pater_35"] .',<br>';
        }
        
        if($row["ledviny_36"] == 'Ne'){
        echo $row["ledviny_36"]='';
        }else{
        echo $row["ledviny_36"] .',<br>';
        }
        
        if($row["pohoda_37"] == 'Ne'){
        echo $row["pohoda_37"]='';
        }else{
        echo $row["pohoda_37"] .',<br>';
        }
        
        if($row["dychaci_cesty_38"] == 'Ne'){
        echo $row["dychaci_cesty_38"]='';
        }else{
        echo $row["dychaci_cesty_38"] .',<br>';
        }
        
        if($row["prijemny_spanek_39"] == 'Ne'){
        echo $row["prijemny_spanek_39"]='';
        }else{
        echo $row["prijemny_spanek_39"] .',<br>';
        }
        
        if($row["kittluv_cistici_40"] == 'Ne'){
        echo $row["kittluv_cistici_40"]='';
        }else{
        echo $row["kittluv_cistici_40"] .',<br>';
        }
        
        if($row["cevy_a_cholesterol_41"] == 'Ne'){
        echo $row["cevy_a_cholesterol_41"]='';
        }else{
        echo $row["cevy_a_cholesterol_41"] .',<br>';
        }
        
        if($row["hubnuti_42"] == 'Ne'){
        echo $row["hubnuti_42"]='';
        }else{
        echo $row["hubnuti_42"] .',<br>';
        }
        
        if($row["jatra_a_zlucnik_43"] == 'Ne'){
        echo $row["jatra_a_zlucnik_43"]='';
        }else{
        echo $row["jatra_a_zlucnik_43"] .',<br>';
        }
        
        if($row["klouby_a_pater_44"] == 'Ne'){
        echo $row["klouby_a_pater_44"]='';
        }else{
        echo $row["klouby_a_pater_44"] .',<br>';
        }
        
        if($row["ledviny_45"] == 'Ne'){
        echo $row["ledviny_45"]='';
        }else{
        echo $row["ledviny_45"] .',<br>';
        }
        
        if($row["pohoda_46"] == 'Ne'){
        echo $row["pohoda_46"]='';
        }else{
        echo $row["pohoda_46"] .',<br>';
        }
        
        if($row["dychaci_cesty_47"] == 'Ne'){
        echo $row["dychaci_cesty_47"]='';
        }else{
        echo $row["dychaci_cesty_47"] .',<br>';
        }
        
        if($row["prijemny_spanek_48"] == 'Ne'){
        echo $row["prijemny_spanek_48"]='';
        }else{
        echo $row["prijemny_spanek_48"] .',<br>';
        }
        
        if($row["zaludek_49"] == 'Ne'){
        echo $row["zaludek_49"]='';
        }else{
        echo $row["zaludek_49"] .',<br>';
        }
        
        if($row["pro_zeny_50"] == 'Ne'){
        echo $row["pro_zeny_50"]='';
        }else{
        echo $row["pro_zeny_50"] .',<br>';
        }
        
        if($row["normalni_hladina_cukru_51"] == 'Ne'){
        echo $row["normalni_hladina_cukru_51"]='';
        }else{
        echo $row["normalni_hladina_cukru_51"] .',<br>';
        }
        
        if($row["mumio_52"] == 'Ne'){
        echo $row["mumio_52"]='';
        }else{
        echo $row["mumio_52"] .',<br>';
        }
        
        if($row["multivitamin_53"] == 'Ne'){
        echo $row["multivitamin_53"]='';
        }else{
        echo $row["multivitamin_53"] .',<br>';
        }
        
        if($row["caga_54"] == 'Ne'){
        echo $row["caga_54"]='';
        }else{
        echo $row["caga_54"] .',<br>';
        }
        
        if($row["jaterni_cistici_55"] == 'Ne'){
        echo $row["jaterni_cistici_55"]='';
        }else{
        echo $row["jaterni_cistici_55"] .',<br>';
        }
        
        if($row["ledvinovy_56"] == 'Ne'){
        echo $row["ledvinovy_56"]='';
        }else{
        echo $row["ledvinovy_56"] .',<br>';
        }
        
        if($row["klouby_57"] == 'Ne'){
        echo $row["klouby_57"]='';
        }else{
        echo $row["klouby_57"] .',<br>';
        }
        
        if($row["akatovy_s_materi_kasickou_58"] == 'Ne'){
        echo $row["akatovy_s_materi_kasickou_58"]='';
        }else{
        echo $row["akatovy_s_materi_kasickou_58"] .',<br>';
        }
        
        if($row["caga_59"] == 'Ne'){
        echo $row["caga_59"]='';
        }else{
        echo $row["caga_59"] .',<br>';
        }
        
        if($row["ginko_biloba_60"] == 'Ne'){
        echo $row["ginko_biloba_60"]='';
        }else{
        echo $row["ginko_biloba_60"] .',<br>';
        }
        
        if($row["anyz_61"] == 'Ne'){
        echo $row["anyz_61"]='';
        }else{
        echo $row["anyz_61"] .',<br>';
        }
        
        if($row["badan_62"] == 'Ne'){
        echo $row["badan_62"]='';
        }else{
        echo $row["badan_62"] .',<br>';
        }
        
        if($row["briza_belokora_63"] == 'Ne'){
        echo $row["briza_belokora_63"]='';
        }else{
        echo $row["briza_belokora_63"] .',<br>';
        }
        
        if($row["kozlik_lekarsky_64"] == 'Ne'){
        echo $row["kozlik_lekarsky_64"]='';
        }else{
        echo $row["kozlik_lekarsky_64"] .',<br>';
        }
        
        if($row["lekorice_lysa_65"] == 'Ne'){
        echo $row["lekorice_lysa_65"]='';
        }else{
        echo $row["lekorice_lysa_65"] .',<br>';
        }
        
        if($row["echinacea_66"] == 'Ne'){
        echo $row["echinacea_66"]='';
        }else{
        echo $row["echinacea_66"] .',<br>';
        }
        
        if($row["hrebickovec_vonny_67"] == 'Ne'){
        echo $row["hrebickovec_vonny_67"]='';
        }else{
        echo $row["hrebickovec_vonny_67"] .',<br>';
        }
        
        if($row["jedle_belokora_68"] == 'Ne'){
        echo $row["jedle_belokora_68"]='';
        }else{
        echo $row["jedle_belokora_68"] .',<br>';
        }
        
        if($row["levandule_lekarska_69"] == 'Ne'){
        echo $row["levandule_lekarska_69"]='';
        }else{
        echo $row["levandule_lekarska_69"] .',<br>';
        }
        
        if($row["muskat_70"] == 'Ne'){
        echo $row["muskat_70"]='';
        }else{
        echo $row["muskat_70"] .',<br>';
        }
        
        if($row["pelynek_pravy_71"] == 'Ne'){
        echo $row["pelynek_pravy_71"]='';
        }else{
        echo $row["pelynek_pravy_71"] .',<br>';
        }
        
        if($row["propolis_72"] == 'Ne'){
        echo $row["propolis_72"]='';
        }else{
        echo $row["propolis_72"] .',<br>';
        }
        
        if($row["salvej_lekarska_73"] == 'Ne'){
        echo $row["salvej_lekarska_73"]='';
        }else{
        echo $row["salvej_lekarska_73"] .',<br>';
        }
        
        if($row["zazvor_lekarsky_74"] == 'Ne'){
        echo $row["zazvor_lekarsky_74"]='';
        }else{
        echo $row["zazvor_lekarsky_74"] .',<br>';
        }
        
        if($row["rozmaryn_lekarsky_75"] == 'Ne'){
        echo $row["rozmaryn_lekarsky_75"]='';
        }else{
        echo $row["rozmaryn_lekarsky_75"] .',<br>';
        }
        
        if($row["skorice_76"] == 'Ne'){
        echo $row["skorice_76"]='';
        }else{
        echo $row["skorice_76"] .',<br>';
        }
        
        if($row["vlastovicnik_77"] == 'Ne'){
        echo $row["vlastovicnik_77"]='';
        }else{
        echo $row["vlastovicnik_77"] .',<br>';
        }
        
        if($row["pater_a_klouby_78"] == 'Ne'){
        echo $row["pater_a_klouby_78"]='';
        }else{
        echo $row["pater_a_klouby_78"] .',<br>';
        }
        
        if($row["jaterni_79"] == 'Ne'){
        echo $row["jaterni_79"]='';
        }else{
        echo $row["jaterni_79"] .',<br>';
        }
        
        if($row["zaludecni_80"] == 'Ne'){
        echo $row["zaludecni_80"]='';
        }else{
        echo $row["zaludecni_80"] .',<br>';
        }

    
        }
    }


?>












   
    








