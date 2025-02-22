<?


function mesic($mesic) {
    static $nazvy = array(1 => 'ledna', 'února', 'března', 'dubna', 'května', 'června', 'července', 'srpna', 'září', 'října', 'listopadu', 'prosince');
    return $nazvy[$mesic];
}



function den($den) {
    static $nazvy = array('neděle', 'pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota');
    return $nazvy[$den];
}

  
date_default_timezone_set("Europe/Prague");    
$cas = date('H:i:s');  
$den = date('d');
$rok = date('Y');
$datum =  den(date("w")) . "\n".$den. "\n".mesic(date("n")) . "\n".$rok."\n".$cas; 

echo 'Datum je:'.$datum;



?>



