$("#zobrazchutkjidlu").change(function() {
  if ($(this).val() == "5") {
    $('#chutkjidluFieldGroupDiv').show();
    $('#hladvkolikhodin').attr('required', '');
    $('#hladvkolikhodin').attr('data-error', 'This field is required.');
 
      } else {
    $('#chutkjidluFieldGroupDiv').hide();
    $('#hladvkolikhodin').removeAttr('required');
    $('#hladvkolikhodin').removeAttr('data-error');
  }
});
$("#zobrazchutkjidlu").trigger("change");