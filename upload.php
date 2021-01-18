<?php
$dir = "images/";
$file = $dir . basename($_FILES["imageUpload"]["name"]);
$uploadStatus = 1;

if (isset($_POST["submit"])) {
  $isImage = getimagesize($_FILES["imageUpload"]["tmp_name"]);

    if($isImage !== false) {
    echo "Your upload type was " . $isImage["mime"] . " and it has been uploaded!. ";
    echo "Image info: " . implode (" ", $isImage) ;
    $uploadStatus = 1;
      move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $file);

    }else{
        echo "File you tried to upload wasn't a image file type!.";
        $uploadStatus = 0;
    }
}
?>

<a href="/www/index.php"> Go back </a>