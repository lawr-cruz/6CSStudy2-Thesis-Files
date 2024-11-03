$(function () {
	const tableEl = $('#table');
	tableEl.DataTable({
		order: [[6, 'desc']],
		initComplete: function (settings, json) {
			tableEl.wrap("<div style='overflow:auto; width:100%;position:relative;'></div>");
		},
		drawCallback: function () {
		}
	});

});
