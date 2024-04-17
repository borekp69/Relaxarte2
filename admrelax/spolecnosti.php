<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php'; ?>
<!DOCTYPE html>
<html lang="cs">
<head>  
<title>RELAX ARTE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>
<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/navigace/navigace.php'; ?>
    <div class="container">

<table class="table table-striped">    
<thead>        
<tr style="background-color:#c0e576;">            
<th>Název společnosti</th>
<th>IČO</th>
<th>Ulice</th> 
<th>Obec</th>
<th>Stav</th> 
<th>&nbsp;</th>
             
</tr>    
</thead>  
<tbody>


    <?
    require "sifrovani_dat.php";
    require "pripojeni_databaze.php";               
    $sql = "SELECT * FROM spolecnost 
    INNER JOIN prefix ON (spolecnost.spolecnost_prefix_kontakt = prefix.prefix_id) ORDER BY spolecnost_nazev ASC
    ";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    ?>


    <tr>
    <td><? echo $row["spolecnost_nazev"];?>
    <?
    $zaznamy = $row["spolecnost_id"]; 
    $sql_pocet_spolecnost = "SELECT COUNT(*) FROM uzivatel WHERE uzivatel_spolecnost = '$zaznamy' ";
    $sql_data_spolecnost = mysqli_query($conn, $sql_pocet_spolecnost);
    $count_spolecnost = mysqli_fetch_array($sql_data_spolecnost);
    $pocet_zaznamu_spolecnost = array_shift($count_spolecnost);
    ?>    
    <b>(<? echo $pocet_zaznamu_spolecnost;?>)</b>
    </td>
    <td><? echo $row["spolecnost_ico"];?></td>
    <td><? echo $row["spolecnost_ulice"];?>&nbsp;<? echo $row["spolecnost_cp"];?></td>
    <td><? echo $row["spolecnost_mesto"];?></td>
    <td>
           <?
           if ($row["spolecnost_stav"] == 'A'){
           echo '<font color="green">Aktivní</font>';
           }else{
           echo '<font color="red">Neaktivní<font>';
           }
           ?>    
    </td>
     <td>     
      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<? echo encrypt_decrypt('encrypt', $row["spolecnost_id"]);?>">Detail</button>
        <!-- Modal -->
        <div class="modal fade" id="<? echo encrypt_decrypt('encrypt', $row["spolecnost_id"]);?>" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Informace o společnosti</h4>
        </div>
        <div class="modal-body">
          <p>
           <b><u>Sídlo společnosti:</u></b><br>
           <b><? echo $row["spolecnost_nazev"];?></b><br>
           <u>IČO:</u>&nbsp;<? echo $row["spolecnost_ico"];?><br>
           <u>DIČ:</u>&nbsp;<? echo $row["spolecnost_dic"];?><br>
           <? echo $row["spolecnost_ulice"];?>&nbsp;<? echo $row["spolecnost_cp"];
            if (strlen($row["spolecnost_co"]) > 1){ 
             echo '/'.$row["spolecnost_co"];
           }
            ?> 
           <br>
           <? echo $row["spolecnost_mesto"];?><br>
           <? echo $row["spolecnost_psc"];?><br>
          <br>
          <b><u>Kontakt společnosti:</u></b><br>
          <b><? echo $row["spolecnost_nazev_kontakt"];?></b><br>
           <? echo $row["spolecnost_ulice_kontakt"];?>&nbsp;<? echo $row["spolecnost_cp_kontakt"];
            if (strlen($row["spolecnost_co_kontakt"]) > 1){ 
             echo '/'.$row["spolecnost_co_kontakt"];
           }
            ?>           
           <br>
           <? echo $row["spolecnost_mesto_kontakt"];?><br>
           <? echo $row["spolecnost_psc_kontakt"];?><br>
           <br>          

            <?
            if (strlen($row["spolecnost_osoba_kontakt"]) > 1){ 
            echo '<u>Kontaktní osoba:</u>&nbsp;<i>'.$row["spolecnost_osoba_kontakt"].'</i><br>';
            }
            ?>
 
            <?
            if (strlen($row["spolecnost_email_kontakt"]) > 1){ 
            echo '<u>E-mail:</u>&nbsp;<i>'.$row["spolecnost_email_kontakt"].'</i><br>';
            }
            ?>

            <?
            if (strlen($row["spolecnost_telefon_kontakt"]) > 1){ 
            echo '<u>Telefon:</u>&nbsp;+<i>'.$row["prefix_predvolba"].'&nbsp;'.$row["spolecnost_telefon_kontakt"].'</i><br>';
            }
            ?>
            
           <u>Stav:</u>&nbsp;
           <?
           if ($row["spolecnost_stav"] == 'A'){
           echo '<font color="green">Účet je aktivní</font>';
           }else{
           echo '<font color="red">Účet byl deaktivován<font>';
           }
           ?>
          </p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Zavřít</button>            
       </div>
       </div>
       </div>
       </div>
       
       
             <?
      if ($pocet_zaznamu_spolecnost > 0){
      ?>
  
      <a href="/admrelax/detail_uziv_spol.php?spolecnost_id=<? echo base64_encode( $row["spolecnost_id"]) ;?>" type="button" class="btn btn-warning btn-sm">Seznam</a>

      <?
      }else{
      echo '&nbsp;';
      }
      ?>
       
       
        </td> 
        </tr>

<?    
       }
$conn->close();
                    ?>

</tbody>
</table>



    </div>    
</body>        
</html>