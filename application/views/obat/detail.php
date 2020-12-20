<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Obat
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th scope="row">Nama</th>
                                <td>:</td>
                                <td><?= $obat['nama_obat'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Obat</th>
                                <td>:</td>
                                <td><?= $obat['jenis_obat'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Kegunaan</th>
                                <td>:</td>
                                <td><?= $obat['kegunaan'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Stok</th>
                                <td>:</td>
                                <td><?= $obat['stok'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Harga</th>
                                <td>:</td>
                                <td><?= $obat['harga'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="<?= base_url(); ?>obat_client" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>