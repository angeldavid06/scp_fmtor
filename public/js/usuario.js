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
        // Función fetch
    } else {
        render_alert('Error al intentar realizar el registro:','Debes llenar los campos correctamente', 'rojo')
    }
})