const preloader = () => {
    const div_content = document.createElement('div')
    const div_preloader = document.createElement('div')
    const div_progress = document.createElement('div')

    div_content.classList.add('content_preloader')
    div_preloader.classList.add('preloader')
    div_progress.classList.add('progress')

    div_preloader.appendChild(div_progress)
    div_content.appendChild(div_preloader)
    document.body.appendChild(div_content)
}

const ocultarPreloader = () => {
    const preloader = document.getElementsByClassName('content_preloader')
    document.body.removeChild(preloader[0])
}