<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Obat
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama_obat">Nama Obat</label>
                            <input type="text" name="nama_obat" class="form-control" id="nama_obat">
                            <small class=" form-text text-danger"><?= form_error('nama_obat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis Obat</label>
                            <input type="text" name="jenis" class="form-control" id="jenis">
                            <small class=" form-text text-danger"><?= form_error('jenis'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kegunaan">Kegunaan</label>
                            <textarea type="text" name="kegunaan" class="form-control" id="kegunaan"></textarea>
                            <small class="form-text text-danger"><?= form_error('kegunaan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" name="stok" class="form-control" id="stok">
                            <small class="form-text text-danger"><?= form_error('stok'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>