// function scriptname(){
// 	jQuery(document).ready(function($){
// 		// script goes here
// 	});
// }



jQuery(document).ready(function(jQuery){
	jQuery( ".hamburger" ).click(
	  function() {
	  	// console.log("hi");
	    // jQuery( ".current-menu-ancestor ul.submenu" ).show;
	    jQuery( ".current-menu-ancestor ul.sub-menu" ).toggle();
	    jQuery( ".current-menu-item ul.sub-menu" ).toggle();
	  }
	);
});