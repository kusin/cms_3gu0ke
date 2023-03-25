<?php

    // extend class koneksi
    require_once "aksi_siswa.php";

    // declare object jurusan
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