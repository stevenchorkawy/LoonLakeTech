<?php
include_once "./include/MyHelper.php";
//Recaptcha stuff
require_once('./recaptcha/recaptchalib.php');
$publicKey = "6LcIYCMTAAAAAAvEdCKFlHa0u2GYamANYc9EgVRz";
$privatekey = "6LcIYCMTAAAAABbDgTMdcHwUPehOQ9A9s4GQB8vf";


$errorMessage = "";

//echo "<br><br><br><br><br><br><br><br>";
    /*
     *  Make the form sticky.
     *
     * Since the user is allowed to submit a form that is incomplete,
     * I cannot think of an efficient way to loop through each var in the _POST array.
     *
     * This means that I will have to manually check each var in the _POST array each time.
     * */
$title= "";
$firstName = "";
$lastName = "";
$dateOfBirth = "";
$address = "";
$postalCode = "";
$homePhone= "";
$businessPhone = "";
$occupation = "";
$employer = "";
$referredBy = "";
$spouseName = "";
$spouseOccupation = "";
$spousePhone = "";
$emergContactName = "";
$emergContactRelationship = "";
$emergContactPhone = "";
$physicianName = "";
$physicianAddress = "";
$physicianPhone = "";
$recentPhysicianCare = "";
$recentPhysicianCareReason = "";
$seriousIllnessOperation = "";
$seriousIllnessOperationReason = "";
$currentMedication = "";
$currentMedicationReason = "";
$heartCirculation = "";
$heartCirculationReason = "";
$allergies = "";
$allergiesReason = "";
$prolongedBleeding = "";
$medicineReaction = "";
$medicineReactionReason = "";
$takenPenicillin = "";
$steroidsOrCortisone = "";
//Q10
$aidsOrHiv = "";
$hayFever = "";
$migraine = "";
$anaemia = "";
$heartProblems = "";
$nervousDisorder = "";
$arthritis = "";
$hemorrage = "";
$rheumaticFever = "";
$asthma = "";
$hepatitis = "";
$rheumatism = "";
$bloodDisorder = "";
$bloodPressure = "";
$scarletFever = "";
$cancer = "";
$hivCarrier = "";
$stomachUlser = "";
$chestPain = "";
$kidneyDisease ="";
$stroke = "";
$cataracts = "";
$liverDisease = "";
$thyroidDisorder = "";
$diabetes = "";
$lungDisease = "";
$tuberculosis = "";
$epilespy = "";
$malignantHyperthermia = "";
$faintingOrDizzy = "";
$other = "";
//end Q10
$fainting = "";
$oralContraceptives = "";
$pregnant = "";
$due_date = "";

$emailAddress = "";


/*Pointers in PHP*/
//$form = array();
//$form['recentPhysicianCare'] = &$recentPhysicianCare;
//$form['']


