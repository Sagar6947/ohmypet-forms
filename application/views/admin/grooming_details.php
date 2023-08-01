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
										echo '<span class="alert alert-success">' . $this->session->userdata('msg') . '</span>';
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
											<th>Date</th>
											<th>Owner name</th>
											<th>Owner contact</th>

											<th>Pet name</th>
											<th>Owner address</th>
											<th>View service</th>
											<th>Delete</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i = 1;
										if (!empty($grooming_details)) {
											foreach ($grooming_details as $grooming) {
												$pet = getSingleRowById('basic_details', ['basic_id' => $grooming['pet_id']]);
												$owner = getSingleRowById('owner_details', ['oid' => $grooming['owner_id']]);
										?>
												<tr>
													<td><?= $i ?></td>
													<td><?= convertDatedmy($grooming['created_on']) ?> </td>
													<td><?= $owner['owner_name'] ?> </td>
													<td><?= $owner['owner_contact'] ?> </td>

													<td><?= $pet['pet_name'] ?> <br>(<?= $pet['pet_type'] ?> )</td>
													<td><?= $owner['owner_address'] ?> </td>
													<td><a class="badge badge-info" href="<?= base_url('AdminDashboard/') ?>all_details/<?= $tag ?>/<?= (($tag == 'grooming') ? $grooming['grooming_id'] : (($tag == 'boarding') ? $grooming['boarding_id'] : (($tag == 'daycare') ? $grooming['daycare_id'] : ''))) ?>">View more</a></td>
													<td><a class="badge badge-danger" href="<?= base_url('AdminDashboard/') ?>query_delete/<?= (($tag == 'grooming') ? 'grooming_details' : (($tag == 'boarding') ? 'boarding_details' : (($tag == 'daycare') ? 'daycare_details' : ''))) ?>/<?= (($tag == 'grooming') ? $grooming['grooming_id'] : (($tag == 'boarding') ? $grooming['boarding_id'] : (($tag == 'daycare') ? $grooming['daycare_id'] : ''))) ?>" onclick="return confirm('Are you sure to delete this data?')">Delete</a></td>
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