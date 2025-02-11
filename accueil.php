<!-- accueil.php -->
<?php include 'dbCon.php'; ?>
<?php include 'template/header.php'; ?>

<body>

	<?php include 'template/nav-bar.php'; ?>
	<?php include 'template/search-header.php'; ?>
	<!-- End Header -->

	<!-- Row Offers -->
	<div class="newmian">
		<div class="content-box-new">
			<div class="fe-box commen">
				<h4>Current Offers</h4>
				<div class="title-t">
					<p>Hot Deals -10% !</p>
					<div class="clear"></div>
				</div>
				<ul>
					<!-- Loop FOR, display each card with database restaurant's infos-->
					<?php
					$role = 1;
					$id = 1;
					$con = connect();
					for ($i = 4; $i < 15; $i++) {
						$sql = "SELECT * FROM `rc_info` WHERE id = $i AND role = $role;";
						// Include cards template
						echo include 'box.php';
					}
					?>
				</ul>
			</div>
		</div>
	</div>
	<!--  -->
	<!-- Row World food -->
	<div class="newmian">
		<div class="content-box-new">
			<div class="fe-box commen">
				<h4>Festival offers</h4>
				<div class="title-t">
					<p></p>
					<div class="clear"></div>
				</div>
				<ul>
					<?php
					$role = 1;
					$category = 5;
					$con = connect();
					?>
					<!-- Loop display each card with database infos-->
					<?php
					for ($i = 4; $i < 5; $i++) {
						$sql = "SELECT * FROM `rc_info` WHERE category = $category ORDER BY id DESC;";
						echo include 'box.php';
					}
					?>
				</ul>
			</div>
		</div>
	</div>
	<!--  -->
	<section class="section-padding ftco-section bg-light">
		<div class="container special-dish">
			<h4 style="text-align: center;">
				 
			</h4>
			<small style="text-align: center;">
				  <br>
			</small>
		</div>
	</section>

	<?php include 'template/instagram.php'; ?>

	<?php include 'template/footer.php'; ?>

	<?php include 'template/bootstrap.php'; ?>

	<?php include 'template/script.php'; ?>

	<script src="dashboard/assets/vendor/jquery/jquery.js"></script>
	<script src="dashboard/assets/vendor/select2/select2.js"></script>
	<script src="dashboard/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
	<script src="js/owl.carousel.min.js"></script>

</body>

</html>