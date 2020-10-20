$(document).ready(function () {
	$('.me').show(); //. me selector show() action

	$('.selector').click(function () {
		$('p').hide();
	}); //click buttion then action happened on p tag

	$('.selector').click(function () {
		$(this).hide();
	}); //click button hide button

	$('.hide').click(function () {
		$('p.lorem').hide(0);
		$('p:last').hide(0); //it also can be used
	});

	$('#fruit').click(function () {
		$('ul li:first-child').hide();
	});
	$('#child').click(function () {
		$('ul li:nth-child(2)').hide();
	});

	$('.link').click(function () {
		$('[href]').hide();
	});

	$('p').dblclick(function () {
		$(this).hide();

	});
	$('h4').mouseenter(function () {
		$('.enter').hide();

	});

	$('h3').mouseenter(function () {
		alert("Hi");
	});

	$('h6').mouseleave(function () {
		alert('hello');
	});

	$('h5').hover(function () {
			alert('Alamin');
		},
		function () {
			alert('Emon');
		});

	$('input').focus(function () {
		$(this).css("background", "red");
	});

	$('b').on({
		mouseenter: function () {
			$(this).css("background-color", "red");
		},
		mouseleave: function () {
			$(this).css("background-color", "green");
		},
		click: function () {
			$(this).css("background-color", "yellow");

		}
	});

	$('.hide').click(function () {
		$('p').hide('slow');
	});

	$('.show').click(function () {
		$('p').show(1000);
	});
	$('.toggle').click(function () {
		$('p').toggle(1000);
	});

	$('button').click(function () {
		$('.box1').fadeIn();
		$('.box2').fadeIn(2000);
		$('.box3').fadeIn(3000);
	});
	$('.out').click(function () {
		$('.box1').fadeOut();
		$('.box2').fadeOut(2000);
		$('.box3').fadeOut(3000);
	});
	//fadetoggle another one
	
	$('.to').click(function () {
		$('.box4').fadeTo(1000,.3);
		$('.box5').fadeTo(2000,0.5);
		$('.box6').fadeto(3000,0.7);
	});
	
	$('.btn').click(function(){
		$('.lorem').slideToggle(2000);
	});//Up and Down
	
	
}); //for loading html
