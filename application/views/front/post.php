 
    <!-- Section: team -->
    <section class="home-section bg-gray paddingbot-60 wow fadeInDown" >
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Post</h2>

              </div>
            </div>
            <!-- <a href="" class="btn btn-sm btn-info">Halaman Utama</a> -->
            <div class="divider-short"></div>
           
          </div>
        </div>
        <?php 
        if ($this->uri->segment(2)== 'posting') {
          ?>
            <div class="container">
          <?php $i = 0;
          foreach ($post->result() as $key) {
            ?>
            <div class="home-section  container-fluid">
              <h3><?php echo $key->title;?> </h3>
              <?php echo substr($key->konten,0,250)."...";?>
            </div>
            <?php 
          $i++;
          }
          ?>
          <?php if (isset($links)) { ?>
                <?php echo $links ?>
            <?php } ?>
        </div>
          <?php
        }else{
            ?>
            <div class="container">
          <?php $i = 0;
          foreach ($post->result() as $key) {
            ?>
            <div class="home-section  container-fluid">
              <h3><?php echo $key->title;?> </h3>
              <?php echo $key->konten;?>
            </div>
            <?php 
          $i++;
          }
          ?>
        </div>
          <?php
        }

        ?>
        
      </div>

    </section>
    <!-- /Section: team -->
