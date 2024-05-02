<!DOCTYPE html>
<html lang="en">
<head>
    <title>Full Service Digital Agency | Cambridgeshire and Norfolk</title>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" ></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" ></script>
  <script src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js" ></script>
  <script  src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css">
    <link rel="stylesheet" href="js/slick/slick.css">
    <link rel="stylesheet" href="js/slick/slick-theme.css">
    <link rel="stylesheet" href="css/style.css">
   
    <meta name="viewport" content="width=device-width">
</head>
<body>
<?php
include 'message.php';
include 'consent.php';
?>

<!-- <div class = "message"><div class="mdiv"><div class="icon-message"></div></div></div>

<div class = "cookie-dialog">
    <div class = "manage-consent"><button type ="button">Manage Consent</button></div>
    <div class="cookie-dialog-background">
        <div class="dialog-outer">
            <div class="dialog-inner">
                <div class="dialog-content">
                    <div class="dialog-header">
                        <h3>Cookie Policy</h3>
                    </div>
                    <div class="dialog-body">
                        <p>
                            Our website uses cookies. This helps us provide you with a good experience on our website. To see what cookies we use and what they do, and to opt-in on non-essential cookies click "change settings". For a detailed explanation, click on <a href="#">Privacy Policy</a> otherwise click "Accept Cookies" to enter.
                        </p>
                    </div>
                    <div class="dialog-footer">
                        <div class="dialog-row">
                            <div>
                                <a class="btn grey">Change Settings</a>
                            </div>
                            <div>
                                <a class="btn purple">Accept Cookies</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->



<div class="full-filter"></div>
<div class="page-contents">
    <?php 
        include 'header.php';
    ?>

    <div class="middle">
        <div class="hidden-xs breadcrumb-container">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    
                    <li>
                        Our Offices
                    </li>
                </ul>
            </div>
</div>
<div class="office-header">
    <div class="page-head">
        <div class = "container">
            <h1>Our Offices</h1>
</div>
    </div>
</div>
<div class="office-locations">
    <div class="service-list container">
        <div class="row office-location-row">
            <div class="location-item loc-1">
                <div class="block">
                    <div class="image">
                        <a href="#">
                            <img src="images/london.jpg" class=".img-full" alt="London Office">
                        </a>
                    </div>
                    <div class="content">
                        <p class="h2">
               <a href ="#"> London Office</a>
            </p>
                        <p>
                            Unit G6,
                            <br>
                            Pixel Business Centre,
                            <br>
                            110 Brooker Road, Waltham Abbey,
                            <br>
                            London,
                            <br>
                            EN9 1JH

                        </p>
                        <div class="tel">
                            <a href="#" class="h3 text-web">
                                02045 397354
                            </a>
                        </div>
                        <div class="view-more">
                            <a href="#" class="btn">View More</a>
                        </div>
                    </div>
                </div>
                <div class="map" id="london-map"></div>

            </div>
            <div class="location-item loc-2">
                <div class="block">
                    <div class="image">
                        <a href="#">
                            <img src="images/cambridge.jpg" class=".img-full" alt="Cambridge Office">
                        </a>
                    </div>
                    <div class="content">
                        <p class="h2">
               <a href ="#"> Cambridge Office</a>
            </p>
                        <p>
                            Unit 1.31,
                            <br>
                            St John's Innovation Centre,
                            <br>
                            Cowley Road, Milton,
                            <br>
                            Cambridge,
                            <br>
                            CB4 0WS

                        </p>
                        <div class="tel">
                            <a href="#" class="h3 text-web">
                                01223 37 57 72
                            </a>
                        </div>
                        <div class="view-more">
                            <a href="#" class="btn">View More</a>
                        </div>
                    </div>
                </div>
                <div class="map" id="cambridge-map"></div>

            </div>
            <div class="location-item loc-3">
                <div class="block">
                    <div class="image">
                        <a href="#">
                            <img src="images/wymondham.jpg" class=".img-full" alt="Wymondham Office">
                        </a>
                    </div>
                    <div class="content">
                        <p class="h2">
               <a href ="#"> Wymondham Office</a>
            </p>
                        <p>
                            Unit 15,
                            <br>
                            Penfold Drive,
                            <br>
                            Gateway 11 Business Park,
                            <br>
                            Wymondham, Norfolk,
                            <br>
                            NR18 0WZ

                        </p>
                        <div class="tel">
                            <a href="#" class="h3 text-web">
                                01603 70 40 20
                            </a>
                        </div>
                        <div class="view-more">
                            <a href="#" class="btn">View More</a>
                        </div>
                    </div>
                </div>
                <div class="map" id="wymondham-map"></div>

            </div>
            <div class="location-item loc-4">
                <div class="block">
                    <div class="image">
                        <a href="#">
                            <img src="images/yarmouth-2.jpg" class=".img-full" alt="Great Yarmouth Office">
                        </a>
                    </div>
                    <div class="content">
                        <p class="h2">
               <a href ="#"> Great Yarmouth Office</a>
            </p>
                        <p>
                            Suite F23,
                            <br>
                            Beacon Innovation Centre,
                            <br>
                            Beacon Park, Gorleston,
                            <br>
                            Great Yarmouth, Norfolk,
                            <br>
                            NR31 7RA

                        </p>
                        <div class="tel">
                            <a href="#" class="h3 text-web">
                                01493 60 32 04
                            </a>
                        </div>
                        <div class="view-more">
                            <a href="#" class="btn">View More</a>
                        </div>
                    </div>
                </div>
                <div class="map" id="yarmouth-map"></div>

            </div>
