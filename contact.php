<?php include('src/functions.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>RW Lifecare : Contact</title>
    <?php include('src/head.php') ?>
</head>

<body>

    <?php include('src/preload.php') ?>
    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include('src/header.php') ?>
    <!--=========== END HEADER SECTION ================-->

    <?php echo youAreHere("Contact") ?>
    <!--=========== BEGIN Google Map SECTION ================-->
    <section id="googleMap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125080.67457750186!2d76.11909411640625!3d11.568261799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba60f94176da065%3A0xe8961399fd4321c3!2sMukalel%20diagnostic%20centre%20and%20Polyclinic!5e0!3m2!1sen!2sin!4v1677564998228!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="500" frameborder="0" style="border:0"></iframe>
    </section>
    <!--=========== END Google Map SECTION ================-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <div class="contact-form">
                        <div class="section-heading">
                            <h2>Contact Us</h2>
                            <div class="line"></div>
                        </div>
                        <p>Fill out all required Field to send a Message. Please don't spam,Thank you!</p>
                        <form class="submitphoto_form" method="post" action="sendmail.php">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Your name" name="nam">
                            <input type="email" class="wp-form-control wpcf7-email" placeholder="Email address" name="from">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Subject" name="sub">
                            <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="What would you like to tell us" name="mess"></textarea>
                            <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-envelope"></i><span>Send Message</span></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="contact-address">
                        <div class="section-heading">
                            <h2>Contact Information</h2>
                            <div class="line"></div>
                        </div>
                        <p>Feel free to contact us any moment using any of the details provided below.</p>
                        <address class="contact-info">
                            <p><span class="fa fa-home"></span>Bharathiar University
                                Coimbatore, TN 641046, <i>India</i></p>
                            <p><span class="fa fa-phone"></span>9282459658</p>
                            <p><span class="fa fa-envelope"></span>rwco@gmail.com</p>
                        </address>
                        <h3>Social Media</h3>
                        <div class="social-share">
                            <ul>
                                <li><a href="https://www.facebook.com/imidiotic12"><span class="fa fa-facebook"></span></a>
                                </li>
                                <li><a href="https://twitter.com/piyushbhutoria9"><span class="fa fa-twitter"></span></a>
                                </li>
                                <li><a href="https://github.com/Piyushhbhutoria"><span class="fa fa-github"></span></a></li>
                                <li><a href="https://www.linkedin.com/in/piyushh-bhutoria-for-you/"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=========== Start Footer SECTION ================-->
    <?php include('src/footer.php') ?>
    <!--=========== End Footer SECTION ================-->

    <?php include('src/incfooter.php') ?>
     <!-- ALAN AI -->
     <div class="alan-btn"></div>
    <script type="text/javascript"
 src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
<script>
  var alanBtnInstance = alanBtn({
    key: "f1505f74def0b33a2f27486844a213bb2e956eca572e1d8b807a3e2338fdd0dc/stage",
    onCommand: function (commandData) {
      if (commandData.command === "go:back") {
        //call client code that will react on the received command
      }
    },
    rootEl: document.getElementById("alan-btn"),
  });
</script>
 <!-- ALAN AI -->
</body>

</html>
