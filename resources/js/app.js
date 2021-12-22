const { default: axios } = require('axios');
const { divide } = require('lodash');
const { ModuleFilenameHelpers } = require('webpack');

require('./bootstrap');

const mensagens_el = document.querySelector(".mensagens");
const username_input = document.getElementById("username");
const mensagem_input = document.getElementById("mensagem_input");
const form_mensagem = document.getElementById("form_mensagem");

form_mensagem.addEventListener('submit',  async function (e) {
    e.preventDefault();

    let has_errors = false;

    if(username_input.value == ''){
        alert("escreva seu nome");
        has_errors =true;
    }

    if(mensagem_input.value == ''){
        alert("escreva uma mensagem...");
        has_errors =true;
    }
    if (has_errors) {
        return;
    }

    document.querySelector('#form_mensagem').style.display = "none"

    const options = {
        method: 'post',
        url: '/send-mensagem',
        data: {
            username: username_input.value,
            mensagem: mensagem_input.value
        }
    }

    mensagem_input.value = ""
    await axios(options)
    .then(e => console.log('OK'))
    .catch(e => console.log(e))
    .finally(e => document.querySelector('#form_mensagem').style.display = "block");
});

window.Echo.channel('chat')
    .listen('.mensagem', (e) => {
        mensagens_el.innerHTML += '<div class="mensagem"><strong>' + e.username + ' :</strong> ' + e.mensagem 
        + '</div>';
    });