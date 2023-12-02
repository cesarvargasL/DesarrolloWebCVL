document.querySelector('#menu .btn-preguntas button:nth-child(3)').addEventListener('click', function() {
    fetch('pregunta2.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('contenido').innerHTML = data;
        });
});


/*document.getElementById('insertar').addEventListener('click', function() {
    fetch('alumnos.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('contenido').innerHTML = data;
        });
});*/

document.querySelectorAll('.eliminar').forEach(button => {
    button.addEventListener('click', function() {
        fetch('eliminar.php')
            .then(() => {
                location.reload();
            });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.btn-materias').forEach(function(item) {
        item.addEventListener('click', function() {
            const materia = this.textContent;
            console.log('Materia seleccionada:', materia);

            fetch(`horarios.php?materia=${materia}`)
                .then(response => response.text())
                .then(data => {
                    console.log('Datos recibidos:', data)
                    document.getElementById('contenido').innerHTML = data;
                });
        });
    });
});