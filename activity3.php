<?php include 'templates/header.php';?>
<?php include 'templates/nav.php';?>

<div class="container">

    <?php
        echo "<h2>Activity 3 Operators</h2>";

        // Problem 1
        echo "<h3>1. Arithmetic Operations</h3>";

        // Problem 1 letter A
        echo '<strong>A.</strong> Area of a rectangle
            <h3 class="sol">Solution:</h3>
            <pre>$length = 4;
$width = 6;
$area = $length * $width;
echo "Area of a rectangle: &ltstrong>$area&lt/strong>";</pre>
            <br>Output:<br>';

            $length = 4;
            $width = 6;
            $area = $length * $width;
            echo "Area of a rectangle: <strong>$area</strong>";

        // Problem 1 letter B
        echo '<br><br><strong>B.</strong> Currency converter
            <h3 class="sol">Solution:</h3>
            <pre>$usd = 20;
$conversion_rate = 56.21;
$php = $usd * $conversion_rate;
echo "Equivalent in PHP: &ltstrong>&#8369;$php&lt/strong>";</pre>
            <br>Output:<br>';

            $usd = 20;
            $conversion_rate = 56.21;
            $php = $usd * $conversion_rate;
            echo "Equivalent in Philippine Peso: <strong>&#8369;$php</strong>";

        // Problem 2
        echo "<hr><h3>2. Assignment Operators</h3>";

        // Problem 2 letter A
        echo '<strong>A.</strong> Track the progress of a fundraising campaign 
            <h3 class="sol">Solution:</h3>
            <pre>$total_donation = 0; <br>
$new_donation = 200;
$total_donation += $new_donation;
echo "Track fundraising: &ltstrong>$total_donation&lt/strong>"; </pre>
            <br>Output:<br>';

            $total_donation = 0;
            $new_donation = 200;
            $total_donation += $new_donation;
            echo "Track fundraising: <strong>$total_donation</strong>";

        // Problem 2 letter B
        echo '<br><br><strong>B.</strong> Voting system
            <h3 class="sol">Solution:</h3>
<pre>$candidate1_votes = 5;
$user_vote = 1;
candidate1_votes += $user_vote;
echo "Candidate 1 total votes: &ltstrong>$candidate1_votes&lt/strong>";</pre>
            <br>Output:<br>';

            $candidate1_votes = 5;
            $user_vote = 1;
            $candidate1_votes += $user_vote;
            echo "Candidate 1 total votes: <strong>$candidate1_votes</strong>";

        // Problem 3
        echo "<hr><h3>3. Comparison Operators</h3>";

        // Problem 3 letter A
        echo '<strong>A.</strong> Compare two athletes performance
            <h3 class="sol">Solution:</h3>
<pre>$athlete1 = 11.34;
$athlete2 = 10.87;
$winner = ($athlete1 < $athlete2) ? "Athlete 1": "Athlete 2";
echo "Winner: &ltstrong>$winner&lt/strong>";</pre>
            <br>Output:<br>';

            $athlete1 = 11.34;
            $athlete2 = 10.87;
            $winner = ($athlete1 < $athlete2) ? "Athlete 1": "Athlete 2";
            echo "Winner: <strong>$winner</strong>";

        // Problem 3 letter B
        echo '<br><br><strong>B.</strong> Algorithm efficiency
            <h3 class="sol">Solution:</h3>
            <pre>$algo1 = 2.5;
$algo2 = 1.6;
$faster = ($algo1 < $algo2) ? "Algorithm 1" : "Algorithm 2";
echo "More efficient algorithm: &ltstrong>$faster&lt/strong>";</pre>
            <br>Output:<br>';

            $algo1 = 2.5;
            $algo2 = 1.6;
            $faster = ($algo1 < $algo2) ? "Algorithm 1" : "Algorithm 2";
            echo "More efficient algorithm: <strong>$faster</strong>";

        // Problem 4
        echo "<hr><h3>4. Increment/Decrement Operations</h3>";

        // Problem 4 letter A
        echo '<strong>A.</strong> Factorial number
            <h3 class="sol">Solution:</h3>
            <pre>$num = 4;
$result = $num;
for ($i = $num - 1; $i > 0; $i--) { 
    $result *= $i;
}
echo "Factorial of $num: &ltstrong>$result&lt/strong>"; </pre>
            <br>Output:</br>';

            $num = 4;
            $result = $num;
            for ($i = $num - 1; $i > 0; $i--) {
                $result *= $i;
            }
            echo "Factorial of $num: <strong>$result</strong>";

        // Problem 4 letter B
        echo '<br><br><strong>B.</strong> Vehicle movement
            <h3 class="sol">Solution:</h3>
            <pre>$positionNow = 0;
$distanceTravelled = 23;
$positionNow += $distanceTravelled;
echo "Final position: &ltstrong>$positionNow&lt/strong>";</pre>
            <br>Output:<br>';

            $positionNow = 0;
            $distanceTravelled = 23;
            $positionNow += $distanceTravelled;
            echo "Final position: <strong>$positionNow</strong>";

        // Problem 5
        echo "<hr><h3>5. Logical Operators</h3>";

        // Problem 5 letter A
        echo '<strong>A. </strong> Discount elgibility
            <h3 class="sol">Solution:</h3>
            <pre>$purchaseAmount = 800; 
$customerLoyalty = true;
$discountEligibility = ($purchaseAmount > 500 && $customerLoyalty) ? "Eligible" : "Not Eligible"; 
echo "Discount eligibility: &ltstrong>$discountEligibility&lt/strong>";</pre>
            <br>Output<br>';

            $purchaseAmount = 800;
            $customerLoyalty = true;
            $discountEligibility = ($purchaseAmount > 500 && $customerLoyalty) ? "Eligible" : "Not Eligible";
            echo "Discount eligibility: <strong>$discountEligibility</strong>";

        echo '<br><br><strong>B.</strong> Chatbot
            <h3 class="sol">Solution:</h3>
            <pre>$userInput = "year";
$chatbotAns = ($userInput == "year") ? "It is 2024" : "I dont know that";
echo "Chatbot: &ltstrong>$chatbotAns&lt/strong>"; </pre>
            <br>Output:<br>';

            $userInput = "year";
            $chatbotAns = ($userInput == "year") ? "It is 2024" : "I dont know that";
            echo "Chatbot: <strong>$chatbotAns</strong>";
            
    ?>
    <br><br><br>
<?php include 'templates/footer.php';?>