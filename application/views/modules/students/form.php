<div class="body-wrapper">
	<div class="container-fluid">
		<div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
			<div class="card-body px-4 py-3">
				<div class="row align-items-center">
					<div class="col-9">
						<h4 class="fw-semibold mb-8"><?= @$page_data['module']; ?></h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a class="text-muted text-decoration-none" href="#"
									><?= @$page_data['module']; ?></a
									>
								</li>
								<li class="breadcrumb-item" aria-current="page"><?= @$page_data['section']; ?></li>
							</ol>
						</nav>
					</div>
					<div class="col-3">
						<div class="text-center mb-n5">
							<img
								src="<?= site_url('assets/templates/modernize/images/breadcrumb/ChatBc.png') ?>"
								alt=""
								class="img-fluid mb-n4"
							/>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="border-bottom title-part-padding">
						<h4 class="card-title mb-0"><?= @$page_data['module']; ?> | <?= @$page_data['section']; ?></h4>
					</div>
					<div class="card-body">
						<form id="form" role="form" method="POST">
							<input type="hidden" id="id" name="id" value="<?= @$info['id']; ?>" readonly>
							<?php if (empty(@$info['id'])) : ?>

								<div class="row">
									<div class="col-sm-4">
										<div class="mb-3">
											<label for="username" class="form-label">Username <code>*</code></label>
											<input type="text" class="form-control" id="username" name="username"
												   placeholder="Username"
												   value="<?= @$info['username']; ?>" required autofocus/>
										</div>
									</div>

									<div class="col-sm-4">
										<div class="mb-3">
											<label for="password" class="form-label">Password <code>*</code></label>
											<input type="password" class="form-control" id="password" name="password"
												   placeholder="Password"
												   value="<?= @$info['password']; ?>" required/>
										</div>
									</div>
								</div>
							<?php endif; ?>

							<div class="row">
								<div class="col-sm-4">
									<div class="mb-3">
										<label for="first_name" class="form-label">First Name <code>*</code></label>
										<input type="text" class="form-control" id="first_name" name="first_name"
											   placeholder="First Name"
											   value="<?= @$info['first_name']; ?>" required/>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="mb-3">
										<label for="middle_name" class="form-label">Middle Name</label>
										<input type="text" class="form-control" id="middle_name" name="middle_name"
											   placeholder="Middle Name"
											   value="<?= @$info['middle_name']; ?>"/>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="mb-3">
										<label for="last_name" class="form-label">Last Name <code>*</code></label>
										<input type="text" class="form-control" id="last_name" name="last_name"
											   placeholder="Last Name"
											   value="<?= @$info['last_name']; ?>" required/>
									</div>
								</div>
							</div>

							<div class="row text-center">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-success rounded-pill px-4">
										<div class="d-flex align-items-center">
											<i class="ti ti-device-floppy me-1 fs-4"></i>
											Save
										</div>
									</button>
									<a href="<?= site_url('students') ?>"
									   class="btn btn-danger rounded-pill px-4 ms-2 text-white">Cancel</a>
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>
