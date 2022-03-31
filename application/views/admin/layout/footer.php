</div>
</div>
</div>
<footer class="p-3 mb-3 mt-3 align-bottom">
    <div class="row">
        <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
            <p class="mb-0 text-center text-lg-start">
            </p>
        </div>
        <div class="text-center text-lg-start">
            <!-- List -->
           
            </ul>
        </div>
    </div>
</footer>
</main>  


    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url()?>assets/js/jquery-3.5.1.js"></script>
<script src="<?= base_url()?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url()?>assets/vendor/@popperjs/core/dist/umd/popper.min.js"></script>

<!-- Vendor JS -->
<script src="<?= base_url()?>assets/vendor/onscreen/dist/on-screen.umd.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <!-- Page level plugins -->
<script src="<?php echo base_url()?>assets/js/jquery.modal.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/js/dataTables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>assets/js/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url()?>assets/js/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jszip/jszip.min.js"></script>
<script src="<?php echo base_url()?>assets/js/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url()?>assets/js/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url()?>assets/dist/smooth-scroll.polyfills.min.js"></script>
<script src="<?php echo base_url()?>assets/js/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url()?>assets/js/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url()?>assets/js/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?php echo base_url()?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/simplebar/dist/simplebar.min.js"></script>

    <!-- Page level custom scripts -->
<script src="<?php echo base_url()?>assets/js/volt.js"></script>
 <script>
    $(function () {
    $("#example1").DataTable({
        "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true});
});
  $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(250, 0).slideUp(250, function(){
                $(this).remove();
            });
        }, 4000);
    }); 

 </script>
</body>

</html>