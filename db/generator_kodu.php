<?
$Pocet_znaku = "8";
$Pocet_znaku_heslo = "10";
function generatePassword ($Delka)
{
  $GeneratorKodu = "";
  $Retezec = "123456789ABCDEFGHJKLMNPQRSTUVWXYZ"; 
  $i = 0; 
  while ($i < $Delka) { 
    $char = substr($Retezec, mt_Rand(0, strlen($Retezec)-1), 1);
    if (!strstr($GeneratorKodu, $char)) { 
      $GeneratorKodu .= $char;
      $i++;
    }
  }
  return $GeneratorKodu;
} 

$uzivatel_kod = generatePassword($Pocet_znaku);
$uzivatel_heslo = generatePassword($Pocet_znaku_heslo);
?>