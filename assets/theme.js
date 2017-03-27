// function scriptname(){
// 	jQuery(document).ready(function($){
// 		// script goes here
// 	});
// }

jQuery(document).ready(function(jQuery){
	// jQuery( ".hamburger" ).click(

	//  function() {
	//     jQuery( ".mega-current-menu-ancestor ul.mega-sub-menu" ).toggle();
	//     jQuery( ".mega-current-menu-item ul.mega-sub-menu" ).toggle();
	//     jQuery( ".hamburger i.fa" ).toggleClass("fa-bars");
	//     jQuery( ".hamburger i.fa" ).toggleClass("fa-times");
	//     // jQuery( ".mega-current-menu-ancestor ul.mega-sub-menu" ).css({"visibility" : "visible"});
	//     // jQuery( ".mega-current-menu-item ul.mega-sub-menu" ).css({"visibility" : "visible"});
	//  }
	// );

	// The '#theLink' portion is a selector which matches a DOM element
	// with the id 'theLink' and .click registers a call back for the 
	// element being clicked on 

	jQuery(document).on("click", "a", function(event) {

		var internalLink = /calduals/;
		var jumpLink = /#/;
		var link = jQuery(this).attr("href");
		var isExternal = (!link.match(internalLink) && !link.match(jumpLink)) ;

		if (isExternal) {
			event.preventDefault();
			var answer = confirm("You are now leaving CalDuals.org, the Coordinated Care Initiative’s website. When you leave this website to access a different site, you become subject to the other website’s privacy policy and practices."); 
			if (answer) {
				window.location = link;
			}
		}
  	});

});
