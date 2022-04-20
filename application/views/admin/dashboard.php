  <!-- Begin Page Content -->
                <div class="container-fluid">


                    <?php //if (!isset($title)) $title = 'application'; ?>
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <!-- <h1 class="h3 mb-0 text-gray-800"><?php echo ucwords($title); ?></h1> -->
                    </div>

                   
                    <!-- content below here -->

                    <?php if ($message = $this->session->flashdata('alert')) {
                    ?>
                            <div class="alert alert-primary alert dismissable fade show"><?php echo $message; ?> <button class="close text-primary" data-dismiss="alert">&times;</button></div>
                    <?php
                    } ?>
                    
                    <div class="row d-flex justify-content-center">                            
                        <!-- Data pegawai -->
                        <div class="card border-left-primary shadow h-100 py-2 col-3 ml-3">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Data Pegawai
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pegawai->num_rows(); ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Data kehadiran -->
                        <div class="card border-left-success shadow h-100 py-2 col-3 ml-3">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Data Kehadiran
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $kehadiran->num_rows(); ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-paper fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Data jabatan -->
                        <div class="card border-left-warning shadow h-100 py-2 col-3 ml-3">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Data jabatan
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jabatan->num_rows(); ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-paper fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- content above here -->


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
