const main = document.getElementsByClassName('main')
const general = document.getElementsByClassName('info_general')

main[0].addEventListener('scroll', (e) => {
    let header;
    if (document.getElementsByClassName('header')) {
        header = document.getElementsByClassName('header');
    }
    if (main[0].scrollTop > 5) {
        header[0].classList.add('scroll')
    } else {
        header[0].classList.remove('scroll')
    }
})

general[0].addEventListener('click', () => {
    general[0].classList.toggle('hidden')
})