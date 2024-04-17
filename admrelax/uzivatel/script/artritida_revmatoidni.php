<?
    if ($row["artritida_revmatoidni_krcni_pater"] == 'Ne' && $row["artritida_revmatoidni_hrudni_pater"] == 'Ne' 
    && $row["artritida_revmatoidni_bederni_pater"] == 'Ne' && $row["artritida_revmatoidni_krizova_kost"] == 'Ne' 
    && $row["artritida_revmatoidni_kostrc"] == 'Ne' && $row["artritida_revmatoidni_ramena"] == 'Ne' 
    && $row["artritida_revmatoidni_lokty"] == 'Ne' && $row["artritida_revmatoidni_zapesti"] == 'Ne' 
    && $row["artritida_revmatoidni_prsty_na_rukou"] == 'Ne' && $row["artritida_revmatoidni_prsty_na_nohou"] == 'Ne' 
    && $row["artritida_revmatoidni_kycle"] == 'Ne' && $row["artritida_revmatoidni_kolena"] == 'Ne' 
    && $row["artritida_revmatoidni_kotniky"] == 'Ne'){
    echo 'Žádný záznam o výskytu onemocnění';
    
    }else{

            if($row["artritida_revmatoidni_krcni_pater"]=='Ne'){
                echo $row["artritida_revmatoidni_krcni_pater"] = '';
            }else{
                echo $row["artritida_revmatoidni_krcni_pater"].', ';
            }   

            if($row["artritida_revmatoidni_hrudni_pater"]=='Ne'){
                echo $row["artritida_revmatoidni_hrudni_pater"] = '';
            }else{
                echo $row["artritida_revmatoidni_hrudni_pater"].', ';
            }

            if($row["artritida_revmatoidni_bederni_pater"]=='Ne'){
                echo $row["artritida_revmatoidni_bederni_pater"] = '';
            }else{
                echo $row["artritida_revmatoidni_bederni_pater"].', ';
            }
            
            if($row["artritida_revmatoidni_krizova_kost"]=='Ne'){
                echo $row["artritida_revmatoidni_krizova_kost"] = '';
            }else{
                echo $row["artritida_revmatoidni_krizova_kost"].', ';
            }
 
            if($row["artritida_revmatoidni_kostrc"]=='Ne'){
                echo $row["artritida_revmatoidni_kostrc"] = '';
            }else{
                echo $row["artritida_revmatoidni_kostrc"].', ';
            }

            if($row["artritida_revmatoidni_ramena"]=='Ne'){
                echo $row["artritida_revmatoidni_ramena"] = '';
            }else{
                echo $row["artritida_revmatoidni_ramena"].', ';
            }

            if($row["artritida_revmatoidni_lokty"]=='Ne'){
                echo $row["artritida_revmatoidni_lokty"] = '';
            }else{
                echo $row["artritida_revmatoidni_lokty"].', ';
            }
     
            if($row["artritida_revmatoidni_zapesti"]=='Ne'){
                echo $row["artritida_revmatoidni_zapesti"] = '';
            }else{
                echo $row["artritida_revmatoidni_zapesti"].', ';
            }

            if($row["artritida_revmatoidni_prsty_na_rukou"]=='Ne'){
                echo $row["artritida_revmatoidni_prsty_na_rukou"] = '';
            }else{
                echo $row["artritida_revmatoidni_prsty_na_rukou"].', ';
            }

            if($row["artritida_revmatoidni_prsty_na_nohou"]=='Ne'){
                echo $row["artritida_revmatoidni_prsty_na_nohou"] = '';
            }else{
                echo $row["artritida_revmatoidni_prsty_na_nohou"].', ';
            }

            if($row["artritida_revmatoidni_kycle"]=='Ne'){
                echo $row["artritida_revmatoidni_kycle"] = '';
            }else{
                echo $row["artritida_revmatoidni_kycle"].', ';
            }

            if($row["artritida_revmatoidni_kolena"]=='Ne'){
                echo $row["artritida_revmatoidni_kolena"] = '';
            }else{
                echo $row["artritida_revmatoidni_kolena"].', ';
            }
   
            if($row["artritida_revmatoidni_kotniky"]=='Ne'){
                echo $row["artritida_revmatoidni_kotniky"] = '';
            }else{
                echo $row["artritida_revmatoidni_kotniky"].', ';
            }   
         }
    ?>
        </div>
</div>
