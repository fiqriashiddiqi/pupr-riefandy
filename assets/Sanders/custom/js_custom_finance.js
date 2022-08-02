 function check_hks() {
     var hks = $("#hks").val();

     if (hks == "Others") {
         document.getElementById('regiter_how_know_sanders_other').style.display = 'block';
         document.getElementById('regiter_how_know_sanders_other').required = true;
     } else {
         document.getElementById('regiter_how_know_sanders_other').style.display = 'none';
         document.getElementById('regiter_how_know_sanders_other').required = false;
     }
 }

 //change password lender borrower

 function check_pass() {
     var error_pass = $("#error_pass").val();
     var error_pass_valid = $("#error_pass_valid").val();
     var str = document.getElementById('error_pass').value;
        
     if (error_pass == error_pass_valid) {
         $("#error_group").removeClass("has-error");
         $("#error_html").addClass('success_pass');
         $("#error_html").removeClass('error_pass');
         document.getElementById('error_html').innerHTML = 'your password match.';

     } else {
         $("#error_group").addClass("has-error");
         $("#error_html").addClass('error_pass');
         $("#error_html").removeClass('success_pass');
         document.getElementById('error_html').innerHTML = 'your password does not match !!';
     }
     if (str.length < 8) {
            $("#error_password").addClass('error_pass');
            document.getElementById('error_password').innerHTML = 'your password too short.';
            
        } else if (str.length > 50) {
            $("#error_password").addClass('error_pass');
            document.getElementById('error_password').innerHTML = 'your password too long.';
            
        } else if (str.search(/\d/) == -1) {
            $("#error_password").addClass('error_pass');
            document.getElementById('error_password').innerHTML = 'your password no number content.';
            
        } else if (str.search(/[a-zA-Z]/) == -1) {
            $("#error_password").addClass('error_pass');
            document.getElementById('error_password').innerHTML = 'your password no letter content.';
            
        } else {
        $("#error_password").hide();
        
        }
 }


 function validate_password() {

     var password = document.forms["register_form"]["register_password"].value;
     var password_valid = document.forms["register_form"]["register_re_password"].value;

     if (password != password_valid) {
         document.getElementById('next_button').disabled = true;
         $('#next_button').removeClass('btn-warning');
         $('#next_button').addClass('btn-default');
         document.getElementById('alert_next').style.display = 'block';
     } else {
         document.getElementById('next_button').disabled = false;
         $('#next_button').removeClass('btn-default');
         $('#next_button').addClass('btn-warning');
         document.getElementById('alert_next').style.display = 'none';
     }

 }

 var submit_type = 0;
 function submitType(param){
    submit_type = param;
 }

 var val_lender = 0;
 function checkboxValueLender(val){
    val_lender = val_lender + val;
 }

 var val_borrower = 0;
 function checkboxValueBorrower(val){
    val_borrower = val_borrower + val;
 }

 function validate_form() {
    
     var password = document.forms["register_form"]["register_password"].value;
     var password_valid = document.forms["register_form"]["register_re_password"].value;

     if (password != password_valid) {
         bootbox.alert({
             title: "Warning !!",
             message: "your password does not match !!, please back to step 1.",
             size: 'small',
             buttons: {
                 ok: {
                     label: "OK",
                     className: 'btn-danger btn-lg btn_modal_ok',
                 }
             }
         });
         return false;
     } else {
        if(submit_type==1){
            console.log("investor");
            console.log(val_lender);
            if(val_lender%2!=1){
                document.getElementById('alert-check').style.display = 'block';
                return false;
            }else{   
                document.getElementById('alert-check').style.display = 'none';
            }

            document.getElementById('alert-check').style.display = 'none';
            $('#myModal_lender').modal('show');
        }if(submit_type==2){
            console.log("borrower");
            if(val_borrower%2!=1){
                 document.getElementById('alert-check-bor').style.display = 'block';
                return false;
            } else{
                 document.getElementById('alert-check-bor').style.display = 'none';
            }
             document.getElementById('alert-check-bor').style.display = 'none';
            $('#myModal_borrower').modal('show');
        }
         
     }

 }

 $('input[type="radio"]').on('change', function(e) {

     var value_radio = $(this).val();

     if (value_radio == 'Borrower') {
         document.getElementById('regisrer_lender').style.display = 'none';
         document.getElementById('regisrer_borrower').style.display = 'block';

         document.getElementById('lender_name').required = false;
         document.getElementById('lender_birthdate').required = false;
         document.getElementById('lender_gender').required = false;
         document.getElementById('lender_phone').required = false;
         document.getElementById('lender_status').required = false;
         document.getElementById('lender_occupation').required = false;
         document.getElementById('lender_address').required = false;
         document.getElementById('lender_country').required = false;
         document.getElementById('lender_province').required = false;
         document.getElementById('lender_city').required = false;
         document.getElementById('lender_district').required = false;
         document.getElementById('lender_village').required = false;
         document.getElementById('lender_post_code').required = false;
         document.getElementById('lender_last_education').required = false;
         document.getElementById('lender_cityzenship').required = false;
         document.getElementById('myCheck_lender').required = false;

         document.getElementById('borrower_name').required = true;
         document.getElementById('borrower_birthdate').required = true;
         document.getElementById('borrower_gender').required = true;
         document.getElementById('borrower_phone').required = true;
         document.getElementById('borrower_status').required = true;
         document.getElementById('borrower_occupation').required = true;
         document.getElementById('borrower_address').required = true;
         document.getElementById('borrower_country').required = true;
         document.getElementById('borrower_province').required = true;
         document.getElementById('borrower_city').required = true;
         document.getElementById('borrower_district').required = false;
         document.getElementById('borrower_village').required = false;
         document.getElementById('borrower_post_code').required = true;
         document.getElementById('borrower_mother_name').required = true;
         document.getElementById('borrower_last_education').required = true;
         document.getElementById('borrower_cityzenship').required = true;
         document.getElementById('myCheck_borrower').required = true;


     } else {
         document.getElementById('regisrer_lender').style.display = 'block';
         document.getElementById('regisrer_borrower').style.display = 'none';

         document.getElementById('lender_name').required = true;
         document.getElementById('lender_birthdate').required = true;
         document.getElementById('lender_gender').required = true;
         document.getElementById('lender_phone').required = true;
         document.getElementById('lender_status').required = true;
         document.getElementById('lender_occupation').required = true;
         document.getElementById('lender_address').required = true;
         document.getElementById('lender_country').required = true;
         document.getElementById('lender_province').required = true;
         document.getElementById('lender_city').required = true;
         document.getElementById('lender_district').required = true;
         document.getElementById('lender_village').required = true;
         document.getElementById('lender_post_code').required = true;
         document.getElementById('lender_last_education').required = true;
         document.getElementById('lender_cityzenship').required = true;
         document.getElementById('myCheck_lender').required = true;


         document.getElementById('borrower_name').required = false;
         document.getElementById('borrower_birthdate').required = false;
         document.getElementById('borrower_gender').required = false;
         document.getElementById('borrower_phone').required = false;
         document.getElementById('borrower_status').required = false;
         document.getElementById('borrower_occupation').required = false;
         document.getElementById('borrower_address').required = false;
         document.getElementById('borrower_country').required = false;
         document.getElementById('borrower_province').required = false;
         document.getElementById('borrower_city').required = false;
         document.getElementById('borrower_district').required = false;
         document.getElementById('borrower_village').required = false;
         document.getElementById('borrower_post_code').required = false;
         document.getElementById('borrower_mother_name').required = false;
         document.getElementById('borrower_last_education').required = false;
         document.getElementById('borrower_cityzenship').required = false;
         document.getElementById('myCheck_borrower').required = false;


     }
 });

 $(document).ready(function() {
     var navListItems = $('div.setup-panel div a'),
         allWells = $('.setup-content'),
         allNextBtn = $('.nextBtn');

     allWells.hide();

     navListItems.click(function(e) {
         e.preventDefault();
         var $target = $($(this).attr('href')),
             $item = $(this);

         if (!$item.hasClass('disabled')) {
             navListItems.removeClass('btn-warning background-step').addClass('btn-default');
             $item.addClass('btn-warning background-step');
             allWells.hide();
             $target.show();
             $target.find('input:eq(0)').focus();
         }
     });

     allNextBtn.click(function() {
         var curStep = $(this).closest(".setup-content"),

             curStepBtn = curStep.attr("id"),

             nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
             curInputs = curStep.find("input[type='text'],input[type='url'],input[type='email'],input[type='password'],select"),
             isValid = true;

         $(".form-group").removeClass("has-error");
         for (var i = 0; i < curInputs.length; i++) {
             if (!curInputs[i].validity.valid) {
                 isValid = false;
                 $(curInputs[i]).closest(".form-group").addClass("has-error");
             }
         }

         if (isValid)
             nextStepWizard.removeAttr('disabled').trigger('click');
     });

     $('div.setup-panel div a.btn-warning').trigger('click');
 });

 function check_occupation_lender() {
     var occupation_lender = $("#lender_occupation").val();

     if (occupation_lender == "Others") {
         document.getElementById('lender_bio_occupation_others').required = true;
         document.getElementById('lender_bio_occupation_others').style.display = 'block';
     } else {
         document.getElementById('lender_bio_occupation_others').required = false;
         document.getElementById('lender_bio_occupation_others').style.display = 'none';
     }
 }

 function check_occupation_borrower() {
     var occupation_lender = $("#borrower_occupation").val();

     if (occupation_lender == "Others") {
         document.getElementById('borrower_bio_occupation_others').required = true;
         document.getElementById('borrower_bio_occupation_others').style.display = 'block';
     } else {
         document.getElementById('borrower_bio_occupation_others').required = false;
         document.getElementById('borrower_bio_occupation_others').style.display = 'none';
     }
 }

