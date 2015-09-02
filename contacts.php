<?php
    include("../conf.inc.php");
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		//$human = intval($_POST['human']);
		$from = $email; 
		$to = $contacts_to_email; 
		$subject = 'Hai un messaggio da un visitatore di lucamarkio.com';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
// 		if ($human !== 5) {
// 			$errHuman = 'Your anti-spam is incorrect';
// 		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Thank You!</strong> I will be in touch</div>';
		$result= '<p>'+ $to +'</p>'+ $result;
	} else {
		$result='<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Sorry there was an <strong>error</strong> sending your message. Please write at lucamarkio@hotmail.com </div>';
	}
}
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Who is Luca Markio?">
    <meta name="author" content="Luca Marchiorello">
    <!-- link rel="icon" href="../../favicon.ico" -->

    <title>Who is Luca Markio?</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lobster|Pinyon+Script" rel="stylesheet" type="text/css">
    
    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
    
    <link href="stylesheet.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Begin page content -->
    <div class="container">
        
        <div class="row">
            <div class="col-sm-12">
                <div class="header">
                    <img src="images/lucamarkio_logo_half_transparent.png" alt="lucamarkio.com logo" class="img-responsive"/>
                    <h3 class="header-text">Versatile Developer</h3>
                </div>
            </div>
        </div>
        
        <form class="form-horizontal" role="form" method="post" action="contacts.php">
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                    <?php echo "<p class='text-danger'>$errName</p>";?>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                    <?php echo "<p class='text-danger'>$errEmail</p>";?>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                    <?php echo "<p class='text-danger'>$errMessage</p>";?>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <!--<div class="form-group">-->
            <!--    <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>-->
            <!--    <div class="col-sm-10">-->
            <!--        <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">-->
            <!--        <?php //echo "<p class='text-danger'>$errHuman</p>";?>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                    <input id="submit" name="submit" type="submit" value="Fire!" class="btn btn-primary">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                    <?php echo $result; ?>    
                </div>
                <div class="col-sm-2"></div>
            </div>
        </form> 
				
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Copyright &copy; <?php echo date("Y"); ?> - Luca Marchiorello - All rights reserved.</p>
      </div>
    </footer>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>