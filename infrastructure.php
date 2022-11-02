<?php
include 'header.php';
?>

<!--<h2 class="navbottomtext">Infrastructure</h2>-->
<div class="navbotparagraph">
  <h6 class="icontext"><a href="index.php"><i class="fas fa-home home ddd"></a></i> &nbsp;| &nbsp;
    Infrastructure</h6>
</div>
</section>

<section class="facilities">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mt-2">
        <p class="facilitiesText">
          We offer fully equipped sports amenities, medical facilities and a huge lush green campus spread over half acre which is architecturally well-planned and constructed. We believe in maintaining utmost cleanliness and maintenance of academic and non-academic spaces. All the spaces and equipment are ergonomically designed to ensure student safety and improve efficiency. <br><br>
          The peaceful ambience of the campus is an ideal place for receiving education in the tender years of one’s life, which is why wisdom is proudly one of the most beautiful campuses across India. <br><br>
          A large majority of the academic and sports faculty resides on the campus, so that they are accessible anytime even during post-school hours while imparting them quality education in and out of the class.</p>
      </div>
      <div class="col-lg-6">
        <img src="img/infraimg.png" class="facilityimg" alt="">
      </div>
    </div>
  </div>
</section>


<!--new image-->

<section class="photoGallery1">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide sl-slider1 carouselall" data-ride="carousel" data-interval="1500">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="infra_Img/1.jpeg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="infra_Img/2.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="infra_Img/3.jpeg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="infra_Img/4.jpeg" alt="Four slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="infra_Img/5.jpeg" alt="five slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="infra_Img/6.jpeg" alt="six slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="infra_Img/7.jpeg" alt="seven slide">
            </div>
            <!--<div class="carousel-item">-->
            <!--  <img class="d-block w-100" src="infra_Img/8.jpeg" alt="eight slide">-->
            <!--</div>-->
            <div class="carousel-item">
              <img class="d-block w-100" src="infra_Img/9.jpeg" alt="nine slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
</section>

<!--end image-->



<!-- end navbar -->
<section class="encrolls">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="encrolfl">How to Enroll Your Child to a Class?</h2>
      </div>
      <div class="col-md-6">
        <div class="buttonssss">
          <a href="contactus.php"><button class="btn btn-goldenssssd">Contact Us</button></a>
          <a href="tel:801 095 1313"><button class="btn btn-golden scsf"><i class="fas fa-phone-square-alt sss"></i> &nbsp; +91-801 095 1313</button></a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- footer start -->

<!-- end footer -->
<?php
include 'footer.php';
?>

<script>
  $('.sl-slider1').carouselall({
  interval: 1000;
   });
</script>

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/owl.carousel.min.js"></script>

</body>

</html>