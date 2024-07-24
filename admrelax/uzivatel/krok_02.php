<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php'; ?>
<h4>Sport a pohyb</h4>                                                                                                                          
<form action="krok_02_ulozeni.php" method="post">

<? if ($stav !== 'odeslano'){ ?>

<div class="row">
    <div class="col-sm-12" style="background-color:#f6e9cd;">
    <label for="uzivatel">Sportovní a pohybové aktivity:</label> 
    <? require "pripojeni_databaze.php";
    $sql = "SELECT * FROM seznam WHERE seznam_cislo = '4' ORDER BY seznam_poradi ASC"; 
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {  ?>  
        <div class="checkbox">
        <label><input type="checkbox" name="<?echo $row["seznam_name"];?>" value="1"><?echo $row["seznam_hodnota"];?></label>
        </div>
     <?  }
     $conn->close(); ?>    
     </div> 
</div> 

     <br><br>
     <label for="uzivatel">Pravidelné sportovní a pohybové aktivity:</label> 
    <? require "pripojeni_databaze.php";
    $sql = "SELECT * FROM seznam WHERE seznam_cislo = '44' ORDER BY seznam_poradi ASC"; 
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {  ?>  
<div class="row" style="background-color:#e3fad6;">
        <div class="col-sm-3">
        <div class="checkbox">
        <label><input type="checkbox" name="<?echo $row["seznam_name"];?>" value="1" id="My_<?echo $row["seznam_name"];?>" onclick="myFunction_<?echo $row["seznam_name"];?>()"><?echo $row["seznam_hodnota"];?></label>
        </div>
        </div> 
  
    <div class="col-sm-4" id="text_<?echo $row["seznam_name"];?>" style="display:none">  
    <select class="form-control" id="pravidelnost_<?echo $row["seznam_name"];?>" name="pravidelnost_<?echo $row["seznam_name"];?>">
    <option value="0"> -- Vyberte pravidelnost --</option>
    <? 
    require "pripojeni_databaze.php";
    $sql01 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
    $result01 = $conn->query($sql01);
    while($row01 = $result01->fetch_assoc()) {
    echo '<option value = "' .$row01["seznam_id"]. '">' . $row01["seznam_hodnota"]. "</option>\n"; 
       }
    ?>
    </select>
    </div> 
</div> 

<script>
function myFunction_<?echo $row["seznam_name"];?>() {
  var checkBox = document.getElementById("My_<?echo $row["seznam_name"];?>");
  var text = document.getElementById("text_<?echo $row["seznam_name"];?>");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>


    <?  }
    $conn->close(); ?>    
<br>
<div class="row" style="background-color:#ddf0f3;">
    <div class="col-sm-4" <?echo $chyba_joga_kurz;?>>
    <label for="uzivatel">Absolvoval jste někdy kurz ŠIVA jógy:</label>
    <select class="form-control" id="zobrazjoga" name="joga_kurz">
    <option value="0">Ne</option> 
    <option value="1">Ano</option>
    </select>
    <br>
    </div>     
    <div class="col-sm-5" <?echo $chyba_lektor;?>>
    <div class="form-group" id="jogaFieldGroupDiv">
    <label for="uzivatel">Pokud ano, uveďte prosím jméno lektora:</label>
    <input type="text" class="form-control form-control-sm" name="lektor" maxlength="50" value = "<?echo $uzivatel_lektor;?>" placeholder="Pokud nechcete uvést jméno lektora napište důvěrné">
    </div> 
    </div>
    <script src="./js/joga.js"></script>
</div> 
<br/>
<label for="uzivatel">Kineziologický rozbor:</label> 
<br/>
<div class="row" style="background-color:#f2f3f5;">
    <div class="col-sm-12">

        <div class="row">   
            <div class="col-sm-2" style="background-color:#faf7bd;">
                    <br>
                    <label for="uzivatel">Postavení nohou:</label>
                    <div class="checkbox">
                    <label><input type="checkbox" name="nohy_x" value="1">X</label>                   
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="nohy_O" value="1">O</label>    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="nohy_posun_doleva" value="1">posun doleva</label>       
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="nohy_posun_doprava" value="1">posun doprava</label>     
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="nohy_prava_delsi_nez_leva" value="1">pravá delší než levá</label>     
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="nohy_leva_delsi_nez_prava" value="1">levá delší než pravá </label>     
                    </div>                    




            </div>

            <div class="col-sm-2" style="background-color:#c0f9f8;">
                    <br>
                    <label for="uzivatel">Plosky nohou:</label>
                    <div class="checkbox">
                    <label><input type="checkbox" name="vybocene_palce" value="1">vybočené palce</label>       
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="ploche_nohy" value="1">ploché nohy</label>        
                    

                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="skrcene_prsty" value="1">skrčené prsty</label>        
                   
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="prsty_blizko_u_sebe" value="1">prsty blízko u sebe</label>    
                   
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="ostruhy" value="1">ostruhy</label>      
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="ztuhle_narty" value="1">ztuhlé nárty</label>   
                    
                    </div>
            </div>


            <div class="col-sm-3" style="background-color:#d5ec95;">
                    <br>
                    <label for="uzivatel">Kotníky:</label>
                    <div class="checkbox">
                    <label><input type="checkbox" name="kotniky_zatuhle" value="1">zatuhlé</label>   

                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="kotniky_praskajici" value="1">praskající</label>  

                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="kotniky_otekle" value="1">oteklé</label>  
 
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="kotniky_zkracene_achylovy_slachy" value="1">zkrácené achylovy šlachy</label>     

                    </div>
            </div>

            <div class="col-sm-2" style="background-color:#fae6aa;">
                    <br>
                    <label for="uzivatel">Kolena:</label>
                    <div class="checkbox">
                    <label><input type="checkbox" name="kolena_posun_doleva" value="1">posun doleva</label>       

                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="kolena_posun_doprava" value="1">posun doprava</label>   

                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="kolena_stoceni_dovnitr" value="1">stočení dovnitř</label>     
  
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="kolena_vytoceni_ven" value="1">vytočení ven</label>  
                   
                    </div>
            </div>

            <div class="col-sm-3" style="background-color:#f7d7b8;">
                    <br>
                    <label for="uzivatel">Pánev:</label>
                    <div class="checkbox">
                    <label><input type="checkbox" name="panev_preklopena_podsazena" value="1">překlopená - podsazená</label>  
                   
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="panev_preklopena_dopredu" value="1">překlopená - dopředu</label>     
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="panev_posunuta_dopredu_bez_preklopeni" value="1">posunutá dopředu bez překlopení</label>      
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="panev_posunuta_dozadu_bez_preklopeni" value="1">posunutá dozadu bez překlopení</label>       
                 
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="panev_posun_doleva" value="1">posun doleva</label>   
                  
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="panev_posun_doprava" value="1">posun doprava</label>      
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="panev_rotace_doleva" value="1">rotace doleva</label>     
                  
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="panev_rotace_doprava" value="1">rotace doprava</label>  
                   
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="panev_blokada" value="1">blokáda</label>  
                    
                    </div>
            </div>
    
        </div>


        <div class="row">  

            <div class="col-sm-2" style="background-color:#ece0f4;">
                    <br>
                    <label for="uzivatel">Postavení rukou:</label>
                    <div class="checkbox">
                    <label><input type="checkbox" name="ruce_posun_doleva" value="1">posun doleva</label>  
                   
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="ruce_posun_doprava" value="1">posun doprava</label>  
                    
                    </div>
            </div>

            <div class="col-sm-3" style="background-color:#eacbd7;">
                    <br>
                    <label for="uzivatel">Ramena:</label>
                    <div class="checkbox">
                    <label><input type="checkbox" name="ramena_posun_doleva" value="1">posun doleva</label>     
                     
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="ramena_posun_doprava" value="1">posun doprava</label>         
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="ramena_zvednuta_tense_k_usim" value="1">zvednutá tense k uším</label>       
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="ramena_dychani_do_ramen" value="1">dýchání do ramen</label>       
                    
                    </div>

            </div>

            <div class="col-sm-2" style="background-color:#d1d6f7;">
                    <br>
                    <label for="uzivatel">Lokty:</label>
                    <div class="checkbox">
                    <label><input type="checkbox" name="lokty_tenisovy_loket" value="1">tenisový loket</label>   
                    
                    </div> 
            </div>  

            <div class="col-sm-2" style="background-color:#d1f7e7;">
                    <br>
                    <label for="uzivatel">Zápěstí:</label>
                    <div class="checkbox">
                    <label><input type="checkbox" name="zapesti_karpaly" value="1">karpály</label>   
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="zapesti_neohebnost" value="1">neohebnost</label>   
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="zapesti_zatuhlost" value="1">zatuhlost</label>  
                    
                    </div>

            </div>  

            <div class="col-sm-3" style="background-color:#f7f5d1;">
                    <br>
                    <label for="uzivatel">Postavení páteře:</label>
                    <div class="checkbox">
                    <label><input type="checkbox" name="pater_kulata_zada" value="1">Kulatá záda</label>     
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="pater_prohnuta_zada" value="1">Prohnutá záda</label>  
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="pater_plocha_zada" value="1">Plochá záda</label>     
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="pater_skolioticke_drzeni" value="1">Skoliotické držení</label>                     
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="pater_dysbalace_leve_ruky" value="1">Dysbalance levé ruky</label>    
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="pater_dysbalace_prave_ruky" value="1">Dysbalance pravé ruky</label>   
                    
                    </div>
        
            </div>
        </div>

        <div class="row">  

            <div class="col-sm-4" style="background-color:#f9e9aa;">
                    <br>
                    <label for="uzivatel">Krční:</label>
                    <div class="checkbox">
                    <label><input type="checkbox" name="krcni_ztuhlost_sije" value="1">ztuhlost šíje</label>      
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="krcni_stuhlost_trapezu" value="1">ztuhlost trapézů</label>  
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="krcni_vyoseni_doleva" value="1">vyosení doleva</label>                     
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="krcni_vyoseni_doprava" value="1">vyosení doprava</label>                     
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="krcni_posun_brady_doleva" value="1">posun brady doleva</label>    
                   
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="krcni_posun_brady_doprava" value="1">posun brady doprava</label>   
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="krcni_mala_lordoza" value="1">malá lordóza</label>   
                   
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="krcni_velka_lordoza" value="1">velká lordóza</label>   
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="krcni_vyhrez" value="1">výhřez</label>   
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="krcni_zaklon_dozadu" value="1">záklon dozadu (brada zvednutá nahoru)</label>  
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="krcni_predsun_dopredu" value="1">předsun dopředu</label>  
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="krcni_hlava_v_ramenou" value="1">hlava v ramenou</label>  
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="krcni_posun_jazylky" value="1">posun jazylky</label>  
                    
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="krcni_oteklost_sije_z_leve_strany" value="1">oteklost šíje z levé strany</label>  
                     
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" name="krcni_oteklost_sije_z_prave_strany" value="1">oteklost šíje z pravé strany</label>  
                    
                    </div>            
            </div>

            <div class="col-sm-2" style="background-color:#aaebf9;">
                <br>
                <label for="uzivatel">Hrudní:</label>
                <div class="checkbox">
                <label><input type="checkbox" name="hrudni_vyhrbeni" value="1">vyhrbení</label>      
                
                </div> 
                <div class="checkbox">
                <label><input type="checkbox" name="hrudni_prohnuti" value="1">prohnutí</label>  
                
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hrudni_hrb_na_zadech" value="1">hrb na zádech</label>  
                
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hrudni_vyoseni_doleva" value="1">vyosení doleva</label>  
                
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hrudni_vyoseni_doprava" value="1">vyosení doprava</label>  
               
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hrudni_vyhrez" value="1">výhřez</label>  
                
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hrudni_blokada_zeber" value="1">blokáda žeber</label>  
               
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hrudni_posun_zeber_doleva" value="1">posun žeber doleva</label>  
               
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hrudni_posun_zeber_doprava" value="1">posun žeber doprava</label>  
                
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hrudni_melke_dychani" value="1">mělké dýchání</label>  
                 
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hrudni_nepruznost_zeber" value="1">nepružnost žeber</label>  
              
                </div>        
            </div>


            <div class="col-sm-2" style="background-color:#baf9aa;">
                <br>
                <label for="uzivatel">Lopatky:</label>
                <div class="checkbox">
                <label><input type="checkbox" name="lopatky_posun_doleva" value="1">posun doleva</label>  
                
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="lopatky_posun_doprava" value="1">posun doprava</label>  
               
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="lopatky_vylezaji_ven" value="1">vylézají ven</label>  
              
                </div>
            </div>

            <div class="col-sm-2" style="background-color:#f9c8aa;">
                <br>
                <label for="uzivatel">Bederní:</label>
                <div class="checkbox">
                <label><input type="checkbox" name="bederni_prohnuti" value="1">prohnutí</label>  
                 
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="bederni_vyoseni_doleva" value="1">vyosení doleva</label>                
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="bederni_vyoseni_doprava" value="1">vyosení doprava</label>              
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="bederni_vyhrez" value="1">výhřez</label>                 
                </div>
            </div>

            <div class="col-sm-2" style="background-color:#f9f3aa;">
                <br>
                <label for="uzivatel">Hypermobilita:</label>
                <div class="checkbox">
                <label><input type="checkbox" name="hypermobilita_krcni_pater" value="1">krční páteř</label>                 
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hypermobilita_hrudni_pater" value="1">hrudní páteř</label>            
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hypermobilita_bederni_pater" value="1">bederní páteř</label>                 
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hypermobilita_krizova_kost" value="1">křížová kost</label>               
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hypermobilita_kostrc" value="1">kostrč</label>              
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hypermobilita_ramena" value="1">ramena</label>                 
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hypermobilita_lokty" value="1">lokty</label>                 
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hypermobilita_zapesti" value="1">zápěstí</label>           
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hypermobilita_prsty_na_rukou" value="1">prsty na rukou</label>              
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hypermobilita_kycle" value="1">kyčle</label>                
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hypermobilita_kolena" value="1">kolena</label>                
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hypermobilita_kotniky" value="1">kotníky</label>              
                </div>
                <div class="checkbox">
                <label><input type="checkbox" name="hypermobilita_prsty_na_nohou" value="1">prsty na nohou</label>               
                </div>

            </div>

        </div>

        <H4 align="center">Svaly</H4>
        <div class="row"> 
            <div class="col-sm-12">
                
                <label for="uzivatel">Ztuhlé:</label>
                <textarea class="form-control" id="svaly_ztuhle" name="svaly_ztuhle" rows="2" maxlength="200" style="background-color:#FFFFFF;"></textarea>
            </div>
        </div>

        <div class="row"> 
            <div class="col-sm-12">
                <br/>
                <label for="uzivatel">Povolené:</label>
                <textarea class="form-control" id="svaly_povolene" name="svaly_povolene" rows="2" maxlength="200" style="background-color:#FFFFFF;"></textarea>
            </div>
        </div>

        <div class="row"> 
            <div class="col-sm-12">
                <br/>
                <label for="uzivatel">Poznámka:</label>
                <textarea class="form-control" id="svaly_poznamka" name="svaly_poznamka" rows="3" maxlength="200" style="background-color:#FFFFFF;"></textarea>
                <br/>    
            </div>
        </div>


    </div>
</div>

                <?
 // --------------------  Ověření formuláře -------------
               }else{ 
               ?>

<div class="row" style="display:none">
    <div class="col-sm-12" style="background-color:#f6e9cd;">
    <label for="uzivatel">Sportovní a pohybové aktivity:</label> 
        <div class="checkbox">
        <? if ($bezky == 1) {?>
        <label><input type="checkbox" name="bezky" value="1" checked>Bežky</label> 
        <?} else {?>
        <label><input type="checkbox" name="bezky" value="1">Bežky</label> 
        <? } ?>
        </div>
        <div class="checkbox">
        <? if ($brusle_zimni == 1) {?>
        <label><input type="checkbox" name="brusle_zimni" value="1" checked>Brusle zimní</label> 
        <?} else {?>
        <label><input type="checkbox" name="brusle_zimni" value="1">Brusle zimní</label> 
        <? } ?>
        </div>
        <div class="checkbox">
        <? if ($prace_na_zahrade == 1) {?>
        <label><input type="checkbox" name="prace_na_zahrade" value="1" checked>Práce na zahradě</label> 
        <?} else {?>
        <label><input type="checkbox" name="prace_na_zahrade" value="1">Práce na zahradě</label> 
        <? } ?>
        </div>
        <div class="checkbox">        
        <? if ($sjezd_lyze == 1) {?>
        <label><input type="checkbox" name="sjezd_lyze" value="1" checked>Sjezd lyže</label> 
        <?} else {?>
        <label><input type="checkbox" name="sjezd_lyze" value="1">Sjezd lyže</label> 
        <? } ?>
        </div>
        <div class="checkbox">        
        <? if ($skialpinismus == 1) {?>
        <label><input type="checkbox" name="skialpinismus" value="1" checked>Skialpinismus</label> 
        <?} else {?>
        <label><input type="checkbox" name="skialpinismus" value="1">Skialpinismus</label> 
        <? } ?>
        </div>         
    </div> 
</div> 



<br>
     <label for="uzivatel">Pravidelné sportovní a pohybové aktivity:</label>
<?
    function poslatSkryte($chyba, $aktivita, $pravidelnost, $form_name, $nazev)
    {
        if (strlen($chyba) == 0 && $aktivita == 1 && $pravidelnost > 0){
        echo '<div class="row" style="display:none">';
        echo '<input type="text" class="form-control form-control-sm" name="'.$form_name.'" value="1" readonly size="4"><br>';
        echo '<input type="text" class="form-control form-control-sm" name="pravidelnost_'.$form_name.'" value = "'.$pravidelnost.'" readonly><br>';
        echo  $nazev.':'.$aktivita.'<br>';
        echo  'pravidelnost_'.$form_name.':'.$pravidelnost.'<br>';
        echo '</div>';
        }
    }

    function zobrazChybu($chyba_aktivita, $pravidelnost_aktivita, $form_name_aktivita, $nazev_aktivita)
    {
        if (strlen($chyba_aktivita) > 0  && $pravidelnost_aktivita == 0 ){
        echo '<div class="row" '.$chyba_aktivita.'>';
        echo '<div class="col-sm-3">';
        echo '<div class="checkbox">';
        echo '<label><input type="checkbox" name="'.$form_name_aktivita.'" value="1" checked >'.$nazev_aktivita.'</label>';
        echo '</div>';
        echo '</div>';
        echo '<div class="col-sm-4">';  
        echo '<select class="form-control" name="pravidelnost_'.$form_name_aktivita.'">';
        echo '<option value="0"> -- Vyberte pravidelnost --</option>';
        require "pripojeni_databaze.php";
        $sql01 = "SELECT * FROM seznam WHERE seznam_cislo = '2' ORDER BY seznam_poradi ASC";    
        $result01 = $conn->query($sql01);
        while($row01 = $result01->fetch_assoc()) {
        echo '<option value = "' .$row01["seznam_id"]. '">' . $row01["seznam_hodnota"]. "</option>\n"; 
       }
        echo '</select>';
        echo '</div>';
        echo '</div>';        
               }
    }
?>

<? echo poslatSkryte($chyba_posilovani, $posilovani, $pravidelnost_posilovani, "posilovani", "Fitness - silový trénink");?>
<? echo zobrazChybu($chyba_posilovani, $pravidelnost_posilovani, "posilovani","Fitness - silový trénink");?>

<? echo poslatSkryte($chyba_florbal, $florbal, $pravidelnost_florbal, "florbal", "Florbal");?>
<? echo zobrazChybu($chyba_florbal, $pravidelnost_florbal, "florbal","Florbal");?>

<? echo poslatSkryte($chyba_bojove_sporty, $bojove_sporty, $pravidelnost_bojove_sporty, "bojove_sporty", "Bojové sporty");?>
<? echo zobrazChybu($chyba_bojove_sporty, $pravidelnost_bojove_sporty, "bojove_sporty","Bojové sporty");?>

<? echo poslatSkryte($chyba_hokej, $hokej, $pravidelnost_hokej, "hokej", "Hokej");?>
<? echo zobrazChybu($chyba_hokej, $pravidelnost_hokej, "hokej","Hokej");?>

<? echo poslatSkryte($chyba_fotbal, $fotbal, $pravidelnost_fotbal, "fotbal", "Fotbal");?>
<? echo zobrazChybu($chyba_fotbal, $pravidelnost_fotbal, "fotbal","Fotbal");?>

<? echo poslatSkryte($chyba_volejbal, $volejbal, $pravidelnost_volejbal, "volejbal", "Volejbal/Basketbal");?>
<? echo zobrazChybu($chyba_volejbal, $pravidelnost_volejbal, "volejbal","Volejbal/Basketbal");?>

<? echo poslatSkryte($chyba_aerobic, $aerobic, $pravidelnost_aerobic, "aerobic", "Aerobik");?>
<? echo zobrazChybu($chyba_aerobic, $pravidelnost_aerobic, "aerobic","Aerobik");?>

<? echo poslatSkryte($chyba_tanec, $tanec, $pravidelnost_tanec, "tanec", "Tanec");?>
<? echo zobrazChybu($chyba_tanec, $pravidelnost_tanec, "tanec","Tanec");?>

<? echo poslatSkryte($chyba_plavani, $plavani, $pravidelnost_plavani, "plavani", "Plávaní");?>
<? echo zobrazChybu($chyba_plavani, $pravidelnost_plavani, "plavani","Plávaní");?>

<? echo poslatSkryte($chyba_brusle_inline, $brusle_inline, $pravidelnost_brusle_inline, "brusle_inline", "Brusle in-line");?>
<? echo zobrazChybu($chyba_brusle_inline, $pravidelnost_brusle_inline, "brusle_inline","Brusle in-line");?>

<? echo poslatSkryte($chyba_kolo_spinning, $kolo_spinning, $pravidelnost_kolo_spinning, "kolo_spinning", "Kolo/Spinning");?>
<? echo zobrazChybu($chyba_kolo_spinning, $pravidelnost_kolo_spinning, "kolo_spinning","Kolo/Spinning");?>

<? echo poslatSkryte($chyba_beh, $beh, $pravidelnost_beh, "beh", "Běh");?>
<? echo zobrazChybu($chyba_beh, $pravidelnost_beh, "beh","Běh");?>

<? echo poslatSkryte($chyba_pesi_turistika, $pesi_turistika, $pravidelnost_pesi_turistika, "pesi_turistika", "Pěší turistika/chůze");?>
<? echo zobrazChybu($chyba_pesi_turistika, $pravidelnost_pesi_turistika, "pesi_turistika","Pěší turistika/chůze");?>

<? echo poslatSkryte($chyba_taj_ci, $taj_ci, $pravidelnost_taj_ci, "taj_ci", "Taj-či");?>
<? echo zobrazChybu($chyba_taj_ci, $pravidelnost_taj_ci, "taj_ci","Taj-či");?>

<? echo poslatSkryte($chyba_cchi_kung, $cchi_kung, $pravidelnost_cchi_kung, "cchi_kung", "Čchi-kung");?>
<? echo zobrazChybu($chyba_cchi_kung, $pravidelnost_cchi_kung, "cchi_kung","Čchi-kung");?>

<? echo poslatSkryte($chyba_joga, $joga, $pravidelnost_joga, "joga", "Jóga/Rehabilitační cvičení /Fyzio");?>
<? echo zobrazChybu($chyba_joga, $pravidelnost_joga, "joga","Jóga/Rehabilitační cvičení /Fyzio");?>

<? echo poslatSkryte($chyba_kondicni_treninky, $kondicni_treninky, $pravidelnost_kondicni_treninky, "kondicni_treninky", "Fitness - kondiční trénink");?>
<? echo zobrazChybu($chyba_kondicni_treninky, $pravidelnost_kondicni_treninky, "kondicni_treninky","Fitness - kondiční trénink");?>

<? echo poslatSkryte($chyba_tenis_squash_badminton, $tenis_squash_badminton, $pravidelnost_tenis_squash_badminton, "tenis_squash_badminton", "Tenis/Squash/Badminton");?>
<? echo zobrazChybu($chyba_tenis_squash_badminton, $pravidelnost_tenis_squash_badminton, "tenis_squash_badminton","Tenis/Squash/Badminton");?>

<br>
        <?  if (strlen($chyba_joga_kurz) > 0) { ?>
<? if ($lektor == 0) { $lektor = ""; } ?>

<div class="row" <?echo $chyba_joga_kurz;?>>
    <div class="col-sm-4">
    <label for="uzivatel">Absolvoval jste někdy kurz ŠIVA jógy:</label>
    <select class="form-control" id="zobrazjoga" name="joga_kurz">
    <? if  ($joga_kurz == 1) {?>
    <option value="0">Ne</option> 
    <option value="1" selected>Ano</option>
    <? } else {?>
    <option value="0">Ne</option> 
    <option value="1">Ano</option>
     <? } ?>
    </select>
    <br>
    </div>     
    <div class="col-sm-5">
    <div class="form-group" id="jogaFieldGroupDiv">
    <label for="uzivatel">Pokud ano, uveďte prosím jméno lektora:</label>
    <input type="text" class="form-control form-control-sm" name="lektor" maxlength="50" value = "<?echo $lektor;?>" placeholder="Pokud nechcete uvést jméno lektora napište důvěrné">
    </div> 
    </div>
    <script src="./js/joga.js"></script>
</div>   
        <? } else {?>
<div class="hidden">
<div class="row" <?echo $chyba_joga_kurz;?>>
    <div class="col-sm-4">
    <label for="uzivatel">Absolvoval jste někdy kurz ŠIVA jógy:</label>
    <select class="form-control" id="zobrazjoga" name="joga_kurz">
    <? if  ($joga_kurz == 1) {?>
    <option value="0">Ne</option> 
    <option value="1" selected>Ano</option>
    <? } else {?>
    <option value="0">Ne</option> 
    <option value="1">Ano</option>
     <? } ?>
    </select>
    <br>
    </div>     
    <div class="col-sm-5">
    <div class="form-group" id="jogaFieldGroupDiv">
    <label for="uzivatel">Pokud ano, uveďte prosím jméno lektora:</label>
    <input type="text" class="form-control form-control-sm" name="lektor" maxlength="50" value = "<?echo $lektor;?>" placeholder="Pokud nechcete uvést jméno lektora napište důvěrné">
    </div> 
    </div>
    <script src="./js/joga.js"></script>
</div>
</div>
        <? } ?>

        <? } ?> 
 
  <input type="hidden" id="stav" name="stav" value="odeslano">
  <? $uzivatel_id = encrypt_decrypt('encrypt', $uzivatel_id); ?>
  <input type="hidden" id="uzivatel_id"  name="uzivatel_id" value="<? echo $uzivatel_id; ?>"> 
  <br>
  <center><button type="submit" class="btn btn-success">&nbsp;<span class="glyphicon glyphicon-save"></span>&nbsp;&nbsp;Uložit&nbsp;&nbsp;</button></center>
  </form> 
  <br><br>   
  


