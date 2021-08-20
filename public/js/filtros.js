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

const checkbox = ['check_op','check_rango_op','check_fecha','check_fecha_mes','check_fecha_anio','check_rango_fecha','check_cliente','check_estado'];

const filtros_personalizados = (check, filtro) => {
    if (check && (filtro == 'f_op' || filtro == 'f_fecha')) {
        const inputs = document.getElementsByClassName('input')
        for (let i = 0; i < inputs.length; i++) {
            inputs[i].setAttribute('disabled','')
        }
        if (filtro == 'f_op') {
            for (let i = 1; i < checkbox.length; i++) {
                document.getElementById('lbl_'+checkbox[i]).setAttribute('disabled','')
                document.getElementById(checkbox[i]).setAttribute('disabled','')
                document.getElementById(checkbox[i]).checked = false;
            }
        } else if (filtro == 'f_fecha') {
            for (let i = 0; i < checkbox.length; i++) {
                if (checkbox[i] != 'check_fecha') {
                    document.getElementById('lbl_'+checkbox[i]).setAttribute('disabled','')
                    document.getElementById(checkbox[i]).setAttribute('disabled','')
                    document.getElementById(checkbox[i]).checked = false;
                }
            }
        }
    } else if (!check && (filtro == 'f_op' || filtro == 'f_fecha')) {
        if (filtro == 'f_op') {
            for (let i = 1; i < checkbox.length; i++) {
                document.getElementById('lbl_'+checkbox[i]).removeAttribute('disabled')
                document.getElementById(checkbox[i]).removeAttribute('disabled')
            }
        } else if (filtro == 'f_fecha') {
            for (let j = 0; j < checkbox.length; j++) {
                if (checkbox[j] != 'check_fecha') {
                    document.getElementById('lbl_'+checkbox[j]).removeAttribute('disabled')
                    document.getElementById(checkbox[j]).removeAttribute('disabled')
                }
            }
        }
    }
}

document.addEventListener('click', (evt) => {
    if (evt.target.dataset.check) {
        if (!evt.target.dataset.rango) {
            filtros_personalizados(evt.target.checked, evt.target.dataset.check)
            const input = document.getElementById(evt.target.dataset.check);
            if (evt.target.checked) {
                input.removeAttribute('disabled')
            } else if (!evt.target.checked) {
                input.setAttribute('disabled','')
            }
        } else {
            const inputm = document.getElementById(evt.target.dataset.check+'_m');
            const inputM = document.getElementById(evt.target.dataset.check+'_M');
            if (evt.target.checked) {
                inputm.removeAttribute('disabled')
                inputM.removeAttribute('disabled')
            } else if (!evt.target.checked) {
                inputm.setAttribute('disabled','')
                inputM.setAttribute('disabled','')
            }
        }
    }
});