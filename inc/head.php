<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<meta name="Author" content="K2 Estratégia Digital (http://www.k2estrategia.digital) - Rafael Lisboa (develop) Tatiane Marin (designer)">
<meta name="Language" content="portuguese">
<meta name="copyright" content="2018">
<meta name="Generator" content="K2 Estratégia Digital">
<meta name="geo.placename" content="Brazil" />
<meta name="geo.region" content="BRA" />
<meta itemscope itemtype="http://schema.org/WebPage">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Description" lang="pt-br" content="" />
<meta name="keywords" lang="pt-br" content="" />
<meta property="og:title" content="BRE Coins"/>
<meta property="og:url" content="//<?php echo $_SERVER['SERVER_NAME'];?>"/>
<meta property="og:image" content="//<?php echo $_SERVER['SERVER_NAME'];?>/img/logo-facebook.png"/>
<meta property="og:site_name" content="BRE Coins"/>
<meta property="og:description" content=""/>
<link href="//<?php echo $_SERVER['SERVER_NAME'];?>" rel="publisher" />
<link rel="shortcut icon" href="//<?php echo $_SERVER['SERVER_NAME'];?>/img/favicon.ico" type="image/x-icon">
<link rel="icon" href="//<?php echo $_SERVER['SERVER_NAME'];?>/img/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="57x57" href="//<?php echo $_SERVER['SERVER_NAME'];?>/img/fav/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="//<?php echo $_SERVER['SERVER_NAME'];?>/img/fav/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="//<?php echo $_SERVER['SERVER_NAME'];?>/img/fav/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="//<?php echo $_SERVER['SERVER_NAME'];?>/img/fav/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="//<?php echo $_SERVER['SERVER_NAME'];?>/img/fav/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="//<?php echo $_SERVER['SERVER_NAME'];?>/img/fav/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="//<?php echo $_SERVER['SERVER_NAME'];?>/img/fav/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="//<?php echo $_SERVER['SERVER_NAME'];?>/img/fav/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="//<?php echo $_SERVER['SERVER_NAME'];?>/img/fav/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="//<?php echo $_SERVER['SERVER_NAME'];?>/img/fav/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="//<?php echo $_SERVER['SERVER_NAME'];?>/img/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="//<?php echo $_SERVER['SERVER_NAME'];?>/img/fav/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="//<?php echo $_SERVER['SERVER_NAME'];?>/img/fav/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="//<?php echo $_SERVER['SERVER_NAME'];?>/img/fav/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="canonical" href="" />

<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css' media='all' />
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME'];?>/css/style.css" media="all" />
<link rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME'];?>/css/hint.css" media="all" />

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">

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

$(document).ready(function () {
	
var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;

 if (isMobile == true) {
	$('#video-background').remove(); 
 }
 
 if ( $(window).width() <= 800 ) {
	 $('#video-background').remove(); 
 }

});
</script>