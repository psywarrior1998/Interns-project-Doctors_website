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
      <div class="lead" style="border-bottom: 1px solid red;">Guidelines for Visitors</div>
      <p style="text-align: justify;">
        
                We value your family and friends and recognise that they are an important part of your recovery process.

            • For the comfort of all our patients, we request you to limit your visitors during visiting hours

            • Please note that visitors may be restricted according to a patient’s medical condition and/or special needs.

            • At the time of admission, you will be issued passes for attendants and visitors. Please request your attendant and visitors to wear/display these passes while in the hospital premises. In case of loss of the pass, you may get in touch with the Concierge Desk located in the hospital main entrance. 

            • Visits by children under the age of 12 are not allowed on patient floors. This is to protect children from catching any infection.

            • Sanitise hands before and after visiting.

            • Use of mobile phones is prohibited where critical medical equipment and patient monitoring systems are in operation. Please read and follow all posted signs about the usage of cell phones, only in approved areas. If you must use your cell phone in approved areas, please speak in a soft tone so that other patients are not disturbed.          

      </p>
    </div>
    <div class="col-md-6 col-xs-12">
        <img src="image/Guidelines-for-Visitors.jpg" style="max-width: 100%; height: auto;"/>
    </div>
</div>

<?php include("footer.php"); ?>
</body>
</html>