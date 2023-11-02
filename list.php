<!DOCTYPE html>
<html lang='en'>	
	<?php include('common_el/player_head.php') ?>

	<body>
		<?php
			include('common_el/header.php');
			$selected3='nav__link--active';
			include('common_el/detect.php');
		?>

		<section class="list_for_ep">
			<a class="list_episode" onclick="storeitem(4)">
				<img src="images/music-4.jpg" alt="Episode 4 image" class="img-episode">
				<h5 class="desc">Education, Race & Mental health</h5>
				<p>Iman, Umar & Seet</p>
			</a>
		</section>

		<section class="list_for_ep">
			<a class="list_episode" onclick="storeitem(3)">
				<img src="images/music-3.jpg" alt="Episode 3 image" class="img-episode">
				<h5 class="desc">How ambitious should you be?</h5>
				<p>Iman & Farees</p>
			</a>
		</section>

		<section class="list_for_ep">
			<a class="list_episode" onclick="storeitem(2)">
				<img src="images/music-2.jpg" alt="Episode 2 image" class="img-episode">
				<h5 class="desc">Do school activities matter?</h5>
				<p>Iman & Irfan</p>
			</a>
		</section>

		<section class="list_for_ep">
			<a class="list_episode" onclick="storeitem(1)">
				<img src="images/music-1.jpg" alt="Episode 1 image" class="img-episode">
				<h5 class="desc">New norms for university students</h5>
				<p>Iman & Nazrie</p>
			</a>
		</section>

		<script src="js/music-list.js"></script>
		  <script src="js/script.js"></script>

		  <?php
		  	include('common_el/footer.php');
		  ?>
	</body>

</html>
	