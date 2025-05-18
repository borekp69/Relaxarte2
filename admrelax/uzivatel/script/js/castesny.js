$("#vraceji_se_nektere_sny").change(function() {
    if ($(this).val() == "1") {
      $('#castesny').show();
      $('#popis_snu').attr('required', '');
      $('#popis_snu').attr('data-error', 'This field is required.');
   
        } else {
      $('#castesny').hide();
      $('#popis_snu').removeAttr('required');
      $('#popis_snu').removeAttr('data-error');
    }
  });
  $("#vraceji_se_nektere_sny").trigger("change");