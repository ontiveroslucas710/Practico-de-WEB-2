"use strick"

const baseURL = 'api/comentario';
const borrarComentario = 'api/borrarComentario';
let body = document.getElementById("appearsComments");

function getComentarios() {
    fetch(baseURL)
        .then(response => response.json())
        .then(comentarios =>  showComentarios(comentarios))
        .catch(error => console.log(error));
}

function showComentarios(comentarios){
    for(let coment of comentarios) {
        let boton = document.createElement("button");
        boton.innerText = "Borrar";
        let nodotr = document.createElement("tr");
        let nodotd1 = document.createElement("td");
        let nodotd2 = document.createElement("td");
        let nodotd3 = document.createElement("td");
        nodotd1.innerText = `${coment.comentarios}`;
        nodotd2.innerText = `${coment.puntaje}`;
        nodotr.id = coment.id;
        boton.addEventListener("click", e => eliminar(coment.id));
        nodotr.appendChild(nodotd1);
        nodotr.appendChild(nodotd2);
        nodotd3.appendChild(boton);
        nodotr.appendChild(nodotd3);
        body.appendChild(nodotr);
    }
}

function eliminar(id) {
    fetch(borrarComentario + "/"  + id, {
        "method": "DELETE",
        "mode": 'cors',

    }).then(function (r) {
        if (!r.ok) {
            console.log("error")
        }
        return r.json()
    }).then(function () {
        showComentarios();
    }).catch(function (e) {
        console.log(e)
    })
}

function agregarComentario() {
    fetch(borrarComentario, {
        "method": "POST",
        "mode": 'cors',

    }).then(function (r) {
        if (!r.ok) {
            console.log("error")
        }
        return r.json()
    }).then(function () {
        showComentarios();
    }).catch(function (e) {
        console.log(e)
    })
}

function limpiarTabla() {
    body.innerHTML = "";
}

getComentarios();

