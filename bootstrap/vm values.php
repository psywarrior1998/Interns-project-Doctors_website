<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Intern Project</title>
  <link rel="shortcut icon" href="image/shortcut icon.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
        $(document).ready(function(){
            $("#search").click(function(){
                $("#search-toggle").fadeToggle();
            });
            $("#keydocs").click(function(){
                var offset=$("#keydocssec").offset().top;
                $("html,body").animate({scrollTop:offset},1500);
            });
            $("#spec").click(function(){
                var offset=$("#specsec").offset().top;
                $("html,body").animate({scrollTop:offset},1500);
            });
            $(".nav-toggle").click(function(){
                $(".tul").toggleClass('active')
            });
        });
  </script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include("header1.php"); ?>

<div class="container-fluid">
    <div class="col-md-6 col-xs-12">
      <div class="lead" style="border-bottom: 1px solid red;">About Us</div><hr>
      <p style="text-align: justify;">

            Fortis Healthcare Limited is a leading integrated healthcare delivery service provider in India. The healthcare verticals of the company primarily comprise hospitals, diagnostics and day care specialty facilities. Currently, the company operates its healthcare delivery services in India, Dubai, Mauritius and Sri Lanka with 45 healthcare facilities (including projects under development), approximately 10,000 potential beds and 314 diagnostic centres.

            In a global study of the 30 most technologically advanced hospitals in the world, its flagship, the Fortis Memorial Research Institute’ (FMRI), was ranked No.2, by ‘topmastersinhealthcare.com, and placed ahead of many other outstanding medical institutions in the world.            
      </p>
    </div>
    <div class="col-md-6 col-xs-12">
        <img src="image/about-us-2.jpg" style="max-width: 100%; height: auto;"/>
    </div>
    <div>
            <!--Vision-->
            <div style="border: 1px solid #E6E6E6;">
                <div class="lead" style="color: #ED1C24;">Vision</div>
                "Saving & Enriching Lives"<hr>
            </div>
            <!--Mission-->
            <div style="border: 1px solid #E6E6E6;">
                <div class="lead" style="color: #ED1C24;">Mission</div>
                "To be a globally respected healthcare organisation known for Clinical Excellence and Distinctive Patient Care"<hr>
            </div>
            <!--Values-->
            <div style="border: 1px solid #E6E6E6;">
                <div class="lead" style="color: #ED1C24;">Values</div>
                <div class="lead">Patient Centricity</div>
                <blockquote>
                    Commit to 'best outcomes and experience' for our patients.<br>
                    Treat patients and their caregivers with compassion, care and understanding.<br>
                    Our patients' needs will come first
                </blockquote>
                <div class="lead">Integrity</div>
                <blockquote>
                    Be principled, open and honest..<br>
                    Model and live our 'Values'.<br>
                    Demonstrate moral courage to speak up and do the right things.
                </blockquote>
                <div class="lead">Team Work</div>
                <blockquote>
                    Proactively support each other and operate as one team.<br>
                    Respect and value people at all levels with different opinions, experiences and backgrounds.<br>
                    Put organization needs' before department / self interest.
                </blockquote>
                <div class="lead">Ownership</div>
                <blockquote>
                    Be responsible and take pride in our actions.<br>
                    Take initiative and go beyond the call of duty.<br>
                    Deliver commitment and agreement made.
                </blockquote>
                <div class="lead">Innovation</div>
                <blockquote>
                    Continuously improve and innovate to exceed expectations.
                    Adopt a 'can-do' attitude.
                    Challenge ourselves to do things differently.
                </blockquote>
                <hr>
            </div>
    </div>

</div>

<?php include("footer.php"); ?>
</body>
</html>