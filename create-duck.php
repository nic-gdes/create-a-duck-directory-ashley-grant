<?php
    //check for POST
    if(isset($_POST['submit'])) {

        // create error array
        $errors = array(
            "name" => "",
            "favorite_foods" => "",
            "bio" => "",
            "img_src" => ""
        );

        $name = htmlspecialchars($_POST["name"]);
        $favorite_foods = htmlspecialchars($_POST["favorite_foods"]);
        $bio = htmlspecialchars($_POST["bio"]);
        $img_src = $_FILES["img_src"]["name"];



        // check if the name exists
        if(empty($name)) {

            // if it doesn't throw error "required"
            $errors['name'] = "A name is required.";
        } else {
            // if it does, check against regex

            if(!preg_match('/^[a-z\s]+$/i', $name)) {
                // if fails regex, throw "incorrect formatting error"
                $errors["name"] = "The name has illegal characters";
            }
        }


        // check if favorite foods exists
        if(empty($favorite_foods)) {

            // if it doesn't throw error "required"
            $errors['favorite_foods'] = "No favorite foods? You got a hungry duck.";

        } else {
            // if it does, check against regex

            if(!preg_match('/^[a-z,\s]+$/i', $favorite_foods)) {

                // if fails regex, throw "incorrect formatting error"
                $errors['favorite_foods'] = "Favorite foods must be a comma separated list.";

            }

        }



        if(preg_match('/^[a-z\s]+$/i', $name)) {
            // echo "this name is formatted correctly";
        } else {
            $errors["name"] = "The name has illegal characters";
        }

        if(preg_match('/^[a-z,\s]+$/i', $favorite_foods)) {
            // echo "The foods is formatted correctly";
        } else {
            $errors["favorite_foods"] = "Favorite foods must be a comma separated list";
        }

        // check if bio is empty
        if(empty($bio)) {
            //error if so
            $errors["bio"] = "A bio is required.";
        }

        // print_r($errors);



        // Handle file upload target directory
        $target_dir =  "./assets/img/";

        // Target uploaded image file
        $image_file = $target_dir . basename($_FILES["img_src"]["name"]);

        // Get uploaded file extention so we can test to make sure it's an image
        $image_file_type = strtolower(pathinfo($image_file,PATHINFO_EXTENSION));

        // Test image for errors
            // image exists
            if (empty($img_src)) {
                $errors["img_src"] = "An image is required.";
            } else {

            // Check that the image file is an actual image
            $size_check = @getimagesize($_FILES["img_src"]["tmp_name"]);
            $file_size = $_FILES["img_src"]["size"];

            if(!$size_check) {
                // check if file is an image
                $errors["img_src"] = "File is not an image.";
            } else if ($file_size > 500000) {
                // file size limit
                $errors["img_src"] = "Filesize limit exceeded. (cannot be larger than 500kb)";
            } else if(
                // file type (if it's an image)
                $image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "jpeg" && $image_file_type != "gif" && $image_file_type != "webp") {
                $errors["img_src"] = "Sorry, only JPG, JPEG, PNG, GIF, or WEBP files are allowed.";
            } else if (
                // check if file already exists so not reuploads
                move_uploaded_file($_FILES["img_src"]["tmp_name"], $image_file)) {
                //file uploaded successfully
            } else  {
                $errors["img_src"] = "Sorry, there was an error uploading your file.";
            }

        }

 
        if(!array_filter($errors)) {
            // everything is good; form is valid
            
            // connect to the database
            require('./config/db.php');

            // build sql query
            $sql = "INSERT INTO ducks (name, favorite_foods, bio, img_src) VALUES ('$name', '$favorite_foods', '$bio', '$image_file')";

            // execute query in mysql
            mysqli_query($conn, $sql);

            // echo "Query is successful. Added: " . $name . " to database.";
            
            
            // load homepage
            header("Location: ./index.php");
        } else {
            // if there are any errors
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
<form class="form-style" action="create-duck.php" method="POST" enctype="multipart/form-data">
    <div class="form-intro">
        <h1>Want A New Duck?</h1>
        <p>Fill out this form to add a new duck!</p>
    </div>
    <div class="input-group">
        <label for="name">Duck's Name</label>

        <?php
            if (isset($errors['name'])) {
                echo "<div class='error'>" . $errors["name"] . "</div>";
            }
        ?>

        <input
        class="form-item"
        type="text"
        id="name"
        name="name"
        placeholder="Charli"
        value="<?php if(isset($name)) { echo $name; } ?>" 'required />
    </div>
    <div class="input-group">
        <label for="foods">Duck's Favorite Foods (Separate multiple with a comma)</label>

        <?php
            if (isset($errors['favorite_foods'])) {
                echo "<div class='error'>" . $errors["favorite_foods"] . "</div>";
            }
        ?>

        <input class="form-item" type="text" id="foods" name="favorite_foods" placeholder="eggs, tofu, jam" value="<?php if(isset($favorite_foods)) { echo $favorite_foods; } ?>" 'required />
    </div>
    <div class="input-group">
        <label for="image">Duck's Picture</label>

        <?php
            if (isset($errors['img_src'])) {
                echo "<div class='error'>" . $errors["img_src"] . "</div>";
            }
        ?>

        <input class="form-item" type="file" name="img_src"/>
    </div>
    <div class="input-group">
        <label for="bio">Biography</label>

        <?php
            if (isset($errors['bio'])) {
                echo "<div class='error'>" . $errors["bio"] . "</div>";
            }
        ?>

        <textarea class="form-item" name="bio" id="bio" cols="30" rows="10" placeholder="Talk about your duck..." 'required></textarea>
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