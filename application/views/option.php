<div class="InputGroup pet-buttons">
	<input type="radio" name="pet_type"  class="opacity-0"  id="type_1" value="DOGS" <?= ((isset($_GET['pet'])) ? (($_GET['pet'] == 'DOGS') ? 'checked' : '') : 'checked') ?> />
	<label for="type_1" data-aos="fade-right">
		<img src="assets/img/shape/shape-7.png" alt="shape" class="dog-img-1" />
		<img src="assets/img/shape/shape-22.png" alt="shape" class="dog-img-2" />
		DOGS
	</label>
	<input type="radio" name="pet_type" id="type_2"  class="opacity-0"  value="CATS" <?= ((isset($_GET['pet'])) ? (($_GET['pet'] == 'CATS') ? 'checked' : '') : '') ?> />
	<label for="type_2" data-aos="fade-left">
		<img src="assets/img/shape/shape-6.png" alt="shape" class="cat-img-1" />
		<img src="assets/img/shape/cat-white.png" alt="shape" class="cat-img-2" />
		CATS</label>
</div>
<div class="InputGroup res-input-g mt-5">
	<a href="<?= base_url() ?><?= ((isset($_GET['pet'])) ? (($_GET['pet'] == 'CATS') ? '?pet=CATS' : '') : '') ?>" <?= ($tag == 'grooming') ? 'class="btn-active"' : '' ?>>
		<img src="assets/img/shape/shape-1-white.png" alt="shape" class="grom-img-2" />
		<img src="assets/img/shape/shape-1.png" alt="shape" class="grom-img-1" />
		Grooming
	</a>
	<a href="<?= base_url('boarding') ?><?= ((isset($_GET['pet'])) ? (($_GET['pet'] == 'CATS') ? '?pet=CATS' : '') : '') ?>" <?= ($tag == 'boarding') ? 'class="btn-active"' : '' ?>>
		<img src="assets/img/shape/shape-2-white.png" class="boarding-img-2" alt="shape" />
		<img src="assets/img/shape/shape-2.png" alt="shape" class="boarding-img-1" />
		Boarding</label>
	</a>
	<a href="<?= base_url('day-care') ?><?= ((isset($_GET['pet'])) ? (($_GET['pet'] == 'CATS') ? '?pet=CATS' : '') : '') ?>" <?= ($tag == 'daycare') ? 'class="btn-active"' : '' ?>>

		<img src="assets/img/shape/shape-3-yellow.png" alt="shape" class="daycare-img-1" />
		<img src="assets/img/shape/shape-3.png" alt="shape" class="daycare-img-2" />
		Day
		Care</label>
	</a>
</div>