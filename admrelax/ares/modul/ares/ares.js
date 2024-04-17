$(document).on("click",".tl_popup_ares",function(e)
{
  e.preventDefault();
  $(".box_kosik_ares, .box_obal").show();
});
$(document).on("click",".box_obal, .box_kosik_ares .box_close, .tl_ares_zavrit",function(e)
{
  e.preventDefault();
  $(".box_obsah, .box_obal").fadeOut( 1000 );
});

$(document).on("click",".tl_ares",function(e)
{
  var vyplneno_dobre = false;
  e.preventDefault();

  vyraz = /^\d{8}$/; //ico
  var hodnota_polozky = $('.prvek_fakturacni_ico').val();
  if( hodnota_polozky == "" )
    {
      alert("Pro zjištění firemních údajů z ARES je nutné vyplnit IČO");
      vyplneno_dobre = false;
    }
  else
    {
      if(!vyraz.test(hodnota_polozky))
        {
          alert("Špatný formát IČO - právě 8 číslic");
          vyplneno_dobre = false;
        }else{ //ok
          vyplneno_dobre = true;
        }
    }

  if( vyplneno_dobre == true ){ //pokud je naplnene (a dobre) ICO ve fakturacnich udajich

    ico_ajax = parseInt($("#fakturacni_ico").val());

    $(".ajax_loader_ares").show();
    $.ajax
    ({
        url: "ares/modul/ares/ares.php",
        type: "POST",
        data: {
           ico_ajax_send: ico_ajax,
        },
        success: function(data)
          {

            $("#ares_okno").html(data);
            //$(".tl_popup_ares").trigger( "click" );
            $(".ajax_loader_ares").hide();
          }
    });

  }
});

$(document).on("click",".tl_ares_vlozit",function(e)
{ //vloz nactene hodnoty z ARES do formulare
  var hodnota_firma = $("#div_fakturacni_firma").text();
  var hodnota_jm = $("#div_fakturacni_jmeno").text();
  var hodnota_pr = $("#div_fakturacni_prijmeni").text();
  var hodnota_adr = $("#div_fakturacni_adresa").text();
  var hodnota_mesto = $("#div_fakturacni_mesto").text();
  var hodnota_psc = $("#div_fakturacni_psc").text();
  var hodnota_tel = $("#div_fakturacni_telefon").text();
  var hodnota_mail = $("#div_fakturacni_mail").text();
  var hodnota_dic = $("#div_fakturacni_dic").text();
  var hodnota_cp = $("#div_fakturacni_cp").text();
  var hodnota_co = $("#div_fakturacni_co").text();

  $(".prvek_fakturacni_firma").val(hodnota_firma);
  $(".prvek_fakturacni_jmeno").val(hodnota_jm);
  $(".prvek_fakturacni_prijmeni").val(hodnota_pr);
  $(".prvek_fakturacni_adresa").val(hodnota_adr);
  $(".prvek_fakturacni_mesto").val(hodnota_mesto);
  $(".prvek_fakturacni_psc").val(hodnota_psc);
  $(".prvek_fakturacni_telefon").val(hodnota_tel);
  $(".prvek_fakturacni_mail").val(hodnota_mail);
  $(".prvek_fakturacni_dic").val(hodnota_dic);
  $(".prvek_fakturacni_cp").val(hodnota_cp);
  $(".prvek_fakturacni_co").val(hodnota_co);

  $(".box_obsah, .box_obal").fadeOut( 1000 ); //zavri popup okno
});