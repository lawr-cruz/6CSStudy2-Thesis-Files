$(function () {
	const tableEl = $('#table');
	tableEl.DataTable({
		initComplete: function (settings, json) {
			tableEl.wrap("<div style='overflow:auto; width:100%;position:relative;'></div>");
		},
		drawCallback: function () {
			$('.delete-row').on('click', function (e) {
				e.preventDefault();
				Swal.fire({
					title: 'Are you sure you want to delete this record?',
					text: "You won't be able to revert this!",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
					if (result.value) {
						$.ajax({
							url: `${BASE_URL}questions/delete`,
							data: {id: $(this).data('id')},
							type: 'POST',
							async: true,
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
									title: 'Failed!',
									text: response.message,
									icon: 'error'
								});
							},
							error: function (result) {
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
					}
				});
			});
		}
	});

});
