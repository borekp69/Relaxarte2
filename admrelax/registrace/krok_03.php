<h4>RELAX ARTE - Krok 3</h4>                                                                                                                                <div class="row">
<br> 
<form action="krok_03_ulozeni.php" method="post"> 
<script src="../js/jencisla.js"></script>  


    <? if ($stav !== 'odeslano'){ ?>

<div class="row">
<div class="col-sm-12">
    <label for="uzivatel">Proč jste se rozhodl navštívit R.A.S.?</label>
    <div class="checkbox">
    <label><input type="checkbox" name="neuspokujici_zdravotni_stav" value="1">neuspokojující zdravotní stav</label>
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="nezvladani_stresu" value="1">problémy se zvládáním stresu</label>
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="psychicke_problemy" value="1">psychické problémy/deprese</label>
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="problem_s_hmotnosti" value="1">problém s hmotností</label>
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="samota" value="1">samota</label>
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="unavovy_syndrom" value="1">únavový syndrom</label>
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="zvedavost" value="1">zvědavost</label>
    </div>

</div>
</div>

      
<div class="row">
<div class="col-sm-12">
    <label for="uzivatel">Jaký je Váš cíl v rámci programu R.A.S.?</label>
    <div class="checkbox">
    <label><input type="checkbox" name="nabrat_svaly" value="1">nabrat svaly</label>
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="naucit_se_pracovat_s_emocemi" value="1">naučit se pracovat s emocemi</label>
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="naucit_se_spravne_dychat" value="1">naučit se správně dýchat</label>
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="naucit_se_zvladat_stres" value="1">naučit se zvládat stres</label>
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="odstranit_psychicke_problemy" value="1">odstranit psychické problémy/zbavit se depresí</label>
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="poznat_nove_metody_pece_o_zdravi" value="1">poznat nové metody péče o zdraví (cvičení, masáže, fyzio/muziko/arte terapie, ....)</label>
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="pribrat_na_hmotnosti" value="1">přibrat na hmotnosti</label>
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="zbavit_se_unavoveho_syndromu" value="1">zbavit se únavového syndromu</label>
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="zhubnout" value="1">zhubnout</label>
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="zlepsit_celkovy_zdravotni_stav" value="1">zlepšit celkový zdravotní stav</label>
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="zlepsit_fyzickou_kondici" value="1">zlepšit fyzickou kondici</label>
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="zpevnit_telo" value="1">zpevnit tělo</label>
    </div>
    <div class="checkbox">
    <label><input type="checkbox" name="zrelaxovat" value="1">zrelaxovat</label>
    </div>
</div>
</div>  

<h4>Osobní</h4>
 
<div class="row">

    <div class="col-sm-4">
    <label for="uzivatel">Máte ve svém životě oblast, kterou potřebujete vyřešit a nemůžete se hnout z místa:</label>
    <select class="form-control" id="oblast" name="oblast">
    <option value = "0">--- Vyberte oblast ---</option>
    <? 
    require "pripojeni_databaze.php";
    $sql = "SELECT * FROM seznam WHERE seznam_cislo = '3' ORDER BY seznam_hodnota ASC";    
        if ($stav !== 'odeslano'){
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    echo '<option value = "' .$row["seznam_id"]. '">' . $row["seznam_hodnota"]. "</option>\n"; 
       }
        }else{
     $result = $conn->query($sql); 
     while($row = $result->fetch_assoc()) {     
            if ($row["seznam_id"] == $uzivatel_oblast){
      echo '<option value = "' .$row["seznam_id"]. '" selected>' . $row["seznam_hodnota"]. "</option>\n";        
            }else{
      echo '<option value = "' .$row["seznam_id"]. '">' . $row["seznam_hodnota"]. "</option>\n";      
    }       
        }
             }
   $conn->close();
    ?>
    </select>
    </div> 

    <div class="col-sm-5">
    <label for="uzivatel">Máte pocit, že se bojíte života jako takového, resp. že žijete hodně ve strachu např. z budoucnosti:</label>    
    <select class="form-control" id="budoucnost" name="budoucnost">
    <option value = "0"> --- Budoucnost ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne">Ne</option>  
    </select>
    </div>
