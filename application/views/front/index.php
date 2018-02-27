
    <!--slide -->
     <section id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <?php 
            $i=0;
            foreach ($slider->result() as $key) {
            ?>
            <div class="item <?php if($i==0){echo "active";}?>">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?php echo base_url();?>assets/upload/<?php echo $key->image;?>');"></div>
                <div class="carousel-caption" style="padding-bottom: 100px;">
                    <img class="img-responsive img-center" style="width: 150px;margin: 0 auto;" src="<?php echo base_url();?>assets/img/smanbul.png"></img>
                    <h1 style="color: <?php echo $key->warna;?>;"><b><?php echo $key->judul; ?></b></h1>
                    <p style="color: <?php echo $key->warna1;?>;"><?php echo $key->teks; ?></p>
                    <!-- <h2><a href="http://olinamasi.diploma.ipb.ac.id/Register" class="btn btn-primary">Daftarkan Tim</a></h2> -->
                </div>
            </div>
            <?php
            $i++;
            }
            ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </section>

    <!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Informasi Seputar SMAN 1 Cibungbulang</h2>
                <p>Berita, Pengumuman atau Informasi seputar SMAN 1 Cibungbulang.</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div id="filters-container" class="cbp-l-filters-alignLeft">
              <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (
                <div class="cbp-filter-counter"></div>)</div>
              <?php 
              foreach ($post_filter as $key) {
                ?>
                <div data-filter=".<?php echo $key;?>" class="cbp-filter-item"><?php echo $key;?> (
                <div class="cbp-filter-counter"></div>)</div>
                <?php
              }
              ?> 
            </div>

            <div id="grid-container" class="cbp-l-grid-team">
              <ul>
                <?php 
                // print_r($post);die();
                foreach ($post->result() as $key) {
                  ?>
                  <li class="cbp-item <?php echo $key->category;?>">
                    <a href="<?php echo base_url('Welcome/post/'.$key->title);?>" class="cbp-caption">
                      <div class="cbp-caption-defaultWrap">
                      <?php echo $key->konten;?>
                      </div>
                      <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                          <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-text">BACA SELENGKAPNYA</div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="<?php echo base_url('Welcome/post/'.$key->title);?>" class=" cbp-l-grid-team-name"><?php echo $key->title;?></a>
                  </li>
                  <?php
                }
                ?>
                
              </ul>
            </div>
            <span class="pull right"> <a href="<?php echo base_url();?>Welcome/posting" class="btn btn-primary">View All</a></span>
          </div>
        </div>
      </div>

    </section>
    <!-- /Section: team -->

    <!-- Section: testimonial -->
    <section id="testimonial" style="background-image: url('<?php echo base_url();?>assets/upload/<?php echo $paralax->result_array()[0]['image'];?>');" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold" style="color: <?php echo $paralax->result_array()[0]['warna'];?>;"><a href="<?php echo $paralax->result_array()[0]['link'];?>"><?php echo $paralax->result_array()[0]['judul'];?></a></h2>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      <div class="carousel-reviews broun-block">
        <div class="container">
          <div class="row">
            
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: testimonial -->


    <section id="partner" class="home-section paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Kerjasama</h2>
                <p>Untuk meningkatkan mutu pendidikan, SMAN 1 Cibungbulang bekerjasama dalam bentuk pengawasan dan Pengembangan</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-1"></div>
          <div class="col-sm-6 col-md-2">
            <div class="partner">
              <a href="http://kemdikbud.go.id" target="new"><img style="width: 150px;" src="<?php echo base_url();?>assets/img/33ddc3bc2640689.png" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-2">
            <div class="partner">
              <a href="http://www.jabarprov.go.id/" target="new"><img  style="width: 100px;" src="<?php echo base_url();?>assets/img/jabar.png" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-2">
            <div class="partner">
              <a href="http://www.bogorkab.go.id/" target="new"><img  style="width: 100px;" src="<?php echo base_url();?>assets/img/LOGO KABUPATEN BOGOR.png" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-2">
            <div class="partner">
              <a href="http://www.pnri.go.id/" target="new"><img style="width: 200px;" src="<?php echo base_url();?>assets/img/1430614690721.png" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-2">
            <div class="partner">
              <a href="http://ipb.ac.id/" target="new"><img style="width: 120px;" src="<?php echo base_url();?>assets/img/ipb.png" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-1"></div>
        </div>
      </div>
    </section>