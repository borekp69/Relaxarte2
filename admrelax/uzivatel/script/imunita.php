<?
//require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql = "SELECT *,
CASE
WHEN imunita_autoimunita = 0 THEN 'Ne'
WHEN imunita_autoimunita = 1 THEN 'autoimunita'
END AS imunita_autoimunita,
CASE
WHEN imunita_opakovane_virozy_chripky = 0 THEN 'Ne'
WHEN imunita_opakovane_virozy_chripky = 1 THEN 'opakované virózy/chřipky'
END AS imunita_opakovane_virozy_chripky,
CASE
WHEN imunita_snizena_imunita = 0 THEN 'Ne'
WHEN imunita_snizena_imunita = 1 THEN 'snížená imunita'
END AS imunita_snizena_imunita
FROM  zdravi_imunita
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>


      <label for="uzivatel">Problémy:</label>
<?       
     if ($row["imunita_autoimunita"] == 'Ne' && $row["imunita_opakovane_virozy_chripky"] == 'Ne' && $row["imunita_snizena_imunita"] == 'Ne' ){
     echo 'Žádný záznam o výskytu onemocnění';

      }else{

            if($row["imunita_autoimunita"]=='Ne'){
          echo $row["imunita_autoimunita"] = '';
            }else{
          echo $row["imunita_autoimunita"].', ';
            }

            if($row["imunita_opakovane_virozy_chripky"]=='Ne'){
          echo $row["imunita_opakovane_virozy_chripky"] = '';
            }else{
          echo $row["imunita_opakovane_virozy_chripky"].', ';
            }

            if($row["imunita_snizena_imunita"]=='Ne'){
          echo $row["imunita_snizena_imunita"] = '';
            }else{
          echo $row["imunita_snizena_imunita"].', ';
            }
      }

?>
<br><br>
</div>
</div>
<?  }
//$conn->close(); ?>
<br>