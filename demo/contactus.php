<?php
include 'conn.php';
include 'header.php';

if (isset($_POST['submi'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $message = $_POST['message'];

  $query = "insert into any_questions (Name,Email,Phone,Address,Message) 
  values('$name','$email','$phone','$address','$message')";
  $res = mysqli_query($conn, $query) or die('query not run');
  if ($res) {
    echo '<script> swal("Data SuccessFully", "your registration is successful", "success")</script>';
  } else {
    echo '<script> swal("Data Not SuccessFully", "your registration is not successful", "warning")</script>';
  }
}

?>




<h2 class="navbottomtext">Contact Us</h2>
<div class="navbotparagraph">
  <h6 class="icontext"><a href="index.php"><i class="fas fa-home home ddd"></a></i> &nbsp;| &nbsp; Contact Us</h6>
</div>
</section>

<section class="contacus">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="circleiconq">
          <a href="" class="callicon"><i class="fas fa-phone-alt"></i></a> <br><br>
          <span class="callnumber">+91 8010951313</span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="circleiconq">
          <a href="" class="callicon"><i class="fas fa-phone-alt"></i></a> <br><br>
          <span class="callnumber">+91 8010951313</span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="circleiconq">
          <a href="" class="callicon"><i class="far fa-envelope"></i></a> <br><br>
          <span class="callnumber">enquiry@thewisdomschools.in</span>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="circleiconqq">
          <a href="" class="calliconn"><i class="fas fa-map-marker-alt"></i></a> <br><br>
          <h5 class="headoffice">Corporate Office</h5>
          <span class="callnumberr">SCF 11, Second Floor, Phase-2, Sector 54, Mohali - 160055 INDIA.</span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="circleiconqq">
          <a href="" class="calliconn"><i class="fas fa-map-marker-alt"></i></a> <br><br>
          <h5 class="headoffice">Head Office</h5>
          <span class="callnumberr">8796, Twinberry way, Elk Grove, California, USA</span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="circleiconqq">
          <a href="" class="calliconn"><i class="fas fa-map-marker-alt"></i></a> <br><br>
          <h5 class="headoffice">Main Branch</h5>
          <span class="callnumberr">Harbour City, Opp. Police Line, Amritsar Road, Tarn Taran 143401 (Punjab)</span>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="locationcontct">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mt-3">
        <h3 class="locateus">Locate Us</h3>
        <iframe src="https://maps.google.com/maps?q=Harbour%20City%20%20Barnala%20-%20Amritsar%20Bypass%20Rd%2C%20Basant%20Avenue%2C%20Tarn%20Taran%20Sahib%2C%20Punjab%20143401&t=m&z=10&output=embed&iwloc=near" width="500" height="600" style="border:0;" allowfullscreen="" loading="lazy" class="iframes"></iframe>
      </div>

      <div class="col-lg-6">
        <div class="form-containerss">
          <h3 class="title">Any Questions? Write to us:</h3>
          <form class="form-horizontal" method="POST">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter Name" autocomplete="off" required>
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter Email" autocomplete="off" required>
            </div>
            <div class="form-group">
              <label for="">Phone</label>
              <input type="text" class="form-control" name="phone" placeholder="Enter Phone" autocomplete="off" required>
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <input type="text" class="form-control" name="address" placeholder="Enter Address" autocomplete="off" required>
            </div>
            <div class="form-group">
              <label for="">Message</label>
              <textarea name="message" rows="5" cols="65" class="textareasa" placeholder="Enter Nessage" autocomplete="off" required></textarea>
            </div>
            <button value=" Send" class="btn btn-block btn-light forms" type="submit" id="submit" name="submi">SUBMIT DETAILS</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>
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

<?php
include 'footer.php';
?>
<!-- end footer -->

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/owl.carousel.min.js"></script>

</body>

</html>