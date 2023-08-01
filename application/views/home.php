<?php include('includes/header.php'); ?>

<body>
	<!---->
	<form action="<?= base_url('Home/booking?tag=grooming&pet=' . ((isset($_GET['pet'])) ? (($_GET['pet'] == 'CATS') ? 'CATS' : 'DOGS') : 'DOGS')) ?>" enctype="multipart/form-data" method="post" class="custom-validation">
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
		<section class="parent-form">
			<div class="pt-10 pb-10 ">
				<h2 class="text-center cprimary" data-aos="zoom-in-up">TODAY MY SPA INCLUDES</h2>
			</div>
		</section>
		<section class="form-dtls pt-40 pb-40">
			<div class="container">
				<div class="top-header">
					<input type="radio" id="myCheckbox1" name="spa_includes" value="WASH AND GO" class="chb opacity-0 chb-3 kennel" title="Services" required>
					<label for="myCheckbox1" class="biglabel" data-aos="zoom-in-up"> WASH AND GO</label>
					<!-- <span class="biglabel" data-aos="zoom-in-up"></span> -->
					<img src="<?= base_url() ?>assets/img/rashu/Vector Smart Object-3.png" class="washgo-img" data-aos="zoom-in-up">
				</div>
				<div class="row pt-20">
					<div class="col-xs-6" data-aos="fade-up">
						<h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/shape-11.png" class="smimg" /> <span>Nail
								Clipping
							</span></h4>
					</div>
					<div class="col-xs-6" data-aos="fade-up">
						<h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/shape-11.png" class="smimg" /> <span>Quick
								Brush &
								Fluff
							</span></h4>
					</div>
					<div class="col-xs-6" data-aos="fade-up">
						<h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/shape-11.png" class="smimg" /> <span>Shampoo
								&
								Conditioner
							</span></h4>
					</div>
					<div class="col-xs-6" data-aos="fade-up">
						<h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/shape-11.png" class="smimg" /> <span>Ear
								Cleaning/
								Hair Plucking
							</span></h4>
					</div>
				</div>
			</div>
		</section>
		<section class="bgprimary pb-40 pt-40">
			<div class="container">
				<div class="top-header">
					<input type="radio" id="myCheckbox2" name="spa_includes" value="TYCOON BATH" class="chb opacity-0 chb-3 kennel" title="Services">
					<label for="myCheckbox2" class="biglabel" data-aos="zoom-in-up">TYCOON BATH</label>
					<!-- <span class="biglabel" data-aos="zoom-in-up"></span> -->
					<img src="<?= base_url() ?>assets/img/rashu/Vector Smart Object-5.png" class="washgo-img" data-aos="zoom-in-up">
				</div>
				<div class="row pt-20">
					<div class="col-xs-6" data-aos="fade-up">
						<h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/shape-11.png" class="smimg" /> <span>Nail
								Clipping
							</span></h4>
					</div>
					<div class="col-xs-6" data-aos="fade-up">
						<h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/shape-11.png" class="smimg" /> <span>
								Brush &
								Fluff
							</span></h4>
					</div>
					<div class="col-xs-6" data-aos="fade-up">
						<h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/shape-11.png" class="smimg" /> <span>Shampoo
								&
								Conditioner
							</span></h4>
					</div>
					<div class="col-xs-6" data-aos="fade-up">
						<h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/shape-11.png" class="smimg" /> <span>Ear
								Cleaning/
								Hair Plucking
							</span></h4>
					</div>
					<div class="col-xs-6" data-aos="fade-up">
						<h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/shape-11.png" class="smimg" /> <span>Stylish
								Haircut
							</span></h4>
					</div>
					<div class="col-xs-6" data-aos="fade-up">
						<h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/shape-11.png" class="smimg" /> <span>Anal
								expression
								(upon request)
							</span></h4>
					</div>
				</div>
			</div>
		</section>
		<section class="form-dtls pb-40 pt-40">
			<div class="container">
				<div class="top-header">
					<input type="radio" id="myCheckbox3" name="spa_includes" value="CUT & GO" class="chb opacity-0 chb-3 kennel" title="Services">
					<label for="myCheckbox3" class="biglabel" data-aos="zoom-in-up">CUT & GO</label>
					<!-- <span class="biglabel" data-aos="zoom-in-up"></span> -->
					<img src="<?= base_url() ?>assets/img/rashu/Shape 21.png" class="washgo-img" data-aos="zoom-in-up">
				</div>
				<div class="row pt-20">
					<div class="col-xs-6" data-aos="fade-up">
						<h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/shape-11.png" class="smimg" /> <span>Nail
								Clipping
							</span></h4>
					</div>
					<div class="col-xs-6" data-aos="fade-up">
						<h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/shape-11.png" class="smimg" /> <span> Stylish
								Haircut
							</span></h4>
					</div>
					<div class="col-xs-6" data-aos="fade-up">
						<h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/shape-11.png" class="smimg" /> <span>Quick
								Brush &
								Fluff
							</span></h4>
					</div>
					<div class="col-xs-6" data-aos="fade-up">
						<h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/shape-11.png" class="smimg" /> <span>Ear
								Cleaning/
								Hair Plucking
							</span></h4>
					</div>
				</div>
			</div>
		</section>
		<!-- other services -->
		<div class="other-services-sec">
			<h2 data-aos="zoom-in-up">
				<img src="<?= base_url() ?>assets/img/shape/shape-13.png" alt="shape" />
				Other Services
				<img src="<?= base_url() ?>assets/img/shape/shape-13.png" alt="shape" />
			</h2>
			<div class="InputGroup res-input-g our-service">
				<div class="container">
					<div class="row">
						<div class="col-xs-6" data-aos="fade-up">
							<input type="checkbox" class="otherservice" name="other_services[]" id="eye_cleaning" value="Eyes Cleaning" />
							<label for="eye_cleaning">
								<img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								Eyes Cleaning</label>
						</div>
						<div class="col-xs-6" data-aos="fade-up">
							<input type="checkbox" class="otherservice" name="other_services[]" id="anal_expression" value="Anal Expression" />
							<label for="anal_expression"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								Anal Expression</label>
						</div>
						<div class="col-xs-6" data-aos="fade-up">
							<input type="checkbox" class="otherservice" name="other_services[]" id="teeth_brushing" value="teeth-brushing" />
							<label for="teeth_brushing"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								Teeth Brushing</label>
						</div>
						<div class="col-xs-6" data-aos="fade-up">
							<input type="checkbox" class="otherservice" name="other_services[]" id="de_shedding" value="de shedding" />
							<label for="de_shedding"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								De-shedding</label>
						</div>
						<div class="col-xs-6" data-aos="fade-up">
							<input type="checkbox" class="otherservice" name="other_services[]" id="ticks_fleas_tratment" value="Ticks & Fleas Treatment" />
							<label for="ticks_fleas_tratment"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								Ticks & <br> Fleas Treatment</label>
						</div>
						<div class="col-xs-6" data-aos="fade-up">
							<input type="checkbox" class="otherservice" name="other_services[]" id="ear_cleaning" value="Ear Cleaning" />
							<label for="ear_cleaning"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								Ear Cleaning</label>
						</div>
						<div class="col-xs-6" data-aos="fade-up">
							<input type="checkbox" class="otherservice" name="other_services[]" id="nail_clipping" value="Nail Clipping" />
							<label for="nail_clipping"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								Nail Clipping</label>
						</div>
						<div class="col-xs-6" data-aos="fade-up">
							<input type="checkbox" class="otherservice" name="other_services[]" id="de_matting" value="de matting" />
							<label for="de_matting"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								De-matting</label>
						</div>
						<div class="col-xs-6" data-aos="fade-up">
							<input type="checkbox" class="otherservice" name="other_services[]" id="quick_trimp" value="quick trimp" />
							<label for="quick_trimp"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								Quick Trim <br>
								(Face, Paw,Bum)</label>
						</div>
						<div class="col-xs-6">
							<div class="other-s-shape">
								<img src="<?= base_url() ?>assets/img/shape/shape-15.png" alt="shape" class="img-1">
								<img src="<?= base_url() ?>assets/img/shape/shape-15.png" alt="shape" class="img-2">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<!-- pet ski & Hair -->
		<div class="pet-skin-sec pt-30">
			<div class="container">
				<div class="col-xs-6">
					<h2>
						<img src="<?= base_url() ?>assets/img/shape/shape-17.png" alt="shape" />
						MY SKIN
					</h2>
					<div class="row">
						<div class="col-xs-12" data-aos="fade-up">
							<input type="radio" name="my_skin" class="opacity-0" id="normal" value="normal" />
							<label for="normal">
								<img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								Normal</label>
						</div>
						<div class="col-xs-12" data-aos="fade-up">
							<input type="radio" name="my_skin" class="opacity-0" id="Dandruff" value="Dandruff" />
							<label for="Dandruff"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								Dandruff</label>
						</div>
						<div class="col-xs-12" data-aos="fade-up">
							<input type="radio" name="my_skin" class="opacity-0" id="allergy" value="Allergy" />
							<label for="allergy"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								Allergy</label>
						</div>
						<div class="col-xs-12" data-aos="fade-up">
							<input type="radio" name="my_skin" class="opacity-0" id="ticks_Fleas" value="Ticks & Fleas" />
							<label for="ticks_Fleas"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								Ticks & Fleas</label>
						</div>
						<div class="col-xs-12" data-aos="fade-up"><br>
						<label onclick="resetall('my_skin')" style="cursor:pointer;border:none">Clear selection</label>
							</div>
						<!-- <div class="col-xs-12" data-aos="fade-up">
                            <input type="radio" name="my_skin" id="only_trimming" value="Only Trimming" />
                            <label for="only_trimming"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Only Trimming</label>
                        </div> -->
					</div>
				</div>
				<div class="col-xs-6">
					<h2>
						<img src="<?= base_url() ?>assets/img/shape/shape-18.png" alt="shape" />
						MY HAIRCUT

					</h2>
					<div class="row">
						<input type="radio" name="haircut_size" value="" class="opacity-0" style="position:absolute;">

						<?php
						$Haircut = getAllRow('haircut');
						foreach ($Haircut as $hair) {
						?>
							<div class="col-xs-12" data-aos="fade-up">
								<input type="radio" name="haircut" class="haircutBtn opacity-0" data-id="<?= $hair['hid'] ?>" id="<?= $hair['hid'] ?>" value="<?= $hair['haircut'] ?>" />
								<label for="<?= $hair['hid'] ?>">
									<img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
									<?= $hair['haircut'] ?></label>
								<div class="row haircut-<?= $hair['hid'] ?>" style="display:none;">
									<?php
									$shortHaircut = getRowById('haircut_type', 'haircut',  $hair['hid']);
									if ($shortHaircut != '') {
										foreach ($shortHaircut as $short) {
									?>
											<div class="col-xs-6">
												<div class="hair-size">
													<input type="radio" id="short<?= $short['tid'] ?>" name="haircut_size" value="<?= $short['haircut_type'] ?>" class="hairgrp opacity-0 hairgrp<?= $hair['hid'] ?>">
													<label for="short<?= $short['tid'] ?>"><?= $short['haircut_type'] ?> </label><br>
												</div>
											</div>
									<?php
										}
									}
									?>
								</div>
							</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<!-- My nails -->
		<!-- other services -->
		<div class="other-services-sec nails-sec pt-20">
			<img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" class="shape-11" />
			<img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" class="shape-22" />
			<img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" class="shape-33" />
			<h2 data-aos="zoom-in-up">
				<img src="<?= base_url() ?>assets/img/shape/shape-15.png" alt="shape" />
				MY NAILS
			</h2>
			<div class="InputGroup res-input-g our-service">
				<div class="container">
					<div class="row">
						<div class="col-xs-6" data-aos="fade-up">
							<input type="radio" name="nails" id="short" class="opacity-0" value="Short" />
							<label for="short">
								<img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								Short</label>
						</div>
						<div class="col-xs-6" data-aos="fade-up">
							<input type="radio" name="nails" id="medium" class="opacity-0"  value="Medium" />
							<label for="medium"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								Medium</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Mood during bath -->
		<div class="other-services-sec mood-bath pt-30">
			<h2 data-aos="zoom-in-up">
				<img src="<?= base_url() ?>assets/img/shape/shape-20.png" alt="shape" />
				MY MOOD DURING BATH
				<img src="<?= base_url() ?>assets/img/shape/shape-21.png" alt="shape" />
			</h2>
			<div class="InputGroup res-input-g our-service">
				<div class="container">
					<div class="row">
						<div class="col-xs-6" data-aos="fade-up">
							<input type="checkbox" class="otherservice" name="mood_during_bath[]" id="happy" value="Happy" />
							<label for="happy">
								<img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								Happy</label>
						</div>
						<div class="col-xs-6" data-aos="fade-up">
							<input type="checkbox" class="otherservice" name="mood_during_bath[]" id="stressed" value="Stressed" />
							<label for="stressed"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								Stressed</label>
						</div>
						<div class="col-xs-6" data-aos="fade-up">
							<input type="checkbox" class="otherservice" name="mood_during_bath[]" id="scared" value="scared" />
							<label for="scared"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								Scared</label>
						</div>
						<div class="col-xs-6" data-aos="fade-up">
							<input type="checkbox" class="otherservice" name="mood_during_bath[]" id="calm" value="Calm" />
							<label for="calm"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								Calm</label>
						</div>
						<div class="col-xs-6" data-aos="fade-up">
							<input type="checkbox" class="otherservice" name="mood_during_bath[]" id="anxious" value="Anxious" />
							<label for="anxious"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								Anxious</label>
						</div>
						<div class="col-xs-6" data-aos="fade-up">
							<input type="checkbox" class="otherservice" name="mood_during_bath[]" id="agressive" value="Agressive" />
							<label for="agressive"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
								Agressive</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container checkboxReq" data-aos="fade-up">
			<div class="all-read-sec">
				<input type="checkbox" id="tandc" name="terms" required>
				<label for="tandc"> I certify that all the information provided in this
					form is true and accurate to the best of my
					knowledge.</label><br>
			</div>
		</div>
		<div class="text-center pt-30 pb-10" data-aos="zoom-in-up">
			<button class="button-5" type="submit">Submit</button>
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
			//     console.log('asdd');
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
			// 	}else{
			// 	    $(".parsley-id-multiple-haircut_size parsley-errors-list parsley-required").html("Lenght is required");
			// 	}
			// });
		});
		function resetall(name){
        // Get all radio buttons in the group and uncheck them
        $('input[name="'+name+'"]').prop("checked", false);
      }
	</script>

</body>

</html>