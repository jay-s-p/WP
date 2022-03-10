<?php
if (isset($_POST["submit"])) {
    if (!empty($_FILES["fileToUpload"]["name"])) {
        $target_dir = "images/";
        if (!file_exists($target_dir))
            mkdir($target_dir);
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            echo "File = " . $_FILES["fileToUpload"]["name"] . " uploaded Successfully";
        } else {
            echo "File is not an image.";
        }
    } else {
        echo "Select file first!";
    }
}
?>
<html>
<body>
    <br><br>
    <form method="post" enctype="multipart/form-data">
        Select a file :
        <input type="file" name="fileToUpload"><br>
        <input type="submit" name="submit" value="Upload">
    </form>
    <br>
    <?php

    $fileList = glob('images/*');
    for ($i = 0; $i < count($fileList); $i++)
        echo "download <a href=\"" . $fileList[$i] . "\" download>" . basename($fileList[$i]) . "</a><br>";
    ?>
</body>
</html>