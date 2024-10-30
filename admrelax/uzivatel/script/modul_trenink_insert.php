<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache"); 
require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php';

$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));
$datum_treninku_zacatek_form = addslashes(htmlspecialchars(trim("$_POST[datum_treninku_zacatek]")));
$datum_treninku_konec_form = addslashes(htmlspecialchars(trim("$_POST[datum_treninku_konec]")));
$pocet_lekci_form = addslashes(htmlspecialchars(trim("$_POST[pocet_lekci]")));
$lektor_procedury_form = addslashes(htmlspecialchars(trim("$_POST[lektor_procedury]")));
$typ_treninku_form = addslashes(htmlspecialchars(trim("$_POST[typ_treninku]")));
$detail_zamereni_form = addslashes(htmlspecialchars(trim("$_POST[detail_zamereni]")));
$dynamicke_cviceni_form = addslashes(htmlspecialchars(trim("$_POST[dynamicke_cviceni]")));
$dynamicka_meditace_form = addslashes(htmlspecialchars(trim("$_POST[dynamicka_meditace]")));
$zdrave_jogove_protazeni_form = addslashes(htmlspecialchars(trim("$_POST[zdrave_jogove_protazeni]")));
$tajczy_cjuan_form = addslashes(htmlspecialchars(trim("$_POST[tajczy_cjuan]")));
$zvyseni_kondice_form = addslashes(htmlspecialchars(trim("$_POST[zvyseni_kondice]")));
$nabrani_svalove_hmoty_form = addslashes(htmlspecialchars(trim("$_POST[nabrani_svalove_hmoty]")));
$dychani_posileni_hss_form = addslashes(htmlspecialchars(trim("$_POST[dychani_posileni_hss]")));
$posileni_panevniho_dna_form = addslashes(htmlspecialchars(trim("$_POST[posileni_panevniho_dna]")));
$stabilizace_kloubu_form = addslashes(htmlspecialchars(trim("$_POST[stabilizace_kloubu]")));
$srovnani_patere_form = addslashes(htmlspecialchars(trim("$_POST[srovnani_patere]")));
$energeticka_harmonizace_form = addslashes(htmlspecialchars(trim("$_POST[energeticka_harmonizace]")));
$dysbalance_form = addslashes(htmlspecialchars(trim("$_POST[dysbalance]")));
$koordinace_form = addslashes(htmlspecialchars(trim("$_POST[koordinace]")));
$psychika_form = addslashes(htmlspecialchars(trim("$_POST[psychika]")));
$prihlaseny_uzivatel_form = addslashes(htmlspecialchars(trim("$_POST[prihlaseny_uzivatel]")));



//echo "<b>uzivatel_id:</b> ".$uzivatel_id."<br>";
//echo "<b>datum_treninku_zacatek_form:</b> ".$datum_treninku_zacatek_form."<br>";
//echo "<b>datum_treninku_konec_form:</b> ".$datum_treninku_konec_form."<br>";
//echo "<b>pocet_lekci_form:</b> ".$pocet_lekci_form."<br>";
//echo "<b>lektor_procedury_form:</b> ".$lektor_procedury_form."<br>";
//echo "<b>typ_treninku_form: </b>".$typ_treninku_form."<br>";
//echo "<b>detail_zamereni_form:</b> ".$detail_zamereni_form."<br>";
//echo "<b>dynamicke_cviceni_form:</b> ".$dynamicke_cviceni_form."<br>";
//echo "<b>dynamicka_meditace_form:</b> ".$dynamicka_meditace_form."<br>";
//echo "<b>zdrave_jogove_protazeni_form:</b> ".$zdrave_jogove_protazeni_form."<br>";
//echo "<b>tajczy_cjuan_form:</b> ".$tajczy_cjuan_form."<br>";
//echo "<b>zvyseni_kondice_form:</b> ".$zvyseni_kondice_form."<br>";
//echo "<b>nabrani_svalove_hmoty_form:</b> ".$nabrani_svalove_hmoty_form."<br>";
//echo "<b>dychani_posileni_hss_form:</b> ".$dychani_posileni_hss_form."<br>";
//echo "<b>posileni_panevniho_dna_form:</b> ".$posileni_panevniho_dna_form."<br>";
//echo "<b>stabilizace_kloubu_form:</b> ".$stabilizace_kloubu_form."<br>";
//echo "<b>srovnani_patere_form:</b> ".$srovnani_patere_form."<br>";
//echo "<b>energeticka_harmonizace_form:</b> ".$energeticka_harmonizace_form."<br>";
//echo "<b>dysbalance_form:</b> ".$dysbalance_form."<br>";
//echo "<b>koordinace_form:</b> ".$koordinace_form."<br>";
//echo "<b>psychika_form:</b> ".$psychika_form."<br>";