</div>
  
<br>



<div class="row">
    <div class="col-sm-4">
    <label for="uzivatel">Dějí se Vám v životě často úrazy? Mohou to být i zvláštní úrazy - např. pád na rovině, atd.:</label>    
    <select class="form-control" id="urazy" name="urazy">
    <option value = "0"> --- Úrazy ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne">Ne</option> 
    </select>
    </div> 

    <div class="col-sm-5">
    <label for="uzivatel">Když máte vyvinout sportovní aktivitu a nechce se Vám do ní, je to z důvodu spíše únavy nebo lenosti:</label>   
    <select class="form-control" id="unava" name="unava">
    <option value = "0"> --- Aktivita ---</option>
    <option value="Únava">Únava</option>
    <option value="Lenost">Lenost</option> 
    </select>
    </div> 
</div>   
<br>

<div class="row"> 
   
    <div class="col-sm-4">
    <label for="uzivatel">Jakým způsobem odpočíváte, vyberte jednu z  možností:</label>       
    <select class="form-control" id="odpocinek" name="odpocinek">
    <option value = "0">--- Vyberte odpočinek ---</option>
    <? 
    require "pripojeni_databaze.php";
    $sql = "SELECT * FROM seznam WHERE seznam_cislo = '5' ORDER BY seznam_hodnota ASC";    
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    echo '<option value = "' .$row["seznam_id"]. '">' . $row["seznam_hodnota"]. "</option>\n"; 
       }
       $conn->close();
    ?>
    </select>
    </div> 


    <div class="col-sm-3">
    <label for="uzivatel">Aktuální hmotnost, vyberte jednu z možností:</label> 
    <select class="form-control" id="zobrazpole" name="hmotnost">
    <option value="0"> -- Vyberte stav hmotnosti --</option>
    <option value="Vyhovuje">Hmotnost je vyhovující</option>
    <option value="Nadváha">Nadváha</option>
    <option value="Podváha">Nízká hmotnost</option>
    </select>
    </div>

    <div class="form-group" id="otherFieldGroupDiv">
    <div class="col-sm-3">
    <label for="uzivatel">Napište požadovanou korekci hmotnosti v kg:</label>
    <input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" id="vahakg" value = "<?echo $uzivatel_kg;?>" name="kg" maxlength="2" placeholder="Napište číslo v kg">
    </div>
    </div>
    <script src="./js/vaha.js"></script>
</div>     
<br>
<div class="row">
    <div class="col-sm-10">
    <label for="uzivatel">Co se jinam nevešlo:</label>
    <textarea class="form-control" id="cosejinamneveslo" name="cosejinamneveslo" placeholder="Co se jinam nevešlo" rows="5"></textarea>
    </div>
</div>

