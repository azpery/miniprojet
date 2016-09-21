$(document).ready(function(){

  initRotation();

  $("#rotate-left").click(function(){

    $image = $("#carousel .item.active");

    currentOrientation = $image.data('rotate');

    newOrientation = parseInt(currentOrientation) - 90;

    $image.data('rotate' , newOrientation);

  })

});

function initRotation(){

  $('img').each(function() {
    var deg = $(this).data('rotate') || 0;
    var rotate = 'rotate(' + $(this).data('rotate') + 'deg)';
    $(this).css({
        '-webkit-transform': rotate,
        '-moz-transform': rotate,
        '-o-transform': rotate,
        '-ms-transform': rotate,
        'transform': rotate
    });
  });

}
