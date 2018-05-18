<?php
$banners = array('CAMBRIDGEAUDIO.jpg', 'Cayin-Tube-Amp.jpg', 'CLEAR-AUDIO-CONCEPT.jpg', 'Dali.jpg', 'marantz_pm5005.jpg', 'optoma-hd26.png.png');
?>
<aside id="fh5co-hero" class="js-fullheight">
  <div class="flexslider js-fullheight">
    <ul class="slides">

    <?php foreach ($banners as $banner) { ?>

      <li style="background-image: url(images/banners/<?php echo $banner; ?>);">
        <div class="overlay-gradient"></div>
        <div class="container">
          <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
            <div class="slider-text-inner">
              <!-- <h2>The best audio experience in town</h2> -->
              <!-- <p><a href="#" class="btn btn-primary btn-lg">Get started</a></p> -->
            </div>
          </div>
        </div>
      </li>
    <?php } ?>


      </ul>
    </div>
</aside>
