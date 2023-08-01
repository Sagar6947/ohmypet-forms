<!-- pet details -->
<div class="form-dtls">
	<!-- image upload -->
	<div class="img-upload" data-aos="zoom-in-up">
		<div class="container-1">
			<label class="label" for="file">
				<div class="uploader">
					<img id="preview" src="<?= base_url() ?>assets/img/shape/<?= ((isset($_GET['pet'])) ? (($_GET['pet'] == 'CATS') ? 'Cat-01.png' : 'shape-8.png') : 'shape-8.png') ?>" alt="shape" class="pet-dp required-field" />
				</div>
			</label>
			<div class="input per_profile_wrapper">
				<input name="pet_profile_img" id="file" type="file" onchange="previewImage(event)" title="Pet profile image" required />
			</div>
		</div>
	</div>
	<div class="form-feilds nameField" data-aos="fade-up">
		<label for>Name*</label>

		<input type="text" id="pet_name" name="pet_name" title="Pet name" required />
		<input type="hidden" id="pet_id" name="pet_id" value="0" />
	</div>
	<div class="form-feilds res-mb-0 pet-age" data-aos="fade-up">
		<label for>Age</label>
		<input type="text" placeholder="Year" id="pet_age" name="pet_age" />
		<input type="text" placeholder="Month" id="pet_age_month" name="pet_age_month" />
	</div>
	<div class="form-feilds" data-aos="fade-up">
		<label for>Gender</label>
		<div class="radio-with-Icon">
			<p class="radioOption-Item">
				<input type="radio" name="pet_gender" id="BannerType1" value="male" class="ng-valid ng-dirty ng-touched opacity-0 ng-empty" aria-invalid="false" checked />
				<label for="BannerType1" class="bg-none">
					<img src="<?= base_url() ?>assets/img/shape/shape-9.png" class="male-img-1" alt="Geder icon" />
					<img src="<?= base_url() ?>assets/img/shape/shape-9-white.png" class="male-img-2" alt="Gender icon" />
					<span>Male</span>
				</label>
			</p>
			<p class="radioOption-Item">
				<input type="radio" name="pet_gender" id="BannerType2" value="female" class="ng-valid ng-dirty opacity-0 ng-touched ng-empty" aria-invalid="false" />
				<label for="BannerType2" class="bg-none">
					<img src="<?= base_url() ?>assets/img/shape/shape-10.png" class="female-img-1" alt="Gender icon" />
					<img src="<?= base_url() ?>assets/img/shape/shape-10-white.png" class="female-img-2" alt="Gender icon" />
					<span>Female</span>
				</label>
			</p>
		</div>
	</div>
	<div class="form-feilds" data-aos="fade-up">
		<label for class="weight-label">Weight</label>
		<div class="form-text weight-label">
			<input type="text" id="pet_weight" name="pet_weight" />
			<label for="youridhere" class="static-value">Kg</label>
		</div>
	</div>
	<div class="form-feilds" data-aos="fade-up">
		<label for>Breed</label>
		<input type="text" id="pet_breed" name="pet_breed" />
	</div>
	<div class="form-feilds" data-aos="fade-up">
		<label for>Microchip No</label>
		<input type="text" id="pet_microchip_no" name="pet_microchip_no" />
	</div>
	<div class="form-feilds pb-20" data-aos="fade-up">
		<label for>Allergies</label>
		<input type="text" id="pet_allergies" name="pet_allergies" />
	</div>
