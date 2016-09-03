<?php
session_start();
//if(!$_SESSION['sentToPage'])
//{
//    header("Location: ./index.php");
//}


include "./include/class.header.php";

$header->homePage = false;
$header->homePageLink = "index.php";
$header->title = "Email Sent";
$header->pageDescription = "Your email has successfully been sent!";

include "./include/header.php";

?>

<div class="about-section container dark-form">
    <div class="text-center">
        <h1 class="h1-res-font text-center">
            YOUR EMAIL HAS BEEN SENT
        </h1>

        <h2>
            <a href="index.php">HOME PAGE</a>
        </h2>
    </div>
</div>

<?php
include"./include/footer.php";    
?>