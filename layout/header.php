<?php include("php/variables.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="public/js/main.js"></script>
        <link rel="stylesheet" type="text/css" href="public/styles/main.css" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="nav-container">
	        <div class="nav">
	        	<h1><a href="<?php echo($SITE_ROOT); ?>">Bran Klopping</a></h1>
	        	<ul>
	        		<li>
	        			<h2>Portfolio</h2>
	        			<ul>
		        			<li><a href="<?php echo($SITE_ROOT); ?>?page=main">current work for sale</a></li>
		        			<li><a href="<?php echo($SITE_ROOT); ?>?page=pp">previous paintings</a></li>
		        			<li><a href="<?php echo($SITE_ROOT); ?>?page=pe">performance</a></li>
		        			<li><a href="<?php echo($SITE_ROOT); ?>?page=vi">video</a></li>
		        		</ul>
		        	</li>
		        	<li>
		        		<h2>About</h2>
		        		<ul>
		        			<li><a href="<?php echo($SITE_ROOT); ?>?page=bi">bio</a></li>
		        			<li><a href="<?php echo($SITE_ROOT); ?>?page=cv">cv</a></li>
		        			<li><a href="<?php echo($SITE_ROOT); ?>?page=pr">press</a></li>
		        			<li><a href="<?php echo($SITE_ROOT); ?>?page=co">contact</a></li>
		        		</ul>
		        	</li>
	        	</ul>
	        </div>
		</div>
        <div class="content">