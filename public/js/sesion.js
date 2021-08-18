const btn_sesion = document.getElementById('btn-sesion');

btn_sesion.addEventListener('click', () => {
    window.location.href = 'http://192.168.0.43/scp_fmtor/?controller=usuariosController&action=cerrar';
})