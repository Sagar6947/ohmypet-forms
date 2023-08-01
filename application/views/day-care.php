<?php include('includes/header.php'); ?>

<body>
	<form action="<?= base_url('Home/booking?tag=day_care&pet='.((isset($_GET['pet'])) ? (($_GET['pet'] == 'CATS') ? 'CATS' : 'DOGS') : 'DOGS')) ?>" enctype="multipart/form-data" method="post" class="custom-validation">
		<header class="head-img-shape">
			<div class="logoo" data-aos="zoom-in-down">
				<a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/img/logo.png" alt="Oh My Pet Logo" /></a>
			</div>
			<?php if ($this->session->userdata('msg') != '') { ?>
				<?= $this->session->userdata('msg'); ?>
			<?php  }
			$this->session->unset_userdata('msg'); ?>
			<?php include('option.php') ?>
		</header>
		<?php include('id.php') ?>
		<?php include('pet_owner.php') ?>
		<!-- ACTIVITIES -->
		<section class="parent-form">
			<div class="pt-10 pb-10 ">
				<h2 class="text-center cprimary" data-aos="zoom-in-up">ACTIVITIES</h2>
				<!-- Rest of your content -->
				<img src="<?= base_url() ?>assets/img/rashu/Shape 19.png">
				<div class="pt-10 pb-10">
					<div class="form-feilds" data-aos="fade-up">
						<label class="cgrey" for>Likes</label>
						<input type="text" name="likes">
					</div>
					<div class="form-feilds" data-aos="fade-up">
						<label class="cgrey" for>Dislikes</label>
						<input type="text" name="dislike">
					</div>
					<div class="form-feilds" data-aos="fade-up">
						<label class="cgrey" for>Place to Play</label>
						<input type="text" name="place_play">
					</div>
				</div>
			</div>
		</section>
		<!-- Feddig -->
		<section class="parent-form feeding">
			<div class="pt-10 pb-10 ">
				<h2 class="text-center cprimary" data-aos="zoom-in-up">FEEDING</h2>
				<!-- Rest of your content -->
				<img src="<?= base_url() ?>assets/img/rashu/Shape 19.png">
				<div class="pt-10 pb-10">
					<div class="form-feilds" data-aos="fade-up">
						<label class="cgrey" for>Brand Name *</label>
						<input type="text" name="brand_name" required>
					</div>
					<div class="form-feilds" data-aos="fade-up">
						<label class="cgrey" for>Morning amount *</label>
						<input type="text" name="morning_amt" required>
					</div>
					<div class="form-feilds" data-aos="fade-up">
						<label class="cgrey" for>Afternoon amount *</label>
						<input type="text" name="afternoon_amt" required>
					</div>
					<div class="form-feilds" data-aos="fade-up">
						<label class="cgrey" for>Evening amount *</label>
						<input type="text" name="evening_amt" required>
					</div>
					<div class="form-feilds" data-aos="fade-up">
						<label class="cgrey" for>Treats *</label>
						<input type="text" name="treats" required>
					</div>
					<div class="form-feilds" data-aos="fade-up">
						<label class="cgrey" for>Restrictions *</label>
						<input type="text" name="restrictions" required>
					</div>
					<div class="form-feilds" data-aos="fade-up">
						<label class="cgrey" for>Medication *</label>
						<input type="text" name="medication" required>
					</div>
				</div>
			</div>
		</section>
		<section class="form-dtls pb-20 pt-20 duration-sec">
			<div class="container">
				<h2 data-aos="zoom-in-up" class="white-heading">
					DURATION
				</h2>
				<div class="rab-checkbox daytime-chcekbox" style="margin-left:0">
					<!-- One -->
					<h3 data-aos="fade-up">Select Days Type :</h3>
					<input type="radio" id="single_day" class="chb chb-1 Rabies rabies-vac-dkstp-mrgin opacity-0" name="select_days" value="Single"   required />
					<label for="single_day" class="bg-none" data-aos="zoom-in-up"> Single</label>
					<input type="radio" id="multiple_day" class="chb chb-2 Rabies opacity-0" name="select_days" value="Multiple"   />
					<label for="multiple_day" class="bg-none" data-aos="zoom-in-up"> Multiple</label> <br />
				</div>
				<div class="row  pt-10 date-time-sec">
					<div class="row single_day" style="display:none;">
						<div class="col-xs-6" data-aos="fade-up">
							<label for="select_day_date">Select Date</label>
						</div>
						<div class="col-xs-6" data-aos="fade-up">
							<input type="date" name="single_day_date" placeholder="select Date" onChange="calculate_singledays()" id="select_day_date" required>
						</div>
					</div>
					<!-- date -->
					<div class="row multi_day" style="display:none">
						<div class="col-xs-6" data-aos="fade-up">
							<label for="from_date">Select From Date *</label>
						</div>
						<div class="col-xs-6" data-aos="fade-up">
							<input type="date" name="from_date" onChange="calculate_days()" id="from" >
						</div>
					</div>
					<div class="row multi_day" style="display:none">
						<div class="col-xs-6" data-aos="fade-up">
							<label for="to_date">Select To Date *</label>
						</div>
						<div class="col-xs-6" data-aos="fade-up">
							<input type="date" name="to_date" id="to" onChange="calculate_days()" >
						</div>
					</div>
					<!-- time -->
					<div class="row">
						<div class="col-xs-6" data-aos="fade-up">
							<label for="from_time">Select From Time *</label>
						</div>
						<div class="col-xs-6" data-aos="fade-up">
							<input type="time" onChange="calculate_time()" onKeyup="calculate_time()" name="from_time" id="from_time" required>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6" data-aos="fade-up">
							<label for="to_time">Select To Time *</label>
						</div>
						<div class="col-xs-6" data-aos="fade-up">
							<input type="time" onChange="calculate_time()" onKeyup="calculate_time()" name="to_time" id="to_time" required>
						</div>
					</div>

					<div class="col-xs-12 pt-10" data-aos="fade-up">
						<span id="err_hour"> </span>
						<h6>Total time: <span id="total_hours">0</span> hours <span id="total_min">0</span> minutes / <span id="no_of_days">0</span> Days</h6>
					</div>
				</div>
			</div>
		</section>
		<section class="bgprimary pb-20 pt-20 duration-sec vet-info-sec">
			<div class="">
				<h2 data-aos="zoom-in-up" class="white-heading">
					VET INFO
				</h2>
				<div class="row pt-20 fet_info_wrapper boarding-set-req">
					<div class="col-xs-12 form-feilds" data-aos="fade-up">
						<label for="r_vet">Regular Vet *</label>
						<input type="text" name="regular_vet" id="r_vet" required>
					</div>
					<div class="col-xs-12 form-feilds" data-aos="fade-up">
						<label for="cont">Contact *</label>
						<input type="text" name="regular_vet_contact" id="cont" required>
					</div>
					<div class="col-xs-12 form-feilds" data-aos="fade-up">
						<label for="address1">Address</label>
						<input type="text" name="regular_vet_address" id="address1">
					</div>
					<div class="col-xs-12 form-feilds" data-aos="fade-up">
						<label for="emer_vet">Emergency Vet *</label>
						<input type="text" name="emergency_vet" id="emer_vet" required>
					</div>
					<div class="col-xs-12 form-feilds" data-aos="fade-up">
						<label for="contact2">Contact *</label>
						<input type="text" name="emergency_vet_contact" id="contact2" required>
					</div>
					<div class="col-xs-12 form-feilds" data-aos="fade-up">
						<label for="adress_2">Address</label>
						<input type="text" name="emergency_vet_address" id="adress_2">
					</div>
				</div>
			</div>
		</section>
		<div class="container checkboxReq" data-aos="fade-up">
			<div class="all-read-sec">
				<input type="checkbox" id="tandc" name="terms" required>
				<label for="tandc"> I certify that all the information provided in this
					form is true and accurate to the best of my
					knowledge.</label><br>
			</div>
		</div>
		<div class="text-center pt-30 pb-10" data-aos="zoom-in-up">
			<button class="button-5" role="button" type="submit">Submit</button>
		</div>
		<div class="text-center pt-10 pb-15 dekstop-footer">
			<img src="<?= base_url() ?>assets/img/rashu/footer.png" width="100%">
		</div>
	</form>
	<?php include('includes/footer.php'); ?>
	<!-- <script src="<?= base_url() ?>assets/parsley.min.js"></script> -->

	<!-- validation init -->
	<script src="<?= base_url() ?>assets/form-validation.init.js"></script>

	<script>
		$(document).ready(function() {
			// $("#validate_form").parsley();

			// $("#validate_form").on("submit", function(event) {
			// 	event.preventDefault();
			// 	if ($("#validate_form").parsley().isValid()) {
			// 		$.ajax({
			// 			url: "action.php",
			// 			method: "POST",
			// 			data: $(this).serialize(),
			// 			beforeSend: function() {
			// 				$("#submit").attr("disabled", "disabled");
			// 				$("#submit").val("Submitting...");
			// 			},
			// 			success: function(data) {
			// 				$("#validate_form")[0].reset();
			// 				$("#validate_form").parsley().reset();
			// 				$("#submit").attr("disabled", false);
			// 				$("#submit").val("Submit");
			// 				alert(data);
			// 			},
			// 		});
			// 	}
			// });
		});
	</script>
</body>

</html>
