<?php
    //check for POST
    if(isset($_POST['submit'])) {

        // create error array
        $errors = array(
            "name" => "",
            "favorite_foods" => "",
            "bio" => ""
        );

        $name = htmlspecialchars($_POST["name"]);
        $favorite_foods = htmlspecialchars($_POST["favorite_foods"]);
        $bio = htmlspecialchars($_POST["bio"]);

        if(preg_match('/[a-zA-Z\s]+/',$name)) {
            echo "there is a name";
        } else {
            echo "the name has the wrong characters";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">

<?php $page_title = "Create A Duck";
    include('./components/head.php');
?>

<?php
// if (isset($_POST['submit'])) {
    // $name = htmlspecialchars($_POST(['name']));
    // $food = htmlspecialchars($_POST(['food']));
    // $message = htmlspecialchars($_POST(['message']));
// 
    // echo $name . ", " . $food . ", " . $message;
// }
?>

<body>

    <!-- <header> -->
    <?php include('./components/nav.php'); ?>
    <!-- </header> -->

    <h1 class="home-page-title">Create A Duck!</h1>
    <h3 class="home-page-subtitle">Describe Below</h3>
</body>
</html>

<!-- FORM -->
<form class="form-style" action="create-duck.php" method="POST">
    <div class="form-intro">
        <h1>Want A New Duck?</h1>
        <p>Fill out this form to add a new duck!</p>
    </div>
    <div class="input-group">
        <label for="name">Duck's Name</label>
        <input class="form-item" type="text" id="name" name="name" placeholder="Charli" required />
    </div>
    <div class="input-group">
        <label for="foods">Duck's Favorite Foods (Separate multiple with a comma)</label>
        <input class="form-item" type="text" id="foods" name="favorite_foods" placeholder="eggs, tofu, jam" required />
    </div>
    <div class="input-group">
        <label for="image">Duck's Picture</label>
        <input class="form-item" type="file" />
    </div>
    <div class="input-group">
        <label for="bio">Biography</label>
        <textarea class="form-item" name="bio" id="bio" cols="30" rows="10" placeholder="Talk about your duck..." required></textarea>
        <!-- <input type="color" />
        <input type="date" />
        <input type="number" />
        <input type="tel" /> -->
    </div>
    <div class="input-group">
        <input type="submit" id="submit" name="submit" value="Add Duck" />
    </div>
</form>

    <!-- <footer> -->
        <?php include('./components/footer.php'); ?>
    <!-- </footer> -->