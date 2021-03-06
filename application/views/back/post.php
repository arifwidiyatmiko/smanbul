<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">All Post</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row container-fluid">
                                <i class="fa fa-clock-o fa-fw"></i> Daftar Posting
                                <button type="button" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#myModal">Tambah</button>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table id="tabel" class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Category</th>
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
                                        <td><?php echo $key->title;?></td>
                                        <td><?php echo $key->category;?></td>
                                        <td><a href="<?php echo base_url('Editor/ubah/'.$key->id);?>"> Edit </a> | <a href="#" id="hapus" class=""  data-href="<?php echo base_url('Editor/hapus/post/'.$key->id);?>" data-book="<?php echo $key->title;?>" data-toggle="modal" data-target="#confirm-delete">Hapus</a> </td>
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
          <form action="<?php echo base_url('Editor/post_insert');?>" method="POST">
              <div class="form-group">
                  <label>Judul Halaman</label>
                  <input type="text" name="title" class="form-control" required="true">
              </div>
              <div class="form-group">
                <label>Konten</label>
                 <textarea rows="10" id="post_content" name="post_content" class="form-control ckeditor"></textarea>
              </div>
              <div class="form-group">
                  <label>Kategori</label>
                  <select name="type" class="form-control">
                    <?php 
                    foreach ($dropdown as $key) {
                      echo "<option>".$key."</option>";
                    }
                    ?>
                  </select>
              </div>
              <div class="form-group">
                <input type="submit" value="Save" class="btn btn-info">
              </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
  