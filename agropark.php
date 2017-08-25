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
              Agro<span class="text-colored">park</span>
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
            <div class="col-md-12">
              <img src="images/projects/agropark/web1.png" class="img-responsive center-block m-t-30 animated fadeInDown wow" alt="img">
            </div>
            <div class="col-md-12 animated fadeInDown wow">
              <h4 class="page-header">Overview</h4>
              <div class="col-md-12 animated fadeInDown wow" data-wow-delay=".3s">
                <p>
                  Agropark is the world's first online platform start-up for investing in serviced agricultural land plots. They approached the OOA team to build a Minimum Viable Product (MVP) in order to test the market and get some feedback. Agropark didn’t have a tech team or any previous experience building software products; this is a common scenario when working with start-ups. That’s one of the reasons OOA provides four stages of development to guide our clients from idea inception through to product launch:
                </p>
                <ul>
                  <li>
                    <strong>Stage 1 - Discovery:</strong> OOA and Agropark sat down together to learn and better understand the current agricultural investment domain. This allowed us to build Agropark a Software Requirements Specification (SRS) that precisely defines the functionality of the system. This was an important stage not only for our OOA developers, but for the Agropark team as well, as taking their idea and putting it down on paper helped them to organise and galvanise into getting started with the project.
                  </li>
                  <li>
                    <strong>Stage 2 - Planning:</strong> OOA provided a software solution design where it was mutually decided that Agroparks system should have a web client backed with a secure and scalable back-end. The web client was built in reactJS in order to enable rich and engaging single page user interfaces that could provide instant feedback based on user interactions and other stimuli. The backend was built in Scala as it provides a strong type system vital for software that can handle financial transactions. This approach not only helped OOA to build the back-end in fewer lines of code, but also resulted in a strong type safety which eliminated the need for unit testing, resulting in faster application development.
                  </li>
                  <li>
                    <strong>Stage 3 - Implementation:</strong> When building an MVP it is important to create the correct foundation for the future evolution of the software system without sacrificing the momentum/speed of the development. OOA achieved this by using the correct technologies from Lightbend for building a high quality investment platform that unlike most MVPs can be re-used in future versions of Agroparks software.
                  </li>
                  <li>
                    <strong>Stage 4 - Maintenance:</strong> When building an MVP it is important to create the correct foundation for the future evolution of the software system without sacrificing the momentum/speed of the development. OOA achieved this by using the correct technologies from Lightbend for building a high quality investment platform that unlike most MVPs can be re-used in future versions of Agroparks software.
                  </li>
                </ul>
              </div>

              <p class=" animated fadeInDown wow" data-wow-delay=".9s">The OOA team successfully delivered the Agropark MVP on schedule and it is now undergoing internal testing. Agropark managed to attract a lot of interest with the MVP and raised more funds to finance the first version of the product which OOA will be starting work on in April 2017 to develop it to the next stage.
              <a href="http://agropark.ge" style="color:#00b19d; text-decoration:underline" target="blank">Visit Site</a> </p>
            </div>
          </div>
        </div>
        <!-- RIGHT SIDE -->
        <div class="col-md-3">
          <div class="sidebar">
            <h4 class="padding-t-b-10 text-bold-6 h4">Technologies</h4>
            <div class="tags">
              <a href="#">HTML5</a>
              <a href="#">CSS3</a>
              <a href="#">Javascript</a>
              <a href="#">ReactJS</a>
              <a href="#">Couchbase</a>
              <a href="#">Scala</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php  include("footer.php"); ?>
</body>
</html>
