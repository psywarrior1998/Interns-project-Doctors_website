
    <div class="container-fluid" style="padding: 0;">
        <!--search toggle-->
        <div id="search-toggle" class="container-fluid text-center" style="display: none; height: 90px; background: #01793A; box-sizing: boder-box; padding-top: 25px;">
                <!--<nav class="navbar navbar-light bg-light">
                        <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </form>
                </nav>-->
                <nav class="navbar navbar-light bg-light">
                        <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search for..." aria-label="Search" style="background: #DBDBDB;">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="background: #039247;"><span class="glyphicon glyphicon-search" style="color: white;"></span></button>
                        </form>
                </nav>
        </div>
        <!--scrolling updates-->
        <div class="container-fluid scrolling-updates" style="margin: 0;">
            <marquee scrollamount="4">
                    As per the GOI circular on price capping of Orthopaedic Knee implant by NPPA(National Pharmaceutical Pricing Authority), new prices of knee implants have been implemented effective 16th August 2017. For details on knee implant pricing across our hospitals. CLICK HERE | As per GOI’s circular dated 02nd April 2018 on price-capping of stents by NPPA(National Pharmaceutical Pricing Authority), new prices of coronary stents are revised with effect from 01st April, 2018. For details on stent pricing.CLICK HERE
            </marquee>
        </div>
        <!--logo-->
        <div class="col-md-8 col-xs-12" style="height: auto; background: #dfdfdf; float: left;">
                <img src="image/logo.jpg" style="max-width: 100%; height: auto;"/>
        </div>
        <!--search -->
        <div class="col-md-2 col-xs-12" style="height: auto; cursor: pointer; float: right;" id="search">
            <ul class="nav navbar-nav navbar">
                <li><a href="#"><span class="glyphicon glyphicon-search"></span> Search</a></li>
            </ul>
        </div>
        <!--emergency no. -->
        <div class="col-md-2 col-xs-12" style="background: white; height: 52px; float: right;">
                <!-- Trigger the modal with a button -->
                <button style="border: none; width: 200px; font-size: 12px; font-weight: bold; height: auto; border-radius: 0 0 10px 10px; background: #ED1F24;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-ambulance" aria-hidden="true" style="font-size: 20px;"></i>
                        &nbsp; EMERGENCY NO. &nbsp;
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </button>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                    <div class="modal-header" style="background: #00A950;">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Emergency No.</h4>
                                    </div>
                                    <div class="modal-body">  <table class="table table-bordered"><tbody><tr><th>Location</th><th class="txtCntr">Phone No.</th></tr><tr><td class="width50">BG Road, CG Road, Anandapur, Rashbehari, Fortis Medical Centre</td><td class="txtCntr"><a href="Tel:105711">105711</a></td></tr><tr><td class="width50">Delhi - NCR</td><td class="txtCntr"><a href="Tel:105010">105010</a></td></tr><tr><td class="width50">Amritsar</td><td class="txtCntr"><a href="Tel:9915133330">9915133330</a></td></tr><tr><td class="width50">Rajajinagar</td><td class="txtCntr"><a href="Tel:080-23004150">080-23004150</a></td></tr><tr><td class="width50">Nagarbhavi</td><td class="txtCntr"><a href="Tel:080-23014444">080-23014444</a></td></tr><tr><td class="width50">Mulund, Vashi, Kalyan, Mahim</td><td class="txtCntr"><a href="Tel:022-41114111">022-41114111</a></td></tr><tr><td class="width50">Mohali</td><td class="txtCntr"><a href="Tel:0172-4692200">0172-4692200</a></td></tr><tr><td class="width50">Malar</td><td class="txtCntr"><a href="Tel:044-49334933">044-49334933</a></td></tr><tr><td class="width50">Ludhiana</td><td class="txtCntr"><a href="Tel:0161-5222222">0161-5222222</a></td></tr><tr><td class="width50">Kangra</td><td class="txtCntr"><a href="Tel:01892242560">01892242560</a></td></tr><tr><td class="width50">Jaipur</td><td class="txtCntr"><a href="Tel:0141-2547009">0141-2547009</a></td></tr><tr><td class="width50">Dehradun</td><td class="txtCntr"><a href="Tel:0135-3980201">0135-3980201</a></td></tr></tbody></table>  </div>
                                    <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                            </div>

                    </div>
                </div>
        </div>
    </div>

    <div class="container-fluid" style="border-bottom:3px solid #00A950;">
        <!--nav-bar-->
        <div class="col-md-7 col-xs-12">
            <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div>
                        <div class="toggle2">
                                <i class="fa fa-bars nav-toggle" aria-hidden="true"></i>
                        </div>
                        <ul class="nav navbar-nav tul">
                        <li class="active"><a href="main.php">Home</a></li>
                        <li><a href="#" id="spec">Specialities</a></li> 
                        <li><a href="#" id="keydocs">Find Doctors</a></li> 
                        <li><a href="healthcheck.php">Health Checks</a></li> 
                        <li><a href="#"  data-toggle="modal" data-target="#myModal1">OPD Schedule</a></li>
                        </ul>
                </div>
            </div>
            </nav>
                <!-- Modal -->
                <div id="myModal1" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                    <div class="modal-header" style="background: #00A950;">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Name</h4>
                                    </div>
                                    <div class="modal-body" style="text-align: center;">  Book an appointment  <br><br>
                                            <div class="row" style="background: #ebeeef;">
                                                <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Select your city</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Select your hospital</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                        </select>
                                                </div>
                                            </div><br>
                                            <button type="button" class="btn btn-success">Continue</button>
                                    </div>
                                    <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                            </div>

                    </div>
                </div>
        </div>

        <!--doctor's login-->
        <div class="col-md-2 col-xs-12" style="background: white; float: right;">
                <!-- Trigger the modal with a button -->
                <button onclick="location.href = 'dlogin.php';" style="border: none; width: 200px; font-size: 14px; font-weight: bold; height: 54px; border-radius: 0 0 10px 10px; background: #ED1F24;" type="button" class="btn btn-info btn-lg">
                        <i class="fa fa-stethoscope" aria-hidden="true" style="font-size: 22px;"></i>&nbsp;
                        DOCTOR's login &nbsp;
                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                </button>
        </div>

        <!--Patient's login-->
        <div class="col-md-2 col-xs-12" style="background: white; float: right;">
                <!-- Trigger the modal with a button -->
                <button onclick="location.href = 'plogin.php';" style="border: none; width: 200px; font-size: 14px; font-weight: bold; height: 54px; border-radius: 0 0 10px 10px; background: #ED1F24;" type="button" class="btn btn-info btn-lg">
                        <i class="fa fa-user" aria-hidden="true" style="font-size: 22px;"></i>&nbsp;
                        PATIENT's login &nbsp;
                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                </button>
        </div>

    </div>
