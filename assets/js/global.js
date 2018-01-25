//SCROLL NA HOME
 $(window).scroll( function(){
  /* Check the location of each desired element */
        $('.efeito').each( function(i){
            
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+500) {
                
                $(this).animate({'opacity':'1'},800);

            }
            
        }); 

    }); 

//MUDA O MENU CONFORME A ROLAGEM
$(function () {
	
	$('a[href^="#"]').on('click', function(event) {

    var target = $( $(this).attr('href') );

    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000);
    }
	


});

//MUDA O MENU CONFORME A ROLAGEM	
  $(document).scroll(function () {
	  	var $nav = $("header");
	  	$nav.toggleClass('menu-branco', $(this).scrollTop() > $nav.height());
	});
	
});
