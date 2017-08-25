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
              Weshapp.<span class="text-colored">io</span>
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

              <h5 class=" animated fadeInDown wow" data-wow-delay=".3s"></h5>
              <img src="images/projects/weshapp/1.jpg" class="img-responsive center-block m-t-30 animated fadeInDown wow" alt="img">
              <p class=" animated fadeInDown wow" data-wow-delay=".3s"></p>
                <p>OOA helped Weshapp to build an MVP app to test the concept; the goal was to provide both microblogging (Twitter-like) and private messaging functionalities for its users on local mesh networks.</p>
                <p>The main challenge for this project was to create a synchronising and self-healing distributed system without a central server. On top of this, the app had to have an intuitive user experience due to the inherently unreliable nature of connections.</p>
                <p>This project taught us and Weshapp that mesh networking technology is not yet scalable on mobile phones due to their weak WiFi/Bluetooth antennas creating a 'bottleneck problem': one phone can easily end-up being a bridge between tens or hundreds of other devices. However, Weshapp decided that as new WiFi/Bluetooth antennas and protocols are rolled out, they we will investigate the feasability of the project again.</p>

                <img src="images/projects/weshapp/4.jpg" class="img-responsive center-block m-t-30 animated fadeInDown wow" alt="img">
          </div>
        </div>
        <div class="col-md-3">
          <div class="sidebar">
            <h4 class="padding-t-b-10 text-bold-6 h4">Technologies</h4>
            <div class="tags">
              <a href="#">iOS</a>
              <a href="#">Couchbase</a>
              <a href="#">Swift</a>
              <a href="#">C</a>
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
