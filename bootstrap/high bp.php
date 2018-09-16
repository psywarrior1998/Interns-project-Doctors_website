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
    
        <div class="lead" style="border-bottom: 1px solid #ED1F24;">Hypertension Treatment, Symptoms, Causes and Diagnosis in India</div>
        <p style="text-align: justify;">
            <img src="image/mayo_logo.jpg" style="max-width:100%; height:auto;"/>
            High blood pressure is a common condition in which the force of the blood against your artery walls is high enough that it may eventually cause health problems, such as heart disease.

            Blood pressure is determined by the amount of blood your heart pumps and the amount of resistance to blood flow in your arteries. The more blood your heart pumps and the narrower your arteries, the higher your blood pressure.
        </p>
        <hr>
        <!--pills-->
        <div class="container">
            <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#home">Symptoms</a></li>
                <li><a data-toggle="pill" href="#menu1">Causes</a></li>
                <li><a data-toggle="pill" href="#menu2">Complications</a></li>
            </ul>
            
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <p style="text-align: justify;">
                        Most people with high blood pressure have no signs or symptoms, even if blood pressure readings reach dangerously high levels.

                        Although a few people with early-stage high blood pressure may have dull headaches, dizzy spells or a few more nosebleeds than normal, these signs and symptoms usually don't occur until high blood pressure has reached a severe or life-threatening stage.
                    </p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <p style="text-align: justify;">
                        <div class="lead">Primary (essential) hypertension</div>
                        <hr>
                        For most adults, there's no identifiable cause of high blood pressure. This type of high blood pressure, called essential hypertension or primary hypertension, tends to develop gradually over many years.
                        <div class="lead">Secondary hypertension</div>
                        <hr>
                        Some people have high blood pressure caused by an underlying condition. This type of high blood pressure, called secondary hypertension, tends to appear suddenly and cause higher blood pressure than does primary hypertension. Various conditions and medications can lead to secondary hypertension, including:
                    </p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <p style="text-align: justify;">
                        The excessive pressure on your artery walls caused by high blood pressure can damage your blood vessels, as well as organs in your body. The higher your blood pressure and the longer it goes uncontrolled, the greater the damage.
                    </p>
                </div>
            </div>
           
            
            
        </div>  
        
        <!--accordian-->
        <div class="container">

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Tests and diagnosis 
                        </button>
                    </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <p style="text-align: justify;">
                            To measure your blood pressure, your doctor or a specialist will usually place an inflatable arm cuff around your arm and measure your blood pressure using a pressure-measuring gauge.

                            A blood pressure reading, given in millimeters of mercury (mm Hg), has two numbers. The first, or upper, number measures the pressure in your arteries when your heart beats (systolic pressure). The second, or lower, number measures the pressure in your arteries between beats (diastolic pressure).
                        </p>
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Treatments and drugs 
                        </button>
                    </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <p style="text-align: justify;">
                            Changing your lifestyle can go a long way toward controlling high blood pressure. Your doctor may recommend you eat a healthy diet with less salt, exercise regularly, quit smoking and maintain a healthy weight. But sometimes lifestyle changes aren't enough.
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td scope="col">Less than150/90 mm Hg</th>
                                        <td scope="col">If you're a healthy adult age 60 or older</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>MaLess than140/90 mm Hgrk</td>
                                        <td>If you're a healthy adult younger than age 60</td>
                                    </tr>
                                    <tr>
                                        <td>Less than140/90 mm Hg</td>
                                        <td>If you have chronic kidney disease, diabetes or coronary artery disease or are at high risk of coronary artery disease</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">*Although 120/80 mm Hg or lower is the ideal blood pressure goal, doctors are unsure if you need treatment (medications) to reach that level.</td>
                                    </tr>
                                </tbody>
                            </table>                            
                        </p>
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Lifestyle and home remedies 
                        </button>
                    </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                                <p style="text-align:justify;">
                                    Lifestyle changes can help you control and prevent high blood pressure, even if you're taking blood pressure medication. Here's what you can do:
                                    <blockquote>
                                        Eat healthy foods.<br>
                                        Decrease the salt in your diet.<br>
                                        Maintain a healthy weight.<br>
                                        Increase physical activity.<br>
                                        Limit alcohol.<br>
                                        Don't smoke. <br>
                                        Manage stress.<br>
                                        Practice relaxation or slow, deep breathing. <br>
                                        Monitor your blood pressure at home.
                                    </blockquote>                                        
                                </p>
                    </div>
                    </div>
                </div>
                

            </div>  

        </div>
    </div>

    <?php include("footer.php"); ?>
</body>
</html>