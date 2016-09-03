<?php 
$home_page = true; 
$title = "Loon Lake Tech";

include "./include/class.header.php";

$header = new Header();

$header->homePage = true; 
$header->title = "Loon Lake Tech";
$header->homePageLink = "#";
$header->pageDescription = "Dr Chorkawy Endo.  Lets see if google will ever use this information. ";

    include "./include/header.php"; 
?> 

	<div id="section1">
		<header id="header-area" class="intro-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center office-name">
						<div class="header-content">
                        <h1>Dr d Chorkawy</h1>
							<!--<h4>Local Endodontics Since 1985</h4>-->
                            <h4>ENDODONTIST</h4>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>
	
        <!--About Us-->
        <?php 
        include "./about.php";    
        ?>

        <!--Services-->
        <?php 
        include "./services.php";    
        ?>
		
        <?php
        include "./find-us.php";    
        ?>
	
		<div id="section4">
			<!-- Start Contact Area -->
			<section id="contact-area" class="contact-section">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center inner">
							<div class="contact-content">
								<h1>contact form</h1>
                                <h4>(this wont actually send an email yet)</h4>
								<div class="row">                            
									<div class="col-sm-12">
										<p>Get in contact with us.</p>
										</div>                            
									</div>

								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<form action="#" method="post" class="contact-form">
									<div class="col-sm-6 contact-form-left">
										<div class="form-group">
											<input name="name" type="text" class="form-control" id="name" placeholder="Name">
											<input type="email" name="email" class="form-control" id="mail" placeholder="Email">
											<input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
										</div>
									</div>
									<div class="col-sm-6 contact-form-right">
										<div class="form-group">
											<textarea name="message" rows="6" class="form-control" id="comment" placeholder="Your message here..."></textarea>
											<button type="submit" class="btn btn-default">Send</button>
										</div>
									</div>                        
								</form>    
							</div>                
						</div>
					</div>
				</section>
				<!-- End Contact Area -->
			</div>
<?php include "./include/footer.php"; ?>