</div>
</div>
</div>
<div class="container bottom">
    <div class="row">
        <div class="right-col">
            <div>
                <p><strong>Email us on:</strong><br></p>
                <p><a href="#" class="h3">sales@netmatters.com</a></p>
                <p><strong>Business hours:</strong></p>
                <p><strong>Monday - Friday 07:00 - 18:00&nbsp;</strong></p>
            </div>
            <div>
               <div> <!-- <div class="container"> -->
                    <div class="accordion">
                        <div class="question">
                            <h4>
                                <a href="#">
                                    <p class="question-text">
                                        Out of Hours IT Support
                                        <span class="icon-chevron-down"></span>
                                    </p>
                                </a>
                            </h4>
                            
                            <div class="answer collapsed">
                                <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                                <p>
                                    <strong>Monday - Friday 18:00 - 22:00</strong>
                                    <strong>Saturday 08:00 - 16:00</strong>
                                    <br>
                                    <strong>Sunday 10:00 - 18:00</strong>
                                </p>
                                <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call. </p>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="left-col">

            <form method="post" action="formValidation.php" class="form-enquiry">
            <!-- <form method="post" class="form-enquiry"> -->
                <div class="message-area"></div>
                <div class="row">
                    <div class="input-container">
                        <div class="form-element">
                            <label for="ename" class="required" >Your Name</label>
                            <input class="form-control" type="text" name="ename" id="ename" required>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="form-element">
                            <label for="ecompany" >Company Name</label>
                            <input class="form-control" type="text" name="ecompany" id="ecompany" >
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="form-element">
                            <label for="eemail" class="required">Your Email</label>
                            <input class="form-control" type="text" name="eemail" id="eemail" required>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="form-element">
                            <label for="etel" class="required">Your Telephone Number</label>
                            <input class="form-control" type="text" name = "etel" id="etel" required>
                        </div>
                    </div>
                </div>
                <div class="form-element">
                <label for="emessage" class="required">Message</label>
                            <textarea class="form-control" name="emessage" cols="50" rows="10" id="emessage">Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?</textarea>
                </div>
                <!-- <div class="form-element">
                <div class="form-tick-section">
                    <label class = "checkbox">
                        <span class="checkbox_input"></span>
                    </label>
                </div>
</div> -->
                <div class="form-tick-section">

<label class ="checkbox" for="echeckbox_input">


    <input type="checkbox" class="checkbox_input" name="echeckbox_input" id="echeckbox_input" >
    <span class="checkbox_box"></span>


</label>

<label for="echeckbox_input" class="nl-checkbox-text">
<span class="checkbox-text">
    Please tick this box if you wish to receive marketing information from us.
    Please see our<span> <a href="#" class="privacy">Privacy Policy</a></span>&nbsp; for more information on how we keep your data safe.
    </span>    
</label>

<!-- <span class="checkbox-text">
<label for="echeckbox_input" class="nl-checkbox-text">
    Please tick this box if you wish to receive marketing information from us.
    Please see our</label><span> <a href="#" class="privacy">Privacy Policy</a></span><label for="echeckbox_input" class="nl-checkbox-text">&nbsp; for more information on how we keep your data safe.
    </label>
</span> -->
    
</div>
<div class="form-element recaptcha-terms">
    <span>This site is protected by reCAPTCHA and the Google 
        <a href="#" target="_blank" rel="noopener noreferrer"><u>Privacy Policy</u></a>
        &nbsp;and&nbsp;
        <a href="#" target="_blank" rel="noopener noreferrer"><u>Terms of Service</u></a>
        &nbsp;apply&nbsp;
    </span>
</div>
<div class="action-block">
    <button class="btn">Send Enquiry</button>
    <small>
        <span class="required"></span>
         Fields Required
        </small>
</div>
            </form>
        </div>

    </div>
</div>
<div class="newsletter-full-width">
    <?php 
    include 'newsletter.php';
    include 'footer.php';
    ?>
</div>
</div>

    </div>
    <?php 
        include 'sidebar.php';
    ?>
    <script src="js/jQuery_v3.7.1/jQuery_v3.7.1.js"></script>
    <script src="js/slick/slick.min.js"></script>
<script src="js/sticky/jquery.sticky.js"></script>
<script src="js/maps.js"></script>
<script src="js/contact.js"></script>
<script src="js/header.js"></script>
<script src="js/sidebar.js"></script>
<script src="js/dialog.js"></script>
<script src="js/submitForm.js"></script>
<!-- <script src="js/main.js"></script> -->
</body>
</html>