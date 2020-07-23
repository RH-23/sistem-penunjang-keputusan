<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title;?></title>

<link href="<?=base_url();?>/assets/libs/DataTables/datatables.min.css" rel="stylesheet">
<link href="<?=base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url();?>/assets/css/datepicker3.css" rel="stylesheet">
<link href="<?=base_url();?>/assets/css/styles.css" rel="stylesheet">
<link href="<?=base_url();?>/assets/css/bootstrap-table.css" rel="stylesheet">
<link href="<?=base_url();?>/assets/css/font-awesome.min.css" rel="stylesheet">
<link href="<?=base_url();?>/assets/css/styles.css" rel="stylesheet">


<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<?php 
		$this->load->view('_header');
		$this->load->view('sidebar');
	?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php base_url();?>dashboard"><span class="glyphicon glyphicon-home"> Home</span></a></li>
				<li class="active"><?php echo $title; ?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header" style="margin-bottom: -1px"><?php echo $title; ?></h1>
			</div>
		</div><!--/.row-->
		<?php $this->load->view($content);?>
	</div>

	<script src="<?=base_url();?>/assets/libs/DataTables/datatables.min.js"></script>
	<script src="<?=base_url();?>/assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?=base_url();?>/assets/js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>/assets/js/chart.min.js"></script>
	<script src="<?=base_url();?>/assets/js/chart-data.js"></script>
	<script src="<?=base_url();?>/assets/js/easypiechart.js"></script>
	<script src="<?=base_url();?>/assets/js/easypiechart-data.js"></script>
	<script src="<?=base_url();?>/assets/js/bootstrap-datepicker.js"></script>
	<script src="<?=base_url();?>/assets/js/bootstrap-table.js"></script>
	
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
