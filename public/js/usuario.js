const btn_cancel_ingresar = document.getElementsByClassName('btn-cancel');
const btn_add = document.getElementsByClassName('btn-form-add');

btn_cancel_ingresar[0].addEventListener('click', () => {
    const ingresar = document.getElementsByClassName('ingresar');
    ingresar[0].classList.toggle('open');
});

btn_add[0].addEventListener('click', () => {
    const ingresar = document.getElementsByClassName('ingresar');
    ingresar[0].classList.toggle('open');
});

const quitar_clase = () => {
    const inputs = document.getElementsByClassName('input');
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].classList.remove('input-error');
    }
}

const form_usuarios = document.getElementById('form-usuarios');
form_usuarios.addEventListener('submit', (evt) => {
    let aux = true;
    evt.preventDefault();
    quitar_clase();
    const inputs = document.getElementsByClassName('input');
    for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].value == '') {
            inputs[i].classList.add('input-error');
            aux = false;
        }
    }
    if (aux) {
        insertar_usuario();
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
    fetch('http://192.168.0.43/scp_fmtor/?controller=usuariosController&action=insertar', options)
    .then(res => (res.ok ? res.text() : Promise.reject(res)))
    .then(res => {
        if (res > 0) {
            render_alert('Registro exitoso:','El usuario se añadio correctamente', 'azul')
            const inputs = document.getElementsByClassName('input')
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].value = '';
            }
        } else {
            render_alert('Error al intentar realizar el registro:','No se pudo añadir correctamente el usuario', 'rojo')
        }
    })
    .catch(err => {
        console.log(err);
    })
}

// document.addEventListener('DOMContentLoaded', () => {
//     cargar_todos();
// });


{/* <tr>
    <td class="td-btn"><button class="material-icons btn-icon">edit</button></td>
    <td class="td-btn"><button class="material-icons btn-icon">close</button></td>
    <td>item-3</td>
    <td>item-4</td>
</tr> */}

const quitar_filas = (t_body) => {
    while (t_body.firstChild) {
        t_body.removeChild(t_body.firstChild)
    }
}

const cargar_todos = () => {
    const t_body = document.getElementsByClassName('body');
    const fragmento = document.createDocumentFragment();
    quitar_filas(t_body[0]);
    obtener_usuarios();
}

const obtener_usuarios = () => {
    fetch('')
    .then(() => {

    })
    .catch(() => {

    })
}
