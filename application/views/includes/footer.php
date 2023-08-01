<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1200, // values from 0 to 3000, with step 50ms
    });
</script>
<script>
    function previewImage(event) {
        var input = event.target;
        var reader = new FileReader();
        reader.onload = function() {
            var preview = document.getElementById('preview');
            preview.src = reader.result;
        };
        reader.readAsDataURL(input.files[0]);
    }

    function previewImage3(event) {
        // Listen for changes in the file input
        // $("#fileInput").on("change", function() {
        // Clear the previous previews
        $("#previewContainer").empty();

        // Get the selected files
        var files = event.prop("files");

        // Loop through each file and create a preview
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var reader = new FileReader();
            var count = 1;
            // Closure to capture the file information
            reader.onload = (function(file) {
                return function(e) {
                    // if (file.type.match(/^image\//)) {
                    //     // Create an image element and set the image source
                    //     var imgElement = $("<img>").attr("src", e.target.result);
                    //     imgElement.attr("class", "preview-image");

                    //     // Append the image to the preview container
                    //     $("#previewContainer").append(imgElement);
                    // } else {
                    // Create a download button for non-image files
                    var downloadLink = $("<a class='badge badge-primary'>").attr("href", e.target.result);
                    downloadLink.attr("class", "button-9");
                    downloadLink.attr("download", file.name);
                    downloadLink.text("View File #" + (count++));
                    // downloadLink.text("View #1" + file.name);

                    // Append the download button to the preview container
                    $("#previewContainer").append(downloadLink);
                    // }
                };
            })(file);

            // Read the file as a data URL (base64 encoded image)
            reader.readAsDataURL(file);
        }
    }



    function previewImage2(event) {
        var input2 = event.target;
        var fileContent = "assets/img/shape/upload-book.png"; // Replace with your custom file content
        var fileName = "assets/img/shapes/shape-5-green.png"; // Replace with your desired filename
        var blob = new Blob([fileContent], {
            type: 'text/plain'
        });
        var file = new File([blob], fileName);
        var reader = new FileReader();
        reader.onload = function() {
            var preview2 = document.getElementById('preview2');
            preview2.src = reader.result;
        };
        reader.readAsDataURL(file);
    }
    $(document).ready(function() {
        $('.Rabies').on('click', function() {
            var selectedValue = $('input[name="pet_is_rabiesVac"]:checked').val();
            if (selectedValue == 'Yes') {
                $('.Rabies_date').removeClass('d-none');
            } else {
                $('.Rabies_date').addClass('d-none');
            }
        });
        $('.DHPPI').on('click', function() {
            var selectedValue2 = $('input[name="pet_is_dhippiVac"]:checked').val();
            if (selectedValue2 == 'Yes') {
                $('.DHPPI_date').removeClass('d-none');
            } else {
                $('.DHPPI_date').addClass('d-none');
            }
        });
        $('.kennel').on('click', function() {
            var selectedValue3 = $('input[name="pet_is_kennelCoughVac"]:checked').val();
            if (selectedValue3 == 'Yes') {
                $('.kennel_date').removeClass('d-none');
                $('#kennel_vac_date').prop("required", true);


            } else {
                $('.kennel_date').addClass('d-none');
                $('#kennel_vac_date').prop("required", false);

            }
        });
        $('.pch').on('click', function() {
            var selectedValue3 = $('input[name="pet_is_pchVac"]:checked').val();
            if (selectedValue3 == 'Yes') {
                $('.pch_date').removeClass('d-none');
            } else {
                $('.pch_date').addClass('d-none');
            }
        });
        $('.haircutBtn').on('click', function() {
            var selectedvalueData = $('input[name="haircut"]:checked').data("id");
            var selectedValue1 = $('input[name="haircut"]:checked').val();

            $('.haircut-1').css('display', 'none');
            $('.haircut-2').css('display', 'none');
            $('.haircut-3').css('display', 'none');
            $('.haircut-4').css('display', 'none');
            $('.hairgrp').prop("required", false);
            $('.hairgrp' + selectedvalueData).prop("required", true);
            $('.haircut-' + selectedvalueData).css('display', 'block');
        });
        window.setTimeout(function() {
            $('.alert').fadeTo(200, 0).slideUp(200, function() {
                $(this).remove();
            });
        }, 4000);
    });

    $('#id').keyup(function() {
        var id = $('#id').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url() ?>Home/get_owner",
            data: {
                id: id
            },
            success: function(response) {
                if (response != '') {
                    var json = $.parseJSON(response);
                    $('#owner_name').val(json.owner_name);
                    $('#owner_contact').val(json.owner_contact_1);
                    $('#emerg_owner_name').val(json.emerg_owner_name);
                    $('#emerg_owner_contact').val(json.emerg_owner_contact);
                    $('#owner_address').val(json.owner_address);
                    $('#owner_facebook').val(json.owner_facebook);
                    $('#owner_instagram').val(json.owner_instagram);
                    if (json.pet_count == 1) {
                        $('#pet_id').val(json.pet_data.basic_id);
                        $('#pet_name').val(json.pet_data.pet_name);
                        $('#pet_age').val(json.pet_data.pet_age);
                        $('#pet_age_month').val(json.pet_data.pet_age_month);
                        $('#pet_weight').val(json.pet_data.pet_weight);
                        $('#pet_breed').val(json.pet_data.pet_breed);
                        $('#pet_microchip_no').val(json.pet_data.pet_microchip_no);
                        $('#pet_allergies').val(json.pet_data.pet_allergies);
                        $("input[name=pet_gender][value=" + json.pet_data.pet_gender + "]").attr('checked', 'checked');
                        $("input[name=pet_is_rabiesVac][value=" + json.pet_data.pet_is_rabiesVac + "]").attr('checked', 'checked');
                        $("input[name=pet_is_dhippiVac][value=" + json.pet_data.pet_is_dhippiVac + "]").attr('checked', 'checked');
                        $("input[name=pet_is_kennelCoughVac][value=" + json.pet_data.pet_is_kennelCoughVac + "]").attr('checked', 'checked');
                        if (json.pet_data.pet_profile_img != '') {
                            $('#preview').attr("src", "<?= base_url() ?>uploads/files/" + json.pet_data.pet_profile_img);
                            $('input[name="pet_profile_img"]').prop("required", false);
                        } else {
                            $('#preview').attr("src", "<?= base_url() ?>assets/img/shape/shape-8.png");
                            $('input[name="pet_profile_img"]').prop("required", true);
                        }
                        // console.log(json.pet_vac);
                        var count = 1;
                        $("#previewContainer").html('');
                        $.each(json.pet_vac, function(indexes, values) {
                            console.log('book - ' + values.book_nm);
                            if(values.book_nm != ''){
                            var downloadLink = $("<a class='badge badge-primary'>").attr("href", "<?= base_url() ?>uploads/vac/" + values.book_nm);
                            downloadLink.attr("class", "button-9");
                            downloadLink.attr("target", "_blank");
                            downloadLink.attr("download", "<?= base_url() ?>uploads/vac/" + values.book_nm);
                            downloadLink.text("Saved File #" + (count++));
                            $("#previewContainer").append(downloadLink);
                            }

                        });
                        if (json.pet_data.vac_book != '') {
                            $('#vacbook').html('<a href="<?= base_url() ?>uploads/files/' + json.pet_data.vac_book + '" target="_blank" class="badge badge-info">View Vaccine book</a>');
                        } else {
                            $('#vacbook').html("");
                        }
                        $('#rabies_vac_date').val(json.pet_data.pet_rabiesVac_expDate);
                        $('#pet_dhippiVac_expDate').val(json.pet_data.pet_dhippiVac_expDate);
                        $('#kennel_vac_date').val(json.pet_data.pet_kennelCoughVac_expDate);

                        $('#eye').show();
                    } else if (json.pet_count > 1) {
                        $('#eye').show();
                        $('.pbtn').show();
                        $('#pet_name_list').html(json.pet_data);
                    } else {
                        $('#eye').hide();
                        $('.pbtn').hide();
                    }
                } else {
                    $('#owner_contact_1').val(id);
                    $('#eye').hide();
                    $('.pbtn').hide();
                }
            }
        });
    });
    $('#eye').click(function() {
        $('#pet_id').val(0);
        $('#pet_name').val('');
        $('#pet_age').val('');
        $('#pet_age_month').val('');
        $('#pet_weight').val('');
        $('#pet_breed').val('');
        $('#pet_microchip_no').val('');
        $('#pet_allergies').val('');
        var value = 'No';
        $("input[name=pet_is_rabiesVac][value=" + value + "]").attr('checked', 'checked');
        $("input[name=pet_is_dhippiVac][value=" + value + "]").attr('checked', 'checked');
        $("input[name=pet_is_kennelCoughVac][value=" + value + "]").attr('checked', 'checked');
    });
    $(document).on("click", ".petdata", function() {
        var id = $(this).data('id');
        $.ajax({
            method: "POST",
            url: "<?= base_url() ?>Home/get_pet",
            data: {
                id: id
            },
            success: function(response) {
                if (response != '') {
                    var json = $.parseJSON(response);
                    $('#pet_id').val(json.basic_id);
                    $('#pet_name').val(json.pet_name);
                    $('#pet_age').val(json.pet_age);
                    $('#pet_age_month').val(json.pet_age_month);
                    $('#pet_weight').val(json.pet_weight);
                    $('#pet_breed').val(json.pet_breed);
                    $('#pet_microchip_no').val(json.pet_microchip_no);
                    $('#pet_allergies').val(json.pet_allergies);
                    $("input[name=pet_gender][value=" + json.pet_gender + "]").attr('checked', 'checked');
                    $("input[name=pet_is_rabiesVac][value=" + json.pet_is_rabiesVac + "]").attr('checked', 'checked');
                    $("input[name=pet_is_dhippiVac][value=" + json.pet_is_dhippiVac + "]").attr('checked', 'checked');
                    $("input[name=pet_is_kennelCoughVac][value=" + json.pet_is_kennelCoughVac + "]").attr('checked', 'checked');
                    if (json.pet_profile_img != '') {
                        $('#preview').attr("src", "<?= base_url() ?>uploads/files/" + json.pet_profile_img);
                        $('input[name="pet_profile_img"]').prop("required", false);
                    } else {
                        $('#preview').attr("src", "<?= base_url() ?>assets/img/shape/shape-8.png");
                        $('input[name="pet_profile_img"]').prop("required", true);
                    }
                    if (json.vac_book != '') {
                        $('#vacbook').html('<a href="<?= base_url() ?>uploads/files/' + json.vac_book + '" target="_blank" class="badge badge-info">View Vaccine book</a>');
                    } else {
                        $('#vacbook').html("");
                    }
                    $('#rabies_vac_date').val(json.pet_rabiesVac_expDate);
                    $('#pet_dhippiVac_expDate').val(json.pet_dhippiVac_expDate);
                    $('#kennel_vac_date').val(json.pet_kennelCoughVac_expDate);
                }
            }
        });
    });
