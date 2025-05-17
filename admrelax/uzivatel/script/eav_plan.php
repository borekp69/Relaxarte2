<?

header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");

//require "sifrovani_dat.php";
//echo 'uzivatel_id: '.$uzivatel_id.'<br>';

?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="./js/jencisla.js"></script> 

<h4>Diagnostika EAV:</h4>

<div id="diagnostika_eav_<?echo $uzivatel_id; ?>">

    <div class="row">

    
                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                <div class="col-sm-6">
                                    <br>
                                    <label for="uzivatel">V jakých rodinných poměrech žijete:</label>
                                    <input type="text" class="form-control form-control-sm" id="v_jakych_rodinnych_pomerech_zijete" value = "" name="v_jakych_rodinnych_pomerech_zijete" maxlength="100" placeholder="V jakých rodinných poměrech žijete?">
                                </div>  

                                <div class="col-sm-6">
                                    <br>
                                    <label for="uzivatel">Reakce na počasí:</label>
                                    <input type="text" class="form-control form-control-sm" id="reakce_na_pocasi" value = "" name="reakce_na_pocasi" maxlength="100" placeholder="chladné, vlhké, horké, suché, mlha, bouřka, změny, sníh, vítr">
                                </div>
                </div>


                <div class="col-sm-12" style="background-color:#DBDBDB;">             
                        <div class="col-sm-3">
                            <br>
                            <label for="uzivatel">Reakce na měsíční cyklus:</label>
                            <select class="form-control" id="reakce_na mesicni_cyklus" name="reakce_na_mesicni_cyklus">
                            <option value="0"> Vyberte možnost</option>
                            <option value="1">Ano</option>
                            <option value="2">Ne</option>
                            </select>
                        </div>   
                
                        <div class="col-sm-4">
                            <br>
                            <label for="uzivatel">Doplňte fázi měsíce:</label>
                            <input type="text" class="form-control form-control-sm" id="reakce_na mesicni_cyklus_text" value = "" name="reakce_na mesicni_cyklus_text" maxlength="100" placeholder="nov, přibývání, ubývání">        
                        </div>    

                        <div class="col-sm-3">
                            <br>
                            <label for="uzivatel">Částá žízeň:</label>
                            <select class="form-control" id="casta_zizen" name="casta_zizen">
                            <option value="0"> Vyberte možnost</option>
                            <option value="1">Ano</option>
                            <option value="2">Ne</option>
                            </select>   
                        </div> 
                </div>   
    </div>
        <div class="row">

                                <div class="col-sm-12" style="background-color:#DBDBDB;">    
                                
                                        <div class="col-sm-3">
                                                <br>
                                                <label for="uzivatel">Preference nápojů:</label>
                                                <select class="form-control" id="preference_nápoju" name="preference_nápoju">
                                                <option value="0"> Vyberte možnost</option>
                                                <option value="1">teplé</option>
                                                <option value="2">studené</option>
                                                </select>
                                        </div>

                                        <div class="col-sm-4">
                                            <br>
                                            <label for="uzivatel">Druh nápojů:</label>
                                            <input type="text" class="form-control form-control-sm" id="druh_napoju" value = "" name="reakce_na mesicni_cyklus_text" maxlength="100" placeholder="Druh nápojů">        
                                        </div> 
                                        
                                        <div class="col-sm-3">
                                                <br>
                                                <label for="uzivatel">Chuť k jídlu:</label>
                                                <select class="form-control" id="chut_k_jidlu" name="chut_k_jidlu">
                                                <option value="0"> Vyberte možnost</option>
                                                <option value="1">Normální</option>
                                                <option value="2">Dobrá</option>
                                                <option value="3">špatná</option>
                                                <option value="4">Odpor</option>
                                                <option value="5">Vlčí hlad</option>
                                                <option value="6">V noci</option>
                                                </select>
                                        </div>

                                        <div class="col-sm-2">
                                            <br>
                                            <label for="uzivatel">V kolik hodin:</label>
                                            <input type="text" class="form-control form-control-sm" id="hlad_v_kolik_hodin" value = "" name="hlad_v_kolik_hodin" maxlength="5" placeholder="Čas">   
                                        </div>    
                                
                                </div>   
        </div>

        <div class="row">

                        <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                <div class="col-sm-3">
                                            <br>
                                            <label for="uzivatel">Oblíbené jídlo:</label>
                                            <input type="text" class="form-control form-control-sm" id="oblibene_jidlo" value = "" name="oblibene_jidlo" maxlength="100" placeholder="Oblíbené jídlo">        
                                </div>
                                
                                <div class="col-sm-3">
                                            <br>
                                            <label for="uzivatel">Neoblíbené jídlo:</label>
                                            <input type="text" class="form-control form-control-sm" id="neoblibene_jidlo" value = "" name="neoblibene_jidlo" maxlength="100" placeholder="Neoblíbené jídlo" >        
                                </div> 

                                <div class="col-sm-2">
                                        <br>
                                        <label for="uzivatel">Sladké</label>
                                        <select class="form-control" id="sladke" name="sladke">
                                        <option value="0"> Vyberte možnost</option>
                                        <option value="1">Ano</option>
                                        <option value="2">Ne</option>
                                        <option value="3">Trochu</option>
                                        </select>
                                </div>

                                <div class="col-sm-2">
                                        <br>
                                        <label for="uzivatel">Solení</label>
                                        <select class="form-control" id="soleni" name="soleni">
                                        <option value="0"> Vyberte možnost</option>
                                        <option value="1">Hodně</option>
                                        <option value="2">Málo</option>
                                        <option value="3">Vůbec ne</option>
                                        </select>
                                </div>

                                <div class="col-sm-2">
                                        <br>
                                        <label for="uzivatel">Kořenění</label>
                                        <select class="form-control" id="koreneni" name="koreneni">
                                        <option value="0"> Vyberte možnost</option>
                                        <option value="1">Hodně</option>
                                        <option value="2">Málo</option>
                                        <option value="3">Vůbec ne</option>
                                        </select>
                                </div>
                            
        
                            </div>


        </div>
        
        <div class="row">

                        <div class="col-sm-12" style="background-color:#DBDBDB;">  
                        
                                <div class="col-sm-3">
                                        <br>
                                        <label for="uzivatel">Problémy po oblíbeném jídle:</label>
                                        <select class="form-control" id="problemy_po_oblibenem_jidle" name="problemy_po_oblibenem_jidle">
                                        <option value="0"> Vyberte možnost</option>
                                        <option value="1">Ano</option>
                                        <option value="2">Ne</option>
                                        </select>
                                </div>

                                <div class="col-sm-3">
                                            <br>
                                            <label for="uzivatel">Popis problémů:</label>
                                            <input type="text" class="form-control form-control-sm" id="oblibene_jidlo_popis_problemu" value = "" name="oblibene_jidlo_popis_problemu" maxlength="100" placeholder="Popis problémů" >        
                                </div> 

                                <div class="col-sm-3">
                                        <br>
                                        <label for="uzivatel">Problémy po jídle obecně:</label>
                                        <select class="form-control" id="problemy_po_jidle_obecne" name="problemy_po_jidle_obecne">
                                        <option value="0"> Vyberte možnost</option>
                                        <option value="1">Ano</option>
                                        <option value="2">Ne</option>
                                        </select>
                                </div>

                                <div class="col-sm-3">
                                            <br>
                                            <label for="uzivatel">Popis problémů:</label>
                                            <input type="text" class="form-control form-control-sm" id="oblibene_jidlo_popis_problemu" value = "" name="oblibene_jidlo_popis_problemu" maxlength="100" placeholder="Popis problémů" >        
                                </div>     
                    
                        </div> 
         </div>    


         <div class="row">
                        <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                        <div class="col-sm-3">
                                                        <br>
                                                        <label for="uzivatel">Spánek</label>
                                                        <select class="form-control" id="spanek" name="spanek">
                                                        <option value="0"> Vyberte možnost</option>
                                                        <option value="1">Dobrý</option>
                                                        <option value="2">Špatný</option>
                                                        <option value="3">Nemožnost usnout</option>
                                                        <option value="4">Mluvení ze spaní</option>
                                                        <option value="5">Klidný</option>
                                                        <option value="6">Neklidný</option>
                                                        <option value="7">Časté buzení</option> 
                                                        
                                                        </select>
                                        </div>
                        
                                        <div class="col-sm-3">
                                                <br>
                                                <label for="uzivatel">Poloha ve spánku:</label>
                                                <input type="text" class="form-control form-control-sm" id="poloha_ve_spanku" value = "" name="poloha_ve_spanku" maxlength="100" placeholder="Poloha ve spánku" >        
                                        </div> 

                                        <div class="col-sm-3">
                                                <br>
                                                <label for="uzivatel">V jakou hodinu nemůžete spát?</label>
                                                <input type="text" class="form-control form-control-sm" id="v_jakou_hodinu_nemuzete_spat" value = "" name="v_jakou_hodinu_nemuzete_spat" maxlength="100" placeholder="V jakou hodinu nemůžete spát?" >        
                                        </div> 
                        
                       </div>           
        </div>


        <div class="row">
                        <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                <div class="col-sm-3">
                                                        <br>
                                                        <label for="uzivatel">Vracejí se některé sny:</label>
                                                        <select class="form-control" id="vraceji_se_nektere_sny" name="vraceji_se_nektere_sny">
                                                        <option value="0"> Vyberte možnost</option>
                                                        <option value="1">Ano</option>
                                                        <option value="2">Ne</option>  
                                                        </select>
                                </div>

                                <div class="col-sm-6">
                                                <br>
                                                <label for="uzivatel">Popis:</label>
                                                <input type="text" class="form-control form-control-sm" id="popis_snu" value = "" name="popis_snu" maxlength="100" placeholder="Které sny se Vám často vracejí?" >        
                                </div> 






                        </div>




        </div>       





</div>