<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");

//require "sifrovani_dat.php";
//echo 'uzivatel_id: '.$uzivatel_id.'<br>';

?>

<h4>EAV plánování procedur</h4>

<div id="eav_procedury">

 <form id="modul_eav_procedury" name="modul_eav_procedury" method="post"> 

    <div class="row">
            <div class="col-sm-12" style="background-color:#DBDBDB;">
                
                <div class="col-sm-2">
                    <br>
                    <label for="uzivatel">Vyberte datum:</label>
                    <input type="date" class="form-control form-control-sm" name="datum_procedury"  value = "" required>
                    </div>  


                    <div class="col-sm-2">
                    <br>
                    <label for="uzivatel">Vyberte začátek:</label>
                    <input type="time" class="form-control form-control-sm"  name="zacatek_procedury" required>
                </div> 
   
            <div class="col-sm-2">
                <br>
                <label for="uzivatel">Vyberte délku:</label>
                <select class="form-control" id="delka_procedury" name="delka_procedury" required> 
                <option value="0"> Vyberte možnost</option> 
                <option value="30">30 minut</option>
                <option value="40">40 minut</option>
                <option value="60">60 minut</option>
                <option value="75">75 minut</option>
                <option value="90">90 minut</option>
                <option value="105">105 minut</option>
                <option value="120">120 minut</option>
                </select>
            </div> 

                <div class="col-sm-3">
                    <br>
                    <label for="uzivatel">Typ procedury:</label>
                    <select class="form-control" id="typ_procedury" name="typ_procedury" required> 
                    <option value="0"> Vyberte možnost</option> 
                    <option value="1">Vstupní měření EAV</option>
                    <option value="2">Navazující konzultace EAV</option>
                    <option value="3">Vstupní měření EAV + akupunktura</option>
                    <option value="4">Navazující konzultace EAV + akupunktura </option>
                    </select>
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
                <br>
                <label for="uzivatel">Diagnoza:</label>
                <textarea class="form-control" id="eav_diagnoza" name="eav_diagnoza" rows="1" maxlength="600" placeholder="Diagnoza"></textarea>
            </div>
        </div>


    <div class="row">
            <div class="col-sm-12" style="background-color:#DBDBDB;">
                <br>
                <label for="uzivatel">Akupunktura:</label>
                <textarea class="form-control" id="eav_akupunktura" name="eav_akupunktura" rows="1" maxlength="600" placeholder="Akupunktura"></textarea>
            </div>
        </div>

    <div class="row">
            <div class="col-sm-12" style="background-color:#DBDBDB;">
                <br>
                <label for="uzivatel">Příčina vzniku obtíží:</label>
                <textarea class="form-control" id="eav_pricina_vzniku_obtizi" name="eav_pricina_vzniku_obtizi" rows="1" maxlength="600" placeholder="Příčina vzniku obtíží"></textarea>
            </div>
        </div>


    <div class="row">
            <div class="col-sm-12" style="background-color:#DBDBDB;">
                <br>
                <label for="uzivatel">Vzhled/stadium/lokalizace:</label>
                <textarea class="form-control" id="eav_vzhled_stadium_lokalizace" name="eav_vzhled_stadium_lokalizace" rows="1" maxlength="600" placeholder="Vzhled/stadium/lokalizace"></textarea>
            </div>
        </div>


    <div class="row">
            <div class="col-sm-12" style="background-color:#DBDBDB;">
                <br>
                <label for="uzivatel">Doprovodné příznaky:</label>
                <textarea class="form-control" id="eav_doprovodne_priznaky" name="eav_doprovodne_priznaky" rows="1" maxlength="600" placeholder="Doprovodné příznaky"></textarea>
            </div>
        </div>

    <div class="row">
            <div class="col-sm-12" style="background-color:#DBDBDB;">
                <br>
                <label for="uzivatel">Subjektivní pocit klienta:</label>
                <textarea class="form-control" id="eav_subjektivni_pocit_klienta" name="eav_subjektivni_pocit_klienta" rows="8" maxlength="600" placeholder="Subjektivní pocit klienta">speciální pocity (zapíchnutá tříska, vlas na jazyku):
bolest (pálivá, tepavá, pulsující, řezavá, pichlavá):
bolest kde v těle:
bolest kam vystřeluje:
bolest kdy nejsilnější (čas, část dne):
modalita zhoršení:
modalita zlepšení:
                </textarea>
                <br>
            </div>
        </div>



    </form> 
    <br>
    <button type="submit" class="btn btn-success btn-sm"  onclick="loadPlanovanaProceduraEAV()">&nbsp;&nbsp;Uložit plánovanou proceduru&nbsp;&nbsp;</button>
    <br>



</div>