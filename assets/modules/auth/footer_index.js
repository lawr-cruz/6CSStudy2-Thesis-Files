$(function () {
	const formEl = $('#form');
	formEl.on('submit', function (e) {
		e.preventDefault();
		if (!formEl.valid()) return;
		$.ajax({
			url: `${BASE_URL}auth`,
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
						window.location = response.redirect_url;
					});
					return;
				}

				Swal.fire({
					title: 'Failed!',
					text: response.message,
					icon: 'error'
				});
			},
			error: function (result) {
				console.log(result);
				Swal.fire({
					title: 'Failed!',
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
