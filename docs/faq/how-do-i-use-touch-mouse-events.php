<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Q&A - jQuery Mobile Demos - How do I use touch and mouse events?</title>
	<link rel="stylesheet"  href="../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<link rel="shortcut icon" href="../_assets/favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="../../js/jquery.js"></script>
	<script src="../_assets/js/"></script>
	<script src="../../js/"></script>
</head>
<body>
<div data-role="page" class="jqm-demos jqm-faq">

	<div data-role="header" class="jqm-header">
		<h1 class="jqm-logo"><img src="../_assets/img/jquery-logo.png" alt="jQuery Mobile Framework"></h1>
		<a href="#panel-nav" class="jqm-navmenu-link" data-icon="bars" data-iconpos="notext">Navigation</a>
		<a href="#" class="jqm-search-link" data-icon="search" data-iconpos="notext">Search</a>
		<?php include( '../search.php' ); ?>
	</div><!-- /header -->
	
	<div data-role="content" class="jqm-content">
			<h2>Question:</h2>
            			
			<h1 class="jqm-faq-question">How do I use touch and mouse events?</h1>

			<h2>Answer:</h2>
            
			<p class="jqm-intro">One important consideration in mobile is handling mouse and touch events. These events differ significantly across mobile platforms, but the common denominator is that click events will work everywhere, but usually after a significant delay of 300-500ms. This delay is necessary for the browser to wait for double tap, scroll and extended hold tap events to potentially occur. To avoid this delay, it's possible to bind to touch events (ex. touchstart) but the issue with this approach is that some mobile platforms (WP7, Blackberry) don't support touch. To compound this issue, some platforms will emit <em>both</em> touch and mouse events so if you bind to both types, duplicate events will be fired for a single interaction.</p>
				<p>Our solution is to create a set of virtual events that normalize mouse and touch events. This allows the developer to register listeners for the basic mouse events, such as mousedown, mousemove, mouseup, and click, and the plugin will take care of registering the correct listeners behind the scenes to invoke the listener at the fastest possible time for that device. This still retains the order of event firing in the traditional mouse environment, should multiple handlers be registered on the same element for different events. The virtual mouse system exposes the following virtual events to jQuery bind methods: <code>vmouseover</code>, <code>vmousedown</code>, <code>vmousemove</code>, <code>vmouseup</code>, <code>vclick</code>, and <code>vmousecancel</code>.</p>
			
			
			<a href="index.php" class="jqm-button" data-role="button" data-inline="true" data-mini="true" data-icon="arrow-l" data-iconpos="left">All Questions &amp; Answers</a>
			
	
	</div><!-- /content -->
	
	<div data-role="footer" class="jqm-footer">
		<p class="jqm-version"></p>
		<p>Copyright 2013 The jQuery Foundation</p>
	</div><!-- /footer -->
	
<?php include( '../global-nav.php' ); ?>
	
</div><!-- /page -->
</body>
</html>
