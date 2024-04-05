// Descipción: Estilos JS que permiten cargar archivos png, jpg y jpeg en "Mi Perfil"

document.getElementById('fileInputBtn').addEventListener('click', function() {
    document.getElementById('fileInput').click();
});

document.getElementById('fileInput').addEventListener('change', function() {
    // Aquí puedes agregar el código para manejar los archivos seleccionados (BACKEND)
    // Por ejemplo, cargar los archivos a través de una solicitud AJAX o mostrar una vista previa
    console.log('Archivos seleccionados:', this.files);
});
