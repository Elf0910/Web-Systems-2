<?php include 'templates/header.php';?>
<?php include 'templates/nav.php';?>

<div class='container'>
    <div class="section">
		<div class="card-3d-wrap mx-auto">
			<div class="card-3d-wrapper">
				<div class="card-front">
					<div class="center-wrap">
						<div class="section text-center">
							<h4 id="demoh4" class="mb-4 pb-3">DEMO 1</h4>
							<?php

                            if (isset($_GET['message'])) {
                                $userInput = $_GET['message'];
                                $result = str_word_count($userInput);

                                echo '"' . $userInput . '"' . " has <strong>$result</strong> word/s.";
                            }
                            else {
                                echo"Missing variable name paramter. Variable ‘message’ does not exist.";
                            }
                            ?>
                            <form method="get" action="activity4.php#p2"><br>
                            <input type="submit" id="submit1" value="BACK">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    

<?php include 'templates/footer.php';?>