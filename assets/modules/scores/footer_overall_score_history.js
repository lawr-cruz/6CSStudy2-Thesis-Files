$(function () {
	const tableEl = $('#table');
	tableEl.DataTable({
		order: [[4, 'desc']],
		initComplete: function (settings, json) {
			tableEl.wrap("<div style='overflow:auto; width:100%;position:relative;'></div>");
		},
		drawCallback: function () {
		}
	});

});
