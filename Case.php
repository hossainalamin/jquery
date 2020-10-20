    <?php
    $bgcolor="#444";
    $font="arial";
    $x=5;
    session_start();
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
    	<meta charset="UTF-8">
    	<title>Jquery</title>
    	<style>
    		p {
    			margin: 0px;
    			padding: 0px;
    		}

    		body {
    			font-family: <?php echo $font;
    			?>
    		}

    		.php {
    			background: <?php echo $bgcolor;
    			?>min-height: 900px;
    			margin: 0 auto;
    		}

    		#head {
    			background-color: #444;
    			height: 100px;
    			margin: 0 auto;
    			text-align: center;
    			color: aliceblue;
    		}

    		#maincontent {
    			min-height: 400px;
    			background-color: darkgray;
    		}

    		#maincontent h2 {
    			text-align: center;
    		}

    		#footer {

    			background: #444;
    			color: #fff;
    			text-align: center;

    		}

    	</style>


    </head>

    <body>

    	<div class="php">
    		<section id="head">
    			<h2>Jquery learning tuitorial </h2>
    		</section>
    		
    		<section id="maincontent">

    		</section>

    		<section id="footer">
    			<h2>Ending the page.</h2>
    			<span>&copy;<?php echo date("Y");?>Alamin's website</span>
    		</section>
    	</div>
    	<script src="js/jquery-3.5.1.min.js"></script>
    	<script src="js/main.js"></script>
    </body>

    </html>
