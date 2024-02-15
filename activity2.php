<?php include 'templates/header.php';?>
<?php include 'templates/nav.php';?>

<div class="container">

    <?php 
        echo "<h2>Activity 2 PHP Variables</h2>";

        // Problem 1
        echo '<h3><strong>Problem 1</strong></h3>
            Write a program to print “Hello World” using echo.
            <h3>Solution:</h3>
            <strong>echo "Hello World";</strong><br>
            <br>Output:<br>';

        echo "Hello World";

        // Problem 2
        echo '<h3><strong>Problem 2</strong></h3>
            Write a program to print “Hello PHP” using variable.
            <h3>Solution:</h3>
            <strong>$test1 = "Hello PHP";<br>
            echo $test1;</strong><br>
            <br>Output:<br>';

        $test1 = "Hello PHP";
        echo $test1;

        // Problem 3
        echo '<h3><strong>Problem 3</strong></h3>
            Write a program to print a string using echo + variable.<br>
            Write a program to print “Welcome to the PHP World” using some part of the text in variable & some part directly in echo.
            <h3>Solution:</h3>
            <strong>$test2 = "PHP World";<br>
            echo "Welcome to the " . $test;</strong><br>
            <br>Output:<br>';

        $test2 = "PHP World";
        echo "Welcome to the " . $test2;
    ?>
<?php include 'templates/footer.php';?>