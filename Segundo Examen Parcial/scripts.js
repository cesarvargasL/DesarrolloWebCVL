//Para pregunta 1
function cargarMenu() {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "botones.html", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("menu").innerHTML = ajax.responseText;
            document.getElementById("mensaje").textContent = 'César Luis Vargas Lezano     CU:35-5303';
            document.getElementById('mensaje').style.textAlign = 'center';
            document.getElementById('mensaje').style.fontSize = '1.5rem';;
        }
    };
    ajax.send();
}

// Para pregunta 2
function cargarGaleria() {
    fetch('galeria.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('menu').innerHTML = data;
            const botonesImagen = document.getElementsByClassName('imagen-boton');
            for (let i = 0; i < botonesImagen.length; i++) {
                botonesImagen[i].addEventListener('click', function() {
                    mostrarImagen(this.dataset.imagen, this.dataset.nombre);
                });
            }
        });
}

function mostrarImagen(imageUrl, imageName) {
    
    document.getElementById('principal').innerHTML = `<img src="${imageUrl}" style="width: 500px; height: 500px;" />`;
    document.getElementById('mensaje').textContent = imageName;
    document.getElementById('mensaje').style.textAlign = 'center';
    document.getElementById('mensaje').style.fontSize = '1.5rem';
}

// Para la pregunta 3
function pregunta3() {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", 'login.php', true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById('principal').innerHTML = ajax.responseText;
            document.getElementById('menu').innerHTML = '';
            document.getElementById('mensaje').innerHTML = '';
        }
    }
    ajax.send();
}
//para la cuatro
function pregunta4() {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", 'listar.php', true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById('principal').innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}
//Para el ejercicio 5
function pregunta5() {
    fetch('datos.php')
        .then(response => response.json())
        .then(data => {
            const select = document.createElement('select');
            select.id = 'libros';
            select.style.height = '30px'; 
            select.style.marginBottom = '5px'; 
            data.forEach(libro => {
                const option = document.createElement('option');
                option.value = libro.imagen;
                option.textContent = libro.titulo;
                select.appendChild(option);
            });

            const imagen = document.createElement('img');
            imagen.id = 'imagen-libro';
            imagen.src = 'images/' + select.value;
            imagen.style.width = '200px'; 
            imagen.style.height = 'auto';

            const principal = document.getElementById('principal');
            principal.innerHTML = '';
            principal.style.display = 'flex';
            principal.style.flexDirection = 'column'; 
            principal.style.alignItems = 'center';
            principal.style.justifyContent = 'center';
            principal.appendChild(select);
            principal.appendChild(imagen);

            select.addEventListener('change', function() {
                imagen.src = 'images/' + this.value;
            });
        });
}