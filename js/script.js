( function( $ ) {
	$(function() {
        $(document).on('scroll', function () {

            if (500 <= $(window).scrollTop()) {
				$('.categoria-efeito .efeitoa').show('slow');
            }

            if (1000 <= $(window).scrollTop()) {
				$('.efeitob').fadeIn(1000,function(){
					$('.efeitoc').fadeIn(1000);
				});
            }

            if (2000 <= $(window).scrollTop()) {
				$('.categoria-efeito .efeitod').show('slow');
            }

        });
	});
} )( jQuery );