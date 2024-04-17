<? require "pripojeni_databaze.php"; ?>
<? $sql = "SELECT * FROM role WHERE role_id = '3'";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $role = $row["role_nazev"];
  }
    } else {
echo "0 results";
}$conn->close();
 
 
 
  function radek($pocet, $label) {
  echo "<div class=\"col-sm-".$pocet."\">\n";
  echo "<div class=\"form-group\">\n"; 
  echo "<label for=\"uzivatel\">".$label."</label>\n";
   }

  function radky($pocet, $label, $chyba) {
  echo "<div class=\"col-sm-".$pocet."\" ".$chyba.">\n";
  echo "<div class=\"form-group\">\n"; 
  echo "<label for=\"uzivatel\">".$label."</label>\n";
   }


?>


<script src="../js/jencisla.js"></script> 
 
<h3>Založení nového účtu - Krok 1</h3>
<hr> 
<h4>Kontaktní a osobní údaje</h4>
 <form action="krok_01_ulozeni.php" method="post">
  

<div class="row">
<? radky(3,"Jméno:", $chyba_jmeno) ?>
<input type="text" class="form-control form-control-sm" name="jmeno" value = "<?echo $uzivatel_jmeno;?>" placeholder="Jméno" required>
</div> 
</div>
     
<? radky(3,"Přijmení:", $chyba_prijmeni) ?>      
<input type="text" class="form-control form-control-sm" name="prijmeni" value = "<?echo $uzivatel_prijmeni;?>" placeholder="Přijmení" required>
</div>   
</div>
  
<? radky(2,"Pohlaví:", $chyba_pohlavi) ?> 
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
</div>

<div class="row">
<div class="col-sm-3" <?echo $chyba_narozeni;?>>
<div class="form-group">
<label for="uzivatel">Datum narození:</label>
<input type="date" class="form-control form-control-sm" name="datum_narozeni"  value = "<?echo $uzivatel_narozeni;?>" required>
</div> 
</div>
<? radky(3,"Rodné číslo:", $chyba_rc) ?> 
<input type="text" class="form-control form-control-sm" name="rodne_cislo" maxlength="11" value = "<?echo $uzivatel_rc;?>" placeholder="Rodné číslo" required>
</div>   
</div>
</div>
  
<div class="row">
<? radky(3,"Ulice:", $chyba_ulice) ?> 
<input type="text" class="form-control form-control-sm" name="ulice" value = "<?echo $uzivatel_ulice;?>" placeholder="Ulice" required>
</div> 
</div>
<? radky(2,"Číslo popisné:", $chyba_cp) ?>       
<input type="text" class="form-control form-control-sm" name="cislo_popisne" value = "<?echo $uzivatel_cp;?>" placeholder="Číslo popisné" required>
</div>   
</div>
<? radky(2,"Číslo orientační:", $chyba_co) ?>  
<input type="text" class="form-control form-control-sm" name="cislo_orientacni" value = "<?echo $uzivatel_co;?>" placeholder="Číslo orientační">
</div>   
</div>  
</div>  

<div class="row">
<? radky(3,"Obec:", $chyba_mesto) ?>             
<input type="text" class="form-control form-control-sm" name="mesto" value = "<?echo $uzivatel_mesto;?>" placeholder="Název obce" required>
</div> 
</div>
<? radky(1,"PSČ:", $chyba_psc) ?>   
<input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" name="psc" maxlength="5" value = "<?echo $uzivatel_psc;?>" placeholder="PSČ" required>
</div>   
</div>
</div>

<div class="row">
<? radky(3,"Email:", $chyba_email) ?>   
<input type="email" class="form-control form-control-sm" name="email" maxlength="50" value = "<?echo $uzivatel_email;?>" placeholder="např. jmeno.prijmeni@domena.com" required>
</div> 
</div>
        
