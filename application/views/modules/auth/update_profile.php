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
							<div class="row">

								<div class="col-sm-4">
									<div class="mb-3">
										<label for="first_name" class="form-label">First Name <code>*</code></label>
										<input type="text" class="form-control" id="first_name" name="first_name"
											   placeholder="First Name"
											   value="<?= @$info['first_name']; ?>" required autofocus/>
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

								<div class="col-sm-4">
									<div class="mb-4">
										<label for="gender" class="form-label">Gender <code>*</code></label>
										<?= form_dropdown('gender', Dropdown::get_static('gender'), @$info['gender'], 'id="gender" class="form-select" required') ?>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="mb-3">
										<label for="dob" class="form-label">Date of Birth <code>(dd/mm/yyyy)
												*</code></label>
										<input type="date" class="form-control" id="dob" name="dob"
											   placeholder="Date of Birth"
											   value="<?= @$info['dob']; ?>" required/>
									</div>
								</div>


								<div class="col-sm-4">
									<div class="mb-3">
										<label for="contact_no" class="form-label">Contact No. <code>*</code></label>
										<input type="text" class="form-control" id="contact_no" name="contact_no"
											   placeholder="Contact No."
											   value="<?= @$info['contact_no']; ?>" required/>
									</div>
								</div>

								<div class="col-sm-12">
									<div class="mb-3">
										<label for="address" class="form-label">Address <code>*</code></label>
										<input type="text" class="form-control" id="address" name="address"
											   placeholder="Address"
											   value="<?= @$info['address']; ?>" required/>
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-success rounded-pill px-4">
										<div class="d-flex align-items-center">
											<i class="ti ti-device-floppy me-1 fs-4"></i>
											Update Profile
										</div>
									</button>
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>
