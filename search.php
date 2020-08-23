<?php
    use App\classes\Search;
    use App\classes\Validation as Valid;

   

    
    $search = new Search;
   
    if(isset($_REQUEST['searchEvent'])){
       
        $eventName = Valid::inputValidation($_REQUEST['eventName']);
        $postalCode = Valid::inputValidation($_REQUEST['postalCode']);
        $eventDate = Valid::inputValidation($_REQUEST['eventSearchDate']);

        $data = array(
            'eventName' => $eventName,
            'postalCode' => $postalCode,
            'eventDate' => $eventDate
        );

        $foundEvents = $search->findEvent($data);
       
    }

   

    //include('pages/search.php');
    


?>


<!-- <?php //require('common/header.php');?>
<?php //require('common/nav.php');?> -->
<?php

    dd($_REQUEST['event']);

?>

<section class="container-fluid p-0 ">
    <div class="content-box">
        <div class='find-event-bg'>
            <!-- <img src="src/img/gallery/search.jpg" alt=""> -->
        </div>
    </div>
    <div class="container">
        <h1>Search event</h1>
        <div class="row">
            <div class="col">
                <div id='homeEventSearch' class="border rounded">
                    <form action="search/" method="get">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 input-icons">
                                    <i class="fa fa-search icon"></i>
                                    <input type="text" class="form-control input-field" placeholder="search event"
                                        name="eventName">
                                </div>
                                <div class="col-md-3 input-icons">
                                    <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                                    <input type="text" class="form-control input-field" placeholder="postcode/venue"
                                        name="postalCode">
                                </div>
                                <div class="col-md-3 input-icons">
                                    <i class="fa fa-calendar-check-o icon" aria-hidden="true"></i>

                                    <input type="text" class="form-control input-field" placeholder="date"
                                        id="homeSearchDate" name="eventSearchDate">
                                </div>
                                <div class="col-md-3 ">
                                    <input type="submit" class="form-control btn btn-block  custom_outline_btn"
                                        value="Find" name="searchEvent">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!--col--->
        </div>
        <!---row-->

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
                        <a href="book/event/<?php echo $events['event_id'];?>"
                            class="btn cust_btn-primary btn-block">View</a>
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






<?php //require('common/footerContent.php');?>
<?php //require('common/footer.php');?>