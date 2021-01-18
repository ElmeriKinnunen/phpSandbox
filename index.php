<!DOCTYPE html>
<html>
    <head>
    <meta charser="utf-8">
    <title>Page Title</title>
    </head>
<body>
    <?php 
        $charName = "You";
        echo("Hello $charName");
    
    ?>

    <form action="getForm.php" method="GET">
        Name: <input type="text" name="name"><br>
        Address: <input type="text" name="address"><br>
        Mail: <input type="email" name="email"><br>
        <input type="hidden" name="getForm" value="1"/>
        <input type="submit" value="Submit">
    </form>

    

</body>
</html>