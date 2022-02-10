<section class="downloads">
	<div class="d-flex w-100">
		<div class="bg-picture lazy subpage-banner text-center" data-bg="<?= file_url(). $current_subpage->photo ?>">
			<?= $current_subpage->title ?>
		</div>
	</div>
	<div class="w-100 downloads-container">
		<?php foreach($downloads as $download): ?>
			<a target="_blank" href="<?= file_url(). $download->path ?>">
				<button class="button-secondary w-100 mb-2"><?= $download->title ?></button>
			</a>
		<?php endforeach; ?>
	</div>
</section>