jQuery.fn.hello=function(param){
    alert(param);
}
jQuery.fn.test=function(){
    /*这里的this=$(this);*/
    alert(this.attr('name'));
}

jQuery.fn.extend({num:function(num){
    alert(this.attr('name'));
    //alert(num);
}});





