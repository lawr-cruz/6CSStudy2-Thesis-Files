$(function () {
	const formEl = $('#form');

	formEl.on('submit', function (e) {
		e.preventDefault();

		if (!$(this).valid())
			return;

		$.ajax({
			url: `${BASE_URL}quizzes/take_quiz`,
			type: 'POST',
			async: true,
			data: $(this).serialize(),
			dataType: 'json',
			beforeSend: function () {
				AmagiLoader.show();
			},
			success: function (response) {
				if (response.status) {
					Swal.fire({
						title: 'Success!',
						text: response.message,
						icon: 'success'
					}).then(function () {
						location.reload();
					});
					return;
				}
				Swal.fire({
					title: 'Sorry!',
					text: response.message,
					icon: 'error'
				}).then(function () {
					location.reload();
				});
			},
			error: function (result) {
				Swal.fire({
					title: 'Sorry!',
					text: 'Error has been occurred, Please try again later.',
					icon: 'error'
				});
			},
			complete: function () {
				AmagiLoader.hide();
			}
		});
	});
});
