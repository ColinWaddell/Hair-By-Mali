/* Author:

*/
$(document).ready(function ()
{

  $('.social-media img').hover(
    function(){
      $(this).stop().animate({marginTop: -5}, 200);
    },
    function(){
      $(this).stop().animate({marginTop: -30}, 200);
    });

});


