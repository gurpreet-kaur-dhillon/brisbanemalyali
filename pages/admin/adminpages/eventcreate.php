<div class="container">
    <h4>CREATE AN EVENT</h4>
    <small>Step <span id="showStepNo">1</span> of 5 <span id="showStepName">Event details</span></small>
    <hr>
    <form action="createEventForm/createEvent" id="eventCreateForm" method="POST" enctype="multipart/form-data">
    <!-- step one started -->
        <div id="step1" class="steps" data-step=1>
            <div class="row">
                <div class="col-md-4">
                    <h6>Tell us more about your event</h6>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <label for="eventName">EVENT NAME</label>
                            <input type="text" name="eventName" id="eventName" class="form-control" placeholder="">
                        </div>
                        <div class="col-12">
                            <label for="eventDesc">DESCRIPTION</label>
                            <textarea name="eventDesc" id="" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
                <hr>
            <div class="row mt-3">
                <div class="col-md-4">
                    <h6>Contact details for enquires</h6>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6">
                            <label for="hostName">NAME</label>
                            <input type="text" name="hostName" id="hostName" class="form-control" placeholder="">
                        </div>
                        <div class="col-6">
                            <label for="hostPhone">PHONE NUMBER</label>
                            <input type="text" name="hostPhone" id="hostPhone" class="form-control" placeholder="">
                        </div>
                        <div class="col-12 mt-1">
                            <label for="customerPhone">EMAIL ADDRESS</label>
                            <input type="email" class="form-control" name="hostEmail" id="hostEmail">
                        </div>
                    </div>
                </div>
            </div>
        </div><!--1 step div closed here -->

        <!-- step2 start here -->
        <div id="step2" class="steps d-none" data-step=2>
            <div class="row">
                <div class="col-md-4">
                    <h6>Where will it be located?</h6>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <label for="eventLoc">NAME OF VENUE</label>
                            <input type="text" name="eventLoc" id="eventLoc" class="form-control" placeholder="">
                        </div>
                        <div class="col-6">
                            <label for="eventAdd">ADDRESS 1</label>
                            <input type="text" name="eventAdd" id="eventAdd" class="form-control" placeholder="">
                        </div>
                        <div class="col-6">
                            <label for="eventAdd2">ADDRESS 2</label>
                            <input type="text" name="eventAdd2" id="eventAdd2" class="form-control" placeholder="">
                        </div>
                        <div class="col-4">
                            <label for="eventSuburb">SUBURB</label>
                            <input type="text" name="eventSuburb" id="eventSuburb" class="form-control" placeholder="">
                        </div><div class="col-4">
                            <label for="eventState">STATE</label>
                            <input type="text" name="eventState" id="eventState" class="form-control" placeholder="">
                        </div><div class="col-4">
                            <label for="eventPostcode">POSTCODE</label>
                            <input type="text" name="eventPostcode" id="eventPostcode" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mt-3">
                <div class="col-md-4">
                    <h6>What is the allocation type?</h6>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <label for="eventAttendees">NUMBER OF ATTENDEES</label>
                            <input type="text" name="eventAttendees" id="eventAttendees" class="form-control" placeholder="">
                        </div>
                       
                    </div>
                </div>
            </div>
        </div><!--2 step div closed here -->



        <!-- step3 start here -->
        <div id="step3" class="steps d-none" data-step=3 >
            <div class="row">
                <div class="col-md-4">
                    <h6>What date is your event?</h6>
                    <small>Enter the date and time for the session of your event</small>
                   
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="eventDate">SESSSION DATE</label>
                            <input type="text" name="eventDate" id="eventDate" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-4">
                            <label for="eventTime">SELECT TIME</label>
                            <input value="" name="eventTime" id="eventTime" class="form-control" placeholder="">
                        </div>
                       
                    </div><!--ROW-->
                </div><!--col-8-->
            </div><!--ROW-->
                <hr>

            <div class="row mt-4">
                <div class="col-md-4">
                    <h6>Alow booking between.</h6>
                    <small>Enter the booking window for the event session</small>
                   
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="eventBookStartdate">BOOKING START DATE</label>
                            <input type="text" name="eventBookStartdate" id="eventBookStartdate" class="form-control" placeholder="">
                        </div>
                         <div class="col-md-4">
                            <label for="eventStartTime">BOOKING START TIME</label>
                            <input value="" name="eventStartTime" id="eventStartTime" class="form-control" placeholder="">
                        </div>
                       
    
                    </div><!--ROW-->
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <label for="eventBookEndDate">BOOKING END DATE</label>
                            <input type="text" name="eventBookEndDate" id="eventBookEndDate" class="form-control" placeholder="">
                        </div>
                         <div class="col-md-4">
                            <label for="eventEndTime">BOOKING END TIME</label>
                            <input value="" name="eventEndTime" id="eventEndTime" class="form-control" placeholder="">
                        </div>
                       
                    </div><!--ROW-->
                </div><!--col-8-->
            </div><!--ROW-->
            
            
           
        </div><!--3 step div closed here -->
        

        <!-- step 4 starts here -->
         <div id="step4" class="steps" data-step=4>
            <div class="row">
                <div class="col-md-4">
                    <h6>Is your event free or paid?</h6>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6">
                            <input type="radio" name="ticketPrice" value="0" class="mr-2"> Free
                        </div>
                        <div class="col-6">
                            <input type="radio" name="ticketPrice" value="0" class="mr-2"> Paid 
                        </div>
                        <div class="col-12">
                            <input type="checkbox" name="" id="" class="mr-1 mt-3"> Allow ticket buyer to return free tickets
                        </div>
                        <div class="col-12">
                            <input type="checkbox" name="" id="" class="mr-1 mt-3"> Collect Phone number from ticket buyers
                        </div>
                        <div class="col-12">
                            <input type="checkbox" name="" id="" class="mr-1 mt-3"> Collect address from ticket buyers
                        </div>
                    </div>
                </div>
            </div>
                
           
        </div><!--4 step div closed here -->

         <!-- step 5 starts here -->
         <div id="step5" class="steps" data-step=5>
            <div class="row mb-5">
                <div class="col-md-4">
                    <h6>Upload Banner Image</h6>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6">
                            <input type="file" name="bannerImage" value="0" class="mr-2"> 
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <h6>Upload Image Image</h6>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6">
                            <input type="file" name="eventImg" value="0" class="mr-2"> 
                        </div>
                        
                    </div>
                </div>
            </div>
                
           
        </div><!--5 step div closed here -->



            <input type="hidden" name="createevent">

        <!-- step buttons -->
            <div class="stepbuttons my-2">
                <button class="btn btn-outline-secondary float-left" id="backStep"><i class="fas fa-long-arrow-alt-left"></i> Back</button>
                <button class="btn btn-warning float-right" id="nextStep">Next Venu Details</button>
                <input type="submit" class="btn btn-warning float-right d-none" id="createEventSubmit" value="Create Event">
            </div>
            
    </form>

</div>