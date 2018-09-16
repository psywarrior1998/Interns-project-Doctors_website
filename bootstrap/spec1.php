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
        <div class="lead" style="border-bottom: 1px solid #ED1F24;">Cardiology Treatment Hospitals in India</div>
        <div class="container">
            <div class="col-md-3"> <img src="image/cardi.jpg" style="max-width: 100%; height: auto;"/></div>
            <div class="col-md-4">
                <p>
                    The Cardiology Department provides the best of services in terms of accurate diagnosis and professional treatment. The experienced team of doctors specialises in cardiac by-pass surgery, minimally invasive surgery, interventional cardiology, and non-invasive cardiology. We also provide ambulatory systems for emergencies along with non-invasive image processing, echocardiography, stress tests, cardiovascular CT’s and thallium heart mapping among many others. Our paediatric division also diagnoses and treats cardiac issues in new-borns and foetuses alike.
                </p>
            </div>
            <div class="col-md-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.7271224984834!2d-0.06070628422963338!3d51.51822207963697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ccdbd26d0eb%3A0xd92bbddae9a3d32c!2sThe+Royal+London+Hospital!5e0!3m2!1sen!2sin!4v1536245900527" width="100%" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>                
            </div>
        </div>
        <div class="lead" style="text-align: center;"><i style="color: #FF0000;" class="fa fa-stethoscope" aria-hidden="true"></i> &nbsp; Specialists</div>
        <div class="container">
            <div class="col-md-4"> <img src="image/Dummy-image.jpg" style="max-width: 75%; height: auto;"/></div>
            <div class="col-md-5">
                <p>
                     Dr. Vivek Nangia,<br> MD, MRCP (UK), CCT (UK), FCCP (USA), M Sc<br> (Evidence Based Medicine, UK), Diploma in <br>Palliative Care for Physicians (Teeside<br> University, UK), Certificate in Medical <br>Education  (Newcastle University, UK) 
                    <hr>15+ Years Of Experience<br> Director Fortis Hospital Anandapur, Kolkata <br>Pulmonology / Chest & Sleep Medicine
                </p>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>



