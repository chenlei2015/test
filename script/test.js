function admin(selector,data){
    var a=Math.floor(Math.random()*360)+data.cycle;
    var deg=0;
    var t=window.setInterval(function(){
        deg+=data.step;
        if(deg >= a){
            clearInterval(t);
        }
        document.getElementById(selector).style.-webkit-transform='rotate('+deg+'deg)';
        //$('#test').css('-webkit-transform','rotate('+deg+'deg)');
        //$('#test').css('-ms-transform','rotate('+deg+'deg)');
        //$('#test').css('-moz-transform','rotate('+deg+'deg)');
        //$('#test').css('-o-transform','rotate('+deg+'deg)');
    },1);
}