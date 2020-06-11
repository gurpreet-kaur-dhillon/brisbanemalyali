<!--==========================




    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0"><span>Events</span> made easy<br</h1>
      <br>
      
      <p class="mb-4 pb-0">Powerful and easy to use software to sell tickets online.
      <br>Affordable pricing and local support that makes a difference.</p>
      <!-- enquiry form -->
      


      <a href="dashboard/event/create" class="about-btn scrollto">Host The Event</a>
    </div>
    <div id='homeEventSearch'>
       <form action="">
        <div class="container">
            <div class="row">
              <div class="col-md-3 input-icons">
                <i class="fa fa-search icon" ></i>
                <input type="text" class="form-control input-field" placeholder="search event">
              </div>
              <div class="col-md-3 input-icons">
                <i class="fa fa-map-marker icon" aria-hidden="true"></i>

                <input type="text" class="form-control input-field" placeholder="postcode/venue">
              </div>
              <div class="col-md-3 input-icons">
                <i class="fa fa-calendar-check-o icon" aria-hidden="true"></i>

                <input type="text" class="form-control input-field" placeholder="date" id="homeSearchDate">
              </div>
              <div class="col-md-3 ">
                <input type="submit"  class="form-control btn btn-block  custom_outline_btn" value="Find">
              </div>
            </div>
        </div>
      </form>
    </div>
  </section>

  
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
          <p>Deepika</p>
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
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>




