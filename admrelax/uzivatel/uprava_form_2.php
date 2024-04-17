<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php'; ?>
<form action="uprava_form.php" method="post">

<script src="../js/jencisla.js"></script> 
<div class="row">
    <div class="col-sm-3">
    <div class="form-group">
    <label for="uzivatel">Společnost:</label>
    <select class="form-control" id="spolecnost" name="spolecnost" autofocus>
    <option value = "0"> --- Vyberte společnost ---</option>
    <? 
    require "pripojeni_databaze.php";
    $sql = "SELECT * FROM spolecnost WHERE spolecnost_stav = 'A' ORDER BY spolecnost_nazev ASC";
    $result = $conn->query($sql); 
    while($row = $result->fetch_assoc()) {     
            if ($uzivatel_spolecnost == $row["spolecnost_id"]){
    echo '<option value = "' .$row["spolecnost_id"]. '" selected>' .$row["spolecnost_nazev"]. "</option>\n";        
            }else{
    echo '<option value = "' .$row["spolecnost_id"]. '">' .$row["spolecnost_nazev"]. "</option>\n";      
    }       
        }
    $conn->close();
    ?>
    </select>
    </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-3">
    <div class="form-group">
    <label for="uzivatel">Login:</label>
    <input type="text" class="form-control form-control-sm" name="login"  value = "<? echo $uzivatel_login; ?>" readonly>
    </div> 
    </div>
</div>
     
<div class="row">
    <div class="col-sm-3" <?echo $chyba_jmeno;?>>
    <div class="form-group">
    <label for="uzivatel">Jméno:</label>
    <input type="text" class="form-control form-control-sm" name="jmeno" value = "<?echo $uzivatel_jmeno;?>" placeholder="Jméno" required>
    </div> 
    </div>
    <div class="col-sm-3" <?echo $chyba_prijmeni;?>>
    <div class="form-group">
    <label for="uzivatel">Příjmení:</label>
    <input type="text" class="form-control form-control-sm" name="prijmeni" value = "<?echo $uzivatel_prijmeni;?>" placeholder="Příjmení" required>
    </div>   
    </div>

    <div class="col-sm-2" <?echo $chyba_pohlavi;?>>
    <label for="uzivatel">Pohlaví:</label>
    <select class="form-control" id="pohlavi" name="pohlavi">
  <? if ($uzivatel_pohlavi=="Muž"){ ?>    
    <option value = "0"> --- Pohlaví ---</option>
    <option value="Žena">Žena</option>
    <option value="Muž" selected>Muž</option>
<? }elseif ($uzivatel_pohlavi=="Žena"){ ?>
    <option value = "0"> --- Pohlaví ---</option>
    <option value="Žena" selected>Žena</option>
    <option value="Muž">Muž</option>
<? }else{ ?>
    <option value = "0"> --- Pohlaví ---</option>
    <option value="Žena">Žena</option>
    <option value="Muž">Muž</option>
<? } ?>  
     </select>
     </div>
</div>

<div class="row">
    <div class="col-sm-3" <?echo $chyba_narozeni;?>>
    <div class="form-group">
    <label for="uzivatel">Datum narození:</label>
    <input type="date" class="form-control form-control-sm" name="datum_narozeni"  value = "<?echo $uzivatel_narozeni;?>" required>
    </div> 
    </div>
    <div class="col-sm-3" <?echo $chyba_rc;?>>
    <div class="form-group">
    <label for="uzivatel">Rodné číslo:</label>
    <input type="text" class="form-control form-control-sm" name="rodne_cislo" maxlength="11" value = "<?echo $uzivatel_rc;?>" placeholder="Rodné číslo" required>
    </div>   
    </div>
</div>

<div class="row">
    <div class="col-sm-3" <?echo $chyba_ulice;?>>
    <div class="form-group">
    <label for="uzivatel">Ulice:</label>
    <input type="text" class="form-control form-control-sm" name="ulice" value = "<?echo $uzivatel_ulice;?>" placeholder="Ulice">
    </div> 
    </div>
    <div class="col-sm-2" <?echo $chyba_cp;?>>
    <div class="form-group">
    <label for="uzivatel">Číslo popisné:</label>
    <input type="text" class="form-control form-control-sm" name="cislo_popisne" value = "<?echo $uzivatel_cp;?>" placeholder="Číslo popisné" required>
    </div>   
    </div>
    <div class="col-sm-2">
    <div class="form-group">
    <label for="uzivatel">Číslo orientační:</label>
    <input type="text" class="form-control form-control-sm" name="cislo_orientacni" value = "<?echo $uzivatel_co;?>" placeholder="Číslo orientační">
    </div>   
    </div>  
</div>  

