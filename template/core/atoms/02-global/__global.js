$(document).ready(function () {
    // towls object
    if ( typeof window.towls !== "object" ) {
		window.towls = {}
    }
    // underscore template
    window.towls.getTemplate = function(templatePath,callback) {
		let tmpl_url = templatePath;
		$.ajax({
			url: tmpl_url,
			async: false,
			contentType: 'text',
			success: function (data) {
				callback(data);
			}
        });
        // USE FUNC
        // let demoTemp;
        // towls.getTemplate('/template/js-tpl/__demoTemp.html', function(i){
        //     demoTemp = _.template(i);
        // });
    };
});