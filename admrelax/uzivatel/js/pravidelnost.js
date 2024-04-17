$("#zobrazpravidelnost").change(function() {
  if ($(this).val() == "26" || $(this).val() == "30" || $(this).val() == "31" || $(this).val() == "32" || $(this).val() == "34") {
    $('#pravidelnostFieldDiv').show();
    $('#pravidelnostField').attr('required', '');
    $('#pravidelnostField').attr('data-error', 'This field is required.');
 } else {
    $('#pravidelnostFieldDiv').hide();
    $('#pravidelnostField').removeAttr('required');
    $('#pravidelnostField').removeAttr('data-error');
  }
});
$("#zobrazpravidelnost").trigger("change");