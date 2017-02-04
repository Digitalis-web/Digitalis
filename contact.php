<!doctype html>
<html lang="en">
<head>
    <meta name="description" content="Digitalis">
    <title>Digitalis Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Digital Internet Solutions">

    <!--css-->
    <link href="css/main.css" rel="stylesheet">
    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900i" rel="stylesheet">

    <!--======================================= JAVA SCRIPT ===========================-->
    <!--JQuery-->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <!--Velocity -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.js" type="text/javascript"></script>
    <script src="js/jquery.color.js"></script>
    <!-- JavaScript -->
    <script src="js/scripts.js"></script>
    <!-- Smooth scoll-->
    <script src="js/smooth-scroll.min.js"></script>
    <!--paralex js-->
    <script src="js/paralex.js"></script>
    <!--Fade in-->
    <script src="js/fade.in.js"></script>
    <!--slide in-->
    <script src="js/slide.in.js"></script>

    <!-- Latest compiled and minified JavaScript for bootstrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>

    <!--icon-->
    <link rel="shortcut icon" href="/img/logo/icontop.png" type="image/x-icon" />
</head>
<body>
<?php
//include nav
include "include_pages/nav.php";
?>
<script>
    var ypos,image;
    function parallex() {
        ypos = window.pageYOffset;
        image = document.getElementById('image');
        image.style.top = ypos * .7 + 'px';
    }
    window.addEventListener("scroll",parallex);
</script>

<!--Top img with paralex scrolling-->
<section id="image" class="container-fluid contact_top_img"></section>

<!--contact content-->
<section class="container-fluid contact_cont">
    <div class="row-fluid contact_cont">
        <div class="col-xs-12 contact_cont">
            <div class="contact_cont_container">
                <!--Contact details-->
                <div class="contact_cont_text_top col-xs-12 col-md-2 col-md-offset-2">
                    <div class="contact_cont_text_container">
                        <h1>Contacts</h1>
                        <p>+46 7221 594949</p>
                        <p>info@digitalis.se</p>
                    </div>
                </div>
                <!--contact form-->
                <div class="contact_cont_fom">
                    <form class="col-md-6 col-xs-12" action="include_pages/contact_form.php" method="post">
                        <div class="col-xs-12">
                            <p>Your Name</p>
                            <input id="name" type="text" name="name" title="name">
                        </div>
                        <div class="col-xs-12">
                            <p>Your E-mail</p>
                            <input id="email" type="text" name="email" title="email">
                        </div>
                        <div class="col-xs-12">
                            <p>Subject</p>
                            <input id="subject" type="text" name="subject" title="subject">
                        </div>
                        <div class="col-xs-12">
                            <p>Your Message</p>
                            <input id="message" type="text" name="message" title="message">
                        </div>
                        <div class="col-xs-12">
                            <input class="submitbtn" type="submit" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
//include footer
include "include_pages/footer.php";
?>
</body>
</html>