
$(document).ready(function(){

    $.validator.addMethod("letterswithspace", function (value, element) {
                return this.optional(element) || /^[a-z\s]+$/i.test(value);
            }, "Only alphabetical characters");

    $('#eventDate,#eventBookStartdate,#eventBookEndDate').datepicker({
        minDate: new Date(),
    });
    

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


    ///time picker

    $('#eventTime,#eventStartTime,#eventEndTime').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });

    let currentStep = 1

    let stepsName = ['Event Details','Venue Details','Session Times','Create Tickets','Image Upload'];
    let totalSteps = stepsName.length;
   
    $("#nextStep").click(function (e) {
        e.preventDefault();
        //move to next page only of current one is valid
        if (!$('#eventCreateForm').find(':input').valid()) {
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
        
            if(currentStep == totalSteps){
                $('#createEventSubmit').removeClass('d-none');
            }else{
                $('#createEventSubmit').addClass('d-none');
            }
           //alert(currentStep);
        
        
    });



    if(currentStep == 1){
        $('#backStep').hide();
    }
    
    $('.steps').addClass('d-none');
    $('#step'+currentStep).removeClass('d-none');

   

    $('#backStep').click(function (e) {
        e.preventDefault();
        currentStep--;
        if(currentStep <= 1){
            $('#backStep').hide();
        }
        $('.steps').addClass('d-none');
        $('#nextStep').html(stepsName[currentStep]);
        $('#step' + currentStep).removeClass('d-none');
        $('#showStepNo').html(currentStep);
        $('#showStepName').html(stepsName[currentStep - 1]);
       
        $('#nextStep').show();
        $('#createEventSubmit').addClass('d-none');
        //alert(currentStep);
    });

     $('#eventCreateForm').submit(function (e) {
         e.preventDefault();
         let formData = new FormData(this);
            $('#createEventSubmit').html('Please wait...');
            $('#createEventSubmit').addClass('disabled');
         $.when(submitFunction(formData, 'createEventForm')).done(function (res) {
             if (res.status == 1) {
                 $('#eventCreateMsg').html(noticePopup(res.msg, 'success'));
                  setTimeout(function () {
                      location.href = 'dashboard/event/manage';
                  }, 1000);
             } else {
                 $('#eventCreateMsg').html(noticePopup(res.msg, 'warning'));
             }
             $('#createEventSubmit').removeClass('disabled');
             $('#createEventSubmit').html('Create event');
         });
     });

    ///**************************validation form************************************* */
    $('#eventCreateForm').validate({
        
        rules:{
            eventName:{
                required:true,
                minlength: 3,
                
            },
            eventDesc:{
                required:true,
                minlength: 10,
            },
            hostName:{
                required:true,
                minlength: 3,
                letterswithspace: true
            },
            hostPhone:{
                required:true,
                digits: true,
                rangelength: [10, 10]
            },
            hostEmail:{
                required:true,
                email:true
            },
            eventLoc:{
                required:true
            },
            eventAdd:{
                required:true
            },
            eventSuburb:{
                required:true,
                lettersonly:true
                
            },
            eventState:{
                required:true,
                lettersonly:true
            },
            eventPostcode:{
                required:true,
                digits: true,
                rangelength: [4, 4]
            },
            eventAttendees:{
                required:true,
                digits: true,
            },
            eventDate:{
                required:true,
                
            },
            eventBookStartdate:{
                required:true,
                
            },
            eventBookEndDate:{
                required:true,
               
            },
            ticketPrice:{
                required:true,
            },
            bannerImage:{
               // required:true,
            },
            eventImg:{
               // required:true,
            },
            
        },
        messages: {
            hostPhone: {
                rangelength: 'Phone no must be in 10 digits ',
            }
        }
    });

    


});