<a class="btn-sm btn-info" href="" data-bs-toggle="modal" data-bs-target="#edit-<?php echo $user->id_user; ?>"><i class="fa fa-edit"></i>Edit</a> 

<!-- Modal -->
    <div class="modal fade" id="edit-<?php echo $user->id_user ?>" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: teal;">
                    <h5 class="modal-title text-white" id="modelTitleId">Ubah data pengguna</h5>
                        <button type="button" class="btn-danger close" id="btn_close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-white">&times;</span>
                        </button>
                </div>
<?php echo form_open(base_url('admin/edit_user/'.$user->id_user),'') ?>

        <div class="modal-body">
         <!-- Body edit -->
        <input type="hidden" name="id_user">
        <div class="form-group row p-2">
        <div class="col-sm-6">
            <input type="text" class="form-control" name="nama" placeholder=" Nama " value=<?php echo $user->nama; ?>>
        </div>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="username" value="<?php echo $user->username;?>" readonly>
            </div>
        </div>
        <div class="form-group p-2 ">
            <input type="password" class="form-control" name="password" placeholder=" Password">
            <small class="text-danger">* Untuk mengganti Password silakan ketika minimal 6 karakter</small>
        </div>
        <div class="form-group p-2">
            <input type="text" class="form-control" name="email"
                placeholder=" Contoh : contoh@gmail.com" value="<?php echo $user->email;?>">
        </div>
        <div class="form-group p-2">
            <textarea class="form-control" name="alamat" placeholder="Alamat lengkap"><?php echo $user->alamat;?></textarea>
        </div>
        <div class="form-group p-2 ">
        <select name="akses_level" class="form-control">
        	<option value="Admin" id="admin">Admin</option>
        	<option value="Pakar"<?php if($user->akses_level=="Pakar") {echo "selected";} ?>>Pakar</option>
        </select>
        </div>
                </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php echo form_close(); ?>