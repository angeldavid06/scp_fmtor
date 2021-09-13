const render_bitacora = (json) => {
    const body = document.getElementsByClassName('body')
    const fragmento = document.createDocumentFragment()
    json.forEach(el => {
        const tr = document.createElement('div')
        const usuario = document.createElement('p')
        const tabla = document.createElement('p')
        const accion = document.createElement('p')
        const descripcion = document.createElement('p')
        const fecha = document.createElement('p')
        
        tr.classList.add('tr')

        usuario.innerHTML = el.usuario
        tabla.innerHTML = el.tabla
        accion.innerHTML = el.accion
        descripcion.innerHTML = el.descripcion
        fecha.innerHTML = el.fecha

        tr.appendChild(usuario)
        tr.appendChild(tabla)
        tr.appendChild(accion)
        tr.appendChild(descripcion)
        tr.appendChild(fecha)
        fragmento.appendChild(tr)
    });
    body[0].appendChild(fragmento)
}

const obtener_bitacora = () => {
    preloader()
    fetch(url+'/scp_fmtor/?controller=usuariosController&action=obtener_bitacora')
    .then(res => res.ok ? res.json() : Promise.reject(res))
    .then(json => {
        ocultarPreloader() 
        render_bitacora(json);
    })
    .catch(err => {
        console.log(err);
    })
}

document.addEventListener('DOMContentLoaded', () => {
    obtener_bitacora();
})