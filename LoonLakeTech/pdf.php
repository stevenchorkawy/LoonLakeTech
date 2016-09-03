<?php
require("./FPDF/fpdf.php");

$pdf = new PDF();

$pdf->AddPage();

$pdf->SetFont("Arial", "", "20");


//$message = "<h1>test</h1><h6>new</h6>";


//$pdf->WriteHTML($message);
$width = 190;
$h = 5.4;
$h2 = $h - 0.7;
$_100 = $width;
$_75 = $_100 * 0.75;
$_60 = $_100 * 0.6;
$_50 = $_100 * 0.5;
$_33 = $_100 * 0.33;
$_25= $_100 * 0.25;
//Goobye math
$_6th = 31.666;
$_6th2 = ($_6th / 2) + 3;
$_6th1 = $_6th + 6;
$_7 = $_6th - 5; //26.666
$_middle = $_100 - $_7 - $_25;

$newLine = 1;
$sameLine = 0;
$border = 0;



//$pdf->Cell(190, 10, "MY PAGE", 1, 1,"C");
$pdf->SetFont("Arial", "B", "12");
$pdf->Cell(0, 10, "PATIENT INFORMATION AND HEALTH QUESTIONNAIRE", $border, 1,"C");

$pdf->SetFont("Arial", "", "10");
$pdf->MultiCell(0, 6, "To help ensure your well being while undergoing treament in our office, please answer the following questions in detial. All information will be considered confidential and for our records only.  Drugs, including alcohol and hormones, may influence the management of your dental treatment.",
                $border, 1, "");
$pdf->Cell(0,3, "-----------------------------------------------------------------------------------------------------------------------------------------------------------------"
    ,0,1);


//Create the form.
$pdf->SetFont("Arial", "", "9");

//Row 1
$pdf->Cell($_60, $h, "Name: $title $firstName $lastName",$border,$sameLine);
$pdf->Cell(0, $h, "Date of Birth: $dateOfBirth",$border,$newLine);

//Row 2
$pdf->Cell($_60, $h, "Address: $address", $border, $sameLine);
$pdf->Cell(0, $h, "Postal Code: $postalCode", $border, $newLine);

//Row 3
$pdf->Cell($_50, $h, "Home Phone: $homePhone", $border, $sameLine);
$pdf->Cell(0, $h, "Business Phone: $businessPhone", $border, $newLine);

//Row 4
$pdf->Cell($_50, $h, "Occupation: $occupation", $border, $sameLine);
$pdf->Cell(0, $h, "Employer: $employer" , $border, $newLine);

//Row 5
$pdf->Cell($_100, $h, "Referred by: $referredBy", $border, $newLine);

//Row 6
$pdf->Cell($_33, $h, "Spouse's Name: $spouseName", $border, $sameLine);
$pdf->Cell($_33, $h, "Occupation: $spouseOccupation", $border, $sameLine);
$pdf->Cell($_33, $h, "Phone #: $spousePhone", $border, $newLine);

//Row 7
$pdf->Cell($_33, $h, "Contact Person: $emergContactName", $border, $sameLine);
$pdf->Cell($_33, $h, "Relationship: $emergContactRelationship", $border, $sameLine);
$pdf->Cell($_33, $h, "Phone #: $emergContactPhone", $border, $newLine);

//row 8
$pdf->Cell($_33, $h, "Physician Name: $physicianName", $border, $sameLine);
$pdf->Cell($_33, $h, "Address: $physicianAddress", $border, $sameLine);
$pdf->Cell($_33, $h, "Phone #: $physicianPhone", $border, $newLine);

//Row 9
$pdf->SetFont("Arial", "B", "10");
$pdf->Cell($_100, $h, "MEDICAL HISTORY", $border, $newLine);

$pdf->SetFont("Arial", "", "10");

//Row 10
$pdf->Cell($_75, $h, "1.\tHave you recently been under the care of a physician?", $border, $sameLine);
$pdf->Cell(0, $h, addYesNoAnswer($recentPhysicianCare), $border, $newLine);

//Row 11
$pdf->Cell($_25, $h, "Please Specify: ", $border, $sameLine);
$pdf->Cell(0, $h, $recentPhysicianCareReason, $border, $newLine);

