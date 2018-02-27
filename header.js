(function($){ 
    //Si te preguntas que es esto , es para adaptar el width de los items al menu y tambien para hacerlo crecer conforme se le agregan items
    //Con esto el menu se reordena de acuerdo al numero de items que tenga, lo hice yo por si acaso
    $(document).ready(function(){     
            var buttonCat = $('.search button'),
            contentCategorias = $('#topCategories'),
            maxCol = 9,
            //numero de columnas maximo
            categorias = contentCategorias.children('a.dropdown-item');
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
           }
    });
    
    //Soy es yo leo :v :v :v:VVVVVVVVVVVVVVVVVVV
})(jQuery);