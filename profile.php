<?php


// Connect to db
require('./config/db.php');

if (isset($_POST['delete'])) {
    
    $id_to_delete = (int)$_POST['id_to_delete'];

    $sql_delete = "DELETE FROM ducks WHERE id='$id_to_delete'";

    mysqli_query($conn, $sql_delete);
    header ("Location: ./index.php");
}


$duck_is_live = false;

if (isset($_GET['id'])) {
    // Assign a variable to the id
    $id = htmlspecialchars($_GET['id']);

    // Get the duck info from the database
        // Connect to db
        require('./config/db.php');

        // Create a query to select the intended duck from the db
        $sql = "SELECT id, name, favorite_foods, bio, img_src FROM ducks WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        $duck = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);

        // print_r($duck);

        // Check is $duck has a valid id
        if(isset($duck['id'])) {
            // Switch on $duck_is_live
            $duck_is_live = true;
        }
}

?>

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
    <?php if ($duck_is_live) : ?>
        <h1 class="home-page-title">Duck Profile</h1>
        <h3 class="home-page-subtitle">Your New Duck is Added Below!</h3>
        <div class="grid">
            <div class="grid-item">
                <h1><?php echo $duck['name']; ?></h1>
                <img class="grid-img" src="<?php echo $duck['img_src']; ?>" alt="duck">
                <p><?php echo $duck['bio']; ?></p>
                <!-- <p><h3>Favorite Foods:</h3><php echo $duck['favorite_foods']; ?></p> -->
                <ul>
                    <?php $food_list = explode(",", $duck["favorite_foods"]); ?>
                    <?php foreach($food_list as $food) : ?>
                            <li><?php echo $food ?></li>
                        <?php endforeach ?>
                </ul>

                <form action="./profile.php" method="POST">
                    <input type="hidden" name="id_to_delete" value="<?php echo $duck['id']; ?>">
                    <input type="submit" name="delete" value="Delete Duck">
                </form>
                
            </div>
    <?php else : ?>
        <section class="no duck">
            <h1>Sorry, this duck does not exist</h1>
        </section>
    <?php endif ?>

<!-- <footer> -->
    <?php include('./components/footer.php'); ?>
<!-- </footer> -->
            