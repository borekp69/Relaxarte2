<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");



$treninkovy_plan_storno_relax_id = htmlspecialchars(trim("$_POST[treninkovy_plan_storno_relax_id]"));
$prihlaseny_uzivatel_form = addslashes(htmlspecialchars(trim("$_POST[prihlaseny_uzivatel]")));

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";

echo 'ID:'.$treninkovy_plan_storno_relax_id.'<br>';
echo 'Prihlaseny uzivatel:'.$prihlaseny_uzivatel_form.'<br>';



$sql = "UPDATE treninkovy_plan SET stav_treninku = 4,
prihlaseny_uzivatel = '$prihlaseny_uzivatel_form',
datum = NOW()
WHERE treninkovy_plan_id = $treninkovy_plan_storno_relax_id LIMIT 1";




if ($conn->query($sql) === TRUE) {    
} else {
echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
}  









?>


