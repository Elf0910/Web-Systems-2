<?php include 'templates/header.php';?>
<?php include 'templates/nav.php';?>

<div class='container'>

    <?php

    if (isset($_GET['message'])) {
        $userInput = $_GET['message'];
        $result = str_word_count($userInput);

        echo '"' . $userInput . '"' . " has $result word/s.";
    }
    else {
        echo"Missing variable name paramter. Variable ‘message’ does not exist.";
    }
    ?>

<?php include 'templates/footer.php';?>