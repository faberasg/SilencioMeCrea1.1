
var posMenu = $("#menu").offset().top;
$(window).scroll(function(){

var posScroll =$(window).scrollTop();


var numPos = posScroll * 0.5;


if(posScroll > posMenu ){
	$("#menu").addClass("menuEstatico");
	$("#btUp").slideDown();
}
else if(posScroll < posMenu ){
	$("#menu").removeClass("menuEstatico");
	$("#btUp").slideUp();
}
	

$("header").css({

	"background-position-y" : numPos + "px"
})

$(".sec2").css({

	"background-position-y" : numPos + "px"
})

});