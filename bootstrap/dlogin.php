<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Intern Project</title>
  <link rel="shortcut icon" href="image/shortcut icon.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
    
        <div class="container-fluid text-center lead" style="font-size: 36px; color: white; background: #00A950; height: auto; box-sizing: border-box; padding: 30px 0;">
            Welcome to <b>Hospital of ...</b>
        </div>
        <div class="jumbotron p-5" style="background: url('image/dlogin.jpg') no-repeat; background-size: cover; height: 600px;">
            <div class="text-center" style="background: rgba(251, 247, 243, 0.8); box-sizing: border-box; padding: 10px 30px;">
                <h1 class="display-4">Login</h1>
                <img class="img-fluid" src="image/Dummy-image.jpg" width="10%" height="10%" />
                <p class="lead">
                    <form role="form">
                        <div class="form-group">
                            <label for="email">User Name:</label>
                            <input type="text" class="form-control text-center" id="email" placeholder="Enter Username" style="opacity: 0.7;">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control text-center" id="pwd" placeholder="Enter Password" style="opacity: 0.7;">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                        </div>
                        
                    </form>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Enter &nbsp; <i class="fa fa-sign-in" aria-hidden="true"></i></a>
                </p>
            </div>
            
        </div>    

        

</body>
</html>