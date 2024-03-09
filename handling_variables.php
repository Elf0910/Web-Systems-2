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
                            
                            if (isset($_GET["num1"]) && isset($_GET["num2"])) {
                                $num1 = $_GET["num1"];
                                $num2 = $_GET["num2"];

                                echo "Addition: $num1 + $num2 = ", $num1 + $num2; 
                                echo "<br><br>Subraction: $num1 - $num2 = ", $num1 - $num2;
                                echo "<br><br>Multiplication: $num1 * $num2 = ", $num1 * $num2;
                                echo "<br><br>Division: $num1 / $num2 = ", $num1 / $num2;
                            }

                            else {
                                echo"<p>Missing variable name parameters. Variables ‘num1’ and ‘num2’ does not exist.</p>";
                            }
                            
                            ?>
                            <form method="get" action="activity4.php#p1"><br>
                            <input type="submit" id="submit1" value="BACK">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    

<?php include 'templates/footer.php';?>