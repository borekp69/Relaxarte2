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

        <form id="diagnostika_eav_<?echo $uzivatel_id; ?>"  name="diagnostika_eav_<?echo $uzivatel_id; ?>" method="post"> 





                                        <div class="row">
                                                                <div class="col-sm-12" style="background-color:#DBDBDB;"> 
                                                                        <div class="col-sm-6">
                                                                                <br>
                                                                                <label for="uzivatel">Celková hodnota:</label>
                                                                                <input type="text" class="form-control form-control-sm" id="celkova_hodnota" value = "" name="celkova_hodnota" maxlength="5" placeholder="Celková hodnota" required>
                                                                        </div>                                                                      

                                                                </div>

                                        </div>


                        <div class="row">

                        
                                        <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                        <div class="col-sm-6">
                                                        <br>
                                                        <label for="uzivatel">V jakých rodinných poměrech žijete:</label>
                                                        <input type="text" class="form-control form-control-sm" id="v_jakych_rodinnych_pomerech_zijete" value = "" name="v_jakych_rodinnych_pomerech_zijete" maxlength="100" placeholder="V jakých rodinných poměrech žijete?" required>
                                                        </div>  

                                                        <div class="col-sm-6">
                                                        <br>
                                                        <label for="uzivatel">Reakce na počasí:</label>
                                                        <input type="text" class="form-control form-control-sm" id="reakce_na_pocasi" value = "" name="reakce_na_pocasi" maxlength="100" placeholder="chladné, vlhké, horké, suché, mlha, bouřka, změny, sníh, vítr" required>
                                                        </div>
                                        </div>
                                </div>

                                <div class="row">

                                        <div class="col-sm-12" style="background-color:#DBDBDB;">             
                                                <div class="col-sm-3">
                                                <br>
                                                <label for="uzivatel">Reakce na měsíční cyklus:</label>
                                                <select class="form-control" id="reakce_na mesicni_cyklus" name="reakce_na_mesicni_cyklus" required >
                                                <option value="0"> Vyberte možnost</option>
                                                <option value="1">Ano</option>
                                                <option value="2">Ne</option>
                                                </select>
                                                </div>   
                                        
                                                <div class="col-sm-4">
                                                <br>
                                                <label for="uzivatel">Doplňte fázi měsíce:</label>
                                                <input type="text" class="form-control form-control-sm" id="reakce_na_mesicni_cyklus_text" value = "" name="reakce_na_mesicni_cyklus_text" maxlength="100" placeholder="nov, přibývání, ubývání">        
                                                </div>    

                                                <div class="col-sm-3">
                                                <br>
                                                <label for="uzivatel">Částá žízeň:</label>
                                                <select class="form-control" id="casta_zizen" name="casta_zizen" required>
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
                                                                        <select class="form-control" id="preference_napoju" name="preference_napoju" required>
                                                                        <option value="0"> Vyberte možnost</option>
                                                                        <option value="1">teplé</option>
                                                                        <option value="2">studené</option>
                                                                        </select>
                                                                </div>

                                                                <div class="col-sm-4">
                                                                <br>
                                                                <label for="uzivatel">Druh nápojů:</label>
                                                                <input type="text" class="form-control form-control-sm" id="druh_napoju" value = "" name="druh_napoju" maxlength="100" placeholder="Druh nápojů">        
                                                                </div> 
                                                                
                                                                <div class="col-sm-3">
                                                                        <br>
                                                                        <label for="uzivatel">Chuť k jídlu:</label>
                                                                        <select class="form-control" id="chut_k_jidlu" name="chut_k_jidlu" requiredstra>
                                                                        <option value="0"> Vyberte možnost</option>
                                                                        <option value="1">Normální</option>
                                                                        <option value="2">Dobrá</option>
                                                                        <option value="3">špatná</option>
                                                                        <option value="4">Odpor</option>
                                                                        <option value="5">Vlčí hlad</option>
                                                                        <option value="6">V noci</option>
                                                                        </select>
                                                                </div>
                                                                <div class="form-group" id="chutkjidluFieldGroupDiv">
                                                                        <div class="col-sm-2">
                                                                        <br>
                                                                        <label for="uzivatel">V kolik hodin:</label>
                                                                        <input type="text" class="form-control form-control-sm" id="hladhodiny" value = "" name="hlad_v_koli_hodin" maxlength="10" placeholder="Čas">   
                                                                        </div>
                                                                </div>
                                                        
                                                                <script src="./js/chutkjidlu.js"></script>



                                                        </div>   
                                </div>

                                <div class="row">

                                                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                        <div class="col-sm-3">
                                                                <br>
                                                                <label for="uzivatel">Oblíbené jídlo:</label>
                                                                <input type="text" class="form-control form-control-sm" id="oblibene_jidlo" value = "" name="oblibene_jidlo" maxlength="200" placeholder="Oblíbené jídlo">        
                                                        </div>
                                                        
                                                        <div class="col-sm-3">
                                                                <br>
                                                                <label for="uzivatel">Neoblíbené jídlo:</label>
                                                                <input type="text" class="form-control form-control-sm" id="neoblibene_jidlo" value = "" name="neoblibene_jidlo" maxlength="200" placeholder="Neoblíbené jídlo" >        
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

                                                        <div class="form-group" id="oblibenejidlo">
                                                                        <div class="col-sm-9">
                                                                                <br>
                                                                                <label for="uzivatel">Popis problémů:</label>
                                                                                <input type="text" class="form-control form-control-sm" id="problemy_po_oblibenem_jidle_text" value = "" name="problemy_po_oblibenem_jidle_text" maxlength="200" placeholder="Popis problémů po oblíbeném jídle" >        
                                                                        </div>                                              
                                                        </div> 
                                                        <script src="./js/oblibenejidlo.js"></script>








                                                </div> 
                                </div>    





                                <div class="row">
                                                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                        <div class="col-sm-3">
                                                                <br>
                                                                <label for="uzivatel">Problémy po jídle obecně:</label>
                                                                <select class="form-control" id="problemy_po_jidle_obecne" name="problemy_po_jidle_obecne">
                                                                <option value="0"> Vyberte možnost</option>
                                                                <option value="1">Ano</option>
                                                                <option value="2">Ne</option>
                                                                </select>
                                                        </div>
                                                        <div class="form-group" id="obecnejidlo">
                                                                        <div class="col-sm-9">
                                                                                <br>
                                                                                <label for="uzivatel">Popis problémů:</label>
                                                                                <input type="text" class="form-control form-control-sm" id="problemy_po_jidle_obecne_text" value = "" name="problemy_po_jidle_obecne_text" maxlength="200" placeholder="Popis problémů po jídle obecně" >        
                                                                        </div>     
                                                        </div>
                                                        <script src="./js/obecnejidlo.js"></script>

                                                </div>
                                </div>






                                <div class="row">
                                                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                                <div class="col-sm-3">
                                                                                <br>
                                                                                <label for="uzivatel">Spánek</label>
                                                                                <select class="form-control" id="spanek" name="spanek" required>
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
                                                                        <input type="text" class="form-control form-control-sm" id="v_jakou_hodinu_nemuzete_spat" value = "" name="v_jakou_hodinu_nemuzete_spat" maxlength="200" placeholder="V jakou hodinu nemůžete spát?" required>        
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

                                                        <div class="form-group" id="castesny">
                                                                <div class="col-sm-9">
                                                                                <br>
                                                                                <label for="uzivatel">Popis:</label>
                                                                                <input type="text" class="form-control form-control-sm" id="popis_snu" value = "" name="popis_snu" maxlength="200" placeholder="Které sny se Vám často vracejí?" >        
                                                                </div> 
                                                        </div>
                                                        <script src="./js/castesny.js"></script>




                                                </div>




                                </div>       





                                <div class="row">
                                                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                                <div class="col-sm-3">
                                                                                        <br>
                                                                                        <label for="uzivatel">Strachy v životě:</label>
                                                                                        <select class="form-control" id="strachy_v_zivote" name="strachy_v_zivote" required>
                                                                                        <option value="0"> Vyberte možnost</option>
                                                                                        <option value="1">Ano</option>
                                                                                        <option value="2">Ne</option>  
                                                                                        </select>
                                                                                        <br>
                                                                </div>  
                                                        
                                                        <div class="form-group" id="ZivotniStrachy">

                                                                                                <div class="col-sm-2">
                                                                                                        <br><br>
                                                                                                        <div class="checkbox">
                                                                                                        <label><input type="checkbox" name="bourka" value="1">bouřka</label>
                                                                                                        </div>

                                                                                                        <div class="checkbox">
                                                                                                        <label><input type="checkbox" name="vyska" value="1">výška</label>
                                                                                                        </div>
                                                                                                
                                                                                                        <div class="checkbox">
                                                                                                        <label><input type="checkbox" name="zkouska" value="1">zkouška</label>
                                                                                                        </div>

                                                                                                        <div class="checkbox">
                                                                                                        <label><input type="checkbox" name="voda" value="1">voda</label>
                                                                                                        </div>  
                                                                                                        
                                                                                                        <div class="checkbox">
                                                                                                        <label><input type="checkbox" name="nemoc" value="1">nemoc</label>
                                                                                                        </div> 
                                                                                                        
                                                                                                        <div class="checkbox">
                                                                                                        <label><input type="checkbox" name="zvire" value="1">zvíře</label>
                                                                                                        </div> 
                                                                                                        
                                                                                                        <div class="checkbox">
                                                                                                        <label><input type="checkbox" name="cestovani" value="1">cestování</label>
                                                                                                        </div>   

                                                                                                        <div class="checkbox">
                                                                                                        <label><input type="checkbox" name="dopravni_prostredek" value="1">dopravní prostředek</label>
                                                                                                        </div>  

                                                                                                        <div class="checkbox">
                                                                                                        <label><input type="checkbox" name="zlodej" value="1">zloděj</label>
                                                                                                        </div> 

                                                                                                        <div class="checkbox">
                                                                                                        <label><input type="checkbox" name="smrt" value="1">smrt</label>
                                                                                                        </div> 
                                                                                                        
                                                                                                        <div class="checkbox">
                                                                                                        <label><input type="checkbox" name="jine" value="1" id="Moje_strachy" onclick="myFunction_strachy()">jiné</label>
                                                                                                        </div>      

                                                                                                </div>        


                                                                                                        <div class="col-sm-7" id="text_strach" style="display:none">
                                                                                                                                <br>
                                                                                                                                <label for="uzivatel">Popis:</label>
                                                                                                                                <input type="text" class="form-control form-control-sm" id="popis_strachu" value = "" name="popis_strachu" maxlength="200" placeholder="Popis strachu" >        
                                                                                                        </div> 
                                
                                                                                                        
                                                        </div>
                                                       
 
                                                </div>
                                           
                                </div>  



                                                        <div class="row">
                                                                                <div class="col-sm-12" style="background-color:#DBDBDB;">  
                                                                                                <br>
                                                                                                <label for="uzivatel">Poznámka:</label>
                                                                                                <textarea class="form-control" id="poznamka_text" name="poznamka_text" rows="4" maxlength="500" placeholder="Textová poznámka o délce max 500 znaků"></textarea>
                                                                                                <br>
                                                                                </div>
                                                        </div>





                <script src="./js/strachy.js"></script>

                <script>
                function myFunction_strachy() {
                var checkBox = document.getElementById("Moje_strachy");
                var text = document.getElementById("text_strach");
                if (checkBox.checked == true){
                text.style.display = "block";
                } else {
                text.style.display = "none";
                }
                }
                </script>


