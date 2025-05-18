$("#chut_k_jidlu").change(function() {
    if ($(this).val() == "6") {
      $('#chutkjidluFieldGroupDiv').show();
      $('#joga').attr('required', '');
      $('#joga').attr('data-error', 'This field is required.');
   
        } else {
      $('#chutkjidluFieldGroupDiv').hide();
      $('#joga').removeAttr('required');
      $('#joga').removeAttr('data-error');
    }
  });
  $("#chut_k_jidlu").trigger("change");