<section class="section">
  <div class="section_title">
    <div class="separate_line"></div>
    <h1><?= $services_descriptions->title ?></h1>
    <p><?= $services_descriptions->subtitle ?></p>
  </div>
  <div class="container margin-top">
    <div class="row">
      <?php foreach($services as $service): ?>
      <div class="col-xl-4 col-md-6 mx-auto mb-xl-0 mb-5">
        <div class="box lazy" data-bg="<?= file_url(). $service->photo2 ?>.webp">
          <div class="box_corner wow fadeInDown" data-wow-delay="0.3s">
            <img class="lazy" data-src="<?= file_url(). $service->photo ?>">
          </div>
          <div class="content_box mt-4">
            <h1><?= $service->title ?></h1>
            <p><?= $service->subtitle ?></p>
          </div>
          <div class="mask_box"></div>
          <div class="border_box"></div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
<section class="section">
  <div class="section_title">
    <div class="separate_line"></div>
    <h1><?= $why_us_descriptions->title ?></h1>
    <p><?= $why_us_descriptions->subtitle ?></p>
  </div>
  <div class="container margin-top">
    <div class="row">
      <?php $i=1; foreach($why_us as $why): ?>
      <div class="col-xl-4 col-md-6 mx-auto mb-xl-0 mb-5 special-paddings">
        <div class="box-number wow fadeInLeft" data-wow-delay="0.3s">
          <!-- <div class="number"><?= $i ?></div> -->
          <div class="box-number-content">
            <h3><?= $why->title ?></h3>
            <p><?= $why->subtitle ?></p>
          </div>
        </div>
      </div>
      <?php $i++; endforeach ?>
    </div>
  </div>
</section>
<section class="section">
  <div class="section_title">
    <div class="separate_line"></div>
    <h1><?= $steps_descriptions->title ?></h1>
    <p><?= $steps_descriptions->subtitle ?></p>
  </div>
  <div class="container margin-top">
    <?php $i=1; foreach($steps as $step): ?>
    <div class="row mb-5">
      <div class="col-md-6 special-paddings">
        <div class="box-number py-4">
          <div class="number-2 wow fadeInLeft" <?php if($i == 1) echo 'style="left:-3rem"' ?> data-wow-delay="0.3s"><?= $i ?></div>
          <div class="box-number-content">
            <h5><?= $step->step ?></h5>
            <h3><?= $step->title ?></h3>
            <p class="ml-0 ml-md-5"><?= $step->subtitle ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 text-right">
        <div class="realisation_img py-4 shadow lazy" data-bg="<?= file_url(). $step->photo ?>.webp"></div>
      </div>
    </div>
  <?php $i++; endforeach ?>
  </div>
</section>
<!-- <section class="section">
  <div class="container bg-contact lazy" data-bg="<?= file_url(). $touch->photo ?>.webp">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-h-contact">
        <div class="contact_title">
          <h1><?= $touch->title ?></h1>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-h-contact">
        <div class="icons">
          <div class="icons_list">
            <a href="tel:<?= $contact_settings->phone1 ?>" class="anchor wow fadeInUp" data-wow-delay="0.3s">
              <div class="icon mr-2"><img class="lazy" data-src="<?= file_url(). $touch_icons[0]->photo ?>" width="20"></div>
              <?= $contact_settings->phone1 ?>
            </a>
            <a href="mailto:<?= $contact_settings->email1 ?>" class="anchor my-3 wow fadeInUp" data-wow-delay="0.6s">
              <div class="icon mr-2"><img class="lazy" data-src="<?= file_url(). $touch_icons[1]->photo ?>" width="20"></div>
              <?= $contact_settings->email1 ?>
            </a>
            <a target="_blank" href="https://www.google.com/maps/place/<?= $contact_settings->address ?>,+<?= $contact_settings->zip_code ?>+<?= $contact_settings->city ?>/data=!4m2!3m1!1s0x470e49e56d0d89e3:0x5bd7e8eb38c70bc?sa=X&ved=2ahUKEwjXruq9punsAhX-CRAIHVkUBToQ8gEwAHoECAsQAQ" class="anchor wow fadeInUp" data-wow-delay="0.9s">
              <div class="icon mr-2"><img class="lazy" data-src="<?= file_url(). $touch_icons[2]->photo ?>" width="16"></div>
              <?= $contact_settings->address ?>, <?= $contact_settings->zip_code ?> <?= $contact_settings->city ?>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-h-contact mx-auto">
        <div class="button_center">
          <a href="<?= base(). 'kontakt' ?>" class="button button-secondary shadow"><?= $touch->button_name ?></a>
        </div>
      </div>
    </div>
    <div class="mask_box"></div>
  </div>
</section> -->
<!-- <section class="section">
  <div class="section_title">
    <div class="separate_line"></div>
    <h1><?= $map_descriptions->title ?></h1>
    <p><?= $map_descriptions->subtitle ?></p>
  </div>
  <div class="container margin-top">
    <iframe src="<?= $contact_settings->map ?>" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
</section> -->