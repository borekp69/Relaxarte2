    
    <?
    if ($row["artroza_krcni_pater"] == 'Ne' && $row["artroza_hrudni_pater"] == 'Ne' 
    && $row["artroza_bederni_pater"] == 'Ne' && $row["artroza_krizova_kost"] == 'Ne' 
    && $row["artroza_kostrc"] == 'Ne' && $row["artroza_ramena"] == 'Ne' && $row["artroza_lokty"] == 'Ne' 
    && $row["artroza_zapesti"] == 'Ne' && $row["artroza_prsty_na_rukou"] == 'Ne' && $row["artroza_prsty_na_nohou"] == 'Ne' 
    && $row["artroza_kycle"] == 'Ne' && $row["artroza_kolena"] == 'Ne' && $row["artroza_kotniky"] == 'Ne'){
    echo 'Žádný záznam o výskytu onemocnění';
    
    }else{

            if($row["artroza_krcni_pater"]=='Ne'){
                echo $row["artroza_krcni_pater"] = '';
            }else{
                echo $row["artroza_krcni_pater"].', ';
            }   

            if($row["artroza_hrudni_pater"]=='Ne'){
                echo $row["artroza_hrudni_pater"] = '';
            }else{
                echo $row["artroza_hrudni_pater"].', ';
            }

            if($row["artroza_bederni_pater"]=='Ne'){
                echo $row["artroza_bederni_pater"] = '';
            }else{
                echo $row["artroza_bederni_pater"].', ';
            }
            
            if($row["artroza_krizova_kost"]=='Ne'){
                echo $row["artroza_krizova_kost"] = '';
            }else{
                echo $row["artroza_krizova_kost"].', ';
            }
 
            if($row["artroza_kostrc"]=='Ne'){
                echo $row["artroza_kostrc"] = '';
            }else{
                echo $row["artroza_kostrc"].', ';
            }

            if($row["artroza_ramena"]=='Ne'){
                echo $row["artroza_ramena"] = '';
            }else{
                echo $row["artroza_ramena"].', ';
            }

            if($row["artroza_lokty"]=='Ne'){
                echo $row["artroza_lokty"] = '';
            }else{
                echo $row["artroza_lokty"].', ';
            }
     
            if($row["artroza_zapesti"]=='Ne'){
                echo $row["artroza_zapesti"] = '';
            }else{
                echo $row["artroza_zapesti"].', ';
            }

            if($row["artroza_prsty_na_rukou"]=='Ne'){
                echo $row["artroza_prsty_na_rukou"] = '';
            }else{
                echo $row["artroza_prsty_na_rukou"].', ';
            }

            if($row["artroza_prsty_na_nohou"]=='Ne'){
                echo $row["artroza_prsty_na_nohou"] = '';
            }else{
                echo $row["artroza_prsty_na_nohou"].', ';
            }

            if($row["artroza_kycle"]=='Ne'){
                echo $row["artroza_kycle"] = '';
            }else{
                echo $row["artroza_kycle"].', ';
            }

            if($row["artroza_kolena"]=='Ne'){
                echo $row["artroza_kolena"] = '';
            }else{
                echo $row["artroza_kolena"].', ';
            }
   
            if($row["artroza_kotniky"]=='Ne'){
                echo $row["artroza_kotniky"] = '';
            }else{
                echo $row["artroza_kotniky"].', ';
            }   
         }
    ?>
        </div>
</div>