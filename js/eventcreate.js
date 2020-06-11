
$(document).ready(function(){

    $('#eventDate,#eventBookStartdate,#eventBookEndDate').datepicker({
        minDate: new Date(),
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
            },
            hostPhone:{
                required:true,
                digits: true,
                minlength: 2,

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
                required:true
            },
            eventState:{
                required:true
            },
            eventPostcode:{
                required:true
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
            submitHandler: function (form) {
                // some other code
                // maybe disabling submit button
                // then:
                $(form).submit();
            }
        }
    });

    


});