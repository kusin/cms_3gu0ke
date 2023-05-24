<?php

    // extend class koneksi
    require_once "aksi_siswa.php";

    // declare object
    $siswa = new Siswa();

    // mengatasi variabel yang belum di definisikan (notice undefined index)
    $act = isset($_GET['act']) ? $_GET['act'] : ''; 

    // percabangan untuk menampilkan form lihat, tambah, ubah, hapus data
    switch($act){

        default:
            
            echo "<div class='row'>";
                
                echo "<div class='col-md-12'>";
                    echo "<div class='callout callout-success'>";
                        echo "<p class='text-secondary'>Data Siswa SMK Triguna Utama</p>";
                    echo "</div>";
                echo "</div>";
                // <!-- /.col-md-12 -->

                echo "<div class='col-md-12'>";
                    echo "<div class='card'>";
                    
                        echo "<div class='card-body'>";
                            echo "
                                <a class=\"btn btn-outline-info btn-md mb-2\" href=\"?page=siswa&act=tambah-data\" role=\"button\">Tambah Data</a>
                            ";
                            echo "
                                <button type='button' class='btn btn-outline-info btn-md mb-2'>
                                    Import Data
                                </button>
                            ";
                            echo "
                                <button type='button' class='btn btn-outline-info btn-md mb-2'>
                                    Export Data
                                </button>
                            ";
                            echo "<table class='table table-bordered table-hover'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>NIS</th>";
                                        echo "<th>NISN</th>";
                                        echo "<th>Nama Siswa</th>";
                                        echo "<th>Jenis Kelamin</th>";
                                        echo "<th>Tempat Lahir</th>";
                                        echo "<th>Tanggal Lahir</th>";
                                        echo "<th>Status Data</th>";
                                        echo "<th>Aksi</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                    foreach($siswa->showData() as $rows){
                                        echo "<tr>";
                                            echo "<td>$rows[nis]</td>";
                                            echo "<td>$rows[nisn]</td>";
                                            echo "<td>$rows[nama_siswa]</td>";
                                            echo "<td>$rows[jenis_kelamin]</td>";
                                            echo "<td>$rows[tempat_lahir]</td>";
                                            echo "<td>$rows[tanggal_lahir]</td>";
                                            echo "<td>$rows[status_data]</td>";
                                            echo "<td>
                                                    <button type='button' class='btn btn-outline-primary btn-sm'>
                                                        <i class='fa-solid fa-eye'></i>
                                                    </button>
                                                    <button type='button' class='btn btn-outline-warning btn-sm'>
                                                        <i class='fa-solid fa-edit'></i>
                                                    </button>
                                                    <button type='button' class='btn btn-outline-danger btn-sm'>
                                                        <i class='fa-solid fa-trash'></i>
                                                    </button>
                                            </td>";
                                        echo "</tr>";
                                    }
                                echo "</tbody>";
                            echo "</table>";
                        echo "</div>";
                        // <!-- /.card-body -->

                        echo "<div class='card-footer'>";
                            echo "<small>Last updated data on 2023-01-01, 20:30 WIB</small>";
                        echo "</div>";
                        // <!-- /.card-footer -->

                    echo "</div>";
                    // <!-- /.card -->
                echo "</div>";
                // <!-- /.col-md-12 -->

            echo "</div>";
            // <!-- /.row -->

            break;

        case "tambah-data":

            echo "<div class='row'>";
                
                echo "<div class='col-md-12'>";
                    echo "<div class='callout callout-success'>";
                        echo "<p class='text-secondary'>Data Siswa SMK Triguna Utama</p>";
                    echo "</div>";
                echo "</div>";
                // <!-- /.col-md-12 -->

                echo "<div class='col-md-12'>";
                    echo "<div class='card'>";
                        echo "<div class='card-body'>";
                            echo "<form method='POST' enctype='multipart/form-data'>";
                                echo "<div class='form-row'>";
                                    echo "
                                        <div class='form-group col-md-6'>
                                            <label for'txt_nis'>NIS</label>
                                            <input type='text' class='form-control' id='txt_nis' name='txt_nis' placeholder='NIS'>
                                            <small style='color:red;'>*harus diisi</small>
                                        </div>
                                    ";
                                    echo "
                                        <div class='form-group col-md-6'>
                                            <label for'txt_nisn'>NISN</label>
                                            <input type='text' class='form-control' id='txt_nisn' name='txt_nisn' placeholder='NISN'>
                                            <small style='color:red;'>*harus diisi</small>
                                        </div>
                                    ";
                                echo "</div>";
                                // <!-- /.form-row -->
                                echo "
                                    <div class='form-group'>
                                        <label for'txt_nama_siswa'>Nama Siswa</label>
                                        <input type='text' class='form-control' id='txt_nama_siswa' name='txt_nama_siswa' placeholder='Nama Siswa'>
                                        <small style='color:red;'>*harus diisi</small>
                                    </div>
                                ";
                                echo "
                                    <div class='form-group'>
                                        <label for'cb_jenis_kelamin'>Jenis Kelamin</label>
                                        <select class='form-control' id='cb_jenis_kelamin' name='cb_jenis_kelamin'>
                                            <option value='' disabled selected hidden>Jenis Kelamin</option>
                                            <option value='Laki-Laki'>Laki-Laki</option>
                                            <option value='Perempuan'>Perempuan</option>
                                        </select>
                                    </div>
                                ";
                                echo "<div class='form-row'>";
                                    echo "
                                        <div class='form-group col-md-6'>
                                            <label for'txt_tempat_lahir'>Tempat Lahir</label>
                                            <input type='text' class='form-control' id='txt_tempat_lahir' name='txt_tempat_lahir' placeholder='Tempat Lahir'>
                                        </div>
                                    ";
                                    echo "
                                        <div class='form-group col-md-6'>
                                            <label for'txt_tanggal_lahir'>Tanggal Lahir</label>
                                            <input type='text' class='form-control' id='txt_tanggal_lahir' name='txt_tanggal_lahir' placeholder='Tanggal Lahir' onfocus=(this.type='date')>
                                        </div>
                                    ";
                                    echo "
                                        <div class='form-group col-md-6'>
                                            <label for'txt_username'>Username</label>
                                            <input type='text' class='form-control' id='txt_username' name='txt_username' placeholder='Username'>
                                        </div>
                                    ";
                                    echo "
                                        <div class='form-group col-md-6'>
                                            <label for'txt_password'>Password</label>
                                            <input type='text' class='form-control' id='txt_password' name='txt_password' placeholder='Password'>
                                        </div>
                                    ";
                                echo "</div>";
                                // <!-- /.form-row -->
                                
                                echo "
                                    <div class='form-group'>
                                        <button type='submit' class='btn btn-success' name='submit'>Submit</button>
                                        <button type='reset' class='btn btn-danger' name='reset'>Reset</button>
                                    </div>
                                ";
                                
                            echo "</form>";
                            // <!-- /.form tambah-data siswa -->    
                        echo "</div>";
                        // <!-- /.card-body -->
                    echo "</div>";
                    // <!-- /.card -->
                echo "</div>";
                // <!-- /.col-md-12 -->

            echo "</div>";
            // <!-- /.row -->

            break;
        
        case "ubah-data":

            echo "<div class='row'>";
                
                echo "<div class='col-md-12'>";
                    echo "<div class='callout callout-success'>";
                        echo "<p class='text-secondary'>Data Siswa</p>";
                    echo "</div>";
                echo "</div>";
                // <!-- /.col-md-12 -->

                echo "<div class='col-md-12'>";
                    
                echo "</div>";
                // <!-- /.col-md-12 -->

            echo "</div>";
            // <!-- /.row -->
        break;

        case "hapus-data":
            
            echo "<div class='row'>";
                
                echo "<div class='col-md-12'>";
                    echo "<div class='callout callout-success'>";
                        echo "<p class='text-secondary'>Data Siswa</p>";
                    echo "</div>";
                echo "</div>";
                // <!-- /.col-md-12 -->

                echo "<div class='col-md-12'>";
                    
                echo "</div>";
                // <!-- /.col-md-12 -->

            echo "</div>";
            // <!-- /.row -->
        break;

        case "import-data":
        
            echo "<div class='row'>";
                
                echo "<div class='col-md-12'>";
                    echo "<div class='callout callout-success'>";
                        echo "<p class='text-secondary'>Data Siswa</p>";
                    echo "</div>";
                echo "</div>";
                // <!-- /.col-md-12 -->

                echo "<div class='col-md-12'>";
                    
                echo "</div>";
                // <!-- /.col-md-12 -->

            echo "</div>";
            // <!-- /.row -->
        break;

        case "export-data":
        
            echo "<div class='row'>";
                
                echo "<div class='col-md-12'>";
                    echo "<div class='callout callout-success'>";
                        echo "<p class='text-secondary'>Data Siswa</p>";
                    echo "</div>";
                echo "</div>";
                // <!-- /.col-md-12 -->

                echo "<div class='col-md-12'>";
                    
                echo "</div>";
                // <!-- /.col-md-12 -->

            echo "</div>";
            // <!-- /.row -->
        break;
    }

?>