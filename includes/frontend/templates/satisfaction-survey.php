<section id="satisfaction-survey" class="testimonials">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Survei Kepuasan</h2>
      <p>Tanggapan Pasien Tentang Kami!</p>
    </header>

    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-laughing-fill" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $resultSatisfied["countSatisfied"]; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Puas</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-neutral-fill" style="color: #4e73df;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $resultLessSatisfied["countLessSatisfied"]; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Kurang Puas</p>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-frown-fill" style="color: #ffc107;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $resultNotSatisfied["countNotSatisfied"]; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Tidak Puas</p>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section>

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
      <div class="swiper-wrapper">

        <?php foreach ($satisfactionSurvey as $row) : ?>
          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <!-- Count Rating -->
                <h5>
                  <?php if ($row["survey"] === "Puas") : ?>
                    <i class="bi bi-emoji-laughing-fill" style="color:#15be56;"></i> <br>Puas
                  <?php endif; ?>
                </h5>
                <h5>
                  <?php if ($row["survey"] === "Kurang Puas") : ?>
                    <i class="bi bi-emoji-neutral-fill" style="color: #4e73df;"></i> <br>Kurang Puas
                  <?php endif; ?>
                </h5>
                <h5>
                  <?php if ($row["survey"] === "Tidak Puas") : ?>
                    <i class="bi bi-emoji-frown-fill" style="color: #ffc107;"></i> <br>Tidak Puas
                  <?php endif; ?>
                </h5>
              </div>
              <div class="profile mt-auto profile-testimonials">
                <h3><?= $row["name"]; ?></h3>
                <h4>
                  <?= substr($row["no_hp"], 0, 2); ?>********<?= substr($row["no_hp"], -2); ?>
                </h4>
              </div>
            </div>
          </div><!-- End testimonial item -->
        <?php endforeach; ?>

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section>