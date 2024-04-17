<!DOCTYPE html>
<html lang="cs">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
</head>  
<body>
  <link href="modul/ares/ares.css?v=1.0" rel="stylesheet" type="text/css" />
  <script src="funkce/jquery-1.10.2.min.js" type="text/javascript"></script>
  <script src="modul/ares/ares.js?v=1.0" type="text/javascript"></script>
    
  <table border="0">
    <tr>
      <td>IČO:</td>
      <td><input class="prvek_fakturacni_ico" type="text" name="fakturacni_ico" id="fakturacni_ico" value=""/></td>
    </tr>
    <tr>
      <td>Údaje z ARES:</td>
      <td>
        <span class="tl_ares">Zjistit údaje z ARES</span>
        <span id="ares_okno"></span>
        <div class="ajax_loader_ares"><div class="ajax_loader_ares_in"></div></div>
      </td>
    </tr>
    <tr>
      <td>Firma:</td>
      <td><input class="prvek_fakturacni_firma" type="text" name="fakturacni_firma" value=""/></td>
    </tr>
    <tr>
      <td>Adresa: </td>
      <td><input class="prvek_fakturacni_adresa" type="text" name="fakturacni_adresa" value=""/></td>
    </tr>
    <tr>
      <td>Město: </td>
      <td><input class="prvek_fakturacni_mesto" type="text" name="fakturacni_mesto" value=""/></td>
    </tr>
    <tr>
      <td>PSČ: </td>
      <td><input class="prvek_fakturacni_psc" type="text" name="fakturacni_psc" value=""/></td>
    </tr>
    <tr>
      <td>DIČ:</td>
      <td><input class="prvek_fakturacni_dic" type="text" name="fakturacni_dic" value=""/></td>
    </tr>  
  </table>

</body>
</html>