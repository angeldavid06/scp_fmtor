let contador = 0;

const render_titulo = (titulo) => {
    const h3 = document.createElement('h3');
    h3.classList.add('titulo');
    h3.innerHTML = titulo;
    return h3;
}

const render_descripcion = (descripcion) => {
    const p = document.createElement('p');
    p.classList.add('descripcion');
    p.innerHTML = descripcion;
    return p;
}

const render_contenedor = () => {
    const div = document.createElement('div');
    div.classList.add('contenido');
    return div;
}

const render_alert_con = (color) => {
    const div = document.createElement('div');
    div.classList.add('alert');
    div.classList.add('alert-'+color);
    return div;
}

const render_alert = (titulo, descripcion, color) => {
    if (contador == 0) {
        contador = 1;
        const t = render_titulo(titulo);
        const d = render_descripcion(descripcion);
        const c = render_contenedor();
        const a = render_alert_con(color);
        c.appendChild(t)
        c.appendChild(d)
        a.appendChild(c)
        document.body.appendChild(a)
        
        window.setTimeout(() => {
            a.classList.add('show-alert')
        },300);
    
        window.setTimeout(() => {
            a.classList.remove('show-alert')
        },4000);
        
        window.setTimeout(() => {  
            contador = 0;
            document.body.removeChild(a)
        },4300);
    }
}

{/* <div class="alert alert-rojo">
    <div class="contenido">
        <h3 class="titulo">Titulo:</h3>
        <p class="descripcion">Descripción del problema</p>
    </div>
</div> */}