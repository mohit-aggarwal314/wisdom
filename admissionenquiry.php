<?php
include 'header.php';
include 'conn.php';
if (isset($_POST['submit']))
{
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
    if ($res)
    {
        echo '<script> swal("Data SuccessFully", "your registration is successful", "success")</script>';
    }
    else
    {
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
<section class="container-fluid11 form-bg">
    <div class="container">
        <div class="card">
            <div class="card-header" style="width: 100%;"><h5 class="text-info" style="margin:0;">Online Admission Enquiry Form</h5>
                <small class="pagetitleh2">Please enter your pupil detail and submit the form</small>
            </div>
            <div class="card-body">
                <form id="online-admission-form" class="spaceb60 spacet60-- onlineform" name="online-admission-form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12"><h5 class="pagetitleh2">Student Detail</h5><hr></div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enroll To Class</label><small class="req"> *</small> 
                                <select id="class_id" name="class_id" class="form-control" required>
                                    <!--<option value="111">Select</option>
                                        <option value="13">Nursery</option>
                                         <option value="14">LKG</option>
                                         <option value="15">UKG</option>
                                         <option value="16">CLASS 1ST</option>
                                         <option value="17">CLASS 2ND</option>
                                         <option value="18">CLASS 3RD</option>
                                         <option value="19">CLASS 4TH</option>
                                         <option value="20">CLASS 5TH</option>
                                         <option value="21">CLASS 6TH</option>
                                         <option value="22">CLASS 7TH</option>
                                         <option value="23">CLASS 8TH</option>
                                         <option value="24">CLASS 9TH</option>
                                         <option value="25">STD 10TH</option> -->
                                </select>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-3 hidden hide">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Section</label> 
                                <select id="section_id" name="section_id" class="form-control"><option>Select</option></select>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label><small class="req"> *</small> 
                                <input id="firstname" name="firstname" placeholder="" type="text" class="form-control" value="" required>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input id="lastname" name="lastname" placeholder="" type="text" class="form-control" value="" required>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                    </div><!--./row--> 
                    <div class="row"> 
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputFile"> Gender</label><small class="req"> *</small> 
                                <select class="form-control" name="gender" required>
                                    <option value="">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date Of Birth</label> (<small class="">DD-MM-YYYY</small>)<small class="req"> *</small> 
                                <input type="text" class="form-control date2 input-datepicker" value="" id="dob" name="dob" placeholder="DD-MM-YYYY Format" required>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-6">&nbsp;</div>
                    </div><!--./row--> 
                    <div class="row">  
                        <div class="col-md-12"><h5 class="pagetitleh2">Parent Guardian Detail</h5><hr></div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Father Name</label>
                                <input id="father_name" name="father_name" placeholder="" type="text" class="form-control" value="" required>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Father Phone</label>
                                <input id="father_phone" name="father_phone" placeholder="" type="text" class="form-control" value="">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Father Occupation</label>
                                <input id="father_occupation" name="father_occupation" placeholder="" type="text" class="form-control" value="">
                                <span class="text-danger"></span>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mother Name</label>
                                <input id="mother_name" name="mother_name" placeholder="" type="text" class="form-control" value="">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mother Phone</label>
                                <input id="mother_phone" name="mother_phone" placeholder="" type="text" class="form-control" value="">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mother Occupation</label>
                                <input id="mother_occupation" name="mother_occupation" placeholder="" type="text" class="form-control" value="">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                    </div><!--./row-->        

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>If Guardian Is<small class="req"> *</small>&nbsp;&nbsp;&nbsp;</label>
                            <label class="radio-inline">
                                <input type="radio" name="guardian_is" value="father"> Father                </label>
                            <label class="radio-inline">
                                <input type="radio" name="guardian_is" value="mother"> Mother                </label>
                            <label class="radio-inline">
                                <input type="radio" name="guardian_is" value="other"> Other                </label>
                            <span class="text-danger"></span>
                        </div>


                        <!-- <div class="col-md-4 d-none">
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Upload Documents</label>
                                <input id="document" name="document" type="file" class="form-control" value="">
                                <span class="text-danger"></span>
                            </div>
                        </div> -->




                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Guardian Name</label><small class="req"> *</small>
                                <input id="guardian_name" name="guardian_name" placeholder="" type="text" class="form-control" value="" required>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Guardian Relation</label>
                                <input id="guardian_relation" name="guardian_relation" placeholder="" type="text" class="form-control" value="">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Guardian Phone</label><small class="req"> *</small>
                                <input id="guardian_phone" name="guardian_phone" placeholder="" type="text" class="form-control" value="" required>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                    </div><!--./row-->    
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Guardian Occupation</label>
                                <input id="guardian_occupation" name="guardian_occupation" placeholder="" type="text" class="form-control" value="">
                                <span class="text-danger"></span>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Guardian Email</label>
                                <input id="guardian_email" name="guardian_email" placeholder="" type="text" class="form-control" value="">
                                <span class="text-danger"></span>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">   
                                <label for="exampleInputEmail1">Guardian Address</label>
                                <textarea id="guardian_address" name="guardian_address" placeholder="" class="form-control" rows="2" maxlength="150"></textarea>
                                <span class="text-danger"></span>
                            </div>  
                        </div>


                        <div class="col-md-12"> 
                            <div class="form-group pull-right">   
                                <button type="submit" class="onlineformbtn btn btn-success btn-lg">Submit Application</button>
                            </div> 
                        </div>    
                    </div><!--./row-->    
                </form>
            </div>
        </div>
    </div>

    <div id="adm-enq-success-modal" class="modal fade" role="dialog" style="display:none;" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog2 modal-lg">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="" style="color: #000;display: inline;">Thank you!! Admission request is submitted successfully.</h5>
                    <button type="button" class="close" title="Close" data-dismiss="modal"><i class="fa fa-times fa-close text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <p style="color: #000;">Your online admission reference ID is <b id="enqid"></b> and use it for future communication.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
<form method="POST">

  <div class="form-bg d-none">
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
        <div class="col-md-6">
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
        <div class="col-md-6">
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
      </div>
      
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Seeking Admission in Class</label>
            <input type="text" class="form-control" name="Seeking_Admission_Class" placeholder="Seeking Admission class name" autocomplete="off" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>School Presently Studying in</label>
            <input type="text" class="form-control" name="Presently_Studying" placeholder="Present class" autocomplete="off" required>
          </div>
        </div>
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
            <label>Last Attended Class</label>
            <input type="text" class="form-control" name="Last_Class" placeholder="Last class" autocomplete="off" required>
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
-->

<!-- footer start -->

<!-- end footer -->
<?php
include 'footer.php';
?>
<!-- <script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery-1.12.0.min.js"></script> -->
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/owl.carousel.min.js"></script>
</body>
<script type="text/javascript">
    var base_url = 'https://admin.thewisdomschools.in/';
    function getClasses() {
        if ($('#class_id').length) {
            //$('#section_id').html("");
            var clsss = '<option value="">Select</option>';
            var url = "";
            $.ajax({
                type: "POST",
                url: base_url + "site/getClass",
                data: {'class_id': 0},
                dataType: "json",
                beforeSend: function () {
                    $('#class_id').addClass('dropdownloading');
                },
                success: function (data) {
                    var clsss = '<option value="">Select</option>';
                    $.each(data.data, function (i, obj)
                    {
                        var sel = "";
                        clsss += "<option value='" + obj.class_id + "' " + sel + ">" + obj.class_name + "</option>";
                    });
                    $("#class_id").append(clsss);
                },
                complete: function () {
                    $('#class_id').removeClass('dropdownloading');
                }
            });
        }
    }
    $(document).ready(function (e) {
        //e.preventDefault();
        var class_id = $('#class_id').val();
        var section_id = '0';
        getClasses();
        getSectionByClass(class_id, section_id);
        $(document).on('change', '#class_id', function (e) {
            $('#section_id').html("");
            var class_id = $(this).val();
            getSectionByClass(class_id, 0);
        });
        /*
         $('#dob').datepicker({
         autoclose: true,
         todayHighlight: true
         });*/
        
        function getSectionByClass(class_id, section_id) {

            if (class_id !== "") {
                $('#section_id').html("");
                var div_data = '<option value="">Select</option>';
                var url = "";
                $.ajax({
                    type: "POST",
                    url: base_url + "site/getSections",
                    data: {'class_id': class_id},
                    dataType: "json",
                    beforeSend: function () {
                        $('#section_id').addClass('dropdownloading');
                    },
                    success: function (data) {
                        $.each(data, function (i, obj)
                        {
                            var sel = "";
                            if (section_id === obj.section_id) {
                                sel = "selected";
                            }
                            div_data += "<option value='" + obj.id + "' " + sel + ">" + obj.section + "</option>";
                        });
                        $('#section_id').append(div_data);
                    },
                    complete: function () {
                        $('#section_id').removeClass('dropdownloading');
                    }
                });
            }
        }

    });
    function auto_fill_guardian_address() {
        if ($("#autofill_current_address").is(':checked'))
        {
            $('#current_address').val($('#guardian_address').val());
        }
    }
    function auto_fill_address() {
        if ($("#autofill_address").is(':checked'))
        {
            $('#permanent_address').val($('#current_address').val());
        }
    }
    $('input:radio[name="guardian_is"]').change(
            function () {
                if ($(this).is(':checked')) {
                    var value = $(this).val();
                    if (value === "father") {
                        $('#guardian_name').val($('#father_name').val());
                        $('#guardian_phone').val($('#father_phone').val());
                        $('#guardian_occupation').val($('#father_occupation').val());
                        $('#guardian_relation').val("Father");
                    } else if (value === "mother") {
                        $('#guardian_name').val($('#mother_name').val());
                        $('#guardian_phone').val($('#mother_phone').val());
                        $('#guardian_occupation').val($('#mother_occupation').val());
                        $('#guardian_relation').val("Mother");
                    } else {
                        $('#guardian_name').val("");
                        $('#guardian_phone').val("");
                        $('#guardian_occupation').val("");
                        $('#guardian_relation').val("");
                    }
                }

            });
</script>
<script type="text/javascript">
    document.onkeydown = function (e) {
        if (e.keyCode == 123) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
            return false;
        }

        if (e.ctrlKey && e.keyCode == 'C'.charCodeAt(0)) {
            return false;
        }

        if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
            return false;
        }
    }
