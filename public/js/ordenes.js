const btn_cancel_filtrar = document.getElementsByClassName('btn-cancel');

btn_cancel_filtrar[0].addEventListener('click', () => {
    const filtrar = document.getElementsByClassName('filtrar');
    filtrar[0].classList.toggle('open');
});

btn_cancel_filtrar[1].addEventListener('click', () => {
    const filtrar = document.getElementsByClassName('filtrar');
    filtrar[0].classList.toggle('open');
});


const quitar_filas = (t_body) => {
    while(t_body.firstChild){
        t_body.removefirstChild(t_body.firstChild)
    }
}

const render_ordenes = (json) => {
    const t_body= document.getElementsByClassName('body')
    const fragmento = document.createDocumentFragment()
    json.forEach(el => {
        const tr = document.createElement('tr')
        const cal = document.createElement('td')
        const kg = document.createElement('td')
        const factor = document.createElement('td')
        const op = document.createElement('td')
        const fechaOp = document.createElement('td')
        const cliente = document.createElement('td')
        const medida = document.createElement('td')
        const descripcion = document.createElement('td')
        const acabado = document.createElement('td')
        const cantidad = document.createElement('td')
        const precio = document.createElement('td')
        const total = document.createElement('td')
        const acumulado = document.createElement('td')
        const estado = document.createElement('td')

        cal.innerHTML = el.calibre
        kg.innerHTML = el.kilos
        factor.innerHTML = el.factor
        op.innerHTML = el.op
        fechaOp.innerHTML = el.fecha
        cliente.innerHTML = el.Cliente
        medida.innerHTML = el.Medida
        descripcion.innerHTML = el.Descripción
        acabado.innerHTML = el.Acabado
        cantidad.innerHTML = el.cantidad
        precio.innerHTML = el.precio
        total.innerHTML = el.Total
        acumulado.innerHTML = el.Acumulado
        estado.innerHTML = el.estado

        tr.appendChild(cal)
        tr.appendChild(kg)
        tr.appendChild(factor)
        tr.appendChild(op)
        tr.appendChild(fechaOp)
        tr.appendChild(cliente)
        tr.appendChild(medida)
        tr.appendChild(descripcion)
        tr.appendChild(acabado)
        tr.appendChild(cantidad)
        tr.appendChild(precio)
        tr.appendChild(total)
        tr.appendChild(acumulado)
        tr.appendChild(estado)

        fragmento.appendChild(tr)
    })
    t_body[0].appendChild(fragmento)
}

const render_reporte_diario = (json) => {
    const t_body= document.getElementsByClassName('body')
    const fragmento = document.createDocumentFragment()
    json.forEach(el => {
        const tr = document.createElement('tr')
        const fecha = document.createElement('td')
        const turno = document.createElement('td')
        const estado = document.createElement('td')
        const op = document.createElement('td')
        const cliente = document.createElement('td')
        const kg = document.createElement('td')
        const pzas = document.createElement('td')
        const maquina = document.createElement('td')
        const descripcion = document.createElement('td')
        const observaciones = document.createElement('td')

        fecha.innerHTML = el.Fecha
        turno.innerHTML = el.turno
        estado.innerHTML = el.Departamento
        op.innerHTML = el.Orden_de_producción
        cliente.innerHTML = el.Cliente
        kg.innerHTML = el.kilos
        pzas.innerHTML = el.pzas
        maquina.innerHTML = el.Maquina
        descripcion.innerHTML = el.Descripcion
        observaciones.innerHTML = el.observaciones

        tr.appendChild(fecha)
        tr.appendChild(turno)
        tr.appendChild(estado)
        tr.appendChild(op)
        tr.appendChild(cliente)
        tr.appendChild(kg)
        tr.appendChild(pzas)
        tr.appendChild(maquina)
        tr.appendChild(descripcion)
        tr.appendChild(observaciones)
        fragmento.appendChild(tr)
    });
    t_body[0].appendChild(fragmento)
}

const obtener_ordenes = () => {
    preloader()
    fetch('http://192.168.0.43/scp_fmtor/?controller=opController&action=obtener_ordenes')
    .then(res => (res.ok ? res.json() : Promise.reject(res)))
    .then(json => {
        ocultarPreloader() 
        render_ordenes(json)
        console.log(json)
    })
    .catch(err => {
        console.log(err)
    })
}

const obtener_reporte_diario = () => {
    preloader()
    fetch('http://192.168.0.43/scp_fmtor/?controller=opController&action=obtener_reporte_diario')
    .then(res => (res.ok ? res.json() : Promise.reject(res)))
    .then(json => {
        ocultarPreloader() 
        render_reporte_diario(json)
        console.log(json)
    })
    .catch(err => {
        console.log(err)
    })
}

document.addEventListener('DOMContentLoaded', () => {
    obtener_ordenes()
});