<? // --------------------  Ověření formuláře -------------?>
        <?  }else{ ?>

<div class="row">
<div class="col-sm-12" <? echo $chyba_duvod; ?>>
    <label for="uzivatel">Proč jste se rozhodl navštívit R.A.S.?</label>
    <div class="checkbox">
   <? if ($neuspokujici_zdravotni_stav == 0) {?>
    <label><input type="checkbox" name="neuspokujici_zdravotni_stav" value="1">neuspokojující zdravotní stav</label>
   <? }else{ ?> 
    <label><input type="checkbox" name="neuspokujici_zdravotni_stav" value="1" checked>neuspokojující zdravotní stav</label> 
   <? } ?>
    </div>

    <div class="checkbox">
   <? if ($nezvladani_stresu == 0) {?>
    <label><input type="checkbox" name="nezvladani_stresu" value="1">problémy se zvládáním stresu</label>
   <? }else{ ?> 
    <label><input type="checkbox" name="nezvladani_stresu" value="1" checked>problémy se zvládáním stresu</label>   
   <? } ?> 
    </div>

    <div class="checkbox">
   <? if ($psychicke_problemy == 0) {?>
    <label><input type="checkbox" name="psychicke_problemy" value="1">psychické problémy/deprese</label>
   <? }else{ ?> 
    <label><input type="checkbox" name="psychicke_problemy" value="1" checked>psychické problémy/deprese</label>   
   <? } ?> 
    </div>

    <div class="checkbox">
   <? if ($problem_s_hmotnosti== 0) {?>
    <label><input type="checkbox" name="problem_s_hmotnosti" value="1">problém s hmotností</label>
   <? }else{ ?> 
    <label><input type="checkbox" name="problem_s_hmotnosti" value="1" checked>problém s hmotností</label>
   <? } ?> 
    </div>

    <div class="checkbox">
   <? if ($samota== 0) {?>
    <label><input type="checkbox" name="samota" value="1">samota</label>
   <? }else{ ?> 
    <label><input type="checkbox" name="samota" value="1" checked>samota</label>       
   <? } ?> 
    </div>

    <div class="checkbox">
   <? if ($unavovy_syndrom== 0) {?>
    <label><input type="checkbox" name="unavovy_syndrom" value="1">únavový syndrom</label>
   <? }else{ ?> 
    <label><input type="checkbox" name="unavovy_syndrom" value="1" checked>únavový syndrom</label>       
   <? } ?> 
    </div>

    <div class="checkbox">
   <? if ($zvedavost== 0) {?>
    <label><input type="checkbox" name="zvedavost" value="1">zvědavost</label>
   <? }else{ ?> 
    <label><input type="checkbox" name="zvedavost" value="1" checked>zvědavost</label>   
   <? } ?> 
    </div>

   <div class="checkbox">
   <? if ($jine== 0) {?>
    <label><input type="checkbox" name="jine" value="1">jiné …</label>
   <? }else{ ?> 
    <label><input type="checkbox" name="jine" value="1" checked>jiné …</label>   
   <? } ?> 
    </div>

</div>
</div>


<div class="row">
<div class="col-sm-12" <? echo $chyba_cil; ?>>
    <label for="uzivatel">Jaký je Váš cíl v rámci programu R.A.S.?</label>
    <div class="checkbox">

   <? if ($nabrat_svaly == 0) {?>
    <label><input type="checkbox" name="nabrat_svaly" value="1">nabrat svaly</label>
   <? }else{ ?>
    <label><input type="checkbox" name="nabrat_svaly" value="1" checked>nabrat svaly</label>
   <? } ?>
    </div>
    
    <div class="checkbox">
      <? if ($naucit_se_pracovat_s_emocemi == 0) {?>
    <label><input type="checkbox" name="naucit_se_pracovat_s_emocemi" value="1">naučit se pracovat s emocemi</label>
     <? }else{ ?>
    <label><input type="checkbox" name="naucit_se_pracovat_s_emocemi" value="1" checked>naučit se pracovat s emocemi</label>
     <? } ?>        
    </div>

    <div class="checkbox">
    <? if ($naucit_se_spravne_dychat == 0) {?>    
    <label><input type="checkbox" name="naucit_se_spravne_dychat" value="1">naučit se správně dýchat</label>
     <? }else{ ?>
    <label><input type="checkbox" name="naucit_se_spravne_dychat" value="1" checked>naučit se správně dýchat</label>
     <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($naucit_se_zvladat_stres == 0) {?> 
    <label><input type="checkbox" name="naucit_se_zvladat_stres" value="1">naučit se zvládat stres</label>
     <? }else{ ?>
    <label><input type="checkbox" name="naucit_se_zvladat_stres" value="1" checked>naučit se zvládat stres</label>
     <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($odstranit_psychicke_problemy == 0) {?> 
    <label><input type="checkbox" name="odstranit_psychicke_problemy" value="1">odstranit psychické problémy/zbavit se depresí</label>
     <? }else{ ?>
    <label><input type="checkbox" name="odstranit_psychicke_problemy" value="1" checked>odstranit psychické problémy/zbavit se depresí</label>     
     <? } ?> 
    </div>

    <div class="checkbox">
    <? if ($poznat_nove_metody_pece_o_zdravi == 0) {?> 
    <label><input type="checkbox" name="poznat_nove_metody_pece_o_zdravi" value="1">poznat nové metody péče o zdraví (cvičení, masáže, fyzio/muziko/arte terapie, ....)</label>
     <? }else{ ?>
    <label><input type="checkbox" name="poznat_nove_metody_pece_o_zdravi" value="1" checked>poznat nové metody péče o zdraví (cvičení, masáže, fyzio/muziko/arte terapie, ....)</label>     
     <? } ?> 
    </div>

    <div class="checkbox">
    <? if ($pribrat_na_hmotnosti == 0) {?> 
    <label><input type="checkbox" name="pribrat_na_hmotnosti" value="1">přibrat na hmotnosti</label>
     <? }else{ ?>
    <label><input type="checkbox" name="pribrat_na_hmotnosti" value="1" checked>přibrat na hmotnosti</label>     
     <? } ?> 
    </div>

    <div class="checkbox">
    <? if ($zbavit_se_unavoveho_syndromu == 0) {?> 
    <label><input type="checkbox" name="zbavit_se_unavoveho_syndromu" value="1">zbavit se únavového syndromu</label>
     <? }else{ ?>
    <label><input type="checkbox" name="zbavit_se_unavoveho_syndromu" value="1" checked>zbavit se únavového syndromu</label>     
     <? } ?> 
    </div>

    <div class="checkbox">
    <? if ($zhubnout == 0) {?> 
    <label><input type="checkbox" name="zhubnout" value="1">zhubnout</label>
    <? }else{ ?>
    <label><input type="checkbox" name="zhubnout" value="1" checked>zhubnout</label>
    <? } ?>          
    </div>

    <div class="checkbox">
    <? if ($zlepsit_celkovy_zdravotni_stav == 0) {?> 
    <label><input type="checkbox" name="zlepsit_celkovy_zdravotni_stav" value="1">zlepšit celkový zdravotní stav</label>
    <? }else{ ?>
    <label><input type="checkbox" name="zlepsit_celkovy_zdravotni_stav" value="1" checked>zlepšit celkový zdravotní stav</label>
    <? } ?>  
    </div>

    <div class="checkbox">
    <? if ($zlepsit_fyzickou_kondici == 0) {?> 
    <label><input type="checkbox" name="zlepsit_fyzickou_kondici" value="1">zlepšit fyzickou kondici</label>
    <? }else{ ?>
    <label><input type="checkbox" name="zlepsit_fyzickou_kondici" value="1" checked>zlepšit fyzickou kondici</label>
    <? } ?>          
    </div>

    <div class="checkbox">
    <? if ($zpevnit_telo == 0) {?> 
    <label><input type="checkbox" name="zpevnit_telo" value="1">zpevnit tělo</label>
    <? }else{ ?>
    <label><input type="checkbox" name="zpevnit_telo" value="1" checked>zpevnit tělo</label> 
    <? } ?>          
    </div>

    <div class="checkbox">
    <? if ($zrelaxovat == 0) {?> 
    <label><input type="checkbox" name="zrelaxovat" value="1">zrelaxovat</label>
    <? }else{ ?>
    <label><input type="checkbox" name="zrelaxovat" value="1" checked>zrelaxovat</label>    
    <? } ?>  
    </div>
</div>
</div> 

<h4>Osobní</h4>

<div class="row">
    <div class="col-sm-4" <? echo $chyba_oblast; ?>>
    <label for="uzivatel">Máte ve svém životě oblast, kterou potřebujete vyřešit a nemůžete se hnout z místa:</label>
    <select class="form-control" id="oblast" name="oblast">
    <option value = "0">--- Vyberte oblast ---</option>
<? 
    require "pripojeni_databaze.php";
    $sql = "SELECT * FROM seznam WHERE seznam_cislo = '3' ORDER BY seznam_hodnota ASC";    
    $result = $conn->query($sql); 
    while($row = $result->fetch_assoc()) {     
            if ($row["seznam_id"] == $uzivatel_oblast){
      echo '<option value = "' .$row["seznam_id"]. '" selected>' . $row["seznam_hodnota"]. "</option>\n";        
            }else{
      echo '<option value = "' .$row["seznam_id"]. '">' . $row["seznam_hodnota"]. "</option>\n";      
    }       
        }
    $conn->close();
    ?>
    </select>
    </div> 
    <div class="col-sm-5" <? echo $chyba_budoucnost; ?>>
    <label for="uzivatel">Máte pocit, že se bojíte života jako takového, resp. že žijete hodně ve strachu např. z budoucnosti:</label>    
    <select class="form-control" id="budoucnost" name="budoucnost">
    <? if ($uzivatel_budoucnost=="Ne"){ ?>    
    <option value = "0"> --- Budoucnost ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne" selected>Ne</option>      
    <? }elseif ($uzivatel_budoucnost=="Ano"){ ?>
    <option value = "0"> --- Budoucnost ---</option>
    <option value="Ano" selected>Ano</option>
    <option value="Ne">Ne</option>  
    <? }else{ ?>
    <option value = "0"> --- Budoucnost ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne">Ne</option>  
    <? } ?>  
    </select>
    </div>
</div>

<div class="row">
    <div class="col-sm-4" <? echo $chyba_urazy; ?>>
    <label for="uzivatel">Dějí se Vám v životě často úrazy? Mohou to být i zvláštní úrazy - např. pád na rovině, atd.:</label>
    <select class="form-control" id="urazy" name="urazy">
    <? if ($uzivatel_urazy=="Ne"){ ?>    
    <option value = "0"> --- Úrazy ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne" selected>Ne</option>     
    <? }elseif ($uzivatel_urazy=="Ano"){ ?>
    <option value = "0"> --- Úrazy ---</option>
    <option value="Ano" selected>Ano</option>
    <option value="Ne">Ne</option> 
    <? }else{ ?>
    <option value = "0"> --- Úrazy ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne">Ne</option> 
    <? } ?>  
    </select>
    </div>

    <div class="col-sm-5" <? echo $chyba_unava; ?>>
    <label for="uzivatel">Když máte vyvinout sportovní aktivitu a nechce se Vám do ní, je to z důvodu spíše únavy nebo lenosti:</label>
    <select class="form-control" id="unava" name="unava">
    <? if ($uzivatel_unava=="Lenost"){ ?>    
    <option value = "0"> --- Aktivita ---</option>
    <option value="Únava">Únava</option>
    <option value="Lenost" selected>Lenost</option>      
    <? }elseif ($uzivatel_unava=="Únava"){ ?>
    <option value = "0"> --- Aktivita ---</option>
    <option value="Únava" selected>Únava</option>
    <option value="Lenost">Lenost</option> 
    <? }else{ ?>
    <option value = "0"> --- Aktivita ---</option>
    <option value="Únava">Únava</option>
    <option value="Lenost">Lenost</option> 
    <? } ?>  
    </select>
    </div>
</div>


<div class="row"> 
    <div class="col-sm-4" <? echo $chyba_odpocinek; ?>>
    <label for="uzivatel">Jakým způsobem odpočíváte, vyberte jednu z  možností:</label>
    <select class="form-control" id="odpocinek" name="odpocinek">
    <option value = "0">--- Vyberte odpočinek ---</option>
    <? 
    require "pripojeni_databaze.php";
    $sql = "SELECT * FROM seznam WHERE seznam_cislo = '5' ORDER BY seznam_hodnota ASC";    
    $result = $conn->query($sql); 
     while($row = $result->fetch_assoc()) {     
            if ($row["seznam_id"] == $uzivatel_odpocinek){
      echo '<option value = "' .$row["seznam_id"]. '" selected>' . $row["seznam_hodnota"]. "</option>\n";        
            }else{
      echo '<option value = "' .$row["seznam_id"]. '">' . $row["seznam_hodnota"]. "</option>\n";      
    }       
        }
   $conn->close();
    ?>
    </select>    
    </div>


    <div class="col-sm-3" <? echo $chyba_hmotnost; ?>>
    <label for="uzivatel">Aktuální hmotnost, vyberte jednu z možností:</label>
    <select class="form-control" id="zobrazpole" name="hmotnost">
    <? if ($uzivatel_hmotnost=="Vyhovuje"){ ?>    
    <option value="0"> -- Vyberte stav hmotnosti --</option>
    <option value="Vyhovuje" selected>Hmotnost je vyhovující</option>
    <option value="Nadváha">Nadváha</option>
    <option value="Podváha">Nízká hmotnost</option>
    <? }elseif ($uzivatel_hmotnost=="Nadváha"){ ?>
    <option value="0"> -- Vyberte stav hmotnosti --</option>
    <option value="Vyhovuje">Hmotnost je vyhovující</option>
    <option value="Nadváha" selected>Nadváha</option>
    <option value="Podváha">Nízká hmotnost</option>
    <? }elseif ($uzivatel_hmotnost=="Podváha"){ ?>
    <option value="0"> -- Vyberte stav hmotnosti --</option>
    <option value="Vyhovuje">Hmotnost je vyhovující</option>
    <option value="Nadváha">Nadváha</option>
    <option value="Podváha" selected>Nízká hmotnost</option>
    <? }else{ ?>
    <option value="0"> -- Vyberte stav hmotnosti --</option>
    <option value="Vyhovuje">Hmotnost je vyhovující</option>
    <option value="Nadváha">Nadváha</option>
    <option value="Podváha">Nízká hmotnost</option>
    <? } ?> 
    </select>
    </div>

    <div class="form-group" id="otherFieldGroupDiv">
    <div class="col-sm-3">
    <label for="uzivatel">Napište požadovanou korekci hmotnosti v kg:</label>
    <input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" id="vahakg" value = "<?echo $uzivatel_kg;?>" name="kg" maxlength="2" placeholder="Napište číslo v kg">
    </div>
    </div>
    <script src="./js/vaha.js"></script>
</div>
<br>
<div class="row">
    <div class="col-sm-10">
    <label for="uzivatel">Co se jinam nevešlo:</label>
    <textarea class="form-control" id="cosejinamneveslo" name="cosejinamneveslo" placeholder="Co se jinam nevešlo" rows="5"><? echo $cosejinamneveslo; ?></textarea>
    </div>
</div>


 <? } ?> 
 
  <input type="hidden" id="stav" name="stav" value="odeslano">
  <input type="hidden" id="uzivatel_login"  name="uzivatel_login" value="<? echo $uzivatel_login; ?>">
  <? $uzivatel_id = encrypt_decrypt('encrypt', $uzivatel_id); ?>
  <input type="hidden" id="uzivatel_id"  name="uzivatel_id" value="<? echo $uzivatel_id; ?>">
  <br>
  <center><button type="submit" class="btn btn-success">&nbsp;<span class="glyphicon glyphicon-save"></span>&nbsp;&nbsp;Uložit&nbsp;&nbsp;</button></center>
  </form> 
  <br><br>   