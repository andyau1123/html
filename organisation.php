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
			echo "$organisationPage$confName";
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
  #committee_table p, #intl_committee_table p {
    padding: 15px 0px 15px 10px;
    margin: 0px 0px 0px 0px;
    vertical-align: middle;

  }

  #supporting_org_table > tbody > tr *{
    vertical-align: middle;
    border: none;
  }
  #supporting_org_table > tbody > tr{
    border-bottom: 1px solid #ccc;
  }
  #supporting_org_table > tbody > tr:last-child{
    border-bottom: none;
  }
  #supporting_org_table > tbody > tr > td span{
    font-size: 16px;
    font-weight: bold;
  }
</style>

<body class="fontfamily">
  <?php include "components/header.php" ?>

  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    
    <!-- Conference Chair -->
    <div class="" style="text-align: justify">
      <!-- Big Title -->
      <h2 style="color: #111177;">Organising Committee</h2><br>

      <h3 style="background-color: #fcfcfc;color: #111177;">Conference Chair:</h3>
      <p style="font-size: 18px;">
        <a 
          href="https://directory.cpce-polyu.edu.hk/staff-directory/en/cpce/cpce-acadiv-bhm-acastf/yuiyip-lau"
          target="_blank"
          >Dr. LAU Yui Yip</a>
          <br/>
          <span>
            Interim Head of Student Affairs and Senior Lecturer, </br> Division of Business and Hospitality Management, The School of Professional Education and Executive Development, The Hong Kong Polytechnic University
          </span>
      </p>

      <br>

      <!-- Conference Co-Chairs -->
      <h3 id="1" style="background-color: #fcfcfc;color: #111177;">Conference Co-Chairs:</h3>
      <p>
        
        <a href="https://scm.hsu.edu.hk/us/aboutus/faculty/57"
          target="_blank">Dr. WONG Yin Cheung</a>
          <br/>
          <span>
            Associate Head and Associate Professor,</br> Department of Supply Chain and Information Management, The Hang Seng University of Hong Kong
          </span>
      </p>
	  <p>
        
        <a href="https://www.thei.edu.hk/staff/details/man-hin-eve-chan"
          target="_blank">Dr. CHAN Man Hin, Eve</a>
          <br/>
          <span>
            Assistant Professor,</br> Department of Fashion Design, Faculty of Design and Environment, Technological and Higher Education Institute of Hong Kong
          </span>
      </p>
      <!--<p>
        <a href="https://directory.cpce-polyu.edu.hk/staff-directory/en/cpce/cpce-acadiv-sehs-acastf/andrew-wu"
          target="_blank">Dr. WU Yang</a>
          <br/>
          <span>
          Lecturer,</br> Division of Science, Engineering and Health Studies The School of Professional Education and Executive Development, The Hong Kong Polytechnic University
          </span>
      </p>-->

      <br>

      <!--HEADER: Organising Committee -->
      <h3 style="background-color: #fcfcfc;color: #111177;">Organising Committee</h3>  
      
      <!-- Table of Committee Member -->
      <table id="committee_table" class="table">
        <tbody>
          <!--<tr>
            <td>
              <p>
                <a 
                  href="https://www.thei.edu.hk/staff/details/man-hin-eve-chan"
                  target="_blank">Dr. CHAN Man Hin</a>
                  <br/>
                  <span>
                    Assistant Professor,</br> Department of Design, Technological and Higher Education Institute of Hong Kong
                  </span>
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <p>
                <b>Prof. CHEN Jihong</b>
                  <br/>
                  <span>
                  Distinguished Professor,</br> College of Management, Shenzhen University
                  </span>
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <p>
                <a 
                  href="https://www.iftm.edu.mo/shm/en/people/faculty-members/index.html?name=jenny"
                  target="_blank">Dr. GUAN Jieqi</a>
                  <br/>
                  <span>
                    Assistant Professor,</br> School of Hospitality Management, Macao Institute for Tourism Studies
                  </span>
              </p>
            </td>
          </tr>-->
          <tr>
            <td>
              <p>
                <a 
                  href="https://staff.uic.edu.cn/adolfng/en"
                  target="_blank">Prof. NG Adolf Koi Yu</a>
                  <br/>
                  <span>
                    Acting Dean and Chair Professor,</br> Faculty of Business and Management, BNU-HKBU United International College
                  </span>
              </p>
            </td>
          </tr>
		  <tr>
            <td>
              <p>
                <a 
                  href="https://www.scifac.hku.hk/people/not-christelle-aurelie"
                  target="_blank">Dr. NOT Christelle</a>
                  <br/>
                  <span>
                    Senior Lecturer,</br> Department of Earth Sciences, The University of Hong Kong
                  </span>
              </p>
            </td>
          </tr>
		  <tr>
            <td>
              <p>
                <a 
                  href="https://www.thei.edu.hk/staff/details/chi-wing-alex-tsang"
                  target="_blank">Ir Dr TSANG Chi Wing</a>
                  <br/>
                  <span>
                  Assistant Professor, </br> Department of Construction Technology and Engineering, Technological and Higher Education Institute of Hong Kong
                  </span>
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <p>
                <a 
                  href="https://directory.cpce-polyu.edu.hk/staff-directory/en/cpce/cpce-ceso/macy-wong"
                  target="_blank">Dr. WONG Mei Chi</a>
                  <br/>
                  <span>
                  Head of Employability Services Office and Senior Lecturer,</br> Division of Business and Hospitality Management, The School of Professional Education and Executive Development, The Hong Kong Polytechnic University
                  </span>
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <p>
                <a 
                  href="https://directory.hkcc-polyu.edu.hk/staff-directory/en/hkcc/hkcc-bhm-acastf/helen-wong"
                  target="_blank">Dr. WONG Shun Mun</a>
                  <br/>
                  <span>
                  Division Head and Principal Lecturer,</br> Division of Business and Hospitality Management, The School of Professional Education and Executive Development, The Hong Kong Polytechnic University
                  </span>
              </p>
            </td>
          </tr>
		  <tr>
            <td>
              <p>
                <a 
                  href="https://directory.cpce-polyu.edu.hk/staff-directory/en/cpce/cpce-acadiv-sehs-acastf/andrew-wu"
                  target="_blank">Dr. WU Yang</a>
                  <br/>
                  <span>
                  Lecturer,</br> Division of Science, Engineering and Health Studies, The School of Professional Education and Executive Development, The Hong Kong Polytechnic University
                  </span>
              </p>
            </td>
          </tr>
		  <tr>
            <td>
              <p>
                <a 
                  href="https://directory.cpce-polyu.edu.hk/staff-directory/en/cpce/cpce-acadiv-lc-acastf/cecilia-pun"
                  target="_blank">Dr. PUN, Fung-kan Cecilia</a>
                  <br/>
                  <span>
                  Senior Lecturer,</br> Division of Languages and Communication, The School of Professional Education and Executive Development, The Hong Kong Polytechnic University
                  </span>
              </p>
            </td>
          </tr>
          <!--<tr>
            <td>
              <p>
                <a 
                  href="https://www.polyu.edu.hk/en/lms/people/academic-staff/t-l-yip/"
                  target="_blank">Ir Dr. YIP Tsz Leung</a>
                  <br/>
                  <span>
                  Associate Dean of Students and Associate Professor,</br> Department of Logistics and Maritime Studies, The Hong Kong Polytechnic University
                  </span>
              </p>
            </td>
          </tr>-->
        </tbody>
      </table>

      <br>

      <!--HEADER: International Steering Committee -->
      <h3 style="background-color: #fcfcfc;color: #111177;">International Steering Committee</h3>  
      
      <!-- Table of International Steering Committee -->
      <table id="intl_committee_table" class="table">
        <tbody>
          <tr>
            <td>
              <p>
                <a href="http://nav.jmu.edu.cn/info/1139/2992.htm" target="_blank">
                  Dr. CHEN Qiong
                </a>
                  <br/>
                  <span>
                    Lecturer,</br> Navigation College, Jimei University
                  </span>
              </p>
            </td>
          </tr>
		  <tr>
            <td>
              <p>
                <a href="https://scholar.google.com/citations?user=bRnALFwAAAAJ&hl=ro"
                  target="_blank">Dr. Cristina Dragomir</a>
                  <br/>
                  <span>
                    Associate Professor, </br> Constanta Maritime University
                  </span>
              </p>
            </td>
          </tr>
		  <tr>
            <td>
              <p>
                <a href="https://www.iftm.edu.mo/shm/en/people/faculty-members/index.html?name=jenny"
                  target="_blank">Dr. GUAN Jieqi</a>
                  <br/>
                  <span>
                    Assistant Professor, </br> School of Hospitality Management, Macao Institute for Tourism Studies
                  </span>
              </p>
            </td>
          </tr>
          <!--<tr>
            <td>
              <p>
                <b>Dr. HU Rong</b>
                  <br/>
                  <span>
                    Associate Professor and Director of Postgraduate Department,</br> School of Customs and Public Administration, Shanghai Customs College
                  </span>
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <p>
                <a href="https://mef.kmust.edu.cn/info/1297/1479.htm"
                  target="_blank">Dr. LEI Zhimei</a>
                  <br/>
                  <span>
                    Lecturer,</br> Faculty of Management and Economics, Kunming University of Science and Technology
                  </span>
              </p>
            </td>
          </tr>-->
          <tr>
            <td>
              <p>
                <a href="https://scholar.google.com/citations?user=JXHUGJAAAAAJ&hl=en"
                  target="_blank">Dr. Maneerat KANRAK</a>
                  <br/>
                  <span>
                    Assistant Professor,</br> Faculty of Interdisciplinary Studies, Khon Kaen University
                  </span>
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <p>
                <a 
                  href="https://www.ljmu.ac.uk/about-us/staff-profiles/faculty-of-engineering-and-technology/school-of-engineering/mark-poo"
                  target="_blank">Dr. Mark POO</a>
                  <br/>
                  <span>
                    Lecturer,</br>Liverpool Hope Business School, Liverpool Hope University
                  </span>
              </p>
            </td>
          </tr>
        </tbody>
      </table>

      <br>

      <!-- HEADER: Secretary -->
      <!--<h4 style="color: #1d1da3;">Conference Secretariat</h4>
      <p>Ms. CHUNG Chui Ying, Cherry</p>-->

      <!--<br>-->


      <!-- Supporting Organizations - Start -->
      <h3 style="background-color: #fcfcfc;color: #111177;">Supporting Organizations</h3>
      <table id="supporting_org_table" class="table">
        <tbody>
          <tr>
            <td class="col-md-1 text-center">
                <a 
                  href="https://hkstla.org/zh/homepage-%E4%B8%AD%E6%96%87-%E9%A6%99%E6%B8%AF/"
                  target="_blank">
                  <img src="images/HKSTLA_Logo.png" alt="" srcset="" style="width: 100%; height:auto;">
                </a>
                <br/><br/>
                <span>
                  Hong Kong Sea Transport and Logistics Association
                </span>
            </td>
            <!-- <td class="col-md-1 text-center">
              <a 
                href="http://seatransport.org/"
                target="_blank">
                  <img src="images/IOS_Logo.jpg" alt="" srcset="" style="width: 70%; height:auto;">
              </a>
              <br/><br/>
              <span>
                Institute of Seatransport
              </span>
            </td> -->
            <td class="col-md-1 text-center">
              <a 
                  href="https://www.ccapptia.com/"
                  target="_blank">
                    <img src="images/CCAPPTIA_Logo.jpeg" alt="" srcset="" style="width: 70%; height:auto;">
                </a>
                <br/><br/>
                <span>
                  Climate Change Adaptation Planning for Port, Transportation Infrastructure, and the Arctic
                </span>
            </td>
            <!-- <td class="col-md-1 text-center">
              <a
                  href="https://www.cbea.com.hk/?lang=en"
                  target="_blank">
                    <img src="images/CBEA_Logo.png" alt="" srcset="" style="width: 70%; height:auto;">
                </a>
                <br/><br/>
                <span>
                  Hong Kong Cross-Border E-commerce Association
                </span>
            </td> -->
			<td class="col-md-1 text-center">
              <a 
                  href="https://www.nature.org/en-us/"
                  target="_blank">
                    <img src="images/The_Nature_Conservancy_logo.jpg" alt="" srcset="" style="width: 100%; height:auto;">
                </a>
                <br/><br/>
                <span>
                  The Nature Conservancy
                </span>
            </td>
			<td class="col-md-1 text-center">
              <a 
                  href="https://gbatalents.org/"
                  target="_blank">
                    <img src="images/GBATA_logo.jpg" alt="" srcset="" style="width: 70%; height:auto;">
                </a>
                <br/><br/>
                <span>
                  Greater Bay Area Hong Kong & Macau Talents Association
                </span>
            </td>
			<td class="col-md-1 text-center">
              <a 
                href="https://hkavrar.com/"
                target="_blank">
                  <img src="images/HKAVRAR_Logo.png" alt="" srcset="" style="width: 70%; height:auto;">
              </a>
              <br/><br/>
              <span>
              Hong Kong Association for VR AR
              </span>
            </td>
          </tr>

          <tr>
            <!--<td class="col-md-1 text-center">
                <a 
                  href="http://www.filsci.org/"
                  target="_blank">
                  <img src="images/FGBILSCI_Logo.png" alt="" srcset="" style="width: 100%; height:auto;">
                </a>
                <br/><br/>
                <span>
                  The Federation of Greater Bay International Logistics and Supply Chain Indstry
                </span>
            </td>-->
            <td class="col-md-1 text-center">
              <a 
                href="https://www.hkie.org.hk/en/quali/discipline_detail/15/"
                target="_blank">
                  <img src="images/HKIE_LED_Logo.png" alt="" srcset="" style="width: 70%; height:auto;">
              </a>
              <br/><br/>
              <span>
                The Hong Kong Institution of Engineers (Logistics & Transportation Division)
              </span>
            </td>
            <td class="col-md-1 text-center">
              <a 
                  href="https://www.hkmaritimemuseum.org/"
                  target="_blank">
                    <img src="images/HKMM.jpg" alt="" srcset="" style="width: 70%; height:auto;">
                </a>
                <br/><br/>
                <span>
                  Hong Kong Maritime Museum
                </span>
            </td>
            <!--<td class="col-md-1 text-center">
              <a
                  href="https://lms-icms.polyu.edu.hk/"
                  target="_blank">
                    <img src="images/ICMS_Logo.png" alt="" srcset="" style="width: 70%; height:auto;">
                </a>
                <br/><br/>
                <span>
                  CY Tung International Centre for Maritime Studies
                </span>
            </td>-->
			<td class="col-md-1 text-center">
              <a 
                  href="https://www.haesco.org/"
                  target="_blank">
                    <img src="images/HAESCO_logo.jpg" alt="" srcset="" style="width: 70%; height:auto;">
                </a>
                <br/><br/>
                <span>
                  Hong Kong Association of Energy Service Companies Ltd
                </span>
            </td>
			<td class="col-md-1 text-center">
              <a 
                  href="https://www.aplasticocean.foundation/"
                  target="_blank">
                    <img src="images/APOF_logo.jpg" alt="" srcset="" style="width: 70%; height:auto;">
                </a>
                <br/><br/>
                <span>
                  A Plastic Ocean Foundation
                </span>
            </td>
			<td class="col-md-1 text-center">
              <a 
                href="https://www.instagram.com/sustainablelab.hk/"
                target="_blank">
                  <img src="images/SustainableLab_Logo.png" alt="" srcset="" style="width: 100%; height:auto;">
              </a>	<!--unknown website to find -->
              <br/><br/>
              <span>
				Sustainable Lab HK
              </span>
			  </td>
          </tr>

          <tr>
		  <td></td>
            <td class="col-md-1 text-center">
                <a 
                  href="https://prisc.hsu.edu.hk/"
                  target="_blank">
                  <img src="images/PRISC Logo.png" alt="" srcset="" style="width: 100%; height:auto;">
                </a>
                <br/><br/>
                <span>
                  Policy Research Institute of Global Supply Chain (The Hang Seng University of Hong Kong)
                </span>
            </td>
            <td class="col-md-1 text-center">
              <a 
                href="https://rcgb.speed-polyu.edu.hk/"
                target="_blank">
                  <img src="images/RCGB_Logo.png" alt="" srcset="" style="width: 70%; height:auto;">
              </a>
              <br/><br/>
              <span>
                Research Centre for Green Business
              </span>
            </td>
            <!--<td class="col-md-1 text-center">
              <a 
                href="https://rcgb.speed-polyu.edu.hk/"
                target="_blank">
                  <img src="images/CMI_Logo.jpg" alt="" srcset="" style="width: 70%; height:auto;">
              </a>
              <br/><br/>
              <span>
              China Maritime Institute
              </span>
            </td> -->
			<td class="col-md-1 text-center">
              <a 
                href="https://industrialhistoryhk.org/hong-kong-glove-manufacturers/"
                target="_blank">
                  <img src="images/AHKGT_logo.png" alt="" srcset="" style="width: 70%; height:auto;">
              </a> <!--unknown website to find -->
              <br/><br/>
              <span>
              The Association of Hong Kong Gloves Trader
              </span>
            </td>
			<td></td>
          </tr>
        </tbody>
      </table>

    </div> <!-- /container -->
  </div>

  <!-- Footer -->
  <?php include "components/footer.php" ?>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <?php include "components/fixedButton_n_scripts.php" ?>
</body>

</html>