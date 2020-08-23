$(document).ready(function () {

     $.validator.addMethod("letterswithspace", function (value, element) {
         return this.optional(element) || /^[a-z\s]+$/i.test(value);
     }, "Only alphabetical characters");

     var eventDesc = CKEDITOR.replace('eventDesc', {
         allowedContent: true,
         extraPlugins: ['colorbutton', 'colordialog', 'font', 'richcombo'],
         colorButton_enableMore: true,
     });

     eventDesc.on('change', function (evt) {
         // getData() returns CKEditor's HTML content.
         evt.editor.getData().length;
         evt.editor.updateElement();

     });


    $('#eventDate,#eventBookStartdate,#eventBookEndDate').datepicker({
        minDate: new Date() 
    });

    $('#eventDate').datepicker('setDate',$('#eventDate').val());
    $('#eventBookStartdate').datepicker('setDate', $('#eventBookStartdate').val());
    $('#eventBookEndDate').datepicker('setDate', $('#eventBookEndDate').val());


    ///time picker

    $('#eventTime,#eventStartTime,#eventEndTime').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });

    let currentStep = 1

    let stepsName = ['Event Details', 'Venue Details', 'Session Times', 'Create Tickets', 'Image Upload'];
    let totalSteps = stepsName.length;

    $("#nextStep").click(function (e) {
        e.preventDefault();
        //move to next page only of current one is valid
        if (!$('#eventEditForm').find(':input').valid()) {
            return;
        }

        currentStep++;
        if (currentStep >= totalSteps) {
            $('#nextStep').hide();
        }
        $('#nextStep').html(stepsName[currentStep]);
        $('.steps').addClass('d-none');
        $('#step' + currentStep).removeClass('d-none');
        $('#showStepNo').html(currentStep);
        $('#showStepName').html(stepsName[currentStep - 1]);

        $('#backStep').show();

        if (currentStep == totalSteps) {
            $('#editEventSubmit').removeClass('d-none');
        } else {
            $('#editEventSubmit').addClass('d-none');
        }
        //alert(currentStep);


    });



    if (currentStep == 1) {
        $('#backStep').hide();
    }

    $('.steps').addClass('d-none');
    $('#step' + currentStep).removeClass('d-none');



    $('#backStep').click(function (e) {
        e.preventDefault();
        currentStep--;
        if (currentStep <= 1) {
            $('#backStep').hide();
        }
        $('.steps').addClass('d-none');
        $('#nextStep').html(stepsName[currentStep]);
        $('#step' + currentStep).removeClass('d-none');
        $('#showStepNo').html(currentStep);
        $('#showStepName').html(stepsName[currentStep - 1]);

        $('#nextStep').show();
        $('#editEventSubmit').addClass('d-none');
        //alert(currentStep);
    });
///////////////////////////////////////////////////////////////////////////
    $('#eventEditForm').submit(function(e){
        e.preventDefault();
        let formData = new FormData(this);
        console.log(formData);
        $.when(submitFunction(formData, 'updateEventForm')).done(function (res) {
            if(res.status == 1){
                $('#eventUpdateMsg').html(noticePopup(res.msg, 'success'));
            }else{
                 $('#eventUpdateMsg').html(noticePopup(res.msg, 'warning'));
            }
        });
    });


    ///**************************validation form************************************* */
    $('#eventEditForm').validate({

        rules: {
            eventName: {
                required: true,
                minlength: 3,
            },
            eventDesc: {
                required: true,
                minlength: 10,
            },
            hostName: {
                required: true,
                minlength: 3,
                letterswithspace: true
            },
            hostPhone: {
                required: true,
                digits: true,
                rangelength: [10, 10]

            },
            hostEmail: {
                required: true,
                email: true
            },
            eventLoc: {
                required: true
            },
            eventAdd: {
                required: true
            },
            eventSuburb: {
                required: true,
                lettersonly: true
            },
            eventState: {
                required: true,
                lettersonly: true
            },
            eventPostcode: {
                required: true,
                digits: true,
                rangelength: [4, 4]
            },
            eventAttendees: {
                required: true,
                digits: true,
            },
            eventDate: {
                required: true,

            },
            eventBookStartdate: {
                required: true,

            },
            eventBookEndDate: {
                required: true,

            },
            ticketPrice: {
                required: true,
            },
            bannerImage: {
                //required:true,
            },
            eventImg: {
                // required:true,
            }
        }
    });




});