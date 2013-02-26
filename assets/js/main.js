/* Author:

*/

function deselect() {
    $(".pop").slideFadeToggle(function() { 
        $("#donate").removeClass("selected");
    });    
}

$(document).ready(function ()
{

  $('.social-media img').hover(
    function(){
      $(this).stop().animate({marginTop: -5}, 200);
    },
    function(){
      $(this).stop().animate({marginTop: -30}, 200);
    });

  $("#donate").live('click', function() {
        if($(this).hasClass("selected")) {
            deselect();               
        } else {
            $(this).addClass("selected");
            $(".pop").slideFadeToggle(function() { 
                $("#email").focus();
            });
        }
        return false;
    });

    $(".close-donate").live('click', function() {
        deselect();
        return false;
    });

    $("#donate-button").live('click', function() {
        
      var ppu =	'https://www.paypal.com/cgi-bin/webscr?' +
                'cmd=_xclick&' +
                'business=mrcolin@gmail.com&' +
                'item_name=' + "Donation to SatyaDunning.co.uk&" + 
                'amount=' + $('[name="donate-amount"]').val() + '&' +
                'return=undefined&' +
                'cancel_return=shop_cancel&' +
                'currency_code=GBP&' +
                'lc=UK';

        window.location = ppu;
        return false;
    });

});

$.fn.slideFadeToggle = function(easing, callback) {
    return this.animate({ opacity: 'toggle', height: 'toggle' }, "fast", easing, callback);
};
