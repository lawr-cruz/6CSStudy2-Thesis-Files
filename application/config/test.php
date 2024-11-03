<?php

if ($category_id == 2) {
	$quiz_history = $this->M_quiz_history->get_latest_by_user_id_and_category_id($this->session->userdata('user')['id'], 1);

	if (empty($quiz_history)) {
		redirect('quizzes/category/easy'); // Redirect to Easy category if Medium is not accessible
	}

	if ($quiz_history['remarks'] == 'FAIL') {
		$quiz_history_list = $this->M_quiz_history->get_all_by_user_id_and_category_id_with_limit($this->session->userdata('user')['id'], $category_id, $quiz_history['created_at']);
		$no_of_attempts = 3;
		foreach ($quiz_history_list as $quiz_item) {
			if ($quiz_item['remarks'] == 'FAIL') {
				$no_of_attempts -= 1;
			}
		}
		if ($no_of_attempts <= 0) {
			redirect('quizzes/category/easy'); // Redirect to Easy category after 3 failed attempts
		}
	}
} else if ($category_id == 3) {
	$quiz_history = $this->M_quiz_history->get_latest_by_user_id_and_category_id($this->session->userdata('user')['id'], 2);

	if (empty($quiz_history)) {
		redirect('quizzes/category/medium'); // Redirect to Medium category if Hard is not accessible
	}

	if ($quiz_history['remarks'] == 'FAIL') {
		$quiz_history_list = $this->M_quiz_history->get_all_by_user_id_and_category_id_with_limit($this->session->userdata('user')['id'], $category_id, $quiz_history['created_at']);
		$no_of_attempts = 3;
		foreach ($quiz_history_list as $quiz_item) {
			if ($quiz_item['remarks'] == 'FAIL') {
				$no_of_attempts -= 1;
			}
		}

		if ($no_of_attempts <= 0) {
			redirect('quizzes/category/easy'); // Redirect to Easy category after 3 failed attempts
		}
	}
}

$data['category_id'] = $category_id;
$data['questions'] = $questions = $this->M_questions->get_all_by_category_id_with_limit($category_id);
$data['page_data'] = array(
	'module' => 'Quizzes',
	'section' => 'Take Quiz',
	'styles_path' => array(
		'modules/' . strtolower(get_class()) . '/' . strtolower(__FUNCTION__)
	),
	'header_scripts_path' => array(
		'modules/' . strtolower(get_class()) . '/header_' . strtolower(__FUNCTION__)
	),
	'footer_scripts_path' => array(
		'modules/' . strtolower(get_class()) . '/footer_' . strtolower(__FUNCTION__),
	)
);

$this->load->view('layouts/dashboard/header', $data);
$this->load->view('modules/quizzes/' . strtolower(__FUNCTION__), $data);
$this->load->view('layouts/dashboard/footer', $data);
