<?php    

$qr_data = htmlspecialchars(trim("$_GET[qr_data]"));
    //set it to writable location, a place for temp generated PNG files
$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
//html PNG location prefix
    $PNG_WEB_DIR = 'temp/';
 //   $qr_data = "Borek Pors Generání";
    include "qrlib.php";    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
$filename = $PNG_TEMP_DIR.'relaxarte.png';
//processing form input
 //remember to sanitize user input in real-life solution !!!
$errorCorrectionLevel = 'H';
$matrixPointSize = 2;
                 // user data
$filename = $PNG_TEMP_DIR.'relaxarte'.md5($qr_data.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
QRcode::png($qr_data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);        
   
        
    //display generated file
echo '<br><br>&nbsp;&nbsp;<img src="'.$PNG_WEB_DIR.basename($filename).'" />';

    



    