<h4 align="center">Ruce</h4>
        <div class="row">
        
                                <div class="col-sm-12" style="background-color:#e1f6f2;"> 
                                        <br>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Lymfa P - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="lymmfa_p_aktualni" value = "50/50" name="lymmfa_p_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Lymfa P - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="lymmfa_p_ocekavana" value = "50/50" name="lymmfa_p_ocekavana" maxlength="7" placeholder="50/50" >
                                        </div>
                                        <div class="col-sm-3">
                                         <label for="uzivatel">Lymfa L - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="lymmfa_l_aktualni" value = "50/50" name="lymmfa_l_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Lymfa L - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="lymmfa_l_ocekavana" value = "50/50" name="lymmfa_l_ocekavana" maxlength="7" placeholder="50/50" >
                                        </div>                             
                                </div>
        </div>                        
 <div class="row">
                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                        <br>  
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Plíce P - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="plice_p_aktualni" value = "50/50" name="plice_p_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Plíce P - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="plice_p_ocekavana" value = "50/50" name="plice_p_ocekavana" maxlength="7" placeholder="50/50" >
                                        </div>
                                        <div class="col-sm-3">
                                         <label for="uzivatel">Plíce L - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="plice_l_aktualni" value = "50/50" name="plice_l_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Plíce L - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="plice_l_ocekavana" value = "50/50" name="plice_l_ocekavana" maxlength="7" placeholder="50/50" >
                                        </div>                             
                                </div>
        </div>                        
 <div class="row">
                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                        <br>  
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Tlusté střevo P - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="tluste_strevo_p_aktualni" value = "50/50" name="tluste_strevo_p_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Tlusté střevo P - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="tluste_strevo_p_ocekavana" value = "50/50" name="tluste_strevo_p_ocekavana" maxlength="7" placeholder="50/50" >
                                        </div>
                                        <div class="col-sm-3">
                                         <label for="uzivatel">Tlusté střevo L - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="tluste_strevo_l_aktualni" value = "50/50" name="tluste_strevo_l_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Tlusté střevo L - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="tluste_strevo_l_ocekavana" value = "50/50" name="tluste_strevo_l_ocekavana" maxlength="7" placeholder="50/50" >
                                        </div>                             
                                </div>

        </div>                        
 <div class="row">                                
                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                        <br>  
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Nervová degenerace P - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="nervova_degenerace_p_aktualni" value = "50/50" name="nervova_degenerace_p_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Nervová degenerace P - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="nervova_degenerace_p_ocekavana" value = "50/50" name="nervova_degenerace_p_ocekavana" maxlength="7" placeholder="50/50" >
                                        </div>
                                        <div class="col-sm-3">
                                         <label for="uzivatel">Nervová degenerace L - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="nervova_degenerace_l_aktualni" value = "50/50" name="nervova_degenerace_l_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Nervová degenerace L - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="nervova_degenerace_l_ocekavana" value = "50/50" name="nervova_degenerace_l_ocekavana" maxlength="7" placeholder="50/50" >
                                        </div>                             
                                </div> 

        </div>                        
 <div class="row">                                
                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                        <br>  
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Obal srdce P - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="obal_srdce_p_aktualni" value = "50/50" name="obal_srdce_p_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Obal srdce P - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="obal_srdce_p_ocekavana" value = "50/50" name="obal_srdce_p_ocekavana" maxlength="7" placeholder="50/50" >
                                        </div>
                                        <div class="col-sm-3">
                                         <label for="uzivatel">Obal srdce L - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="obal_srdce_l_aktualni" value = "50/50" name="obal_srdce_l_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Obal srdce L - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="obal_srdce_l_ocekavana" value = "50/50" name="obal_srdce_l_ocekavana" maxlength="7" placeholder="50/50" >
                                        </div>                             
                                </div> 

        </div>                        
 <div class="row">                                
                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                        <br>  
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Alergie P - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="alergie_p_aktualni" value = "50/50" name="alergie_p_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Alergie P - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="alergie_p_ocekavana" value = "50/50" name="alergie_p_ocekavana" maxlength="7" placeholder="50/50" >
                                        </div>
                                        <div class="col-sm-3">
                                         <label for="uzivatel">Alergie L - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="alergie_l_aktualni" value = "50/50" name="alergie_l_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Alergie L - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="alergie_l_ocekavana" value = "50/50" name="alergie_l_ocekavana" maxlength="7" placeholder="50/50" >
                                        </div>                             
                                </div> 

        </div>                        
 <div class="row">                                
                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                        <br>  
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Orgánová degenerace P - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="organova_degenerace_p_aktualni" value = "50/50" name="organova_degenerace_p_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Orgánová degenerace P - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="organova_degenerace_p_ocekavana" value = "50/50" name="organova_degenerace_p_ocekavana" maxlength="7" placeholder="50/50" >
                                        </div>
                                        <div class="col-sm-3">
                                         <label for="uzivatel">Orgánová degenerace L - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="organova_degenerace_l_aktualni" value = "50/50" name="organova_degenerace_l_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Orgánová degenerace L - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="organova_degenerace_l_ocekavana" value = "50/50" name="organova_degenerace_l_ocekavana" maxlength="7" placeholder="50/50" >
                                        </div>                             
                                </div> 

        </div>                        
 <div class="row">                                
                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                        <br>  
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Tři ohřívače P - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="tri_ohrivace_p_aktualni" value = "50/50" name="tri_ohrivace_p_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Tři ohřívače P - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="tri_ohrivace_p_ocekavana" value = "50/50" name="tri_ohrivace_p_ocekavana" maxlength="7" placeholder="50/50" >
                                        </div>
                                        <div class="col-sm-3">
                                         <label for="uzivatel">Tři ohřívače L - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="tri_ohrivace_l_aktualni" value = "50/50" name="tri_ohrivace_l_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Tři ohřívače L - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="tri_ohrivace_l_ocekavana" value = "50/50" name="tri_ohrivace_l_ocekavana" maxlength="7" placeholder="50/50" >
                                        </div>                             
                                </div> 

        </div>                        
 <div class="row">                                
                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                        <br>  
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Srdce P - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="srdce_p_aktualni" value = "50/50" name="srdce_p_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Srdce P - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="srdce_p_ocekavana" value = "50/50" name="srdce_p_ocekavana" maxlength="7" placeholder="50/50" >
                                        </div>
                                        <div class="col-sm-3">
                                         <label for="uzivatel">Srdce L - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="srdce_l_aktualni" value = "50/50" name="srdce_l_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Srdce L - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="srdce_l_ocekavana" value = "50/50" name="srdce_l_ocekavana" maxlength="7" placeholder="50/50" >
                                        </div>                             
                                </div>

        </div>                        
 <div class="row">                                
                                <div class="col-sm-12" style="background-color:#e1f6f2;">
                                        <br>  
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Tenké střevo P - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="tenke_strevo_p_aktualni" value = "50/50" name="tenke_strevo_p_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Tenké střevo P - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="tenke_strevo_p_ocekavana" value = "50/50" name="tenke_strevo_p_ocekavana" maxlength="7" placeholder="50/50" >
                                        </div>
                                        <div class="col-sm-3">
                                         <label for="uzivatel">Tenké střevo L - aktuální</label>
                                         <input type="text" class="form-control form-control-sm" id="tenke_strevo_l_aktualni" value = "50/50" name="tenke_strevo_l_aktualni" maxlength="7" placeholder="50/50" >
                                        </div>
                                         <div class="col-sm-3">
                                         <label for="uzivatel">Tenké střevo L - očekávaná</label>
                                         <input type="text" class="form-control form-control-sm" id="tenke_strevo_l_ocekavana" value = "50/50" name="tenke_strevo_l_ocekavana" maxlength="7" placeholder="50/50" >
                                        <br>
                                        </div> 
                                                                 
                                </div>
        </div>


                       
       

 <h4 align="center">Nohy</h4>
        <div class="row">
                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                <br>  
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Slinivka/slezina P - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="slinivka_slezina_p_aktualni" value = "50/50" name="slinivka_slezina_p_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Slinivka/slezina P - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="slinivka_slezina_p_ocekavana" value = "50/50" name="slinivka_slezina_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Slinivka/slezina L - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="slinivka_slezina_l_aktualni" value = "50/50" name="slinivka_slezina_l_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Slinivka/slezina L - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="slinivka_slezina_l_ocekavana" value = "50/50" name="slinivka_slezina_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                </div> 
                                                                        
                                        </div>
        </div>

        <div class="row">
                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                <br>  
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Játra P - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="jatra_p_aktualni" value = "50/50" name="jatra_p_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Játra P - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="jatra_p_ocekavana" value = "50/50" name="jatra_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Játra L - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="jatra_l_aktualni" value = "50/50" name="jatra_l_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Játra L - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="jatra_l_ocekavana" value = "50/50" name="jatra_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                </div>                                                                         
                                        </div>
        </div>


        <div class="row">
                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                <br>  
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Kloubní degenerace P - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="kloubni_degenerace_p_aktualni" value = "50/50" name="kloubni_degenerace_p_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Kloubní degenerace P - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="kloubni_degenerace_p_ocekavana" value = "50/50" name="kloubni_degenerace_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Kloubní degenerace L - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="kloubni_degenerace_l_aktualni" value = "50/50" name="kloubni_degenerace_l_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Kloubní degenerace L - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="kloubni_degenerace_l_ocekavana" value = "50/50" name="kloubni_degenerace_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                </div>                                                                         
                                        </div>
        </div>


        <div class="row">
                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                <br>  
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Žaludek P - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="zaludek_p_aktualni" value = "50/50" name="zaludek_p_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Žaludek P - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="zaludek_p_ocekavana" value = "50/50" name="zaludek_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Žaludek L - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="zaludek_l_aktualni" value = "50/50" name="zaludek_l_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Žaludek L - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="zaludek_l_ocekavana" value = "50/50" name="zaludek_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                </div>                                                                         
                                        </div>
        </div>

        <div class="row">
                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                <br>  
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Vazivová degenerace P - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="vazivova_degenerace_p_aktualni" value = "50/50" name="vazivova_degenerace_p_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Vazivová degenerace P - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="vazivova_degenerace_p_ocekavana" value = "50/50" name="vazivova_degenerace_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Vazivová degenerace L - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="vazivova_degenerace_l_aktualni" value = "50/50" name="vazivova_degenerace_l_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Vazivová degenerace L - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="vazivova_degenerace_l_ocekavana" value = "50/50" name="vazivova_degenerace_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                </div>                                                                         
                                        </div>
        </div>


        <div class="row">
                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                <br>  
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Kůže P - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="kuze_p_aktualni" value = "50/50" name="kuze_p_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Kůže P - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="kuze_p_ocekavana" value = "50/50" name="kuze_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Kůže L - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="kuze_l_aktualni" value = "50/50" name="kuze_l_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Kůže L - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="kuze_l_ocekavana" value = "50/50" name="kuze_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                </div>                                                                         
                                        </div>
        </div>


        <div class="row">
                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                <br>  
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Tuková degenerace P - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="tukova_degenerace_p_aktualni" value = "50/50" name="tukova_degenerace_p_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Tuková degenerace P - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="tukova_degenerace_p_ocekavana" value = "50/50" name="tukova_degenerace_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Tuková degenerace L - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="tukova_degenerace_l_aktualni" value = "50/50" name="tukova_degenerace_l_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Tuková degenerace L - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="tukova_degenerace_l_ocekavana" value = "50/50" name="tukova_degenerace_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                </div>                                                                         
                                        </div>
        </div>


        <div class="row">
                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                <br>  
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Žlučník P - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="zlucnik_p_aktualni" value = "50/50" name="zlucnik_p_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Žlučník P - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="zlucnik_p_ocekavana" value = "50/50" name="zlucnik_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Žlučník L - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="zlucnik_l_aktualni" value = "50/50" name="zlucnik_l_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Žlučník L - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="zlucnik_l_ocekavana" value = "50/50" name="zlucnik_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                </div>                                                                         
                                        </div>
        </div>


        <div class="row">
                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                <br>  
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Ledviny P - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="ledviny_p_aktualni" value = "50/50" name="ledviny_p_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Ledviny P - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="ledviny_p_ocekavana" value = "50/50" name="ledviny_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Ledviny L - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="ledviny_l_aktualni" value = "50/50" name="ledviny_l_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Ledviny L - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="ledviny_l_ocekavana" value = "50/50" name="ledviny_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                </div>                                                                         
                                        </div>
        </div>

        <div class="row">
                                        <div class="col-sm-12" style="background-color:#e1eef6;">
                                                <br>  
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Močový měchýř P - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="mocovy_mechyr_p_aktualni" value = "50/50" name="mocovy_mechyr_p_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Močový měchýř P - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="mocovy_mechyr_p_ocekavana" value = "50/50" name="mocovy_mechyr_p_ocekavana" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Močový měchýř L - aktuální</label>
                                                <input type="text" class="form-control form-control-sm" id="mocovy_mechyr_l_aktualni" value = "50/50" name="mocovy_mechyr_l_aktualni" maxlength="7" placeholder="50/50" >
                                                </div>
                                                <div class="col-sm-3">
                                                <label for="uzivatel">Močový měchýř L - očekávaná</label>
                                                <input type="text" class="form-control form-control-sm" id="mocovy_mechyr_l_ocekavana" value = "50/50" name="mocovy_mechyr_l_ocekavana" maxlength="7" placeholder="50/50" >
                                                <br>        
                                                </div>                                                                         
                                        </div>
        </div>
 </form>
                <br>
                <button type="submit" class="btn btn-success btn-sm"  onclick="loadEav_plan_<?echo $uzivatel_id; ?>()">&nbsp;&nbsp;Uložit diagnostiku EAV&nbsp;&nbsp;</button>


