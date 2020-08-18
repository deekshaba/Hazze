<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Hazze | Book</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrapp.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style1.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg"></div>
						<form method="POST" action="book_script.php">
							<div class="form-header">
								<h2>Book an Appointment</h2>
							</div>
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Enter your Name " name="bname">
								
							</div>
							<div class="form-group">
								<input class="form-control" type="tel" placeholder="Enter your Phone number" name="bphone">
								
                            </div>
                            <div class="form-group">
								<input class="form-control" type="email" placeholder="Enter your Email" name="bemail">
								
							</div>
							        <div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="date" name="bdate" required>
										<span class="form-label">Date</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="time" name="btime" required>
										<span class="form-label">Time</span>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<input type="submit" class="submit-btn" name="submit" value="submit">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jqueryy.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>