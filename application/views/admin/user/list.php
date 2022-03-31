

<div class="card-body">
<?php $sukses = $this->session->flashdata('sukses');
    if(isset($sukses)){
echo '<div class="alert alert-success">'.$sukses.'</div>';
$this->session->unset_userdata('sukses');
}
?>
<div class="container">
    <button class="btn btn-success mb-3 text-light" data-bs-toggle="modal" data-bs-target="#tambahModal" ><i class="fa fa-fw fa-plus"></i>Tambah</button>
</div>
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: teal;">
            <h3 class="text-light align-content-center"><strong> <i class="fa fa-plus"></i> Tambah User</strong></h3>
            <button type="button" class="btn btn-sm btn-danger" id=btn_close data-bs-dismiss="modal">x</button>
        </div>
        <div class="modal-body">
        <div class="container pt-2 pb-2">
        <p class="text-center">Silakan lengkapi data</p>
    <?php echo validation_errors('<div class="alert-warning">','</div>') ?>
    <?php echo form_open(base_url('admin/tambah_user'),'')?>
    <div class="form-group row ">
        <div class="col-sm-6">
        <div class="input-group pb-2">
        <i class="input-group-text fa fa-user"></i>    
        <input type="text" class="form-control" name="nama" id="nama" placeholder=" Nama " aria-describedby="usernamed">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="input-group pb-2">   
            <i class="input-group-text fa fa-id-badge"></i>
            <input type="text" class="form-control" name="username" id="username" placeholder=" Username" required>
            </div>
        </div>
    </div>
        <div class="form-group pb-2 ">
            <div class="input-group">
            
            <input type="password" class="form-control" name="password" id="password"
                placeholder=" Password "required>
            </div>
        </div>
        <div class="form-group pb-2 ">
        <div class="input-group">
            <i class="input-group-text fa fa-envelope" id="basic-addon3"> </i>
            <input type="text" class="form-control" name="email" id="email"
                placeholder=" Contoh : contoh@gmail.com "required>
        </div>
        </div>
        <div class="form-group pb-2">
            <textarea class="form-control" name="alamat" id="alamat"
                placeholder="Alamat lengkap"></textarea>
        </div>
        <div class="form-group pb-2">
        <select name="akses_level" class="form-control" id="akses_level" required>
            <option>Pilih Hak Akses...</option>
        	<option value="Admin" id="admin">Admin</option>
        	<option value="Pakar" id="pakar">Pakar</option>
        </select>
        </div>
        <div class="form-group pb-2">
            <button type="submit" class="btn btn-success form-control" name="submit"> <i class="fa fa-check-circle"></i> Simpan</button>
            
        </div>

    <?php echo form_close();?>
            </div>
        </div>
</div>
    </div>
</div>
    
<div class="container table-responsive">
<table class="table table-bordered table-responsive " id="example1">
        <thead class="thead-dark">
        <tr>
                <th scope="col" style="width: 40px;">No.</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Username</th>
                <th class="text-center">Akses_level</th>
                <th class="text-center" style="width: 40px;">Action</th>
            </tr>
            </thead>
            <tbody id="show_table">
                <?php $no=1; foreach($user as $user){ ?>
             <tr>
                <td class="text-center"><?php echo $no ?></td>
                <td><?= $user->nama ?></td>
                <td><?= $user->username?></td>
                <td><?= $user->akses_level ?></td>
                <td> 
                    <?php include 'edit.php';  ?> 
                   
                    <?php include 'delete.php'; ?>
                </td>
            </tr>
            <?php $no++; }?>
            </tbody>
    </table>
</div>

