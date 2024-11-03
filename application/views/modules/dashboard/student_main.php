<div class="body-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8 d-flex align-items-stretch">
				<div class="card w-100 bg-info-subtle overflow-hidden shadow-none">
					<div class="card-body position-relative">
						<div class="row">
							<div class="col-sm-7">
								<div class="d-flex align-items-center mb-7">
									<div class="rounded-circle overflow-hidden me-6">
										<img
											src="<?= site_url('assets/templates/modernize/images/profile/user-1.jpg') ?>"
											alt="Profile" width="40" height="40">
									</div>
									<h5 class="fw-semibold mb-0 fs-5">Welcome
										back <?= @$this->session->userdata('user')['username']; ?>!</h5>
								</div>
								<div class="d-flex align-items-center">
									<div class="ps-4">
										<h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center"><?= count_all_activity_logs_by_user_id($this->session->userdata('user')['id']) ?>
											<i
												class="ti ti-arrow-up-right fs-5 lh-base text-success"></i></h3>
										<p class="mb-0 text-dark">Page Visited</p>
									</div>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="welcome-bg-img mb-n7 text-end">
									<img
										src="<?= site_url('assets/templates/modernize/images/backgrounds/welcome-bg.svg') ?>"
										alt="Background Profile" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="col-md-6 col-lg-4 d-flex align-items-stretch">
				<div class="card w-100">
					<div class="card-body">
						<h5 class="card-title fw-semibold">Quiz Highest Score</h5>
						<div id="weekly-stats" class="mb-4 mt-7"></div>
						<div class="position-relative">
							<?php $top_scores = get_all_top_scores(5);
							if (!empty($top_scores)) :
								?>
								<?php foreach ($top_scores as $value) : ?>
								<div class="d-flex align-items-center justify-content-between mb-4">
									<div class="d-flex">
										<div
											class="p-6 bg-primary-subtle text-primary rounded-2 me-6 d-flex align-items-center justify-content-center">
											<i class="ti ti-grid-dots fs-6"></i>
										</div>
										<div>
											<h6 class="mb-1 fs-4 fw-semibold"><?= get_profile_username($value['created_by'])?></h6>
											<p class="fs-3 mb-0"><?= Dropdown::get_static('categories', $value['category_id'], 'view')?></p>
										</div>
									</div>
									<div class="bg-primary-subtle text-primary badge">
										<p class="fs-3 fw-semibold mb-0"><?= round($value['score']) . '/' . round($value['no_of_questions']);?></p>
									</div>
								</div>
							<?php endforeach; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-8">
				<div id="map"></div>
			</div>
			<div class="col-md-6 col-lg-4 d-flex align-items-stretch">
				<div class="card w-100">
					<div class="card-body">
						<div class="mb-4">
							<h5 class="card-title fw-semibold">Recent Activities</h5>
						</div>
						<ul class="timeline-widget mb-0 position-relative mb-n5">
							<?php $activity_logs = get_all_activity_logs_by_user_id($this->session->userdata('user')['id']);

							if (!empty($activity_logs)) :

								?>
								<?php foreach ($activity_logs as $key => $value) : ?>
								<li class="timeline-item d-flex position-relative overflow-hidden">
									<div
										class="timeline-time text-dark flex-shrink-0 text-end"><?= view_date($value['created_at'], 'time'); ?></div>
									<div class="timeline-badge-wrap d-flex flex-column align-items-center">
										<span
											class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
									</div>
									<div
										class="timeline-desc fs-3 text-dark mt-n1 fw-semibold"><?= $value['action_taken']; ?>
										<a
											href="javascript:void(0)"
											class="text-primary d-block fw-normal "><?= get_profile_username($value['created_by']) ?></a>
									</div>
								</li>
							<?php endforeach; ?>

							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

