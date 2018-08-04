$(document).on('submit', '#form-calc', function (e) {
	e.preventDefault();
	$.ajax({
		type: 'POST',
		url: '../calc.php',
		data: $('#form-calc').serialize(),
		success: function (data) {
			$('.form-calc_result').removeAttr('style');
			$('.form-calc_result-value').text(data);
		}
	});
})