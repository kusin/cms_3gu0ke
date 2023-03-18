<?php

    // extend class koneksi
    require_once "aksi_jurusan.php";

    // declare object jurusan
    $jurusan = new Jurusan();

    // mengatasi variabel yang belum di definisikan (notice undefined index)
    $act = isset($_GET['act']) ? $_GET['act'] : ''; 

    switch($act){

        default:
            
            // <!-- card -->
            echo"<div class='card card-info'>";
                
                // <!-- card-header -->
                echo"<div class='card-header'>";
                    
                    echo"<h3 class='card-title'>Data Jurusan SMK Triguna Utama</h3>";
                    echo"<div class='card-tools'>";
                        echo"<button type='button' class='btn btn-tool' data-card-widget='collapse' title='Collapse'>";
                            echo"<i class='fas fa-minus'></i>";
                        echo"</button>";
                        echo"<button type='button' class='btn btn-tool' data-card-widget='remove' title='Remove'>";
                            echo"<i class='fas fa-times'></i>";
                        echo"</button>";
                    echo"</div>";

                echo"</div>";
                // <!-- /.card-header -->

                // <!-- card-body -->
                echo"<div class='card-body'>";
                
                    echo "
                        <button type='button' class='btn btn-outline-info btn-md mb-2'>
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
                                            <button type='button' class='btn btn-primary btn-sm'>
                                                <i class='fa-solid fa-eye'></i>
                                            </button>
                                            <button type='button' class='btn btn-warning btn-sm'>
                                                <i class='fa-solid fa-edit'></i>
                                            </button>
                                            <button type='button' class='btn btn-danger btn-sm'>
                                                <i class='fa-solid fa-trash'></i>
                                            </button>
                                    </td>";
                                echo "</tr>";
                            }

                        echo "</tbody>";
                    echo "</table>";

                echo"</div>";
                // <!-- /.card-body -->

                // <!-- card-footer -->
                echo"<div class='card-footer'>";
                    echo"<small>last updated data on 2022-18-01</small>";
                echo"</div>";
                // <!-- /.card-footer -->

            echo"</div>";
            // <!-- /.card -->

            break;

        case "lihat-data";
            break;
        
        case "tambah-data";
            break;
        
        case "ubah-data";
            break;

        case "hapus-data";
            break;
    }

?>