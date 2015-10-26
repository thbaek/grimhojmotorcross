// JavaScript Document
$().ready(function() {
    $('#wrapper').tubular({videoId: 'Be00TWe2DwU&feature'});
	$("iframe#ytplayer").attr("src", $("iframe#ytplayer").attr("src").replace("autoplay=0", "autoplay=1"));
});