<br>
        <script>
  function loadEav_plan_<?echo $uzivatel_id; ?>() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("diagnostika_eav_<?echo $uzivatel_id; ?>").innerHTML = this.responseText;
    }
  };       
  
  var prihlaseny_uzivatel = "<? echo $_SESSION['uzivatel_jmeno_session'].' '.$_SESSION['uzivatel_prijmeni_session']; ?>";
  var celkova_hodnota = document.diagnostika_eav_<?echo $uzivatel_id; ?>.celkova_hodnota.value;
  var v_jakych_rodinnych_pomerech_zijete = document.diagnostika_eav_<?echo $uzivatel_id; ?>.v_jakych_rodinnych_pomerech_zijete.value;
  var reakce_na_pocasi = document.diagnostika_eav_<?echo $uzivatel_id; ?>.reakce_na_pocasi.value;
  var reakce_na_mesicni_cyklus = document.diagnostika_eav_<?echo $uzivatel_id; ?>.reakce_na_mesicni_cyklus.value;
  var reakce_na_mesicni_cyklus_text = document.diagnostika_eav_<?echo $uzivatel_id; ?>.reakce_na_mesicni_cyklus_text.value;
  var casta_zizen = document.diagnostika_eav_<?echo $uzivatel_id; ?>.casta_zizen.value;





  

  let dataEav_plan = "uzivatel_id=<?echo $uzivatel_id; ?>";

                        alert("Uživatel ID: " + casta_zizen);








        
        
}
</script> 




<br><br><br>XXXXXXXXXXXXXXX<br>
</div>


