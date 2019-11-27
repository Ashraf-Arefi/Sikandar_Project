$(document).ready(function(){
    let counter = 0;
   $('.si-img').click(function(){
       if(counter%2 == 0) {
        $(this).css('transform','scale(1.1,1.1)');
       }else {
        $(this).css('transform','scale(1,1)');
        $(this).css('transition','all 0.4s');
       }
      counter++;
   });
});