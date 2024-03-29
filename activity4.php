<?php include 'templates/header.php';?>
<?php include 'templates/nav.php';?>

<div class='container'>

    <h2>Activity 4 Passing Variables on the URL</h2>

    <!-- Problem 1 -->
    <h3 id="p1">Problem 1</h3>
    <p> Create a simple form with two input fields for the user to enter two numbers performs
    arithmetic operations (addition, subtraction, multiplication, division) on them. The form
    submits the data to a PHP script using the GET method. </p>
    <h3 class="sol">Solution:</h3>
    <pre><p> // nested div tags
&ltform method="get" action="handling_variables.php">
    &ltdiv class="form-group">
        &lti class="input-icon uil uil-at">&ltspan class="material-symbols-outlined">looks_one&lt/span>< /i>
        &ltinput type="number" id="num1" name="num1" class="form-style" placeholder="Number 1">
    &lt/div>
    &ltdiv class="form-group mt-2">
        &lti class="input-icon uil uil-at">&ltspan class="material-symbols-outlined">looks_two&lt/span>< /i>
        &ltinput type="number" id="num2" name="num2" class="form-style" placeholder="Number 2">
    &lt/div>
    &ltinput type="submit" id="submit1" value="SUBMIT">
&ltform>

// different file
// file name: handling_variables.php
    if (isset($_GET["num1"]) && isset($_GET["num2"])) {
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];

        echo "Addition: $num1 + $num2 = ", $num1 + $num2; 
        echo "&ltbr>&ltbr>Subraction: $num1 - $num2 = ", $num1 - $num2;
        echo "&ltbr>&ltbr>Multiplication: $num1 * $num2 = ", $num1 * $num2;
        echo "&ltbr>&ltbr>Division: $num1 / $num2 = ", $num1 / $num2;
    }

    else {
        echo"Missing variable name parameters. Variables ‘num1’ and ‘num2’ does not exist.";
    }</p></pre><br>
    <a href="passing_variables.php"><button class="demo">DEMO 1</button></a>

    <!-- Problem 2 -->
    <br><br><br><hr><h3 id="p2">Problem 2</h3>
    <p>Create a simple form that allows to input a message and counts the number of words in it. 
    The form submits the data to a PHP script using the GET method.</p>
    <h3 class="sol">Solution:</h3>
    <pre><p> // nested div tags
&ltform method="get" action="count_handle_var.php">
    &ltdiv class="form-group">
        &lti class="input-icon uil uil-at">&ltspan class="material-symbols-outlined">mail&lt/span>< /i>
        &ltinput type="text" id="message" name="message" class="form-style" placeholder="Your message">
    &lt/div>
    &ltinput type="submit" id="submit1" value="SUBMIT">
&lt/form>

// different file
// file name: count_handle_var.php
    if (isset($_GET['message'])) {
        $userInput = $_GET['message'];
        $result = str_word_count($userInput);

        echo"$userInput has $result word/s.";
    }
    else {
        echo"Missing variable name paramter. Variable ‘message’ does not exist.";
    }</p></pre><br>
    <a href="count_pass_var.php"><button class="demo">DEMO 2</button></a><br><br>

<?php include 'templates/footer.php';?>