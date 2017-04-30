$('.seguidilla').mouseover(function() {
	var fuente = $(this).attr("src");
	//alert(fuente); Funciono si selecciona la ruta completa

	$( "#imgjq" ).detach();
	$('#imagencentral').append("<img id='imgjq' src="+fuente+">");
});