<?php
    session_start();
    include '../connectDB.php';

    if(isset($_SESSION['greenhouseID'])){
        $greenhouseID = $_SESSION['greenhouseID'];
        $periodID = $_SESSION['periodID'];
        $sql2 = "SELECT * FROM biopesticide INNER JOIN bio_type WHERE biopesticide.greenhouseID = '$greenhouseID' AND biopesticide.periodID = '$periodID' 
                AND biopesticide.bio_typeID = bio_type.bio_typeID";
        $result2 = $con->query($sql2);
        $count_row2 = mysqli_num_rows($result2);
    }

    $sql = "SELECT greenhouseID FROM greenhouse";
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

    <!-- JS -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="../asset/js/datepicker.js"></script>
    
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/225586f87d.js" crossorigin="anonymous"></script>

    <!-- Local File -->
    <!-- CSS -->
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../asset/css/sidebars.css">
    <!-- JS -->

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
    <link rel="stylesheet" href="../asset/css/style.css">
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
                    <a href="../index.php" class="nav-link link-dark" aria-current="page">
                        <i class="bi bi-house" style="font-size: 16px; margin-right: 8px; font-family: Kanit;"></i>
                        หน้าแรก
                    </a>
                </li>

                <li>
                    <a href="../period.php" class="nav-link link-dark">
                        <i class="bi bi-calendar3" style="font-size: 16px; margin-right: 8px;"></i>
                        รอบการปลูก
                    </a>
                </li>


                <li>
                    <a href="#" class="nav-link active" data-bs-toggle="collapse" data-bs-target="#dailycare-collapse"
                        aria-expanded="false">
                        <i class="bi bi-card-checklist" style="font-size: 16px; margin-right: 8px;"></i>
                        การดูแลประจำวัน
                    </a>


                    <div class="collapse" id="dailycare-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 " style="margin-left: 10%;">
                            <li><a href="water.php" class="link-dark rounded">การให้น้ำ</a></li>
                            <li><a href="fert.php" class="link-dark rounded">การให้ปุ๋ย</a></li>
                            <li><a href="#" class="link-dark rounded">พ่นชีวภัณฑ์</a></li>
                            <li><a href="pest.php" class="link-dark rounded">พบปัญหา</a></li>
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
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daily care</li>
                    <li class="breadcrumb-item active" aria-current="page">Bio</li>
                </ol>

                <!-- //Don't Delete -->

                <section class="py-5 text-center container">
                    <div class="row py-lg-5">
                        <div class="col-lg-6 col-md-8 mx-auto">
                            <h1 class="fw-light">การพ่นชีวภัณฑ์</h1>
                            <p class="lead text-muted">เพิ่ม/ลบ/แก้ไข ข้อมูลการพ่นชีวภัณฑ์แต่ละโรงเรือน</p>

                            <form action="../asset/php/addBio.php" method = "POST">

                            <div class="input-group">
                                <select class="form-select" id="drop" name="Greenhouse">
                                <?php
                                    $n = 1;
                                    if($count_row != 0){
                                        while($rs = $result->fetch_assoc()){
                                            echo "
                                            <option value=".$rs['greenhouseID'].">โรงเรือนที่ ".$n++."</option>
                                            ";
                                        }
                                    }
                                ?>
                                </select>
                            </div>


                            <button type="submit" class="btn btn-outline-success btn-add_bio"
                                id="add_bio" name="add_bio"> เพิ่มการพ่นชีวภัณฑ์</button>
                                </form>
                        </div>
                        
                    </div>
                </section>


                <div class="list-group">

                <?php    
                        if(isset($_SESSION['greenhouseID'])){
                            $n = 1;
                            if($count_row2 != 0){
                                while($rs2 = $result2->fetch_assoc()){
                                    echo "
                                    <a href='#' class='list-group-item list-group-item-action d-flex gap-3 py-3' aria-current='true'>
                                    <i class='fa-solid fa-feather-pointed' style='font-size: 30px; padding: 8px;'></i>
                                    <div class='d-flex gap-2 w-100 justify-content-between'>
                                        <div>
                                        <h6 class='mb-0'>".$rs2['bioname']."</h6>
                                        <p class='mb-0 opacity-75'>".$rs2['amount']." มิลลิลิตร</p>
                                        </div>
                                        <small class='opacity-50 text-nowrap timer'>".$rs2['time']."</small>
                                    </div>

                                    <button type='button' class='btn btn-sm btn-primary btn-edit_water' data-bs-toggle='modal'
                                     data-bs-target='#edit-water'>แก้ไข</button>
                                    </a>
                    
                                    ";
                                }
                            }
                        }
                    ?>

                   

        </div>


        <!-- //Panel -->

        <!-- Model -->

        <div class="modal fade" id="edit-water" tabindex="-1" aria-labelledby="edit-waterLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="edit-waterLabel">ข้อมูลการพ่นชีวภัณฑ์</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="datepicker">วันที่</label>
                        <p><input type="text" id="datepicker"></p>

                        <label for="timepicker">เวลา ตัวอย่าง เช่น 09:09 , 13:27</label>
                        <p><input type="text" id="timepicker"></p>



                        <label for="greenhouse">โรงเรือน</label>
                        <div class="input-group">
                            <select class="form-select" id="greenhouse" name="greenhouse">
                                <option value="0">กรุณาเลือกโรงเรือน</option>
                                <option value="1">โรงเรือนที่ 1</option>
                                <option value="2">โรงเรือนที่ 2</option>
                                <option value="3">โรงเรือนที่ 3</option>
                                <option value="4">โรงเรือนที่ 4</option>
                                <option value="5">โรงเรือนที่ 5</option>
                                <option value="6">โรงเรือนที่ 6</option>

                            </select>
                        </div>

                        <label for="fillbio" style="margin-top: 15px;">ปริมาณการพ่นชีวภัณฑ์ (หน่วยเป็นมิลลิลิตร)</label>
                        <p><input type="text" id="fillbio" name="fillbio"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">บันทึการเปลี่ยนแปลง</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิดหน้าต่าง</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- //Model -->






        

    </main>





    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- JS -->
    <script src="../asset/js/script.js"></script>

    <script src="sidebars.js"></script>



</body>
        <?php
         session_destroy();
        ?>
</html>