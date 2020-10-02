<?php
    use App\classes\Event;
    $eventcls = new Event;

?>

<!--==========================Intro Section============================-->
<section id="intro">
    <div class="intro-container wow fadeIn">
        <h1 class="mb-4 pb-0"><span>Events</span> made easy<br></h1>
        <br>
        <p class="mb-4 pb-0">Powerful and easy to use software to sell tickets online.
            <br>Affordable pricing and local support that makes a difference.</p>
        <!-- enquiry form -->
        <a href="dashboard/event/create" class="about-btn scrollto">Host The Event</a>
    </div>
    <div id='homeEventSearch'>
        <form action="searchevent" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 input-icons">
                        <i class="fa fa-search icon"></i>
                        <input type="text" class="form-control input-field" placeholder="search event" name="eventName">
                    </div>
                    <div class="col-md-3 input-icons">
                        <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                        <input type="text" class="form-control input-field" placeholder="postcode/venue"
                            name="postalCode">
                    </div>
                    <div class="col-md-3 input-icons">
                        <i class="fa fa-calendar-check-o icon" aria-hidden="true"></i>

                        <input type="text" class="form-control input-field" placeholder="date" id="homeSearchDate"
                            name="eventSearchDate">
                    </div>
                    <div class="col-md-3 ">
                        <input type="submit" class="form-control btn btn-block  custom_outline_btn" value="Find"
                            name="searchEvent">
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- search event on home page -->
<?php 

$events = $eventcls->fetch(5);

//dd($events);


?>



<section id="homeSearchEvent">
    <div class="container my-3">
        <h3 class="text_primary">Latest events</h3>
        <!-- carousle -->

        <div class="row">
            <?php 
        $limitEvent = count($events) > 4 ? 4: count($events);  
        if($limitEvent > 0):
        
        for($i=0; $i < $limitEvent; $i++):?>
            <div class="col-md-3 my-3">
                <div class="card" style="">
                    <img class="card-img-top" src="upload/<?php echo $events[$i]['banner_img']?>" alt="Card image cap"
                        style="height:200px">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $events[$i]['event_name']?></h5>
                        <p class="card-text">Place: <strong><?php echo $events[$i]['event_location'];?></strong>
                            <br>
                            Date: <strong><?php echo showDate($events[$i]['event_date']);?></strong>
                            <br>
                            Time: <strong><?php echo showTime($events[$i]['event_date']);?></strong>
                        </p>
                        <a href="book/event/<?php echo $events[$i]['event_id'];?>"
                            class="btn cust_btn-primary btn-block">View</a>
                    </div>
                </div>
                <!--card-->
            </div>
            <!--col-->

            <?php   endfor;
                    else:
                    echo  'No latest events';
                 endif;  
            ?>
            
        </div>
        <!--row-->

    </div>



    <div class="row mt-2">
        <div class="col-12 m-auto text-center">
            <a href="" class="btn custom_outline_btn">SEE MORE</a>
        </div>
    </div>
    </div>
</section>
<!-- search event section ends here -->

<main id="main">
    <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                    <a href="src/img/venue-gallery/1.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="src/img/venue-gallery/1.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                    <a href="src/img/venue-gallery/2.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="src/img/venue-gallery/2.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                    <a href="src/img/venue-gallery/3.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="src/img/venue-gallery/3.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                    <a href="src/img/venue-gallery/4.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="src/img/venue-gallery/4.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                    <a href="src/img/venue-gallery/5.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="src/img/venue-gallery/5.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                    <a href="src/img/venue-gallery/6.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="src/img/venue-gallery/6.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                    <a href="src/img/venue-gallery/7.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="src/img/venue-gallery/7.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                    <a href="src/img/venue-gallery/8.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="src/img/venue-gallery/8.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

        </div>
    </div>

    </section>


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

        <div class="container">

            <div class="section-header">
                <h2>Contact Us</h2>
                <p>Feel free to contact us.</p>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <address>2/34 Brisbane City, Australia</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:04356789655">0435 6789 655</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                </div>

            </div>

            <div class="form">
                <div id="homeEnqMsg"></div>
               
                <form  method="post"  class="contactForm" id="homeEnquiryForm">
                    <input type="hidden"  name="homeEnqForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                               
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="homeContactemail" placeholder="Your Email">
                                
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="homeContactsubject" placeholder="Subject">
                          
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" id="homeContactTextarea"></textarea>
                       
                    </div>
                    <div class="text-center"><button type="submit" id='homeEnqSubBtn'>Send Message</button></div>
                </form>
            </div>

        </div>
    </section><!-- #contact -->

</main>