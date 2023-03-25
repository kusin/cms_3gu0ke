<?php

    // extend class koneksi
    require_once "aksi_pembayaran_spp.php";

    // declare object
    $pembayaran_spp = new Pembayaran_SPP();

    // mengatasi variabel yang belum di definisikan (notice undefined index)
    $act = isset($_GET['act']) ? $_GET['act'] : ''; 

    // percabangan untuk menampilkan form lihat, tambah, ubah, hapus data
    switch($act){

        default:
            
            echo "<div class='row'>";
                
                echo "<div class='col-md-12'>";
                    echo "<div class='callout callout-success'>";
                        echo "<p class='text-secondary'>Data Pembayaran SPP</p>";
                    echo "</div>";
                echo "</div>";
                // <!-- /.col-md-12 -->

                echo "<div class='col-md-12'>";
                    echo "<div class='card'>";
                    
                        echo "<div class='card-body'>";
                            echo "<table class='table table-bordered table-hover'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>NIS</th>";
                                        echo "<th>Nama Siswa</th>";
                                        echo "<th>Total Pembayaran</th>";
                                        echo "<th>Total Tagihan</th>";
                                        echo "<th>Aksi</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                    for($i=1; $i<=10; $i++){
                                        echo "<tr>";
                                            echo "<td>1114091000101</td>";
                                            echo "<td>Aryajaya Alamsyah</td>";
                                            echo "<td>Rp. 10.000.000,-</td>";
                                            echo "<td>Rp. 0,-</td>";
                                            echo "<td>
                                                    <a href='?page=pembayaran-spp&act=lihat-data'>
                                                        <button type='button' class='btn btn-outline-success btn-sm'>Bayar</button>
                                                    </a>
                                                    <a href='?page=pembayaran-spp&act=tambah-data'>
                                                        <button type='button' class='btn btn-outline-info btn-sm'>Rincian</button>
                                                    </a>
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
        
        case "lihat-data":
            
            echo "<div class='row'>";
                
                echo "<div class='col-md-12'>";
                    echo "<div class='callout callout-success'>";
                        echo "<p class='text-secondary'>Data Pembayaran SPP</p>";
                    echo "</div>";
                echo "</div>";
                // <!-- /.col-md-12 -->
                
            echo "</div>";
            // <!-- /.row -->

            // <!-- ----------------------------------------------------------------------- -->
            // <!-- /. Data Siswa --------------------------------------------------------- -->
            // <!-- ----------------------------------------------------------------------- -->
            echo "<div class='row'>";
                
                echo "<div class='col-md-12'>";
                    echo "<div class='callout callout-success'>";
                        echo "<p class='text-secondary'>Informasi data siswa</p>";
                    echo "</div>";
                echo "</div>";
                // <!-- /.col-md-12 -->

                echo "<div class='col-md-12'>";
                    echo "<div class='card'>";
                        echo "<div class='card-body'>";
                            
                        echo "</div>";
                        // <!-- /.card-body -->    
                    echo "</div>";
                    // <!-- /.card -->
                echo "</div>";
                // <!-- /.col-md-12 -->
                
            echo "</div>";
            // <!-- /.row -->

            // <!-- ----------------------------------------------------------------------- -->
            // <!-- /. Data Pembayaran SPP ------------------------------------------------ -->
            // <!-- ----------------------------------------------------------------------- -->
            echo "<div class='row'>";
                
                echo "<div class='col-md-12'>";
                    echo "<div class='callout callout-success'>";
                        echo "<p class='text-secondary'>Informasi detail pembayaran</p>";
                    echo "</div>";
                echo "</div>";
                // <!-- /.col-md-12 -->
                
                echo "<div class='col-md-12'>";
                    echo "<div class='card'>";
                        echo "<div class='card-body'>";
                            echo "<table class='table table-bordered table-hover'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th rowspan='2' class='align-middle'>Bulan</th>";
                                        echo "<th colspan='2' class='align-middle'><center>kelas X</center></th>";
                                        echo "<th colspan='2' class='align-middle'><center>kelas XI</center></th>";
                                        echo "<th colspan='2' class='align-middle'><center>kelas XII</center></th>";
                                        echo "<th rowspan='2' class='align-middle'><center>keterangan</center></th>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        // <!-- kelas X -->
                                        echo "<th>Tanggal</th>";
                                        echo "<th>Jumlah</th>";

                                        //<!-- kelas XI -->
                                        echo "<th>Tanggal</th>";
                                        echo "<th>Jumlah</th>";

                                        // <!-- kelas XII -->
                                        echo "<th>Tanggal</th>";
                                        echo "<th>Jumlah</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                    echo "<tr>";
                                        echo "<td>Juli</td>";
                                        echo "<td>-</td>";
                                        echo "<td></td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td>Agustus</td>";
                                        echo "<td>-</td>";
                                        echo "<td></td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td>September</td>";
                                        echo "<td>-</td>";
                                        echo "<td></td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td>Oktober</td>";
                                        echo "<td>-</td>";
                                        echo "<td></td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td>November</td>";
                                        echo "<td>-</td>";
                                        echo "<td></td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td>Desember</td>";
                                        echo "<td>-</td>";
                                        echo "<td></td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td>Januari</td>";
                                        echo "<td>-</td>";
                                        echo "<td></td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td>Februari</td>";
                                        echo "<td>-</td>";
                                        echo "<td></td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td>Maret</td>";
                                        echo "<td>-</td>";
                                        echo "<td></td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td>April</td>";
                                        echo "<td>-</td>";
                                        echo "<td></td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td>Mei</td>";
                                        echo "<td>-</td>";
                                        echo "<td></td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td>Juni</td>";
                                        echo "<td>-</td>";
                                        echo "<td></td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                        echo "<td>-</td>";
                                    echo "</tr>";
                                echo "</tbody>";
                            echo "</table>";
                        echo "</div>";
                        // <!-- /.card-body -->    
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
                        echo "<p class='text-secondary'>Data Pembayaran SPP</p>";
                    echo "</div>";
                echo "</div>";
                // <!-- /.col-md-12 -->

            echo "</div>";
            // <!-- /.row -->

            // <!-- ----------------------------------------------------------------------- -->
            // <!-- /. Form Pemabayaran SPP ----------------------------------------------- -->
            // <!-- ----------------------------------------------------------------------- -->
            echo "<div class='row'>";
                
                echo "<div class='col-md-12'>";
                    echo "<div class='callout callout-success'>";
                        echo "<p class='text-secondary'>Formulir pembayaran spp</p>";
                    echo "</div>";
                echo "</div>";
                // <!-- /.col-md-12 -->

                echo "<div class='col-md-12'>";
                    echo "<div class='card'>";
                        echo "<div class='card-body'>";
                            
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
                        echo "<p class='text-secondary'>Data Pembayaran SPP</p>";
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
                        echo "<p class='text-secondary'>Data Pembayaran SPP</p>";
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