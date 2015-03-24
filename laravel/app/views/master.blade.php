<!DOCTYPE html>
<html lang="en">

<style>
		/*background-image: url('/images/mtn.jpg');*/
		/*background-image: url(http://subtlepatterns.com/patterns/dark_leather.png);*/

		/*background-repeat: no-repeat;*/
		/*background-attachment: fixed;*/
		/*background-position: center center;*/
		/*background-size: 60em;*/

	/* Space out content a bit */
	body {
		padding-top: 0px;
		padding-bottom: 20px;
		background-image: url(http://subtlepatterns.com/patterns/padded.png);
	}


		.page-wrap{min-height:100%;margin-bottom:-175px}.page-wrap:after{content:"";display:block}.footer,.page-wrap:after{height:75px}.footer{background-color:#333;margin:100px 0 0 0;padding:5px 0;color:white;border-top:3px solid #ddd}

	/* Everything but the jumbotron gets side spacing for mobile first views */

	/* Custom page header */
	.header {
		border-bottom: 1px solid #e5e5e5;
	}
	/* Make the masthead heading the same height as the navigation */
	.header h3 {
		padding-bottom: 19px;
		margin-top: 0;
		margin-bottom: 0;
		line-height: 40px;
	}

	/* Custom page footer */
	.footer {
		padding-top: 19px;
		color: #777;
		border-top: 1px solid #e5e5e5;
	}

	/* Customize container */
	@media (min-width: 768px) {
		.container {
			max-width: 730px;
		}
	}
	.container-narrow > hr {
		margin: 30px 0;
	}

	/* Main marketing message and sign up button */
	.jumbotron {
		text-align: center;
		border-bottom: 1px solid #e5e5e5;
	}
	.jumbotron .btn {
		padding: 14px 24px;
		font-size: 21px;
	}

	/* Supporting marketing content */
	.marketing {
		margin: 40px 0;
	}
	.marketing p + h4 {
		margin-top: 28px;
	}

	/* Responsive: Portrait tablets and up */
	@media screen and (min-width: 768px) {
		/* Remove the padding we set earlier */
		.header,
		.marketing,
		.footer {
			padding-right: 0;
			padding-left: 0;
		}
		/* Space out the masthead */
		.header {
			margin-bottom: 30px;
		}
		/* Remove the bottom border on the jumbotron for visual effect */
		.jumbotron {
			border-bottom: 0;
		}
	}
</style>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Spaceship Earth</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

@yield('content')

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
<div class="footer">
	<div class="container">

		<div class="row">
			<div class="col-xs-4">
				{{--{{ HTML::image('images/UA_Square_Logo_EDAS.png', 'University of Alabama', ['width' => '200']) }}--}}
			</div>
			<div class="col-xs-4"></div>
			<div class="col-xs-4">The University of Alabama 2015</div>
		</div>
	</div>
</div>
</html>