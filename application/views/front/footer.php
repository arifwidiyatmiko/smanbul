    <footer>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Sekilas Tentang Sekolah</h5>
                <p>
                  <?php echo $footer[0]['info'];?>
                </p>
              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Eksternal Link</h5>
                <ul>
                  <li><a href="http://dapo.dikdasmen.kemdikbud.go.id/sekolah/0BA3CA2C92FBE88A1CCB">DAPODIK</a></li>
                  <li><a href="https://kabbogor.siap-ppdb.com/">PPDB Kab. Bogor</a></li>
                  <li><a href="http://disdik.bogorkab.go.id/">Dinas Pendidikan Kab. Bogor</a></li>
                 
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Kontak Kami</h5>
                <p>
                  Kami akan senang apabila dapat melayani anda.
                </p>
                <ul>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> <?php echo $footer[0]['telpon'];?>
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span><?php echo $footer[0]['email'];?>
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Lokasi</h5>
                <p><?php echo $footer[0]['alamat'];?></p>

              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Follow us</h5>
                <ul class="company-social">
                  <li class="social-facebook"><a href="<?php echo $footer[0]['facebook'];?>"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-twitter"><a href<?php echo $footer[0]['twitter'];?>"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  <!-- <p>&copy;Copyright - Medicio Theme. All rights reserved.</p> -->
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="text-right">
                  <div class="credits">
                    <!--
                      All the links in the footer should remain intact. 
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medicio
                    -->
                    <a href="https://bootstrapmade.com/bootstrap-education-templates/"><?php echo $this->config->item('title');?></a> Website
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

  <!-- Core JavaScript Files -->
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.scrollTo.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.appear.js"></script>
  <script src="<?php echo base_url();?>assets/js/stellar.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/nivo-lightbox.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/custom.js"></script>
  <script type="text/javascript">
      $(document).ready(function() {
        $('#tabel').DataTable();
        // $('#list').addClass('sticky');
        // var topPosition = $('#list').offset().top - 10;
        $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
          }
        });
        
    } );
    </script>
</body>

</html>
