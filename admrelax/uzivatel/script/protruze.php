<?
    if ($row["protruze_krcni_pater"] == 'Ne' && $row["protruze_hrudni_pater"] == 'Ne' && $row["protruze_bederni_pater"] == 'Ne' && $row["protruze_krizova_kost"] == 'Ne'){
    echo 'Žádný záznam o výskytu onemocnění';
    
    }else{

            if($row["protruze_krcni_pater"]=='Ne'){
                echo $row["protruze_krcni_pater"] = '';
            }else{
                echo $row["protruze_krcni_pater"].', ';
            }   

            if($row["protruze_hrudni_pater"]=='Ne'){
                echo $row["protruze_hrudni_pater"] = '';
            }else{
                echo $row["protruze_hrudni_pater"].', ';
            }

            if($row["protruze_bederni_pater"]=='Ne'){
                echo $row["protruze_bederni_pater"] = '';
            }else{
                echo $row["protruze_bederni_pater"].', ';
            }
            
            if($row["protruze_krizova_kost"]=='Ne'){
                echo $row["protruze_krizova_kost"] = '';
            }else{
                echo $row["protruze_krizova_kost"].', ';
            }

            if($row["protruze_kostrc"]=='Ne'){
                echo $row["protruze_kostrc"] = '';
            }else{
                echo $row["protruze_kostrc"].', ';
            }
    
         }
    ?>
        </div>
</div>
