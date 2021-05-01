<?

    $msg = "";
    // if uload button is pressed
    if (isset($_POST["upload"])) {
        // the path to store the uploaded image
        $target = "image/".basename($_FILES['image']['name']);
        
        // connect to the database
        $db = mysqli_connect("localhost", "root", "", "b");

        // Get all the submitted data from the form
        $image = $_FILES['image']['name'];
        $text = $_POST["text"];

        $sql = "INSERT INTO new (image, title) VALUES ('$image', '$text')";
        mysqli_query($db, $sql);// stores the submitted data info the database: images

        // New let's move the uploaded image into the folder: images
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }
        else{
            $msg = "There was a problem uploading images";
        }
}


?>










<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="wrapper conteiner">
    <?php

        //$db = mysqli_connect("localhost", "root", "", "b");
        //$sql = "SELECT * FROM new";
        //$result = mysqli_query($db, $sql);
        //while ($row = mysqli_fetch_array($result)) {
        //    echo "<div id='img_div'>";
        //        echo "<img src='images/".$row["image"]."'class='img_info'>";
        //        echo "<p>".$row['title']."</p>";
        //    echo "</div>";
        //}
    
    ?>
        <form method="post" action="index.php" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <div>
                <input type="file" name="image">
            </div>
            <div>
                <input type="text" name="text" placeholder="Name">
            </div>
            <div>
                <input type="submit" name="upload" value="Upload Image">
            </div>
        </form>
</div>
</body>
</html>