<?php
include('DBService.php');
if (isset($_POST['tenMod']) && isset($_POST['mota']) && isset($_FILES["mod-image"]["name"]) && isset($_FILES["download-file"]["name"]) && isset($_FILES["mod-tutorial"]["name"]) && isset($_COOKIE['admin'])) {
    $namemod = $_POST['tenMod'];
    $desc = $_POST['mota'];
    $imgLink = "../assets/img/" . basename($_FILES["mod-image"]["name"]);
    $downloadFile = "../assets/downloadfile/" . basename($_FILES["download-file"]["name"]);
    $tutorial_file = "../assets/tutorial/" . basename($_FILES["mod-tutorial"]["name"]) . $namemod ;

    $up_img = move_uploaded_file($_FILES["mod-image"]["tmp_name"], $imgLink);
    $up_file = move_uploaded_file($_FILES["download-file"]["tmp_name"], $downloadFile);
    $up_tutorial = move_uploaded_file($_FILES["mod-tutorial"]["tmp_name"], $tutorial_file);
    if ($up_file && $up_img && $up_tutorial) {
        $query = $conn->query("INSERT Into modfiles(`nameMod`, `Desc`, `image`, `downloadLink`) values('" . $namemod . "','" . $desc . "','" . basename($_FILES["mod-tutorial"]["name"]). $namemod . "','" . basename($_FILES["mod-image"]["name"]) . "','" . basename($_FILES["download-file"]["name"]) . "')");
        if ($query) {
            echo '<script> alert("them mod thanh cong");
                    </script>';
            $previous_page = $_SERVER['HTTP_REFERER'];
            header('Location: ' . $previous_page);
        }
    } else {
        echo '<script> alert("co loi xay ra") </script>';
    }
}
