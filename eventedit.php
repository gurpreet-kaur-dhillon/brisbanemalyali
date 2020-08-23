<?php
    use App\classes\Event;
    $eventcls = new Event;
    
    $values = array(
       

        'id' =>$_SESSION['id'],
        'eventId' => $params[2],
        'role'=>$_SESSION['user_role']
    );
    $events =  $eventcls->findUpdate($values);

  
?>

<div class="container">
    <h4>UPDATE EVENT</h4>
    <small>Step <span id="showStepNo">1</span> of 5 <span id="showStepName">Event details</span></small>
    <hr>
    <form  id="eventEditForm" method="POST" enctype="multipart/form-data">
        <!-- step one started -->
        <input type="hidden" value="<?php echo $events[0]['event_id']?>" name="eventId">
        <div id="step1" class="steps" data-step=1>
            <div class="row">
                <div class="col-md-4">
                    <h6>Tell us more about your event</h6>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <label for="eventName">EVENT NAME</label>
                            <input type="text" name="eventName" id="eventName" class="form-control" value="<?php echo isset($events[0]['event_name'])? $events[0]['event_name']:null;?>">
                        </div>
                        <div class="col-12">
                            <label for="eventDesc">DESCRIPTION</label>
                            <textarea name="eventDesc" id="" cols="30" rows="3" class="form-control">
                            <?php echo isset($events[0]['event_description'])? $events[0]['event_description']:null;?>
                            </textarea>
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
                            <input type="text" name="hostName" id="hostName" class="form-control" placeholder="" value="<?php echo isset($events[0]['host_name'])? $events[0]['host_name']:null;?>">
                        </div>
                        <div class="col-6">
                            <label for="hostPhone">PHONE NUMBER</label>
                            <input type="text" name="hostPhone" id="hostPhone" class="form-control" value="<?php echo isset($events[0]['host_contact'])? $events[0]['host_contact']:null;?>">
                        </div>
                        <div class="col-12 mt-1">
                            <label for="customerPhone">EMAIL ADDRESS</label>
                            <input type="email" class="form-control" name="hostEmail" id="hostEmail" value="<?php echo isset($events[0]['host_email'])? $events[0]['host_email']:null;?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--1 step div closed here -->

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
                            <input type="text" name="eventLoc" id="eventLoc" class="form-control" placeholder="" value="<?php echo isset($events[0]['event_location'])? $events[0]['event_location']:null;?>">
                        </div>
                        <div class="col-6">
                            <label for="eventAdd">ADDRESS 1</label>
                            <input type="text" name="eventAdd" id="eventAdd" class="form-control" placeholder="" value="<?php echo isset($events[0]['address1'])? $events[0]['address1']:null;?>">
                        </div>
                        <div class="col-6">
                            <label for="eventAdd2">ADDRESS 2</label>
                            <input type="text" name="eventAdd2" id="eventAdd2" class="form-control" placeholder="" value="<?php echo isset($events[0]['address2'])? $events[0]['address2']:null;?>">
                        </div>
                        <div class="col-4">
                            <label for="eventSuburb">SUBURB</label>
                            <input type="text" name="eventSuburb" id="eventSuburb" class="form-control" value="<?php echo isset($events[0]['suburb'])? $events[0]['suburb']:null;?>">
                        </div>
                        <div class="col-4">
                            <label for="eventState">STATE</label>
                            <input type="text" name="eventState" id="eventState" class="form-control" placeholder="" value="<?php echo isset($events[0]['event_state'])? $events[0]['event_state']:null;?>">
                        </div>
                        <div class="col-4">
                            <label for="eventPostcode">POSTCODE</label>
                            <input type="text" name="eventPostcode" id="eventPostcode" class="form-control"
                                placeholder="" value="<?php echo isset($events[0]['event_postcode'])? $events[0]['event_postcode']:null;?>">
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
                            <input type="text" name="eventAttendees" id="eventAttendees" class="form-control"
                                placeholder="" value="<?php echo isset($events[0]['event_attendee'])? $events[0]['event_attendee']:null;?>">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--2 step div closed here -->



        <!-- step3 start here -->
        <div id="step3" class="steps d-none" data-step=3>
            <div class="row">
                <div class="col-md-4">
                    <h6>What date is your event?</h6>
                    <small>Enter the date and time for the session of your event</small>

                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="eventDate">SESSSION DATE</label>
                            <input type="text" name="eventDate" id="eventDate" class="form-control" placeholder="" value="<?php echo isset($events[0]['event_date'])?  setDate($events[0]['event_date']):null;?>">
                        </div>
                        <div class="col-md-4">
                            <label for="eventTime">SELECT TIME</label>
                            <input  name="eventTime" id="eventTime" class="form-control" value="<?php echo isset($events[0]['event_date'])? showTime($events[0]['event_date']):null;?>">
                        </div>

                    </div>
                    <!--ROW-->
                </div>
                <!--col-8-->
            </div>
            <!--ROW-->
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
                            <input type="text" name="eventBookStartdate" id="eventBookStartdate" class="form-control" value="<?php echo isset($events[0]['event_start_date'])?  setDate($events[0]['event_start_date']):null;?>">
                        </div>
                        <div class="col-md-4">
                            <label for="eventStartTime">BOOKING START TIME</label>
                            <input name="eventStartTime" id="eventStartTime" class="form-control"
                                value="<?php echo isset($events[0]['event_start_date'])?  showTime($events[0]['event_start_date']):null;?>">
                        </div>


                    </div>
                    <!--ROW-->
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <label for="eventBookEndDate">BOOKING END DATE</label>
                            <input type="text" name="eventBookEndDate" id="eventBookEndDate" class="form-control" value="<?php echo isset($events[0]['event_end_date'])?  setDate($events[0]['event_end_date']):null;?>">
                        </div>
                        <div class="col-md-4">
                            <label for="eventEndTime">BOOKING END TIME</label>
                            <input name="eventEndTime" id="eventEndTime" class="form-control" value="<?php echo isset($events[0]['event_end_date'])?  showTime($events[0]['event_end_date']):null;?>">
                        </div>

                    </div>
                    <!--ROW-->
                </div>
                <!--col-8-->
            </div>
            <!--ROW-->



        </div>
        <!--3 step div closed here -->


        <!-- step 4 starts here -->
        <div id="step4" class="steps" data-step=4>
            <div class="row">
                <div class="col-md-4">
                    <h6>Is your event free or paid?</h6>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6">
                            <input type="hidden" id="ticketPriceHidden" value="<?php echo isset($events[0]['event_price'])? $events[0]['event_price']:null;?>">
                            <input type="radio" name="ticketPrice" value="0" class="mr-2" checked> Free
                        </div>
                        <div class="col-6">
                            <input type="radio" name="ticketPrice" value="0" class="mr-2"> Paid
                        </div>
                        <div class="col-12">
                            <input type="checkbox" name="" id="" class="mr-1 mt-3"> Allow ticket buyer to return free
                            tickets
                        </div>
                        <div class="col-12">
                            <input type="checkbox" name="" id="" class="mr-1 mt-3"> Collect Phone number from ticket
                            buyers
                        </div>
                        <div class="col-12">
                            <input type="checkbox" name="" id="" class="mr-1 mt-3"> Collect address from ticket buyers
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!--4 step div closed here -->

        <!-- step 5 starts here -->
        <div id="step5" class="steps" data-step=5>
            <div class="row mb-5">
                <div class="col-md-4">
                    <h6>Upload Banner Image</h6>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6">
                            <input type="file" name="bannerImage"  class="mr-2">
                            <input type="hidden" name="eventBannerHidden" class="mr-2" value="<?php echo isset($events[0]['banner_img'])? $events[0]['banner_img']:nulll ?>">
                        </div>
                        <div>
                            <img src="upload/<?php echo $events[0]['banner_img'] ?>" alt="bannerimg" style="width:200px" class="img-fluid">
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
                            <input type="file" name="eventImg" class="mr-2">
                            <input type="hidden" name="eventImgHidden" class="mr-2" value="<?php echo isset($events[0]['event_img'])? $events[0]['event_img']:null;?>">
                        </div>
                        <div>
                            <img src="upload/<?php echo $events[0]['event_img'] ?>" alt="eventimg" style="width:200px"  class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!--5 step div closed here -->

        <input type="hidden" name="editevent">

        <!-- step buttons -->
        <div id="eventUpdateMsg" class="my-3"></div>
        <div class="stepbuttons my-2">
            <button class="btn btn-outline-secondary float-left" id="backStep"><i
                    class="fas fa-long-arrow-alt-left"></i> Back</button>
            <button class="btn btn-warning float-right" id="nextStep">Next Venu Details</button>
            <input type="submit" class="btn btn-warning float-right d-none" id="editEventSubmit" value="Edit Event">
        </div>

    </form>

</div>