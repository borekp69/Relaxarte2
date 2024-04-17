<?
require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php'; 
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_pocet_admin = "SELECT COUNT(*) FROM uzivatel WHERE uzivatel_role = '2' AND uzivatel_stav = 'A'";
$sql_data_admin = mysqli_query($conn, $sql_pocet_admin);
$count_admin = mysqli_fetch_array($sql_data_admin);
$pocet_zaznamu_admin = array_shift($count_admin);

$sql_pocet = "SELECT COUNT(*) FROM uzivatel WHERE uzivatel_role = '3'";
$sql_data = mysqli_query($conn, $sql_pocet);
$count = mysqli_fetch_array($sql_data);
$pocet_zaznamu_uzivatele = array_shift($count);

$sql_pocet = "SELECT COUNT(*) FROM uzivatel WHERE uzivatel_role = '3' AND uzivatel_stav = 'A' ";
$sql_data = mysqli_query($conn, $sql_pocet);
$count = mysqli_fetch_array($sql_data);
$pocet_zaznamu_uzivatele_aktivni = array_shift($count);

$sql_pocet = "SELECT COUNT(*) FROM uzivatel WHERE uzivatel_role = '3' AND uzivatel_stav = 'N' ";
$sql_data = mysqli_query($conn, $sql_pocet);
$count = mysqli_fetch_array($sql_data);
$pocet_zaznamu_uzivatele_neaktivni = array_shift($count);

$sql_pocet_dodavatel = "SELECT COUNT(*) FROM uzivatel WHERE uzivatel_role = '4' AND uzivatel_stav = 'A'";
$sql_data_dodavatel = mysqli_query($conn, $sql_pocet_dodavatel);
$count_dodavatel = mysqli_fetch_array($sql_data_dodavatel);
$pocet_zaznamu_dodavatel = array_shift($count_dodavatel);


?>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/admrelax/index.php">RELAXARTE</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="https://<? echo $_SERVER['HTTP_HOST'];?>/admrelax/index.php?">Domů</a></li>



            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Klienti&nbsp;<b>(<?echo $pocet_zaznamu_uzivatele ;?>)</b><span class="caret"></span></a>
                          <ul class="dropdown-menu">
            <li><a href="https://<? echo $_SERVER['HTTP_HOST'];?>/admrelax/uzivatel/uzivatele.php?uzivatel_stav=<? echo base64_encode('A'); ?>">Aktivní klienti <b>(<?echo $pocet_zaznamu_uzivatele_aktivni ;?>)</b></a></li>
            <li><a href="https://<? echo $_SERVER['HTTP_HOST'];?>/admrelax/uzivatel/uzivatele.php?uzivatel_stav=<? echo base64_encode('N'); ?>">Neaktivní klienti <b>(<?echo $pocet_zaznamu_uzivatele_neaktivni ;?>)</b></a></li>            
                          </ul>
            </li>
            
           
                       
            <li><a href="https://<? echo $_SERVER['HTTP_HOST'];?>/admrelax/administrator/admini.php?">Administrátoři <b>(<?echo $pocet_zaznamu_admin ;?>)</b></a></li>
            
            
            
            
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Balíčky&nbsp;<span class="caret"></span></a>
            <ul class="dropdown-menu">
<?
require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_b = "SELECT * FROM balicek WHERE balicek_stav = 'A' ORDER BY balicek_nazev ASC";
$result = $conn->query($sql_b);
while($row = $result->fetch_assoc()) {
?>                        
<li><a href="https://<? echo $_SERVER['HTTP_HOST'];?>/admrelax/balicky/index.php?balicek_id=<? echo base64_encode($row["balicek_id"]);?>"><? echo $row["balicek_nazev"];?>&nbsp;-&nbsp;<? echo $row["balicek_popis"];?></a></li>


<?
       }
       $conn->close();
?>            
            </ul>
            </li>
            
            
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Společnost&nbsp;<span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="https://<? echo $_SERVER['HTTP_HOST'];?>/admrelax/spolecnosti.php">Přehled společností</a></li>
            <li><a href="https://<? echo $_SERVER['HTTP_HOST'];?>/admrelax/zalozeni_spol.php">Založit novou společnost</a></li>            
            </ul>
            </li>

            
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Založení účtu&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="https://<? echo $_SERVER['HTTP_HOST'];?>/admrelax/uzivatel/krok_01_ulozeni.php">
<? require $_SERVER['DOCUMENT_ROOT']."/pripojeni_databaze.php"; ?>
<? $sql = "SELECT * FROM role WHERE role_id = '3'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    $role = $row["role_nazev"];
  }
    $conn->close();
    echo $role; 
    ?>
    </a></li>
      
    <li><a href="https://<? echo $_SERVER['HTTP_HOST'];?>/admrelax/administrator/zalozeni_admin.php">
    

<? require $_SERVER['DOCUMENT_ROOT']."/pripojeni_databaze.php"; ?>
<? $sql = "SELECT * FROM role WHERE role_id = '2'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    $role = $row["role_nazev"];
  }
    $conn->close();
    echo $role; 
    ?>
         </a></li>

              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li><a href="">Uživatel:&nbsp;<b><?echo $_SESSION['uzivatel_login_session']; ?></b>&nbsp;(<? echo $_SESSION['uzivatel_jmeno_session']; ?>&nbsp;<? echo $_SESSION['uzivatel_prijmeni_session']; ?>)</a></li>
            <li><a href="">Role:&nbsp;<b><?echo $_SESSION['uzivatel_role_session']; ?></b></a></li>
            <li><a href="https://<? echo $_SERVER['HTTP_HOST'];?>/admrelax/uzivatel/hledat/index.php"><span class="glyphicon glyphicon-search"></span>&nbsp;Hledat</a></li>
            <li><a href="https://<? echo $_SERVER['HTTP_HOST'];?>/admrelax/konec_session.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Odhlásit</a></li>
          </ul>
        </div><!--/.nav-collapse -->
</div>
</nav>


 
            <br><br><br>