var picturesUpdated = {};


$(document).ready(function(){

  $('.carousel').carousel();

  initRotation();
  
  
// Fonction permettant la rotation des photos à gauche de façon dynamique

  $("#rotate-left").click(function(){

    rotateCurrentImage(-90);

    applyChanges();

  })
  
// Fonction permettant la rotation des photos à gauche de façon dynamique

  $("#rotate-right").click(function(){

    rotateCurrentImage(90);

    applyChanges();

  })

// Fonction permettant la prise en compte des modifications
  $("#save-changes").click(function(){

    saveChanges();

  })

// Fonction permettant le changement de la légende des photos
  $(".legend").change(function(){

    applyChanges();

  })

// Fonction permettant le changement du titre des photos
  $(".title").change(function(){

    applyChanges();

  })

});

// Applique la rotation à l'image après que l'utilisateur ait cliqué sur le bouton rotation gauche ou droite
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

// Fonction qui applique les modifications effectuées sur les photos 

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

/*Fonction permettant de récupérer les modifications faites sur les images (orientation, légende, titre..) 
et de les envoyer via un jSON pour une mise à jour dans la base de données
*/

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

  dataToSend = {"images" : data};



  url = $("#updatePath").val();

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
}
