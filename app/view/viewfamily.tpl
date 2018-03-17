
<p id="breadcrumbs" class="clear"><a href="home.html">Home</a> &gt; <a href="viewfamily.html">View Family</a></p>
	
	<!-- Source: //am-a.akamaihd.net/image?f=https%3A%2F%2Fddragon.leagueoflegends.com%2Fcdn%2Fimg%2Fchampion%2Fsplash%2FTeemo_0.jpg&resize=1000: -->

	<h2> View Family</h2>
<?php foreach($familymembers as $members): ?>
<br>
	<div id="container1">
		<!-- Source: //am-a.akamaihd.net/image?f=https%3A%2F%2Fddragon.leagueoflegends.com%2Fcdn%2Fimg%2Fchampion%2Fsplash%2FTeemo_0.jpg&resize=1000: -->
		

		<div class="profileList">
			<a href="<?= BASE_URL ?>/member/view/<?= $member->id ?>">
				<div >
					<img class="profileImage" src="img/profile/teemo.png"/>
				</div>

				<div class="profileDescription">
					<h3><a href="<?= BASE_URL ?>/member/view/<?= $member->id ?>"><?= $member->first_name ?> <?= $member->last_name ?></a></h3>
					
				</div>
			</a>
		</div>
	</div>
<?php endforeach; ?>





