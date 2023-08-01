<?php $this->load->view('includes/admin_header'); ?>

<body class="theme-light preload-active" id="fullscreen">
	<div class="holder">
		<div class="wrapper p-0">
			<div class="content">
				<div class="container-fluid">
					<div class="row no-gutters align-items-center justify-content-center h-100">
						<div class="col-lg-6 col-xl-6">
							<div class="portlet overflow-hidden">
								<div class="row no-gutters">
									<div class="col-md-6">
										<div class="portlet-body d-flex flex-column justify-content-center align-items-start h-100 bg-primary text-white">
											<img src="<?= base_url() ?>assets/img/logo2.png" style="height: 100px;">
											<h2>Welcome back!</h2>
											<?php
											if ($this->session->flashdata('msg') != '') {
												echo $this->session->flashdata('msg');
											}
											?>
										</div>
									</div>
									<div class="col-md-6">
										<div class="portlet-body h-100">
											<?php echo form_open('Admin/validatelogin'); ?>
											<div class="form-group">
												<div class="float-label float-label-lg">
													<?= form_input(['class' => 'form-control form-control-lg', 'placeholder' => 'Enter email', 'name' => 'admin_email', 'value' => set_value('admin_email')]) ?>
													<label for="email">Email ID</label>
													<p class="text-danger"> <?= form_error('admin_email') ?></p>
												</div>
											</div>
											<div class="form-group">
												<div class="float-label float-label-lg">
													<?= form_password(['class' => 'form-control form-control-lg', 'placeholder' => 'Enter password', 'name' => 'admin_password', 'value' => set_value('admin_password')]) ?> <label for="password">Password</label></div>
												<p class="text-danger"> <?= form_error('admin_password') ?></p>
											</div>
											<div class="d-flex align-items-center justify-content-between mb-4">
											</div>
											<?= form_submit(['class' => 'btn btn-label-primary btn-lg btn-block btn-pill', 'value' => 'Submit']); ?>
											<?php echo form_close(); ?>
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
	<script type="text/javascript" src="assets/build/scripts/mandatory.js"></script>
	<script type="text/javascript" src="assets/build/scripts/core.js"></script>
	<script type="text/javascript" src="assets/build/scripts/vendor.js"></script>
	<script type="text/javascript" src="assets/app/pages/login.js"></script>
</body>

</html>
