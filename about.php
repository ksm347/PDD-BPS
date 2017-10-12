<?php
    session_start();
    $_SESSION['cpage']="about";
?>
<html>
<head>
<title>JKPDD</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-ptsans.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <?php include_once 'header.php'; ?>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
            <h2 align="center"><span><font color="brown"> Profile </font></span></h2>
          <div class="clr"></div>
          <p><strong> The Power Transmission and Distribution Sector of J&amp;K State is looked after by 
                    Power Development Department which is one of the department of J&amp;K Government. 
                    This sector has seen significant growth since its formation. The Power 
                    Development Department (PDD) of Government of J&amp;K was earlier responsible for 
                    generation, transmission &amp; distribution of electricity in the State of J&amp;K. 
                    Subsequently, the Power Development Corporation (JKPDC), a fully owned 
                    Government Company, was established in the year 1995, when the operation and 
                    maintenance of existing generating stations and setting up of future generating 
                    stations were entrusted to this corporation except one small hydel power station 
                    of 4 MW and few very small diesel stations totalling 24.92 MW still remain with 
                    PDD, besides the Transmission and Distribution Sector. The Department is meeting 
                    the Power requirement of the state through :</strong></p>
                    <p align="right"> <a href="profile.php"><font color="red"> Read More... </font></a> </p>
                    
        </div>
        <div class="article">
             <h2 align="center"><span><font color="brown"> History </font></span></h2> 
          <div class="clr"></div>
          <p align="center"><font color="#0099cc" size="3"><strong> CHRONOLOGY OF IMPORTANT EVENTS IN J&amp;K POWER SYSTEM </strong></font></p>
          <p align="center"><font size="3" color="#da0008"><strong>1905-1973 </strong></font></p>
          <ul style="list-style-type: circle;">
            <li class="MsoNormal" style="font-size: 13px; font-family: Verdana"> Jammu and Kashmir was second only to the erstwhile Mysore State in having a hydro Power Project. 4000kVA Mohara Power House was commissioned in 1905 </li>
            <li class="MsoNormal" style="font-size: 13px; font-family: Verdana"> Ganderbal Project commissioned by the then Indian President Dr Rajendra Prasad in 1955. </li>
            <li class="MsoNormal" style="font-size: 13px; font-family: Verdana"> Local grid to which two sources were connected came into existence for the first time in the state in 1962. (It was an extremely exciting event for the Engineers).New Mohra power house at 50 Hz was synchronized with Ganderbal power house.</li>
            <li class="MsoNormal" style="font-size: 13px; font-family: Verdana"> 132 KV Transmission line between Kalakote and Chenani was constructed by Electric Department along with 132 / 66 kV Grid station at Janipora in 1967-68.</li>
            <li class="MsoNormal" style="font-size: 13px; font-family: Verdana"> DG Station (5MW) at Bemina commissioned in 1967.</li>
            <li class="MsoNormal" style="font-size: 13px; font-family: Verdana">Constitution of Jammu and Kashmir Electricity Board in pursuance of J&amp;K Electricity Supply Act 1971. </li>
            <li class="MsoNormal" style="font-size: 13px; font-family: Verdana"> Upper Sindh–I (2×11.3 MW) was commissioned in December,1973.</li>
          </ul>
         <p align="right"> <a href="history.php"><font color="red"> Read More... </font></a> </p>
        </div>
      </div>
        <?php include_once 'sidebar.html';?>
        <div class="clr"></div>
    </div>
  </div>
  <?php include_once 'footer.php';?>
</div>
  </body>
</html>
