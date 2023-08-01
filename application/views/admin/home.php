<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Oh My Pet</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/style.css" />
    <link rel="icon" href="<?= base_url() ?>assets/favicon.ico" type="image/x-icon" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/muskan.css">
</head>
<body>
    <form action>
        <header class="head-img-shape">
            <div class="logoo">
                <a href="#"><img src="<?= base_url() ?>assets/img/logo.png" alt="Oh My Pet Logo" /></a>
            </div>
            <div class="InputGroup pet-buttons">
                <input type="radio" name="pet_type" id="type_1" value="DOGS" checked />
                <label for="type_1">
                    <img src="<?= base_url() ?>assets/img/shape/shape-7.png" alt="shape" />
                    DOGS</label>
                <input type="radio" name="pet_type" id="type_2" value="CATS" />
                <label for="type_2"><img src="<?= base_url() ?>assets/img/shape/shape-6.png" alt="shape" class="p-2" /> CATS</label>
            </div>
            <div class="InputGroup res-input-g">
                <input type="radio" name="size" id="size_1" value="small" />
                <label for="size_1">
                    <img src="<?= base_url() ?>assets/img/shape/shape-1.png" alt="shape" />
                    Grooming</label>
                <input type="radio" name="size" id="size_2" value="small" />
                <label for="size_2"><img src="<?= base_url() ?>assets/img/shape/shape-2.png" alt="shape" class="p-2"/>
                    Boarding</label>
                <input type="radio" name="size" id="size_3" value="small" checked />
                <label for="size_3"><img src="<?= base_url() ?>assets/img/shape/shape-3.png" alt="shape" class="p-2"/> Day
                    Care</label>
            </div>
        </header>
        <div class="id-sec">
            <label for="id">MY ID</label>
            <input type="text" id="id" placeholder="Mobile Number" />
        </div>
        <!-- pet details -->
        <div class="form-dtls">
            <!-- image upload -->
            <div class="img-upload">
                <div class="container-1">
                    <label class="label" for="file">
                        <div class="uploader">
                            <img src="<?= base_url() ?>assets/img/shape/shape-8.png" alt="shape" />
                        </div>
                    </label>
                    <div class="input">
                        <input name="profile" id="file" type="file" />
                    </div>
                </div>
            </div>
            <div class="form-feilds">
                <label for>Name</label>
                <input type="text" id />
            </div>
            <div class="form-feilds res-mb-0">
                <label for>Age</label>
                <input type="text" id />
            </div>
            <div class="form-feilds">
                <label for>Gender</label>
                <div class="radio-with-Icon">
                    <p class="radioOption-Item">
                        <input type="radio" name="BannerTypes" id="BannerType1" value="true"
                            class="ng-valid ng-dirty ng-touched ng-empty" aria-invalid="false" />
                        <label for="BannerType1">
                            <img src="<?= base_url() ?>assets/img/shape/shape-9.png" alt="Geder icon" />
                            <span>Male</span>
                        </label>
                    </p>
                    <p class="radioOption-Item">
                        <input type="radio" name="BannerTypes" id="BannerType2" value="false"
                            class="ng-valid ng-dirty ng-touched ng-empty" aria-invalid="false" />
                        <label for="BannerType2">
                            <img src="<?= base_url() ?>assets/img/shape/shape-10.png" alt="Geder icon" />
                            <span>Female</span>
                        </label>
                    </p>
                </div>
            </div>
            <div class="form-feilds">
                <label for>Weight</label>
                <input type="text" id />
            </div>
            <div class="form-feilds">
                <label for>Breed</label>
                <input type="text" id />
            </div>
            <div class="form-feilds">
                <label for>Microchip No</label>
                <input type="text" id />
            </div>
            <div class="form-feilds">
                <label for>Allergies</label>
                <input type="text" id />
            </div>
        </div>
        <!-- vac-forms -->
        <div class="form-rabies">
            <div class="container">
                <div class="rab-vac-sec">
                    <div class="rab-checkbox">
                        <!-- One -->
                        <h3>Rabies Vac</h3>
                        <input type="checkbox" id="Rabies Vac" class="chb chb-1" name="rabies_vac" value="Yes" />
                        <label for="Rabies Vac"> Yes</label>
                        <input type="checkbox" id="Rabies Vac-1" class="chb chb-2" name="rabies_vac" value="No" />
                        <label for="Rabies Vac-1"> No</label> <br />
                        <div class="vac-date-div">
                            <label for="rabies_vac_date">Ex Date : </label>
                            <input type="date" name="rabies_vac_date" id="rabies_vac_date" class="date_wrapper" />
                            <span class="date-placeholder">DD-MM-YYYY</span>
                        </div>
                        <!-- two -->
                        <h3>DHPPI Vac</h3>
                        <input type="checkbox" id="DHPPI Vac" class="chb chb-1" name="dhppi_vac" value="Yes" />
                        <label for="DHPPI Vac"> Yes</label>
                        <input type="checkbox" id="dhppi Vac-1" class="chb chb-2" name="dhppi_vac" value="No" />
                        <label for="dhppi Vac-1"> No</label> <br />
                        <div class="vac-date-div d-none">
                            <label for="rabies_vac_date">Ex Date : </label>
                            <input type="date" name="rabies_vac_date" id="rabies_vac_date" class="date_wrapper" />
                            <span class="date-placeholder">DD-MM-YYYY</span>
                        </div>
                        <!-- THree -->
                        <h3>Kennel Cough Vac</h3>
                        <input type="checkbox" id="Kennel Cough Vac" class="chb chb-1" name="kennel_vac" value="Yes" />
                        <label for="Kennel Cough Vac"> Yes</label>
                        <input type="checkbox" id="Kennel Vac-1" class="chb chb-2" name="kennel_vac" value="No" />
                        <label for="Kennel Vac-1"> No</label> <br />
                        <div class="vac-date-div d-none">
                            <label for="rabies_vac_date">Ex Date : </label>
                            <input type="date" name="rabies_vac_date" id="rabies_vac_date" class="date_wrapper" />
                            <span class="date-placeholder">DD-MM-YYYY</span>
                        </div>
                    </div>
                    <!-- image upload -->
                    <div class="img-upload">
                        <div class="container-1 pt-57">
                            <label class="label" for="file">
                                <div class="uploader">
                                    <img src="<?= base_url() ?>assets/img/shape/upload-book.png" alt="shape" />
                                </div>
                            </label>
                            <div class="input">
                                <input name="profile" id="file" type="file" />
                            </div>
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
                <h2 class="text-center cprimary">PARENT DETAILS</h2>
                <!-- Rest of your content -->
                <img src="<?= base_url() ?>assets/img/rashu/Shape 19.png">
                <div class="pt-10 pb-10">
                    <div class="form-feilds">
                        <label class="cgrey" for>Name</label>
                        <input type="text" id>
                    </div>
                    <div class="form-feilds">
                        <label class="cgrey" for>Phone</label>
                        <input type="text" id>
                    </div>
                    <div class="form-feilds">
                        <label class="cgrey" for>Address</label>
                        <input type="text" id>
                    </div>
                    <div class="form-feilds">
                        <label class="cgrey" for>Facebook</label>
                        <input type="text" id>
                    </div>
                    <div class="form-feilds">
                        <label class="cgrey" for>Instagram</label>
                        <input type="text" id>
                    </div>
                </div>
                <h2 class="text-center cprimary">TODAY MY SPA INCLUDES</h2>
            </div>
        </section>
        <section class="form-dtls pb-40 pt-40">
            <div class="container">
                <div class="top-header">
                    <input type="checkbox" id="myCheckbox" name="myCheckbox" class="bigcheckbox">
                    <span class="biglabel">WASH AND GO</span>
                    <img src="<?= base_url() ?>assets/img/rashu/Vector Smart Object-3.png" class="washgo-img">
                </div>
                <div class="row pt-20">
                    <div class="col-xs-6">
                        <h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/Shape 18.png" class="smimg" /> <span>Nail
                                Clipping
                            </span></h4>
                    </div>
                    <div class="col-xs-6">
                        <h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/Shape 18.png" class="smimg" /> <span>Quick
                                Brush &
                                Fluff
                            </span></h4>
                    </div>
                    <div class="col-xs-6">
                        <h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/Shape 18.png" class="smimg" /> <span>Shampoo
                                &
                                Conditioner
                            </span></h4>
                    </div>
                    <div class="col-xs-6">
                        <h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/Shape 18.png" class="smimg" /> <span>Ear
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
                    <input type="checkbox" id="myCheckbox" name="myCheckbox" class="bigcheckbox">
                    <span class="biglabel">TYCOON BATH</span>
                    <img src="<?= base_url() ?>assets/img/rashu/Vector Smart Object-5.png" class="washgo-img">
                </div>
                <div class="row pt-20">
                    <div class="col-xs-6">
                        <h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/Shape 18.png" class="smimg" /> <span>Nail
                                Clipping
                            </span></h4>
                    </div>
                    <div class="col-xs-6">
                        <h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/Shape 18.png" class="smimg" /> <span>
                                Brush &
                                Fluff
                            </span></h4>
                    </div>
                    <div class="col-xs-6">
                        <h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/Shape 18.png" class="smimg" /> <span>Shampoo
                                &
                                Conditioner
                            </span></h4>
                    </div>
                    <div class="col-xs-6">
                        <h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/Shape 18.png" class="smimg" /> <span>Ear
                                Cleaning/
                                Hair Plucking
                            </span></h4>
                    </div>
                    <div class="col-xs-6">
                        <h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/Shape 18.png" class="smimg" /> <span>Stylish
                                Haircut
                            </span></h4>
                    </div>
                    <div class="col-xs-6">
                        <h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/Shape 18.png" class="smimg" /> <span>Anal
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
                    <input type="checkbox" id="myCheckbox" name="myCheckbox" class="bigcheckbox">
                    <span class="biglabel">CUT & GO</span>
                    <img src="<?= base_url() ?>assets/img/rashu/Shape 21.png" class="washgo-img">
                </div>
                <div class="row pt-20">
                    <div class="col-xs-6">
                        <h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/Shape 18.png" class="smimg" /> <span>Nail
                                Clipping
                            </span></h4>
                    </div>
                    <div class="col-xs-6">
                        <h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/Shape 18.png" class="smimg" /> <span> Stylish
                                Haircut
                            </span></h4>
                    </div>
                    <div class="col-xs-6">
                        <h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/Shape 18.png" class="smimg" /> <span>Quick
                                Brush &
                                Fluff
                            </span></h4>
                    </div>
                    <div class="col-xs-6">
                        <h4 class="subheading"> <img src="<?= base_url() ?>assets/img/rashu/Shape 18.png" class="smimg" /> <span>Ear
                                Cleaning/
                                Hair Plucking
                            </span></h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- other services -->
        <div class="other-services-sec">
            <h2>
                <img src="<?= base_url() ?>assets/img/shape/shape-13.png" alt="shape" />
                Other Services
                <img src="<?= base_url() ?>assets/img/shape/shape-13.png" alt="shape" />
            </h2>
            <div class="InputGroup res-input-g our-service">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6">
                            <input type="radio" name="eye_cleaning" id="eye_cleaning" value="Eyes Cleaning" />
                            <label for="eye_cleaning">
                                <img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Eyes Cleaning</label>
                        </div>
                        <div class="col-xs-6">
                            <input type="radio" name="anal_expression" id="anal_expression" value="Anal Expression" />
                            <label for="anal_expression"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Anal Expression</label>
                        </div>
                        <div class="col-xs-6">
                            <input type="radio" name="teeth_brushing" id="teeth_brushing" value="teeth-brushing"
                                checked />
                            <label for="teeth_brushing"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Teeth Brushing</label>
                        </div>
                        <div class="col-xs-6">
                            <input type="radio" name="de_shedding" id="de_shedding" value="de shedding" />
                            <label for="de_shedding"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                De-shedding</label>
                        </div>
                        <div class="col-xs-6">
                            <input type="radio" name="ticks_fleas_tratment" id="ticks_fleas_tratment"
                                value="Ticks & Fleas Treatment" />
                            <label for="ticks_fleas_tratment"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Ticks & <br> Fleas Treatment</label>
                        </div>
                        <div class="col-xs-6">
                            <input type="radio" name="ear_cleaning" id="ear_cleaning" value="Ear Cleaning" checked />
                            <label for="ear_cleaning"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Ear Cleaning</label>
                        </div>
                        <div class="col-xs-6">
                            <input type="radio" name="nail_clipping" id="nail_clipping" value="Nail Clipping" />
                            <label for="nail_clipping"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Nail Clipping</label>
                        </div>
                        <div class="col-xs-6">
                            <input type="radio" name="de_matting" id="de_matting" value="de matting" />
                            <label for="de_matting"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                De-matting</label>
                        </div>
                        <div class="col-xs-6">
                            <input type="radio" name="quick_trimp" id="quick_trimp" value="quick trimp" />
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
        <!-- pet ski & Hair -->
        <div class="pet-skin-sec">
            <div class="container">
                <div class="col-xs-6">
                    <h2>
                        <img src="<?= base_url() ?>assets/img/shape/shape-17.png" alt="shape" />
                        MY SKIN
                    </h2>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="radio" name="normal" id="normal" value="normal" />
                            <label for="normal">
                                <img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Normal</label>
                        </div>
                        <div class="col-xs-12">
                            <input type="radio" name="Dandruff" id="Dandruff" value="Dandruff" />
                            <label for="Dandruff"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Dandruff</label>
                        </div>
                        <div class="col-xs-12">
                            <input type="radio" name="allergy" id="allergy" value="Allergy" checked />
                            <label for="allergy"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Allergy</label>
                        </div>
                        <div class="col-xs-12">
                            <input type="radio" name="ticks_Fleas" id="ticks_Fleas" value="Ticks & Fleas" />
                            <label for="ticks_Fleas"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Ticks & Fleas</label>
                        </div>
                        <div class="col-xs-12">
                            <input type="radio" name="only_trimming" id="only_trimming" value="Only Trimming" />
                            <label for="only_trimming"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Only Trimming</label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <h2>
                        <img src="<?= base_url() ?>assets/img/shape/shape-18.png" alt="shape" />
                        MY HAIRCUT
                    </h2>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="radio" name="eye_cleaning" id="eye_cleaning" value="Eyes Cleaning" checked />
                            <label for="eye_cleaning">
                                <img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Short</label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="hair-size">
                                        <input type="checkbox" id="1st" name="hair_cut_size" value="1.5 mm">
                                        <label for="1st">1.5 mm</label><br>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="hair-size">
                                        <input type="checkbox" id="2nd" name="hair_cut_size" value="3 mm">
                                        <label for="2nd">3 mm</label><br>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="hair-size">
                                        <input type="checkbox" id="third" name="hair_cut_size" value="3.2 mm">
                                        <label for="third">3.2 mm</label><br>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="hair-size">
                                        <input type="checkbox" id="fourth" name="hair_cut_size" value="6 mm">
                                        <label for="1st">6 mm</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <input type="radio" name="anal_expression" id="anal_expression" value="Anal Expression" />
                            <label for="anal_expression"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Medium</label>
                        </div>
                        <div class="col-xs-12">
                            <input type="radio" name="teeth_brushing" id="teeth_brushing" value="teeth-brushing" />
                            <label for="teeth_brushing"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Long</label>
                        </div>
                        <div class="col-xs-12">
                            <input type="radio" name="de_shedding" id="de_shedding" value="de shedding" />
                            <label for="de_shedding"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Scissors</label>
                        </div>
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
            <h2>
                <img src="<?= base_url() ?>assets/img/shape/shape-19.png" alt="shape" />
                MY NAILS
            </h2>
            <div class="InputGroup res-input-g our-service">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6">
                            <input type="radio" name="short" id="short" value="Short" />
                            <label for="short">
                                <img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Short</label>
                        </div>
                        <div class="col-xs-6">
                            <input type="radio" name="medium" id="medium" value="Medium" />
                            <label for="medium"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Medium</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mood during bath -->
        <div class="other-services-sec mood-bath pt-30">
            <h2>
                <img src="<?= base_url() ?>assets/img/shape/shape-20.png" alt="shape" />
                MY MOOD DUPING BATH
                <img src="<?= base_url() ?>assets/img/shape/shape-21.png" alt="shape" />
            </h2>
            <div class="InputGroup res-input-g our-service">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6">
                            <input type="radio" name="happy" id="happy" value="Happy" />
                            <label for="happy">
                                <img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Happy</label>
                        </div>
                        <div class="col-xs-6">
                            <input type="radio" name="stressed" id="stressed" value="Stressed" />
                            <label for="stressed"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Stressed</label>
                        </div>
                        <div class="col-xs-6">
                            <input type="radio" name="scared" id="scared" value="scared" />
                            <label for="scared"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Scared</label>
                        </div>
                        <div class="col-xs-6">
                            <input type="radio" name="calm" id="calm" value="Calm" />
                            <label for="calm"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Calm</label>
                        </div>
                        <div class="col-xs-6">
                            <input type="radio" name="anxious" id="anxious" value="Anxious" />
                            <label for="anxious"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Anxious</label>
                        </div>
                        <div class="col-xs-6">
                            <input type="radio" name="agressive" id="agressive" value="Agressive" />
                            <label for="agressive"><img src="<?= base_url() ?>assets/img/shape/shape-14.png" alt="shape" />
                                Agressive</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="all-read-sec">
                <input type="checkbox" id="tandc" name="terms">
                <label for="tandc"> I certify that all the information provided in this
                    form is true and accurate to the best of my
                    knowledge.</label><br>
            </div>
        </div>
        <div class="text-center pt-30 pb-10">
            <button class="button-5" role="button">Submit</button>
        </div>
        <div class="text-center pt-10 pb-15">
            <img src="<?= base_url() ?>assets/img/rashu/footer.png" width="100%">
        </div>
    </form>
    <script>
        $(function () {
            var container = $(".container-1"),
                inputFile = $("#file"),
                img,
                btn,
                txt = "Browse",
                txtAfter = "Browse another pic";
            if (!container.find("#upload").length) {
                container
                    .find(".input")
                    .append('<input type="button" value="' + txt + '" id="upload">');
                btn = $("#upload");
                container.prepend(
                    '<img src="" class="hidden" alt="Uploaded file" id="uploadImg" width="100">'
                );
                img = $("#uploadImg");
            }
            btn.on("click", function () {
                img.animate({ opacity: 0 }, 300);
                inputFile.click();
            });
            inputFile.on("change", function (e) {
                container.find("label").html(inputFile.val());
                var i = 0;
                for (i; i < e.originalEvent.srcElement.files.length; i++) {
                    var file = e.originalEvent.srcElement.files[i],
                        reader = new FileReader();
                    reader.onloadend = function () {
                        img.attr("src", reader.result).animate({ opacity: 1 }, 700);
                    };
                    reader.readAsDataURL(file);
                    img.removeClass("hidden");
                }
                btn.val(txtAfter);
            });
        });
    </script>
</body>
</html>
