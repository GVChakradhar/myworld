
<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->

    <title>My World <?php echo $page_title ?? '' ;?> </title>
	

	<?php $this->load->view('eshop/layouts/header');?>
	
</head>
<body class="js">
	
	<!-- Preloader -->
	<!-- <div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div> -->
	<!-- End Preloader -->
	
	
	<!-- Header -->
	<?php $this->load->view('eshop/layouts/headshop');?>
	<!--/ End Header -->
	
		<?php $this->load->view('eshop/'.$page_name);?>

	<!-- Start Shop Newsletter  -->
	<?php $this->load->view('eshop/layouts/newsletter');?>
	<!-- End Shop Newsletter -->
	
	<!-- Modal -->
	<?php $this->load->view('eshop/layouts/modal');?>
    <!-- Modal end -->
	
	<!-- Start Footer Area -->
    <?php $this->load->view('eshop/layouts/footer');?>
	<!-- /End Footer Area -->
 
	<?php $this->load->view('eshop/layouts/scripts');?>
</body>
</html>