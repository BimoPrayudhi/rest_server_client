<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-12">
            <h3>Data Obat</h3>
            <div class="row mt-3" style="margin-bottom: 10px;">
                <div class="col-md-6">
                    <a href="<?= base_url(); ?>obat_client/tambah" class="btn btn-primary">Tambah
                        Data Obat</a>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">

                            <div class="row">

                                <div class="col-sm-12">
                                    <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">No</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">Nama Obat</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 61px;">Stok</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 49px;">Harga</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 31px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($obat as $a) : ?>

                                                <tr role="row" class="odd">
                                                    <td class="sorting_1"><?= $no ?></td>
                                                    <td class="sorting_1"><?= $a['nama_obat'] ?></td>
                                                    <td><?= $a['stok'] ?></td>
                                                    <td>Rp. <?= $a['harga'] ?></td>
                                                    <td>
                                                        <a href="<?= base_url(); ?>obat_client/detail/<?= $a['id']; ?>" class="badge badge-primary">detail</a>
                                                        <a href="<?= base_url(); ?>obat_client/ubah/<?= $a['id']; ?>" class="badge badge-success">ubah</a>
                                                        <a href="<?= base_url(); ?>obat_client/hapus/<?= $a['id']; ?>" class="badge badge-danger tombol-hapus">hapus</a>
                                                    </td>
                                                </tr>
                                            <?php
                                                $no++;
                                            endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>