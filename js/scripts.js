
function scroll_to(clicked_link, nav_height) {
	var element_class = clicked_link.attr('href').replace('#', '.');
	var scroll_to = 0;
	if(element_class != '.top-content') {
		element_class += '-container';
		scroll_to = $(element_class).offset().top - nav_height;
	}
	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 1000);
	}
}


jQuery(document).ready(function() {


	$('a.scroll-link').on('click', function(e) {
		e.preventDefault();
		scroll_to($(this), 0);
	});


      $("#dummy").click(function(event) {
        console.log('funfando..');
        $(this).attr('src', 'audio/musica.mp3');
        $(this).play();
        // onclick="playSound(this, 'audio/musica.mp3');
      });
    /*
        Background slideshow

    $('.top-content').backstretch("assets/img/backgrounds/1.jpg");
    $('.how-it-works-container').backstretch("assets/img/backgrounds/1.jpg");
    $('.call-to-action-container').backstretch("assets/img/backgrounds/1.jpg");
    $('.testimonials-container').backstretch("assets/img/backgrounds/1.jpg");

    $('#top-navbar-1').on('shown.bs.collapse', function(){
    	$('.top-content').backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function(){
    	$('.top-content').backstretch("resize");
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function() {
    	$('.testimonials-container').backstretch("resize");
    });
    */
    /*
        Wow
    */
    new WOW().init();

	/*
	    Modals
	*/
	$('.launch-modal').on('click', function(e){
		e.preventDefault();
		$( '#' + $(this).data('modal-id') ).modal();
	});

      //Check to see if the window is top if not then display button
      $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
          $('.scrollToTop').fadeIn();
        } else {
          $('.scrollToTop').fadeOut();
        }
      });

      //Click event to scroll to top
      $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
      });

      /// Quando usuário clicar em salvar será feito todos os passo abaixo
      $('form#formDcompra').on('submit',function(event) {
             event.preventDefault();
             var dados = $(this).serialize();
             console.log(dados);
             $.ajax({ type: 'POST' ,
                           url: 'dados.php' ,
                           data: dados ,
                           beforeSend: function() {
                                console.log('Enviando...');
                            },
                            success: function(data) {
                                $('#formDcompra')[0].reset();
                                console.log('enserido com sucesso');
                                $("#result").html(data);
                                  $('#formDcompra').hide('slow/400/fast', function() {
                                  });
                                escondeAlert();
                            }
                        });
                    return false;
      });

      function escondeAlert(){
          setTimeout(function() {
              $("#result").hide('slow/400/fast', function() {});
          }, 3000);
      };


});


jQuery(window).load(function() {

	/*
		Loader
	*/
	$(".loader-img").fadeOut();
	$(".loader").delay(1000).fadeOut("slow");

	/*
		Hidden images
	*/
	$(".modal-body img, .testimonial-image img").attr("style", "width: auto !important; height: auto !important;");

});



