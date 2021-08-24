const preloader = () => {
    const div_preloader = document.createElement('div')
    const div_progress = document.createElement('div')

    div_preloader.classList.add('preloader')
    div_progress.classList.add('progress')

    div_preloader.appendChild(div_progress)
    document.body.appendChild(div_preloader)
}

const ocultarPreloader = () => {
    const preloader = document.getElementsByClassName('preloader')
    document.body.removeChild(preloader[0])
}