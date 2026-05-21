//■慣性スクロール
const lenis = new Lenis({
    smooth: true
})

function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
}

requestAnimationFrame(raf)

//Slider
new Swiper(".swiper", {
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

$(function () {
    //TAB
    $('.jsTabCase01').on('click', function () {
        var open = $(this).data("open");
        $('.jstabMainCase01').fadeOut(0);
        $(open).fadeIn(0);
    });

    $('.jsTabCase02').on('click', function () {
        var open2 = $(this).data("open02");
        $('.jstabMainCase02').fadeOut(0);
        $(open2).fadeIn(0);
        console.log(open2);
    });

    //FAQ
    $('.jstitleLiFaq').on('click', function () {
        $(this).next('.cntLiFaq').slideToggle();
        if ($(this).hasClass('off')) {
            $(this).removeClass('off').addClass('on');
        } else {
            $(this).removeClass('on').addClass('off');
        }
    });
});
