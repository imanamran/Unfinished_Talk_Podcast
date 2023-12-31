<!DOCTYPE html>
<html lang='en'>	
	<?php include('common_el/player_head.php') ?>

	<body>
		<?php
			include('common_el/header.php');
			$selected2='nav__link--active';
			include('common_el/detect.php');
		?>
		<section class="player">
			<div class="wrapper">
			    <div class="img-area">
			      <img src="" alt="">
			    </div>
			    <div class="song-details">
			      <p class="name"></p>
			      <p class="artist"></p>
			    </div>
			    <div class="progress-area">

			      <div class="progress-bar">
			        <audio id="main-audio" src=""></audio>
			      </div>

			      <div class="song-timer">
			        <span class="current-time">0:00</span>
			        <span class="max-duration">0:00</span>
			      </div>
			    </div>
			    <div class="controls">
			      <i id="repeat-plist" class="material-icons" title="Playlist looped">repeat</i>
			      <i id="prev" class="material-icons">skip_previous</i>
			      <div class="play-pause">
			        <i class="material-icons play">play_arrow</i>
			      </div>
			      <i id="next" class="material-icons">skip_next</i>
			      <i id="more-music" class="material-icons">playlist_play</i>
			    </div>
			    <div class="music-list">
			      <div class="header">
			        <div class="row">
			          <i class= "list material-icons">playlist_play</i>
			          <span>Episode list</span>
			        </div>
			        <i id="close" class="material-icons">close</i>
			      </div>
			      <ul>
			        <!-- here li list are coming from js -->
			      </ul>
			    </div>
		  	</div>
		</section>

		  <script src="js/music-list.js"></script>
		  <script src="js/script.js"></script>

		 <?php
		  	include('common_el/footer.php');
		  ?>

	</body>

</html>
	