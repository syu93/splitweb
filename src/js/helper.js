var helper = {
	listenAnimationEnd : function (el, callback) {
		callback = typeof callback == 'function' ? callback : function (e){};
		("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend".split(" ")).forEach(callback);
	},
	modale : function (selector) {
		var elements = document.querySelectorAll(selector);
		console.log(elements);
	}
};