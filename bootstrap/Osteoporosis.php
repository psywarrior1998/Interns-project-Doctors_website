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
    
        <div class="lead" style="border-bottom: 1px solid #ED1F24;">Osteoporosis</div>
        <p style="text-align: justify;">
            <img src="image/mayo_logo.jpg" style="max-width:100%; height:auto;"/>
            Osteoporosis causes bones to become weak and brittle — so brittle that a fall or even mild stresses like bending over or coughing can cause a fracture. Osteoporosis-related fractures most commonly occur in the hip, wrist or spine.
        </p>
        <hr>
        <!--pills-->
        <div class="container">
            <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#home">Symptoms</a></li>
                <li><a data-toggle="pill" href="#menu1">Causes</a></li>
                <li><a data-toggle="pill" href="#menu2">Preventions</a></li>
            </ul>
            
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <p style="text-align: justify;">
                        There typically are no symptoms in the early stages of bone loss. But once bones have been weakened by osteoporosis, you may have signs and symptoms that include:

                        Back pain, caused by a fractured or collapsed vertebra
                        Loss of height over time
                        A stooped posture
                        A bone fracture that occurs much more easily than expected
                    </p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <p style="text-align: justify;">
                        Your bones are in a constant state of renewal — new bone is made and old bone is broken down. When you're young, your body makes new bone faster than it breaks down old bone and your bone mass increases. Most people reach their peak bone mass by their early 20s. As people age, bone mass is lost faster than it's created.
                    </p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <p style="text-align: justify;">
                        Three factors essential for keeping your bones healthy throughout your life are:
                        <div class="lead">Calcium</div><hr>
                        If you find it difficult to get enough calcium from your diet, consider taking calcium supplements. However, too much calcium has been linked to heart problems and kidney stones. The Institute of Medicine recommends that total calcium intake, from supplements and diet combined, should be no more than 2,000 milligrams daily for people older than 50.
                        <div class="lead">Vitamin D</div><hr>
                        Vitamin D improves your body's ability to absorb calcium. Many people get adequate amounts of vitamin D from sunlight, but this may not be a good source if you live in high latitudes, if you're housebound, or if you regularly use sunscreen or avoid the sun entirely because of the risk of skin cancer.
                        <div class="lead">Exercise</div><hr>
                        Exercise can help you build strong bones and slow bone loss. Exercise will benefit your bones no matter when you start, but you'll gain the most benefits if you start exercising regularly when you're young and continue to exercise throughout your life.
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
                            Symptoms of type 1 diabetes often appear suddenly and are often the reason for checking blood sugar levels. Because symptoms of other types of diabetes and prediabetes come on more gradually or may not be evident, the American Diabetes Association (ADA) has recommended screening guidelines. The ADA recommends that the following people be screened for diabetes:

                            Anyone with a body mass index higher than 25, regardless of age, who has additional risk factors, such as high blood pressure, a sedentary lifestyle, a history of polycystic ovary syndrome, having delivered a baby who weighed more than 9 pounds, a history of diabetes in pregnancy, high cholesterol levels, a history of heart disease, and having a close relative with diabetes.
                            Anyone older than age 45 is advised to receive an initial blood sugar screening, and then, if the results are normal, to be screened every three years thereafter.
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
                                <div class="lead">Treatments for all types of diabetes</div>
                                <hr>
                                Contrary to popular perception, there's no specific diabetes diet. You'll need to center your diet on more fruits, vegetables and whole grains — foods that are high in nutrition and fiber and low in fat and calories — and cut down on animal products, refined carbohydrates and sweets. In fact, it's the best eating plan for the entire family. Sugary foods are OK once in a while, as long as they're counted as part of your meal plan.
                                <br><br><div class="lead">Treatments for type 1 and type 2 diabetes</div>
                                <hr>
                                Depending on your treatment plan, you may check and record your blood sugar as often as several times a week to as many as four to eight times a day. Careful monitoring is the only way to make sure that your blood sugar level remains within your target range. People who receive insulin therapy also may choose to monitor their blood sugar levels with a continuous glucose monitor. Although this technology doesn't yet replace the glucose meter, it can provide important information about trends in blood sugar levels.
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
                                    Make a commitment to managing your diabetes. Learn all you can about diabetes. Establish a relationship with a diabetes educator, and ask your diabetes treatment team for help when you need it.
                                    Choose healthy foods and maintain a healthy weight. Losing just 7 percent of your body weight if you're overweight can make a significant difference in your blood sugar control. A healthy diet is one with plenty of fruits, vegetables, whole grains and legumes, with a limited amount of saturated fat.
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