<?php
include 'header.php';
include 'conn.php';


if (isset($_POST['submit'])) {
  $Student_Name = $_POST['Student_Name'];
  $Father_Name = $_POST['Father_Name'];
  $D_O_B = $_POST['D_O_B'];
  $Gender = $_POST['Gender'];
  $Category = $_POST['Category'];
  $Nationality = $_POST['Nationality'];
  $Boards = $_POST['Boards'];
  $Stream = $_POST['Stream'];
  $Seeking_Admission_Class = $_POST['Seeking_Admission_Class'];
  $Presently_Studying = $_POST['Presently_Studying'];
  $Previous_Pass_Class_Percentage = $_POST['Previous_Pass_Class_Percentage'];
  $Previous_School_Board = $_POST['Previous_School_Board'];
  $Last_Class = $_POST['Last_Class'];
  $Email = $_POST['Email'];
  $Mobile = $_POST['Mobile'];
  $Address = $_POST['Address'];



  $query = "insert into admission_enquiry (Student_Name,Father_Name,D_O_B,Gender,Category,Nationality,Boards,Stream,Seeking_Admission_Class,Presently_Studying,Previous_Pass_Class_Percentage,Previous_School_Board,Last_Class,Email,Mobile,Address)
   values('$Student_Name','$Father_Name','$D_O_B','$Gender','$Category','$Nationality','$Boards','$Stream','$Seeking_Admission_Class','$Presently_Studying','$Previous_Pass_Class_Percentage','$Previous_School_Board','$Last_Class','$Email','$Mobile','$Address')";
  $res = mysqli_query($conn, $query) or die('Query not run');
  if ($res) {
    echo '<script> swal("Data SuccessFully", "your registration is successful", "success")</script>';
  } else {
    echo '<script> swal("Data Not SuccessFully", "your registration is not successful", "warning")</script>';
  }
}

?>






<h2 class="navbottomtext">Admission Enquiry</h2>
<div class="navbotparagraph">
  <h6 class="icontext"><i class="fas fa-home home"></i> &nbsp;| &nbsp; Admission Enquiry</h6>
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


<form method="POST">

  <div class="form-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Student Name</label>
            <input type="text" class="form-control" name="Student_Name" placeholder="Student name" autocomplete="off" required>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Father's/Guardian Name</label>
            <input type="text" class="form-control" name="Father_Name" placeholder="Father name" autocomplete="off" required>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>D.O.B</label>
            <input type="date" class="form-control" name="D_O_B" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <label for="">Gender</label> <br>
          <div class="form-check form-check-inline">
            <input type="radio" name="Gender" value="Male" class="forn-check-input" id="genders" required>
            <label for="genders" class="form-check-label">&nbsp;Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" name="Gender" value="FeMale" class="forn-check-input" id="genderss" required>
            <label for="genderss" class="form-check-label">&nbsp;FeMale</label>
          </div>
        </div>
        <div class="col-md-4">
          <label for="">&nbsp;Category</label> <br>
          <div class="form-check form-check-inline">
            <input type="radio" name="Category" value="SC/ST" class="forn-check-input" id="scttt" required>
            <label for="scttt" class="form-check-label"> &nbsp;SC/ST</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" name="Category" value="OBC" class="forn-check-input" id="obcc" required>
            <label for="obcc" class="form-check-label"> &nbsp;OBC</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" name="Category" value="GEN" class="forn-check-input" id="gens" required>
            <label for="gens" class="form-check-label"> &nbsp;GEN</label>
          </div>
        </div>
        <div class="col-md-4">
          <label for="">Nationality</label> <br>
          <div class="form-check form-check-inline">
            <input type="radio" name="Nationality" value="Indian" class="forn-check-input" id="indianrr" required>
            <label for="otherrrr" class="form-check-label">&nbsp;Indian</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" name="Nationality" value="Other" class="forn-check-input" id="othersss" required>
            <label for="otherrrr" class="form-check-label">&nbsp;Other</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Boards</label>
            <select class="form-control" name="Boards" required>
              <option value=""><strong>Select board:</strong></option>
              <option value="CBSE">CBSE</option>
              <option value="IB">IB</option>
              <option value="PSEB">PSEB</option>
              <option value="OTHER">OTHER</option>

            </select>
          </div>
        </div>
        <div class="col-md-6 d-none">
          <div class="form-group">
            <label>Stream</label>
            <select class="form-control" name="Stream" required>
              <option value=""><strong>Choose subject:</strong></option>
              <option value="SCIENCE">SCIENCE</option>
              <option value="COMMERCE">COMMERCE</option>
              <option value="HUMANITIES">HUMANITIES</option>
              <option value="NONE">NONE</option>

            </select>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Seeking Admission in Class</label>
            <input type="text" class="form-control" name="Seeking_Admission_Class" placeholder="Seeking Admission class name" autocomplete="off" required>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>School Presently Studying in</label>
            <input type="text" class="form-control" name="Presently_Studying" placeholder="Present school" autocomplete="off" required>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="row">
        
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Previous Pass Class Percentage</label>
            <input type="text" class="form-control" name="Previous_Pass_Class_Percentage" placeholder="Previous Percentage" autocomplete="off" required>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Previous School Board</label>
            <input type="text" class="form-control" name="Previous_School_Board" placeholder="Previous board" autocomplete="off" required>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Previous Class</label>
            <input type="text" class="form-control" name="Last_Class" placeholder="Previous class" autocomplete="off" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="Email" placeholder="Email" autocomplete="off" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Mobile</label>
            <input type="text" class="form-control" name="Mobile" placeholder="Mob. number" autocomplete="off" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="Address" placeholder="Address" autocomplete="off" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <button class="btn signin btn-block" name="submit">Submit</button>
        </div>
      </div>
    </div>
  </div>
  </div>
</form>

<!-- footer start -->

<!-- end footer -->
<?php
include 'footer.php';
?>

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/owl.carousel.min.js"></script>

</body>

</html>