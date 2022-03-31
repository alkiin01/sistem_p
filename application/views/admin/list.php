<div class="row">
<div class="col-12 col-sm-6 col-xl-4 m-4">
    <div class="card shadow-lg card-hover">
        <div class="card-body">
            <div class="row d-block d-xl-flex align-items-center">
                <div class="col-12 col-xl-5 text-xl-center mb-4 d-flex align-items-center justify-content-xl-center">
                    <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                        <h2><i class="fa fa-user"></i></h2>
                    </div>
                    <div class="d-sm-none">
                        <h2 class="h2">Data Pengguna</h2>
                        <h3 class="fw-extrabold mb-1"><?=$user ?></h3>
                    </div>
                </div>
                <div class="col-12 col-md-7 px-xl-0">
                    <div class="d-none d-sm-block">
                        <h2 class="h6 mb-0">Data Pengguna</h2>
                        <h3 class="fw-extrabold mb-2"><?= $user ?></h3>
                    </div>
                         
                </div>
                <div class="card-footer">                       
                    <a href="<?= base_url('admin/indexUser')?>" class="card-link btn btn-sm btn-outline-info">Lihat Tabel User -> </a>    
                </div>
            </div>
        </div>
    </div>
</div>


              
</div>