<!-- div card -->
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Data Pembayaran SPP</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Total Pembayaran</th>
                        <th>Total Tagihan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        for($i=0; $i<=10; $i++){
                    ?>
                    <tr>
                        <td>Aryajaya Alamsyah</td>
                        <td>X-TKJ-1</td>
                        <td>Rp. 10.000.000,-</td>
                        <td>Rp. 0,-</td>
                        <td>
                            <a href="?page=pembayaran_spp">
                                <button type="button" class="btn btn-success btn-sm">Bayar</button>
                            </a>
                        </td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        <small>last updated data on 2022-18-01</small>
    </div>
</div>
<!-- /.div card -->