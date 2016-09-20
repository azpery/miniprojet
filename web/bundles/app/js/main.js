$(document).ready(function(){

  initRotation();

  $("#rotate-left").click(function(){

    rotateCurrentImage(-90);

  })

  $("#rotate-right").click(function(){

    rotateCurrentImage(90);

  })

});

function rotateCurrentImage(degree){

  $image = $("#carousel .item.active img");

  currentOrientation = $image.attr('data-rotate');

  currentOrientation = parseInt(currentOrientation);

  newOrientation = Math.abs(currentOrientation) >= 260 ? 0 : currentOrientation + degree;

  $image.attr('data-rotate' , newOrientation);

  initRotation();

}

function initRotation(){
  $('img').each(function() {
    var deg = parseInt($(this).attr('data-rotate')) || 0;
    var rotate = 'rotate(' + deg + 'deg)';
    $(this).css({
        '-webkit-transform': rotate,
        '-moz-transform': rotate,
        '-o-transform': rotate,
        '-ms-transform': rotate,
        'transform': rotate
    });
  });

}
