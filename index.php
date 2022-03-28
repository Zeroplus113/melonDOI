<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meloned</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Local File -->
    <!-- CSS -->
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="asset/css/sidebars.css">





    <!-- ICON -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link rel="stylesheet" href="asset/css/style.css">
</head>


<body>
    <main>

        <h1 class="visually-hidden">Sidebars examples</h1>

        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">Dashboard</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <i class="bi bi-house" style="font-size: 16px; margin-right: 8px; font-family: Kanit;"></i>
                        หน้าแรก
                    </a>
                </li>

                <li>
                    <a href="period.php" class="nav-link link-dark">
                        <i class="bi bi-calendar3" style="font-size: 16px; margin-right: 8px;"></i>
                        รอบการปลูก
                    </a>
                </li>


                <li>
                    <a href="#" class="nav-link link-dark" data-bs-toggle="collapse"
                        data-bs-target="#dailycare-collapse" aria-expanded="false">
                        <i class="bi bi-card-checklist" style="font-size: 16px; margin-right: 8px;"></i>
                        การดูแลประจำวัน
                    </a>


                    <div class="collapse" id="dailycare-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 " style="margin-left: 10%;">
                            <li><a href="dailycare/water.php" class="link-dark rounded">การให้น้ำ</a></li>
                            <li><a href="dailycare/fert.php" class="link-dark rounded">การให้ปุ๋ย</a></li>
                            <li><a href="dailycare/bio.php" class="link-dark rounded">พ่นชีวภัณฑ์</a></li>
                            <li><a href="dailycare/pest.php" class="link-dark rounded">พบปัญหา</a></li>
                        </ul>
                    </div>

                </li>

                <li>
                    <a href="#" class="nav-link link-dark">
                        <i class="bi bi-cloud-moon-fill" style="font-size: 16px; margin-right: 8px;"></i>
                        สภาพอากาศ
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link link-dark">
                        <i class="bi bi-thermometer-half" style="font-size: 16px; margin-right: 8px;"></i>
                        ประมาณค่าความชื้นด้วยอุณหภูมิ
                    </a>
                </li>

            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                    id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>User โง่ๆ</strong>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#">ตั้งค่า</a></li>
                    <li><a class="dropdown-item" href="#">โปรไฟล์</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">ลงชื่อออก</a></li>
                </ul>
            </div>
        </div>

        <div class="b-example-divider"></div>





        <!-- Panel -->

        <!-- Don't Delete -->
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb box-border rounded">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Overview</li>
                </ol>

                <!-- Don't Delete -->


                <!-- Weather Wiget -->

                <script>
                    (function (d, s, id) {
                        if (d.getElementById(id)) {
                            if (window.__TOMORROW__) {
                                window.__TOMORROW__.renderWidget();
                            }
                            return;
                        }
                        const fjs = d.getElementsByTagName(s)[0];
                        const js = d.createElement(s);
                        js.id = id;
                        js.src = "https://www.tomorrow.io/v1/widget/sdk/sdk.bundle.min.js";

                        fjs.parentNode.insertBefore(js, fjs);
                    })(document, 'script', 'tomorrow-sdk');
                </script>

                <div class="tomorrow" data-location-id="106719" data-language="TH" data-unit-system="METRIC"
                    data-skin="light" data-widget-type="upcoming" style="padding-bottom:22px;position:relative;">

                </div>


                <iframe class="fulliframe"
                    src="https://datastudio.google.com/embed/reporting/478c11e6-7b2a-4116-a772-aa3245cb33b9/page/XowmC"
                    frameborder="0" style="border:0" allowfullscreen></iframe>

                <!-- <div class="test row my-4">
                    <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">โรงเรือนที่ 1</h5>
                            <div class="card-body">
                                <h5 class="card-title">345k</h5>
                                <p class="card-text">Feb 1 - Apr 1, United States</p>
                                <p class="card-text text-success">18.2% increase since last month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">โรงเรือนที่ 2</h5>
                            <div class="card-body">
                                <h5 class="card-title">$2.4k</h5>
                                <p class="card-text">Feb 1 - Apr 1, United States</p>
                                <p class="card-text text-success">4.6% increase since last month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">โรงเรือนที่ 3</h5>
                            <div class="card-body">
                                <h5 class="card-title">43</h5>
                                <p class="card-text">Feb 1 - Apr 1, United States</p>
                                <p class="card-text text-danger">2.6% decrease since last month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">โรงเรือนที่ 4</h5>
                            <div class="card-body">
                                <h5 class="card-title">64k</h5>
                                <p class="card-text">Feb 1 - Apr 1, United States</p>
                                <p class="card-text text-success">2.5% increase since last month</p>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- 
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">Latest transactions</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Date</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">17371705</th>
                                                <td>Volt Premium Bootstrap 5 Dashboard</td>
                                                <td>johndoe@gmail.com</td>
                                                <td>€61.11</td>
                                                <td>Aug 31 2020</td>
                                                <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">17370540</th>
                                                <td>Pixel Pro Premium Bootstrap UI Kit</td>
                                                <td>jacob.monroe@company.com</td>
                                                <td>$153.11</td>
                                                <td>Aug 28 2020</td>
                                                <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">17371705</th>
                                                <td>Volt Premium Bootstrap 5 Dashboard</td>
                                                <td>johndoe@gmail.com</td>
                                                <td>€61.11</td>
                                                <td>Aug 31 2020</td>
                                                <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">17370540</th>
                                                <td>Pixel Pro Premium Bootstrap UI Kit</td>
                                                <td>jacob.monroe@company.com</td>
                                                <td>$153.11</td>
                                                <td>Aug 28 2020</td>
                                                <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">17371705</th>
                                                <td>Volt Premium Bootstrap 5 Dashboard</td>
                                                <td>johndoe@gmail.com</td>
                                                <td>€61.11</td>
                                                <td>Aug 31 2020</td>
                                                <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">17370540</th>
                                                <td>Pixel Pro Premium Bootstrap UI Kit</td>
                                                <td>jacob.monroe@company.com</td>
                                                <td>$153.11</td>
                                                <td>Aug 28 2020</td>
                                                <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="#" class="btn btn-block btn-light">View all</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="card">
                            <h5 class="card-header">Traffic last 6 months</h5>
                            <div class="card-body">
                                <div id="traffic-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
        </div> 




    </main>





    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- JS -->
    <script src="js/script.js"></script>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="sidebars.js"></script>



</body>

</html>