//echo "Title: " . $title;
//echo "Array: " . $form['title'];

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

        //echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/>";
        //Check if each _POST var is set.
        $title = SetStickyVar($_POST['title']);
        $firstName = SetStickyVar($_POST['firstName']);
        $lastName = SetStickyVar($_POST['lastName']);
        $dateOfBirth = SetStickyVar($_POST['dateOfBirth']);
        $address = SetStickyVar($_POST['address']);
        $postalCode = SetStickyVar($_POST['postalCode']);
        $homePhone= SetStickyVar($_POST['homePhone']);
        $businessPhone = SetStickyVar($_POST['businessPhone']);
        $occupation = SetStickyVar($_POST['occupation']);
        $employer = SetStickyVar($_POST['employer']);
        $referredBy = SetStickyVar($_POST['referredBy']);
        $spouseName = SetStickyVar($_POST['spouseName']);
        $spouseOccupation = SetStickyVar($_POST['spouseOccupation']);
        $spousePhone = SetStickyVar($_POST['spousePhone']);
        $emergContactName = SetStickyVar($_POST['emergContactName']);
        $emergContactRelationship = SetStickyVar($_POST['emergContactRelationship']);
        $emergContactPhone = SetStickyVar($_POST['emergContactPhone']);
        $physicianName = SetStickyVar($_POST['physicianName']);
        $physicianAddress = SetStickyVar($_POST['physicianAddress']);
        $physicianPhone = SetStickyVar($_POST['physicianPhone']);


        /*These _POST vars may not be set every time,
         * Check each one before passing it to the function
         * */
        if(isset($_POST['recentPhysicianCare']))
        {
            $recentPhysicianCare = SetStickyVar($_POST['recentPhysicianCare']);
        }

        if(isset($_POST['recentPhysicianCareReason']))
        {
            $recentPhysicianCareReason = SetStickyVar($_POST['recentPhysicianCareReason']);
        }

        if(isset($_POST['seriousIllnessOperation']))
        {
            $seriousIllnessOperation = SetStickyVar($_POST['seriousIllnessOperation']);
        }

        if(isset($_POST['seriousIllnessOperationReason']))
        {
            $seriousIllnessOperationReason = SetStickyVar($_POST['seriousIllnessOperationReason']);
        }

        if(isset($_POST['currentMedication']))
        {
            $currentMedication = SetStickyVar($_POST['currentMedication']);
        }

        if(isset($_POST['currentMedicationReason']))
        {
            $currentMedicationReason = SetStickyVar($_POST['currentMedicationReason']);
        }

        if(isset($_POST['heartCirculation']))
        {
            $heartCirculation = SetStickyVar($_POST['heartCirculation']);
        }

        if(isset($_POST['heartCirculationReason']))
        {
            $heartCirculationReason = SetStickyVar($_POST['heartCirculationReason']);
        }

        if(isset($_POST['allergies']))
        {
            $allergies = SetStickyVar($_POST['allergies']);
        }

        if(isset($_POST['allergiesReason']))
        {
            $allergiesReason = SetStickyVar($_POST['allergiesReason']);
        }

        if(isset($_POST['prolongedBleeding']))
        {
            $prolongedBleeding = SetStickyVar($_POST['prolongedBleeding']);
        }

        if(isset($_POST['medicineReaction']))
        {
            $medicineReaction = SetStickyVar($_POST['medicineReaction']);
        }

        if(isset($_POST['medicineReactionReason']))
        {
            $medicineReactionReason = SetStickyVar($_POST['medicineReactionReason']);
        }

        if(isset($_POST['takenPenicillin']))
        {
            $takenPenicillin = SetStickyVar($_POST['takenPenicillin']);
        }

        if(isset($_POST['steroidsOrCortisone']))
        {
            $steroidsOrCortisone = SetStickyVar($_POST['steroidsOrCortisone']);
        }

        if(isset($_POST['aidsOrHiv']))
        {
            $aidsOrHiv = SetStickyVar($_POST['aidsOrHiv']);
        }

        if(isset($_POST['hayFever']))
        {
            $hayFever = SetStickyVar($_POST['hayFever']);
        }

        if(isset($_POST['migraine']))
        {
            $migraine = SetStickyVar($_POST['migraine']);
        }

        if(isset($_POST['anaemia']))
        {
            $anaemia = SetStickyVar($_POST['anaemia']);
        }

        if(isset($_POST['heartProblems']))
        {
            $heartProblems = SetStickyVar($_POST['heartProblems']);
        }

        if(isset($_POST['nervousDisorder']))
        {
            $nervousDisorder = SetStickyVar($_POST['nervousDisorder']);
        }

        if(isset($_POST['arthritis']))
        {
            $arthritis = SetStickyVar($_POST['arthritis']);
        }

        if(isset($_POST['hemorrage']))
        {
            $hemorrage = SetStickyVar($_POST['hemorrage']);
        }

        if(isset($_POST['rheumaticFever']))
        {
            $rheumaticFever = SetStickyVar($_POST['rheumaticFever']);
        }

        if(isset($_POST['asthma']))
        {
            $asthma = SetStickyVar($_POST['asthma']);
        }

        if(isset($_POST['hepatitis']))
        {
            $hepatitis = SetStickyVar($_POST['hepatitis']);
        }

        if(isset($_POST['rheumatism']))
        {
            $rheumatism = SetStickyVar($_POST['rheumatism']);
        }

        if(isset($_POST['bloodDisorder']))
        {
            $bloodDisorder = SetStickyVar($_POST['bloodDisorder']);
        }

        if(isset($_POST['bloodPressure']))
        {
            $bloodPressure = SetStickyVar($_POST['bloodPressure']);
        }

        if(isset($_POST['scarletFever']))
        {
            $scarletFever = SetStickyVar($_POST['scarletFever']);
        }

        if(isset($_POST['cancer']))
        {
            $cancer = SetStickyVar($_POST['cancer']);
        }

        if(isset($_POST['hivCarrier']))
        {
            $hivCarrier = SetStickyVar($_POST['hivCarrier']);
        }

        if(isset($_POST['stomachUlser']))
        {
            $stomachUlser = SetStickyVar($_POST['stomachUlser']);
        }

        if(isset($_POST['chestPain']))
        {
            $chestPain = SetStickyVar($_POST['chestPain']);
        }

        if(isset($_POST['kidneyDisease']))
        {
            $kidneyDisease = SetStickyVar($_POST['kidneyDisease']);
        }

        if(isset($_POST['stroke']))
        {
            $stroke = SetStickyVar($_POST['stroke']);
        }

        if(isset($_POST['cataracts']))
        {
            $cataracts = SetStickyVar($_POST['cataracts']);
        }

        if(isset($_POST['liverDisease']))
        {
            $liverDisease = SetStickyVar($_POST['liverDisease']);
        }

        if(isset($_POST['thyroidDisorder']))
        {
            $thyroidDisorder = SetStickyVar($_POST['thyroidDisorder']);
        }

        if(isset($_POST['diabetes']))
        {
            $diabetes = SetStickyVar($_POST['diabetes']);
        }

        if(isset($_POST['lungDisease']))
        {
            $lungDisease = SetStickyVar($_POST['lungDisease']);
        }

        if(isset($_POST['tuberculosis']))
        {
            $tuberculosis = SetStickyVar($_POST['tuberculosis']);
        }

        if(isset($_POST['epilepsy']))
        {
            $epilespy = SetStickyVar($_POST['epilepsy']);
        }

        if(isset($_POST['malignantHyperthermia']))
        {
            $malignantHyperthermia = SetStickyVar($_POST['malignantHyperthermia']);
        }

        if(isset($_POST['faintingOrDizzy']))
        {
            $faintingOrDizzy = SetStickyVar($_POST['faintingOrDizzy']);
        }

        if(isset($_POST['other']))
        {
            $other = SetStickyVar($_POST['other']);
        }

        if(isset($_POST['fainting']))
        {
            $fainting = SetStickyVar($_POST['fainting']);
        }

        if(isset($_POST['oralContraceptives']))
        {
            $oralContraceptives = SetStickyVar($_POST['oralContraceptives']);
        }


        if(isset($_POST['pregnant']))
        {
            $pregnant = SetStickyVar($_POST['pregnant']);
        }

        /*END OF OPTIONAL FIELDS*/

        $due_date = SetStickyVar($_POST['due-date']);

        $emailAddress = SetStickyVar($_POST['emailAddress']);

        //Check if the reCaptCha worked

        

        try {

            if(isset($_POST['recaptcha_challenge_field']) && isset($_POST["recaptcha_challenge_field"]))
            {
                $resp = recaptcha_check_answer ($privatekey,
                                         $_SERVER["REMOTE_ADDR"],
                                         $_POST["recaptcha_challenge_field"],
                                         $_POST["recaptcha_response_field"]);
            }
            else
            {
                throw new Exception("<br/>Check off the thing");
            }
        }
        catch(Exception $e)
        {
            die($e->getMessage());

        }

        if(!$resp->is_valid)
        {
            //Invalid recaptcha
            $errorMessage = "Please Enter the correct CAPTCHA";
            
        }
        else {
            //Valid recaptcha
            //Create the PDF file and email it.
            include "./include/submit-medical-form.php";
        }
    }





