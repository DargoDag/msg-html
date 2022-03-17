$(document).ready(function () {
    $('.js-seo-text-toggle').on('click', function(){
        $('.seo-text__full').slideToggle(180);
        $(this).toggleClass("is-open").find('b').text(function(i, text){
			return text === "Читать полностью" ? "Свернуть" : "Читать полностью";
		});
	});
});