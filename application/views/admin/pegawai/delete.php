  <!-- Begin Page Content -->
				<div class="container-fluid">


					
					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">

					</div>

				   
					<!-- content below here -->
					
					<div class="row d-flex justify-content-center">
						<div class="col-6">
							<div class="card shadow">
								<h5 class="card-header bg-danger text-white">Hapus data jabatan <strong><?php echo ucwords($jabatan->nama); ?></strong>? </h5>
								<div class="card-body">
									<p>
										Jabatan <strong><?php echo ucwords($jabatan->nama); ?></strong> tidak bisa ditarik kembali setelah dihapus.
									</p>

									<p>Yakin tetap hapus?</p>
								</div>
								<div class="card-footer">
									<a class="btn btn-danger px-5" href="<?php echo base_url('api/jabatan/delete/').$jabatan->id; ?>"><strong>Ya</strong></a>

									<a class="btn btn-primary px-5" href="<?php echo base_url('jabatan'); ?>">Tidak</a>
								</div>
							</div>
						</div>
					</div>
					<!-- content above here -->


				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->
