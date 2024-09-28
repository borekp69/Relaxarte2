<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");

//require "sifrovani_dat.php";



//echo 'uzivatel_id: '.$uzivatel_id.'<br>';

?>
<script src="./js/jencisla.js"></script> 
<h4>Tréninkový plán:</h4>

<div id="treninkovy_plan_<?echo $uzivatel_id; ?>">

    <div class="row">
        <div class="col-sm-12" style="background-color:#DBDBDB;">        
    
                    <div class="col-sm-2">
                        <br>
                        <label for="uzivatel">Datum od:</label>
                        <input type="date" class="form-control form-control-sm" name="datum_treninku_zacatek"  value = "" required>
                    </div>  

                    <div class="col-sm-2">
                        <br>
                        <label for="uzivatel">Datum do:</label>
                        <input type="date" class="form-control form-control-sm" name="datum_treninku_konec"  value = "" required>
                    </div> 
                    
                    <div class="col-sm-3">
                        <br>
                        <label for="uzivatel">Počet plánovaných lekcí:</label>                        
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" id="pocet_lekci" value = "" name="pocet_lekci" maxlength="2" placeholder="Počet plánovaných lekcí">
                    </div>   
                    
                    <div class="col-sm-2">
                        <br>
                        <label for="uzivatel">K čerpání:</label>                        
                        <input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" id="pocet_lekci" value = "" name="pocet_lekci" maxlength="2" placeholder="Počet plánovaných lekcí">
                    </div>  
                    
                    
                        <div class="col-sm-3">
                                <br>
                                <label for="uzivatel">Vyberte lektora:</label>
                                <select class="form-control" id="lektor_procedury" name="lektor_procedury" required> 
                                <option value="0"> Vyberte možnost</option> 
                                <?
                                require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
                                $sql = "SELECT * FROM lektor ORDER BY lektor_prijmeni";
                                $result = $conn->query($sql);
                                while($radek = $result->fetch_assoc()) {
                                echo '<option value="'.$radek["lektor_id"].'">'.$radek["lektor_titul"]."&nbsp;".$radek["lektor_prijmeni"]."&nbsp;".$radek["lektor_jmeno"]."</option>\n";
                                } 
                                $conn->close();
                                ?>
                                </select>
                        </div>


        </div> 
    </div>
    
        <div class="row">  
            <div class="col-sm-12" style="background-color:#DBDBDB;">
                
                <div class="col-sm-4">
                    <br>
                    <label for="uzivatel">Typ tréninku:</label>
                    <select class="form-control" id="typ_treninku" name="typ_treninku" required> 
                    <option value="0"> Vyberte možnost</option> 
                    <option value="1">individuální</option>
                    <option value="2">skupinový</option>
                    <option value="3">kombinace</option>
                    </select>
                </div> 

                    <div class="col-sm-4">
                        <br/>
                        <label for="uzivatel">Typ tréninku skupinový:</label>
                        <div class="checkbox">
                            <label><input type="checkbox" name="dynamicke_cviceni">Dynamické cvičení</label>
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" name="dynamicka_meditace">Dynamická meditace</label>
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" name="zdrave_jogove_protazeni">Zdravé jógové protažení</label>
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" name="tajczy_cjuan">Tajczy cjuaň</label>
                        </div>                
                    
                    
                    </div> 





                    <div class="col-sm-4">
                        <br>
                        <label for="uzivatel">Způsob tréninku:</label>

                        <div class="checkbox">
                            <label><input type="checkbox" name="zvyseni_kondice">zvýšení kondice</label>
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" name="nabrani_svalove_hmoty">nabrání svalové hmoty</label>
                        </div> 

                        <div class="checkbox">
                            <label><input type="checkbox" name="dychani_posileni_hss">dýchání, posílení HSS</label>
                        </div> 

                        <div class="checkbox">
                            <label><input type="checkbox" name="posileni_panevniho_dna">posílení pánevního dna</label>
                        </div>
                        
                        <div class="checkbox">
                            <label><input type="checkbox" name="stabilizace_kloubu">stabilizace kloubů</label>
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" name="srovnani_patere">srovnání páteře</label>
                        </div> 

                        <div class="checkbox">
                            <label><input type="checkbox" name="energeticka_harmonizace">energetická harmonizace</label>
                        </div>  
                    
                        <div class="checkbox">
                            <label><input type="checkbox" name="dysbalance">dysbalance</label>
                        </div> 

                        
                        <div class="checkbox">
                            <label><input type="checkbox" name="koordinace">koordinace</label>
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" name="psychika">psychika</label>
                        </div>
                       
                     
                       




                    </div>
    
            </div>


        </div>

                <div class="row">
                    <div class="col-sm-12" style="background-color:#DBDBDB;">
                        <br/>
                        <label for="uzivatel">Detail zaměření:</label>
                        <textarea class="form-control" id="detail_zamereni" name="detail_zamereni" rows="2" maxlength="200" style="background-color:#FFFFFF;"></textarea>
                        <br/>                     
                    </div>
                </div>    





</div>
<br/>-----------------------------------------------<br/>