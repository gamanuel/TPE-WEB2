"use strict"

let btn_IniciarSesion_Registrarse = document.querySelector('#Boton_IniciarSesion_Registrarse');
btn_IniciarSesion_Registrarse.addEventListener('click', partialRender_Abrir_Modal_IniciarSesion_Registrarse);
let divContenedor_Modal_InicarSesion_Registrarse = document.querySelector('#container_Modal_IniciarSesion_Registrarse');

function partialRender_Abrir_Modal_IniciarSesion_Registrarse() {
  fetch('Modal-IniciarSesion.html').then(function (response) {
    response.text().then(e => {
      divContenedor_Modal_InicarSesion_Registrarse.innerHTML = e;
      let btn_Registrarse = document.querySelector('#boton_Registrarse');
      btn_Registrarse.addEventListener('click', partialRender_Modal_Registrarse);
    });
  });
};


function partialRender_Modal_Registrarse() {
  fetch('Modal-Registrarse.html').then(function (response) {
    response.text().then(e => {
      divContenedor_Modal_InicarSesion_Registrarse.innerHTML = e;
      let btn_Volver_Modal_Registro = document.querySelector('#boton_volver_modal_Registro');
      btn_Volver_Modal_Registro.addEventListener('click', partialRender_Abrir_Modal_IniciarSesion_Registrarse)
    });
  });
};


$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
