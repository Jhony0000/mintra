<?php
include("database.php");
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
        height: 220px;
        width: 1200px;
        border: 1px solid pink;
        margin-left: 100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 30px;
    }

    #span {
        margin-left: 180px;
    }

    img {
        height: 100%;
        width: 170px;
    }

    button {
        margin-right: 10px;
        height: 40px;
        width: 80px;

    }

    .delete {
        background-color: red;
        border: 1px solid red;
        color: white;
        border-radius: 15px;
        cursor: pointer;
    }

    .edite {
        background-color: green;
        border: 1px solid green;
        color: white;
        border-radius: 13px;
    }

    .info3 {
        margin-left: -580px;

    }

    .price {
        margin-top: 20px;
    }

    a {
        color: white;
        font-size: 15px;
        text-decoration: none;
        padding: 10px;

    }
</style>

<body>
    <?php include("sidebar.php") ?>
    <div class="contener">
        <div class="main_main">
            <?php
            $sql = "SELECT * FROM bag";
            $qury = mysqli_query($con, $sql);

            while ($data = mysqli_fetch_assoc($qury)) {
                $product_img = $data['Img'];
                $product_name = $data['prodect_name'];
                $company_name = $data['Company_name'];
                $Total_price = $data['Total_price'];
                $coustomer_number = $data['Coustomer_number'];
                $Coustomer_address = $data['Address'];
                $Bikash_number = $data['Bikash_number'];
                $transation_id = $data['Transatino_id'];
                $coustomer_name = $data['Coustomer_name'];


                echo "<div class='content_info'>
                <img src = 'img/$product_img' alt=''>
                <div class='info3'>
                 <div class='name'>
                     <span id='span'>Coustomer Name =   $coustomer_name  </span>
                 </div>
                 <div class='Company Name'>
                     <span id='span'>Adress =   $Coustomer_address </span>
                 </div>
                 <div class='price'>
                     <span id='span'>Coustomer number =  $coustomer_number  </span>
                 </div>
                 <div class='discount'>
                     <span id='span'> Bikash number =  $Bikash_number </span>
                 </div>
                  <div class='discount'>
                     <span id='span'> transation ID =    $transation_id  </span>
                 </div>
                  <div class='discount'>
                     <span id='span'> Product Name =  $product_name </span>
                 </div>
                  <div class='discount'>
                     <span id='span'> Company Name =   $company_name </span>
                 </div>
                    <div class='discount'>
                     <span id='span'> Total Price =   $Total_price  </span>
                 </div>
                </div>
             <div class='button'>
                <form action='' method='get'>
                          <button name = 'edite'   class='edite'>Active </button>
                    <button  name = 'delete'  class='delete'>De Active</button>
                  </form>
             </div>
         </div>";
            }

            ?>

        </div>
    </div>

</body>


</html>