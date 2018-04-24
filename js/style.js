$(function(){
   $(".banner").hover(function(){
     $(".lr").show();
   },function(){
     $(".lr").hide();
   });
   $(".anniu li").click(function(){
     $(this).addClass("on").siblings().removeClass("on");
     var num=$(this).index();
     $(".pic").animate({marginLeft:-1440*num},"slow");
   });
   var a=0;
   var automatic=setInterval(function(){
     a++;
     a=a%6;
     $(".pic").animate({marginLeft:-1440*a},"slow");
     $(".anniu li").eq(a).addClass("on").siblings().removeClass("on");
   },6000);

});
