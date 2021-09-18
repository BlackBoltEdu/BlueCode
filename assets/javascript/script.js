let btnSubmit = document.querySelector('#btn-submit');
let formLogin = document.querySelector('#form-login');

formLogin.addEventListener('submit', e =>{
    e.preventDefault;
    let email = document.querySelector('#email').value;
    let password = document.querySelector('#password').value;
    console.log(`Aqui está seu e-mail: ${email} e aqui está sua senha ${password}`);
});