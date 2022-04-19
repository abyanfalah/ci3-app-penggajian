  <!-- Begin Page Content -->
				<div class="container-fluid">


					
					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">

					</div>

				   
					<!-- content below here -->
					
					<div class="row d-flex justify-content-center">
						<div class="card col-8 p-5 shadow">
							<form method="post" action="<?php echo base_url('api/pegawai/create') ?>">
								<h3>Informasi pegawai baru</h3>

								<div class="form-group">
									<label for="nama">Nama pegawai</label>
									<input class="form-control" type="text" name="nama">
								</div>

								<div class="form-group">
									<label for="nik">NIK</label>
									<input class="form-control mb-3" type="number" onkeydown="return event.keyCode == 69 ? false : true" name="nik">
								</div>

								<div class="form-group">
									<label for="username">Username</label>
									<input class="form-control" type="text" name="username">
								</div>

								<div class="form-group">
									<label for="jenis_kelamin">Jenis kelamin</label>
									<select class="form-control" name="jenis_kelamin">
										<option value="L">Laki-laki</option>
										<option value="P">Perempuan</option>
									</select>
								</div>

								<div class="form-group">
									<label for="id_jabatan">Jabatan</label>
									<select class="form-control" name="id_jabatan">
										<!-- generated with php -->
									</select>
								</div>

								<div class="form-group">
									<label for="tanggal_masuk">Tanggal masuk</label>
									<input class="form-control" type="date" name="tanggal_masuk">
								</div>


								<div class="form-group">
									<label for="level_akses">Level akses</label>
									<select class="form-control" name="level_akses">
										<!-- generated with php -->
									</select>
								</div>


								<input class="btn btn-primary" type="submit" name="btn_submit" value="Simpan">

								
							</form>
						</div>
					</div>
					<!-- content above here -->


				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->
