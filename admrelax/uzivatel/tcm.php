<?
$sql = "SELECT *,

CASE
WHEN tcm_id_2 = 0 THEN 'Ne'
WHEN tcm_id_2 = 1 THEN 'XIAO QING LONG WAN - PILULKA TYRKYSOVÉHO DRAKA - 001'
END AS tcm_id_2,
CASE
WHEN tcm_id_3 = 0 THEN 'Ne'
WHEN tcm_id_3 = 1 THEN 'YIN QIAO JIE DU WAN - CHLAD RANNÍ MLHY - 002'
END AS tcm_id_3,
CASE
WHEN tcm_id_4 = 0 THEN 'Ne'
WHEN tcm_id_4 = 1 THEN 'SANG JU YIN WAN - KŘEHKOST JARNÍHO KVÍTKU - 003'
END AS tcm_id_4,
CASE
WHEN tcm_id_5 = 0 THEN 'Ne'
WHEN tcm_id_5 = 1 THEN 'CHUAN XIONG CHA TIAO WAN - PRŮSMYK VĚTRNÉ HORY - 004'
END AS tcm_id_5,
CASE
WHEN tcm_id_6 = 0 THEN 'Ne'
WHEN tcm_id_6 = 1 THEN 'BI MIN GAN WAN - VYVANUTÍ DRAČÍ JESKYNĚ - 007'
END AS tcm_id_6,
CASE
WHEN tcm_id_7 = 0 THEN 'Ne'
WHEN tcm_id_7 = 1 THEN 'GUI ZHI TANG WAN - SKOŘICOVNÍKOVÁ SMĚS - 008'
END AS tcm_id_7,
CASE
WHEN tcm_id_8 = 0 THEN 'Ne'
WHEN tcm_id_8 = 1 THEN 'WU WEI XIAO DU WAN - PATERO UHAŠENÍ SOPKY - 011'
END AS tcm_id_8,
CASE
WHEN tcm_id_9 = 0 THEN 'Ne'
WHEN tcm_id_9 = 1 THEN 'HUANG LIAN JIE DU WAN - STÍN BROKÁTOVÉHO ZÁVOJE - 012'
END AS tcm_id_9,
CASE
WHEN tcm_id_10 = 0 THEN 'Ne'
WHEN tcm_id_10 = 1 THEN 'FANG FENG TONG SHENG WAN - ČISTÝ TOK ŘEKY - 013'
END AS tcm_id_10,
CASE
WHEN tcm_id_11 = 0 THEN 'Ne'
WHEN tcm_id_11 = 1 THEN 'LONG DAN XIE GAN WAN - HOŘCOVÝ ELIXÍR - 014'
END AS tcm_id_11,
CASE
WHEN tcm_id_12 = 0 THEN 'Ne'
WHEN tcm_id_12 = 1 THEN 'ZUO JIN WAN - OBNOVA SPÁLENÉ ZEMĚ - 015'
END AS tcm_id_12,
CASE
WHEN tcm_id_13 = 0 THEN 'Ne'
WHEN tcm_id_13 = 1 THEN 'DAO CHI WAN - MISTROVSKÉ ODVEDENÍ RUDÉHO - 016'
END AS tcm_id_13,
CASE
WHEN tcm_id_14 = 0 THEN 'Ne'
WHEN tcm_id_14 = 1 THEN 'ZHEN ZHU AN CHUANG WAN - HLADKOST JEZERNÍ PERLY - 019'
END AS tcm_id_14,
CASE
WHEN tcm_id_15 = 0 THEN 'Ne'
WHEN tcm_id_15 = 1 THEN 'QING QI HUA TAN WAN - VŮNĚ BOROVÉHO HÁJE - 031'
END AS tcm_id_15,
CASE
WHEN tcm_id_16 = 0 THEN 'Ne'
WHEN tcm_id_16 = 1 THEN 'ER CHEN WAN - ZPĚV MALÉ ZVONKOHRY - 035'
END AS tcm_id_16,
CASE
WHEN tcm_id_17 = 0 THEN 'Ne'
WHEN tcm_id_17 = 1 THEN 'XUE FU ZHU YU WAN - STEZKY PALÁCOVÉHO PARKU - 041'
END AS tcm_id_17,
CASE
WHEN tcm_id_18 = 0 THEN 'Ne'
WHEN tcm_id_18 = 1 THEN 'BU YANG HUAN WU WAN - OBNOVENÍ SOUMĚRNOSTI  - 043'
END AS tcm_id_18,
CASE
WHEN tcm_id_19 = 0 THEN 'Ne'
WHEN tcm_id_19 = 1 THEN 'TAO HONG SI WU WAN - ÚNIK Z OBRUČÍ - 052'
END AS tcm_id_19,
CASE
WHEN tcm_id_20 = 0 THEN 'Ne'
WHEN tcm_id_20 = 1 THEN 'WEN JING WAN - PŘEMOŽENÍ SKRYTÉHO CHLADU - 053'
END AS tcm_id_20,
CASE
WHEN tcm_id_21 = 0 THEN 'Ne'
WHEN tcm_id_21 = 1 THEN 'GUI ZHI FU LING WAN - ODVALENÍ KAMENŮ Z CESTY - 054'
END AS tcm_id_21,
CASE
WHEN tcm_id_22 = 0 THEN 'Ne'
WHEN tcm_id_22 = 1 THEN 'FU KE ZHONG ZI WAN - ZVELEBENÍ RUMĚLKOVÉHO POLE - 055'
END AS tcm_id_22,
CASE
WHEN tcm_id_23 = 0 THEN 'Ne'
WHEN tcm_id_23 = 1 THEN 'DANG GUI SHAO YAO WAN - RŮST HORY TCHAJ - 056'
END AS tcm_id_23,
CASE
WHEN tcm_id_24 = 0 THEN 'Ne'
WHEN tcm_id_24 = 1 THEN 'YU DAI WAN - PŘEHRAZENÍ TOKU ŽLUTÉ ŘEKY - 057'
END AS tcm_id_24,
CASE
WHEN tcm_id_25 = 0 THEN 'Ne'
WHEN tcm_id_25 = 1 THEN 'DANG GUI LIU HUANG WAN - SEDMERO DŮVĚRNÍKŮ - 058'
END AS tcm_id_25,
CASE
WHEN tcm_id_26 = 0 THEN 'Ne'
WHEN tcm_id_26 = 1 THEN 'XIAO YAO WAN - VOLNOST SVOBODNÉHO POUTNÍKA - 061'
END AS tcm_id_26,
CASE
WHEN tcm_id_27 = 0 THEN 'Ne'
WHEN tcm_id_27 = 1 THEN 'JIA WEI XIAO YAO WAN - ZKLIDNĚNÍ ZČEŘENÉ HLADINY - 062'
END AS tcm_id_27,
CASE
WHEN tcm_id_28 = 0 THEN 'Ne'
WHEN tcm_id_28 = 1 THEN 'CHAI HU SHU GAN WAN - UKLIDNĚNÍ ZNESVÁŘENÝCH - 063'
END AS tcm_id_28,
CASE
WHEN tcm_id_29 = 0 THEN 'Ne'
WHEN tcm_id_29 = 1 THEN 'SHU GAN WAN - UTIŠENÍ VĚTRNÉ BOUŘE - 064'
END AS tcm_id_29,
CASE
WHEN tcm_id_30 = 0 THEN 'Ne'
WHEN tcm_id_30 = 1 THEN 'SI NI SAN WAN - PILULKA ČTVERÉHO PROTITOKU - 065'
END AS tcm_id_30,
CASE
WHEN tcm_id_31 = 0 THEN 'Ne'
WHEN tcm_id_31 = 1 THEN 'XIAO CHAI HU TANG WAN - MILNÍK NA ROZCESTÍ - 067'
END AS tcm_id_31,
CASE
WHEN tcm_id_32 = 0 THEN 'Ne'
WHEN tcm_id_32 = 1 THEN 'LIU JUN ZI WAN - PILULKA ŠESTI UŠLECHTILÝCH - 072'
END AS tcm_id_32,
CASE
WHEN tcm_id_33 = 0 THEN 'Ne'
WHEN tcm_id_33 = 1 THEN 'XIANG SHA YANG WEI WAN - ÚKLID CÍSAŘSKÝCH SKLADŮ - 074'
END AS tcm_id_33,
CASE
WHEN tcm_id_34 = 0 THEN 'Ne'
WHEN tcm_id_34 = 1 THEN 'BAO HE WAN - TAJEMSTVÍ MANDARINOVO - 075'
END AS tcm_id_34,
CASE
WHEN tcm_id_35 = 0 THEN 'Ne'
WHEN tcm_id_35 = 1 THEN 'JIAN PI WAN - KULTIVACE RÝŽOVÉHO POLE - 077'
END AS tcm_id_35,
CASE
WHEN tcm_id_36 = 0 THEN 'Ne'
WHEN tcm_id_36 = 1 THEN 'BAN XIA HOU PO WAN - SPLÁCHNUTÍ PECKY SLIVONĚ - 081'
END AS tcm_id_36,
CASE
WHEN tcm_id_37 = 0 THEN 'Ne'
WHEN tcm_id_37 = 1 THEN 'RUN CHANG WAN - NAPLNĚNÍ VYSCHLÉHO ŘEČIŠTĚ - 091'
END AS tcm_id_37,
CASE
WHEN tcm_id_38 = 0 THEN 'Ne'
WHEN tcm_id_38 = 1 THEN 'MA ZI REN WAN - SPUŠTĚNÍ DŽUNKY NA ŘEKU - 092'
END AS tcm_id_38,
CASE
WHEN tcm_id_39 = 0 THEN 'Ne'
WHEN tcm_id_39 = 1 THEN 'HUO XIANG ZHENG QI WAN - SOUBOJ VĚTRNÝCH DRAKŮ - 101'
END AS tcm_id_39,
CASE
WHEN tcm_id_40 = 0 THEN 'Ne'
WHEN tcm_id_40 = 1 THEN 'BA ZHENG WAN - HOŘE OD ŘÍČNÍ DELTY - 102'
END AS tcm_id_40,
CASE
WHEN tcm_id_41 = 0 THEN 'Ne'
WHEN tcm_id_41 = 1 THEN 'SHEN LING BAI ZHU WAN - VYSUŠENÍ ZVLHLÉ KRAJINY - 105'
END AS tcm_id_41,
CASE
WHEN tcm_id_42 = 0 THEN 'Ne'
WHEN tcm_id_42 = 1 THEN 'WU PI WAN - PILULKA PĚTI SLUPEK - 106'
END AS tcm_id_42,
CASE
WHEN tcm_id_43 = 0 THEN 'Ne'
WHEN tcm_id_43 = 1 THEN 'XIANG LIAN WAN - PROČIŠTĚNÍ A ZPRŮCHODNĚNÍ - 107'
END AS tcm_id_43,
CASE
WHEN tcm_id_44 = 0 THEN 'Ne'
WHEN tcm_id_44 = 1 THEN 'QIAN LIE XIAN WAN - VODOPÁD Z MOŘSKÉ LAGUNY - 109'
END AS tcm_id_44,
CASE
WHEN tcm_id_45 = 0 THEN 'Ne'
WHEN tcm_id_45 = 1 THEN 'BEI XIE SHEN SHI WAN - ÚDOLÍ MOKŘINOVÝCH POLÍ - 111'
END AS tcm_id_45,
CASE
WHEN tcm_id_46 = 0 THEN 'Ne'
WHEN tcm_id_46 = 1 THEN 'TIAN MA GOU TENG WAN - VZEDMUTÍ SE JARNÍHO VĚTRU - 112'
END AS tcm_id_46,
CASE
WHEN tcm_id_47 = 0 THEN 'Ne'
WHEN tcm_id_47 = 1 THEN 'XIAO FENG WAN - VÁNEK HEDVÁBNÉHO VĚJÍŘE - 113'
END AS tcm_id_47,
CASE
WHEN tcm_id_48 = 0 THEN 'Ne'
WHEN tcm_id_48 = 1 THEN 'TIAN WANG BU XIN WAN - ELIXÍR NEBESKÉHO CÍSAŘE - 121'
END AS tcm_id_48,
CASE
WHEN tcm_id_49 = 0 THEN 'Ne'
WHEN tcm_id_49 = 1 THEN 'BAI ZI YANG XIN WAN - ÚLITBA MOCNÉMU VLÁDCI - 122'
END AS tcm_id_49,
CASE
WHEN tcm_id_50 = 0 THEN 'Ne'
WHEN tcm_id_50 = 1 THEN 'GAN MAI DA ZAO WAN - TŘEPETÁNÍ PRAPORCŮ VE VĚTRU - 124'
END AS tcm_id_50,
CASE
WHEN tcm_id_51 = 0 THEN 'Ne'
WHEN tcm_id_51 = 1 THEN 'SUAN ZAO REN WAN - KŘEHKOST SAKUROVÉHO KVĚTU - 127'
END AS tcm_id_51,
CASE
WHEN tcm_id_52 = 0 THEN 'Ne'
WHEN tcm_id_52 = 1 THEN 'BAI HE GU JIN WAN - HVIZD STŘÍBRNÉ PÍŠTALKY - 131'
END AS tcm_id_52,
CASE
WHEN tcm_id_53 = 0 THEN 'Ne'
WHEN tcm_id_53 = 1 THEN 'JIN SUO GU JING WAN - CHRÁNÍCÍ ZLATÝ ZÁMEK - 141'
END AS tcm_id_53,
CASE
WHEN tcm_id_54 = 0 THEN 'Ne'
WHEN tcm_id_54 = 1 THEN 'YU PING FENG WAN - ODOLNOST EBENOVÉHO VĚTROLAMU - 142'
END AS tcm_id_54,
CASE
WHEN tcm_id_55 = 0 THEN 'Ne'
WHEN tcm_id_55 = 1 THEN 'SI JUN ZI WAN - PILULKA ČTYŘ UŠLECHTILÝCH - 151'
END AS tcm_id_55,
CASE
WHEN tcm_id_56 = 0 THEN 'Ne'
WHEN tcm_id_56 = 1 THEN 'BU ZHONG YI QI WAN - TYGŘÍ PRAMEN - 152'
END AS tcm_id_56,
CASE
WHEN tcm_id_57 = 0 THEN 'Ne'
WHEN tcm_id_57 = 1 THEN 'SHENG MAI WAN - TOK HORNÍHO PRAMENE - 154'
END AS tcm_id_57,
CASE
WHEN tcm_id_58 = 0 THEN 'Ne'
WHEN tcm_id_58 = 1 THEN 'SI WU WAN - PILULKA ČTYŘ ŠLECHTIČEN - 161'
END AS tcm_id_58,
CASE
WHEN tcm_id_59 = 0 THEN 'Ne'
WHEN tcm_id_59 = 1 THEN 'DANG GUI SU - ŽENSKÝ KOŘEN ŽIVOTA - 162'
END AS tcm_id_59,
CASE
WHEN tcm_id_60 = 0 THEN 'Ne'
WHEN tcm_id_60 = 1 THEN 'SHOU WU WAN - TAJEMSTVÍ HAVRANÍHO COPU - 163'
END AS tcm_id_60,
CASE
WHEN tcm_id_61 = 0 THEN 'Ne'
WHEN tcm_id_61 = 1 THEN 'JIN GUI SHEN QI WAN - TAJEMSTVÍ ZLATÉ SKŘÍŇKY - 171'
END AS tcm_id_61,
CASE
WHEN tcm_id_62 = 0 THEN 'Ne'
WHEN tcm_id_62 = 1 THEN 'YOU GUI WAN - LAHODÁRNÁ SÍLA KOŘENU - 172'
END AS tcm_id_62,
CASE
WHEN tcm_id_63 = 0 THEN 'Ne'
WHEN tcm_id_63 = 1 THEN 'LIU WEI DI HUANG WAN - PILULKA ŠESTI CHUTÍ - 181'
END AS tcm_id_63,
CASE
WHEN tcm_id_64 = 0 THEN 'Ne'
WHEN tcm_id_64 = 1 THEN 'QI JU DI HUANG WAN - LESK NEFRITOVÉHO ŠPERKU - 182'
END AS tcm_id_64,
CASE
WHEN tcm_id_65 = 0 THEN 'Ne'
WHEN tcm_id_65 = 1 THEN 'MING MU DI HUANG WAN - SVĚTLO ZÁŘÍCÍCH LAMPIÓNŮ - 183'
END AS tcm_id_65,
CASE
WHEN tcm_id_66 = 0 THEN 'Ne'
WHEN tcm_id_66 = 1 THEN 'ER LONG ZUO CI WAN - TIŠENÍ MINGSKÝCH ZVONŮ - 184'
END AS tcm_id_66,
CASE
WHEN tcm_id_67 = 0 THEN 'Ne'
WHEN tcm_id_67 = 1 THEN 'ZHI BAI DI HUANG WAN - SVĚŽEST PODVEČERNÍ PAGODY - 185'
END AS tcm_id_67,
CASE
WHEN tcm_id_68 = 0 THEN 'Ne'
WHEN tcm_id_68 = 1 THEN 'MAI WEI DI HUANG WAN - CELISTVOST KOVOVÉHO ŠTÍTU - 186'
END AS tcm_id_68,
CASE
WHEN tcm_id_69 = 0 THEN 'Ne'
WHEN tcm_id_69 = 1 THEN 'NU KE BA ZHEN WAN - NÁRAMEK OSMI PEREL - 191'
END AS tcm_id_69,
CASE
WHEN tcm_id_70 = 0 THEN 'Ne'
WHEN tcm_id_70 = 1 THEN 'GUI PI WAN - HARMONIE BROSKVOVÉHO HÁJE - 192'
END AS tcm_id_70,
CASE
WHEN tcm_id_71 = 0 THEN 'Ne'
WHEN tcm_id_71 = 1 THEN 'SHI QUAN DA BU WAN - DESET OPĚRNÝCH SLOUPŮ - 195'
END AS tcm_id_71,
CASE
WHEN tcm_id_72 = 0 THEN 'Ne'
WHEN tcm_id_72 = 1 THEN 'DU HUO JI SHENG WAN - PEVNOST PALÁCOVÉHO PILÍŘE - 201'
END AS tcm_id_72,
CASE
WHEN tcm_id_73 = 0 THEN 'Ne'
WHEN tcm_id_73 = 1 THEN 'XUAN BI WAN - ŽÁR ŽHAVÉHO OHNIŠTĚ - 202'
END AS tcm_id_73,
CASE
WHEN tcm_id_74 = 0 THEN 'Ne'
WHEN tcm_id_74 = 1 THEN 'JIN GU DIE SHANG WAN - HOUŽEVNATOST BAMBUSOVÉHO VÝHONKU - 205'
END AS tcm_id_74,
CASE
WHEN tcm_id_75 = 0 THEN 'Ne'
WHEN tcm_id_75 = 1 THEN 'KANG GU ZENG SHENG WAN - VYHLAZENÍ SLONOVÉ KOSTI - 206'
END AS tcm_id_75,
CASE
WHEN tcm_id_76 = 0 THEN 'Ne'
WHEN tcm_id_76 = 1 THEN 'JING ZHUI TONG WAN - PRUŽNOST STŘEŠNÍHO TRÁMU - 207'
END AS tcm_id_76,
CASE
WHEN tcm_id_77 = 0 THEN 'Ne'
WHEN tcm_id_77 = 1 THEN 'PU JI XIAO DU YIN WAN - PILULKA BÍLÉHO ZÁMOTKU - 209'
END AS tcm_id_77