//$home_page = false;
//$title = "Medical Form";

include "./include/class.header.php";

$header->homePage = false;
$header->homePageLink = "index.php";
$header->title = "Medical Form";
$header->pageDescription = "Online form for patients to complete their medical history prior to entering the office.
                            When you complete this form an email containing the provided information will be sent to Dr Chorkawys office.
                            Upon your arrival the office will print your provided information for you.";

include "./include/header.php";
?>

<script>
    function CheckDateContent()
    {
        var x = document.getElementById("dateOfBirth");

        //if(x.value == null || x.value == "")
        //{
        //    x.type = "text";
        //    console.log("IS NULL");
        //}
    }
</script>

<!--Radio Button Events-->
<script>
    $(document).ready(function () {
        console.log("READY");

        $('.rbtn').click(function () {

            console.log(this.value);

            var bool = this.value; 

            if (bool == "true")
            {
                //$(this).closest('.specify-row').slideDown();
                $(".specify-row", $(this).parent().next()).slideDown();
            }
            else if (bool == "false")
            {
                $(".specify-row", $(this).parent().next()).slideUp();
            }
        });
    });


    

    function CheckChanged(rbtn, rowClass) {
        var val = rbtn.value;
        //console.log("Row Class: " + rowClass);

        if (val == "true") {
            //console.log("True");
            
            
            $("." + rowClass).slideDown();
            //$(this).closest(rowClass).slideDown();
        }
        else {
            //console.log("FALSE");
            $("."+rowClass).slideUp();
        }

    }

