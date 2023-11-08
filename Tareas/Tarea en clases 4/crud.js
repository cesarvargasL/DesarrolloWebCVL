function inicio() {
    var operaciones = document.getElementById("operaciones");
    operaciones.innerHTML = "<h1>Bienvenidos a Alumnos 2023</h1>";
    var formulario = document.getElementById("formulario");
    formulario.style.display = "none";
}

function listar() {
    var operaciones = document.getElementById("operaciones");
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "crud.php?operacion=read", true);
    xhr.onload = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var respuesta = JSON.parse(xhr.responseText);
            var tabla = "<table><tr><th>Nombre</th><th>Apellido</th><th>CU</th></tr>";
            for (var i = 0; i < respuesta.length; i++) {
                tabla += "<tr><td>" + respuesta[i].nombre + "</td><td>" + respuesta[i].apellido + "</td><td>" + respuesta[i].cu + "</td></tr>";
            }
            tabla += "</table>";
            operaciones.innerHTML = tabla;
            var formulario = document.getElementById("formulario");
            formulario.style.display = "none";
        }
    };
    xhr.send();
}

function insertar() {
    var operaciones = document.getElementById("operaciones");
    operaciones.innerHTML = "";
    var formulario = document.getElementById("formulario");
    formulario.style.display = "flex";
}

function insertarAlumno() {
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var cu = document.getElementById("cu").value;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "crud.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            listar();
        }
    };
    xhr.send("operacion=create&nombre=" + nombre + "&apellido=" + apellido + "&cu=" + cu);
    return false;
}