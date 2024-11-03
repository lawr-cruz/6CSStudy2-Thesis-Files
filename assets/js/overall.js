'use strict';
function clearValueControls(ctrlElements) {
	for (var i = 0; i < ctrlElements.length; i++) {
		if ($(ctrlElements[i]).is('input')) {
			$(ctrlElements[i]).val(null);
		} else if ($(ctrlElements[i]).is('select')) {
			$(ctrlElements[i]).val(null).trigger('change');
		} else if ($(ctrlElements[i]).is('textarea')) {
			$(ctrlElements[i]).val(null);
		} else if ($(ctrlElements[i]).is('h1')) {
			$(ctrlElements[i]).html(null);
		} else if ($(ctrlElements[i]).is('h2')) {
			$(ctrlElements[i]).html(null);
		} else if ($(ctrlElements[i]).is('h3')) {
			$(ctrlElements[i]).html(null);
		} else if ($(ctrlElements[i]).is('p')) {
			$(ctrlElements[i]).html(null);
		} else if ($(ctrlElements[i]).is('video')) {
			$(ctrlElements[i])[0].pause();
		} else if ($(ctrlElements[i]).is('object')) {
			$(ctrlElements[i]).attr('data', null);
		}
	}
}
