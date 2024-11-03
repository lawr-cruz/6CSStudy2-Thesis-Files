<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Quizzes extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->_create_additional = array(
			'created_by' => isset($_SESSION['user']) ? $this->session->userdata('user')['id'] : DEFAULT_ADMIN_ID,
			'created_at' => DATETIME_NOW
		);

		$this->_update_additional = array(
			'updated_by' => isset($_SESSION['user']) ? $this->session->userdata('user')['id'] : DEFAULT_ADMIN_ID,
			'updated_at' => DATETIME_NOW
		);

		$this->_delete_additional = array(
			'deleted_by' => isset($_SESSION['user']) ? $this->session->userdata('user')['id'] : DEFAULT_ADMIN_ID,
			'deleted_at' => DATETIME_NOW
		);
	}

	public function take_quiz($category_id = null)
	{
		if ($post_data = $this->input->post()) {
			$question_current_count = 1;
			$score = 0;
			$questions = $post_data['questions'];
			$answers = $post_data['answers'];
			foreach ($questions as $key => $question_id) {
				$selected_answer = isset($answers[$key]) ? $answers[$key] : null;

				$user_question_answer_data = array(
						'user_id' => $this->session->userdata('user')['id'],
						'question_id' => $question_id,
						'answer' => $selected_answer
					) + $this->_create_additional;

				$question = $this->M_questions->get($question_id);
				if (empty($question))
				{
					continue;
				}

				if ($question['answer'] == $selected_answer) {
					$score++;
				}
				$this->M_user_question_answers->insert($user_question_answer_data);

				$question_current_count++;
			}
			$no_of_questions = $question_current_count - 1;
			$isPassed = $score >= ($no_of_questions * .8);
			$quiz_history_data = array(
				'user_id' => $this->session->userdata('user')['id'],
				'category_id' => $post_data['category_id'],
				'score' => $score,
				'no_of_questions' => $no_of_questions,
				'remarks' => $isPassed ? 'PASS' : 'FAIL'
			) + $this->_create_additional;
			$this->M_quiz_history->insert($quiz_history_data);
			if (!$isPassed)
			{
				if ($post_data['category_id'] == 1) {
					exit(json_encode(
						array(
							'status' => RESULT_FAILED,
							'message' => 'Please try again. Your score is ' . $score . ' out of ' . $no_of_questions . '.'
						)
					));
				}

				$no_of_attempts = 3;
				$quiz_history_list = $this->M_quiz_history->get_all_by_user_id_and_category_id_with_limit($this->session->userdata('user')['id'], $post_data['category_id']);

				foreach ($quiz_history_list as $quiz_item) {
					if ($quiz_item['remarks'] == 'FAIL') {
						$no_of_attempts -= 1;
					}
				}

				exit(json_encode(
					array(
						'status' => RESULT_FAILED,
						'message' => 'Please try again. Your score is ' . $score . ' out of ' . $no_of_questions . '. You have ' . $no_of_attempts  . ' attempt(s) remaining.'
					)
				));
			} else {
				$quiz_history = $this->M_quiz_history->get_latest_by_user_id_and_category_id($this->session->userdata('user')['id'], $post_data['category_id']);
				if (!empty($quiz_history)) {
					$quiz_history['no_of_attempts'] = 3;
					$this->M_quiz_history->update($quiz_history, $quiz_history['id']);
				}
			}

			exit(json_encode(
				array(
					'status' => RESULT_SUCCESS,
					'message' => 'Congratulations! You have successfully submitted the quiz. You PASSED' . ' with a score of '. $score . ' out of ' . $no_of_questions . '.'
				)
			));
		}

		if ($category_id == 2) {
			$quiz_history = $this->M_quiz_history->get_latest_by_user_id_and_category_id($this->session->userdata('user')['id'], 1);

			if (empty($quiz_history))
			{
				header('Content-Type: application/json');
				exit(json_encode(
					array(
						'status' => RESULT_FAILED,
						'message' => 'This level of question is not currently accessible to your account.'
					)
				));
			}

			if ($quiz_history['remarks'] == 'FAIL') {
				$quiz_history_list = $this->M_quiz_history->get_all_by_user_id_and_category_id_with_limit($this->session->userdata('user')['id'], $category_id, $quiz_history['created_at']);
				$no_of_attempts = 3;

				if (empty($quiz_history_list))
				{
					header('Content-Type: application/json');
					exit(json_encode(
						array(
							'status' => RESULT_FAILED,
							'message' => 'This level of question is not currently accessible to your account.'
						)
					));
				}
				
				foreach ($quiz_history_list as $quiz_item) {
					if ($quiz_item['remarks'] == 'FAIL') {
						$no_of_attempts -= 1;
					}
				}
				if ($no_of_attempts <= 0) {
					header('Content-Type: application/json');
					exit(json_encode(
						array(
							'status' => RESULT_FAILED,
							'message' => 'This level of question is not currently accessible to your account.'
						)
					));
				}

			}
		} else if ($category_id == 3) {
			$quiz_history = $this->M_quiz_history->get_latest_by_user_id_and_category_id($this->session->userdata('user')['id'], 2);

			if (empty($quiz_history))
			{
				header('Content-Type: application/json');
				exit(json_encode(
					array(
						'status' => RESULT_FAILED,
						'message' => 'This level of question is not currently accessible to your account.'
					)
				));
			}

			if ($quiz_history['remarks'] == 'FAIL') {
				$quiz_history_list = $this->M_quiz_history->get_all_by_user_id_and_category_id_with_limit($this->session->userdata('user')['id'], $category_id, $quiz_history['created_at']);
				$no_of_attempts = 3;

				if (empty($quiz_history_list))
				{
					header('Content-Type: application/json');
					exit(json_encode(
						array(
							'status' => RESULT_FAILED,
							'message' => 'This level of question is not currently accessible to your account.'
						)
					));
				}
				foreach ($quiz_history_list as $quiz_item) {
					if ($quiz_item['remarks'] == 'FAIL') {
						$no_of_attempts -= 1;
					}
				}


				
				if ($no_of_attempts <= 0) {
					header('Content-Type: application/json');
					exit(json_encode(
						array(
							'status' => RESULT_FAILED,
							'message' => 'This level of question is not currently accessible to your account.'
						)
					));
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
	}
}
