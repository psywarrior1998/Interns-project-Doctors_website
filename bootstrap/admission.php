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
  <link rel="stylesheet"  href="style.css">
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
      <div class="lead" style="border-bottom: 1px solid red;">Admission Process</div>
      <p style="text-align: justify;">The front office staff at the reception will assist you during the admission process. They will generate a Unique Identification Number (UID) for the patient and all the medical records will be maintained and stored by the hospital for all future reference. They will also draw out an estimate and guide you for selecting the relevant category of room.

    In addition, you will be required to make an advance payment. The advance shall be adjusted against the final bill at the time of discharge. Those seeking the cashless route would have to visit the insurance desk / TPA desk for the hospitalisation of the patient. The staff will escort the patient to the allotted room/bed and make you feel comfortable.
      </p>
    </div>
    <div class="col-md-6 col-xs-12">
        <img src="image/Admission-Process.jpg" style="max-width: 100%; height: auto;"/>
    </div>
</div>

<?php include("footer.php"); ?>
</body>
</html>