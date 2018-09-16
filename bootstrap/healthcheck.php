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
            <img src="image/health-checkup-banner.jpg" class="img-fluid" style="max-width: 100%; height: auto;"/>
            <div class="container" style="background: bisque;">
                <div class="row text-center" style="font-size: 30px; font-weight: bold; color: #01793A;"><i class="fa fa-medkit" aria-hidden="true"></i>&nbsp; Health Check-ups</div>
            
                <p class="text-jusify text-center" style="font-size: 16px;">
                    Suburban Diagnostics offers an array of Preventive Health Check-Up Packages that comprise of everything from the most basic<br> pathology tests that provide a bird’s eye view of the patients’ current health to the more comprehensive health check packages that<br> offer a much more detailed look into patients’ or healthy individuals’ medical parameters.<br><br>

                    In our most comprehensive packages, we’ve combined a full range of pathology tests with a full range of preventive cardiology and radiology tests.<br><br>

                    To get a broad perspective of the patients’ overall health status, Suburban Diagnostics offers you three test packages:<br><br>
                
            
                </p>
                <table class="table table-striped" style="border: 1px solid gray">
                    <thead>
                        <tr>
                        <th scope="col" class="text-center" style="width: 250px;">Packages</th>
                        <th scope="col" class="text-center">Tests</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td data-label="Packages">Jiyo Healthy Jiyo Well’thy Basic Package</td>
                        <td data-label="Test">CBC •&nbsp;ESR •&nbsp;Fasting Blood Sugar •&nbsp;Lipid-P • SGOT/AST •&nbsp;SGPT/ALT •&nbsp;Urea/BUN •&nbsp;Creatinine •&nbsp;Uric Acid</td>
                        </tr>
                        <tr>
                        <td data-label="Packages">Jiyo Healthy Jiyo Well’thy EXPRESS PACKAGE</td>
                        <td data-label="Test">CBC •&nbsp;ESR •&nbsp;Fasting Blood Sugar •&nbsp;Glyco Hb (HbA1c) •&nbsp;Lipid-P •&nbsp;SGOT/AST •&nbsp;SGPT/ALT •&nbsp;Urea/BUN • Creatinine •&nbsp;Uric Acid •&nbsp;Calcium •&nbsp;Thyroid Function Tests • Vitamin B12 •&nbsp;Vitamin D Total (25-OH Vitamin D) • Urine-R</td>
                        </tr>
                        <tr>
                        <td data-label="Packages">Jiyo Healthy Jiyo Well’thy Essential Package</td>
                        <td data-label="Test">CBC •&nbsp;ESR&nbsp;•&nbsp;Fasting Blood Sugar •&nbsp;PPBS • Glyco Hb (HbA1c)&nbsp;• Lipid-P • Liver Function Tests&nbsp;•&nbsp;Kidney Function Tests&nbsp;•&nbsp;Thyroid Function Tests •&nbsp;Vitamin B12&nbsp;• &nbsp;Vitamin D Total (25-OH Vitamin D) •&nbsp;Iron •&nbsp;Urine-R</td>
                        </tr>
                        <tr>
                        <td data-label="Packages">Jiyo Healthy Jiyo Well’thy Total Body Package</td>
                        <td data-label="Test">(Includes Radiology &amp; Cardiology Tests)CBC • ESR • FBS • PPBS •  GLYCO Hb (HbAlc)  • LIPID PROFILE  •  LIVER FUNCTION TESTS • KIDNEY FUNCTION TESTS • THYROID FUNCTION TESTS  •  VITAMIN B12 • VITAMIN D • ALLERGY PHADIA TOP URINE-ROUTINE  • X-RAY CHEST PA VIEW  • ECG • TMT/STRESS TEST • USG WHOLE ABDOMEN</td>
                        </tr>
                        <tr>
                        <td data-label="Packages">Jiyo Healthy Jiyo Well’thy Total Body Profile Female</td>
                        <td data-label="Test">CBC •&nbsp;ESR •&nbsp;Blood Sugar Fasting •&nbsp;PPBS •&nbsp;Glyco Hb (HbA1c) •&nbsp;Lipid-P • Liver Function Tests •&nbsp;Kidney Function Tests • Thyroid Function Test •&nbsp;Vitamin B12 • Vitamin D Total (25-OH Vitamin D) •&nbsp;Total IgE •&nbsp;Urine-R • USG Whole Abdomen • X-Ray Chest PA View • ECG&nbsp;•&nbsp;TMT/Stress Test •&nbsp;Mammography</td>
                        </tr>
                        <tr>
                        <td data-label="Packages">Jiyo Healthy Jiyo Well’thy COMPLETE BODY PROFILE MALE</td>
                        <td data-label="Test">(Includes Radiology &amp; Cardiology Tests) CBC •&nbsp;ESR •&nbsp;FBS •&nbsp;PPBS •&nbsp;GLYCO Hb (HbAlc) •&nbsp;LIPID PROFILE • LIVER FUNCTION TESTS • KIDNEY FUNCTION TESTS • THYROID FUNCTION TESTS •&nbsp;URINE-ROUTINE •&nbsp;CPK •&nbsp;APO A1/B •&nbsp;LIPOPROTEIN (a) • HS-CRP •&nbsp;HOMOCYSTEINE • VITAMIN B12 • VITAMIN D • ALLERGY PHADIA TOP • PSA TOTAL • X-Ray Chest PA View •&nbsp;ECG • TMT/Stress Test • 2D ECHO • USG WHOLE ABDOMEN • BMD (DXA SCAN) •&nbsp;PHYSICAL EXAMINATION • EYE EXAMINATION • DENTAL CHECK-UP • DIET CONSULTATION</td>
                        </tr>
                        <tr>
                        <td data-label="Packages">Jiyo Healthy Jiyo Well’thy COMPLETE BODY PROFILE FEMALE</td>
                        <td data-label="Test">(Includes Radiology &amp; Cardiology Tests) CBC • ESR • FBS • PPBS • GLYCO Hb (HbAlc) • LIPID PROFILE • LIVER FUNCTION TESTS • KIDNEY FUNCTION TESTS • THYROID FUNCTION TESTS • URINE-ROUTINE • CPK • APO A1/B • LIPOPROTEIN (a) • HS-CRP • HOMOCYSTEINE • VITAMIN B12 • VITAMIN D • ALLERGY PHADIA TOP • LIQUID BASED CYTOLOGY • X-Ray Chest PA View •&nbsp;ECG • TMT/Stress Test • 2D ECHO • USG WHOLE ABDOMEN • BMD (DXA SCAN) • PHYSICAL EXAMINATION • EYE EXAMINATION • DENTAL CHECK-UP • DIET CONSULTATION (Complete Body Profile Female, with Mammography, will be available at Rs16800/-)</td>
                        </tr>
                        <tr><td data-label="Packages">Jiyo Healthy Jiyo Well’thy Senior Citizen Male</td>
                        <td data-label="Package Details">CBC&nbsp;•&nbsp;ESR •&nbsp;Fasting Blood Sugar • Glyco Hb (HbA1c) •&nbsp;Lipid-P •&nbsp;SGPT/ALT • Urea/BUN •&nbsp;Creatinine •&nbsp;Uric Acid • Calcium • Thyroid Function Tests • Vitamin B12 •&nbsp;Vitamin D Total (25-OH Vitamin D) •&nbsp;PSA-Total •&nbsp;Urine-R •&nbsp;USG Whole Abdomen •&nbsp;BMD (DEXA-Total Body)</td>
                        </tr>
                        <tr>
                        <td data-label="Packages">Jiyo Healthy Jiyo Well’thy Senior Citizen Female</td>
                        <td data-label="Package Details">CBC •&nbsp;ESR •&nbsp;Fasting Blood Sugar • Glyco Hb (HbA1c) • Lipid-P • SGPT/ALT • Urea/BUN •&nbsp;Creatinine •&nbsp;Uric Acid&nbsp;• Calcium •&nbsp;Thyroid Function Tests • Vitamin B12 •&nbsp;Vitamin D Total (25-OH Vitamin D) • Urine-R&nbsp;• USG Whole Abdomen •&nbsp;BMD (DEXA-Total Body) •&nbsp;Pap Smear</td>
                        </tr>
                        <tr>
                        <td data-label="Packages">Jiyo Healthy Jiyo Well’thy Bone &amp; Joint Minor</td>
                        <td data-label="Package Details">CBC&nbsp;• ESR •&nbsp;Fasting Blood Sugar • Lipid-P •&nbsp;SGOT/AST •&nbsp;SGPT/ALT • Urea/BUN • Creatinine •&nbsp;Uric Acid • Calcium • Vitamin B12 • Vitamin D Total (25-OH Vitamin D) •&nbsp;ALK PHOS</td>
                        </tr>
                        <tr>
                        <td data-label="Packages">Jiyo Healthy Jiyo Well’thy Bone &amp; Joint Major</td>
                        <td data-label="Package Details">CBC •&nbsp;ESR •&nbsp;Fasting Blood Sugar • Lipid-P •&nbsp;SGOT/AST •&nbsp;SGPT/ALT • Urea/BUN • Creatinine •&nbsp;Uric Acid • Calcium • Thyroid Function Tests •&nbsp;Vitamin B12 •&nbsp;Vitamin D Total (25-OH Vitamin D) •&nbsp;ALK PHOS •&nbsp;PHOS • CCP-Ab (Anti CCP Antibody) • Urine-R •&nbsp;BMD (DEXA-Total Body)</td>
                        </tr>
                        <tr>
                        <td data-label="Packages">Jiyo Healthy Jiyo Well’thy Cancer Male</td>
                        <td data-label="Package Details">CBC •&nbsp;ESR •&nbsp;Fasting Blood Sugar&nbsp;• SGOT/AST • SGPT/ALT •&nbsp;Creatinine&nbsp;• Calcium •&nbsp;Vitamin D Total (25-OH Vitamin D)&nbsp;•&nbsp;Urine-R •&nbsp;Stool-R •&nbsp;PSA-Total •&nbsp;CEA •&nbsp;AFP (Roche) • CA 72.4 (Roche) •&nbsp;CA 19.9 (ROCHE) •&nbsp;USG Whole Abdomen</td>
                        </tr>
                        <tr>
                        <td data-label="Packages">Jiyo Healthy Jiyo Well’thy Cancer Female</td>
                        <td data-label="Package Details">CBC •&nbsp;ESR • Fasting Blood Sugar • Lipid-P •&nbsp;SGOT/AST •&nbsp;SGPT/ALT • Creatinine •&nbsp;Calcium • Vitamin D Total (25-OH Vitamin D) •&nbsp;Urine-R •&nbsp;Stool-R •&nbsp;CEA • AFP (Roche)&nbsp;•&nbsp;CA 72.4 (Roche) •&nbsp;CA 19.9 (ROCHE) •&nbsp;CA 15.3 (ROCHE) •&nbsp;ROMA Index (CA-125 &amp; HE4) • USG Whole Abdomen •&nbsp;Mammography •&nbsp;Pap smear</td>
                        </tr>
                        <tr>
                        <td data-label="Packages">Jiyo Healthy Jiyo Well’thy Silver Pack</td>
                        <td data-label="Package Details">Blood Urea Nitrogen • Calcium •&nbsp;Complete Blood Count •&nbsp;Creatinine •&nbsp;FBS •&nbsp;GLYCO Hb (HbA1c) • &nbsp;Lipid Profile •&nbsp;SGOT/AST •&nbsp;SGPT/ALT • Uric Acid •&nbsp;Urine Routine Analysis • Vitamin B12 •&nbsp;Vitamin D •&nbsp;ECG •&nbsp;TMT •&nbsp;USG Whole Abdomen</td>
                        </tr>
                        <tr>
                        <td data-label="Packages">Jiyo Healthy Jiyo Well’thy Silver Pack Goa</td>
                        <td data-label="Package Details">CBC • ESR •&nbsp;Fasting Blood Sugar • GLYCO Hb (HbA1c) •&nbsp;Lipid Profile •&nbsp;LFT • KFT • TFT • Vitamin D Total •&nbsp;Urine Routine</td>
                        </tr>
                        <tr>
                        <td data-label="Packages">Jiyo Healthy Jiyo Well’thy Good Heart</td>
                        <td data-label="Package Details">CBC •&nbsp;ESR •&nbsp;Fasting Blood Sugar • PPBS •&nbsp;Glyco Hb (HbA1c) • Lipid-P • SGPT/ALT •&nbsp;Urea/BUN • Creatinine •&nbsp;Uric Acid • Calcium&nbsp;•&nbsp;Thyroid Function Tests • Vitamin B12 • Vitamin D Total (25-OH Vitamin D) •&nbsp;Urine-R •&nbsp;ECG • TMT/Stress Test •&nbsp;2D ECHO</td>
                        </tr>
                        <tr>
                        <td data-label="Packages">Jiyo Healthy Jiyo Well’thy Power Pack</td>
                        <td data-label="Package Details">CBC •&nbsp;Fasting Blood Sugar • Lipid-P • Liver Function Tests • Kidney Function Tests •&nbsp;Urine-R</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php include("footer.php"); ?>
</body>
</html>