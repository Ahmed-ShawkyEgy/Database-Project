<head>

    <!-- TODO Fix the routes to be general -->
    <title>Profile Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../style/Profile.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body>

    <?php require($_SERVER['DOCUMENT_ROOT']."/Database-Project/php/axess.php"); ?>
    <div>
        <div id="Main" class="container-fluid">

            <div id="RowStarter" class="row">
                <?php require($_SERVER['DOCUMENT_ROOT']."/Database-Project/php/navbar.php"); ?>
                <div id="MainStartingImgBlock">
                    <div id="MainStartingImg" class="BigImg">
                        <div class="BigImg-wrapper" layout="row" layout-align="center center">
                            <div id="FontAwesomeIconsTopImg">
                                <div class="col-xs-12">
                                    <div id='topButtons'>
                                        <a href="/Database-Project/php/Staff-Member-Controller/check-in.php">
          <button class="btn btn-primary "style="width: 200px; height:50px" type="submit">Check In</button>
          </a>
                                        <a href="/Database-Project/php/Staff-Member-Controller/check-out.php">
        <button class="btn btn-primary "style="width: 200px; height:50px" type="submit">Check Out</button>
        </a>
                                        <a href="/Database-Project/layout/Staff Member/view-attendance.php">
      <button class="btn btn-primary "style="width: 200px; height:50px" type="submit">Attendance Records</button>
      </a>
                                        <a href="/Database-Project/layout/Staff Member/business.php">
      <button class="btn btn-primary "style="width: 200px; height:50px" type="submit">Apply for Business Trip</button>
      </a>


                                        <a href="/Database-Project/layout/Staff Member/leave.php">
      <button class="btn btn-primary "style="width: 200px; height:50px" type="submit">Apply for Leave Request</button>
      </a>


                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <img class="smaller-image thick-green-border" style="padding:20px" src="http://sguru.org/wp-content/uploads/2017/06/cool-profile-pictures-8DtpgWJB_400x400.jpeg" alt="A cute orange cat lying on its back. ">

                                <br>
                                <br>
                                <div id='bottomButtons'>
                                    <div class="col-xs-12">
                                        <a href="/Database-Project/layout/Staff Member/view-requests.php">
        <button class="btn btn-primary "style="width: 200px; height:50px" type="submit">View/Delete requests</button>
      </a>
                                        <a href="/Database-Project/layout/Staff Member/send-email.php">
    <button class="btn btn-primary "style="width: 200px; height:50px" type="submit">Send Email</button>
  </a>

                                        <a href='/Database-Project/layout/Staff Member/inbox.php'>
  <button class="btn btn-primary "style="width: 200px; height:50px" type="submit">Inbox</button>
  </a>

                                        <a href='/Database-Project/layout/Staff Member/announcements.php'>
  <button class="btn btn-primary "style="width: 200px; height:50px" type="submit">View Announcements</button>
  </a>

                                        <a href='/Database-Project/layout/editInfoRedirection.php'>
<button class="btn btn-primary "style="width: 200px; height:50px" type="submit">Edit Info</button>
</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <footer class="col-md-12">
                <div id="LinksInPageShortcuts">
                    <ul id="ulLinkList">
                        <li><a href="#">Home</a></li>
                        <li><a href="#AboutBlock">About</a></li>
                        <li><a href="#ContactBlock">Contacts</a></li>
                    </ul>
                </div>

                <div id="FooterText">
                    <ul id="ulLinkList">
                        <li>Copyrights &copy; H. Morgan 2017. This page was created for educational purposes only as a project for GUC.</li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>


</body>