</script>
<script>
    function calculate_singledays() {
        $("#no_of_days").html(1);
    }

    function calculate_days() {
        var fromdate = $("#from").val();
        var todate = $("#to").val();

        if ((fromdate == "") || (todate == "")) {
            // $("#result").html("Please enter two dates");
            return false
        }

        var dt1 = new Date(fromdate);
        var dt2 = new Date(todate);

        var time_difference = dt2.getTime() - dt1.getTime();
        var result = time_difference / (1000 * 60 * 60 * 24);


        $("#no_of_days").html(result);
    }

    function calculate_time() {


        if (($("#from_time").val() != '') && ($("#to_time").val() != '')) {
            var time_1 = $("#from_time").val();
            var time_2 = $("#to_time").val();

            var time1 = time_1.split(':'),
                time2 = time_2.split(':');
            var hours1 = parseInt(time1[0], 10),
                hours2 = parseInt(time2[0], 10),
                mins1 = parseInt(time1[1], 10),
                mins2 = parseInt(time2[1], 10);
            var hours = hours2 - hours1,
                mins = 0;

            // get hours
            if (hours < 0) hours = 24 + hours;

            // get minutes
            if (mins2 >= mins1) {
                mins = mins2 - mins1;
            } else {
                mins = (mins2 + 60) - mins1;
                hours--;
            }

            // convert to fraction of 60
            min_last = mins % 60;
            mins = mins / 60;

            hours += mins;
            hours = hours.toFixed(0);
            $("#total_hours").html(hours);
            $("#total_min").html(min_last);
            $("#total_days").html(min_last);
            $("#err_hour").html('');
        } else {

            $("#err_hour").html('<p class="badge badge-danger" style="background:red">Enter valid time </p>');
            return false;

        }
    }
    $("input[name='pet_type']").click(function() {
        var value = $("input[name='pet_type']:checked").val();
        var newUrl = window.location.origin + window.location.pathname + "?pet=" + value;
        window.location.href = newUrl;
    });
    $(document).ready(function() {
        var pettype = $("input[name='pet_type']:checked").val();

        if (pettype == 'DOGS') {
            $("#dhpp-vac").show();
            $("#kenn-vac").show();
            $("#pch-vac").hide();
            $('input[name="pet_is_pchVac"]').prop("required", false);
            $('input[name="pet_is_kennelCoughVac"]').prop("required", true);
            $('input[name="pet_is_dhippiVac"]').prop("required", true);
        } else {
            $("#dhpp-vac").hide();
            $("#kenn-vac").hide();
            $("#pch-vac").show();
            $('input[name="pet_is_pchVac"]').prop("required", true);
            $('input[name="pet_is_kennelCoughVac"]').prop("required", false);
            $('input[name="pet_is_dhippiVac"]').prop("required", false);
        }
        $("input[name='select_days']").click(function() {
            var select_days = $("input[name='select_days']:checked").val();
            if (select_days == 'Single') {
                $('.single_day').show();
                $('.multi_day').hide();
                $('input[name="single_day_date"]').prop("required", true);
                $('input[name="from_date"]').prop("required", false);
                $('input[name="to_date"]').prop("required", false);

            } else {
                $('.single_day').hide();
                $('.multi_day').show();
                $('input[name="single_day_date"]').prop("required", false);
                $('input[name="from_date"]').prop("required", true);
                $('input[name="to_date"]').prop("required", true);
            }

        });
    });
</script>