<html dir="rtl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.rtl.css">
  <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.css">
  <link rel="stylesheet" href="assets/fontawesome/css/solid.css">

<!-- calender 1 -->
  <link rel="stylesheet" href="assets/plugins/calender/calendar/css/style.css">

  <script src="assets/plugins/calender/calendar/js/jquery.min.js"></script>
  <script src="assets/plugins/calender/calendar/js/popper.js"></script>
  <script src="assets/plugins/calender/calendar/js/main.js"></script>
<!--end  calender 1 -->



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
        <?php
        require_once('calender.php') 
        ?>
      </div>



    </div>
  </div>


  <!-- End Content -->
</body>

</html>