  <!-- Begin Page Content -->
                <div class="container-fluid">


                    
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <?php 
                            if ($msg = $this->session->flashdata('msg')) {
                        ?>
                            <div class="w-100 alert alert-primary fade show">
                                <?php echo $msg; ?>
                                <button class="close" data-dismiss="alert">&times;</button>
                            </div>
                        <?php
                            }

                        ?>
                    </div>

                   
                    <!-- content below here -->

                    <div class="row">
                        <div class="card p-3 col">
                            <div class="row">
                                <h3 class="col">Data pegawai</h3>
                                <div class="col text-right">
                                    <a class="btn btn-success" href="<?php echo base_url("pegawai/tambah") ?>"><i class="fas fa-plus text-white"></i> Tambah pegawai</a>
                                </div>
                            </div>
                            <table class="table table-borderless table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>NIK</th>
                                        <!-- <th>Username</th> -->
                                        <!-- <th>Password</th> -->
                                        <th>Nama</th>
                                        <th>Jenis kelamin</th>
                                        <th>Jabatan</th>
                                        <th>Tanggal masuk</th>
                                        <th>Akses</th>
                                        <th>Status</th>
                                        <th>Foto</th>
                                        <th class="text-center">Opsi</th>

                                    </tr>
                                </thead>

                                <tbody>
                                <?php 
                                    $counter = 1;
                                    foreach($pegawai as $p): ?>
                                    <tr>
                                        <td><?php echo $counter++; ?></td>
                                        <td><?php echo $p->id; ?></td>
                                        <td><?php echo $p->nik; ?></td>
                                        <!-- <td><?php echo $p->username; ?></td> -->
                                        <!-- <td><?php echo $p->password; ?></td> -->
                                        <td><?php echo ucwords($p->nama); ?></td>
                                        <td><?php echo ucwords($p->jenis_kelamin); ?></td>
                                        <td><?php echo ucwords($p->id_jabatan); ?></td>
                                        <td><?php echo ucwords($p->tanggal_masuk); ?></td>
                                        <td><?php echo ucwords($p->akses); ?></td>
                                        <td>
                                            <div class="badge">
                                                <?php echo ucwords($p->status); ?>
                                            </div>        
                                        </td>
                                        <td><img class="rounded-circle" width="50px" src="<?php echo base_url('img/pegawai/'.$p->id.".jpg") ?>"></td>

                                        <td class="text-center">
                                            <a class="btn btn-sm text-center btn-primary text-white" href="<?php echo base_url('pegawai/edit/').$p->id; ?>">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <a class="btn btn-sm text-center btn-danger text-white" href="<?php echo base_url('pegawai/hapus/').$p->id; ?>">
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

