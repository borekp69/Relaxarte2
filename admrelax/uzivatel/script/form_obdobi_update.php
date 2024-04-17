<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache");
$uzivatel_id = htmlspecialchars(trim("$_POST[uzivatel_id]"));
$tcm_nejhorsi_obdobi_rok_form = addslashes(htmlspecialchars(trim("$_POST[tcm_nejhorsi_obdobi_rok]")));
$tcm_nejhorsi_obdobi_den_form = addslashes(htmlspecialchars(trim("$_POST[tcm_nejhorsi_obdobi_den]")));

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";

$sql = "UPDATE tcm_nejhorsi_obdobi SET
tcm_nejhorsi_obdobi_rok = '$tcm_nejhorsi_obdobi_rok_form ',
tcm_nejhorsi_obdobi_den = '$tcm_nejhorsi_obdobi_den_form',
datum =  NOW()
    WHERE uzivatel_id = '$uzivatel_id'
    ";
if ($conn->query($sql) === TRUE) {    
    } else {
  echo '<br><div class="alert alert-danger" role="alert"><b>Došlo k následující chybě:</b><hr>' . $conn->error . '</div>';
    }
    $conn->close(); 

require $_SERVER['DOCUMENT_ROOT']."/admrelax/db/pripojeni_databaze.php";

$sql = "SELECT * FROM tcm_nejhorsi_obdobi WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);
$result = $conn->query($sql);
while($radek = $result->fetch_assoc()) {
    $tcm_nejhorsi_obdobi_rok = $radek["tcm_nejhorsi_obdobi_rok"];
    $tcm_nejhorsi_obdobi_den = $radek["tcm_nejhorsi_obdobi_den"];
    $datum = $radek["datum"];
} 
$conn->close(); 
?>