function check_browse_manually() {
     var str = $("#lender_manually").val();

     if (str == "all") {
         document.getElementById('all').style.display = 'block';
         document.getElementById('personal_loan').style.display = 'none';
         // document.getElementById('invoice_financing').style.display = 'none';
         document.getElementById('fixed_loan').style.display = 'none';
         document.getElementById('flexible_loan').style.display = 'none';

     } else if (str == "personal_loan") {
         document.getElementById('all').style.display = 'none';
         document.getElementById('personal_loan').style.display = 'block';
         // document.getElementById('invoice_financing').style.display = 'none';
         document.getElementById('fixed_loan').style.display = 'none';
         document.getElementById('flexible_loan').style.display = 'none';

     // } else if (str == "invoice_financing") {
     //     document.getElementById('all').style.display = 'none';
     //     document.getElementById('personal_loan').style.display = 'none';
     //     document.getElementById('invoice_financing').style.display = 'block';
     //     document.getElementById('fixed_loan').style.display = 'none';
     //     document.getElementById('flexible_loan').style.display = 'none';
     } else if (str == "fixed_loan" ) {
         document.getElementById('all').style.display = 'none';
         document.getElementById('personal_loan').style.display = 'none';
         // document.getElementById('invoice_financing').style.display = 'none';
         document.getElementById('fixed_loan').style.display = 'block';
         document.getElementById('flexible_loan').style.display = 'none';
     } else if ( str == "flexible_loan") {
         document.getElementById('all').style.display = 'none';
         document.getElementById('personal_loan').style.display = 'none';
         // document.getElementById('invoice_financing').style.display = 'none';
         document.getElementById('fixed_loan').style.display = 'none';
         document.getElementById('flexible_loan').style.display = 'block';
     } else {
         document.getElementById('all').style.display = 'block';
         document.getElementById('personal_loan').style.display = 'none';
         // document.getElementById('invoice_financing').style.display = 'none';
         document.getElementById('fixed_loan').style.display = 'none';
         document.getElementById('flexible_loan').style.display = 'none';
     }
 }


