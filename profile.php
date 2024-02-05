<!DOCTYPE html>
<html lang="en">

<!-- <head> -->
    <?php
        $page_title = "Profile";
        include('./components/head.php');
    ?>
<!-- </head> -->

<body>

    <!-- <header> -->
        <?php include('./components/nav.php'); ?>
    <!-- </header> -->

<main>
        <h1 class="home-page-title">Duck Profile</h1>
        <h3 class="home-page-subtitle">Your New Duck is Added Below!</h3>
        <div class="grid">
            <div class="grid-item">
                <h1>Duck Name</h1>
                <img class="grid-img" src="./assets/img/placeholder-img.avif" alt="">
                <p>This ducky's favorite food is Lorem Ipsum</p>
            </div>