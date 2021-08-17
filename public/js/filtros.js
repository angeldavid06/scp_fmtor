let cabeceras = [['Cal.', 'Kg.', 'Factor', 'N°. O.P.', 'Fecha de O.P.', 'Cliente', 'Medida', 'Descripción', 'Acabado', 'Cant.', 'Precio', 'Total', 'Acumulado', 'Estado'],['O.P.', 'Cliente', 'Kg.', 'Pzas. Producidas', 'Máquina', 'Descripción', 'Observaciones']];

const limpiar_cabecera = () => {
    const thead = document.getElementsByClassName('cabecera');
    while (thead[0].firstChild) {
        thead[0].removeChild(thead[0].firstChild);
    }
}

const cabecera_op = (titulos) => {
    limpiar_cabecera();
    const fragmento = document.createDocumentFragment();
    const thead = document.getElementsByClassName('cabecera');
    
    for (let i = 0; i < titulos.length; i++) {
        const th = document.createElement('th');
        th.innerHTML = titulos[i];
        fragmento.appendChild(th);
    }

    thead[0].appendChild(fragmento);
}

if (document.getElementsByClassName('btn_filtrar_open')) {
    const btn_filtros_op = document.getElementsByClassName('btn_filtrar_open');
    btn_filtros_op[0].addEventListener('click', () => {
        const filtros = document.getElementsByClassName('filtrar');
        filtros[0].classList.toggle('open');
    });
}

const form_filtros = document.getElementById('form-filtros');
form_filtros.addEventListener('submit', (evt) => {
    evt.preventDefault();
});

const form_formatos = document.getElementById('form-formatos');
form_formatos.addEventListener('submit', (evt) => {
    evt.preventDefault();
    const select = document.getElementById('seleccion_formato');
    cabecera_op(cabeceras[select.value]);
});