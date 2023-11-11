function iniciarJuego() {
  var turno = "X";
  var casillas = document.getElementsByTagName("td");
  var divTurno = document.getElementById("turno");

  for (var i = 0; i < casillas.length; i++) {
    casillas[i].addEventListener("click", function() {
      if (this.innerHTML === "") {
        this.innerHTML = turno;
        if (turno === "X") {
          turno = "O";
        } else {
          turno = "X";
        }
        divTurno.innerHTML = "Turno: " + turno;
      } else {
        alert("La casilla esta ocupada");
      }
    });
  }
}

function iniciarTabla() {
  var boton = document.getElementById("tabla");
  boton.addEventListener("click", function() {
      var numero = document.getElementById("numero").value;
      var rango = document.getElementById("rango").value;
      var resultado = document.getElementById("Resultado");
      var operacion;
      if (document.getElementById("suma").checked) {
          operacion = "+";
      } else if (document.getElementById("resta").checked) {
          operacion = "-";
      } else if (document.getElementById("multiplicacion").checked) {
          operacion = "*";
      } else if (document.getElementById("division").checked) {
          operacion = "/";
      }
      resultado.innerHTML = "";
      for (var i = 1; i <= rango; i++) {
          var res;
          switch (operacion) {
              case "+":
                  res = numero + i;
                  break;
              case "-":
                  res = numero - i;
                  break;
              case "*":
                  res = numero * i;
                  break;
              case "/":
                  res = numero / i;
                  break;
          }
          resultado.innerHTML += numero + " " + operacion + " " + i + " = " + res + "<br>";
      }
  });
}


function manejarRespuestaLibros(libros) {
  var select = document.getElementById("selectLibros");
  var divImagen = document.getElementById("imagenLibro");

  libros.forEach(function (libro, index) {
    var option = document.createElement("option");
    option.value = index;
    option.text = libro.titulo;
    select.appendChild(option);
  });

  divImagen.innerHTML = "<img src='images/" + libros[0].imagen + "'>";

  select.addEventListener('change', function() {
    divImagen.innerHTML = "<img src='images/" + libros[this.value].imagen + "'>";
  });
}

function manejarRespuestaLibrosOrdenar(libros) {
  libros.forEach(function(libro) {
    var titulo = libro.querySelector(".titulo-libro");
    titulo.addEventListener("click", function () {
      libros.sort(function(a, b) {
        var tituloA = a.querySelector(".titulo-libro").textContent;
        var tituloB = b.querySelector(".titulo-libro").textContent;
        return tituloA.localeCompare(tituloB);
      });
      var contenedorLibros = document.createElement('div');
      contenedorLibros.className = 'libros-flex';
      contenedorLibros.style.display = 'flex'; 
      contenedorLibros.style.flexWrap = 'wrap'; 
      contenedorLibros.style.justifyContent = 'space-around';
      contenedorLibros.style.gap = '1.5rem';
      libros.forEach(function(libroOrdenado) {
        var imagen = libroOrdenado.querySelector("img");
        imagen.style.width = '120px'; 
        imagen.style.height = '80px'; 
        contenedorLibros.appendChild(libroOrdenado);
      });
      var contenedor = document.getElementById("Contenido");
      contenedor.innerHTML = '';
      contenedor.appendChild(contenedorLibros);
    });
  });
}



