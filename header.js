(function($){ 
    $(document).ready(function(){ 
        
        var likeButton = $('.product .likeProduct');
        
        likeButton.click(function(){
            if($(this).children('input').prop('checked')){
                $(this).css('color',' #FAA803');
            }else{
                $(this).css('color',' lightgray');
            }
        });
        
        $('.filters .filter .collapse').collapse({
                toggle: true
        });

            var buttonCat = $('.search button'),
            contentCategorias = $('#topCategories'),
            maxCol = 9,
            categorias = contentCategorias.children('a.dropdown-item');
            //numero de columnas maximo
        
        if(categorias.length>maxCol){
                    var calcularT = categorias.length%maxCol,
                    //calcula el resto
                            widthContent = categorias.length/maxCol;
                     //calcula el numero de elementos entre el numero de columnas maximo
                    if(calcularT==0){
                        contentCategorias.css('width',170 * widthContent);
                        categorias.css('width',contentCategorias.width() / widthContent);
                    }else{
                         var x = Math.ceil(widthContent);
                          //para redondear el calculo si el resultado del resto fue 1 o inexacto
                         contentCategorias.css('width',170 * x);
                        categorias.css('width',contentCategorias.width() / x);
                    }
                }
        
            $(window).resize(function(){
               if($(window).width() > 768){
                    if(categorias.length>maxCol){
                    var calcularT = categorias.length%maxCol,
                    //calcula el resto
                            widthContent = categorias.length/maxCol;
                     //calcula el numero de elementos entre el numero de columnas maximo
                    if(calcularT==0){
                        contentCategorias.css('width',170 * widthContent);
                        categorias.css('width',contentCategorias.width() / widthContent);
                    }else{
                         var x = Math.ceil(widthContent);
                          //para redondear el calculo si el resultado del resto fue 1 o inexacto
                         contentCategorias.css('width',170 * x);
                        categorias.css('width',contentCategorias.width() / x);
                    }
                }
               }else{
                        contentCategorias.css('width','100%');
               }
            });
    });
    
})(jQuery);