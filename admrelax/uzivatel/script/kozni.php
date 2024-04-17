<?
//require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT *,
CASE
WHEN kozni_atopicky_ekzem = 0 THEN 'Ne'
WHEN kozni_atopicky_ekzem = 1 THEN 'Atopický ekzém'
END AS kozni_atopicky_ekzem,
CASE
WHEN kozni_seboroicka_dermatitida = 0 THEN 'Ne'
WHEN kozni_seboroicka_dermatitida = 1 THEN 'Seboroická dermatitida'
END AS kozni_seboroicka_dermatitida,
CASE
WHEN kozni_lupenka = 0 THEN 'Ne'
WHEN kozni_lupenka = 1 THEN 'Lupénka'
END AS kozni_lupenka,
CASE
WHEN kozni_lupy = 0 THEN 'Ne'
WHEN kozni_lupy = 1 THEN 'Lupy'
END AS kozni_lupy,
CASE
WHEN kozni_koprivka = 0 THEN 'Ne'
WHEN kozni_koprivka = 1 THEN 'Kopřivka'
END AS kozni_koprivka
                                 	
FROM zdravi_kozni
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>


      <label for="uzivatel">Problémy:</label>
<?       
     if ($row["kozni_atopicky_ekzem"] == 'Ne' 
     && $row["kozni_seboroicka_dermatitida"] == 'Ne' 
     && $row["kozni_lupenka"] == 'Ne' 
     && $row["kozni_lupy"] == 'Ne' 
     && $row["kozni_koprivka"] == 'Ne' 
     ){
     echo 'Žádný záznam o výskytu onemocnění';

      }else{

            if($row["kozni_atopicky_ekzem"]=='Ne'){
          echo $row["kozni_atopicky_ekzem"] = '';
            }else{
          echo $row["kozni_atopicky_ekzem"].', ';
            }

            if($row["kozni_seboroicka_dermatitida"]=='Ne'){
          echo $row["kozni_seboroicka_dermatitida"] = '';
            }else{
          echo $row["kozni_seboroicka_dermatitida"].', ';
            }

            if($row["kozni_lupenka"]=='Ne'){
          echo $row["kozni_lupenka"] = '';
            }else{
          echo $row["kozni_lupenka"].', ';
            }

            if($row["kozni_lupy"]=='Ne'){
          echo $row["kozni_lupy"] = '';
            }else{
          echo $row["kozni_lupy"].', ';
            }            

            if($row["kozni_koprivka"]=='Ne'){
          echo $row["kozni_koprivka"] = '';
            }else{
          echo $row["kozni_koprivka"].', ';
            }

      }

?>
<br><br>
</div>
</div>
<?  }
//$conn->close(); ?>
<br>
