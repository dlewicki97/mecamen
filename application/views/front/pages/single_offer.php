<section class="single-offer">
	<div class="bg-picture lazy banner" data-bg="<?= file_url(). $offers_category->photo2 ?>"></div>
	<div class="d-flex offers-category-content">
		<h2 class="offers-category-subtitle text-center"><?= $offers_category->title ?></h2>
		<div class="text-center offers-category-description"><?= $offers_category->description ?></div>
		<?php if($offers_category->dimensions): ?>
			<div class="dimensions"><?= $offers_category->dimensions ?></div>
		<?php endif; ?>
		<div class="mt-5 w-100">
			<?php foreach($offers as $offer): ?>
				<div class="d-flex w-100 flex-wrap mb-5">
					<div class="col-12 col-lg-4 mb-1 mb-lg-0">
						<a href="<?= file_url(). $offer->photo ?>" data-lightbox="gallery">
							<div class="bg-picture offer-photo lazy" data-bg="<?= file_url(). $offer->photo ?>"></div>
						</a>
					</div>
					<div class="col-12 col-lg-8 d-flex flex-column justify-content-center">
						<h2 class="offer-title"><?= $offer->title ?></h2>
						<div class="offer-description"><?= $offer->description ?></div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

</section>

