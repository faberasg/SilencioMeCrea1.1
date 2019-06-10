var pos1 = $("#seccion1 ").offset().top;


$("#menu li:eq(2)").click(function(){
$("html").animate({
     scrollTop : pos1
})
$("#seccion1 p").animate({
"opacity" : "1"

}, 1000)

});







var pos2 = $("#seccion2").offset().top;


$("#menu li:eq(3)").click(function(){
$("html").animate({
     scrollTop : pos2
})
})

var pos3 = $("#carousel").offset().top;


$("#menu li:eq(1)").click(function(){
$("html").animate({
     scrollTop : pos3
})
})


var pos4 = $("header").offset().top;


$("#menu li:eq(0)").click(function(){
$("html").animate({
     scrollTop : pos4
})
})


$("#logo").animate({
	"opacity": "1"
}, 2000)


$(".page-link").click(function(){

     var videoAcargar = $(this).attr("video");

     $("video").click(function(){
          $("source src").text(videoAcargar)
     
     })
})


$(document).ready(function(){
	var imgItems = $('.slider li').length; // Numero de Slides
	var imgPos = 1;

	// Agregando paginacion --
	for(i = 1; i <= imgItems; i++){
		$('.pagination').append('<li><span class="fa fa-circle"></span></li>');
	} 
	//------------------------

	$('.slider li').hide(); // Ocultanos todos los slides
	$('.slider li:first').show(); // Mostramos el primer slide
	$('.pagination li:first').css({'color': 'rgb(24, 50, 99)'}); // Damos estilos al primer item de la paginacion

	// Ejecutamos todas las funciones
	$('.pagination li').click(pagination);


	

	// FUNCIONES =========================================================

	function pagination(){
		var paginationPos = $(this).index() + 1; // Posicion de la paginacion seleccionada

		$('.slider li').hide(); // Ocultamos todos los slides
		$('.slider li:nth-child('+ paginationPos +')').fadeIn(); // Mostramos el Slide seleccionado

		// Dandole estilos a la paginacion seleccionada
		$('.pagination li').css({'color': '#858585'});
		$(this).css({'color': 'rgb(24, 50, 99)'});

		imgPos = paginationPos;

	}

	

});

