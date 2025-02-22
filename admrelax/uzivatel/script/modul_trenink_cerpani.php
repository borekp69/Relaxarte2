<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");

$treninkovy_plan_cerpani_id = htmlspecialchars(trim("$_POST[treninkovy_plan_cerpani_id]"));
$prihlaseny_uzivatel_form = addslashes(htmlspecialchars(trim("$_POST[prihlaseny_uzivatel]")));

echo 'ID:'.$treninkovy_plan_cerpani_id.'<br>';
echo 'Prihlaseny uzivatel:'.$prihlaseny_uzivatel_form.'<br>';



require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";

$sql = "UPDATE treninkovy_plan SET k_cerpani = k_cerpani -1,
prihlaseny_uzivatel = '$prihlaseny_uzivatel_form',
datum = NOW()
WHERE treninkovy_plan_id = $treninkovy_cerpani_id LIMIT 1";




        

                            
                    

//UPDATE users SET login_count = login_count + 1 WHERE id = 1;



?>