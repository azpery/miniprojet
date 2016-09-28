var picturesUpdated = {};

$(document).ready(function(){

  $('.carousel').carousel();

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

  $(".legend").change(function(){

    applyChanges();

  })

  $(".title").change(function(){

    applyChanges();

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

  $("#save-changes").attr("disabled",false);

  $image = $("#carousel .item.active img");

  orientation = $image.attr('data-rotate');

  title = $(".active .title").val();

  idRepository = $image.attr('data-idRepository');

  id = $image.attr('data-id');

  legend = $(".active .legend").val();

  if(picturesUpdated["id-"+id]){

    image = picturesUpdated[id];

  }else{

    image = new Image(id);

    picturesUpdated["id-"+id] = image;

  }

  image.id = parseInt(id);

  image.orientation = parseInt(orientation);

  image.legend = legend;

  image.title = title;

  image.idRepository = parseInt(idRepository);

}

function saveChanges(){

  var data = "[";

	var i = 0;
	var length = Object.keys(picturesUpdated).length - 1;
  $.each(picturesUpdated, function(index, element){

    data += JSON.stringify(element);
    if(i < length){
    	data += ",";
    }
    i++;
  });

  data += "]";

  console.log(data);

  dataToSend = {"images" : picturesUpdated};



  url = "http://localhost:8888/miniprojet/web/app_dev.php/update"

  $.ajax({
    type: "POST",
    url: url,
    data: dataToSend,
    success: success
  });

}

function success(){
  picturesUpdated = [];
  $("#save-changes").attr("disabled",true);
  alert("gg");
}
