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
            <table class="table table-striped">    
                <thead>        
                    <tr style="background-color:#c0e576;">            
                        <th>Přijmení a jméno
                        </th>            
                         <th>Login
                         </th>
                         <th> E-mail
                         </th>            
                         <th>Telefon
                        </th>            
                        <th>&nbsp;
                        </th>        
                    </tr>    
                </thead>  
                <tbody>
                
                
<?                
//require "../db/sifrovani_dat.php";
//require "../db/pripojeni_databaze.php";
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/sifrovani_dat.php";
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
               
$sql = "SELECT * FROM uzivatel 
INNER JOIN role ON (uzivatel.uzivatel_role = role.role_id)
INNER JOIN pojistovny ON (uzivatel.uzivatel_pojistovna = pojistovny.pojistovna_id)
INNER JOIN prefix ON (uzivatel.uzivatel_prefix = prefix.prefix_id) WHERE uzivatel_role = '2' AND uzivatel_stav = 'A' ORDER BY uzivatel_id ASC
";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    
                    ?>       
                           <tr>       
                           <td><b><? echo encrypt_decrypt('decrypt', $row["uzivatel_prijmeni"]);?>&nbsp;<? echo encrypt_decrypt('decrypt', $row["uzivatel_jmeno"]);?></b></td>       
                           <td><? echo $row["uzivatel_login"];?></td>        
                           <td><? echo encrypt_decrypt('decrypt', $row["uzivatel_email"]);?></td>        
                           <td>+<? echo $row["prefix_predvolba"];?> <? echo encrypt_decrypt('decrypt', $row["uzivatel_mobil"]);?></td>    
                           <td><a href="http://<? echo $_SERVER['HTTP_HOST'];?>/admrelax/administrator/uprava_form_admin.php?uzivatel_id=<? echo encrypt_decrypt('encrypt', $row["uzivatel_id"]);?>" type="button" class="btn btn-warning btn-sm">Upravit</a></td>            
                       </tr> 
       
<?    
       }
$conn->close();
                    ?>         
                </div>    
    </body>        
</html