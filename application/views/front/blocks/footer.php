<footer class="bg-footer lazy" data-bg="<?= file_url(). $footer->photo ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 text-center text-md-left">
        <a href="<?= base() ?>">
          <picture>
            <source data-srcset="<?= file_url(). $settings->logo2 ?>" type="image/jpeg">
            <source data-srcset="<?= file_url(). $settings->logo2 ?>" type="image/png">
            <source data-srcset="<?= file_url(). $settings->logo2 ?>" type="image/svg">
            <img class="lazy" data-src="<?= file_url(). $settings->logo2 ?>" width="250">
          </picture>
        </a>
        <a href="" class="social ml-md-4 mt-3 mt-md-0">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <div class="row px-3 my-4 footer_menu">
          <?php foreach($subpages as $subpage): ?>
          <div>
            <a href="<?= base(). $subpage->page ?>" class="footer_link"><?= $subpage->title ?></a>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="col-lg-5 text-lg-right">
        <a class="anchor_footer" href="tel:<?= $contact_settings->phone1 ?>"><?= $contact_settings->phone1 ?></a><br>
        <a class="anchor_footer" href="mailto:<?= $contact_settings->email1 ?>"><?= $contact_settings->email1 ?></a><br>
        <a class="anchor_footer" href="https://www.google.com/maps/place/<?= $contact_settings->address ?>,+<?= $contact_settings->zip_code ?>+<?= $contact_settings->city ?>/data=!4m2!3m1!1s0x470e49e56d0d89e3:0x5bd7e8eb38c70bc?sa=X&ved=2ahUKEwjXruq9punsAhX-CRAIHVkUBToQ8gEwAHoECAsQAQ"><?= $contact_settings->address ?>, <?= $contact_settings->zip_code ?> <?= $contact_settings->city ?></a>
      </div>
    </div>
  </div>
  <hr style="background-color: #7F92AA;">
  <div class="container">
    <div class="row copyright pt-4 px-3">
      © Copyright 2020 by Mecamen. All Rights Reserved.
      <div class="ml-md-auto">Created by <strong>Ad Awards</strong></div>
    </div>
  </div>
</footer>
<script type="text/javascript" src="<?= assets() ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?= assets() ?>js/popper.min.js"></script>
<script type="text/javascript" src="<?= assets() ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= assets() ?>js/mdb.min.js"></script>
<script type="text/javascript" src="<?= assets() ?>js/scripts.js"></script>
<script src="<?= assets() ?>dist/js/lightbox-plus-jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.3/dist/lazyload.min.js"></script>
<script src="<?= assets() ?>dist/owl.carousel.min.js"></script>
<script async src="<?= assets() ?>js/cookieconsent.min.js"></script>
<script async src="<?= assets() ?>js/cookies.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
new WOW().init();
});
var lazyLoadInstance = new LazyLoad({
});
</script>
<!-- <?php if($this->uri->segment(1) == 'praca'): ?>
<script async defer src="https://www.google.com/recaptcha/api.js?render=<?= $settings->captcha ?>"></script>
<script async>
<?php foreach($jobs as $i => $job): ?>
$('#contact-form<?= $i ?>').submit(function(event) {
event.preventDefault();
grecaptcha.ready(function() {
grecaptcha.execute('<?= $settings->captcha ?>', {action: 'mailer/send'}).then(function(token) {
$('#contact-form<?= $i ?>').prepend('<input type="hidden" name="secret_key" value="<?= $settings->captcha_secret ?>">');
$('#contact-form<?= $i ?>').unbind('submit').submit();
});;
});
});
<?php endforeach; ?>
</script>
<?php endif; ?> -->
<?php if($this->uri->segment(1) == 'o-firmie'): ?>
<script>
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
      responsive: {
        0 : {items: 1},
        567: {items: 2},
        992: {items: 3}
      },
      dots: false,
      nav: false,
      rewind: false,
      lazyLoad: true,
      autoplayHoverPause: true
    });
  })
</script>

<?php endif; ?>

<?php if($this->uri->segment(1) == ''): ?>
  <script>
    function setLogo() {
      if(!document.getElementsByTagName('nav')[0].classList.contains('top-nav-collapse')) {
        document.getElementsByClassName('logo')[0].src = '<?= file_url(). $settings->logo3 ?>'
      } else {
        document.getElementsByClassName('logo')[0].src = '<?= file_url(). $settings->logo ?>'
      }
    }
    setLogo()
    document.addEventListener('scroll', () => setLogo())
  </script>
  <?php endif; ?>
</body>
</html>