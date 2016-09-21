var picturesUpdated = [];

$(document).ready(function(){

  initRotation();

  $("#rotate-left").click(function(){

    rotateCurrentImage(-90);

    applyChanges();

  })

  $("#rotate-right").click(function(){

    rotateCurrentImage(90);

    applyChanges();

  })

  $("#save-changes").click(function(){

    saveChanges();

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

function applyChanges(){

  $image = $("#carousel .item.active img");

  orientation = $image.attr('data-rotate');

  title = $image.attr('data-title');

  idRepository = $image.attr('data-idRepository');

  id = parseInt($image.attr('data-id'));

  legend = $image.attr('data-legend');

  if(picturesUpdated[id]){

    image = picturesUpdated[id];

  }else{

    image = new Image(id);

    picturesUpdated[id] = image;

  }

  image.orientation = parseInt(orientation);

  image.legend = legend;

  image.title = title;

  image.idRepository = parseInt(idRepository);

}

function saveChanges(){

  var data = [];



  picturesUpdated.forEach(function(element){

    data.push(JSON.stringify(element));

  });

  dataToSend = {"images" : data};

  url = "/update/"

  $.ajax({
    type: "POST",
    url: url,
    data: dataToSend,
    success: success
  });

}

function success(){
  alert("gg");
}


