const render_bitacora = (json) => {
    const body = document.getElementsByClassName('body')
    const fragmento = document.createDocumentFragment()
    json.forEach(el => {
        const tr = document.createElement('tr')
        const usuario = document.createElement('td')
        const tabla = document.createElement('td')
        const accion = document.createElement('td')
        const descripcion = document.createElement('td')
        const fecha = document.createElement('td')
        
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
    fetch(url+'/scp_fmtor/?controller=usuariosController&action=obtener_bitacora')
    .then(res => res.ok ? res.json() : Promise.reject(res))
    .then(json => {
        render_bitacora(json);
    })
    .catch(err => {
        console.log(err);
    })
}

document.addEventListener('DOMContentLoaded', () => {
    obtener_bitacora();
})