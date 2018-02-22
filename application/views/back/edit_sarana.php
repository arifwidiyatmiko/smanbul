<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit : <?php echo $pages[0]->title;?></h1>
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
                            <form action="<?php echo base_url('Editor/Sarana/update/'.$pages[0]->id);?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Nama Ekstrakulikuler</label>
                                    <input type="text" name="title" class="form-control" value="<?php echo $pages[0]->title?>">
                                </div>
                                <div class="form-group">
                                      <label>Deskripsi</label>
                                      <textarea name="konten" class="form-control" placeholder="Deskripsi" required="true"><?php echo $pages[0]->konten;?></textarea>
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