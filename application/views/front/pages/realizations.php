<section class="realizations">
	<div class="d-flex w-100">
		<div class="bg-picture lazy subpage-banner" data-bg="<?= file_url(). $current_subpage->photo ?>">
			<?= $current_subpage->title ?>
		</div>
	</div>
	<div class="realizations-title-border mt-5 mx-auto"></div>
	<h2 class="offers-category-subtitle mb-0 text-center ">Nasze realizacje</h2>
	<p class="realizations-subtitle">Sprawdź nasze ostatnie projekty</p>
	<div class="d-flex w-100 realizations-listing flex-wrap">
		<?php $j=0; for($i=0 ; $i < count($gallery) ; $i++): ?>
		<?php if($j == 0): ?>
			<div class="col-12 col-lg-6 p-3 left-full-container">
				<a href="<?= file_url(). $gallery[$i]->photo ?>" data-lightbox="gallery">
					<div class="bg-picture lazy <?php if(array_key_exists($i + 3, $gallery)) echo 'left-full'; else echo 'left-half' ?>" data-bg="<?= file_url(). $gallery[$i]->photo ?>"></div>
				</a>
			</div>
		<?php endif; ?>
		<?php if($j == 1): ?>
			<div class="col-12 col-lg-6 p-3" style="padding-bottom: 0!important">
				<div class="d-flex flex-wrap <?php if(array_key_exists($i + 3, $gallery)) echo 'right-top-container '; else echo 'h-100' ?>">
					<div class="col-12 pr-0 pr-lg-3 right-top-one pt-0 pl-0 col-lg-6">
						<a href="<?= file_url(). $gallery[$i]->photo ?>" data-lightbox="gallery">
							<div class="bg-picture lazy" data-bg="<?= file_url(). $gallery[$i]->photo ?>"></div>
						</a>
					</div>
				<?php endif; ?>
				<?php if($j == 2): ?>
					<div class="col-12 pl-0 pl-lg-3 right-top-one pt-0 pr-0 col-lg-6">
						<a href="<?= file_url(). $gallery[$i]->photo ?>" data-lightbox="gallery">
							<div class="bg-picture lazy" data-bg="<?= file_url(). $gallery[$i]->photo ?>"></div>
						</a>
					</div>
				<?php endif; ?>
				<?php if($j == 3): ?>
					<div class="col-12  px-0 left-bottom">
						<a href="<?= file_url(). $gallery[$i]->photo ?>" data-lightbox="gallery">
							<div class="bg-picture lazy" data-bg="<?= file_url(). $gallery[$i]->photo ?>"></div>
						</a>
					</div>
				</div>

			</div>
		<?php endif; ?>
		
		
		<?php if($j==3) $j=0; else $j++; endfor; ?>
	</div>
</section>