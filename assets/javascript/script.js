function iniciaModal(modalID){
    const modal = document.getElementById(modalID);
    modal.classList.toggle('mostrar');
    modal.addEventListener('click', (e) =>{
        if(e.target.id == modalID || e.target.className == 'x-fechar' || e.target.className == 'btn-cancelar'){
            modal.classList.remove('mostrar');
        }
    });
}

const teste = document.querySelector('#editar');

teste.addEventListener('click', () => iniciaModal('modal-atualizar'));