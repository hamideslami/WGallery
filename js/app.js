//////////////////////
//////////////////////
// Scale and Rotate
/////////////////////
/////////////////////

var degree = 0;
var transform;
var rotateAxis = true;
var scale;
var plusOrMinus;

$('.rotate').on("mouseenter",(function() {

    transform = $( this ).css(
        "transform"
      );

    plusOrMinus = Math.random() < 0.5 ? -1 : 1;

    degree = degree * plusOrMinus;

    if(rotateAxis){

        degree =  ((Math.random()*30)+10);
        rotateAxis = false;
    }
    else{

        degree =  -((Math.random()*30)+10);
        rotateAxis =true;
    }

      transform = 'rotate(' + degree + 'deg)';

      scale = 1.1;
      transform_scale = 'scale(' + scale + ')';

      transform = transform +' '+ transform_scale;

      console.log(degree);

    $(this).css(
        "transform" , transform 
    );
    

}));


$('.rotate').on("mouseleave",(function() {

      transform = 'rotate(' + degree + 'deg)';

      scale = 1;
      transform_scale = 'scale(' + scale + ')';
      transform = transform +' '+ transform_scale;

    $(this).css(
        "transform" , transform
    );
    
    

}));



//////////////////////
//////////////////////
// Scale
/////////////////////
/////////////////////


$('.scale').on("mouseenter",(function() {

nsform = 'rotate(' + degree + 'deg)';

      scale = 1.1;
      transform_scale = 'scale(' + scale + ')';

    $(this).css(
        "transform" , transform_scale
    );

}));


$('.scale').on("mouseleave",(function() {

      scale = 1;
      transform_scale = 'scale(' + scale + ')';
      

    $(this).css(
        "transform" , transform_scale
    );

}));