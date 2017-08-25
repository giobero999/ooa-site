<!DOCTYPE html>
<html lang="en">
<?php include("head.php") ?>

<body data-spy="scroll" data-target="#navbar-menu">
  <?php include("navigation.php") ?>

  <!-- HOME -->
  <section class="home">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="home-wrapper home-wrapper-sm text-center">
            <h2 class="animated fadeInDown wow" data-wow-delay=".1s">
              Clean House <span class="text-colored">Homecard</span>
            </h2>
            <p class="animated fadeInDown wow text-muted" data-wow-delay=".2s">OOA Integrated Clean House Legacy ERP with the New Reactive System for Homecard.Ge: Reward and Loyalty Application.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section blog-detail">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="blog-detail-box">
             <div class="row">
               <div class="col-md-12 animated fadeInDown wow">
                 <h4 class="page-header">Objective</h4>
                 <p class="animated fadeInDown wow" data-wow-delay=".3s">Clean House required a system with high concurrency and horizontal scalability, that would withstand a high user load and was scalable enough for rapid user growth in the future.</p>
               </div>
               <div class="col-md-12">
                <img src="images/projects/homecard/iphone1.jpg" class="img-responsive center-block animated fadeInDown wow" alt="img">
               </div>
             </div>
            <div class="row">
              <div class="col-md-12">
                <h4 >Clean House’s Main Requirements</h4>
                <ol>
                  <li>
                    <strong>Improving Performance:</strong>
                    an existing legacy ERP infrastructure acted as a bottleneck; the data was centralised into one database with limited concurrent access; additionally, the ERP had a high downtime; this meant slow and unreliable application performance, and potential loss in the users.
                  </li>
                  <li>
                    <strong>Live Service:</strong>
                    the ERP system is eventually consistent: transactions from the retail outlets are not exchanged immediately with the central server; as a result, immediately displaying collected/used rewards at the point of a purchase was a challenging task.
                  </li>
                  <li>
                    <strong>In-Store Shopping Experience:</strong>
                     Clean House also requested to integrate an app with their retail outlet digital signage’s to provide customers with a better shopping experience, easy to access product information and targeted flash sales.
                  </li>
                </ol>
              </div>
            </div>
            <div class="row">
                <div class="col-xs-3">
                    <img src="images/projects/homecard/featured-image-2.png" class="img-responsive center-block m-t-30 animated fadeInDown wow" alt="img" data-wow-delay=".2s">
                </div>
                <div class="col-xs-4 col-xs-offset-1 ">
                    <img src="images/projects/homecard/featured-image-1.png" class="img-responsive center-block m-t-30 animated fadeInDown wow" alt="img" data-wow-delay=".4s">
                </div>
                <div class="col-xs-3 col-xs-push-1">
                    <img src="images/projects/homecard/featured-image-3.png" class="img-responsive center-block m-t-30 animated fadeInDown wow" alt="img" data-wow-delay=".6s">
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h4 class="page-header">Solution</h4>
                <p>
                  Clean House enlisted the OOA Team to help them build the Homecard application on top of their legacy infrastructure. With limited server resources, our technology stack and design was Reactive orientated.
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p>The Integration required specific expertise from the OOA team:</p>
                <ul>
                  <li>
                    Firstly, we implemented a Circuit Breaker and caching pattern that allowed our applications to function without users noticing the system downtime.
                  </li>
                  <li>
                    We then Improved parallelism by listening to legacy SQL database and both copied and filtered Homecard related events in the new Couchbase cluster.
                  </li>
                  <li>
                    In order to ensure the live data, our system collected unstructured data straight from the local retail outlet systems and processed that data into the reward information, ready for user viewing.
                  </li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p>The most innovative aspect of the project was integrating the Homecard application with the Company’s existing digital signage system. By integrating BLE beacons and the Homecard app, Clean House can now schedule customer specific content. So when customers walk past Clean House retail screens they will see targeted ads’ and offers based on their historical purchases.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <img src="images/projects/homecard/screen.png" class="img-responsive center-block animated fadeInDown wow" alt="img">
              </div>
              <div class="col-md-12">
                <a href="http://dooh.cleanhouse.ge" target="_blank">dooh.cleanhouse.ge</a>
                <br>
                <a href="http://homecard.ge" target="_blank">homecard.ge</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="sidebar">
            <h4 class="padding-t-b-10 text-bold-6 h4">Technologies</h4>
            <div class="tags">
              <a href="#">iOS</a>
              <a href="#">Android</a>
              <a href="#">Scala</a>
              <a href="#">Couchbase</a>
              <a href="#">akka-http</a>
              <a href="#">Objective-C</a>
            </div>
            <!-- <h4 class="padding-t-b-10 text-bold-6 h4">About</h4>
            <p class="text-muted">Our team of designers created an ambitious landing page website, involving not only the HTML and CSS but also the logo, typography, and iconography.</p> -->
        </div>


        <!-- RIGHT SIDE -->

    </div>
  </div>
  </section>




  <?php  include("footer.php"); ?>
</body>
</html>
