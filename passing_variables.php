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
							<form method="get" action="handling_variables.php">
								<div class="form-group">
									<i class="input-icon uil uil-at"><span class="material-symbols-outlined">looks_one</span></i>
									<input type="number" id="num1" name="num1" class="form-style" placeholder="Number 1" required><br><br>
								</div>
								<div class="form-group mt-2">
									<i class="input-icon uil uil-at"><span class="material-symbols-outlined">looks_two</span></i>
									<input type="number" id="num2" name="num2" class="form-style" placeholder="Number 2" required><br><br>
								</div>
								<input type="submit" id="submit1" value="SUBMIT">
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include 'templates/footer.php';?>