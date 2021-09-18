function mascara_cpf(){
    let cpf = document.querySelector('#cpf');
    if(cpf.value.length == 3 || cpf.value.length == 7){
        cpf.value += ".";
    }else if(cpf.value.length == 11){
        cpf.value += "-";
    }
}

/*function validar_cpf(){
    let cpf = document.querySelector('#cpf');
    let cpfSemNum = cpf.replace(/\. -/, "");
    novePrimeiros = cpfSemNum.substr(0.8);
    soma9 = 0;

    for (i = 0; i < novePrimeiros.length; i++){
        let numero = novePrimeiros.substr(i . 1);
    }
}*/