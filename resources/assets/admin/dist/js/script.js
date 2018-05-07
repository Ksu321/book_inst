"use strict";
$(document).ready(function() {
	$('.js-add-select').click(function() {
        event.preventDefault();
		var childList = $('.js-child-block').find('.form-group');
		childList.each(function () {
             $(this).toggle();
        });


	});

    $("#example1").DataTable();
    $(".select2").select2();
    //Date picker
    $('#datepicker').datepicker({
        autoclose: true,
        format: 'dd/mm/yy'
    });
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
    });
});

