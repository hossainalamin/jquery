<?php include"inc/header.php";?>
<?php
function add()
{
	echo "live project";
}
function prepend()
{
	echo "Trainig with ";
}
function after()
{
	echo "Project";
}
function before()
{
	echo "Training With";
}
?>
<section id="maincontent">
	<h2>Add Element</h2>
	<hr>
	<script>
		$(document).ready(function() {
			$('#add').click(function() {
				$('#app').append('<?php add();?>');
			});
			$('#prepend').click(function() {
				$('#pre').prepend('<?php prepend();?>');
			});
			$('#after').click(function() {
				$('#live').after('<?php after();?>');
			});
			$('#before').click(function() {
				$('#live').before('<?php before();?>');
			});
		});

	</script>
	<p id="app">Training with <p>
	<p id="pre">Live project <p>
	<p id="live">Live</p>
	<br>
	<button id="add">Append</button>
	<button id="prepend">Prepend</button>
	<button id="after">After</button>
	<button id="before">Before</button>
</section>
<?php include"inc/footer.php";?>
