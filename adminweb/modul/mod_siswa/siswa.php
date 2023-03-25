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
                        echo "<p class='text-secondary'>Data Siswa</p>";
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
                            echo "
                                <button type='button' class='btn btn-outline-info btn-md mb-2' onclick=window.location.href=\"?page=jurusan&act=tambah-data\">
                                    Import Data
                                </button>
                            ";
                            echo "<table class='table table-bordered table-hover'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>NIS</th>";
                                        echo "<th>Nama Siswa</th>";
                                        echo "<th>Kolom Ke-1</th>";
                                        echo "<th>Kolom Ke-2</th>";
                                        echo "<th>Kolom Ke-3</th>";
                                        echo "<th>Kolom Ke-N</th>";
                                        echo "<th>Status Data</th>";
                                        echo "<th>Aksi</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                    for($i=1; $i<=10; $i++){
                                        echo "<tr>";
                                        echo "<td>1114091000101</td>";
                                        echo "<td>Aryajaya Alamsyah</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>Aktif</td>";
                                        echo "  <td>
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
    }

?>