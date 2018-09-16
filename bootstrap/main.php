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
  <script src="js/bootstrap.min.js"></script>
  <link  rel="stylesheet" href="style.css">
</head>
<body oncontextmenu="return false">
    <?php include("header1.php"); ?>
    
    <?php include("carousal1.php"); ?>

    <?php include("clinical specialities.php"); ?>
    <?php echo"<br>"; ?>

    <?php include("key docs.php"); ?>
    <?php echo"<br><br>"; ?>

    <?php include("app promotin.php"); ?>

    <?php include("patients speak.php"); ?>
    <?php echo"<br>"; ?>

    <?php include("news and events.php"); ?>

    <?php include("footer.php"); ?>
</body>
</html>