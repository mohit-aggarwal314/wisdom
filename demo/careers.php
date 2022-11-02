<?php
error_reporting(0);
include 'header.php';
include 'conn.php';


if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $birth = $_POST['birth'];
  $phone_code = $_POST['phone_code'];
  $phone_num = $_POST['phone_num'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $street_address = $_POST['street_address'];
  $city_add = $_POST['city_add'];
  $state_add = $_POST['state_add'];
  $zip_code_add = $_POST['zip_code_add'];
  $referred = $_POST['referred'];
  $chkstr = implode(",", $referred);

  $others = $_POST['others'];

  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];
  $folder = "careers_file/" . $filename;
  move_uploaded_file($tempname, $folder);

  $describe_skills = $_POST['describe_skills'];
  $training = $_POST['training'];
  $re_fname = $_POST['re_fname'];
  $re_lname = $_POST['re_lname'];
  $re_phone_code = $_POST['re_phone_code'];
  $re_phone_num = $_POST['re_phone_num'];
  $re_years = $_POST['re_years'];

  $re_address = $_POST['re_address'];
  $re_street_address = $_POST['re_street_address'];
  $re_city_add = $_POST['re_city_add'];
  $re_state_add = $_POST['re_state_add'];
  $re_zip_code_add = $_POST['re_zip_code_add'];
  $re_country = $_POST['re_country'];

  $ref_fname = $_POST['ref_fname'];
  $ref_lname = $_POST['ref_lname'];
  $ref_phone_code = $_POST['ref_phone_code'];
  $ref_phone_num = $_POST['ref_phone_num'];
  $ref_years = $_POST['ref_years'];

  $ref_address = $_POST['ref_address'];
  $ref_street_address = $_POST['ref_street_address'];
  $ref_city_add = $_POST['ref_city_add'];
  $ref_state_add = $_POST['ref_state_add'];
  $ref_zip_code_add = $_POST['ref_zip_code_add'];
  $ref_country = $_POST['ref_country'];



  $query = "insert into careers (fname,lname,birth,phone_code,phone_num,email,address,street_address,city_add,state_add,zip_code_add,referred,others,up_resume,describe_skills,training,re_fname,re_lname,re_phone_code,re_phone_num,re_years,re_address, re_street_address, re_city_add, re_state_add, re_zip_code_add, re_country,ref_fname,ref_lname,ref_phone_code,ref_phone_num,ref_years,ref_address,ref_street_address,ref_city_add,ref_state_add,ref_zip_code_add,ref_country) 
  values ('$fname','$lname','$birth','$phone_code','$phone_num','$email','$address','$street_address','$city_add','$state_add','$zip_code_add','$chkstr','$others','$filename','$describe_skills','$training','$re_fname','$re_lname','$re_phone_code','$re_phone_num','$re_years','$re_address','$re_street_address','$re_city_add','$re_state_add','$re_zip_code_add','$re_country','$ref_fname','$ref_lname','$ref_phone_code','$ref_phone_num','$ref_years','$ref_address','$ref_street_address','$ref_city_add','$ref_state_add','$ref_zip_code_add','$ref_country')";
  $res = mysqli_query($conn, $query) or die('Query not run');
  if ($res) {
    echo '<script> swal("Data SuccessFully", "your registration is successful", "success")</script>';
  } else {
    echo '<script> swal("Data Not SuccessFully", "your registration is not successful", "warning")</script>';
  }
}

?>




<h2 class="navbottomtext">Careers</h2>
<div class="navbotparagraph">
  <h6 class="icontext"><a href="index.php"><i class="fas fa-home home ddd"></a></i> &nbsp;| &nbsp; Careers</h6>
</div>
</section>




