<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
    

            
          
                <div id="navig-bar" style="background-color:#a9a6a6">
               <ul class="nav nav-tabs nav-justified">
                  <li class="active"><a href="index.php">Home &nbsp <span class="glyphicon glyphicon-home"></span></a></li>
                  <li><a href="Course.php">Course &nbsp <span class="glyphicon glyphicon-list-alt"></span></a></li>
                  <li>
                      <a data-toggle="dropdown" href="#">Recommendation &nbsp </span class="glyphicon glyphicon-volume-up"> <span class="caret"></span>
                  </a>
                      <ul class="dropdown-menu" >
                        <li><a href="difficulty.php">Difficulty &nbsp</a></li>
                         <li><a href="difficulty.php">Advanced &nbsp</a></li>
                       </ul>
                  </li>
                   <li><a href="study.php">Study Room &nbsp <span class="glyphicon glyphicon-list-alt"></span></a></li>
                    <li><a href="#">About &nbsp <span class="glyphicon glyphicon-user"></span></a></li>
                   <li><a href="contact.php">Contact &nbsp <span class="glyphicon glyphicon-phone"></span></a></li>
                    <li><a href="#">Search &nbsp <span class="glyphicon glyphicon-globe"></span></a></li>
                </ul>
                </div>


            <form action="login.php" method="post">


                <div class="input-group">
                <label>Username</label>
                 <input class="form-control" type="text" name="username" placeholder="Username or E-mail address"><br>
               <label>Password</label>
                  <input class="form-control" type="password" name="password" placeholder="password"><br>
                    <br/>
                <button class="btn btn-primary" type="submit" name="Login">Log In</button>
                    </div>
             </form>





            <div id="content_area">
                <?php
if(isset($_POST['email'])) {
	
	// CHANGE THE TWO LINES BELOW
	$email_to = "meghmeg17@gmail.com";
	
	$email_subject = "Email from meghz17 personal webpage";
	
	
	function died($error) {
		// your error code can go here
		echo "We're sorry, but there's errors found with the form you submitted.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}
	
	// validation expected data exists
	if(!isset($_POST['first_name']) ||
		!isset($_POST['last_name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['telephone']) ||
		!isset($_POST['comments'])) {
		died('We are sorry, but there appears to be a problem with the form you submitted.');		
	}
	
	$first_name = $_POST['first_name']; // required
	$last_name = $_POST['last_name']; // required
	$email_from = $_POST['email']; // required
	$telephone = $_POST['telephone']; // not required
	$comments = $_POST['comments']; // required
	
	$error_message = "";
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
  	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
	$string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
  	$error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
  	$error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
  	$error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
  	died($error_message);
  }
	$email_message = "Form details below.\n\n";
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}
	
	$email_message .= "First Name: ".clean_string($first_name)."\n";
	$email_message .= "Last Name: ".clean_string($last_name)."\n";
	$email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Telephone: ".clean_string($telephone)."\n";
	$email_message .= "Comments: ".clean_string($comments)."\n";
	
	
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<!-- place your own success html below -->

Thank you for contacting us. We will get back to you ASAP - Meghz and Wang

<?php
}
die();
?>
            </div>
            
            
            

            
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
