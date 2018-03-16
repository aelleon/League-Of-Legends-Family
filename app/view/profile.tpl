
			<table>
				<tr>
					<td>
						<div class="left">
							
							<div class = "profileView">
								<h2><?= $member->first_name ?> <?= $member->last_name ?></h2>

								<img id="profileImageView" src="img/profile/teemo.png">

							</div>
							<?php if($member->date_birth != null): ?>
						    <h3>Date of Birth: <?= $member->date_birth ?></h3>
						    <?php else: ?>
						    <p>Unknown birth date</p>
						    <?php endif; ?>
							
							<h2> Life Events </h2>
							<div class= "events">
								<div class="lifeEvents">
									<h4>Born: 02/01/2017</h4>
									<p>Teemo was born in Bandle City</p>
								</div>
								<div class="lifeEvents">
									<h4>Slain: 02/02/2017</h4>
									<p>Teemo was slain in battle on the Summoning Grounds after a back and forth with Swain. However, Teemo's sacrifice gave his team Baron which was enough to win the overall fight.</p>
								</div>

								<div class="lifeEvents">
									<h4>Revived: 02/01/2017</h4>
									<p>Teemo was revived after a 30 second timer.</p>
								</div>

							</div>
						</div>
					</td>
				
				</tr>
			</table>
