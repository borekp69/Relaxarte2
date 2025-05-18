$("#problemy_po_jidle_obecne").change(function() {
    if ($(this).val() == "1") {
      $('#obecnejidlo').show();
      $('#problemy_po_jidle_obecne_popis').attr('required', '');
      $('#problemy_po_jidle_obecne_popis').attr('data-error', 'This field is required.');
   
        } else {
      $('#obecnejidlo').hide();
      $('#problemy_po_jidle_obecne_popis').removeAttr('required');
      $('#problemy_po_jidle_obecne_popis').removeAttr('data-error');
    }
  });
  $("#problemy_po_jidle_obecne").trigger("change");