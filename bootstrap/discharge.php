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
<?php include("header1.php"); ?>

<div class="container-fluid">
    <div class="col-md-6 col-xs-12">
      <div class="lead" style="border-bottom: 1px solid red;">Discharge process</div>
      <p style="text-align: justify;">
        
          Your nurse will assist you in the discharge process which may take few hours to complete the process. Once your final bill is generated, you are expected to clear your dues by paying cash or by a credit/debit card. The nurse will hand over your discharge summary and belongings (like thermometer, urinal bedpan, etc. - used during the course of your stay). She will also explain the medications you need to continue after your discharge and any other follow-up instructions. In case you need a medical ambulance to drop you at your home, then please inform your nurse and she will make the necessary arrangement.

      </p>
    </div>
    <div class="col-md-6 col-xs-12">
        <img src="image/Discharge-process.jpg" style="max-width: 100%; height: auto;"/>
    </div>
</div>

<?php include("footer.php"); ?>
</body>
</html>