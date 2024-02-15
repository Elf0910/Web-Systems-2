<?php include 'templates/header.php';?>
<?php include 'templates/nav.php';?>

<div class="container">

    <?php
        echo "<h2>Activity 3 Operators</h2>";

        // Problem 1
        echo "<h3><strong>1. Arithmetic Operations</strong></h3>";

        // Problem 1 letter A
        echo 'A. Area of a rectangle
            <h3>Solution:</h3>
            <strong>$length = 4; <br>
            $width = 6; <br>
            $area = $length * $width; <br>
            echo "Area of a rectangle: $area";</strong><br>
            <br>Output:<br>';

            $length = 4;
            $width = 6;
            $area = $length * $width;
            echo "Area of a rectangle: $area";

        // Problem 1 letter B
        echo '<br><br>B. Currency converter
            <h3>Solution:</h3>
            <strong>$amount = 20; <br>
            $conversion_rate = 56.21; <br>
            $converted_amount = $amount * $conversion_rate; <br>
            echo "Converted currency = " . $converted_amount;</strong><br>
            <br>Output:<br>';

            $php = 20;
            $conversion_rate = 56.21;
            $usd = $php * $conversion_rate;
            echo "Equivalent in USD: " . $usd;

        // Problem 2
        echo "<h3><strong>2. Assignment Operators</strong></h3>";

        // Problem 2 letter A
        echo 'A. Track the progress of a fundraising campaign 
            <h3>Solution:</h3>
            <strong>$total_donation = 0; <br>
            $new_donation = 200; <br>
            $total_donation += $new_donation; <br>
            echo "Track fundraising: " . $total_donation; </strong><br>
            <br>Output:<br>';

            $total_donation = 0;
            $new_donation = 200;
            $total_donation += $new_donation;
            echo "Track fundraising: " . $total_donation;

        // Problem 2 letter B
        echo '<br><br>B. Voting system
            <h3>Solution:</h3>
            <strong>$candidate1_votes = 5;<br>
            $user_vote = 1;<br>
            $candidate1_votes += $user_vote;<br>
            echo "Candidate 1 total votes: " . $candidate_votes;</strong><br>
            <br>Output:<br>';

            $candidate1_votes = 5;
            $user_vote = 1;
            $candidate1_votes += $user_vote;
            echo "Candidate 1 total votes: " . $candidate1_votes;

        // Problem 3
        echo "<h3><strong>3. Comparison Operators</strong></h3>";

        // Problem 3 letter A
        echo 'A. Compare two athletes performance
            <h3>Solution:</h3>
            <strong>$athlete1 = 11.34; <br>
            $athlete2 = 10.87; <br>
            $winner = ($athlete1 < $athlete2) ? "Athlete 1": "Athlete 2"; <br>
            echo "Winner: ". $winner;</strong><br>
            <br>Output:<br>';

            $athlete1 = 11.34;
            $athlete2 = 10.87;
            $winner = ($athlete1 < $athlete2) ? "Athlete 1": "Athlete 2";
            echo "Winner: ". $winner;

        // Problem 3 letter B
        echo '<br><br>B. Algorithm efficiency
            <h3>Solution:</h3>
            <strong>$algo1 = 2.5; <br>
            $algo2 = 1.6; <br>
            $faster = ($algo1 < $algo2) ? "Algorithm 1" : "Algorithm 2"; <br>
            echo "More efficient algorithm: " . $faster; </strong><br>
            <br>Output:<br>';

            $algo1 = 2.5;
            $algo2 = 1.6;
            $faster = ($algo1 < $algo2) ? "Algorithm 1" : "Algorithm 2";
            echo "More efficient algorithm: " . $faster;

        // Problem 4
        echo "<h3><strong>4. Increment/Decrement Operations</strong></h3>";

        // Problem 4 letter A
        echo 'A. Factorial number
            <h3>Solution:</h3>
            <strong>$num = 4; <br>
            $result = $num; <br>
            for ($i = $num - 1; $i > 0; $i--) { <br>
                $result *= $i; <br>
            }<br>
            echo "Factorial of $num: $result"; </strong><br>
            <br>Output:</br>';

            $num = 4;
            $result = $num;
            for ($i = $num - 1; $i > 0; $i--) {
                $result *= $i;
            }
            echo "Factorial of $num: $result";

        // Problem 4 letter B
        echo '<br><br>B. Vehicle movement
            <h3>Solution:</h3>
            <strong>$positionNow = 0; <br>
            $distanceTravelled = 23; <br>
            $positionNow += $distanceTravelled; <br>
            echo "Final position: " . $positionNow; </strong><br>
            <br>Output:<br>';

            $positionNow = 0;
            $distanceTravelled = 23;
            $positionNow += $distanceTravelled;
            echo "Final position: " . $positionNow;
    ?>
<?php include 'templates/footer.php';?>