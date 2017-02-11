<?php
	if (isset($_POST['submit'])) {
		$from = $_POST['email'];
		$to = 'clevelandwilliams3579@gmail.com';
		$subject = 'Email signup';
		$body = 'Please sign me up to the mailing list';

		if (!$_POST['email']) {
				$emailError = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;Please enter a valid email address</div>';
		}
		if (!$emailError) {
			  if (mail ($to, $subject, $body, $from)) {
					$result = '<div class="text-success"><i class="fa fa-check" aria-hidden="true"></i>
 &nbsp;thank you we\'ll keep you updated</div>';
				} else {
					$result = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;sorry there has been an error, please try again</div>';
				}
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Coding Ninjas</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" href="http://cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.css">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Amatica+SC:400,700" rel="stylesheet">
	</head>
	<body>
	<section id="logo">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<img src="/img/ninja.jpg" alt="ninja" class="img-fluid" />
				</div>
			</div>
		</div>
	</section>
	<section id="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>We're working hard, we'll be ready to launch in</p>
				</div>
			</div>
		</div>
	</section>
	<section id="counter">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="countdown"></div>
				</div>
			</div>
		</div>
	</section>
	<section id="icons">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="list-inline text-center">
						<a href="#" target="_blank"><li class="list-inline-item"><i class="fa github fa-github fa-3x" aria-hidden="true"></i></li></a>
						<a href="#" target="_blank"><li class="list-inline-item"><i class="fa google fa-google-plus-square fa-3x" aria-hidden="true"></i></li></a>
						<a href="#" target="_blank"><li class="list-inline-item"><i class="fa facebook fa-facebook-square fa-3x" aria-hidden="true"></i>
							</li></a>
						<a href="#" target="_blank"><li class="list-inline-item"><i class="fa codepen fa-codepen fa-3x" aria-hidden="true"></i></li></a>
						<a href="#" target="_blank"><li class="list-inline-item"><i class="fa fire fa-fire fa-3x" aria-hidden="true"></i></li></a>
					</ul>
				</div>
			</div>
		</div>
	</section>
		<section id="signup">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<form action="#signup" class="form-inine" role="form" method="post">
							<input type="email" name="email" class="form-control form-control-sm" placeholder="Enter your email">
							<button type="submit" class="btn btn-signup btn-sm" name="submit" value="send">find out more</button>
						</form>
						<?php echo $emailError;?>
						<?php echo $result;?>
					</div>
				</div>
			</div>
		</section>
		<!-- jQuery first, then Tether, then Bootstrap JS. -->
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.countdown.js"></script>
		<script>
			$(function() {
				$('.countdown').countdown({
					date: "April 7, 2017 15:03:26"
				});
			});
		</script>
	</body>
</html>
