<?php session_start();
include 'connection.php';


if (isset($_SESSION['username'])) { ?>






	<script src="jquery.js"></script>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
		<meta name="author" content="AdminKit">
		<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

		<link rel="canonical" href="https://demo-basic.adminkit.io/" />

		<title>AdminKit Demo - Bootstrap 5 Admin Template</title>

		<link href="css/app.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	</head>
	<style>
		.display_bloack {
			display: block;
		}

		.alert_danger {
			border: 1px solid #eb7d7d;
			text-align: center;
			background-color: #eb7d7d;
			margin-top: 0px;
			display: none;

		}

		.alert_sucess {
			border: 1px solid #3af33f;
			text-align: center;
			background-color: #3af33f;
			margin-top: 0px;
			display: none;


		}

		.danger h1,
		h2 {
			color: white;
		}

		.cross {
			cursor: pointer;
			float: right;
			justify-content: center;


		}
	</style>

	<body>
		<div class="alert_danger">

			<div class="danger">

				<h1>
					<h2 id="sethtml">Please Enter Your name</h2> <span><svg class="cross" id="cross" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x align-middle me-2">
							<line x1="18" y1="6" x2="6" y2="18"></line>
							<line x1="6" y1="6" x2="18" y2="18"></line>
						</svg></span>
				</h1>
			</div>

		</div>
		<div class="alert_sucess">

			<div class="danger">

				<h1 id="">Registration Sucessfull Login To Continue<span><svg class="cross" id="cross_sucess" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x align-middle me-2">
							<line x1="18" y1="6" x2="6" y2="18"></line>
							<line x1="6" y1="6" x2="18" y2="18"></line>
						</svg></span></h1>
			</div>

		</div>
		<div class="wrapper">
			<div class="main">

				<?php include 'header.php'; ?>


				<main class="content">
					<div class="container-fluid p-0">

						<h1 class="h3 mb-3"><?php echo "Hello Mr. " . $_SESSION['username'] . "Welcome to Admin Pannel" ?></h1>

						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Empty card</h5>
									</div>
									<div class="card-body">
									</div>
								</div>
							</div>
						</div>

					</div>
				</main>







				<?php include 'footer.php'; ?>



			</div>
		</div>








	</body>

	</html>

<?php } else {
	header('Location:./admin/index.php');
}
?>