</div>
<!-- vac-forms -->
<div class="form-rabies pb-40">
	<div class="container rab-container">
		<div class="rab-vac-sec st-flex">
			<div class="rab-checkbox">
				<!-- One -->
				<div id="rabi-vac">
					<h3 data-aos="fade-up">Rabies Vac*</h3>
					<input type="radio" id="Rabies1" class="chb chb-1 Rabies rabies-vac-dkstp-mrgin opacity-0" name="pet_is_rabiesVac" value="Yes"   required checked />
					<label for="Rabies1" class="bg-none" data-aos="zoom-in-up"> Yes</label>
					<!--<input type="radio" id="Rabies2" class="chb chb-2 Rabies" name="pet_is_rabiesVac" value="No" data-aos="fade-up"    />-->
					<!--<label for="Rabies2" class="bg-none" data-aos="zoom-in-up"> No</label> <br />-->
					<div class="vac-date-div  Rabies_date">
						<label for="rabies_vac_date">Ex Date</label>
						<input type="date" name="pet_rabiesVac_expDate" id="rabies_vac_date" class="date_wrapper" title="Rabies Vaccine date" required />
						<!--<span class="date-placeholder">DD-MM-YYYY</span>-->
					</div>
				</div>

				<!--Four-->
				<?php
				if (isset($_GET['pet'])) {
					if ($_GET['pet'] == 'CATS') {
				?>
						<div id="pch-vac">
							<h3 data-aos="fade-up">Pch Vac*</h3>
							<input type="radio" id="pch1" class="chb chb-1 pch rabies-vac-dkstp-mrgin opacity-0" name="pet_is_pchVac" value="Yes"   checked />
							<label for="pch1" class="bg-none" data-aos="zoom-in-up"> Yes</label>
							<input type="radio" id="pch2" class="chb chb-2 pch opacity-0" name="pet_is_pchVac" value="No"   />
							<label for="pch2" class="bg-none" data-aos="zoom-in-up"> No</label> <br />
							<div class="vac-date-div pch_date  ">
								<label for="pch_vac_date">Ex Date : </label>
								<input type="date" name="pet_pchVac_expDate" id="pch_vac_date" class="date_wrapper" required title="PCH Vac date" />
								<!--<span class="date-placeholder">DD-MM-YYYY</span>-->
							</div>
						</div>
					<?php
					} else {

					?>
						<!-- two -->
						<div id="dhpp-vac">
							<h3 data-aos="fade-up">DHPPI Vac*</h3>
							<input type="radio" id="DHPPI1" class="chb   chb-1 DHPPI rabies-vac-dkstp-mrgin opacity-0" name="pet_is_dhippiVac" value="Yes"   checked required />
							<label for="DHPPI1" class="bg-none" data-aos="zoom-in-up"> Yes</label>
							<!--<input type="radio" id="dhppi2" class="chb chb-1 DHPPI" name="pet_is_dhippiVac" value="No" data-aos="fade-up"   />-->
							<!--<label for="dhppi2" class="bg-none" data-aos="zoom-in-up"> No</label> <br />-->
							<div class="vac-date-div  DHPPI_date">
								<label for="pet_dhippiVac_expDate">Ex Date : </label>
								<input type="date" name="pet_dhippiVac_expDate" id="pet_dhippiVac_expDate" class="date_wrapper" title="DHPPI Vac date" required />
								<!--<span class="date-placeholder">DD-MM-YYYY</span>-->
							</div>
						</div>
						<!--three-->
						<div id="kenn-vac">
							<h3 data-aos="fade-up">Kennel Cough Vac*</h3>
							<div>
							<input type="radio" id="kennel1" class="chb newChb chb-1 kennel rabies-vac-dkstp-mrgin opacity-0" name="pet_is_kennelCoughVac" value="Yes"   checked />
							<label for="kennel1" class="bg-none" data-aos="zoom-in-up"> Yes</label>
							<?php
							if ($tag == 'grooming') {
							?>
								<input type="radio" id="kennel2" class="chb newChb chb-2 kennel opacity-0" name="pet_is_kennelCoughVac" value="No"   />
								<label for="kennel2" class="bg-none" data-aos="zoom-in-up"> No</label> <br />

							<?php
							}
							?>
							</div>
							<div class="vac-date-div kennel_date  ">
								<label for="kennel_vac_date">Ex Date : </label>
								<input type="date" name="pet_kennelCoughVac_expDate" id="kennel_vac_date" class="date_wrapper" required title="Kennel Vac date" />
								<!--<span class="date-placeholder">DD-MM-YYYY</span>-->
							</div>
						</div>
					<?php
					}
				} else {

					?>
					<!-- two -->
					<div id="dhpp-vac">
						<h3 data-aos="fade-up">DHPPI Vac*</h3>
						<input type="radio" id="DHPPI1" class="chb newChb chb-1 DHPPI rabies-vac-dkstp-mrgin opacity-0" name="pet_is_dhippiVac" value="Yes" data-aos="fade-up" checked required />
						<label for="DHPPI1" class="bg-none" data-aos="zoom-in-up"> Yes</label>
						<!--<input type="radio" id="dhppi2" class="chb chb-1 DHPPI" name="pet_is_dhippiVac" value="No" data-aos="fade-up"   />-->
						<!--<label for="dhppi2" class="bg-none" data-aos="zoom-in-up"> No</label> <br />-->
						<div class="vac-date-div  DHPPI_date">
							<label for="pet_dhippiVac_expDate">Ex Date : </label>
							<input type="date" name="pet_dhippiVac_expDate" id="pet_dhippiVac_expDate" class="date_wrapper" title="DHPPI Vac date" required />
							<!--<span class="date-placeholder">DD-MM-YYYY</span>-->
						</div>
					</div>
					<!--three-->
					<div id="kenn-vac">
						<h3 data-aos="fade-up">Kennel Cough Vac*</h3>
						<div class="" style="margin-left: 30px;">
						<input type="radio" id="kennel1" class="chb newChb chb-1 kennel rabies-vac-dkstp-mrgin opacity-0" name="pet_is_kennelCoughVac" value="Yes"   checked style="position: absolute;"/>
						<label for="kennel1" class="bg-none" data-aos="zoom-in-up"> Yes</label>
						<?php
						if ($tag == 'grooming') {
						?>
							<input type="radio" id="kennel2" class="chb newChb chb-2 kennel opacity-0" name="pet_is_kennelCoughVac" value="No"   style="position: absolute;"/>
							<label for="kennel2" class="bg-none" data-aos="zoom-in-up"> No</label> <br />

						<?php
						}
						?>
						</div>
						<div class="vac-date-div kennel_date  ">
							<label for="kennel_vac_date">Ex Date : </label>
							<input type="date" name="pet_kennelCoughVac_expDate" id="kennel_vac_date" class="date_wrapper" required title="Kennel Vac date" />
							<!--<span class="date-placeholder">DD-MM-YYYY</span>-->
						</div>
					</div>
				<?php
				}
				?>


			</div>
			<!-- image upload -->
			<div class="img-upload img-upload-pd">
				<div class="container-1 pt-57 text-center" data-aos="zoom-in-up">
					<label class="label" for="file1">
						<div class="uploader uploadig-hover">
							<img id="preview2" src="<?= base_url() ?>assets/img/shape/upload-book.png" alt="shape" />
						</div>
					</label>
					<div class="input">
						<input name="vac_book[]" id="file1" type="file" onchange="previewImage3($(this))"  multiple required/>
						<!-- <input name="vac_book[]" id="file1" type="file" onchange="previewImage2(event)" multiple/> -->
					</div>
					<!-- <span id="vacbook"></span> -->
					<span id="previewContainer" style="display:inline-grid;margin-top:80px;"></span>
				</div>
				<div class="vac-shape">
					<img src="<?= base_url() ?>assets/img/shape/shape-11.png" alt="shape" class="img-1" />
					<img src="<?= base_url() ?>assets/img/shape/shape-12.png" alt="shape" class="img-2" />
				</div>
			</div>
		</div>
	</div>
