document.addEventListener('click', (evt) => {
    if (evt.target.dataset.estado) {
        quit_class();
        evt.target.classList.add('active')
        const estado = document.getElementsByClassName('estado_'+evt.target.dataset.estado);
        estado[0].classList.add('active')
        if (document.getElementById('op_control').value != '') {
            // obtener_control(evt.target.dataset.estado)
        }
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

    fetch(url+'/scp_fmtor/?controller=controlController&action=obtener_control&control='+control)
    .then(res => (res.ok ? res.json() : Promise.reject(res)))
    .then(json => {
        render_control(vista,json)
        obtener_op_control(op_control.value)
    })
    .catch(err => {
        console.log(err);
    })
}

const obtener_op_control = (op) => {
    const info_1 = document.getElementsByClassName('info_1')
    const info_2 = document.getElementsByClassName('info_2')

    fetch('http://localhost/scp_fmtor/?controller=controlController&action=obtener_info_op&op='+op)
    .then(res => (res.ok ? res.json() : Promise.reject(res)))
    .then(json => {
        quitar_info(info_1[0],info_2[0])
        render_info(json,info_1[0],info_2[0])
    })
    .catch(err => {
        console.log(err);
    })
}

const quitar_info = (info_1,info_2) => {
    while (info_1.firstChild) {
        info_1.removeChild(info_1.firstChild)
    }
    while (info_2.firstChild) {
        info_2.removeChild(info_2.firstChild)
    }
}

const render_info = (json,info_1,info_2) => {
    const fragmento_1 = document.createDocumentFragment()
    const fragmento_2 = document.createDocumentFragment()

    json.forEach(el => {
        const dibujo = document.createElement('td')
        const cliente = document.createElement('td')
        const fecha = document.createElement('td')
        const cantidad = document.createElement('td')
        const descripcion = document.createElement('td')

        dibujo.innerHTML = 'Código de dibujo: '+el.dibujo;
        cliente.innerHTML = 'Cliente: '+el.Cliente
        fecha.innerHTML = 'Fecha: '+el.fecha
        cantidad.innerHTML = 'Cantidad: '+el.cantidad
        descripcion.innerHTML = 'Descripción: '+el.Descripción
        
        fragmento_1.appendChild(dibujo)
        fragmento_1.appendChild(cliente)
        fragmento_1.appendChild(fecha)
        fragmento_1.appendChild(cantidad)
        fragmento_2.appendChild(descripcion)
    })
    info_1.appendChild(fragmento_1)
    info_2.appendChild(fragmento_2)
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