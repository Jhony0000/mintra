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

    h4 {
        color: green;
    }

    /* //////////////////////// */
</style>

<body>
    <?php include("sidebar.php") ?>
    <div class="main">
        <div class="contener">
            <h1>Insert Your Data</h1>
            <?php
            include("database.php");
            if (isset($_POST['product_name']) && isset($_POST['Company_Name']) && isset($_POST['Courrent_Price']) && isset($_POST['Discount_Price'])) {

                $product_name = $_POST['product_name'];
                $company_name = $_POST['Company_Name'];
                $Current_price = $_POST['Courrent_Price'];
                $Discount_price = $_POST['Discount_Price'];

                $filename = $_FILES["my_file"]['name'];
                $tmpname = $_FILES["my_file"]['tmp_name'];
                $destinmation = 'img/' . $filename;
                move_uploaded_file($tmpname, $destinmation);

                if (!empty($product_name) && !empty($company_name) && !empty($Current_price) && !empty($Discount_price) && !empty($filename)) {
                    $sql = "insert into product_item (Company_name,Product_name,Courent_price,Discount_price,Img)values ('$company_name','$product_name',' $Current_price',' $Discount_price','$filename')";
                    $qury = mysqli_query($con, $sql);
                    echo "<h5>Successfully data insert </h5>";
                } else {
                    echo "<p>Empty</p>";
                }
            }

            ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <div class="col-sm-15">
                    <input type='text' name='product_name' class='form-control' id='inputEmail3' placeholder="Product Name" id="input">
                </div>

                <div class="row mb-3">
                    <div class="col-sm-15">
                        <input type='text' name='Company_Name' class='form-control' id='inputEmail3' placeholder="Company Name" id="input">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-15">
                        <input type='number' name='Courrent_Price' class='form-control' id='inputEmail3' placeholder="Courrent Price" id="input">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-15">
                        <input type='number' name='Discount_Price' class='form-control' id='inputEmail3' placeholder="Discount Price" id="input">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-15">
                        <input type='file' name='my_file' id='inputEmail3' id="input">
                    </div>
                </div>
                <button type="submit" value="submit" name="submit" class="btn btn-primary">Insert</button>
            </form>


        </div>
    </div>
</body>

</html>