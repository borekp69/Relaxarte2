<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php'; ?>
<h3>Založení nové společnosti</h3>
<form action="zalozeni_spol.php" method="post" name="spolecnost">
<h4>Sídlo společnosti</h4>

<div class="row">
<div class="col-sm-3" <?echo $chyba_spolecnost_ico;?>>
    <div class="form-group">
    <label for="fakturacni_ico">IČO:</label>
    <input type="text" class="prvek_fakturacni_ico" name="fakturacni_ico" id="fakturacni_ico" value="<?echo $spolecnost_ico;?>"  placeholder="zadejte IČO společnosti">
     </div>                      
        </div>
        
<div class="col-sm-3">
    <div class="form-group">
    <label for="fakturacni_ico">DIČ:</label>
    <input type="text" class="prvek_fakturacni_dic" name="fakturacni_dic"  value="<?echo $spolecnost_dic;?>"  placeholder="zadejte DIČ společnosti">
     </div>                      
        </div>
</div>  
         <button type="submit" class="tl_ares">&nbsp;&nbsp;Ověřit na ARESu&nbsp;&nbsp;</button>        
        <span id="ares_okno"></span>
        <div class="ajax_loader_ares"><div class="ajax_loader_ares_in"></div></div>

 <br><br>
 
<div class="row">
<div class="col-sm-3" <?echo $chyba_spolecnost_nazev;?>>
    <div class="form-group">
    <label for="fakturacni_firma">Společnost:</label>
    <input type="text" class="prvek_fakturacni_firma" name="fakturacni_firma" value="<?echo $spolecnost_nazev;?>"  placeholder="Název společnosti">
     </div>                      
</div>
</div>   
 
<div class="row">
<div class="col-sm-3"<?echo $chyba_spolecnost_ulice;?>>
    <div class="form-group">
    <label for="fakturacni_firma">Ulice:</label>
    <input type="text" class="prvek_fakturacni_adresa" name="fakturacni_adresa" value="<?echo $spolecnost_ulice;?>"  placeholder="Ulice">
     </div> 
</div>
    <div class="col-sm-2" <?echo $chyba_spolecnost_cp;?>>
    <div class="form-group">
    <label for="fakturacni_firma">Číslo popisné:</label>
    <input type="text" class="prvek_fakturacni_cp" name="fakturacni_cp" value="<?echo $spolecnost_cp;?>"  placeholder="Číslo popisné">
     </div> 
</div>


    <div class="col-sm-2">
    <div class="form-group">
    <label for="fakturacni_firma">Číslo orientační:</label>
    <input type="text" class="prvek_fakturacni_co" name="fakturacni_co" value="<?echo $spolecnost_co;?>"  placeholder="Číslo orientační">
     </div> 
</div>
</div>   
 


<div class="row">
<div class="col-sm-3" <?echo $chyba_spolecnost_mesto;?>>
    <div class="form-group">
    <label for="fakturacni_firma">Obec:</label>
    <input type="text" class="prvek_fakturacni_mesto" name="fakturacni_mesto" value="<?echo $spolecnost_mesto;?>"  placeholder="Název obce">
     </div> 
</div>
    <div class="col-sm-2" <?echo $chyba_spolecnost_psc;?>>
    <div class="form-group">
    <label for="fakturacni_firma">PSČ:</label>
    <input type="text" class="prvek_fakturacni_psc" name="fakturacni_psc" value="<?echo $spolecnost_psc;?>"  placeholder="PSČ">
     </div> 
</div>
</div> 


<script type="text/javascript" src="js/formular.js"></script>
<h4>Kontakt společnosti</h4>   
<b>Kontaktní adresa</b> &nbsp;&nbsp;<input type=radio name="copy" value="yes" onclick="data_copy()"; >&nbsp;Je stejná jako sídlo společnosti&nbsp;&nbsp;
<input type=radio name=copy value='no' onclick="data_copy()";>&nbsp;Je jiná  

<br><br>
<div class="row">
<div class="col-sm-3" <?echo $chyba_spolecnost_nazev_kontakt;?>>
    <div class="form-group">
    <label for="fakturacni_firma">Společnost:</label>
    <input type="text" class="prvek_fakturacni_firma2" name="fakturacni_firma2" value="<?echo $spolecnost_nazev_kontakt;?>"  placeholder="Název společnosti">
     </div>                      
</div>

<div class="col-sm-3">
    <div class="form-group">
    <label for="fakturacni_firma">Kontaktní osoba:</label>
    <input type="text" name="kontakt_osoba" value="<?echo $spolecnost_osoba_kontakt;?>"  placeholder="Kontaktní osoba">
     </div>                      
