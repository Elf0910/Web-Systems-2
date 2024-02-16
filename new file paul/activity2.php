<?php include 'templates/header.php';?>
<?php include 'templates/nav.php';?>

<div class="container">

    <?php 
        echo "<h2>Activity 2 PHP Variables</h2>";

        // Problem 1
        echo '<h3>Problem 1</h3>
            Write a program to print “Hello World” using echo.
            <h3 class="sol">Solution:</h3>
            <pre>echo "Hello World";</pre>
            <br>Output:<br>';

        echo "Hello World";

        // Problem 2
        echo '<hr><h3>Problem 2</h3>
            Write a program to print “Hello PHP” using variable.
            <h3 class="sol">Solution:</h3>
            <pre>$test1 = "Hello PHP";
echo $test1;</pre>
            <br>Output:<br>';

        $test1 = "Hello PHP";
        echo $test1;

        // Problem 3
        echo '<hr><h3>Problem 3</h3>
            Write a program to print a string using echo + variable.<br>
            Write a program to print “Welcome to the PHP World” using some part of the text in variable & some part directly in echo.
            <h3 class="sol">Solution:</h3>
            <pre>$test2 = "PHP World";
echo "Welcome to the " . $test;</pre>
            <br>Output:<br>';

        $test2 = "PHP World";
        echo "Welcome to the " . $test2;
    ?>
<?php include 'templates/footer.php';?>~