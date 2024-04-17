 $("#zobrazspanek").change(function() {
  if ($(this).val() == "3") {
    $('#spanekFieldGroupDiv').show();
    $('#spanek').attr('required', '');
    $('#spanek').attr('data-error', 'This field is required.');
 
      } else {
    $('#spanekFieldGroupDiv').hide();
    $('#spanek').removeAttr('required');
    $('#spanek').removeAttr('data-error');
  }
});
$("#zobrazspanek").trigger("change");