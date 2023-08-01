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
											<div class="input-group-prepend"><span class="input-group-text">Fullname</span></div><input type="text" class="form-control" name="name" value="<?= (($tag == 'edit') ? $sub_admin_list['0']['name'] : '') ?>" placeholder="">
										</div>
									</div>
									<!-- <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">Email</span></div><input type="email" class="form-control" name="email" value="<?= (($tag == 'edit') ? $sub_admin_list['0']['admin_email'] : '') ?>" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">Number</span></div><input type="text" class="form-control" name="contact" value="<?= (($tag == 'edit') ? $sub_admin_list['0']['admin_contact'] : '') ?>" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">Location</span></div><input type="text" class="form-control" name="address" value="<?= (($tag == 'edit') ? $sub_admin_list['0']['admin_address'] : '') ?>" placeholder="">
                                        </div>
                                    </div> -->
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Username</span></div><input type="text" class="form-control" name="username" value="<?= (($tag == 'edit') ? $sub_admin_list['0']['username'] : '') ?>" placeholder="">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text">Password</span></div><input type="password" class="form-control" name="password" value="<?= (($tag == 'edit') ? $sub_admin_list['0']['password'] : '') ?>" placeholder="">
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
<?php $this->load->view('includes/footer.php') ?>
<?php $this->load->view('includes/footer-link'); ?>
</body>

</html>
