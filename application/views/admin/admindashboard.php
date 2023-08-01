<?php $this->load->view('includes/admin_header'); ?>
<style>
	.ajax.badge-notification i {
		width: 100px;
		display: inline-block;
		text-align: center;
		vertical-align: middle;
		position: relative;
	}

	.badge-notification .badge:after {
		content: "100";
		position: absolute;
		background: blue;
		height: 2rem;
		top: 1rem;
		right: 1.5rem;
		width: 2rem;
		text-align: center;
		line-height: 2rem;
		font-size: 1rem;
		border-radius: 50%;
		color: white;
		border: 1px solid blue;
	}

	.ex3 .fa-stack[data-count]:after {
		position: absolute;
		right: 0%;
		top: 1%;
		height: 3rem;
		width: 3rem;
		content: attr(data-count);
		font-size: 30%;
		padding: .6em;
		border-radius: 50%;
		line-height: .8em;
		color: white;
		background: rgba(255, 0, 0, 0.85);
		text-align: center;
		/* min-width: 1em; */
		font-weight: bold;
	}
</style>
<div class="holder">
	<?php $this->load->view('includes/menu'); ?>
	<div class="wrapper">
		<?php $this->load->view('includes/top-header'); ?>
		<div class="content">
			<div class="container-fluid">

				<div class="row">
					<div class="col-sm-4 col-md-4 col-xl-4">
						<div class="portlet">
							<a href="<?= base_url('AdminDashboard/grooming_details?notification=enable') ?>">
								<div class="card text-center">
									<div class="card-body">
										<div class="ex3">
											<span class="p1 fa-stack fa-5x has-badge" data-count="<?= $grooming_count ?>">
												<i class="p2 fa fa-circle fa-stack-2x" style="color:#65c4ae "></i>
												<i class="p3 fa-stack-1x fa-inverse" data-count="5">
													<img src="<?= base_url('assets/img/shape/shape-1-white.png') ?>" class="m-2" style="height:70px;"/>
												</i>
											</span>
										</div>
										<h2 class="text-dark">Grooming</h2>
										<hr>
										<!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
										<!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
										<a href="#" class="card-link">Total query: </a>
										<a href="#" class="card-link badge badge-warning"> <?= $total_grooming_count ?></a>
									</div>
								</div>
						</div>
						</a>
					</div>
					<div class="col-sm-4 col-md-4 col-xl-4">
						<div class="portlet">
							<a href="<?= base_url('AdminDashboard/boarding_details?notification=enable') ?>">
								<div class="card text-center">
									<div class="card-body">
										<div class="ex3">
											<span class="p1 fa-stack fa-5x has-badge" data-count="<?= $boarding_count ?>">
												<i class="p2 fa fa-circle fa-stack-2x" style="color:#65c4ae "></i>
												<i class="p3 fa-stack-1x fa-inverse" data-count="5">
													<img src="<?= base_url('assets/img/shape/shape-2-white.png') ?>" class="m-2" style="height:60px;" />
												</i>
											</span>
										</div>
										<h2 class="text-dark"> Boarding</h2>
										<hr>
										<!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
										<!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
										<a href="#" class="card-link">Total query: </a>
										<a href="#" class="card-link badge badge-warning"> <?= $total_boarding_count ?></a>
									</div>
								</div>
						</div>
						</a>
					</div>
					<div class="col-sm-4 col-md-4 col-xl-4">
						<div class="portlet">
							<a href="<?= base_url('AdminDashboard/day_care_details?notification=enable') ?>">
								<div class="card text-center">
									<div class="card-body">
										<div class="ex3">
											<span class="p1 fa-stack fa-5x has-badge" data-count="<?= $daycare_count ?>">
												<i class="p2 fa fa-circle fa-stack-2x" style="color:#65c4ae "></i>
												<i class="p3 fa-stack-1x fa-inverse" data-count="5">
													<img src="<?= base_url('assets/img/shape/shape-3.png') ?>" class="m-2" style="height:70px;" />
												</i>
											</span>
										</div>
										<h2 class="text-dark"> Day care</h2>
										<hr>
										<!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
										<!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
										<a href="#" class="card-link">Total query: </a>
										<a href="#" class="card-link badge badge-warning"> <?= $total_daycare_count ?></a>
									</div>
								</div>
							</a>
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
<script>
	function eatsnack(msg) {
		var x = document.getElementById("snackbar");
		x.className = "show";
		$('#snackbar').text(msg);
		setTimeout(function() {
			x.className = x.className.replace("show", "");
		}, 3000);
	}
	$('.done').click(function() {
		var id = $(this).data('id');
		if ($('#feat' + id).is(":checked")) {
			var status = '1';
		} else {
			var status = '0';
		}
		$.ajax({
			method: "POST",
			url: "<?= base_url() ?>AdminDashboard/updateappdoned",
			data: {
				id: id,
				status: status
			},
			success: function(response) {
				console.log(response);
				if (response == 0) {
					eatsnack('Not done updated');
				} else if (response == 1) {
					eatsnack('Congratulation , Completed Task');
				} else if (response == 2) {
					eatsnack('Server Error');
				}
			}
		});
	});
</script>
</body>

</html>
