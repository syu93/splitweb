(function(){
	var intro, popup, container, btn, scroller, rocket, earth;
	
	intro = false;

	popup 	= document.querySelector('.loading .popup');
  	container = document.querySelector('.container');

	if (!intro) {
		popup.style.display = 'none';
		container.style.display = "block";
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
	} else {
		popup.classList.add("animated");
		popup.classList.add("flipInY");
	  	popup.style.animationDuration = "1.9s";

	  	btn 	= document.querySelector('[data-close-popup]');
		btn.addEventListener('click', function(e){
			popup.classList.remove("flipInY");
			popup.classList.remove("infinite");
			popup.classList.add("bounceOutRight");
			popup.style.animationDuration = "0.1s";
			container.style.display = "block";

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
		},false);

		rocket 	= document.querySelector('.intro-rocket');
		rocket.classList.add("animated");
		rocket.classList.add("bounceInDown");
		rocket.style.animationDelay = "0.5s";
		helper.listenAnimationEnd(rocket, function(e){
			rocket.addEventListener(e, function(el) {
				rocket.classList.remove("bounceInDown");
				rocket.classList.add("pulse");
				rocket.classList.add("infinite");
				rocket.style.animationDuration = "3s";
			}); 
		},false);

		earth 	= document.querySelector('.intro-earth');
		earth.classList.add("spacesuit");
		helper.listenAnimationEnd(earth, function(e){
			earth.addEventListener(e, function(el) {
				earth.classList.remove("bounceInDown");
				earth.classList.add("pulse");
				earth.classList.add("infinite");
				earth.style.animationDuration = "3s";
			}); 
		},false);
	}

}(document, window, helper));