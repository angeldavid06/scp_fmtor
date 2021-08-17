document.addEventListener('click', (evt) => {
    if (evt.target.dataset.estado) {
        quit_class();
        evt.target.classList.add('active')
        const estado = document.getElementsByClassName('estado_'+evt.target.dataset.estado);
        estado[0].classList.add('active')
    } 
});

const quit_class = () => {
    const botones = document.getElementsByClassName('boton_estado');
    for (let i = 0; i < botones.length; i++) {
        botones[i].classList.remove('active')
    }
    const estado = document.getElementsByClassName('tabla_estado');
    for (let i = 0; i < estado.length; i++) {
        estado[i].classList.remove('active')
    }
}