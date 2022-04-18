  <!-- Begin Page Content -->
				<div class="container-fluid">


					
					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">

					</div>

				   
					<!-- content below here -->
					
					<div class="row d-flex justify-content-center">
						<div class="card col-5 p-5 shadow">
							<form method="post" action="<?php echo base_url('api/jabatan/create') ?>">
								<h3>Informasi jabatan baru</h3>

								<div class="form-group">
									<label for="id">ID jabatan (gunakan singkatan)</label>
									<input class="form-control" type="text" name="id">
									<sub class="text-grey">id akan menjadi kapital setelah disimpan</sub><br>
									<sub class="text-grey">spasi akan terhapus setelah disimpan</sub>
								</div>

								<div class="form-group">
									<label for="nama">Nama jabatan</label>
									<input class="form-control" type="text" name="nama">
								</div>

								<div class="form-group">
									<label for="gaji_pokok">Gaji pokok</label>
									<input class="form-control mb-3" type="number" onkeydown="return event.keyCode == 69 ? false : true" name="gaji_pokok">
								</div>


								<div class="form-group">
									<label for="tunjangan">Tunjangan</label>
									<input class="form-control mb-3" type="number" onkeydown="return event.keyCode == 69 ? false : true" name="tunjangan">
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
