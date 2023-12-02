document.getElementById('form-insertar').addEventListener('submit', function(e) {
    e.preventDefault();

    const cu = document.getElementById('cu').value;
    const nombres = document.getElementById('nombres').value;
    const apellidos = document.getElementById('apellidos').value;

    fetch('insertar.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `cu=${cu}&nombres=${nombres}&apellidos=${apellidos}`,
    })
    .then(() => {
        return fetch('pregunta2.php');
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('contenido').innerHTML = data;
    });
});