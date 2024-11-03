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
						<p class="card-subtitle mb-3">
							<mark><code>The value of the option fields must match the value of the answer field.</code></mark>
						</p>
						<form id="form" role="form" method="POST">
							<input type="hidden" id="id" name="id" value="<?= @$info['id']; ?>" readonly>
							<div class="row">
								<div class="col-sm-4">
									<div class="mb-4">
										<label for="category_id" class="form-label">Category <code>*</code></label>
										<?= form_dropdown('category_id', Dropdown::get_static('categories'), @$info['category_id'], 'id="category_id" class="form-select" required') ?>
									</div>
								</div>

								<div class="col-sm-8">
									<div class="mb-3">
										<label for="question" class="form-label">Question <code>*</code></label>
										<input type="text" class="form-control" id="question" name="question"
											   placeholder="Question"
											   value="<?= @$info['question']; ?>" required/>
									</div>
								</div>

								<div class="col-sm-3">
									<div class="mb-3">
										<label for="option_a" class="form-label">Option A <code>*</code></label>
										<input type="text" class="form-control" id="option_a" name="option_a"
											   placeholder="Option A"
											   value="<?= @$info['option_a']; ?>" required/>
									</div>
								</div>

								<div class="col-sm-3">
									<div class="mb-3">
										<label for="option_b" class="form-label">Option B <code>*</code></label>
										<input type="text" class="form-control" id="option_b" name="option_b"
											   placeholder="Option B"
											   value="<?= @$info['option_b']; ?>" required/>
									</div>
								</div>

								<div class="col-sm-3">
									<div class="mb-3">
										<label for="option_c" class="form-label">Option C <code>*</code></label>
										<input type="text" class="form-control" id="option_c" name="option_c"
											   placeholder="Option C"
											   value="<?= @$info['option_c']; ?>" required/>
									</div>
								</div>

								<div class="col-sm-3">
									<div class="mb-3">
										<label for="option_d" class="form-label">Option D <code>*</code></label>
										<input type="text" class="form-control" id="option_d" name="option_d"
											   placeholder="Option D"
											   value="<?= @$info['option_d']; ?>" required/>
									</div>
								</div>

								<div class="col-sm-3">
									<div class="mb-3">
										<label for="answer" class="form-label">Answer <code>*</code></label>
										<input type="text" class="form-control" id="answer" name="answer"
											   placeholder="Answer"
											   value="<?= @$info['answer']; ?>" required/>
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
									<a href="<?= site_url('questions') ?>"
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
