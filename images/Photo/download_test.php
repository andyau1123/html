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
			echo "$downloadPage$confName";
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
  <link href="css/swiper-bundle.min.css" rel="stylesheet">
  <script src="js/ie-emulation-modes-warning.js"></script>
  <script src="js/swiper-bundle.min.js"></script>

  <style>
    img {
      pointer-events: none;
    }
    .swiper-slide {
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .swiper-slide img {
      display: block;
      width: 75%;
      height: auto;
      object-fit: cover;
    }

    .swiper-button-prev, .swiper-button-next {
      color: rgb(14, 135, 31); 
    }
    .swiper-pagination-bullet-active {
      background: rgb(14, 135, 31);
    }

    .video-player {
      width: 100%;
      height: 40vh;      
    }
  </style>
</head>

<body class="fontfamily">
  <?php include "components/header.php" ?>
  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron" >
      <h2 style="color: #111177;">Download</h2><br>
      <!-- Conf Posters -->
      <h3 style="border-left: solid 5px green;padding-left: 10px;">Conference Poster</h3>
      <br />
      <div class="thumbnail_b text-center" style="max-width:320px;margin-bottom:5%">
        <a id="banner-reg-btn" href="images/posters/ConferencePoster.png" target="_blank" download>Download</a>
        <a href="" target="_blank" download><img src="images/posters/ConferencePoster.png" style="width:100%" /></a>
      </div>
      <a href="images/posters/ConferencePoster.png" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px;margin-bottom:10%" src="images/downloadbtn.png" alt="download" /></a>
      <br />
      <br />
	  <hr/>
	  <!--Workshop Poster-->
      <h3 style="border-left: solid 5px green;padding-left: 10px;">Seminar and Workshop Poster</h3>
	  <br />
      <div class="thumbnail_b text-center" style="max-width:320px;margin-bottom:5%">
        <a id="banner-reg-btn" href="images/posters/WorkshopPoster.png" target="_blank" download>Download</a>
		
        <a href="images/posters/WorkshopPoster.png" target="_blank" download><img src="images/posters/WorkshopPoster.png" style="width:100%;height=400" /></a>
		
	  </div>
	  <a href="images/posters/WorkshopPoster.png" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px;margin-bottom:10%" src="images/downloadbtn.png" alt="download" /></a>
      <br />
	  <br />
	  <hr/>
      <!-- Conf Booklets -->
      <h3 style="border-left: solid 5px green;padding-left: 10px;">Booklet</h3>
      <a href="" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px" src="images/book-icon.jpg" alt="pdffile" /></a>
      <br>
      <a href="" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px;margin-bottom:10%" src="images/downloadbtn.png" alt="download" /></a>
      <hr/>
      <!-- Conf Proceedings -->
      <h3 style="border-left: solid 5px green;padding-left: 10px;">Conference Proceedings</h3>
      <a href="" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px" src="images/book-icon.jpg" alt="pdffile" /></a>
      <br>
      <a href="" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px;margin-bottom:10%" src="images/downloadbtn.png" alt="download" /></a>
      <hr/>
      <!-- Summary Conference Report -->
      <h3 style="border-left: solid 5px green;padding-left: 10px;">Summary Conference Report</h3>
      <a href="downloads/Summary_Conference_Report.pdf" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px" src="images/book-icon.jpg" alt="pdffile" /></a>
      <br>
      <a href="downloads/Summary_Conference_Report.pdf" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px;margin-bottom:10%" src="images/downloadbtn.png" alt="download" /></a>
      <hr/>
      <!-- Special Issue -->
	   <h3 style="border-left: solid 5px green;padding-left: 10px;">Special Issue</h3>
	   <a href="downloads/Flyer.pdf" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%" src="images/Special_Issue.jpg" alt="pdffile" /></a>
      <br>
      <a href="downloads/Flyer.pdf" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px;margin-bottom:10%" src="images/downloadbtn.png" alt="download" /></a>
      <hr/>
      <!-- Conf Photo Gallery -->
      <h3 style="border-left: solid 5px green;padding-left: 10px;">Conferece Photos</h3>
      <!-- Day 1 -->
      <h4>Day 1<span><i>(<a href="" target="_blank">Click here</a> to access all photos of day 1)</i></span></h4>
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="images/activity_photos/DSCF3739.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/DSCF3755.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/DSCF3761.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/DSCF3768.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/DSCF3771.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/DSCF3777.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/DSCF3783.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/DSCF3790.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/DSCF3797.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/DSCF3804.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/DSCF3805.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/DSCF3825.jpg"></div>
        </div>
        <!-- slider navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <!-- slider pagination -->
        <div class="swiper-pagination"></div>
      </div>
      <br />
      <!-- Day 2 -->
      <h4>Day 2<span><i>(<a href="" target="_blank">Click here</a> to access all photos of day 2)</i></span></h4>
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src=""></div>
          <div class="swiper-slide"><img src=""></div>
          <div class="swiper-slide"><img src=""></div>
        </div>
        <!-- slider navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <!-- slider pagination -->
        <div class="swiper-pagination"></div>
      </div>
      <br />
      <!-- Day 3 -->
      <h4>Day 3<span><i>(<a href="" target="_blank">Click here</a> to access all photos of day 3)</i></span></h4>
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src=""></div>
          <div class="swiper-slide"><img src=""></div>
        </div>
        <!-- slider navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <!-- slider pagination -->
        <div class="swiper-pagination"></div>
      </div>
      <hr/>

      <!-- Conf Videos -->
      <h3 style="border-left: solid 5px green;padding-left: 10px;">Conferece Videos</h3>
      <h4>7 June Workshop</h4>
<iframe width="560" height="315" src="https://www.youtube.com/embed/OUF4ob60a88?si=2t2A7V_Z9AhsSilj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
	  <!--
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h4>11 Aug Morning Session</h4>
            <iframe class="video-player" src="" title="11 Aug Morning 8:57 AM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="col-md-6">
            <h4>11 Aug Paper Session 1</h4>
            <iframe class="video-player" src="" title="11 Aug Afternoon 2 1213PM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h4>11 Aug Paper Session 2</h4>
            <iframe class="video-player" src="" title="11 Aug Afternoon 2  16:52 PM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="col-md-6">
            <h4>11 Aug Industrial Session</h4>
            <iframe class="video-player" src="" title="11 Aug Afternoon 3 1:12 PM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h4>12 Aug Morning Session</h4>
            <iframe class="video-player" src="" title="11 Aug Afternoon 3 1:12 PM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>          </div>
          <div class="col-md-6">
            <h4>12 Aug Paper Session 1</h4>
            <iframe class="video-player" src="" title="11 Aug Afternoon 3 1:12 PM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h4>12 Aug Paper Session 2</h4>
            <iframe class="video-player" src="" title="11 Aug Afternoon 3 1:12 PM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>          </div>
          <div class="col-md-6">
            <h4>12 Aug Industrial Session</h4>
            <iframe class="video-player" src="" title="11 Aug Afternoon 3 1:12 PM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>          </div>
        </div>
      </div>
-->
    </div> <!-- /container -->
  </div>
  <?php include "components/footer.php" ?>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <?php include "components/fixedButton_n_scripts.php" ?>

  <script>
    const swiper = new Swiper('.swiper', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,
      
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

    });
  </script>
</body>

</html>