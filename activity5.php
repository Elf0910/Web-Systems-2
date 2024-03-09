<?php include 'templates/header.php';?>
<?php include 'templates/nav.php';?>

<div class='container'>
    <h2>Activity 5 Loops</h2>

    <!-- Problem 1 -->
    <h3>Problem 1</h3>
    <p>Write a PHP script that will output the following using loop</p>
    <p>* <br>* * <br>* * *<br>* * * *<br>* * * * *</p>
    <h3 class="sol">Solution:</h3>
    <pre><p>$i = 0;
$a = "* ";
while ($i < 5) {
    echo $a;
    echo "&ltbr>";
    $a = $a . "* ";
    $i++;
}</p></pre><br>
    <p>Output:</p>
    <?php
        $i = 0;
        $a = "* ";
        while ($i < 5) {
            echo $a;
            echo "<br>";
            $a = $a . "* ";
            $i++;
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
    echo "&ltbr>";
}
for ($i = 5; $i > 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo "* ";
    }
    echo "&ltbr>";
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
    <hr><h3 id="p3">Problem 3</h3>
    <p>Create a script using a for loop to add all the integers between 0 and 10 and display the total. The range should be user inputted.</p>
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
    echo"&ltp>Missing variable name parameter. Variable ‘num1’ does not exist.&lt/p>";
}</pre><br>
    <a href="activity5_p3.php"><button class="demo">DEMO 1</button></a><br><br>

    <!-- Problem 4 -->
    <hr><h3>Problem 4</h3>
    <p>Write a PHP script that creates the following table (use for loops)</p>
    <h3 class="sol">Solution:</h3>
    <pre>echo "&lttable id='multiplicationTable'>";
for ($i = 1; $i <= 10; $i++) {
    echo "&lttr>";
    for ($j = $i; $j <= $i * 10; $j += $i) {
        echo "&lttd> $j &lt/td>";
    }
    echo "&lt/tr>";
}
echo "&lt/table>";</pre><br>
    <p>Output:</p>
    <?php

        echo "<table id='multiplicationTable'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = $i; $j <= $i * 10; $j += $i) {
                echo "<td> $j </td>";
            }
            echo "</tr>";
        }
        echo "</table><br><br>";
    
    ?>

<?php include 'templates/footer.php';?>