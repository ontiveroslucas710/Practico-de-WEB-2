"use strict"


let numero = document.querySelector('input[name="idComentario"]').value;
const borrarComentario = 'api/borrarComentario';
const body = document.getElementById("appearsComments");
let tableNoComments= document.getElementById("noCommets");
let nombreUsuario = document.querySelector('input[name="usuarioConectado"]');

document.addEventListener('DOMContentLoaded', () => {
    getComentarios();
    document.getElementById("agregarComentario").addEventListener('submit', e => {
        e.preventDefault();
        addComentario();
    })
})

function getComentarios() {  
    fetch('api/comentario'+"/"+numero)
        .then(response => response.json())
        .then(comentarios => showComentarios(comentarios))
        .catch(error => console.log(error));
}

function showComentarios(comentarios){
    if(comentarios.length != 0){
        removeNoComments();
        limpiarTabla();
        for(let coment of comentarios){
            let boton = document.createElement("button");
            boton.innerText = "Borrar";
            let nodotr = document.createElement("tr");
            let nodotd1 = document.createElement("td");
            let nodotd2 = document.createElement("td");
            let nodotd3 = document.createElement("td");
            nodotd1.innerHTML = `${coment.comentarios}`;
            nodotd2.innerHTML = `${coment.puntaje}`;
            nodotr.id = coment.id;
            if(nombreUsuario != null){
                boton.addEventListener("click", e => eliminar(coment.id));            
                nodotr.appendChild(nodotd1);
                nodotr.appendChild(nodotd2);
                nodotd3.appendChild(boton);
                nodotr.appendChild(nodotd3);
            }else{
                nodotr.appendChild(nodotd1);
                nodotr.appendChild(nodotd2);
            }
            body.appendChild(nodotr);        
    }
    }else{
        noComments();
    }
}

function addComentario() {
    let comentario = document.querySelector('textarea[name="comentario"]');
    let puntaje = document.querySelector('select[name="puntaje"]');
    let id = document.querySelector('input[name="idDelComentario"]');
    if((comentario.value && puntaje.value) != ""){
        let data = {
            comentarios: comentario.value,
            puntaje: puntaje.value,
            id_coment_pantalon: id.value
        }
        fetch('api/comentario', {
            "method": "POST",
            "headers": { "Content-Type": "application/json" },
            "body": JSON.stringify(data)
        })
            .then(response => response.json())
            .then(function () {
                getComentarios()
            }).catch(function (e) {
                console.log(e)
            })
    }
}

function eliminar(id) {
    fetch(borrarComentario + "/"  + id, {
        "method": "DELETE",
        "mode": 'cors',
    })  .then(response => response.json())
        .then(function () {
            getComentarios();
    }).catch(function (e) {
        console.log(e)
    })
}

function noComments(){
    tableNoComments.classList.add("ocultar");
}
function removeNoComments(){
    tableNoComments.classList.remove("ocultar");
}

function limpiarTabla() {
    body.innerHTML = "";
}


