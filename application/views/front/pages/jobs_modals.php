<?php foreach($jobs as $i => $job): ?>
	<div class="modal fade" id="job<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="offers-category-subtitle text-center mb-0" style="font-size: 1.5rem"><?= $jobs_descriptions->form_title ?> <?= $job->work_place ?></h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form class="md-form mt-0" enctype="multipart/form-data" action="<?= base(). 'jobs/send' ?>" method="post" id="contact-form<?= $i ?>">
					<div class="modal-body">
						<div class="md-form">
							<input type="text" name="name" id="name<?= $i ?>" required class="form-control">
							<label for="name<?= $i ?>"><?= $jobs_descriptions->name ?></label>
						</div>
						<div class="md-form">
							<input type="email" name="email" id="email<?= $i ?>" required class="form-control">
							<label for="email<?= $i ?>"><?= $jobs_descriptions->email ?></label>
						</div>
						<div class="md-form">
							<input type="text" name="phone" id="phone<?= $i ?>" required class="form-control">
							<label for="phone<?= $i ?>"><?= $jobs_descriptions->phone ?></label>
						</div>
						<div class="md-form">
							<input type="text"  id="work_place<?= $i ?>" required disabled class="form-control" value="<?= $job->work_place ?>">
							<label for="work_place<?= $i ?>"><?= $jobs_descriptions->work_place ?></label>
							<input type="hidden" name="work_place" value="<?= $job->work_place ?>">
						</div>
						<div class="md-form">
							<input type="text" id="city<?= $i ?>" disabled required class="form-control" value="<?= $job->city ?>">
							<label for="city<?= $i ?>"><?= $jobs_descriptions->city ?></label>
							<input type="hidden" name="city" value="<?= $job->city ?>">
						</div>
						<div class="md-form">
							<textarea type="text" name="message" id="message<?= $i ?>" class="md-textarea form-control"></textarea>
							<label for="message<?= $i ?>"><?= $jobs_descriptions->message ?></label>
						</div>
						<div class="file-field">
							<div class="job-cv-title text-success" id="cv-name<?= $i ?>"></div>
							<button class="button-secondary btn-sm w-100">
								<?= $jobs_descriptions->cv_button_name ?>
								<input required id="attachment<?= $i ?>" name="attachment" type="file">
							</button>
						</div>
						<div class="mt-4">
							<input required type="checkbox" class="form-check-input" name="rodo1" id="rodo1<?= $i ?>">
							<label class="form-check-label" for="rodo1<?= $i ?>" style="transform: unset!important"><?= $settings->rodo ?></label>
						</div>
						<div class="mt-3">
							<input required type="checkbox" class="form-check-input" name="rodo2" id="rodo2<?= $i ?>">
							<label class="form-check-label" for="rodo2<?= $i ?>" style="transform: unset!important"><?= $settings->rodo_tel ?></label>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="button-secondary w-100"><?= $jobs_descriptions->submit_button_name ?></button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		let attachment<?= $i ?> = document.getElementById('attachment<?= $i ?>');
		attachment<?= $i ?>.addEventListener('change', () => {
			console.log(attachment<?= $i ?>.value)
			let path<?= $i ?> = attachment<?= $i ?>.value.split('\\');
			document.getElementById('cv-name<?= $i ?>').innerHTML = path<?= $i ?>[path<?= $i ?>.length - 1];
		})
	</script>
	<?php endforeach; ?>