<!-- Data puskesmas -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Data Puskesmas + Penilaian</div>
				<div class="panel-body">
					<p><a class="btn btn-primary" data-toggle="modal" data-target="#addpenilaian"><i class="glyphicon glyphicon-plus"></i></a></p>
						<div class="bootstrap-table">
							<div class="fixed-table-toolbar"></div>
									<div class="fixed-table-container"><div class="fixed-table-header"><table></table></div>
											<div class="fixed-table-body">
												<div class="boxscroll" style="padding: 8px; max-height: 200px; background-color: rgb(247, 251, 249); overflow: hidden; outline: none;" tabindex="1">
												<div class="fixed-table-loading" style="top: 37px; display: none;">Loading, please wait…</div>
													<table data-toggle="table" data-url="tables/data2.json" class="table table-hover">
								    						<thead>
								    								<tr>
								    									<th style="text-align: right; "><div class="th-inner "><center>#</center></div><div class="fht-cell"></div></th>
								    									<th style=""><div class="th-inner "><center>Alternatif</center></div><div class="fht-cell"></div></th>
								    									<th style=""><div class="th-inner "><center>C1</center></div><div class="fht-cell"></div></th>
								    									<th style=""><div class="th-inner "><center>C2</center></div><div class="fht-cell"></div></th>
								    									<th style=""><div class="th-inner "><center>C3</center></div><div class="fht-cell"></div></th>
								    									<th style=""><div class="th-inner "><center>C4</center></div><div class="fht-cell"></div></th>
								    									<th style="text-align: center;"><div class="th-inner "><center class="glyphicon glyphicon-cog"></center></div><div class="fht-cell"></div></th>
								    								</tr>
								    							</thead>
																<tbody>
																	<tr>
																		<?php
																			$no = 1;
																			foreach ($penilaian as $row) { ?>
																		<td><center><?php echo $no++; ?><center/></td>
																		<td><center><?php echo $row['nama_puskesmas']; ?><center/></td>
																		<td><center><?php echo $row['pilihan_kriteria_lingkungan']; ?><center/></td>
																		<td><center><?php echo $row['pilihan_kriteria_tenmed']; ?><center/></td>
																		<td><center><?php echo $row['pilihan_kriteria_pelayanan']; ?><center/></td>
																		<td><center><?php echo $row['pilihan_kriteria_fasilitas']; ?><center/></td>
																		<td>
																			<center>
																			<a 
																				href="javascript:void(0)"
																				data-id-nilai 				=	"<?php echo $row['id_nilai']; ?>"
																				data-id-puskesmas 			=	"<?php echo $row['id_puskesmas']; ?>"
																				data-kriteria-lingkungan	= 	"<?php echo $row['pilihan_kriteria_lingkungan']; ?>"
																				data-kriteria-tenmed		= 	"<?php echo $row['pilihan_kriteria_tenmed']; ?>"
																				data-kriteria-pelayanan		= 	"<?php echo $row['pilihan_kriteria_pelayanan']; ?>"
																				data-kriteria-fasilitas		= 	"<?php echo $row['pilihan_kriteria_fasilitas']; ?>"
																				data-toggle="modal" data-target="#edit">
																				<i style="margin-left: 20px" class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Edit"></i>
																			</a>
																			<a href="<?php echo base_url('penilaian/delete/'.$row['id_nilai']); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$row['nama_puskesmas'];?> ?');">
																				<i style="margin-left: 20px" class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Confirm" data-original-title="Confirm"></i>
																			</a>
																			</center>
																		</td>
																	</tr>
																		<?php
																			}?>
																</tbody>
													</table>
												</div>
											</div>
									</div>
						</div>
				</div>
		</div>
	</div>
				<!-- modal atau popup add penilaian -->
			<div class="modal fade" id="addpenilaian" aria-hidden="true">
				<div class="modal-dialog modal-fide w-50 w-auto-sm p-4">
					<form id="tambah" class="col-md-10 p-0" action="<?php echo base_url();?>penilaian/add" method="POST" role="form">
						<div class="modal-content">
										<div class="modal-header">
											<h4><b>Tambah Penilaian Data Puskesmas</b></h4>
										</div>
											<div class="modal-body text-left p-lg">
												<div class="form-group">
													<label>Daftar Puskesmas</label>
													<select class="form-control custom-select my-2" name="nama_puskesmas" required="">
														<!-- <option value="0">Pilih Puskesmas</option> -->
														<?php
															foreach ($nilai_puskesmas as $row) {
																echo "<option value='$row[id_puskesmas]'>$row[nama_puskesmas]</option>";
															}
															?>
													</select>
												</div>
												<div class="form-group">
													<label>Kriteria Lingkungan (C1)</label>
													<select class="form-control custom-select my-2" name="nama_lingkungan" required="">
														<!-- <option value="0">Pilih Kriteria Lingkungan</option> -->
														<?php
															foreach ($nilai_kriteria_lingkungan as $row) {
																echo "<option value='$row[id_kriteria_lingkungan]'>$row[pilihan_kriteria_lingkungan]</option>";
															}
															?>
													</select>
												</div>
												<div class="form-group">
													<label>Kriteria Tenaga Medis (C2)</label>
													<select class="form-control custom-select my-2" name="nama_tenmed" required="">
														<!-- <option value="0">Pilih Kriteria Tenaga Medis</option> -->
														<?php
															foreach ($nilai_kriteria_tenagamedis as $row) {
																echo "<option value='$row[id_kriteria_tenmed]'>$row[pilihan_kriteria_tenmed]</option>";
															}
															?>
													</select>
												</div>
												<div class="form-group">
													<label>Kriteria Pelayanan (C3)</label>
													<select class="form-control custom-select my-2" name="nama_pel" required="">
														<!-- <option value="0">Pilih Kriteria Pelayanan</option> -->
														<?php
															foreach ($nilai_kriteria_pelayanan as $row) {
																echo "<option value='$row[id_kriteria_pelayanan]'>$row[pilihan_kriteria_pelayanan]</option>";
															}
															?>
													</select>
												</div>
												<div class="form-group">
													<label>Kriteria Fasilitas (C4)</label>
													<select class="form-control custom-select my-2" name="nama_fas" required="">
														<!-- <option value="0">Pilih Kriteria Fasilitas</option> -->
														<?php
															foreach ($nilai_kriteria_fasilitas as $row) {
																echo "<option value='$row[id_kriteria_fasilitas]'>$row[pilihan_kriteria_fasilitas]</option>";
															}
															?>
													</select>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn dark-white p-x-md" data-dismiss="modal">Batal</button>
												<button type="submit" class="btn danger p-x-md">Simpan</button>
											</div>
						</div>
					</form>	
				</div>
			</div>

			<!-- modal atau popup data tabel penilaian (edit) -->
			<div class="modal fade" id="edit" aria-hidden="true">
				<div class="modal-dialog modal-fide w-50 w-auto-sm p-4">
					<form id="edit-penilaian" class="col-md-10 p-0" action="<?php echo base_url();?>penilaian/update" method="POST" role="form">
						<div class="modal-content">
										<div class="modal-header">
											<h4><b>Update Penilaian Data Puskesmas</b></h4>
										</div>
											<div class="modal-body text-left p-lg">
												<div class="form-group">
													<input class="form-control" type="hidden" name="id_nilai" id="id_nilai">
													<input class="form-control" type="hidden" name="id_puskesmas" id="id_puskesmas">
												</div>
												<div class="form-group">
													<label>Kriteria Lingkungan (C1)</label>
													<select class="form-control custom-select my-2" name="nama_lingkungan" required="">
														<!-- <option value="0">Pilih Kriteria Lingkungan</option> -->
														<?php
															foreach ($nilai_kriteria_lingkungan as $row) {
																echo "<option value='$row[id_kriteria_lingkungan]'>$row[pilihan_kriteria_lingkungan]</option>";
															}
															?>
													</select>
												</div>
												<div class="form-group">
													<label>Kriteria Tenaga Medis (C2)</label>
													<select class="form-control custom-select my-2" name="nama_tenmed" required="">
														<!-- <option value="0">Pilih Kriteria Tenaga Medis</option> -->
														<?php
															foreach ($nilai_kriteria_tenagamedis as $row) {
																echo "<option value='$row[id_kriteria_tenmed]'>$row[pilihan_kriteria_tenmed]</option>";
															}
															?>
													</select>
												</div>
												<div class="form-group">
													<label>Kriteria Pelayanan (C3)</label>
													<select class="form-control custom-select my-2" name="nama_pel" required="">
														<!-- <option value="0">Pilih Kriteria Pelayanan</option> -->
														<?php
															foreach ($nilai_kriteria_pelayanan as $row) {
																echo "<option value='$row[id_kriteria_pelayanan]'>$row[pilihan_kriteria_pelayanan]</option>";
															}
															?>
													</select>
												</div>
												<div class="form-group">
													<label>Kriteria Fasilitas (C4)</label>
													<select class="form-control custom-select my-2" name="nama_fas" required="">
														<!-- <option value="0">Pilih Kriteria Fasilitas</option> -->
														<?php
															foreach ($nilai_kriteria_fasilitas as $row) {
																echo "<option value='$row[id_kriteria_fasilitas]'>$row[pilihan_kriteria_fasilitas]</option>";
															}
															?>
													</select>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn dark-white p-x-md" data-dismiss="modal">Batal</button>
												<button type="submit" class="btn danger p-x-md" style="background-color: #22b66e";>Edit</button>
											</div>
						</div>
					</form>	
				</div>
			</div>

					<!-- JavaScript penilaian (edit) -->
					<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
					    <script>
					    $(document).ready(function() {
					        // Untuk sunting
					        $('#edit').on('show.bs.modal', function (event) {
					            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
					            var modal = $(this)
					 
					            // Isi nilai pada field
					            modal.find('#id_nilai').attr("value",div.data('id-nilai'));
					            modal.find('#id_puskesmas').attr("value",div.data('id-puskesmas'));
					            modal.find('#pilihan_kriteria_lingkungan').attr("value",div.data('kriteria-lingkungan'));
					            modal.find('#pilihan_kriteria_tenmed').attr("value",div.data('kriteria-tenmed'));
					            modal.find('#pilihan_kriteria_pelayanan').attr("value",div.data('kriteria-pelayanan'));
					            modal.find('#pilihan_kriteria_fasilitas').attr("value",div.data('kriteria-fasilitas'));
					        });
					    });
					  </script>
					  <!--NiceScroll-->
					  <script src="<?php echo base_url();?>assets/plugin/jquery.nicescroll-3.7.6/jquery.nicescroll.js"></script>
					  <script type="text/javascript">
					    $(".boxscroll").niceScroll({cursorcolor:"rgb(34, 182, 110)",cursorwidth:"10"});
					  </script>