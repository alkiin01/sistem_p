<div class="container-fluid justify-content-center">
    <form>
        <div class="form-group row">
        <label class="col-md-2" for="">Nama Gejala </label> 
        <div class="col-sm-5">
            <input type="gejala" class="form-control"
                placeholder="Masukan nama Gejala">
            </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-2" for="">Kode Gejala </label>
            <div class="col-md-5">
            <input type="gejala" class="form-control" value="<?php echo "G-"?>" vlaueHi>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-2" for="">Deskripsi </label>
            <div class="col-sm-5">
            <textarea type="gejala" class="form-control form-control-user" placeholder="Deskripsi Gejala"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-2" for="">Bobot Nilai </label>
            <div class="col-md-2">
        <input type="number" name="" id="" class="form-control" min=0.00 max=1.00 step="0.01">
        <small class="d-flex justify-content-end align-content-end">Bobot nilai Decimal 0.01~1.00</small>
    </div>
        
        </div>
        <div class="form-group row">
        <div class="col-md-4">
        <button type="submit" class="btn btn-success form-control">Simpan</button>
        </div>
        <div class="col-md-4">
        <button type="reset" class="btn btn-warning form-control">Bersihkan</button>
        </div>
        </div>
    </form>
        </div>