FROM zdravi_tcm
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {




    if($row["tcm_id_2"] == 'Ne'
    && $row["tcm_id_3"] == 'Ne'
    && $row["tcm_id_4"] == 'Ne'
    && $row["tcm_id_5"] == 'Ne'
    && $row["tcm_id_6"] == 'Ne'
    && $row["tcm_id_7"] == 'Ne'
    && $row["tcm_id_8"] == 'Ne'
    && $row["tcm_id_9"] == 'Ne'
    && $row["tcm_id_10"] == 'Ne'
    && $row["tcm_id_11"] == 'Ne'
    && $row["tcm_id_12"] == 'Ne'
    && $row["tcm_id_13"] == 'Ne'
    && $row["tcm_id_14"] == 'Ne'
    && $row["tcm_id_15"] == 'Ne'
    && $row["tcm_id_16"] == 'Ne'
    && $row["tcm_id_17"] == 'Ne'
    && $row["tcm_id_18"] == 'Ne'
    && $row["tcm_id_19"] == 'Ne'
    && $row["tcm_id_20"] == 'Ne'
    && $row["tcm_id_21"] == 'Ne'
    && $row["tcm_id_22"] == 'Ne'
    && $row["tcm_id_23"] == 'Ne'
    && $row["tcm_id_24"] == 'Ne'
    && $row["tcm_id_25"] == 'Ne'
    && $row["tcm_id_26"] == 'Ne'
    && $row["tcm_id_27"] == 'Ne'
    && $row["tcm_id_28"] == 'Ne'
    && $row["tcm_id_29"] == 'Ne'
    && $row["tcm_id_30"] == 'Ne'
    && $row["tcm_id_31"] == 'Ne'
    && $row["tcm_id_32"] == 'Ne'
    && $row["tcm_id_33"] == 'Ne'
    && $row["tcm_id_34"] == 'Ne'
    && $row["tcm_id_35"] == 'Ne'
    && $row["tcm_id_36"] == 'Ne'
    && $row["tcm_id_37"] == 'Ne'
    && $row["tcm_id_38"] == 'Ne'
    && $row["tcm_id_39"] == 'Ne'
    && $row["tcm_id_40"] == 'Ne'
    && $row["tcm_id_41"] == 'Ne'
    && $row["tcm_id_42"] == 'Ne'
    && $row["tcm_id_43"] == 'Ne'
    && $row["tcm_id_44"] == 'Ne'
    && $row["tcm_id_45"] == 'Ne'
    && $row["tcm_id_46"] == 'Ne'
    && $row["tcm_id_47"] == 'Ne'
    && $row["tcm_id_48"] == 'Ne'
    && $row["tcm_id_49"] == 'Ne'
    && $row["tcm_id_50"] == 'Ne'
    && $row["tcm_id_51"] == 'Ne'
    && $row["tcm_id_52"] == 'Ne'
    && $row["tcm_id_53"] == 'Ne'
    && $row["tcm_id_54"] == 'Ne'
    && $row["tcm_id_55"] == 'Ne'
    && $row["tcm_id_56"] == 'Ne'
    && $row["tcm_id_57"] == 'Ne'
    && $row["tcm_id_58"] == 'Ne'
    && $row["tcm_id_59"] == 'Ne'
    && $row["tcm_id_60"] == 'Ne'
    && $row["tcm_id_61"] == 'Ne'
    && $row["tcm_id_62"] == 'Ne'
    && $row["tcm_id_63"] == 'Ne'
    && $row["tcm_id_64"] == 'Ne'
    && $row["tcm_id_65"] == 'Ne'
    && $row["tcm_id_66"] == 'Ne'
    && $row["tcm_id_67"] == 'Ne'
    && $row["tcm_id_68"] == 'Ne'
    && $row["tcm_id_69"] == 'Ne'
    && $row["tcm_id_70"] == 'Ne'
    && $row["tcm_id_71"] == 'Ne'
    && $row["tcm_id_72"] == 'Ne'
    && $row["tcm_id_73"] == 'Ne'
    && $row["tcm_id_74"] == 'Ne'
    && $row["tcm_id_75"] == 'Ne'
    && $row["tcm_id_76"] == 'Ne'
    && $row["tcm_id_77"] == 'Ne'
    ){


        echo 'Žádný záznam';
    
    }else{
     

        if($row["tcm_id_2"] == 'Ne'){
            echo $row["tcm_id_2"]='';
            }else{
            echo $row["tcm_id_2"].',<br> ';
            }
            if($row["tcm_id_3"] == 'Ne'){
            echo $row["tcm_id_3"]='';
            }else{
            echo $row["tcm_id_3"].',<br> ';
            }
            if($row["tcm_id_4"] == 'Ne'){
            echo $row["tcm_id_4"]='';
            }else{
            echo $row["tcm_id_4"].',<br> ';
            }
            if($row["tcm_id_5"] == 'Ne'){
            echo $row["tcm_id_5"]='';
            }else{
            echo $row["tcm_id_5"].',<br> ';
            }
            if($row["tcm_id_6"] == 'Ne'){
            echo $row["tcm_id_6"]='';
            }else{
            echo $row["tcm_id_6"].',<br> ';
            }
            if($row["tcm_id_7"] == 'Ne'){
            echo $row["tcm_id_7"]='';
            }else{
            echo $row["tcm_id_7"].',<br> ';
            }
            if($row["tcm_id_8"] == 'Ne'){
            echo $row["tcm_id_8"]='';
            }else{
            echo $row["tcm_id_8"].',<br> ';
            }
            if($row["tcm_id_9"] == 'Ne'){
            echo $row["tcm_id_9"]='';
            }else{
            echo $row["tcm_id_9"].',<br> ';
            }
            if($row["tcm_id_10"] == 'Ne'){
            echo $row["tcm_id_10"]='';
            }else{
            echo $row["tcm_id_10"].',<br> ';
            }
            if($row["tcm_id_11"] == 'Ne'){
            echo $row["tcm_id_11"]='';
            }else{
            echo $row["tcm_id_11"].',<br> ';
            }
            if($row["tcm_id_12"] == 'Ne'){
            echo $row["tcm_id_12"]='';
            }else{
            echo $row["tcm_id_12"].',<br> ';
            }
            if($row["tcm_id_13"] == 'Ne'){
            echo $row["tcm_id_13"]='';
            }else{
            echo $row["tcm_id_13"].',<br> ';
            }
            if($row["tcm_id_14"] == 'Ne'){
            echo $row["tcm_id_14"]='';
            }else{
            echo $row["tcm_id_14"].',<br> ';
            }
            if($row["tcm_id_15"] == 'Ne'){
            echo $row["tcm_id_15"]='';
            }else{
            echo $row["tcm_id_15"].',<br> ';
            }
            if($row["tcm_id_16"] == 'Ne'){
            echo $row["tcm_id_16"]='';
            }else{
            echo $row["tcm_id_16"].',<br> ';
            }
            if($row["tcm_id_17"] == 'Ne'){
            echo $row["tcm_id_17"]='';
            }else{
            echo $row["tcm_id_17"].',<br> ';
            }
            if($row["tcm_id_18"] == 'Ne'){
            echo $row["tcm_id_18"]='';
            }else{
            echo $row["tcm_id_18"].',<br> ';
            }
            if($row["tcm_id_19"] == 'Ne'){
            echo $row["tcm_id_19"]='';
            }else{
            echo $row["tcm_id_19"].',<br> ';
            }
            if($row["tcm_id_20"] == 'Ne'){
            echo $row["tcm_id_20"]='';
            }else{
            echo $row["tcm_id_20"].',<br> ';
            }
            if($row["tcm_id_21"] == 'Ne'){
            echo $row["tcm_id_21"]='';
            }else{
            echo $row["tcm_id_21"].',<br> ';
            }
            if($row["tcm_id_22"] == 'Ne'){
            echo $row["tcm_id_22"]='';
            }else{
            echo $row["tcm_id_22"].',<br> ';
            }
            if($row["tcm_id_23"] == 'Ne'){
            echo $row["tcm_id_23"]='';
            }else{
            echo $row["tcm_id_23"].',<br> ';
            }
            if($row["tcm_id_24"] == 'Ne'){
            echo $row["tcm_id_24"]='';
            }else{
            echo $row["tcm_id_24"].',<br> ';
            }
            if($row["tcm_id_25"] == 'Ne'){
            echo $row["tcm_id_25"]='';
            }else{
            echo $row["tcm_id_25"].',<br> ';
            }
            if($row["tcm_id_26"] == 'Ne'){
            echo $row["tcm_id_26"]='';
            }else{
            echo $row["tcm_id_26"].',<br> ';
            }
            if($row["tcm_id_27"] == 'Ne'){
            echo $row["tcm_id_27"]='';
            }else{
            echo $row["tcm_id_27"].',<br> ';
            }
            if($row["tcm_id_28"] == 'Ne'){
            echo $row["tcm_id_28"]='';
            }else{
            echo $row["tcm_id_28"].',<br> ';
            }
            if($row["tcm_id_29"] == 'Ne'){
            echo $row["tcm_id_29"]='';
            }else{
            echo $row["tcm_id_29"].',<br> ';
            }
            if($row["tcm_id_30"] == 'Ne'){
            echo $row["tcm_id_30"]='';
            }else{
            echo $row["tcm_id_30"].',<br> ';
            }
            if($row["tcm_id_31"] == 'Ne'){
            echo $row["tcm_id_31"]='';
            }else{
            echo $row["tcm_id_31"].',<br> ';
            }
            if($row["tcm_id_32"] == 'Ne'){
            echo $row["tcm_id_32"]='';
            }else{
            echo $row["tcm_id_32"].',<br> ';
            }
            if($row["tcm_id_33"] == 'Ne'){
            echo $row["tcm_id_33"]='';
            }else{
            echo $row["tcm_id_33"].',<br> ';
            }
            if($row["tcm_id_34"] == 'Ne'){
            echo $row["tcm_id_34"]='';
            }else{
            echo $row["tcm_id_34"].',<br> ';
            }
            if($row["tcm_id_35"] == 'Ne'){
            echo $row["tcm_id_35"]='';
            }else{
            echo $row["tcm_id_35"].',<br> ';
            }
            if($row["tcm_id_36"] == 'Ne'){
            echo $row["tcm_id_36"]='';
            }else{
            echo $row["tcm_id_36"].',<br> ';
            }
            if($row["tcm_id_37"] == 'Ne'){
            echo $row["tcm_id_37"]='';
            }else{
            echo $row["tcm_id_37"].',<br> ';
            }
            if($row["tcm_id_38"] == 'Ne'){
            echo $row["tcm_id_38"]='';
            }else{
            echo $row["tcm_id_38"].',<br> ';
            }
            if($row["tcm_id_39"] == 'Ne'){
            echo $row["tcm_id_39"]='';
            }else{
            echo $row["tcm_id_39"].',<br> ';
            }
            if($row["tcm_id_40"] == 'Ne'){
            echo $row["tcm_id_40"]='';
            }else{
            echo $row["tcm_id_40"].',<br> ';
            }
            if($row["tcm_id_41"] == 'Ne'){
            echo $row["tcm_id_41"]='';
            }else{
            echo $row["tcm_id_41"].',<br> ';
            }
            if($row["tcm_id_42"] == 'Ne'){
            echo $row["tcm_id_42"]='';
            }else{
            echo $row["tcm_id_42"].',<br> ';
            }
            if($row["tcm_id_43"] == 'Ne'){
            echo $row["tcm_id_43"]='';
            }else{
            echo $row["tcm_id_43"].',<br> ';
            }
            if($row["tcm_id_44"] == 'Ne'){
            echo $row["tcm_id_44"]='';
            }else{
            echo $row["tcm_id_44"].',<br> ';
            }
            if($row["tcm_id_45"] == 'Ne'){
            echo $row["tcm_id_45"]='';
            }else{
            echo $row["tcm_id_45"].',<br> ';
            }
            if($row["tcm_id_46"] == 'Ne'){
            echo $row["tcm_id_46"]='';
            }else{
            echo $row["tcm_id_46"].',<br> ';
            }
            if($row["tcm_id_47"] == 'Ne'){
            echo $row["tcm_id_47"]='';
            }else{
            echo $row["tcm_id_47"].',<br> ';
            }
            if($row["tcm_id_48"] == 'Ne'){
            echo $row["tcm_id_48"]='';
            }else{
            echo $row["tcm_id_48"].',<br> ';
            }
            if($row["tcm_id_49"] == 'Ne'){
            echo $row["tcm_id_49"]='';
            }else{
            echo $row["tcm_id_49"].',<br> ';
            }
            if($row["tcm_id_50"] == 'Ne'){
            echo $row["tcm_id_50"]='';
            }else{
            echo $row["tcm_id_50"].',<br> ';
            }
            if($row["tcm_id_51"] == 'Ne'){
            echo $row["tcm_id_51"]='';
            }else{
            echo $row["tcm_id_51"].',<br> ';
            }
            if($row["tcm_id_52"] == 'Ne'){
            echo $row["tcm_id_52"]='';
            }else{
            echo $row["tcm_id_52"].',<br> ';
            }
            if($row["tcm_id_53"] == 'Ne'){
            echo $row["tcm_id_53"]='';
            }else{
            echo $row["tcm_id_53"].',<br> ';
            }
            if($row["tcm_id_54"] == 'Ne'){
            echo $row["tcm_id_54"]='';
            }else{
            echo $row["tcm_id_54"].',<br> ';
            }
            if($row["tcm_id_55"] == 'Ne'){
            echo $row["tcm_id_55"]='';
            }else{
            echo $row["tcm_id_55"].',<br> ';
            }
            if($row["tcm_id_56"] == 'Ne'){
            echo $row["tcm_id_56"]='';
            }else{
            echo $row["tcm_id_56"].',<br> ';
            }
            if($row["tcm_id_57"] == 'Ne'){
            echo $row["tcm_id_57"]='';
            }else{
            echo $row["tcm_id_57"].',<br> ';
            }
            if($row["tcm_id_58"] == 'Ne'){
            echo $row["tcm_id_58"]='';
            }else{
            echo $row["tcm_id_58"].',<br> ';
            }
            if($row["tcm_id_59"] == 'Ne'){
            echo $row["tcm_id_59"]='';
            }else{
            echo $row["tcm_id_59"].',<br> ';
            }
            if($row["tcm_id_60"] == 'Ne'){
            echo $row["tcm_id_60"]='';
            }else{
            echo $row["tcm_id_60"].',<br> ';
            }
            if($row["tcm_id_61"] == 'Ne'){
            echo $row["tcm_id_61"]='';
            }else{
            echo $row["tcm_id_61"].',<br> ';
            }
            if($row["tcm_id_62"] == 'Ne'){
            echo $row["tcm_id_62"]='';
            }else{
            echo $row["tcm_id_62"].',<br> ';
            }
            if($row["tcm_id_63"] == 'Ne'){
            echo $row["tcm_id_63"]='';
            }else{
            echo $row["tcm_id_63"].',<br> ';
            }
            if($row["tcm_id_64"] == 'Ne'){
            echo $row["tcm_id_64"]='';
            }else{
            echo $row["tcm_id_64"].',<br> ';
            }
            if($row["tcm_id_65"] == 'Ne'){
            echo $row["tcm_id_65"]='';
            }else{
            echo $row["tcm_id_65"].',<br> ';
            }
            if($row["tcm_id_66"] == 'Ne'){
            echo $row["tcm_id_66"]='';
            }else{
            echo $row["tcm_id_66"].',<br> ';
            }
            if($row["tcm_id_67"] == 'Ne'){
            echo $row["tcm_id_67"]='';
            }else{
            echo $row["tcm_id_67"].',<br> ';
            }
            if($row["tcm_id_68"] == 'Ne'){
            echo $row["tcm_id_68"]='';
            }else{
            echo $row["tcm_id_68"].',<br> ';
            }
            if($row["tcm_id_69"] == 'Ne'){
            echo $row["tcm_id_69"]='';
            }else{
            echo $row["tcm_id_69"].',<br> ';
            }
            if($row["tcm_id_70"] == 'Ne'){
            echo $row["tcm_id_70"]='';
            }else{
            echo $row["tcm_id_70"].',<br> ';
            }
            if($row["tcm_id_71"] == 'Ne'){
            echo $row["tcm_id_71"]='';
            }else{
            echo $row["tcm_id_71"].',<br> ';
            }
            if($row["tcm_id_72"] == 'Ne'){
            echo $row["tcm_id_72"]='';
            }else{
            echo $row["tcm_id_72"].',<br> ';
            }
            if($row["tcm_id_73"] == 'Ne'){
            echo $row["tcm_id_73"]='';
            }else{
            echo $row["tcm_id_73"].',<br> ';
            }
            if($row["tcm_id_74"] == 'Ne'){
            echo $row["tcm_id_74"]='';
            }else{
            echo $row["tcm_id_74"].',<br> ';
            }
            if($row["tcm_id_75"] == 'Ne'){
            echo $row["tcm_id_75"]='';
            }else{
            echo $row["tcm_id_75"].',<br> ';
            }
            if($row["tcm_id_76"] == 'Ne'){
            echo $row["tcm_id_76"]='';
            }else{
            echo $row["tcm_id_76"].',<br> ';
            }
            if($row["tcm_id_77"] == 'Ne'){
            echo $row["tcm_id_77"]='';
            }else{
            echo $row["tcm_id_77"].',<br> ';
            }
        



            

        }
    }



?>