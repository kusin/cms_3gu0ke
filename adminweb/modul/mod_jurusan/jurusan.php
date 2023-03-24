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
                    echo "
                        <button type='button' class='btn btn-outline-info btn-md mb-2'>
                            Tambah Data
                        </button>
                    ";
                echo "</div>";
                // <!-- /.col-md-12 -->

                echo "<div class='col-md-12'>";
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
                echo "</div>";
                // <!-- /.col-md-12 -->

                echo "<div class='col-md-12'>";
                    echo "<div class='alert alert-light' role='alert'>";
                        echo "last updated data on 2022-18-01";
                    echo "</div>";
                    // <!-- /.div-alert --> 
                echo "</div>";
                // <!-- /.col-md-12 -->

            echo "</div>";
            // <!-- /.row -->

            break;

        case "tambah-data";
            break;
        
        case "ubah-data";
            break;

        case "hapus-data";
            break;
    }

?>