<div class="row">
    <div class="col-sm-3" <?echo $chyba_mesto;?>>
    <div class="form-group">
    <label for="uzivatel">Obec:</label>
    <input type="text" class="form-control form-control-sm" name="mesto" value = "<?echo $uzivatel_mesto;?>" placeholder="Název obce" required>
    </div> 
    </div>
    <div class="col-sm-1" <?echo $chyba_psc;?>>
    <div class="form-group">
    <label for="uzivatel">PSČ:</label>
    <input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" name="psc" maxlength="5" value = "<?echo $uzivatel_psc;?>" placeholder="PSČ" required>    
    </div>   
    </div>
</div>

<div class="row">
    <div class="col-sm-3" <?echo $chyba_email;?>>
    <div class="form-group">
    <label for="uzivatel">E-mail:</label>
    <input type="email" class="form-control form-control-sm" name="email" value = "<?echo $uzivatel_email;?>" placeholder="např. jmeno.prijmeni@domena.com" required>
    </div> 
    </div>
    <div class="col-sm-3">
    <div class="form-group">
    <label for="uzivatel">Prefix:</label>
    <select class="form-control" id="prefix" name="prefix">
<? 
    require "pripojeni_databaze.php";
    $sql = "SELECT * FROM prefix ORDER BY prefix_stat ASC";
    $result = $conn->query($sql); 
     while($row = $result->fetch_assoc()) {           
     if ($row["prefix_id"] == $uzivatel_prefix){     
      echo '<option value = "' .$row["prefix_id"]. '" selected>+' .$row["prefix_predvolba"].'&nbsp;' .$row["prefix_stat"]. '</option>';   
          }else{
    echo '<option value = "' .$row["prefix_id"]. '">+' .$row["prefix_predvolba"].'&nbsp;' .$row["prefix_stat"]. '</option>';         
        }  
                 }   
    $conn->close();
    ?>
   </select>
    </div>
    </div>
 
<div class="col-sm-3" <?echo $chyba_mobil;?>>
    <div class="form-group">
    <label for="uzivatel">Telefon:</label>
    <input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" name="mobil" maxlength="12" value = "<?echo $uzivatel_mobil;?>"  placeholder="Telefonní číslo" required>
    </div>                      
    </div>  
</div> 

<div class="row">
    <div class="col-sm-5" <?echo $chyba_pojistovna;?>>
    <div class="form-group">
    <label for="uzivatel">Zdravotní pojišťovna:</label>
    <select class="form-control" id="pojistovna" name="pojistovna">
    <option value = "0"> --- Vyberte zdravotní pojišťovnu ---</option>
<? 
    require "pripojeni_databaze.php";
    $sql = "SELECT * FROM pojistovny WHERE pojistovna_cislo NOT IN ('0') ORDER BY pojistovna_cislo ASC";    

     $result = $conn->query($sql); 
     while($row = $result->fetch_assoc()) {     
            if ($row["pojistovna_id"] == $uzivatel_pojistovna){
      echo '<option value = "' .$row["pojistovna_id"]. '" selected>' . $row["pojistovna_cislo"]. '&nbsp;-&nbsp;' .$row["pojistovna_zkratka"]. '&nbsp;-&nbsp;' .$row["pojistovna_nazev"]. '</option>';        
            }else{
      echo '<option value = "' .$row["pojistovna_id"]. '">' . $row["pojistovna_cislo"]. '&nbsp;-&nbsp;' .$row["pojistovna_zkratka"]. '&nbsp;-&nbsp;' .$row["pojistovna_nazev"]. '</option>';      
    }       
        }
    $conn->close();

?>
    </select>
    </div>
    </div>
</div>
    
<h4>Zaměstnání</h4>
<div class="row">
    <div class="col-sm-4" <?echo $chyba_zamestnani;?>>
    <div class="form-group">
    <label for="uzivatel">Typ zaměstnání:</label>
    <select class="form-control" id="zamestnani" name="zamestnani" required>
    <option value = "0"> --- Vyberte typ zaměstnání --- </option>
    <? 
    require "pripojeni_databaze.php";
    $sql = "SELECT * FROM seznam_zamestnani ORDER BY seznam_zamestnani_hodnota DESC";  
    $result = $conn->query($sql); 
     while($row = $result->fetch_assoc()) {     
            if ($uzivatel_zamestnani == $row["seznam_zamestnani_id"]){
      echo '<option value = "' .$row["seznam_zamestnani_id"]. '" selected>' . $row["seznam_zamestnani_hodnota"]. "</option>\n";        
            }else{
      echo '<option value = "' .$row["seznam_zamestnani_id"]. '">' . $row["seznam_zamestnani_hodnota"]. "</option>\n";      
    }       
        }
    $conn->close(); 
    ?>
    </select>
    </div>
    </div>
    <div class="col-sm-2" <?echo $chyba_open_space;?>>
    <div class="form-group">
    <label for="uzivatel">Práce v open space:</label>
    <select class="form-control" id="open_space" name="open_space">
    <? if ($uzivatel_open_space=="Ne"){ ?>    
    <option value = "0"> --- open space ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne" selected>Ne</option>
    <? }elseif ($uzivatel_open_space=="Ano"){ ?>
    <option value = "0"> --- open space ---</option>
    <option value="Ano" selected>Ano</option>
    <option value="Ne">Ne</option>
    <? }else{ ?>
    <option value = "0"> --- open space ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne">Ne</option>
    <? } ?>  
    </select> 
   </div>
   </div>
