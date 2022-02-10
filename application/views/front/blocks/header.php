<header <?php if($this->uri->segment(1) != '') echo 'style="height: unset"' ?>>
	
	<nav class="navbar navbar-expand-lg navbar-light <?php if($this->uri->segment(1) == '') echo 'fixed-top' ?> scrolling-navbar">
		<div class="container smooth-scroll">
			<a class="navbar-brand" href="<?= base() ?>">
				<picture>
					<source data-srcset="<?= file_url(). $settings->logo ?>.webp" type="image/webp">
					<source data-srcset="<?= file_url(). $settings->logo ?>" type="image/jpeg">
					<source data-srcset="<?= file_url(). $settings->logo ?>" type="image/png">
					<source data-srcset="<?= file_url(). $settings->logo ?>" type="image/svg">
					<img class="logo" width="auto" src="<?= file_url(). $settings->logo ?>" width="300">
				</picture>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent-7">
				<ul class="navbar-nav ml-auto mt-3 mt-md-0">
					
					<?php foreach($subpages as $subpage): ?>
					<li class="nav-item">
						<a <?php if($this->uri->segment(1) == $subpage->page) echo 'style="font-weight: 700;"' ?> class="nav-link <?php if($this->uri->segment(1) != '') echo 'first-color' ?>" href="<?= base(). $subpage->page ?>" <?php if($subpage->data_offset) echo "data-offset=". $subpage->data_offset. "\"" ?> ><?= $subpage->title ?></a>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</nav>
	<?php if($this->uri->segment(1) == ''): ?>
	<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
		<ol class="carousel-indicators">
			<?php $i=0; foreach($slider as $slide): ?>
			<li data-target="#carousel-example-1z" data-slide-to="<?= $i ?>" <?php if($i == 0) echo 'class="active"' ?> ></li>
			<?php $i++; endforeach ?>
		</ol>
		<div class="carousel-inner" role="listbox">
			<?php foreach($slider as $i => $slide): ?>
			<?php $video = $this->back_m->get_images('media', 'slider', $slide->id); ?>
			<div class="carousel-item <?php if($i == 0) echo 'active'; ?>">
				<?php if(!empty($video)): ?>
				<?php
				$full_path = explode('/', $video[0]->full_path);
				$path = $full_path[count($full_path) - 2] . '/'. $full_path[count($full_path) - 1];
				?>
				<div style="height: 100vh" class="position-relative video-slider">
				<video muted loop height="100%" style="object-fit: unset" width="100%" src="<?= file_url(). $path ?>" autoplay></video>
				<div class="mask">
					<div class=" h-100 d-flex justify-content-center align-items-center">
						<div class="row pt-5 mt-3">
							<div class="col-md-12 mb-3">
								<div class="intro-info-content text-center">
									<h1 class="white-text mb-3 wow font-weight-bold fadeInDown" data-wow-delay="0.3s">
									<?= $slide->title ?>
									</h1>
									<a href="<?= base(). $slide->link ?>" class="btn slider-button button-primary wow fadeInDown" data-wow-delay="0.3s"><?= $slide->button_name ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php else: ?>
			<div class="view jarallax lazy" data-bg="<?= file_url(). $slide->photo ?>.webp" style="background-repeat: no-repeat; background-size: cover; background-position: center center;">
				<div class="mask rgba-stylish-light">
					<div class="container h-100 d-flex justify-content-center align-items-center">
						<div class="row pt-5 mt-3">
							<div class="col-md-12 mb-3">
								<div class="intro-info-content text-center">
									<h1 class="white-text mb-3 wow font-weight-bold fadeInDown" data-wow-delay="0.3s">
									<?= $slide->title ?>
									</h1>
									<a href="<?= base(). $slide->link ?>" class="btn slider-button button-primary wow fadeInDown" data-wow-delay="0.3s"><?= $slide->button_name ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<?php endforeach; ?>

	</div>
	<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Poprzedni</span>
	</a>
	<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Następny</span>
	</a>
</div>
<?php endif; ?>
<?php if($this->session->flashdata('flashdata')) echo $this->session->flashdata('flashdata') ?>
</header>