<?php
    use App\classes\Event;

    $eventcls = new Event;
    
  
    if(!isset($params[0]) || !isset($params[1])){
        header('location:../');
    }elseif(strtolower($params[0]) != 'event'){
         header('location:../');
    }

   // dd($eventcls->findEvent(['id'=>$params[1]]));

    $foundEvent = $eventcls->findEvent(['id'=>$params[1]]);

?>

<div class="container ">
    <div class="row mt-5">


        <div class="col-md-12 mt-5">
            <div class="my-2">
                <a href="<?php echo DOMAIN?>" class="btn btn-secondary">Home</a>
                <a href="#" class="backbtn btn cust_btn-primary float-right">Book</a>

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