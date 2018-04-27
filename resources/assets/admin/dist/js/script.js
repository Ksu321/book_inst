$(document).ready(function() {
	$('.add').click(function() {
		$('.input').css({'display': 'block', 'marginBottom': '15px'});
		return false;
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

