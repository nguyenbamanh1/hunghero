<?php
include('database/DBService.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Liên kết đến các tệp JavaScript của Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        body {
            max-width: 100%;
        }

        #login-modal {
            display: none;
            background-color: rgba(0, 0, 0, 0.5);
            position: fixed;
            top: 0;
            left: 0;

            height: 100%;
            width: 100%;

        }

        .modal-dialog {
            top: 50%;
            transform: translate(0, -50%);
            animation-name: showForm;
            animation-duration: .5s;
        }

        #login-modal .modal-content {
            background-color: #fff;
        }


        #login-modal.show,
        #login-modal:target,
        #uploadFile:target {
            display: block;
        }

        #uploadFile {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation-name: showForm;
            animation-duration: .5s;
        }

        @keyframes showForm {
            0% {
                top: 0%;
            }

            100% {
                top: 50%;
            }
        }

        button>a {
            width: 100%;
            height: 100%;
        }
    </style>
    <title>Hung Hero</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2 shadow p-3 mb-5 bg-white rounded" style="width: 70%; margin-top: 10px; margin-bottom: 10px;">