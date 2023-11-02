<!DOCTYPE html>
<html lang='en'>	
	<?php include('common_el/head.php') ?>

	<body>
		<script src="js/music-list.js"></script>
		 <script src="js/script.js"></script>
		<?php
			include('common_el/header.php');
			$selected1='nav__link--active';
			include('common_el/detect.php');
		?>

		<section>
			<h2>Latest episodes</h2>
			<p>
				<span><div class="r1"></div></span><span><div class="r2"></div></span><span><div class="r3"></div></span><span><div class="r4"></div></span><span><div class="r5"></div></span><span><div class="r6"></div></span><span><div class="r7"></div></span><span><div class="r1"></div></span><span><div class="r2"></div></span><span><div class="r5"></div></span>
			</p>
			<div>
				<div class="outside_episode">
					<a class="index_episode clip" onclick="storeitem(4)">
						<h3>Episode 4</h3>
						<hr  size="1" color="black">
						<h4>Education, Race & Mental health</h4>
					</a>
				</div>

				<div class="outside_episode">
					<a class="index_episode clip" onclick="storeitem(3)">
						<h3>Episode 3</h3>
						<hr  size="1" color="black">
						<h4>How ambitious should you be?</h4>
					</a>
				</div>

				<div class="outside_episode">
					<a class="index_episode clip" onclick="storeitem(2)">
						<h3>Episode 2</h3>
						<hr  size="1" color="black">
						<h4>Do school activities matter?</h4>
					</a>
				</div>

				<div class="outside_episode">
					<a class="index_episode clip" onclick="storeitem(1)">
						<h3>Episode 1</h3>
						<hr  size="1" color="black">
						<h4>New norms for university students</h4>
					</a>
				</div>
			</div>
		</section>

		<section>
			<h2>About Us</h2>
			<p>
				<span><div class="r4"></div></span><span><div class="r6"></div></span><span><div class="r7"></div></span><span><div class="r1"></div></span><span><div class="r2"></div></span><span><div class="r5"></div></span>
			</p>
			<p>Hello friends!</p>
			<p>Welcome to Unfinished Talk, where we discuss about random things in our lives ranging from personal matters to global events.</p>
		</section>

		 <?php
		  	include('common_el/footer.php');
		  ?>

	</body>

</html>
	