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
									<label for="category_id" class="form-label">Category</label>
									<input type="text" class="form-control" id="category_id"
										   placeholder="Category"
										   value="<?= Dropdown::get_static('categories', @$info['category_id'], 'view'); ?>"
										   readonly/>
								</div>
							</div>
						</div>
						<div class="row">


							<div class="col-sm-4">
								<div class="mb-3">
									<label for="question" class="form-label">Question</label>
									<input type="text" class="form-control" id="question"
										   placeholder="Question"
										   value="<?= @$info['question']; ?>" readonly/>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="mb-3">
									<label for="option_a" class="form-label">Option A</label>
									<input type="text" class="form-control" id="option_a"
										   placeholder="Option A"
										   value="<?= @$info['option_a']; ?>" readonly/>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mb-3">
									<label for="option_b" class="form-label">Option B</label>
									<input type="text" class="form-control" id="option_b"
										   placeholder="Option B"
										   value="<?= @$info['option_b']; ?>" readonly/>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mb-3">
									<label for="option_c" class="form-label">Option C</label>
									<input type="text" class="form-control" id="option_c"
										   placeholder="Option c"
										   value="<?= @$info['option_c']; ?>" readonly/>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mb-3">
									<label for="option_d" class="form-label">Option D</label>
									<input type="text" class="form-control" id="option_d"
										   placeholder="Option D"
										   value="<?= @$info['option_d']; ?>" readonly/>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="mb-3">
									<label for="answer" class="form-label">Answer</label>
									<input type="text" class="form-control" id="answer"
										   placeholder="Answer"
										   value="<?= @$info['answer']; ?>" readonly/>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12 pu">
								<a class="btn btn-info rounded-pill px-4 mt-3"
								   href="<?= site_url('questions'); ?>">
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
