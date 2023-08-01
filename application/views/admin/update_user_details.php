<?php $this->load->view('includes/admin_header'); ?>
<style>
	.disabled-link {
		pointer-events: none;
		/* Optionally, you can change the appearance of the link to make it look "disabled" */
		color: gray;
		text-decoration: none;
		cursor: default;
	}
</style>

<div class="holder">
	<?php $this->load->view('includes/menu'); ?>
	<div class="wrapper">
		<?php $this->load->view('includes/top-header'); ?>
		<div class="content">
			<div class="container-fluid">


				<div class="row">
					<div class="col-md-12">
						<?php
						if ($this->session->has_userdata('msg')) {
							echo $this->session->userdata('msg');
							$this->session->unset_userdata('msg');
						}
						?>
					</div>

					<div class="col-12 mb-4">
						<form method="post" action="<?= base_url('AdminDashboard/update_owner/' . $user[0]['oid']) ?>">
							<div class="card">
								<div class="card-header ">
									<h5 class="card-title">Owner details: ID <?= $user[0]['owner_contact'] ?></h5>
								</div>
								<div class="card-body row">
									<p class="card-text col-xs-2 col-md-2"><b>Name:</b> <br><input type="text" value="<?= $user[0]['owner_name'] ?>" name="owner_name" class="form-control" /></p>
									<p class="card-text col-xs-2 col-md-2"><b>Contact:</b> <br><input type="text" value="<?= $user[0]['owner_contact'] ?>" name="owner_contact" class="form-control" /></p>
									<p class="card-text col-xs-2 col-md-2"><b>Address:</b> <br><input type="text" value="<?= $user[0]['owner_address'] ?>" name="owner_address" class="form-control" /></p>
									<p class="card-text col-xs-2 col-md-2"><b>Facebook:</b> <br><input type="text" value="<?= $user[0]['owner_facebook'] ?>" name="owner_facebook" class="form-control" /></p>
									<p class="card-text col-xs-2 col-md-2"><b>Instagram:</b> <br><input type="text" value="<?= $user[0]['owner_instagram'] ?>" name="owner_instagram" class="form-control" /></p>
									<p class="card-text col-xs-2 col-md-2"><b>Emergency name:</b> <br><input type="text" value="<?= $user[0]['emerg_owner_name'] ?>" name="emerg_owner_name" class="form-control" /></p>
									<p class="card-text col-xs-2 col-md-2"><b>Emergency contact:</b> <br><input type="text" value="<?= $user[0]['emerg_owner_contact'] ?>" name="emerg_owner_contact" class="form-control" /></p>
									<p class="card-text col-xs-2 col-md-2"><br><button class="btn btn-primary" type="submit">Save</button></p>
								</div>
							</div>
						</form>
					</div>
				</div>
				<?php
				$i = 1;
				if ($basic != '') {
					foreach ($basic as $pet) {
				?>
						<form method="post" action="<?= base_url('AdminDashboard/update_owner_pet/' . $pet['basic_id']) ?>" enctype="multipart/form-data">
							<div class="row">
								<div class="col-12 mb-4">
									<h5 class="card-title">Pet details #<?= $i++ ?></h5>
								</div>
								<div class="col-2 mb-4">
									<div class="card">
										<div class="card-header ">
											<?php
											if ($pet['pet_profile_img'] != '') {
											?>
												<img src="<?= base_url() ?>uploads/files/<?= $pet['pet_profile_img'] ?>" alt="shape" style="height:120px;width:100%;object-fit:contain;" />
											<?php
											} else {
											?>
												<img src="<?= base_url() ?>assets/img/shape/shape-8.png" alt="shape" class="pet-dp" style="height:120px;width:100%;object-fit:contain;" />
											<?php
											}
											?>
											<hr>


										</div>

									</div>
								</div>
								<div class="col-10 mb-4">
									<div class="card">
										<div class="card-header ">
											<h5 class="card-title">Pet details</h5>
										</div>
										<div class="card-body row">
											<p class="card-text col-xs-3 col-md-3"><b>Update Profile :</b><br> <input type="file" value="" name="pet_profile_img" class="form-control" /></p>

											<p class="card-text col-xs-3 col-md-3"><b>Type:</b><br> <input type="radio" value="DOGS" name="pet_type" <?= (($pet['pet_type'] == 'DOGS') ? 'checked' : '') ?> /> DOGS
												<input type="radio" value="CATS" name="pet_type" <?= (($pet['pet_type'] == 'CATS') ? 'checked' : '') ?> /> CATS
											</p>
											<p class="card-text col-xs-3 col-md-3"><b>Name:</b><br> <input type="text" value="<?= $pet['pet_name'] ?>" name="pet_name" class="form-control" /></p>
											<p class="card-text col-xs-3 col-md-3 "><b>Age:</b><br> <span class="d-flex"><input type="text" value="<?= $pet['pet_age'] ?>" name="pet_age" class="form-control" style="width:50px;" /> Years ,
													<input type="text" value="<?= $pet['pet_age_month'] ?>" name="pet_age_month" class="form-control" style="width:50px;" /> Month</span>
											</p>
											<p class="card-text col-xs-3 col-md-3"><b>Gender:</b><br> <input type="radio" value="male" name="pet_gender" <?= (($pet['pet_gender'] == 'male') ? 'checked' : '') ?> /> Male
												<input type="radio" value="female" name="pet_gender" <?= (($pet['pet_gender'] == 'female') ? 'checked' : '') ?> /> Female
											</p>
											<p class="card-text col-xs-3 col-md-3"><b>Weight:</b><br> <input type="text" value="<?= $pet['pet_weight'] ?>" name="pet_weight" class="form-control" /></p>
											<p class="card-text col-xs-3 col-md-3"><b>Breed:</b><br> <input type="text" value="<?= $pet['pet_breed'] ?>" name="pet_breed" class="form-control" /></p>
											<p class="card-text col-xs-3 col-md-3"><b>Microchip no.:</b><br> <input type="text" value="<?= $pet['pet_microchip_no'] ?>" name="pet_microchip_no" class="form-control" /></p>
											<p class="card-text col-xs-3 col-md-3"><b>Allergies:</b><br> <input type="text" value="<?= $pet['pet_allergies'] ?>" name="pet_allergies" class="form-control" /></p>

											<p class="card-text col-xs-3 col-md-3"><b>Rabies Vac:</b><br> <input type="text" value="<?= $pet['pet_is_rabiesVac'] ?>" name="pet_is_rabiesVac" class="form-control" /></p>
											<p class="card-text col-xs-3 col-md-3"><b>Rabies Vac Exp date:</b><br> <input type="date" value="<?= $pet['pet_rabiesVac_expDate'] ?>" name="pet_rabiesVac_expDate" class="form-control" /></p>

											<?php
											if ($pet['pet_type'] == 'DOGS') {
											?>
												<p class="card-text col-xs-3 col-md-3"><b>DHIPPI vac:</b><br> <input type="text" value="<?= $pet['pet_is_dhippiVac'] ?>" name="pet_is_dhippiVac" class="form-control" /></p>
												<p class="card-text col-xs-3 col-md-3"><b>DHIPPI vac Exp date:</b><br> <input type="date" value="<?= $pet['pet_dhippiVac_expDate'] ?>" name="pet_dhippiVac_expDate" class="form-control" /></p>
												<p class="card-text col-xs-3 col-md-3"><b>Kennel Cough Vac:</b><br> <input type="text" value="<?= $pet['pet_is_kennelCoughVac'] ?>" name="pet_is_kennelCoughVac" class="form-control" /></p>
												<p class="card-text col-xs-3 col-md-3"><b>Kennel cough vac Exp date:</b><br> <input type="date" value="<?= $pet['pet_kennelCoughVac_expDate'] ?>" name="pet_kennelCoughVac_expDate" class="form-control" /></p>
											<?php
											} else {
											?>
												<p class="card-text col-xs-3 col-md-3"><b>PHC Vac:</b><br> <input type="text" value="<?= $pet['pet_is_pchVac'] ?>" name="pet_is_pchVac" class="form-control" /></p>
												<p class="card-text col-xs-3 col-md-3"><b>PHC Vac exp date:</b><br> <input type="date" value="<?= $pet['pet_pchVac_expDate'] ?>" name="pet_pchVac_expDate" class="form-control" /></p>
											<?php
											}
											?>
											<p class="card-text col-xs-3 col-md-3"><b>Add Vaccine book :</b><br> <input type="file" value="" name="vac_book[]" class="form-control" multiple /></p>

											<p class="card-text col-xs-2 col-md-2"><br><button class="btn btn-primary" type="submit">Save</button></p>
										</div>
										<div class="card-header ">
											<h5 class="card-title">Vaccine book list</h5>
										</div>
										<div class="card-body row">

												<?php
												$petdata = getRowById('basic_details_vacbook', 'bid', $pet['basic_id']);

												if ($petdata != '') {
$i=1;
													foreach ($petdata as $vaccine) {
												?>
											<div class="card-text col-xs-3 col-md-3 row ">
												<a href="<?= base_url() ?>uploads/vac/<?= $vaccine['book_nm'] ?>" target="_blank" class="badge badge-info m-1"> Vaccine book #<?= $i++ ?><br><br>(<?= convertDatedmy($vaccine['create_date']) ?>)</a> <br>
												<a href="<?= base_url('Admindashboard/vac_delete/' . $vaccine['id']) ?>"   class="badge badge-danger m-1" onclick="return confirm('Are you sure to delete this data?')"> Delete</a>
													</div>


									<?php
													}
												}
									?>

										</div>
									</div>
								</div>
							</div>
						</form>
				<?php
					}
				}
				?>
			</div>
		</div>
	</div>
</div>
</div>


<?php $this->load->view('includes/footer-link'); ?>

<script>
	$(document).ready(function() {
		// Find the input field with the class "disabled-link" and disable it
		$('input.disabled-link').prop('disabled', true);
	});
</script>

</body>

</html>