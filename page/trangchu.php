<?php
if (isset($_POST['username']) && isset($_POST['password']) && !isset($_COOKIE['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = $conn->query("select * from `account` where `username`= '" . $username . "' and `password` = '" . $password . "' limit 1");
    if ($query->num_rows > 0) {
        $row = $query->fetch_assoc();
        setcookie('login', 'true', time() + 60 * 60 * 24, "/", "", false, true);
        $_COOKIE['login'] = 'true';
        if ($row['admin'] == 1) {
            $_COOKIE['admin'] = 1;
            setcookie('admin', 1, time() + 60 * 60 * 24, "/", "", false, true);
        }
        if ($_COOKIE['login'] && $_COOKIE['admin']) {
            header('Location: #');
        }
    } else {
        echo '<script> alert("sai tai khoan hoac mat khau") </script>';
    }
}
?>
<img src="capcha.php" alt="Captcha">
<div class="header">
    <div class="slidebar">
        <!-- Nav bar code here -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <h2>Hùng Hero</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trang chủ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#lienhe">Liên hệ</a>
                    </li>
                    <?php
                        if (!isset($_COOKIE['login'])) {
                            echo '<li class="nav-item">
                                <a class="nav-link" href="#login-modal">Đăng nhập</a>
                                </li>';
                        } else {
                            echo '<li class="nav-item">
                                <a class="nav-link" href="./logout.php">Đăng Xuất</a>
                                </li>';
                        }
                        ?>
                    <?php

                    if (isset($_COOKIE['login']) &&  isset($_COOKIE['admin'])) {
                        echo '<li class="nav-item">
                                <a class="nav-link" href="#uploadFile">Thêm Mod</a>
                                </li>';
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </div>
    <div class="carousel-container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://via.placeholder.com/800x200" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://via.placeholder.com/800x200" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://via.placeholder.com/800x200" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div class="container-fluid">
    <h1 class="text-center mt-5">Danh sách sản phẩm</h1>
    <div class="row mt-5 d-flex flex-wrap align-items-stretch">
        <?php
        $sql = "SELECT * FROM modfiles";
        $query = $conn->query($sql);
        if ($query->num_rows != 0) {
            // output data of each row
            while ($row = $query->fetch_assoc()) {
                echo '<div class="col-md-3 mb-4">
                <div class="card d-flex flex-column h-100">
                    <img class="card-img-top" src="assets/img/' . $row['image'] . '" alt="Card image cap" style = "object-fit: cover;
                    height: 200px;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">' . $row['nameMod'] . '</h5>' .
                    '<p class="card-text">' . $row['Desc'] . '</p>' .
                    '<a href="./download.php?id=' . $row['id'] . '" class="btn btn-primary mt-auto">Tải Ngay</a>
                    </div>
                </div>
                </div>';
            }
        }
        ?>

    </div>
</div>