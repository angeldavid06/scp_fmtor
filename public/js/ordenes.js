const btn_cancel_filtrar = document.getElementsByClassName('btn-cancel');

btn_cancel_filtrar[0].addEventListener('click', () => {
    const filtrar = document.getElementsByClassName('filtrar');
    filtrar[0].classList.toggle('open');
});

btn_cancel_filtrar[1].addEventListener('click', () => {
    const filtrar = document.getElementsByClassName('filtrar');
    filtrar[0].classList.toggle('open');
});

