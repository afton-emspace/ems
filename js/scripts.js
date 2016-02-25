jQuery(document).ready(function($) {
//Color text change

var rgb = ['255', '0', '0'];
    
setInterval(function(){
    
    var c = 'rgb('+rgb[0]+','+rgb[1]+','+rgb[2]+')';
    
    //http://www.w3.org/TR/AERT#color-contrast
    
    var o = Math.round(((parseInt(rgb[0]) * 299) + (parseInt(rgb[1]) * 587) + (parseInt(rgb[2]) * 114)) /1000);
    
    //console.log(o);
    
    if(o > 125) {
        $('#bg').css('color', 'black');
    }else{ 
        $('#bg').css('color', 'white');
    }

    $('#bg').css('background-color', c);
    
    var r = Math.round(Math.random() * 255);
    var g = Math.round(Math.random() * 255);
    var b = Math.round(Math.random() * 255);

    rgb[0] = r;
    rgb[1] = g;
    rgb[2] = b;                
  

}, 500);


});