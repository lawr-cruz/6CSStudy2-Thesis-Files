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

		<div class="datatables">
			<!-- basic table -->
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="mb-2">
								<h5 class="mb-0"><?= @$page_data['module']; ?> | <?= @$page_data['section']; ?></h5>
							</div>
							<p class="card-subtitle mb-3">
								<?php
								if ($category_id == 1) {
									echo Dropdown::get_static('categories', $category_id, 'view') . ' Questions: Fractions';
								}
								?>
							</p>
							<div class="table-responsive">
								<form id="form" role="form" method="post">
									<?php if (!empty($questions)) : ?>
										<div class="row">
											<input type="hidden" id="category_id" name="category_id"
												   value="<?= $category_id ?>" readonly required>

											<?php foreach ($questions as $key => $value) : ?>
												<?php $key = $key + 1 ?>
												<input type="hidden" id="question_id_<?= $key ?>"
													   name="questions[<?= $key; ?>]" value="<?= $value['id']; ?>"
													   readonly required>
												<div class="col-sm-6">
													<div class="mb-3">
														<label class="control-label col-form-label"><?= $key; ?>
															. <?= $value['question']; ?> <code>Required</code></label>
														<div class="form-check">
															<div class="form-check">
																<input type="radio" class="form-check-input"
																	   id="answer_a_<?= $key; ?>"
																	   name="answers[<?= $key; ?>]"
																	   value="<?= $value['option_a']; ?>" required/>
																<label class="form-check-label"
																	   for="answer_a_<?= $key; ?>">a). <?= $value['option_a']; ?></label>
															</div>
														</div>

														<div class="form-check">
															<div class="form-check">
																<input type="radio" class="form-check-input"
																	   id="answer_b_<?= $key; ?>"
																	   name="answers[<?= $key; ?>]"
																	   value="<?= $value['option_b']; ?>" required/>
																<label class="form-check-label"
																	   for="answer_b_<?= $key; ?>">b). <?= $value['option_b']; ?></label>
															</div>
														</div>

														<div class="form-check">
															<div class="form-check">
																<input type="radio" class="form-check-input"
																	   id="answer_c_<?= $key; ?>"
																	   name="answers[<?= $key; ?>]"
																	   value="<?= $value['option_c']; ?>" required/>
																<label class="form-check-label"
																	   for="answer_c_<?= $key; ?>">c). <?= $value['option_c']; ?></label>
															</div>
														</div>

														<div class="form-check">
															<div class="form-check">
																<input type="radio" class="form-check-input"
																	   id="answer_d_<?= $key; ?>"
																	   name="answers[<?= $key; ?>]"
																	   value="<?= $value['option_d']; ?>" required/>
																<label class="form-check-label"
																	   for="answer_d_<?= $key; ?>">d). <?= $value['option_d']; ?></label>
															</div>
														</div>
													</div>
												</div>
											<?php endforeach; ?>
										</div>

										<hr>

										<div class="row text-center">
											<div class="col-sm-12">
												<button type="submit" class="btn btn-success rounded-pill px-4">
													<div class="d-flex align-items-center">
														<i class="ti ti-device-floppy me-1 fs-4"></i>
														Submit
													</div>
												</button>
											</div>
										</div>

									<?php endif; ?>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- order table -->


		</div>
	</div>
</div>
