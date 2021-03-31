/* Code By Webdevtrick ( https://webdevtrick.com ) */
function Circlle(el){
  $(el).circleProgress({fill: {color: '#ff5c5c'}})
    .on('circle-animation-progress', function(event, progress, stepValue){
					$(this).find('strong').text(String(stepValue.toFixed(2)).substr(2)+'%');
			});  
};
Circlle('.round');