<?php $this->load->view('includes/admin_header'); ?>
<div class="holder">
    <?php $this->load->view('includes/menu'); ?>
    <div class="wrapper">
        <?php $this->load->view('includes/top-header'); ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 mb-4 col-lg-6 col-xl-4 mb-4">
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
                    <div class="col-6 mb-4">
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
                    <div class="col-6 mb-4">
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
                    if ($tag == 'grooming') {
                    ?>
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-header ">
                                    <h5 class="card-title">Grooming details</h5>
                                </div>
                                <div class="card-body row">
                                    <p class="card-text col-xs-2 col-md-2"><b>Spa includes:</b><br> <?= $service_details['spa_includes'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Other Services:</b><br> <?= implode(',', json_decode($service_details['other_services'], true)) ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>My skin:</b><br> <?= $service_details['my_skin'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Haircut:</b><br> <?= $service_details['haircut'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Haircut Size:</b><br> <?= $service_details['haircut_size'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Nails:</b><br> <?= $service_details['nails'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Mood during bath:</b><br> <?= implode(',', json_decode($service_details['mood_during_bath'], true)) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    } elseif ($tag == 'boarding') {
                    ?>
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-header ">
                                    <h5 class="card-title">Boarding details</h5>
                                </div>
                                <div class="card-body row">
                                    <p class="card-text col-xs-2 col-md-2"><b>Brand name:</b><br> <?= $service_details['brand_name'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Morning amount:</b><br> <?= $service_details['morning_amt'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Affternoon amount:</b><br> <?= $service_details['afternoon_amt'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Evening amount:</b><br> <?= $service_details['evening_amt'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Treats:</b><br> <?= $service_details['treats'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Restrictions:</b><br> <?= $service_details['restrictions'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Medication:</b><br> <?= $service_details['medication'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>From date:</b><br> <?= $service_details['from_date'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>To day:</b><br> <?= $service_details['to_day'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Regular vet:</b><br> <?= $service_details['regular_vet'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Vet contact no.:</b><br> <?= $service_details['regular_vet_contact'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Vet address:</b><br> <?= $service_details['regular_vet_address'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Emergency Vet:</b><br> <?= $service_details['emergency_vet'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Emergency Vet contact no.:</b><br> <?= $service_details['emergency_vet_contact'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Emergency Vet address:</b><br> <?= $service_details['emergency_vet_address'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    } elseif ($tag == 'daycare') {
                    ?>
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-header ">
                                    <h5 class="card-title">Day care details</h5>
                                </div>
                                <div class="card-body row">
                                    <p class="card-text col-xs-2 col-md-2"><b>Likes:</b><br> <?= $service_details['likes'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Dislikes:</b><br> <?= $service_details['dislike'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Place to play:</b><br> <?= $service_details['place_play'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Brand name:</b><br> <?= $service_details['brand_name'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Evening amount:</b><br> <?= $service_details['evening_amt'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Treats:</b><br> <?= $service_details['treats'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Restrictions:</b><br> <?= $service_details['restrictions'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Medication:</b><br> <?= $service_details['medication'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Date range:</b><br> <?= $service_details['select_days'] ?></p>
                                    <?php
                                    if ($service_details['select_days'] == 'Single') {
                                    ?>
                                        <p class="card-text col-xs-2 col-md-2"><b>On Date:</b><br> <?= $service_details['single_day_date'] ?></p>
                                    <?php
                                    } else {
                                    ?>
                                        <p class="card-text col-xs-2 col-md-2"><b>From Date:</b><br> <?= $service_details['from_date'] ?></p>
                                        <p class="card-text col-xs-2 col-md-2"><b>To Date:</b><br> <?= $service_details['to_date'] ?></p>
                                    <?php
                                    }
                                    ?>
                                    <p class="card-text col-xs-2 col-md-2"><b>From Time:</b><br> <?= $service_details['from_time'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>To Time:</b><br> <?= $service_details['to_time'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Regular vet:</b><br> <?= $service_details['regular_vet'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Vet contact no.:</b><br> <?= $service_details['regular_vet_contact'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Vet address:</b><br> <?= $service_details['regular_vet_address'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Emergency Vet:</b><br> <?= $service_details['emergency_vet'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Emergency Vet contact no.:</b><br> <?= $service_details['emergency_vet_contact'] ?></p>
                                    <p class="card-text col-xs-2 col-md-2"><b>Emergency Vet address:</b><br> <?= $service_details['emergency_vet_address'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                    <?php
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