function check_report() {
     var str = $("#lender_report").val();

     if (str == "Cashflow") {
         document.getElementById('Cashflow').style.display = 'inline';
         document.getElementById('OrderHistory').style.display = 'none';
         

     } else if ( str == "OrderHistory") {
         document.getElementById('Cashflow').style.display = 'none';
         document.getElementById('OrderHistory').style.display = 'inline';
         
     } else {
         document.getElementById('Cashflow').style.display = 'inline';
         document.getElementById('OrderHistory').style.display = 'none';
         
     }
 }

 function check_cityzenship_lender() {
     var str = $("#lender_cityzenship").val();

     if (str == "WNI") {
         document.getElementById('lender_dummy').style.display = 'block';
         document.getElementById('lender_dummy1').style.display = 'none';
         document.getElementById('lender_dummy2').style.display = 'none';
         document.getElementById('lender_dummy3').style.display = 'none';
         document.getElementById('lender_dummy4').style.display = 'none';
         document.getElementById('lender_dummy5').style.display = 'none';
         document.getElementById('lender_dummy6').style.display = 'block';
         document.getElementById('lender_dummy7').style.display = 'block';
         document.getElementById('lender_dummy_1').style.display = 'none';

         document.getElementById('lender_dummy1_select').style.display = 'block';
         document.getElementById('lender_dummy2_select').style.display = 'block';
         document.getElementById('lender_dummy3_select').style.display = 'block';
         document.getElementById('lender_dummy4_select').style.display = 'block';

         document.getElementById('lender_province').required = false;
         document.getElementById('lender_city').required = false;
         document.getElementById('lender_district').required = false;
         document.getElementById('lender_village').required = false;

         document.getElementById('lender_province_select').required = true;
         document.getElementById('lender_city_select').required = true;
         document.getElementById('lender_district_select').required = true;
         document.getElementById('lender_village_select').required = true;

         document.getElementById('lender_country').required = false;
         document.getElementById('lender_address').required = true;
         document.getElementById('lender_post_code').required = true;

         document.getElementById('lender_nik').required = true;
         document.getElementById('lender_id_picture').required = true;
         document.getElementById('lender_passport').required = false;
         document.getElementById('lender_id_passport').required = false;

     } else if (str == "WNA") {
         document.getElementById('lender_dummy').style.display = 'none';
         document.getElementById('lender_dummy1').style.display = 'block';
         document.getElementById('lender_dummy2').style.display = 'block';
         document.getElementById('lender_dummy3').style.display = 'block';
         document.getElementById('lender_dummy4').style.display = 'none';
         document.getElementById('lender_dummy5').style.display = 'none';
         document.getElementById('lender_dummy6').style.display = 'block';
         document.getElementById('lender_dummy7').style.display = 'block';
         document.getElementById('lender_dummy_1').style.display = 'block';

         document.getElementById('lender_dummy1_select').style.display = 'none';
         document.getElementById('lender_dummy2_select').style.display = 'none';
         document.getElementById('lender_dummy3_select').style.display = 'none';
         document.getElementById('lender_dummy4_select').style.display = 'none';

         document.getElementById('lender_province').required = true;
         document.getElementById('lender_city').required = true;
         document.getElementById('lender_district').required = false;
         document.getElementById('lender_village').required = false;

         document.getElementById('lender_province_select').required = false;
         document.getElementById('lender_city_select').required = false;
         document.getElementById('lender_district_select').required = false;
         document.getElementById('lender_village_select').required = false;

         document.getElementById('lender_country').required = true;
         document.getElementById('lender_address').required = true;
         document.getElementById('lender_post_code').required = true;

         document.getElementById('lender_nik').required = false;
         document.getElementById('lender_id_picture').required = false;
         document.getElementById('lender_passport').required = true;
         document.getElementById('lender_id_passport').required = true;

     } else {
         document.getElementById('lender_dummy').style.display = 'none';
         document.getElementById('lender_dummy1').style.display = 'none';
         document.getElementById('lender_dummy2').style.display = 'none';
         document.getElementById('lender_dummy3').style.display = 'none';
         document.getElementById('lender_dummy4').style.display = 'none';
         document.getElementById('lender_dummy5').style.display = 'none';
         document.getElementById('lender_dummy6').style.display = 'none';
         document.getElementById('lender_dummy7').style.display = 'none';
         document.getElementById('lender_dummy_1').style.display = 'none';

         document.getElementById('lender_dummy1_select').style.display = 'none';
         document.getElementById('lender_dummy2_select').style.display = 'none';
         document.getElementById('lender_dummy3_select').style.display = 'none';
         document.getElementById('lender_dummy4_select').style.display = 'none';

         document.getElementById('lender_province').required = false;
         document.getElementById('lender_city').required = false;
         document.getElementById('lender_district').required = false;
         document.getElementById('lender_village').required = false;

         document.getElementById('lender_province_select').required = false;
         document.getElementById('lender_city_select').required = false;
         document.getElementById('lender_district_select').required = false;
         document.getElementById('lender_village_select').required = false;

         document.getElementById('lender_country').required = false;
         document.getElementById('lender_address').required = false;
         document.getElementById('lender_post_code').required = false;

         document.getElementById('lender_nik').required = false;
         document.getElementById('lender_id_picture').required = false;
         document.getElementById('lender_passport').required = false;
         document.getElementById('lender_id_passport').required = false;
     }
 }

 function check_cityzenship_borrower() {
     var str = $("#borrower_cityzenship").val();

     if (str == "WNI") {
         document.getElementById('borrower_dummy').style.display = 'block';
         document.getElementById('borrower_dummy1').style.display = 'none';
         document.getElementById('borrower_dummy2').style.display = 'none';
         document.getElementById('borrower_dummy3').style.display = 'none';
         document.getElementById('borrower_dummy4').style.display = 'none';
         document.getElementById('borrower_dummy5').style.display = 'none';
         document.getElementById('borrower_dummy6').style.display = 'block';
         document.getElementById('borrower_dummy7').style.display = 'block';
         document.getElementById('borrower_dummy_1').style.display = 'none';

         document.getElementById('borrower_dummy1_select').style.display = 'block';
         document.getElementById('borrower_dummy2_select').style.display = 'block';
         document.getElementById('borrower_dummy3_select').style.display = 'block';
         document.getElementById('borrower_dummy4_select').style.display = 'block';

         document.getElementById('borrower_province').required = false;
         document.getElementById('borrower_city').required = false;
         document.getElementById('borrower_district').required = false;
         document.getElementById('borrower_village').required = false;

         document.getElementById('borrower_province_select').required = true;
         document.getElementById('borrower_city_select').required = true;
         document.getElementById('borrower_district_select').required = true;
         document.getElementById('borrower_village_select').required = true;

         document.getElementById('borrower_country').required = false;
         document.getElementById('borrower_address').required = true;
         document.getElementById('borrower_post_code').required = true;

         document.getElementById('borrower_nik').required = true;
         document.getElementById('borrower_id_picture').required = true;
         document.getElementById('borrower_passport').required = false;
         document.getElementById('borrower_id_passport').required = false;

     } else if (str == "WNA") {
         document.getElementById('borrower_dummy').style.display = 'none';
         document.getElementById('borrower_dummy1').style.display = 'block';
         document.getElementById('borrower_dummy2').style.display = 'block';
         document.getElementById('borrower_dummy3').style.display = 'block';
         document.getElementById('borrower_dummy4').style.display = 'none';
         document.getElementById('borrower_dummy5').style.display = 'none';
         document.getElementById('borrower_dummy6').style.display = 'block';
         document.getElementById('borrower_dummy7').style.display = 'block';
         document.getElementById('borrower_dummy_1').style.display = 'block';

         document.getElementById('borrower_dummy1_select').style.display = 'none';
         document.getElementById('borrower_dummy2_select').style.display = 'none';
         document.getElementById('borrower_dummy3_select').style.display = 'none';
         document.getElementById('borrower_dummy4_select').style.display = 'none';

         document.getElementById('borrower_province').required = true;
         document.getElementById('borrower_city').required = true;
         document.getElementById('borrower_district').required = false;
         document.getElementById('borrower_village').required = false;

         document.getElementById('borrower_province_select').required = false;
         document.getElementById('borrower_city_select').required = false;
         document.getElementById('borrower_district_select').required = false;
         document.getElementById('borrower_village_select').required = false;

         document.getElementById('borrower_country').required = true;
         document.getElementById('borrower_address').required = true;
         document.getElementById('borrower_post_code').required = true;

         document.getElementById('borrower_nik').required = false;
         document.getElementById('borrower_id_picture').required = false;
         document.getElementById('borrower_passport').required = true;
         document.getElementById('borrower_id_passport').required = true;
     } else {
         document.getElementById('borrower_dummy').style.display = 'none';
         document.getElementById('borrower_dummy1').style.display = 'none';
         document.getElementById('borrower_dummy2').style.display = 'none';
         document.getElementById('borrower_dummy3').style.display = 'none';
         document.getElementById('borrower_dummy4').style.display = 'none';
         document.getElementById('borrower_dummy5').style.display = 'none';
         document.getElementById('borrower_dummy6').style.display = 'none';
         document.getElementById('borrower_dummy7').style.display = 'none';
         document.getElementById('borrower_dummy_1').style.display = 'none';

         document.getElementById('borrower_dummy1_select').style.display = 'none';
         document.getElementById('borrower_dummy2_select').style.display = 'none';
         document.getElementById('borrower_dummy3_select').style.display = 'none';
         document.getElementById('borrower_dummy4_select').style.display = 'none';

         document.getElementById('borrower_province').required = false;
         document.getElementById('borrower_city').required = false;
         document.getElementById('borrower_district').required = false;
         document.getElementById('borrower_village').required = false;

         document.getElementById('borrower_province_select').required = false;
         document.getElementById('borrower_city_select').required = false;
         document.getElementById('borrower_district_select').required = false;
         document.getElementById('borrower_village_select').required = false;

         document.getElementById('borrower_country').required = false;
         document.getElementById('borrower_address').required = false;
         document.getElementById('borrower_post_code').required = false;

         document.getElementById('borrower_nik').required = false;
         document.getElementById('borrower_id_picture').required = false;
         document.getElementById('borrower_passport').required = false;
         document.getElementById('borrower_id_passport').required = false;
     }
 }

 function check_status_marriage_borrower() {
     var str = $("#borrower_status").val();

     if (str == "Single") {
         document.getElementById('spouse_name_borrower').style.display = 'none';
         document.getElementById('spouse_phone_borrower').style.display = 'none';

         document.getElementById('borrower_spouse_name').required = false;
         document.getElementById('borrower_spouse_phone').required = false;
     } else if (str == "Married") {
         document.getElementById('spouse_name_borrower').style.display = 'block';
         document.getElementById('spouse_phone_borrower').style.display = 'block';

         document.getElementById('borrower_spouse_name').required = true;
         document.getElementById('borrower_spouse_phone').required = true;
     } else {
         document.getElementById('spouse_name_borrower').style.display = 'none';
         document.getElementById('spouse_phone_borrower').style.display = 'none';

         document.getElementById('borrower_spouse_name').required = false;
         document.getElementById('borrower_spouse_phone').required = false;
     }
 }

 function check_status_marriage_borrower_update() {
     var str = $("#borrower_status").val();

     if (str == "Single") {
         document.getElementById('spouse_name_borrower').style.display = 'none';
         document.getElementById('spouse_phone_borrower').style.display = 'none';

         document.getElementById('borrower_spouse_name').required = false;
         document.getElementById('borrower_spouse_phone').required = false;
     } else if (str == "Married") {
         document.getElementById('spouse_name_borrower').style.display = 'block';
         document.getElementById('spouse_phone_borrower').style.display = 'block';

         document.getElementById('borrower_spouse_name').required = true;
         document.getElementById('borrower_spouse_phone').required = true;
     } else {
         document.getElementById('spouse_name_borrower').style.display = 'none';
         document.getElementById('spouse_phone_borrower').style.display = 'none';

         document.getElementById('borrower_spouse_name').required = false;
         document.getElementById('borrower_spouse_phone').required = false;
     }
 }

 function check_status_marriage_lender() {
     var str = $("#lender_status").val();

     if (str == "Single") {
         document.getElementById('spouse_name_lender').style.display = 'none';
         document.getElementById('spouse_phone_lender').style.display = 'none';

         document.getElementById('lender_spouse_name').required = false;
         document.getElementById('lender_spouse_phone').required = false;
     } else if (str == "Married") {
         document.getElementById('spouse_name_lender').style.display = 'block';
         document.getElementById('spouse_phone_lender').style.display = 'block';

         document.getElementById('lender_spouse_name').required = true;
         document.getElementById('lender_spouse_phone').required = true;
     } else {
         document.getElementById('spouse_name_lender').style.display = 'none';
         document.getElementById('spouse_phone_lender').style.display = 'none';

         document.getElementById('lender_spouse_name').required = false;
         document.getElementById('lender_spouse_phone').required = false;
     }
 }

 function check_status_marriage_lender_update() {
     var str = $("#lender_status").val();

     if (str == "Single") {
         document.getElementById('spouse_name_lender').style.display = 'none';
         document.getElementById('spouse_phone_lender').style.display = 'none';

         document.getElementById('lender_spouse_name').required = false;
         document.getElementById('lender_spouse_phone').required = false;
     } else if (str == "Married") {
         document.getElementById('spouse_name_lender').style.display = 'block';
         document.getElementById('spouse_phone_lender').style.display = 'block';

         document.getElementById('lender_spouse_name').required = true;
         document.getElementById('lender_spouse_phone').required = true;
     } else {
         document.getElementById('spouse_name_lender').style.display = 'none';
         document.getElementById('spouse_phone_lender').style.display = 'none';

         document.getElementById('lender_spouse_name').required = false;
         document.getElementById('lender_spouse_phone').required = false;
     }
 }

 function check_status_marriage_commercial() {
     var str = $("#borrower_status").val();

     if (str == "Single") {
         document.getElementById('spouse_name_borrower').style.display = 'none';
         document.getElementById('spouse_phone_borrower').style.display = 'none';
         document.getElementById('spouse_ktp_borrower').style.display = 'none';

         document.getElementById('borrower_spouse_name').required = false;
         document.getElementById('borrower_spouse_phone').required = false;
         document.getElementById('borrower_spouse_ktp').required = false;
     } else if (str == "Married") {
         document.getElementById('spouse_name_borrower').style.display = 'block';
         document.getElementById('spouse_phone_borrower').style.display = 'block';
         document.getElementById('spouse_ktp_borrower').style.display = 'block';

         document.getElementById('borrower_spouse_name').required = true;
         document.getElementById('borrower_spouse_phone').required = true;
         document.getElementById('borrower_spouse_ktp').required = true;
     } else {
         document.getElementById('spouse_name_borrower').style.display = 'none';
         document.getElementById('spouse_phone_borrower').style.display = 'none';
         document.getElementById('spouse_ktp_borrower').style.display = 'none';

         document.getElementById('borrower_spouse_name').required = false;
         document.getElementById('borrower_spouse_phone').required = false;
         document.getElementById('borrower_spouse_ktp').required = false;
     }
 }

 function preview_ktp_lender() {

    var input = document.getElementById('lender_id_picture');
     var file = input.files[0];
     var reader = new FileReader();
     var noimage = "<?php echo base_url();?>uploads/Website/slideshow/noimage.jpg";
     
     

     reader.onloadend = function(e) {
        
         $('#ktp_lender').attr('src', reader.result);
     }

     if (file) {
         reader.readAsDataURL(file);
     } else {
         $('#ktp_lender').attr('src', noimage);
     }

     
 }

 function preview_passport_lender() {
     var input = document.getElementById('lender_id_passport');
     var file = input.files[0];
     var reader = new FileReader();
     var noimage = "<?php echo base_url();?>uploads/Website/slideshow/noimage.jpg";

     reader.onloadend = function() {
         $('#passport_lender').attr('src', reader.result);
     }

     if (file) {
         reader.readAsDataURL(file);
     } else {
         $('#passport_lender').attr('src', noimage);
     }
 }

 function preview_ktp_borrower() {
     var input = document.getElementById('borrower_id_picture');
     var file = input.files[0];
     var reader = new FileReader();
     var noimage = "<?php echo base_url();?>uploads/Website/slideshow/noimage.jpg";

     reader.onloadend = function(e) {
         $('#ktp_borrower').attr('src', reader.result);
     }

     if (file) {
         reader.readAsDataURL(file);
     } else {
         $('#ktp_borrower').attr('src', noimage);
     }
 }

 function preview_passport_borrower() {
     var input = document.getElementById('borrower_id_passport');
     var file = input.files[0];
     var reader = new FileReader();
     var noimage = "<?php echo base_url();?>uploads/Website/slideshow/noimage.jpg";

     reader.onloadend = function() {
         $('#passport_borrower').attr('src', reader.result);
     }

     if (file) {
         reader.readAsDataURL(file);
     } else {
         $('#passport_borrower').attr('src', noimage);
     }
 }

 function preview_ktp_spouse() {
     var input = document.getElementById('borrower_spouse_id_picture');
     var file = input.files[0];
     var reader = new FileReader();
     var noimage = "<?php echo base_url();?>uploads/Website/slideshow/noimage.jpg";

     reader.onloadend = function() {
         $('#borrower_ktp_spouse').attr('src', reader.result);
     }

     if (file) {
         reader.readAsDataURL(file);
     } else {
         $('#borrower_ktp_spouse').attr('src', noimage);
     }
 }


 //deposit transaction, payment

 var acc = document.getElementsByClassName("accordion");
 var i;

 for (i = 0; i < acc.length; i++) {
     acc[i].addEventListener("click", function() {
         this.classList.toggle("active_li");
         var panel = this.nextElementSibling;
         if (panel.style.maxHeight) {
             panel.style.maxHeight = null;
         } else {
             panel.style.maxHeight = panel.scrollHeight + "px";
         }
     });
 }


 //personal update lender,update borrower, info lender borrower
 function check_occupation() {
     var str = $('#Occupation').val();

     if (str == "Others") {
         document.getElementById('dummyText').style.display = 'block';
     } else {
         document.getElementById('dummyText').style.display = 'none';
     }
 }

 function removeAlignment() {
     var read = document.getElementById("txt")
         .removeAttribute("readonly", 0);
     alert("atribut textbox readonly telah terhapus");
 }

 $(function() {
     $(".datepicker").datepicker();
     
 });

 window.onload = function() {
     $('.datepicker').on('change', function() {
         var dob = new Date(this.value);
         var today = new Date();
         var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
         $('#umur').val(age);
     });
 }

 $('.datetimepicker').datetimepicker({
     format: 'DD-MM-YYYY HH:mm:ss'
 });

 function validate_birthdate(birthdate) {

     var birthdate = new Date(birthdate);
     var date_now = new Date();
     var age = Math.floor((date_now - birthdate) / (365.25 * 24 * 60 * 60 * 1000));
     if (age < 17) {
         // $('.finish_button').addClass('btn-default');
         // $('.finish_button').removeClass('btn-warning');

         // document.getElementById('finish_lender').disabled = true;
         document.getElementById('alert-age').style.display = 'block';
         return false;
         callback(false);

     } else {
         // $('.finish_button').addClass('btn-warning');
         // $('.finish_button').removeClass('btn-default');

         // document.getElementById('finish_lender').disabled = false;
         document.getElementById('alert-age').style.display = 'none';
         return true;
         callback(true);
     }

 }

 function validate_birthdate_borrower(birthdate) {

     var birthdate = new Date(birthdate);
     var date_now = new Date();
     var age = Math.floor((date_now - birthdate) / (365.25 * 24 * 60 * 60 * 1000));
     if (age < 17 || age > 65) {
         // $('.finish_button').addClass('btn-default');
         // $('.finish_button').removeClass('btn-warning');

         // document.getElementById('finish_lender').disabled = true;
         document.getElementById('alert-age-bor').style.display = 'block';
         return false;
         callback(false);

     } else {
         // $('.finish_button').addClass('btn-warning');
         // $('.finish_button').removeClass('btn-default');

         // document.getElementById('finish_lender').disabled = false;
         document.getElementById('alert-age-bor').style.display = 'none';
         return true;
         callback(true);
     }

 }

