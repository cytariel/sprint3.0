//Skryp zaczynania od gory
 
$(window).on('load', function() {
  setTimeout(function() {
      $(window).scrollTop(0);
  });
});

//Blokada Scrollowania 
   
        $('html, body').css({
            overflow: 'hidden',
            height: '100%'
        });

   
// Odblokowanie Scrollowania
  
        $(document).ready(function() {
            $("#curtain").click(function() {
                $('html, body').css({
                    overflow: 'auto',
                    height: 'auto'
                });
            });
        });

//Skrypt "Zaluzji"
 
        $(document).ready(function() {
            $("#curtain").click(function() {
                $("#curtain").slideUp(20 * 60);
                $("#curtain_bar").slideUp(20 * 60);
            });
        });




