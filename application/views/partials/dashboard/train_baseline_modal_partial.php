<div class="modal fade" id="train_baseline_modal" tabindex="-1" aria-labelledby="train_baseline_modalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="train_baseline_modalLabel">
					Train Baseline
				</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-12">
						<p class="mb-3 card-subtitle">
							If you want to upload your baseline template please click this <a target="_blank" href="<?= site_url('assets/files/baseline_template.csv')?>">Download</a> link to download the template.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="">
							<label for="baseline_csv" class="form-label">Upload Baseline</label>
							<input id="baseline_csv" name="baseline_csv" type="file" class="form-control" />
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn" data-bs-dismiss="modal">
					Close
				</button>
				<button id="baseline_csv_button_submit" type="button" class="btn btn-primary btn-add-event">
					Submit
				</button>
			</div>
		</div>
	</div>
</div>
