
	<h2> Add a Family Member! </h2>
	<div id = "form">
		<form method="POST" action="<?= BASE_URL ?>/add/process/">

		<table>
			<tr>
				<td>
					<div id="topleft">
						<img id="profileImageView" src="img/profile/teemo.png" alt="image of teemo">
						<table id="profileForm">
							
								<tr>
									<td class="divWidth">
										<p class="inline">First Name:</p>
									</td>
									<td>
										<input type="text" name="first_name" placeholder="First name">
									</td>
								</tr>

								<tr>
									<td class="divWidth">
										<p class="inline">Middle Name:</p>
									</td>
									<td>
										<input type="text" name = "middle_name" placeholder="Middle Name">
									</td>
								</tr>
								<tr>
									<td class="divWidth">
										<p class="inline">Last Name:</p>
									</td>
									<td>
										<input type="text" name = "last_name" placeholder="Last name">
									</td>
								</tr>
								<tr>
									<td class="divWidth">
										<p class="inline">Date of Birth:</p>
									</td>
									<td>
										<input id="bornDate" type="date" name = "date_birth">
									</td>
								</tr>
								<tr>
									<td class="divWidth">
										<p class="inline">Date of Death:</p>
									</td>
									<td>
										<input id="deathDate" type="date" name = "date_death">
									</td>
								</tr>
							

						</table>
						<div class="floatleft">

						</div>
					</div>
				</td>
				</tr>
			<tr>
				<td>
					<h3>Notable Events:</h3>
					<p class="inline">Date:</p>
					<input class="notableDate" type="date" name = "notable_date">
					<br>
					<textarea name = "notable" cols="80" rows="10">Event Details:
					</textarea>
				</td>

			</tr>
			<tr>

			</tr>

		</table>
	</div>
	<button id="submitButton">Submit</button>
<button id="saveButton">Save</button>
<button id="cancelButton">Cancel</button>
</form>
</div>

