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
              TaxiTube<span class="text-colored"> (Internet Of Things system)</span>
            </h2>
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

<div class="col-md-12 animated fadeInDown wow">
              <h4 class="page-header">Overview</h4>
              <p class="animated fadeInDown wow" data-wow-delay=".3s">TaxiTube is an innovative advertising channel that uses LED displays on top of taxis. </p>
              <p class="animated fadeInDown wow" data-wow-delay=".3s">OOA helped TaxiTube to build a content management system (CMS) for curating content on its LED screen network. TaxiTube CMS gives an experience for outdoor advertising akin to Facebook Business Manager. This allows marketing agents and businesses to directly control their campaigns live.</p>
              <p class="animated fadeInDown wow" data-wow-delay=".3s">TaxiTube CMS also allows clients to target their outdoor campaigns and participate in auctions, as well as bid for the best locations.</p>
            </div>
            <div class="col-md-12 animated fadeInDown wow">
              <img src="images/projects/iot/1.jpg" class="img-responsive center-block m-t-30" alt="img">
            </div>
            <div class="col-md-12 animated fadeInDown wow" data-wow-delay=".3s">
              <h4 class="page-header">Challenges</h4>
              <ul>
                <li>The connection between the server and the screens are not reliable as they constantly are driven around the city with regular '3G black zones'.</li>
                <li>Real-time communication with multiple screens in parallel is difficult.</li>
                <li>Data traffic is high, with screens constantly (every second) exchanging information with the servers.</li>
              </ul>
            </div>
            <div class="col-md-12 animated fadeInDown wow">
              <img src="images/projects/iot/2.jpg" class="img-responsive center-block m-t-30" alt="img">
            </div>
            <div class="col-md-12 animated fadeInDown wow" data-wow-delay=".3s">
              <h4 class="page-header">Solution</h4>
              <p>By using the Reactive pattern, we architected a reliable and efficient system that orchestrates an entire screen network. The principal parts of the system were:</p>
              <ul>
                <li>An Android application built for the LED signage media player, responsible for receiving instructions from the server, executing them, and recording ad play statistics in online and offline mode.</li>
                <li>A cluster of routers that communicate with multiple screens concurrently – the clustering architecture allows us to have high-availability and a load-balanced router system.</li>
                <li>A logger that externally observes the system and the devices in order to log its status updates and GPS locations.</li>
                <li>A web service that allows administrators and clients to manage the content.</li>
              </ul>
              <p class="animated fadeInDown wow" data-wow-delay=".3s">Additionally, such feature-rich software required a design with excellent UX and incorporating mobile-friendly responsive web methods.</p>
              <a href="http://taxitube.io" target="_blank">taxitube.io</a>
            </div>


          </div>
        </div>
        <!-- RIGHT SIDE -->
        <div class="col-md-3">
          <div class="sidebar">
            <h4 class="padding-t-b-10 text-bold-6 h4">Technologies</h4>
            <div class="tags">
              <a href="#">Scala</a>
              <a href="#">Akka</a>
              <a href="#">Couchbase</a>
              <a href="#">Play</a>
              <a href="#">Android</a>
              <a href="#">ReactJS</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <?php  include("footer.php"); ?>
</body>
</html>
