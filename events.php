<?php
     use App\classes\Event;

    $eventcls = new Event;

    $foundEvents = $eventcls->AllEvents();

?>

<section class="container-fluid p-0 ">
    <div class="content-box">
        <div class='find-event-bg'>
            <!-- <img src="src/img/gallery/search.jpg" alt=""> -->
        </div>
    </div>
    <div class="container">
        <h1>All events</h1>

       
        <div class="row">
            <?php foreach($foundEvents as $events):?>
            <div class="col-md-3 my-3">
                <div class="card" style="width: auto;">
                    <?php if(!empty($events['banner_img'])):?>
                        <img class="card-img-top" src="upload/<?php echo $events['banner_img']?>" alt="Card image cap">
                    
                   <?php endif;?>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $events['event_name']?></h5>
                        <p class="card-text">Place: <strong><?php echo $events['event_location'];?></strong>
                            <br>
                            Date: <strong><?php echo showDate($events['event_date']);?></strong>
                            <br>
                            Time: <strong><?php echo showTime($events['event_date']);?></strong>
                        </p>
                            <a href="book/event/<?php echo $events['event_id'];?>" class="btn cust_btn-primary btn-block">View</a>
                    </div>
                </div>
                <!--card-->
            </div>
            <!--col-->
            <?php endforeach;?>
        </div>
        <!--row-->

    </div>
</section>






