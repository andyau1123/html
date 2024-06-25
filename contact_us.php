<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="images/polypng.png">
  <title>
		<?php 
			include "components/page_title.php";
			echo "$contactUsPage$confName";
		?>
	</title>
  <!-- Font Aewsome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/navbar-fixed-top.css" rel="stylesheet">
  <!-- Overriding css that is literally copy pasted for the entire site -->
  <link href="css/main-override.css" rel="stylesheet">
  <script src="js/ie-emulation-modes-warning.js"></script>
</head>

<style>
  .social-media-table {
    width:75%;
    margin: 0px auto;
  }

  .social-media-table tr td{
    text-align: center;
    border: none !important;
  }
  .social-media-table tr td img{
    width: 30%;
    height: auto;
  }

</style>

<body class="fontfamily">
  <?php include "components/header.php" ?>

  <div class="container">
    <div class="jumbotron">
    
        <h2 style="color: #111177;">Contact us</h2>
        
        <img src="images/contactus.jpg" class="img-responsive">
		<!-- Image by 472301 from Pixabay -->
        <br>
        <p>Should you have any inquiries, please do not hesitate to reach us through the following channels:</p>

        <div>
          <h4><u><strong>Contact the Conference Chairman</strong></u></h4>
          <p>
            <span>Dr. Joseph Lau</span> <br>
            <span>Tel: +852 3746 0648</span> <br>
            <span>Email: <a href="mailto:yuiyip.lau@cpce-polyu.edu.hk">yuiyip.lau@cpce-polyu.edu.hk</a></span> <br>
          </p>
        </div>

        <br>
		<!--
        <div>
          <h4><u><strong>Send an email to Conference's official email</strong></u></h4>
          <p>
            <span><a href="mailto:research.screbuilding.speed@gmail.com">research.screbuilding.speed@gmail.com</a></span> <br>
            <span><a href="mailto:chuiying.chung@speed-polyu.edu.hk">chuiying.chung@speed-polyu.edu.hk</a></span> <br>
          </p>
        </div>
		-->
        <br>

        <!-- Social Media -->
        <div>
          <h3 class="text-center text-uppercase" style="color: #111177;"><strong>Meet us on Social Media</strong></h3>
          <table class="table social-media-table">
            <tr>
              <td>
                <a 
                href="https://www.facebook.com/lau.joseph.359?mibextid=ZbWKwL" target="_blank">
                  <img src="images/social_media/facebook_logo_sq.svg">
                </a>
              </td>
              <!--<td>
                <a
                href="https://twitter.com/SCRebuilding"
                target="_blank">
                <img src="images/social_media/twitter_logo_sq.svg">
                </a>
              </td>-->
              <td>
                <a
                href="https://www.instagram.com/joseph_lau_cpce?igsh=MXg2aWdqbXZjOG41Mw=="
                target="_blank">
                <img src="images/social_media/instagram_logo_sq.svg">
                </a>
              </td>
              <!--<td>
                <a
                href="https://www.youtube.com/@supplychainrebuildingresearch/"
                target="_blank">
                <img src="images/social_media/youtube_logo_sq.svg">
                </a>
              </td>-->
            </tr>
          </table>
        </div>
    </div>
  </div> <!-- /container -->



  <?php include "components/footer.php" ?>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <?php include "components/fixedButton_n_scripts.php" ?>
</body>

</html>