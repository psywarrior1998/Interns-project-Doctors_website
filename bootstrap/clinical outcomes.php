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
  <link rel="stylesheet" href="style.css">
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
</head>
<body>
<?php include("header.php"); ?>

<div class="container-fluid">
    
    <div class="col-md-12 col-xs-12">
        <img src="image/clin-banner.jpg" style="max-width: 100%; height: auto;"/>
    </div>
    
    <div class="col-md-12 col-xs-12">
      <div class="lead" style="border-bottom: 1px solid red;">Clinical Outcomes at Fortis Healthcare</div>
      <p style="text-align: justify;">
            <div class="lead">
                Clinical Outcomes are the globally agreed upon, evidence based measurable changes in health or quality of life resulting from patient care. Reporting of outcomes and their continuous monitoring provides an opportunity for both assessing and improving quality of patient health and care.
            </div><hr>
            Fortis Healthcare Limited, one of the largest integrated, healthcare service provider in the country is the first hospital chain to implement and monitor clinical outcomes in India. This initiative further strengthens our commitment to PATIENT CENTRICITY by striving towards continuous clinical excellence through improvement and enhancement of our clinical care services. Further, introduction of Patient Reported Outcomes Measurement [PROM] lends the voice of patient to the entire process and helps enhance patient engagement and experience. Constant evaluation of our clinical outcomes against best available global standards motivates our medical work force to continuously improve all aspects of our practice.

            Fortis clinical outcomes are based on measurement of disease course and progression, quality of clinical care being provided, success of the procedures/interventions carried out, and actual benefit perceived by the patient.

            Details of individual procedure outcomes as measured using internationally accepted parameters and criteria, and further validated by our clinical experts, are published here and showcase our commitment to transparency in healthcare. Fortis is the FIRST to embark on the journey of publishing clinical outcomes data in the public realm.
      
      </p>
    </div>
    
</div>

<?php include("footer.php"); ?>
</body>
</html>