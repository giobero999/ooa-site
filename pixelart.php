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
              Pixel<span class="text-colored">art</span>
            </h2>
            <p class="animated fadeInDown wow text-muted" data-wow-delay=".2s">Pixelart is a young and ambitious digital signage content management software company, based in London. Technological innovation is at the core of their strategy, as it is essential for the Company to become competitive in the digital signage CSM industry.</p>
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
              <p class="animated fadeInDown wow" data-wow-delay=".3s">Pixelart’s tech team engaged with OOA in order to build their innovative CMS platform that allows digital signage network owners to rent out their screen ad space to third party advertisers.</p>
              <p class="animated fadeInDown wow" data-wow-delay=".3s">Unlike internet advertising, Digital Out Of Home (DOOH) advertising lacks audience targeting capability; but OOA helped Pixelart provide this functionality to it’s users by extracting information from social media and transforming this data into interest maps for their advertisers to build target DOOH campaigns from.</p>
              <p class="animated fadeInDown wow" data-wow-delay=".3s">Pixelart was looking for an open source technology architecture that could scale and flex to match the pace of change and growth in the industry in an agile way.</p>
            </div>
            <div class="col-md-12 animated fadeInDown wow">
              <img src="images/projects/pixelart/imac.png" class="img-responsive center-block m-t-30" alt="img">
            </div>
            <div class="col-md-12 animated fadeInDown wow" data-wow-delay=".3s">
              <h4 class="page-header">Challenges</h4>
              <p>There were four main challenges when building the system:</p>
              <ul>
                <li>
                  Internet Of Things (IOT) platform - system had to be easily compatible with all the different types of Digital Signage players and screens in the market. Players are low energy devices that cannot perform a lot of computation and therefore require special care.
                </li>
                <li>
                  Had to have an easy to use ad’ builder that allows building content for any circumstance.
                </li>
                <li>
                  Publishers usually have a large network of screens and publishing content to all the screen can be a logistical challenge: for instance, sending a 50mg file to 100 screens means uploading 5g of content across the network. The system needed to automatically synchronise the new content without any manual involvement.
                </li>
                <li>
                  Use an open source technology architecture that could scale and flex to match the pace of change and growth in the industry in an agile way.
                </li>
              </ul>
            </div>
            <div class="col-md-12 animated fadeInDown wow">
              <img src="images/projects/pixelart/screens.png" class="img-responsive center-block m-t-30" alt="img">
            </div>
            <div class="col-md-12 animated fadeInDown wow" data-wow-delay=".3s">
              <h4 class="page-header">Solution</h4>
              <p>OOA team decided to go Reactive and build the system using the following technologies: 
                <strong>Scala, Akka, Akka-Stream, Akk-Http, Couchbase, DDD, CQRS, ReactJS</strong>
              </p>
              <ul>
                <li>
                  This approach increases a rate at which new features, partnership integrations and other code is developed and shipped. Maximises on the elasticity and cost effectiveness of the cloud.
                </li>
                <li>
                  Gives developers the best platform to maintain a higher rate of innovation than competitors can facilitate.
                </li>
                <li>
                  DDD approach helped to build a system with a well designed core that was flexible enough to allow plugging new players with ease. The player devices were modelled as Akka actors, which allowed for coordinating with lots of players in a system efficient manner.
                </li>
                <li>
                  Using ReactJS, OOA team designed an Ad’ builder that allows advertisers to build content for their marketing campaigns. It allows users to build a rich set of content via its Appstore infrastructure.
                </li>
                <li>
                  Using Akka-Stream OOA team was able to build end-to-end streaming infrastructure for sending large data across many screens: this technology allows not only utilising back-pressure incase of a slow consuming data player, but also provides efficient failure handling if there are any network connection problems.
                </li>
              </ul>
              <p>
                A ‘proof of concept’ was built within six weeks followed by a minimum viable product within three months. This included infrastructure, performance monitoring and integration with internal systems.
              </p>
              <p>Pixelart will be launching their system later this year.</p>
              <a href="http://pxlart.io" target="_blank">pxlart.io</a>
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
              <a href="#">DDD</a>
              <a href="#">Akka-Stream</a>
              <a href="#">Akk-Http</a>
              <a href="#">CQRS</a>
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
