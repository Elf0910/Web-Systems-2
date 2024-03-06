<?php include 'templates/header.php';?>
<?php include 'templates/nav.php';?>

<div class='container'>
    <h2>Activity 5 Loops</h2>

    <!-- Problem 1 -->
    <h3>Problem 1</h3>
    <p>Write a PHP script that will output the following using loop</p>
    <p>* <br>* * <br>* * *<br>* * * *<br>* * * * *</p>
    <h3 class="sol">Solution:</h3>
    <pre><p>$asterisk = "* ";
for ($i = 0; $i < 5; $i++) {
    echo $asterisk;
    $asterisk .= "* ";
    echo "< br>";
}</p></pre><br>
    <p>Output:</p>
    <?php
        $asterisk = "* ";
        for ($i = 0; $i < 5; $i++) {
            echo $asterisk;
            $asterisk .= "* ";
            echo "<br>";
        }
    ?>

    <!-- Problem 2 -->
    <hr><h3>Problem 2</h3>
    <p>Write a PHP script that will output the following using loop</p>
    <p>* <br>* * <br>* * *<br>* * * *<br>* * * * * <br>* * * * * <br>* * * * <br>* * * <br>* * <br>* </p>
    <h3 class="sol">Solution:</h3>
    <pre><p>for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "* ";
    }
    echo "< br>";
}
for ($i = 5; $i > 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo "* ";
    }
    echo "< br>";
}</p></pre><br>
    <p>Output:</p>
    <?php
    
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    for ($i = 5; $i > 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
        
    ?>
        
    <!-- Problem 3 -->
    <hr><h3>Problem 3</h3>
    <p>Create a script using a for loop to add all the integers between 0 and 10 and display the total</p>
    <h3 class="sol">Solution:</h3>
    <pre>if (isset($_GET["num1"])) {
    $user = $_GET["num1"];

    $sum = 0;
    for ($i = 0; $i <= $user; $i++) {
        $sum += $i;
    }
    echo "Sum between 1 to $user is: $sum";
}

else {
    echo"< p>Missing variable name parameter. Variable ‘num1’ does not exist.< /p>";
}</pre><br>
    <a href="activity5_p3.php"><button class="demo">DEMO 1</button></a><br><br>

    <!-- Problem 4 -->
    <hr><h3>Problem 4</h3>
    <p>Write a PHP script that creates the following table (use for loops)</p>
    <h3 class="sol">Solution:</h3>
    <pre>echo "< table border='1'>";
for ($i = 1; $i <= 10; $i++) {
    echo "< tr>";
    for ($j = $i; $j <= $i * 10; $j += $i) {
        echo "< td> $j < /td>";
    }
    echo "< br>";
}</pre><br>
    <p>Output:</p>
    <?php

        echo "<table border='1'";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = $i; $j <= $i * 10; $j += $i) {
                echo "<td> $j </td>";
            }
        }
    
    ?>

<?php include 'templates/footer.php';?>