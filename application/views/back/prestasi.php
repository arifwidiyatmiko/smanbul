<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Prestasi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row container-fluid">
                                <i class="fa fa-clock-o fa-fw"></i> Daftar Prestasi
                                <button type="button" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#myModal">Tambah</button>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table id="tabel" class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Prestasi</th>
                                    <th>Bidang</th>
                                    <th>Tingkat</th>
                                    <th>Tahun</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $i=1;
                                    foreach ($pages as $key) {
                                        ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $key->nama;?></td>
                                        <td><?php echo $key->prestasi;?></td>
                                        <td><?php echo $key->bidang;?></td>
                                        <td><?php echo $key->tingkat;?></td>
                                        <td><?php echo $key->tahun;?></td>
                                        <td><a href="#" id="hapus" class=""  data-href="<?php echo base_url('Editor/prestasi/delete/'.$key->id);?>" data-book="<?php echo $key->nama;?> - <?php echo $key->prestasi;?>" data-toggle="modal" data-target="#confirm-delete">Hapus</a> </td>
                                    </tr>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                              </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
         <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Prestasi</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('Editor/prestasi/insert');?>" method="POST">
              <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" required="true">
              </div>
              <div class="form-group">
                  <label>Prestasi</label>
                  <input type="text" name="prestasi" class="form-control" placeholder="Prestasi" required="true">
              </div>
              <div class="form-group">
                  <label>Bidang</label>
                  <input type="text" name="bidang" class="form-control" placeholder="Bidang" required="true">
              </div>
              <div class="form-group">
                  <label>Tingkat</label>
                  <select name="tingkat" class="form-control">
                    <?php 
                    foreach ($dropdown as $key) {
                      ?><option value="<?php echo $key;?>"><?php echo $key;?></option><?php
                    }
                    ?>
                  </select>
              </div>
              <div class="form-group">
                  <label>Tahun</label>
                  <input type="number" name="tahun" class="form-control" placeholder="Tahun" required="true">
              </div>
              <div class="form-group">
                <input type="submit" value="Save" class="btn btn-info">
              </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
  