if($typ_treninku_form == 1){
  $dynamicke_cviceni_form = 0;
  $dynamicka_meditace_form = 0;
  $zdrave_jogove_protazeni_form = 0;
  $tajczy_cjuan_form = 0;
}


require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "INSERT INTO treninkovy_plan(
uzivatel_id,
datum_treninku_zacatek,
datum_treninku_konec,
pocet_lekci,
k_cerpani,
lektor_procedury,
typ_treninku,
skupinovy_dynamicke_cviceni,
skupinovy_dynamicka_meditace,
skupinovy_zdrave_jogove_protazeni,
skupinovy_tajczy_cjuan,
zpusob_zvyseni_kondice,
zpusob_nabrani_svalove_hmoty,
zpusob_dychani_posileni_hss,
zpusob_posileni_panevniho_dna,
zpusob_stabilizace_kloubu,
zpusob_srovnani_patere,
zpusob_energeticka_harmonizace,
zpusob_dysbalance,
zpusob_koordinace,
zpusob_psychika,
detail_zamereni,
prihlaseny_uzivatel
)
VALUES (
'$uzivatel_id',
'$datum_treninku_zacatek_form',
'$datum_treninku_konec_form',
'$pocet_lekci_form',
'$pocet_lekci_form',
'$lektor_procedury_form',
'$typ_treninku_form',
'$dynamicke_cviceni_form',
'$dynamicka_meditace_form',
'$zdrave_jogove_protazeni_form',
'$tajczy_cjuan_form',
'$zvyseni_kondice_form',
'$nabrani_svalove_hmoty_form',
'$dychani_posileni_hss_form',
'$posileni_panevniho_dna_form',
'$stabilizace_kloubu_form',
'$srovnani_patere_form',
'$energeticka_harmonizace_form',
'$dysbalance_form',
'$koordinace_form',
'$psychika_form',
'$detail_zamereni_form',
'$prihlaseny_uzivatel_form'
)";       

if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT MAX(treninkovy_plan_id) AS max_id FROM treninkovy_plan";
$result = $conn->query($sql);
while($radek = $result->fetch_assoc()) {
$max_id = $radek["max_id"];  
}
$conn->close(); 

echo "<br>max_id: ".$max_id."<br>";


require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT * FROM treninkovy_plan WHERE treninkovy_plan_id = $max_id AND uzivatel_id = $uzivatel_id LIMIT 1";
$result = $conn->query($sql);
while($radek = $result->fetch_assoc()) {
$treninkovy_plan_id = $radek["treninkovy_plan_id"];   
$datum_treninku_zacatek = $radek["datum_treninku_zacatek"]; 
$datum_treninku_konec = $radek["datum_treninku_konec"]; 
$pocet_lekci = $radek["pocet_lekci"];
$k_cerpani = $radek["k_cerpani"];
$lektor_procedury = $radek["lektor_procedury"];
$typ_treninku = $radek["typ_treninku"];
$skupinovy_dynamicke_cviceni = $radek["skupinovy_dynamicke_cviceni"];
$skupinovy_dynamicka_meditace = $radek["skupinovy_dynamicka_meditace"];
$skupinovy_zdrave_jogove_protazeni = $radek["skupinovy_zdrave_jogove_protazeni"];
$skupinovy_tajczy_cjuan = $radek["skupinovy_tajczy_cjuan"];
$zpusob_zvyseni_kondice = $radek["zpusob_zvyseni_kondice"];
$zpusob_nabrani_svalove_hmoty = $radek["zpusob_nabrani_svalove_hmoty"];
$zpusob_dychani_posileni_hss = $radek["zpusob_dychani_posileni_hss"];
$zpusob_posileni_panevniho_dna = $radek["zpusob_posileni_panevniho_dna"];
$zpusob_stabilizace_kloubu = $radek["zpusob_stabilizace_kloubu"];
$zpusob_srovnani_patere = $radek["zpusob_srovnani_patere"];
$zpusob_energeticka_harmonizace = $radek["zpusob_energeticka_harmonizace"];
$zpusob_dysbalance = $radek["zpusob_dysbalance"];
$zpusob_koordinace = $radek["zpusob_koordinace"];
$zpusob_psychika = $radek["zpusob_psychika"];
$detail_zamereni = $radek["detail_zamereni"];
$prihlaseny_uzivatel = $radek["prihlaseny_uzivatel"];
$datum = $radek["datum"];  
  }
