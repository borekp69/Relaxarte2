 $("#zobrazpole").change(function() {
  if ($(this).val() == "Nadváha") {
    $('#otherFieldGroupDiv2').show();
    $('#vahakg').attr('required', '');
    $('#vahakg').attr('data-error', 'This field is required.');
  
  }else if ($(this).val() == "Podváha"){
    $('#otherFieldGroupDiv2').show();
    $('#vahakg').attr('required', '');
    $('#vahakg').attr('data-error', 'This field is required.');  
  
    } else {
    $('#otherFieldGroupDiv2').hide();
    $('#vahakg').removeAttr('required');
    $('#vahakg').removeAttr('data-error');
  }
});
$("#zobrazpole").trigger("change");