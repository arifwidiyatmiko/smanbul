<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Slider</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> Form
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form action="<?php echo base_url('Editor/slider/update/'.$pages[0]->id);?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" name="judul" class="form-control" value="<?php echo $pages[0]->judul;?>">
                                </div>
                                <div class="form-group">
                                    <label>Warna Judul</label>
                                    <input class="form-control" type='color' name="warna" >
                                </div>
                                <div class="form-group">
                                      <label>Teks</label>
                                      <input type="text" name="teks" class="form-control" value="<?php echo $pages[0]->teks?>">
                                  </div>
                                  <div class="form-group">
                                      <label>Warna Judul</label>
                                      <input class="form-control" type='color' name="warna1" >
                                  </div>
                                  <div class="form-group">
                                      <img class="img img-responsive" src="<?php echo base_url();?>assets/upload/<?php echo $pages[0]->image;?>">
                                      <input type="hidden" name="file" value="<?php echo $pages[0]->image;?>">
                                  </div>
                                  <div class="form-group">
                                      <label>Image</span></label>
                                      <input type="file" name="image" class="form-control">
                                  </div>
                                <div class="form-group">
                                    <input type="submit" value="Save" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->