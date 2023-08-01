<?php $this->load->view('includes/admin_header'); ?>
<div class="holder">
	<?php $this->load->view('includes/menu'); ?>
	<div class="wrapper">
		<?php $this->load->view('includes/top-header'); ?>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="portlet">
							<div class="portlet-header portlet-header-bordered">
								<h3 class="portlet-title">
									<?= $title ?>
								</h3>
							</div>
							<div class="row">
								<div class="col-md-12">
									<?php
									if ($this->session->has_userdata('msg')) {
										echo $this->session->userdata('msg');
										$this->session->unset_userdata('msg');
									}
									?>
								</div>
							</div>
							<div class="portlet-body"><br>
								<form method="post" action="">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Old password</span></div><input type="password" class="form-control" name="old" value="" required placeholder="">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">New password</span></div><input type="password" class="form-control" name="new" value="" required placeholder="">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Confirm password</span></div><input type="password" class="form-control" name="con" value="" required placeholder="">
										</div>
									</div>
									<button class="btn btn-primary" type="submit">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $this->load->view('includes/web-footer'); ?>
	</div>
</div>
<?php $this->load->view('includes/footer') ?>
<?php $this->load->view('includes/footer-link'); ?>
</body>

</html>
