<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login_page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    .main {
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .contener {
        margin-top: 50px;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 20px;
        justify-content: center;
    }

    input {
        margin-left: 17px;
        width: 800px;
        margin-top: 20px;
        height: 50px;
    }

    label {
        margin: 20px;
        margin-left: 20px;
    }

    button {
        margin: 30px;
        margin-left: 350px;
        height: 50px;
        width: 100px;
    }

    h1 {
        margin-bottom: 30px;
    }

    p {
        color: red;
    }

    a {
        text-decoration: none;
    }

    h5 {
        color: green;
    }

    /* //////////////////////// */
</style>

<body>
    <div class="main">
        <div class="contener">
            <h1>Edite Your Data</h1>
            <?php
            include("database.php");
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                if (isset($_GET['img'])) {
                    $img = $_GET['img'];
                }
                if (isset($_GET['pn'])) {
                    $product_name = $_GET['pn'];
                }
                if (isset($_GET['cn'])) {
                    $companny_name = $_GET['cn'];
                }
                if (isset($_GET['Dp'])) {
                    $discount_price = $_GET['Dp'];
                }
                if (isset($_GET['Cp'])) {
                    $courrent_price = $_GET['Cp'];
                }
            }

            if (isset($_GET['submit'])) {
                $P_name = $_GET['product_name'];
                $C_name = $_GET['Company_Name'];
                $C_price = $_GET['Courrent_Price'];
                $D_price = $_GET['Discount_Price'];

                $sql = "UPDATE product_item SET Company_name = '$C_name',Product_name =  '$P_name',Courent_price = '$C_price',Discount_price = '$D_price' WHERE ID =  $id";
                $qury = mysqli_query($con, $sql);
                if ($qury == true) {
                    echo "<script>alert('UPDATE SUCCESSFULLY')</script>";
                    header("location:see_data.php");
                    echo "<h5>Edite Success</h5>";
                } else {
                    echo "faild Eadite";
                }
            }

            ?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get" enctype="multipart/form-data">
                <div class="col-sm-15">
                    <input type='text' value="<?php echo $id; ?>" name='id' class='form-control' id='inputEmail3' placeholder="ID" id="input">
                </div>
                <div class="col-sm-15">
                    <input type='text' value="<?php echo $product_name; ?>" name='product_name' class='form-control' id='inputEmail3' placeholder="Product Name" id="input">
                </div>
                <div class="col-sm-15">
                    <input type='text' value="<?php echo  $companny_name; ?>" name='Company_Name' class='form-control' id='inputEmail3' placeholder="Company Name" id="input">
                </div>
                <div class="col-sm-15">
                    <input type='number' value="<?php echo $courrent_price; ?>" name='Courrent_Price' class='form-control' id='inputEmail3' placeholder="Courrent Price" id="input">
                </div>

                <div class="row mb-3">
                    <div class="col-sm-15">
                        <input type='number' value="<?php echo $discount_price; ?>" name='Discount_Price' class='form-control' id='inputEmail3' placeholder="Discount Price" id="input">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-15">
                        <input type='file' name='my_file' id='inputEmail3' id="input">
                    </div>
                </div>
                <button type="submit" value="submit" name="submit" class="btn btn-primary">Edite</button>
            </form>


        </div>
    </div>
</body>

</html>