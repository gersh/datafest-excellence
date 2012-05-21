<?php print ""; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Inside/Out: Campaign Financing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
	<script type="text/javascript" src="jquery.min.js"></script>
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<link href="style.css" rel="stylesheet" type="text/css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container" >
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Inside/Out: Campaign Financing</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
	<div>
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit" style="height:700px;">
        <h1></h1>
			<div id="heat_map"></div>
			<span id="year" style="font-size:20pt;">2012</span>
			<div id="slider"></div>
			<div style="z-index:0;position:relative;left:-200px;" id="map"></div>
        <!-- <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p> -->
      </div>
	<div style="z-index:1000;position:relative;top:-300px;background-color:#FFF;width:200px;" id="mouseovers"></div>
	</div>
      <!-- Example row of columns -->
	 <div style="position:absolute;top:900px;">
    <div class="marketing" >
  <h2 align="center">Recent News on Inside/Out: Campaign Financing</h2>
  <hr color="#eeeeee" size="4" width="100%">
  	</div>
  	<div class="row">
        <div class="span8">
          <h2>Walker Not Alone in Major Out-of-State Donations</h2>
          <div class="row-fluid">
      <div class="span6"><p>Scott Walker, the Wisconsin Governor facing a recall election next month, is not alone in his out-of-state fundraising techniques.  The governor has raised eyebrows in his record-breaking fundraising for the election, $12 million more than any other Wisconsin governor in the last 15 years. However, 50 percent of these donations are coming from out of state.  Raising eyebrows about a state election that has now become national fight.</p>
      <p>But a large amount of money coming from out of state for gubernatorial run is not unprecedented in the country.  Since 1990 there have been 71 gubernatorial candidates who raised more than 50 percent of their funding from out of state.  Of these, 25 candidates had upwards of 75 percent of their donations come from out of state.</p>
      </div>
      <div class="span6">
      <img src="NRA_Walker.jpg" height="160"> <br>
      <p>The large percentage of money coming from out of Wisconsin is certainly a change for Walker, who only had 7 percent of his donations coming from out-of-state in 2010 when he raised $10 million.  But an increase of out of state donors is not a guarantee of a win.  Since 1990, 13 gubernatorial candidates have had more than 90 percent of their donations come from out of state.  Only two of these candidates were elected.</p></div>
    </div>
        <p><a class="btn" href="#">More &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Vermont’s Governor Races Lose Appeal for Out-of-State Donors</h2>
           <p>Over the last two decades, Vermont's gubernatorial elections have appealed to out-of-state donors.  Since 1990 more than a third of donations give to candidates running for governor in the Green Mountain state have come from out-of-state donations. But when Howard Dean left, so did the money.  When Dean threw his resources into his 2004 presidential campaign, Vermont's gubernatorial out-of-state donors plummeted to a mere sixteen percent.</p>
          <p><a class="btn" href="#">More &raquo;</a></p>
       </div>
      </div>
</div>
      <hr>

 

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="d3.v2.js"></script>
	<script type="text/javascript" src="jquery-ui-1.8.20.custom.min.js"></script>
	
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
	<script src="script.js"></script>

	<a href="timg.png">graph</a> | <a href="https://www.google.com/fusiontables/DataSource?snapid=S506081pWcL">Fusion</a>
  </body>
</html>
