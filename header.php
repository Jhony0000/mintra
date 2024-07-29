<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="All.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="Rasponsive.css" />
</head>
<style>
    @media (max-width : 1000px) {
        .button_action {
            display: none;
        }

        #bag_icon {
            display: none;
        }

        .bag_item_count {
            display: none;
        }


        .menu {
            display: none;
        }

        .search_input {
            min-width: 40vw;
            margin-left: -50vw;
        }

        @media (max-width : 320px) {
            .search_input {
                width: 10vh;
                margin-left: -270vw;
                margin-top: 20px;
            }


        }
    }
</style>

<body>
    <header>
        <div class="logo_container">
            <a href="index.php"><img class="myntra_home" src="img\myntra_logo.webp" alt="Myntra Home" /></a>
        </div>
        <nav class="nav_bar">
            <a class="menu" href="men.php">Men</a>
            <a class="menu" href="#">Women</a>
            <a class="menu" href="#">Kids</a>
            <a class="menu" href="#">Home & Living</a>
            <a class="menu" href="#">Beauty</a>
        </nav>
        <div class="search_icon_nav"></div>
        <div class="search_bar" id="Searh_bar_nav">

            <input class="search_input" id="nav_input" placeholder="Search for products, brands and more" />
        </div>
        <div class="action_bar">
            <div class="button_action"><button style="border: 2px solid whitesmoke ;">Sgin up</button></div>
            <a class="bag_to_card" href="">
                <i id="bag_icon" class="ri-shopping-cart-line"></i>
                <span name='quntati' min='1' max='20' class="bag_item_count">0</span>
            </a>
        </div>
    </header>
</body>

</html>