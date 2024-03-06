<?php include 'templates/header.php';?>
<?php include 'templates/nav.php';?>

<div class='container'>
    <div class="section">
		<div class="card-3d-wrap mx-auto">
			<div class="card-3d-wrapper">
				<div class="card-front">
					<div class="center-wrap">
						<div class="section text-center">
							<h4 id="demoh4" class="mb-4 pb-3">DEMO 2</h4>
							<form method="get" action="count_handle_var.php">
								<div class="form-group">
									<i class="input-icon uil uil-at"><span class="material-symbols-outlined">mail</span></i>
									<input type="text" id="message" name="message" class="form-style" placeholder="Your message" required><br><br>
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