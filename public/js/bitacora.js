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

{/* <div class="table">
    <div class="cabecera">
        <p>CAL.</p>
        <p>Kg.</p>
        <p>Factor</th>
        <p>N° O.P.</p>
        <p>Fecha de O.P.</p>
        <p>Cliente</p>
        <p>Medida</p>
        <p>Descripción</p>
        <p>Acabado</p>
        <p>Cant</p>
        <p>Precio</p>
        <p>Total</p>
        <p>Acumulado</p>
        <p>Estado</p>
    </div>
    <div class="body">
        <div class="tr cancelado">
            <p>Dato-1</p>
            <p>Dato-2</p>
            <p>Dato-3</p>
            <p>Dato-4</p>
            <p>Dato-5</p>
            <p>Dato-6</p>
            <p>Dato-7</p>
            <p>Dato-8</p>
            <p>Dato-9</p>
            <p>Dato-10</p>
            <p>Dato-11</p>
            <p>Dato-12</p>
            <p>Dato-13</p>
            <p>Dato-14</p>
        </div>
    </div>
</div> */}