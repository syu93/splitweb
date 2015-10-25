(function(document, window, helper){
	var container, menuPanel, scroller, menuButton;
	
  	container 	= document.querySelector('.container');
  	menuPanel 	= document.querySelector('.menu-panel');
  	menuButton 	= document.querySelector('.menu-button');

	menuButton.onclick = function() {
		menuButton.classList.remove('rubberBand');
		menuButton.classList.remove('animated');

		menuButton.classList.add('rubberBand');
		menuButton.classList.add('animated');

		helper.listenAnimationEnd(menuButton, displayMenu);
	};

	function displayMenu() {
		setTimeout(function() {
		menuButton.classList.remove('rubberBand');
		menuButton.classList.remove('animated');			
		}, 1000);
		container.classList.toggle('menu-open');
		menuPanel.classList.toggle('menu-open');
	}
	scroller 	= skrollr.init({
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