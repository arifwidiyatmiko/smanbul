

    

    <!-- Section: team -->
    <section class="home-section bg-gray paddingbot-60" style="margin-top: 80px;">
      <div class="container marginbot-50">
        <div class="row">
          <div></div>
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Prestasi</h2>
                <p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>

              </div>
            </div>
            <!-- <a href="" class="btn btn-sm btn-info">Halaman Utama</a> -->
            <div class="divider-short"></div>
           
          </div>
        </div>
         <div class="col-sm-12">
              <table id="tabel" class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Penghargaan/ Prestasi</th>
                    <th>Bidang</th>
                    <th>Tahun</th>
                    <th>Tingkat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  foreach ($prestasi as $key ) {
                    ?>
                    <tr>
                      <td><?php echo $i;?></td>
                                        <td><?php echo $key->nama;?></td>
                                        <td><?php echo $key->prestasi;?></td>
                                        <td><?php echo $key->bidang;?></td>
                                        <td><?php echo $key->tahun;?></td>
                                        <td><?php echo $key->tingkat;?></td>
                    </tr>
                    <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
      </div>

    </section>
    <!-- /Section: team -->
    