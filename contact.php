<?php
    session_start();
    $_SESSION['cpage']="contact";
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
<div id="top"></div>
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
          <h2><span>Contact</span></h2>
          <div class="clr"></div>
          <p>Power Development Department (PDD) is one of the Department of Jammu & Kashmir State Government responsible for all functions related to transmission and distribution of electric power in the state. The generation sector is looked after by J &amp; K State Power Development Corporation (JKSPDC), which was carved out of PDD in the year 1995.</p>
        </div>
        <div class="article">
          <h2><span>Send us</span> mail</h2>
          <div class="clr"></div>
          <form action="process_contact.php" method="post" id="sendemail">
            <ol>
              <li>
                <label for="name">Name (required)</label>
                <input id="name" name="name" class="text" required maxlength="30">
              </li>
              <li>
                <label for="email">Email Address (required)</label>
                <input type="email" id="email" name="email" class="text" required maxlength="50" >
              </li>
              <li>
                <label for="phone">Phone Number</label>
                <input id="phone" name="phone" class="text" maxlength="11" onkeypress="return enterNumerics(event,this.id)" maxlength="10">
              </li>
              <li>
                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="8" cols="50" required></textarea>
              </li>
              <li>
                <input type="image" name="imageField" id="imageField" src="images/submit.gif" class="send" />
                <div class="clr"></div>
              </li>
            </ol>
          </form>
        </div>
      </div>
        <?php include_once 'sidebar.html'; ?>
        <div class="clr"></div>
    </div>
  </div>
    <?php include_once 'footer.php';?>
</div>
</body>
</html>
