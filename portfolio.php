<?php include 'templates/header.php';?>
<?php include 'templates/nav.php';?>
<div class="container">
    <main>
        <div class='top'>
            <?php
                echo "<p class='title-top'>MY PORTFOLIO</p>"
            ?>
        </div>

        <div class='bottom'>

            <?php

                // personal information
                echo "<hr><p class='title'>PERSONAL INFORMATION</p><hr><br>
                <p><span>Name:</span> Jao T. Beronio</p>
                <p><span>Sex:</span> Male</p>
                <p><span>Birthday:</span> September 10, 2003</p>
                <p><span>Age:</span> 20</p>
                <p><span>Occupation:</span> Student</p>
                <p><span>Hobby:</span> Cycling</p>";

                // educational background
                echo "<br><hr><p class='title'>EDUCATIONAL BACKGROUND</p><hr><br>
                <p><span>Elementary</span>: Davao Macarius Child Academy Inc. (2010-2012)
                <p class='school'>Sto Nino de Novaliches School (2012-2013)</p>
                <p class='school'>Dologon Central Elementary School (2013-2016)</p><br>
                <p><span>Secondary</span>: Central Mindanao University Laboratory Highschool (2016-2022)</p><br>
                <p><span>Tertiary</span>: Central Mindanao University (2012-Present)</p>";

                // programming skills
                echo "<br><hr><p class='title'>PROGRAMMING SKILLS</p><hr><br>
                <p class='skills'>Python</p>
                <p class='skills'>Java</p>
                <p class='skills'>Php</p>
                <p class='skills'>Dart</p>";

                // references
                echo "<br><br><hr><p class='title'>REFERENCE/S</p><hr>
                <p class='name'>Aurelia Beronio</p>
                <ul>
                <li>Relationship: Mother</li>
                <li>Phone: (0936)-974-0144</li>
                </ul>
                <p>Aurelia Beronio, who is my mother, has known me all of my life and has seen firsthand my commitment to and passion for software development. Please feel free to contact her for any additional insights.</p>";
            ?>
            
        </div>
    </main>

<?php include 'templates/footer.php';?>