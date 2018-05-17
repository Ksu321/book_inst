"use strict";
$(document).ready(function() {
	$('.js-add-select').click(function( ) {
        event.preventDefault();
        var btnParent = $(this).parent();

		var childList = btnParent.next('.js-child-block').find('.form-group');
		childList.each(function () {
             $(this).toggle();
        });


	});


        $('.js-add-sameInput').click(function () {
            var cloneInput = $(this).parent().find('input').clone();
            $(this).parent().next().append(cloneInput);
        });
    $('.js-delete-sameInput').click(function () {
        var currentInput = $(this).parent().next().find('input');
         var last = currentInput.last();
        last.remove();

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

