	<!-- Data Puskesmas + Penilaian -->
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Data Puskesmas + Penilaian</div>
				<div class="panel-body">
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
								    								</tr>
								    							</thead>
																<tbody>
																	<tr>
																		<?php
																			$no = 1;
																			foreach ($nilai as $row) { ?>
																				<td><center><?php echo $no++; ?><center/></td>
																				<td><center><?php echo $row['nama_puskesmas']; ?><center/></td>
																				<td><center><?php echo $row['pilihan_kriteria_lingkungan']; ?><center/></td>
																				<td><center><?php echo $row['pilihan_kriteria_tenmed']; ?><center/></td>
																				<td><center><?php echo $row['pilihan_kriteria_pelayanan']; ?><center/></td>
																				<td><center><?php echo $row['pilihan_kriteria_fasilitas']; ?><center/></td>
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

	<!-- Rating Kecocokan -->
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Rating Kecocokan</div>
				<div class="panel-body">
						<div class="bootstrap-table">
							<div class="fixed-table-toolbar"></div>
									<div class="fixed-table-container"><div class="fixed-table-header"><table></table></div>
											<div class="fixed-table-body">
												<div class="boxscroll" style="padding: 8px; max-height: 200px; background-color: rgb(247, 251, 249); overflow: hidden; outline: none;" tabindex="1">
												<div class="fixed-table-loading" style="top: 37px; display: none;">Loading, please wait…</div>
													<table data-toggle="table" data-url="tables/data2.json" class="table table-hover">
								    							<thead>
								    								<tr>
								    									<th style=""><div class="th-inner "><center>Alternatif</center></div><div class="fht-cell"></div></th>
								    									<th style=""><div class="th-inner "><center>C1</center></div><div class="fht-cell"></div></th>
								    									<th style=""><div class="th-inner "><center>C2</center></div><div class="fht-cell"></div></th>
								    									<th style=""><div class="th-inner "><center>C3</center></div><div class="fht-cell"></div></th>
								    									<th style=""><div class="th-inner "><center>C4</center></div><div class="fht-cell"></div></th>
								    								</tr>
								    							</thead>
																<tbody>
																	<tr>
																		<?php
																			foreach ($nilai as $row) { ?>
																				<td><center><?php echo $row['nama_puskesmas']; ?><center/></td>
																				<td><center><?php echo $row['bobot_kriteria_lingkungan']; ?><center/></td>
																				<td><center><?php echo $row['bobot_kriteria_tenmed']; ?><center/></td>
																				<td><center><?php echo $row['bobot_kriteria_pelayanan']; ?><center/></td>
																				<td><center><?php echo $row['bobot_kriteria_fasilitas']; ?><center/></td>
																	</tr>
																		<?php
																			}?>
																	<tr>
																		<td><center>Jumlah</center></td>
																		<td><center><?php echo $jmlk_ling; ?></center></td>
																		<td><center><?php echo $jmlk_tenmed; ?></center></td>
																		<td><center><?php echo $jmlk_pel; ?></center></td>
																		<td><center><?php echo $jmlk_fas; ?></center></td>
																	</tr>
																</tbody>
													</table>
												</div>
											</div>
									</div>
						</div>
				</div>
		</div>
	</div>

	<!-- Hasil Perhitungan Normalisasi -->
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Hasil Perhitungan Normalisasi</div>
				<div class="panel-body">
						<div class="bootstrap-table">
							<div class="fixed-table-toolbar">
									<div class="fixed-table-container">
										<div class="fixed-table-header"></div>
											<div class="fixed-table-body">
												<div class="boxscroll" style="padding: 8px; max-height: 200px; background-color: rgb(247, 251, 249); overflow: hidden; outline: none;" tabindex="1">
														<table data-toggle="table" data-url="tables/data2.json" class="table table-hover">
									    							<thead>
									    								<tr>
									    									<th style=""><div class="th-inner "><center>Alternatif</center></div><div class="fht-cell"></div></th>
									    									<th style=""><div class="th-inner "><center>C1</center></div><div class="fht-cell"></div></th>
									    									<th style=""><div class="th-inner "><center>C2</center></div><div class="fht-cell"></div></th>
									    									<th style=""><div class="th-inner "><center>C3</center></div><div class="fht-cell"></div></th>
									    									<th style=""><div class="th-inner "><center>C4</center></div><div class="fht-cell"></div></th>
									    								</tr>
									    							</thead>
																	<tbody>
																		<tr>
																		<?php
																			foreach ($nilai as $row) { ?>
																				<td><center><?php echo $row['nama_puskesmas']; ?><center/></td>
																				<td><center><?php echo $row['bobot_kriteria_lingkungan']; ?><center/></td>
																				<td><center><?php echo $row['bobot_kriteria_tenmed']; ?><center/></td>
																				<td><center><?php echo $row['bobot_kriteria_pelayanan']; ?><center/></td>
																				<td><center><?php echo $row['bobot_kriteria_fasilitas']; ?><center/></td>
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
	</div>
	
	<!-- Nilai Rangking -->
	<div class="col-lg-12" style="padding: 0px ;">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">Nilai Rangking</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="fixed-table-container">
								<div class="fixed-table-header">
									<div class="fixed-table-body">
										<div class="boxscroll" style="padding: 8px; max-height: 200px; background-color: rgb(247, 251, 249); overflow: hidden; outline: none;" tabindex="1">
											<div id="table">
												<table>
													<thead>
														<tr>
															<th class="sort" data-sort='no'><center>Kode</th>
															<th class="sort" data-sort='nama_puskesmas'><center>Alternatif</th>
															<th class="sort" data-sort='nilai'><center>Nilai</th>
														</tr>
													</thead>
													<tbody class="list" style="background-color: #fff";>
														<style type="text/css">
															tr:hover {background-color:#f5f5f5;}
															tr, td {
														    padding: 10px; }
														</style>
															<tr>
																<?php
																	$no = 1;
																	$bobot_c1 = 0.4;
																	$bobot_c2 = 0.25;
																	$bobot_c3 = 0.15;
																	$bobot_c4 = 0.2;
																	foreach ($nilai as $row) { ?>
																	<td class="no"><center><?php echo "V".$no++; ?><center/></td>
																	<td class="nama_puskesmas"><center><?php echo $row['nama_puskesmas']; ?><center/></td>
																	<td class="nilai"><center><?php echo ($row['bobot_kriteria_lingkungan'] * $bobot_c1) + ($row['bobot_kriteria_tenmed'] * $bobot_c2) + ($row['bobot_kriteria_pelayanan'] * $bobot_c3) + ($row['bobot_kriteria_fasilitas'] * $bobot_c4); ?><center/></td>
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
			</div>
		</div>
	</div>

			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">Kesimpulan</div>
						<div class="panel-body">
								<div class="bootstrap-table"> 	
									<div class="fixed-table-toolbar"></div>
											<div class="fixed-table-container"><div class="fixed-table-header"><table></table></div>
													<div class="fixed-table-body">
														<?php
															$bobot_c1 = 0.40;
															$bobot_c2 = 0.25;
															$bobot_c3 = 0.15;
															$bobot_c4 = 0.20;
															$data = max(array(
																'max' => ($row['bobot_kriteria_lingkungan'] * $bobot_c1) + ($row['bobot_kriteria_tenmed'] * $bobot_c2) + ($row['bobot_kriteria_pelayanan'] * $bobot_c3) + ($row['bobot_kriteria_fasilitas'] * $bobot_c4)
															)); 
														?>
														<p>Dari hasil perhitungan rangking diatas, maka pemilihan puskesmas terbaik adalah ... dengan nilai <?php echo $rangking['nilai'] ?> yaitu puskesmas ...</p>
													</div>
											</div>
								</div>
						</div>
				</div>
			</div>
					<!-- JavaSript -->
					<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
					<script src="<?php echo base_url();?>assets/plugin/jquery.nicescroll-3.7.6/jquery.nicescroll.js"></script>
					<script type="text/javascript">
					    $(".boxscroll").niceScroll({cursorcolor:"rgb(34, 182, 110)",cursorwidth:"10"});
					</script>

					<script src="<?php echo base_url();?>assets/js/list.min.js"></script>
					<script type="text/javascript">
						var option = {
							valueNames: ['no','nama_puskesmas','nilai']
						};

						var penilaian = new List('table',option);
					</script>



					