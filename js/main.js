$(document).ready(function () {
	$('button').click(function () {
		$('.first').animate({
			left: '200px',
			width: 'toggle',
			fontSize: '50px',
			width: '300px',
			//height: '+=200px',
			opacity: .5
		});

		var Alamin = $('.another');

		Alamin.animate({
			height: '300px',
			opacity: '.7'
		}, "slow");
		Alamin.animate({
			width: '300px',
			opacity: '.7'
		}, "slow");
		Alamin.animate({
			height: '100px',
			opacity: '1'
		}, "slow");
		Alamin.animate({
			width: '100px',
			opacity: '1'
		}, "slow");
	});

	$('.Alamin').click(function () {
		$('.lorem').slideDown(2000);
	});

	$('button').click(function () {
		$('.lorem').stop();
	});
	
	$('.back').click(function () {
		$('.lorem1').hide(1000,function(){
			alert('Hi');
		});
	})
});