</script>

<div class="about-section container dark-form">
    <h1 class="h1-res-font text-center">
        PATIENT INFORMATION AND HEALTH QUESTIONNAIRE
    </h1>
    <hr/>
    <p class="text-center">
        To help ensure your well being while undergoing treament in our office, please answer the following questions in detial. <br/>All information will be considered confidential and for our records only.  <br/>Drugs, including alcohol and hormones, may influence the management of your dental treatment.
    </p>
    <hr />
    <form role="form" id="medical-form" class="form-horizontal contain" method="POST" action="<?php echo $_SERVER['PHP_SELF'] . "#submit";?>">
        <!--Email Row-->
        <!--<div class="row">
            <div class="form-group">
                <div class="col-xs-2"></div>-->
                <!--<label class="control-label col-sm-2" for="email">Email:</label>-->
                <!--<div class="col-xs-8">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" />
                </div>
                <div class="col-xs-2"></div>
            </div>
        </div>-->

        <!--Label row date of birth-->
        <div class="row hidden-xs">
            <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="form-group">
                        <div class="col-md-3 col-xs-12"></div>
                        <div class="col-xs-6 col-md-3"></div>
                        <div class="col-xs-6 col-md-3"></div>
                        <div class="col-md-3 col-xs-12">
                            <!--<div class="col-xs-1"></div>-->
                            <div>
                                <label for="dateOfBirth" class="control-label">Date of Birth</label>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-md-2"></div>
        </div>

        <!--Name and Bdate-->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-3 col-xs-12">
                        <div class="col-md-4"></div>
                        <div class="col-xs-5 col-md-8">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" maxlength="5" value="<?php echo $title;?>"/>
                        </div>
                        <div class="col-xs-7"></div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required maxlength="15" value="<?php echo $firstName; ?>" />
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <input type="text" class="form-control col-sm-5" id="lastName" name="lastName" placeholder="Last Name" required maxlength="15" value="<?php echo $lastName;?>" />
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <!--<div class="col-xs-1"></div>-->
                        <div>
                            <label for="dateOfBirth" class="control-label hidden-lg hidden-md hidden-sm">Date of Birth</label>
                            <!--<input type="text" class="form-control" id="dateOfBirth" name="dateOfBirth" placeholder="Date of Birth" onfocus="this.type = 'date'" onblur="CheckDateContent()" value="<?php echo $dateOfBirth;?>" />-->
                            <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" placeholder="Date of Birth" onblur="CheckDateContent()" value="<?php echo $dateOfBirth;?>" />
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        

        <!--Address-->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-6 col-xs-6">
                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" maxlength="40" value="<?php echo $address;?>" />
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <input type="text" class="form-control" id="postalCode" name="postalCode" placeholder="Postal Code" maxlength="7" value="<?php echo $postalCode;?>" />
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        

        <!--Contact-->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-6 col-xs-6">
                        <input type="text" class="form-control" id="homePhone" name="homePhone" placeholder="Phone Number" maxlength="15" value="<?php echo $homePhone;?>" />
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <input type="text" class="form-control" id="businessPhone" name="businessPhone" placeholder="Business Phone" maxlength="15" value="<?php echo $businessPhone;?>" />
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-6 col-xs-6">
                        <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Occupation" maxlength="35" value="<?php echo $occupation;?>" />
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <input type="text" class="form-control" id="employer" name="employer" placeholder="Employer" maxlength="35" value="<?php echo $employer;?>" />
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        
        <!--Reffered By-->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-12 col-xs-12">
                        <input type="text" class="form-control" id="referredBy" name="referredBy" placeholder="Referred By" maxlength="80" value="<?php echo $referredBy;?>" />
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <!--Spouse Contact-->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-4 col-xs-12">
                        <input type="text" class="form-control" id="spouseName" name="spouseName" placeholder="Spouse's Name" maxlength="21" value="<?php echo $spouseName;?>" />
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input type="text" class="form-control" id="spouseOccupation" name="spouseOccupation" placeholder="Occupation" maxlength="25" value="<?php echo $spouseOccupation;?>" />
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input type="text" class="form-control" id="spousePhone" name="spousePhone" placeholder="Phone #" maxlength="14" value="<?php echo $spousePhone;?>" />
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <!--Emergency Contact-->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-4 col-xs-12">
                        <input type="text" class="form-control" id="emergContactName" name="emergContactName" placeholder="Contact Person" maxlength="21" value="<?php echo $emergContactName;?>" />
                        <!--<label for="emergContactName" class="form-label">(in case of emergency)</label>-->
                        <small class="text-muted">(in case of emergency)</small>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input type="text" class="form-control" id="emergContactRelationship" name="emergContactRelationship" placeholder="Relationship" maxlength="23" value="<?php echo $emergContactRelationship;?>" />
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input type="text" class="form-control" id="emergContactPhone" name="emergContactPhone" placeholder="Phone #" maxlength="14" value="<?php echo $emergContactPhone;?>" />
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <br />
        <!--Physician Contact-->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-4 col-xs-12">
                        <input type="text" class="form-control" id="physicianName" name="physicianName" maxlength="20" placeholder="Physician's Name" value="<?php echo $physicianName;?>" />
                        <!--<label for="emergContactName" class="form-label">(in case of emergency)</label>-->
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input type="text" class="form-control" id="physicianAddress" name="physicianAddress" placeholder="Address" maxlength="25" value="<?php echo $physicianAddress;?>" />
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input type="text" class="form-control" id="physicianPhone" name="physicianPhone" placeholder="Phone #" maxlength="14" value="<?php echo $physicianPhone;?>" />
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <hr />
    <!--MEDICAL HISTORY START-->
        <h2 class="my-color-white text-center">MEDICAL HISTORY</h2>

        <!--MEDICAL HISTORY RADIO BUTTONS-->
        <!--recentPhysicianCare-->
       
        <div class="row">
            <div class="col-md-2 text-right">1.</div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-8 col-xs-12">
                        <p>Have you recently been under the care of a physician?</p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <label class="radio-inline">
                            <input type="radio" id="test" class="rbtn" name="recentPhysicianCare" value="true" onclick="CheckChanged(this,'recentPhysicianCareReason')" <?php StickyRadioButton(true, $recentPhysicianCare); ?>/>Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" class="rbtn" name="recentPhysicianCare" value="false" onclick="CheckChanged(this,'recentPhysicianCareReason')" <?php StickyRadioButton(false, $recentPhysicianCare); ?> />No
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="specify-row recentPhysicianCareReason">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <p>Please Specify</p>
                </div>
                <div class="col-md-7"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <input type="text" id="recentPhysicianCareReason" name="recentPhysicianCareReason" class="form-control reason" maxlength="50" value="<?php echo $recentPhysicianCareReason; ?>"/>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        
        <!--seriousIllnessOperation-->
        <div class="row">
            <div class="col-md-2 text-right">2.</div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-8 col-xs-12">
                        <p>Have you ever had a serious illness, operation?</p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <label class="radio-inline">
                            <input type="radio" name="seriousIllnessOperation" onclick="CheckChanged(this,'seriousIllnessOperationReason')" value="true">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="seriousIllnessOperation" onclick="CheckChanged(this,'seriousIllnessOperationReason')" value="false">No
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="specify-row seriousIllnessOperationReason">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <p>Please Specify</p>
                </div>
                <div class="col-md-7"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <input type="text" id="seriousIllnessOperationReason" name="seriousIllnessOperationReason" maxlength="50" class="form-control reason" />
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        

    <!--currentMedication-->
    <div class="row">
        <div class="col-md-2 text-right">3.</div>
        <div class="col-md-8">
            <div class="form-group">
                <div class="col-md-8 col-xs-12">
                    <p>Are you presently taking any kind of medication, either prescribed or self-administered?</p>
                </div>
                <div class="col-md-4 col-xs-12">
                    <label class="radio-inline">
                        <input type="radio" name="currentMedication" onclick="CheckChanged(this, 'currentMedicationReason')" value="true">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="currentMedication" onclick="CheckChanged(this, 'currentMedicationReason')" value="false">No
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="specify-row currentMedicationReason">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <p>Please Specify</p>
            </div>
            <div class="col-md-7"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <input type="text" id="currentMedicationReason" name="currentMedicationReason" maxlength="50" class="form-control reason" />
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>



    <!--Circulatory Problem-->
    <div class="row">
        <div class="col-md-2 text-right">4.</div>
        <div class="col-md-8">
            <div class="form-group">
                <div class="col-md-8 col-xs-12">
                    <p>Do you have a heart circulatory problem of any kind?</p>
                </div>
                <div class="col-md-4 col-xs-12">
                    <label class="radio-inline">
                        <input type="radio" name="heartCirculation" onclick="CheckChanged(this, 'heartCirculationReason')" value="true">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="heartCirculation" onclick="CheckChanged(this, 'heartCirculationReason')" value="false">No
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="specify-row heartCirculationReason">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <p>Please Specify</p>
            </div>
            <div class="col-md-7"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <input type="text" id="heartCirculationReason" name="heartCirculationReason" maxlength="50" class="form-control reason" />
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <!--Allergies-->
    <div class="row">
        <div class="col-md-2 text-right">5.</div>
        <div class="col-md-8">
            <div class="form-group">
                <div class="col-md-8 col-xs-12">
                    <p>Do you have any allergies?</p>
                </div>
                <div class="col-md-4 col-xs-12">
                    <label class="radio-inline">
                        <input type="radio" name="allergies" onclick="CheckChanged(this, 'allergiesReason')" value="true">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="allergies" onclick="CheckChanged(this, 'allergiesReason')" value="false">No
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="specify-row allergiesReason">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <p>Please Specify</p>
            </div>
            <div class="col-md-7"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <input type="text" id="allergiesReason" name="allergiesReason" maxlength="50" class="form-control reason" />
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <!--Prolonged Bleeding-->
    <div class="row">
        <div class="col-md-2 text-right">6.</div>
        <div class="col-md-8">
            <div class="form-group">
                <div class="col-md-8 col-xs-12">
                    <p>Are you subject to prolonged bleeding?</p>
                </div>
                <div class="col-md-4 col-xs-12">
                    <label class="radio-inline">
                        <input type="radio" name="prolongedBleeding" value="true">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="prolongedBleeding" value="false">No
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
           
        <!--medicineReaction-->
        <div class="row">
            <div class="col-md-2 text-right">7.</div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-8 col-xs-12">
                        <p>Have you ever had a reaction to any kind of medicine?</p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <label class="radio-inline">
                            <input type="radio" name="medicineReaction" onclick="CheckChanged(this, 'medicineReactionReason')" value="true">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="medicineReaction" onclick="CheckChanged(this, 'medicineReactionReason')" value="false">No
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="specify-row medicineReactionReason">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <p>Please Specify</p>
                </div>
                <div class="col-md-7"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <input type="text" id="medicineReactionReason" name="medicineReactionReason" maxlength="50" class="form-control reason" />
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>

        <!--takenPenicillin-->
        <div class="row">
            <div class="col-md-2 text-right">8.</div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-8 col-xs-12">
                        <p>Have you ever taken penicillin?</p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <label class="radio-inline">
                            <input type="radio" name="takenPenicillin" value="true">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="takenPenicillin" value="false">No
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <!--steroidsOrCortisone-->
        <div class="row">
            <div class="col-md-2 text-right">9.</div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-8 col-xs-12">
                        <p>Have you ever taken steroids or cortisone?</p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <label class="radio-inline">
                            <input type="radio" name="steroidsOrCortisone" value="true">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="steroidsOrCortisone" value="false">No
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <!--Final Question-->
        <div class="row">
            <div class="col-md-2 text-right">10.</div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-8 col-xs-12">
                        <p>Do you presently have or have you ever had?</p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <!--<label class="radio-inline">
                            <input type="radio" name="steroidsOrCortisone" value="true">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="steroidsOrCortisone" value="false">No
                        </label>-->
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>AIDS/HIV</p>
                    <label class="radio-inline">
                        <input type="radio" name="aidsOrHiv" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="aidsOrHiv" value="false"><span>No</span>
                    </label>
                </div>
                
                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Hay Fever</p>
                    <label class="radio-inline">
                        <input type="radio" name="hayFever" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="hayFever" value="false"><span>No</span>
                    </label>
                </div>
                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Migraine Headaches</p>
                    <label class="radio-inline">
                        <input type="radio" name="migraine" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="migraine" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Anaemia</p>
                    <label class="radio-inline">
                        <input type="radio" name="anaemia" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="anaemia" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Heart Problems of any kind</p>
                    <label class="radio-inline">
                        <input type="radio" name="heartProblems" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="heartProblems" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Nervous Disorder</p>
                    <label class="radio-inline">
                        <input type="radio" name="nervousDisorder" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="nervousDisorder" value="false"><span>No</span>
                    </label>
                </div>
                
                
                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Arthritis</p>
                    <label class="radio-inline">
                        <input type="radio" name="arthritis" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="arthritis" value="false"><span>No</span>
                    </label>
                </div>
                
                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Hemorrage</p>
                    <label class="radio-inline">
                        <input type="radio" name="hemorrage" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="hemorrage" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Rhumatic Fever</p>
                    <label class="radio-inline">
                        <input type="radio" name="rheumaticFever" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="rheumaticFever" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Asthma</p>
                    <label class="radio-inline">
                        <input type="radio" name="asthma" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="asthma" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Hepatitis</p>
                    <label class="radio-inline">
                        <input type="radio" name="hepatitis" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="hepatitis" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Rheumatism</p>
                    <label class="radio-inline">
                        <input type="radio" name="rheumatism" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="rheumatism" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Blood Disorder</p>
                    <label class="radio-inline">
                        <input type="radio" name="bloodDisorder" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="bloodDisorder" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>High or Low Blood Pressure</p>
                    <label class="radio-inline">
                        <input type="radio" name="bloodPressure" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="bloodPressure" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Scarlet Fever</p>
                    <label class="radio-inline">
                        <input type="radio" name="scarletFever" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="scarletFever" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Cancer</p>
                    <label class="radio-inline">
                        <input type="radio" name="cancer" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="cancer" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>HIV Carrier</p>
                    <label class="radio-inline">
                        <input type="radio" name="hivCarrier" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="hivCarrier" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Stomach Ulser</p>
                    <label class="radio-inline">
                        <input type="radio" name="stomachUlser" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="stomachUlser" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Chest Pain/Angina</p>
                    <label class="radio-inline">
                        <input type="radio" name="chestPain" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="chestPain" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Kidney Disease</p>
                    <label class="radio-inline">
                        <input type="radio" name="kidneyDisease" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="kidneyDisease" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Stroke</p>
                    <label class="radio-inline">
                        <input type="radio" name="stroke" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="stroke" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Contacts/ Cataracts</p>
                    <label class="radio-inline">
                        <input type="radio" name="cataracts" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="cataracts" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Liver Disease</p>
                    <label class="radio-inline">
                        <input type="radio" name="liverDisease" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="liverDisease" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Thyroid Disorder</p>
                    <label class="radio-inline">
                        <input type="radio" name="thyroidDisorder" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="thyroidDisorder" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Diabetes</p>
                    <label class="radio-inline">
                        <input type="radio" name="diabetes" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="diabetes" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Lung Disease</p>
                    <label class="radio-inline">
                        <input type="radio" name="lungDisease" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="lungDisease" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Tuberculosis</p>
                    <label class="radio-inline">
                        <input type="radio" name="tuberculosis" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="tuberculosis" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Epilepsy</p>
                    <label class="radio-inline">
                        <input type="radio" name="epilepsy" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="epilepsy" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Malignant Hyperthermia</p>
                    <label class="radio-inline">
                        <input type="radio" name="malignantHyperthermia" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="malignantHyperthermia" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Fainting/ Dizzines</p>
                    <label class="radio-inline">
                        <input type="radio" name="faintingOrDizzy" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="faintingOrDizzy" value="false"><span>No</span>
                    </label>
                </div>

                <!--New Item-->
                <div class="col-md-4 col-xs-6 text-center illnesses">
                    <p>Other</p>
                    <label class="radio-inline">
                        <input type="radio" name="other" value="true"><span>Yes</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="other" value="false"><span>No</span>
                    </label>
                </div>
                
            </div>
            <div class="col-md-2"></div>
        </div>

        <!--# 15-->
        <div class="row">
            <div class="col-md-2 text-right">15.</div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-8 col-xs-12">
                        <p>Have you ever fainted?</p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <label class="radio-inline">
                            <input type="radio" name="fainting" value="true">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="fainting" value="false">No
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <!--# 16-->
        <div class="row">
            <div class="col-md-2 text-right">16.</div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-8 col-xs-12">
                        <p>Women: Are you taking oral contraceptives?</p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <label class="radio-inline">
                            <input type="radio" name="oralContraceptives" value="true">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="oralContraceptives" value="false">No
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <!--# 16-->
        <div class="row">
            <div class="col-md-2 text-right"></div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-8 col-xs-12">
                        <p> Are you pregnant?</p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <label class="radio-inline">
                            <input type="radio" name="pregnant" value="true" onclick="CheckChanged(this, 'due-date')">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="pregnant" value="false" onclick="CheckChanged(this, 'due-date')">No
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <!--# 16-->
        <div class="row due-date">
            <div class="col-md-2 text-right"></div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-8 col-xs-12">
                        <p>If yes, due date?</p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input type="date" class="form-control" id="due-date" name="due-date" />
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <!--END MEDICAL HISTORY RADIO BUTTONS-->

        <!--END MEDICAL HISTORY-->

        <br/>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <p>ADD EMAIL TO RECIEVE A COPY</p>
                <small class="text-muted">(Not Required)</small>
            </div>
            <div class="col-md-4">
                <input type="email" class="form-control" id="emailAddress" name="emailAddress" maxlength="40" placeholder="Email Address"  value="<?php echo $emailAddress;?>" />
            </div>
            <div class="col-md-2"></div>
        </div>
        <br/>

        <!--reCaptCha-->
        
        
        <br />
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <br />
                <!--reCaptCha-->
                <!--<div align="center" class="g-recaptcha text-center" data-sitekey="6Lc6YyMTAAAAAOsljE0lfiGc7YThMJFA_P0P6-WZ"></div>-->
                
                <?php
                    echo recaptcha_get_html($publicKey);
                ?>

                
                
                <br/>
                <button type="submit" id="submit" class="btn btn-warning btn-lg btn-block" >Send Info</button>
            </div>
            <div class="col-md-3"></div>
        </div>

        <?php
        if($errorMessage != "" && isset($errorMessage)):    
        ?>
            <br />
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2>
                    <?php echo $errorMessage;?>
                </h2>
                <?php
            //if($errorMessage == "Email has been sent!" && $emailAddress != ""):
                ?>
                <!--<h2>Remember to check your spam folder :(</h2>-->
                <?
            //endif;
                ?>
            </div>
            <div class="col-md-2"></div>
        </div>
        <?php
        endif;
        ?>

        <br /><br />

    <!--END OF FORM-->
    </form>
</div>

<?php
include "./include/footer.php";
    ?>