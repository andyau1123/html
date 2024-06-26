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
			echo "$speakerPage $confName";
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
	.speaker_topics {
		font-family: Georgia, 'Times New Roman', Times, serif;
		font-style: italic;
	}
	.section_heading {
		border-bottom: 2px solid rgb(14,135,31);
		padding: 0px 0px 10px 0px;
		margin-bottom: 30px;
	}
	.speaker {
		margin-bottom: 5rem;
	}
	.speaker a{
		font-weight: bold;
	}
</style>

<body class="fontfamily">
	<?php include "components/header.php" ?>
	<div class="container">
		<div class="jumbotron">
			<!-- PAGE HEADER: Speakers  -->
			<h2 style="color: #111177;">Conference Speakers</h2><br>
			
			<!-- Keynote Speakers - SECTION HEADER -->
			<h3 class="section_heading">Keynote Speakers</h3>
			
			<h3 class="section_heading" style="text-align: center;">Food, Plastic, and Packaging Waste</h3>
			<!-- Keynote Speakers - SECTION Food, Plastic, and Packaging Waste - START  -->
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Yolanda_Che.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Ms. Yolanda Che </a> <br>
						Managing Director, Welspring
					</p>
					<blockquote class="speaker_topics">Organic at Living</blockquote>
				</div>
			</div>
			
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Lucia_Loposova.png" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Ms. Lucia Loposova </a> <br>
						Executive Director at GREEN Hospitality
					</p>
					<blockquote class="speaker_topics">Food Waste in the Hospitality Sector in Hong Kong</blockquote>
				</div>
			</div>
			
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Kayley_Leung.jpg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Ms. Kayley Leung </a> <br>
						Director & Founder of Sustainable Lab HK
					</p>
					<blockquote class="speaker_topics">HK Food Waste Management: Disposal VS Reborn Company</blockquote>
				</div>
			</div>
			
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Christelle_Not.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Dr. Christelle Not </a> <br>
						Senior Lecturer, University of Hong Kong
					</p>
					<blockquote class="speaker_topics">Food Waste Upcycling</blockquote>
				</div>
			</div>
			
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Sheila_Wong.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Ms. Sheila Wong </a> <br>
						Assistant Conservation Manager of The Nature Conservancy Hong Kong
					</p>
					<blockquote class="speaker_topics">The Nature Conservancy "Save Our Shells" Project - Progress Updates, Lesson Learnt, Challenges, and The Way Forward</blockquote>
				</div>
			</div>
			<!-- Keynote Speakers - SECTION Food, Plastic, and Packaging Waste - END -->
			
			<h3 class="section_heading" style="text-align: center;">Fast Fashion Waste</h3>
			<!-- Keynote Speakers - SECTION Fast Fashion Waste - START  -->
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Eddie_Wong.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Mr. Eddie Wong </a> <br>
						Director, Raw Material & Color Management of The Children’s Place
					</p>
					<blockquote class="speaker_topics">The Role of Academia, Industrial and the General Public as an Agent for Change in Fast Fashion Waste Management</blockquote>
				</div>
			</div>

			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Ling_Wong.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Ms. Ling Wong</a> <br>
						Founder, 100degreec & President of Rotary Club of Smart Hong Kong
					</p>
					<blockquote class="speaker_topics">Driving Sustainability: The Role of PR as an Agent for Change In brand building and marketing</blockquote>
				</div>
			</div>
		
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Alex_Hung.png" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Mr. Alex Hung</a> <br>
						CEO of Crossover International Co. Ltd
					</p>
					<blockquote class="speaker_topics">The Future of Sustainable Fashion: Waste Management in Material, Design and Technology</blockquote>
				</div>
			</div>
					
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Phillis_Leung.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Ms. Yeelo Leung, Phillix </a> <br>
						Senior Sales and Operations Manager, ALDO Group International
					</p>
					<blockquote class="speaker_topics">Driving Sustainability into the Fashion Industry: How sustainability and waste management can be Approached in Multilevel of the Fashion Industry?</blockquote>
				</div>
			</div>
			
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Juliana_Lam.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Ms. Juliana Lam </a> <br>
						Chairman, Association of Hong Kong Gloves Traders Limited
					</p>
					<blockquote class="speaker_topics">Looking Back and Ahead: The implementation of UNSDGs in Fashion</blockquote>
				</div>
			</div>
			<!-- Keynote Speakers - SECTION Fast Fashion Waste - END -->
			
			<h3 class="section_heading" style="text-align: center;">Electric Vehicle Waste</h3>
			<!-- Keynote Speakers - SECTION Electric Vehicle Waste - START  -->
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/placeholder.png" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Mr. Jerrik Wong </a> <br>
						Assistant Business Development Manager, Li Tong Group
					</p>
					<blockquote class="speaker_topics">Closed Loop Electric Vehicle Battery Recycling Solution</blockquote>
				</div>
			</div>
			
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Chow_Yui_Cheung.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Mr. Clement Chow </a> <br>
						Certified ESG Planner CEP®
					</p>
					<blockquote class="speaker_topics">ESG in the Electric Vehicle Industry</blockquote>
				</div>
			</div>
			
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Andrew_Wu.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Dr. Andrew Wu </a> <br>
						Lecturer, The School of Professional Education and Executive Development, The Hong Kong Polytechnic University
					</p>
					<blockquote class="speaker_topics">Promotion of Electric Vehicle in Smart City: The Establishment of Electric Vehicle Battery Waste Management</blockquote>
				</div>
			</div>
			
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/John_Yu.jpg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Mr. YU Shing Chung, John</a> <br>
						Professional Member of Hong Kong Sea Transport and Logistics Association (HKSTLA); Head of Operations, Aramex Hong Kong Limited
					</p>
					<blockquote class="speaker_topics">Achieving Resilience and Sustainability for the Electric Vehicle Battery Supply Chain</blockquote>
				</div>
			</div>			
			<!-- Keynote Speakers - SECTION Electric Vehicle Waste - END -->
			
			<h3 class="section_heading" style="text-align: center;">Construction Material Waste</h3>
			<!-- Keynote Speakers - SECTION Construction Material Waste - START  -->
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Nicole_Yiu.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Dr. Nicole Yiu </a> <br>
						Lecturer, Department of Civil and Environmental Engineering, The Hong Kong Polytechnic University
					</p>
					<blockquote class="speaker_topics">Environmental Management System in Hong Kong Construction Sector</blockquote>
				</div>
			</div>
			
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Kenny_lok.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Mr. Lok Ka Ming </a> <br>
						Treasurer of the Hong Kong Waste Management Association (HKWMA); Co-founder, EnviPro Technology Co. Ltd.
					</p>
					<blockquote class="speaker_topics">Odour Control in Hong Kong - Experience Sharing</blockquote>
				</div>
			</div>
			
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Dr_Xie.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Dr. XIE Siqi, Seakay </a> <br>
						Senior Engineer, AECOM Asia Co. Ltd.
					</p>
					<blockquote class="speaker_topics">Environmental-friendly Transport Services in Hong Kong</blockquote>
				</div>
			</div>
			
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Jacky_Fong.png" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Mr. Jacky Fong </a> <br>
						Architect, P&T Architects Limited
					</p>
					<blockquote class="speaker_topics">“Living” Architecture – Introduction to Construction Waste & How Architecture Can Be Environmentally Friendly Both Actively & Passively?</blockquote>
				</div>
			</div>
			
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Quennie Liu.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Dr. Quennie Liu </a> <br>
						Senior Sustainability Manager, A Plastic Ocean Foundation
					</p>
					<blockquote class="speaker_topics">The Potential of Alternative Materials in Replacing Sea Sands</blockquote>
				</div>
			</div>
			
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Henry_Ngai.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Mr. Henry Ngai </a> <br>
						CEO of BE Green Technology Limited
					</p>
					<blockquote class="speaker_topics">The Technology, Development, and Market Application of Smart Recycling</blockquote>
				</div>
			</div>
			<!-- Keynote Speakers - SECTION Construction Material Waste - END -->
			<!-- Keynote Speakers - SECTION CONTENT - END -->

		</div>
	</div> <!-- /container -->
	<?php include "components/footer.php" ?>

	<!-- Bootstrap core JavaScript
  ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<?php include "components/fixedButton_n_scripts.php" ?>
</body>

</html>