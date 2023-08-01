<?php $this->load->view('includes/admin_header'); ?>
<div class="holder">
	<?php $this->load->view('includes/menu'); ?>
	<div class="wrapper">
		<?php $this->load->view('includes/top-header'); ?>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="portlet">
							<div class="portlet-header portlet-header-bordered">
								<h3 class="portlet-title"><?= $title ?></h3>
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
							<div class="portlet-body">
								<br>
								<table id="datatable-1" class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th>S.no.</th>
											<th>Name</th>
											<!-- <th>Email</th>
											<th>Contact</th>
											<th>Location</th> -->
											<th>Username</th>
											<!-- <th>Block</th> -->
											<th>Delete</th>
											<th>Edit</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i = 1;
										if (!empty($sub_admin_list)) {
											foreach ($sub_admin_list as $sub_admin) {
										?>
												<tr id="row<?= $sub_admin['login_id'] ?>">
													<td><?= $i ?></td>
													<td><?= $sub_admin['name'] ?></td>
													<!-- <td><?= $sub_admin['email'] ?></td>
													<td><?= $sub_admin['contact'] ?></td>
													<td><?= $sub_admin['address'] ?></td> -->
													<td><?= $sub_admin['username'] ?></td>
													<!-- <td>
														<button data-id="<?= $sub_admin['login_id'] ?>" data-tab="admin" data-msg="<?= (($sub_admin['loginstatus'] == '2') ? '2' : '1') ?>" data-status="<?= (($sub_admin['loginstatus'] == '2') ? '1' : '2') ?>" class="badge badge-<?= (($sub_admin['loginstatus'] == '2') ? 'danger' : 'success') ?> block" id="block<?= $sub_admin['login_id'] ?>">
															<?= (($sub_admin['loginstatus'] == '2') ? 'Blocked' : 'Unblocked') ?>
														</button>
													</td> -->
													<td>
														<button data-id="<?= $sub_admin['login_id'] ?>" data-tab="admin" class="badge badge-danger delete">Delete</button>
													</td>
													<td><a class="badge badge-success" href="<?= base_url('AdminDashboard/update_sub_admin/' . $sub_admin['login_id']) ?>">Edit</a> </td>
												</tr>
										<?php
												$i++;
											}
										}
										?>
									</tbody>
								</table>
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
