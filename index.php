<html dir="rtl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.rtl.css">
  <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.css">
  <link rel="stylesheet" href="assets/fontawesome/css/solid.css">
  <link rel="stylesheet" href="assets/css/hamber.css">
  <!-- calender 1 -->
  <link rel="stylesheet" href="assets/plugins/calender/calendar/css/style.css">

  <script src="assets/plugins/calender/calendar/js/jquery.min.js"></script>
  <script src="assets/plugins/calender/calendar/js/popper.js"></script>
  <script src="assets/plugins/calender/calendar/js/main.js"></script>
  <script src="assets/js/checkUrl.js"></script>
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
        <div class="col-md-6 list-building">
          <p>لیست ساختمان ها</p>
          <div class="build-card col-md-12 d-flex">
            <div class="col-md-2"> 1.</div>
            <div class="col-md-8">ساختمان شماره 1</div>
            <div class="col-md-2">ویرایش</div>
          </div>

          <div class="build-card col-md-12 d-flex">
            <div class="col-md-2"> 2.</div>
            <div class="col-md-8">ساختمان شماره 2</div>
            <div class="col-md-2">ویرایش</div>
          </div>

          <div class="build-card col-md-12 d-flex">
            <div class="col-md-2"> 3.</div>
            <div class="col-md-8">ساختمان شماره 3</div>
            <div class="col-md-2">ویرایش</div>
          </div>

          <div class="build-card col-md-12 d-flex">
            <div class="col-md-2"> 4.</div>
            <div class="col-md-8">ساختمان شماره 4</div>
            <div class="col-md-2">ویرایش</div>
          </div>

          <div class="build-card col-md-12 d-flex">
            <div class="col-md-2"> 5.</div>
            <div class="col-md-8">ساختمان شماره 5</div>
            <div class="col-md-2">ویرایش</div>
          </div>

          <div class="build-card col-md-12 d-flex">
            <div class="col-md-2"> 6.</div>
            <div class="col-md-8">ساختمان شماره 6</div>
            <div class="col-md-2">ویرایش</div>
          </div>
        </div>
      </div>
    </div>





  </div>
  </div>

  <script>
    document.getElementById("formPage").classList.remove("active");
    document.getElementById("indexPage").classList.add("active");
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginRight = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginRight= "0";
}
</script>
  <!-- End Content -->
</body>

</html>