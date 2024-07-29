<?php
include("database.php");


if (isset($_GET["delete"])) {
    $delete = $_GET["delete"];

    $sql = "DELETE FROM product_item WHERE ID =  $delete ";
    if ($qury = mysqli_query($con, $sql) == true) {
        header('location:see_data.php');
    }
}

?>

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
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif
    }

    .contener {
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        margin-top: 70px;
    }

    .main_main {
        height: 150px;
        width: 1000px;
    }

    .content_info {
        height: 150px;
        width: 1200px;
        border: 1px solid pink;
        margin-left: 100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 30px;
    }

    #span {
        margin-left: 40px;
    }

    img {
        height: 100%;
        width: 130px;
    }

    button {
        cursor: pointer;
        height: 40px;
        width: 80px;

    }

    .delete {
        background-color: red;
        border: 1px solid red;
        color: white;
        border-radius: 15px;
        margin-left: 20px;
    }

    .edite {
        background-color: green;
        border: 1px solid green;
        color: white;
        border-radius: 13px;
        margin-bottom: 15px;
    }

    .info3 {
        margin-left: -580px;

    }

    .price {
        margin-top: 20px;
    }

    .button a {
        color: white;
        font-size: 15px;
        text-decoration: none;
        margin: 20px;
    }
</style>


<body>
    <?php include("sidebar.php") ?>
    <div class="contener">
        <div class="main_main">
            <?php
            $sql = "SELECT * FROM product_item";
            $qury = mysqli_query($con, $sql);


            while ($data = mysqli_fetch_assoc($qury)) {
                $Product_name = $data['Product_name'];
                $company_name = $data['Company_name'];
                $id = $data['ID'];
                $Courent_price = $data['Courent_price'];
                $discount_price = $data['Discount_price'];
                $img = $data['Img'];

                echo "<div class='content_info'>
                   <img src='img/$img' alt=''>
                <div class='info3'>
                    <div class='id'>
                        <span id='span'> Id =  $id </span>
                    </div>
                    <div class='name'>
                        <span id='span'>Name =   $Product_name </span>
                    </div>
                    <div class='Company Name'>
                        <span id='span'>Company =  $company_name </span>
                    </div>
                    <div class='price'>
                        <span id='span'>Courent Price =   $Courent_price </span>
                    </div>
                    <div class='discount'>
                        <span id='span'>Discount Price = $discount_price</span>
                    </div>
                </div>
                <div class='button'>
                 <a href='Edite.php?id=$id & img=img/$img & pn=$Product_name & cn=$company_name & Cp=$Courent_price & Dp=$discount_price  '>        
                      <button name = 'edite' class='edite'>Edite</button>
                 </a>
                  <form action='' method='get'>
                       <button  name = 'delete' value = '$id' class='delete'>Delete</button>
                  </form>
                </div>
            </div>";
            }
            ?>

        </div>
    </div>
</body>


</html>