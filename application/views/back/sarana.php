<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sarana</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row container-fluid">
                                <i class="fa fa-clock-o fa-fw"></i> Daftar Sarana
                                <button type="button" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#myModal">Tambah</button>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table id="tabel" class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Nama Sarana</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $i=1;
                                    foreach ($sarana->result() as $key) {
                                        ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $key->title;?></td>
                                        <td><?php echo $key->konten;?></td>
                                        <td><a href="<?php echo base_url('Editor/Sarana/edit/'.$key->id);?>">Edit</a> | <a href="#" id="hapus" class=""  data-href="<?php echo base_url('Editor/Sarana/delete/'.$key->id);?>" data-book="<?php echo $key->title;?>" data-toggle="modal" data-target="#confirm-delete">Hapus</a> </td>

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
          <h4 class="modal-title">Tambah Sarana</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('Editor/Sarana/insert');?>" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                  <label>Nama Sarana</label>
                  <input type="text" name="title" class="form-control" required="true">
              </div>
              <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea name="konten" class="form-control" placeholder="Deskripsi" required="true"></textarea>
              </div>
              <div class="form-group">
                  <label>Sampel Image</label>
                  <input type="file" name="image" class="form-control" required="true">
              </div>
              <div class="form-group">
                <input type="submit" value="Save" class="btn btn-info">
              </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
  