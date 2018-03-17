
			<table>
				<tr>
					<td>
						<div class="left">
							
							<div class = "profileView">
								<h2><?= $member->first_name ?> <?= $member->last_name ?></h2>

								<img id="profileImageView" src="img/profile/teemo.png">

							</div>
							<?php if($member->date_birth != 0000-00-00): ?>
						    <h3>Date of Birth: <?= $member->date_birth ?></h3>
						    <?php else: ?>
						    <h3>Unknown birth date</h3>
						    <?php endif; ?>

						    <?php if($member->date_death != 0000-00-00): ?>
						    <h3>Date of Death: <?= $member->date_birth ?></h3>
						    <?php else: ?>
						    <h3>Unknown death date</h3>
						    <?php endif; ?>
							
							<h2> Life Events </h2>
							<div class= "events">
								<div class="lifeEvents">
									<?php if($member->date_notable != 0000-00-00): ?>
								    <h3>Date: <?= $member->date_notable ?></h3>
								    <?php else: ?>
								    <h3>No notable events</h3>
								    <?php endif; ?>
								    <?php if($member->notable != null): ?>
								    <p>Notable Event: <?= $member->notable ?></p>
								    <?php else: ?>
								   
								    <?php endif; ?>

								</div>


							</div>
						</div>
					</td>
				
				</tr>
			</table>
