<html dir="rtl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.rtl.css">
  <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.css">
  <link rel="stylesheet" href="assets/fontawesome/css/solid.css">


  <link rel="stylesheet" href="assets/plugins/calender/calendar/css/style.css">

  <script src="assets/plugins/calender/calendar/js/jquery.min.js"></script>
  <script src="assets/plugins/calender/calendar/js/popper.js"></script>
  <script src="assets/plugins/calender/calendar/js/main.js"></script>

  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/fontawesome/js/fontawesome.js"></script>

  
</head>

<body>

  <div class="col-md-12 d-flex h-100 ">
    <?php
    require_once('sidebar.php');
    ?>

    <!-- Content -->

    <div class="main-container col-md-10 p-5 ">
      <div class="title">
        <p> به پنل مدیریت ساختمان هوشمند خوش آمدید</p>
      </div>

      <div class="content">
        <div>
          <section class="ftco-section">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                  <h2 >تقویم</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="elegant-calencar d-md-flex">
                    <div class="wrap-header d-flex align-items-center img" style="background-image: url(images/bg.jpg);">
                      <p id="reset">Today</p>
                      <div id="header" class="p-0">
                        <!-- <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div> -->
                        <div class="head-info">
                          <div class="head-month"></div>
                          <div class="head-day"></div>
                        </div>
                        <!-- <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div> -->
                      </div>
                    </div>
                    <div class="calendar-wrap">
                      <div class="w-100 button-wrap">
                        <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div>
                        <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div>
                      </div>
                      <table id="calendar">
                        <thead>
                          <tr>
                            <th>Sun</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

  </div>

  <!-- End Content -->
</body>

</html>