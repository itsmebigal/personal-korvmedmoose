var vimeoLink;
var color = ['ff9933', 'c9ff23', 'ff0179'];

$(document).ready(function(){

	vimeo_Reg = /https?:\/\/(?:www\.)?vimeo.com\/(?:channels\/|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|)(\d+)(?:$|\/|\?)/;


	$('iframe').each(function(){
		vimeoLink = $(this).attr('data-vimeo').match(vimeo_Reg);
		var randomColor = randomIntFromInterval(0,2);

		$(this).attr('src', '//player.vimeo.com/video/' + vimeoLink[3] + '?color=' + color[randomColor]);
	});
	console.log($(this));
	setTimeout(function(){
		$('.videoWrapper').removeClass('hide');
	}, 6000);
});

function randomIntFromInterval(min,max)
{
    return Math.floor(Math.random()*(max-min+1)+min);
}