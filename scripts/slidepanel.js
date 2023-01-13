(function($) {
    $('#toggle').toggle( 
        function() {
            $('#popout').animate({ left: 0 }, 'slow', function() {
                $('#toggle').html('<i class="fa-solid fa-bars"></i>');
            });
        }, 
        function() {
            $('#popout').animate({ left: -250 }, 'slow', function() {
                $('#toggle').html('<i class="fa-solid fa-bars"></i>');
            });
        }
    );
    })(jQuery);