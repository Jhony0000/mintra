<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        font-family: Arial, Helvetica, sans-serif;
        box-sizing: border-box;
    }

    .contener {
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    input {
        height: 40px;
        width: 100px;
        background-color: white;
        margin-top: 50px;
    }

    p {
        margin-left: 40px;
        margin-bottom: 20px;
    }

    .button {
        height: 40px;
        width: 100px;
        background-color: green;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 10px;
        margin-top: 20px;

    }

    .button button {
        height: 40px;
        width: 100px;
        background-color: green;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 10px;
        margin-left: 440px;
    }

    .button1 {
        height: 40px;
        width: 100px;
        color: white;
        border: none;

    }

    .button1 button {
        height: 40px;
        width: 100px;
        background-color: green;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 10px;
        margin-top: 60px;

    }



    img {
        height: 340px;
        width: 350px;
        border-radius: 50%;
        border: 3px solid whitesmoke;
    }

    .next_btn {
        height: 40px;
        width: 100px;
        text-decoration: none;
        background-color: green;
        color: white;

        border: none;
        cursor: pointer;
        border-radius: 15px;
        font-size: 17px;
    }
</style>

<body>
    <div class="contener">
        <form action="add_profail.php" method="post" enctype="multipart/form-data">
            <div class="main">
                <p>Place Select Your Profail Photo</p>
                <div class="profail_photo">
                    <input type="file" name="file">
                    <?php
                    session_start();
                    if (isset($_POST['uplod'])) {

                        $filename = $_FILES["file"]['name'];
                        $tmpname = $_FILES["file"]['tmp_name'];
                        $destination = 'img/' . $filename;
                        move_uploaded_file($tmpname, $destination);

                        $_SESSION['img_name'] =   $filename;
                        echo " <img src='img/$_SESSION[img_name]' alt=''>
                        
                        ";
                        if (!empty($filename)) {
                            echo "<a href = 'index.php'><button type = 'button' class = 'next_btn'>Next</button></a>";
                        }
                    }

                    ?>

                </div>
                <div class="button1">
                    <button type='submit' name='uplod'>Uplod </button>
                </div>
                <div class="button">



                </div>
            </div>
        </form>
    </div>
</body>

</html>