 $("#typ_treninku").change(function() {
  if ($(this).val() == "skupinový") {
    $('#otherFieldGroupDiv3').show();
    $('#vahakg').attr('required', '');
    $('#vahakg').attr('data-error', 'This field is required.');
  
  }else if ($(this).val() == "kombinace"){
    $('#otherFieldGroupDiv3').show();
    $('#vahakg').attr('required', '');
    $('#vahakg').attr('data-error', 'This field is required.');  
  
    } else {
    $('#otherFieldGroupDiv3').hide();
    $('#vahakg').removeAttr('required');
    $('#vahakg').removeAttr('data-error');
  }
});
$("#typ_treninku").trigger("change");