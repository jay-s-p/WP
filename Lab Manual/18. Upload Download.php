<!-- 18. Write a PHP script for file upload and download. -->
<?php
if (isset($_POST['submit'])) {
    $file_name = $_FILES['fileToUpload']['name'];
    if ($file_name == "")
        echo "Choose a file first";
    else {
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "" . $file_name);
        echo $file_name . " Uploaded Successfully";
    }
} else if(isset($_POST['download'])){
    
    // Hji baki chhe Downlaod nu
    
    // $file_url = 'simple.txt';
    // header('Content-Type: application/octet-stream');  
    // header("Content-Transfer-Encoding: utf-8");   
    // header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
    // readfile($file_url);  

}
?>
<html>

<body>
    <form method="POST" enctype="multipart/form-data">
        Upload : <input type="file" name="fileToUpload"><br>
        <input type="submit" name="submit" value="Upload File"><br><br>
        Download : <input value="Download" name="download" type="submit">
    </form>
</body>

</html>