<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php'; ?>
<? require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php"; ?>

<? $sql = "SELECT * FROM role WHERE role_id = '2'";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $role = $row["role_nazev"];
  }
    } else {
echo "0 results";
}$conn->close();
?>

 <h3>Založení nového účtu - role: <? echo $role; ?></h3>
  <form action="zalozeni_admin.php" method="post">
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
    require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";;
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
     if ($row["prefix_id"] == $uzivatel_prefix){     
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
 
<div class="col-sm-3" <?echo $chyba_mobil;?>>
    <div class="form-group">
    <label for="uzivatel">Telefon:</label>
    <input type="text" class="form-control form-control-sm" name="mobil" maxlength="12" value = "<?echo $uzivatel_mobil;?>"  placeholder="Telefonní číslo">
     </div>                      
        </div>  
            </div> 

  <div class="row">
  <div class="col-sm-3" <?echo $chyba_login;?>>
       <div class="form-group">
      <label for="uzivatel">Login:</label>
  <input type="text" class="form-control form-control-sm" name="login"  value = "<?echo $uzivatel_login;?>" placeholder="Přihlašovací jméno" >
    </div> 
    </div>
    </div>
    
 
 
 <style>
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
} 
 </style> 
 
  
<div class="row">
  <div class="col-sm-3" <?echo $chyba_heslo;?>>
       <div class="form-group">
      <label for="uzivatel">Heslo:</label>
      <input type="password" id="heslo"  class="form-control form-control-sm" name="heslo" value = "<?echo $uzivatel_heslo_form;?>" placeholder="Heslo">
      <span toggle="#heslo" class="fa fa-fw fa-eye field-icon toggle-password"></span>
    </div> 
    </div>
    
    

    
    
  <div class="col-sm-3" <?echo $chyba_heslo_2;?>>
       <div class="form-group">
      <label for="uzivatel">Zadejte heslo znovu:</label>
      <input type="password" id="heslo2" class="form-control form-control-sm" name="heslo_2" value = "<?echo $uzivatel_heslo_2;?>" placeholder="Kontrola hesla">
      <span toggle="#heslo2" class="fa fa-fw fa-eye field-icon toggle-password"></span>
    </div>   
  </div>

<script>
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
}); 
 </script> 


  </div>  
    
<input type="hidden" id="stav" name="stav" value="odeslano">
<br>
<div class="row">
  <div class="col-sm-12">
    <center><button type="submit" class="btn btn-success">&nbsp;<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Uložit&nbsp;&nbsp;</button></center>
      </div>  
  </div>  
  </form>
  
