const btn_cancel_ingresar = document.getElementsByClassName('btn-cancel')
const btn_add = document.getElementsByClassName('btn-form-add')

btn_cancel_ingresar[0].addEventListener('click', () => {
    const ingresar = document.getElementsByClassName('ingresar')
    ingresar[0].classList.remove('open')
});

btn_cancel_ingresar[1].addEventListener('click', () => {
    const ingresar = document.getElementsByClassName('ingresar')
    ingresar[1].classList.remove('open')
});

btn_add[0].addEventListener('click', () => {
    const ingresar = document.getElementsByClassName('ingresar')
    ingresar[0].classList.toggle('open')
});

const quitar_clase = () => {
    const inputs = document.getElementsByClassName('input')
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].classList.remove('input-error')
    }
}

const form_usuarios = document.getElementById('form-usuarios');
form_usuarios.addEventListener('submit', (evt) => {
    let aux = true;
    evt.preventDefault()
    quitar_clase()
    const inputs = document.getElementsByClassName('inputI')
    for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].value == '') {
            inputs[i].classList.add('input-error')
            aux = false;
        }
    }
    if (aux) {
        insertar_usuario()
    } else {
        render_alert('Error al intentar realizar el registro:','Debes llenar los campos correctamente', 'rojo')
    }
})

const form_usuarios_actualizar = document.getElementById('form-usuarios-actualizar');
form_usuarios_actualizar.addEventListener('submit', (evt) => {
    let aux = true;
    evt.preventDefault()
    quitar_clase()
    const inputs = document.getElementsByClassName('inputU')
    for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].value == '') {
            inputs[i].classList.add('input-error')
            aux = false;
        }
    }
    if (aux) {
        actualizar_usuario()
    } else {
        render_alert('Error al intentar realizar el registro:','Debes llenar los campos correctamente', 'rojo')
    }
})

const insertar_usuario = () => {
    const data = new FormData(form_usuarios);
    const options = {
        method: "POST",
        body: data
    }
    preloader()
    fetch('http://192.168.0.43/scp_fmtor/?controller=usuariosController&action=insertar', options)
    .then(res => (res.ok ? res.json() : Promise.reject(res)))
    .then(res => {
        ocultarPreloader() 
        if (res > 0) {
            render_alert('Registro exitoso:','El usuario se añadio correctamente', 'azul')
            const inputs = document.getElementsByClassName('input')
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].value = '';
            }
            obtener_usuarios()
        } else {
            render_alert('Error al intentar realizar el registro:','No se pudo añadir correctamente el usuario', 'rojo')
        }
    })
    .catch(err => {
        console.log(err);
    })
}

document.addEventListener('DOMContentLoaded', () => {
    obtener_usuarios();
});

const quitar_filas = (t_body) => {
    while (t_body.firstChild) {
        t_body.removeChild(t_body.firstChild)
    }
}

const cargar_todos = () => {
    const t_body = document.getElementsByClassName('body')
    const fragmento = document.createDocumentFragment()
    quitar_filas(t_body[0])
    obtener_usuarios()
}

const obtener_usuarios = () => {
    preloader()
    fetch('http://192.168.0.43/scp_fmtor/?controller=usuariosController&action=obtener')
    .then((res) => (res.ok ? res.json() : Promise.reject(res)))
    .then((json) => {
        ocultarPreloader() 
        render_usuarios(json)
    })
    .catch((err) => {
        console.log(err)
    })
}

const obtener_usuario = (id) => {
    preloader()
    console.log(id);
    fetch('http://192.168.0.43/scp_fmtor/?controller=usuariosController&action=obtener_usuario&id='+id)
    .then((res) => (res.ok ? res.json() : Promise.reject(res)))
    .then((json) => {
        ocultarPreloader() 
        let input_id = document.getElementById('id')
        let input_usuarioU = document.getElementById('usuarioU')
        let input_emailU = document.getElementById('emailU')
        let input_rolU = document.getElementById('rolU')
        json.forEach(el => {
            input_id.value = el.id
            input_usuarioU.value = el.nombre
            input_emailU.value = el.correo
            input_rolU.options[el.id_rol].setAttribute('selected','')
            console.log(input_rolU);
        })
    })
    .catch((err) => {
        console.log(err)
    })
}

const render_usuarios = (json) => {
    const body = document.getElementsByClassName('body')
    const fragmento = document.createDocumentFragment()
    
    quitar_filas(body[0])

    json.forEach(el => {
        const tr = document.createElement('tr')
        const td_btn_edit = document.createElement('td')
        const td_btn_delete = document.createElement('td')
        const btn_edit = document.createElement('button')
        const btn_delete = document.createElement('button')
        const td_user = document.createElement('td')
        const td_email = document.createElement('td')
        const td_rol = document.createElement('td')

        btn_edit.innerHTML = 'edit'
        btn_edit.dataset.id = el.id
        btn_edit.dataset.action = 'actualizar'
        btn_edit.classList.add('material-icons')
        btn_edit.classList.add('btn-icon')
        btn_edit.classList.add('btn-update')
        btn_edit.classList.add('btn-form-update')
        
        btn_delete.innerHTML = 'delete'
        btn_delete.dataset.id = el.id
        btn_delete.dataset.action = 'eliminar'
        btn_delete.classList.add('material-icons')
        btn_delete.classList.add('btn-icon')
        btn_delete.classList.add('btn-delete')

        td_btn_edit.classList.add('td-btn')
        td_btn_delete.classList.add('td-btn')

        td_user.innerHTML = el.usuario
        td_email.innerHTML = el.correo
        td_rol.innerHTML = el.rol

        td_btn_edit.appendChild(btn_edit)
        td_btn_delete.appendChild(btn_delete)
        tr.appendChild(td_btn_edit)
        tr.appendChild(td_btn_delete)
        tr.appendChild(td_user)
        tr.appendChild(td_email)
        tr.appendChild(td_rol)
        fragmento.appendChild(tr)
    });
    body[0].appendChild(fragmento)
}

document.addEventListener('click', (evt) => {
    if (evt.target.dataset.id) {
        if (evt.target.dataset.action == 'actualizar') {
            const ingresar = document.getElementsByClassName('actualizar')
            ingresar[0].classList.add('open')
            obtener_usuario(evt.target.dataset.id)
        } else if (evt.target.dataset.action == 'eliminar') {
            eliminar_usuario(evt.target.dataset.id)
        }
    }
});


const eliminar_usuario = (id) => {
    preloader()
    fetch('http://192.168.0.43/scp_fmtor/?controller=usuariosController&action=eliminar&id='+id)
    .then((res) => {
        ocultarPreloader() 
        obtener_usuarios()
    })
    .catch((err) => {
        console.log(err)
    })
}

const actualizar_usuario = () => {
    preloader()
    const data = new FormData(form_usuarios_actualizar);
    const options = {
        method: 'POST',
        body: data
    }
    fetch('http://192.168.0.43/scp_fmtor/?controller=usuariosController&action=actualizar',options)
    .then((res) => (res.ok ? res.text() : Promise.reject(res)))
    .then((res) => {
        console.log(res);
        ocultarPreloader()
        obtener_usuarios()
    })
    .catch((res) => {
        console.log(res);
    })
}