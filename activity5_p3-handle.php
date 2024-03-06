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

                                if (isset($_GET["num1"])) {
                                    $user = $_GET["num1"];

                                    $sum = 0;
                                    for ($i = 0; $i <= $user; $i++) {
                                        $sum += $i;
                                    }
                                    echo "Sum between 1 to $user is: <strong>$sum</strong>";
                                }

                                else {
                                    echo"<p>Missing variable name parameter. Variable ‘num1’ does not exist.</p>";
                                }
                            ?>
                            <form method="get" action="activity5.php"><br>
                            <input type="submit" id="submit1" value="BACK">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    

<?php include 'templates/footer.php';?>