<? radky(3,"Prefix:", $chyba_prefix) ?>  
<select class="form-control" id="prefix" name="prefix">
<? 
    require "pripojeni_databaze.php";
    $sql = "SELECT * FROM prefix ORDER BY prefix_stat ASC";


            if ($stav !== 'odeslano'){
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    if ($row["prefix_predvolba"] == '420'){
    echo '<option value = "' .$row["prefix_id"]. '" selected>+' .$row["prefix_predvolba"].'&nbsp;' .$row["prefix_stat"]. "</option>\n"; 
    }else{
    echo '<option value = "' .$row["prefix_id"]. '">+' .$row["prefix_predvolba"].'&nbsp;' .$row["prefix_stat"]. "</option>\n"; 
        }    
      }
      
          }else{
    $result = $conn->query($sql); 
     while($row = $result->fetch_assoc()) {           
     if ($row["prefix_id"] == $uzivatel_prefix){     
    echo '<option value = "' .$row["prefix_id"]. '" selected>+' .$row["prefix_predvolba"].'&nbsp;' .$row["prefix_stat"]. "</option>\n";   
  
        }else{
    echo '<option value = "' .$row["prefix_id"]. '">+' .$row["prefix_predvolba"].'&nbsp;' .$row["prefix_stat"]. "</option>\n";         
        
    }  
         
        }   
            }     
      
        $conn->close();
?>
   </select>
</div>
</div>
 
 
<? radky(3,"Mobil:", $chyba_mobil) ?>   
<input type="text" onkeypress="return isNumberKey(event)" class="form-control form-control-sm" name="mobil" maxlength="12" value = "<?echo $uzivatel_mobil;?>"  placeholder="Telefonní číslo" required>
</div>                      
</div>  
</div> 


<div class="row">
<? radky(5,"Zdravotní pojišťovna:", $chyba_pojistovna) ?>       
<select class="form-control" id="pojistovna" name="pojistovna" required>
<option value = "0"> --- Vyberte zdravotní pojišťovnu ---</option>
<? 
    require "pripojeni_databaze.php";
    $sql = "SELECT * FROM pojistovny WHERE pojistovna_cislo NOT IN ('0') ORDER BY pojistovna_cislo ASC";    

        if ($stav !== 'odeslano'){
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    echo '<option value = "' .$row["pojistovna_id"]. '">' . $row["pojistovna_cislo"]. '&nbsp;-&nbsp;' .$row["pojistovna_zkratka"]. '&nbsp;-&nbsp;' .$row["pojistovna_nazev"]. "</option>\n"; 
       }

        }else{
     $result = $conn->query($sql); 
     while($row = $result->fetch_assoc()) {     
            if ($row["pojistovna_id"] == $uzivatel_pojistovna){
      echo '<option value = "' .$row["pojistovna_id"]. '" selected>' . $row["pojistovna_cislo"]. '&nbsp;-&nbsp;' .$row["pojistovna_zkratka"]. '&nbsp;-&nbsp;' .$row["pojistovna_nazev"]. "</option>\n";        
            }else{
      echo '<option value = "' .$row["pojistovna_id"]. '">' . $row["pojistovna_cislo"]. '&nbsp;-&nbsp;' .$row["pojistovna_zkratka"]. '&nbsp;-&nbsp;' .$row["pojistovna_nazev"]. "</option>\n";      
    }       
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
<? radky(4,"Typ zaměstnání:", $chyba_zamestnani) ?> 
<select class="form-control" id="zamestnani" name="zamestnani" required>
<option value = "0"> --- Vyberte typ zaměstnání --- </option>
<? 
 //   require "pripojeni_databaze.php";
    require $_SERVER['DOCUMENT_ROOT']."/db/pripojeni_databaze.php";
    $sql = "SELECT * FROM seznam_zamestnani ORDER BY seznam_zamestnani_poradi ASC";    

        if ($stav !== 'odeslano'){
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    echo '<option value = "' .$row["seznam_zamestnani_id"]. '">' . $row["seznam_zamestnani_hodnota"]. "</option>\n"; 
       }

        }else{
     $result = $conn->query($sql); 
     while($row = $result->fetch_assoc()) {     
            if ($row["seznam_zamestnani_id"] == $uzivatel_zamestnani){
      echo '<option value = "' .$row["seznam_zamestnani_id"]. '" selected>' . $row["seznam_zamestnani_hodnota"]. "</option>\n";        
            }else{
      echo '<option value = "' .$row["seznam_zamestnani_id"]. '">' . $row["seznam_zamestnani_hodnota"]. "</option>\n";      
    }       
        }
             }
   $conn->close();

?>
</select>
    </div> 
    </div>

    
<? radky(2,"Práce v Open space:", $chyba_open_space) ?>    
<select class="form-control" id="open_space" name="open_space">
    <? if ($uzivatel_open_space=="Ne"){ ?>    
    <option value = "0"> --- Open space ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne" selected>Ne</option>
    <? }elseif ($uzivatel_open_space=="Ano"){ ?>
    <option value = "0"> --- Open space ---</option>
    <option value="Ano" selected>Ano</option>
    <option value="Ne">Ne</option>
    <? }else{ ?>
    <option value = "0"> --- Open space ---</option>
    <option value="Ano">Ano</option>
    <option value="Ne">Ne</option>
    <? } ?>  
</select> 
    </div> 
    </div> 
</div>
    <div class="row">
<? radky(4,"Kolik hodin denně trávíte u počítače:", $chyba_hodiny_pc) ?> 
<select class="form-control" id="hodiny_pc" name="hodiny_pc">
<option value = "0"> --- Vyberte počet hodin --- </option>
<? 
    require "pripojeni_databaze.php";
    $sql = "SELECT * FROM seznam WHERE seznam_cislo = '6' ORDER BY seznam_hodnota ASC";    

        if ($stav !== 'odeslano'){
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    echo '<option value = "' .$row["seznam_id"]. '">' . $row["seznam_hodnota"]. " hodin(y)</option>\n"; 
       }

        }else{
     $result = $conn->query($sql); 
     while($row = $result->fetch_assoc()) {     
            if ($row["seznam_id"] == $uzivatel_hodiny_pc){
      echo '<option value = "' .$row["seznam_id"]. '" selected>' . $row["seznam_hodnota"]. " hodin(y)</option>\n";        
            }else{
      echo '<option value = "' .$row["seznam_id"]. '">' . $row["seznam_hodnota"]. " hodin(y)</option>\n";      
    }       
        }
             }
   $conn->close();

