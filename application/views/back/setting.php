<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Setting</h1>
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
                            <form action="<?php echo base_url('Editor/footer/edit/');?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="<?php echo $data[0]['alamat']; ?>">
                                </div>
                                 <div class="form-group">
                                    <label>Telepon</label>
                                    <input type="text" name="telepon" class="form-control" value="<?php echo $data[0]['telpon']; ?>">
                                </div>
                                 <div class="form-group">
                                    <label>Sekilas Info</label>
                                    <input type="text" name="info" class="form-control" value="<?php echo $data[0]['info']; ?>">
                                </div>
                                 <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $data[0]['email']; ?>">
                                </div>
                                 <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="url" name="facebook" class="form-control" value="<?php echo $data[0]['facebook']; ?>">
                                </div>
                                 <div class="form-group">
                                    <label>Twitter</label>
                                    <input type="url" name="twitter" class="form-control" value="<?php echo $data[0]['twitter']; ?>">
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