$(document).ready(function(){
        $("#lender_province_select").change(function(){
            var id_indonesia_provinsi = $("#lender_province_select").val();
            $.ajax({
                type: "POST",
                url: "dropdown_city_residence",
                data: "id_indonesia_provinsi="+id_indonesia_provinsi,
                success: function(html) {
                    $("#lender_city_select").html(html);
                }
            });
        });
});

$(document).ready(function(){
        $("#lender_city_select").change(function(){
            var id_indonesia_kota_kab = $("#lender_city_select").val();
            $.ajax({
                type: "POST",
                url: "dropdown_district",
                data: "id_indonesia_kota_kab="+id_indonesia_kota_kab,
                success: function(html) {
                    $("#lender_district_select").html(html);
                }
            });
        });
});

$(document).ready(function(){
        $("#lender_district_select").change(function(){
            var id_indonesia_kec = $("#lender_district_select").val();
            $.ajax({
                type: "POST",
                url: "dropdown_village",
                data: "id_indonesia_kec="+id_indonesia_kec,
                success: function(html) {
                    $("#lender_village_select").html(html);
                }
            });
        });
});

$(document).ready(function(){
        $("#borrower_province_select").change(function(){
            var id_indonesia_provinsi = $("#borrower_province_select").val();
            $.ajax({
                type: "POST",
                url: "dropdown_city_residence",
                data: "id_indonesia_provinsi="+id_indonesia_provinsi,
                success: function(html) {
                    $("#borrower_city_select").html(html);
                }
            });
        });
});

