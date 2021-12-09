function mascara_cpf() {
    let cpf = document.querySelector('#cpf');
    if (cpf.value.length == 3 || cpf.value.length == 7) {
        cpf.value += ".";
    } else if (cpf.value.length == 11) {
        cpf.value += "-";
    }
}

function isCPF(cpf = 0) {
    cpf = cpf.replace(/\.|-/g,"");
    let j = 10;
    valor1 = 0;
    for (let i = 0; i < 9; i++) {
        valor1 += cpf[i] * j;
        j--;
        if (i = 7) {
            valor1 = (valor1 * 10) % 11;
            if (valor1 == 10 || valor1 == 11) {
                valor1 = 0;
            }
        }
    }
    if (valor1 != cpf[9]) {
        return alert('CPF invalido');
    } else {
        let j = 2;
        for (let i = 0; i < 10; i++) {
            valor1 += cpf[i] * j;
            j++;
            if (i = 7) {
                valor1 = (valor1 * 10) % 11;
                console.log(valor1);
                if (valor1 == 10 || valor1 == 11) {
                    valor1 = 0;
                    return true;
                }
            }
        }
    }
}

function mascara_cpf(mascara, input){
    // Tranformando em um vertor.
    const vetMask = mascara.split("");
    // PEGANDO SOMENTE NÚMEROS DIGITADOS PELO USUÁRIO E IGNORANDO LETRAS.
    const numCpf = input.value.replace(/\D/g, "");
    // Pegando a posição do cursor.
    const cursor = input.selectionStart;
    // Código da tecla assionada.
    const teclado = (window.event) ? event.keyCode : event.which;

    for (let i = 0; i<numCpf)
}