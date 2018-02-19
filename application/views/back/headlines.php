<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Headlines</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row container-fluid">
                                <i class="fa fa-clock-o fa-fw"></i> Daftar Headlines
                                <button type="button" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#myModal">Tambah</button>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table id="tabel" class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Teks</th>
                                    <th>Link</th>
                                    <th>Status</th>
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
                                        <td><?php echo $key->text;?></td>
                                        <td><?php echo $key->link;?></td>
                                        <td><?php if($key->status == 1){echo "<span class='text-success'>Aktif</span>";}else{echo "<span class='text-danger'>Tidak Aktif</span>";}?></td>
                                        <td><?php if($key->status == 1){
                                            ?><a href="<?php echo base_url('Editor/headlines/deactive/'.$key->id);?>"> Non-aktif </a><?php
                                        }else{
                                          ?><a href="<?php echo base_url('Editor/headlines/active/'.$key->id);?>"> Aktif </a><?php
                                        }?> | <a href="#" id="hapus" class=""  data-href="<?php echo base_url('Editor/hapus/headlines/'.$key->id);?>" data-book="<?php echo $key->text;?>" data-toggle="modal" data-target="#confirm-delete">Hapus</a> </td>
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
          <h4 class="modal-title">Tambah Halaman</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('Editor/headlines/insert');?>" method="POST">
              <div class="form-group">
                  <label>Teks Headline</label>
                  <input type="text" name="text" class="form-control" required="true">
              </div>
              <div class="form-group">
                  <label>Tautan URL</label>
                  <input type="url" name="link" class="form-control" placeholder="https://..." required="true">
              </div>
              <div class="form-group">
                <input type="submit" value="Save" class="btn btn-info">
              </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
  