</div>
<!-- bath -->
<section class="parent-form">
	<div class="pt-10 pb-10 ">
		<h2 class="text-center cprimary" data-aos="zoom-in-up">PARENT DETAILS</h2>
		<!-- Rest of your content -->
		<img src="<?= base_url() ?>assets/img/shape/shape-15.png">
		<div class="pt-10 pb-10">
			<div class="form-feilds" data-aos="fade-up">
				<label class="cgrey" for>Name*</label>
				<input type="text" id="owner_name" name="owner_name" title="Owner name" required>
			</div>
			<div class="form-feilds" data-aos="fade-up">
				<label class="cgrey" for>Phone*</label>
				<input type="text" id="owner_contact" name="owner_contact_1" title="Owner phone" required>
			</div>
			<div class="form-feilds" data-aos="fade-up">
				<label class="cgrey" for>Emerg. Name*</label>
				<input type="text" id="emerg_owner_name" name="emerg_owner_name" title="Emergency owner name" required>
			</div>
			<div class="form-feilds" data-aos="fade-up">
				<label class="cgrey" for>Emerg. Phone*</label>
				<input type="text" id="emerg_owner_contact" name="emerg_owner_contact" title="Emergency owner contact no." required>
			</div>
			<div class="form-feilds" data-aos="fade-up">
				<label class="cgrey" for>Address</label>
				<input type="text" id="owner_address" name="owner_address">
			</div>
			<div class="form-feilds" data-aos="fade-up">
				<label class="cgrey facebook-label" for>Facebook</label>
				<div class="form-text-2">
					<input type="text" id="owner_facebook" name="owner_facebook">
					<label for="owner_facebook" class="static-value-2">@</label>
				</div>

			</div>
			<div class="form-feilds" data-aos="fade-up">
				<label class="cgrey  instagram-label" for>Instagram</label>
				<div class="form-text-2">
					<input type="text" id="owner_instagram" name="owner_instagram">
					<label for="owner_instagram" class="static-value-2">@</label>
				</div>

			</div>
		</div>
		<!--<h2 class="text-center cprimary" data-aos="zoom-in-up">TODAY MY SPA INCLUDES</h2>-->
	</div>
</section>