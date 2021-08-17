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