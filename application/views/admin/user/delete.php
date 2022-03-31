<a class="btn-sm btn-danger" href="" data-bs-toggle="modal" data-bs-target="#delete-<?php echo $user->id_user; ?>">
        <i class="fa fa-trash"></i></a>

<div class="modal fade" id="delete-<?php echo $user->id_user; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header bg-danger text-white">
        <h4 class="modal-title">HAPUS DATA PENGGUNA </h4>
        <button type="button" class="btn-danger text-white close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" class="text-white">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <h4 class="text-dark">Peringatan</h4>
        <p>Yakin ingin menghapus data <?php echo $user->nama?> ?</p>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        <a href="<?php echo base_url('admin/delete/'.$user->id_user) ?>" class="btn btn-danger">
        <i class="fa fa-trash-o"></i>Ya, Hapus data ini </a>
    </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->