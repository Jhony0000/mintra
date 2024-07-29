<?php
session_start();
include("database.php");
if (isset($_GET["id"]) && isset($_GET['img']) && isset($_GET['curent_price']) && isset($_GET['product_name']) && isset($_GET['company_name']) && isset($_GET['discount_price'])) {
    $id = $_GET["id"];
    $img = $_GET['img'];
    $product_name = $_GET['product_name'];
    $company_name = $_GET['company_name'];
    $current_price = $_GET['curent_price'];
    $discount_price = $_GET['discount_price'];

    $_SESSION['img'] = $img;
    $_SESSION['product_name']  = $product_name;
    $_SESSION['comapny_name']  = $company_name;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="All.css" />
    <title>Bag</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>
<style>
    .contaneir_section_add_to_bag {
        display: flex;
        justify-content: space-around;
    }

    .add_to_bag_items {
        width: 900px;
        border: 2px solid whitesmoke;
        border-radius: 10px;
        margin-top: 100px;
    }

    .place_order_section {
        height: 400px;
        width: 500px;
        background-color: white;
        border: 2px solid whitesmoke;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        margin-top: 100px;
    }

    .product_holder {
        display: flex;
        height: 150px;
        width: 700px;
        background-color: white;
        border: 1px solid whitesmoke;
        margin-top: 50px;
        margin-left: 100px;
        margin-bottom: 50px;
    }

    .footer_section {
        display: flex;
        justify-content: space-evenly;
        height: 500px;
        width: 100%;
        background-color: rgb(255, 252, 252);
        margin-top: 80px;
    }

    .price_detels {
        margin-top: 70px;
        padding: 10px;
    }

    .total_mrp {
        padding: 10px;
        display: flex;
        justify-content: space-between;
    }

    .discount_mrp {
        padding: 10px;
        display: flex;
        justify-content: space-between;
    }

    .coverience_mrp {
        padding: 10px;
        display: flex;
        justify-content: space-between;
    }

    .emty_line_totale_price {
        border: 1px solid rgb(146, 143, 143);
        margin-left: 10px;
        margin-right: 10px;
    }

    .total_amount {
        display: flex;
        justify-content: space-between;
        padding: 10px;
        margin-top: 10px;
        font-weight: 400;
    }

    .button_place_order {
        padding: 10px;
    }

    .button_place_order button {
        width: 480px;
        height: 40px;
        background-color: rgb(247, 37, 142);
        border: none;
        color: white;
        font-weight: 500;
        cursor: pointer;
        font-size: 16px;
    }

    .footer_section {
        border-top: 2px solid whitesmoke;
    }

    .footer_shping_section {
        margin-top: 50px;
    }

    .footer_shping_section p {
        margin-top: 5px;
        cursor: pointer;
    }

    .discount_on_marp {
        color: rgb(0, 173, 0);
    }

    /* product css */
    .name_product {
        display: flex;
        justify-content: space-between;
    }

    .name_product span {
        margin-left: 10px;
        margin-top: 10px;
        font-weight: 600;
    }

    .discribe_product_item_jersey {
        margin-left: 10px;
        margin-top: -7px;
    }

    .price_item_detels {
        display: flex;
        gap: 10px;
        margin-top: 10px;
        margin-left: 10px;
    }

    .price_item {
        font-weight: 500;
    }

    .price_dicount_item {
        font-size: 15px;
        text-decoration: line-through;
        margin-top: 2px;
        color: rgb(188, 183, 183);
    }

    .discount_count {
        color: chocolate;
    }

    .delivery_time {
        margin-left: 10px;
        font-weight: 700;
    }

    .delevry_time {
        margin-top: 12px;
        display: flex;
        gap: 7px;
    }

    .dalivery_date {
        display: flex;
        gap: 12px;
        margin-left: 10px;
        margin-top: 7px;
    }



    /* product holder item css start form */

    .product_holder img {
        height: 100%;
        width: 140px;
    }

    .product_holder span {
        margin: 10px;
        font-weight: 600;
    }

    .product_holder p {
        margin-left: 10px;
    }

    .item {
        margin-top: 20px;
        display: flex;
    }

    #p {
        margin-top: 11px;
    }

    .div3 {
        margin-top: 20px;
    }

    .name_product i {
        font-size: 30px;
        margin-left: 517px;
        margin-top: -117px;
        cursor: pointer;
    }

    .input {
        margin-left: 350px;
        width: 20px;
        margin-top: -15px;
    }

    .input input {
        width: 50px;
        height: 30px;
        font-size: 20px;
    }
</style>

<body>
    <?php include("header.php") ?>
    <main>
        <div class="contaneir_section_add_to_bag">
            <div class="add_to_bag_items">
                <div class="product_holder ">
                    <img src="Admin_panal/img/<?php echo $img ?>" alt="">
                    <div class="div3">
                        <div class="div">
                            <div class="div">
                                <span><?php echo $product_name  ?></span>
                                <p><?php echo $company_name ?></p>
                                <div class="input">
                                    <input type="number" min='1' max='5' value="<?php echo $by = 1 ?>">
                                </div>
                                <div class="item">
                                    <span name='cournt_price'>Taka <?php echo $current_price ?></span>
                                    <p id="p" class='discount_price' class='discount_price'>Taka <?php echo $discount_price ?></p>
                                    <p id="p" name='discount_offer' class='discount_offer'>(discount 45% 0ff)</p>
                                </div>

                                <div class="name_product ">
                                    <i class="ri-close-large-fill"></i>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="place_order_section">
                <div class="price_detels"><span>PRICE DETALES (items)</span></div>
                <div class="total_mrp">
                    <span>Total MRP</span>
                    <span>Tk <?php echo $current_price ?></span>
                </div>
                <div class="discount_mrp">
                    <span>Discount on MRP</span>
                    <span class="discount_on_marp">.TK <?php echo $discount_price ?></span>
                </div>
                <div class="coverience_mrp">
                    <span>Converience Fee</span>
                    <span>Tk 120</span>
                </div>
                <div class="emty_line_totale_price"></div>
                <div class="total_amount">
                    <h3>Total Amount</h3>
                    <h3>
                        Tk <?php

                            $total = $current_price   + 120;
                            echo $total;
                            $_SESSION['total_price'] = $total;
                            ?>
                    </h3>
                </div>
                <form action="img/complete_order.php" method="post">
                    <div class="button_place_order">
                        <button type="submit" name="submit" value="submit">PLACE ORDER</button>
                    </div>
                </form>
            </div>

        </div>

    </main>
    <?php include("footer.php") ?>
</body>

</html>