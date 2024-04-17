<?
$sql = "SELECT *,
CASE
WHEN cordyceps_1= 0 THEN 'Ne'
WHEN cordyceps_1 = 1 THEN 'H1 Cordyceps'
END AS cordyceps_1,
CASE
WHEN coriolus_2= 0 THEN 'Ne'
WHEN coriolus_2 = 1 THEN 'H2 Coriolus'
END AS coriolus_2,
CASE
WHEN reishi_4= 0 THEN 'Ne'
WHEN reishi_4 = 1 THEN 'H4 Reishi'
END AS reishi_4,
CASE
WHEN triton_3= 0 THEN 'Ne'
WHEN triton_3 = 1 THEN 'H3 Triton'
END AS triton_3

FROM zdravi_houby
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    if($row["cordyceps_1"] == 'Ne'
    && $row["coriolus_2"] == 'Ne'
    && $row["reishi_4"] == 'Ne'
    && $row["triton_3"] == 'Ne'
    ){
        echo 'Žádný záznam';
    
    }else{

            if($row["cordyceps_1"] == 'Ne'){
            echo $row["cordyceps_1"]='';
            }else{
            echo $row["cordyceps_1"].', ';
            }

            if($row["coriolus_2"] == 'Ne'){
                echo $row["coriolus_2"]='';
                }else{
                echo $row["coriolus_2"].', ';
                }

            if($row["reishi_4"] == 'Ne'){
                echo $row["reishi_4"]='';
                 }else{
                echo $row["reishi_4"].', ';
                    }                

            if($row["triton_3"] == 'Ne'){
                echo $row["triton_3"]='';
                     }else{
                 echo $row["triton_3"].', ';
                            }                    


    }

}


?>