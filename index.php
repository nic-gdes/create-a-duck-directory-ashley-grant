<?php
    // include database connection
    include('./config/db.php');

    // create SQL Query

    // query the DB and add the result to a php array
?>

<!DOCTYPE html>
<html lang="en">

<!-- <head> -->
    <?php
        $page_title = "Home";
        include('./components/head.php');
    ?>
<!-- </head> -->

<body>

    <!-- <header> -->
        <?php include('./components/nav.php'); ?>
    <!-- </header> -->
    
    <main>
        <h1 class="home-page-title">Welcome to the Home Page</h1>
        <h3 class="home-page-subtitle">Featuring Amazing Ducks</h3>
        <div class="grid">
            <div class="grid-item">
                <h1>Barbie Duck</h1>
                <img class="grid-img" src="./assets/img/Barbie-Duck.png" alt="Rubber Duck that looks like Barbie">
                <ul>
                    <li>This ducky's favorite food is Crumpets with Honey</li>
                </ul>
            </div>
            <div class="grid-item">
                <h1>Cowboy Duck</h1>
                <img class="grid-img" src="./assets/img/Cowboy-Duck.png" alt="Rubber Duck that looks like a cowboy">
                <ul>
                    <li>This ducky's favorite foods are Beans and Bread</li>
                </ul>
            </div>
            <div class="grid-item">
                <h1>Einstein Duck</h1>
                <img class="grid-img" src="./assets/img/Einstein-Duck.png" alt="Rubber Duck that looks like Einstein">
                <ul>
                    <li>This ducky's favorite snack are Strawberries</li>
                </ul>
            </div>
            <div class="grid-item">
                <h1>Art Duck</h1>
                <img class="grid-img" src="./assets/img/Art-Duck.png" alt="Rubber Duck that looks like an artist">
                <ul>
                    <li>This ducky's favorite snack is Cheese and Crackers</li>   
                </ul>
            </div>
            <div class="grid-item">
                <h1>OG Rubber Duck</h1>
                <img class="grid-img" src="./assets/img/Original-Duck.png" alt="Rubber Duck that looks like the original rubber duck">
                <ul>
                    <li>This ducky's favorite food is Scrambled Eggs</li>
                </ul>
            </div>
            <div class="grid-item">
                <h1>Airforce Officer Duck</h1>
                <img class="grid-img" src="./assets/img/Airforce-Duck.png" alt="Rubber Duck that looks like a US Airforce Officer">
                <ul>
                    <li>This ducky's favorite foods are Meatloaf and Chicken</li>
                </ul>
            </div>
        </div>
    </main>

    <!-- <footer> -->
        <?php include('./components/footer.php'); ?>
    <!-- </footer> -->