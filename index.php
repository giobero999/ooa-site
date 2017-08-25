<!DOCTYPE html>
<?php
if(isset($_POST['submit'])){
    $to = "g.beridze@taxitube.io"; // this is your Email address
    $from = $_POST['email']. PHP_EOL; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $email . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Thanks!" . "\n\n" . "We appreciate your interest in TaxiTube. We will use your Email wisely and will notify you about our really cool upcoming features very soon." ."\n\n". " You can follow us on twitter at https://twitter.com/taxitube_io and Like our facebook page https://www.facebook.com/pages/TaxiTubeio/726925770786146?fref=ts.". "\n\n" . "Have a great day!" . "\n\n" . "TT Team" ;


    //$file = fopen("emailList.txt","a+");
    //fwrite($file,$from);
    //print_r(error_get_last());


    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<html lang="en">
<?php include("head.php") ?>
<body data-spy="scroll" data-target="#navbar-menu" class="layout-dark">
  <div class="navbar navbar-custom sticky" role="navigation">
    <div class="container">
      <?php include ("brand.php") ?>
      <div class="navbar-collapse collapse" id="navbar-menu">
        <ul class="nav navbar-nav nav-custom-left">
          <li class="active">
            <a href="#home">About</a>
          </li>
          <li>
            <a href="#Products">Products</a>
          </li>
          <li>
            <a href="#services">Services</a>
          </li>
          <li>
            <a href="#technology">Technology</a>
          </li>
          <li>
            <a href="#projects">Projects</a>
          </li>
          <li>
            <a href="#team">Team</a>
          </li>
          <li>
            <a href="join-us.php">Join Us</a>
          </li>
          <li>
            <a href="/blog">BLOG</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

    <section class="home" id="home">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="home-wrapper text-center">
              <h2 class="animated fadeInDown wow" data-wow-delay=".1s">About<span class="text-colored">Us</span></h2>
              <p class="animated fadeInDown wow text-muted" data-wow-delay=".2s">We build all sorts of software, from small web, mobile, and desktop applications to large-scale reactive systems – tailored for start-ups, scale-ups, and enterprises.</p>
              <a href="#Products" class="btn btn-primary btn-shadow btn-rounded w-lg animated fadeInDown wow scroll-down-btn" data-wow-delay=".4s">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Products -->
    <section class="section " id="Products">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="title-box">
              <p class="title-alt">Products</p>
              <h3 class="fadeIn animated wow" data-wow-delay=".1s"></h3>
              <div class="border"></div>
            </div>
          </div>
        </div>
        <div class="row m-t-30">
          <div class="col-md-12">
            <div class="col-sm-4">
              <div class="question-q-box"><i class="material-icons question-icon flash">&#xE3E7;</i></div>
              <div class="animated fadeInLeft wow" data-wow-delay=".3s">
                <h4 class="question text-white">Reactive Systems</h4>
                <p class="answer">We build <a href="http://www.reactivemanifesto.org">Reactive</a> software so that you can scale your business easily and offer reliable services to your users. We accomplish this using the Lightbend technology stack.</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="question-q-box"><i class="material-icons question-icon">&#xE325;</i></div>
              <div class="animated fadeInDown wow" data-wow-delay=".5s">
                <h4 class="question text-white">Mobile Application Development</h4>
                <p class="answer">Whether you want to rapidly prototype an app idea or develop a more comprehensive product, our team can create native iOS and Android apps with excellent UI, UX, and performance.</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="question-q-box"><i class="material-icons question-icon">&#xE30D;</i></div>
              <div class="animated fadeInRight wow" data-wow-delay=".4s">
                <h4 class="question text-white">Bespoke Web Solutions</h4>
                <p class="answer">Our team can create custom web applications with fully-Responsive and ergonomic design, using cutting-edge technologies.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SERVICES -->
    <section class="section bg-gray" id="services">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="title-box">
              <p class="title-alt">Services</p>
              <h3 class="fadeIn animated wow" data-wow-delay=".2s">Stages of Work</h3>
              <div class="border"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <article class="pricing-column  col-lg-3 col-sm-6">
            <div class="inner-box fadeIn animated wow" data-wow-delay=".1s">
              <div class="plan-header text-center">
                <h3 class="plan-title">Discover</h3>
              </div>
              <ul class="plan-stats list-unstyled text-center">
                <li>We start by eliciting general aims and specific technological requirements from you. This stage allows us to determine what you really need and understand your goals and challenges.</li>
              </ul>
              <div class="">
                <div class="service-border"></div>
              </div>
            </div>
          </article>
          <article class="pricing-column  col-lg-3 col-sm-6">
            <div class="inner-box fadeIn animated wow" data-wow-delay=".2s">
              <div class="plan-header text-center">
                <h3 class="plan-title">Planning</h3>
              </div>
              <ul class="plan-stats list-unstyled text-center">
                <li>Our experienced team of generalists and specialists will provide the overarching design for the software solution, tailored directly to your business and technological needs. We always endeavour to answer not only your present needs but also future evolution of the business.</li>
              </ul>
              <div class="">
                <div class="service-border"></div>
              </div>
            </div>
          </article>
          <article class="pricing-column  col-lg-3 col-sm-6">
            <div class="inner-box fadeIn animated wow" data-wow-delay=".3s">
              <div class="plan-header text-center">
                <h3 class="plan-title">Implementation</h3>
              </div>
              <ul class="plan-stats list-unstyled text-center">
                <li>The software development process will be divided up into milestones and will be built iteratively according to a mutually-agreed schedule. Your feedback after every milestone is essential for achieving the best solution possible. In addition, we will conduct system, performance, and user-acceptance testing at this stage according to your business model.
                </li>
              </ul>
              <div class="">
                <div class="service-border"></div>
              </div>
            </div>
          </article>

          <article class="pricing-column  col-lg-3 col-sm-6">
            <div class="inner-box fadeIn animated wow" data-wow-delay=".4s">
              <div class="plan-header text-center">
                <h3 class="plan-title">Maintenance</h3>
              </div>
              <ul class="plan-stats list-unstyled text-center">
                <li>We provide full–life-cycle software and infrastructure support. This includes ongoing system maintenance, regular updates, and new features.</li>
              </ul>
              <div class="">
                <div class="service-border"></div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>
    <!-- END SERVICES -->

  <!--   TECHNOLOGY -->
    <section class="section" id="technology">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="title-box">
              <p class="title-alt">Technology</p>
              <h3 class="fadeIn animated wow text-white" data-wow-delay=".1s">Some of our expertise</h3>
              <div class="border"></div>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-xs-4 col-sm-4">
            <div class="service-item animated fadeInLeft wow" data-wow-delay=".1s">
              <img src="images/icons/scala-black.svg" id="scala" alt="img">
              <div class="service-detail">
                <h4 class="text-light">Scala</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-4 col-sm-4">
            <div class="service-item animated fadeInDown wow" data-wow-delay=".3s">
              <img src="images/icons/akka-black.png" id="akka" alt="img">
              <div class="service-detail">
                <h4 class="text-light">Akka</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-4 col-sm-4">
            <div class="service-item animated fadeInRight wow" data-wow-delay=".5s">
              <img src="images/icons/couchbase-black.svg" width="" id="couchbase" alt="img">
              <div class="service-detail">
                <h4 class="text-light">Couchbase</h4>
              </div>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-xs-4 col-sm-4">
            <div class="service-item animated fadeInLeft wow" data-wow-delay=".1s">
              <img src="images/icons/js-black.png" id="js" width="48" alt="img">
              <div class="service-detail">
                <h4 class="text-light">Javascript</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-4 col-sm-4">
            <div class="service-item animated fadeInDown wow" data-wow-delay=".3s">
              <img src="images/icons/react-black.svg" id="react" width="48" alt="img">
              <div class="service-detail">
                <h4 class="text-light">React</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-4 col-sm-4">
            <div class="service-item animated fadeInRight wow" data-wow-delay=".5s">
              <img src="images/icons/bootstrap-black.svg" id="bootstrap" width="48" alt="img">
              <div class="service-detail">
                <h4 class="text-light">Bootstrap</h4>
              </div>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-xs-4 col-sm-4">
            <div class="service-item animated fadeInLeft wow" data-wow-delay=".5s">
              <img src="images/icons/ios-black.png" width="48" id="ios" alt="img">
              <div class="service-detail">
                <h4 class="text-light">iOS</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-4 col-sm-4">
            <div class="service-item animated fadeInDown wow" data-wow-delay=".5s">
              <img src="images/icons/android-black.svg" width="48" id="android" alt="img">
              <div class="service-detail">
                <h4 class="text-light">Android</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-4 col-sm-4">
            <div class="service-item animated fadeInRight wow" data-wow-delay=".5s">
              <img src="images/icons/play-black.png" width="40"  id="play" alt="img">
              <div class="service-detail">
                <h4 class="text-light">Play</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section contact-page bg-gray quote-section">
      <div class="container">
        <div class="row">
          <div class="text-center animated fadeInDown wow">
            <button data-toggle="collapse" class="btn btn-warning btn-lg collapse-btn" data-target="#demo"><span>Request a  Quote</span>
            </button>
          </div>
          <br/>
          <div class="col-sm-12 collapse" id="demo">
            <form action="index.php" id="contact-form" method="post" autocomplete="off">
              <div class="col-md-6">
                <div class="form-group">
                 <input id="first_name" class="form-control" type="text" name="first_name" placeholder="Name"  required>
                </div>
               </div>
               <div class="col-md-6">
                <div class="form-group">
                 <input id="contact_email" type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
               </div>
               <div class="col-md-12">
                 <div class="form-group">
                   <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                 </div>
               </div>
              <div class="col-md-6">
                <input type="file" name="file-2[]" id="file-2" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple />
                <label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Upload File&hellip;</span></label>
              </div>
              <button class="btn btn-primary btn-shadow btn-rounded w-md pull-right"  type="submit" name="submit">
                send
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- END CONTACT FORM -->

    <!-- PROJECTS -->
    <section class="section " id="projects">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="title-box">
              <p class="title-alt">Projects</p>
              <h3 class="fadeIn animated wow" data-wow-delay=".1s"></h3>
              <div class="border"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <div id="testi-carousel" class="owl-carousel owl-spaced">
              <div class="zoomIn animated wow" data-wow-delay=".1s">
                <div class="clientblock text-muted">
                  <a href="iot.php" class="single-project text-muted">
                    <img src="images/projects/TT-logo.png" alt="Taxitube" style="width: 113px">
                    <h4>TAXITUBE</h4>
                  </a>
                </div>
              </div>
              <div class="zoomIn animated wow" data-wow-delay=".1s">
                <div class="clientblock text-muted">
                  <a href="homecard.php" class="single-project text-muted">
                    <img src="images/projects/homecard.png" alt="Homecard" style="width: 113px">
                    <h4>HOMECARD</h4>
                  </a>
                </div>
              </div>
              <div class="zoomIn animated wow" data-wow-delay=".1s">
                <div class="clientblock text-muted">
                  <a href="pixelart.php" class="single-project text-muted">
                    <img src="images/projects/pixelart.png"  alt="Pixelart" style="width: 119px">
                    <h4>PIXELART</h4>
                  </a>
                </div>
              </div>
              <div class="zoomIn animated wow" data-wow-delay=".1s">
                <div class="clientblock text-muted">
                  <a href="weshapp.php" class="single-project text-muted">
                    <img src="images/projects/WA-logo.png"  alt="Weshapp" style="width: 113px">
                    <h4>WESHAPP</h4>
                  </a>
                </div>
              </div>
              <div class="zoomIn animated wow" data-wow-delay=".1s">
                <div class="clientblock text-muted">
                  <a href="agropark.php" class="single-project text-muted">
                    <img src="images/projects/agropark.png"  alt="Agropark" style="width: 113px">
                    <h4>AGROPARK</h4>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END PROJECTS -->

    <!-- PROJECTS -->
    <section class="section bg-gray" id="counter">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div id="counter">
      				<div class="col-xs-6 col-sm-3">
                <div class="bl">
        					<div data-num="3"  class="count-number">0</div>
        					<h5>ACTIVE PROJECTS</h5>
        				</div>
      				</div>
      				<div class="col-xs-6 col-sm-3">
                <div class="bl">
        					<div data-num="8"  class="count-number">0</div>
        					<h5>TEAM MEMBERS</h5>
        				</div>
      				</div>
      				<div class="col-xs-6 col-sm-3">
                <div class="bl">
        					<div data-num="11"  class="count-number">1</div>
        					<h5>COMPLETED PROJECTS</h5>
        				</div>
      				</div>
              <div class="col-xs-6 col-sm-3">
                <div class="bl">
                  <div data-num="8"  class="count-number">1</div>
                  <h5>CLIENTS</h5>
                </div>
              </div>
      			</div>
          </div>
        </div>
      </div>
    </section>
    <!-- END PROJECTS -->

    <!-- TEAM -->
    <section class="section" id="team">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="title-box">
              <p class="title-alt">Team</p>
              <h3 class="fadeIn animated wow text-white" data-wow-delay=".1s">Meet the team</h3>
              <div class="border"></div>
            </div>
          </div>
        </div> <!-- end row -->

        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="row team text-center">
              <!-- team-member -->
              <div class="col-sm-6">
                <div class="team-member animated fadeInDown wow" data-wow-delay=".3s">
                  <img src="images/team/team-1.jpg" alt="team-member" class="img-responsive img-circle">
                  <h4 class="text-white">Zuka Kakabadze</h4>
                  <p class="text-light">Developer</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="team-member animated fadeInDown wow" data-wow-delay=".3s">
                  <img src="images/team/team-3.jpg" alt="team-member" class="img-responsive img-circle">
                  <h4 class="text-white">Alexander Reguiro</h4>
                  <p class="text-light">Developer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END TEAM -->

  <?php  include("footer.php"); ?>
  </body>
</html>
