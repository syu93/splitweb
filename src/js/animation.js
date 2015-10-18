(function(){
	var container, scroller;
	
  	container = document.querySelector('.container');
	scroller = skrollr.init({
		smoothScrolling: true,
		scale: 2,
		easing: {
	        wtf: Math.random,
	        inverted: function(p) {
	            return 1 - p;
	        }
		}
	});
}(document, window, helper));