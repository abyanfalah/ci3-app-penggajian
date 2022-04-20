  <!-- Begin Page Content -->
				<div class="container-fluid">


					
					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">

					</div>

				   
					<!-- content below here -->
					
					<div class="row d-flex justify-content-center">
						<div class="card col-8 p-5 shadow">
							<form method="post" action="<?php echo base_url('api/pegawai/update') ?>">
								<h3>Edit informasi pegawai "<?php echo ucwords($pegawai->nama); ?>"</h3>

								<!-- NIK -->
								<div class="form-group">
									<label for="nik">NIK</label>
									<input value="<?php echo $pegawai->nik ?>" class="form-control mb-3" type="number" onkeydown="return event.keyCode == 69 ? false : true" name="nik">
								</div>

								<!-- NAMA -->
								<div class="form-group">
									<label for="nama">Nama</label>
									<input value="<?php echo $pegawai->nama ?>" class="form-control" type="text" name="nama">
								</div>


								<!-- USERNAME -->
								<div class="form-group">
									<label for="username">Username</label>
									<input value="<?php echo $pegawai->username ?>" class="form-control" type="text" name="nama">
								</div>

								<!-- <div class="form-group">
									<label for="password">Password</label>
									<input value="<?php echo $pegawai->password ?>" class="form-control" type="text" name="nama">
								</div> -->

									<!-- AKSES -->
								<div class="form-group">
									<label for="level_akses">Level akses</label>
									<select class="form-control" name="level_akses">
									<option selected disabled>-Pilih level akses-</option>
									<?php foreach ($akses as $a): ?>
										<option 
											value="<?php echo $a->level ?>"
											<?php echo ($a->level == $pegawai->level_akses ? "selected" : null ); ?>
											>
												<?php echo ucwords($a->nama); ?>
											</option>
									<?php endforeach; ?>
									</select>
								</div>

									<!-- JABATAN -->
								<div class="form-group">
									<label for="id_jabatan">Jabatan</label>
									<select class="form-control" name="id_jabatan">
									<option selected disabled>-Pilih Jabatan-</option>
									<?php foreach ($jabatan as $j): ?>
										<option 
											value="<?php echo $j->id ?>"
											<?php echo ($j->id == $pegawai->id_jabatan ? "selected" : null ); ?>
										>
												<?php echo "(".$j->id.")"." ".ucwords($j->nama); ?>
												
											</option>
									<?php endforeach; ?>
									</select>
								</div>

								<!-- JENIS KELAMIN -->
								<div class="form-group">
									<label for="jenis_kelamin">Jenis kelamin</label>
									<select class="form-control" name="jenis_kelamin">
										<option 
											value="L"
											<?php echo ($pegawai->jenis_kelamin == "L" ? "selected" : null)?>
											>
												Laki-laki
										</option>

										<option 
											value="P"
											<?php echo ($pegawai->jenis_kelamin == "P" ? "selected" : null)?>
											>
												Perempuan
										</option>
									</select>
								</div>



								<!-- TANGGAL MASUK -->
								<div class="form-group">
									<label for="tanggal_masuk">Tanggal masuk</label>
									<input value="<?php echo $pegawai->tanggal_masuk ?>" class="form-control" type="date" name="tanggal_masuk">
								</div>

								<!-- STATUS -->
								<div class="form-group">
									<label for="id_status">Status</label>
									<select class="form-control" name="id_status">
									<?php foreach ($status as $s): ?>
										<option 
											value="<?php $s->id ?>"
											<?php echo ($pegawai->id_status == $s->id ? "selected" : null)?>
											>
												<?php echo ucwords($s->nama); ?>
										</option>
									<?php endforeach; ?>
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
