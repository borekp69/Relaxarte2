<h4>Zdraví</h4>                                                                                                                          
<form action="krok_04_ulozeni.php" method="post">

<? if ($stav !== 'odeslano'){ ?>

<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Operace</h4>
<div class="row">
    <div class="col-sm-12">
    <label for="uzivatel">Operace na vnitřních orgánech (orgán + rok):</label>
    <textarea class="form-control" id="operace_vnitrnich_organu" name="operace_vnitrnich_organu" placeholder="Uveďte operace vnitřních orgánů včetně roku, pokud víte." rows="4"></textarea>
    </div>
</div>

<br>
<div class="row">
    <div class="col-sm-12">
    <label for="uzivatel">Operace - páteř, kosti, klouby:</label>
    <textarea class="form-control" id="operace_pater_kosti_klouby" name="operace_pater_kosti_klouby" placeholder="Uveďte operace páteře, kostí a kloubů včetně roku, pokud víte." rows="4"></textarea>
    </div>
</div>


<br>
</div></div>

<br>

<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Úrazy</h4>
    <div class="row">
    <div class="col-sm-12">
    <label for="uzivatel">Úrazy (zlomeniny, pohmožděniny, pády na hlavu, kostrč) - rok úrazu a co se stalo:</label>
    <textarea class="form-control" id="urazy_zlomeniny" name="urazy_zlomeniny" placeholder="Uveďte úrazy (zlomeniny, pohmožděniny, pády na hlavu, kostrč) včetně roku a popisu události, pokud víte." rows="4"></textarea>
    </div>
</div>
<br>
</div></div>

<br>


<script src="./js/check_box.js"></script> 
<script src="./js/jencisla.js"></script> 

<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Pohybový aparát</h4>

<div class="row">
    <div class="col-sm-6" style="background-color:#DEDCDA;">
    <div class="checkbox">
    <label><input type="checkbox" name="pourazovy_stav" value="1">Poúrazový stav</label> 
    </div>
    </div>

    <div class="col-sm-6" style="background-color:#F9F69F;">
    <div class="checkbox">
    <label><input type="checkbox" name="pooperacni_stav" value="1">Pooperační stav</label> 
    </div>
    </div>
</div>
<br>


<div class="row">
    <div class="col-sm-2" style="background-color:#d6d6f9;">
    <div class="checkbox">
    <label><input type="checkbox" name="shermanova_nemoc" value="1">Shermanova nemoc</label> 
    </div>
    </div>

    <div class="col-sm-2" style="background-color:#d9f9d6;">
    <div class="checkbox">
    <label><input type="checkbox" name="skolioza" value="1">Skolióza</label> 
    </div>
    </div>

    <div class="col-sm-2" style="background-color:#99ddfc;">
    <div class="checkbox">
    <label><input type="checkbox" name="osteoporoza" value="1">Osteoporóza</label> 
    </div>
    </div>

    <div class="col-sm-2" style="background-color:#f9d7d6;">
    <div class="checkbox">
    <label><input type="checkbox" name="ploche_nohy" value="1">Ploché nohy</label> 
    </div>
    </div>
    
    <div class="col-sm-2" style="background-color:#e7e2d6;">
    <div class="checkbox">
    <label><input type="checkbox" name="hypermobilita" value="1">Hypermobilita</label> 
    </div>
    </div>    
    
    <div class="col-sm-2" style="background-color:#f9d6e8;">
    <div class="checkbox">
    <label><input type="checkbox" name="bechterev" value="1">Bechtěrev</label>    
    </div>
    </div>     

</div>
<br>


<div class="row">
    <div class="col-sm-2" style="background-color:#e8ecec;">
    <div class="checkbox">
    <label><input type="checkbox" name="artroza" value="1" id="artroza">Artróza</label> 
    </div>
    </div>

    <div class="col-sm-2" style="background-color:#d6e7f9;">
    <div class="checkbox">
    <label><input type="checkbox" name="artritida_revmatoidni" value="1" id="artritida_revmatoidni">Artritida revmatoidní</label> 
    </div>
    </div>


    <div class="col-sm-2" style="background-color:#99e6e6;">
    <div class="checkbox">
    <label><input type="checkbox" name="artritida_osteoartritida" value="1" id="artritida_osteoartritida">Artritida osteoartritida</label> 
    </div>
    </div>


      
    <div class="col-sm-3" style="background-color:#f4e9dd;">
    <div class="checkbox">
    <label><input type="checkbox" name="protruze" value="1" id="protruze">Výhřez plotének/Protruze</label> 
    </div>
    </div>
    
    <div class="col-sm-3" style="background-color:#faf27f;">
    <div class="checkbox">
    <label><input type="checkbox" name="bolesti_patere" value="1" id="bolesti_patere">Bolest v jakých částech</label> 
    </div>
    </div>    
</div>


<div class="row">
    <div class="col-sm-2" style="background-color:#e8ecec;">
        <div id="dvartroza" style="display: none">     

            <div class="checkbox">
            <label><input type="checkbox" name="artroza_krcni_pater" value="1">Krční páteř</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artroza_hrudni_pater" value="1">Hrudní páteř</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artroza_bederni_pater" value="1">Bederní páteř</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artroza_krizova_kost" value="1">Křížová kost</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artroza_kostrc" value="1">Kostrč</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artroza_ramena" value="1">Ramena</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artroza_lokty" value="1">Lokty</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artroza_zapesti" value="1">Zápěstí</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artroza_prsty_na_rukou" value="1">Prsty na rukou</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artroza_prsty_nanohou" value="1">Prsty na nohou</label> 
            </div>
    
            <div class="checkbox">
            <label><input type="checkbox" name="artroza_kycle" value="1">Kyčle</label> 
            </div>    
    
            <div class="checkbox">
            <label><input type="checkbox" name="artroza_kolena" value="1">Kolena</label> 
            </div>    
    
            <div class="checkbox">
            <label><input type="checkbox" name="artroza_kotniky" value="1">Kotníky</label> 
            </div>
        </div>
    </div>
   
 
 
 
 
    <div class="col-sm-2" style="background-color:#d6e7f9;"> 
        <div id="dvartritida_revmatoidni" style="display: none">        

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_revmatoidni_krcni_pater" value="1">Krční páteř</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_revmatoidni_hrudni_pater" value="1">Hrudní páteř</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_revmatoidni_bederni_pater" value="1">Bederní páteř</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_revmatoidni_krizova_kost" value="1">Křížová kost</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_revmatoidni_kostrc" value="1">Kostrč</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_revmatoidni_ramena" value="1">Ramena</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_revmatoidni_lokty" value="1">Lokty</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_revmatoidni_zapesti" value="1">Zápěstí</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_revmatoidni_prsty_na_rukou" value="1">Prsty na rukou</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_revmatoidni_prsty_nanohou" value="1">Prsty na nohou</label> 
            </div>
    
            <div class="checkbox">
            <label><input type="checkbox" name="artritida_revmatoidni_kycle" value="1">Kyčle</label> 
            </div>    
    
            <div class="checkbox">
            <label><input type="checkbox" name="artritida_revmatoidni_kolena" value="1">Kolena</label> 
            </div>    
    
            <div class="checkbox">
            <label><input type="checkbox" name="artritida_revmatoidni_kotniky" value="1">Kotníky</label> 
            </div>
        </div>  
    </div>



    <div class="col-sm-2" style="background-color:#99e6e6;"> 
        <div id="dvartritida_osteoartritida" style="display: none">        

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_osteoartritida_krcni_pater" value="1">Krční páteř</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_osteoartritida_hrudni_pater" value="1">Hrudní páteř</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_osteoartritida_bederni_pater" value="1">Bederní páteř</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_osteoartritida_krizova_kost" value="1">Křížová kost</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_osteoartritida_kostrc" value="1">Kostrč</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_osteoartritida_ramena" value="1">Ramena</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_osteoartritida_lokty" value="1">Lokty</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_rosteoartritida_zapesti" value="1">Zápěstí</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_osteoartritida_prsty_na_rukou" value="1">Prsty na rukou</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="artritida_osteoartritida_prsty_nanohou" value="1">Prsty na nohou</label> 
            </div>
    
            <div class="checkbox">
            <label><input type="checkbox" name="artritida_osteoartritida_kycle" value="1">Kyčle</label> 
            </div>    
    
            <div class="checkbox">
            <label><input type="checkbox" name="artritida_osteoartritida_kolena" value="1">Kolena</label> 
            </div>    
    
            <div class="checkbox">
            <label><input type="checkbox" name="artritida_osteoartritida_kotniky" value="1">Kotníky</label> 
            </div>
        </div>  
    </div>


    <div class="col-sm-3" style="background-color:#f4e9dd;"> 
        <div id="dvprotruze" style="display: none">        

            <div class="checkbox">
            <label><input type="checkbox" name="protruze_krcni_pater" value="1">Krční páteř</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="protruze_hrudni_pater" value="1">Hrudní páteř</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="protruze_bederni_pater" value="1">Bederní páteř</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="protruze_krizova_kost" value="1">Křížová kost</label> 
            </div>
            
            <div class="checkbox">
            <label><input type="checkbox" name="protruze_kostrc" value="1">Kostrč</label> 
            </div>
            
        </div>  
    </div>

    <div class="col-sm-3" style="background-color:#fafcca;"> 
        <div id="dvbolesti_patere" style="display: none">        

            <div class="checkbox">
            <label><input type="checkbox" name="bolesti_krcni_pater" value="1">Krční páteř</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="bolesti_hrudni_pater" value="1">Hrudní páteř</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="bolesti_bederni_pater" value="1">Bederní páteř</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="bolesti_krizova_kost" value="1">Křížová kost</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="bolesti_kostrc" value="1">Kostrč</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="bolesti_ramena" value="1">Ramena</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="bolesti_lokty" value="1">Lokty</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="bolesti_zapesti" value="1">Zápěstí</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="bolesti_prsty_na_rukou" value="1">Prsty na rukou</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="bolesti_prsty_nanohou" value="1">Prsty na nohou</label> 
            </div>
    
            <div class="checkbox">
            <label><input type="checkbox" name="bolesti_kycle" value="1">Kyčle</label> 
            </div>    
    
            <div class="checkbox">
            <label><input type="checkbox" name="bolesti_kolena" value="1">Kolena</label> 
            </div>    
    
            <div class="checkbox">
            <label><input type="checkbox" name="bolesti_kotniky" value="1">Kotníky</label> 
            </div>
        </div>  
    </div>


</div>    
    

<br>
<div class="row">
    <div class="col-sm-6">
    <label for="uzivatel">Činnost/poloha vyvolávající bolest:</label>
    <textarea class="form-control" id="poloha_vyvolavajici_bolest" name="poloha_vyvolavajici_bolest" placeholder="Uveďte činnost nebo polohu, vyvolávající bolest." rows="4"></textarea>
    </div>

    <div class="col-sm-6">
    <label for="uzivatel">Úlevová činnost/poloha:</label>
    <textarea class="form-control" id="poloha_ulevova" name="poloha_ulevova" placeholder="Uveďte úlevovou činnost nebo polohu." rows="4"></textarea>
    </div>
</div>
<br>



<div class="row">
    <div class="col-sm-12">
    <label for="uzivatel">Omezení při činnostech:</label>
    <textarea class="form-control" id="omezeni_pri_cinnostech" name="omezeni_pri_cinnostech" placeholder="Uveďte omezující činost." rows="4"></textarea>
    </div>
</div>
<br>

</div>
</div>




<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Alergie</h4>
<div class="row">
    <div class="col-sm-3" style="background-color:#f7e5e8;">
    <div class="checkbox">
    <label><input type="checkbox" name="alergie" value="1" id="alergie">Zobrazit typy alergií</label> 
    </div>
    
        <div id="dvalergie" style="display: none"> 
            <div class="checkbox">
            <label><input type="checkbox" name="alergie_pyl_jarni" value="1">Pyl jarní</label> 
            </div> 
            
            <div class="checkbox">
            <label><input type="checkbox" name="alergie_pyl_letni" value="1">Pyl letní</label> 
            </div>             

            <div class="checkbox">
            <label><input type="checkbox" name="alergie_pyl_podzimni" value="1">Pyl podzimní</label> 
            </div>
            
            <div class="checkbox">
            <label><input type="checkbox" name="alergie_plisne" value="1">Plísně</label> 
            </div>                               

            <div class="checkbox">
            <label><input type="checkbox" name="alergie_prach" value="1">Prach</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="alergie_peri" value="1">Peří</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="alergie_srst" value="1">Srst</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="alergie_roztoce" value="1">Roztoče</label> 
            </div>
            
            <div class="checkbox">
            <label><input type="checkbox" name="alergie_potraviny" value="1">Potraviny</label> 
            </div>            
            
            <div class="checkbox">
            <label><input type="checkbox" name="alergie_zvirata" value="1">Zvířata</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="alergie_leky" value="1">Léky</label> 
            </div>            
        </div>
    </div>

    <div class="col-sm-3" style="background-color:#deedd5;">
    <div class="checkbox">
    <label><input type="checkbox" name="alergie_projevy" value="1" id="alergie_projevy">Zobrazit projevy alergií:</label> 
    </div>
        <div id="dvalergie_projevy" style="display: none"> 
            <div class="checkbox">
            <label><input type="checkbox" name="alergie_projevy_tekouci_ryma" value="1">Tekoucí rýma</label> 
            </div> 
            
            <div class="checkbox">
            <label><input type="checkbox" name="alergie_projevy_intenzivni_kychani" value="1">Intenzivní kýchání</label> 
            </div>        
        
            <div class="checkbox">
            <label><input type="checkbox" name="alergie_projevy_krev_pri_smrkani" value="1">Krev při smrkání</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="alergie_projevy_hnisave_rymy" value="1">Hnisavé rýmy</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="alergie_projevy_kozni_projevy" value="1">Kožní projevy (ekzém, kopřivka)</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="alergie_projevy_svedeni_kuze" value="1">Svědění kůže</label> 
            </div>
            
            <div class="checkbox">
            <label><input type="checkbox" name="alergie_projevy_astma" value="1">Astma</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="alergie_projevy_bolesti_svalu" value="1">Bolesti svalů</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="alergie_projevy_bolesti_hlavy" value="1">Bolesti hlavy</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="alergie_projevy_nespavost" value="1">Nespavost</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="alergie_projevy_otekla_ocni_vicka" value="1">Oteklá oční víčka</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="alergie_projevy_svedeni_oci" value="1">Svědění očí</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="alergie_projevy_slzeni_oci" value="1">Slzení očí</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="alergie_projevy_kasel" value="1">Kašel</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="alergie_projevy_kompletni_unava" value="1">Kompletní únava</label> 
            </div>
        </div>    
    </div>
    </div>
</div>
</div>

<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Gynekologie</h4>
<div class="row">
    <div class="col-sm-3">
    <label for="uzivatel">Těhotenství v současné době?</label>
    <select class="form-control" id="tehotenstvi" name="tehotenstvi">
    <option value="normal">ano - normální těhotenství</option> 
    <option value="riziko">ano - rizikové těhotenství</option>
    <option value="ne">ne - nejsem těhotná</option> 
    </select>
    </div>

    <div class="col-sm-4">
    <label>Gynekologické problémy:</label>
    <div class="checkbox">
    <label><input type="checkbox" name="gynekologie" value="1" id="gynekologie">Zobrazit projevy gynekologických problémů:</label> 
    </div>
     
        <div id="dvgynekologie" style="display: none">
            <div class="checkbox">
            <label><input type="checkbox" name="gynekologie_porody" value="1">Porody</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="gynekologie_potraty" value="1">Potraty</label> 
            </div>

            <div class="checkbox">
            <label><input type="checkbox" name="gynekologie_sterilita" value="1">Sterilita</label> 
            </div>        
        
             <div class="checkbox">
            <label><input type="checkbox" name="gynekologie_vytoky" value="1">Výtoky</label> 
            </div>       

            <div class="checkbox">
            <label><input type="checkbox" name="gynekologie_cysty" value="1">Cysty</label> 
            </div>
            
            <div class="checkbox">
            <label><input type="checkbox" name="gynekologie_myomy" value="1">Myomy</label> 
            </div>            
                        
            <div class="checkbox">
            <label><input type="checkbox" name="gynekologie_zanety" value="1">Záněty</label> 
            </div>            

            <div class="checkbox">
            <label><input type="checkbox" name="gynekologie_infekce" value="1">Infekce</label> 
            </div>                      
        </div>
    </div>
</div>

    <div class="row">
    <div class="col-sm-3">
    <label>Menstruace:</label>
    <select class="form-control" id="zobrazmenstruace" name="menstruace">
    <option value="1">žádná</option> 
    <option value="2">nepravidelná</option>
    <option value="3">pravidelná</option> 
    </select>    
    </div>

    <div class="form-group" id="menstruaceFieldGroupDiv"> 
    <div class="col-sm-3">
    <label>Množství krve:</label>
    <select class="form-control" id="mnozstvi_krve" name="mnozstvi_krve">
    <option value="1">mnoho</option> 
    <option value="2">středně</option>
    <option value="3">málo</option> 
    </select>    
    </div>    
        <div class="col-sm-2">
    <label>Délka menstruace:</label>    
    <input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" name="delka_menstruace" maxlength="2" value = "" placeholder="Uveďte počet dní.">
    </div>
    <div class="col-sm-4">
    <label>Bolesti během menstruace:</label>    
    <textarea class="form-control" id="bolesti_behem_menstruace" name="bolesti_behem_menstruace" placeholder="Uveďte bolesti během menstruace." rows="1" maxlength="100"></textarea>
    </div>
     </div>

     <script>
    $("#zobrazmenstruace").change(function() {
    if ($(this).val() != "1") {
    $('#menstruaceFieldGroupDiv').show();
    $('#menstruace').attr('required', '');
    $('#covid').attr('data-error', 'This field is required.');
 
      } else {
    $('#menstruaceFieldGroupDiv').hide();
    $('#menstruace').removeAttr('required');
    $('#menstruace').removeAttr('data-error');
    }
    });
    $("#zobrazmenstruace").trigger("change");     
     </script>
    </div>
    <br>
</div>
</div>


<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Imunita</h4>
    <div class="col-sm-4">
    <div class="checkbox">
    <label><input type="checkbox" name="imunita" value="1" id="imunita">Zobrazit typy problémů s imunitním systémem:</label> 
    </div>
    <div id="dvimunita" style="display: none">
    <div class="checkbox">
    <label><input type="checkbox" name="imunita_autoimunita" value="1">Autoimunita</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="imunita_opakovane_virozy_chripky" value="1">Opakované virózy/chřipky</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="imunita_snizena_imunita" value="1">Snížená imunita</label> 
    </div>

    </div>
    </div>
</div>
</div>



<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Infekce</h4>
    <div class="col-sm-4">
    <div class="checkbox">
    <label><input type="checkbox" name="infekce" value="1" id="infekce">Zobrazit typ problémů:</label> 
    </div>
    <div id="dvinfekce" style="display: none">

    <div class="checkbox">
    <label><input type="checkbox" name="infekce_encefalitida" value="1">Encefalitida</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="infekce_meningitida" value="1">Meningitida</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="infekce_borelioza" value="1">Borelióza</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="infekce_infekcni_hepatitida" value="1">Infekční hepatitida</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="infekce_mononukleoza" value="1">Mononukleoza</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="infekce_chlamydie" value="1">Chlamýdie</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="infekce_cmv" value="1">CMV</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="infekce_hpv" value="1">HPV</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="infekce_streptokok" value="1">Streptokok</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="infekce_stafylokok" value="1">Stafylokok</label> 
    </div>
    </div>
    </div>
</div>
</div>


<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Interna - gastro</h4>
    <div class="col-sm-4">
    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro" value="1" id="interna_gastro">Zobrazit typ problémů:</label> 
    </div>
    <div id="dvinterna_gastro" style="display: none">
    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_problemy_se_zlucnikem" value="1">Problémy se žlučníkem/žlučovými cestami</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_bolesti_zlucniku" value="1">Bolesti žlučníku</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_zlucove_kameny" value="1">Žlučové kameny</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_problemy_se_slinivkou" value="1">Problémy se slinivkou</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_postizeni_jater" value="1">Postižení jater</label> 
    </div>    

    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_zácpy" value="1">Zácpy</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_prujmy" value="1">Průjmy</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_strevni_koliky" value="1">Střevní koliky</label> 
    </div>

    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_daveni," value="1">Dávení</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_zvraceni" value="1">Zvracení</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_nadymani" value="1">Nadýmání</label> 
    </div>

    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_strevni_polypy" value="1">Střevní polypy</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_zanety_strev" value="1">Záněty střev</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_zaludecni_vredy" value="1">Zaludeční vředy</label> 
    </div>

    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_bolesti_zaludku" value="1">Bolesti žaludku</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_divertikly" value="1">Divertikly</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_crohnova_nemoc" value="1">Crohnova nemoc</label> 
    </div>

    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_branicní_kyla" value="1">Brániční kýla</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_triselna_kyla" value="1">Tříselná kýla</label> 
    </div>                                                 
    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_pupecni_kyla" value="1">Pupeční kýla</label> 
    </div>

    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_brisni_kyla" value="1">Břišní kýla</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_paleni_zahy" value="1">Pálení žáhy</label> 
    </div>                                                 
    <div class="checkbox">
    <label><input type="checkbox" name="interna_gastro_reflux" value="1">Reflux</label> 
    </div>
    </div>    
    </div>
</div>
</div>


<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Interna - srdce a cévy</h4>
    <div class="col-sm-4">
    <div class="checkbox">
    <label><input type="checkbox" name="interna_srdce_cevy" value="1" id="interna_srdce_cevy">Zobrazit typ problémů:</label> 
    </div>
    <div id="dvinterna_srdce_cevy" style="display: none">
    <div class="checkbox">
    <label><input type="checkbox" name="interna_srdce_cevy_arytmie" value="1">Arytmie</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="interna_srdce_cevy_hypertenze" value="1">Hypertenze</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="interna_srdce_cevy_varixy" value="1">Varixy</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="interna_srdce_cevy_ichs_ev_angina_pectoris" value="1">ICHS ev. angina pectoris</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="interna_srdce_cevy_infarkty" value="1">Infarkty</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="interna_srdce_cevy_blize_nespecifkovane_buseni_srdce" value="1">Blíže nespecifkované bušení srdce</label> 
    </div>
    </div>
    </div>
</div>
</div>


<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Kožní</h4>
    <div class="col-sm-4">
    <div class="checkbox">
    <label><input type="checkbox" name="kozni" value="1" id="kozni">Zobrazit typy kožních problémů:</label> 
    </div>
    <div id="dvkozni" style="display: none">
    <div class="checkbox">
    <label><input type="checkbox" name="kozni_atopicky_ekzem" value="1">Atopický ekzém</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="kozni_seboroicka_dermatitida" value="1">Seboroická dermatitida</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="kozni_lupenka" value="1">Lupénka</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="kozni_lupy" value="1">Lupy</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="kozni_koprivka" value="1">Kopřivka</label> 
    </div>    
    
    </div>    
    </div>
</div>
</div>

<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Neurologie</h4>
    <div class="col-sm-4">
    <div class="checkbox">
    <label><input type="checkbox" name="neurologie" value="1" id="neurologie">Zobrazit typy neurologických problémů:</label> 
    </div>
    <div id="dvneurologie" style="display: none">
    <div class="checkbox">
    <label><input type="checkbox" name="neurologie_komoce" value="1">Komoce</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="neurologie_vertigo" value="1">Vertigo</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="neurologie_cephalea" value="1">Cephalea</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="neurologie_migreny" value="1">Migrény</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="neurologie_VAS_pater_syndromy)" value="1">VAS (páteř - syndromy)</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="neurologie_epilepsie" value="1">Epilepsie</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="neurologie_alzheimer" value="1">Alzheimer</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="neurologie_parkinson" value="1">Parkinson</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="neurologie_tres_rukou" value="1">Třes rukou</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="neurologie_neuropatie_pri_diabetes" value="1">Neuropatie při diabetes</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="neurologie_hepatopatie" value="1">Hepatopatie</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="neurologie_brneni" value="1">Brnění</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="neurologie_necitlivost_koncetin" value="1">Necitlivost končetin</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="neurologie_karpal" value="1">Karpál</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="neurologie_opakovane_blize_nespecifikovane_bolesti_hlavy" value="1">Opakované blíže nespecifikované bolesti hlavy</label> 
    </div>
    </div>    
    </div>
</div>
</div>

<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Oční</h4>
    <div class="col-sm-4">
    <div class="checkbox">
    <label><input type="checkbox" name="ocni" value="1" id="ocni">Zobrazit typy očních problémů:</label> 
    </div>
    <div id="dvocni" style="display: none">
    <div class="checkbox">
    <label><input type="checkbox" name="ocni_kratkozrakost" value="1">Krátkozrakost</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="ocni_dalekozrakost" value="1">Dalekozrakost</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="ocni_ocni_zakal" value="1">Oční zákal</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="ocni_cerne_tecky_pred_ocima" value="1">Černé tečky před očima</label> 
    </div>     
    <div class="checkbox">
    <label><input type="checkbox" name="ocni_bolesti_za_ocima" value="1">Bolesti za očima</label> 
    </div>    
    <div class="checkbox">
    <label><input type="checkbox" name="ocni_ekzemy_kolem_oci" value="1">Ekzémy kolem očí</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="ocni_zanety_vicek" value="1">Záněty víček</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="ocni_opakovana_jecna_vlci_zrna" value="1">Opakovaná ječná/vlčí zrna</label> 
    </div>
    </div>
    </div>
</div>
</div>


<br>
<div class="row">
    <div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Onkologie</h4>
    <div class="row">
    <div class="col-sm-12">
    <label for="uzivatel">Uveďte prodělaná/léčená onkologická onemocnění</label>
    <textarea class="form-control" id="onkologie" name="onkologie" placeholder="Uveďte orgán a rok, pokud víte." rows="4"></textarea>
    </div>
    </div>
    <br>
    </div>
</div>


<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>ORL</h4>
    <div class="col-sm-4">
    <div class="checkbox">
    <label><input type="checkbox" name="orl" value="1" id="orl">Zobrazit typy ORL problémů:</label> 
    </div>
    <div id="dvorl" style="display: none">
    <div class="checkbox">
    <label><input type="checkbox" name="orl_ztrata_sluchu_na_jednom_uchu" value="1">Ztráta sluchu na jednom uchu</label> 
    </div>  
    <div class="checkbox">
    <label><input type="checkbox" name="orl_ztrata_sluchu_obe_usi" value="1">Ztráta sluchu obě uši</label> 
    </div>  
    <div class="checkbox">
    <label><input type="checkbox" name="orl_opakovane_zanety_stredousi" value="1">Opakované záněty středouší</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="orl_pocit_zalehlosti_usi" value="1">Pocit zalehlosti uší</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="orl_huceni_v_usich" value="1">Hučení v uších</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="orl_piskani_v_usich" value="1">Pískání v uších</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="orl_opakovane_zanety_dutin" value="1">Opakované záněty dutin</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="orl_polypy_v_dutinach" value="1">Polypy v dutinách</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="orl_suchost_dutin" value="1">Suchost dutin (nemožnost smrkat)</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="orl_smrkani_krve" value="1">Smrkání krve</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="orl_hnisave_rymy" value="1">Hnisavé rýmy</label> 
    </div>
    </div>
    </div>
</div>
</div>



<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Psychika</h4>
<div class="row">
    <div class="col-sm-4">
    <label for="uzivatel">Léčil/a jste se někdy na psychiatrii?</label>
    <select class="form-control" id="psychiatrie_leceni" name="psychiatrie_leceni">
    <option value="ano">ano - léčil/a</option> 
    <option value="ne">ne - neléčil/a</option>
    </select>
    </div>

    <div class="col-sm-5">
    <label for="uzivatel">Zhoršuje se Váš stav v závislosti na změně počasí?</label>
    <select class="form-control" id="zmena_pocasi" name="zmena_pocasi">
    <option value="ano">ano - zhoršuje</option> 
    <option value="ne">ne - nezhoršuje</option>
    </select>
    </div>


    <div class="col-sm-3">
    <label>Psychické problémy:</label>
    <div class="checkbox">
    <label><input type="checkbox" name="psychika" value="1" id="psychika">Zobrazit typy problémů:</label> 
    </div>
     
        <div id="dvpsychika" style="display: none">
            <div class="checkbox">
            <label><input type="checkbox" name="psychika_deprese" value="1">Deprese</label> 
            </div>
            
            <div class="checkbox">
            <label><input type="checkbox" name="psychika_nervozita" value="1">Nervozita</label> 
            </div>        
        
             <div class="checkbox">
            <label><input type="checkbox" name="psychika_nespavost" value="1">Nespavost</label> 
            </div>       

            <div class="checkbox">
            <label><input type="checkbox" name="psychika_nadmerne_poceni" value="1">Nadměrné pocení</label> 
            </div>
            
            <div class="checkbox">
            <label><input type="checkbox" name="psychika_unavovy_syndrom" value="1">Únavový syndrom</label> 
            </div>
                    </div>
    </div>
</div>
<br>
</div>
</div>


<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Respirační systém</h4>
    <div class="col-sm-4">
    <div class="checkbox">
    <label><input type="checkbox" name="respiracni_system" value="1" id="respiracni_system">Zobrazit typy respiračích problémů:</label> 
    </div>
    <div id="dvrespiracni_system" style="display: none">
    <div class="checkbox">
    <label><input type="checkbox" name="respiracni_system_astma" value="1">Astma</label> 
    </div>  
    <div class="checkbox">
    <label><input type="checkbox" name="respiracni_system_opakovane_pneumonie" value="1">Opakované pneumonie</label> 
    </div>  
    <div class="checkbox">
    <label><input type="checkbox" name="respiracni_system_zanety_prudusek" value="1">Záněty průdušek</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="respiracni_system_laryngytida" value="1">Laryngytida</label> 
    </div>    
    </div>
    </div>
</div>
</div>




<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Stomatologie</h4>
    <div class="col-sm-4">
    <div class="checkbox">
    <label><input type="checkbox" name="stomatologie" value="1" id="stomatologie">Zobrazit typy stomatologických problémů:</label> 
    </div>
    <div id="dvstomatologie" style="display: none">
    <div class="checkbox">
    <label><input type="checkbox" name="stomatologie_vysoka_kazivost_zubu" value="1">Vysoká kazivost zubů</label> 
    </div>  
    <div class="checkbox">
    <label><input type="checkbox" name="stomatologie_krvaceni_dasni" value="1">Krvácení dásní</label> 
    </div>  
    <div class="checkbox">
    <label><input type="checkbox" name="stomatologie_paradentoza" value="1">Paradentóza</label> 
    </div>
     </div>
    </div>
</div>
</div>

<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Urologie</h4>
    <div class="col-sm-4">
    <div class="checkbox">
    <label><input type="checkbox" name="urologie" value="1" id="urologie">Zobrazit typy urologických problémů:</label> 
    </div>
    <div id="dvurologie" style="display: none">
    <div class="checkbox">
    <label><input type="checkbox" name="urologie_infekce_mocovych_cest" value="1">Infekce močových cest</label> 
    </div> 
    <div class="checkbox">
    <label><input type="checkbox" name="urologie_infekce_ledvin" value="1">Infekce ledvin</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="urologie_kameny" value="1">Kameny</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="urologie_vady" value="1">Vady</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="urologie_zvetseni_prostaty" value="1">Zvětšení prostaty</label> 
    </div>    
    </div>
    </div>
</div>
</div>


<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Žlázy s vnitřní sekrecí + metabolické choroby</h4>
    <div class="col-sm-4">
    <div class="checkbox">
    <label><input type="checkbox" name="zlazy_s_vnitrni_sekreci" value="1" id="zlazy_s_vnitrni_sekreci">Zobrazit typy problémů:</label> 
    </div>
    <div id="dvzlazy_s_vnitrni_sekreci" style="display: none">
    <div class="checkbox">
    <label><input type="checkbox" name="zlazy_s_vnitrni_sekreci_hypotyreoza" value="1">Hypotyreoza</label> 
    </div> 
    <div class="checkbox">
    <label><input type="checkbox" name="zlazy_s_vnitrni_sekreci_hypertyreoza" value="1">Hypertyreoza</label> 
    </div>  
    <div class="checkbox">
    <label><input type="checkbox" name="zlazy_s_vnitrni_sekreci_cukrovka_1_stupen" value="1">Cukrovka 1. stupeň</label> 
    </div>  
    <div class="checkbox">
    <label><input type="checkbox" name="zlazy_s_vnitrni_sekreci_cukrovka_2_stupen" value="1">Cukrovka 2. stupeň</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="zlazy_s_vnitrni_sekreci_neuropatie" value="1">Neuropatie</label> 
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="zlazy_s_vnitrni_sekreci_dna" value="1">Dna</label> 
    </div>    
    </div>
    </div>
</div>
</div>




<br>
<div class="row">
    <div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Medikace</h4>
    <div class="row">
    <div class="col-sm-12">
    <label for="uzivatel">Užívané léky klasické medicíny?</label>
    <textarea class="form-control" id="leky_klasicke_mediciny" name="leky_klasicke_mediciny" placeholder="Uveďte léky klasické medicíny které užívate." rows="4"></textarea>
    </div>
    </div>
    <br>
    </div>
</div>


<br>

<div class="row">
    <div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Užívané léky alternativní medicíny (akupunktura, homeopatika, EPAM, TČM, ostatní)</h4><br>
       
        <div class="row">  
        <div class="col-sm-4" style="background-color:#ffeecc;"><br>
        <label>Chodíte na akupunkturu?</label>
        <div class="checkbox">
        <label><input type="checkbox" name="akupunktura" value="1" id="akupunktura">Ano</label> 
        </div>        
        </div>
        
        <div class="col-sm-4" style="background-color:#e6f2ff;"><br>
        <label>Chodíte na plazmu?</label>
        <div class="checkbox">
        <label><input type="checkbox" name="plazma" value="1" id="plazma">Ano</label> 
        </div>        
        </div>

        <div class="col-sm-4" style="background-color:#e6fff2;"><br>
        <label>Absolvoval/a jste vyšetření EAV?</label>
        <div class="checkbox">
        <label><input type="checkbox" name="eav" value="1" id="eav">Ano</label> 
        </div>        
        </div>
        </div>
        
        <div class="row">
        <div class="col-sm-5" style="background-color:#f7f6e4;"><br>
        <label>Užíváte některé produkty EPAM?</label>
        <div class="checkbox">
        <label><input type="checkbox" name="epam" value="1" id="epam">Zobrazit EPAM produkty:</label> 
        </div>
        <div id="dvepam" style="display: none">  
        <?      
        require $_SERVER['DOCUMENT_ROOT']."/db/cz_en_name_epam.php";
        require $_SERVER['DOCUMENT_ROOT']."/db/pripojeni_databaze.php";
        $sql = "SELECT epam_id, epam_nazev, epam_typ, epam_podtyp FROM epam ORDER BY epam_nazev ASC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
        $epam_nazev = $row["epam_nazev"]; 
        $malaPismena = $row["epam_nazev"];    
        $malaPismena = strtr($malaPismena, $prevodni_tabulka);
        $malaPismena = strtolower($malaPismena);
        $epam_name =(str_replace(" ","_",$malaPismena));
        $epam_name = $row["epam_id"].'_'.$epam_name;
        $epam_typ = $row["epam_typ"];
        $epam_podtyp = $row["epam_podtyp"];  
        ?>
        <div class="checkbox">
        <label><input type="checkbox" name="<? echo $epam_name;?>" value="1"><? echo $epam_nazev.'&nbsp;-&nbsp;'.$epam_typ.'&nbsp;-&nbsp;<b>'.$epam_podtyp.'</b>';?></label> 
        </div>
        <?          }
        $conn->close(); 
        ?>
        </div>
        </div>
        
  
        <div class="col-sm-7" style="background-color:#F9DB9F;"><br>
        <label>Užíváte některé produkty Tradiční čínské medicíny (TČM)?</label>
        <div class="checkbox">
        <label><input type="checkbox" name="tcm" value="1" id="tcm">Zobrazit TČM přípravky:</label> 
        </div>
        <div id="dvtcm" style="display: none">  
        <?      
        require $_SERVER['DOCUMENT_ROOT']."/db/cz_en_name_epam.php";
        require $_SERVER['DOCUMENT_ROOT']."/db/pripojeni_databaze.php";
        $sql = "SELECT tcm_id, tcm_nazev, tcm_kod FROM tcm ORDER BY tcm_nazev ASC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
        $tcm_nazev = trim($row["tcm_nazev"]);
        $malaPismena = $row["tcm_nazev"];
        $malaPismena = trim($malaPismena);
        $malaPismena = strtr($malaPismena, $prevodni_tabulka);
        $malaPismena = strtolower($malaPismena);
        $tcm_name = trim($tcm_name);
        $tcm_name =(str_replace(" ","_",$malaPismena));
        $tcm_name =(str_replace("-","#",$tcm_name));
        $tcm_name =(str_replace("_#_","_",$tcm_name));
        $tcm_name = $row["tcm_id"].'_'.$tcm_name;
        $tcm_kod = $row["tcm_kod"];
        ?>
        <div class="checkbox">
        <label><input type="checkbox" name="<? echo $tcm_name;?>" value="1"><? echo $tcm_nazev.'&nbsp;-&nbsp;<b>'.$tcm_kod.'</b>';?></label> 
        </div>
        <?          }
        $conn->close(); 
        ?>
        </div>
        </div>        
        </div>
           


        <div class="row">
        <div class="col-sm-4" style="background-color:#cceeff;"><br>
        <label>Užíváte některé homeopatické přípravky?</label>
        <div class="checkbox">
        <label><input type="checkbox" name="homeopatika" value="1" id="homeopatika">Zobrazit homeopatické přípravky:</label> 
        </div>
        <div id="dvhomeopatika" style="display: none">
        <?      
        require $_SERVER['DOCUMENT_ROOT']."/db/cz_en_name_epam.php";
        require $_SERVER['DOCUMENT_ROOT']."/db/pripojeni_databaze.php";
        $sql = "SELECT homeopatika_id, homeopatika_nazev_pripravku FROM homeopatika ORDER BY homeopatika_nazev_pripravku ASC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
        $homeopatika_nazev = trim($row["homeopatika_nazev_pripravku"]);
        $malaPismena = $row["homeopatika_nazev_pripravku"];
        $malaPismena = trim($malaPismena);
        $malaPismena = strtr($malaPismena, $prevodni_tabulka);
        $malaPismena = strtolower($malaPismena);
        $homeopatika_name = trim($homeopatika_name);
        $homeopatika_name =(str_replace(" ","_",$malaPismena));
        $homeopatika_name =(str_replace("-","#",$homeopatika_name));
        $homeopatika_name =(str_replace("_#_","_",$homeopatika_name));
        $homeopatika_name = $row["homeopatika_id"].'_'.$homeopatika_name; 
        ?>
        <div class="checkbox">
        <label><input type="checkbox" name="<? echo $homeopatika_name;?>" value="1"><? echo $homeopatika_nazev;?></label> 
        </div>
        <?          }
        $conn->close(); 
        ?>       
        </div>            
        </div>

        <div class="col-sm-4" style="background-color:#b3ffcc;"><br>
        <label>Užíváte některé houbové přípravky?</label>
        <div class="checkbox">
        <label><input type="checkbox" name="houby" value="1" id="houby">Zobrazit houbové přípravky:</label> 
        </div>
        <div id="dvhouby" style="display: none">
        <?      
        require $_SERVER['DOCUMENT_ROOT']."/db/cz_en_name_epam.php";
        require $_SERVER['DOCUMENT_ROOT']."/db/pripojeni_databaze.php";
        $sql = "SELECT houby_id, houby_nazev, houby_podtyp FROM houby ORDER BY houby_nazev ASC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
        $houby_podtyp = $row["houby_podtyp"];
        $houby_nazev = trim($row["houby_nazev"]);
        $malaPismena = $row["houby_nazev"];
        $malaPismena = trim($malaPismena);
        $malaPismena = strtr($malaPismena, $prevodni_tabulka);
        $malaPismena = strtolower($malaPismena);
        $houby_name = trim($houby_name);
        $houby_name =(str_replace(" ","_",$malaPismena));
        $houby_name =(str_replace("-","#",$houby_name));
        $houby_name =(str_replace("_#_","_",$houby_name));
        $houby_name = $row["houby_id"].'_'.$houby_name; 
        ?>
        <div class="checkbox">
        <label><input type="checkbox" name="<? echo $houby_name;?>" value="1"><? echo $houby_podtyp.'&nbsp;'. $houby_nazev;?></label> 
        </div>
        <?          }
        $conn->close(); 
        ?>       
        </div>            
        </div>

        <div class="col-sm-4" style="background-color:#e6e6ff;"><br>
        <label>Užíváte některé jiné přípravky?</label>
        <div class="checkbox">
        <label><input type="checkbox" name="inpharm" value="1" id="inpharm">Zobrazit ostatní přípravky:</label> 
        </div>
        <div id="dvinpharm" style="display: none">
        <?      
        require $_SERVER['DOCUMENT_ROOT']."/db/cz_en_name_epam.php";
        require $_SERVER['DOCUMENT_ROOT']."/db/pripojeni_databaze.php";
        $sql = "SELECT inpharm_id, inpharm_nazev, inpharm_podtyp FROM inpharm ORDER BY inpharm_nazev ASC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
        $inpharm_podtyp = $row["inpharm_podtyp"];
        $inpharm_nazev = trim($row["inpharm_nazev"]);
        $malaPismena = $row["inpharm_nazev"];
        $malaPismena = trim($malaPismena);
        $malaPismena = strtr($malaPismena, $prevodni_tabulka);
        $malaPismena = strtolower($malaPismena);
        $inpharm_name = trim($inpharm_name);
        $inpharm_name =(str_replace(" ","_",$malaPismena));
        $inpharm_name =(str_replace("-","#",$inpharm_name));
        $inpharm_name =(str_replace("_#_","_",$inpharm_name));
        $inpharm_name = $row["inpharm_id"].'_'.$inpharm_name; 
        ?>
        <div class="checkbox">
        <label><input type="checkbox" name="<? echo $inpharm_name;?>" value="1"><? echo $inpharm_podtyp.'&nbsp;'. $inpharm_nazev;?></label> 
        </div>
        <?          }
        $conn->close(); 
        ?>       
        </div>            
        </div>
      
        
        </div>             
