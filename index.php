<?php
    // include database connection
    include('./config/db.php');

    // create SQL Query
    $sql = "SELECT name,favorite_foods,img_src FROM ducks";

    // query the DB and add the result to a php array
    $result = mysqli_query($conn,$sql);
    $ducks = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free result from memory and close SQL coonnection
    mysqli_free_result($result);
    mysqli_close($conn);

    // foreach($ducks as $duck) {
    //     echo $duck['name'];
    // }
    // print_r($ducks); to show data

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

            <?php foreach($ducks as $duck) : ?>
                <div class="grid-item">
                    <h1><?php echo $duck['name']?></h1>

                    <img class="grid-img" src="<?php echo $duck["img_src"]; ?>" width="300" height="300" alt="Rubber Duck that looks like Barbie">
                    <?php
                    // Break duck's favorite foods into an array by comma
                    $food_list = explode(",", $duck["favorite_foods"]);
                    // print_r($food_list);
                    ?>
                    <ul>
                        <?php foreach($food_list as $food) : ?>
                            <li><?php echo $food ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endforeach ?>

        </div>
    </main>

    <!-- <footer> -->
        <?php include('./components/footer.php'); ?>
    <!-- </footer> -->
    <!-- a good thing to remember that Brian said is to include width and height for image on card because it keeps the content in the card at the same height/alignment. -->