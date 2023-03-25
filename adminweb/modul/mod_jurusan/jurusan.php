<?php

    // extend class koneksi
    require_once "aksi_jurusan.php";

    // declare object jurusan
    $jurusan = new Jurusan();

    // mengatasi variabel yang belum di definisikan (notice undefined index)
    $act = isset($_GET['act']) ? $_GET['act'] : ''; 

    switch($act){

        default:
            
            echo "<div class='row'>";
                
                echo "<div class='col-md-12'>";
                    echo "<div class='callout callout-success'>";
                        echo "<p class='text-secondary'>Data Jurusan SMK Triguna Utama</p>";
                    echo "</div>";
                echo "</div>";
                // <!-- /.col-md-12 -->

                echo "<div class='col-md-12'>";
                    echo "<div class='card'>";
                    
                        echo "<div class='card-body'>";
                            echo "
                                <button type='button' class='btn btn-outline-info btn-md mb-2' onclick=window.location.href=\"?page=jurusan&act=tambah-data\">
                                    Tambah Data
                                </button>
                            ";
                            echo "<table class='table table-bordered table-hover'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Nama Jurusan</th>";
                                        echo "<th>Singkatan</th>";
                                        echo "<th>Status Data</th>";
                                        echo "<th>Aksi</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                
                                    foreach($jurusan->showData() as $rows){
                                        echo "<tr>";
                                            echo "<td>$rows[nama_jurusan]</td>";
                                            echo "<td>$rows[singkatan]</td>";
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
                        echo "<p class='text-secondary'>Data Jurusan SMK Triguna Utama</p>";
                    echo "</div>";
                echo "</div>";
                // <!-- /.col-md-12 -->

                echo "<div class='col-md-12'>";
                    echo "<div class='card'>";
                        echo "<div class='card-body'>";
                            echo "<form action='#' method='#'>";
                                
                                echo "
                                    <div class='form-group'>
                                        <label for'txt_nama_jurusan'>Nama jurusan</label>
                                        <input type='text' class='form-control' id='txt_nama_jurusan' name='txt_nama_jurusan' placeholder='Nama Jurusan'>
                                    </div>
                                ";

                                echo "
                                    <div class='form-group'>
                                        <label for'txt_singkatan'>Singkatan</label>
                                        <input type='text' class='form-control' id='txt_singkatan' name='txt_singkatan' placeholder='Singkatan'>
                                    </div>
                                ";

                                echo "
                                    <div class='form-group'>
                                        <label for'cb_status_data'>Status Data</label>
                                        <select class='form-control' id='cb_status_data' name='cb_status_data'>
                                            <option value='Aktif'>Aktif</option>
                                            <option value='Tidak Aktif'>Tidak Aktif</option>
                                        </select>
                                    </div>
                                ";

                                echo "
                                    <div class='form-group'>
                                        <button type='submit' class='btn btn-primary'>Submit</button>
                                    </div>
                                ";
                                
                            echo "</form>";
                            // <!-- /.form-tambah-data -->
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
                    echo "Tes 1";
                echo "</div>";
                // <!-- /.col-md-12 -->

                echo "<div class='col-md-12'>";
                    echo 'Tes 2';
                echo "</div>";
                // <!-- /.col-md-12 -->

            echo "</div>";
            // <!-- /.row -->

            break;

        case "hapus-data":
            break;
    }

?>