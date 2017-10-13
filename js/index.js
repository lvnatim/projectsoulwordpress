jQuery('.slider').slick({
    dots: true,
    infinite: true,
    autoplay: false,
    slidesToShow:1,
    arrows:false
});

const menu_buttons = document.querySelectorAll('.m-hamburger');

for(var i = 0; i < menu_buttons.length; i++){

    menu_buttons[i].addEventListener('click', function(){

        this.classList.toggle('s-active');

    });

}


