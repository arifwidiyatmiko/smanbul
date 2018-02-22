<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit : <?php echo $pages[0]->nama;?></h1>
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
                            <form action="<?php echo base_url('Editor/Ekstrakulikuler/update/'.$pages[0]->id);?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Nama Ekstrakulikuler</label>
                                    <input type="text" name="nama" class="form-control" value="<?php echo $pages[0]->nama?>">
                                </div>
                                <div class="form-group">
                                      <label>Deskripsi</label>
                                      <textarea name="teks" class="form-control" placeholder="Deskripsi" required="true"><?php echo $pages[0]->teks;?></textarea>
                                  </div>
                                  <div class="form-group">
                                      <label>URL <span class="text text-muted">(*opsional)</span></label>
                                      <input type="url" name="url" class="form-control" placeholder="Link ke Web Ekstrakulikuler" value="<?php echo $pages[0]->url;?>">
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