</div>

</div> 


<div class="row">
    <div class="col-sm-3" <?echo $chyba_spolecnost_ulice_kontakt;?>>
    <div class="form-group">
    <label for="fakturacni_firma">Ulice:</label>
    <input type="text" class="prvek_fakturacni_adresa2" name="fakturacni_adresa2" value="<?echo $spolecnost_ulice_kontakt;?>"  placeholder="Ulice">
     </div> 
</div>
    <div class="col-sm-2" <?echo $chyba_spolecnost_cp_kontakt;?>>
    <div class="form-group">
    <label for="fakturacni_firma">Číslo popisné:</label>
    <input type="text" class="prvek_fakturacni_cp2" name="fakturacni_cp2" value="<?echo $spolecnost_cp_kontakt;?>"  placeholder="Číslo popisné">
     </div> 
</div>
    <div class="col-sm-2">
    <div class="form-group">
    <label for="fakturacni_firma">Číslo orientační:</label>
    <input type="text" class="prvek_fakturacni_co2" name="fakturacni_co2" value="<?echo $spolecnost_co_kontakt;?>"  placeholder="Číslo orientační">
     </div> 
    </div>
</div>   


<div class="row">
    <div class="col-sm-3" <?echo $chyba_spolecnost_mesto_kontakt;?>>
    <div class="form-group">
    <label for="fakturacni_firma">Obec:</label>
    <input type="text" class="prvek_fakturacni_mesto2" name="fakturacni_mesto2" value="<?echo $spolecnost_mesto_kontakt;?>"  placeholder="Název obce">
     </div> 
    </div>
    <div class="col-sm-2" <?echo $chyba_spolecnost_psc_kontakt;?>>
    <div class="form-group">
    <label for="fakturacni_firma">PSČ:</label>
    <input type="text" class="prvek_fakturacni_psc2" name="fakturacni_psc2" value="<?echo $spolecnost_psc_kontakt;?>"  placeholder="PSČ">
    </div> 
    </div>
</div> 


<div class="row">
    <div class="col-sm-3">
    <div class="form-group">
    <label for="spolecnost">E-mail:</label>
    <input type="email" class="form-control form-control-sm" name="email" value = "<?echo $spolecnost_email_kontakt;?>" placeholder="např. jmeno.prijmeni@domena.com">
    </div> 
    </div>
        
    <div class="col-sm-3">
    <div class="form-group">
    <label for="spolecnost">Prefix:</label>
    <select class="form-control" id="prefix" name="prefix">
<? 
    require "pripojeni_databaze.php";
    $sql = "SELECT * FROM prefix ORDER BY prefix_stat ASC";


    if ($stav !== 'odeslano'){
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    if ($row["prefix_predvolba"] == '420'){
    echo '<option value = "' .$row["prefix_id"]. '" selected>+' .$row["prefix_predvolba"].'&nbsp;' .$row["prefix_stat"]. '</option>'; 
    }else{
    echo '<option value = "' .$row["prefix_id"]. '">+' .$row["prefix_predvolba"].'&nbsp;' .$row["prefix_stat"]. '</option>'; 
        }    
      }
      
          }else{
    $result = $conn->query($sql); 
     while($row = $result->fetch_assoc()) {           
     if ($row["prefix_id"] == $spolecnost_prefix_kontakt){     
    echo '<option value = "' .$row["prefix_id"]. '" selected>+' .$row["prefix_predvolba"].'&nbsp;' .$row["prefix_stat"]. '</option>';   
  
        }else{
    echo '<option value = "' .$row["prefix_id"]. '">+' .$row["prefix_predvolba"].'&nbsp;' .$row["prefix_stat"]. '</option>';         
        
    }  
         
        }   
            }     
      
        $conn->close();
?>
   </select>
    </div>
    </div>
 
    <div class="col-sm-3">
    <div class="form-group">
    <label for="spolecnost">Telefon:</label>
    <input type="text" class="form-control form-control-sm" name="telefon" maxlength="12" value = "<?echo $spolecnost_telefon_kontakt;?>"  placeholder="Telefonní číslo">
    </div>                      
    </div>  
</div> 
<input type="hidden" id="stav" name="stav" value="odeslano"> 
<div class="row">
    <div class="col-sm-12">
    <center><button type="submit" class="btn btn-success">&nbsp;<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Uložit&nbsp;&nbsp;</button></center>
    </div>  
</div>   
  </form> 
  <br><br>