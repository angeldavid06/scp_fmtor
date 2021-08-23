const btn_cancel_filtrar = document.getElementsByClassName('btn-cancel');

btn_cancel_filtrar[0].addEventListener('click', () => {
    const filtrar = document.getElementsByClassName('filtrar');
    filtrar[0].classList.toggle('open');
});

btn_cancel_filtrar[1].addEventListener('click', () => {
    const filtrar = document.getElementsByClassName('filtrar');
    filtrar[0].classList.toggle('open');
});


const quitar_filas = (t_body) => {
    while(t_body.firstChild){
        t_body.removefirstChild(t_body.firstChild)
    }
}

const cargar_todos = () => {
    const t_body= document.getElementsByClassName('body');
    const fragmento= document.createDocumentFragment();
    quitar_filas();
    obtener_ordenes();
}

const obtener_ordenes = () => {
    fetch('')
    .then(()=>{

    })
    .catch(()=>{
        
    })
}