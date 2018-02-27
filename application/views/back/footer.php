</div>
    <!-- /#wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.js"></script>
    <!-- jQuery -->
    
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jscolor.js" type="text/javascript"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/dist/js/sb-admin-2.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "#post_content",
        plugins: [
             "advlist autolink lists link image charmap print preview hr anchor pagebreak",
             "searchreplace wordcount visualblocks visualchars code fullscreen",
             "insertdatetime nonbreaking save table contextmenu directionality",
             "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image responsivefilemanager",
        automatic_uploads: true,
        image_advtab: true,
        images_upload_url: "<?php echo base_url("Editor/tinymce_upload")?>",
        file_picker_types: 'image', 
        paste_data_images:true,
        relative_urls: false,
        remove_script_host: false,
          file_picker_callback: function(cb, value, meta) {
             var input = document.createElement('input');
             input.setAttribute('type', 'file');
             input.setAttribute('accept', 'image/*');
             input.onchange = function() {
                var file = this.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                   var id = 'post-image-' + (new Date()).getTime();
                   var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                   var blobInfo = blobCache.create(id, file, reader.result);
                   blobCache.add(blobInfo);
                   cb(blobInfo.blobUri(), { title: file.name });
                };
             };
             input.click();
          }
   });
</script>
<script type="text/javascript">
      $(document).ready(function() {
        $('#tabel').DataTable();
        $("#colorpicker").spectrum({
            color: "#f00"
        });
        $("#colorpicker1").spectrum({
            color: "#000"
        });
    } );
    </script>
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus Data</h4>
                            </div>
                        
                            <div class="modal-body">
                                <p>Anda ingin menghapus?</p>
                                <strong><span id ="debug-url"></span></strong>
                            </div>
                            
                            <div class="modal-footer">
                                <a class="btn btn-danger btn-ok">Hapus</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Gagal</button>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $('#confirm-delete').on('show.bs.modal', function(e) {
                        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                        $('#debug-url').html($(e.relatedTarget).data('book'));
                    });
                </script>
                

</body>

</html>
