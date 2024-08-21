<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");

//require "sifrovani_dat.php";



//echo 'uzivatel_id: '.$uzivatel_id.'<br>';

?>

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
   
            <div class="col-sm-2">
                <br>
                <label for="uzivatel">Typ tréninku:</label>
                <select class="form-control" id="typ_treninku" name="typ_treninku" required> 
                <option value="0"> Vyberte možnost</option> 
                <option value="1">individuální</option>
                <option value="2">skupinový</option>
                <option value="3">kombinace</option>
                </select>
            </div> 

                <div class="col-sm-3">
                    <br/>
                    <label for="uzivatel">Typ tréninku skupinový</label>
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





                <div class="col-sm-3">
                    <br>
                    <label for="uzivatel">Způsob tréninku:</label>
                    <select class="form-control" id="lektor_procedury" name="lektor_procedury" required> 
                    <option value="0"> Vyberte možnost</option> 
                    <option value="1">zvýšení kondice</option>
                    <option value="2">nabrání svalové hmoty</option>
                    <option value="3">dýchání, posílení HSS</option>
                    <option value="4">posílení pánevního dna</option>
                    <option value="5">stabilizace kloubů</option>
                    <option value="6">srovnání páteře</option>
                    <option value="7">energetická harmonizace</option>
                    <option value="8">dysbalance</option>
                    <option value="9">koordinace</option>
                    <option value="10">psychika</option>
                    </select>
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