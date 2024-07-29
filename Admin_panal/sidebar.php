<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Sidebar</title>
</head>
<style>
    /* antoer css */

    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        background-color: #f3f5f9;
    }

    .wrapper {
        display: flex;
        position: relative;
    }

    .wrapper .sidebar {
        width: 200px;
        height: 100%;
        background: #4b4276;
        padding: 30px 0px;
        position: fixed;
        overflow: hidden;
        transition: 0.5s;
    }

    .wrapper .sidebar:hover {
        width: 300px;
    }

    .wrapper .sidebar h2 {
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        margin-bottom: 30px;
    }

    .wrapper .sidebar ul li {
        padding: 15px;
        border-bottom: 1px solid #bdb8d7;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    .wrapper .sidebar ul li a {
        color: #bdb8d7;
        display: block;
    }

    .wrapper .sidebar ul li a .fas {
        width: 25px;
    }

    .wrapper .sidebar ul li:hover {
        background-color: #594f8d;
    }

    .wrapper .sidebar ul li:hover a {
        color: #fff;
    }

    .wrapper .sidebar .social_media {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
    }

    .wrapper .sidebar .social_media a {
        display: block;
        width: 40px;
        background: #594f8d;
        height: 40px;
        line-height: 45px;
        text-align: center;
        margin: 0 5px;
        color: #bdb8d7;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }

    .wrapper .main_content {
        width: 100%;
        margin-left: 200px;
    }

    .wrapper .main_content .header {
        padding: 20px;
        background: #fff;
        color: #717171;
        border-bottom: 1px solid #e0e4e8;
    }

    .wrapper .main_content .info {
        margin: 20px;
        color: #717171;
        line-height: 25px;
    }

    .wrapper .main_content .info div {
        margin-bottom: 20px;
    }

    li {
        margin-top: 70px;
        margin-left: 10px;
    }

    a {
        margin-left: 10px;
    }

    #li {
        margin-left: -10px;
    }

    .div {
        display: none;
    }

    ul li:hover .div {
        display: block;
        margin-top: 40px;

    }

    @media (max-height: 500px) {
        .social_media {
            display: none !important;
        }
    }


    .img {
        height: 50px;
        width: 50px;
        border-radius: 50%;
        margin-left: 50px;

    }
</style>

<body>

    <div class="side_bir">
        <div class="wrapper">
            <div class="sidebar">
                <h2>Admin Panal</h2>
                <?php

                echo "<img class='img' src='img/$_SESSION[img_name]' alt=''>";
                ?>
                <ul>
                    <li><a href="index.php"><i class="ri-menu-line" id="li"></i>Dashbord</a></li>
                    <li><a href="#"><i class="ri-store-2-line" id="li"></i>E-comarce
                            <a href="insert_data.php" target="_self">
                                <div class="div">
                                    <span>Insert Data</span>
                                </div>
                            </a>
                            <a href="see_data.php">
                                <div class="div">See Data</div>
                            </a>
                        </a>
                    </li>
                    <form action="sidebar.php" method="post">
                        <li><a href="coustomer_order.php"><i class="ri-store-line" id="li"></i>ORDER</a>
                            <a href="active.php" target="_self">
                                <div class="div">
                                    <span>Active</span>
                                </div>
                            </a>
                            <a href="de_active.php">
                                <div class="div">De-active</div>
                            </a>
                            </a>

                        </li>
                        <li><a href="#"><i class="ri-mail-send-line" id="li"></i></i>INBOX</a></li>
                        <li><a href="#"><i class="ri-settings-line" id="li"></i>SETTENG</a></li>
                        <li><a href="login.php"><i class="ri-login-box-line" id="li"></i><input type="hidden" name="logout">
                                Log out</a>
                        </li>
                    </form>

                </ul>

            </div>
        </div>
</body>

</html>