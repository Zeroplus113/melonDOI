<?php

session_start();
include 'connectDB.php';

$sql = "SELECT * FROM greenhouse";
$result = $con->query($sql);
$count_row = mysqli_num_rows($result);

?>


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
                    <a href="index.php" class="nav-link link-dark" aria-current="page">
                        <i class="bi bi-house" style="font-size: 16px; margin-right: 8px; font-family: Kanit;"></i>
                        หน้าแรก
                    </a>
                </li>

                <li>
                    <a href="period.php" class="nav-link active">
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
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Period</li>
                </ol>

                <!-- //Don't Delete -->


                <section class="py-5 text-center container">
                    <div class="row py-lg-5">
                        <div class="col-lg-6 col-md-8 mx-auto">
                            <h1 class="fw-light">จัดการรอบการปลูก</h1>
                            <p class="lead text-muted">ตรวจสอบ/แก้ไข ข้อมูลรอบการปลูกในแต่ละโรงเรือน</p>
                            <p>
                                <a href="#" class="btn btn-primary my-2">เพิ่มรอบการปลูก</a>
                                <a href="#" class="btn btn-secondary my-2">ลบรอบการปลูก</a>
                            </p>
                        </div>
                    </div>
                </section>



                <!-- List Greenhouse Panel Card -->

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    <?php
                                    if($count_row != 0){
                                        while($rs = $result->fetch_assoc()){
                                            echo "
                                            <div class='col'>
                                            <div class='card shadow-sm'>
                                                <img src='asset/img/agriculture.jpg' alt='' width='100%' height='255' style='padding: 2%;'>
                                               <div class='card-body'>
                                                <h5 class='card-title'>".$rs['greenhouseName']."</h5>
                                                    <p class='card-text'>มกราคม 2565 - มีนาคม 2565</p>
                                                    <div class='d-flex justify-content-between align-items-center'>
                                                        <div class='btn-group'>
                                                            <button type='button' class='btn btn-outline-success'><i class='bi bi-pencil' style='font-size: 16px; margin-right: 8px;'></i> แก้ไข</button>
                                                        </div>
                                                        <small class='text-muted'> ".$rs['gh_create_date']."</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        ";
                                        }
                                    }
                                ?>
                    
                </div>



                <!-- //List Greenhouse Panel Card -->

        </div>

        <!-- //Panel -->


    </main>





    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- JS -->
    <script src="asset/js/script.js"></script>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="sidebars.js"></script>



</body>

</html>