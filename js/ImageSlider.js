$(function(){
    
        var i = 0;
        
        $('.next').on("click", function(){
        i = i + 1;
        if (i == $('.image-gallery').length) {
        i = 0;
        }

        var currentImg = $('.image-gallery').eq(i);
        var prevImg = $('.image-gallery').eq(i - 1);
        
        animateImage(prevImg, currentImg);
        });
        
        $('.previous').on("click", function(){

        if (i == 0) {
        prevImg = $('.image-gallery').eq(0);
        i = $('.image-gallery').length - 1;
        currentImg = $('.image-gallery').eq(i);
        }
        else {
        i = i - 1;
        currentImg = $('.image-gallery').eq(i);
        prevImg = $('.image-gallery').eq(i + 1);
        }
        
        animateImageLeft(prevImg, currentImg);
        });
        
        function animateImageLeft(prevImg, currentImg) {
            currentImg.css({"left":"100%"});
            currentImg.animate({"left":"0%"}, 1000);
            prevImg.animate({"left":"-100%"}, 1000);
        }
        
        function animateImage(prevImg, currentImg) {
            currentImg.css({"left":"-100%"});
            currentImg.animate({"left":"0%"}, 1000);
            prevImg.animate({"left":"100%"}, 1000);
        }
        
        });