</div>
</div>


<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Strava a pitný režim</h4>
<div class="row">
    <div class="col-sm-4">
    <label for="uzivatel">Pitný režim - kolik l denně vypijete?</label>
    <select class="form-control" id="pitny_rezim" name="pitny_rezim">
    <option value="0">do 0,5 litru</option> 
    <option value="0">do 1 litru</option>
    <option value="0">do 1,5 litru</option> 
    <option value="0">do 2 litrů</option>
    <option value="0">více než 2 litry</option>             
    </select>
    </div>
    
    <div class="col-sm-3">
    <label for="uzivatel">Kolikrát denně jíte?</label>
    <select class="form-control" id="jidlo" name="jidlo">
    <option value="0">1x denně</option> 
    <option value="0">2x denně</option> 
    <option value="0">3x denně</option> 
    <option value="0">4x denně</option>
    <option value="0">5x denně</option> 
    <option value="0">6x denně</option>                     
    <option value="0">více než 6x denně</option>
    <option value="0">nepravidelně</option>      
    </select>
    </div>    
</div>
<br>
</div>
</div>



<br>
<div class="row">
<div class="col-sm-12" style="background-color:#E0E0E0;">
<h4>Spánek</h4>
<div class="row">

    <div class="col-sm-2">
    <label for="uzivatel">Zdají se mi sny:</label>
    <select class="form-control" id="spanek_sny" name="spanek_sny">
    <option value="1">Ano</option> 
    <option value="2">Ne</option>
    <option value="3">mám noční můry</option> 
    </select>
    </div>

    <div class="col-sm-2">
    <label for="uzivatel">Délka spánku:</label>
    <input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" name="spanek_delka" maxlength="2" value = "" placeholder="Průměrně hodin" required>
    </div>

    <div class="col-sm-3">
    <label for="uzivatel">V kolik se běžně budíte:</label>
    <input type="text" class="form-control form-control-sm" name="spanek_buzeni" maxlength="10" value = "" placeholder="Uveďte čas" required>
    </div>





    <div class="col-sm-3">
    <label for="uzivatel">Kvalita spánku:</label>
    <select class="form-control" id="zobrazspanek" name="spanek_kvalita">
    <option value="1">Budím se odpočatý</option> 
    <option value="2">Budím se unavený</option>
    <option value="3">Budím se v průběhu noci</option> 
    </select>
    </div>

    <div class="col-sm-2">
    <div class="form-group" id="spanekFieldGroupDiv">
    <label for="uzivatel">V kolik hodin?</label>
    <input type="text"  class="form-control form-control-sm" name="spanek_v_kolik_hodin" maxlength="6" placeholder="Uveďte čas">
    </div> 
    </div>
    <script src="./js/spanek.js"></script>





