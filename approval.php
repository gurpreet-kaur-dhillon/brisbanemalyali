<div class="my-2">
<br>
</div>

<?php
  if(!isset($_SESSION['id'])){
   homePage();
  }

  if($_SESSION['user_role'] != 1){
    echo "<div class='my-5'><h3 class='my-5'>Invalid page access</h3></div>";
    exit;
  }
?>




<?php

    use App\classes\Event;
   

    if(isset($_GET['eventid']) && $_GET['token']){
       $token = $_GET['token'];
       $eventId = $_GET['eventid'];

        $event = new Event;

        $foundEvent = $event->findEvent(['id'=>$eventId]);

        if($foundEvent[0]['eventToken'] !== $token){
            echo "<div class='my-5'><h3 class='my-5'>Bad request</h3></div>";
            exit;
        }

       

    }

?>

<div class="container ">
    <div class="row  mt-5">
        <div class="col-md-12">
            <h3 class="mt-5" id="currentEventStatus">Current Status :<?php echo ucwords(EVENT_STATUS[$foundEvent[0]['status']]);?></h3>
        </div>
        <div class="col-md-4">
            <form action="" class="mt-5" >
                <input type="hidden" value="<?php echo $eventId;?>" id='approveEventId'>
                <label for="approveEvent"><strong>Change event status</strong></label>
                <select class='form-control form-control statusChange' id="approveEvent">;
                    <?php
                    
                    echo "<option>Change</option>";
                        foreach($eventStaus as $key => $role){
                            echo  "<option value=$key>$role</option>";
                        }  
                                    
                ?>
                </select>
            </form>
        </div>
    </div>
    <div class="row">
        
        <div class="col-md-12">
            <div class="my-2">
                <a href="<?php echo DOMAIN?>" class="btn btn-secondary">Home</a>
                <!-- <a href="#" class="backbtn btn cust_btn-primary float-right">Book</a> -->

            </div>
            <img src="upload/<?php echo $foundEvent[0]['banner_img']?>" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-md-12 mt-2">
            <h1 class="text_primary"><?php echo $foundEvent[0]['event_name']?></h1>

            <p>
                <strong class="text_primary">Event description</strong><br>
                <?php echo $foundEvent[0]['event_description']?>
            </p>

            <p>
                <strong class="text_primary">Location</strong><br>
                <?php echo $foundEvent[0]['event_location']?><br>
                <?php echo $foundEvent[0]['event_state']?><br>
                <?php echo $foundEvent[0]['event_postcode']?> <br>
            </p>


            <p>
                <strong class="text_primary">Timing</strong><br>
                <?php echo showDate($foundEvent[0]['event_date'])?>
                <br>
                Time: <?php echo showTIme($foundEvent[0]['event_date'])?> to
                <?php echo showTIme($foundEvent[0]['event_end_date'])?>
            </p>

            <p>
                <strong class="text_primary">Ticket price</strong><br>
                <strong>$<?php echo $foundEvent[0]['event_price'];?>.00/head</strong>

            </p>
            <p>
                <strong class="text_primary">Total seats</strong><br>
                <strong><?php echo $foundEvent[0]['event_attendee'];?></strong>
            </p>

            <p>
                <strong class="text_primary">Contact details</strong><br>
                <strong><?php echo $foundEvent[0]['host_name']?></strong><br>
                <strong>Phone: </strong><?php echo $foundEvent[0]['host_contact']?><br>
                <strong>Email: </strong><?php echo $foundEvent[0]['host_email']?><br>
            </p>


        </div>
    </div>
</div>




<!-- update status-->
<div class="modal" tabindex="-1" role="dialog" id="updateEventStatus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" id="updateEvtSatFrm">
                            
                <input type="hidden" id="updateEventId" name='eventId'>            
                <input type="hidden" id="updateEventStatusVal" name="eventStatus">            
                <input type="hidden"  name="eventStatusUpdate">            
                          

                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3>you want to change event status</h3>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="updateEvent" class="btn btn-primary">Change</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

