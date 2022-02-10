<section class="jobs">
	<div class="d-flex w-100 flex-column">
		<div class="bg-picture lazy subpage-banner" data-bg="<?= file_url(). $current_subpage->photo ?>">
			<?= $current_subpage->title ?>
		</div>
		<h3 class="offers-category-subtitle text-center pt-5"><?= $jobs_descriptions->title ?></h3>
	</div>
	<div class="jobs-container">
		<?php foreach($jobs as $i => $job): ?>
			<div class="d-flex flex-wrap job-content">
				<div class="col-12 col-lg-6 d-block d-lg-none mb-2">
					<div class="bg-picture lazy offer-photo" data-bg="<?= file_url(). $job->photo ?>"></div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="d-sm-flex flex-wrap d-none">
						<div class="col-4">
							<p class="first-color font-weight-bold"><?= $jobs_descriptions->work_place ?> </p>
							<p class="first-color font-weight-bold"><?= $jobs_descriptions->city ?> </p>
							<p class="first-color font-weight-bold"><?= $jobs_descriptions->description ?> </p>
						</div>
						<div class="col-8">
							<p class="second-color"><?= $job->work_place ?></p>
							<p class="second-color"><?= $job->city ?></p>
							<div class="second-color mb-4"><?= $job->description ?></div>
							<!-- <button class="button-secondary" ><?= $job->button_name ?></button> -->
							<!-- <button class="button-secondary" data-toggle="modal" data-target="#job<?= $i ?>"><?= $job->button_name ?></button> -->
						</div>
					</div>
					<div class="d-flex flex-wrap d-sm-none">
						<div class="col-12">
							<p class="first-color font-weight-bold mb-0"><?= $jobs_descriptions->work_place ?> </p>
							<p class="second-color"><?= $job->work_place ?></p>
							<p class="first-color font-weight-bold mb-0"><?= $jobs_descriptions->city ?> </p>
							<p class="second-color"><?= $job->city ?></p>
							<p class="first-color font-weight-bold mb-0"><?= $jobs_descriptions->description ?> </p>
							<div class="second-color mb-4"><?= $job->description ?></div>
						</div>
						<div class="col-12">
							<!-- <button class="button-secondary" data-toggle="modal" data-target="#job<?= $i ?>"><?= $job->button_name ?></button> -->
							<!-- <button class="button-secondary" ><?= $job->button_name ?></button> -->
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6 d-none d-lg-block">
					<div class="bg-picture lazy offer-photo" data-bg="<?= file_url(). $job->photo ?>"></div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>


<?php $this->load->view('front/pages/jobs_modals') ?>
</section>