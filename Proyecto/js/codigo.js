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

