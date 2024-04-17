<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php'; ?>
<? require $_SERVER['DOCUMENT_ROOT']."/pripojeni_databaze.php"; ?>
<? $sql = "SELECT * FROM role WHERE role_id = '2'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    $role = $row["role_nazev"];
  }
$conn->close();
?>
 <h3>Editace účtu - role: <? echo $role; ?></h3> 
 <form action="#" method="post">

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
      <input type="text" class="form-control form-control-sm" name="jmeno" value = "<?echo $uzivatel_jmeno;?>" placeholder="Jméno">
    </div> 
    </div>
  <div class="col-sm-3" <?echo $chyba_prijmeni;?>>
       <div class="form-group">
      <label for="uzivatel">Přijmení:</label>
      <input type="text" class="form-control form-control-sm" name="prijmeni" value = "<?echo $uzivatel_prijmeni;?>" placeholder="Přijmení">
    </div>   
  </div>
  </div>

<div class="row">
  <div class="col-sm-3" <?echo $chyba_email;?>>
       <div class="form-group">
      <label for="uzivatel">E-mail:</label>
      <input type="email" class="form-control form-control-sm" name="email" value = "<?echo $uzivatel_email;?>" placeholder="např. jmeno.prijmeni@domena.com">
    </div> 
    </div>
        

  <div class="col-sm-3">
       <div class="form-group">
      <label for="uzivatel">Prefix:</label>
 <select class="form-control" id="prefix" name="prefix">
<? 
    require $_SERVER['DOCUMENT_ROOT']."/pripojeni_databaze.php";
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
    <input type="text" class="form-control form-control-sm" name="mobil" maxlength="12" value = "<?echo $uzivatel_mobil;?>"  placeholder="Telefonní číslo">
     </div>                      
        </div>  
            </div>
            
<input type="hidden" id="stav" name="stav" value="odeslano">
<br>
<div class="row">
  <div class="col-sm-12">
    <center><button type="submit" class="btn btn-success">&nbsp;<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Uložit&nbsp;&nbsp;</button></center>
      </div>  
  </div>
  
  
 
             </form>