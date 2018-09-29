"use strict"

// Get the modal
document.querySelectorAll('.botonBorrar').forEach(e=> {
  e.addEventListener('click', a=> {
    let id_Borrar = e.getAttribute('name');
    let descripcion_Borrar = e.getAttribute('data-name');
    document.querySelector('#que_borro').innerHTML = descripcion_Borrar;
    document.querySelector('#btn_Confirmar').href = 'borrarVehiculo/' + id_Borrar;
    modal_Confirma_Cancela.style.display = "block";
  })
});

// Get the button that opens the modal
let btn = document.getElementById("myBtn");
let modal_Confirma_Cancela = document.getElementById('myModal');
// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal

// When the user clicks on <span> (x), close the modal
document.querySelectorAll('.modal_Confirma_Cancela_close').forEach(e=>{

  e.addEventListener('click', a=> {
    modal_Confirma_Cancela.style.display = "none";
  });
});

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal_Confirma_Cancela) {
        modal_Confirma_Cancela.style.display = "none";
    }
}


//Modal Categoria

document.querySelectorAll('.botonBorrarCat').forEach(e=> {
  e.addEventListener('click', a=> {
    let id_Borrar = e.getAttribute('name');
    let descripcion_Borrar = e.getAttribute('data-name');
    document.querySelector('#que_borroCat').innerHTML = descripcion_Borrar;
    document.querySelector('#btn_ConfirmarCat').href = 'borrarCategoria/' + id_Borrar;
    modal_Confirma_CancelaCat.style.display = "block";
  })
});

let modal_Confirma_CancelaCat = document.getElementById('myModalCat');
// Get the <span> element that closes the modal
let spanCat = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal

// When the user clicks on <span> (x), close the modal
document.querySelectorAll('.modal_Confirma_Cancela_close').forEach(e=>{

  e.addEventListener('click', a=> {
    modal_Confirma_CancelaCat.style.display = "none";
  });
});

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal_Confirma_CancelaCat) {
        modal_Confirma_CancelaCat.style.display = "none";
    }
}
