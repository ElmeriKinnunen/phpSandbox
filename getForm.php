<html>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>
<br>
<a href="/www/index.php"> Go back </a>
<br>
<br>

<?php
    $name = ($_GET["name"]);
    $email = ($_GET["email"]);
    $address = ($_GET["address"]);

        echo ("Here is all the information in a JSON:");
        $info = array ("$name", "$email", "$address" );
        echo json_encode($info);
?>
<br>
<br>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Do you want to upload some random image too? Do it here!
        <br>
        Select image you want to upload:
        <br>
            <input type="file" name="imageUpload" id="imageUpload">
            <input type="submit" value="Upload" name="submit">
    </form>
</body>
</html>