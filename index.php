<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-comarse store</title>
    <link rel="stylesheet" href="All.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="Rasponsive.css" />
</head>
<style>
    a {
        text-decoration: none;
        color: black;
        cursor: pointer;
    }
</style>

<body>
    <header>
        <?php include("header.php") ?>
    </header>

    <main>
        <div class="container">
            <?php
            $sql = "SELECT * FROM product_item";
            $qury = mysqli_query($con, $sql);
            while ($data = mysqli_fetch_assoc($qury)) {
                $id = $data['ID'];
                $Product_name = $data['Product_name'];
                $company_name = $data['Company_name'];
                $Courent_price = $data['Courent_price'];
                $discount_price = $data['Discount_price'];
                $img = $data['Img'];

                echo "  
                <input type='hidden'>
                <div class='product_section'>
                    <img class = 'item_img'  src='Admin_panal/img/$img ' alt='item image' />
                    <div class='rating_product'>5.5k ⭐ | 3000 </div>
                    <h3 >$Product_name</h3>
                    <p > $company_name </p>
                    <div class='card_pnale'>
                        <div class='price'>
                            <span >	৳ $Courent_price</span>
                            <p  class='discount_price'>	৳ $discount_price</p>
                            <p  class='discount_offer'>(discount 45% 0ff)</p>
                        </div>
                     
                            <div class = 'button'>
                                <a href='bag.php?id=$id & img=$img & curent_price=$Courent_price & product_name=$Product_name & company_name=$company_name & discount_price=$discount_price' method='get'  class='add_button'> <button name='order'>
                               Order</button>    </a>
                            </div> 
                     

                    </div>
                </div>
   ";
            }
            ?>
        </div>
    </main>
    <footer>
        <?php include("footer.php") ?>
    </footer>
    <script>
        let text = "jony jony jony 'jon' 'name' "
        console.log(text.length);
    </script>
</body>

</html>