//Weather request
var get_weather = $("#get-weather");
get_weather.on('click', function(){
	$.get("main.php", function(result){
		console.log(result);
	});
});