</div>
<br>
</div>
</div>










    <br>
<div class="row">
    <div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>COVID-19</h4>    
    <div class="row">
    <div class="col-sm-3">
    <label for="uzivatel">Jsem očkován/a na COVID-19</label>
    <select class="form-control" id="covid_ockovani" name="covid_ockovani">
    <option value="0">Ne</option> 
    <option value="1">Ano</option>
    </select>
    </div>

    <div class="col-sm-3">
    <label for="uzivatel">Prodělal/a jsem nemoc COVID-19</label>
    <select class="form-control" id="zobrazcovid" name="covid_nemoc">
    <option value="0">Ne</option> 
    <option value="1">Ano</option>
    </select>
    </div>

    <div class="col-sm-3">
    <div class="form-group" id="covidFieldGroupDiv"> 
    <label for="uzivatel">Průběh nemoci COVID-19</label>
    <select class="form-control" id="covid_prubeh" name="covid_prubeh">
    <option value="1">bezpříznakový</option> 
    <option value="2">lehký</option>
    <option value="3">střední</option> 
    <option value="4">těžký</option>
    </select>
    </div>
    </div>
    </div>
    <br>
    </div>
     <script>
    $("#zobrazcovid").change(function() {
    if ($(this).val() == "1") {
    $('#covidFieldGroupDiv').show();
    $('#covid').attr('required', '');
    $('#covid').attr('data-error', 'This field is required.');
 
      } else {
    $('#covidFieldGroupDiv').hide();
    $('#covid').removeAttr('required');
    $('#covid').removeAttr('data-error');
    }
    });
    $("#zobrazcovid").trigger("change");     
     </script>    
</div>



    <br>
<div class="row">
    <div class="col-sm-12" style="background-color:#E0E0E0;">
    <h4>Které  onemocnění Vás nejvíce obtěžuje?</h4>
    <div class="row">
    <div class="col-sm-12">
    <textarea class="form-control" id="dve_onemocneni" name="dve_onemocneni" placeholder="Vyberte maximálně dvě onemocnění, které potřebujete vyřešit." rows="2"></textarea>
    </div>
    </div>
    <br>
    </div>
</div>
<br>









                <?
 // --------------------  Ověření formuláře -------------
               }else{ 
               ?>
               
               
               
        <? } ?> 
  <br>
  <input type="hidden" id="stav" name="stav" value="odeslano">
  <? $uzivatel_id = encrypt_decrypt('encrypt', $uzivatel_id); ?>
  <input type="hidden" id="uzivatel_id"  name="uzivatel_id" value="<? echo $uzivatel_id; ?>"> 
  <br>
  <center><button type="submit" class="btn btn-success">&nbsp;<span class="glyphicon glyphicon-save"></span>&nbsp;&nbsp;Uložit&nbsp;&nbsp;</button></center>
  </form> 
  <br><br>                  