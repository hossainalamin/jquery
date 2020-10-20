    <?php
    $bgcolor="#444";
    $font="arial";
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
    	<meta charset="UTF-8">
    	<title>Jquery</title>
    	<link rel="stylesheet" href="style.css">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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

    	<script src="js/jquery-3.5.1.min.js"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    </head>

    <body>

    	<div class="php">
    		<section id="head">
    			<h2>Jquery learning tuitorial </h2>
    		</section>
