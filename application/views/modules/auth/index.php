<div id="main-wrapper">
	<div
		class="position-relative overflow-hidden radial-gradient min-vh-100 w-100 d-flex align-items-center justify-content-center">
		<div class="d-flex align-items-center justify-content-center w-100">
			<div class="row justify-content-center w-100">
				<div class="col-md-8 col-lg-6 col-xxl-3">
					<div class="card mb-0">
						<div class="card-body">
							<a href="#" class="text-nowrap logo-img text-center d-block mb-5 w-100">
								<img src="<?= site_url('assets/images/scitology_logo.png')?>" height="100" width="100" class="dark-logo" alt="Logo-Dark"/>
								<img src="<?= site_url('assets/images/scitology_logo.png')?>" height="100" width="100" class="light-logo" alt="Logo-light"/>
							</a>
							<form id="form" role="form" method="POST">
								<div class="mb-3">
									<label for="username" class="form-label">Username <code>*</code></label>
									<input type="text" class="form-control" id="username" name="username"
										   aria-describedby="emailHelp" required autofocus>
								</div>
								<div class="mb-4">
									<label for="password" class="form-label">Password <code>*</code></label>
									<input type="password" class="form-control" id="password" name="password" required autocomplete="">
								</div>
								<div class="d-flex align-items-center justify-content-between mb-4">
									<div class="form-check">
										<input class="form-check-input primary" type="checkbox" value=""
											   id="flexCheckChecked" checked>
										<label class="form-check-label text-dark" for="flexCheckChecked">
											Remember this Device
										</label>
									</div>
								</div>
								<button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="dark-transparent sidebartoggler"></div>
