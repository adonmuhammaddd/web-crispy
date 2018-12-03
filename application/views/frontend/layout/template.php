<!DOCTYPE html>
<html>

<head>
	<!-- meta -->
    <?php require_once('_meta.php'); ?>

    <!-- Title -->
    <title>
        <?php echo $title ?>
    </title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url('assets');?>/palatin/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('assets');?>/palatin/style.css">
    <?php include('_css.php'); ?>
</head>

<body class="hold-transition skin-blue fixed sidebar-mini">
	<!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>

    <!-- header -->
        <?php require_once('_header.php') ;?>
    <!-- ##### Header Area End ##### -->

				<?php echo $contents ;?>
		</div>
		<!-- footer -->
		<?php require_once('_footer.php') ;?>

	</div>
	<!-- js -->
	<?php require_once('_js.php') ;?>
</body>

</html>
