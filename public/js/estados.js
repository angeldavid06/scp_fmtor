let total_kg = 0.0;
let total_pzas = 0;

document.addEventListener('click', (evt) => {
    if (evt.target.dataset.estado) {
        quit_class();
        evt.target.classList.add('active')
        const estado = document.getElementsByClassName('estado_'+evt.target.dataset.estado);
        const titulo_estado = document.getElementsByClassName('titulo_estado');
        estado[0].classList.add('show')
        titulo_estado[0].innerHTML = evt.target.dataset.titulo;
        if (document.getElementById('op_control').value != '') {
            obtener_control(evt.target.dataset.estado)
        }
    } 
});

const quit_class = () => {
    const botones = document.getElementsByClassName('boton_estado');
    for (let i = 0; i < botones.length; i++) {
        botones[i].classList.remove('active')
    }
    const estado = document.getElementsByClassName('table-control');
    for (let i = 0; i < estado.length; i++) {
        estado[i].classList.remove('show')
    }
}

const obtener_control = (vista) => {
    preloader()
    total_kg = 0.0
    total_pzas = 0
    const op_control = document.getElementById('op_control')
    
    const data = {
        vista: vista,
        op: op_control.value
    }
    
    const control = JSON.stringify(data);
    
    fetch(url+'/scp_fmtor/?controller=controlController&action=obtener_control&control='+control)
    .then(res => (res.ok ? res.json() : Promise.reject(res)))
    .then(json => {
        ocultarPreloader() 
        render_control(vista,json)
        obtener_op_control(op_control.value)
    })
    .catch(err => {
        console.log(err);
    })
}

const obtener_op_control = (op) => {
    preloader()
    const info = document.getElementsByClassName('info')

    fetch('http://localhost/scp_fmtor/?controller=controlController&action=obtener_info_op&op='+op)
    .then(res => (res.ok ? res.json() : Promise.reject(res)))
    .then(json => {
        ocultarPreloader() 
        quitar_info(info[1])
        render_info(json)
    })
    .catch(err => {
        console.log(err);
    })
}

const quitar_info = (info) => {
    while (info.firstChild) {
        info.removeChild(info.firstChild)
    }
}

const render_info = (json) => {
    const info = document.getElementsByClassName('info')

    json.forEach(el => {
        info[1].innerHTML = '<h3>Información de la O.P.</h3>'+
                            '<p>Código Del Dibujo:</p>'+
                            '<label class="cod_dibujo">'+el.dibujo+'</label>'+
                            '<p>Cliente:</p>'+
                            '<label class="cliente">'+el.cliente+'</label>'+
                            '<p>Fecha:</p>'+
                            '<label class="fecha">'+el.fecha+'</label>'+
                            '<p>Cantidad:</p>'+
                            '<label class="cantidad">'+el.cantidad+'</label>'+
                            '<p>Descripción:</p>'+
                            '<label class="descripcion">'+el.descripcion+'</label>';
    })
}

const quitar_filas = (tabla) => {
    const body = document.getElementsByClassName('body_'+tabla)
    while (body[0].firstChild) {
        body[0].removeChild(body[0].firstChild)
    }
}

const render_control = (vista,json) => {
    const body = document.getElementsByClassName('body_'+vista)
    const op_control = document.getElementById('op_control')

    quitar_filas(vista)

    json.forEach(el => {
        body[0].innerHTML += '<div class="button">'+
                                    '<button class="btn-icon material-icons">more_vert</button>'+
                                    '<div class="options" data-id="">'+
                                        '<a href="">'+
                                            '<i class="material-icons">edit</i>'+
                                            'Editar'+
                                        '</a>'+
                                        '<a href="">'+
                                            '<i class="material-icons">delete</i>'+
                                            'Eliminar'+
                                        '</a>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="tr">'+
                                    '<p>'+el.botes+'</p>'+
                                    '<p>'+el.fecha+'</p>'+
                                    '<p>'+new Intl.NumberFormat('es-MX').format(el.pzas)+'</p>'+
                                    '<p>'+new Intl.NumberFormat('es-MX').format(el.kilos)+'</p>'+
                                    '<p>'+el.no_maquina+'</p>'+
                                '</div>';
        total_kg += parseFloat(el.kilos)
        total_pzas += parseInt(el.pzas)
        op_control.dataset.control = el.control
    });

    const total_kilogramos = document.getElementsByClassName('total_kg')
    const total_acumuladas = document.getElementsByClassName('total_acumuladas')

    total_kilogramos[0].innerHTML = 'Total k.g.: ' + new Intl.NumberFormat('es-MX').format(total_kg)
    total_acumuladas[0].innerHTML = 'Pzas. Acumuladas: ' + new Intl.NumberFormat('es-MX').format(total_pzas)
}