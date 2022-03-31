<div class="container">
    <button class="btn btn-success mb-3 text-light" data-bs-toggle="modal" data-bs-target="#tambahModal" ><i class="fa fa-fw fa-plus"></i>Tambah</button>
</div>
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: teal;">
            <h3 class="text-light align-content-center"><strong> <i class="fa fa-plus"></i> Tambah Gejala</strong></h3>
            <button type="button" class="btn btn-sm btn-danger" id=btn_close data-bs-dismiss="modal">x</button>
        </div>
        <div class="modal-body">
        <div class="container pt-2 pb-2">
        <p class="text-center">Silakan lengkapi data</p>    
    <?php echo validation_errors('<div class="alert-warning">','</div>') ?>
    <?php echo form_open(base_url('admin/tambah_gejala'),'')?>
    <div class="form-group row ">
        <div class="col-sm-6">
        <div class="input-group pb-2">
        <input type="text" class="form-control" name="kode" id="kode" placeholder="Kode Gejala" aria-describedby="usernamed">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="input-group pb-2">   
            <i class="input-group-text fa fa-id-badge"></i>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Gejala" required>
            </div>
        </div>
    </div>

        <div class="form-group pb-2">
            <textarea class="form-control" name="deskripsi" id="deskripsi"
                placeholder="Deskripsi Gejala"></textarea>
        </div>
        <div class="form-group pb-2 ">
        <div class="input-group">
        <input type="number" name="" id="" class="form-control" min=0.00 max=1.00 step="0.01">
        <small class="d-flex justify-content-end align-content-end">Bobot nilai Decimal 0.01~1.00</small>
        </div>
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
<div class="container-fluid">
    <div id="example1_wrapper"></div>
    <table class="table table-responsive" id="example1">
        <thead class="thead-inverse">
        <?php $i=1;?>    
        <tr>
                <th>No.</th>
                <th>Kode Gejala</th>
                <th>Nama Gejala</th>
                <th>Deskripsi</th>
                <th>Bobot Nilai</th>
            </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach($gejala as $gejala){?>
                <tr>
                    <td scope="row"><?= $no;?></td>
                    <td><?= $gejala->kode_gejala;?></td>
                    <td><?= $gejala->nama_gejala?></td>
                    <td><?= $gejala->deskripsi;?></td>
                    <td><?= $gejala->bobot_nilai?></td>
                </tr>
            </tbody>
            <?php $no++; }?>
    </table>
</div>
