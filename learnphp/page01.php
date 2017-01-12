<!DOCTYPE html>
<html>
<body>
<h1>My Second PHP page</h1>

<!-- PhP scripting starts here -->
<?php
    echo "<h4>Hello World!</h4>";

    $myString ="Hello World 2.";
    $x=20;
    $y = 3.5;
    $z = $x + $y;

    echo "<p>" . $myString . "<p>";
    echo "<p>" . $z . "<p>";

    $txt = "W3Schools.com";
    echo "I love $txt!";

    define("PI", "3.14159265358979823");
    echo "<h1>" . PI . "</h1>";

    echo 0x12;
?>

<!-- PhP scripting ends here -->

</body>
</html>