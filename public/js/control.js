const form_control = document.getElementById('form-control');

form_control.addEventListener('submit', (evt)=> {
    evt.preventDefault();
    try {
        const  estado = document.getElementsByClassName('active');
        if (estado[0].dataset.estado) {
            console.log(estado[0].dataset.estado);
        }
    } catch (error) {
        console.log('error');
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
