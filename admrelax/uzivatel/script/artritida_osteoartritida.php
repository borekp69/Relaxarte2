<?
    if ($row["artritida_osteoartritida_krcni_pater"] == 'Ne' && $row["artritida_osteoartritida_hrudni_pater"] == 'Ne'
     && $row["artritida_osteoartritida_bederni_pater"] == 'Ne' && $row["artritida_osteoartritida_krizova_kost"] == 'Ne' 
     && $row["artritida_osteoartritida_kostrc"] == 'Ne' && $row["artritida_osteoartritida_ramena"] == 'Ne' 
     && $row["artritida_osteoartritida_lokty"] == 'Ne' && $row["artritida_osteoartritida_zapesti"] == 'Ne' 
     && $row["artritida_osteoartritida_prsty_na_rukou"] == 'Ne' && $row["artritida_osteoartritida_prsty_na_nohou"] == 'Ne' 
     && $row["artritida_osteoartritida_kycle"] == 'Ne' && $row["artritida_osteoartritida_kolena"] == 'Ne' 
     && $row["artritida_osteoartritida_kotniky"] == 'Ne'){
    echo 'Žádný záznam o výskytu onemocnění';
    
    }else{

            if($row["artritida_osteoartritida_krcni_pater"]=='Ne'){
                echo $row["artritida_osteoartritida_krcni_pater"] = '';
            }else{
                echo $row["artritida_osteoartritida_krcni_pater"].', ';
            }   

            if($row["artritida_osteoartritida_hrudni_pater"]=='Ne'){
                echo $row["artritida_osteoartritida_hrudni_pater"] = '';
            }else{
                echo $row["artritida_osteoartritida_hrudni_pater"].', ';
            }

            if($row["artritida_osteoartritida_bederni_pater"]=='Ne'){
                echo $row["artritida_osteoartritida_bederni_pater"] = '';
            }else{
                echo $row["artritida_osteoartritida_bederni_pater"].', ';
            }
            
            if($row["artritida_osteoartritida_krizova_kost"]=='Ne'){
                echo $row["artritida_osteoartritida_krizova_kost"] = '';
            }else{
                echo $row["artritida_osteoartritida_krizova_kost"].', ';
            }
 
            if($row["artritida_osteoartritida_kostrc"]=='Ne'){
                echo $row["artritida_osteoartritida_kostrc"] = '';
            }else{
                echo $row["artritida_osteoartritida_kostrc"].', ';
            }

            if($row["artritida_osteoartritida_ramena"]=='Ne'){
                echo $row["artritida_osteoartritida_ramena"] = '';
            }else{
                echo $row["artritida_osteoartritida_ramena"].', ';
            }

            if($row["artritida_osteoartritida_lokty"]=='Ne'){
                echo $row["artritida_osteoartritida_lokty"] = '';
            }else{
                echo $row["artritida_osteoartritida_lokty"].', ';
            }
     
            if($row["artritida_osteoartritida_zapesti"]=='Ne'){
                echo $row["artritida_osteoartritida_zapesti"] = '';
            }else{
                echo $row["artritida_osteoartritida_zapesti"].', ';
            }

            if($row["artritida_osteoartritida_prsty_na_rukou"]=='Ne'){
                echo $row["artritida_osteoartritida_prsty_na_rukou"] = '';
            }else{
                echo $row["artritida_osteoartritida_prsty_na_rukou"].', ';
            }

            if($row["artritida_osteoartritida_prsty_na_nohou"]=='Ne'){
                echo $row["artritida_osteoartritida_prsty_na_nohou"] = '';
            }else{
                echo $row["artritida_osteoartritida_prsty_na_nohou"].', ';
            }

            if($row["artritida_osteoartritida_kycle"]=='Ne'){
                echo $row["artritida_osteoartritida_kycle"] = '';
            }else{
                echo $row["artritida_osteoartritida_kycle"].', ';
            }

            if($row["artritida_osteoartritida_kolena"]=='Ne'){
                echo $row["artritida_osteoartritida_kolena"] = '';
            }else{
                echo $row["artritida_osteoartritida_kolena"].', ';
            }
   
            if($row["artritida_osteoartritida_kotniky"]=='Ne'){
                echo $row["artritida_osteoartritida_kotniky"] = '';
            }else{
                echo $row["artritida_osteoartritida_kotniky"].', ';
            }   
         }
    ?>
        </div>
</div>
