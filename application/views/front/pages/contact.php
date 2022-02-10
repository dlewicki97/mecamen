<section class="contact" style="background-color: #F2F1F0">
	<div class="d-flex w-100">
		<div class="bg-picture lazy subpage-banner" data-bg="<?= file_url(). $current_subpage->photo ?>">
			<?= $current_subpage->title ?>
		</div>
	</div>
	<div class="contact-content">
		<h2 class="offers-category-subtitle" style="font-size: 1.5rem"><?= $contact_settings->company ?></h2>
		<a target="_blank" href="https://www.google.com/maps/place/<?= $contact_settings->address ?>, <?= $contact_settings->zip_code ?> <?= $contact_settings->city ?>/data=!4m2!3m1!1s0x470e49e56d0d89e3:0x5bd7e8eb38c70bc?sa=X&ved=2ahUKEwjXruq9punsAhX-CRAIHVkUBToQ8gEwAHoECAsQAQ"><div class="img-container"><img class="lazy" data-src="<?= file_url(). $contact_icons[0]->photo ?>" alt="<?= $contact_icons[0]->alt ?>"></div><?= $contact_settings->address ?>, <?= $contact_settings->zip_code ?> <?= $contact_settings->city ?></a>
		<a href="mailto:<?= $contact_settings->email1 ?>"><div class="img-container"><img class="lazy" data-src="<?= file_url(). $contact_icons[1]->photo ?>" alt="<?= $contact_icons[1]->alt ?>"></div><?= $contact_settings->email1 ?></a>
		<a href="tel:<?= $contact_settings->phone1 ?>"><div class="img-container"><img class="lazy" data-src="<?= file_url(). $contact_icons[2]->photo ?>" alt="<?= $contact_icons[2]->alt ?>"></div><?= $contact_settings->phone1 ?></a>
	</div>
	<div style="background-color: #F2F1F0">
		<iframe src="<?= $contact_settings->map ?>" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
</section>