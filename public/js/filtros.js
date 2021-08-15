if (document.getElementsByClassName('btn_filtrar_open')) {
    const btn_filtros_op = document.getElementsByClassName('btn_filtrar_open');
    btn_filtros_op[0].addEventListener('click', () => {
        const filtros = document.getElementsByClassName('filtrar');
        filtros[0].classList.toggle('open');
    });
}