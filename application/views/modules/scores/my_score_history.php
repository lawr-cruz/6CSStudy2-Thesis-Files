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
										<th>Username</th>
										<th>Category</th>
										<th>No. of Questions</th>
										<th>Score</th>
										<th>Remarks</th>
										<th>Created</th>
										<th>Updated</th>
									</tr>
									<!-- end row -->
									</thead>
									<tbody>
									<?php if (!empty(@$items)) : ?>
										<?php foreach (@$items as $key => $value) : ?>
											<tr>
												<td><?= $value['id']; ?></td>
												<td><?= $value['username']; ?></td>
												<td><?= Dropdown::get_static('categories', $value['category_id'], 'view'); ?></td>
												<td><?= round($value['no_of_questions']); ?></td>
												<td><?= round($value['score']); ?></td>
												<td><?= $value['remarks']; ?></td>
												<td style="width: 15%;"><?= '<div class="badge bg-info">' . get_person_name($value['created_by']) . '</div>' . ' <div>' . view_date($value['created_at'], 'date_am_pm') . '</div>'; ?></td>
												<td style="width: 15%;"><?= '<div class="badge bg-info">' . get_person_name($value['updated_by']) . '</div>' . ' <div>' . view_date($value['updated_at'], 'date_am_pm') . '</div>'; ?></td>
											</tr>
										<?php endforeach; ?>
									<?php endif; ?>
									</tbody>
									<tfoot>
									<tr>
										<th>ID</th>
										<th>Username</th>
										<th>Category</th>
										<th>No. of Questions</th>
										<th>Score</th>
										<th>Remarks</th>
										<th>Created</th>
										<th>Updated</th>
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