<div id="tcmObdobi">
    <h4>Nejhorší období</h4> 
    <form id="tcm_obdobi" name="tcm_obdobi" method="post">

    <div class="row" style="background-color:#f9cccf;">
        <div class="col-sm-12">
        <br>
        <label for="uzivatel">Nejhorší roční období:</label>
        </div>
    </div>


        <? if($tcm_nejhorsi_obdobi_rok == 0 ){ ?>
    <div class="row" style="background-color:#f9cccf;">
        <div class="col-sm-3">
         <div class="radio">
         <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="1">jaro</label> 
        </div>
        </div>

        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="2">léto</label> 
        </div>
        </div>

        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="3">podzim</label> 
        </div>
        </div>

        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="4">zima</label> 
        </div>
        </div>
    </div>

        <? }elseif ($tcm_nejhorsi_obdobi_rok == 1){?>
    <div class="row" style="background-color:#f9cccf;">
        <div class="col-sm-3">
         <div class="radio">
         <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="1" checked>jaro</label> 
        </div>
        </div>

        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="2">léto</label> 
        </div>
        </div>

        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="3">podzim</label> 
        </div>
        </div>

        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="4">zima</label> 
        </div>
        </div>
    </div>



        <? }elseif ($tcm_nejhorsi_obdobi_rok == 2){?>
    <div class="row" style="background-color:#f9cccf;">
        <div class="col-sm-3">
         <div class="radio">
         <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="1">jaro</label> 
        </div>
        </div>

        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="2" checked>léto</label> 
        </div>
        </div>

        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="3">podzim</label> 
        </div>
        </div>

        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="4">zima</label> 
        </div>
        </div>
    </div>

        <? }elseif ($tcm_nejhorsi_obdobi_rok == 3){?>
    <div class="row" style="background-color:#f9cccf;">
        <div class="col-sm-3">
         <div class="radio">
         <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="1">jaro</label> 
        </div>
        </div>

        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="2">léto</label> 
        </div>
        </div>

        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="3" checked>podzim</label> 
        </div>
        </div>

        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="4">zima</label> 
        </div>
        </div>
    </div>

        <? }else{ ?>
    <div class="row" style="background-color:#f9cccf;">
        <div class="col-sm-3">
         <div class="radio">
         <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="1">jaro</label> 
        </div>
        </div>

        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="2">léto</label> 
        </div>
        </div>

        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="3">podzim</label> 
        </div>
        </div>

        <div class="col-sm-3">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_rok" value="4" checked>zima</label> 
        </div>
        </div>
    </div>
        <? } ?>


        <div class="row" style="background-color:#f9dadc;">
        <div class="col-sm-12">
        <br>
        <label for="uzivatel">Nejhorší denní doba :</label>
        </div>
    </div>

        <? if($tcm_nejhorsi_obdobi_den == 0 ){ ?>

            <div class="row" style="background-color:#f9dadc;">
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="1">probuzení</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="2">vstávání</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="3">dopoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="4">poledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="5">po obědě</label> 
        </div>
    </div>

</div>


<div class="row" style="background-color:#f9dadc;">  
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="6">odpoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="7">večer</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="8">před půlnocí</label> 
        </div>
    </div>

    <div class="col-sm-2">
    <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="9">po půlnocí</label> 
        </div>
    </div>

</div>


        <? }elseif ($tcm_nejhorsi_obdobi_den == 1){?>

            <div class="row" style="background-color:#f9dadc;">
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="1" checked>probuzení</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="2">vstávání</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="3">dopoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="4">poledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="5">po obědě</label> 
        </div>
    </div>

</div>


<div class="row" style="background-color:#f9dadc;">  
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="6">odpoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="7">večer</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="8">před půlnocí</label> 
        </div>
    </div>

    <div class="col-sm-2">
    <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="9">po půlnocí</label> 
        </div>
    </div>

</div>
            
            
        <? }elseif ($tcm_nejhorsi_obdobi_den == 2){?>

            <div class="row" style="background-color:#f9dadc;">
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="1">probuzení</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="2" checked>vstávání</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="3">dopoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="4">poledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="5">po obědě</label> 
        </div>
    </div>

</div>


<div class="row" style="background-color:#f9dadc;">  
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="6">odpoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="7">večer</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="8">před půlnocí</label> 
        </div>
    </div>

    <div class="col-sm-2">
    <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="9">po půlnocí</label> 
        </div>
    </div>

</div>

            

        <? }elseif ($tcm_nejhorsi_obdobi_den == 3){?>

            <div class="row" style="background-color:#f9dadc;">
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="1">probuzení</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="2">vstávání</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="3" checked>dopoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="4">poledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="5">po obědě</label> 
        </div>
    </div>

</div>


<div class="row" style="background-color:#f9dadc;">  
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="6">odpoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="7">večer</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="8">před půlnocí</label> 
        </div>
    </div>

    <div class="col-sm-2">
    <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="9">po půlnocí</label> 
        </div>
    </div>

</div>
        


        <? }elseif ($tcm_nejhorsi_obdobi_den == 4){?>
            <div class="row" style="background-color:#f9dadc;">
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="1">probuzení</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="2">vstávání</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="3">dopoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="4" checked>poledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="5">po obědě</label> 
        </div>
    </div>

</div>


<div class="row" style="background-color:#f9dadc;">  
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="6">odpoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="7">večer</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="8">před půlnocí</label> 
        </div>
    </div>

    <div class="col-sm-2">
    <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="9">po půlnocí</label> 
        </div>
    </div>

</div>


            
        <? }elseif ($tcm_nejhorsi_obdobi_den == 5){?>
            <div class="row" style="background-color:#f9dadc;">
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="1">probuzení</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="2">vstávání</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="3">dopoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="4">poledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="5" checked>po obědě</label> 
        </div>
    </div>

</div>


<div class="row" style="background-color:#f9dadc;">  
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="6">odpoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="7">večer</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="8">před půlnocí</label> 
        </div>
    </div>

    <div class="col-sm-2">
    <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="9">po půlnocí</label> 
        </div>
    </div>

</div>


        <? }elseif ($tcm_nejhorsi_obdobi_den == 6){?>     

            
            <div class="row" style="background-color:#f9dadc;">
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="1">probuzení</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="2">vstávání</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="3">dopoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="4">poledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="5">po obědě</label> 
        </div>
    </div>

</div>


<div class="row" style="background-color:#f9dadc;">  
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="6" checked>odpoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="7">večer</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="8">před půlnocí</label> 
        </div>
    </div>

    <div class="col-sm-2">
    <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="9">po půlnocí</label> 
        </div>
    </div>

</div>
            
            
        <? }elseif ($tcm_nejhorsi_obdobi_den == 7){?>             
            <div class="row" style="background-color:#f9dadc;">
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="1">probuzení</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="2">vstávání</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="3">dopoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="4">poledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="5">po obědě</label> 
        </div>
    </div>

</div>


<div class="row" style="background-color:#f9dadc;">  
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="6">odpoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="7" checked>večer</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="8">před půlnocí</label> 
        </div>
    </div>

    <div class="col-sm-2">
    <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="9">po půlnocí</label> 
        </div>
    </div>

</div>
            

         <? }elseif ($tcm_nejhorsi_obdobi_den == 8){?> 

            <div class="row" style="background-color:#f9dadc;">
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="1">probuzení</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="2">vstávání</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="3">dopoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="4">poledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="5">po obědě</label> 
        </div>
    </div>

</div>


<div class="row" style="background-color:#f9dadc;">  
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="6">odpoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="7">večer</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="8" checked>před půlnocí</label> 
        </div>
    </div>

    <div class="col-sm-2">
    <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="9">po půlnocí</label> 
        </div>
    </div>

</div>
         
           <? }else{ ?>
            <div class="row" style="background-color:#f9dadc;">
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="1">probuzení</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="2">vstávání</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="3">dopoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="4">poledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="5">po obědě</label> 
        </div>
    </div>

</div>


<div class="row" style="background-color:#f9dadc;">  
    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="6">odpoledne</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="7">večer</label> 
        </div>
    </div>

    <div class="col-sm-2">
        <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="8">před půlnocí</label> 
        </div>
    </div>

    <div class="col-sm-2">
    <div class="radio">
        <label><input type="radio" name="tcm_nejhorsi_obdobi_den" value="9" checked>po půlnocí</label> 
        </div>
    </div>

</div>
        
            <? } ?>

    </form>
    <br>
    <button type="submit" class="btn btn-success btn-sm"  onclick="loadObdobi()">&nbsp;&nbsp;Uložit nejhorší období&nbsp;&nbsp;</button>
    <br>

</div>


<script>
function loadObdobi() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tcmObdobi").innerHTML = this.responseText;
    }
  };
 
  let dataObdobi = "uzivatel_id=<?echo $uzivatel_id; ?>";
    tcm_nejhorsi_obdobi_rok = document.tcm_obdobi.tcm_nejhorsi_obdobi_rok.value;
    tcm_nejhorsi_obdobi_den = document.tcm_obdobi.tcm_nejhorsi_obdobi_den.value;

    dataObdobi = dataObdobi + "&tcm_nejhorsi_obdobi_rok="+tcm_nejhorsi_obdobi_rok;
    dataObdobi = dataObdobi + "&tcm_nejhorsi_obdobi_den="+tcm_nejhorsi_obdobi_den;

  xhttp.open("POST", "./script/form_obdobi_update.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(dataObdobi);
  alert("Uložení:\nZáznam nejhorší období byl uložen.");
     }
</script>