//Row 12
$pdf->Cell($_75, $h, "2.\tHave you ever had a serious illness/ operation?", $border,$sameLine);
$pdf->Cell(0, $h, addYesNoAnswer($seriousIllnessOperation), $border, $newLine);

//Row 13
$pdf->Cell($_25, $h, "Please Specify: ", $border, $sameLine);
$pdf->Cell(0, $h, $seriousIllnessOperationReason, $border, $newLine);

//Row 14
$pdf->Cell($_75, $h, "3.\tAre you presently taking any kind of medication, either prescribed or self-administered?", $border, $sameLine);
$pdf->Cell(0, $h, addYesNoAnswer($currentMedication), $border, $newLine);

//Row 15
$pdf->Cell($_25, $h, "Please Specify: ", $border, $sameLine);
$pdf->Cell(0, $h, $currentMedicationReason, $border, $newLine);

//Row 16 - drug 2
$pdf->Cell($_25, $h, "Please Specify: ", $border, $sameLine);
$pdf->Cell(0, $h, "", $border, $newLine);

//Row 17
$pdf->Cell($_75, $h, "4.\tDo you have a heart or circulatory problem of any kind?", $border, $sameLine);
$pdf->Cell(0, $h, addYesNoAnswer($heartCirculation), $border, $newLine);

//Row 18
$pdf->Cell($_25, $h, "Please Specify: ", $border, $sameLine);
$pdf->Cell(0, $h, $heartCirculationReason, $border, $newLine);

//Row 19
$pdf->Cell($_75, $h, "5.\tDo you have any allergies?", $border, $sameLine);
$pdf->Cell(0, $h, addYesNoAnswer($allergies), $border, $newLine);

//Row 20
$pdf->Cell($_25, $h, "Please Specify: ", $border, $sameLine);
$pdf->Cell(0, $h, $allergiesReason, $border, $newLine);

//Row 21
$pdf->Cell($_75, $h, "6.\tAre you subject to prolonged bleeding?", $border, $sameLine);
$pdf->Cell(0, $h, addYesNoAnswer($prolongedBleeding), $border, $newLine);

//Row 22
$pdf->Cell($_75, $h, "7.\tHave you ever has a reaction to any kind of medicine?", $border, $sameLine);
$pdf->Cell(0, $h, addYesNoAnswer($medicineReaction), $border, $newLine);

//Row 23
$pdf->Cell($_25, $h, "Please Specify: ", $border, $sameLine);
$pdf->Cell(0, $h, $medicineReactionReason, $border, $newLine);

//Row 24
$pdf->Cell($_75, $h, "8.\tHave you ever taken penicillin?", $border, $sameLine);
$pdf->Cell(0, $h, addYesNoAnswer($takenPenicillin), $border, $newLine);

//Row 25
$pdf->Cell($_75, $h, "9.\tHave you ever been on steroids or cortisone?", $border, $sameLine);
$pdf->Cell(0, $h, addYesNoAnswer($steroidsOrCortisone), $border, $newLine);

//Row 26
$pdf->Cell($_100, $h, "10.\tDo you presently have or have you ever had?", $border, $newLine);

//Reduce font size for Q10
$pdf->SetFont("Arial", "", "8");
//Add the yes No above Q10
$pdf->Cell($_6th1, $h2-1, "", $border,$sameLine);
$pdf->Cell($_6th2/2, $h2-1, "Yes", $border, $sameLine);
$pdf->Cell($_6th2/2, $h2-1, "No", $border, $sameLine);
$pdf->Cell($_6th1, $h2-1, "", $border,$sameLine);
$pdf->Cell($_6th2/2, $h2-1, "Yes", $border, $sameLine);
$pdf->Cell($_6th2/2, $h2-1, "No", $border, $sameLine);
$pdf->Cell($_6th1, $h2-1, "", $border,$sameLine);
$pdf->Cell($_6th2/2, $h2-1, "Yes", $border, $sameLine);
$pdf->Cell($_6th2/2, $h2-1, "No", $border, $newLine);

