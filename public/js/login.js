if (document.getElementsByClassName('btn-login-form')) {
    const btn_login_open = document.getElementsByClassName('btn-login-form');
    btn_login_open[0].addEventListener('click', () => {
        const row = document.getElementsByClassName('row-con');
        row[0].classList.toggle('hidden');
    });
}