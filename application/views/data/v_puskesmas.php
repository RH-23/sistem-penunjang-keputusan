<!-- Data puskesmas -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Data Puskesmas</div>
				<div class="panel-body">
					<p><a class="btn btn-primary" data-toggle="modal" data-target="#tambah" ><i class="glyphicon glyphicon-plus"></i> </a> Total Data : 
					<span style="display: inline-block;padding: .25em .4em;font-size: 75%;font-weight: 700;line-height: 1;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: .25rem;color: rgba(255,255,255,.85);background-color: #22b66e;"><?php echo $totaldata;?></span></p>
						<div class="bootstrap-table">
							<div class="fixed-table-toolbar"></div>
									<div class="fixed-table-container"><div class="fixed-table-header"><table></table></div>
											<div class="fixed-table-body">
												<div class="boxscroll" style="padding: 8px;max-height: 200px;background-color: rgb(247, 251, 249);">
												<div class="fixed-table-loading" style="top: 37px; display: none;">Loading, please wait…</div>
													<table data-toggle="table" data-url="tables/data2.json" class="table table-hover">
								    							<thead>
								    								<tr>
								    									<th style="text-align: right; "><div class="th-inner "><center>#</center></div><div class="fht-cell"></div></th>
								    									<th style=""><div class="th-inner "><center>Nama Puskesmas</center></div><div class="fht-cell"></div></th>
								    									<th style=""><div class="th-inner "><center>Alamat</center></div><div class="fht-cell"></div></th>
								    									<th style="text-align: center;"><div class="th-inner "><center class="glyphicon glyphicon-cog"></center></div><div class="fht-cell"></div></th>
								    								</tr>
								    							</thead>
																<tbody>
																	<tr>
																		<?php
																			$no = 1;
																			foreach ($puskesmas as $row) { ?>
																		<td><center><?php echo $no++; ?><center/></td>
																		<td><center><?php echo $row['nama_puskesmas']; ?><center/></td>
																		<td><center><?php echo $row['alamat']; ?><center/></td>
																		<td>
																			<center>
																			<a 
																				href="javascript:void(0)"
																				data-id-puskesmas="<?php echo $row['id_puskesmas']; ?>"
																				data-nama-puskesmas="<?php echo $row['nama_puskesmas']; ?>"
																				data-alamat="<?php echo $row['alamat']; ?>"
																				data-id-user="<?php echo $row['id_user']; ?>"
																				data-toggle="modal" data-target="#edit">
																				<i style="margin-left: 20px" class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Ubah" data-original-title="Ubah"></i>
																			</a>
																			<a href="<?php echo base_url('puskesmas/delete/'.$row['id_puskesmas']); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$row['nama_puskesmas'];?> ?');">
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

			<!-- modal atau popup data tabel puskesmas (add) -->
			<div class="modal fade" id="tambah" aria-hidden="true">
				<div class="modal-dialog modal-fide w-50 w-auto-sm p-4">
					<form id="tambah-puskesmas" class="col-md-10 p-0" action="<?php echo base_url();?>puskesmas/add" method="POST" role="form">
						<div class="modal-content">
										<div class="modal-header">
											<h4><b>Tambah Data Puskesmas</b></h4>
										</div>
											<div class="modal-body text-left p-lg">
												<div class="form-group">
													<label>Nama Puskesmas</label>
													<input class="form-control" type="text" name="nama_puskesmas" id="nama_puskesmas" required>
												</div>
												<div class="form-group">
													<label>Alamat</label>
													<input class="form-control" type="text" name="alamat" id="alamat" required>
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

			<!-- modal atau popup data tabel puskesmas (edit) -->
			<div class="modal fade" id="edit" aria-hidden="true">
				<div class="modal-dialog modal-fide w-50 w-auto-sm p-4">
					<form id="edit-puskesmas" class="col-md-10 p-0" action="<?php echo base_url();?>puskesmas/update" method="POST" role="form">
						<div class="modal-content">
										<div class="modal-header">
											<h4><b>Ubah Data Puskesmas</b></h4>
										</div>
											<div class="modal-body text-left p-lg">
												<div class="form-group">
													<label>Nama Puskesmas</label>
													<input class="form-control" type="hidden" name="id_puskesmas" id="id_puskesmas">
													<input class="form-control" type="text" name="nama_puskesmas" id="nama_puskesmas" required>
												</div>
												<div class="form-group">
													<label>Alamat</label>
													<input class="form-control" type="text" name="alamat" id="alamat" required>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn dark-white p-x-md" data-dismiss="modal">Batal</button>
												<button type="submit" class="btn danger p-x-md" style="background-color: #22b66e">Edit</button>
											</div>
						</div>
					</form>	
				</div>
			</div>
					<!-- JavaScript puskesmas -->
					<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
					    <script>
					    $(document).ready(function() {
					        // Untuk sunting
					        $('#edit').on('show.bs.modal', function (event) {
					            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
					            var modal          = $(this)
					 
					            // Isi nilai pada field
					            modal.find('#id_puskesmas').attr("value",div.data('id-puskesmas'));
					            modal.find('#nama_puskesmas').attr("value",div.data('nama-puskesmas'));
					            modal.find('#alamat').attr("value",div.data('alamat'));
					            modal.find('#id_user').attr("value",div.data('id-user'));
					        });
					    });
					  </script>
					  <!--NiceScroll-->
					  <script src="<?php echo base_url();?>assets/plugin/jquery.nicescroll-3.7.6/jquery.nicescroll.js"></script>
					  <script type="text/javascript">
					    $(".boxscroll").niceScroll({cursorcolor:"rgb(34, 182, 110)",cursorwidth:"10"});
					  </script>