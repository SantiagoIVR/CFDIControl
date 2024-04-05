// Obtener las etiquetas <a> específicas
const aAll = document.querySelector(".submenu-a.datos");
const aPay = document.querySelector(".submenu-a.seguridad");

// Añadir estilos a los botones de pestaña en función de la vista para resaltar en qué vista está el usuario
function resaltarBoton(elemento) {
    elemento.classList.add("btn-activo");
}

// Quitar estilos de los botones de pestaña
function quitarResaltado() {
    aAll.classList.remove("btn-activo");
    aPay.classList.remove("btn-activo");
}

// Verificar si la URL actual contiene el fragmento que identifica la vista específica 
function verificarVista() {
    const urlActual = window.location.href;
    if (urlActual.includes("showmiperfil")) {
        quitarResaltado();
        resaltarBoton(aAll);
    } else if (urlActual.includes("showseguridad")) {
        quitarResaltado();
        resaltarBoton(aPay);
    }
}

// Llamar a la función para verificar la vista cuando se carga la página
verificarVista();
