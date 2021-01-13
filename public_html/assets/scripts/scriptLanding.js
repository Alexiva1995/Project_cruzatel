$(document).ready(function () {
    let url = window.location.hash
    if (url != '') {
        moveDiv(url)
    }
    
    
    $(window).scroll(function () {
        if ($(window).scrollTop() > 80) {
            $('#menu').addClass('bg-white')
            $('#menu').addClass('fixed-top')
            $('#menu').removeClass('sticky-top')
            $('.nav-link.d-flex').removeClass('text-white')
        } else {
            $('#menu').addClass('sticky-top')
            $('#menu').removeClass('fixed-top')
            $('#menu').removeClass('bg-white')
            $('.nav-link.d-flex').addClass('text-white')
        }
    });
})

function moveDiv(hash) {
    // let url = window.location.pathname
    // let tmpurl = url.split('/')
    if (hash != '') {
        // if (tmpurl[tmpurl.length-1] == 'legal') {
        //     window.location.href = '../'+hash
        // }

        if (hash != '#menu') {
            let position = ($(hash).offset().top - 120);
            $('html, body').animate({
                scrollTop: position
            }, 1000)
        }else{
            let position = 0;
            $('html, body').animate({
                scrollTop: position
            }, 1000)
        }
    }
}