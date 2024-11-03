<aside class="left-sidebar with-vertical">
	<div><!-- ---------------------------------- -->
		<!-- Start Vertical Layout Sidebar -->
		<!-- ---------------------------------- -->
		<div class="brand-logo d-flex align-items-center justify-content-between">
			<a href="#" class="text-nowrap logo-img">
			</a>
			<a
				href="javascript:void(0)"
				class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none"
			>
				<i class="ti ti-x"></i>
			</a>
		</div>


		<nav class="sidebar-nav scroll-sidebar" data-simplebar>
			<ul id="sidebarnav">
				<li class="nav-small-cap">
					<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
					<span class="hide-menu">Menu</span>
				</li>
				<?php if ($this->session->userdata('user')['role_id'] == ROLE_ADMINISTRATOR) : ?>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= site_url('dashboard/admin_main') ?>" aria-expanded="false">
        <span>
          <i class="ti ti-home"></i>
        </span>
							<span class="hide-menu">Home</span>
						</a>
					</li>


					<li class="sidebar-item">
						<a
							class="sidebar-link has-arrow"
							href="javascript:void(0)"
							aria-expanded="false"
						>
        <span class="d-flex">
          <i class="ti ti-users"></i>
        </span>
							<span class="hide-menu">Students</span>
						</a>
						<ul aria-expanded="false" class="collapse first-level">
							<li class="sidebar-item">
								<a href="<?= site_url('students/form') ?>" class="sidebar-link">
									<div
										class="round-16 d-flex align-items-center justify-content-center"
									>
										<i class="ti ti-circle"></i>
									</div>
									<span class="hide-menu">Add Student</span>
								</a>
							</li>

							<li class="sidebar-item">
								<a href="<?= site_url('students') ?>" class="sidebar-link">
									<div
										class="round-16 d-flex align-items-center justify-content-center"
									>
										<i class="ti ti-circle"></i>
									</div>
									<span class="hide-menu">List of Students</span>
								</a>
							</li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a
							class="sidebar-link has-arrow"
							href="javascript:void(0)"
							aria-expanded="false"
						>
        <span class="d-flex">
          <i class="ti ti-question-mark"></i>
        </span>
							<span class="hide-menu">Questions</span>
						</a>
						<ul aria-expanded="false" class="collapse first-level">
							<li class="sidebar-item">
								<a href="<?= site_url('questions/form') ?>" class="sidebar-link">
									<div
										class="round-16 d-flex align-items-center justify-content-center"
									>
										<i class="ti ti-circle"></i>
									</div>
									<span class="hide-menu">Add Question</span>
								</a>
							</li>

							<li class="sidebar-item">
								<a href="<?= site_url('questions') ?>" class="sidebar-link">
									<div
										class="round-16 d-flex align-items-center justify-content-center"
									>
										<i class="ti ti-circle"></i>
									</div>
									<span class="hide-menu">All Questions</span>
								</a>
							</li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a
							class="sidebar-link has-arrow"
							href="javascript:void(0)"
							aria-expanded="false"
						>
        <span class="d-flex">
          <i class="ti ti-layout-list"></i>
        </span>
							<span class="hide-menu">Overall Score History</span>
						</a>
						<ul aria-expanded="false" class="collapse first-level">
							<li class="sidebar-item">
								<a href="<?= site_url('scores/overall_score_history/1') ?>" class="sidebar-link">
									<div
										class="round-16 d-flex align-items-center justify-content-center"
									>
										<i class="ti ti-circle"></i>
									</div>
									<span class="hide-menu">Easy</span>
								</a>
							</li>

							<li class="sidebar-item">
								<a href="<?= site_url('scores/overall_score_history/2') ?>" class="sidebar-link">
									<div
										class="round-16 d-flex align-items-center justify-content-center"
									>
										<i class="ti ti-circle"></i>
									</div>
									<span class="hide-menu">Medium</span>
								</a>
							</li>

							<li class="sidebar-item">
								<a href="<?= site_url('scores/overall_score_history/3') ?>" class="sidebar-link">
									<div
										class="round-16 d-flex align-items-center justify-content-center"
									>
										<i class="ti ti-circle"></i>
									</div>
									<span class="hide-menu">Hard</span>
								</a>
							</li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a id="train_baseline_link" class="sidebar-link" href="javascript:void(0);"
						   aria-expanded="false">
        <span>
          <i class="ti ti-file"></i>
        </span>
							<span class="hide-menu">Train Baseline</span>
						</a>
					</li>

				<?php elseif ($this->session->userdata('user')['role_id'] == ROLE_STUDENT) : ?>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= site_url('dashboard/student_main') ?>" aria-expanded="false">
        <span>
          <i class="ti ti-home"></i>
        </span>
							<span class="hide-menu">Home</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a
							class="sidebar-link has-arrow"
							href="javascript:void(0)"
							aria-expanded="false"
						>
        <span class="d-flex">
          <i class="ti ti-pencil"></i>
        </span>
							<span class="hide-menu">Take Quiz</span>
						</a>
						<ul aria-expanded="false" class="collapse first-level">
							<li class="sidebar-item">
								<a id="take_quiz_easy_link" href="javascript:void(0);" class="sidebar-link">
									<div
										class="round-16 d-flex align-items-center justify-content-center"
									>
										<i class="ti ti-circle"></i>
									</div>
									<span class="hide-menu">Easy</span>
								</a>
							</li>

							<li class="sidebar-item">
								<a id="take_quiz_medium_link" href="javascript:void(0);" class="sidebar-link">
									<div
										class="round-16 d-flex align-items-center justify-content-center"
									>
										<i class="ti ti-circle"></i>
									</div>
									<span class="hide-menu">Medium</span>
								</a>
							</li>

							<li class="sidebar-item">
								<a id="take_quiz_hard_link" href="javascript:void(0);" class="sidebar-link">
									<div
										class="round-16 d-flex align-items-center justify-content-center"
									>
										<i class="ti ti-circle"></i>
									</div>
									<span class="hide-menu">Hard</span>
								</a>
							</li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a
							class="sidebar-link has-arrow"
							href="javascript:void(0)"
							aria-expanded="false"
						>
        <span class="d-flex">
          <i class="ti ti-layout-list"></i>
        </span>
							<span class="hide-menu">My Score History</span>
						</a>
						<ul aria-expanded="false" class="collapse first-level">
							<li class="sidebar-item">
								<a href="<?= site_url('scores/my_score_history/1') ?>" class="sidebar-link">
									<div
										class="round-16 d-flex align-items-center justify-content-center"
									>
										<i class="ti ti-circle"></i>
									</div>
									<span class="hide-menu">Easy</span>
								</a>
							</li>

							<li class="sidebar-item">
								<a href="<?= site_url('scores/my_score_history/2') ?>" class="sidebar-link">
									<div
										class="round-16 d-flex align-items-center justify-content-center"
									>
										<i class="ti ti-circle"></i>
									</div>
									<span class="hide-menu">Medium</span>
								</a>
							</li>

							<li class="sidebar-item">
								<a href="<?= site_url('scores/my_score_history/3') ?>" class="sidebar-link">
									<div
										class="round-16 d-flex align-items-center justify-content-center"
									>
										<i class="ti ti-circle"></i>
									</div>
									<span class="hide-menu">Hard</span>
								</a>
							</li>
						</ul>
					</li>

				<?php endif; ?>
			</ul>
		</nav>

		<div
			class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded sidebar-ad mt-3"
		>
			<div class="hstack gap-3">
				<div class="john-img">
					<img
						src="<?= site_url('assets/images/scitology_logo.png') ?>"
						class="rounded-circle"
						width="40"
						height="40"
						alt="Logo"
					/>
				</div>
				<div class="john-title">
					<span
						class="fs-2"><?= Dropdown::get_static('roles', @$this->session->userdata('user')['role_id'], 'view'); ?></span>
				</div>
				<a href="<?= site_url('auth/logout') ?>" class="border-0 bg-transparent text-primary ms-auto"><i
						class="ti ti-power fs-6"></i></a>
			</div>
		</div>
	</div>
</aside>s
