( function( $ ) {
	$(function() {
        $(document).on('scroll', function () {

            if (700 <= $(window).scrollTop()) {
				$('.categoria-efeito .efeitoa').show('slow');
            }

            if (1200 <= $(window).scrollTop()) {
				$('.efeitob').fadeIn(1000,function(){
					$('.efeitoc').fadeIn(1000);
				});
            }

            if (2200 <= $(window).scrollTop()) {
				$('.categoria-efeito .efeitod').show('slow');
            }

        });
	});
} )( jQuery );