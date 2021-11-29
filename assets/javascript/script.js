function iniciaModal(modalID){
    const modal = document.getElementById(modalID);
    modal.classList.add('mostrar');
    modal.addEventListener('click', (e) =>{
        if(e.target.id == modalID || e.target.className == 'x-fechar' || e.target.className == 'btn-cancelar'){
            modal.classList.remove('mostrar');
        }
    });
}

const logo = document.querySelector('#editar');
logo.addEventListener('click', () => iniciaModal('modal-atualizar'));