$(function() {
	cbpHorizontalMenu.init();
});

$( document ).ready( function(){
	$( "#buscador" ).hide();

	$("#buscar").click(function(){
		$( "#buscador" ).show();
		$("#buscar").hide();
	});


});