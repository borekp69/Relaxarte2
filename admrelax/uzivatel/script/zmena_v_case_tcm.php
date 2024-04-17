<?
header("Cache-control: private");
header ("Cache-Control:no-cache, must-revalidate"); //HTTP/1.1
header("Pragma: no-cache"); 
require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php';

?>




<div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
    <br>
    <label for="uzivatel">TČM subjektivní pocit klienta:</label>
    <textarea class="form-control" id="tcm_definice_pole" name="tcm_definice_pole" rows="1" maxlength="600" placeholder="TČM subjektivní pocit klienta"></textarea>
    </div>
</div>

<div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
    <br>
    <label for="uzivatel">Jazyk:</label>
    <textarea class="form-control" id="tcm_definice_pole" name="tcm_definice_pole" rows="1" maxlength="600" placeholder="Jazyk"></textarea>
    </div>
</div>

<div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
    <br>
    <label for="uzivatel">Puls:</label>
    <textarea class="form-control" id="tcm_definice_pole" name="tcm_definice_pole" rows="1" maxlength="600" placeholder="Puls"></textarea>
    </div>
</div>

<div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
    <br>
    <label for="uzivatel">Diagnoza:</label>
    <textarea class="form-control" id="tcm_definice_pole" name="tcm_definice_pole" rows="1" maxlength="600" placeholder="Diagnoza"></textarea>
    </div>
</div>   

<div class="row">
    <div class="col-sm-12" style="background-color:#DBDBDB;">
    <br>
    <label for="uzivatel">Akupunktura:</label>
    <textarea class="form-control" id="tcm_definice_pole" name="tcm_definice_pole" rows="1" maxlength="600" placeholder="Akupunktura"></textarea>
    <br>
    </div>
<br>
</div>





