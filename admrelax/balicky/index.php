<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php'; ?>
<!DOCTYPE html>
<html lang="cs">
    <head>  
        <title>RELAX ARTE
        </title>  
        <meta charset="utf-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
        <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />  
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">  
        <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">    
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->    
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
            <![endif]-->    
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>    
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>    
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>   
    </head>
<body>
<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/navigace/navigace.php'; ?>
    <div class="container">
<?


require "../pripojeni_databaze.php"; 
$balicek_id = base64_decode(htmlspecialchars(trim("$_GET[balicek_id]")));
            $sql_balicek = "SELECT * FROM balicek WHERE balicek_id = '$balicek_id' ";
$result_balicek = $conn->query($sql_balicek);
while($row_balicek = $result_balicek->fetch_assoc()) {
$balicek_nazev = $row_balicek["balicek_nazev"];
$balicek_popis = $row_balicek["balicek_popis"];
$balicek_cena = $row_balicek["balicek_cena"];
       }
$conn->close();
?>
<p>
<h3>
<? echo mb_strtoupper($balicek_nazev); ?>:&nbsp;<? echo $balicek_popis; ?>

<? 
if (!$balicek_cena){
  //  echo 'Cena: Neuvedena';
    } else {
echo '&nbsp;('. $balicek_cena.',- Kč)'; 
    }
?>
</h3>
 
<table class="table table-hover" style="width:60%;" border = "1"> 
  <thead>
    <tr style="background-color:#c0e576;">
      <th scope="col" style=" border: 1px solid #999;">Procedura</th>
      <th scope="col" style=" border: 1px solid #999;">Počet</th>
      <th scope="col" style=" border: 1px solid #999;">Délka</th>
    </tr>
  </thead>
    <tbody>

<? 
require "../pripojeni_databaze.php";  
$sql = "SELECT * FROM sestava
INNER JOIN balicek ON (sestava.sestava_balicek_id = balicek.balicek_id) 
INNER JOIN procedura ON (sestava.sestava_procedura_id = procedura.procedura_id)
INNER JOIN pocet ON (sestava.sestava_pocet_id = pocet.pocet_id)
INNER JOIN doba ON (sestava.sestava_doba_id = doba.doba_id) 
WHERE sestava.sestava_balicek_id = '$balicek_id'
";
// WHERE sestava.sestava_balicek_id = '$balicek_id' AND sestava.sestava_pocet_id > 1
   
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
echo '<tr>';
echo '<td style=" border: 1px solid #999;">' .$row["procedura_nazev"]. '</td>';
echo '<td style=" border: 1px solid #999;">' .$row["pocet_pocet"]. '</td>';
echo '<td style=" border: 1px solid #999;">' .($row["doba_cas"]/60). '&nbsp;h &nbsp;(' .$row["doba_cas"]. '&nbsp;min)</td>';
echo '</tr>';     
         }
$conn->close();

?>      
    
  </tbody>
</table>    
</p>    
    </div>    
</body>        
</html>