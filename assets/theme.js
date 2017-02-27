// function scriptname(){
// 	jQuery(document).ready(function($){
// 		// script goes here
// 	});
// }

jQuery(document).ready(function(jQuery){
	console.log('ugh');
	jQuery( ".hamburger" ).click(

	  function() {
	    jQuery( ".mega-current-menu-ancestor ul.mega-sub-menu" ).toggle();
	    jQuery( ".mega-current-menu-item ul.mega-sub-menu" ).toggle();
	    // jQuery( ".mega-current-menu-ancestor ul.mega-sub-menu" ).css({"visibility" : "visible"});
	    // jQuery( ".mega-current-menu-item ul.mega-sub-menu" ).css({"visibility" : "visible"});
	  }
	);

});
