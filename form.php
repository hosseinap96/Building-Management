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


    <script src="assets/js/checkUrl.js"></script>
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
                <div class="col-md-12 form-container">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="name">نام ساختمان</label>
                                <input type="text" class="form-control" id="name" placeholder="نام ساختمان">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="floor">تعداد طبقات</label>
                                <input type="number" class="form-control" id="floor" min="0" placeholder="تعداد طبقات">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="unit">تعداد واحد ها</label>
                                <input type="number" class="form-control" id="unit" min="0" placeholder="تعداد واحد ها">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="year">سال ساخت </label>
                                <input type="number" class="form-control" id="year" min="0" placeholder=" سال ساخت">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">مشاعات:</div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="parking">
                                    <label class="form-check-label mr-2" for="parking">
                                        پارکینگ
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="yard">
                                    <label class="form-check-label mr-2" for="yard">
                                        حیاط
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="garden">
                                    <label class="form-check-label mr-2" for="garden">
                                        باغچه
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="form-check col-md-6">
                            <label for="inputEmail4">دیگر مشاعات </label>
                            <input type="text" class="form-control" id="inputEmail4">
                        </div>

                        <div class="form-check d-flex flex-wrap mt-3 custom-form">
                            <div class="col-md-4">
                                <p>امکانات</p>
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="elevator" value="1">
                                    <label class="form-check-label mr-2" for="elevator">
                                        آسانسور
                                    </label>
                                </div>
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="remote">
                                    <label class="form-check-label mr-2" for="remote">
                                        درب ریموت دار
                                    </label>
                                </div>
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="emergency">
                                    <label class="form-check-label mr-2" for="emergency">
                                        سیستم برق اضطراری
                                    </label>
                                </div>
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="package">
                                    <label class="form-check-label mr-2" for="package">
                                        موتور خانه(پکیچ)
                                    </label>
                                </div>
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="cooler">
                                    <label class="form-check-label mr-2" for="cooler">
                                        سیستم سرمایشی - کولر
                                    </label>
                                </div>
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="fire">
                                    <label class="form-check-label mr-2" for="fire">
                                        سیستم اعلام حریق
                                    </label>
                                </div>
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="capsule">
                                    <label class="form-check-label mr-2" for="capsule">
                                        کپسول آتش نشانی
                                    </label>
                                </div>

                            </div>
                            <div class="col-md-2 text-center ">
                                <p>سرویس دوره ای</p>
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="ser-elevator" disabled>
                                    <label class="form-check-label mr-2" for="ser-elevator">
                                        دارد
                                    </label>
                                </div>
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="ser-remote" disabled>
                                    <label class="form-check-label mr-2" for="ser-remote">
                                        دارد
                                    </label>
                                </div>
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="ser-emergency" disabled>
                                    <label class="form-check-label mr-2" for="ser-emergency">
                                        دارد
                                    </label>
                                </div>
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="ser-package" disabled>
                                    <label class="form-check-label mr-2" for="ser-package">
                                        دارد
                                    </label>
                                </div>
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="ser-cooler" disabled>
                                    <label class="form-check-label mr-2" for="ser-cooler">
                                        دارد
                                    </label>
                                </div>
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="ser-fire" disabled>
                                    <label class="form-check-label mr-2" for="ser-fire">
                                        دارد
                                    </label>
                                </div>
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="ser-capsule" disabled>
                                    <label class="form-check-label mr-2" for="ser-capsule">
                                        دارد
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <p> تاریخ </p>
                                <div class="form-check mt-3 height-date">
                                    <div id="anasorDate">
                                        <label for="anasorDate">تاریخ یادآوری:</label>
                                        <input type="date" name="date">
                                    </div>

                                </div>
                                <div class="form-check mt-3 height-date">
                                    <div id="remoteDate">
                                        <label for="remoteDate">تاریخ یادآوری:</label>
                                        <input type="date" name="date">
                                    </div>

                                </div>
                                <div class="form-check mt-3 height-date">
                                    <div id="emergencyDate">
                                        <label for="emergencyDate">تاریخ یادآوری:</label>
                                        <input type="date" name="date">
                                    </div>

                                </div>
                                <div class="form-check mt-3 height-date">
                                    <div id="packageDate">
                                        <label for="packageDate">تاریخ یادآوری:</label>
                                        <input type="date" name="date">
                                    </div>

                                </div>
                                <div class="form-check mt-3 height-date">
                                    <div id="coolerDate">
                                        <label for="coolerDate">تاریخ یادآوری:</label>
                                        <input type="date" name="date">
                                    </div>

                                </div>
                                <div class="form-check mt-3 height-date">
                                    <div id="fireDate">
                                        <label for="fireDate">تاریخ یادآوری:</label>
                                        <input type="date" name="date">
                                    </div>

                                </div>
                                <div class="form-check mt-3 height-date">
                                    <div id="capsuleDate">
                                        <label for="capsuleDate">تاریخ یادآوری:</label>
                                        <input type="date" name="date">
                                    </div>

                                </div>
                            </div>
                        </div>



                        <div class="form-row mt-3">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4"> مشخصات سیستم روشنایی</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="روشنایی ">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">جزئیات نظافت ساختمان </label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="جزئیات نظافت ">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputPassword4">تعداد سطل های زباله</label>
                                <input type="number" class="form-control" id="inputPassword4" placeholder="سطل های زباله">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">نوع فاضلاب</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder=" فاضلاب">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">سایر موارد</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder=" سایر ...">
                            </div>
                        </div>



                        <button type="submit" class="btn btn-primary">ثبت</button>
                    </form>
                </div>

            </div>
        </div>





    </div>
    </div>
    <script src="assets/js/form.js"></script>
    <script>
        document.getElementById("indexPage").classList.remove("active");
        document.getElementById("formPage").classList.add("active");

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