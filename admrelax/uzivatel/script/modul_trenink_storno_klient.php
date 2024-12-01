<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");



$treninkovy_plan_storno_relax_id = htmlspecialchars(trim("$_POST[treninkovy_plan_storno_relax_id]"));
$prihlaseny_uzivatel_form = addslashes(htmlspecialchars(trim("$_POST[prihlaseny_uzivatel]")));

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";

//echo 'ID:'.$treninkovy_plan_storno_relax_id.'<br>';
//echo 'Prihlaseny uzivatel:'.$prihlaseny_uzivatel_form.'<br>';



$sql = "UPDATE treninkovy_plan SET stav_treninku = 3,
prihlaseny_uzivatel = '$prihlaseny_uzivatel_form',
datum = NOW()
WHERE treninkovy_plan_id = $treninkovy_plan_storno_relax_id LIMIT 1";




if ($conn->query($sql) === TRUE) {    
} else {
echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
}  



?>

<?
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
    $sql_trenink_plan = "SELECT * FROM treninkovy_plan WHERE treninkovy_plan_id = $treninkovy_plan_storno_relax_id LIMIT 1";
    $result_trenink_plan = $conn->query($sql_trenink_plan);
            while($radek_trenink_plan = $result_trenink_plan->fetch_assoc()) {
                $datum_treninku_zacatek = $radek_trenink_plan["datum_treninku_zacatek"];
                $datum_treninku_konec = $radek_trenink_plan["datum_treninku_konec"];
                $pocet_lekci = $radek_trenink_plan["pocet_lekci"];
                $k_cerpani = $radek_trenink_plan["k_cerpani"];
                $lektor_procedury =  $radek_trenink_plan["lektor_procedury"];
                $typ_treninku = $radek_trenink_plan["typ_treninku"];
                $detail_zamereni = $radek_trenink_plan["detail_zamereni"]; 
                $skupinovy_dynamicke_cviceni = $radek_trenink_plan["skupinovy_dynamicke_cviceni"]; 
                $skupinovy_dynamicka_meditace = $radek_trenink_plan["skupinovy_dynamicka_meditace"]; 
                $skupinovy_zdrave_jogove_protazeni = $radek_trenink_plan["skupinovy_zdrave_jogove_protazeni"]; 
                $skupinovy_tajczy_cjuan = $radek_trenink_plan["skupinovy_tajczy_cjuan"]; 
                $zpusob_zvyseni_kondice = $radek_trenink_plan["zpusob_zvyseni_kondice"];
                $zpusob_nabrani_svalove_hmoty = $radek_trenink_plan["zpusob_nabrani_svalove_hmoty"];
                $zpusob_dychani_posileni_hss = $radek_trenink_plan["zpusob_dychani_posileni_hss"];
                $zpusob_posileni_panevniho_dna = $radek_trenink_plan["zpusob_posileni_panevniho_dna"];
                $zpusob_stabilizace_kloubu = $radek_trenink_plan["zpusob_stabilizace_kloubu"];
                $zpusob_srovnani_patere = $radek_trenink_plan["zpusob_srovnani_patere"];
                $zpusob_energeticka_harmonizace = $radek_trenink_plan["zpusob_energeticka_harmonizace"];
                $zpusob_dysbalance = $radek_trenink_plan["zpusob_dysbalance"];
                $zpusob_koordinace  = $radek_trenink_plan["zpusob_koordinace"];
                $zpusob_psychika = $radek_trenink_plan["zpusob_psychika"];
                $prihlaseny_uzivatel = $radek_trenink_plan["prihlaseny_uzivatel"];
                $datum = $radek_trenink_plan["datum"];
                $stav_treninku = $radek_trenink_plan["stav_treninku"];  
                $treninkovy_plan_id = $radek_trenink_plan["treninkovy_plan_id"];  


    if ($stav_treninku == 1){ //naplanovano
        $barva_box = '#a1facd';
        $stav_treninku_str = 'Naplánováno';
       



    }elseif($stav_treninku == 2){ //vycerpano
        $barva_box = '#bfb8fa';
        $stav_treninku_str = 'Vyčerpáno'; 

    }elseif($stav_treninku == 3){ //stornováno klientem
        $barva_box = '#eee4a9';
        $stav_treninku_str = 'Stornováno klientem'; 

    }elseif($stav_treninku == 4){ //stornováno Relaxartem
        $barva_box = '#eee4a9';
        $stav_treninku_str = 'Stornováno Relexartem'; 

    }else{
        $barva_box = '#828283'; // chybovy stav
        $stav_treninku_str = 'Chybný stav'; 
 }
}
    ?>


