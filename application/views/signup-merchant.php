<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="Dreacot">
    <title>GameTrade.ng | Merchant Login</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800,900" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/infinite-slider.css" rel="stylesheet">
    <link href='/assets/fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/animate.css" rel="stylesheet">
    <link href="/assets/css/w3.css" rel="stylesheet">
    <link href="/assets/css/hover-min.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid main-signin limiter" style="width:100%;">
        <div class="container-login100">
            <div class="col-md-4 centered">
                <div class="container-fluid text-center">
                    <img id="logo-main" src="/assets/img/logo.png" width="200" alt="Logo Thing main logo">
                </div>
                <h1 style="font-size: 26px; text-align: center">MerchantHQ</h1>
                <form id="regForm" class="signup-form-container" action="/exchange/process_login" method="post">
                    <div class="out-box">
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                        <h1 style="font-size: 14px; text-align: center">Create Account</h1>
                        <p style="text-align: center; color: brown">
                            <?php if ($this->session->has_userdata('error'))
			                     { 
			                     	echo $this->session->userdata('error');
			                     	$this->session->unset_userdata('error');
			                     }
			                     ?>

                        </p>
                        <div class="tab">
                            <h4 class="text-center bold">Company Information:</h4>
                            <div class="form-group col-md-12">
                                <label for="businesstype"><b>Business Type </b></label><br>
                                <select class="diff" id="businesstype" name="businesstype" value=""
                                    oninput="this.className = ''" required>
                                    <option value=""></option>
                                    <option value="Individual">Individual</option>
                                    <option value="Professional">Registered Business</option>
                                </select>
                                <span class="help-block"></span>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="nid-number"><b>National ID card number</b></label>
                                <input id="nid-number" type="text" placeholder="National ID card number"
                                    name="nid-number" oninput="this.className = ''" required>
                                <span class="help-block"></span>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="nid-docs"><i class="fa fa-cloud-upload"></i>
                                    <b>National ID card copy
                                    </b></label>
                                <span id="file-selected"></span>
                                <input id="nid-docs" type="file" size="30" id="file-upload" required>
                                <span class="help-block"></span>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="rc-number"><b>Business registration number</b></label>
                                <input id="rc-number" type="text" placeholder="Business registration number"
                                    name="rc-number" oninput="this.className = ''" required>
                                <span class="
                                help-block"></span>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="companyname"><b>Legal company name </b></label>
                                <input class="mb-0" id="companyname" type="text"
                                    placeholder="Legal company name                                            "
                                    name="companyname" oninput="this.className = ''" required>
                                <div id="nb" class="nb">The name of your company.</div>
                                <span class="help-block"></span>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="rc-docs"><b>Business registration documents</b></label>
                                <input id="rc-docs" type="file" size="30" required>
                                <div id="nb" class="nb">Upload your documents - only
                                    official
                                    documents will be accounted</div>
                                <span class="help-block"></span>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="address"><b>Company address / Your address</b></label>
                                <input class="mb-0" id="address" type="text"
                                    placeholder="Company address / Your address" name="address"
                                    oninput="this.className = ''" required>
                                <div id="
                                    nb" class="nb">The registered
                                    nigerian address of
                                    the
                                    company must be a physical address (can be either a residential or commercial
                                    address)
                                    and cannot be a P.O. Box.</div>
                                <span class="help-block"></span>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="city"><b>City</b></label>
                                <input class="city" id="city" type="text" placeholder="City" name="city" minlength="8"
                                    oninput="this.className = ''" required>
                                <span class="
                                help-block"></span>
                            </div>
                            <div class="form-group col-md-12">
                                <p id="no_match" style="color: brown; text-align: center; display: none;">Passwords do
                                    not
                                    match</p>
                                <label for="confirm_password"><b>Please indicate your state of residence </b></label>
                                <select id="field60580324" name="field60580324" size="1" class="fsField">

                                    <option value="">&nbsp;</option>
                                    <option value="Lagos">Lagos State</option>
                                    <option value="Abuja">Federal Capital Territory / Abuja</option>
                                    <option value="Umuahia">Abia State / Umuahia</option>
                                    <option value="Yola">Adamawa State / Yola</option>
                                    <option value="Uyo">Akwa Ibom State / Uyo</option>
                                    <option value="Awka">Anambra State / Awka</option>
                                    <option value="Bauchi">Bauchi State / Bauchi</option>
                                    <option value="Yenagoa">Bayelsa State / Yenagoa</option>
                                    <option value="Makurdi">Benue State / Makurdi</option>
                                    <option value="Maiduguri">Borno State / Maiduguri</option>
                                    <option value="Calabar">Cross River State / Calabar</option>
                                    <option value="Gombe">Gombe State / Gombe</option>
                                    <option value="Asaba">Delta State / Asaba</option>
                                    <option value="Abakaliki">Ebonyi State / Abakaliki</option>
                                    <option value="Benin">Edo State / Benin</option>
                                    <option value="Ado-Ekiti">Ekiti State / Ado-Ekiti</option>
                                    <option value="Enugu">Enugu State / Enugu</option>
                                    <option value="Owerri">Imo State / Owerri</option>
                                    <option value="Dutse">Jigawa State / Dutse</option>
                                    <option value="Kaduna">Kaduna State / Kaduna</option>
                                    <option value="Kano">Kano State / Kano</option>
                                    <option value="Katsina">Katsina State / Katsina</option>
                                    <option value="Birnin Kebbi">Kebbi State / Birnin Kebbi</option>
                                    <option value="Lokoja">Kogi State / Lokoja</option>
                                    <option value="Ilorin">Kwara State / Ilorin</option>
                                    <option value="Ikeja">Lagos State / Ikeja</option>
                                    <option value="Lafia">Nasarawa State / Lafia</option>
                                    <option value="Minna">Niger State / Minna</option>
                                    <option value="Abeokuta">Ogun State / Abeokuta</option>
                                    <option value="Akure">Ondo State / Akure</option>
                                    <option value="Oshogbo">Osun State / Oshogbo</option>
                                    <option value="Ibadan">Oyo State / Ibadan</option>
                                    <option value="Jos">Plateau State / Jos</option>
                                    <option value="Port Harcourt">Rivers State / Port Harcourt</option>
                                    <option value="Sokoto">Sokoto State / Sokoto</option>
                                    <option value="Jalingo">Taraba State / Jalingo</option>
                                    <option value="Damaturu">Yobe State / Damaturu</option>
                                    <option value="Gusau">Zamfara / Gusau</option>
                                </select>
                                <span class="help-block"></span>
                            </div>


                        </div>



                        <div class="tab">
                            <h4 class="text-center bold">About your store:</h4>
                            <div class="form-group col-md-12">
                                <label for="storename"><b>Preferred store name</b></label>
                                <input id="storename" type="text" placeholder="Preferred store name" name="storename"
                                    oninput="this.className = ''" required>
                                <span class="help-block"></span>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="warehouse"><b>Would you like to store your products with
                                        Gametrade?</b></label>
                                <div class="fieldset-content">

                                    <label class="fsOptionLabel" for="warehouse"><input type="radio"
                                            id="field60580327_1" name="warehouse" value="Yes"
                                            class="fsField horizontal">Yes</label>

                                    <label class="fsOptionLabel horizontal" for="warehouse"><input type="radio"
                                            id="field60580327_2" name="warehouse" value="No"
                                            class="fsField horizontal">No</label>
                                </div>
                                <span class="help-block"></span>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="referral"><b>Were you reffered?</b></label>
                                <div class="fieldset-content">

                                    <label class="fsOptionLabel horizontal" for="field60580327_1"><input type="radio"
                                            id="field60580327_1" name="referral" value="Yes"
                                            class="fsField horizontal">Yes</label>

                                    <label class="fsOptionLabel horizontal" for="field60580327_2"><input type="radio"
                                            id="field60580327_2" name="referral" value="No"
                                            class="fsField horizontal">No</label>
                                </div>
                                <span class="help-block"></span>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="email"><b>Email of the person that reffered you</b></label>
                                <input id="email" type="email" placeholder="Email of the person that reffered you"
                                    name="email" oninput="this.className = ''" required>
                                <span class="help-block"></span>
                            </div>


                            <div class="form-group col-md-12">
                                <label for="firstname"><b>How did you hear of MerchantHQ by GameTrade? </b></label>
                                <select name="referrer" class="ng-pristine ng-valid ng-touched"
                                    oninput="this.className = ''" required>
                                    <option value="" class="">
                                        Select One
                                    </option>
                                    <option value="0" label="Billboard">Billboard</option>
                                    <option value="1" label="Konga Flyer">GameTrade Flyer</option>
                                    <option value="2" label="Konga Website">GameTrade Website</option>
                                    <option value="3" label="Newspaper">Newspaper</option>
                                    <option value="4" selected="selected" label="Online Advertisement">Online
                                        Advertisement
                                    </option>
                                    <option value="5" label="Other">Other</option>
                                    <option value="6" label="Radio">Radio</option>
                                    <option value="7" label="Recommended by a Friend">Recommended by a Friend</option>
                                    <option value="8" label="Recommended by a Konga Employee">Recommended by a GameTrade
                                        Employee</option>
                                    <option value="9" label="Recommended by a Konga Seller">Recommended by a GameTrade
                                        Merchant
                                    </option>
                                </select>
                                <span class="help-block"></span>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="othersites"><b>Are you selling on other websites?</b></label>
                                <div class="fieldset-content">

                                    <label class="fsOptionLabel horizontal" for="field60580327_1"><input type="radio"
                                            id="field60580327_1" name="othersites" value="Yes"
                                            class="fsField horizontal">Yes</label>

                                    <label class="fsOptionLabel horizontal" for="field60580327_2"><input type="radio"
                                            id="field60580327_2" name="othersites" value="No"
                                            class="fsField horizontal">No</label>
                                </div>
                                <span class="help-block"></span>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="email"><b>Please provide your online store link(s) </b></label>
                                <textarea id="field60580334" class="fsField" name="field60580334" rows="6" cols="50"
                                    aria-describedby="fsCallout60580334"></textarea>
                                <span class="help-block"></span>
                            </div>


                            <div class="form-group col-md-12">
                                <label for="firstname"><b>How many products will you list on GameTrade? </b></label>
                                <select id="field60580336" name="field60580336" size="1" class="fsField"
                                    oninput="this.className = ''" required>

                                    <option value=" 0">&nbsp;
                                    </option>
                                    <option value="10">less than 20</option>
                                    <option value="70">20 to 100</option>
                                    <option value="150">100 to 200</option>
                                    <option value="300">200 to 400</option>
                                    <option value="600">400 to 1000</option>
                                    <option value="1000">more than 1000</option>

                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>




                        <div class="tab">
                            <h4 class="text-center bold">Account Setup:</h4>
                            <div class="form-group col-md-12">
                                <label for="firstname"><b>First Name</b></label>
                                <input id="firstname" type="text" placeholder="Enter First Name" name="firstname"
                                    oninput="this.className = ''" required>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="lastname"><b>Last Name</b></label>
                                <input id="lastname" type="text" placeholder="Enter Last Name" name="lastname"
                                    oninput="this.className = ''" required>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="email"><b>Email</b></label>
                                <input class="mb-0" id=" email" type="email" placeholder="Enter Email" name="email"
                                    oninput="this.className = ''" required>
                                <div id="nb" class="nb">Will be
                                    used to send you a
                                    verification
                                    and activation email</div>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="phonenumber"><b>Phone Number</b></label>
                                <input id="number" type="tel" placeholder="Enter Phone Number" name="phonenumber"
                                    minlength="11" maxlength="11" oninput="this.className = ''" required>
                                <span class="help-block"></span>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="password"><b>Password</b></label>
                                <input class="pass" id="password" type="password" placeholder="Enter Password"
                                    name="password" minlength="8" oninput="this.className = ''" required>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group col-md-12">
                                <p id="no_match" style="color: brown; text-align: center; display: none;">Passwords do
                                    not
                                    match</p>
                                <label for="confirm_password"><b>Confirm Password</b></label>
                                <input class="pass" id="cpassword" type="password" placeholder="Confirm Password"
                                    name="confirm_password" minlength="8" oninput="this.className = ''" required>
                                <span class="help-block"></span>
                            </div>
                            <div style="    padding-bottom: 20px;margin-top: -20px;">
                                <p class="col-md-12">
                                    <input type="checkbox" placeholder="Confirm Password" name="psw" required>
                                    I have read and accepted the <a class="brown" href="#xterms">terms and
                                        conditions</a>
                                </p>
                                <p class="col-md-12">
                                    <input type="checkbox" placeholder="Confirm Password" name="psw" checked>
                                    Send me Promotions, Offers and Useful Informations
                                </p>
                            </div>


                        </div>


                        <div class="col-md-12" style=" margin-top:20px;">
                            <button type="submit" class="btn" id="nextBtn" onclick="nextPrev(1)">Continue</button>
                        </div>
                        <div class="text-center">
                            <p>Have an account? <a href="login" class="brown">Login here</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $('#file-upload').bind('change', function() {
            var fileName = '';
            fileName = $(this).val();
            $('#file-selected').html(fileName);
        })
    });
    </script>
    <script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:

        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

    <!-- <script>
    $(document).ready(function() {
        if ($("#businesstype").val() == "Individual") {

            $("#nid-number").show().prop('required', true);
            $("#nid-docs").show().prop('required', true);
            $("#rc-number").hide().removeAttr('required');
            $("#companyname").hide().removeAttr('required');
            $("#rc-docs").hide().removeAttr('required');

            // $("#destination").val($("#destination option:first").val());
            // $("#flight").val($("#flight option:first").val());
            // $("#destinationairport").val($("#destinationairport option:first").val());
            // $("#airport").val($("#airport option:first").val());
            // $("#departuretime").val($("#departuretime option:first").val());
        } else if ($("#businesstype").val() == "Professional") {
            $("#nid-number").hide().removeAttr('required');
            $("#nid-docs").hide().removeAttr('required');
            $("#rc-number").show().prop('required', true);
            $("#companyname").show().prop('required', true);
            $("#rc-docs").show().prop('required', true);
        } else {
            $("#nid-number").hide().removeAttr('required');
            $("#nid-docs").hide().removeAttr('required');
            $("#rc-number").hide().removeAttr('required');
            $("#companyname").hide().removeAttr('required');
            $("#rc-docs").hide().removeAttr('required');
        }


    });
    </script> -->
</body>

</html>