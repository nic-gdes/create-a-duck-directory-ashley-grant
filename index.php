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
        <h1 class="home-page-title">Home Page</h1>
        <h3 class="home-page-subtitle">Featuring Amazing Ducks</h3>
        <div class="grid">
            <div class="grid-item">
                <h1>Barbie Duck</h1>
                <img class="grid-img" src="./assets/img/Barbie-Duck.png" alt="Rubber Duck that looks like Barbie">
                <p>This ducky's favorite food is Crumpets with Honey</p>
            </div>
            <div class="grid-item">
                <h1>Cowboy Duck</h1>
                <img class="grid-img" src="./assets/img/Cowboy-Duck.png" alt="Rubber Duck that looks like a cowboy">
                <p>This ducky's favorite foods are Beans and Bread</p>
            </div>
            <div class="grid-item">
                <h1>Einstein Duck</h1>
                <img class="grid-img" src="./assets/img/Einstein-Duck.png" alt="Rubber Duck that looks like Einstein">
                <p>This ducky's favorite snack are Strawberries</p>
            </div>
            <div class="grid-item">
                <h1>Art Duck</h1>
                <img class="grid-img" src="./assets/img/Art-Duck.png" alt="Rubber Duck that looks like an artist">
                <p>This ducky's favorite snack is Cheese and Crackers</p>
            </div>
            <div class="grid-item">
                <h1>OG Rubber Duck</h1>
                <img class="grid-img" src="./assets/img/Original-Duck.png" alt="Rubber Duck that looks like the original rubber duck">
                <p>This ducky's favorite food is Scrambled Eggs</p>
            </div>
            <div class="grid-item">
                <h1>Airforce Officer Duck</h1>
                <img class="grid-img" src="./assets/img/Airforce-Duck.png" alt="Rubber Duck that looks like a US Airforce Officer">
                <p>This ducky's favorite foods are Meatloaf and Chicken</p>
            </div>
        </div>
    </main>

    <!-- <footer> -->
        <?php include('./components/footer.php'); ?>
    <!-- </footer> -->