<div id="treninkovy_plan<?echo $treninkovy_plan_id; ?>">
   <form id="treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>" name="treninkovy_plan_update_<?echo $treninkovy_plan_id; ?>" method="post">   
            <div class="row">
        <div class="col-sm-12" style="background-color:<? echo $barva_box; ?>;">        
    
                    <div class="col-sm-2">
                        <br>
                        <label for="uzivatel">Datum od:</label>
                        <input type="date" class="form-control form-control-sm" name="datum_treninku_zacatek"  value = "<?echo $datum_treninku_zacatek;?>" readonly>
                    </div>  

                    <div class="col-sm-2">
                        <br>
                        <label for="uzivatel">Datum do:</label>
                        <input type="date" class="form-control form-control-sm" name="datum_treninku_konec"  value = "<?echo $datum_treninku_konec;?>" readonly>
                    </div> 
                    
                    <div class="col-sm-3">
                        <br>
                        <label for="uzivatel">Počet plánovaných lekcí:</label>                        
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" id="pocet_lekci" value = "<? echo $pocet_lekci;?> " name="pocet_lekci" maxlength="2" placeholder="Počet plánovaných lekcí"  readonly>
                    </div>   
                    
                    <div class="col-sm-2">
                        <br>
                        <label for="uzivatel">K čerpání:</label>                        
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" id="k_cerpani" value = "<? echo $k_cerpani;?>" name="k_cerpani" maxlength="2" placeholder="Počet lekcí k čerpání" readonly>
                    </div>  
                    
                    
                        <div class="col-sm-3">
                                <br>
                                <label for="uzivatel">Lektor:</label>
                                <?
                                require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                                $sql = "SELECT * FROM lektor WHERE lektor_id = $lektor_procedury";
                                $result = $conn->query($sql);
                                while($radek = $result->fetch_assoc()) {
                                $lektor = $radek["lektor_titul"].' '. $radek["lektor_prijmeni"].' '.$radek["lektor_jmeno"];                               
                                } 
                                $conn->close();
                                ?>
                              
                              <input type="text" id="lektor" name="lektor" class="form-control form-control-sm" value = "<? echo $lektor;?>" readonly>                             
                        </div>
        </div> 
     </div>




        <div class="row">
            <div class="col-sm-12" style="background-color:<? echo $barva_box; ?>;"> 
            <div class="col-sm-3">
            <br>
            <label for="uzivatel">Stav tréninku:</label>
            <input type="text" id="stav_treninku_str" name="stav_treninku_str" class="form-control form-control-sm" value = "<? echo $stav_treninku_str;?>" readonly> 
            </div>

            <div class="col-sm-3">
            <br>
            <label for="uzivatel">Uložil:</label>
            <input type="text" id="prihlaseny_uzivatel" name="prihlaseny_uzivatel" class="form-control form-control-sm" value = "<? echo $prihlaseny_uzivatel;?>" readonly> 
            </div>

            <div class="col-sm-3">
            <br>
            <label for="uzivatel">Datum:</label>
            <input type="text" id="datum" name="datum" class="form-control form-control-sm" value = "<? echo $datum;?>" readonly> 
            </div>


    
             </div>   

        </div>      


            <div class="row">  
            <div class="col-sm-12" style="background-color:<? echo $barva_box; ?>;">                
                <div class="col-sm-4">
                    <br>
                    <label for="uzivatel">Typ tréninku:</label>
                    <select class="form-control" id="typ_treninku" name="typ_treninku" disabled>
                    <option value="0"> Vyberte možnost</option>                    
                  <? if ($typ_treninku == 1){  ?>
                    <option value="0"> Vyberte možnost</option>                      
                    <option value="1" selected>individuální</option>
                    <option value="2">skupinový</option>
                    <option value="3">kombinace</option>                    
                    <?
                    }else if ($typ_treninku == 2){ ?>
                    <option value="0"> Vyberte možnost</option> 
                    <option value="1">individuální</option>
                    <option value="2" selected>skupinový</option>
                    <option value="3">kombinace</option> 
                    <?
                    }else if ($typ_treninku == 3){ ?>
                    <option value="0"> Vyberte možnost</option> 
                    <option value="1">individuální</option>
                    <option value="2">skupinový</option>
                    <option value="3" selected>kombinace</option> 
                   <? }else{ ?>
                    <option value="0" selected> Vyberte možnost</option> 
                    <option value="1">individuální</option>
                    <option value="2">skupinový</option>
                    <option value="3">kombinace</option> 
                  <?
                   }
                  ?>
                    </select>
                </div> 



                    <div class="col-sm-4">
                        <br/>

                        <?   if ($typ_treninku == 2 || $typ_treninku == 3){?>
                        <label for="uzivatel">Typ tréninku skupinový:</label>
                        <div class="checkbox">
                            <? if ($skupinovy_dynamicke_cviceni == 1){?>
                              <label><input type="checkbox" name="dynamicke_cviceni" checked disabled>Dynamické cvičení</label>
                            <? }else{ ?>
                              <label><input type="checkbox" name="dynamicke_cviceni" disabled>Dynamické cvičení</label>
                              <? 
                              }
                              ?>                        
                          </div>

                        <div class="checkbox">
                            <? if ($skupinovy_dynamicka_meditace == 1){?>
                              <label><input type="checkbox" name="dynamicka_meditace" checked disabled>Dynamická meditace</label>
                            <? }else{ ?>
                              <label><input type="checkbox" name="dynamicka_meditace" disabled>Dynamická meditace</label>
                              <? 
                              }
                              ?>                         
                          </div>

                        <div class="checkbox">
                            <? if ($skupinovy_zdrave_jogove_protazeni == 1){?>
                            <label><input type="checkbox" name="zdrave_jogove_protazeni" checked disabled>Zdravé jógové protažení</label>
                            <? }else{ ?>
                              <label><input type="checkbox" name="zdrave_jogove_protazeni" disabled>Zdravé jógové protažení</label>
                              <? 
                              }
                              ?>  
                        </div>

                        <div class="checkbox">
                            <? if ($skupinovy_tajczy_cjuan == 1){?>
                            <label><input type="checkbox" name="tajczy_cjuan" checked disabled>Tajczy cjuaň</label>
                            <? }else{ ?>
                              <label><input type="checkbox" name="tajczy_cjuan" disabled>Tajczy cjuaň</label>  
                              <? 
                              }
                              ?>
                        </div>  

                        <? }else{ ?>
                          
                          <?  } ?> 

                      </div> 


                    <div class="col-sm-4">
                          <br>
                          <label for="uzivatel">Způsob tréninku:</label>
                          <div class="checkbox">
                              <? if ($zpusob_zvyseni_kondice == 1){?>
                              <label><input type="checkbox" name="zvyseni_kondice" checked disabled>zvýšení kondice</label>
                              <? }else{ ?>
                              <label><input type="checkbox" name="zvyseni_kondice" disabled>zvýšení kondice</label>
                              <?  } ?>                     
                          </div>

                          <div class="checkbox">
                            <? if ($zpusob_nabrani_svalove_hmoty == 1){?>
                            <label><input type="checkbox" name="nabrani_svalove_hmoty" checked disabled>nabrání svalové hmoty</label>
                            <? }else{ ?>
                              <label><input type="checkbox" name="nabrani_svalove_hmoty" disabled>nabrání svalové hmoty</label>
                              <?  } ?> 
                          </div> 

                          <div class="checkbox">
                            <? if ($zpusob_dychani_posileni_hss == 1){?>
                              <label><input type="checkbox" name="dychani_posileni_hss" checked disabled>dýchání, posílení HSS</label>
                              <? }else{ ?>
                                <label><input type="checkbox" name="dychani_posileni_hss" disabled>dýchání, posílení HSS</label>
                                <?  } ?>  
                          </div> 

                          <div class="checkbox">
                            <? if ($zpusob_posileni_panevniho_dna == 1){?>
                            <label><input type="checkbox" name="posileni_panevniho_dna" checked disabled>posílení pánevního dna</label>
                            <? }else{ ?>
                            <label><input type="checkbox" name="posileni_panevniho_dna" disabled>posílení pánevního dna</label>
                            <?  } ?>  
                          </div>
                        
                          <div class="checkbox">
                            <? if ($zpusob_stabilizace_kloubu == 1){?>
                            <label><input type="checkbox" name="stabilizace_kloubu" checked disabled>stabilizace kloubů</label>
                            <? }else{ ?>
                            <label><input type="checkbox" name="stabilizace_kloubu" disabled>stabilizace kloubů</label> 
                            <?  } ?> 
                          </div>

                          <div class="checkbox">
                             <? if ($zpusob_srovnani_patere == 1){?>
                            <label><input type="checkbox" name="srovnani_patere" checked disabled>srovnání páteře</label>
                            <? }else{ ?>
                            <label><input type="checkbox" name="srovnani_patere" disabled>srovnání páteře</label>
                            <?  } ?>
                          </div> 

                          <div class="checkbox">
                            <? if ($zpusob_energeticka_harmonizace == 1){?>
                            <label><input type="checkbox" name="energeticka_harmonizace" checked disabled>energetická harmonizace</label>
                            <? }else{ ?>
                            <label><input type="checkbox" name="energeticka_harmonizace" disabled>energetická harmonizace</label>
                            <?  } ?>
                          </div>  
                    
                          <div class="checkbox">
                            <? if ($zpusob_dysbalance == 1){?>
                            <label><input type="checkbox" name="dysbalance" checked disabled>dysbalance</label>
                            <? }else{ ?>
                            <label><input type="checkbox" name="dysbalance" disabled>dysbalance</label>                            
                            <?  } ?>
                          </div> 
                        
                          <div class="checkbox">
                            <? if ($zpusob_koordinace == 1){?>
                            <label><input type="checkbox" name="koordinace" checked disabled>koordinace</label>
                            <? }else{ ?>
                            <label><input type="checkbox" name="koordinace" disabled>koordinace</label>
                            <?  } ?>
                          </div>

                          <div class="checkbox">
                            <? if ($zpusob_psychika == 1){?>
                            <label><input type="checkbox" name="psychika" checked disabled>psychika</label>
                            <? }else{ ?>
                            <label><input type="checkbox" name="psychika" disabled>psychika</label>
                            <?  } ?>
                          </div>        
                   </div>
            </div>
        </div>





  
             <div class="row">
                    <div class="col-sm-12" style="background-color:<? echo $barva_box; ?>;">
                        <br/>
                        <label for="uzivatel">Detail zaměření:</label>
                        <textarea class="form-control" id="detail_zamereni" name="detail_zamereni" rows="2" maxlength="200" style="background-color:#FFFFFF;" readonly><? echo $detail_zamereni;?></textarea>
                        <br/>                     
                    </div>
             </div> 


  

            <div class="row">
                    <div class="col-sm-12" style="background-color:<? echo $barva_box; ?>;">
                        <br/>                        
                        

                <?
                    if ($stav_treninku == 1){ //naplanovano
                     ?>
                        <button type="button" class="btn btn-primary btn-sm" onclick="loadTreninkCerpat<? echo $treninkovy_plan_id;?>()">Čerpat trénink</button>&nbsp;&nbsp;
                        <button type="button" class="btn btn-warning btn-sm" onclick="loadTreninkStornoKlientem<? echo $treninkovy_plan_id;?>()">Storno tréninku - klientem</button>&nbsp;&nbsp;
                        <button type="button" class="btn btn-info btn-sm" onclick="loadTreninkStornoRelaxartem<? echo $treninkovy_plan_id;?>()">Storno tréninku - RELAXARTEM</button>&nbsp;&nbsp;
                        <button type="button" class="btn btn-danger btn-sm" onclick="loadTreninkDelete<? echo $treninkovy_plan_id;?>()">Smazat plánovaný trénink</button>&nbsp;&nbsp;   
                    <?
                
                
                    }elseif($stav_treninku == 2){ //vycerpano
                        ?>
                       <button type="button" class="btn btn-danger btn-sm" onclick="loadTreninkDelete<? echo $treninkovy_plan_id;?>()">Smazat plánovaný trénink</button>&nbsp;&nbsp;   
                        <? 

                    }elseif($stav_treninku == 3){ //stornováno klientem
                        ?>
                       <button type="button" class="btn btn-danger btn-sm" onclick="loadTreninkDelete<? echo $treninkovy_plan_id;?>()">Smazat plánovaný trénink</button>&nbsp;&nbsp;   
                        <?                        
                
                    }elseif($stav_treninku == 4){ //stornováno Relaxartem
                        ?>
                        <button type="button" class="btn btn-danger btn-sm" onclick="loadTreninkDelete<? echo $treninkovy_plan_id;?>()">Smazat plánovaný trénink</button>&nbsp;&nbsp;   
                         <?   
                        
                
                    }else{
                    
                    echo 'Chybná hodnota !!!';
                    
                 }
                ?>


                        <br/><br/>                     
                    </div>


          
        </form>
 </div> 
