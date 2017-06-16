
     $(document).ready(function(){
         $( "#client" ).validate({
             rules: {
                 first_name: {
                     required: true
                 },
                 last_name: {
                     required: true
                 },
                 department: {
                     required: true
                 },
                 email: {
                     required: true,
                     email: true
                 },
                 phone: {
                     required: true,
                     digits: true,
                     minlength: 10,
                     maxlength: 10
                 },
                 due_date: {
                     required: true,
                     date: true
                 },
                 summary: {
                     required: true
                 }
             },
             messages: {
                 first_name: "Please enter your first name",
                 last_name: "Please enter your last name",
                 department: "Please select your department",
                 email: "Please enter a valid email address",
                 due_date: "Please enter a valid due date",
                 summary: "Please enter a summary",
                 phone: {
                     required: "Please enter your phone number"
                 }

             }
         });
     });

     $(document).ready(function(){
         $( "#press_release" ).validate({
             rules: {
                 'media_type[]': {
                    required: true
                },
                 details: {
                     required: true
                 }
                 ,
                 professional: {
                     required: true
                 }
                 ,
                 promotional: {
                     required: true
                 }
                 ,
                 'audience[]': {
                     required: true
                 }
             }
         });
     });

     $(document).ready(function(){
         $( "#design_printing" ).validate({
             rules: {
                 details: {
                     required: true
                 }
                 ,
                 'audience[]': {
                     required: true
                 }
                 ,
                 payment_type: {
                     required: true
                 }
                 ,
                 job_description: {
                     required: true
                 }
                 ,
                 copies: {
                     required: true,
                     digits: true,
                     maxlength: 3
                 }
                 ,
                 date_needed: {
                     required: true,
                     date: true
                 }
                 ,
                 services_needed: {
                     required: true
                 },
                 color: {
                     required: true
                 }
             }
             // ,
             // messages: {
             //     details: "Please enter details"
             //     ,
             //     payment_type: "Please select apayment type"
             //     ,
             //     job_description: "Please enter a job description"
             //     ,
             //     copies: {
             //         required: "Please enter number of copies needed"
             //     },
             //     date_needed: "Please enter the date needed"
             //     ,
             //     services_needed: "Please enter services needed"
             //     ,
             //     color: "Please enter color preference"
             // }
         });
     });

     $(document).ready(function(){
         $( "#photography" ).validate({
             rules: {
                 details: {
                     required: true
                 }
                 ,
                 location: {
                     required: true
                 }
                 ,
                 requested_date: {
                     required: true,
                     date: true
                 }
                 ,
                 start_hour: {
                     required: true
                 }
                 ,
                 end_hour: {
                     required: true
                 }
                 ,
                 use: {
                     required: true
                 }
             },
             messages: {
                 details: "Please enter details"
                 ,
                 location: "Please enter a location"
                 ,
                 requested_date: "Please enter a date"
                 ,
                 start: "Please enter a start time"
                 ,
                 end: "Please enter a end time"
                 ,
                 use: "Please enter how the photos will be used"
             }
         });
     });


     $(document).ready(function(){
         $( "#social_media" ).validate({
             rules: {
                 media_type: {
                     required: true
                 }
                 ,
                 'audience[]': {
                     required: true
                 }
                 ,
                 details: {
                     required: true
                 }
                 ,
                 twitter_text: {
                     maxlength: 140
                 }
                 ,
                 name: {
                     required: true
                 }
                 ,
                 email: {
                     required: true
                 }
                 ,
                 department: {
                     required: true
                 }
                 ,
                 phone: {
                     required: true
                 }
                 ,
                 'social[]': {
                     required: true
                 }
             }
         });
     });

     $(document).ready(function(){
         $( "#videography" ).validate({
             rules: {
                 details: {
                     required: true
                 }
                 ,
                 'audience[]': {
                     required: true
                 }
                 ,
                 purpose: {
                     required: true
                 }
                 ,
                 use: {
                     required: true
                 }
             }
             // ,
             // messages: {
             //     details: "Please enter details"
             //     ,
             //     location: "Please enter a location"
             //     ,
             //     requested_date: "Please enter a date"
             //     ,
             //     start: "Please enter a start time"
             //     ,
             //     end: "Please enter a end time"
             //     ,
             //     use: "Please enter how the photos will be used"
             // }
         });
     });

     $(document).ready(function(){
         $( "#paid_advertising" ).validate({
             rules: {
                 details: {
                     required: true
                 }
                 ,
                 'audience[]': {
                     required: true
                 }
                 ,
                 purpose: {
                     required: true
                 }
                 ,
                 budget: {
                     required: true,
                     digits: true
                 }
                 ,
                 ad_event: {
                     required: true
                 }
                 ,
                 'advertising[]': {
                     required: true
                 }
             }
         });
     });

     $(document).ready(function(){
         $( "#presentation" ).validate({
             rules: {
                 details: {
                     required: true
                 }
                 ,
                 'audience[]': {
                     required: true
                 }
                 ,
                 presentation_date: {
                     required: true,
                     date:true
                 }
                 ,
                 use: {
                     required: true
                 }
                 ,
                 'assistance[]': {
                     required: true
                 }
             }
         });
     });

     $(document).ready(function(){
         $( "#event" ).validate({
             rules: {
                 GHC: {
                     required: true
                 }
                 ,
                 details: {
                     required: true
                 }
                 ,
                 event_date: {
                     required: true,
                     date:true
                 }
                 ,
                 start_hour: {
                     required: true
                 }
                 ,
                 location: {
                     required: true
                 }
                 // ,
                 // attendance: {
                 //     required: true,
                 //     digits: true
                 // }
             }
         });
     });

     $(document).ready(function(){
             $( "#create" ).validate({
                 rules: {
                     email: {
                         required: true,
                         email: true
                     },
                     emailconf: {
                         equalTo: "#email"
                     },
                     password: {
                         required: true,
                         minlength: 8
                     },
                     passconf: {
                         equalTo: "#password"
                     }
                 },
                 messages: {
                     email:"Enter your email address",
                     password: {
                         required: "Select a password",
                         minlength: "Password must be at least 8 characters"
                     }
                 }
         });
     });

     $(document).ready(function(){
         $( "#GHC" ).validate({
             rules: {
                 GHC_ID: {
                     required: true,
                     range: [900000000 , 900999999]
                 }
             },
             messages: {
                 GHC_ID: "Please enter valid GHC ID in the form 900XXXXXX"
             }
         });
     });

     $(document).ready(function(){
         $( "#login" ).validate({
             rules: {
                 email: {
                     required: true,
                     email: true
                 },
                 password: {
                     required: true,
                     minlength: 8
                 }
                 // passconf: {
                 //     equalTo: "#password"
                 // }
             },
             messages: {
                 email:"Enter your email address",
                 password: {
                     required: "Select a password",
                     minlength: "Password must be at least 8 characters"
                 }
             }
         });
     });



     $(document).ready(function(){
         $( "#personal" ).validate({
             // ignore: ".ignore",
             rules: {
                 first_name: {
                     required: true
                 },
                 last_name: {
                     required: true
                 },
                 birth_date: {
                     required: true,
                     date: true
                 },
                 street: {
                     required: true
                 },
                 city: {
                     required: true
                 },
                 zip: {
                     required: true,
                     range: [10000, 99999]
                 },
                 preferred_phone: {
                     required: true,
                     digits: true,
                     minlength: 10,
                     maxlength: 10
                 }

             },
             messages: {
                 first_name: "Please specify your first name",
                 last_name: "Please specify your last name",
                 birth_date: {
                     required: "Please specify your birth date",
                     date: "Please enter your birth date in format MM/DD/YYYY"
                 },
                 street: "Please enter your street address",
                 city: "Please enter your city",
                 zip: {
                     required: "Please enter your zip code",
                     range: "Please enter a valid zip code"
                 },
                 preferred_phone: {
                     required: "Please enter your preferred phone"
                 }

             }
         });
     });

     $(document).ready(function(){
         $( "#identification" ).validate({
             rules: {
                 fileToUpload: {
                     required: true,
                     extension: "jpg|jpeg|bmp|gif|png"
                 }
             },
             messages: {
                 fileToUpload:
                     {
                         required: "Please select an identification file to attach",
                         extension: "Please select a jpg, jpeg, bmp, gif or png file"
                     }
             }
         });
     });

     $(document).ready(function(){
         $( "#cpr" ).validate({
             rules: {
                 fileToUpload: {
                     required: true,
                     extension: "jpg|jpeg|bmp|gif|png"
                 },
                cpr_expiration_date: {
                     required: true,
                     date: true
                }
             },
             messages: {
                 fileToUpload: {
                     required: "Please select an CPR file to attach",
                     extension: "Please select a jpg, jpeg, bmp, gif or png file"
                 },
                 cpr_expiration_date: {
                     required: "Please enter the expiration date of your current CPR certification",
                     date: "Please use the format YYYY-MM-DD"
                 }
             }
         });
     });

     $(document).ready(function(){
         $( "#license" ).validate({
             rules: {
                 number: {
                     required: true
                 },
                 fileToUpload: {
                     required: true,
                     extension: "jpg|jpeg|bmp|gif|png"
                 }

             },
             messages: {
                 number: "Please enter your license number",
                 fileToUpload: {
                     required: "Please select a License file to attach",
                     extension: "Please select a jpg, jpeg, bmp, gif or png file"
                 }
             }


         });
     });

     $(document).ready(function(){
         $( "#school" ).validate({
             rules: {
                 school: {
                     required: true
                 },
                 school_year: {
                     required: true,
                     range: [1900, 2050]
                 }

             },
             messages: {
                 school: "Please enter the name of the school",
                 school_year: "Please enter your graduation year"
             }


         });
     });

     $(document).ready(function(){
         $( "#emergency" ).validate({
             // ignore: ".ignore",
             rules: {
                 e_first_name: {
                     required: true
                 },
                 e_last_name: {
                     required: true
                 },
                 e_street: {
                     required: true
                 },
                 e_city: {
                     required: true
                 },
                 e_zip: {
                     required: true,
                     range: [10000, 99999]
                 },
                 e_preferred_phone: {
                     required: true,
                     digits: true,
                     minlength: 10,
                     maxlength: 10
                 }
             },
             messages: {
                 e_first_name: "Please specify your first name",
                 e_last_name: "Please specify your last name",
                 e_street: "Please enter your street address",
                 e_city: "Please enter your city",
                 e_zip: {
                     required: "Please enter your zip code",
                     range: "Please enter a valid zip code"
                 },

             }
         });
     });

     $(document).ready(function(){
         $( "#employer" ).validate({
             rules: {
                 company: {
                     required: true
                 },
                 phone: {
                     required: true,
                     digits: true,
                     minlength: 10,
                     maxlength: 10
                 }

             },
             messages: {
                 company: "Please enter the company name",
                 phone: {
                     required: "Please enter the company phone number"
                 }
             }


         });
     });

     $(document).ready(function(){
         $( "#transcript" ).validate({
             rules: {
                 school: {
                     required: true
                 },
                 fileToUpload: {
                     required: true,
                     extension: "jpg|jpeg|bmp|gif|png"
                 }
             },
             messages: {
                 school: "Please enter the name of the school",
                 fileToUpload: {
                     required:  "Please upload a copy of your transcript",
                     extension: "Please select a jpg, jpeg, bmp, gif or png file"
                 }
             }
         });
     });

     // $(document).ready(function(){
     //     $( "#license" ).validate({
     //         rules: {
     //             number: {
     //                 required: true
     //             },
     //             fileToUpload: {
     //                 required: true,
     //                 extension: "jpg|jpeg|bmp|gif|png"
     //             }
     //
     //         },
     //         messages: {
     //             number: "Please enter your license number",
     //             fileToUpload: {
     //                 required: "Please select a License file to attach",
     //                 extension: "Please select a jpg, jpeg, bmp, gif or png file"
     //             }
     //         }
     //
     //
     //     });
     // });

     $(document).ready(function(){
         $( "#program" ).validate({
             rules: {
                 student_type: {
                     required: true
                 },
                 hear: {
                     required: true
                 }
             },
             messages: {
                 student_type: "Please select the program you're interested in",
                 hear: "Please tell us how you heard about our program"
             }
         });
     });

     var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];    
     function Validate(oForm) {
         var arrInputs = oForm.getElementsByClassNameName("upload");
         for (var i = 0; i < arrInputs.length; i++) {
             var oInput = arrInputs[i];
             if (oInput.type == "file") {
                 var sFileName = oInput.value;
                 if (sFileName.length > 0) {
                     var blnValid = false;
                     for (var j = 0; j < _validFileExtensions.length; j++) {
                         var sCurExtension = _validFileExtensions[j];
                         if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                             blnValid = true;
                             break;
                         }
                     }
                     
                     if (!blnValid) {
                         alert("Sorry, the only allowed extensions are: " + _validFileExtensions.join(", "));
                         return false;
                     }
                 }
             }
         }
       
         return true;
     }