?>
</select>

    </div> 
    </div>


<? radky(2,"Manažerská pozice:", $chyba_manazer) ?>      
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
<? radky(4,"Jste regisrtován/a u některého našeho lékeře:", $chyba_lekar) ?>      
<select class="form-control" id="hlekar" name="lekar">
<option value = "0"> --- Vyberte lékaře --- </option>
<? 
    require "pripojeni_databaze.php";
    $sql = "SELECT * FROM lekar  ORDER BY lekar_poradi ASC";    

        if ($stav !== 'odeslano'){
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    echo '<option value = "' .$row["lekar_id"]. '">' .$row["lekar_titul_1"]. "&nbsp". $row["lekar_jmeno"]. "&nbsp" . $row["lekar_prijmeni"]. "&nbsp" .$row["lekar_titul_2"]. " </option>\n"; 
       }

        }else{
     $result = $conn->query($sql); 
     while($row = $result->fetch_assoc()) {     
            if ($row["lekar_id"] == $uzivatel_lekar){
      echo '<option value = "' .$row["lekar_id"]. '" selected>' .$row["lekar_titul_1"]. "&nbsp". $row["lekar_jmeno"]. "&nbsp" . $row["lekar_prijmeni"]. "&nbsp" .$row["lekar_titul_2"]. " </option>\n";       
            }else{
    echo '<option value = "' .$row["lekar_id"]. '">' .$row["lekar_titul_1"]. "&nbsp". $row["lekar_jmeno"]. "&nbsp" . $row["lekar_prijmeni"]. "&nbsp" .$row["lekar_titul_2"]. " </option>\n";       
    }       
        }
             }
   $conn->close();

?>
</select>

    </div> 
    </div>
</div>
    <input type="hidden" id="stav" name="stav" value="odeslano">
    <div class="row">
    <div class="col-sm-12">
    <br><br>
    <center><button type="submit" class="btn btn-success">&nbsp;<span class="glyphicon glyphicon-save"></span>&nbsp;&nbsp;Uložit a přejít na krok 2&nbsp;&nbsp;</button></center>
    </div>  
    </div>
    <br><br>   
    </form>


