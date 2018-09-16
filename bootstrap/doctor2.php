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

    <div class="container-fluid" style="border-top:3px solid #00A950; border-bottom:10px solid #00A950;">
        <div class="lead" style="border-bottom: 1px solid #ED1F24;">Doctor Profile</div>
        <div class="container">
            <div class="col-md-4"> <img src="image/Dummy-image.jpg" style="max-width: 75%; height: auto;"/></div>
            <div class="col-md-5">
                <p>
                     Dr. Manoj Miglani,<br> MD, MRCP (UK), CCT (UK), FCCP (USA), M Sc<br> (Evidence Based Medicine, UK), Diploma in <br>Palliative Care for Physicians (Teeside<br> University, UK), Certificate in Medical <br>Education  (Newcastle University, UK) 
                    <hr>15+ Years Of Experience<br> Director Fortis Hospital Anandapur, Kolkata <br>Pulmonology / Chest & Sleep Medicine
                </p>
            </div>
        </div>
        <!--accordian-->
        <div class="container">

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        View Profile 
                        </button>
                    </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <p style="text-align: justify;">
                            Dr. Manoj Miglani is a renowned Pulmonologist and a Critical Care Specialist with over 15 years of experience. Dr. Dhar is adept in all disciplines of Respiratory Medicine including airways disease, pulmonary fibrosis, pulmonary hypertension, transplant, lung cancer, sleep medicine, lung infections including TB, and respiratory emergencies. His forte is Interventional Pulmonology including electrocautery, APC, cryotherapy, stent placements and Medical Thoracoscopy. He is an academician, an enthusiastic researcher and passionate about teaching.
                        </p>
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Memberships
                        </button>
                    </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <p style="text-align: justify;">
                            <blockquote>
                                <ul>
                                    <li>European Respiratory Society</li>
                                    <li>American Thoracic Society</li>
                                    <li>American College of Chest Physicians</li>
                                    <li>British Thoracic Society</li>
                                    <li>Indian Chest Society</li>
                                    <li>Indian Association of Bronchology</li>
                                    <li>Indian Academy of Sleep Medicine.</li>
                                </ul>
                            </blockquote>                                    
                        </p>
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Awards and Accolades
                        </button>
                    </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                                <p style="text-align:justify;">
                                    Besides being a member of many medical associations in India and abroad, Dr. Dhar contributes regularly to several national and international journals. He has been on the faculty of many prestigious institutions and has many abstracts and publications to his credit in his related fields.
                                </p>
                    </div>
                    </div>
                </div>
                

            </div>  

        </div>
    </div>


    <?php include("footer.php"); ?>


    
    
    
    
    