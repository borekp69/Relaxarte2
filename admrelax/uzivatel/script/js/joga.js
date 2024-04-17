 $("#zobrazjoga").change(function() {
  if ($(this).val() == "1") {
    $('#jogaFieldGroupDiv').show();
    $('#joga').attr('required', '');
    $('#joga').attr('data-error', 'This field is required.');
 
      } else {
    $('#jogaFieldGroupDiv').hide();
    $('#joga').removeAttr('required');
    $('#joga').removeAttr('data-error');
  }
});
$("#zobrazjoga").trigger("change");