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
    <link rel="stylesheet" href="assets/css/form.css">
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
                <p> ساخت شناسنامه جدید ساختمان</p>
            </div>

            <div class="content">
                <div class="col-md-10 form-container">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">نام ساختمان</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="نام ساختمان">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputPassword4">تعداد طبقات</label>
                                <input type="number" class="form-control" id="inputPassword4" placeholder="تعداد طبقات">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputPassword4">تعداد واحد ها</label>
                                <input type="number" class="form-control" id="inputPassword4" placeholder="تعداد واحد ها">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputPassword4">سال ساخت </label>
                                <input type="number" class="form-control" id="inputPassword4" placeholder=" سال ساخت">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">مشاعات:</div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label mr-2" for="gridCheck1">
                                        پارکینگ
                                    </label>
                                </div>
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label mr-2" for="gridCheck1">
                                        حیاط
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label mr-2" for="gridCheck1">
                                        باغچه
                                    </label>
                                </div>
                                <label for="inputEmail4">دیگر مشاعات </label>
                                <input type="text" class="form-control" id="inputEmail4">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2">سایر:</div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label mr-2" for="gridCheck1">
                                        آسانسور
                                    </label>
                                </div>
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label mr-2" for="gridCheck1">
                                        درب ریموت دار
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label mr-2" for="gridCheck1">
                                        سیستم برق اضطراری
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label mr-2" for="gridCheck1">
                                       موتور خانه(پکیچ)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label mr-2" for="gridCheck1">
                                        سیستم سرمایشی - کولر 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label mr-2" for="gridCheck1">
                                        سیستم اعلام حریق
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label mr-2" for="gridCheck1">
                                        کپسول آتش نشانی
                                    </label>
                                </div>
                                <label for="inputEmail4">دیگر مشاعات </label>
                                <input type="text" class="form-control" id="inputEmail4">
                            </div>
                        </div>




                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                </div>

            </div>
        </div>





    </div>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginRight = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginRight = "0";
        }
    </script>
    <!-- End Content -->
</body>

</html>