<section class="careerss">
  <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">

          <div class="container">
            <div class="row form_img bg-light">
              <div class="col-md-12">
                <img src=".//img/wisdom_img1.jpg" width="100%">
              </div>
            </div>
            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-4"><b>Name</b>
                <span class="form-required">*
                </span>
              </div>
              <div class="col-sm-6 col-md-4">
                <input type="text" name="fname" class="input_width" required autocomplete="off"><br>
                <span>First Name</span>
              </div>
              <div class="col-sm-6 col-md-4">
                <input type="text" name="lname" class="input_width" required autocomplete="off"><br>
                <span>Last Name</span>
              </div>
            </div>

            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-4"><b>Birth Date</b></div>

              <div class="col-md-8">
                <input type="date" name="birth" class="input_width" autocomplete="off">
                <span>Day/Month/Year</span>
              </div>



            </div>

            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-4"><b>Phone Number: </b>
                <span class="form-required">* </span>
              </div>
              <div class="col-md-4">
                <input type="text" name="phone_code" value="+" class="input_width" required autocomplete="off"><br>
                <span> Area Code </span>
              </div>
              <div class="col-md-4">
                <input type="text" name="phone_num" class="input_width" required autocomplete="off"> <br>
                <span>Phone Number</span>
              </div>
            </div>

            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-4"><b>E-mail Address: </b>
              </div>
              <div class="col-md-8">
                <input type="text" name="email" class="input_width" placeholder="ex: myname@example.com" autocomplete="off"><br>
              </div>
            </div>

            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-4"><b>Address: </b>
              </div>
              <div class="col-md-8">
                <input type="text" name="address" class="input_width" autocomplete="off"><br>
                <span>Street Address</span>
              </div>

              <div class="col-md-4"> </div>
              <div class="col-md-8">
                <input type="text" name="street_address" class="input_width" autocomplete="off"><br>
                <span>Street Address line 2</span>
              </div>

              <div class="col-md-4">
              </div>
              <div class="col-md-4">
                <input type="text" name="city_add" class="input_width" autocomplete="off"><br>
                <span>City</span>
              </div>
              <div class="col-md-4">
                <input type="text" name="state_add" class="input_width" autocomplete="off"><br>
                <span>State / Province</span>
              </div>

              <div class="col-md-4"> </div>
              <div class="col-md-8">
                <input type="text" name="zip_code_add" class="input_width" autocomplete="off"><br>
                <span>Postal / Zip Code</span>
              </div>
            </div>


            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-4"><b>How were you referred to us ? </b>
                <span class="form-required">* </span>
              </div>
              <div class="col-md-4" name="referred">
                <input type="checkbox" id="vehicle1" name="referred[]" value="Walk-In">
                <label for="vehicle1"> Walk-In</label><br>
                <input type="checkbox" id="vehicle2" name="referred[]" value="Newspaper Ad">
                <label for="vehicle2"> Newspaper Ad</label><br>
                <input type="checkbox" id="vehicle3" name="referred[]" value="Twitter">
                <label for="vehicle3"> Twitter</label><br>
                <input type="checkbox" id="vehicle4" name="referred[]" value="Other (please specify)">
                <label for="vehicle4"> Other (please specify)</label><br>
              </div>
              <div class="col-md-4">
                <input type="checkbox" id="vehicle5" name="referred[]" value="Employee">
                <label for="vehicle5"> Employee</label><br>
                <input type="checkbox" id="vehicle6" name="referred[]" value="Facebook">
                <label for="vehicle6"> Facebook</label><br>
                <input type="checkbox" id="vehicle7" name="referred[]" value="Craigslist">
                <label for="vehicle7"> Craigslist</label><br>
              </div>
            </div>

            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-4"><b>Others: </b>
              </div>
              <div class="col-md-8">
                <input type="text" name="others" class="input_width" autocomplete="off"><br>
              </div>
            </div>

            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-4"><b>Upload Resume: </b>
              </div>
              <div class="col-md-8">
                <input type="file" name="uploadfile" class="input_width" autocomplete="off"><br>
              </div>
            </div>



            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-4"><b>Describe your skills: </b>
                <span class="form-required">* </span>
              </div>
              <div class="col-md-8">
                <textarea class="input_width_h" name="describe_skills" required autocomplete="off">
              </textarea>
              </div>
            </div>

            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-12"><b>Training or Certifications: </b></div>
              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-12">
                <textarea class="input_width_h" name="training" autocomplete="off">
              </textarea>
              </div>
            </div>

            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-12"><b>References</b> Please list two (2) references that are familiar with
                your work life.
              </div>
            </div>

            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-12"><b>Reference 1</b> </div>
            </div>

            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-4"><b>Name</b>
                <span class="form-required">*</span>
              </div>
              <div class="col-md-4">
                <input type="text" name="re_fname" class="input_width" required autocomplete="off"><br>
                <span>First Name</span>
              </div>
              <div class="col-md-4">
                <input type="text" name="re_lname" class="input_width" required autocomplete="off"><br>
                <span>Last Name</span>
              </div>
            </div>

            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-4"><b>Phone Number: </b>
                <span class="form-required">* </span>
              </div>
              <div class="col-md-4">
                <input type="text" name="re_phone_code" value="+" class="input_width" required autocomplete="off"><br>
                <span> Area Code </span>
              </div>
              <div class="col-md-4">
                <input type="text" name="re_phone_num" class="input_width" required autocomplete="off"><br>
                <span>Phone Number</span>
              </div>
            </div>

            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-4"><b>Years Known: </b>
                <span class="form-required">* </span>
              </div>
              <div class="col-md-8">
                <input type="number" name="re_years" class="input_width" required autocomplete="off"><br>
                <span> Area Code </span>
              </div>
            </div>

            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-4"><b>Address: </b>
                <span class="form-required">*</span>
              </div>
              <div class="col-md-8">
                <input type="text" name="re_address" class="input_width" required autocomplete="off"><br>
                <span>Street Address</span>
              </div>

              <div class="col-md-4"> </div>
              <div class="col-md-8">
                <input type="text" name="re_street_address" class="input_width" required autocomplete="off"><br>
                <span>Street Address line 2</span>
              </div>

              <div class="col-md-4">
              </div>
              <div class="col-md-4">
                <input type="text" name="re_city_add" class="input_width" required autocomplete="off"><br>
                <span>City</span>
              </div>
              <div class="col-md-4">
                <input type="text" name="re_state_add" class="input_width" required autocomplete="off"><br>
                <span>State / Province</span>
              </div>

              <div class="col-md-4"> </div>
              <div class="col-md-4">
                <input type="text" name="re_zip_code_add" class="input_width" required autocomplete="off"><br>
                <span>Postal / Zip Code</span>
              </div>
              <div class="col-md-4">
                <select name="re_country" class="input_width" required>
                  <option value=""> Please Select </option>
                  <option value="United States"> United States </option>
                  <option value="Afghanistan"> Afghanistan </option>
                  <option value="Albania"> Albania </option>
                  <option value="Algeria"> Algeria </option>
                  <option value="American Samoa"> American Samoa </option>
                  <option value="Andorra"> Andorra </option>
                  <option value="Angola"> Angola </option>
                  <option value="Anguilla"> Anguilla </option>
                  <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                  <option value="Argentina"> Argentina </option>
                  <option value="Armenia"> Armenia </option>
                  <option value="Aruba"> Aruba </option>
                  <option value="Australia"> Australia </option>
                  <option value="Austria"> Austria </option>
                  <option value="Azerbaijan"> Azerbaijan </option>
                  <option value="The Bahamas"> The Bahamas </option>
                  <option value="Bahrain"> Bahrain </option>
                  <option value="Bangladesh"> Bangladesh </option>
                  <option value="Barbados"> Barbados </option>
                  <option value="Belarus"> Belarus </option>
                  <option value="Belgium"> Belgium </option>
                  <option value="Belize"> Belize </option>
                  <option value="Benin"> Benin </option>
                  <option value="Bermuda"> Bermuda </option>
                  <option value="Bhutan"> Bhutan </option>
                  <option value="Bolivia"> Bolivia </option>
                  <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                  <option value="Botswana"> Botswana </option>
                  <option value="Brazil"> Brazil </option>
                  <option value="Brunei"> Brunei </option>
                  <option value="Bulgaria"> Bulgaria </option>
                  <option value="Burkina Faso"> Burkina Faso </option>
                  <option value="Burundi"> Burundi </option>
                  <option value="Cambodia"> Cambodia </option>
                  <option value="Cameroon"> Cameroon </option>
                  <option value="Canada"> Canada </option>
                  <option value="Cape Verde"> Cape Verde </option>
                  <option value="Cayman Islands"> Cayman Islands </option>
                  <option value="Central African Republic"> Central African Republic </option>
                  <option value="Chad"> Chad </option>
                  <option value="Chile"> Chile </option>
                  <option value="China"> China </option>
                  <option value="Christmas Island"> Christmas Island </option>
                  <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                  <option value="Colombia"> Colombia </option>
                  <option value="Comoros"> Comoros </option>
                  <option value="Congo"> Congo </option>
                  <option value="Cook Islands"> Cook Islands </option>
                  <option value="Costa Rica"> Costa Rica </option>
                  <option value="Cote d'Ivoire"> Cote d'Ivoire </option>
                  <option value="Croatia"> Croatia </option>
                  <option value="Cuba"> Cuba </option>
                  <option value="Curacao"> Curacao </option>
                  <option value="Cyprus"> Cyprus </option>
                  <option value="Czech Republic"> Czech Republic </option>
                  <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo
                  </option>
                  <option value="Denmark"> Denmark </option>
                  <option value="Djibouti"> Djibouti </option>
                  <option value="Dominica"> Dominica </option>
                  <option value="Dominican Republic"> Dominican Republic </option>
                  <option value="Ecuador"> Ecuador </option>
                  <option value="Egypt"> Egypt </option>
                  <option value="El Salvador"> El Salvador </option>
                  <option value="Equatorial Guinea"> Equatorial Guinea </option>
                  <option value="Eritrea"> Eritrea </option>
                  <option value="Estonia"> Estonia </option>
                  <option value="Ethiopia"> Ethiopia </option>
                  <option value="Falkland Islands"> Falkland Islands </option>
                  <option value="Faroe Islands"> Faroe Islands </option>
                  <option value="Fiji"> Fiji </option>
                  <option value="Finland"> Finland </option>
                  <option value="France"> France </option>
                  <option value="French Polynesia"> French Polynesia </option>
                  <option value="Gabon"> Gabon </option>
                  <option value="The Gambia"> The Gambia </option>
                  <option value="Georgia"> Georgia </option>
                  <option value="Germany"> Germany </option>
                  <option value="Ghana"> Ghana </option>
                  <option value="Gibraltar"> Gibraltar </option>
                  <option value="Greece"> Greece </option>
                  <option value="Greenland"> Greenland </option>
                  <option value="Grenada"> Grenada </option>
                  <option value="Guadeloupe"> Guadeloupe </option>
                  <option value="Guam"> Guam </option>
                  <option value="Guatemala"> Guatemala </option>
                  <option value="Guernsey"> Guernsey </option>
                  <option value="Guinea"> Guinea </option>
                  <option value="Guinea-Bissau"> Guinea-Bissau </option>
                  <option value="Guyana"> Guyana </option>
                  <option value="Haiti"> Haiti </option>
                  <option value="Honduras"> Honduras </option>
                  <option value="Hong Kong"> Hong Kong </option>
                  <option value="Hungary"> Hungary </option>
                  <option value="Iceland"> Iceland </option>
                  <option value="India"> India </option>
                  <option value="Indonesia"> Indonesia </option>
                  <option value="Iran"> Iran </option>
                  <option value="Iraq"> Iraq </option>
                  <option value="Ireland"> Ireland </option>
                  <option value="Israel"> Israel </option>
                  <option value="Italy"> Italy </option>
                  <option value="Jamaica"> Jamaica </option>
                  <option value="Japan"> Japan </option>
                  <option value="Jersey"> Jersey </option>
                  <option value="Jordan"> Jordan </option>
                  <option value="Kazakhstan"> Kazakhstan </option>
                  <option value="Kenya"> Kenya </option>
                  <option value="Kiribati"> Kiribati </option>
                  <option value="North Korea"> North Korea </option>
                  <option value="South Korea"> South Korea </option>
                  <option value="Kosovo"> Kosovo </option>
                  <option value="Kuwait"> Kuwait </option>
                  <option value="Kyrgyzstan"> Kyrgyzstan </option>
                  <option value="Laos"> Laos </option>
                  <option value="Latvia"> Latvia </option>
                  <option value="Lebanon"> Lebanon </option>
                  <option value="Lesotho"> Lesotho </option>
                  <option value="Liberia"> Liberia </option>
                  <option value="Libya"> Libya </option>
                  <option value="Liechtenstein"> Liechtenstein </option>
                  <option value="Lithuania"> Lithuania </option>
                  <option value="Luxembourg"> Luxembourg </option>
                  <option value="Macau"> Macau </option>
                  <option value="Macedonia"> Macedonia </option>
                  <option value="Madagascar"> Madagascar </option>
                  <option value="Malawi"> Malawi </option>
                  <option value="Malaysia"> Malaysia </option>
                  <option value="Maldives"> Maldives </option>
                  <option value="Mali"> Mali </option>
                  <option value="Malta"> Malta </option>
                  <option value="Marshall Islands"> Marshall Islands </option>
                  <option value="Martinique"> Martinique </option>
                  <option value="Mauritania"> Mauritania </option>
                  <option value="Mauritius"> Mauritius </option>
                  <option value="Mayotte"> Mayotte </option>
                  <option value="Mexico"> Mexico </option>
                  <option value="Micronesia"> Micronesia </option>
                  <option value="Moldova"> Moldova </option>
                  <option value="Monaco"> Monaco </option>
                  <option value="Mongolia"> Mongolia </option>
                  <option value="Montenegro"> Montenegro </option>
                  <option value="Montserrat"> Montserrat </option>
                  <option value="Morocco"> Morocco </option>
                  <option value="Mozambique"> Mozambique </option>
                  <option value="Myanmar"> Myanmar </option>
                  <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                  <option value="Namibia"> Namibia </option>
                  <option value="Nauru"> Nauru </option>
                  <option value="Nepal"> Nepal </option>
                  <option value="Netherlands"> Netherlands </option>
                  <option value="Netherlands Antilles"> Netherlands Antilles </option>
                  <option value="New Caledonia"> New Caledonia </option>
                  <option value="New Zealand"> New Zealand </option>
                  <option value="Nicaragua"> Nicaragua </option>
                  <option value="Niger"> Niger </option>
                  <option value="Nigeria"> Nigeria </option>
                  <option value="Niue"> Niue </option>
                  <option value="Norfolk Island"> Norfolk Island </option>
                  <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern
                    Cyprus </option>
                  <option value="Northern Mariana"> Northern Mariana </option>
                  <option value="Norway"> Norway </option>
                  <option value="Oman"> Oman </option>
                  <option value="Pakistan"> Pakistan </option>
                  <option value="Palau"> Palau </option>
                  <option value="Palestine"> Palestine </option>
                  <option value="Panama"> Panama </option>
                  <option value="Papua New Guinea"> Papua New Guinea </option>
                  <option value="Paraguay"> Paraguay </option>
                  <option value="Peru"> Peru </option>
                  <option value="Philippines"> Philippines </option>
                  <option value="Pitcairn Islands"> Pitcairn Islands </option>
                  <option value="Poland"> Poland </option>
                  <option value="Portugal"> Portugal </option>
                  <option value="Puerto Rico"> Puerto Rico </option>
                  <option value="Qatar"> Qatar </option>
                  <option value="Republic of the Congo"> Republic of the Congo </option>
                  <option value="Romania"> Romania </option>
                  <option value="Russia"> Russia </option>
                  <option value="Rwanda"> Rwanda </option>
                  <option value="Saint Barthelemy"> Saint Barthelemy </option>
                  <option value="Saint Helena"> Saint Helena </option>
                  <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                  <option value="Saint Lucia"> Saint Lucia </option>
                  <option value="Saint Martin"> Saint Martin </option>
                  <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                  <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines
                  </option>
                  <option value="Samoa"> Samoa </option>
                  <option value="San Marino"> San Marino </option>
                  <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                  <option value="Saudi Arabia"> Saudi Arabia </option>
                  <option value="Senegal"> Senegal </option>
                  <option value="Serbia"> Serbia </option>
                  <option value="Seychelles"> Seychelles </option>
                  <option value="Sierra Leone"> Sierra Leone </option>
                  <option value="Singapore"> Singapore </option>
                  <option value="Slovakia"> Slovakia </option>
                  <option value="Slovenia"> Slovenia </option>
                  <option value="Solomon Islands"> Solomon Islands </option>
                  <option value="Somalia"> Somalia </option>
                  <option value="Somaliland"> Somaliland </option>
                  <option value="South Africa"> South Africa </option>
                  <option value="South Ossetia"> South Ossetia </option>
                  <option value="South Sudan"> South Sudan </option>
                  <option value="Spain"> Spain </option>
                  <option value="Sri Lanka"> Sri Lanka </option>
                  <option value="Sudan"> Sudan </option>
                  <option value="Suriname"> Suriname </option>
                  <option value="Svalbard"> Svalbard </option>
                  <option value="eSwatini"> eSwatini </option>
                  <option value="Sweden"> Sweden </option>
                  <option value="Switzerland"> Switzerland </option>
                  <option value="Syria"> Syria </option>
                  <option value="Taiwan"> Taiwan </option>
                  <option value="Tajikistan"> Tajikistan </option>
                  <option value="Tanzania"> Tanzania </option>
                  <option value="Thailand"> Thailand </option>
                  <option value="Timor-Leste"> Timor-Leste </option>
                  <option value="Togo"> Togo </option>
                  <option value="Tokelau"> Tokelau </option>
                  <option value="Tonga"> Tonga </option>
                  <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                  <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                  <option value="Tristan da Cunha"> Tristan da Cunha </option>
                  <option value="Tunisia"> Tunisia </option>
                  <option value="Turkey"> Turkey </option>
                  <option value="Turkmenistan"> Turkmenistan </option>
                  <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                  <option value="Tuvalu"> Tuvalu </option>
                  <option value="Uganda"> Uganda </option>
                  <option value="Ukraine"> Ukraine </option>
                  <option value="United Arab Emirates"> United Arab Emirates </option>
                  <option value="United Kingdom"> United Kingdom </option>
                  <option value="Uruguay"> Uruguay </option>
                  <option value="Uzbekistan"> Uzbekistan </option>
                  <option value="Vanuatu"> Vanuatu </option>
                  <option value="Vatican City"> Vatican City </option>
                  <option value="Venezuela"> Venezuela </option>
                  <option value="Vietnam"> Vietnam </option>
                  <option value="British Virgin Islands"> British Virgin Islands </option>
                  <option value="Isle of Man"> Isle of Man </option>
                  <option value="US Virgin Islands"> US Virgin Islands </option>
                  <option value="Wallis and Futuna"> Wallis and Futuna </option>
                  <option value="Western Sahara"> Western Sahara </option>
                  <option value="Yemen"> Yemen </option>
                  <option value="Zambia"> Zambia </option>
                  <option value="Zimbabwe"> Zimbabwe </option>
                  <option value="other"> Other </option>
                </select><br>
                <span>Country</span>
              </div>
            </div>

            <div class="row form_img bg-light">
              <div class="col-md-12"><b>Reference 2</b> </div>
            </div>

            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-4"><b>Name</b>
                <span class="form-required">*
                </span>
              </div>
              <div class="col-md-4">
                <input type="text" name="ref_fname" class="input_width" required autocomplete="off"><br>
                <span>First Name</span>
              </div>
              <div class="col-md-4">
                <input type="text" name="ref_lname" class="input_width" required autocomplete="off"><br>
                <span>Last Name</span>
              </div>
            </div>

            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-4"><b>Phone Number: </b>
                <span class="form-required">* </span>
              </div>
              <div class="col-md-4">
                <input type="text" name="ref_phone_code" value="+" class="input_width" required autocomplete="off"><br>
                <span> Area Code </span>
              </div>
              <div class="col-md-4">
                <input type="text" name="ref_phone_num" class="input_width" required autocomplete="off"><br>
                <span>Phone Number</span>
              </div>
            </div>

            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-4"><b>Years Known: </b>
                <span class="form-required">* </span>
              </div>
              <div class="col-md-8">
                <input type="number" name="ref_years" class="input_width" required autocomplete="off"><br>
                <span> Area Code </span>
              </div>
            </div>

            <div class="row form_img bg-light">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-4"><b>Address: </b>
                <span class="form-required">*</span>
              </div>
              <div class="col-md-8">
                <input type="text" name="ref_address" class="input_width" required autocomplete="off"><br>
                <span>Street Address</span>
              </div>

              <div class="col-md-4"> </div>
              <div class="col-md-8">
                <input type="text" name="ref_street_address" class="input_width" required autocomplete="off"><br>
                <span>Street Address line 2</span>
              </div>

              <div class="col-md-4">
              </div>
              <div class="col-md-4">
                <input type="text" name="ref_city_add" class="input_width" required autocomplete="off"><br>
                <span>City</span>
              </div>
              <div class="col-md-4">
                <input type="text" name="ref_state_add" class="input_width" required autocomplete="off"><br>
                <span>State / Province</span>
              </div>

              <div class="col-md-4"> </div>
              <div class="col-md-4">
                <input type="text" name="ref_zip_code_add" class="input_width" required autocomplete="off"><br>
                <span>Postal / Zip Code</span>
              </div>
              <div class="col-md-4">
                <select name="ref_country" class="input_width" required>
                  <option value=""> Please Select </option>
                  <option value="United States"> United States </option>
                  <option value="Afghanistan"> Afghanistan </option>
                  <option value="Albania"> Albania </option>
                  <option value="Algeria"> Algeria </option>
                  <option value="American Samoa"> American Samoa </option>
                  <option value="Andorra"> Andorra </option>
                  <option value="Angola"> Angola </option>
                  <option value="Anguilla"> Anguilla </option>
                  <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                  <option value="Argentina"> Argentina </option>
                  <option value="Armenia"> Armenia </option>
                  <option value="Aruba"> Aruba </option>
                  <option value="Australia"> Australia </option>
                  <option value="Austria"> Austria </option>
                  <option value="Azerbaijan"> Azerbaijan </option>
                  <option value="The Bahamas"> The Bahamas </option>
                  <option value="Bahrain"> Bahrain </option>
                  <option value="Bangladesh"> Bangladesh </option>
                  <option value="Barbados"> Barbados </option>
                  <option value="Belarus"> Belarus </option>
                  <option value="Belgium"> Belgium </option>
                  <option value="Belize"> Belize </option>
                  <option value="Benin"> Benin </option>
                  <option value="Bermuda"> Bermuda </option>
                  <option value="Bhutan"> Bhutan </option>
                  <option value="Bolivia"> Bolivia </option>
                  <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                  <option value="Botswana"> Botswana </option>
                  <option value="Brazil"> Brazil </option>
                  <option value="Brunei"> Brunei </option>
                  <option value="Bulgaria"> Bulgaria </option>
                  <option value="Burkina Faso"> Burkina Faso </option>
                  <option value="Burundi"> Burundi </option>
                  <option value="Cambodia"> Cambodia </option>
                  <option value="Cameroon"> Cameroon </option>
                  <option value="Canada"> Canada </option>
                  <option value="Cape Verde"> Cape Verde </option>
                  <option value="Cayman Islands"> Cayman Islands </option>
                  <option value="Central African Republic"> Central African Republic </option>
                  <option value="Chad"> Chad </option>
                  <option value="Chile"> Chile </option>
                  <option value="China"> China </option>
                  <option value="Christmas Island"> Christmas Island </option>
                  <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                  <option value="Colombia"> Colombia </option>
                  <option value="Comoros"> Comoros </option>
                  <option value="Congo"> Congo </option>
                  <option value="Cook Islands"> Cook Islands </option>
                  <option value="Costa Rica"> Costa Rica </option>
                  <option value="Cote d'Ivoire"> Cote d'Ivoire </option>
                  <option value="Croatia"> Croatia </option>
                  <option value="Cuba"> Cuba </option>
                  <option value="Curacao"> Curacao </option>
                  <option value="Cyprus"> Cyprus </option>
                  <option value="Czech Republic"> Czech Republic </option>
                  <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo
                  </option>
                  <option value="Denmark"> Denmark </option>
                  <option value="Djibouti"> Djibouti </option>
                  <option value="Dominica"> Dominica </option>
                  <option value="Dominican Republic"> Dominican Republic </option>
                  <option value="Ecuador"> Ecuador </option>
                  <option value="Egypt"> Egypt </option>
                  <option value="El Salvador"> El Salvador </option>
                  <option value="Equatorial Guinea"> Equatorial Guinea </option>
                  <option value="Eritrea"> Eritrea </option>
                  <option value="Estonia"> Estonia </option>
                  <option value="Ethiopia"> Ethiopia </option>
                  <option value="Falkland Islands"> Falkland Islands </option>
                  <option value="Faroe Islands"> Faroe Islands </option>
                  <option value="Fiji"> Fiji </option>
                  <option value="Finland"> Finland </option>
                  <option value="France"> France </option>
                  <option value="French Polynesia"> French Polynesia </option>
                  <option value="Gabon"> Gabon </option>
                  <option value="The Gambia"> The Gambia </option>
                  <option value="Georgia"> Georgia </option>
                  <option value="Germany"> Germany </option>
                  <option value="Ghana"> Ghana </option>
                  <option value="Gibraltar"> Gibraltar </option>
                  <option value="Greece"> Greece </option>
                  <option value="Greenland"> Greenland </option>
                  <option value="Grenada"> Grenada </option>
                  <option value="Guadeloupe"> Guadeloupe </option>
                  <option value="Guam"> Guam </option>
                  <option value="Guatemala"> Guatemala </option>
                  <option value="Guernsey"> Guernsey </option>
                  <option value="Guinea"> Guinea </option>
                  <option value="Guinea-Bissau"> Guinea-Bissau </option>
                  <option value="Guyana"> Guyana </option>
                  <option value="Haiti"> Haiti </option>
                  <option value="Honduras"> Honduras </option>
                  <option value="Hong Kong"> Hong Kong </option>
                  <option value="Hungary"> Hungary </option>
                  <option value="Iceland"> Iceland </option>
                  <option value="India"> India </option>
                  <option value="Indonesia"> Indonesia </option>
                  <option value="Iran"> Iran </option>
                  <option value="Iraq"> Iraq </option>
                  <option value="Ireland"> Ireland </option>
                  <option value="Israel"> Israel </option>
                  <option value="Italy"> Italy </option>
                  <option value="Jamaica"> Jamaica </option>
                  <option value="Japan"> Japan </option>
                  <option value="Jersey"> Jersey </option>
                  <option value="Jordan"> Jordan </option>
                  <option value="Kazakhstan"> Kazakhstan </option>
                  <option value="Kenya"> Kenya </option>
                  <option value="Kiribati"> Kiribati </option>
                  <option value="North Korea"> North Korea </option>
                  <option value="South Korea"> South Korea </option>
                  <option value="Kosovo"> Kosovo </option>
                  <option value="Kuwait"> Kuwait </option>
                  <option value="Kyrgyzstan"> Kyrgyzstan </option>
                  <option value="Laos"> Laos </option>
                  <option value="Latvia"> Latvia </option>
                  <option value="Lebanon"> Lebanon </option>
                  <option value="Lesotho"> Lesotho </option>
                  <option value="Liberia"> Liberia </option>
                  <option value="Libya"> Libya </option>
                  <option value="Liechtenstein"> Liechtenstein </option>
                  <option value="Lithuania"> Lithuania </option>
                  <option value="Luxembourg"> Luxembourg </option>
                  <option value="Macau"> Macau </option>
                  <option value="Macedonia"> Macedonia </option>
                  <option value="Madagascar"> Madagascar </option>
                  <option value="Malawi"> Malawi </option>
                  <option value="Malaysia"> Malaysia </option>
                  <option value="Maldives"> Maldives </option>
                  <option value="Mali"> Mali </option>
                  <option value="Malta"> Malta </option>
                  <option value="Marshall Islands"> Marshall Islands </option>
                  <option value="Martinique"> Martinique </option>
                  <option value="Mauritania"> Mauritania </option>
                  <option value="Mauritius"> Mauritius </option>
                  <option value="Mayotte"> Mayotte </option>
                  <option value="Mexico"> Mexico </option>
                  <option value="Micronesia"> Micronesia </option>
                  <option value="Moldova"> Moldova </option>
                  <option value="Monaco"> Monaco </option>
                  <option value="Mongolia"> Mongolia </option>
                  <option value="Montenegro"> Montenegro </option>
                  <option value="Montserrat"> Montserrat </option>
                  <option value="Morocco"> Morocco </option>
                  <option value="Mozambique"> Mozambique </option>
                  <option value="Myanmar"> Myanmar </option>
                  <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                  <option value="Namibia"> Namibia </option>
                  <option value="Nauru"> Nauru </option>
                  <option value="Nepal"> Nepal </option>
                  <option value="Netherlands"> Netherlands </option>
                  <option value="Netherlands Antilles"> Netherlands Antilles </option>
                  <option value="New Caledonia"> New Caledonia </option>
                  <option value="New Zealand"> New Zealand </option>
                  <option value="Nicaragua"> Nicaragua </option>
                  <option value="Niger"> Niger </option>
                  <option value="Nigeria"> Nigeria </option>
                  <option value="Niue"> Niue </option>
                  <option value="Norfolk Island"> Norfolk Island </option>
                  <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern
                    Cyprus </option>
                  <option value="Northern Mariana"> Northern Mariana </option>
                  <option value="Norway"> Norway </option>
                  <option value="Oman"> Oman </option>
                  <option value="Pakistan"> Pakistan </option>
                  <option value="Palau"> Palau </option>
                  <option value="Palestine"> Palestine </option>
                  <option value="Panama"> Panama </option>
                  <option value="Papua New Guinea"> Papua New Guinea </option>
                  <option value="Paraguay"> Paraguay </option>
                  <option value="Peru"> Peru </option>
                  <option value="Philippines"> Philippines </option>
                  <option value="Pitcairn Islands"> Pitcairn Islands </option>
                  <option value="Poland"> Poland </option>
                  <option value="Portugal"> Portugal </option>
                  <option value="Puerto Rico"> Puerto Rico </option>
                  <option value="Qatar"> Qatar </option>
                  <option value="Republic of the Congo"> Republic of the Congo </option>
                  <option value="Romania"> Romania </option>
                  <option value="Russia"> Russia </option>
                  <option value="Rwanda"> Rwanda </option>
                  <option value="Saint Barthelemy"> Saint Barthelemy </option>
                  <option value="Saint Helena"> Saint Helena </option>
                  <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                  <option value="Saint Lucia"> Saint Lucia </option>
                  <option value="Saint Martin"> Saint Martin </option>
                  <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                  <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines
                  </option>
                  <option value="Samoa"> Samoa </option>
                  <option value="San Marino"> San Marino </option>
                  <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                  <option value="Saudi Arabia"> Saudi Arabia </option>
                  <option value="Senegal"> Senegal </option>
                  <option value="Serbia"> Serbia </option>
                  <option value="Seychelles"> Seychelles </option>
                  <option value="Sierra Leone"> Sierra Leone </option>
                  <option value="Singapore"> Singapore </option>
                  <option value="Slovakia"> Slovakia </option>
                  <option value="Slovenia"> Slovenia </option>
                  <option value="Solomon Islands"> Solomon Islands </option>
                  <option value="Somalia"> Somalia </option>
                  <option value="Somaliland"> Somaliland </option>
                  <option value="South Africa"> South Africa </option>
                  <option value="South Ossetia"> South Ossetia </option>
                  <option value="South Sudan"> South Sudan </option>
                  <option value="Spain"> Spain </option>
                  <option value="Sri Lanka"> Sri Lanka </option>
                  <option value="Sudan"> Sudan </option>
                  <option value="Suriname"> Suriname </option>
                  <option value="Svalbard"> Svalbard </option>
                  <option value="eSwatini"> eSwatini </option>
                  <option value="Sweden"> Sweden </option>
                  <option value="Switzerland"> Switzerland </option>
                  <option value="Syria"> Syria </option>
                  <option value="Taiwan"> Taiwan </option>
                  <option value="Tajikistan"> Tajikistan </option>
                  <option value="Tanzania"> Tanzania </option>
                  <option value="Thailand"> Thailand </option>
                  <option value="Timor-Leste"> Timor-Leste </option>
                  <option value="Togo"> Togo </option>
                  <option value="Tokelau"> Tokelau </option>
                  <option value="Tonga"> Tonga </option>
                  <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                  <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                  <option value="Tristan da Cunha"> Tristan da Cunha </option>
                  <option value="Tunisia"> Tunisia </option>
                  <option value="Turkey"> Turkey </option>
                  <option value="Turkmenistan"> Turkmenistan </option>
                  <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                  <option value="Tuvalu"> Tuvalu </option>
                  <option value="Uganda"> Uganda </option>
                  <option value="Ukraine"> Ukraine </option>
                  <option value="United Arab Emirates"> United Arab Emirates </option>
                  <option value="United Kingdom"> United Kingdom </option>
                  <option value="Uruguay"> Uruguay </option>
                  <option value="Uzbekistan"> Uzbekistan </option>
                  <option value="Vanuatu"> Vanuatu </option>
                  <option value="Vatican City"> Vatican City </option>
                  <option value="Venezuela"> Venezuela </option>
                  <option value="Vietnam"> Vietnam </option>
                  <option value="British Virgin Islands"> British Virgin Islands </option>
                  <option value="Isle of Man"> Isle of Man </option>
                  <option value="US Virgin Islands"> US Virgin Islands </option>
                  <option value="Wallis and Futuna"> Wallis and Futuna </option>
                  <option value="Western Sahara"> Western Sahara </option>
                  <option value="Yemen"> Yemen </option>
                  <option value="Zambia"> Zambia </option>
                  <option value="Zimbabwe"> Zimbabwe </option>
                  <option value="other"> Other </option>
                </select><br>
                <span>Country</span>
              </div>
            </div>


            <div class="row form_img bg-light">
              <div class="col-md-12">
                <div style="text-align:center" class="form-buttons-wrapper form-buttons-center jsTest-button-wrapperField">
                  <br><br><button type="submit" name="submit" class="btn btn-primary enquiry mb-2">SUBMIT APPLICATION</button><br><br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
<!-- end navbar -->


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