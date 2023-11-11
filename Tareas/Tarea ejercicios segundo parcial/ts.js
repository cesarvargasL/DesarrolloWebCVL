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