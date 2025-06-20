$("#strachy_v_zivote").change(function() {
    if ($(this).val() == "1") {
      $('#ZivotniStrachy').show();
      $('#PopisStrachu').attr('required', '');
      $('#PopisStrachu').attr('data-error', 'This field is required.');
   
        } else {
      $('#ZivotniStrachy').hide();
      $('#PopisStrachu').removeAttr('required');
      $('#PopisStrachu').removeAttr('data-error');
    }
  });
  $("#strachy_v_zivote").trigger("change");