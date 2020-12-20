<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Pesanan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $obat['id']; ?>">
                        <div class="form-group">
                            <label for="nama_obat">Nama Obat</label>
                            <input type="text" name="nama_obat" class="form-control" id="nama_obat" value="<?= $obat['nama_obat']; ?>">
                            <small class=" form-text text-danger"><?= form_error('nama_obat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis Obat</label>
                            <input type="text" value="<?= $obat['jenis_obat']; ?>" name="jenis" class="form-control" id="jenis">
                            <small class=" form-text text-danger"><?= form_error('jenis'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kegunaan">Kegunaan</label>
                            <textarea name="kegunaan" class="form-control" id="kegunaan"><?= $obat['kegunaan']; ?></textarea>
                            <small class="form-text text-danger"><?= form_error('kegunaan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" name="stok" value="<?= $obat['stok']; ?>" class="form-control" id="stok">
                            <small class="form-text text-danger"><?= form_error('stok'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" value="<?= $obat['harga']; ?>" class="form-control" id="harga">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>