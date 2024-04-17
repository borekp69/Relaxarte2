<?
$sql = "SELECT *,
CASE
WHEN colenter_ld_1= 0 THEN 'Ne'
WHEN colenter_ld_1 = 1 THEN 'DS1 COLENTER LD'
END AS colenter_ld_1,

CASE
WHEN enterina_2= 0 THEN 'Ne'
WHEN enterina_2 = 1 THEN 'DS2 ENTERINA'
END AS enterina_2,

CASE
WHEN lipo_c_askor_forte_120_4 = 0 THEN 'Ne'
WHEN lipo_c_askor_forte_120_4 = 1 THEN 'DS4 LIPO C ASKOR FORTE 120'
END AS lipo_c_askor_forte_120_4,

CASE
WHEN lipo_c_askor_forte_60_5 = 0 THEN 'Ne'
WHEN lipo_c_askor_forte_60_5 = 1 THEN 'DS5 LIPO C ASKOR FORTE 60'
END AS lipo_c_askor_forte_60_5,

CASE
WHEN lipo_c_askor_junior_6 = 0 THEN 'Ne'
WHEN lipo_c_askor_junior_6 = 1 THEN 'DS6 LIPO C ASKOR JUNIOR'
END AS lipo_c_askor_junior_6,

CASE
WHEN lipo_c_askor_tekuta_forma_3 = 0 THEN 'Ne'
WHEN lipo_c_askor_tekuta_forma_3 = 1 THEN 'DS3 LIPO C ASKOR tekutá forma'
END AS lipo_c_askor_tekuta_forma_3,

CASE
WHEN probacin_7 = 0 THEN 'Ne'
WHEN probacin_7 = 1 THEN 'DS7 PROBACIN'
END AS probacin_7,

CASE
WHEN uro_c_kontrol_8 = 0 THEN 'Ne'
WHEN uro_c_kontrol_8 = 1 THEN 'ZP1 URO C KONTROL'
END AS uro_c_kontrol_8

FROM zdravi_inpharm
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    if($row["colenter_ld_1"] == 'Ne'
    && $row["enterina_2"] == 'Ne'
    && $row["lipo_c_askor_forte_120_4"] == 'Ne'
    && $row["lipo_c_askor_forte_60_5"] == 'Ne'
    && $row["lipo_c_askor_junior_6"] == 'Ne'
    && $row["lipo_c_askor_tekuta_forma_3"] == 'Ne' 
    && $row["probacin_7"] == 'Ne'      
    && $row["uro_c_kontrol_8"] == 'Ne' 
    ){
        echo 'Žádný záznam';
    
    }else{

        if($row["colenter_ld_1"] == 'Ne'){
            echo $row["colenter_ld_1"]='';
            }else{
            echo $row["colenter_ld_1"].',<br>';
            }

            if($row["enterina_2"] == 'Ne'){
                echo $row["enterina_2"]='';
                }else{
                echo $row["enterina_2"].',<br>';
                }            

                if($row["lipo_c_askor_forte_120_4"] == 'Ne'){
                    echo $row["lipo_c_askor_forte_120_4"]='';
                    }else{
                    echo $row["lipo_c_askor_forte_120_4"].',<br>';
                    }

                    if($row["lipo_c_askor_forte_60_5"] == 'Ne'){
                        echo $row["lipo_c_askor_forte_60_5"]='';
                        }else{
                        echo $row["lipo_c_askor_forte_60_5"].',<br>';
                        } 

                        if($row["lipo_c_askor_junior_6"] == 'Ne'){
                            echo $row["lipo_c_askor_junior_6"]='';
                            }else{
                            echo $row["lipo_c_askor_junior_6"].',<br>';
                            } 

                            if($row["lipo_c_askor_tekuta_forma_3"] == 'Ne'){
                                echo $row["lipo_c_askor_tekuta_forma_3"]='';
                                }else{
                                echo $row["lipo_c_askor_tekuta_forma_3"].',<br>';
                                } 

                                if($row["probacin_7"] == 'Ne'){
                                    echo $row["probacin_7"]='';
                                    }else{
                                    echo $row["probacin_7"].',<br>';
                                    }

                                    if($row["uro_c_kontrol_8"] == 'Ne'){
                                        echo $row["uro_c_kontrol_8"]='';
                                        }else{
                                        echo $row["uro_c_kontrol_8"].',<br>';
                                        }


    }

}

?>