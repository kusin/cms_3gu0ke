<!-- div card -->
<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">Data Siswa SMK Triguna Utama</h3>

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
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Kolom-1</th>
                    <th>Kolom-2</th>
                    <th>Kolom-3</th>
                    <th>Kolom-N</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 0;
                    for($i=0; $i<=10; $i++){
                ?>
                <tr>
                    <td>1114091000101</td>
                    <td>Aryajaya Alamsyah</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm">
                            <i class="fa-solid fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <small>last updated data on 2022-18-01</small>
    </div>
</div>
<!-- /.div card -->