</script>
<script type="text/javascript">
    function saveEnquiry() {
        //                                $('button.close').trigger('click');
        //                                $('#adm-enq-success-modal').modal('show');
        //                                return;
        var base_url = 'https://admin.thewisdomschools.in/';
        $.ajax({
            url: base_url + 'site/addAdmissionEnquiry/',
            type: 'POST',
            dataType: 'json',
            data: $("#formadd").serialize(),
            success: function (data) {
                if (data.status == "fail") {
                    var message = "";
                    $.each(data.error, function (index, value) {
                        if (value) {
                            message += removeTags(value) + '\n';
                        }
                    });
                    alert(message);
                    //errorMsg(message);
                } else {
                    $('#enqid').html(data.id);
                    $('button.close').trigger('click');
                    $('#adm-enq-success-modal').modal('show');
                    //successMsg(data.message);
                    //window.location.reload(true);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Fail, Error - " + jqXHR + ', Status-' + textStatus + ', ErrorThrown-' + errorThrown)
            }
        });
    }
    function removeTags(str) {
        if ((str === null) || (str === ''))
            return false;
        else
            str = str.toString();
        return str.replace(/(<([^>]+)>)/ig, '');
    }
    
    
    $(document).on('submit', '#online-admission-form', function (e)
    {
        e.preventDefault();
        //alert('submitting...');
        //return;
        
        var base_url = 'https://admin.thewisdomschools.in/';
        $.ajax({
            url: base_url + 'site/addOnlineAdmissionEnquiry',
            type: 'POST',
            dataType: 'json',
            data: $("#online-admission-form").serialize(),
            success: function (data) {
                if (data.status == "fail") {
                    var message = "";
                    $.each(data.error, function (index, value) {
                        if (value) {
                            message += removeTags(value) + '\n';
                        }
                    });
                    alert(message);
                    //errorMsg(message);
                } else {
                    $('#online-admission-form')[0].reset();
                    $('#enqid').html(data.id);
                    $('button.close').trigger('click');
                    $('#adm-enq-success-modal').modal('show');
                    
                    //successMsg(data.message);
                    //window.location.reload(true);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Fail, Error - " + jqXHR + ', Status-' + textStatus + ', ErrorThrown-' + errorThrown)
            }
        });
        
        return;
        $('#adm-enq-success-modal').modal('show');
        console.log($("#online-admission-form").serialize());
        return;
        $.post(base_url + 'site/addAdmissionEnquiry/',
                {
                    name: $('#billing-payment-form #cus_name').val(),
                    address: $('#billing-payment-form #cus_address').val(),
                    receipt_date: $('#billing-payment-form #rec-issue-date').val(),
                    pay_madeby: $('#billing-payment-form #pay-made-by').val(),
                    pay_collectby: $('#billing-payment-form #pay-collect-by').val(),
                    cuid: $('#billing-payment-form #cuid').val(),
                    billid: $('#billing-payment-form #billid').val(),
                    //items: items,
                    new_items: new_items,
                    //remark: $('#order-remark').val(),
                    submit: "add-billing-payment-submit"
                },
                function (data)
                {
                    console.log(data);
                    var response = $.parseJSON(data);
                    console.log(response);
                    //return;
                    if (response.success === true)
                    {
                        window.location.reload();
//                        window.location.href = response.data;
//                        $('#status-messages').html(response.screen_message);
//                        setScrMsgTimeOut();
                    } else
                    {
                        alert(response.screen_message);
                        $('#status-messages').html(response.screen_message);
                        setScrMsgTimeOut();
                    }
                })

    });
    
    
    
</script>
</html>