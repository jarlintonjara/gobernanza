	<body style="background-image: none;">
		<!--   header -->
		<?php echo $this->load->view('layout/menu_view') ?>
		<!-- cuerpo -->
		<?php $this->load->view($module."/".$view_file); ?>
		<!-- end cuerpo -->
		<!-- footer -->
		<?php echo $this->load->view('layout/footer_view'); ?>

		<?php echo $this->load->view('layout/script'); ?>
		<!-- end footer -->
	</body>
</html>