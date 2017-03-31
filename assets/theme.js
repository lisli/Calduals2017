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

	//Display popup for external links; open pdfs and other documents in new tab

	jQuery(document).on("click", "a", function(event) {

		var internalLink = /(calduals|^#|^mailto:)/; //regex to look for 'calduals' or anything that starts with '#' to account for jump links
		var link = jQuery(this).attr("href");
		var isExternal = (!link.match(internalLink));
		var isDocument = \.pdf|\.doc|\.docx\ //regex to look for pdfs or other documents that may open

		if (isExternal) {
			event.preventDefault();
			var answer = confirm("You are now leaving CalDuals.org, the Coordinated Care Initiative’s website. When you leave this website to access a different site, you become subject to the other website’s privacy policy and practices."); 
			if (answer) {
				window.open(link, '_blank');
			}
		}

		if(isDocument) {
			window.open(link, '_blank');
		}
  	});

});
