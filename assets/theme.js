// function scriptname(){
// 	jQuery(document).ready(function($){
// 		// script goes here
// 	});
// }



jQuery(document).ready(function(jQuery){
	jQuery( ".mega-hamburger" ).click(
	  function() {
	  	console.log("hi");
	    // jQuery( ".current-menu-ancestor ul.submenu" ).show;
	    jQuery( ".current-menu-ancestor ul.sub-menu" ).toggle();
	    jQuery( ".current-menu-item ul.sub-menu" ).toggle();
	    jQuery( ".mega-current-menu-ancestor ul.mega-sub-menu" ).toggle();
	    jQuery( ".mega-current-menu-item ul.mega-sub-menu" ).toggle();
	    jQuery( ".mega-current-menu-ancestor ul.mega-sub-menu" ).css({"visibility" : "visible"});
	    jQuery( ".mega-current-menu-item ul.mega-sub-menu" ).css({"visibility" : "visible"});
	  }
	);

});