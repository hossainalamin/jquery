<?php include"inc/header.php";?>
<?php
function name(){
	echo "Md Alamin Hossain";
}
function dept(){
	echo "<b>Computer science</b>";
}
function skill(){
	echo "PHP";
}
?>
<section id="maincontent">
	<h2>Set content and attribute</h2>
	<hr>
	<script>
		$(document).ready(function() {
			$('#name').click(function() {
				$('#getname').val("<?php name();?>");
			})
			$('#dept').click(function() {
				$('#line1').html("<?php dept();?>");
			});
			$('#skill').click(function() {
				$('#line2').text("<?php skill();?>");
			});
		});

	</script>
	<div>
		name:<input type="text" value="Name will be here" id="getname" />
	</div>
	<br>
	<p id="line1"><strong>Department</strong></p>
	<p id="line2"><strong>Skill</strong></p>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<button id="name">Show name</button>
	<button id="dept">Show dept</button>
	<button id="skill">Show Skill</button>
</section>
<?php include"inc/footer.php";?>
