$(function(){

    $('[goto=contato]').click(function(){

        $('html,body').animate({'scrollTop':$('#contato').offset().top});
        return false;
    })

    $('.menu-mobile').click(function(){
        $(this).find('ul').slideToggle();
    });

    var currentValue = 0;
    var isDrag = false;
    var preco_maximo = 50000;
    var preco_atual = 0;

   

    $('.pointer-barra').mousedown(function(){
        isDrag = true;
    })

    $(document).mouseup(function(){
        isDrag = false;
        enableTextSelection();
    })

    $('.barra-preco').mousemove(function(e){
        if (isDrag) {
            disableTexetSelection();
            var elBase = $(this);
            var mouseX = e.pageX - elBase.offset().left;
            if (mouseX < 0 ){
                mouseX = 0;
            }
            if (mouseX > elBase.width()) {
                mouseX = elBase.width();
            }

            $('.pointer-barra').css('left',(mouseX-13)+'px');
            currentValue = (mouseX / elBase.width())*100;
            $('.barra-preco-fill').css('width',currentValue+'%');

            preco_atual = (currentValue/100) * preco_maximo;
            
            $('.preco_pesquisa').html('R$ '+formatarPreco(preco_atual));
        }
    })

    function formatarPreco(preco_atual){
        preco_atual = preco_atual.toFixed(2);
        preco_arr = preco_atual.split('.');
  
        var novo_preco = formatarTotal(preco_arr);
        return novo_preco;
        

    }

    function formatarTotal(preco_arr){
        if(preco_arr[0] < 1000){
            return preco_arr[0]+','+preco_arr[1];
        }else if(preco_arr[0] < 10000){
            return preco_arr[0][0]+'.'+preco_arr[0].substr(1,preco_arr[0].lenght)+','+preco_arr[1];
        }else{
            return preco_arr[0][0]+preco_arr[0][1]+'.'+preco_arr[0].substr(2,preco_arr[0].lenght)+','+preco_arr[1];
        }
            
        
    }

    function disableTexetSelection(){
        $('body').css("-webkit-user-select","none");
        $('body').css("-moz-user-select","none");
        $('body').css("-ms-user-select","none");
        $('body').css("-o-user-select","none");
        $('body').css("user-select","none");
    }

    function enableTextSelection(){
        $('body').css("-webkit-user-select","auto");
        $('body').css("-moz-user-select","auto");
        $('body').css("-ms-user-select","auto");
        $('body').css("-o-user-select","auto");
        $('body').css("user-select","auto");
    }
    //border-color: rgba(0, 0, 0, 0.3);

    var imgShow = 3;
    var maxIndex = Math.ceil($('.mini-img').length/3)-1;
    var curIndex = 0;
    var total = ($('.mini-img').length)-1;
    var slideAtual = 0;
    

    initSlider();
    navigateSlider();
    clickSlider();
    clickFotoDestaque();
    function initSlider(){
        var amt = $('.mini-img').length*33.3;
        var elScroll = $('.nav-galeria-wraper');
        var elSingle = $('.mini-img');
        elScroll.css('width', amt+'%');
        elSingle.css('width',33.3*(100/amt)+'%' );
    }

    function navigateSlider(){
        $('.arrows-nav .arrow-left').click(function(){
            if (curIndex > 0) {
                curIndex--;
                var elOff = $('.mini-img').eq(curIndex*3).offset().left - $('.nav-galeria-wraper').offset().left;
                
                $('.nav-galeria').animate({'scrollLeft': elOff+'px'});
            }else{
                
            }
        })

        $('.arrows-nav .arrow-right').click(function(){
            if (curIndex < maxIndex) {
                curIndex++;
                var elOff = $('.mini-img').eq(curIndex*3).offset().left - $('.nav-galeria-wraper').offset().left;
                
                $('.nav-galeria').animate({'scrollLeft': elOff+'px'});
            }else{
                
            }
        })

    }

    function clickSlider(){
        $('.mini-img').click(function(){
            $('.mini-img').children().css('border-color','rgba(0, 0, 0, 0.1)')
            $(this).children().css('border-color','rgba(0, 0, 0, 0.3)');
            /*$(this).children().css('border-color','rgba(0, 0, 0, 0.3)')*/

            var img = $(this).children().attr('src');
            slideAtual = $(this).index();
            $('.foto-destaque .imagem').html('');
            $('.foto-destaque .imagem').append('<img src="'+img+'" alt="">');
            
            if ($(this).index() == 0) {
                $('.foto-destaque .arrows').html('');
                $('.foto-destaque .arrows').append('<div class="arrow-right"></div><!--arrow-right-->');
            }else if($(this).index() == total){
                $('.foto-destaque .arrows').html('');
                $('.foto-destaque .arrows').append('<div class="arrow-left"></div><!--arrow-left-->');
            }else{
                $('.foto-destaque .arrows').html('');
                $('.foto-destaque .arrows').append('<div class="arrow-left"></div><!--arrow-left-->');
                $('.foto-destaque .arrows').append('<div class="arrow-right"></div><!--arrow-right-->');
            }
            clickFotoDestaque();
        })
        
    }

    window.onload = function(){
        $('.mini-img img').eq(0).click();
    }
   
    anterior = 0;
    proximo = 5;
    function clickFotoDestaque(){
       
        $('.arrows').children('.arrow-right').click(function(){
            if (slideAtual < total) {
                slideAtual++;
                $('.mini-img img').eq(slideAtual).click();
                if (slideAtual % 3 == 0) {
                    $('.arrows-nav .arrow-right').click();
                }
            }
            
        })

        $('.arrows').children('.arrow-left').click(function(){
            if (slideAtual != 0) {
                slideAtual--;
                $('.mini-img img').eq(slideAtual).click();
                if ((slideAtual % 3 != 0) && (slideAtual % 2 == 0)) {
                    $('.arrows-nav .arrow-left').click();
                }else if(slideAtual == proximo){
                    anterior = proximo;
                    proximo = proximo + 6;
                    $('.arrows-nav .arrow-left').click();
                }
            }
            
        })

    }

    


})