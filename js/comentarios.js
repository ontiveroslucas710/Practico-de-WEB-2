"use strick"

let path = window.location.pathname;
let api = 'api';
let comentario = path.substring(19, path.lastIndexOf('/')+1)
let ultimoNumero = path.substring(path.lastIndexOf('/')+1)
let agregarComentario = "agregarComentario";

const borrarComentario = 'api/borrarComentario';
let body = document.getElementById("appearsComments");
let tableNoComments= document.getElementById("noCommets");

function getComentarios() {
    fetch(api+"/"+comentario+ultimoNumero)
        .then(function (r) {
            if (!r.ok) {//si la respuesta no es ok
                noComments();
            }else if(r.ok){//si esta todo bien dame json
                return r.json()
            }
        })
        .then(comentarios => showComentarios(comentarios))
        .catch(error => console.log(error));
}

function showComentarios(comentarios){  
    for(let coment of comentarios){
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
            console.log("no se pudo borrar el elemento")
        }else if(r.ok){
            return r.json()
        }
    }).then(function () {
        showComentarios();
    }).catch(function (e) {
        console.log(e)
    })
}
function addComentario() {
    let data = {
        comentarios: 'comentario desde javascript',
        puntaje: 5,
        id_coment_pantalon: 24
    }
    fetch(api+"/"+agregarComentario, {
        "method": "POST",
        "headers": { "Content-Type": "application/json" },
        "body": JSON.stringify(data)
    }).then(function (r) {
        if (!r.ok) {
            console.log("error")
        }
        return r.json()
    })
        .then(function (json) {
            getComentarios(json);
        })
        .catch(function (e) {
            console.log(e)
        })
}


function noComments(){
    tableNoComments.innerHTML="";
    tableNoComments.innerHTML="No hay comentarios aun"
}

function limpiarTabla() {
    body.innerHTML = "";
}

getComentarios();

