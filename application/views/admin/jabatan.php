  <!-- Begin Page Content -->
                <div class="container-fluid">


                    
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">

                    </div>

                   
                    <!-- content below here -->
                    
                    <div class="row">
                        <div class="card p-3 col">
                            <div class="row">
                                <h3 class="col">Tabel Jabatan</h3>
                                <div class="col text-right">
                                    <a class="btn btn-success" href="<?php echo base_url("jabatan/tambah") ?>"><i class="fas fa-plus text-white"></i> Tambah jabatan</a>
                                </div>
                            </div>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Gaji Pokok</th>
                                        <th>Tunjangan</th>
                                        <th colspan="2" class="text-center">Opsi</th>

                                    </tr>
                                </thead>

                                <tbody>
                                <?php 
                                    $counter = 1;
                                    foreach($jabatan as $j): ?>
                                    <tr>
                                        <th><?php echo $counter++; ?></th>
                                        <th><?php echo $j->id; ?></th>
                                        <th><?php echo $j->nama; ?></th>
                                        <th>Rp. <?php echo number_format($j->gaji_pokok); ?></th>
                                        <th>Rp. <?php echo number_format($j->tunjangan); ?></th>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <!-- content above here -->


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
