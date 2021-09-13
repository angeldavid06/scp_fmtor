const main = document.getElementsByClassName('main')

main[0].addEventListener('scroll', (e) => {
    let header;
    if (document.getElementsByClassName('header')) {
        header = document.getElementsByClassName('header');
    }
    if (main[0].scrollTop > 50) {
        header[0].classList.add('scroll')
    } else {
        header[0].classList.remove('scroll')
    }
})