 $("#zobrazpole").change(function() {
  if ($(this).val() == "Nadváha") {
    $('#otherFieldGroupDiv').show();
    $('#vahakg').attr('required', '');
    $('#vahakg').attr('data-error', 'This field is required.');
  
  }else if ($(this).val() == "Podváha"){
    $('#otherFieldGroupDiv').show();
    $('#vahakg').attr('required', '');
    $('#vahakg').attr('data-error', 'This field is required.');  
  
    } else {
    $('#otherFieldGroupDiv').hide();
    $('#vahakg').removeAttr('required');
    $('#vahakg').removeAttr('data-error');
  }
});
$("#zobrazpole").trigger("change");