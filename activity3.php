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
            <span class="solution">$length = 4; <br>
            $width = 6; <br>
            $area = $length * $width; <br>
            echo "Area of a rectangle: $area";</span><br>
            <br>Output:<br>';

            $length = 4;
            $width = 6;
            $area = $length * $width;
            echo "Area of a rectangle: $area";

        // Problem 1 letter B
        echo '<br><br><strong>B.</strong> Currency converter
            <h3 class="sol">Solution:</h3>
            <span class="solution">$amount = 20; <br>
            $conversion_rate = 56.21; <br>
            $converted_amount = $amount * $conversion_rate; <br>
            echo "Converted currency = " . $converted_amount;</span><br>
            <br>Output:<br>';

            $php = 20;
            $conversion_rate = 56.21;
            $usd = $php * $conversion_rate;
            echo "Equivalent in USD: " . $usd;

        // Problem 2
        echo "<hr><h3>2. Assignment Operators</h3>";

        // Problem 2 letter A
        echo '<strong>A.</strong> Track the progress of a fundraising campaign 
            <h3 class="sol">Solution:</h3>
            <span class="solution">$total_donation = 0; <br>
            $new_donation = 200; <br>
            $total_donation += $new_donation; <br>
            echo "Track fundraising: " . $total_donation; </span><br>
            <br>Output:<br>';

            $total_donation = 0;
            $new_donation = 200;
            $total_donation += $new_donation;
            echo "Track fundraising: " . $total_donation;

        // Problem 2 letter B
        echo '<br><br><strong>B.</strong> Voting system
            <h3 class="sol">Solution:</h3>
            <span class="solution">$candidate1_votes = 5;<br>
            $user_vote = 1;<br>
            $candidate1_votes += $user_vote;<br>
            echo "Candidate 1 total votes: " . $candidate_votes;</span><br>
            <br>Output:<br>';

            $candidate1_votes = 5;
            $user_vote = 1;
            $candidate1_votes += $user_vote;
            echo "Candidate 1 total votes: " . $candidate1_votes;

        // Problem 3
        echo "<hr><h3>3. Comparison Operators</h3>";

        // Problem 3 letter A
        echo '<strong>A.</strong> Compare two athletes performance
            <h3 class="sol">Solution:</h3>
            <span class="solution">$athlete1 = 11.34; <br>
            $athlete2 = 10.87; <br>
            $winner = ($athlete1 < $athlete2) ? "Athlete 1": "Athlete 2"; <br>
            echo "Winner: ". $winner;</span><br>
            <br>Output:<br>';

            $athlete1 = 11.34;
            $athlete2 = 10.87;
            $winner = ($athlete1 < $athlete2) ? "Athlete 1": "Athlete 2";
            echo "Winner: ". $winner;

        // Problem 3 letter B
        echo '<br><br><strong>B.</strong> Algorithm efficiency
            <h3 class="sol">Solution:</h3>
            <span class="solution">$algo1 = 2.5; <br>
            $algo2 = 1.6; <br>
            $faster = ($algo1 < $algo2) ? "Algorithm 1" : "Algorithm 2"; <br>
            echo "More efficient algorithm: " . $faster; </span><br>
            <br>Output:<br>';

            $algo1 = 2.5;
            $algo2 = 1.6;
            $faster = ($algo1 < $algo2) ? "Algorithm 1" : "Algorithm 2";
            echo "More efficient algorithm: " . $faster;

        // Problem 4
        echo "<hr><h3>4. Increment/Decrement Operations</h3>";

        // Problem 4 letter A
        echo '<strong>A.</strong> Factorial number
            <h3 class="sol">Solution:</h3>
            <span class="solution">$num = 4; <br>
            $result = $num; <br>
            for ($i = $num - 1; $i > 0; $i--) { <br>
                $result *= $i; <br>
            }<br>
            echo "Factorial of $num: $result"; </span><br>
            <br>Output:</br>';

            $num = 4;
            $result = $num;
            for ($i = $num - 1; $i > 0; $i--) {
                $result *= $i;
            }
            echo "Factorial of $num: $result";

        // Problem 4 letter B
        echo '<br><br><strong>B.</strong> Vehicle movement
            <h3 class="sol">Solution:</h3>
            <span class="solution">$positionNow = 0; <br>
            $distanceTravelled = 23; <br>
            $positionNow += $distanceTravelled; <br>
            echo "Final position: " . $positionNow; </span><br>
            <br>Output:<br>';

            $positionNow = 0;
            $distanceTravelled = 23;
            $positionNow += $distanceTravelled;
            echo "Final position: " . $positionNow;

        // Problem 5
        echo "<hr><h3>5. Logical Operators</h3>";

        // Problem 5 letter A
        echo '<strong>A. </strong> Discount elgibility
            <h3 class="sol">Solution:</h3>
            <span class="solution">$purchaseAmount = 800; <br>
            $customerLoyalty = true; <br>
            $discountEligibility = ($purchaseAmount > 500 && $customerLoyalty) ? "Eligible" : "Not Eligible"; <br>
            echo "Discount eligibility: " . $discountEligibility; </span> <br>
            <br>Output<br>';

            $purchaseAmount = 800;
            $customerLoyalty = true;
            $discountEligibility = ($purchaseAmount > 500 && $customerLoyalty) ? "Eligible" : "Not Eligible";
            echo "Discount eligibility: " . $discountEligibility;

        echo '<br><br><strong>B.</strong> Chatbot
            <h3 class="sol">Solution:</h3>
            <span class="solution">$userInput = "year"; <br>
            $chatbotAns = ($userInput == "year") ? "It is 2024" : "???"; <br>
            echo "Chatbot: " . $chatbotAns; </span> <br>
            <br>Output:<br>';

            $userInput = "year";
            $chatbotAns = ($userInput == "year") ? "It is 2024" : "I have no clue";
            echo "Chatbot: " . $chatbotAns; 
    ?>
<?php include 'templates/footer.php';?>