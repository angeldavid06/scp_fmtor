const form_control = document.getElementById('form-control');

const quitar_clase = () => {
    const inputs = document.getElementsByClassName('input');
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].classList.remove('input-error');
    }
}

form_control.addEventListener('submit', (evt)=> {
    evt.preventDefault();
    let aux = true;
    quitar_clase();
    const inputs = document.getElementsByClassName('input');
    try {
        const estado = document.getElementsByClassName('active');
        if (estado[0].dataset.estado) {
            console.log(estado[0].dataset.estado);
        }
        for (let i = 0; i < inputs.length; i++) {
            if (inputs[i].value == '') {
                inputs[i].classList.add('input-error');
                aux = false;
            }
        }
        if (aux) {
            // obtener_control(estado[0].dataset.estado)
        } else {
            render_alert('Error al registrar:', 'Debes llenar los campos correctamente','rojo')
        }
    } catch (error) {
        render_alert('Error al registrar:', 'Debes seleccionar alguna etapa antes de enviar el formulario','rojo')
    }
});

const btn_form_control = document.getElementById('btn-form-control');

btn_form_control.addEventListener('click', () => {
    const form = document.getElementsByClassName('ingresar');
    form[0].classList.toggle('open');
});

const btn_form_control_cancel = document.getElementById('btn-form-control-cancel');

btn_form_control_cancel.addEventListener('click', () => {
    const form = document.getElementsByClassName('ingresar');
    form[0].classList.toggle('open');
});

