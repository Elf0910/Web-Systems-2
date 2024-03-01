<?php include 'templates/header.php';?>
<?php include 'templates/nav.php';?>

<div class='container'>

    <?php
    
    if (isset($_GET["num1"]) && isset($_GET["num2"])) {
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];

        echo "Addition: $num1 + $num2 = ", $num1 + $num2; 
        echo "<br>Subraction: $num1 - $num2 = ", $num1 - $num2;
        echo "<br>Multiplication: $num1 * $num2 = ", $num1 * $num2;
        echo "<br>Division: $num1 / $num2 = ", $num1 / $num2;
    }

    else {
        echo"<p>Missing variable name parameters. Variables ‘num1’ and ‘num2’ does not exist.</p>";
    }
    
    ?>

<?php include 'templates/footer.php';?>