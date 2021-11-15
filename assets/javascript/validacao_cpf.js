function mascara_cpf(){
    let cpf = document.querySelector('#cpf');
    if(cpf.value.length == 3 || cpf.value.length == 7){
        cpf.value += ".";
    }else if(cpf.value.length == 11){
        cpf.value += "-";
    }
    
}