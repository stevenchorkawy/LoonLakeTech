<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //All of the variables are set at this point by medical-form.php.
    //Use these variables with the pdf.php file to create a completed form.

    //pdf.php will output the patient's completed form into the pdf directory.
    include "./pdf.php";

    //Include the special php mail class
    require_once("./PHPMailer/class.phpmailer.php");


    try{
        //Check in the pdf dir if ther is a file existing with the current patients name.

        $newFile = $location.$fileName;
        $date = date("F j, Y, g:i:s a");
        if(!file_exists($newFile))
        {
            throw new Exception("Sorry we are currently unable to submit your form.");
        }


        //Once the file has been found attach it to the email.
        $email = new PHPMailer();

        $email->From = "steven@stevenchorkawy.com";
        $email->FromName = "Online Form";
        $email->Subject = "$firstName $lastName $date";
        $email->Body = "Please Find a PDF file attached for: " . $firstName . " " . $lastName . " Send on " . $date;
        $email->addAddress("stevenchorkawy@gmail.com");

        //maybe add loonlake tech  to the location

        $fileLocation = $_SERVER['DOCUMENT_ROOT']."/LoonLakeTech/pdf/";
        if(!file_exists($fileLocation.$fileName))
        {
            throw new Exception("Unable to find your PDF file.  Sorry, please try again later.");
        }
        $email->addAttachment($fileLocation.$fileName);

        //echo "<br><br/><Br/><br/><br/>";
        //echo "Location: $location";
        //echo "<br/>Name: $fileName";
        //echo "<br/>SERVER ROOT: ". $_SERVER['DOCUMENT_ROOT'];
        //echo "<br/>Additional Email: " . $emailAddress;


        try{
            if($email->send())
            {
                $errorMessage = "Email has been sent!";

                header("Location: ./email-sent.php");
            }
            else{
                throw new Exception("Unable to send your email to the office");
            }
        }
        catch(Exception $e)
        {
            throw $e->getMessage() . "<br/>Something has goen wrong";
        }
         

        /*
         * 
         * Send the email to the patient if they want a copy.
         * 
         * */
        if(isset($emailAddress) && $emailAddress != "")
        {
            $email = new PHPMailer();

            $email->From = "steven@stevenchorkawy.com";
            $email->FromName = "Requested Copy". $date;
            $email->Subject = "Subject";
            $email->Body = "Please Find a PDF file attached";
            $email->addAddress($emailAddress);

            //maybe add loonlake tech  to the location

            $fileLocation = $_SERVER['DOCUMENT_ROOT']."/LoonLakeTech/pdf/";
            if(!file_exists($fileLocation.$fileName))
            {
                throw new Exception("Unable to find your PDF file, sorry.");
            }
            $email->addAttachment($fileLocation.$fileName);

            //echo "<br><br/><Br/><br/><br/>";
            //echo "Location: $location";
            //echo "<br/>Name: $fileName";
            //echo "<br/>SERVER ROOT: ". $_SERVER['DOCUMENT_ROOT'];
            //echo "<br/>Additional Email: " . $emailAddress;




            try{
                if($email->send())
                {
                    //echo "<br/>EMAIL SENT<br/>";
                }
                else{
                    echo "<br/>Unable to send email to client";

                }
            }
            catch(Exception $e)
            {
                echo "<br/>EMAIL EXCEPTION: <br/>";
                echo $e->getMessage();
            }
        }
        //Once a TRUE has been returned from the mail function delete the client's pdf file from the servers pdf dir.


    }
    catch(Exception $e)
    {
        $errorMessage .= "<br/><br/><br/>EXCEPTION: <Br/>";
        $errorMessage .= $e->getMessage();
    }

    //echo "<br/><br/>";

    //Send the email.
    $to = 'stevenchorkawy@gmail.com, Steven.Chorkawy@shaw.ca';

    $subject = "Testing For Dad" . $date;
    $headers = 'From: steven@stevenchorkawy.com' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $message = "other email should be sent.";

        //if(mail($to, $subject, $message, $headers))
        //{
        //    echo "Email Send";
        //}
        //else {
        //    echo "Something went wrong.";
        //}




    //echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
}
?>