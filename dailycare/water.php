<?php
    session_start();
    include '../connectDB.php';

    if(isset($_SESSION['greenhouseID'])){
        $greenhouseID = $_SESSION['greenhouseID'];
        $periodID = $_SESSION['periodID'];
        $sql2 = "SELECT * FROM watering WHERE greenhouseID = '$greenhouseID' AND periodID = '$periodID'";
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
                        ?????????????????????
                    </a>
                </li>

                <li>
                    <a href="../period.php" class="nav-link link-dark">
                        <i class="bi bi-calendar3" style="font-size: 16px; margin-right: 8px;"></i>
                        ??????????????????????????????
                    </a>
                </li>


                <li>
                    <a href="#" class="nav-link active" data-bs-toggle="collapse" data-bs-target="#dailycare-collapse"
                        aria-expanded="false">
                        <i class="bi bi-card-checklist" style="font-size: 16px; margin-right: 8px;"></i>
                        ?????????????????????????????????????????????
                    </a>


                   
                    <div class="collapse" id="dailycare-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 " style="margin-left: 10%;">
                            <li><a href="#" class="link-dark rounded">???????????????????????????</a></li>
                            <li><a href="fert.php" class="link-dark rounded">??????????????????????????????</a></li>
                            <li><a href="bio.php" class="link-dark rounded">?????????????????????????????????</a></li>
                            <li><a href="pest.php" class="link-dark rounded">?????????????????????</a></li>
                        </ul>
                    </div>

                </li>

                <li>
                    <a href="#" class="nav-link link-dark">
                        <i class="bi bi-cloud-moon-fill" style="font-size: 16px; margin-right: 8px;"></i>
                        ???????????????????????????
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link link-dark">
                        <i class="bi bi-thermometer-half" style="font-size: 16px; margin-right: 8px;"></i>
                        ???????????????????????????????????????????????????????????????????????????????????????
                    </a>
                </li>

            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                    id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>User ????????????</strong>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#">?????????????????????</a></li>
                    <li><a class="dropdown-item" href="#">?????????????????????</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">???????????????????????????</a></li>
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
                    <li class="breadcrumb-item active" aria-current="page">Watering</li>
                </ol>

                <!-- //Don't Delete -->

                <section class="py-5 text-center container">
                    <div class="row py-lg-5">
                        <div class="col-lg-6 col-md-8 mx-auto">
                            <h1 class="fw-light">???????????????????????????</h1>
                            <p class="lead text-muted">???????????????/??????/??????????????? ????????????????????????????????????????????????????????????????????????????????????</p>

                            <form action="../asset/php/addWatering.php" method = "POST">
                                
                            <div class="input-group">
                                <select class="form-select" id="drop" name="Greenhouse">

                                <?php
                                    $n = 1;
                                    if($count_row != 0){
                                        while($rs = $result->fetch_assoc()){
                                            echo "
                                            <option value=".$rs['greenhouseID'].">????????????????????????????????? ".$n++."</option>
                                            ";
                                        }
                                    }
                                ?>
                                </select>
                            </div>


                            <button type="submit" class="btn btn-outline-success btn-add_water"
                                id="add_water" name="add_water"> ??????????????????????????????????????????</button>

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
                                    <i class='bi bi-droplet-fill' style='font-size: 30px; margin-right: 8px;'></i>
                                    <div class='d-flex gap-2 w-100 justify-content-between'>
                                        <div>
                                            <h6 class='mb-0'>???????????????????????? ".$n++."</h6>
                                            <p class='mb-0 opacity-75'>".$rs2['date']."</p>
                                        </div>
                                        <small class='opacity-50 text-nowrap timer_water'>".$rs2['time']."</small>
                                    </div>
                                    <form action='' method='POST'>
                                        <button type='submit' class='btn btn-sm btn-primary btn-edit_water' data-bs-toggle='modal'
                                         data-bs-target='#edit-water'>???????????????</button>
                                         </form>
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
                        <h5 class="modal-title" id="edit-waterLabel">?????????????????????????????????????????????</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="datepicker">??????????????????</label>
                        <p><input type="text" id="datepicker"></p>

                        <label for="timepicker">???????????? ???????????????????????? ???????????? 09:09:30 , 13:27:20</label>
                        <p><input type="text" id="timepicker"></p>



                        <label for="greenhouse">????????????????????????</label>
                        <div class="input-group">
                            <select class="form-select" id="greenhouse" name="greenhouse">
                                

                            <?php
                              $sql = "SELECT greenhouseID FROM greenhouse";
                              $result = $con->query($sql);
                              $count_row = mysqli_num_rows($result);

                           
                   
                                $n = 1;
                                if($count_row != 0){
                                    while($rs = $result->fetch_assoc()){
                                        echo "
                                        <option value=".$rs['greenhouseID'].">????????????????????????????????? ".$n++."</option>
                                        ";

                                    }
                                }
                            

                                ?>

                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">?????????????????????????????????????????????????????????</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">?????????????????????????????????</button>
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