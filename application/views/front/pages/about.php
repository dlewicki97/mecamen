<section class="about" style="background-color: #F2F1F0">
	<div class="d-flex w-100">
		<div class="bg-picture lazy subpage-banner" data-bg="<?= file_url(). $current_subpage->photo ?>">
			<?= $current_subpage->title ?>
		</div>
	</div>
	<div class="about-container">
		<div class="main-about">
			<div class="d-flex flex-wrap">
				<div class="col-12 d-flex d-lg-none">
					<div class="bg-picture about-picture lazy"  data-bg="<?= file_url(). $main_about->photo ?>"></div>
				</div>
				<div class="col-12 col-lg-6 d-flex flex-column justify-content-center">
					<div class="mb-4">
						<h3 class="about-title"><?= $main_about->title ?></h3>
						<div class="about-description"><?= $main_about->description ?></div>
					</div>
					<?php if($main_about->title2 && $main_about->description2): ?>
						<div>
							<h3 class="about-title"><?= $main_about->title2 ?></h3>
							<div class="about-description"><?= $main_about->description2 ?></div>
						</div>
					<?php endif; ?>
				</div>
				<div class="col-6 d-none d-lg-flex">
					<div class="bg-picture about-picture lazy" style="height: 400px!important" data-bg="<?= file_url(). $main_about->photo ?>"></div>
				</div>
			</div>
		</div>

		<div class="history-container">
			<h3 class="about-title mb-5 text-center"><?= $history_descriptions->title ?></h3>

			<div class="flex-column d-none d-lg-flex">
				<div class="d-flex w-100 top">
					<?php $pair = count($history)%2==0; for($i=0 ; $i < count($history) - 1 ; $i++): ?>
					<div style="width: <?= 100 / (count($history) - 1) ?>%" class="history-content <?php if($i%2==0) echo 'bd-left'; elseif($i == count($history) - 2) echo 'bd-right' ?>">
						<?php if(($i%2==0 || $i == count($history) - 2)): ?>
							<h4 class="history-title <?= $i ?>"><?= $i == count($history) - 2 ? $history[count($history) - ($pair ? 2 : 1)]->date : $history[$i]->date ?></h4>
							<div class="history-description"><?= $i == count($history) - 2 ? $history[count($history) - ($pair ? 2 : 1)]->description : $history[$i]->description ?></div>
						<?php endif; ?>
						<div class="history-circle" <?php if($i%2!= 0 && $i != count($history) -2) echo 'style="left: 3px"' ?>></div>
						<?php if($i == count($history) - 2): ?>
							<div class="history-circle right" <?php if($pair) echo 'style="transform: translate(-14px, -6px)!important;"' ?> ></div>
						<?php endif; ?>
					</div>
				<?php endfor; ?>

			</div>
			<div class="history-line"></div>
			<div class="d-flex w-100 bottom">
				<?php  for($i=0 ; $i < count($history) - 1 ; $i++): ?>

					<div style="width: <?= 100 / (count($history) - 1) ?>%" class="history-content <?php if(!$pair && $i == count($history) - 2) echo 'd-none' ?> <?php if($i%2!=0 && $i != count($history)-2) echo 'bd-left'; elseif(($i == count($history) - 3) || ($pair && $i == count($history) - 2)) echo 'bd-right' ?>">
						<?php if(count($history)%2==0): ?>
							<?php if($i%2!=0 || $i == count($history) - 2 ): ?>
								<h4 class="history-title"><?= $i == count($history) - 2 ? $history[count($history) - 1]->date : $history[$i]->date ?></h4>
								<div class="history-description"><?= $i == count($history) - 2 ? $history[count($history) - 1]->description : $history[$i]->description ?></div>
							<?php endif; ?>
							<?php else: ?>
								<?php if($i%2!=0 || $i == count($history) - 3): ?>
									<h4 class="history-title <?= $i ?>"><?= $i == count($history) - 3 ? $history[count($history) - 2]->date : $history[$i]->date ?></h4>
									<div class="history-description"><?= $i == count($history) - 3 ? $history[count($history) - 2]->description : $history[$i]->description ?></div>
								<?php endif; ?>
							<?php endif; ?>
						</div>
					<?php endfor; ?>
					
				</div>
			</div>

			<div class="d-flex flex-wrap history-mobile d-lg-none">
				<?php foreach($history as $i => $date): ?>
					<div class="col-12 <?php if($i == 0) echo 'bd-top' ?>">
						<h4 class="history-title"><?= $date->date ?></h4>
						<div class="history-description"><?= $date->description ?></div>
						<div class="history-circle" ></div>
						<?php if($i == count($history)-1): ?>
							<div class="history-circle bottom" ></div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="d-flex flex-wrap" style="padding-top: 6rem">
				<div class="col-12 col-lg-6">
					<div class="partners-container text-center pb-0">
						<div class="about-title"><?= $partners_descriptions->title ?></div>
						<div class="about-description"><?= $partners_descriptions->subtitle ?></div>

						<div class="owl-carousel owl-theme mt-5">
							<?php foreach($partners as $partner): ?>
								<a target="_blank" href="<?= $partner->link ?>">
									<div class="partner-content">
										<div class="bg-picture lazy" data-bg="<?= file_url(). $partner->photo ?>" ></div>
										<div class="partner-title"><?= $partner->title ?></div>
									</div>
								</a>
							<?php endforeach; ?>
						</div>
					</div>
				</div>

				<div class="col-12 col-lg-6">
					<a data-lightbox="map" href="<?= file_url(). $history_map->photo ?>">
						<div class="bg-picture lazy map" data-bg="<?= file_url(). $history_map->photo ?>"></div>
					</a>
				</div>
			</div>

			<h3 class="about-title mb-5 text-center" style="padding-top: 6rem"><?= $history_map->title ?></h3>

			<div class="flex-column d-none d-lg-flex">
				<div class="d-flex w-100 top">
					<?php $pair = count($history_group)%2==0; for($i=0 ; $i < count($history_group) - 1 ; $i++): ?>
					<div style="width: <?= 100 / (count($history_group) - 1) ?>%" class="history-content <?php if($i%2==0) echo 'bd-left'; elseif($i == count($history_group) - 2) echo 'bd-right' ?>">
						<?php if(($i%2==0 || $i == count($history_group) - 2)): ?>
							<h4 class="history-title <?= $i ?>"><?= $i == count($history_group) - 2 ? $history_group[count($history_group) - ($pair ? 2 : 1)]->date : $history_group[$i]->date ?></h4>
							<div class="history-description"><?= $i == count($history_group) - 2 ? $history[count($history_group) - ($pair ? 2 : 1)]->description : $history_group[$i]->description ?></div>
						<?php endif; ?>
						<div class="history-circle" <?php if($i%2!= 0 && $i != count($history_group) -2) echo 'style="left: 3px"' ?>></div>
						<?php if($i == count($history_group) - 2): ?>
							<div class="history-circle right" <?php if($pair) echo 'style="transform: translate(-14px, -6px)!important;"' ?> ></div>
						<?php endif; ?>
					</div>
				<?php endfor; ?>

			</div>
			<div class="history-line"></div>
			<div class="d-flex w-100 bottom">
				<?php  for($i=0 ; $i < count($history_group) - 1 ; $i++): ?>

					<div style="width: <?= 100 / (count($history_group) - 1) ?>%" class="history-content <?php if(!$pair && $i == count($history_group) - 2) echo 'd-none' ?> <?php if($i%2!=0 && $i != count($history_group)-2) echo 'bd-left'; elseif(($i == count($history_group) - 3) || ($pair && $i == count($history_group) - 2)) echo 'bd-right' ?>">
						<?php if(count($history_group)%2==0): ?>
							<?php if($i%2!=0 || $i == count($history_group) - 2 ): ?>
								<h4 class="history-title"><?= $i == count($history_group) - 2 ? $history_group[count($history_group) - 1]->date : $history_group[$i]->date ?></h4>
								<div class="history-description"><?= $i == count($history_group) - 2 ? $history_group[count($history_group) - 1]->description : $history_group[$i]->description ?></div>
							<?php endif; ?>
							<?php else: ?>
								<?php if($i%2!=0 || $i == count($history_group) - 3): ?>
									<h4 class="history-title <?= $i ?>"><?= $i == count($history_group) - 3 ? $history_group[count($history_group) - 2]->date : $history_group[$i]->date ?></h4>
									<div class="history-description"><?= $i == count($history_group) - 3 ? $history_group[count($history_group) - 2]->description : $history_group[$i]->description ?></div>
								<?php endif; ?>
							<?php endif; ?>
						</div>
					<?php endfor; ?>
					
				</div>
			</div>

			<div class="d-flex flex-wrap history-mobile d-lg-none">
				<?php foreach($history_group as $i => $date): ?>
					<div class="col-12 <?php if($i == 0) echo 'bd-top' ?>">
						<h4 class="history-title"><?= $date->date ?></h4>
						<div class="history-description"><?= $date->description ?></div>
						<div class="history-circle" ></div>
						<?php if($i == count($history_group)-1): ?>
							<div class="history-circle bottom" ></div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>

			
		</div>

		

		<div class="about-other">
			<?php foreach($about as $i => $info): ?>
				<?php if($i == 2): ?>
					<div class="d-flex flex-wrap mb-0">
						<div class="d-flex prezes">
							<div>
								<img width="170" style="margin-right: 30px" height="170" src="<?= file_url(). $info->photo ?>" alt="<?= $info->alt ?>">
							</div>
							<div class=" d-flex flex-column justify-content-center">
								<div class="mb-0 mb-lg-4">
									<h3 class="about-title"><?= $info->title ?></h3>
									<div class="about-description"><?= $info->description ?></div>
								</div>

							</div>
						</div>
						<div class="">
							<div>
								<h3 class="about-title"><?= $info->title2 ?></h3>
								<div class="about-description"><?= $info->description2 ?></div>
							</div>
						</div>
						
					</div>
					<?php else: ?>
						<div class="d-flex flex-wrap <?php if($i == count($about)-1) echo 'mb-0' ?>">
							<div class="col-12 col-lg-6 <?php if($i%2==0) echo 'd-flex d-lg-none' ?>">


								<div class="bg-picture about-picture lazy"  data-bg="<?= file_url(). $info->photo ?>"></div>

							</div>
							<div class="col-12 col-lg-6 d-flex flex-column justify-content-center">
								<div class="mb-0 mb-lg-4">
									<h3 class="about-title"><?= $info->title ?></h3>
									<div class="about-description"><?= $info->description ?></div>
								</div>
								<?php if($info->title2 && $info->description2): ?>
									<div>
										<h3 class="about-title"><?= $info->title2 ?></h3>
										<div class="about-description"><?= $info->description2 ?></div>
									</div>
								<?php endif; ?>
							</div>
							<div class="col-12 col-lg-6 <?php if($i%2==0) echo 'd-none d-lg-flex'; else echo 'odd' ?>">

								<div class="bg-picture about-picture lazy"  data-bg="<?= file_url(). $info->photo ?>"></div>

							</div>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>

			<div class="references" style="padding-top: 6rem">
				<div class="about-title"><?= $about_references->title ?></div>
				<div class="about-description"><?= $about_references->description ?></div>

				<div class="d-flex flex-wrap">
					<?php foreach($references as $ref): ?>
						<div class="col-12 col-lg-3 mb-4">
							<div class="bg-picture lazy" data-bg="<?= file_url(). $ref->photo ?>"></div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>


		</div>
	</section>

