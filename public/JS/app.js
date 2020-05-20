// Colors
let $colorOne  = '#1A1822';
let $colorTwo  = '#1e1c27';
let $lighten = '#ccccc';
let $colorOrange  = '#ff7b00';

// funtions
    let up = () => {
        var headerHeight = $('header').height() - 85;
        if(scrollY >= headerHeight ) {
            $('#GoTop').css('transform', 'scale(1)');
        } else {
            $('#GoTop').css('transform', 'scale(0)');
        }
    }

// events
$(document).ready(function () {
    up();
    $(document).scroll(function () { 
        var start = 100;
        var height = scrollY;
        if(height > start) {
            $('nav.top').css('background-color', $colorOne);
        } else {
            $('nav.top').css('background-color', 'transparent');
        }
        up();
    });
    $('a.more').click(function (e) { 
        e.preventDefault();
        var headerHeight = $('header').height();
        $('html , body').animate({
            scrollTop: headerHeight - 85
        } , 1000);
    });
    $('#GoTop').click(function (e) { 
        e.preventDefault();
        $('html , body').animate({
            scrollTop: 0
        } , 1000);
    });
    let isUp = false;
    $('#bar').click(function (e) { 
        e.preventDefault();
        if(isUp == false) {
            // Its Hide

            // Going Top
            $(this).css('bottom', '0');
            setTimeout(() => {
                $(this).css('bottom', 'calc(100% - (55px + 10px))');
                setTimeout (() => {
                    $(this).css('color', 'transparent');
                } , 100);
                $('div.menu').css('top', '0');
                // Going Left
                setTimeout(() => {
                    $(this).addClass('fa-times');
                    $(this).removeClass('fa-bars');
                    setTimeout(()=>{
                        $(this).css('left', '10px');
                        $(this).css('color', $colorTwo);
                      } , 200);
                } , 600)
            }, 600); 

            isUp = !isUp;
        } else {
            $(this).css('bottom', 'calc(100% - 55px)');
            setTimeout(() => {
                $(this).css('bottom', '10px');
                $('div.menu').css('top', '100%');
                setTimeout (() => {
                    $(this).css('color', 'transparent');
                } , 100);
                
                setTimeout(() => {
                    $(this).addClass('fa-bars');
                    $(this).removeClass('fa-times');
                    setTimeout(()=>{
                        $(this).css('left', 'calc(50% - 27.5px)');
                        $(this).css('color', $colorTwo);
                      } , 200);
                } , 600)
            }, 600); 
            isUp = !isUp;

        }
    });
    
});
