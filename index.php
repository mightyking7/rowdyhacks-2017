<!DOCTYPE html>
<html>
	<head>
		<?php
			require('common/head-includes.php');
		?>
		<title>
			RowdyHacks
		</title>
	</head>
	<body>
		<?php
			require('common/menu.php');
		?>
		<div id="page-container" style="height:100vh;">
			<div id="page-overflow-border">
				<?php
					include('common/confetti-background.php');
				?>
				<div id="content" class="container" style="">
					<div class="row" style="overflow-y:hidden;">
						<div class="col-sm-12" style="overflow-x:visible;">
							<div class="row section-container">
								<div class="col-sm-12">
									It’s official! Come join us at RowdyHacks as we build apps, games, and many other neat projects in 24 hours. Whether you’re a seasoned hacker or new to the hackathon community, we’ve got your back through the whole hacking experience.
									<br />
									If you aren’t familiar, a hackathon is where you turn your crazy ideas into real projects. Plenty of your fellow peers gather to build something they’re passionate about so get involved in making incredible things.
								</div>
							</div>
							<div class="row section-container" id="home-page-cover-image">
								<div class="col-sm-12">
								</div>
							</div>
							<div class="row partial-section-container">
								<div class="col-sm-12 col-md-4">
									<div class="partial-section">
										<h3>
											<img src="images/icons/ic_event_black_48px.svg" class="partial-section-h-icon" />
										</h3>
										April 15th - April 16th
									</div>
								</div>
								<div class="col-sm-12 col-md-4">
									<div class="partial-section">
										<h3>
											<img src="images/icons/ic_schedule_black_48px.svg" class="partial-section-h-icon" />
										</h3>
										24 Hour Hackathon
									</div>
								</div>
								<div class="col-sm-12 col-md-4">
									<div class="partial-section">
										<h3>
											<img src="images/icons/ic_room_black_48px.svg" class="partial-section-h-icon" />
										</h3>
										University of Texas San Antonio
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			require('common/footer.php');
		?>
	</body>
</html>
