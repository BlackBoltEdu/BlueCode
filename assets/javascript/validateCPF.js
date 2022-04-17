const mask = {
    cpf (value){
        return value
            .replace(/\D/g, '')
            .replace(/(\d{3})(\d)/, '$1.$2')
            .replace(/(\d{3})(\d)/, '$1.$2')
            .replace(/(\d{3})(\d{1,2})/, '$1-$2'
            .replace(/(-\d{2})\d+?$/,));
    }
}

let cpf = document.querySelector('#cpf');

cpf.addEventListener('input', e => {
    e.target.value = mask.cpf(e.target.value);
});

validadeCPF = cpf.value
console.log(validadeCPF)
function isCPF(cpf) {
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