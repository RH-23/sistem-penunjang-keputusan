	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>

		<ul class="nav menu">
			<li class="<?php if($this->uri->segment(1)=="dashboard"){echo "active";}?>">
				<a href="<?=base_url('dashboard')?>">
					<span class="glyphicon glyphicon-dashboard"></span> Dashboard
				</a>
			</li>
			<li class="<?php if($this->uri->segment(1)=="kriteria"){echo "active";}?>">
				<a href="<?php base_url();?>kriteria">
					<span class="glyphicon glyphicon-th"></span> Data Kriteria
				</a>
			</li>
			<li class="<?php if($this->uri->segment(1)=="puskesmas"){echo "active";}?>">
				<a href="<?php base_url();?>puskesmas"><span class="glyphicon glyphicon-stats"></span> Data Puskesmas
				</a>
			</li>

			<li class="<?php if($this->uri->segment(1)=="penilaian"){echo "active";}?>">
				<a href="<?php base_url();?>penilaian"><span class="glyphicon glyphicon-signal"></span> Data Penilaian Puskesmas
				</a>
			</li>
			<li class="<?php if($this->uri->segment(1)=="nilai"){echo "active";}?>">
				<a href="<?php base_url();?>nilai"><span class="glyphicon glyphicon-list-alt"></span> Nilai / Proses SPK
				</a>
			</li>
		</ul>
		<?php $this->load->view('v_footer'); ?>
	</div> <!--/.sidebar-->


