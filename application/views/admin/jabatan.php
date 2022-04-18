  <!-- Begin Page Content -->
                <div class="container-fluid">


                    
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">

                    </div>

                   
                    <!-- content below here -->
                    
                    <div class="row">
                        <div class="card p-3 col">
                            <div class="row">
                                <h3 class="col">Data Jabatan</h3>
                                <div class="col text-right">
                                    <a class="btn btn-success" href="<?php echo base_url("jabatan/tambah") ?>"><i class="fas fa-plus text-white"></i> Tambah jabatan</a>
                                </div>
                            </div>
                            <table class="table table-borderless table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Gaji Pokok</th>
                                        <th>Tunjangan</th>
                                        <th class="text-center">Opsi</th>

                                    </tr>
                                </thead>

                                <tbody>
                                <?php 
                                    $counter = 1;
                                    foreach($jabatan as $j): ?>
                                    <tr>
                                        <td><?php echo $counter++; ?></td>
                                        <td><?php echo $j->id; ?></td>
                                        <td><?php echo ucwords($j->nama); ?></td>
                                        <td>Rp. <?php echo number_format($j->gaji_pokok); ?></td>
                                        <td>Rp. <?php echo number_format($j->tunjangan); ?></td>

                                        <td class="text-center">
                                            <a class="btn btn-sm text-center btn-primary text-white" href="<?php echo base_url('jabatan/edit/').$j->id; ?>">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <a class="btn btn-sm text-center btn-danger text-white" href="<?php echo base_url('jabatan/hapus/').$j->id; ?>">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
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


            <!-- MODAL DELETE -->
           <!--  <div class="modal fade" id="modalDelete">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            this is modal delete
                        </div>
                    </div>
                </div>
            </div>
 -->
