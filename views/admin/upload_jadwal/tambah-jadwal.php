<!DOCTYPE html>
<html lang="en">

<body>
	<div class="admin-dashone-data-table-area">
		<div class="container-fluid">
			<div row="12">
				<div class="col-lg-8">
					<?php
					if (isset($error)) {
						echo "ERROR UPLOAD : <br/>";
						print_r($error);
						echo "<hr/>";
					}
					?>

					<form enctype="multipart/form-data" action="<?php echo base_url('admin/UploadJadwal/proses'); ?>" method="post">
					
						</br>
						<div class="form-group-inner">
							<div class="row">
								<div class="col-lg-4">
									<label class="login2 pull-left pull-left-pro">Prog. Studi</label>
								</div>
								<div class="col-lg-8">
						
										
								</div>
							</div>
						</div>
						<br>
						<div class="form-group-inner">
							<div class="row">
								<div class="col-lg-4">
									<label class="login2 pull-left pull-left-pro">Semester</label>
								</div>
								<div class="col-lg-8">
									<!-- <input type="select" class="form-control" name="smt"> -->
									<select name="smt" class="form-control">
										<option> --Pilih Semester-- </option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
									</select>
								</div>
							</div>
						</div>


			
						<br>

						<div class="form-group-inner">
							<div class="row">
								<div class="col-lg-4">
									<label class="login2 pull-left pull-left-pro">Judul (Matakuliah)</label>
								</div>
								<div class="col-lg-8">
									<input type="text" class="form-control" name="keterangan_berkas">
								</div>
							</div>
						</div>
						<br>
						<div class=" form-group-inner">
							<div class="row">
								<div class="col-lg-4">
									<label class="login2 pull-left pull-left-pro">Uplod<span><strong>File Wajib PDF</strong></span></label>
							
						
								</div>
								<div class="col-lg-6">
								    
									<input type="file" class="form-control" name="nama_berkas">
							
								</div>
							</div>
							<br>
							<div class="container">
								<div class="row">
									<div class="col-lg-2">
										<label class="login2 pull-left pull-left-pro"></label>
									</div>
									<div class="col-lg-2">
										<button class="btn btn-warning"><i class="fa fa-save"></i> Simpan</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</body>

</html>
