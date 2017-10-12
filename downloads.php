<?php
    session_start();
    $_SESSION['cpage']="home";
?>
<html>
<head>
<title>JKPDD</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<link rel="stylesheet" type="text/css" href="css/form-1.css"/>
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
      <div class="slider">
        <div id="coin-slider"><a href="#"><img src="images/slide1.jpg" width="960" height="313" alt="" /></a> <a href="#"><img src="images/slide2.jpg" width="960" height="313" alt="" /></a> <a href="#"><img src="images/slide3.jpg" width="960" height="313" alt="" /></a></div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
    <div class="bg">
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
          <div class="article">
              <h1>Downloads</h1>
              <br>Open or Download Files for offline use<br>
              <table>
                  <tr>
                      <th colspan="2">Files</th>
                  </tr>
                  <tr>
                      <td>New Connection LTS</td>
                      <td><a href="downloads/New Connection_LTS.pdf" target="_blank"><img src="images/open.png" height="30" width="30"></a>&nbsp;<a href="downloads/New Connection_LTS.pdf" download><img src="images/download.png" height="30" width="30"></a></td>
                  </tr>
                  <tr>
                      <td>New Connection HTS</td>
                      <td><a href="downloads/New Connection_HTS.pdf" target="_blank"><img src="images/open.png" height="30" width="30"></a>&nbsp;<a href="downloads/New Connection_HTS.pdf" download><img src="images/download.png" height="30" width="30"></a></td>
                  </tr>
                  <tr>
                      <td>Permanent Disconnection</td>
                      <td><a href="downloads/Permanent_Disconnection.pdf" target="_blank"><img src="images/open.png" height="30" width="30"></a>&nbsp;<a href="downloads/Permanent_Disconnection.pdf" download><img src="images/download.png" height="30" width="30"></a></td>
                  </tr>
                  <tr>
                      <td>Tariff Order (2013-2014)</td>
                      <td><a href="downloads/Tarrif Order 2013-2014.pdf" target="_blank"><img src="images/open.png" height="30" width="30"></a>&nbsp;<a href="downloads/Tarrif Order 2013-2014.pdf" download><img src="images/download.png" height="30" width="30"></a></td>
                  </tr>
                  <tr>
                      <td>J & K Energy Conservation Act</td>
                      <td><a href="downloads/J&K Energy Conservation Act 2011.pdf" target="_blank"><img src="images/open.png" height="30" width="30"></a>&nbsp;<a href="downloads/J&K Energy Conservation Act 2011.pdf" download><img src="images/download.png" height="30" width="30"></a></td>
                  </tr>
                  <tr>
                      <td>Transmission Gist</td>
                      <td><a href="downloads/Transmission Gist.pdf" target="_blank"><img src="images/open.png" height="30" width="30"></a>&nbsp;<a href="downloads/Transmission Gist.pdf" download><img src="images/download.png" height="30" width="30"></a></td>
                  </tr>
                  <tr>
                      <td>Distribution APR Gist</td>
                      <td><a href="downloads/Disitribution APR Gist_28 Feb 14.pdf" target="_blank"><img src="images/open.png" height="30" width="30"></a>&nbsp;<a href="downloads/Disitribution APR Gist_28 Feb 14.pdf" download><img src="images/download.png" height="30" width="30"></a></td>
                  </tr>
              </table>
          </div>
      </div>
      <?php include_once 'sidebar.html'; ?>
      <div class="clr"></div>
    </div>
  </div>
    </div>
    <?php include_once 'footer.php'; ?>
</div>
</body>
</html>