</div>
<script>
    function validateEmail(email){
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 

</script>
<!-- <script>
  $(document).ready(function(){
         showTabel();
         var table = $("#example1").DataTable({
      "responsive": true, "lengthChange": false,"ordering":false,"info":false, "searching":false,
      "buttons": ["copy", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    function showTabel(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('admin/data_user')?>',
                async : true,
                searching:true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var n=1;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'
                        +'<input type="hidden" value="'+data[i].id_user+'">'+
                                '<th scope="row">'+n+'</td>'+
                                '<td>'+data[i].username+'</td>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].akses_level+'</td>'+         
                                '<td  style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" id="item_edit" data-id_user="'+data[i].id_user+'" data-username="'+data[i].username+'"data-nama="'+data[i].nama+'" data-alamat="'+data[i].alamat+'" data-email="'+data[i].email+'"><i class = "fa fa-fw fa-edit"></i>Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-product_code="'+data[i].product_code+'"><i class="fa fa-fw fa-trash"></i></a>'+
                                '</td>'+
                                '</tr>';
                                n++;
                    }
                    $('#show_table').html(html);
                }
            });

        }

         
 
 
     $('#btn_save').on('click',function(){ 
            var nama = $('#nama').val();
            var username = $('#username').val();
            var password  = $('#password').val();
            var email  = $('#email').val();
            var alamat  = $('#alamat').val();
            var akses_level  = $('#akses_level').val();
            if (nama.length==0){
                alert('Isi Kolom Nama !');
                return false ;
            } else if(username.length==0){
                alert('Isi Kolom username !');
                return false ;
            }else if(password.length==0){
                alert('Isi Kolom password !');
                return false ;
            }else if(!validateEmail(email)){
                alert('Isi Kolom email contoh : conton@gmail.com !');
                return false ;
            }
            var string = "&nama="+nama+"&username="+username+"&password="+password+"&email="+email+"&alamat="+alamat+"&akses_level="+akses_level;
            // alert(string);
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('admin/tambah_user')?>",
                dataType : "JSON",
                data : string,
                success: function(data){
                if (data.status_prs == 1) { 
                    $('[name="nama"]').val("");
                    $('[name="username"]').val("");
                    $('[name="email"]').val("");
                    $('[name="alamat"]').val("");
                    $('[name="akses_level"]').val("");
                    $('#btn_close').click();
                    alert(data.msg);
                    showTabel().DataTable.ajax.reload();
                } else {
                    alert(data.msg);
                }
                }
            });
            return false;
        });
        $('#show_table').on('click','.item_edit',function(){
            var id_user = $(this).data('id_user');
            var nama = $(this).data('nama');
            var username = $(this).data('username');
            var alamat = $(this).data('alamat');
            var email = $(this).data('email');
            var akses_level  = $(this).data('akses_level');

            $('#Modal_edit').modal('show');
            $('[name="id_user_edit"]').val(id_user);
            $('[name="nama_edit"]').val(nama);
            $('[name="username_edit"]').val(username);
            $('[name="email_edit"]').val(email);
            $('[name="alamat_edit"]').val(alamat);
            $('[name="akses_level_edit"]').val(akses_level);

        });
        $('#btn_update').on('click',function(){
            var id_user = $('#id_user_edit').val();
            var nama = $('#nama_edit').val();
            var username = $('#username_edit').val();
            var password  = $('#password_edit').val();
            var email  = $('#email_edit').val();
            var alamat  = $('#alamat_edit').val();
            var akses_level  = $('#akses_level_edit').val();
            if (nama.length==0){
                alert('Isi Kolom Nama !');
                return false ;
            } else if(username.length==0){
                alert('Isi Kolom username !');
                return false ;
            }else if(password.length==0){
                alert('Isi Kolom password !');
                return false ;
            }else if(!validateEmail(email)){
                alert('Isi Kolom email contoh : conton@gmail.com !');
                return false ;
            }
            var string = "&id_user="+id_user+ "&nama="+nama+"&username="+username+"&password="+password+"&email="+email+"&alamat="+alamat+"&akses_level="+akses_level;
            $.ajax({
            type : "POST",
                url  : "<?php echo base_url('admin/edit_user')?>",
                dataType : "JSON",
                data : string,
                success: function(data){
                if (data.status_prs == 1) { 
                    $('[name="id_user_edit"]').val("");
                    $('[name="nama_edit"]').val("");
                    $('[name="username_edit"]').val("");
                    $('[name="email_edit"]').val("");
                    $('[name="alamat_edit"]').val("");
                    $('[name="akses_level_edit"]').val("");
                    $('#btn_edit_close').click();
                    alert(data.msg);
                    showTabel().DataTable.ajax.reload();
                } else {
                    alert(data.msg);
                }
                }
            });
            return false;
        });
    });   
        
</script> -->