</div>


<div class="row">
    <div class="col-sm-4" <?echo $chyba_hodiny_pc;?>>
    <div class="form-group">
    <label for="uzivatel">Kolik hodin denně trávíte u počítače:</label>
    <select class="form-control" id="hodiny_pc" name="hodiny_pc">
    <option value = "0"> --- Vyberte počet hodin --- </option>

    <? 
    require "pripojeni_databaze.php";
    $sql = "SELECT * FROM seznam WHERE seznam_cislo = '6' ORDER BY seznam_hodnota ASC";    
    $result = $conn->query($sql); 
     while($row = $result->fetch_assoc()) {     
            if ($uzivatel_hodiny_pc == $row["seznam_id"]){
      echo '<option value = "' .$row["seznam_id"]. '" selected>' . $row["seznam_hodnota"]. " hodin(y)</option>\n";        
            }else{
      echo '<option value = "' .$row["seznam_id"]. '">' . $row["seznam_hodnota"]. " hodin(y)</option>\n";      
    }       
        }
    $conn->close();
    ?>
    </select>
    </div>
    </div>
    <div class="col-sm-2" <?echo $chyba_manazer;?>>
    <div class="form-group">
    <label for="uzivatel">Manažerská pozice:</label>
    <select class="form-control" id="manazer" name="manazer">
    <? if ($uzivatel_manazer=="Ne"){ ?>    
    <option value = "0"> --- Manažer ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne" selected>Ne</option>   
    <? }elseif ($uzivatel_manazer=="Ano"){ ?>
    <option value = "0"> --- Manažer ---</option>
    <option value="Ano" selected>Ano</option>
    <option value="Ne">Ne</option>  
    <? }else{ ?>
    <option value = "0"> --- Manažer ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne">Ne</option>
    <? } ?>  
    </select>
    </div>
    </div>
</div>

<h4>Registrace u RELAXARTE lékaře</h4>
<div class="row">
  
    <div class="col-sm-4" <?echo $chyba_lekar;?>>
    <div class="form-group">
    <label for="uzivatel">Jste regisrtován/a u některého našeho lékaře:</label>
    <select class="form-control" id="lekar" name="lekar">
    <option value = "0"> --- Vyberte lékaře --- </option>
    <? 
    require "pripojeni_databaze.php";
    $sql = "SELECT * FROM lekar  ORDER BY lekar_poradi ASC";    
    $result = $conn->query($sql); 
    while($row = $result->fetch_assoc()) {     
    if ($uzivatel_lekar == $row["lekar_id"]){
    echo '<option value = "' .$row["lekar_id"]. '" selected>' .$row["lekar_titul_1"]. "&nbsp". $row["lekar_jmeno"]. "&nbsp" . $row["lekar_prijmeni"]. "&nbsp" .$row["lekar_titul_2"]. " </option>\n";       
            }else{
    echo '<option value = "' .$row["lekar_id"]. '">' .$row["lekar_titul_1"]. "&nbsp". $row["lekar_jmeno"]. "&nbsp" . $row["lekar_prijmeni"]. "&nbsp" .$row["lekar_titul_2"]. " </option>\n";       
    }       
        }
    $conn->close();
    ?>
    </select>
    </div>
    </div>
</div>

 <? $uzivatel_id = encrypt_decrypt('encrypt', $uzivatel_id); ?>
<input type="hidden" id="stav" name="stav" value="odeslano">
<input type="hidden" id="uzivatel_login"  name="uzivatel_login" value="<? echo $uzivatel_login; ?>">
<input type="hidden" id="uzivatel_id"  name="uzivatel_id" value="<? echo $uzivatel_id; ?>">

<br>
<div class="row">
    <div class="col-sm-12">
    <center><button type="submit" class="btn btn-success">&nbsp;<span class="glyphicon glyphicon-save"></span>&nbsp;&nbsp;Uložit&nbsp;&nbsp;</button></center>
    </div>  
</div> 
 
</form>
<br>