<section class="offers">
	<div class="d-flex w-100">
		<div class="bg-picture lazy subpage-banner" data-bg="<?= file_url(). $current_subpage->photo ?>">
			<?= $current_subpage->title ?>
		</div>

	</div>
	<div class="realizations-subtitle mt-4"><?= $offers_descriptions->description ?></div>
	<div class="d-flex w-100 flex-wrap offers-container">
		<?php foreach($offers_categories as $category): ?>
			<div class="col-12 col-lg-4">
				<a href="<?= base(). 'oferta/'. $category->id. '/'. slug($category->title) ?>">
					<div class="bg-picture offer-card" style="background-image: url('<?= file_url(). $category->photo ?>')">
						<div class="mask"></div>
						<div class="position-relative" style="z-index: 2"><?= $category->title ?></div>
					</div>
				</a>
			</div>
		<?php endforeach; ?>
	</div>
</section>