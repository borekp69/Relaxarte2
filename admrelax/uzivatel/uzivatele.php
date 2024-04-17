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
                        <th width ="180">Přijmení a jméno
                        </th>            
            
                        <th>Obec
                        </th>            
                        <th>Společnost
                        </th>            
                        <th>Telefon
                        </th>            
                        <th>Kód
                        </th>                         
                        <th>&nbsp;
                        </th>        
                    </tr>    
                </thead>  
                <tbody>
<?
//require "sifrovani_dat.php";
//require "pripojeni_databaze.php";
require $_SERVER['DOCUMENT_ROOT']."/db/sifrovani_dat.php";
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";


$uzivatel_stav = base64_decode(htmlspecialchars(trim("$_GET[uzivatel_stav]")));

$sql_pocet = "SELECT COUNT(*) FROM uzivatel WHERE uzivatel_role = '3' AND uzivatel_stav = '$uzivatel_stav'";
$sql_data = mysqli_query($conn, $sql_pocet);
$count = mysqli_fetch_array($sql_data);
$pocet_zaznamu = array_shift($count);

$po = '20';
$max_stranek = ceil($pocet_zaznamu / $po);
$url_stranka = ($_GET["stranka"] / $po) + 1;

if(empty($_GET["stranka"])) {
$stranka = 0;
} else {
$stranka = $_GET["stranka"];}

require "pripojeni_databaze.php";

//$sql = "SELECT * FROM uzivatel 
//INNER JOIN role ON (uzivatel.uzivatel_role = role.role_id)
//INNER JOIN pojistovny ON (uzivatel.uzivatel_pojistovna = pojistovny.pojistovna_id)
//INNER JOIN prefix ON (uzivatel.uzivatel_prefix = prefix.prefix_id) WHERE uzivatel_role = '3' AND uzivatel_stav = 'A' ORDER BY uzivatel_id ASC LIMIT ".intval($stranka).",$po
//";

$sql = "SELECT * FROM uzivatel
INNER JOIN spolecnost ON (uzivatel.uzivatel_spolecnost = spolecnost.spolecnost_id) 
INNER JOIN role ON (uzivatel.uzivatel_role = role.role_id)
INNER JOIN pojistovny ON (uzivatel.uzivatel_pojistovna = pojistovny.pojistovna_id)
INNER JOIN prefix ON (uzivatel.uzivatel_prefix = prefix.prefix_id) 
WHERE uzivatel_role = '3' AND uzivatel_stav = '$uzivatel_stav' ORDER BY uzivatel_id ASC LIMIT ".intval($stranka).",$po
";


if ($row["uzivatel_spolecnost"] == 0) {
$row["uzivatel_spolecnost"] = 'Nezadáno';
}

