 
    <!-- Section: team -->
    <section class="home-section bg-gray paddingbot-60 wow fadeInDown" style="margin-top: 80px;" >
      <div class="container marginbot-50">
        <div class="row">
          <div></div>
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Struktur Organisasi Sekolah</h2>

              </div>
            </div>
            <!-- <a href="" class="btn btn-sm btn-info">Halaman Utama</a> -->
            <div class="divider-short"></div>
           
          </div>
        </div>
         <div id="list" class="col-sm-3" >
              <nav id="myScrollspy">
                <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="500">
                  <?php $i=0;
                  foreach ($post as $key) {
                    ?>
                    <li><a href="#section<?php echo $i;?>"><?php echo $key->page;?></a></li>
                    <?php 
                    $i++;
                  }
                  ?>
                  
                </ul>
              </nav>
            </div>
        <div class="col-sm-9">
          <?php $i = 0;
          foreach ($post as $key) {
            ?>
            <section id="section<?php echo $i;?>" class="home-section  container-fluid">
              <h3><?php echo $key->page;?> </h3>
              <?php echo $key->konten;?>
            </section>
            <?php 
          $i++;
          }
          ?>
        </div>
      </div>

    </section>
    <!-- /Section: team -->
