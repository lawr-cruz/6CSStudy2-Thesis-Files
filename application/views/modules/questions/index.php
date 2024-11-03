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
								<?= SYSTEM_DESCRIPTION; ?>
							</p>
							<div class="table-responsive">
								<table id="table" class="table border table-striped table-bordered text-nowrap">
									<thead>
									<!-- start row -->
									<tr>
										<th>ID</th>
										<th>Category</th>
										<th>Question</th>
										<th>Option A</th>
										<th>Option B</th>
										<th>Option C</th>
										<th>Option D</th>
										<th>Answer</th>
										<th>Created</th>
										<th>Updated</th>
										<th>Actions</th>
									</tr>
									<!-- end row -->
									</thead>
									<tbody>
									<?php if (!empty(@$items)) : ?>
										<?php foreach (@$items as $key => $value) : ?>
											<tr>
												<td><?= $value['id']; ?></td>
												<td><?= Dropdown::get_static('categories', $value['category_id'], 'view'); ?></td>
												<td><?= $value['question']; ?></td>
												<td><?= $value['option_a']; ?></td>
												<td><?= $value['option_b']; ?></td>
												<td><?= $value['option_c']; ?></td>
												<td><?= $value['option_d']; ?></td>
												<td><?= $value['answer']; ?></td>
												<td style="width: 15%;"><?= '<div class="badge bg-info">' . get_person_name($value['created_by']) . '</div>' . ' <div>' . view_date($value['created_at'], 'date_am_pm') . '</div>'; ?></td>
												<td style="width: 15%;"><?= '<div class="badge bg-info">' . get_person_name($value['updated_by']) . '</div>' . ' <div>' . view_date($value['updated_at'], 'date_am_pm') . '</div>'; ?></td>
												<td>
													<div class="dropdown dropstart">
														<a href="#" class="text-muted" id="dropdownMenuButton"
														   data-bs-toggle="dropdown"
														   aria-expanded="false">
															<i class="ti ti-dots-vertical fs-6"></i>
														</a>
														<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
															<li>
																<a class="dropdown-item d-flex align-items-center gap-3"
																   href="<?= site_url('questions/view/' . $value['id']) ?>"><i
																		class="fs-4 ti ti-eye"></i>View</a>
															</li>

															<li>
																<a class="dropdown-item d-flex align-items-center gap-3"
																   href="<?= site_url('questions/form/' . $value['id'])?>"><i
																		class="fs-4 ti ti-edit"></i>Edit</a>
															</li>

															<li>
																<a class="dropdown-item d-flex align-items-center gap-3 delete-row"
																   href="javascript:void(0);"
																   data-id="<?= $value['id']; ?>"><i
																		class="fs-4 ti ti-trash"></i>Delete</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
										<?php endforeach; ?>
									<?php endif; ?>
									</tbody>
									<tfoot>
									<tr>
										<th>ID</th>
										<th>Category</th>
										<th>Question</th>
										<th>Option A</th>
										<th>Option B</th>
										<th>Option C</th>
										<th>Option D</th>
										<th>Answer</th>
										<th>Created</th>
										<th>Updated</th>
										<th>Actions</th>
									</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- order table -->


		</div>
	</div>
</div>
