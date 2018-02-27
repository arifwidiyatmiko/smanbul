<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">All Pages</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row container-fluid">
                                <i class="fa fa-clock-o fa-fw"></i> Daftar Halaman
                                <button type="button" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#myModal">Tambah Halaman</button>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table id="tabel" class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Type</th>
                                    <th>On Menu</th>
                                    <th>Pilih Menu</th>
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
                                        <td><?php echo $key->page;?></td>
                                        <td><?php echo $key->type;?></td>
                                        <td><?php echo $key->on_page;?></td>
                                        <td><div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Menu
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <?php 
      foreach ($menu as $ass ) {
        if ($ass != $key->on_page) {
          ?><li><a href="<?php echo base_url('Editor/menu/'.$key->id."/".$ass);?>"><?php echo $ass;?></a></li><?php
        }
      }
      ?>
    </ul>
  </div></td>
                                        <td><a href="<?php echo base_url('Editor/edit/'.$key->id);?>" class="btn btn-info"> Edit </a> </td>
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
          <form action="<?php echo base_url('Editor/add');?>" method="POST">
              <div class="form-group">
                  <label>Judul Halaman</label>
                  <input type="text" name="page" class="form-control" required="true">
              </div>
              <div class="form-group">
                  <label>Jenis Halaman</label>
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