//QUESTION 10 ANSWERS
//Q10 - 1
$pdf->Cell($_6th1, $h2, "AIDS/HIV", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($aidsOrHiv), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "Hay Fever", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($hayFever), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "Migraine Headaches", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($migraine), $border, $newLine);
//Q10 - 2
$pdf->Cell($_6th1, $h2, "Anaemia", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($anaemia), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "Heart Problems of any kind", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($heartProblems), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "Nervous Disorder", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($nervousDisorder), $border, $newLine);
//Q10 - 3
$pdf->Cell($_6th1, $h2, "Arthritis", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($arthritis), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "Hemorrage", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($hemorrage), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "Rheumatic Fever", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($rheumaticFever), $border, $newLine);
//Q10 - 4
$pdf->Cell($_6th1, $h2, "Asthma", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($asthma), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "Hepatitis", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($hepatitis), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "Rheumatism", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($rheumatism), $border, $newLine);
//Q10 - 5
$pdf->Cell($_6th1, $h2, "Blood Disorder", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($bloodDisorder), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "High or Low Blood Pressure", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($bloodPressure), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "Scarlet Fever", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($scarletFever), $border, $newLine);
//Q10 - 6
$pdf->Cell($_6th1, $h2, "Cancer", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($cancer), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "HIV Carrier", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($hivCarrier), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "Stomach Ulcer", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($stomachUlser), $border, $newLine);
//Q10 - 7
$pdf->Cell($_6th1, $h2, "Chest Pain/Angina", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($chestPain), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "Kidney Disease", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($kidneyDisease), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "Stroke", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($stroke), $border, $newLine);
//Q10 - 8
$pdf->Cell($_6th1, $h2, "Contacts/ Cataracts", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($cataracts), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "Liver Disease", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($liverDisease), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "Thyroid Disorder", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($thyroidDisorder), $border, $newLine);
//Q10 - 9
$pdf->Cell($_6th1, $h2, "Diabetes", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($diabetes), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "Lung Disease", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($lungDisease), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "Tuberculosis", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($tuberculosis), $border, $newLine);
//Q10 - 10
$pdf->Cell($_6th1, $h2, "Epilepsy", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($epilespy), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "Malignant Hyperthermia", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($malignantHyperthermia), $border, $sameLine);
$pdf->Cell($_6th1, $h2, "Fainting/ Dizziness", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($faintingOrDizzy), $border, $newLine);
//Q10 - 11
$pdf->Cell($_6th1, $h2, "Other", $border, $sameLine);
$pdf->Cell($_6th2, $h2, addQ10YesNo($other), $border, $newLine);


//END QUESTION 10 ANSWERS

//Move font size back to normal.
$pdf->SetFont("Arial", "", "9");
//Last 7 rows
$pdf->Cell($_75, $h+0.6, "15.\tHave you ever fainted? ", $border, $sameLine);
$pdf->Cell(0, $h+0.6, addYesNoAnswer($fainting), $border, $newLine);

$pdf->Cell($_7, $h,"16.\tWomen:", $border, $sameLine);
$pdf->Cell($_middle, $h,"Are you taking oral contraceptives?", $border, $sameLine);
$pdf->Cell($_25, $h, addYesNoAnswer($oralContraceptives), $border, $newLine);

$pdf->Cell($_7, $h, "", $border, $sameLine);
$pdf->Cell($_middle, $h, "Are you pregnant?", $border, $sameLine);
$pdf->Cell(0, $h, addYesNoAnswer($pregnant), $border, $newLine);

$pdf->Cell($_7, $h, "", $border, $sameLine);
$pdf->Cell($_middle, $h, "If yes, due date?",$border, $sameLine);
$pdf->Cell(0, $h, $due_date, $border, $newLine);

$pdf->Cell(0, $h2, "", $border, $newLine);
for($i =0; $i<2; $i++)
{
    $pdf->Cell($_60, $h+1, "Patient's (or Parent) Signature: ", $border, $sameLine);
    $pdf->Cell(0, $h+1, "Date: ", $border ,$newLine);
}

//$pdf->Cell($half_width, 10, "First", 1,0);
//$pdf->Cell($half_width, 10, "second", 1,0);
//output to window
try{
    $location = "./pdf/";
    $fileName = $firstName."_".$lastName."_".date('m_d_Y').".pdf";


    $pdf->Output("F", $location.$fileName);
}
catch(Exception $e)
{
    //echo "<br/><br/>ERROR WITH PDF: <br/>" . $e->getMessage();
    $errorMessage = "Unable to create your PDF file, please try again soon.";
}


//Output to DIR
//$pdf->Output("F","./pdf/test.pdf");
?>