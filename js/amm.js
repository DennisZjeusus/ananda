// $(function(){
//   $(window).scroll(function(){
//     var container = document.getElementsByTagName("BODY").className("container");
//     container..style.backgroundColor = "red";
//     var winTop = container.scrollTop();
//     if(winTop >= 30){
//       $("body").addClass("sticky-header");
//     }else{
//       $("body").removeClass("sticky-header");
//     }//if-else
//   });//win func.
// });//ready func.

$(document).ready(function () {
    var scroll_pos = 0;
    $("#contain").scroll(function () {
        scroll_pos = $(this).scrollTop();
        if (scroll_pos >= 30) {
            $("body").addClass("sticky-header");
     }else{
      $("body").removeClass("sticky-header");
     }

    });
});
