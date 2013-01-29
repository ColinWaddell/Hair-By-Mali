/* Author:

*/
$(document).ready(function ()
{

  $('.jumbo-social-media img').hover(
    function(){
      $(this).stop().animate({marginTop: 2}, 200);
    },
    function(){
      $(this).stop().animate({marginTop: -25}, 200);
    });

});


