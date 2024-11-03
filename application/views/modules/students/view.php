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
						<div class="row">
							<div class="col-sm-4">
								<div class="mb-3">
									<label for="username" class="form-label">Username</label>
									<input type="text" class="form-control" id="username"
										   placeholder="Username"
										   value="<?= @$info['username']; ?>" readonly/>
								</div>
							</div>
						</div>
						<div class="row">


							<div class="col-sm-4">
								<div class="mb-3">
									<label for="first_name" class="form-label">First Name</label>
									<input type="text" class="form-control" id="first_name"
										   placeholder="First Name"
										   value="<?= @$info['first_name']; ?>" readonly/>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="mb-3">
									<label for="middle_name" class="form-label">Middle Name</label>
									<input type="text" class="form-control" id="middle_name"
										   placeholder="Middle Name"
										   value="<?= @$info['middle_name']; ?>" readonly/>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="mb-3">
									<label for="last_name" class="form-label">Last Name</label>
									<input type="text" class="form-control" id="last_name"
										   placeholder="Last Name"
										   value="<?= @$info['last_name']; ?>" readonly/>
								</div>
							</div>

						</div>

						<div class="row">
							<div class="col-sm-12 pu">
								<a class="btn btn-info rounded-pill px-4 mt-3"
								   href="<?= site_url('students'); ?>">
									Go back
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>
