document.addEventListener('click', (evt) => {
    if (evt.target.dataset.estado) {
        quit_class();
        evt.target.classList.add('active')
        const estado = document.getElementsByClassName('estado_'+evt.target.dataset.estado);
        estado[0].classList.add('active')
        obtener_control(evt.target.dataset.estado)
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

const obtener_control = (vista) => {
    const op_control = document.getElementById('op_control')

    const data = {
        vista: vista,
        op: op_control.value
    }

    const control = JSON.stringify(data);

    fetch('http://localhost/scp_fmtor/?controller=controlController&action=obtener_control&control='+control)
    .then(res => (res.ok ? res.json() : Promise.reject(res)))
    .then(json => {
        render_control(vista,json)
    })
}

const quitar_filas = (tabla) => {
    const body = document.getElementsByClassName('body_'+tabla)
    while (body[0].firstChild) {
        body[0].removeChild(body[0].firstChild)
    }
}

const render_control = (vista,json) => {
    const tabla = document.getElementsByClassName('estado_'+vista)
    const fragmento = document.createDocumentFragment()
    const body = document.getElementsByClassName('body_'+vista)

    quitar_filas(vista)

    json.forEach(el => {
        const tr = document.createElement('tr')
        const maquina = document.createElement('td')
        const bote = document.createElement('td')
        const fecha = document.createElement('td')
        const pzas = document.createElement('td')
        const acumuladas = document.createElement('td')
        const kg = document.createElement('td')

        maquina.innerHTML = el.no_maquina
        bote.innerHTML = el.bote
        fecha.innerHTML = el.fecha_entrega
        pzas.innerHTML = el.pzas
        acumuladas.innerHTML = el.pzas_acumuladas
        kg.innerHTML = el.kilos

        tr.appendChild(maquina)
        tr.appendChild(bote)
        tr.appendChild(fecha)
        tr.appendChild(pzas)
        tr.appendChild(acumuladas)
        tr.appendChild(kg)
        fragmento.appendChild(tr)
    });
    body[0].appendChild(fragmento)
}