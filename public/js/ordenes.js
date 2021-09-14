const btn_cancel_filtrar = document.getElementsByClassName('btn-cancel');

btn_cancel_filtrar[0].addEventListener('click', () => {
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
        const tr = document.createElement('div')

        tr.classList.add('tr')

        if (el.estado == 'TERMINADO') {
            tr.classList.add('terminado')
        } else if (el.estado == 'CANCELADO') {
            tr.classList.add('cancelado')
        }

        tr.innerHTML += '<p>'+el.calibre+'</p>'+
                        '<p>'+el.kilos+'</p>'+
                        '<p>'+el.factor+'</p>'+
                        '<p>'+el.op+'</p>'+
                        '<p>'+el.fecha+'</p>'+
                        '<p>'+el.Cliente+'</p>'+
                        '<p>'+el.Medida+'</p>'+
                        '<p>'+el.Descripción+'</p>'+
                        '<p>'+el.Acabado+'</p>'+
                        '<p class="number">'+el.cantidad+'</p>'+
                        '<p class="number">$ ' + new Intl.NumberFormat('es-MX').format(el.precio)+'</p>'+
                        '<p class="number">$ ' + new Intl.NumberFormat('es-MX').format(el.Total)+'</p>'+
                        '<p class="number">'+el.Acumulado+'</p>'+
                        '<p>'+el.estado+'</p>'

        t_body[0].appendChild(tr)
    })
}

const render_reporte_diario = (json) => {
    const t_body= document.getElementsByClassName('body')
    json.forEach(el => {
        const tr = document.createElement('div')
        tr.classList.add('tr')

        tr.innerHTML += '<p>'+el.Fecha+'</p>'+
                        '<p>'+el.turno+'</p>'+
                        '<p>'+el.estado+'</p>'+
                        '<p>'+el.Orden_de_producción+'</p>'+
                        '<p>'+el.Cliente+'</p>'+
                        '<p>'+el.kilos+'</p>'+
                        '<p>'+el.pzas+'</p>'+
                        '<p>'+el.Maquina+'</p>'
                        '<p>'+el.Descripcion+'</p>'+
                        '<p>'+el.observaciones+'</p>'
                        
        t_body[0].appendChild(tr)
    });
}

const obtener_ordenes = () => {
    preloader()
    fetch(url+'/scp_fmtor/?controller=opController&action=obtener_ordenes')
    .then(res => (res.ok ? res.json() : Promise.reject(res)))
    .then(json => {
        ocultarPreloader() 
        render_ordenes(json)
    })
    .catch(err => {
        console.log(err)
    })
}

const obtener_reporte_diario = () => {
    preloader()
    fetch(url+'/scp_fmtor/?controller=opController&action=obtener_reporte_diario')
    .then(res => (res.ok ? res.json() : Promise.reject(res)))
    .then(json => {
        ocultarPreloader() 
        render_reporte_diario(json)
    })
    .catch(err => {
        console.log(err)
    })
}

document.addEventListener('DOMContentLoaded', () => {
    obtener_ordenes()
});

