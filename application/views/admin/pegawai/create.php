  <!-- Begin Page Content -->
				<div class="container-fluid">


					
					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">

					</div>

				   
					<!-- content below here -->
					
					<div class="row d-flex justify-content-center">
						<div class="card col-8 p-5 shadow">
							<form method="post" action="<?php echo base_url('api/pegawai/create') ?>" enctype="multipart/form-data">
								<h3>Informasi pegawai baru</h3>


								<!-- NIK -->
								<div class="form-group">
									<label for="nik">NIK</label>
									<input  class="form-control mb-3" type="number" onkeydown="return event.keyCode == 69 ? false : true" name="nik">
								</div>

								<!-- NAMA -->
								<div class="form-group">
									<label for="nama">Nama</label>
									<input  class="form-control" type="text" name="nama">
								</div>

								<!-- USERNAME -->
								<div class="form-group">
									<label for="username">Username</label>
									<input  class="form-control" type="text" name="username">
								</div>

								<!-- PASSWORD -->
								<div class="form-group">
									<label for="password">Password</label>
									<input  class="form-control" type="password" name="password">
								</div>

								<!-- AKSES -->
								<div class="form-group">
									<label for="level_akses">Level akses</label>
									<select class="form-control" name="level_akses">
									<option selected disabled>-Pilih level akses-</option>
									<?php foreach ($akses as $a): ?>
										<option 
											value="<?php echo $a->level ?>"><?php echo ucwords($a->nama); ?></option>
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
											value="<?php echo $j->id ?>"><?php echo "(".$j->id.")"." ".ucwords($j->nama); ?></option>
									<?php endforeach; ?>
									</select>
								</div>

								<!-- JENIS KELAMIN -->
								<div class="form-group">
									<label for="jenis_kelamin">Jenis kelamin</label>
									<select class="form-control" name="jenis_kelamin">
										<option selected disabled>-Pilih jenis kelamin-</option>
										<option value="L">Laki-laki</option>
										<option value="P">Perempuan</option>
									</select>
								</div>

								<!-- TANGGAL MASUK -->
								<div class="form-group">
									<label for="tanggal_masuk">Tanggal masuk</label>
									<input class="form-control" type="date" name="tanggal_masuk">
								</div>

								<!-- FOTO -->
								<div class="form-group">
									<label for="foto">Foto</label>
									<input class="form-control-file" type="file" name="foto">
								</div>



								<!-- STATUS | pegawai baru aktif by default -->
								<!-- <div class="form-group">
									<label for="id_status">Status</label>
									<select class="form-control" name="id_status">
									<?php foreach ($status as $s): ?>
										<option 
											value="<?php echo $s->id ?>"><?php echo ucwords($s->nama); ?></option>
									<?php endforeach; ?>
									</select>
								</div> -->


								<input class="btn btn-primary" type="submit" name="btn_submit" value="Simpan">

								
							</form>
						</div>
					</div>
					<!-- content above here -->


				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->
