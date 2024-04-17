<?

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
//$sql_termin = "SELECT * FROM psychika_procedury WHERE datum_procedury < NOW() AND stav_procedury = 1";
//$result_termin = $conn->query($sql_termin);
//while($radek_termin = $result_termin->fetch_assoc()) {
//$sql1 = "UPDATE psychika_procedury SET stav_procedury = 5 WHERE psychika_procedury_id = $radek_termin[psychika_procedury_id]";    
//echo 'Propadlý termín: '.$radek_termin["psychika_procedury_id"].'&nbsp;&nbsp;&nbsp;&nbsp; Datum procedury: '.$radek_termin["datum_procedury"].' &nbsp;&nbsp;&nbsp;&nbsp;uživatel_id:'.$radek_termin["uzivatel_id"].'<br>';
//if ($conn->query($sql1) === TRUE) {    
//} else {
//echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
//} 
//    }

$aktualni_den = date('Y-m-d');
$aktualni_den = date('Y-m-d', strtotime($aktualni_den. ' - 1 days'));

echo 'vcerejsi den :'.$aktualni_den;

SELECT * FROM psychika_procedury WHERE datum_procedury > DATE_ADD(NOW(), INTERVAL -1 DAY)


SELECT * FROM psychika_procedury WHERE datum_procedury < DATE_ADD(NOW(), INTERVAL -1 DAY) AND  stav_procedury = 1



echo '<br>';






?>