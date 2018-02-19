<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Halaman : <?php echo $pages[0]->page;?></h1>
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
                            <form action="<?php echo base_url('Editor/update/pages/'.$pages[0]->id);?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <textarea rows="10" id="post_content" name="post_content" class="form-control ckeditor"><?php echo $pages[0]->konten;?></textarea>
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