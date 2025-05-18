$("#problemy_po_oblibenem_jidle").change(function() {
    if ($(this).val() == "1") {
      $('#oblibenejidlo').show();
      $('#oblibene_jidlo_popis_problemu').attr('required', '');
      $('#oblibene_jidlo_popis_problemu').attr('data-error', 'This field is required.');
   
        } else {
      $('#oblibenejidlo').hide();
      $('#oblibene_jidlo_popis_problemu').removeAttr('required');
      $('#oblibene_jidlo_popis_problemu').removeAttr('data-error');
    }
  });
  $("#problemy_po_oblibenem_jidle").trigger("change");