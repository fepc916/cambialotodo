(function($){
    $(document).ready(function(){
            var slides=$('.sliderPost .slides li'),
            maxSlides = 4,
            slideActivo=$('.sliderPost .slides li').eq(0);
            slideActivo.addClass('active');  
            var $slidePostActive=$('.sliderPost .slides li.active img'),
            $slidePost = $('#img-post'),
            $imgAmpliada = $slidePostActive.clone();
            $slidePost.append($imgAmpliada);
            var i = 0;
            maquetar(i);

            var slideContent=$('sliderPost .slides');
        
            function maquetar(i){
                 for(var i=0; i<maxSlides;i++){
                    slides.eq(i).css('display','block');
                }
            }
        
            slides.eq(maxSlides).addClass('siguiente');
            
            var control = $('.sliderPost .slides .control a');
        
            control.click(function(e){
                var contador = i;
                e.preventDefault();
                var opcionMover = $(this).data('slide');
                if(opcionMover == 'right'){
                   contador=contador+1;
                    maquetar(contador);
                }else{
                    contador=contador-1;
                    maquetar(i);
                }
                console.log(contador);
            });
        
            slides.click(function(){
                slideActivo=$('.sliderPost .slides li.active');
                slideActivo.removeClass('active');
                $(this).addClass('active');
                $slidePostActive=$('.sliderPost .slides li.active img'),
                $slidePost = $('#img-post'),
                $imgAmpliada = $slidePostActive.clone();
                $slidePost.html('');
                $slidePost.append($imgAmpliada);
            });
        
    });
})(jQuery);