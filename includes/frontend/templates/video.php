<section id="videos" class="videos">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Video</h2>
      <p>Tonton video terbaru kami</p>
      <div class="row justify-content-center channel-youtube">
        <div class="col">
          <a href="https://www.youtube.com/channel/UCVISaE6hJ6NRJr24DgGUtLQ">
            <img src="<?= $logo; ?>" alt="">
          </a>
          <a href="https://www.youtube.com/channel/UCVISaE6hJ6NRJr24DgGUtLQ">
            <h3>Deliyana Dental Care</h3>
          </a>
          <a href="https://www.youtube.com/channel/UCVISaE6hJ6NRJr24DgGUtLQ" type="button" class="btn btn-danger mt-2">Subscribe</a>
        </div>
      </div>
    </header>

    <div class="videos-slider swiper" data-aos="fade-up" data-aos-delay="200">
      <div class="swiper-wrapper">

        <!-- video item -->
        <?php foreach ($videos as $row) : ?>
          <div class="swiper-slide">
            <div class="video-item">
              <iframe src="https://www.youtube.com/embed/<?= substr($row["source"], 32); ?>"></iframe>
            </div>
          </div>
        <?php endforeach ?>
        <!-- End video item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section>