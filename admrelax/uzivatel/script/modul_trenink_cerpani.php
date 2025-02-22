<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");
$treninkovy_plan_cerpani_id = htmlspecialchars(trim("$_POST[treninkovy_plan_cerpani_id]"));
$prihlaseny_uzivatel_form = addslashes(htmlspecialchars(trim("$_POST[prihlaseny_uzivatel]")));

echo 'ID:'.$treninkovy_plan_cerpani_id.'<br>';
echo 'Prihlaseny uzivatel:'.$prihlaseny_uzivatel_form.'<br>';

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";
$sql_trenink_plan = "SELECT * FROM treninkovy_plan WHERE treninkovy_plan_id = $treninkovy_plan_cerpani_id LIMIT 1 ";
$result_trenink_plan = $conn->query($sql_trenink_plan);
while($radek_trenink_plan = $result_trenink_plan->fetch_assoc()) {
$k_cerpani = $radek_trenink_plan["k_cerpani"];    
}


    if ($k_cerpani == 1){
        $sql = "UPDATE treninkovy_plan SET k_cerpani = k_cerpani -1,
        prihlaseny_uzivatel = '$prihlaseny_uzivatel_form',
        stav_treninku = 2,
        datum = NOW()
        WHERE treninkovy_plan_id = $treninkovy_plan_cerpani_id LIMIT 1";

    }else{
        $sql = "UPDATE treninkovy_plan SET k_cerpani = k_cerpani -1,
        prihlaseny_uzivatel = '$prihlaseny_uzivatel_form',
        datum = NOW()
        WHERE treninkovy_plan_id = $treninkovy_plan_cerpani_id LIMIT 1";

    }


conn->query($sql) === TRUE) {    
} else {
echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
}  












                            
                    





?>