$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    
                    ?>   
                    <tr>
                    <td><b><? echo encrypt_decrypt('decrypt', $row["uzivatel_prijmeni"]);?>&nbsp;<? echo encrypt_decrypt('decrypt', $row["uzivatel_jmeno"]);?> </b></td>        
                    <td><? echo encrypt_decrypt('decrypt', $row["uzivatel_mesto"]);?></td>        
                    <td><? echo $row["spolecnost_nazev"]; ?></td>        
                    <td>+<? echo $row["prefix_predvolba"];?>    
                    <?
                      $telefon = encrypt_decrypt('decrypt', $row["uzivatel_mobil"]);
                      $telefon1 = substr($telefon,0,3);
                      $telefon2 = substr($telefon,3,3);
                      $telefon3 = substr($telefon,6,3);
                      $telefon_f = $telefon1 .'&nbsp;'.$telefon2.'&nbsp;'.$telefon3;
                      echo $telefon_f;?></td>
                    <td><i><? echo  $row["uzivatel_kod"];?> </i></td>              
                    <td><a href="./detail.php?uzivatel_id=<? echo encrypt_decrypt('encrypt', $row["uzivatel_id"]);?>" type="button" class="btn btn-info btn-sm">Detail</a>    
                            
                            <?
                            if ($row["uzivatel_stav"] == 'A'){
                            ?>
                           


        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal<? echo encrypt_decrypt('encrypt', $row["uzivatel_id"]);?>">Uzavřít</button>
        <!-- Modal -->
        <div class="modal fade" id="myModal<? echo encrypt_decrypt('encrypt', $row["uzivatel_id"]);?>" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Uzamčení klientského účtu - <? echo $row["uzivatel_login"];?></h4>
        </div>
        <div class="modal-body">
          <p>Opravdu chcete uzamknou klientský účet? <br>
          <b><? echo encrypt_decrypt('decrypt', $row["uzivatel_prijmeni"]);?>&nbsp;<? echo encrypt_decrypt('decrypt', $row["uzivatel_jmeno"]);?> </b><br>
           <? echo encrypt_decrypt('decrypt', $row["uzivatel_ulice"]);?>&nbsp;<? echo  $row["uzivatel_cp"];?><br>
           <? echo encrypt_decrypt('decrypt', $row["uzivatel_mesto"]);?>&nbsp;-&nbsp;<?echo $row["uzivatel_psc"]?><br>
           +<? echo $row["prefix_predvolba"];?>&nbsp; <? echo encrypt_decrypt('decrypt', $row["uzivatel_mobil"]);?><br>  
          </p>
           <form action="https://<? echo $_SERVER['HTTP_HOST'];?>/admrelax/uzivatel/uzamknout.php" method="post">
           <input type="hidden" name="uzivatel_id" value="<? echo encrypt_decrypt('encrypt', $row["uzivatel_id"]);?>">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Storno</button>            
        <button type="submit" class="btn btn-warning">Uzavřít</button>
          </form>
       </div>
       </div>
       </div>
       </div>
  

                          <?
                            }else{
                            ?>
 
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal<? echo encrypt_decrypt('encrypt', $row["uzivatel_id"]);?>">Otevřít</button>
        <!-- Modal -->
        <div class="modal fade" id="myModal<? echo encrypt_decrypt('encrypt', $row["uzivatel_id"]);?>" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Otevření klientského účtu - <? echo $row["uzivatel_login"];?></h4>
        </div>
        <div class="modal-body">
          <p>Opravdu chcete otevřít klientský účet?<br>
          <b><? echo encrypt_decrypt('decrypt', $row["uzivatel_prijmeni"]);?>&nbsp;<? echo encrypt_decrypt('decrypt', $row["uzivatel_jmeno"]);?> </b><br>
           <? echo encrypt_decrypt('decrypt', $row["uzivatel_ulice"]);?>&nbsp;<? echo  $row["uzivatel_cp"];?><br>
           <? echo encrypt_decrypt('decrypt', $row["uzivatel_mesto"]);?>&nbsp;-&nbsp;<?echo $row["uzivatel_psc"]?><br>
           +<? echo $row["prefix_predvolba"];?>&nbsp; <? echo encrypt_decrypt('decrypt', $row["uzivatel_mobil"]);?><br>           
          </p>
           <form action="https://<? echo $_SERVER['HTTP_HOST'];?>/admrelax/uzivatel/odemknout.php" method="post">
     
           <input type="hidden" name="uzivatel_id" value="<? echo encrypt_decrypt('encrypt', $row["uzivatel_id"]);?>">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Storno</button>            
        <button type="submit" class="btn btn-warning">Otevřít</button>
          </form>
       </div>
       </div>
       </div>
       </div>




                            <?                            
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
            
            
 <ul class="pagination pagination-sm">           
<?

for($i=0; $i < $max_stranek; $i++) {
  $cislo = ($i + 1);
  $url_cislo  = ($cislo * $po) - $po;
  if($url_stranka != $cislo) {
    echo '<li><a href="?&navigace_id=uzivatele_aktivni&uzivatel_stav='.base64_encode($uzivatel_stav).'&stranka='.$url_cislo.'">'.($i + 1)."</a></li>\n";  
   } else {
    echo '<li class="active"><a href="#">'.($i + 1)."</a></li>\n"; 
  }
}



?> 

  </ul>          
        </div> 

    </body>        
</html>