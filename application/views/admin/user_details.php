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
											<th>Contact</th>
											<th>Address</th>
											<th>Pet</th>
											 <th>Emerg. name</th>
											<th>Emerg. contact</th>
											<th> View</th>
											<th> Update</th>
											<th> Delete</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i = 1;
										if (!empty($user_details)) {
											foreach ($user_details as $user) {
												$pet = getRowById('basic_details', 'owner_id', $user['oid']);
												$pets = [];
												if($pet){
												foreach ($pet as $p) {
													$pets[] = $p['pet_name'];
												}
												}
										?>
												<tr id="row<?= $user['oid'] ?>">
													<td><?= $i ?></td>
													<td><?= $user['owner_name'] ?></td>
													<td><?= $user['owner_contact'] ?></td>
													<td><?= $user['owner_address'] ?></td>
													<td><?= implode(', ',$pets) ?></td>
													 <td><?= $user['emerg_owner_name'] ?></td>
													<td><?= $user['emerg_owner_contact'] ?></td>
													<td><a class="badge badge-success" href="<?= base_url('AdminDashboard/view_user_details/' . $user['oid']) ?>">View</a> </td>
													<td><a class="badge badge-warning" href="<?= base_url('AdminDashboard/user_edit/' . $user['oid']) ?>">Update</a> </td>
													<td><a class="badge badge-danger" href="<?= base_url('AdminDashboard/user_delete/' . $user['oid']) ?>" onclick="return confirm('Are you sure to delete this data?')">Delete</a>
													</td>
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
