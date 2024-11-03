$(function () {
	$('#train_baseline_link').on('click', function (e) {
		e.preventDefault();
		$('#train_baseline_modal').modal('toggle');
	});

	$('#train_baseline_modal').on('hide.bs.modal', function () {
		clearValueControls(['#baseline_csv']);
	});

	$('#take_quiz_medium_link').on('click', function (e) {
		e.preventDefault();
		$.ajax({
			url: `${BASE_URL}quizzes/take_quiz/2`,
			data: null,
			type: 'GET',
			async: true,
			dataType: 'text',
			success: function (response, status, xhr) {
				var contentType = xhr.getResponseHeader('content-type') || '';
				if (contentType.includes('application/json')) {
					response = JSON.parse(response);
					// Handle JSON response
					if (response.status == RESULT_FAILED) {
						Swal.fire({
							title: 'Sorry!',
							text: response.message,
							icon: 'error'
						}).then(function () {
							location.reload();
						});
					}
				} else {
					location.href = `${BASE_URL}quizzes/take_quiz/2`;
				}
			},
			error: function (result) {
				Swal.fire({
					title: 'Sorry!',
					text: 'Error has been occurred, Please try again later.',
					icon: 'error'
				});
			}
		});
	});

	$('#take_quiz_hard_link').on('click', function (e) {
		e.preventDefault();
		$.ajax({
			url: `${BASE_URL}quizzes/take_quiz/3`,
			data: null,
			type: 'GET',
			async: true,
			dataType: 'text',
			success: function (response, status, xhr) {
				var contentType = xhr.getResponseHeader('content-type') || '';
				if (contentType.includes('application/json')) {
					response = JSON.parse(response);
					// Handle JSON response
					if (response.status == RESULT_FAILED) {
						Swal.fire({
							title: 'Sorry!',
							text: response.message,
							icon: 'error'
						}).then(function () {
							location.reload();
						});
						return;
					}
				} else {
					location.href = `${BASE_URL}quizzes/take_quiz/3`;
				}
			},
			error: function (result) {
				Swal.fire({
					title: 'Sorry!',
					text: 'Error has been occurred, Please try again later.',
					icon: 'error'
				});
			}
		});
	});

	$('#take_quiz_easy_link').on('click', function (e) {
		$.ajax({
			url: `${BASE_URL}quizzes/take_quiz/1`,
			data: null,
			type: 'GET',
			async: true,
			dataType: 'text',
			success: function (response, status, xhr) {
				var contentType = xhr.getResponseHeader('content-type') || '';
				if (contentType.includes('application/json')) {
					response = JSON.parse(response);
					// Handle JSON response
					if (response.status == RESULT_FAILED) {
						Swal.fire({
							title: 'Sorry!',
							text: response.message,
							icon: 'error'
						}).then(function () {
							location.reload();
						});
						return;
					}
				} else {
					location.href = `${BASE_URL}quizzes/take_quiz/1`;
				}
			},
			error: function (result) {
				console.log(result);
				Swal.fire({
					title: 'Sorry!',
					text: 'Error has been occurred, Please try again later.',
					icon: 'error'
				});
			}
		});
	});

	$('#baseline_csv_button_submit').on('click', function (e) {
		e.preventDefault();
		AmagiLoader.show();
		setTimeout(function () {
			AmagiLoader.hide();
			if ($('#baseline_csv').val()) {
				Swal.fire({
					title: 'Success!',
					text: 'Baseline has been successfully trained!',
					icon: 'success'
				}).then(function () {
					$('#train_baseline_modal').modal('toggle');
				});
			}
		}, 5000);
	});
});