$(document).ready(function(){
        $("#borrower_city_select").change(function(){
            var id_indonesia_kota_kab = $("#borrower_city_select").val();
            $.ajax({
                type: "POST",
                url: "dropdown_district",
                data: "id_indonesia_kota_kab="+id_indonesia_kota_kab,
                success: function(html) {
                    $("#borrower_district_select").html(html);
                }
            });
        });
});

$(document).ready(function(){
        $("#borrower_district_select").change(function(){
            var id_indonesia_kec = $("#borrower_district_select").val();
            $.ajax({
                type: "POST",
                url: "dropdown_village",
                data: "id_indonesia_kec="+id_indonesia_kec,
                success: function(html) {
                    $("#borrower_village_select").html(html);
                }
            });
        });
});

/* Tanpa Rupiah */
    
    /* Dengan Rupiah */
    // var dengan_rupiah = document.getElementsByClassName('dengan-rupiah');
    // if (dengan_rupiah) {
    $(function() {
        $('.dengan-rupiah').on('keyup', function(e){
            var dengan_rupiah = formatRupiah(this.value, 'Rp. ');
            $('.dengan-rupiah').val(dengan_rupiah);
    });
     });

    $(function() {
        $('.dengan-rupiah1').on('keyup', function(e){
            var dengan_rupiah1 = formatRupiah(this.value, 'Rp. ');
            $('.dengan-rupiah1').val(dengan_rupiah1);
    });
     });

    $(function() {
        $('.dengan-rupiah2').on('keyup', function(e){
            var dengan_rupiah2 = formatRupiah(this.value, 'Rp. ');
            $('.dengan-rupiah2').val(dengan_rupiah2);
    });
     });
    
    
    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split   = number_string.split(','),
            sisa    = split[0].length % 3,
            rupiah  = split[0].substr(0, sisa),
            ribuan  = split[0].substr(sisa).match(/\d{3}/gi);
            

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

    $("#foto_ktp").submit(function(e) {
    var konfirmasi = confirm("Apakah Anda yakin akan menyimpan foto?");
    if(konfirmasi){
          e.preventDefault();   
          console.log("Melaksanakan proses upload . . . "); 
          var formData = new FormData(this);
          $.ajax({
              url: "../../api/do_upload/",
              type: 'POST',
              data: formData,
              success: function(response) {
                  
                  console.log("Proses upload berhasil!");
                  console.log("Response dari server : ");
                  console.log(response);
                  if(response.message_severity === "success"){
                    $("#original").attr("src","<?php echo base_url('image_dir/"+ response.nama_lampiran +"')?>");
                    Caman("#edited", "<?php echo base_url('image_dir/"+ response.nama_lampiran +"')?>", 
                      function () {
                        console.log("Melaksanakan proses editing . . . "); 
                        this.brightness(15);
                        this.render(function(){
                            do_save_edit(response.nama_lampiran,this.toBase64());
                        });
                      }
                    );
                  }
              },
              error: function(response){
                alert("Proses upload gagal!");
              },
              cache: false,
              contentType: false,
              processData: false
          });
        }
        
  });
  