$conn->close();




  echo "treninkovy_plan_id: ".$treninkovy_plan_id."<br>";
  echo "datum_treninku_zacatek: ".$datum_treninku_zacatek."<br>";
  echo "datum_treninku_konec: ".$datum_treninku_konec."<br>";
  echo "pocet_lekci: ".$pocet_lekci."<br>";
  echo "k_cerpani: ".$k_cerpani."<br>";
  echo "lektor_procedury: ".$lektor_procedury."<br>";
  echo "typ_treninku: ".$typ_treninku."<br>";
  echo "skupinovy_dynamicke_cviceni: ".$skupinovy_dynamicke_cviceni."<br>";
  echo "skupinovy_dynamicka_meditace: ".$skupinovy_dynamicka_meditace."<br>";
  echo "skupinovy_zdrave_jogove_protazeni: ".$skupinovy_zdrave_jogove_protazeni."<br>";
  echo "skupinovy_tajczy_cjuan: ".$skupinovy_tajczy_cjuan."<br>";
  echo "zpusob_zvyseni_kondice: ".$zpusob_zvyseni_kondice."<br>";
  echo "zpusob_nabrani_svalove_hmoty: ".$zpusob_nabrani_svalove_hmoty."<br>";
  echo "zpusob_dychani_posileni_hss: ".$zpusob_dychani_posileni_hss."<br>";
  echo "zpusob_posileni_panevniho_dna: ".$zpusob_posileni_panevniho_dna."<br>";
  echo "zpusob_stabilizace_kloubu: ".$zpusob_stabilizace_kloubu."<br>";
  echo "zpusob_srovnani_patere: ".$zpusob_srovnani_patere."<br>";
  echo "zpusob_energeticka_harmonizace: ".$zpusob_energeticka_harmonizace."<br>";
  echo "zpusob_dysbalance: ".$zpusob_dysbalance."<br>";
  echo "zpusob_koordinace: ".$zpusob_koordinace."<br>";
  echo "zpusob_psychika: ".$zpusob_psychika."<br>";
  echo "detail_zamereni: ".$detail_zamereni."<br>";
  echo "datum ložení: ".$datum."<br>";


?>
<div id="treninkovy_plan_<?echo $treninkovy_plan_id; ?>">
  <form id="treninkovy_plan_<?echo $treninkovy_plan_id; ?>" name="treninkovy_plan_<?echo $treninkovy_plan_id; ?>" method="post">   
  <div class="row">
        <div class="col-sm-12" style="background-color:#a1facd;">        
    
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
            <div class="col-sm-12" style="background-color:#a1facd;">                
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
                    <div class="col-sm-12" style="background-color:#a1facd;">
                        <br/>
                        <label for="uzivatel">Detail zaměření:</label>
                        <textarea class="form-control" id="detail_zamereni" name="detail_zamereni" rows="2" maxlength="200" style="background-color:#FFFFFF;" readonly><? echo $detail_zamereni;?></textarea>
                        <br/>                     
                    </div>
                </div> 

  </form>
  <br>
  <button type="submit" class="btn btn-success btn-sm"  onclick="loadTreninkovy_plan_<?echo $uzivatel_id; ?>()">&nbsp;&nbsp;XXXXXX&nbsp;&nbsp;</button>  

</div>


