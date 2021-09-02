const btn_sesion = document.getElementById('btn-sesion');

btn_sesion.addEventListener('click', () => {
    window.location.href = url+'/scp_fmtor/?controller=usuariosController&action=cerrar';
})