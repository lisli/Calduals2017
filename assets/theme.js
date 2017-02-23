function scriptname(){
	jQuery(document).ready(function($){
		// script goes here
	});
}

// function hamburgerMenu() {
// 	jQuery(document.ready(function($){

// 	});
// }

jQuery(document).ready(function(jQuery){
	jQuery( ".hamburger" ).click(
	  function() {
	  	// console.log("hi");
	    // jQuery( ".current-menu-ancestor ul.submenu" ).show;
	    jQuery( ".current-menu-ancestor ul.sub-menu" ).show();
	    jQuery( ".current-menu-item ul.sub-menu" ).show();
	  }
	);
});