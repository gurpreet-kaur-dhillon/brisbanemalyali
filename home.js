$(document).ready(function(){

    
    const HOME_ENQUIRY = 'homeEnqForm'

    $.validator.addMethod("letterswithspace", function (value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Only alphabetical characters");


      $('#homeEnquiryForm').validate({

        rules: {
                name: {
                    required: true,
                    minlength: 3,
                    letterswithspace: true
              },
                email: {
                    required: true,
                    email:true
              },
                subject: {
                    required: true,
                    minlength: 3,
              },
                message: {
                    required: true,
              },
             
          },
          messages: {
                name: {
                  required: 'Your name is required',
                },
                message:{
                    required: 'please write something to us'
                }
          },
            submitHandler: function (form) {
                let enqForm = $('#homeEnquiryForm')[0];
                let formData = new FormData(enqForm);

                //loader function
               // btnLoaderOn('addUserBtn');
                $('#homeEnqSubBtn').html('Please wait...');
                $.when(submitFunction(formData, HOME_ENQUIRY)).done(function (res) {
                   
                    if (res.status == 1) {
                        enqForm.reset();
                        let html = `Thanks for showing interest.We'll contact you soon.`;
                        $('#homeEnqMsg').html(noticePopup(html, 'success'));
                    } else if (res.msg) {
                        $('#homeEnqMsg').html(noticePopup(res.msg, 'warning'));
                    }
                    $('#homeEnqSubBtn').html('Send Message');
                 

                });
            }
      });
});