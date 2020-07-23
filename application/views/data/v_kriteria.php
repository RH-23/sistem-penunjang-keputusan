<!-- panel satu-->
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo $sub_title_c1; ?></div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="fixed-table-toolbar"></div>
							<div class="fixed-table-container">
								<div class="fixed-table-header">
									<table></table>
								</div>
								<div class="fixed-table-body">
									<div class="fixed-table-loading" style="top: 37px; display: none;">Loading, please wait…</div>
								<table data-toggle="table" id="table-style" data-url="tables/data2.json" data-row-style="rowStyle" class="table table-hover">
						    		<thead>
								    	<tr>
								    		<th>#</th>
								    		<th>Pilihan</th>
								    		<th>Bobot</th>
								    		<th>Opsi</th>
								    	</tr>
						    		</thead>
									<tbody>
										<tr>
											<?php
												$no = 1;
												foreach ($data_lingkungan as $row) {
											?>
											<td><?php echo $row['id_kriteria_lingkungan']; ?></td>
											<td><?php echo $row['pilihan_kriteria_lingkungan']; ?></td>
											<td><?php echo $row['bobot_kriteria_lingkungan']; ?></td>
											<td>
												<a 
												href="javascript:void(0)"
												data-id-kriteria-lingkungan="<?php echo $row['id_kriteria_lingkungan']; ?>"
												data-pilihan-kriteria-lingkungan="<?php echo $row['pilihan_kriteria_lingkungan']; ?>"
												data-bobot-kriteria-lingkungan="<?php echo $row['bobot_kriteria_lingkungan']; ?>"
												data-toggle="modal" data-target="#edit1">
												<i style="margin-left: 20px" class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ubah"></i>
												</a>
												<a class="p-2" href="javascript:void(0)" data-toggle="modal" data-target="#confirm"><i class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"></i>
												</a>
											</td>
										</tr>
										<?php
											}?>
									</tbody>
								</table>
								</div>
									<div class="fixed-table-pagination"></div>
								</div>
							</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!-- panel dua-->
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo $sub_title_c2; ?></div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="fixed-table-toolbar"></div>
							<div class="fixed-table-container">
								<div class="fixed-table-header">
									<table></table>
								</div>
								<div class="fixed-table-body">
									<div class="fixed-table-loading" style="top: 37px; display: none;">Loading, please wait…</div>
								<table data-toggle="table" id="table-style" data-url="tables/data2.json" data-row-style="rowStyle" class="table table-hover">
						    		<thead>
								    	<tr>
								    		<th>#</th>
								    		<th>Pilihan</th>
								    		<th>Bobot</th>
								    		<th>Opsi</th>
								    	</tr>
						    		</thead>
									<tbody>
										<tr>
											<?php
												$no = 1;
												foreach ($data_tenagamedis as $row) {
											?>
											<td><?php echo $row['id_kriteria_tenmed']; ?></td>
											<td><?php echo $row['pilihan_kriteria_tenmed']; ?></td>
											<td><?php echo $row['bobot_kriteria_tenmed']; ?></td>
											<td>
												<a 
												href="javascript:void(0)"
												data-id-kriteria-tenmed="<?php echo $row['id_kriteria_tenmed']; ?>"
												data-pilihan-kriteria-tenmed="<?php echo $row['pilihan_kriteria_tenmed']; ?>"
												data-bobot-kriteria-tenmed="<?php echo $row['bobot_kriteria_tenmed']; ?>"
												data-toggle="modal" data-target="#edit2">
												<i style="margin-left: 20px" class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ubah"></i>
												</a>
												<a class="p-2" href="javascript:void(0)" data-toggle="modal" data-target="#confirm"><i class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"></i>
												</a>
											</td>
										</tr>
										<?php
											}?>
									</tbody>
								</table>
								</div>
									<div class="fixed-table-pagination"></div>
								</div>
							</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--panel tiga-->
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo $sub_title_c3; ?></div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="fixed-table-toolbar"></div>
							<div class="fixed-table-container">
								<div class="fixed-table-header">
									<table></table>
								</div>
								<div class="fixed-table-body">
									<div class="fixed-table-loading" style="top: 37px; display: none;">Loading, please wait…</div>
								<table data-toggle="table" id="table-style" data-url="tables/data2.json" data-row-style="rowStyle" class="table table-hover">
						    		<thead>
								    	<tr>
								    		<th>#</th>
								    		<th>Pilihan</th>
								    		<th>Bobot</th>
								    		<th>Opsi</th>
								    	</tr>
						    		</thead>
									<tbody>
										<tr>
											<?php
												$no = 1;
												foreach ($data_pelayanan as $row) {
											?>
											<td><?php echo $row['id_kriteria_pelayanan']; ?></td>
											<td><?php echo $row['pilihan_kriteria_pelayanan']; ?></td>
											<td><?php echo $row['bobot_kriteria_pelayanan']; ?></td>
											<td>
												<a 
												href="javascript:void(0)"
												data-id-kriteria-pelayanan="<?php echo $row['id_kriteria_pelayanan']; ?>"
												data-pilihan-kriteria-pelayanan="<?php echo $row['pilihan_kriteria_pelayanan']; ?>"
												data-bobot-kriteria-pelayanan="<?php echo $row['bobot_kriteria_pelayanan']; ?>"
												data-toggle="modal" data-target="#edit3">
												<i style="margin-left: 20px" class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ubah"></i>
												</a>
												<a class="p-2" href="javascript:void(0)" data-toggle="modal" data-target="#confirm"><i class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"></i>
												</a>
											</td>
										</tr>
										<?php
											}?>
									</tbody>
								</table>
								</div>
									<div class="fixed-table-pagination"></div>
								</div>
							</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--panel empat-->
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo $sub_title_c4; ?></div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="fixed-table-toolbar"></div>
							<div class="fixed-table-container">
								<div class="fixed-table-header">
									<table></table>
								</div>
								<div class="fixed-table-body">
									<div class="fixed-table-loading" style="top: 37px; display: none;">Loading, please wait…</div>
								<table data-toggle="table" id="table-style" data-url="tables/data2.json" data-row-style="rowStyle" class="table table-hover">
						    		<thead>
								    	<tr>
								    		<th>#</th>
								    		<th>Pilihan</th>
								    		<th>Bobot</th>
								    		<th>Opsi</th>
								    	</tr>
						    		</thead>
									<tbody>
										<tr>
											<?php
												$no = 1;
												foreach ($data_fasilitas as $row) {
											?>
											<td><?php echo $row['id_kriteria_fasilitas']; ?></td>
											<td><?php echo $row['pilihan_kriteria_fasilitas']; ?></td>
											<td><?php echo $row['bobot_kriteria_fasilitas']; ?></td>
											<td>
												<a 
												href="javascript:void(0)"
												data-id-kriteria-fasilitas="<?php echo $row['id_kriteria_fasilitas']; ?>"
												data-pilihan-kriteria-fasilitas="<?php echo $row['pilihan_kriteria_fasilitas']; ?>"
												data-bobot-kriteria-fasilitas="<?php echo $row['bobot_kriteria_fasilitas']; ?>"
												data-toggle="modal" data-target="#edit4">
												<i style="margin-left: 20px" class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ubah"></i>
												</a>
												<a class="p-2" href="javascript:void(0)" data-toggle="modal" data-target="#confirm"><i class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"></i>
												</a>
											</td>
										</tr>
										<?php
											}?>
									</tbody>
								</table>
								</div>
									<div class="fixed-table-pagination"></div>
								</div>
							</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

			<!-- modal atau popup data tabel kriteria lingkungan -->
			<div class="modal fade" id="edit1" aria-hidden="true">
							<div class="modal-dialog modal-fide w-50 w-auto-sm p-4">
								<form id="edit-kriteria-lingkungan" class="col-md-10 p-0" action="<?php echo base_url();?>Kriteria/update1" method="POST" role="form">
									<div class="modal-content">
										<div class="modal-header">
											<h4><b>Ubah Kriteria</b></h4>
										</div>
											<div class="modal-body text-left p-lg">
												<div class="form-group">
													<label>Nama Kriteria</label>
													<input class="form-control" type="hidden" name="id_kriteria_lingkungan" id="id_kriteria_lingkungan">
													<input class="form-control" type="text" name="pilihan_kriteria_lingkungan" id="pilihan_kriteria_lingkungan" required>
												</div>
												<div class="form-group">
													<label>Bobot Kriteria</label>
													<input class="form-control" type="text" name="bobot_kriteria_lingkungan" id="bobot_kriteria_lingkungan" required>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn dark-white p-x-md" data-dismiss="modal">Batal</button>
												<button type="submit" class="btn danger p-x-md">Ubah</button>
											</div>
									</div>
								</form>	
							</div>
			</div>

						<!-- Data tables kriteria lingkungan -->
					<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
					    <script>
					    $(document).ready(function() {
					        // Untuk sunting
					        $('#edit1').on('show.bs.modal', function (event) {
					            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
					            var modal          = $(this)
					 
					            // Isi nilai pada field
					            modal.find('#id_kriteria_lingkungan').attr("value",div.data('id-kriteria-lingkungan'));
					            modal.find('#pilihan_kriteria_lingkungan').attr("value",div.data('pilihan-kriteria-lingkungan'));
					            modal.find('#bobot_kriteria_lingkungan').attr("value",div.data('bobot-kriteria-lingkungan'));
					        });
					    });
					  </script>

			<!-- modal atau popup data tabel kriteria tenaga medis -->
			<div class="modal fade" id="edit2" aria-hidden="true">
							<div class="modal-dialog modal-fide w-50 w-auto-sm p-4">
								<form id="edit-kriteria-tenagamedis" class="col-md-10 p-0" action="<?php echo base_url();?>Kriteria/update2" method="POST" role="form">
									<div class="modal-content">
										<div class="modal-header">
											<h4><b>Ubah Kriteria</b></h4>
										</div>
											<div class="modal-body text-left p-lg">
												<div class="form-group">
													<label>Nama Kriteria</label>
													<input class="form-control" type="hidden" name="id_kriteria_tenmed" id="id_kriteria_tenmed">
													<input class="form-control" type="text" name="pilihan_kriteria_tenmed" id="pilihan_kriteria_tenmed" required>
												</div>
												<div class="form-group">
													<label>Bobot Kriteria</label>
													<input class="form-control" type="text" name="bobot_kriteria_tenmed" id="bobot_kriteria_tenmed" required>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn dark-white p-x-md" data-dismiss="modal">Batal</button>
												<button type="submit" class="btn danger p-x-md">Ubah</button>
											</div>
									</div>
								</form>	
							</div>
			</div>

					<!-- Data tables kriteria tenaga medis -->
					<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
					    <script>
					    $(document).ready(function() {
					        // Untuk sunting
					        $('#edit2').on('show.bs.modal', function (event) {
					            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
					            var modal          = $(this)
					 
					            // Isi nilai pada field
					            modal.find('#id_kriteria_tenmed').attr("value",div.data('id-kriteria-tenmed'));
					            modal.find('#pilihan_kriteria_tenmed').attr("value",div.data('pilihan-kriteria-tenmed'));
					            modal.find('#bobot_kriteria_tenmed').attr("value",div.data('bobot-kriteria-tenmed'));
					        });
					    });
					  </script>

			<!-- modal atau popup data tabel kriteria pelayanan -->
			<div class="modal fade" id="edit3" aria-hidden="true">
							<div class="modal-dialog modal-fide w-50 w-auto-sm p-4">
								<form id="edit-kriteria-pelayanan" class="col-md-10 p-0" action="<?php echo base_url();?>Kriteria/update3" method="POST" role="form">
									<div class="modal-content">
										<div class="modal-header">
											<h4><b>Ubah Kriteria</b></h4>
										</div>
											<div class="modal-body text-left p-lg">
												<div class="form-group">
													<label>Nama Kriteria</label>
													<input class="form-control" type="hidden" name="id_kriteria_pelayanan" id="id_kriteria_pelayanan">
													<input class="form-control" type="text" name="pilihan_kriteria_pelayanan" id="pilihan_kriteria_pelayanan" required>
												</div>
												<div class="form-group">
													<label>Bobot Kriteria</label>
													<input class="form-control" type="text" name="bobot_kriteria_pelayanan" id="bobot_kriteria_pelayanan" required>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn dark-white p-x-md" data-dismiss="modal">Batal</button>
												<button type="submit" class="btn danger p-x-md">Ubah</button>
											</div>
									</div>
								</form>	
							</div>
			</div>

						<!-- Data tables kriteria pelayanan -->
					<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
					    <script>
					    $(document).ready(function() {
					        // Untuk sunting
					        $('#edit3').on('show.bs.modal', function (event) {
					            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
					            var modal          = $(this)
					 
					            // Isi nilai pada field
					            modal.find('#id_kriteria_pelayanan').attr("value",div.data('id-kriteria-pelayanan'));
					            modal.find('#pilihan_kriteria_pelayanan').attr("value",div.data('pilihan-kriteria-pelayanan'));
					            modal.find('#bobot_kriteria_pelayanan').attr("value",div.data('bobot-kriteria-pelayanan'));
					        });
					    });
					  </script>

			<!-- modal atau popup data tabel kriteria fasilitas -->
			<div class="modal fade" id="edit4" aria-hidden="true">
							<div class="modal-dialog modal-fide w-50 w-auto-sm p-4">
								<form id="edit-kriteria-fasilitas" class="col-md-10 p-0" action="<?php echo base_url();?>Kriteria/update4" method="POST" role="form">
									<div class="modal-content">
										<div class="modal-header">
											<h4><b>Ubah Kriteria</b></h4>
										</div>
											<div class="modal-body text-left p-lg">
												<div class="form-group">
													<label>Nama Kriteria</label>
													<input class="form-control" type="hidden" name="id_kriteria_fasilitas" id="id_kriteria_fasilitas">
													<input class="form-control" type="text" name="pilihan_kriteria_fasilitas" id="pilihan_kriteria_fasilitas" required>
												</div>
												<div class="form-group">
													<label>Bobot Kriteria</label>
													<input class="form-control" type="text" name="bobot_kriteria_fasilitas" id="bobot_kriteria_fasilitas" required>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn dark-white p-x-md" data-dismiss="modal">Batal</button>
												<button type="submit" class="btn danger p-x-md">Ubah</button>
											</div>
									</div>
								</form>	
							</div>
			</div>

						<!-- Data tables kriteria fasilitas -->
					<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
					    <script>
					    $(document).ready(function() {
					        // Untuk sunting
					        $('#edit4').on('show.bs.modal', function (event) {
					            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
					            var modal          = $(this)
					 
					            // Isi nilai pada field
					            modal.find('#id_kriteria_fasilitas').attr("value",div.data('id-kriteria-fasilitas'));
					            modal.find('#pilihan_kriteria_fasilitas').attr("value",div.data('pilihan-kriteria-fasilitas'));
					            modal.find('#bobot_kriteria_fasilitas').attr("value",div.data('bobot-kriteria-fasilitas'));
					        });
					    });
					  </script>