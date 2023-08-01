<?php $this->load->view('includes/admin_header'); ?>
<div class="holder">
    <?php $this->load->view('includes/menu'); ?>
    <div class="wrapper">
        <?php $this->load->view('includes/top-header'); ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12 mb-4">
                        <div class="card">
                            <div class="card-header ">
                                <h5 class="card-title">Owner details: ID <?= $user['owner_contact'] ?></h5>
                            </div>
                            <div class="card-body row">
                                <p class="card-text col-xs-2 col-md-2"><b>Name:</b> <br> <?= $user['owner_name'] ?></p>
                                <p class="card-text col-xs-2 col-md-2"><b>Contact:</b> <br> <?= $user['owner_contact'] ?></p>
                                <p class="card-text col-xs-2 col-md-2"><b>Address:</b> <br> <?= $user['owner_address'] ?></p>
                                <p class="card-text col-xs-2 col-md-2"><b>Facebook:</b> <br> <?= $user['owner_facebook'] ?></p>
                                <p class="card-text col-xs-2 col-md-2"><b>Instagram:</b> <br> <?= $user['owner_instagram'] ?></p>
                                <p class="card-text col-xs-2 col-md-2"><b>Emergency name:</b> <br> <?= $user['emerg_owner_name'] ?></p>
                                <p class="card-text col-xs-2 col-md-2"><b>Emergency contact:</b> <br> <?= $user['emerg_owner_contact'] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i = 1;
                    if ($basic != '') {
                        foreach ($basic as $pet) {
                    ?>
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

                                    </div>

                                </div>
                            </div>
                            <div class="col-5 mb-4">
                                <div class="card">
                                    <div class="card-header ">
                                        <h5 class="card-title">Pet details</h5>
                                    </div>
                                    <div class="card-body row">
                                        <p class="card-text col-xs-3 col-md-3"><b>Type:</b><br> <?= $pet['pet_type'] ?></p>
                                        <p class="card-text col-xs-3 col-md-3"><b>Name:</b><br> <?= $pet['pet_name'] ?></p>
                                        <p class="card-text col-xs-3 col-md-3"><b>Age:</b><br> <?= $pet['pet_age'] ?> Years, <?= $pet['pet_age_month'] ?> Month</p>
                                        <p class="card-text col-xs-3 col-md-3"><b>Gender:</b><br> <?= $pet['pet_gender'] ?></p>
                                        <p class="card-text col-xs-3 col-md-3"><b>Weight:</b><br> <?= $pet['pet_weight'] ?></p>
                                        <p class="card-text col-xs-3 col-md-3"><b>Breed:</b><br> <?= $pet['pet_breed'] ?></p>
                                        <p class="card-text col-xs-3 col-md-3"><b>Microchip no.:</b><br> <?= $pet['pet_microchip_no'] ?></p>
                                        <p class="card-text col-xs-3 col-md-3"><b>Allergies:</b><br> <?= $pet['pet_allergies'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 mb-4">
                                <div class="card">
                                    <div class="card-header ">
                                        <h5 class="card-title">Vaccine details</h5>
                                    </div>
                                    <div class="card-body row">
                                        <p class="card-text col-xs-3 col-md-3"><b>Rabies Vac:</b><br> <?= $pet['pet_is_rabiesVac'] ?></p>
                                        <p class="card-text col-xs-3 col-md-3"><b>Rabies Vac Exp date:</b><br> <?= $pet['pet_rabiesVac_expDate'] ?></p>

                                        <?php
                                        if ($pet['pet_type'] == 'DOGS') {
                                        ?>
                                            <p class="card-text col-xs-3 col-md-3"><b>DHIPPI vac:</b><br> <?= $pet['pet_is_dhippiVac'] ?></p>
                                            <p class="card-text col-xs-3 col-md-3"><b>DHIPPI vac Exp date:</b><br> <?= $pet['pet_dhippiVac_expDate'] ?></p>
                                            <p class="card-text col-xs-3 col-md-3"><b>Kennel Cough Vac:</b><br> <?= $pet['pet_is_kennelCoughVac'] ?></p>
                                            <p class="card-text col-xs-3 col-md-3"><b>Kennel cough vac Exp date:</b><br> <?= $pet['pet_kennelCoughVac_expDate'] ?></p>
                                        <?php
                                        } else {
                                        ?>
                                            <p class="card-text col-xs-3 col-md-3"><b>PHC Vac:</b><br> <?= $pet['pet_is_pchVac'] ?></p>
                                            <p class="card-text col-xs-3 col-md-3"><b>PHC Vac exp date:</b><br> <?= $pet['pet_pchVac_expDate'] ?></p>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="card">
                                    <div class="card-header ">
                                        <h5 class="card-title">Vaccine book list</h5>
                                    </div>
                                    <div class="card-body row">

                                        <?php
                                        $petdata = getRowById('basic_details_vacbook', 'bid', $pet['basic_id']);

                                        if ($petdata != '') {
                                            $i = 1;
                                            foreach ($petdata as $vaccine) {
                                        ?>
                                                <div class="card-text col-xs-3 col-md-3 row ">
                                                    <a href="<?= base_url() ?>uploads/vac/<?= $vaccine['book_nm'] ?>" target="_blank" class="badge badge-info m-1"> Vaccine book #<?= $i++ ?><br><br>(<?= convertDatedmy($vaccine['create_date']) ?>)</a> <br>
                                                    <!-- <a href="<?= base_url('Admindashboard/vac_delete/' . $vaccine['id']) ?>"   class="badge badge-danger m-1" onclick="return confirm('Are you sure to delete this data?')"> Delete</a> -->
                                                </div>


                                        <?php
                                            }
                                        } else {
                                            echo 'No Vac book found';
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>

                    <?php
                        }
                    }
                    ?>


                </div>
            </div>
            <?php $this->load->view('includes/web-footer'); ?>
        </div>
    </div>
    <?php $this->load->view('includes/footer.php') ?>
    <?php $this->load->view('includes/footer-link'); ?>
    </body>

    </html>