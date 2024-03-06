<?php include 'templates/header.php';?>
<?php include 'templates/nav.php';?>

<div class='container'>

    <?php

        if (isset($_GET["num1"])) {
            $user = $_GET["num1"];

            $sum = 0;
            for ($i = 0; $i <= $user; $i++) {
                $sum += $i;
            }
            echo "Sum between 1 to $user is: $sum";
        }

        else {
            echo"<p>Missing variable name parameter. Variable ‘num1’ does not exist.</p>";
        }
    ?>

<?php include 'templates/footer.php';?>