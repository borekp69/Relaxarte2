function data_copy()
{
if(document.spolecnost.copy[0].checked){
document.spolecnost.fakturacni_firma2.value=document.spolecnost.fakturacni_firma.value;
document.spolecnost.fakturacni_adresa2.value=document.spolecnost.fakturacni_adresa.value;
document.spolecnost.fakturacni_cp2.value=document.spolecnost.fakturacni_cp.value;
document.spolecnost.fakturacni_co2.value=document.spolecnost.fakturacni_co.value;
document.spolecnost.fakturacni_mesto2.value=document.spolecnost.fakturacni_mesto.value;
document.spolecnost.fakturacni_psc2.value=document.spolecnost.fakturacni_psc.value;
}else{
document.spolecnost.fakturacni_firma2.value="";
document.spolecnost.fakturacni_adresa2.value="";
document.spolecnost.fakturacni_cp2.value="";
document.spolecnost.fakturacni_co2.value="";
document.spolecnost.fakturacni_mesto2.value="";
document.spolecnost.fakturacni_psc2.value="";
document.spolecnost.kontakt_osoba.value="";
}
}

